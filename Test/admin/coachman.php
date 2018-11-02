<?php 
include('controller/c_adcoach.php');
$ccoach=new c_AdCoach();
ob_start();
if(isset($_GET['action'])){
	$action= $_GET['action'];
	switch ($action) {
		case 'delete':
			$id=$_GET['id'];
			$ccoach->delCoach($id);
			break;
		case 'update':
			$id=$_GET['id'];
			$ccoach->getUpdateCoach($id);
			break;
		case 'insert':
			$ccoach->getInsertCoach();
			break;	
	}
}
else{
	$ccoach->getList();
}

?>