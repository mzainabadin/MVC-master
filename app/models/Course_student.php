<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as Capsule;
class Course_student extends Eloquent
{
  protected $fillable = ['student_id','course_id'];

  public function addcourse($param)
  {
    if(isset($param[1]))
    {
      $user = Course_student::create
      ([
          'student_id' => $param[0],
          'course_id'=> $param[1]
      ]);
    return $user;
    }
  }
  public function listTable($param)
  {
    $users = Course_student::find($param[1]);
    return $users;
  }


}


 ?>
