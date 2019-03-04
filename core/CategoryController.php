<?php
namespace Core;

use Core\CategoryModel as Model;
//use Core\ArticleView as View;
use Core\ServiceController as Serv;

class CategoryController
{
    public $Model;
    //public $View;
    public $result;//?????
    public function __construct()
    {
        $this->Model= new Model('category');
        //$this->View = new View();
    }

    public function ShowAllCategory()
    {
        $this->Model->all();
        $this->result=$this->Model->out;
        $this->View->all($this->result);
    }
    public function lol()
    {

        $this->Model->nameToSlag();
    }

    public function getCategoryFromSlug($slug)
    {
        $slug=$this->Model->db->real_escape_string($slug);
       // $category=$this->Model->getIdCategory($slug);
        $category=$this->Model->findUsingSlug($slug);
        if ($category->num_rows == 0)
        {
            Serv::showAlert('Нет такой категории. Иди лесом умник :)');
            Serv::goUri("/");
        } else {
            while($cat = $category->fetch_assoc()) {
                //Serv::dbg($cat);
                echo $cat['name'] . " = " . $cat['slug'];
                return $cat;
            }
        }

    }

}