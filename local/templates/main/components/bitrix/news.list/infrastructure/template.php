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
<section class="section section-infrastructure">
    <div class="container">
        <div class="infrastructure">
            <div class="section__title infrastructure__title">
                <h2 class="section__title-text infrastructure__title-text"><?=$arResult['NAME'];?></h2>
                <span class="section__title-line infrastructure__title-line"></span>
            </div>
            <div class="infrastructure__wrapper">
                <?foreach ($arResult['ITEMS'] as $key => $val) {?>
                <div class="infrastructure__item">
                    <div class="infrastructure__item-img" style="background: url(<?=$val['PREVIEW_PICTURE']['SAFE_SRC'];?>) no-repeat center;background-size: contain;"></div>
                    <p class="infrastructure__item-text"><?=$val['NAME'];?></p>
                    <?if (!empty($val['PREVIEW_TEXT'])) {?>
                        <span class="infrastructure__item-helper"><?=$val['PREVIEW_TEXT'];?></span>
                    <?}?>
                </div>
                <?}?>
            </div>
        </div>
    </div>
</section>

<?}?>

