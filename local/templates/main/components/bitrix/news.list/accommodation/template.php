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
if ($arResult['ITEMS']) {
?>

<section class="section-accommodation">
    <div class="container">
        <div class="row">
            <h2 class="accommodation__title"><?=$arResult['NAME'];?></h2>
        </div>
        <div class="row">
            <div class="accommodation">
                <div class="accommodation__preview">
                    <img src="<?=$arResult['ITEMS'][0]['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$arResult['NAME'];?>" class="accommodation__img">
                </div>
                <div class="accommodation__wrapper">
                    <?foreach ($arResult['ITEMS'] as $k => $v) {?>
                    <div class="accommodation__item">
                        <img src="<?=$v['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$v['PREVIEW_PICTURE']['ALT'];?>" class="accommodation__img">
                        <?if (!empty($v['PREVIEW_TEXT'])) {?>
                            <span class="accommodation__discription"><?=$v['PREVIEW_TEXT'];?></span>
                        <?}?>
                    </div>
                    <?}?>
                </div>
            </div>
        </div>
    </div>
</section>
<?
}
?>
