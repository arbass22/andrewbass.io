<?hh
require_once __DIR__.'/../vendor/hh_autoload.php';

$controller = Request::get()->getController();

\HH\Asio\join(
  (new $controller())->renderTotalPage()
);
