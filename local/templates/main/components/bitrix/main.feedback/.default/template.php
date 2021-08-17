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
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(isset($arResult['OK_MESSAGE']))
{
    ?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
    die();
}
?>
	<div class="form__fade">
		<div class="form__wrapper">
			<a class="form__close"><i class="bi bi-x"></i></a>
			<h4 class="form__title">
				Заполните форму, чтобы оставить свой отзыв
			</h4>
			<form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="form">
                <?=bitrix_sessid_post()?>
				<p class="form__item">
					<label class="form__label" for="name">Вашe имя</label>
					<input type="text" class="form__input" id="name">
				</p>
				<p class="form__item">
					<label class="form__label" for="name">Ваш отзыв</label>
					<textarea name="" id="text" class="form__textarea"></textarea>
				</p>
				<p class="form__item form__item-helper">
					<span style="color: red;">*</span>- обязательно для заполнения
				</p>
				<p class="form__item">
					<button class="form__submit" type="submit">Оставить отзыв</button>
					<button class="form__reset"> Отмена</button>
				</p>
			</form>
		</div>
	</div>

	
</div>