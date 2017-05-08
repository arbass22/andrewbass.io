<?hh
require_once __DIR__.'/../vendor/hh_autoload.php';

$controller = Request::get()->getController();
(new $controller())->renderTotalPage();
