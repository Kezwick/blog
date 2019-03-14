<?php


namespace Core;

use Core\ServiceController as Serv;

class AuthClass
{
    public static  function logIn(){
        if (isset($_POST['btnLogin'])){
            $login=$_POST['login'];
            $password=$_POST['password'];
            if ($login=='user' && $password=='user'){
                $_SESSION['userName']=$login;
                Serv::showAlert('Welcom - '.$login);
                Serv::goUri('/admin/dashboard');
            }else{
                Serv::showAlert( 'Login or Password incorrect!!!');
            }
        }
    }
    public static function logOut()
    {
     unset($_SESSION['userName']);
     Serv::goUri('/admin/');

    }
    public static function checkAuth(){
        if (isset($_SESSION['userName'])&& !empty( $_SESSION['userName'])){
            return $_SESSION['userName'];
        }else{
            return false;
        }
    }

}