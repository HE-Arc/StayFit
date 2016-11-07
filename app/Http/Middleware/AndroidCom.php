<?php
	if(isset($_POST) && !empty($_POST)){
		extract ($_POST);
		$db=mysql_connect('localhost','root','');
		mysql_select_db('stayfit',$db);
		$sql = "INSERT INTO users (name) VALUES ($name)";
		mysql_query($sql);
	}
?>