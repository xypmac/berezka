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

<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="contacts-form">
<?=bitrix_sessid_post()?>
	<div class="row gutters-default">
		<div class="col-12">
			<h3>Форма контакты</h3>
		</div>
		<div class="col-xl-4 col-sm-6 col-12">
			<div class="form-field">
				<input placeholder="<?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?> *<?endif?>" type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
			</div>
		</div>
		<div class="col-xl-4 col-sm-6 col-12">
			<div class="form-field">
				<input placeholder="<?=GetMessage("MFT_PHONE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?> *<?endif?>" type="text" name="phone" value="">
			</div>
		</div>
		<div class="col-xl-4 col-12">
			<div class="form-field">
				<input placeholder="<?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?> *<?endif?>" type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
			</div>
		</div>
		<div class="col-12">
			<div class="form-field">
				<label for="contact-message"><?=GetMessage("MFT_MESSAGE")?></label>
				<textarea name="MESSAGE" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>
			</div>
		</div>
		<?if($arParams["USE_CAPTCHA"] == "Y"):?>
		<div class="col-12">
			<div class="form-field captcha-c">
				<div>
					<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
					<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
					<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
				</div>
				<div>
					<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
					<input type="text" name="captcha_word" size="30" maxlength="50" value="">
				</div>
			</div>
		</div>
		<?endif;?>
		<div class="col-12">
			<div class="form-btn">
				<input type="hidden" name="title" value="<?=$arParams['TITLE_MODAL'];?>">
				<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
				<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="btn ripple">
			</div>
		</div>
	</div>
</form>
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	?>
	<div class="error">
	<?
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);

	?>
	</div>
	<?
}
?>
<?
if(isset($arResult['OK_MESSAGE']))
{
	?><div class="succses"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>