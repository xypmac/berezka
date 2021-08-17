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
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-12">

				<div class="section-heading heading-center">
					<div class="section-subheading">Нравится?</div>
					<h2><?=$arParams['TITLE_MODAL'];?></h2>
				</div>

				<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="services-form">
				<?=bitrix_sessid_post()?>

					<div class="list-fields">
						<div>
							<input placeholder="<?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?> *<?endif?>" type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
						</div>
						<div>
							<input placeholder="<?=GetMessage("MFT_PHONE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?> *<?endif?>" type="text" name="phone" value="">
						</div>
						<input type="hidden" name="title" value="<?=$arParams['TITLE_MODAL'];?>">

						<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
						<input type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>" class="btn ripple">
					</div>

					<?if($arParams["USE_CAPTCHA"] == "Y"):?>
					<div class="mf-captcha">
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
					<?endif;?>

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
			</div>
		</div>
	</div>
</section>