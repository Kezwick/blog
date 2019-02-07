
<?php
session_start();
require_once('../lib/func.php');?>
<!DOCTYPE html><html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <div class="clr"></div>
</div>

<section class="container">
    <div>
        <?php

        $username= checkAuth();
        //print_r($_SESSION);
        //echo 'username---->'.$username;
        if($username == false){
            showLoginForm();
            if(isset($_GET['commit'])){
                $login=$_GET['login'];
                $password=$_GET['password'];
                if($login=='user' && $password == 'user') {
                    $_SESSION['username']=$login;
                    showAlert('Привет '.$login);
                    goUri("/admin/index.php");
                }else{
                    showAlert('!!! -=Login or password INCORECT=- !!!!');
                    goUri("/admin/index.php");
                }
            }else{

            }
        }else{
            echo 'hi '.$_SESSION['username'];
            echo '<a href="/admin/logout.php">Выход</a>';
        }
        ?>
    </div>
</section>
</body>
</html>



