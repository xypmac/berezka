<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

?>
<div class="mfeedback">

    <div class="form__fade">
        <div class="form__wrapper">
            <a onclick="close_modal();" class="form__close"><i class="bi bi-x"></i></a>

            <h4 class="form__title"><?=$arParams['TITLE_MODAL'];?></h4>
            <form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="form">
                <?=bitrix_sessid_post()?>

                <?
                if(isset($arResult['OK_MESSAGE']))
                {
                    ?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
                    die();
                }
                ?>

                <?if (array_search('NAME', $arParams['DISPLAY_FIELDS']) !== false) {?>
                    <p class="form__item">
                        <label class="form__label <?if(in_array("NAME", $arParams["REQUIRED_FIELDS"])):?>required__feilds<?endif?>" for="name"><?=GetMessage("MFT_NAME")?></label>
                        <input name="user_name" type="text" class="form__input" id="name" value="<?=$arResult["AUTHOR_NAME"]?>">
                    </p>
                <?}?>

                <?if (array_search('EMAIL', $arParams['DISPLAY_FIELDS']) !== false) {?>
                <div class="mf-email">
                    <input placeholder="<?=GetMessage("MFT_EMAIL")?><?if(in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?> *<?endif?>" type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
                </div>
                <?}?>

                <?if (array_search('PHONE', $arParams['DISPLAY_FIELDS']) !== false) {?>
                <div class="mf-phone">
                    <input placeholder="<?=GetMessage("MFT_PHONE")?><?if(in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?> *<?endif?>" type="text" name="phone" value="">
                </div>
                <?}?>

                <?if (array_search('MESSAGE', $arParams['DISPLAY_FIELDS']) !== false) {?>
                    <p class="form__item">
                        <label class="form__label <?if(in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?>required__feilds<?endif?>" for="text"><?=GetMessage("MFT_MESSAGE")?></label>
                        <textarea name="MESSAGE" id="text" class="form__textarea"><?=$arResult["MESSAGE"]?></textarea>
                    </p>
                <?}?>

                <input type="hidden" name="title" value="<?=$arParams['TITLE_MODAL'];?>">

                <?if($arParams["USE_CAPTCHA"] == "Y"):?>
                <div class="mf-captcha">
                    <div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
                    <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
                    <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
                    <div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
                    <input type="text" name="captcha_word" size="30" maxlength="50" value="">
                </div>
                <?endif;?>

            <?if(!empty($arResult["ERROR_MESSAGE"]))
            {
                foreach($arResult["ERROR_MESSAGE"] as $v)
                    ShowError($v);
            }
            ?>

                <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                <input  class="form__submit" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
            </form>
        </div>
    </div>
</div>