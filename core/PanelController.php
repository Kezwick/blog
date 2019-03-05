<?php

namespace Core;


use Core\PanelView as View;
use Core\CategoryModel as Category;
use Core\ArticleModel as Article;

class PanelController
{
    public $Model;
    public $View;
    public $Category;
    public $Article;


    public function __construct()
    {
        $this->Category = new Category('category');
        $this->View = new View();
        $this->Article = new Article('Article');
    }

    public function dashboard()
    {
        //$this->Article->all();
        $this->View->dashboard('Статистика', $this->Article->out, '');
    }
    public function showArticleList()
    {
        $this->Article->all();
        $this->View->articleList('Список статей', $this->Article->out, '');
    }

    public function articleAdd()
    {
        $this->Category->findAll();

        $this->View->addArticle('Создать новую статью', '', $this->Category->out);
    }

    public function articleAdd1()
    {
        $this->Article->articleAdd();

    }

    public function articleEdit($id)
    {
        $this->Category->findAll();
        $this->Article->findById($id);
        $this->View->editArticle('Редактировать статью', $this->Article->out, $this->Category->out);
    }
    public function articleEdit1()
    {
        $this->Article->articleEdit();

    }public function articleDelete()
    {
        $this->Article->articleDelete();

    }
}