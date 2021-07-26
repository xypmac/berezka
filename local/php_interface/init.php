<?php
use \Bitrix\Main\Loader;

function convertingCodeIntoId($code = '') {

    if (empty($code)) return false;

    Loader::includeModule('iblock');

    $iblockResult = \Bitrix\Iblock\IblockTable::getList(
        [
            'order' => ['IBLOCK_TYPE_ID'=>'ASC','SORT'=>'ASC','ID'=>'DESC'],
            'filter' => ['CODE' => $code],
            'select' => ['ID'],
        ]
    );

    $iblock=$iblockResult->fetch();

    if ($iblock === false)
        return $iblock;
    else
        return $iblock['ID'];
}