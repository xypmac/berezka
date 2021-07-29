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

if (!empty($arResult['ITEMS'])) {
?>

<section class="section section-gallery">
    <div class="container">
        <div class="section__title">
            <h2 class="section__title-text"><?=$arResult['NAME'];?></h2>
            <span class="section__title-line"></span>
        </div>
        <div class="gallery">
            <div class="gallery__show">
                <img src="<?=$arResult['ITEMS'][0]['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arResult['ITEMS'][0]['PREVIEW_PICTURE']['ALT']?>">
            </div>
            <div class="gallery__wrapper">
                <?foreach ($arResult['ITEMS'] as $k => $v) {?>
                <div class="gallery__item">
                    <img src="<?=$v['PREVIEW_PICTURE']['SRC']?>" alt="<?=$v['PREVIEW_PICTURE']['ALT']?>" class="gallery__img">
                </div>
                <?}?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<?}?>