<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Летний лагерь");
?>

<?
$bannerFilter = ['PROPERTY_LIST_SECTION' => '42'];
?>

<?$APPLICATION->IncludeComponent("bitrix:news.list","banners",Array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "general_information",
        "IBLOCK_ID" => convertingCodeIntoId('banners'),
        "NEWS_COUNT" => "20",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "bannerFilter",
        "FIELD_CODE" => Array("ID"),
        "PROPERTY_CODE" => Array("DESCRIPTION"),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "Y",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "Y",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "Y",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "Y",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => ""
    )
);?>
<?
$iblockResult = \Bitrix\Iblock\IblockTable::getList(
    [
        'order' => ['IBLOCK_TYPE_ID'=>'ASC','SORT'=>'ASC','ID'=>'DESC'],
        'filter' => ['CODE' => 'vouchercost'],
        'select' => ['NAME', 'LIST_PAGE_URL'],
    ]
);
$iblockvoucher=$iblockResult->fetch();
?>
<section class="section section-prices">
    <div class="container">
        <div class="prices">
            <div class="prices__img">
            </div>
            <div class="prices__wrapper">
                <div class="section__title prices__title">
                    <h2 class="section__title-text"><?=$iblockvoucher['NAME'];?></h2>
                    <span class="section__title-line"></span>
                </div>
                <div class="prices__text">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/include/summer_cump_price_info.php"
                        )
                    );?>
                </div>
                <a href="<?=$iblockvoucher['LIST_PAGE_URL'];?>" class="button button-green prices__button">Подробнее</a>
            </div>
        </div>
    </div>
</section>

<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/include/booking_module.php"
    )
);?>


<section class="section section-nutrition">
    <div class="container-fluid">
        <div class="row">
            <div class="nutrition__wrapper">
                <div class="nutrition">
                    <div class="section__title nutrition__title">
                        <h3 class="section__title-text nutrition__title-text">Питание</h3>
                        <span class="section__title-line nutrition__title-line"></span>
                    </div>
                    <div class="nutrition__text">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/summer_cump_food.php"
                            )
                        );?>
                    </div>
                    <a href="https://vk.com/doc-9409935_503270674?dl=6f6c568707013b4530" class="button button-transparent nutrition__button">Меню летнего лагеря</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?
$iblockResult = \Bitrix\Iblock\IblockTable::getList(
    [
        'order' => ['IBLOCK_TYPE_ID'=>'ASC','SORT'=>'ASC','ID'=>'DESC'],
        'filter' => ['CODE' => 'accommodation'],
        'select' => ['NAME', 'LIST_PAGE_URL'],
    ]
);
$iblockaccommodation=$iblockResult->fetch();
?>

<!-- section program accommodation-->
<section class="section section-information">
    <div class="container">
        <div class="row">
            <div class="information information-right">
                <div class="information__img information__img-accommodation"></div>
                <div class="information__wrapper information__wrapper-green">
                    <div class="section__title information__title">
                        <h2 class="section__title-text information__title-text"><?=$iblockaccommodation['NAME'];?></h2>
                        <span class="section__title-line information__title-line"></span>
                    </div>
                    <div class="information__text">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/summer_cump_accommodation.php"
                            )
                        );?>
                    </div>
                    <div class="card card-blue information__card ">
                        <div class="card__img"></div>
                        <div class="card__wrapper">
                            <div class="card__text">
                                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => "/include/summer_cump_accommodation_2.php"
                                    )
                                );?>
                            </div>
                            <a href="<?=$iblockaccommodation['LIST_PAGE_URL'];?>" class="button button-transparent card__button card__button-blue">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/include/booking_module_2.php"
    )
);?>

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-md-12 teachers">
                <div class="section__title teachers__title">
                    <h2 class="section__title-text teachers__title-text">Педагогический состав</h2>
                    <span class="section__title-line teachers__title-line"></span>
                </div>
                <div class="teachers__text">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/include/pedagogical_staff.php"
                        )
                    );?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center teachers__row">
            <div class="col-sm-9">
                <p class="teachers__row-text">
                    <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                            "AREA_FILE_SHOW" => "file",
                            "PATH" => "/include/pedagogical_staff_2.php"
                        )
                    );?>
                </p>
            </div>
        </div>
    </div>
