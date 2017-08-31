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
  public function __construct($controllerObj,$model,$method,$url)
  {
    require_once'../app/models/' . $model . '.php';
    if(isset($method))
    {
      $this->method = $method ;
    }

     $this->params = $url ? array_values($url) : [] ;
     $this->controllerObj = $controllerObj;

     $this->model = new $model;
     $data = $this->index($this->model,$this->method,$this->params);
     return $data;
  }

  /**
  *Index function calls the required mmethod
  *
  *@param Object of the controller $controllerObj, Model name returned by controller $model
  * URL as $url
  *
  *@return object of method
  **/
  public function index($model,$methodName,$params)
  {
    if(method_exists($model, $methodName))
    {
      $data =   $model->$methodName($params);
      return $data;
    }
    else
    {
      echo 'method does not exist';
    }
  }
}
 ?>
