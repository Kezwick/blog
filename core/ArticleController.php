<?php
namespace Core;

use Core\ArticleModel as Model;
use Core\ArticleView as View;
use Core\ServiceController as Serv;
use Core\CategoryModel as Categoty;



class ArticleController
{
    public $Model;
    public $View;
    public $Category;

    public function __construct()
    {
        $this->Model= new Model('Article');
        $this->Category= new Categoty('category');
        $this->View = new View();
    }

    public function ShowAllPost()
    {
        $this->Model->all();
        $this->View->all($this->Model->title, $this->Model->out, $this->Category->findAll());
    }

    public function showSinglePost($id)
    {
        $this->Model->findById($id);
        $this->View->single($this->Model->out);
    }

    public function showCategoryPost($slug)
    {
        $this->Model->findByCategory($slug);
        $this->View->all($this->Model->title, $this->Model->out, $this->Category->findAll());
    }

    public function lol()
    {
        $this->Model->titleToSlag();
    }


}