<?php


namespace Core;

use Core\ServiceController as Serv;

class AuthClass
{
    public static function logIn(){
        //Serv::dbg($_POST());

        if (isset($_POST['btnLogin'])){
            $login=$_POST['login'];
            $password=$_POST['password'];
            Serv::dbg($login);
            if ($login=='1' && $password=='1'){
                $_SESSION['userName']=$login;
                Serv::showAlert('Welcome - '.$login);
                Serv::goUri('/admin/dashboard');
            }else{
                Serv::showAlert( 'Login or Password incorrect!');
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