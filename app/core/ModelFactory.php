<?php

class ModelFactory
{
  protected $controller = '';
  protected $method = '';
  protected $params = [];


  public __construct($model,$url)
  {
    require_once'../app/models/' . $this->model . '.php';
    if(isset($url[1]))
      {
          $this->method = $url[1] ;
          unset($url[1]);
      }
    $this->params = $url ? array_values($url) : [] ;

    return $this->index($this->method,$params);
  }


  public function index($methodName,$params)
  {
    echo 'INdex function is working';

    if(method_exists($this->user, $methodName))
    {
      echo 'Function exists';
      $user =   $this->user->$methodName($params);
      return $this->user;
    }
    else
    {
      echo 'method does not exist';
    }
  }
}



 ?>
