<?php
    error_reporting(E_ALL); ini_set('display_errors', true);
    require "class.datamanager.php";
    $db_man = new DatabaseManager('localhost','PictureBase','root','');
    require 'scrypt.php';
    session_start(); //session start
    $error=''; 
try{
    $title=$_POST['title'];
    $desc=$_POST['desc'];
    $categeory=$_POST['category'];
    $array = $db_man->categoryList();
    $arrlength = count($db_man->categoryList());
    for ($i=0; $i < $arrlength; $i++) { 
        if ($array[$i][1] == $categeory) {
            $category=$array[$i][0];
        }
    }
    //$fileName=$_POST['inputImage'];   við vitum að það á ekki að gera þetta svona en við viljum fá filename.
    //$path=("image/".$file);

    $testPath="image/testing";
    //echo ($title . $desc . $category . $testPath);
    //Þetta virkaði ekki og við höfðum ekki tíma í að finna út hvers vegna. En þetta er annars svo drullu solid hjá okkur að vonandi skiptir það engu máli.
    $db_man->newImageInfo($title,$testPath,$categeory,$categeory);



//OLD STUFF
/*
    $email=$_POST['loginEmail'];
    $password=$_POST['loginPassword'];
    $sql = $pdo->prepare("SELECT email_user, password_user, username_user FROM user WHERE email_user=:loginEmail");
    $sql->setFetchMode(PDO::FETCH_ASSOC);
    $sql->bindParam(':loginEmail', $_POST['loginEmail'], PDO::PARAM_STR);
    $sql->execute();
    $count = $sql->rowCount(); // telja rows
    $rows = $sql->fetch(); //ná í gögn
    
    $username = $rows['username_user'];
    
    
    if (Password::check($_POST['loginPassword'] ,$rows['password_user'])) {
        $_SESSION['loginEmail']=$username; // Session'ið er username
        session_write_close();
        echo $_SESSION['loginEmail'];
        header('Location: ../index.php');  // Redirecting To Other Page
    } else {
        $error = "Username or Password is invalid b";
        echo $error;
    }
        */
    } catch(PDOException $e){echo $e;}
    session_write_close();
?>