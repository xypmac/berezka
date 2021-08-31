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

<section class="section-rooms">
    <div class="container">
        <div class="row">
            <h2 class="rooms__title"><?=$arResult['NAME'];?></h2>
        </div>
    </div>
    <div class="container-fluid">
        <?if (!empty($arResult['SECTION_INFO'])) {?>
        <div class="row">
            <div class="rooms__buttons">
                <?
                $i = 0;
                foreach ($arResult['SECTION_INFO'] as $idSec => $nameSec) {
                ?>
                    <div class="rooms__button <?if ($i == 0) echo 'rooms__button-active';?>" id="typerooms-<?=$idSec;?>"><?=$nameSec;?></div>
                <?
                $i++;
                }
                unset($i);
                ?>
            </div>
        </div>
        <?}?>
        <div class="row">
            <?foreach ($arResult['FILTER_ELEM'] as $idSec => $arrElem) {?>
            <div class="rooms__wrapper" id="typerooms-<?=$idSec;?>">
                <?foreach ($arrElem as $key => $roomItem) {?>
                <div class="rooms__item">
                    <div class="room">
                        <img src="<?=$roomItem['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$roomItem['PREVIEW_PICTURE']['ALT'];?>" class="room__img">
                        <div class="room__wrapper">
                            <p class="room__title"><?=$roomItem['NAME'];?></p>
                            <ul class="room__list">

                                <?if (!empty($roomItem['PROPERTIES']['QUANTITY']['VALUE'])) {?>
                                    <li class="room__item">
                                        <span class="room__icon persons"></span>
                                        <span class="room__text"><?=$roomItem['PROPERTIES']['QUANTITY']['VALUE'];?></span>
                                    </li>
                                <?}?>

                                <?if (!empty($roomItem['PROPERTIES']['BEDS']['VALUE'])) {?>
                                    <li class="room__item">
                                        <span class="room__icon bed"></span> <span class="room__text"><?=$roomItem['PROPERTIES']['BEDS']['VALUE'];?></span>
                                    </li>
                                <?}?>

                                <?if (!empty($roomItem['PROPERTIES']['BATHROOM']['VALUE'])) {?>
                                <li class="room__item">
                                    <span class="room__icon shower"></span> <span class="room__text"><?=$roomItem['PROPERTIES']['BATHROOM']['VALUE'];?></span>
                                </li>
                                <?}?>

                                <?if (!empty($roomItem['PROPERTIES']['AREA']['VALUE'])) {?>
                                    <li class="room__item">
                                        <span class="room__icon square"></span> <span class="room__text"><?=$roomItem['PROPERTIES']['AREA']['VALUE'];?> м<sup>2</sup></span>
                                    </li>
                                <?}?>

                                <?if ($roomItem['PROPERTIES']['PARKING']['VALUE'] == 'Да') {?>
                                    <li class="room__item">
                                        <span class="room__icon parking"></span> <span class="room__text">Бесплатная парковка</span>
                                    </li>
                                <?}?>

                                <?if ($roomItem['PROPERTIES']['EXTRA_SPACE']['VALUE'] == 'Да') {?>
                                    <li class="room__item">
                                        <span class="room__icon seat"></span> <span class="room__text">Дополнительное место</span>
                                    </li>
                                <?}?>
                            </ul>
                            <?if (!empty($roomItem['PROPERTIES']['PRICE']['VALUE'])) {?>
                                <button class="room__button"><?=$roomItem['PROPERTIES']['PRICE']['VALUE'];?> руб./сут.</button>
                            <?}?>
                        </div>
                    </div>
                </div>
                <?}?>
            </div>
            <?}?>
        </div>
    </div>
    <div class="popup__fade">
        <div class="popup__modal hotelroom">
            <div class="hotelroom__gallery">
                <div class="hotelroom__prev"></div>
                <div class="hotelroom__images">
                    <div class="hotelroom__item">
                        <img src="<?= $templateFolder ?>/img/img7.jpg" alt="" class="room__img">
                    </div>
                    <div class="hotelroom__item">
                        <img src="<?= $templateFolder ?>/img/img8.jpg" alt="" class="room__img">
                    </div>
                    <div class="hotelroom__item">
                        <img src="<?= $templateFolder ?>/img/img9.jpg" alt="" class="room__img">
                    </div>
                    <div class="hotelroom__item">
                        <img src="<?= $templateFolder ?>/img/img10.jpg" alt="" class="room__img">
                    </div>
                </div>
            </div>
            <div class="hotelroom__wrapper">
                <p class="room__title hotelroom__title">4-х комнатный номер. Family room</p>
                <div class="hotelroom__text">
                    <p>Проживание в двухкомнатном номере (спальная, гостиная) "Люкс", с санузлом в номере (ванная комната) в корпусе "Кошкин дом". В стоимость входит завтрак до 2 человек.В номере TV, холодильник.</p>
                    <p>Возможность предоставление дополнительного места на диване. Бесплатная парковка, мангал.Расчётный час 12-00.Проживание детей до 5 лет, без предоставления отдельного спального места- бесплатно.</p>
                </div>
                <ul class="room__list hotelroom__list">
                    <li class="room__item">
                        <span class="room__icon playground"></span>
                        <span class="room__text">2-х местный </span>
                    </li>
                    <li class="room__item">
                        <span class="room__icon bed"></span> <span class="room__text">2 односпальных кровати </span>
                    </li>
                    <li class="room__item">
                        <span class="room__icon shower"></span> <span class="room__text">Душевая кабинка</span>
                    </li>
                    <li class="room__item">
                        <span class="room__icon square"></span> <span class="room__text">16 м <sup>2</sup></span>
                    </li>
                    <li class="room__item">
                        <span class="room__icon parking"></span> <span class="room__text">Бесплатная парковка  </span>
                    </li>
                    <li class="room__item">
                        <span class="room__icon seat"></span> <span class="room__text">Дополнительное место</span>
                    </li>
                </ul>
                <button class="room__button hotelroom__button">1200 руб./сут.</button>
                <button class="room__button hotelroom__button hotelroom__button-white">Забронировать</button>
            </div>
        </div>
    </div>
</section>