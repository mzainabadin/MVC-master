<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{

  public $model;
  public function __construct()
  {
     parent::__construct();
  }
  public function getMethod()
  {
    $this->model = 'Student';
    return $this->model;
  }

}

 ?>
