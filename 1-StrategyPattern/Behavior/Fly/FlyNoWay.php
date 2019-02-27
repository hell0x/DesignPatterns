<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2019/2/28
 * Time: 0:15
 */

namespace App\Behavior\Fly;


class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        echo 'fly no way';
    }
}