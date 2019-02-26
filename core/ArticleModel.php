<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.02.19
 * Time: 14:20
 */

namespace Core;
use Core\CoreModel ;
use Core\ServiceController as Serv;


class ArticleModel extends CoreModel
{
    public function titleToSlag()
    {
        $query = "SELECT * FROM " . $this->table;


        $result = $this->db->query($query);


        // обрабатываем результат

        while ($d = $result->fetch_assoc())
        {

            if ($d['slug'] == null) {
                $d['slug'] = Serv::url_slug($d['title'], array('transliterate' => true));
                $qu1= " UPDATE ". $this->table." SET slug ='".$d['slug']. "' WHERE id=".$d["id"].";" ;

                Serv::dbg($d["id"]);
                $res = $this->db->query($qu1);
            }


            //

        }


    }
    public function all()
    {
        $query = "SELECT * FROM " . $this->table . ' ORDER BY data DESC';

        $result = $this->db->query($query);
        echo '<pre>';
        print_r($result->num_rows);
        echo '</pre>';

        // обрабатываем результат

        while ($d = $result->fetch_assoc()) {

            if ($d['slug']==null){
                $d['slug']= Serv::url_slug($d['title'], array('transliterate' => true));
            }





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