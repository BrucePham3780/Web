<?php

session_start(); 
include_once('model/dbconnect.php');
include_once('model/m_user.php');


$m_user=new m_User();
$emailList = $m_user->getAllEmail();
$returnview=array('EmailList'=>$emailList);
$list = $returnview['EmailList'];

foreach ($list as $key ) {
	$arr[] = $key->Email;
}

    $email = $_POST['email'];
    //if emil not exist
    if(in_array($email,$arr)){
        // echo "Found";
    	$a['status'] = true;
    }
    
    else {
    	 $a['status'] = false;
    }
    				
    $arr = json_encode($a);
    // $m =  JSON.stringify($arr);
    die($arr);


?>

