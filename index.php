<?php

session_start();

include 'vue/entete.php';

include 'vue/menu.php';	

if(isset($_GET['ctl']))
{
	switch($_GET['ctl']){
		
			case '':
			 include 'controleur/ctl.php';
			 break;
			 
			 case '':
			 include 'controleur/ctl.php';
			 break;

			 case '':
				include 'controleur/ctl.php';
				break;
			 
		}
	
}
include 'vue/pied.php';

?>  