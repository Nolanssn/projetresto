<?php

class MySqlDb{
	private static $dsn = 'mysql:dbname=entreprise;host=localhost';
	private static $user = 'root';
	private static $pwd = 'root';
	
	private static $objPdoDb;
	
	//constructeur
	private function __construct(){}
	
	//méthode d'accès
	public static function getPdoDb(){
		if(!self::$objPdoDb){
			self::$objPdoDb = new PDO(self::$dsn,self::$user,self::$pwd);
		}
		return self::$objPdoDb;		
	}
}


?>
