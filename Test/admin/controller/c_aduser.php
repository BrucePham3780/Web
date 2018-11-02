<?php 
include("controller/c_adrouter.php");
include_once("model/m_aduser.php");

class c_AdUser extends c_AdRouter
{
	public function getList()
	{
		$muser = new m_AdUser();
		$userlist = $muser -> getAllUser();
		$data= array('UserList'=>$userlist);
		$this->loadView('v_userman',$data);
	}
	

}

?>