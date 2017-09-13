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
    $this->method = $url[method];
    if(!isset($url[method]))
    {
      $this->method = $arr[1];
    }
    require_once'../app/models/' . $this->model . '.php';

    $this->params = $url ? array_values($url) : [] ;
    $this->model = new $this->model;
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
      $data =  $this->model->$methodName($params);
      return $data;
    }
  }
}
 ?>
