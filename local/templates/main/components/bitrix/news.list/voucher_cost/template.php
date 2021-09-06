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

//\Bitrix\Main\Diag\Debug::dump($arResult['ITEMS']);



if (!empty($arResult['ITEMS'])) {
?>

<section class="section-notes">
    <div class="container">
        <div class="row">
            <h2 class="notes__title"><?=$arResult['NAME']?></h2>
        </div>
    </div>
    <?
    array_filter($arResult['ITEMS'], function ($v, $k){
        if ($k & 1) {
            ?>
            <article class="article-notes lines-three">
                <div class="container">
                    <div class="row">
                        <div class="col-12 notes__wrapper notes__wrapper-first notes__wrapper-right">
                            <div class="notes__item notes__item-img">
                                <img class="notes__img" src="<?=$v['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$v['PREVIEW_PICTURE']['ALT'];?>">
                            </div>
                            <div class="notes__item notes__item-text note note-green">
                                <div class="note__title">
                                    <?=$v['NAME'];?>
                                </div>
                                <div class="note__text"><?=$v['DETAIL_TEXT'];?></div>
                                <?if (!empty($v['PREVIEW_TEXT'])) {?>
                                <div class="note__card note__card-right note__card-orange">
                                    <div class="note__card-text">
                                        <?=$v['PREVIEW_TEXT'];?>
                                    </div>
                                </div>
                                <?}?>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <?
        } else {
            ?>
            <article class="article-notes lines-two">
                <div class="container">
                    <div class="row">
                        <div class="col-12 notes__wrapper notes__wrapper-left">
                            <div class="notes__item notes__item-img">
                                <img class="notes__img notes__img-left" src="<?=$v['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$v['PREVIEW_PICTURE']['ALT'];?>">
                            </div>
                            <div class="notes__item notes__item-text note note-orange">
                                <div class="note__title">
                                    <?=$v['NAME'];?>
                                </div>
                                <div class="note__text"><?=$v['DETAIL_TEXT'];?></div>
                                <?if (!empty($v['PREVIEW_TEXT'])) {?>
                                    <div class="note__card note__card-left note__card-orange">
                                        <div class="note__card-text">
                                            <?=$v['PREVIEW_TEXT'];?>
                                        </div>
                                    </div>
                                <?}?>
                            </div>
                        </div>
                    </div>
                </div>

            </article>
            <?
        }
    }, ARRAY_FILTER_USE_BOTH );
    ?>
</section>

<?}?>