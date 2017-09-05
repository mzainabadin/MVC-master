<?php

class ModelFactory
{
  protected $controller = '';
  protected $method = '';
  protected $params = [];
  protected $controllerObj;
  public $user;
  public $model;
  /**
  *Constructor require the model and extract method name
  * form URl.
  *
  *@param Object of the controller $controllerObj, Model name returned by controller $model
  * URL as $url
  *
  *@return object of required model
  **/
  public function __construct($arr,$url)
  {
    $this->model = ucfirst($arr[0]);
    $this->method = $arr[1];
    echo $this->model;

    require_once'../app/models/' . $this->model . '.php';

    if(isset($this->method))
    {
      $this->method = $this->method ;
    }

     $this->params = $url ? array_values($url) : [] ;
     //$this->controllerObj = $controllerObj;

     $this->model = new $this->model;
    // $data = $this->index($this->model,$this->method,$this->params);
     //return $data;
}
  /*s*
  *Index function calls the required mmethod
  *
  *@param Object of the controller $controllerObj, Model name returned by controller $model
  * URL as $url
  *
  *@return object of method
  **/
  public function index($models,$methodName,$params)
  {
    if(method_exists($models, $methodName))
    {
      echo $methodName."<br>";
      $data =  $this->model->$methodName($params);
      echo " is again data ".$data . "<br>";
      return $data;
    }
    else
    {
      echo 'method does not exist';
    }
  }
}
 ?>
