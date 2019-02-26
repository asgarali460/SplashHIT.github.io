<!DOCTYPE html>
<html>
<head>
	<title>Results</title>
	<style type="text/css">
		body{
			background-color: #ddd;
			margin: 0;
		}
		form{
			margin-top: 7%;
			margin-left: 30%;
			margin-right: 30%;
			background-color: white;
			/*border: 4px solid red;*/
			padding: 5%;
			border-radius: 2%;
		}
		table{
			margin: 0;
		}
		tr{
			margin: 0;
		}
		td{
			margin: 0;
		}
		.ins{
			color:red;
			font-size: 16px;
			margin-bottom: -8%; 
		}
		.submit,.reset{
			background-color: lightgreen; 
			border: none;
			border-radius: 8px;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 20px;
			cursor: pointer;
		}
		input[type=textbox]{
			width: 135%;
			padding: 12px 20px;
 			margin: 8px 0;
 			border-left: 4px solid black;
 			font-size: 20px;
  			/*box-sizing: border-box;*/
		}
		input[type=textbox]:focus{
			outline: none;
		}
		footer{
			margin: 0;
			background-color: black;
			color: white;
			text-align: center;
			position: absolute;
			bottom: 0;
			width: 100%;
		}
	</style>
</head>
<body>
	<header>
	</header>
	<form action="results.php" method="post">
		<table>
			<tr>
				<td style="font-size: 150%">Roll number :</td>	
			</tr>
			<tr>
				<td>
					<input type="textbox" name="rollno" placeholder="Enter college roll number">
				</td>
			</tr>
			<tr>
				<td style="font-size: 150%">Serial number :</td>
			</tr>
			<tr>
				<td>
					<input type="textbox" name="slno"  placeholder="Enter your splash 2K19 serial number">
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit" class="submit">Result</button>
				</td>
				<td>
					<button type="reset" class="reset" style="float: right;">Reset</button>
				</td>
			</tr>
		</table>
		<p class="ins">
			To print the certificate<br>
			1. press CTRL + P <br>
			2.In setting select layout as landscape <br>
			3.In advanced setting uncheck Headers and Footers <br>
			4.check background images
		</p>
	</form>
	<footer>
		<p>
			&copy open art competition,splash 2K19<br>
			Contact us : asgarali460@gmail.com<br>
			Website developed and maintained by : SALIL KUMAR
		</p>
	</footer>
</body>
</html>