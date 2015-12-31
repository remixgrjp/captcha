<?php
/**
 *  {$action_name}.php
 *
 *  @author     {$author}
 *  @package    Capt
 *  @version    $Id$
 */
chdir(dirname(__FILE__));
require_once '{$dir_app}/Capt_Controller.php';

ini_set('max_execution_time', 0);

Capt_Controller::main_CLI('Capt_Controller', '{$action_name}');
?>
