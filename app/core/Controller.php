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
  public static $id;

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
    return array($_SESSION['model']);
  }

  public function getcontroller($url,$arr)
  {
    if(file_exists('../app/controllers/' . $arr[0] . 'Controller.php'))
    {
      $this->controller = $arr[0]."Controller";
      require_once'../app/controllers/'.$this->controller .'.php' ;
      $this->controller = ucfirst($this->controller);

      $this->controller = new $this->controller;

      $this->modelName = $this->controller->getMethod();
      if(!isset($arr[1]))
      {
        $arr[1] = 'listTable';
      }

      $da = new ModelFactory($arr,$url);
      $pa = $url ? array_values($url) : [] ;

      $data =  $da->index($arr[0],$arr[1],$pa);
      return $data;
    }
  }
  public function view2($id, $method)
  {
    echo ob_get_clean();
    flush();
    ob_start(); 
    $this->smrt->smarty->assign('id',$id);
    $this->smrt->smarty->assign('method',$method);
    $this->smrt->smarty->display("../app/views/templates/". $method .".tpl");

  }

  public function view($data)
  {
    require_once'../app/views/templates/listTableStudent.tpl';
    $this->smrt->smarty->assign('user',$data);
    $this->smrt->smarty->display("../app/views/templates/listTableStudent.tpl");
  }
}

 ?>
