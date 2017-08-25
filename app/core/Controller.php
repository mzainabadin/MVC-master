<?php
namespace App\Controllers;

use App\Config\Smarty\SmartyTemplate ;


class Controller
{
  public function __construct()
  {
    $this->tpl = new SmartyTemplate;
  }

/*
  public function view($view, $data = [] )
  {
    require_once'../app/views/home/Functions/' . $view . '.php';
  //  require_once '$view';
  }
*/

}
 ?>
