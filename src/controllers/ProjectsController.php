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
          img-align="right">
          <project:title
            title="PoliTweet2">
            <div class="label label-default">Finalist</div>
            <span class="label label-success">Best UI/UX</span>
          </project:title>
          <project:description>

            <div>
            {"At HackBeanpot 2016, I created a webapp that analyzed public tweets about
            the current presidential primary candidates.  Using the Twitter Streaming API,
            we used websockets to push the conents to a ReactJS client as well as ran the
            text throught Indico's sentiment API.  We used D3 to graph how the average sentiment
            for each candidate changed over time."}
            </div>
            <button:github />
            <button:github />
          </project:description>
        </project:item>
        <project:item
          img-align="left">
          <project:title
            title="PoliTweet2">
          </project:title>
          <project:description>
          Project 2
          </project:description>
        </project:item>

      </div>
    );
  }

}
