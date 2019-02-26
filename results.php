<?php 
	extract($_POST);
	include_once("dbconnect.php");
	$sql = "SELECT * FROM openart where sno='$slno' and roll='$rollno'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
	<style type="text/css">
		body, html {
  			height: 100%;
		}

		body { 
		  /* The image used */
		  background-image: url("splash.jpeg");

		  /* Full height */
		  height: 100%; 

		  /* Center and scale the image nicely */
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;
		}
		h2{
			text-align: center;
			font-family: 'Permanent Marker', cursive;
			font-size: 200%;
			margin-bottom: 0;
			padding-bottom: 0;
		}
		h1{
			text-align: center;
			font-family: 'Permanent Marker', cursive;
			font-size: 400%;
			margin-top: -12px;
			padding-top: 0;
			margin-bottom: 0;
		}
		table{
			margin-left: 15%;
			font-family: sans-serif;
			font-size: 150%;
		}
		p{
			font-size: 200%;
			margin-top: 7%;
			text-align: center;

		}
		span{
			font-weight: bold;
			font-style: italic;
			font-family: "Lucida Calligraphy";
			font-size: 150%;
			text-decoration: underline;
		}
	</style>
</head>
<body >
	<p>
		<?php
		if (is_null($row)) {
		echo("Sorry.. you did not participated");
		}
		else{
		?>
	</p>
	<h2>CERTIFICATE OF</h2>
	<h1>PARTICIPATION</h1>
	<table>
		<tr>
			<td>Splash 2K19/Serial number </td>
			<td>:</td>
			<td><?php echo $row['sno']; ?></td>
		</tr>
		<tr>
			<td>Roll number </td>
			<td>:</td>
			<td><?php echo $row['roll']; ?></td>
		</tr>
	</table>
	<p>
		This is to certify that<br/>
		<span><?php echo $row['name']; ?> </span><br/>
		has participated in the event of <br/>
		<span><?php echo $row['event'] ?></span><br/>
		in OPEN ART COMPETITION <b>Splash</b> 2K19
	</p><br><br>
	<table style="width: 100%; text-align: center; padding: 0; margin: 0;">
		<tr>
			<td>
				signature 1
			</td>
			<td>
				signature 2
			</td>
		</tr>
	</table>
	<?php 
		}
	 ?>
</body>
</html>