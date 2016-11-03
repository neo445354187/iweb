<?php
$config = __DIR__ . "/config/config.php";
require __DIR__ . "/lib/iweb.php";
IWeb::createWebApp($config)->run();
