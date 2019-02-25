<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.02.19
 * Time: 14:20
 */

namespace Core;
use Core\CoreModel ;


class ArticleModel extends CoreModel
{
    public function all()
    {
        $query = "SELECT * FROM " . $this->table . ' ORDER BY data DESC';

        $result = $this->db->query($query);


        // обрабатываем результат

        while ($d = $result->fetch_assoc()) {

            /*echo '<pre>';
            print_r($d);
            echo '</pre>';*/


            $this->out[] = $d;

        }
        // закрываем входной поток
        $result->close();
        // закрываем соединение с MySQL
        $this->db->close();


        //return $this->out;

    }

    public function findById($id)
    {
        $query = "SELECT * FROM " . $this->table . "  WHERE id = '$id' ";

        $result = $this->db->query($query);


        // обрабатываем результат

        $this->out[] = $result->fetch_assoc();
        // закрываем входной поток
        /*echo '<pre>';
           print_r($this->out);
           echo '</pre>';*/
        $result->close();
        // закрываем соединение с MySQL
        $this->db->close();


    }
}