<?
/**
* Module: Кнопка наверх
* Author: Anton Kuleshov
* Site: http://falbar.ru/
* File: Main.php
* Version: 1.0.0
**/

namespace Falbar\ToTop;

use Bitrix\Main\Config\Option;
use Bitrix\Main\Page\Asset;

class Main{

    public function getAll() {
        $module_id = pathinfo(dirname(__DIR__))["basename"];
        $res = Option::getForModule($module_id);
        return $res;
    }

    public function getSingle($nameProp = '') {
        if (empty($nameProp)) return false;

        $module_id = pathinfo(dirname(__DIR__))["basename"];
        $res = Option::get($module_id, $nameProp);
        return $res;
    }

}