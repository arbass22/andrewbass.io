<?hh // strict

class :project:description extends :x:element {

  protected function render(): XHPRoot {
    return (
      <div class="project-descr">
        {$this->getChildren()}
      </div>
    );
  }
}
