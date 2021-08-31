<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);

foreach ($arResult['ITEMS'] as $k => $v) {
    if (!empty($v['IBLOCK_SECTION_ID']))
        $idsSec[] = $v['IBLOCK_SECTION_ID'];
}


$arFilter = Array('IBLOCK_ID'=>$arResult['ID'], 'ACTIVE'=>'Y');
$db_list = CIBlockSection::GetList(Array('id'=>'desc'), $arFilter, true);
while($ar_result = $db_list->GetNext())
{
    $arResult['SECTION_INFO'][$ar_result['ID']] = $ar_result['NAME'];
}

foreach ($arResult['ITEMS'] as $k => $v) {
    $arResult['FILTER_ELEM'][$v['IBLOCK_SECTION_ID']][] = $v;
}


//\Bitrix\Main\Diag\Debug::dump($arResult['FILTER_ELEM']);
//die();