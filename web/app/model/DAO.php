<?php
//
//	class DAO{
//
//		private $conn;
//
//		function __construct($production = FALSE){
//			if($production){
//				define("dbserver", 'mysql.mirmolinaadvocats.com');
//				define("dbusr", 'mirmolinadbusr');
//				define("dbpsw", 'XXXXXX');
//				define("dbname", 'mirmolinadb');
//			} else {
//				define("dbserver", 'localhost');
//				define("dbusr", 'root');
//				define("dbpsw", '');
//				define("dbname", 'mirmolinadb');
//			}
//			$this->conn = new mysqli(dbserver, dbusr, dbpsw, dbname);
//		}
//
//
//		/* ENLACES */
//
//		public function insertEnlace($text, $nom, $mail){
//			//preparamos la consulta
//			$sql = "INSERT INTO enlace(texto, nombre, email) VALUES(?, ?, ?)";
//			$stmt = $this->conn->prepare($sql);
//
//			//evitamos que nos metan guarradas en la bd
//			$text = mysqli_real_escape_string($this->conn, $text);
//			$nom = mysqli_real_escape_string($this->conn, $nom);
//			$mail = mysqli_real_escape_string($this->conn, $mail);
//
//			//si falla la conexion con BD, lanzamos un error i no continuamos
//			if (!$stmt) throw new ErrorException($this->conn->error, $this->conn->errno);
//
//			//anyadimos los valores a los ? de la consulta
//			$stmt->bind_param('sss', $text, $nom, $mail);
//
//			//ejecutamo la consulta
//			$result = $stmt->execute();
//
//			//con esta instruccion, nos devuelve la id de la ultima insercion en BD
//			$id = mysqli_insert_id($this->conn);
//
//			//cerramos la conexion cn BD
//			$stmt->close();
//
//			//devolvemos la ID
//			return $id;
//		}
//
//		public function updateEnlace($id, $text, $nom, $mail){
//			//preparamos la consulta
//			$sql = "UPDATE enlace SET texto=?, nombre=?, email=? WHERE id=?";
//			$stmt = $this->conn->prepare($sql);
//
//			//evitamos que nos metan guarradas en la bd
//			$text = mysqli_real_escape_string($this->conn, $text);
//			$nom = mysqli_real_escape_string($this->conn, $nom);
//			$mail = mysqli_real_escape_string($this->conn, $mail);
//			$id = mysqli_real_escape_string($this->conn, $id);
//
//			//si falla la conexion con BD, lanzamos un error i no continuamos
//			if (!$stmt) throw new ErrorException($this->conn->error, $this->conn->errno);
//
//			//anyadimos los valores a los ? de la consulta
//			$stmt->bind_param('sssi', $text, $nom, $mail, $id);
//
//			//ejecutamo la consulta
//			$result = $stmt->execute();
//
//			//cerramos la conexion cn BD
//			$stmt->close();
//
//			//devolvemos la ID
//			return $id;
//		}
//
//		public function getEnlaces(){
//			//creamos la consulta
//			$sql = "SELECT * FROM enlace";
//			try{
//				//ejecutamos la consulta
//				$result = $this->query($sql);
//			}catch(Exception $e){
//				throw new BDException("Error al cercar l'enlace, no existeix");
//			}
//			//devolvemos el resultado
//			return $result;
//		}
//
//		public function getEnlaceById($id){
//			//creamos la consulta
//			$sql = "SELECT * FROM enlace WHERE id = ".$id;
//			try{
//				//ejecutamos la consulta
//				$result = $this->query($sql);
//			}catch(Exception $e){
//				throw new BDException("Error al cercar l'enlace, no existeix");
//			}
//			//devolvemos el resultado
//			return $result;
//		}
//
//		public function deleteEnlace($id){
//			//creamos la consulta
//			$sql = "DELETE FROM enlace WHERE id = ?";
//			$stmt = $this->conn->prepare($sql);
//			if (!$stmt) throw new ErrorException($this->conn->error, $this->conn->errno);
//			//añadimos los valores (id) a la consulta
//			$stmt->bind_param('i', $id);
//			//ejecutamos la consulta
//			$result = $stmt->execute();
//			//cerramos la conexion
//			$stmt->close();
//			return $result;
//		}
//
//		/* ACTUALIDADES */
//
//		public function insertActualidad($titulo, $texto, $pdf){
//
//			$file = new FileService();
//			$path = $file->uploadFile($pdf);
//
//			//preparamos la consulta
//			$sql = "INSERT INTO actualitat(titol, date, text, path) VALUES(?, now(), ?, ?)";
//			$stmt = $this->conn->prepare($sql);
//
//			//evitamos que nos metan guarradas en la bd
//			$titulo = mysqli_real_escape_string($this->conn, $titulo);
//			$texto = mysqli_real_escape_string($this->conn, $texto);
//
//			//limpiamos lso textos
//			$titulo = $this->cleanText($titulo);
//			$texto = $this->cleanText($texto);
//
//			//si falla la conexion con BD, lanzamos un error i no continuamos
//			if (!$stmt) throw new ErrorException($this->conn->error, $this->conn->errno);
//
//			//anyadimos los valores a los ? de la consulta
//			$stmt->bind_param('sss', $titulo, $texto, $path);
//
//			//ejecutamo la consulta
//			$result = $stmt->execute();
//
//			//con esta instruccion, nos devuelve la id de la ultima insercion en BD
//			$id = mysqli_insert_id($this->conn);
//
//			//cerramos la conexion cn BD
//			$stmt->close();
//
//			//devolvemos la ID
//			return $id;
//		}
//
//		public function getTotalActualidades(){
//			//creamos la consulta
//			$sql = "SELECT count(*) AS total FROM actualitat";
//			try{
//				//ejecutamos la consulta
//				$result = $this->query($sql);
//			}catch(Exception $e){
//				throw new BDException("Error al cercar l'actualitat, no existeix");
//			}
//			//devolvemos el resultado
//			return $result[0]['total'];
//		}
//
//		public function getActualidadesByPage($page, $num_not_page){
//			//creamos la consulta
//			$sql = "SELECT * FROM actualitat ORDER BY date DESC LIMIT ".$num_not_page." OFFSET ".($num_not_page*$page);
//			try{
//				//ejecutamos la consulta
//				$result = $this->query($sql, 'noticia');
//			}catch(Exception $e){
//				throw new BDException("Error al cercar l'actualitat, no existeix");
//			}
//			//devolvemos el resultado
//			return $result;
//		}
//
//		public function updateActualidad($id, $titulo, $texto){
//			//preparamos la consulta
//			$sql = "UPDATE actualitat SET titol=?, text=?  WHERE id=?";
//			$stmt = $this->conn->prepare($sql);
//
//			//evitamos que nos metan guarradas en la bd
//			$titulo = mysqli_real_escape_string($this->conn, $titulo);
//			$texto = mysqli_real_escape_string($this->conn, $texto);
//			$id = mysqli_real_escape_string($this->conn, $id);
//
//			//si falla la conexion con BD, lanzamos un error i no continuamos
//			if (!$stmt) throw new ErrorException($this->conn->error, $this->conn->errno);
//
//			//anyadimos los valores a los ? de la consulta
//			$stmt->bind_param('ssi', $titulo, $texto, $id);
//
//			//ejecutamo la consulta
//			$result = $stmt->execute();
//
//			//cerramos la conexion cn BD
//			$stmt->close();
//
//			//devolvemos la ID
//			return $id;
//		}
//
//		public function getActualidadById($id){
//			//creamos la consulta
//			$sql = "SELECT * FROM actualitat WHERE id = ".$id;
//			try{
//				//ejecutamos la consulta
//				$result = $this->query($sql, 'noticia');
//			}catch(Exception $e){
//				throw new BDException("Error al cercar l'actualitat, no existeix");
//			}
//			//devolvemos el resultado
//			return $result;
//		}
//
//		public function deleteActualidad($id){
//			//creamos la consulta
//			$sql = "DELETE FROM actualitat WHERE id = ?";
//			$stmt = $this->conn->prepare($sql);
//			if (!$stmt) throw new ErrorException($this->conn->error, $this->conn->errno);
//			//añadimos los valores (id) a la consulta
//			$stmt->bind_param('i', $id);
//			//ejecutamos la consulta
//			$result = $stmt->execute();
//			//cerramos la conexion
//			$stmt->close();
//			return $result;
//		}
//
//
//		/* UTILS */
//		public function close(){
//			$this->conn->close();
//		}
//
//		private function noticia($fila){
//			$fila['text'] = str_replace("\\n", "", $fila['text']);
//			$fila['text'] = str_replace("\\r", "", $fila['text']);
//			$fila['date'] = date("d / m / Y", strtotime($fila['date']));
//			return $fila;
//		}
//
//		private function cleanText($text){
//			$text = str_replace("\\n", "", $text);
//			$text = str_replace("\\r", "", $text);
//			if(stristr($text, "http://") == FALSE){
//				$text = str_replace("<a href=\"", "<a href=\"http://", $text);
//			}
//			return $text;
//		}
//
//		private function query($sql, $mapper=FALSE){
//			$return = array();
//			$result = mysqli_query($this->conn, $sql);
//			while(($fila = mysqli_fetch_array($result, MYSQLI_ASSOC)) !== null){
//				if($mapper){
//					$return[] = $this->$mapper($fila);
//				} else {
//					$return[] = $fila;
//				}
//
//			}
//			return $return;
//		}
//
//	}