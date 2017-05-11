<?hh // strict

class :main:body extends :x:element {

  protected function render(): XHPRoot {
    return (
      <body>
        {$this->getChildren()}
      </body>
    );
  }
}
