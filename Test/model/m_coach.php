<?php 
include("model/dbconnect.php");
class m_Coach extends DbConnect{
	public function getAllCoach(){
		$sql = "SELECT*FROM coach";
		$this->setQuery($sql);
		$result=$this->getAllRows();
		return $result;
	}
}
?>
