<?php

		include 'global.php';
		global $server , $dbuser  , $dbpass , $dbname;
		
		$result1 = mysqli_connect($server, $dbuser, $dbpass, $dbname);
		if(!$result1)
		{
			echo "Connection Problem";
		}
		$dbselect = mysqli_select_db($result1 , $dbname);
	
	session_start();
	
	if(isset($_POST)&& !empty($_POST))	
	{
		function getNumFor($img_name)
		{
		global $result1;
		$query = "SELECT ans FROM correct_ans WHERE id='$img_name'";
		$res = mysqli_fetch_assoc(mysqli_query($result1,$query));
		return($res[$img_name]);
		}
		
		/*if ( $img_name == $_POST['number'] )
	{
		$_SESSION['result'] = $_SESSION['result']+1; 
		echo("<script>window.alert('Correct')</script>");
	}
	else 
	{
		echo("<script>window.alert('InCorrect')</script>");
	}
	
	echo("<script>window.location='test3.php'</script>");*/
	}

	
 ?>