<?php 
session_start(); 

include_once('model/m_user.php');
include_once('model/dbconnect.php');

class c_User 
{
	function getAllEmail(){
		$sql = "SELECT Email FROM user";
		$this -> setQuery($sql);
		$result = $this->getAllRows();
		return $result;
	}
	function getAllUser(){
		$m_user=new m_User();
		$userlist= $m_user->getAllUser();
		$returnview=array('UserList'=>$userlist);
		return $returnview;
	}
	function register($name, $email, $pass)
	{
		$muser = new m_User();
		$id= $muser->register($name,$email,$pass);
		if($id>0){
			//registration is successful
			$_SESSION['user_name']=$name;
			if(isset($_SESSION['error']))
				unset($_SESSION['error']);
			header("location:index.php");
		}
		else
		{
			//registration is fail
			$_SESSION['error']='register fail';
			header("location:signup.php");
		}
	}
	function login($email,$pass){
		$muser= new m_User();
		$user= $muser->login($email,$pass);
		if($user){
			$_SESSION['user_name']=$user->Name;
			if(isset($_SESSION['user_error']))
				unset($_SESSION['user_error']);
			header("location:index.php");
		}
		else
		{
			$_SESSION['user_error']="login fail!";
			//header("location:signup.php");
		}
	}

	function logout(){
		if(isset($_SESSION['user_name']))
		{
			session_unset();
			session_destroy();
		}
	}
}

?>