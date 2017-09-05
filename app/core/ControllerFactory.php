<?php
require_once'ModelFactory.php';
require_once'Controller.php';
require_once'SmartyHeader.php';

class ControllerFactory
{
  protected $controller = '';
  protected $method = '';
  protected $model = '';
  protected $params = [];
  public $smrt;
  public $modelName;

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
    if (isset($_SESSION))
    {
      unset($_SESSION);
      session_unset();
      session_destroy();
    }
  }
  public function callcontrol($post = null,$get = null )
  {
    session_start();
    $this->controller = new controller;
    $arr = $this->controller->view1($_POST,$_GET);
    print_r($arr);
    if( (isset($arr[0])) && (isset($arr[1])) )
    {
      if($arr[1]!='listTable')
      {
        $url = $this->controller->view2($_POST,$arr);
      }
      if (array_key_exists('Param1', $url) || $arr[1] ='listTable')
      {
        $data = $this->controller->getcontroller($url,$arr);
        $this->controller->view($data);
      }
    }

    unset($_POST);
  }
}
?>
