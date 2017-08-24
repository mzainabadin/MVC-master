<?php
namespace App\Controllers
class home extends Controller
{
  function index()
  {
    $this->tpl->assign('header', "Welcome Home");
    $this->tpl->display('home/index.tpl');
  }
}


 ?>
