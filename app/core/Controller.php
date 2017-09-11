<?php
require_once'ModelFactory.php';
require_once'baseController.php';
require_once'SmartyHeader.php';

class Controller
{
  protected $controller = '';
  protected $method = '';
  protected $model = '';
  protected $params = [];
  public $smrt;
  public $modelName;
  public static $id;
  public static $c;

  public function __construct()
  {
    if(!isset($c))
    {
      self::$c = 1;
    }
  }
  /**
  *Call control function controls the controller calls and call required view.
  *Get data from views and pass it to other using POST variables.
  *
  *
  *@param POST and GET variables
  *
  *@return return the controller onject
  **/
  public function callcontrol($post = null,$get = null )
  {
    session_start();
    if(self::$c == 1)
    {
      ob_start();
      $this->controller = new baseController;
      // view1 function display name of the tables allowing user to select.
      $arr = $this->controller->view1($_POST,$_GET);
      if($_POST<>array())
      {
        if( (isset($arr[0])))
        {
          $data = $this->controller->getcontroller($url,$arr);
          // display the list view with Edit, delete and add buttons
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
        }
      }
      self::$c = self::$c + 1;
    }
    if(isset($_POST[id]) && (self::$c >1) && (isset($_POST[Param1]) ) )
    {
      ob_clean();
      $data = $this->controller->getcontroller($url,$arr);
      // display the list view with Edit, delete and add buttons
      return $this->controller->view($data);
      unset($_POST[model]);
    }
  }

}

 ?>
