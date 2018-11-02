<?php
class DBconnect{
	public $_db='';
	public $_sql='';
	public $_cursor='';
	public function DBconnect()
	{
		$this->_db=new PDO('mysql:host=localhost;dbname=fitness','root','');
		$this->_db->query('set names "utf8"');
	}
	public function setQuery($sql)
	{
		$this->_sql = $sql;
	}
	public function execute($options=array())
	{
		$this->_cursor=$this->_db->prepare($this->_sql);
		if($options)
			for($i=0; $i<count($options); $i++)
				$this->_cursor->bindParam($i+1, $options[$i]);
			$this->_cursor->execute();
			return $this->_cursor;
		}
	public function getAllRows($options=array())
	{
			if(!$options){
				if(!$result=$this->execute())
					return false;
			}else{
				if(!$result=$this->execute($options))
					return false;
			}
			return $result->fetchAll(PDO::FETCH_OBJ);
		}


	
	public function getOneRow($options=array()){
		if(!$options){
			if(!$result=$this->execute())
				return false;
		}else{
			if(!$result=$this->execute($options))
				return false;
		}

		return $result->fetch(PDO::FETCH_OBJ);

	}
	public function getLastInserted(){
		return $this->_db->lastInsertId();
	}
	public function disconnect(){
		$this->_db=null;
	}

}
?>