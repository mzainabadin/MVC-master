<?php
//require_once'../app/database.php';
use Illuminate\Database\Capsule\Manager as Capsule;

use Illuminate\Support\Facades\DB;
ini_set("display_errors",true);
error_reporting(E_ALL);

class StudentController extends Controller
{

  protected $user;

  public function __construct()
  {
    //require_once '../app/models/'. $model . '.php';

    $this->user = $this->model('Student');
  }

  public function index()
  {
    echo "in index";
    $user =   $this->user->delete();
    $this->view('home/index', $user);
  }

}

 ?>
