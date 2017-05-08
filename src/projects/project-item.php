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
          <img class="col-sm-6 col-sm-push-6" src="https://www.cesarsway.com/sites/newcesarsway/files/styles/large_article_preview/public/Common-dog-behaviors-explained.jpg?itok=FSzwbBoi"/>
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
