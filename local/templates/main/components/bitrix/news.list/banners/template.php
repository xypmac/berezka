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

<?
if (!empty($arResult['ITEMS'])) {
?>
    <section class="section-slaider">
        <div class="container-fluid">
            <div class="row">
                <div class="slaider">
                    <?foreach ($arResult['ITEMS'] as $banner) {?>
                        <?if (empty($banner['PREVIEW_PICTURE']['SAFE_SRC'])) continue;?>
                        <div class="slaid" style="background: url(<?=$banner['PREVIEW_PICTURE']['SAFE_SRC']?>) no-repeat center;background-size: cover;">
                            <div class="slaid__wrapper">
                                <h3 class="slaid__title"><?=$banner['NAME'];?></h3>
                                <?if (!empty($banner['PREVIEW_TEXT'])) {?>
                                <div class="slaid__text"><?=$banner['PREVIEW_TEXT'];?></div>
                                <?}?>
                                <div class="slaid__img"></div>
                            </div>
                        </div>
                    <?}?>
                </div>
            </div>
        </div>
    </section>
<?
}
?>
        




