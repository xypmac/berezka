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

<section class="section section-comments">
    <div class="container">
        <div class="row">
            <div class="section__title comments__title">
                <h2 class="section__title-text comments__title-text"><?=$arResult['NAME'];?></h2>
                <span class="section__title-line comments__title-line"></span>
            </div>
        </div>
        <div class="row">
            <div class="comments">
                <?foreach ($arResult['ITEMS'] as $key => $comment) {?>
                <div class="comments__item">
                    <div class="comment">
                        <div class="comment__text"><?=$comment['PREVIEW_TEXT'];?></div>

                        <a target="_blank" href="<?=$comment['PROPERTIES']['LINK_SOCIAL']['VALUE'];?>" class="comment__name"><?=$comment['PROPERTIES']['NICKNAME']['VALUE'];?></a>
                        <p class="comment__date"><?=$comment['PROPERTIES']['DATE_REVIEW']['VALUE'];?></p>
                    </div>
                </div>
                <?}?>
            </div>
        </div>
    </div>
</section>
<?}?>