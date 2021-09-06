<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
?>
<div class="container">
    <div class="row">
        <h2 class="notes__title"><?=$arResult['NAME'];?></h2>
    </div>
</div>

<?
$i = 0;
foreach ($arResult['ITEMS'] as $key => $value) {
    if ($value['PROPERTIES']['TYPE']['VALUE_XML_ID'] == 'type') {
        if ($i & 1) {
        ?>
            <section class="section-notes">
                <article class="article-notes lines-two">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 notes__wrapper notes__wrapper-right">
                                <div class="notes__item notes__item-img notes__item-img-right">
                                    <img class="notes__img notes__img-left" src="<?=$value['PREVIEW_PICTURE']['SRC'];?>" alt="">
                                </div>
                                <div class="notes__item notes__item-text note note-green">
                                    <div class="note__title">
                                        <?=$value['NAME'];?>
                                    </div>
                                    <div class="note__text">
                                        <?=$value['PREVIEW_TEXT'];?>
                                    </div>
                                    <div class="note__card note__card-right note__card-orange">
                                        <div class="note__card-text">
                                            <?=$value['DETAIL_TEXT'];?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="section-banquet banquet">
                <div class="container-fluid">
                    <div class="row">
                        <div class="banquet__wrapper">
                            <div class="banquet__title">
                                Меню банкета
                            </div>
                            <div class="banquet__text">
                                <div class="banquet__icon"></div>
                                <a target="_blank" href="<?=$value['PROPERTIES']['LINK_MENU']['VALUE'];?>" class="banquet__link">Посмотреть</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 banquet__description">
                            <?=$value['PROPERTIES']['DESCRIPTION_BOTTOM']['VALUE']['TEXT'];?>
                        </div>
                    </div>
                </div>
            </section>
        <?
        } else {
            ?>
            <section class="section">
                <article class="article-notes lines-one">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 notes__wrapper notes__wrapper-first notes__wrapper-left">
                                <div class="notes__item notes__item-img notes__item-img-left">
                                    <img class="notes__img notes__img-left" src="<?=$value['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$value['PREVIEW_PICTURE']['ALT'];?>">
                                </div>
                                <div class="notes__item notes__item-text note note-orange">
                                    <div class="note__title">
                                        <?=$value['NAME'];?>
                                    </div>
                                    <div class="note__text">
                                        <?=$value['PREVIEW_TEXT'];?>
                                    </div>
                                    <div class="note__card note__card-left  note__card-pink">
                                        <div class="note__card-text">
                                            <?=$value['DETAIL_TEXT'];?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
            <section class="section-banquet banquet">
                <div class="container-fluid">
                    <div class="row">
                        <div class="banquet__wrapper">
                            <div class="banquet__title">
                                Меню фуршета
                            </div>
                            <div class="banquet__text">
                                <div class="banquet__icon"></div>
                                <a target="_blank" href="<?=$value['PROPERTIES']['LINK_MENU']['VALUE'];?>" class="banquet__link">Посмотреть</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 banquet__description">
                            <?=$value['PROPERTIES']['DESCRIPTION_BOTTOM']['VALUE']['TEXT'];?>
                        </div>
                    </div>
                </div>
            </section>
            <?
        }
        $i++;
    }
}
unset($i);
$i = 0;
?>
<section class="section-place">
    <div class="container">
        <div class="row">
            <h2 class="place__title">
                Места проведения
            </h2>
            <div class="place__wrapper">
                <?
                foreach ($arResult['ITEMS'] as $key => $value) {
                    if ($value['PROPERTIES']['TYPE']['VALUE_XML_ID'] == 'place') {
                        ?>
                        <div class="place__item">
                            <div class="place__img-wrapper">
                                <img src="<?=$value['PREVIEW_PICTURE']['SRC']?>" alt="<?=$value['PREVIEW_PICTURE']['ALT']?>" class="place__img">
                            </div>
                            <div class="place__card place__card-<?echo ($i & 1) ? 'pink' : 'blue';?>">
                                <div class="place__card-text"><?=$value['NAME'];?></div>
                            </div>
                            <div class="place__text"><?=$value['PREVIEW_TEXT'];?></div>
                        </div>
                        <?
                        $i++;
                    }
                }
                ?>
                 <div class="place__item">
                    <div class="place__img-wrapper">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/bg_banquet.jpg" alt="" class="place__img">
                    </div>
                    <div class="place__card place__card-blue">
                        <div class="place__card-text">Столовая</div>
                    </div>
                    <div class="place__text">
                        На базе отдыха работает столовая. Мы предлагаем гибкий подход к организации питания. Это и традиционные каши, омлеты и блинчики на завтрак, солянка, уха, борщ, окрошка, большой выбор вторых блюд на обед, вкусные легкие ужины и, конечно, салаты, компоты, выпечка, фрукты. Можно заказать комплексные завтраки, обеды и ужины или отдельные блюда. Изумительная выпечка: пирожки, сладкие булочки с повидлом, изюмом, расстегаи, этот список можно продолжать бесконечно. Столовая рассчитана на размещение 250 человек, здесь проводят юбилеи, свадьбы, корпоративные вечера. На первом этаже столовой организована многофункциональная площадка. 
                    </div>
                </div>
                <div class="place__item">
                    <div class="place__img-wrapper">
                        <img src="<?=SITE_TEMPLATE_PATH?> /img/place.png" alt="" class="place__img">
                    </div>
                    <div class="place__card place__card-pink">
                        <div class="place__card-text">Кошкин дом</div>
                    </div>
                    <div class="place__text">
                        На базе отдыха работает столовая. Мы предлагаем гибкий подход к организации питания. Это и традиционные каши, омлеты и блинчики на завтрак, солянка, уха, борщ, окрошка, большой выбор вторых блюд на обед, вкусные легкие ужины и, конечно, салаты, компоты, выпечка, фрукты. Можно заказать комплексные завтраки, обеды и ужины или отдельные блюда. Изумительная выпечка: пирожки, сладкие булочки с повидлом, изюмом, расстегаи, этот список можно продолжать бесконечно. Столовая рассчитана на размещение 250 человек, здесь проводят юбилеи, свадьбы, корпоративные вечера. На первом этаже столовой организована многофункциональная площадка. 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
