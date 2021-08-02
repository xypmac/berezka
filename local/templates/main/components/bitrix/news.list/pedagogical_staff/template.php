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

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 teachers__list">
                <?foreach ($arResult['ITEMS'] as $k => $v) {?>
                <div class="teachers__item teacher" data-id="0">
                    <div class="teacher__img-wrapper">
                        <img class="teacher__img" src="<?=$v['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$v['PREVIEW_PICTURE']['ALT'];?>">
                    </div>
                    <div class="teacher__text-wrapper">
                        <p class="teacher__name"><?=$v['NAME'];?></p>
                        <span class="teacher__line"></span>
                        <?if (!empty($v['PROPERTIES']['POSITION']['VALUE'])) {?>
                        <div class="teacher__status"><?=$v['PROPERTIES']['POSITION']['VALUE'];?></div>
                        <?}?>
                        <?if (!empty($v['PREVIEW_TEXT'])) {?>
                            <div class="teacher__description"><?=$v['PREVIEW_TEXT'];?></div>
                        <?}?>
                    </div>
                </div>
                <?}?>
            </div>
            <div class="teachers__popup popup-fade">
                <div class="popup">
                </div>
            </div>
        </div>
    </div>

</section>
