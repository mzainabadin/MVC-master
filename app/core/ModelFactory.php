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
  public function __construct($controllerObj,$model,$url)
  {
    require_once'../app/models/' . $model . '.php';
    if(isset($url[1]))
      {
          $this->method = $url[1] ;
          unset($url[1]);
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
    //echo 'INdex function is working';
    if(method_exists($model, $methodName))
    {
      //echo 'Function exists';
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
