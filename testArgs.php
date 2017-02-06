
<?php
require_once "./ParseArgv.php";

$parsed = new ParseArgv();
$arguments = $parsedā€”>getParsed();
// want   $arguments = $parsed->argv;  instead

foreach ($arguments as $k => $v) {
    print("$k=>$v\n");
}


?>

