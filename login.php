<?php
if(isset($_POST['sub'])){
	$username=$_POST['user'];
	$password=$_POST['pass'];
	$counter=true;
	$userFile = fopen("users.txt","r") or die("unable to open and read the file");
	$data=file("users.txt");
		foreach($data as $linebyline){
			$linebyline=rtrim($linebyline);
			list($user,$pass)=explode("\t",$linebyline);
			if($username==$user && $password==$pass){
				header("Location: index.php");
			}
		else{
			$counter = false;
		}
}
		if($counter ==false){
	
		if(empty($_POST['user'] && $_POST['pass'])){
				$result = '<div style="position:absolute; top:480px; left:560px; color:white; z-index:1;">* please enter all the required information</div>';
				echo $result;
			}
			 else if(empty($_POST['user'])){
				$result = '<div style="position:absolute; top:480px; left:560px; color:white; z-index:1;">* please enter username</div>';
				
				echo $result;
			}
			 else if(empty($_POST['pass'])){
				$result = '<div style="position:absolute; top:480px; left:560px; color:white; z-index:1;">* please enter password</div>';
				echo $result;
			}
					
			else{
				$result = '<div style="position:absolute; top:480px; left:560px; color:white; z-index:1;">* Invalid access. Please try again</div>';
				echo $result;
			}
}
fclose($userFile);
}
?>

<!doctype html>
<html>
<head>
	<title>
		User Login
	</title>
	<link rel="stylesheet" type="text/css" href="Login.css">
</head>
<body>
	<span class="title">Login Page</span>
	<div class ="form">	</div>
		<form action="#" method="POST">
		<input type="text" class="user" name="user" placeholder="  username">
		<input type="password" class="pass" name="pass" placeholder="  password">
		<a><input type="submit" class="sub" name="sub" value="Log in"></a>

</body>
</html>