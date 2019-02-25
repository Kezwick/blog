<?php
@define('ABSPATH', str_replace('\\', '/', dirname(__FILE__)));
require_once ('./config/db.php');
// загрузка автозагрузчика
require_once __DIR__.'/vendor/autoload.php';

use NoahBuscher\Macaw\Macaw;




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

//$article = new \Core\ArticleController();
//$article->ShowAllPost();
//$article->showSinglePost(2);
//print_r($article->result);


Macaw::get('/', 'Core\ArticleController@ShowAllPost');
Macaw::get('page', 'Core\ArticleController@lol');
Macaw::get('view/(:num)', 'Core\ArticleController@showSinglePost');

Macaw::dispatch();
?>
