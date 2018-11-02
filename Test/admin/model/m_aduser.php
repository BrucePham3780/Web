<?php
include_once('dbconnect.php');
class m_AdUser extends DbConnect
{
	public function register($name,$email,$pass){
	//the insert sql statement with ? parameter
		
		$sql2 = "SELECT Email FROM user WHERE Email=?";
		$this->setQuery($sql2);
		//before inserting to db must encrypt pass to md5
		//call the function execute with array as parameter
		if($sql2 == $email){
			return false;
		}
		else{
			$sql = "INSERT INTO user(Name,Email,Password) values(?,?,?)";
			$this->setQuery($sql);
			$result2 = $this-> execute(array($name,$email,md5($pass)));
		}

		
	}

	public function login($email, $md5pass){
		$sql = "SELECT * FROM user WHERE Email=? and Password=?";
		$this -> setQuery($sql);
		$result=  $this->getOneRow(array($email,$md5pass));
		return $result;
	}

	public function check($email){
	}

	public function getAllUser()
	{
		$sql = "SELECT * FROM user";
		$this -> setQuery($sql);
		$result = $this->getAllRows();
		return $result;
	}

	
}
?>


