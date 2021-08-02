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

<section class="section-accommodation">
    <div class="container">
        <div class="row">
            <h2 class="accommodation__title">
                Проживание
            </h2>
        </div>
        <div class="row">
            <div class="accommodation">
                <div class="accommodation__preview">
                    <img src="<?= $templateFolder ?>/img/img1.jpg" alt="" class="accommodation__img">
                </div>
                <div class="accommodation__wrapper">
                    <div class="accommodation__item">
                        <img src="<?= $templateFolder ?>/img/img1.jpg" alt="" class="accommodation__img"> <span class="accommodation__discription">Холл</span>
                    </div>
                    <div class="accommodation__item">
                        <img src="<?= $templateFolder ?>/img/img2.jpg" alt="" class="accommodation__img">
                        <span class="accommodation__discription">Комнаты для детей</span>
                    </div>
                    <div class="accommodation__item">
                        <img src="<?= $templateFolder ?>/img/img3.jpg" alt="" class="accommodation__img">
                    </div>
                    <div class="accommodation__item">
                        <img src="<?= $templateFolder ?>/img/img4.jpg" alt="" class="accommodation__img">
                    </div>
                    <div class="accommodation__item">
                        <img src="<?= $templateFolder ?>/img/img5.jpg" alt="" class="accommodation__img">
                    </div>
                    <div class="accommodation__item">
                        <img src="<?= $templateFolder ?>/img/img6.jpg" alt="" class="accommodation__img">
                    </div>
                    <div class="accommodation__item">
                        <img src="<?= $templateFolder ?>/img/img7.jpg" alt="" class="accommodation__img">
                    </div>
                    <div class="accommodation__item">
                        <img src="<?= $templateFolder ?>/img/img8.jpg" alt="" class="accommodation__img">
                    </div>
                    <div class="accommodation__item">
                        <img src="<?= $templateFolder ?>/img/img9.jpg" alt="" class="accommodation__img">
                    </div>
                    <div class="accommodation__item">
                        <img src="<?= $templateFolder ?>/img/img10.jpg" alt="" class="accommodation__img">
                    </div>
                    <div class="accommodation__item">
                        <img src="<?= $templateFolder ?>/img/img11.jpg" alt="" class="accommodation__img">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
