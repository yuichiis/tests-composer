<?php
$paths = [
    __DIR__.'/../../../autoload.php',
    __DIR__.'/../vendor/autoload.php',
];
foreach($paths as $path) {
    if(file_exists($path)) {
        include_once $path;
        break;
    }
}
$hello = new Yuichiis\Tests\Composer\Hello();
$hello->say();
