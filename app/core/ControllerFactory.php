<?php
require_once'ModelFactory.php';
require_once'Controller.php';
require_once'SmartyHeader.php';

class ControllerFactory
{
  protected $controller = '';

  /**
  *Constructor Making new controller then calling ModelFactory
  *to aquire object of required model. Then views are called using smarty
  * form URl.
  *
  *@param URL as $url
  *
  *@return object of required model
  **/
  public function __construct($post = null,$get = null )
  {
      //ob_start();
      $this->controller = new Controller;
      //ob_clean();
      $this->controller->callcontrol($post = null,$get = null);
      return $this->controller;

  }

}
?>
