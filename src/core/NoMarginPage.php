<?hh // strict
trait NoMarginPage {
  require extends WebController;
  require implements IRender;

  <<__Override>>
  public async function renderPage(): Awaitable<:xhp> {
     $content = await $this->renderContent();
     return (
        <x:frag>
          {$content}
        </x:frag>
      );
   }

}
