<?php 
include_once("model/dbconnect.php");
class m_AdCoach extends DbConnect{
	public function getAllCoach()
	{
		$sql = "SELECT * FROM coach";
		$this -> setQuery($sql);
		$result = $this->getAllRows();
		return $result;
	}
	public function delCoach($id){
		$sql ="DELETE FROM coach WHERE coachId=?";
		$this->setQuery($sql);

		$result = $this->execute(array($id));
		//print_r($result->rowCount());
		if($result)
			return $result->rowCount();
		else
			return false;
	}
	public function insertCoach($name,$image,$detail){
		$sql = "INSERT INTO coach(coachName,coachImage,coachDetail) VALUES(?,?,?)";
		$this->setQuery($sql);
		$result =$this->execute(array($name,$image,$detail));
		if($result)
			return $this->getLastInserted();
		else
			return false;

	}
	public function getOneCoach($id)
	{
		$sql = "SELECT * FROM coach WHERE coachId=?";
		$this->setQuery($sql);
		$result = $this->getOneRow(array($id));
		return $result;
	}

	public function updateCoach($name, $image ,$detail ,$id){
		$sql = 'UPDATE coach set coachName=?, coachImage=?, coachDetail=? WHERE coachId=?';
		$this->setQuery($sql);
		$result = $this->execute(array($name, $image, $detail, $id));
		if ($result) 
			return $result ->rowCount();
		else
			return false;
		
	}

}
?>