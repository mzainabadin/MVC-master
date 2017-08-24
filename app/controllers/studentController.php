<?php
require_once'../app/models/Student.php';
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Facades\DB;
ini_set("display_errors",true);
error_reporting(E_ALL);

class CourseController extends Controller
{

  public $model;

  public function __construct()
  {
    $this->model = 'Student';
    return $this->model;
  }

}

 ?>
