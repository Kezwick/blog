<?php
@define('ABSPATH', str_replace('\\', '/', dirname(__FILE__)));
require_once ('./config/db.php');
// загрузка автозагрузчика
require_once __DIR__.'/vendor/autoload.php';

use NoahBuscher\Macaw\Macaw;







Macaw::get('/', 'Core\ArticleController@ShowAllPost');
Macaw::get('page', 'Core\ArticleController@lol');
Macaw::get('view/(:num)', 'Core\ArticleController@showSinglePost');

Macaw::dispatch();
?>
