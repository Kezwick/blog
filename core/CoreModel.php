<?php
/**
 * Created by PhpStorm.
 * User: MadHowl
 * Date: 20.02.2019
 * Time: 21:44
 */

namespace Core;

use Core\ServiceController as Serv;


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
     * нет экранирования!!!!!!!
     *
     * @param $slug
     *
     * @return bool|\mysqli_result
     */
    public function findUsingSlug($slug)
    {
        $query = "SELECT * FROM " . $this->table." WHERE slug ='".$slug."' LIMIT 1";
        $res = $this->db->query($query);
        return $res->fetch_assoc();

    }

    public function count()
    {
        $query="SELECT count(*) AS c FROM ".$this->table;
        $result = $this->db->query($query);
        $count = $result->fetch_object()->c;
        $result->free();
        $this->db->close();
        return $count;
    }

    public function findAll()
    {
        $query = "SELECT * FROM ".$this->table;

        //Serv::dbg($query);


        $result = $this->db->query($query);

        // обрабатываем результат
        //Serv::dbg($result);

        while($d = $result->fetch_assoc()) {
        $this->out[] = $d ;
        }
        return $this->out;

    }

}