<?php 
include_once('controller/c_adhome.php');
include_once("model/m_aduser.php");
$chome= new c_AdHome();
$chome->index();

$cuser = new c_AdUser();
$cuser->getList1();


?>	