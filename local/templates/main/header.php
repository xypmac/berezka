<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
    
<!DOCTYPE html>
<html xml:lang="<?=LANGUAGE_ID?>" lang="<?=LANGUAGE_ID?>">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
        <? $APPLICATION->ShowHead(); ?>
       

        <title><? $APPLICATION->ShowTitle(); ?></title>

        <!-- slaider -->
        <!-- <link rel="stylesheet" type="text/css" href="libs/slick/slick.css" />
        <link rel="stylesheet" type="text/css" href="libs/slick/slick-theme.css" /> -->

        <!-- icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        <!-- styles -->
        <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/app.css">
        
    </head>
    <body>
    <? $APPLICATION->ShowPanel(); ?> 
    <!-- header -->
    <header class="header">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-xl-2 col-md-3 col-sm-3 order-sm-1 order-2 col-1 header__menu menu">
                    <div class="menu__button"><span></span></div>
                    <nav class="menu__wrapper">
                        <ul class="menu__list">
                            <li class="menu__item menu__item-logo">
                                <a class="header__logo logo" href="/"><img class="logo__img" src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="logo"></a>
                            </li>
                            <li class="menu__item">
                                <a href="" class="menu__link">Детский лагерь</a>
                            </li>
                            <li class="menu__item">
                                <a href="" class="menu__link">База отдыха</a>
                            </li>
                            <li class="menu__item">
                                <a href="" class="menu__link">О берёзке</a>
                            </li>
                            <li class="menu__item">
                                <a href="" class="menu__link">Разрешительная документация</a>
                            </li>
                            <li class="menu__item">
                                <a href="" class="menu__link">Прайсы</a>
                            </li>
                            <li class="menu__item">
                                <a href="" class="menu__link">Контакты</a>
                            </li>
                            <li class="menu__item menu__item-contacts">
                                <a class="menu__link menu__link-adress" href="">г. Ижевск, 9-й км Як-Бодьинского тракта</a>
                                <a class="menu__link menu__link-phone" href="tel:+7(3412)720928">+7 (3412) 72-09-28</a>
                                <a class="menu__link menu__link-phone" href="tel: +7(3412)560188">+7 (3412) 56-01-88</a>
                            </li>
                            <li class="menu__item menu__item-social">
                                <!-- social -->
                                <ul class="social">
                                    <li class="social__item">
                                        <a href="" class="social__link social__link-vk"></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="" class="social__link social__link-youtube"></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="" class="social__link social__link-facebook"></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="" class="social__link social__link-inst"></a>
                                    </li>
                                    <li class="social__item">
                                        <a href="" class="social__link social__link-ok"></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
                <a href="" class="col-xl-6 col-md-5 col-sm-5 order-3 col-10 header__logo logo"><img class="logo__img" src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt=""></a>
                <div class="col-xl-3 col-md-4 order-sm-3 col-sm-4 order-1 col-12 header__contacts contacts">
                    <a class="contacts__phone" href="tel:+73412720928"><span class="contacts__phone contacts__phone-green">+7 (3412)</span> 72-09-28</a>
                    <p class="contacts__adress">9-й км Як-Бодьинского тракта</p>
                </div>
            </div>
        </div>
    </header> 
    
    
        