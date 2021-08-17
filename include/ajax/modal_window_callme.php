<?require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

$APPLICATION->RestartBuffer();
$APPLICATION->ShowAjaxHead();
header('Content-Type: text/html; charset='.LANG_CHARSET);

$APPLICATION->IncludeComponent("stack:main.feedback","",Array(
        "USE_CAPTCHA"           => "N",
        "OK_TEXT"               => "Спасибо, ваше сообщение принято.",
        "EMAIL_TO"              => "my@email.com",
        "REQUIRED_FIELDS"       =>  ["NAME","MESSAGE"],
        "DISPLAY_FIELDS"        =>  ['NAME', 'MESSAGE'],
        "TITLE_MODAL"           => "Заполните форму, чтобы оставить свой отзыв",
        "EVENT_MESSAGE_ID"      =>  ["5"],
        "AJAX_MODE"             => "Y",
        "AJAX_OPTION_SHADOW"    => "N",
        "AJAX_OPTION_JUMP"      => "N",
        "AJAX_OPTION_STYLE"     => "N",
        "AJAX_OPTION_HISTORY"   => "N",
    )
);
?>