<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule('falbar.totop');
$allInfo = \Falbar\ToTop\Main::getAll();
$singleInfo = \Falbar\ToTop\Main::getSingle('main_phone');
convertingCodeIntoId('contactslist');

?>

