<?php
/**
 * Created by PhpStorm.
 * User: MadHowl
 * Date: 20.02.2019
 * Time: 21:45
 */

namespace Core;

use Vendor\twig;

class CoreView
{
    public $loader;     // место где будут хранятся шаблоны Twig
    public $twig;       // инициализация самого движка

    public function __construct()
    {

        $this->loader = new \Twig_Loader_Filesystem(ABSPATH.'/views');
        //echo $loader;

        $this->twig = new \Twig_Environment($this->loader,['autoescape' => false]);
        //echo $twig;
    }

    public function index()
    {
        echo $this->twig->render('blog/articles.php', ['title' => 'Blog Home  WOW'] );
    }





}