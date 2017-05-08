<?hh // strict

class :project:title extends :x:element {

  attribute
    string title @required;

  protected function render(): XHPRoot {
    return (
      <div class="title">{$this->:title}</div>
    );
  }
}
