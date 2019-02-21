<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 20.02.19
 * Time: 13:01
 */

namespace Core;


class Model
{

    public static $db;

    public function __construct()
    {
        /*
         $link = mysqli_connect(
            DB_CONFIG['host'],  // Хост, к которому мы подключаемся
            DB_CONFIG['user'],       //Имя пользователя
            DB_CONFIG['password'],   // Используемый пароль
            DB_CONFIG['dbname']);    // База данных для запросов по умолчанию

        if (!$link) {
            printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
            exit;
        }*/
        $this->db = new mysqli(DB_CONFIG['host'], DB_CONFIG['user'], DB_CONFIG['password'], DB_CONFIG['dbname']);

        if (mysqli_connect_errno()) {
            printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
            exit;
        }


    }

    public function one()
    {

     return 'one';
    }
    public static function all($db)
    {
        if ($result = $db->query('SELECT * FROM Article ')) {



            /* Выбираем результаты запроса: */
            while( $row = $result->fetch_assoc() ){
                printf("%s (%s)\n", $row['title'], $row['intro']);
            }

            /* Освобождаем память */
            $result->close();
        }

        /* Закрываем соединение */
        $mysqli->close();


        return 'all';
    }
}