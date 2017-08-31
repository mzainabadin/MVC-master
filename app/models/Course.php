<?php
ini_set("display_errors",true);
error_reporting(E_ALL);
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as Capsule;
class Course extends Eloquent
{

  protected $fillable = ['name'];

  public function add($param)
  {
    return $user = Course::create([$param[0] => $param[1]]);
  }


  public function edit($param)
  {
    $user = Course::where($param[0],$param[1])
    ->update([$param[2] => $param[3]]);
    return $user;
  }


  public function listTable($param)
  {
    $users = Course::all();
    return $users;
  }


  public function delete($param)
  {
   $user = Course::where($param[0], $param[1])->delete();
   return $user;
  }
}


 ?>
