<?hh // strict

class :project:item extends :x:element {


  attribute
    enum {"left", "right"} img-align = "right";

  children (:project:title, :project:description);

  protected function render(): XHPRoot {
    $project_content = (
      <div class="col-sm-6">
        {$this->getChildren()}
      </div>
    );

    $project_img = (
      <img class="image col-sm-6" src="https://www.cesarsway.com/sites/newcesarsway/files/styles/large_article_preview/public/Common-dog-behaviors-explained.jpg?itok=FSzwbBoi"/>
    );

    if ($this->:img-align == "left") {
      $project_img->addClass("col-sm-pull-6");
      $project_content->addClass("col-sm-push-6");
    }

    return (
      <div class="project item">
        <div class="container">
          <div class="row">
            {$project_content}
            {$project_img}
          </div>
        </div>
      </div>
    );
  }
}
