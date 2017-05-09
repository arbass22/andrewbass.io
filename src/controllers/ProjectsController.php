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
        <project:item
          title="PoliTweet"
          img-align="right">
          <project:description>
          Project 1
          </project:description>
        </project:item>
        <project:item
          title="Internet Garage"
          img-align="left">
          <project:description>
          Project 2
          <button:github />
          </project:description>
        </project:item>

      </div>
    );
  }

}
