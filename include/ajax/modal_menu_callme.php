<?php
error_reporting(0);
ini_set("display_errors", false);
ini_set("display_startup_errors", false);
define("NO_KEEP_STATISTIC", true);
define("PUBLIC_AJAX_MODE", true);
define("STOP_STATISTICS", true);
define("NO_AGENT_STATISTIC", true);
define("NO_AGENT_CHECK", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->RestartBuffer();
$APPLICATION->ShowAjaxHead();
header('Content-Type: text/html; charset='.LANG_CHARSET);

use \Bitrix\Main\Loader,
    \Bitrix\Main\Diag\Debug,
    \Bitrix\Iblock\Elements,
    Bitrix\Main\Application;

$request = Application::getInstance()->getContext()->getRequest();

$secId = $request->getQuery("id_section");
$iblockId = 24;

Loader::includeModule('iblock');

$offers_main_menu = Elements\ElementOffersmenuTable::getList([
    'filter' => [
        'ACTIVE' => 'Y'
    ],
    'order' => [
        'SORT' => 'ASC',
    ],
    'select' => ['ID', 'NAME', 'IBLOCK_SECTION_ID', 'WEIGHT_' => 'WEIGHT'],
])->fetchAll();

foreach ($offers_main_menu as $k => $v) {
    $arrOffersMainMenu[$v['ID']] = $v;
}

$main_menu = Elements\ElementFoodmenuTable::getList([
    'filter' => [
        'IBLOCK_SECTION_ID' => $secId,
        'ACTIVE' => 'Y'
    ],
    'order' => [
        'SORT' => 'ASC',
    ],
    'select' => ['ID', 'NAME', 'IBLOCK_SECTION_ID', 'WEIGHT_' => 'WEIGHT', 'ELEMENT_MENU_' => 'ELEMENT_MENU'],
])->fetchAll();
foreach ($main_menu as $element) {
    if (is_null($element['ELEMENT_MENU_IBLOCK_GENERIC_VALUE'])) {
        $menu[$element['ID']] = $element;
    } else {
        $menu[$element['ID']]['NAME'] = $element['NAME'];
        if (!empty($arrOffersMainMenu[$element['ELEMENT_MENU_IBLOCK_GENERIC_VALUE']])) {
            $menu[$element['ID']]['LIST_DISHES'][] = $arrOffersMainMenu[$element['ELEMENT_MENU_IBLOCK_GENERIC_VALUE']];
        }
    }
}

$entity = \Bitrix\Iblock\Model\Section::compileEntityByIblock($iblockId);

$rsSection = $entity::getList(array(
    "filter" => array(
        "IBLOCK_ID" => $iblockId,
        "ID" => $secId,
        "ACTIVE" => "Y",
        "GLOBAL_ACTIVE" => "Y"
    ),
    "select" => array("NAME", "UF_PRICE_CANTEEN"),
));

$arSection=$rsSection->Fetch();

?>
    <div class="popup__fade meal__fade">
        <div class="popup__modal meal__popup">
            <div class="meal__title">
                <div class="meal__title-name"><?=$arSection['NAME'];?></div>
                <div class="meal__title-wrapper">
                    <div class="meal__title-item">Стоимость: <?=$arSection['UF_PRICE_CANTEEN'];?> руб.</div>
                    <div class="meal__title-item">Выход порции</div>
                </div>
            </div>
            <div class="meal__wrapper">
                <?if (empty($menu)) {?>
                    <p style="margin: 40px 0">Комплексный обед состоит из салата, первого и второго блюда и напитка. Возможно согласование меню.</p>
                <?} else {?>
                    <ol class="meal__list">
                        <?
                        foreach ($menu as $keyMenu => $elemMenu) {
                            if (empty($elemMenu['LIST_DISHES'])) {
                        ?>
                                <li class="meal__item">
                                    <span class="meal__item-name"><?=$elemMenu['NAME'];?></span>
                                    <span class="meal__item-size"><?=$elemMenu['WEIGHT_IBLOCK_GENERIC_VALUE'];?></span>
                                </li>
                            <?} else {?>
                                <li class="meal__item meal__item-submenu"><span class="meal__item-name"><?=$elemMenu['NAME'];?>: </span>
                                    <ul class="meal__submenu">
                                        <?foreach ($elemMenu['LIST_DISHES'] as $keyDish => $dish) {?>
                                            <li>
                                                <span class="meal__item-name"><?=$dish['NAME'];?></span>
                                                <span class="meal__item-size"><?=$dish['WEIGHT_IBLOCK_GENERIC_VALUE'];?></span>
                                            </li>
                                        <?}?>
                                    </ul>
                                </li>
                            <?}
                        }?>
                    </ol>
                <?}?>
                <button class="meal__button">Время питания согласовывается</button>
            </div>
            <span class="popup__close meal__close"><i class="bi bi-x "></i></span>
        </div>
    </div>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
