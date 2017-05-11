<?hh

interface IRender {
  public function renderContent(): Awaitable<:xhp>;
  public function renderPage(): Awaitable<:xhp>;
}
