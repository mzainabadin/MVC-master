<?php
ini_set("display_errors",true);
error_reporting(E_ALL);
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as Capsule;
class Student extends Eloquent
{

  protected $fillable = ['name'];

  public function add($param)
  {
    echo'calling add function';
    print_r($param);
    return $user = Student::create([$param[0] => $param[1]]);
  }


  public function edit($param)
  {
    echo'in echo function';
    print_r($param);
    $user = Student::where($param[0],$param[1])
    ->update([$param[2] => $param[3]]);
    return $user;
  }


  public function listTable()
  {
    $users = Student::all();
  //  print_r($users);
    return $users;
  }


  public function delete($param)
  {
   $user = Student::where($param[0], $param[1])->delete();
   return $user;
  }
}


 ?>
