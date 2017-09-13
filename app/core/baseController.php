<?php
require_once'ModelFactory.php';
require_once'Controller.php';
require_once'SmartyHeader.php';


class baseController extends Controller
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
  /**
  *View 1 is called to select the model name
  *
  *@param POST and GET variables
  *
  *@return array containing session variable have model name in it
  **/
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

  /**
  *Gets the name of model and call the controller accordingly.
  *then calls model factory and pass it the required model name.
  *
  *@param arr[] containing model name
  *
  *@return object of the desired model returned by model factory
  **/
  public function getcontroller($url,$arr)
  {
    if(file_exists('../app/controllers/' . $arr[0] . 'Controller.php'))
    {
      $this->controller = $arr[0]."Controller";
      require_once'../app/controllers/'.$this->controller .'.php' ;
      $this->controller = ucfirst($this->controller);
      $this->controller = new $this->controller;
      $this->modelName = $this->controller->getModelname();
      if(!isset($arr[1]) && $arr[0]<>'course_student')
      {
        $arr[1] = 'listTable';
      }
      $modelFactoryObject = new ModelFactory($arr,$url);
      $parameters = $url ? array_values($url) : [] ;
      $data =  $modelFactoryObject->index($arr[0],$arr[1],$parameters);
      return $data;

    }
  }
  /**
  *Calls the smarty view according to the requested method by user.
  *In this view data is get through user and passed to other functions via POST.
  *
  *@param method to be called, id
  *
  *@return
  **/
  public function view2($id, $method)
  {
    $this->smrt->smarty->assign('id',$id);
    $this->smrt->smarty->assign('method',$method);
    $this->smrt->smarty->display("../app/views/templates/". $method .".tpl");

  }
  /**
  *This view function display the list view of desired table with Edit,Delete and add buttons
  *If button is pressed then primary key with method name is fetched via POST.
  *
  *@param object of desired model returned by model factory
  *
  *@return
  **/
  public function view($data)
  {
    $this->smrt->smarty->assign('user',$data);
    $this->smrt->smarty->display("../app/views/templates/listTable.tpl");
  }


  public function viewdetail($id,$method,$data1)
  {
    $this->smrt->smarty->assign('id',$id);
    $this->smrt->smarty->assign('method',$method);
    $this->smrt->smarty->assign('user',$data1);
    $this->smrt->smarty->display("../app/views/templates/courses.tpl");
  }

  public function addcourseview($id,$method,$model)
  {
    $this->smrt->smarty->assign('id',$id);
    $this->smrt->smarty->assign('method',$method);
    $this->smrt->smarty->assign('model',$model);
    $this->smrt->smarty->display("../app/views/templates/addCourseStudent.tpl");
  }
}

 ?>
