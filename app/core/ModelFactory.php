<?php

class ModelFactory
{
  protected $controller = '';
  protected $method = '';
  protected $params = [];
  protected $controllerObj;
  public $user;
  public $model;
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
    echo $this->method;
    print_r ($this->params);
    echo $model;
    $this->model = new $model;
    return $this->index($this->model,$this->method,$this->params);
  }


  public function index($model,$methodName,$params)
  {
    echo 'INdex function is working';

    if(method_exists($model, $methodName))
    {
      echo 'Function exists';

      $this->model =   $model->$methodName($params);
      return $this->model;
    }
    else
    {
      echo 'method does not exist';
    }
  }
}



 ?>
