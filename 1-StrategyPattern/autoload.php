<?php
/**
 * Created by weixing.
 * User: weixing
 * Date: 2019/2/28
 * Time: 0:47
 */

// 自动加载
spl_autoload_register(function ($class) {
    $file = __DIR__ . '/' . $class . '.php';
    require_once($file);
});