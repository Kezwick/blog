<?php
namespace Core;

use Core\CoreModel ;
use Core\ServiceController as Serv;

class CategoryModel extends CoreModel
{
    public function nameToSlag()
    {
        $query = "SELECT * FROM " . $this->table;
        $result = $this->db->query($query);
        while ($d = $result->fetch_assoc())
        {
            if ($d['slug'] == null) {
                $d['slug'] = Serv::url_slug($d['name'], array('transliterate' => true));
                $qu1= " UPDATE ". $this->table." SET slug ='".$d['slug']. "' WHERE id=".$d["id"].";" ;
                Serv::dbg($d["id"]);
                $res = $this->db->query($qu1);
            }
        }
    }

    /**
     * @param $slug
     * @return bool|\mysqli_result
     */
    public function getIdCategory($slug)
    {
        $query = "SELECT * FROM " . $this->table." WHERE slug ='".$slug."' LIMIT 1";
        return $this->db->query($query);

    }
}