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
    public function getCategoryBySlug($slug)
    {
        $query = "SELECT * FROM " . $this->table." WHERE slug ='".$slug."' LIMIT 1";
        return $this->db->query($query);

    }

    public function findById($id)
    {
        $query = "SELECT * FROM " . $this->table . "  WHERE id = '$id' ";
        $result = $this->db->query($query);
        $this->out[] = $result->fetch_assoc();
        $result->close();
        $this->db->close();
    }


    public function categoryAdd()
    {
        if (isset($_POST['btncatadd']))
        {
            $name=$_POST['name'];
            $description=$_POST['description'];
            $slug = Serv::url_slug($name, array('transliterate' => true));
            //Serv::dbg($slug);
            $query = "INSERT INTO ".$this->table." (name, description, slug) VALUES ('$name', '$description', '$slug') ";
            //Serv::dbg($query);
            $result = $this->db->query($query);

            Serv::showAlert('ok');
            Serv::goUri('/admin/cat-list');
        }
        echo 'error';
    }

    public function categoryEdit()
    {
        if (isset($_POST['btncatedit']))
        {
            $id=$_POST['id'];
            $name=$_POST['name'];
            $description=$_POST['description'];

            $slug = Serv::url_slug($name, array('transliterate' => true));
            //Serv::dbg($slug);
            $query = " UPDATE ".$this->table.  " SET name='$name', description='$description', slug='$slug' WHERE id = '$id' ";

            Serv::dbg($query);
            $result = $this->db->query($query);
            //Serv::dbg($query);
            Serv::showAlert('ok');
            Serv::goUri('/admin/cat-list');
        }
        echo 'error';
    }

    public function categoryDelete()
    {
        if (isset($_POST['btncatdelete']))
        {
            $id=$_POST['btncatdelete'];
            //Serv::dbg($slug);
            $query = " DELETE FROM ".$this->table." WHERE id = '$id' ";
            //mysql_query(" blogEntry SET content = $udcontent, title = $udtitle WHERE id = $id");
            $result = $this->db->query($query);
            //Serv::dbg($query);
            Serv::showAlert('ok');
            Serv::goUri('/admin/cat-list');
        }
        echo 'error';
    }

}