<?php
    session_start();
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if($user == "Kamal@123" && $pass == "123456"){
        setcookie('loginDemo',$user,time()+60*60);
        $_SESSION['login'] = $user;
        
        header("location:admin.php");
    }
    else{
        echo("Cheack your Inputs");
    }
?>