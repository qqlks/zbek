<?php
	$user=$_GET['user'];
	$passWord=$_GET['passWord'];
	$arr=array("user"=>$user,"passWord"=>$passWord);
	echo json_encode($arr);
?>