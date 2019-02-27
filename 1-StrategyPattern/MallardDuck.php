<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2019/2/28
 * Time: 0:28
 */

namespace App;

use App\Behavior\Fly\FlyWithWings;
use App\Behavior\Quack\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        echo "I'm a real Mallard duck";
    }
}