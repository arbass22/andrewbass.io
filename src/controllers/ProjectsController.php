<?hh // strict

final class ProjectsController extends WebController {

  use NoMarginPage;

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
  public async function renderContent(): Awaitable<:xhp> {
    return (
      <x:frag>
        <h1>Projects</h1>
        <project:item
          img-align="right">
          <project:title
            title="PoliTweet">
            <div class="label label-default">Finalist</div>
            <div class="label label-success">Best UI/UX</div>
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
            title="This Site">
          </project:title>
          <project:description>
            {"I made this website to give myself an online presence. I can add links
              to projects I am working on, experiment with web technologies, and
              perhaps in the future add a blog. It is built using HHVM, Facebook's
              PHP-esq server, and is running on a DigitalOcean droplet behind an nginx
              reverse-proxy.  I have installed SSL certificates provided by Let's Encrypt.
              I have worked to make it as responsive as possibe, try viewing it on mobile
              and desktop."}
          </project:description>
        </project:item>
      </x:frag>
    );
  }

}
