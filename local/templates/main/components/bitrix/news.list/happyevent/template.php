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



<section class="section-question">
    <div class="container">
        <div class="questions__wrapper">
            <ul class="questions__list">
                <?foreach ($arResult['ITEMS'] as $k => $v) {?>
                <li class="questions__item question">
                    <p class="question__title"><?=$v['NAME'];?></p>
                    <div class="answer">
                        <?=$v['PREVIEW_TEXT'];?>
                        <?foreach ($v['PROPERTIES']['MORE_PHOTO']['VALUE'] as $imgId) {?>
                            <img class="answer__img" src="<?=CFile::GetPath($imgId);?>">
                        <?}?>
                    </div>
                </li>
                <?}?>
            </ul>
            <div class="answer__wrapper">
                <span class="answer__close"><i class="bi bi-x"></i></span>
            </div>
        </div>
    </div>
</section>
<?
}
?>
