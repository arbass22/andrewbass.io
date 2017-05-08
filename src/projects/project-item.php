<?hh // strict

class :project:item extends :x:element {

  attribute
    enum {"left", "right"} image-alignment = "left";

  protected function render(): XHPRoot {
    if ($this->:image-alignment == "left") {

    }

    return (
      <div class="container project item">
        <div class="row">
          <img class="col-sm-6 col-sm-push-6" src="http://cdn.akc.org/content/hero/puppy-boundaries_header.jpg"/>
          <div class="col-sm-6 col-sm-pull-6">
            <project:title title="Project1" />
            <project:description />
            <button:github />
          </div>
        </div>
      </div>
    );
  }
}
