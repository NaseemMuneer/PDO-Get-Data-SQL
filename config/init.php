<?php  
    session_start();

    require_once 'helpers/system_helper.php';
?>
<?php 

    //config File
    require_once 'config.php';

    // require_once('lib/Template.php');
    // function __autoload($class_name)
    // {
    //     require_once 'lib/' .$class_name . '.php';
    // }

    
    function myAutoloader($class_name)
{
    //  require_once '../'
    require_once 'lib/' .$class_name . '.php';
}

spl_autoload_register('myAutoloader');
    // spl_autoload_register(function ($class_name)
    //  {
    //     //  require_once '../'
    //     require_once 'lib/' .$class_name . '.php';
    // });
