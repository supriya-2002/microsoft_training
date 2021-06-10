<?php
include("config.php");
$result=mysqli_query($mysqli,"SELECT* from DaataValue");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Details</h1>
	<form action="fun.php" method="POST">
				Name<input type="text" name="name"><br><br>		
				Aadhaar<input type="text" name="aadhaar"><br><br>
				Adrees<input  type="text" name="adrees"><br><br>
				<input type="Submit" name="Submit"><br><br>
		
	</form>
	<table border="2">
		
		
		<?php
		echo "hai";
		while($res=mysqli_fetch_array($result))
		{
			echo '<tr>';
			echo '<td>'.$res['Name'].'</td>';
			echo '<td>'.$res['Aadhaar'].'</td>';
			echo '<td>'.$res['Adrees'].'</td>';
			echo '</tr>';
		}
		?>
	</table>

	
</body>
</html>