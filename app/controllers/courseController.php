<?php
require_once'../app/models/Course.php';
use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Support\Facades\DB;
ini_set("display_errors",true);
error_reporting(E_ALL);

class CourseController extends Controller
{

  public $model;

  public function __construct()
  {
    $this->model = 'Course';
    return $this->model;
  }


  /*public function index($methodName,$params)
  {
    echo 'INdex function is working';
    if(method_exists($this->user, $methodName))
    {
      echo 'Function exists';
      $user =   $this->user->$methodName($params);
      //$this->view('home/index', $user);
      $this->view('listtable',  $user);
    }
    else
    {
      echo 'method does not exist';
    }
  }
*/
}

 ?>
