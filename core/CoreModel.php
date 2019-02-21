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
    public $out;

    public  function  __construct()
    {
        $this->db = new \mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        $this->db->set_charset("utf8");/////
        $this->table = 'Article';
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
    public function all()
    {
        $query = "SELECT * FROM ".$this->table;

        $result = $this->db->query($query);
        $this->out=$result;
        // обрабатываем результат
/*
        while($d = $result->fetch_assoc()) {
            $this->out .= '<p>#' . $d['id'] . '<br>' . $d['title'] .'<br>'. $d['text'] . '<br>'.$d['intro'].'<br></p>' ;
        }*/
        // закрываем входной поток
        $result->close();
        // закрываем соединение с MySQL
        $this->db->close();

        //return $this->out;

    }
}