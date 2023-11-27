<?php
include 'connectPdo.php';

class DbService{
	
	public static function getListeService()
	{
		$sql = "select * from service ";		
		$objResultat = connectPdo::getObjPdo()->query($sql);	
		$result = $objResultat->fetchAll();
		return $result;
	}
	public static function supprimerService($id)
	{
		$sql = "delete from from service where id=$id ";		
		connectPdo::getObjPdo()->exec($sql);	
		
	}
	
}

?>