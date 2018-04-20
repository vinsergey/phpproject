<?php

require_once "IUser.php";

class User implements IUser
{
    public function __construct()
    {

    }

    public function getName():string
    {
        return "Petya";
    }

}