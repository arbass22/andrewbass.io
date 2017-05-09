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
          description="At HackBeanpot 2016, I worked to build a web app that analyzed tweets
            about the 2016 presidential primary candidates.  We used Indico's sentiment
            analysis to determine how positive or negetive each tweet was.  We then
            used D3 to graph the changes in sentiment over time."
          img-align="right"/>
        <project:item
          title="Internet Connect Garage"
          description="I built an internet-connected garage door opener for my home. The
            project used a Raspberry Pi that controlled the doors/sensors and
            a NodeJS server to handle the authentication of the user and the
            dispatching of requests to the Pi."
          img-align="left"/>
        <project:item
          title="PoliTweet"
          description="I participated in the ???? hosted by MITRE centering around embedded security.  Our task
            was to build a secure implementation of an internet-connected door
            look with two factor authentication. The opening device used a BeagleBone Black
            with a number keypad.  We had six weeks to build our system and six
            weeks to try to break into a system provided by a competing school's team."
          img-align="right"/>
      </div>
    );
  }

}
