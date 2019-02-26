<?php
/**
 * Created by PhpStorm.
 * User: MadHowl
 * Date: 20.02.2019
 * Time: 21:44
 */

namespace Core;


class CoreModel
{
    public $db;
    public $table;
    public $out=array();

    public  function  __construct($table)
    {
        $this->db = new \mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        $this->db->set_charset("utf8");/////
        $this->table = $table;
    }

    /**
     * @param $slug
     * @return bool|\mysqli_result
     */
    public function findUsingSlug($slug)
    {
        $query = "SELECT * FROM " . $this->table." WHERE slug ='".$slug."' LIMIT 1";
        return $this->db->query($query);

    }

    public function findAll()
    {
        $query = "SELECT * FROM ".$this->table;
        
        $result = $this->db->query($query);
        // обрабатываем результат

        while($d = $result->fetch_assoc()) {
        $this->out .= '<p>#' . $d['id'] . '<br>' . $d['title'] .'<br>'. $d['text'] . '<br>'.$d['intro'].'<br></p>' ;
        }
        // закрываем входной поток
        $result->close();
        // закрываем соединение с MySQL
        $this->db->close();

        return $this->out;
        
    }

}