<?php 
include_once("model/dbconnect.php");
class m_Register extends DbConnect{
	public function getAllRegister()
	{
		$sql = "SELECT * FROM register";
		$this -> setQuery($sql);
		$result = $this->getAllRows();
		return $result;
	}
	
	
	public function postInsertRegister($UserId,$classId,$DateTime){
		$sql = "INSERT INTO register(UserId,classId,DateTime) VALUES(?,?,?)";
		$this->setQuery($sql);
		$result =$this->execute(array($UserId,$classId,$DateTime));
		if($result)
			return $this->getLastInserted();
		else
			return false;

	}
	

}
?>