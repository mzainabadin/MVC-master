<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Facades\DB;


class TeacherController extends Controller
{

  public $model;
  public function __construct()
  {
     parent::__construct();
  }
  public function getMethod()
  {
    $this->model = 'Teacher';
    return $this->model;
  }

}

 ?>
