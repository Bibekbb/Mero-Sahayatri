<?php
if (isset($_POST['login'])){
	$err=[];

	//Validation Username

	if (isset($_POST['Username']) && !empty($_POST['Username']) && trim($_POST['Username']))
	{
		$Username= trim($_POST['Username']);
		if (strlen($Username) <4){
			$err['Username'] = 'Enter valid length: 8 Character';
		}
	}
	else{
		$err['Username'] = 'Enter Username';
	}
	//Validation Password
	if (isset($_POST['password']) && !empty($_POST['password'])){
		$password=$_POST['password'];
	}
	else{
		$err['password'] = 'Enter Password.';
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<h1>Hello,</h1>
	<h2>Sign to Continue...</h2>
	<form action="<? php echo $_SERVER['PHP_SELF'] ?>" method="post">
		<div class="new">
			<label>Username:</label>
			<input type="text" name="Username" placeholder="Enter Your Username" value="<?php echo isset ($Username)? $Username:''; ?>">
			<?php if (isset($err['Username']))
			{
				echo $err['Username'];

			} ?>
			<br>
			<label>Password:</label>
			<input type="Password" name="password" placeholder="Enter your Password">
			<?php if (isset($err['password']))
			{
				echo $err['password'];
			}
			?>
			<br>
			<button type="submit" name="login">Login</button>
		</div>
		
	</form>

</body>
</html>