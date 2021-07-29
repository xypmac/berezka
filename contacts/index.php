<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

<section class="section section-information">
    <div class="container">
        <div class="row">
            <div class="col-12 information information-right">
                <div class="information__img information__img-contacts"></div>
                <div class="information__wrapper information__wrapper-green">
                    <div class="section__title information__title">
                        <h2 class="section__title-text information__title-text">Контакты</h2>
                        <span class="section__title-line information__title-line"></span>
                    </div>
                    <?if (!empty($allInfo['address_office'])) {?>
                    <div class="information__text">
                        ООО «Оздоровительный комплекс «Березка» Офис продаж: <?=$allInfo['address_office'];?>
                    </div>
                    <?}?>
                    <div class="card card-blue card-angles information__card">
                        <div class="card__img"></div>
                        <div class="card__wrapper">
                            <div class="card__text">
                                <ul>
                                    <li>Телефон:</li>
                                    <?if (!empty($allInfo['main_phone'])) {?>
                                    <li>
                                        <a href="tel:<?=$allInfo['main_phone'];?>" class="card__link"><?=$allInfo['main_phone'];?></a>
                                    </li>
                                    <?}?>
                                    <?if (!empty($allInfo['second_phone'])) {?>
                                    <li>
                                        <a href="tel:<?=$allInfo['second_phone'];?>" class="card__link"><?=$allInfo['second_phone'];?></a>
                                    </li>
                                    <?}?>
                                    <?if (!empty($allInfo['working_hours'])) {?>
                                        <li> Режим работы: </li>
                                        <li><?=$allInfo['working_hours'];?></li>
                                    <?}?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?$APPLICATION->IncludeComponent("bitrix:news.list","contacts",Array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "general_information",
        "IBLOCK_ID" => convertingCodeIntoId('contactslist'),
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
        //"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
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

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
