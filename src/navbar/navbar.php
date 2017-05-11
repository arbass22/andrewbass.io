<?hh // strict

class :navbar extends :x:element {

  protected function render(): XHPRoot {
    return (
      <nav class="navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle"
              data-toggle="collapse" data-target="#collapsing-nav">
              <span class = "sr-only">Toggle navigation</span>
              <span class = "icon-bar"></span>
              <span class = "icon-bar"></span>
              <span class = "icon-bar"></span>
            </button>
            <a class="title"
              href={HomeController::getUriBuilder()->getPath()}>
              Andrew Bass
            </a>
          </div>
          <div class="navbar-collapse collapse" id="collapsing-nav">
            <ul class="nav navbar-nav navbar-right">
              <navbar:item
                title="Home"
                href={HomeController::getUriBuilder()->getPath()}
                controller={HomeController::class} />

              <navbar:item
                title="Projects"
                href={ProjectsController::getUriBuilder()->getPath()}
                controller={ProjectsController::class}/>
              <navbar:item
                title="Education"
                href={EducationController::getUriBuilder()->getPath()}
                controller={EducationController::class}/>
            </ul>
          </div>
        </div>
      </nav>
    );
  }

}
