<?php 

class Model {
	private $localhost = '127.0.0.1:3308';
	private  $username = 'root';
	private $password ='';
	private $database ='foodorder';


	public function connect(){
		$dsn = 'mysql:host='.$this->localhost.';dbname='.$this->database;
		$pdo = new PDO($dsn,$this->username,$this->password);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
		return  $pdo;
	}
	
}