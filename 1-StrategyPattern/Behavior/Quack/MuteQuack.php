<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2019/2/28
 * Time: 0:17
 */

namespace App\Behavior\Quack;


class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo 'mute quack';
    }
}