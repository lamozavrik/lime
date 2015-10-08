<?php
namespace core;

//Проверка на прямое обращение к файлу
if(!defined('LIMECMS'))
    exit("no LimeCMS!");

/**
* Lime CMS
* 
* Класс на основе Singleton
* 
* @author Сердюк Кирилл
* @since 0.1b
* @copyright Copyright (c) 2015 Сердюк Кирилл
*/

class Cache{

    
    public static function factory($driver){
        $driver_class = 'core\\cache_drivers\\' . $driver;
        return $driver_class::instance();
    }

}