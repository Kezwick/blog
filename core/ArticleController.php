<?php


namespace Core;

use Core\ArticleModel as Model;
use Core\ArticleView as View;
use Core\ServiceController;



class ArticleController
{
    public $Model;
    public $View;
    public $result;//?????
    public function __construct()
    {
        $this->Model= new Model('article');
        $this->View = new View();
    }

    public function ShowAllPost()
    {
        $this->Model->all();
        $this->result=$this->Model->out;
        $this->View->all($this->result);
    }

    public function showSinglePost($id)
    {
        $this->Model->findById($id);
        //$this->result=$this->Model->out;
        $this->View->single($this->Model->out);
    }

    public function showCategoryPost($slug)
    {
        $this->Model->findByCategory($slug);
    }

    public function lol()
    {
        $this->Model->titleToSlag();
    }


}