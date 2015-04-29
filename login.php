<?php 
require 'dbcon/dbcon.php';
include 'startsession.php';
if(isset($_POST['submit'])) 
{
	if(empty($_POST['username']) || empty($_POST['password']))
	{
		echo 'Username or password empty';
	}
	else 
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		//hasha pw
		//$pw = password_hash($password,PASSWORD_DEFAULT);
		$sql = $pdo->prepare("SELECT userPassword FROM users WHERE userName =:a");
		$sql->setFetchMode(PDO::FETCH_ASSOC);
		$sql->bindParam(':a',$username,PDO::PARAM_STR);
		$sqlpassword = $sql->execute();
		$count = $sql->rowCount();
		//ná í passið í db
		if($count == 1)
		{
			if ($password == $sqlpassword) 
			{
			    $_SESSION['login_user'] = $username;
			    header("Location: index.php");
			} 
			else {
			    echo 'Invalid password.';
			}
		}
		else 
		{
			echo 'User does not exist';
		}
	}
}
?>
