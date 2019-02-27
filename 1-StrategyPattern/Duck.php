<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2019/2/28
 * Time: 0:19
 */

namespace App;

use App\Behavior\Fly\FlyBehavior;
use App\Behavior\Quack\QuackBehavior;

abstract class Duck
{
    public $flyBehavior;

    public $quackBehavior;

    public function swim()
    {
        echo "I'm swimming";
    }

    abstract public function display();

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function setFlyBehavior(FlyBehavior $behavior)
    {
        $this->flyBehavior = $behavior;
    }

    public function setQuackBehavior(QuackBehavior $behavior)
    {
        $this->quackBehavior = $behavior;
    }
}