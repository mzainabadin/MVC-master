<?php
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as Capsule;
class Student extends Eloquent
{

  protected $fillable = ['name'];

  public function add($param)
  {
    $user = Student::create([$param[0] => $param[1]]);

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
  //  print_r($users);
    return $users;
  }


  public function delete($param)
  {
   $user = Student::where('id', $param[0])->delete();
   return $user;
  }
}


 ?>
