<?php

require_once'Course.php';
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as Capsule;

class Student extends Eloquent
{

  protected $fillable = ['name'];

  public function add($param)
  {
    $user = Student::create(['name' => $param[1]]);

    return $user;
  }


  public function edit($param)
  {

    $user = Student::where('id',$param[0])
    ->update(['name' => $param[1]]);
    return $user;
  }


  public function listTable()
  {
    $users = Student::all();
    return $users;
  }


  public function delete($param)
  {
   $user = Student::where('id', $param[0])->delete();
   return $user;
  }

  public function courses($param)
  {
      $users = Student::find($param[0]);
      $data = $users->belongsToMany('Course','course_students')->getResults();
      return $data;

      //$user = Student::find();


  }
}


 ?>
