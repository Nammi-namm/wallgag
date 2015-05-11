<?php 
try{
	$source ='mysql:host=localhost;dbname=bennispenni_picturebase';
	$user = 'bennispenni';
	$password ='password';

	$pdo = new PDO($source,$user,$password);
}
catch (PDOExeption $e){
	echo "Connection fail". "<br>".$e->getMessage();
}
?>
