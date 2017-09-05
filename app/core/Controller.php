<?php
require_once'ModelFactory.php';
require_once'Controller.php';
require_once'SmartyHeader.php';

class Controller
{
  protected $controller = '';
  protected $method = '';
  protected $model = '';
  protected $params = [];
  public $smrt;
  public $modelName;

  public function __construct()
  {

  }

  public function view1($post = null,$get = null)
  {
    $this->smrt =new SmartyHeader();
    $this->smrt->smarty->display("../app/views/templates/select.tpl");

    if (!empty($post["model"]))
    {
    $_SESSION['model'] =  $post["model"];
    }

    if (!empty($post["method"]))
    {
    $_SESSION['method'] =  $post["method"];
    }

    return array($_SESSION['model'],$_SESSION['method']);

  }

  public function view2($post, $arr)
  {
    if($arr[0]!=NUll && $arr[1]!=NUll)
    {
      $this->smrt->smarty->display("../app/views/templates/".$_SESSION['method'] . ".tpl");
      $url = $post;
      echo 'data in url is';
      print_r($url);
      return $url;
    }
  }

  public function getcontroller($url,$arr)
  {
    if(file_exists('../app/controllers/' . $arr[0] . 'Controller.php'))
    {
      $this->controller = $arr[0]."Controller";
      require_once'../app/controllers/'.$this->controller .'.php' ;
      $this->controller = ucfirst($this->controller);
      echo "Controller name is " . $this->controller;

      $this->controller = new $this->controller;

      $this->modelName = $this->controller->getMethod();
      $da = new ModelFactory($arr,$url);
      $pa = $url ? array_values($url) : [] ;

      $data =  $da->index($arr[0],$arr[1],$pa);
      return $data;
    }
  }
  //  session_destroy();

  public function view($data)
  {
    require_once'../app/views/templates/listTableStudent.tpl';
    $this->smrt->smarty->assign('user',$data);
    $this->smrt->smarty->display("../app/views/templates/listTableStudent.tpl");
  }
}

 ?>
