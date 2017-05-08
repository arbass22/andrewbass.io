<?hh // strict

class :project:description extends :x:element {


  protected function render(): XHPRoot {
    return (
      <div class="project-descr">
        At HackBeanpot 2016, I worked to build a web app that analyzed tweets
        about the 2016 presidential primary candidates.  We used Indico's sentiment
        analysis to determine how positive or negetive each tweet was.  We then
        used D3 to graph the changes in sentiment over time.
      </div>
    );
  }
}
