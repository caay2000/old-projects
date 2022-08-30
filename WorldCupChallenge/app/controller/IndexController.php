<?php

  class IndexController extends Controller{
        
    private $em;
    
    function __construct(){
      $this->em = Database::getEntityManager();
    }
    
    function index(){
      $view = new View('index');
      $view->addTemplate('page', 'index');
      return $view;
    }
    
    function register(){
      if (new DateTime() > date_create_from_format('d-m-Y H:i', DATE_EXPIRE)){
        return new View("redirect:index?expired");
      }
      $view = new View('register');
      $view->addTemplate('page', 'register');
      
      $partidos = $this->em->getRepository('Partido')->findBy(array(), array('fecha'=>'asc'));
      $view->add('partidos', $partidos);
        
      $teams = $this->em->getRepository('Team')->findAll();
      $view->add('teams', $teams);
      
      return $view;
    }
    
    function register_save(){
      try{
        $user = new User();
        $user->username = $_POST['user'];
        $user->email = $_POST['email'];
        $user->password = md5($_POST['psw']);
        $user->pagado = false;
        
        $this->em->persist($user);
        $this->em->flush($user);
        
        $partidos = $this->em->getRepository('Partido')->findBy(array(), array('fecha'=>'asc'));
        foreach($partidos as $partido){
          $p = new Pronostic();
          $p->user = $user;
          $p->partido = $partido;
          $p->result1 = $_POST['p'.$partido->id.'_result1'];
          $p->result2 = $_POST['p'.$partido->id.'_result2'];
          
          $user->pronostics->add($p);
          $this->em->persist($p);
          $this->em->flush($p);
        }
        
        $this->em->persist($user);
        $this->em->flush($user);
                
        return new View("redirect:classification?ok");
      }catch(Exception $e){
        return new View("redirect:register?error");
      }
    }
    
    function register_update(){
    	if(!isset($_SESSION['user'])) return new View('login');
    	try{
    		$user = $this->em->getRepository('User')->findBy(array('username'=>$_SESSION['user']));
    		$user = $user[0];
    		
    		$partidos = $this->em->getRepository('Partido')->findBy(array(), array('fecha'=>'asc'));
    		
    		foreach($user->pronostics as $p){
    			$p->result1 = $_POST['p'.$p->partido->id.'_result1'];
    			$p->result2 = $_POST['p'.$p->partido->id.'_result2'];
    			$this->em->persist($p);
    		}
    		$this->em->persist($user);
    		$this->em->flush();
    
    		return new View("redirect:user?ok");
    	}catch(Exception $e){
    		return new View("redirect:user?error");
    	}
    }
    
    function calendar(){
      $view = new View('calendar');
      $view->addTemplate('page', 'calendar');
      
      $users = $this->em->getRepository('User')->findBy(array('pagado'=>true), array('punts'=>'desc'));
      $view->add('users', $users);
      
      $partidos = $this->em->getRepository('Partido')->findBy(array(), array('fecha'=>'asc'));
      $view->add('partidos', $partidos);
      
      $teams = $this->em->getRepository('Team')->findAll();
      $view->add('teams', $teams);
      return $view;
    }
    
    function classification(){
      $view = new View('classification');
      $view->addTemplate('page', 'classification');
      
      $users = $this->em->getRepository('User')->findBy(array(), array('pagado' => 'desc', 'punts'=>'desc'));
      $view->add('users', $users);
      
      $partidos = $this->em->getRepository('Partido')->findBy(array(), array('fecha'=>'asc'));
      $view->add('partidos', $partidos);
        
      $teams = $this->em->getRepository('Team')->findAll();
      $view->add('teams', $teams);
        
      return $view;
    }
    
    function user(){
    	if(!isset($_SESSION['user'])) return new View('login');
    	if (new DateTime() > date_create_from_format('d-m-Y H:i', DATE_EXPIRE)){
    		return new View("redirect:index?expired");
    	}
    	$view = new View('user');
    	$view->addTemplate('page', 'user');
    
    	$user = $this->em->getRepository('User')->findBy(array('username'=>$_SESSION['user']));
    	 
    	$partidos = $this->em->getRepository('Partido')->findBy(array(), array('fecha'=>'asc'));
    	$view->add('partidos', $partidos);
    	 
    	$teams = $this->em->getRepository('Team')->findAll();
    	$view->add('teams', $teams);

    	$view->add('user', $user[0]);
    	 
    	return $view;
    }
    
    function login(){
      $view = new View('login');
      $view->addTemplate('page', 'login');
      return $view;
    }
    
    function login_check(){
      if($_POST['user'] === ADMIN_USER && $_POST['psw'] == ADMIN_PSW){
        $_SESSION['admin'] = true;
        return new View("redirect:admin");
      } else {
      	$user = $this->em->getRepository('User')->findBy(array(username=>$_POST['user'], password=>md5($_POST['psw'])));
      	if(sizeof($user) === 1){
      		$_SESSION['user'] = $_POST['user'];
      		return new View("redirect:user");
      	}
      }
      return new View("redirect:login?error");
    }
    
    function logout(){
      unset($_SESSION['admin']);
      unset($_SESSION['user']);
      session_destroy();
      return new View("redirect:index");
    }
    
    function admin(){
      if(!isset($_SESSION['admin'])) return new View('login');
      $view = new View('admin');
      $view->addTemplate('page', 'admin');
      
      $users = $this->em->getRepository('User')->findAll();
      $view->add('users', $users);
      
      $partidos = $this->em->getRepository('Partido')->findBy(array(), array('fecha'=>'asc'));
      $view->add('partidos', $partidos);
      
      $teams = $this->em->getRepository('Team')->findAll();
      $view->add('teams', $teams);
      
      return $view;
    }
    
//     function save_match(){
//       if(!isset($_SESSION['admin'])) return new View('login');
//       $match = new Partido();
//       $match->team1 = $this->em->getRepository('Team')->find($_POST['team1']);
//       $match->team2 = $this->em->getRepository('Team')->find($_POST['team2']);
//       $match->fecha = DateTime::createFromFormat('d/m/Y', $_POST['fecha']);
      
//       $this->em->persist($match);
//       $this->em->flush($match);

//       return new View("redirect:admin?match=".$match->id);
//     }
    
    function save_result(){
      if(!isset($_SESSION['admin'])) return new View('login');
      $match = $this->em->getRepository('Partido')->find($_POST['id']);
      $match->result1 = $_POST['result1'];
      $match->result2 = $_POST['result2'];
        
      $this->em->persist($match);
      $this->em->flush($match);
      
      $this->calculate_points();
    
      return new View("redirect:admin?match=".$match->id);
    }
    
    function save_pagar(){
      if(!isset($_SESSION['admin'])) return new View('login');
      $user = $this->em->getRepository('User')->find($_POST['id']);
      $user->pagado = true;
      
      $this->em->persist($user);
      $this->em->flush($user);
    
      return new View("redirect:admin?user=".$user->id);
    }
    
    function calculate(){
      if(!isset($_SESSION['admin'])) return new View('login');
    
      $this->calculate_points();
    
      return new View("redirect:admin?match");
    }
    
    function delete_database(){
      if(!isset($_SESSION['admin'])) return new View('login');
      $list = $this->em->getRepository('Pronostic')->findAll();
      foreach($list as $x){
        $this->em->remove($x);
      }
      $list = $this->em->getRepository('User')->findAll();
      foreach($list as $x){
        $this->em->remove($x);
      }
      $list = $this->em->getRepository('Partido')->findAll();
      foreach($list as $x){
        $x->result1 = NULL;
        $x->result2 = NULL;
        $this->em->persist($x);
      }
      
      $this->em->flush();
      return new View("redirect:index");
    }
    
    private function calculate_points(){
      $users = $this->em->getRepository('User')->findAll();
      $partidos = $this->em->getRepository('Partido')->findBy(array(), array('fecha'=>'asc'));
        
      foreach($users as $user){
        $user->punts = 0;
        foreach($user->pronostics as $p){
          if($p->partido->result1 !== null){
            
            $punt3 = $p->result1 > $p->result2 && $p->partido->result1 > $p->partido->result2 ||
                 $p->result1 < $p->result2 && $p->partido->result1 < $p->partido->result2 ||
                 $p->result1 == $p->result2 && $p->partido->result1 == $p->partido->result2;
            
            $punt1a = $p->result1 == $p->partido->result1;
            $punt1b = $p->result2 == $p->partido->result2;
            
            $p->punt3 = $punt3;
            $p->punt1a = $punt1a;
            $p->punt1b = $punt1b;
            $p->punt2 = $punt1a && $punt1b;
            
            $punts = 0;
            if($punt3){
              $punts = $punts + 3;
            }
            if($punt1a){
              $punts = $punts + 1;
            }
            if($punt1b){
              $punts = $punts + 1;
            }
            if($punt1a && $punt1b){
              $punts = $punts + 2;
            }
            
            $p->punts = $punts;
            $user->punts = $user->punts + $punts; 
            
            $this->em->persist($p);
          }
        }
        $this->em->persist($user);
        $this->em->flush();
      }
    }
    
  }
