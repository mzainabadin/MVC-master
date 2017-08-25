<?php

namespace App\Smarty;
require_once('../app/smarty/Smarty.class.php');
class SmartyTemplate extends Smarty
{
  public function __construct()
  {
    parent::__construct();
    $smarty_path = dirname(dirname(__DIR__)). DIRECTORY_SEPARATOR. 'Smarty' . DIRECTORY_SEPARATOR;
    $this->setTemplateDir($smarty_path . 'templates');
    $this->setCompileDir($smarty_path . 'templates_c');
    $this->setCacheDir($smarty_path . 'cache');
    $this->setConfigDir($smarty_path . 'config');
  }

}
 ?>
