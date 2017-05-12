<?hh // strict

class :main:footer extends :x:element {

  protected function render(): XHPRoot {
    return (
      <div class="footer container">
        <hr class="row"/>
        <div class="copyright row">
          Copyright &copy; {date('Y')}
        </div>
      </div>);
  }
}
