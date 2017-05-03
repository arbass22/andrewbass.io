<?hh // strict

class :navbar extends :x:element {

  protected function render(): XHPRoot {
    return (
      <x:frag>
        <div class="navbar">
          <div class="container">
            <main:logo />
            <div class="header">Andrew Bass</div>
            <nav:list />
          </div>
        </div>
      </x:frag>
    );
  }

}
