<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Facades\DB;


class Course_studentController extends Controller
{

  public $model;
  public function __construct()
  {
     parent::__construct();
  }
  public function getModelname()
  {
    $this->model = 'Course_student';
    return $this->model;
  }

}

 ?>
