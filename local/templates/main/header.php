<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
        <? $APPLICATION->ShowHead(); ?>
        <?
        use Bitrix\Main\Page\Asset;

        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/libs/slick/slick.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/libs/slick/slick-theme.css");
        Asset::getInstance()->addCss("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/app.css");

        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.min.js");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/menu.js");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/form.js");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/libs/slick/slick.js");

        CModule::IncludeModule('falbar.totop');
        $allInfo = \Falbar\ToTop\Main::getAll();
        ?>

        <title><? $APPLICATION->ShowTitle(); ?></title>

    </head>

    <body>
    <? $APPLICATION->ShowPanel(); ?>
    <!-- header -->
    <header class="header">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "main_top",
                    Array(
                        "ROOT_MENU_TYPE"    =>  "top",
                        "MAX_LEVEL" =>  "1",
                        "CHILD_MENU_TYPE"   =>  "top",
                        "USE_EXT"   =>  "Y",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS" => Array()
                    )
                );?>
                <a href="" class="col-xl-6 col-md-5 col-sm-5 order-3 col-10 header__logo logo">
                    <img class="logo__img" src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="">
                </a>
                <div class="col-xl-3 col-md-4 order-sm-3 col-sm-4 order-1 col-12 header__contacts contacts">
                    <?
                    if (!empty($allInfo['main_phone'])) {
                    ?>
                    <a class="contacts__phone" href="tel:<?=$allInfo['main_phone'];?>"><span class="contacts__phone contacts__phone-green"><?=$allInfo['main_phone'];?></span></a>
                    <?
                    }
                    ?>
                    <?
                    if (!empty($allInfo['address_complex'])) {
                    ?>
                    <p class="contacts__adress"><?=$allInfo['address_complex'];?></p>
                    <?
                    }
                    ?>
                </div>
            </div>
        </div>
    </header>
