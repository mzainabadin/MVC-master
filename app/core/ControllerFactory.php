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
  //  if (isset($_SESSION))
  //  {
//      unset($_SESSION);
  //    session_unset();
  //    session_destroy();
//    }
      session_start();
  }
  public function callcontrol($post = null,$get = null )
  {
    $this->controller = new controller;
    $arr = $this->controller->view1($_POST,$_GET);
    if($_POST<>array())
    {
      if( (isset($arr[0])))
      {
        $data = $this->controller->getcontroller($url,$arr);
        $this->controller->view($data);
      }

      $_SESSION['id'] =  $_POST["id"];
      $arr[1] = $_POST[method];

      if(isset($_POST[id]))
      {
        $this->controller->view2($_SESSION['id'], $_POST[method]);
        $url = array($_POST['id'],$_POST[Param1]);
        $arr[1]= $_POST[method];
        $data = $this->controller->getcontroller($url,$arr);
        unset($arr[1]);
        
        $data = $this->controller->getcontroller($url,$arr);
        $this->controller->view($data);}

    }
  }
}
?>
