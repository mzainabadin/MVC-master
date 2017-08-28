
<?php
class smartyHeader
{
  public $smarty;
  public function __construct()
  {
    require_once('../app/smarty/Smarty.class.php');
    $this->smarty = new Smarty();
    $this->smarty->template_dir = '../app/views/templates';
    $this->smarty->compile_dir  = '../app/views/templates_c';
  }
}

 ?>
