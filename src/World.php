<?php
/**
 * Created by PhpStorm.
 * User: hkx
 * Date: 2019/10/12
 * Time: 10:52 AM
 */

namespace Meteor\HelloPublic;

class World
{
    public static function hello($msg = '')
    {
        return $msg . '_success';
    }
}