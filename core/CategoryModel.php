<?php
namespace Core;

use Core\CoreModel ;
use Core\ServiceController as Serv;

class CategoryModel extends CoreModel
{
    //public  $table="category";???

    public function __construct()
    {
        $this->db = new \mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
        $this->db->set_charset("utf8");/////
        $this->table = 'category';//???
    }

    public function nameToSlag()
    {
        $query = "SELECT * FROM " . $this->table;


        $result = $this->db->query($query);


        // обрабатываем результат

        while ($d = $result->fetch_assoc())
        {

            if ($d['slug'] == null) {
                $d['slug'] = Serv::url_slug($d['name'], array('transliterate' => true));
                $qu1= " UPDATE ". $this->table." SET slug ='".$d['slug']. "' WHERE id=".$d["id"].";" ;

                Serv::dbg($d["id"]);
                $res = $this->db->query($qu1);
            }


            //

        }


    }
}