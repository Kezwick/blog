<?php
namespace Core;

use Core\CategoryModel as Model;
//use Core\ArticleView as View;
use Core\ServiceController;

class CategoryController
{
    public $Model;
    //public $View;
    public $result;//?????
    public function __construct()
    {
        $this->Model= new Model();
        //$this->View = new View();
    }

    public function ShowAllCategory()
    {
        $this->Model->all();
        $this->result=$this->Model->out;

        /*echo '<pre>';
        print_r($this->result);
           echo '</pre>';*/
        $this->View->all($this->result);
    }
    public function lol()
    {

        $this->Model->nameToSlag();
    }

    public function showCategoryPost($slug)
    {
        //$this->Model->getSlugCategory($id);
        $id=$this->Model->getIdCategory($slug);

    }

}