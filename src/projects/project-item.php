<?hh // strict

class :project:item extends :x:element {

  attribute
    string title @required,
    string description @required,
    enum {"left", "right"} img-align = "right";

  protected function render(): XHPRoot {
    $project_content = (
      <div class="col-sm-6">
        <project:title title={$this->:title} />
        <project:description description={$this->:description}/>
        <button:github />
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
