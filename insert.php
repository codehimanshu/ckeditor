<?php
	require_once 'db_connect.php';
	if(isset($_POST["submit"]))
	{
		$title=$_POST["title"];
		$content=$_POST["content"];
		$query=mysql_query("INSERT INTO data VALUES ('','$title','$content')",$link) or die(mysql_error());
		if($query)
			header("Location:view.php");
		else
			echo "ERROR !! Contact Admini";	
	}
	else
		header("Location:index.php");

?>