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
use Core\CategoryModel as Category;


class ArticleModel extends CoreModel
{
    public $title;
    public function titleToSlag()/// перенести в COreModel
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
        }


    }
    public function all()
    {
        $this->title =' All';
        $query = "SELECT * FROM " . $this->table . ' ORDER BY data DESC';
        $result = $this->db->query($query);
        //Serv::dbg($result->num_rows);

        // обрабатываем результат

        while ($d = $result->fetch_assoc()) {


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
        $this->out[] = $result->fetch_assoc();
        $result->close();
        $this->db->close();
    }

    public function findByCategory($slug)//править
    {
        //вызываем модель категорий
        $category = new Category('category');
        //ищем категорию по слагу
        $cat = $category->findUsingSlug($slug);
        $this->title = $cat['name'];
        //Serv::dbg($cat);//смотрим что прилетел  массив
        $query = "SELECT * FROM " . $this->table . "  WHERE cat_id = '".$cat['id']. "'";
        $result = $this->db->query($query);
        // обрабатываем результат
        $this->out=array();
        while ($d = $result->fetch_assoc())
        {
            $this->out[] = $d;
        }
        $result->close();
        $this->db->close();
    }
}