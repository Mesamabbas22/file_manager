<?php

class database {
	private $pdo;
	public function __construct() {
		try{
			$this->pdo = new PDO('mysql:host=127.0.0.1;dbname=file_manager', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $this->pdo;
		}
		catch(PDOException $e) {
			echo " Connection Failed " . $e->getMessage();
		}
	}
}


