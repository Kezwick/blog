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

    public function articleAdd()
    {
        if (isset($_POST['btnartadd']))
        {
            $title=$_POST['title'];
            $cat_id=$_POST['cat_id'];
            $intro=$_POST['intro'];
            $text=$_POST['text'];
            $slug = Serv::url_slug($title, array('transliterate' => true));
            Serv::dbg($slug);
            $query = "INSERT INTO ".$this->table." (title, cat_id, slug, intro, text) VALUES ('$title', '$cat_id', '$slug',  '$intro','$text' ) ";
            $result = $this->db->query($query);
            //Serv::dbg($query);
            Serv::showAlert('ok');
            Serv::goUri('/admin/article-list');
        }
        echo 'error';
    }

    public function articleEdit()
    {
        if (isset($_POST['btnartedit']))
        {
            $title=$_POST['title'];
            $cat_id=$_POST['cat_id'];
            $id=$_POST['id'];
            $intro=$_POST['intro'];
            $text=$_POST['text'];
            $slug = Serv::url_slug($title, array('transliterate' => true));
            //Serv::dbg($slug);
            $query = " UPDATE ".$this->table.  " SET title='$title', cat_id='$cat_id', slug='$slug', intro='$intro', text='$text' WHERE id = '$id'  ";
            //mysql_query(" blogEntry SET content = $udcontent, title = $udtitle WHERE id = $id");
            $result = $this->db->query($query);
            //Serv::dbg($query);
            Serv::showAlert('ok');
            Serv::goUri('/admin/article-list');
        }
        echo 'error';
    }

    public function articleDelete()
    {
        if (isset($_POST['btnartdelete']))
        {
            $id=$_POST['btnartdelete'];
            //Serv::dbg($slug);
            $query = " DELETE FROM ".$this->table." WHERE id = '$id' ";
            //mysql_query(" blogEntry SET content = $udcontent, title = $udtitle WHERE id = $id");
            $result = $this->db->query($query);
            //Serv::dbg($query);
            Serv::showAlert('ok');
            Serv::goUri('/admin/article-list');
        }
        echo 'error';
    }

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