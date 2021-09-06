<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Питание");
?>

<?
Bitrix\Main\Loader::includeModule('iblock');
$dbItems = \Bitrix\Iblock\IblockTable::getList(array(
    'order' => array('SORT' => 'ASC'), // сортировка
    'select' => array('ID', 'NAME', 'CODE', 'API_CODE', 'LIST_PAGE_URL', 'DESCRIPTION'), // выбираемые поля, без свойств. Свойства можно получать на старом ядре \CIBlockElement::getProperty
    'filter' => array('ID' => 22), // фильтр только по полям элемента, свойства (PROPERTY) использовать нельзя
    'cache' => array( // Кеш запроса, почему-то в офф. документации об этом умалчивают
        'ttl' => 3600,
        'cache_joins' => true
    ),
));

while ($arItem = $dbItems->fetch()) {
    $arrIblockList[$arItem['CODE']] = ['NAME' => $arItem['NAME'], 'LIST_PAGE_URL' => $arItem['LIST_PAGE_URL'], 'DESCRIPTION' => $arItem['DESCRIPTION']];
}
?>

<section class="section-nutrition">
    <div class="container-fluid">
        <div class="row">
            <div class="nutrition__wrapper nutrition__wrapper-table">
                <div class="nutrition">
                    <div class="section__title nutrition__title">
                        <h3 class="section__title-text nutrition__title-text"><?=$arrIblockList['food']['NAME'];?></h3>
                        <span class="section__title-line nutrition__title-line"></span>
                    </div>
                    <div class="nutrition__text">
                        <?=$arrIblockList['food']['DESCRIPTION'];?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?
$foodType = ['UF_LOCATION_FOOD' => '1'];
?>

<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list","menu_food",
    Array(
        "VIEW_MODE" => "TEXT",
        "SHOW_PARENT_NAME" => "Y",
        "IBLOCK_TYPE" => "recreation_center",
        "IBLOCK_ID" => convertingCodeIntoId('foodmenu'),
        "SECTION_ID" => 0,
        "SECTION_CODE" => "",
        "SECTION_URL" => "",
        "COUNT_ELEMENTS" => "N",
        "TOP_DEPTH" => "1",
        "SECTION_FIELDS" => ["UF_LOCATION_FOOD", "UF_PRICE_CANTEEN"],
        "SECTION_USER_FIELDS" => "",
        "ADD_SECTIONS_CHAIN" => "Y",
        "FILTER_NAME" => "foodType",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_NOTES" => "",
        "CACHE_GROUPS" => "Y",
        "VIEW_MODE" => "LINE"
    )
);?>

<section class="section-nutrition">
    <div class="container-fluid">
        <div class="row">
            <div class="nutrition__wrapper nutrition__wrapper-banquet">
                <div class="nutrition nutrition-orange nutrition-right">
                    <div class="section__title nutrition__title">
                        <h3 class="section__title-text nutrition__title-text">Банкеты и фуршеты</h3>
                        <span class="section__title-line nutrition__title-line"></span>
                    </div>
                    <div class="nutrition__text">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/summer_cump_food_2.php"
                            )
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?
$foodType = ['UF_LOCATION_FOOD' => '2'];
?>

<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list","menu_food",
    Array(
        "VIEW_MODE" => "TEXT",
        "SHOW_PARENT_NAME" => "Y",
        "IBLOCK_TYPE" => "recreation_center",
        "IBLOCK_ID" => convertingCodeIntoId('foodmenu'),
        "SECTION_ID" => 0,
        "SECTION_CODE" => "",
        "SECTION_URL" => "",
        "COUNT_ELEMENTS" => "N",
        "TOP_DEPTH" => "1",
        "SECTION_FIELDS" => ["UF_LOCATION_FOOD", "UF_PRICE_CANTEEN"],
        "SECTION_USER_FIELDS" => "",
        "ADD_SECTIONS_CHAIN" => "Y",
        "FILTER_NAME" => "foodType",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_NOTES" => "",
        "CACHE_GROUPS" => "Y",
        "VIEW_MODE" => "LINE"
    )
);?>

<section class="section-nutrition">
    <div class="container-fluid">
        <div class="row">
            <div class="nutrition__wrapper nutrition__wrapper-buffet">
                <div class="nutrition nutrition-blue">
                    <div class="section__title nutrition__title">
                        <h3 class="section__title-text nutrition__title-text">Банкеты и фуршеты</h3>
                        <span class="section__title-line nutrition__title-line"></span>
                    </div>
                    <div class="nutrition__text">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/summer_cump_food_3.php"
                            )
                        );?>
                    </div>
                    <a href="/recreation-center/food/banquets-and-buffets/" class="button button-transparent nutrition__button nutrition__button-blue">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
