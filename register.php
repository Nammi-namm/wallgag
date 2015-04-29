<?php 
require 'dbcon/dbcon.php';
if(isset($_POST['submit'])) {

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$againpassword = $_POST['retype-password'];

if($username !='' && $email !='' && $password !='')
{
	if($password != $againpassword)
	{
		echo 'Passwords do not match';
	}
	else 
	{
	$sql = $pdo->prepare("SELECT username from user WHERE username=:hold");
	$sql->setFetchMode(PDO::FETCH_ASSOC);
	$sql->bindParam(':hold',$username,PDO::PARAM_STR);
	$sql->execute();

	if($sql->rowCount() == 1)
	{
		echo 'Username is taken, pick again';
		
	}

	else 
	{
			$pw = password_hash($password,PASSWORD_DEFAULT);
			$sql = "INSERT INTO users(userEmail,userName,userPassword) VALUES (:a,:b,:c)";
			$go = $pdo->prepare($sql);
			$go->bindParam(':a',$email,PDO::PARAM_STR);
			$go->bindParam(':b',$username,PDO::PARAM_STR);
			$go->bindParam(':c',$pw,PDO::PARAM_STR);
			$go->execute();
			$count = $go->rowCount();
			if($count == 1) { 
			    $_SESSION['login_user'] = $username;
			    header("Location: index.php");
			}
			else 
			{
					echo 'some kind of error';
			}
	}

	}
}

else 
{
	echo 'You Didnt Fill The Form';
	
}

}

?>