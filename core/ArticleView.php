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
    public function all($articles)
    {
        echo $this->twig->render('blog/articles.php', ['title' => 'Blog Home  WOW','articles'=>$articles] );
    }
    public function single($articles)
    {
        echo $this->twig->render('blog/single.php', ['title' => 'Blog Home  WOW25','articles'=>$articles] );
    }
}