<?php 
include_once("model/dbconnect.php");
class m_AdClass extends DbConnect{
	public function getAllClass()
	{
		$sql = "SELECT * FROM class";
		$this -> setQuery($sql);
		$result = $this->getAllRows();
		return $result;
	}
	public function delClass($id){
		$sql ="DELETE FROM class WHERE classId=?";
		$this->setQuery($sql);

		$result = $this->execute(array($id));
		//print_r($result->rowCount());
		if($result)
			return $result->rowCount();
		else
			return false;
	}
	public function insertClass($name,$image,$detail){
		$sql = "INSERT INTO class(className,classImage,classDetail) VALUES(?,?,?)";
		$this->setQuery($sql);
		$result =$this->execute(array($name,$image,$detail));
		if($result)
			return $this->getLastInserted();
		else
			return false;

	}
	public function getOneClass($id)
	{
		$sql = "SELECT * FROM class WHERE classId=?";
		$this->setQuery($sql);
		$result = $this->getOneRow(array($id));
		return $result;
	}

	public function updateClass($name, $image ,$detail ,$id){
		$sql = 'UPDATE class set className=?, classImage=?, classDetail=? WHERE classId=?';
		$this->setQuery($sql);
		$result = $this->execute(array($name, $image, $detail, $id));
		if ($result) 
			return $result ->rowCount();
		else
			return false;
		
	}

}
?>