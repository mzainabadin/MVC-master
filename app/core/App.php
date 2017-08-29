<?php
require_once'ControllerFactory.php';

class App
{
  protected $controller = '';

  public function __construct()
  {
    $url = $this->parseUrl();
    $this->Controller = new ControllerFactory($url);
  }

  public function parseUrl()
  {
    if(isset($_GET['url']))
    {
      return $url = explode('/',filter_var(rtrim($_GET['url'],'/'),FILTER_SANITIZE_URL));
    }

  }
}

 ?>
