<?php
namespace App;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as Capsule;
class Course_student extends Eloquent
{
  protected $fillable = ['Student_id','Course_id'];
}


 ?>
