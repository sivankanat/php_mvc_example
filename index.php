<?php
/*  */
define("ROOT", __DIR__ . DIRECTORY_SEPARATOR);
define("CONTROLLER", ROOT . "controller" . DIRECTORY_SEPARATOR);
define("CORE", ROOT . "core" . DIRECTORY_SEPARATOR);
define("MODEL", ROOT . "model" . DIRECTORY_SEPARATOR);
define("VIEW", ROOT . "view" . DIRECTORY_SEPARATOR);

set_include_path(get_include_path() . PATH_SEPARATOR . ROOT);
set_include_path(get_include_path() . PATH_SEPARATOR . CONTROLLER);
set_include_path(get_include_path() . PATH_SEPARATOR . CORE);
set_include_path(get_include_path() . PATH_SEPARATOR . MODEL);
set_include_path(get_include_path() . PATH_SEPARATOR . VIEW);

spl_autoload_register();

new App;

/* 
https://www.php.net/manual/en/features.commandline.webserver.php
 */
