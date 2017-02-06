<?php
require_once "./ParseArgv.php";

$parsed = new ParseArgv();
//$arguments = $parsed->getParsed();
$arguments = $parsed->argv;

foreach ($arguments as $k => $v) {
    print("$k=>$v\n");
}