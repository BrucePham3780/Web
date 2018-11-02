<?php 
include_once("model/dbconnect.php");
class m_Class extends DbConnect{
	public function getAllClass(){
		$sql = "SELECT * FROM class";
		$this->setQuery($sql);
		$result = $this->getAllRows();
		return $result;
	}

}
?>
	