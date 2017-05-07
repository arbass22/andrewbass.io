<?hh // strict
/**
 * This file is generated. Do not modify it manually!
 *
 * To re-generate this file run
 * /home/andrew/sites/andrewbass.io/scripts/build_router.php
 *
 *
 * @generated SignedSource<<a85a4014e18c7ef9f049d0ce1ac90d39>>
 */

<<Codegen>>
final class Router
  extends \Facebook\HackRouter\BaseRouter<classname<\WebController>> {

  <<__Override>>
  final public function getRoutes(
  ): ImmMap<\Facebook\HackRouter\HttpMethod, ImmMap<string, classname<\WebController>>> {
    $map = ImmMap {
      \Facebook\HackRouter\HttpMethod::GET => ImmMap {
        '/education' => \EducationController::class,
        '/' => \HomeController::class,
        '/notfound' => \NotFoundController::class,
        '/projects' => \ProjectsController::class,
      },
    };
    return $map;
  }
}
