<?php
include_once('dbconnect.php');
class m_User extends dbconnect
{
	public function getAllUser()
	{
		$sql = "SELECT * FROM user";
		$this -> setQuery($sql);
		$result = $this->getAllRows();
		return $result;
	}
	public function register($name,$email,$pass){

	//the insert sql statement with ? parameter
		$sql = "INSERT INTO user(Name,Email,Password) values(?,?,?)";
		$this->setQuery($sql);
		//before inserting to db must encrypt pass to md5
		//call the function execute with array as parameter
		$result =$this->execute(array($name,$email,md5($pass)));
		if($result)
			return $this->getLastInserted();
		else
			return false;
		}
	

	public function login($email, $md5pass){
		$sql = "SELECT * FROM user WHERE Email=? and Password=?";
		$this -> setQuery($sql);
		$result=  $this->getOneRow(array($email,$md5pass));
		return $result;
	}

	public function getAllEmail(){
		$sql = "SELECT Email FROM user";
		$this -> setQuery($sql);
		$result = $this->getAllRows();
		return $result;
	}

}

?>



									
				
