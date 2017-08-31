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
    session_start();

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

    $this->smrt->smarty->display("../app/views/templates/".$_SESSION['method'] . ".tpl");
    $url = $post;
    /*
    if(isset($_SESSION['model']) && !empty(isset($_SESSION['model'])))
    echo "model".$_SESSION['model']." exist";
    else
    echo "MODEL not set" ;
    */
    if(file_exists('../app/controllers/' . $_SESSION['model'] . 'Controller.php'))
    {
      $this->controller = $_SESSION['model']."Controller";
      require_once'../app/controllers/'.$this->controller .'.php' ;
    }

    $this->controller= new $this->controller;
    $this->modelName = $this->controller->getMethod();
    $data = new ModelFactory($this->controller,$this->modelName,$_SESSION['method'],$url);

    $this->view($data);
  }




  public function view($data)
  {
        $smrt =new SmartyHeader();
        $smrt->smarty->assign('user',$data);
        $this->smrt->smarty->display("../app/views/templates/listTableStudent.tpl");
  }
}

?>
