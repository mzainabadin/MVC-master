<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as Capsule;
class Teacher extends Eloquent
{

  protected $fillable = ['name'];

  public function add($param)
  {
    $user = Teacher::create(['name' => $param[1]]);

    return $user;
  }


  public function edit($param)
  {

    $user = Teacher::where('id',$param[0])
    ->update(['name' => $param[1]]);
    return $user;
  }

  public function listTable($param)
  {
    $users = Teacher::all();
    return $users;
  }

  public function delete($param)
  {
   $user = Teacher::where('id', $param[0])->delete();
   return $user;
  }
}

 ?>
