<?php
echo "Hello World";

function printText(IUser $name) {
    return $name -> getName();
}