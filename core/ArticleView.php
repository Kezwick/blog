<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.02.19
 * Time: 13:32
 */

namespace Core;
use Core\CoreView;


class ArticleView extends  CoreView
{
    public function index($articles)
    {
        echo $this->twig->render('blog/articles.php', ['title' => 'Blog Home  WOW','content'=>$articles] );
    }
}