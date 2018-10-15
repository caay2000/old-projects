<?php

	class ReservaService extends Service{
		
		private $em;
		
		function __construct(){
			$this->em = Database::getEntityManager();
		}
		
		public function getTotesReservesRestants(){
			$reservats = array();
			
			$sql = "SELECT * FROM Reserva WHERE hasta >= now()-1";
			$conn = $this->em->getConnection();
			$query = $conn->query($sql)->fetchAll();
			foreach($query as $row){
				$r = new Reserva();
				$r->id = $row['id'];
				$r->id_apartament = $row['id_apartament'];
				$r->desde = date_create_from_format('Y-m-d H:i:s', $row['desde']);
				$r->hasta = date_create_from_format('Y-m-d H:i:s', $row['hasta']);
				$r->persona = $row['persona'];
				$reservats[$row['id_apartament']][] = $r;
			}
			return $reservats;
		}
		
		public function getReservesRestantsByApartament($id){
			$total = array();
			$reservats = array();
			$entrades = array();
			$sortides = array();
			
			$sql = sprintf("SELECT * FROM Reserva WHERE hasta >= now()-1 AND id_apartament = %d", $id);
			$conn = $this->em->getConnection();
			$query = $conn->query($sql)->fetchAll();
			foreach($query as $row){
				$evitar_primer = true;
				$desde = date_create_from_format('Y-m-d H:i:s', $row['desde']);
				$hasta = date_create_from_format('Y-m-d H:i:s', $row['hasta']);
				$total['entrades'][] = date_format($desde, 'd-m-Y');
				$total['sortides'][] = date_format($hasta, 'd-m-Y');
				while($desde < $hasta){
					if($evitar_primer) $evitar_primer = false;
					else $reservats[] = date_format($desde, 'd-m-Y');
					$desde->add(new DateInterval('P1D'));
				}
			}
			$total['reserves'] = array_merge($reservats, $this->afegirSolapats($id));
			return $total;
		}
		
		
		private function afegirSolapats($id){
			$reservats = array();
			$sql = sprintf("SELECT r1.hasta AS data FROM Reserva r1, Reserva r2 WHERE " .
					"r1.hasta >= now()-1 AND DATE_FORMAT(r1.hasta, @format) = DATE_FORMAT(r2.desde, @format) " .
					"AND r1.id_apartament = %d AND r1.id_apartament = r2.id_apartament", $id);
			$sql = str_replace("@format", "'%Y-%m-%d'", $sql);
			$conn = $this->em->getConnection();
			$query = $conn->query($sql)->fetchAll();
			foreach($query as $row){
				$data = date_create_from_format('Y-m-d H:i:s', $row['data']);
				$reservats[] = date_format($data, 'd-m-Y');
			}
			return $reservats;
		}
		
		public function getReservesRestants(){
			$total = array();
			$reservats = array();
			$entrades = array();
			$sortides = array();
				
			$sql = sprintf("SELECT * FROM Reserva WHERE hasta >= now()-1");
			$conn = $this->em->getConnection();
			$query = $conn->query($sql)->fetchAll();
			foreach($query as $row){
				$evitar_primer = true;
				$id = $row['id_apartament'];
				$desde = date_create_from_format('Y-m-d H:i:s', $row['desde']);
				$hasta = date_create_from_format('Y-m-d H:i:s', $row['hasta']);
				$total['entrades'][$id][] = date_format($desde, 'd-m-Y');
				$total['sortides'][$id][] = date_format($hasta, 'd-m-Y');
				while($desde < $hasta){
					if($evitar_primer) $evitar_primer = false;
					else $reservats[$id][] = date_format($desde, 'd-m-Y');
					$desde->add(new DateInterval('P1D'));
				}
			}
			foreach($reservats as $apt=>$reserva){
				$total['reserves'][$apt] = array_merge($reserva, $this->afegirSolapats($apt));
			}
			return $total;
		}
		
		public function esborrarReserva($id){
			$obj = $this->em->find('Reserva', $id);
			if($obj !== null){
				$this->em->remove($obj);
				$this->em->flush($obj);
			}
		}
		
		public function getApartamentsReservats($from, $to){
			
			$from = explode("/", substr($from, strlen($from)-10));
			$to = explode("/", substr($to, strlen($to)-10));
			$desde = $from[2].'-'.$from[1].'-'.$from[0].' 00:00:00';
			$hasta = $to[2].'-'.$to[1].'-'.$to[0].' 00:00:00';
			
			$reservats = array();
			$sql = "SELECT DISTINCT id_apartament FROM Reserva WHERE " .
				"(( '".$desde."' >= desde AND '".$desde."' < hasta) OR " .
				"('".$hasta."' >desde AND '".$hasta."' <= hasta )) " .
				"OR ('".$desde."' < desde AND '".$hasta."' > hasta) " .
				"OR ('".$desde."' = desde AND '".$hasta."' = hasta)";

			$conn = $this->em->getConnection();
			$query = $conn->query($sql)->fetchAll();
			foreach($query as $row){
				$reservats[] = $row['id_apartament'];
			}

			return $reservats;
		}
		
		public function saveReserva($apt, $from, $to, $persona){
			$from = explode("/", substr($from, strlen($from)-10));
			$to = explode("/", substr($to, strlen($to)-10));
			$desde = $from[0].'-'.$from[1].'-'.$from[2];
			$hasta = $to[0].'-'.$to[1].'-'.$to[2];

			$r = new Reserva();
			$r->id_apartament = $apt;
			$r->desde = DateTime::createFromFormat('d-m-Y', $desde);
			$r->hasta = DateTime::createFromFormat('d-m-Y', $hasta);
			$r->persona = $persona;

			$this->em->persist($r);
			$this->em->flush($r);
			
			return $r->id;			
		}
	
		
		public function getPreu($id_apt, $pax){
			$preu = $this->em->getRepository('Preu')->findOneBy(array('id_apt' => $id_apt, 'pax' => $pax));
			return $preu;			
		} 
		
		public function save($obj){
			if($obj !== null){
				$this->em->persist($obj);
				$this->em->flush($obj);
			}
		}
		
		public function getPreus(){
			$array = array();
			$sql = "SELECT * FROM Preu ORDER BY id ASC";
			$conn = $this->em->getConnection();
			$query = $conn->query($sql)->fetchAll();
			foreach($query as $preu){
				$array[$preu['id_apt']][$preu['pax']] = $preu;
			}
			return $array;
		}
		
		public function getPreusApartament($id){
			$array = array();
			$sql = sprintf("SELECT * FROM Preu WHERE id_apt = %d ORDER BY id ASC", $id);
			$conn = $this->em->getConnection();
			$query = $conn->query($sql)->fetchAll();
			foreach($query as $preu){
				$array[$preu['pax']] = $preu;
			}
			return $array;
		}
		
		public function getPreusDesde(){
			$sql = "SELECT DISTINCT id_apt, MIN(preu_7_baixa) as preu1, MIN(preu_3_baixa) as preu2 FROM Preu p1 GROUP BY id_apt";
			$conn = $this->em->getConnection();
			$query = $conn->query($sql)->fetchAll();
			foreach($query as $preu){
				$array[$preu['id_apt']] = min($preu['preu1'], $preu['preu2']);
			}
			return $array;
		}
		
		public function getDetalls(){
			$array = array();
			$sql = "SELECT * FROM Detall ORDER BY id ASC";
			$conn = $this->em->getConnection();
			$query = $conn->query($sql)->fetchAll();
			foreach($query as $detall){
				$array[$detall['id_apartament']] = $detall;
			}
			return $array;
		}
			
		public function getDetallsApartament($id_apt){
			$detall = $this->em->getRepository('Detall')->findOneBy(array('id_apartament' => $id_apt));
			return $detall;
		}
		
		public function getOferta(){
			$array = array();
			$sql = "SELECT * FROM Oferta ORDER BY id ASC";
			$conn = $this->em->getConnection();
			$query = $conn->query($sql)->fetchAll();
			foreach($query as $oferta){
				$array[$oferta['id_apartament']] = $oferta;
			}
			return $array;
		}
			
		public function getOfertaApartament($id_apt){
			$oferta = $this->em->getRepository('Oferta')->findOneBy(array('id_apartament' => $id_apt));
			return $oferta;
		}
		
	}