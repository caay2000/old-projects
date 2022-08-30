<?php
class FileService{
	
	private $extensions = array("pdf");
	private $mimeTypes = array("text/pdf", "application/pdf");
	
	function __construct(){
	}
	
	public function uploadFile($file){
		$ok = $this->checkFile($file);
		if($ok === TRUE){
			$tmp_name = $file['tmp_name'];
			$tmp = substr($tmp_name, strrpos($tmp_name, 'php')+3, 4);
			move_uploaded_file($tmp_name, PDF_UPLOAD_PATH.$tmp.$file['name']);
			return $tmp.$file['name'];
		}
		return FALSE;
	}
	
	public function deleteFile($file){
		$result = FALSE;
		if(file_exists(PDF_UPLOAD_PATH.$file)){
			if(unlink(PDF_UPLOAD_PATH.$file)) $result = TRUE;
		}
		return $result;
	}
	
	private function checkFile($file){
		$name = explode(".", $file["name"]);	
		$ext = end($name);

		if (in_array($file["type"], $this->mimeTypes)
				&& $file["size"] < MAX_UPLOAD_SIZE
				&& in_array($ext, $this->extensions)
				&& $file["error"] == 0){
			return TRUE;
		}
		return FALSE;
	}

}