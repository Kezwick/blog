<?php
@define('ABSPATH', str_replace('\\', '/', dirname(__FILE__)));
require_once ('./config/db.php');
// загрузка автозагрузчика
require_once __DIR__.'/vendor/autoload.php';

use NoahBuscher\Macaw\Macaw;







Macaw::get('/', 'Core\ArticleController@ShowAllPost');

Macaw::get('/admin/', 'Core\PanelController@dashboard');
Macaw::get('/admin/dashboard', 'Core\PanelController@dashboard');
Macaw::get('/admin/article-list', 'Core\PanelController@showArticleList');
Macaw::get('/admin/article-add', 'Core\PanelController@articleAdd');
Macaw::get('/admin/article-edit/(:num)', 'Core\PanelController@articleEdit');


Macaw::get('page', 'Core\ArticleController@lol');// auto slug
Macaw::get('article/(:num)', 'Core\ArticleController@showSinglePost');
Macaw::post('/admin/articleadd', 'Core\PanelController@articleAdd1');
Macaw::post('/admin/articleedit', 'Core\PanelController@articleEdit1');
Macaw::post('/admin/article-delete/', 'Core\PanelController@articleDelete');

Macaw::get('cat', 'Core\CategoryController@lol');//autoslug

Macaw::get('cat/(:any)', 'Core\ArticleController@showCategoryPost');


Macaw::dispatch();
?>
