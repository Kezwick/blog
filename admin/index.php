
<?php
session_start();
require_once('../lib/func.php');

        $username= checkAuth();
        //print_r($_SESSION);
        //echo 'username---->'.$username;
        if($username == false){
            //showLoginForm();
            include_once ('./view/login.php');
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
           /* echo 'hi '.$_SESSION['username'];
            echo '<a href="/admin/logout.php">Выход</a>';*/
           include_once ('./view/main.php');
        }
        ?>
    </div>
</section>
</body>
</html>



