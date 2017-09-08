<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as Capsule;
class Course extends Eloquent
{

  protected $fillable = ['name'];

  public function add($param)
  {
    $user = Course::create(['name' => $param[1]]);

    return $user;
  }


  public function edit($param)
  {

    $user = Course::where('id',$param[0])
    ->update(['name' => $param[1]]);
    return $user;
  }


  public function listTable($param)
  {
    $users = Course::all();
    return $users;
  }


  public function delete($param)
  {
   $user = Course::where('id', $param[0])->delete();
   return $user;
  }
}


 ?>
