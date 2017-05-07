<?hh // strict

final class EducationController extends WebController {

  public static function getUriPattern(): Facebook\HackRouter\UriPattern {
    return (new Facebook\HackRouter\UriPattern())
      ->literal('/education');
  }

  <<__Override>>
  protected function getTitle(): string {
    return "Education";
  }

  <<__Override>>
  public async function genRender(): Awaitable<:xhp> {
    return (
      <div>
        <h1>Education</h1>
      </div>
    );
  }

}
