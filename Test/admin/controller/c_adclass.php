<?php 
include_once("controller/c_adrouter.php");
include_once("model/m_adclass.php");

class c_AdClass extends c_AdRouter
{
	public function getList()
	{
		$mclass = new m_AdClass();
		$classlist = $mclass -> getAllClass();
		$data= array('ClassList'=>$classlist);
		$this->loadView('v_classman',$data);
	}
	public function  delClass($id){
		$mclass = new m_AdClass();
		$mclass->delClass($id);
		header('location:classman.php');
	}
	public function getInsertClass(){
		$this->loadView('v_insertclass');
	}
	public function postInsertClass($name,$image,$detail){
		$mclass= new m_AdClass();
		$id=$mclass->insertClass($name,$image,$detail);
		if($id>0){
			header('location:classman.php');
		}
		
	}
	public function getUpdateClass($id)
	{
		$mclass= new m_AdClass();
		$class = $mclass->getOneClass($id);
		$data = array('class' => $class);
		$this->loadView('v_updateclass', $data);
	}

	public function postupdateClass($name, $image, $detail , $id){
		$mclass = new m_AdClass();
		$result = $mclass->updateClass($name, $image, $detail, $id);
		
			header('location:classman.php');
	}

}

?>