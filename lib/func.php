<?php

function checkAuth(){
    if(isset($_SESSION['username']) && !empty ($_SESSION['username'])) {
    return true;
    }else{
        return false;
    }
}

function showLoginForm(){
    echo '<div class="login">
        <h1>Авторизация</h1>
        <form method="get" action="/admin/view/index.php">
            <p><input type="text" name="login" value="" placeholder="Логин"></p>
            <p><input type="password" name="password" value="" placeholder="Пароль"></p>
            <p class="submit"><input type="submit" name="commit" value="Войти"></p>
        </form></div>';
}

function goUri($uri){
    echo '<script language="JavaScript">
        document.location.href = \''.$uri.'\'</script>';
}

function showAlert($text){
    echo '<script language="JavaScript">
    alert( \''.$text.'\' );
</script>';
}