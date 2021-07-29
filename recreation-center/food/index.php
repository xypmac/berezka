<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Питание");
?>

<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/include/summer_cump_food_1.php"
    )
);?>

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
        "CACHE_GROUPS" => "Y"
    )
);?>


<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/include/summer_cump_food_2.php"
    )
);?>

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
        "CACHE_GROUPS" => "Y"
    )
);?>

<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/include/summer_cump_food_3.php"
    )
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
