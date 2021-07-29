<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
CModule::IncludeModule('falbar.totop');
$allInfo = \Falbar\ToTop\Main::getAll();
?>
<?if (!empty($arResult)):?>
    <div class="col-xl-2 col-md-3 col-sm-3 order-sm-1 order-2 col-1 header__menu menu">
        <div class="menu__button"><span></span></div>
        <nav class="menu__wrapper">
            <ul class="menu__list">
                <li class="menu__item menu__item-logo">
                    <a class="header__logo logo" href="/">
                        <img class="logo__img" src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="logo">
                    </a>
                </li>
                <?
                foreach($arResult as $arItem):
                    if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                        continue;
                    ?>
                <?if($arItem["SELECTED"]):?>
                    <li class="menu__item selected">
                        <a href="<?=$arItem["LINK"]?>" class="menu__link"><?=$arItem["TEXT"]?></a>
                    </li>
                <?else:?>
                    <li class="menu__item">
                        <a href="<?=$arItem["LINK"]?>" class="menu__link"><?=$arItem["TEXT"]?></a>
                    </li>
                <?endif?>

                <?endforeach?>

                <li class="menu__item menu__item-contacts">
                    <?
                    if (!empty($allInfo['address_complex'])) {
                        ?>
                        <a class="menu__link menu__link-adress"><?=$allInfo['address_complex'];?></a>
                        <?
                    }
                    ?>
                    <?
                    if (!empty($allInfo['main_phone'])) {
                        ?>
                        <a class="menu__link menu__link-phone" href="tel:<?=$allInfo['main_phone'];?>"><?=$allInfo['main_phone'];?></a>
                        <?
                    }
                    ?>
                    <?
                    if (!empty($allInfo['second_phone'])) {
                        ?>
                        <a class="menu__link menu__link-phone" href="tel: <?=$allInfo['second_phone'];?>"><?=$allInfo['second_phone'];?></a>
                        <?
                    }
                    ?>
                </li>
                <li class="menu__item menu__item-social">
                    <!-- social -->
                    <ul class="social">

                        <?
                        if (!empty($allInfo['link_vk'])) {
                            ?>
                            <li class="social__item">
                                <a href="<?=$allInfo['link_vk'];?>" class="social__link social__link-vk"></a>
                            </li>
                            <?
                        }
                        ?>
                        <?
                        if (!empty($allInfo['link_youtube'])) {
                            ?>
                            <li class="social__item">
                                <a href="<?=$allInfo['link_youtube'];?>" class="social__link social__link-youtube"></a>
                            </li>
                            <?
                        }
                        ?>
                        <?
                        if (!empty($allInfo['link_fb'])) {
                            ?>
                            <li class="social__item">
                                <a href="<?=$allInfo['link_fb'];?>" class="social__link social__link-facebook"></a>
                            </li>
                            <?
                        }
                        ?>
                        <?
                        if (!empty($allInfo['link_insta'])) {
                            ?>
                            <li class="social__item">
                                <a href="<?=$allInfo['link_insta'];?>" class="social__link social__link-inst"></a>
                            </li>
                            <?
                        }
                        ?>
                        <?
                        if (!empty($allInfo['link_ok'])) {
                            ?>
                            <li class="social__item">
                                <a href="<?=$allInfo['link_ok'];?>" class="social__link social__link-ok"></a>
                            </li>
                            <?
                        }
                        ?>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
<?endif?>

