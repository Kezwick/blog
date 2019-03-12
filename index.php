<?php
@define('ABSPATH', str_replace('\\', '/', dirname(__FILE__)));
require_once ('./config/db.php');
// загрузка автозагрузчика
require_once __DIR__.'/vendor/autoload.php';

use NoahBuscher\Macaw\Macaw;







Macaw::get('/', 'Core\ArticleController@ShowAllPost');

Macaw::get('admin/', 'Core\PanelController@dashboard');
Macaw::get('/admin/dashboard', 'Core\PanelController@dashboard');
Macaw::get('/admin/article-list', 'Core\PanelController@showArticleList');
Macaw::get('/admin/article-add', 'Core\PanelController@articleAddForm');
Macaw::get('/admin/article-edit/(:num)', 'Core\PanelController@articleEditForm');


Macaw::get('page', 'Core\ArticleController@lol');// auto slug
Macaw::get('article/(:num)', 'Core\ArticleController@showSinglePost');
Macaw::post('/admin/articleadd', 'Core\PanelController@articleAdd');
Macaw::post('/admin/articleedit', 'Core\PanelController@articleEdit');
Macaw::post('/admin/article-delete/', 'Core\PanelController@articleDelete');

Macaw::get('/admin/cat-list', 'Core\PanelController@showCategoryList');
Macaw::get('/admin/cat-add', 'Core\PanelController@categoryAddForm');
Macaw::get('/admin/cat-edit/(:num)', 'Core\PanelController@categoryEditForm');
Macaw::post('/admin/cat-edit', 'Core\PanelController@categoryEdit');
Macaw::post('/admin/cat-delete/', 'Core\PanelController@categoryDelete');


Macaw::get('cat/(:any)', 'Core\ArticleController@showCategoryPost');


Macaw::dispatch();
?>
