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

if (!empty($arResult['ITEMS'])) {
?>

<section class="section section-contacts">
    <div class="container">
        <div class="row">
            <table class="contacts__table">
                <?foreach ($arResult['ITEMS'] as $contact) {?>
                    <tr class="contacts__row">
                        <td class="contacts__item">
                            <span class="contacts__post"><?=$contact['NAME'];?></span>
                            <?if (!empty($contact['PROPERTIES']['FIO']['VALUE'])) {?>
                            <span class="contacts__name"><?=$contact['PROPERTIES']['FIO']['VALUE'];?></span>
                            <?}?>
                        </td>
                        <?if (!empty($contact['PROPERTIES']['PHONE']['VALUE'])) {?>
                        <td class="contacts__item">
                            <a href="tel:<?=$contact['PROPERTIES']['PHONE']['VALUE'];?>" class="contacts__phone"><?=$contact['PROPERTIES']['PHONE']['VALUE'];?></a>
                        </td>
                        <?}?>
                    </tr>
                <?}?>
            </table>
        </div>
    </div>
</section>
<?
}
?>