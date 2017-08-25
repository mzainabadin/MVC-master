<?php
require_once'ModelFactory.php';

class ControllerFactory
{
  protected $controller = '';
  protected $method = '';
  protected $params = [];

  public function __construct($url)
  {
  if(file_exists('../app/controllers/' . $url[0] . '.php'))
  {
    $this->controller = $url[0];
    unset($url[0]);
  }

  require_once'../app/controllers/'.$this->controller .'.php' ;

  $this->controller= new $this->controller;
  $modelName = $this->controller->getMethod();

  $model = new ModelFactory($this->controller,$modelName,$url);

}


}


?>
