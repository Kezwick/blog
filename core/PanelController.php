<?php

namespace Core;


use Core\PanelView as View;
use Core\CategoryModel as Category;
use Core\ArticleModel as Article;
use Core\ServiceController as Serv;

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
        //$this->Auth() = new
    }

    public function dashboard()
    {
        $this->Article->lastArticle(3);
        $this->View->dashboard('Статистика', $this->Article->count(), $this->Category->count(), $this->Article->out);
    }


    public function showArticleList()
    {
        $this->Article->all();
        $this->View->articleList('Список статей', $this->Article->out, '');
    }
    public function articleAddForm()
    {
        $this->Category->findAll();

        $this->View->addArticle('Создать новую статью', '', $this->Category->out);
    }
    public function articleAdd()
    {
        $this->Article->articleAdd();

    }
    public function articleEditForm($id)
    {
        $this->Category->findAll();
        $this->Article->findById($id);
        $this->View->editArticle('Редактировать статью', $this->Article->out, $this->Category->out);
    }
    public function articleEdit()
    {
        $this->Article->articleEdit();

    }
    public function articleDelete()
    {
        $this->Article->articleDelete();

    }


    public function showCategoryList()
    {
        $this->Category->findAll();
        $this->View->categoryList('Список категорий', $this->Category->out);
    }
    public function categoryAddForm()
    {
        //$this->Category->findAll();

        $this->View->addCategory('Создать новую статью', '', '');
    }
    public function categoryAdd()
    {
        $this->Category->categoryAdd();

    }
    public function categoryEditForm($id)
    {
        $this->Category->findById($id);
        //$this->Article->findById($id);
        //Serv::dbg($this->Category->out);
        $this->View->editCategory('Редактировать категорию', $this->Category->out, '');
    }
    public function categoryEdit()
    {
        $this->Category->categoryEdit();

    }
    public function categoryDelete()
    {
        $this->Category->categoryDelete();

    }
}