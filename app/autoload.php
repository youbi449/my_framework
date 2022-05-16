
<?php

spl_autoload_register(function ($className) {

    $class = str_replace('\\', '/', $className);

    require_once '../' . $class . ".php";
});
