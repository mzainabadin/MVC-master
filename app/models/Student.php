<?php
ini_set("display_errors",true);
error_reporting(E_ALL);
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as Capsule;
class Student extends Eloquent
{
  //public $name;

  protected $fillable = ['name'];
  public function add()
  {
      return $user = Student::create(['name' => 'Flight']);

  }

  public function edit()
  {
    $user = Student::where('name','samplename1')
    ->update(['name'=> 'changed2']);
    return $user;
  }
  public function listTable()
  {

  }
  public function delete()
  {
    $user = Student::where('name', 'changed2')->delete();
    return $user;
  }
}


 ?>
