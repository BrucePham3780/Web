<?php 
include('controller/c_adclass.php');
$cclass=new c_AdClass();
ob_start();
if(isset($_GET['action'])){
	$action= $_GET['action'];
	switch ($action){
		case 'delete':
		$id=$_GET['id'];
		$cclass->delClass($id);
		break;

		case 'update':
		$id=$_GET['id'];
		$cclass->getUpdateClass($id);
		break;

		case 'insert':
		$cclass->getInsertClass();
		break;
		
	}
}
else{
	$cclass->getList();
}

?>