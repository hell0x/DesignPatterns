<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2019/2/28
 * Time: 23:10
 */

require 'Observable.php';

class WeatherData implements Observable
{
    public $_observers;

    public function __construct()
    {
        $this->_observers = [];
    }

    public function addObserver(Observer $observer)
    {
        $this->_observers[] = $observer;
    }

    public function removeObserver(Observer $observer)
    {
        $index = array_search($observer, $this->_observers);

        if($index === False || !array_key_exists($index, $this->_observers))
            return false;

        unset($this->_observers[$index]);
        return true;
    }

    public function notifyObserver()
    {
        foreach($this->_observers as $observer){
            $observer->update();
        }

        return true;
    }

    public function setChange()
    {
        return true;
    }
}