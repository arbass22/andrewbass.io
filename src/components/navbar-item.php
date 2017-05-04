<?hh // strict

class :navbar:item extends :x:element {

  attribute
    string href @required,
    string title @required,
    bool active = false;

  protected function render(): XHPRoot {
    $item = (
      <li>
        <a href={$this->:href}>
          {$this->:title}
        </a>
      </li>
    );
    return (
      $item->conditionClass($this->:active, "active")
    );
  }
}
