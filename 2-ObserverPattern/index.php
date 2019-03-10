<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2019/2/28
 * Time: 23:27
 */

require 'WeatherData.php';
require 'ConcreteObserver.php';
require 'ConcreteObserver2.php';

$observable = new WeatherData();

$observer = new ConcreteObserver();
$observable->addObserver($observer);

$observable->notifyObserver();

$observer2 = new ConcreteObserver2();
$observable->addObserver($observer2);

$observable->notifyObserver();