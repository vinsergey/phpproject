<?php
/**
 * Created by PhpStorm.
 * User: winmaster
 * Date: 20.04.18
 * Time: 19:37
 */

require_once "IUser.php";

class UserNext implements IUser
{
    public function getName():string {
        return "Kolya";
    }
}