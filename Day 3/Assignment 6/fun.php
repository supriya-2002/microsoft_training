<?php
	include("config.php");

		if(isset($_POST['Submit']))
		{
			$name=$_POST['name'];
			$aadhaar=$_POST['aadhaar'];
			$adrees=$_POST['adrees'];
			$result=mysqli_query($mysqli,"INSERT into DaataValue values('$name',
				'$aadhaar','$adrees')");
			if($result)
			{
				echo "Sucess";
			}
			else
			{
				echo "Failed";
			}
		}
		
	?>
