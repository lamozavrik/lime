<?php
/**
* Lime CMS
* 
* @author Сердюк Кирилл
* @since 0.1b
* @copyright Copyright (c) 2015 Сердюк Кирилл
*/

//Проверка на прямое обращение к файлу
if(!defined('LIMECMS'))
	exit("no LimeCMS!");

return [
    
    'default' => [
        'db_host' => 'localhost',
        'db_user' => 'root',
        'db_pass' => 'lamozavrik',
        'db_name' => 'test',
        'charset' => 'utf8'
    ]
];