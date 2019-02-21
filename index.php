<?php
@define('ABSPATH', str_replace('\\', '/', dirname(__FILE__)));
define('DB_HOST', '192.168.10.10');
define('DB_USER', 'homestead');
define('DB_PASSWORD', 'secret');
define('DB_DATABASE', 'homestead');

// загрузка автозагрузчика
require_once __DIR__.'/vendor/autoload.php';


/*
// место где будут хранятся шаблоны Twig
$loader = new Twig_Loader_Filesystem(__DIR__.'/views');

// инициализация самого движка
$twig = new Twig_Environment($loader);


echo $twig->render('blog/index.php', ['title' => 'Blog Home  WOW'] );
*/

/*


$model = new \Core\CoreModel();
echo  $model->findAll();


$view = new \Core\CoreView();
$view->index();*/

$article = new \Core\Article();
$article->ShowAllPost();

//print_r($article->result);
?>
