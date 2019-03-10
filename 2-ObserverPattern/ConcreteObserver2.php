<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2019/2/28
 * Time: 23:27
 */

require 'Observer.php';

class ConcreteObserver2 implements Observer
{
    public function update()
    {
        echo 'Observer2';
    }
}