<?php
	$user=$_POST['user'];
	$passWord=$_POST['passWord'];
	$arr=array("user"=>$user,"passWord"=>$passWord);
	echo json_encode($arr);
?>