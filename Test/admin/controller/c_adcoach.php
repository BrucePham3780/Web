<?php 
include("controller/c_adrouter.php");
include_once("model/m_adcoach.php");

class c_AdCoach extends c_AdRouter
{
	public function getList()
	{
		$mcoach = new m_AdCoach();
		$coachlist = $mcoach -> getAllCoach();
		$data= array('CoachList'=>$coachlist);
		$this->loadView('v_coachman',$data);
	}
	public function  delCoach($id){
		$mcoach = new m_AdCoach();
		$mcoach->delCoach($id);
		header('location:coachman.php');
	}
	public function getInsertCoach(){
		$this->loadView('v_insertcoach');
	}
	public function postInsertCoach($name,$image,$detail){
		$mcoach= new m_AdCoach();
		$id=$mcoach->insertCoach($name,$image,$detail);
		if($id>0){
			header('location:coachman.php');
		}
		
	}
	public function getUpdateCoach($id)
	{
		$mcoach= new m_AdCoach();
		$coach = $mcoach->getOneCoach($id);
		$data = array('coach' => $coach);
		$this->loadView('v_updatecoach', $data);
	}

	public function postupdateCoach($name, $image, $detail , $id){
		$mcoach = new m_AdCoach();
		$result = $mcoach->updateCoach($name, $image, $detail, $id);
		
			header('location:coachman.php');
	}

}

?>