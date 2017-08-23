<?php
ini_set("display_errors",true);
error_reporting(E_ALL);
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as Capsule;
class Teacher extends Eloquent
{

  protected $fillable = ['name'];

  public function add($param)
  {
    //echo'calling add function';
    //print_r($param);
    return $user = Teacher::create([$param[0] => $param[1]]);
  }


  public function edit($param)
  {
    //echo'in echo function';
    //print_r($param);
    $user = Teacher::where($param[0],$param[1])
    ->update([$param[2] => $param[3]]);
    return $user;
  }


  public function listTable($param)
  {
    $users = Teacher::all();
    return $users;
  }


  public function delete($param)
  {
   $user = Teacher::where($param[0], $param[1])->delete();
   return $user;
  }
}

 ?>
