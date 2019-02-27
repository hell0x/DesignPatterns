<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2019/2/28
 * Time: 0:14
 */

namespace App\Behavior\Fly;


class FlyWithWings implements FlyBehavior
{

    public function fly()
    {
        echo "fly with wings";
    }
}