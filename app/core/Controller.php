<?php

class Controller
{
  public function model($model)
  {
    echo $model;
    if(file_exists('../app/models/'. $model . '.php'))
    {
      //echo "yes<br>";
      require_once '../app/models/'. $model . '.php';
    }


    return new $model();
  }

  public function view($view, $data = [] )
  {
    require_once'../app/views/home/Student/' . $view . '.php';
  //  require_once '$view';
  }
}
 ?>
