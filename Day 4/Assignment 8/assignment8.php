<!-- Retrive the subscription data from the database into a table using HTMl and PHP...-->

<?php
include("a8.php");
$result=mysqli_query($mysqli,"SELECT* from information");

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Form 2</title>
	</head>
	<body>
	<table border="2">
		<?php
		while($res=mysqli_fetch_array($result))
		{
			echo '<tr>';
			echo '<td>'.$res['ID'].'</td>';
			echo '<td>'.$res['Email'].'</td>';
			echo '</tr>';
		}
		?>
	</table>
	</body>
</html>