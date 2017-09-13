<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Facades\DB;


class CourseController extends Controller
{

  public $model;
  public function __construct()
  {
     parent::__construct();
  }
  public function getModelname()
  {
    $this->model = 'Course';
    return $this->model;
  }

}

 ?>
