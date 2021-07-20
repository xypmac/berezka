<?
/**
* Module: Кнопка наверх
* Author: Anton Kuleshov
* Site: http://falbar.ru/
* File: unstep.php
* Version: 1.0.0
**/

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);

if(!check_bitrix_sessid()){

	return;
}

echo(CAdminMessage::ShowNote(Loc::getMessage("FALBAR_TOTOP_UNSTEP_BEFORE")." ".Loc::getMessage("FALBAR_TOTOP_UNSTEP_AFTER")));
?>

<form action="<? echo($APPLICATION->GetCurPage()); ?>">
	<input type="hidden" name="lang" value="<? echo(LANG); ?>" />
	<input type="submit" value="<? echo(Loc::getMessage("FALBAR_TOTOP_UNSTEP_SUBMIT_BACK")); ?>">
</form>