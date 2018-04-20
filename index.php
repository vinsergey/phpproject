<?php

require "User.php";
require "UserNext.php";

$user = new User();
$userNext = new UserNext();

//require_once "hello_another_file.php";
//echo " ";
//echo printText($userNext);

try {
    $r = new ReflectionClass($user);
    $rr = $r->getConstructor();
} catch (ReflectionException $e) {
    echo $e->getMessage();
}
var_dump($rr);