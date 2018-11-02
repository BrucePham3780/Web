<?php 
include_once("model/m_register.php");
include_once('model/m_class.php');
class c_Register{


	public function getList()
	{
		$mregister = new m_Register();
		$registerlist = $mregister -> getAllRegister();
		$data= array('RegisterList'=>$registerlist);
		
	}
	
	public function getAllClass()
	{
		$mclass = new m_Class();
		$classlist = $mclass -> getAllClass();
		$data= array('ClassList'=>$classlist);
		
	}
	
	public function postInsertRegister($UserId,$classId,$DateTime){
		$mregister= new m_Register();
		$id=$mregister->postInsertRegister($UserId,$classId,$DateTime);
		if($id>0){
			header('location:register.php');
		}
		
	}
	

}

?>