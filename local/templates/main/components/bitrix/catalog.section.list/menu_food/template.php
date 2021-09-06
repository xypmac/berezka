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
CJSCore::Init(array("jquery"));
?>

<section class="section-foods foods">
    <div class="container">
        <div class="row">
            <div class="foods__wrapper">
                <?foreach ($arResult['SECTIONS'] as $key => $section) {?>
                <div onclick="call_menu_window(<?=$section['ID']?>);" data-id="<?=$section['ID']?>" class="foods__item food">
                    <img src="<?= $section['PICTURE']['SRC']; ?>" alt="<?=$section['NAME'];?>" class="food__img">
                    <div class="food__title food__title-orange">
                        <span class="food__title-name"><?=$section['NAME'];?></span>
                        <span class="food__title-ptice"><?=$section['UF_PRICE_CANTEEN']?> руб</span>
                    </div>
                    <div class="food__more"><button class="food__more-button">Подробнее</button></div>
                </div>
                <?}?>
            </div>
        </div>
    </div>
</section>