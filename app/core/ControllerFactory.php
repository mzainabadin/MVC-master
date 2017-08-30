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
  public function __construct($post = null)
  {
    $this->smrt =new SmartyHeader();
    $this->smrt->smarty->display("../app/views/templates/select.tpl");

  //  if(isset($post["model"])) echo "Model is set\n" . $post["model"];
  //  if(isset($post["method"])) echo "method is set\n" . $post["method"];

    $this->method = $post["method"];
    $this->model = $post["model"];
    // unset($post);
    $this->smrt->smarty->display("../app/views/templates/".$this->method . ".tpl");
    echo "param is set\n" . $post["Param1"];




/*
    if(file_exists('../app/controllers/' . $url[0] . '.php'))
    {
      $this->controller = $url[0];
      unset($url[0]);
    }

    require_once'../app/controllers/'.$this->controller .'.php' ;

    $this->controller= new $this->controller;

    $this->modelName = $this->controller->getMethod();
    $data = new ModelFactory($this->controller,$this->modelName,$url);

    $this->smrt =new SmartyHeader();
    $this->smrt->smarty->assign('user',$data);
    //$this->smrt->smarty->display("../app/views/templates/".$url[1].$this->modelName.".tpl");
    $this->smrt->smarty->display("../app/views/templates/edit.tpl");
    */
  }

}

?>
