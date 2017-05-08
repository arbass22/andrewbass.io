<?hh // strict

class :navbar:item extends :x:element {

  // TODO: merge href and controller params
  attribute
    string href @required,
    string title @required,
    string controller @required;

  protected function render(): XHPRoot {
    $item = (
      <li>
        <a href={$this->:href}>
          {$this->:title}
        </a>
      </li>
    );

    $currentController = Request::get()->getController();
    $item->conditionClass($currentController == $this->:controller, "active");
    return $item;
  }
}
