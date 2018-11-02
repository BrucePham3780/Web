<?php

include("model/m_coach.php");
include("model/m_class.php");

class c_Home{
	function index(){
		$m_coach=new m_Coach();
		$coachlist= $m_coach->getAllCoach();
		$m_class=new m_Class();
		$classlist =$m_class->getAllClass();
		$returnview=array('CoachList'=>$coachlist,'ClassList'=>$classlist);
		return $returnview;
	}
} 
?>