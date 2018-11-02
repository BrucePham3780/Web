<?php 
include_once("controller/c_adrouter.php");
include_once("model/m_aduser.php");

class c_AdHome extends c_AdRouter{
	public function index(){
		$this->loadView("v_index");
	}
	public function getList1()
	{
		$muser = new m_AdUser();
		$userlist = $muser -> getAllUser();
		$data= array('UserList'=>$userlist);
		$this->loadView('v_userman',$data);
	}
	
 
}
?>
