<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2019/2/28
 * Time: 0:16
 */

namespace App\Behavior\Quack;


class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo 'squeak';
    }
}