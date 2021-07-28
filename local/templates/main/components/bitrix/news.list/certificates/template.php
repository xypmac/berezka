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

<section class="section-documents">
    <div class="container">
        <div class="row">
            <div class="section__title documents__title">
                <h2 class="section__title-text documents__title-text"><?=$arResult['NAME'];?></h2>
            </div>

        </div>
        <div class="row">
            <div class="col-12 documents__wrapper">

                <?foreach ($arResult['ITEMS'] as $arrDoc) {?>

                <div class="documents__column">
                    <?foreach ($arrDoc as $keyDoc => $valDoc) {?>
                        <?if (empty($valDoc['PREVIEW_PICTURE'])) continue;?>
                    <div class="documents__item">
                        <div class="documents__img-wrapper">
                            <img src="<?=$valDoc['PREVIEW_PICTURE']['SAFE_SRC'];?>" alt="<?=$valDoc['PREVIEW_PICTURE']['ALT'];?>" class="documents__img">
                        </div>
                        <div class="documents__discription">
                            <span class="documents__discription-white"><?=$valDoc['NAME'];?></span>
                            <?if ($valDoc['PREVIEW_TEXT']){?>
                                <span class="documents__discription-black"><?=$valDoc['PREVIEW_TEXT'];?></span>
                            <?}?>
                        </div>
                    </div>
                    <?}?>
                </div>

                <?}?>

            </div>
        </div>
        <div class="documents__fade">
            <div class="documents__window">
                <a href="" class="documents__close" id="noRemove"><i class="bi bi-x-circle"></i></a>
            </div>
        </div>
    </div>
</section>
<?
}
?>

