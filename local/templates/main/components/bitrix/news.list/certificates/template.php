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
?>

<section class="section section-documents">
    <div class="container">
        <div class="row">
            <div class="section__title documents__title">
                <h2 class="section__title-text documents__title-text">Разрешительная документация</h2>
            </div>

        </div>
        <div class="row">
            <div class="col-12 documents__wrapper">
                <div class="documents__column">
                    <div class="documents__item">
                        <img src="<?=$templateFolder?>/img/СЭЗ-2019-Лагерь-Берёзка.-Ижевск.jpg" alt="" class="documents__img">
                        <div class="documents__discription">
                            <span class="documents__discription-white">Санитарно-эпидемиологической заключение</span>
                            <span class="documents__discription-black">Санитарно-эпидемиологической заключение.2019 Лагерь березка. Ижевск </span>
                        </div>
                    </div>
                    <div class="documents__item">
                        <img src="<?=$templateFolder?>/img/Лицензия-на-осуществление-медицинской-деятельности.-22Оборот22-1.jpg" alt="" class="documents__img">
                        <div class="documents__discription">
                            <span class="documents__discription-white">Санитарно-эпидемиологической заключение</span>
                            <span class="documents__discription-black">Санитарно-эпидемиологической заключение.2019 Лагерь березка. Ижевск </span>
                        </div>
                    </div>
                    <div class="documents__item">
                        <img src="<?=$templateFolder?>/img/Приложение-к-сертификату-соответсивия-№1..jpg" alt="" class="documents__img">
                        <div class="documents__discription">
                            <span class="documents__discription-white">Санитарно-эпидемиологической заключение</span>
                            <span class="documents__discription-black">Санитарно-эпидемиологической заключение.2019 Лагерь березка. Ижевск </span>
                        </div>
                    </div>
                    <div class="documents__item">
                        <img src="<?=$templateFolder?>/img/свидетельство-категория.jpg" alt="" class="documents__img">
                        <div class="documents__discription">
                            <span class="documents__discription-white">Санитарно-эпидемиологической заключение</span>
                            <span class="documents__discription-black">Санитарно-эпидемиологической заключение.2019 Лагерь березка. Ижевск </span>
                        </div>
                    </div>
                </div>
                <div class="documents__column">
                    <div class="documents__item">
                        <img src="<?=$templateFolder?>/img/Лицензия-на-осуществление-медицинской-деятельности.-22Лицо22-1.jpg" alt="" class="documents__img">
                        <div class="documents__discription">
                            <span class="documents__discription-white">Санитарно-эпидемиологической заключение</span>
                            <span class="documents__discription-black">Санитарно-эпидемиологической заключение.2019 Лагерь березка. Ижевск </span>
                        </div>
                    </div>
                    <div class="documents__item">
                        <img src="<?=$templateFolder?>/img/Сертификат-соответствия-1.jpg" alt="" class="documents__img">
                        <div class="documents__discription">
                            <span class="documents__discription-white">Санитарно-эпидемиологической заключение</span>
                            <span class="documents__discription-black">Санитарно-эпидемиологической заключение.2019 Лагерь березка. Ижевск </span>
                        </div>
                    </div>
                    <div class="documents__item">
                        <img src="<?=$templateFolder?>/img/Приложение-к-сертификату-соответствия-№2..jpg" alt="" class="documents__img">
                        <div class="documents__discription">
                            <span class="documents__discription-white">Санитарно-эпидемиологической заключение</span>
                            <span class="documents__discription-black">Санитарно-эпидемиологической заключение.2019 Лагерь березка. Ижевск </span>
                        </div>
                    </div>
                    <div class="documents__item">
                        <img src="<?=$templateFolder?>/img/Свидетельство-о-присвоении-категории.jpg" alt="" class="documents__img">
                        <div class="documents__discription">
                            <span class="documents__discription-white">Санитарно-эпидемиологической заключение</span>
                            <span class="documents__discription-black">Санитарно-эпидемиологической заключение.2019 Лагерь березка. Ижевск </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="documents__fade">
            <div class="documents__window">
                <a href="" class="documents__close" id="noRemove"><i class="bi bi-x-circle"></i></a>
            </div>
        </div>
    </div>
</section>

