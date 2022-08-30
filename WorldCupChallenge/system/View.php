<?php

	class View{
		
		protected $data = array();
		
		protected $template = NULL;
		
		protected $view;
		protected $fileview;
		
		protected $parameter = array();
		
		protected $redirect;
		
		public function __construct($view, $template = DEFAULT_TEMPLATE){
			if(strpos($view,'redirect:')!==false){
				$this->redirect = PAGE_ROOT.str_replace("redirect:", "/", $view);
			} else {
				$fileview = SERVER_ROOT.str_replace("/", DIRECTORY_SEPARATOR, VIEWS_PATH.$view).'.php';
				if(file_exists($fileview)){
					$this->view = $view;
					$this->fileview = $fileview;
					if($template !== NULL) $this->template = new Template($template);
				}else throw new Exception('Error loading view '.$view);
			}
		}

		public function __render(){
			if(isset($this->redirect)){
				if(sizeOf($this->parameter) > 0){
					$_SESSION['params'] = $this->parameter;
				}
				$_SERVER['caay'] = 'asdasd';
				header("Location: ".$this->redirect);				
			}
			else echo $this->renderize();
		}
		
		private function renderize(){
			header('Content-type: text/html; charset=UTF-8');
			ob_start();
			extract($this->data);
			include $this->fileview;
			$view = ob_get_clean();
			if($this->template !== NULL){
				$this->template->data['view'] = $view;
				$view = $this->template->__render();
			}
			return $view;  
		}
		
		public function __toString(){
			return $this->view;
		}
		
		public function add($key, $value){
			$this->data[$key] = $value;
		}
		
		public function addTemplate($key, $value){
			if($this->template !== NULL){
				$this->template->data[$key] = $value;
			}
		}
		
		public function addParameter($key, $value){
			$this->parameter[$key] = $value;
		}
		
	}
	
	class JSONView extends View{
		
		public function __construct($json, $encode = true){
			if($encode == true) $json = json_encode($json);
			$this->view = $json;
		}
		
		public function __render(){
			header('Content-Type: application/json; charset=UTF-8');
			echo $this->view;
		}
	}
	
	class Template extends View{
		
		public $template = NULL;
		
		public function __construct($view){
			$fileview = SERVER_ROOT.str_replace("/", DIRECTORY_SEPARATOR, TEMPLATE_PATH.$view).'.php';
			if(file_exists($fileview)){
				$this->view = $view;
				$this->fileview = $fileview;
			}else throw new Exception('Error loading template '.$view);
		}
		
	}