<?php
error_reporting(E_ALL);
require_once dirname(__FILE__) . '/../app/Capt_Controller.php';

Capt_Controller::main('Capt_Controller', array(
    '__ethna_unittest__',
    )
);
?>
