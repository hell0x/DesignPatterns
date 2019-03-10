<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2019/2/28
 * Time: 23:05
 */

interface Observable
{
    public function addObserver(Observer $observer);

    public function removeObserver(Observer $observer);

    public function notifyObserver();

    public function setChange();
}