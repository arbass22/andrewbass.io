<?hh // strict

final class ProjectsController extends WebController {

  public static function getUriPattern(): Facebook\HackRouter\UriPattern {
    return (new Facebook\HackRouter\UriPattern())
      ->literal('/projects');
  }

  <<__Override>>
  protected function getTitle(): string {
    return "Projects";
  }

  protected function getExtraCSS(): Set<string> {
    return Set{
      'css/projects.css'
    };
  }

  <<__Override>>
  public async function genRender(): Awaitable<:xhp> {
    return (
      <div>
        <h1>Projects</h1>
        <project:item />
        <project:item />
      </div>
    );
  }

}
