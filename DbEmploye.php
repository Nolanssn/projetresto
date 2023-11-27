<?php
require_once "MysqlDb.php";

class DbEmploye{

	public static function getAllEmploye(){
		$sql = "select * from employe";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchAll(); // tableau
		return $tabResult;
	}
	
	public static function getUnEmploye($x){
		$sql = "select * from employe where id = $x";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetch(); // tableau
		return $tabResult;
		
		
	}
	
	public static function addEmploye(){
		
	}
	public static function updateEmploye(){
		
	}
	public static function deleteEmploye($id){
		$sql = "delete from employe where id = $id";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->exec($sql); //objet classe PDOStatement

	}
		
}

?>