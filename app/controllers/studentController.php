<?php
require_once'../app/models/Student.php';
use Illuminate\Database\Capsule\Manager as Capsule;

use Illuminate\Support\Facades\DB;
ini_set("display_errors",true);
error_reporting(E_ALL);

class StudentController extends Controller
{

  protected $user;

  public function __construct($methodName,$params)
  {
    $this->user = $this->model('Student');
    // calling index that checks if method exists
    $this-> index($methodName,$params);
  }


  public function index($methodName,$params)
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
}

 ?>
