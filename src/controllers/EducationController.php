<?hh // strict

use Facebook\HackRouter\UriPattern;

final class EducationController extends WebController {

  <<__Override>>
  public static function getUriPattern(): UriPattern {
    return (new UriPattern())
      ->literal('/education');
  }

  <<__Override>>
  protected function getTitle(): string {
    return "Education";
  }

  <<__Override>>
  public async function renderContent(): Awaitable<:xhp> {
    return (
      <div>
        <h1>Education</h1>
      </div>
    );
  }

}
