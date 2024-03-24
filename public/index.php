 <?php

require './../vendor/autoload.php';

use Exceptions\RouteNotFoundException;
use Router\Router;

$router = new Router();

$router->register('/', function()
{
  return 'home page';
});


$router->register('/contact', function()
{
  return 'contact page';
});


try{
  echo $router->resolve($_SERVER["REQUEST_URI"]);












































  
}
catch (RouteNotFoundException $e)
{
  echo $e->getmessage();
}
 ?>