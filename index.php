<?php 
	session_start();
?>
<html>
	<head>
		<title>Enter Form Data</title>
		<style>
			label{
				display: inline-block;
				width: 20em;
			}
			.error{
				border: 3px solid red;
			}
		</style>
	</head>
	<body>
		<h1>Enter Form Data</h1>
		<!--  
			the $_SESSION variable is an associative array 
			then in this case each element of that array is its an associative array 
			having two properties -- one for the value and one if it's valid (true or false)
			if what was entered is not valid add the error class 
		-->
		<form action="handler.php" method="post" name="frmInfo">
		<label for="txtID">La Salle ID:</label><input type="text" name="txtID"
		value="<?php if(isset($_SESSION['txtID'])){echo $_SESSION['txtID']['value'];} ?>" 
		<?php if(isset($_SESSION['txtID']) && !$_SESSION['txtID']['valid']){echo "class='error'";} ?>
		/><br />
		
		<label for="txtUName">Username:</label><input type="text" name="txtUName"
		value="<?php if(isset($_SESSION['txtUName'])){echo $_SESSION['txtUName']['value'];} ?>" 
		<?php if(isset($_SESSION['txtUName']) && !$_SESSION['txtUName']['valid']){echo "class='error'";} ?>
		/><br />
		
		<label for="txtCourse">Course:</label><input type="text" name="txtCourse"
		value="<?php if(isset($_SESSION['txtCourse'])){echo $_SESSION['txtCourse']['value'];} ?>" 
		<?php if(isset($_SESSION['txtCourse']) && !$_SESSION['txtCourse']['valid']){echo "class='error'";} ?>
		/><br />
		
		<label for="txtRL">Room Location:</label><input type="text" name="txtRL"
		value="<?php if(isset($_SESSION['txtRL'])){echo $_SESSION['txtRL']['value'];} ?>" 
		<?php if(isset($_SESSION['txtRL']) && !$_SESSION['txtRL']['valid']){echo "class='error'";} ?>
		/><br />
		
		<input type="submit" value="Submit" />
		</form>
	</body>
</html>
