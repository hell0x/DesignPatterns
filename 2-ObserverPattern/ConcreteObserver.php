<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2019/2/28
 * Time: 23:22
 */

require 'Observer.php';

class ConcreteObserver implements Observer
{
    public function update()
    {
        echo 'Observer1';
    }
}