<?hh // strict

class :project:description extends :x:element {
  attribute
    string description @required;

  protected function render(): XHPRoot {
    return (
      <div class="project-descr">
        {$this->:description}
      </div>
    );
  }
}