</section>

<?$APPLICATION->IncludeComponent("bitrix:news.list","pedagogical_staff",Array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "summer_cump",
        "IBLOCK_ID" => convertingCodeIntoId('pedagogicalstaff'),
        "NEWS_COUNT" => "20",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => Array("ID"),
        "PROPERTY_CODE" => Array("DESCRIPTION"),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "Y",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "Y",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "Y",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "Y",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => ""
    )
);?>

<?
$iblockResult = \Bitrix\Iblock\IblockTable::getList(
    [
        'order' => ['IBLOCK_TYPE_ID'=>'ASC','SORT'=>'ASC','ID'=>'DESC'],
        'filter' => ['CODE' => 'program'],
        'select' => ['NAME', 'LIST_PAGE_URL'],
    ]
);
$iblockprogram=$iblockResult->fetch();
?>

<section class="section section-information section-information-left">
    <div class="container">
        <div class="row">
            <div class="information information-left">
                <div class="information__img information__img-program"></div>
                <div class="information__wrapper information__wrapper-orange">
                    <div class="section__title information__title">
                        <h2 class="section__title-text information__title-text"><?=$iblockprogram['NAME'];?></h2>
                        <span class="section__title-line information__title-line"></span>
                    </div>
                    <div class="information__text">
                        <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/summer_cump_program.php"
                            )
                        );?>
                    </div>
                    <div class="card card-blue card-left information__card">
                        <div class="card__img"></div>
                        <div class="card__wrapper">
                            <div class="card__text">
                                <?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
                                        "AREA_FILE_SHOW" => "file",
                                        "PATH" => "/include/summer_cump_program_2.php"
                                    )
                                );?>
                            </div>
                            <a href="<?=$iblockprogram['LIST_PAGE_URL'];?>" class="button button-transparent card__button card__button-blue">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?
$infrastructureFilter = ['PROPERTY_WHERE' => '44'];
?>
<?$APPLICATION->IncludeComponent("bitrix:news.list","infrastructure",Array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "general_information",
        "IBLOCK_ID" => convertingCodeIntoId('infrastructure'),
        "NEWS_COUNT" => "20",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "infrastructureFilter",
        "FIELD_CODE" => Array("ID"),
        "PROPERTY_CODE" => Array("DESCRIPTION"),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "Y",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "Y",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "Y",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "Y",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => ""
    )
);?>

<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/include/booking_module_3.php"
    )
);?>
<?
$reviewFilter = ['PROPERTY_LINK_INFOBLOCK' => '58'];
?>
<?$APPLICATION->IncludeComponent("bitrix:news.list","review",Array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "summer_cump",
        "IBLOCK_ID" => convertingCodeIntoId('reviews'),
        "NEWS_COUNT" => "20",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "reviewFilter",
        "FIELD_CODE" => Array("ID"),
        "PROPERTY_CODE" => Array("DESCRIPTION"),
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "SET_TITLE" => "N",
        "SET_BROWSER_TITLE" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_LAST_MODIFIED" => "Y",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "HIDE_LINK_WHEN_NO_DETAIL" => "Y",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "INCLUDE_SUBSECTIONS" => "Y",
        "CACHE_TYPE" => "N",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_TITLE" => "Новости",
        "PAGER_SHOW_ALWAYS" => "Y",
        "PAGER_TEMPLATE" => "",
        "PAGER_DESC_NUMBERING" => "Y",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SET_STATUS_404" => "Y",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_ADDITIONAL" => ""
    )
);?>

<?$APPLICATION->IncludeComponent("bitrix:main.include","",Array(
        "AREA_FILE_SHOW" => "file",
        "PATH" => "/include/buttons_form.php"
    )
);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
