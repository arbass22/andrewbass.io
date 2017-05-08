<?hh // strict

class :button:github extends :x:element {

  protected function render(): XHPRoot {
    return (
      <a
        target="_blank"
        class="btn btn-outline btn-github margin-12"
        href="https://www.github.com/arbass22">
        <img class="btn-icon" src={"images/github-icon.png"}/>
        Source
      </a>
    );
  }
}
