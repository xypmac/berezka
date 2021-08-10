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
            <h2 class="rooms__title">Номера для проживания</h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="rooms__buttons">
                <div class="rooms__button" id="сaitshelter">"Кошкин дом"</div>
                <div class="rooms__button rooms__button-active" id="housing">В корпусах</div>
                <div class="rooms__button" id="withoutShelter">Дневное прибывание</div>
            </div>
        </div>
        <div class="row">
            <div class="rooms__wrapper" id="сaitshelter">
                <div class="rooms__item">
                    <div class="room">
                        <img src="<?= $templateFolder ?>/img/img1.jpg" alt="" class="room__img">
                        <div class="room__wrapper">
                            <p class="room__title">4-х комнатный номер. Family room</p>
                            <ul class="room__list">
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
                            </ul>
                            <button class="room__button">1200 руб./сут.</button>
                        </div>
                    </div>
                </div>
                <div class="rooms__item">
                    <div class="room">
                        <img src="<?= $templateFolder ?>/img/img2.jpg" alt="" class="room__img">
                        <div class="room__wrapper">
                            <p class="room__title">2-х комнатный номер «Люкс» №5</p>
                            <ul class="room__list">
                                <li class="room__item">
                                    <span class="room__icon playground"></span>
                                    <span class="room__text">4-х местный номер </span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon bed"></span> <span class="room__text">4 односпальных кровати</span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon shower"></span> <span class="room__text">Душевая кабинка</span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon square"></span> <span class="room__text">40 м <sup>2</sup></span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon parking"></span> <span class="room__text">Бесплатная парковка  </span>
                                </li>
                            </ul>
                            <button class="room__button">1800 руб./сут.</button>

                        </div>
                    </div>
                </div>
                <div class="rooms__item">
                    <div class="room">
                        <img src="<?= $templateFolder ?>/img/img3.jpg" alt="" class="room__img">
                        <div class="room__wrapper">
                            <p class="room__title">2-х комнатный номер «Люкс» №1.</p>
                            <ul class="room__list">
                                <li class="room__item">
                                    <span class="room__icon playground"></span>
                                    <span class="room__text">4-х места + доп. места </span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon bed"></span> <span class="room__text">4 односпальных кровати</span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon shower"></span> <span class="room__text">на этаже </span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon square"></span> <span class="room__text">19 м <sup>2</sup></span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon parking"></span> <span class="room__text">Бесплатная парковка  </span>
                                </li>
                            </ul>
                            <button class="room__button">1800 руб./сут.</button>
                        </div>
                    </div>
                </div>
                <div class="rooms__item">
                    <div class="room">
                        <img src="<?= $templateFolder ?>/img/img1.jpg" alt="" class="room__img">
                        <div class="room__wrapper">
                            <p class="room__title">Номер «Люкс» №2.</p>
                            <ul class="room__list">
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
                            </ul>
                            <button class="room__button">1200 руб./сут.</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="rooms__wrapper" id="housing">
                <div class="rooms__item">
                    <div class="room">
                        <img src="<?= $templateFolder ?>/img/img4.jpg" alt="" class="room__img">
                        <div class="room__wrapper">
                            <p class="room__title">4-х местный номер в корпусах №№1,2,3</p>
                            <ul class="room__list">
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
                            </ul>
                            <button class="room__button">1200 руб./сут.</button>
                        </div>
                    </div>
                </div>
                <div class="rooms__item">
                    <div class="room">
                        <img src="<?= $templateFolder ?>/img/img5.jpg" alt="" class="room__img">
                        <div class="room__wrapper">
                            <p class="room__title">4-х местный номер в корпусе №5</p>
                            <ul class="room__list">
                                <li class="room__item">
                                    <span class="room__icon playground"></span>
                                    <span class="room__text">4-х местный номер </span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon bed"></span> <span class="room__text">4 односпальных кровати</span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon shower"></span> <span class="room__text">Душевая кабинка</span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon square"></span> <span class="room__text">40 м <sup>2</sup></span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon parking"></span> <span class="room__text">Бесплатная парковка  </span>
                                </li>
                            </ul>
                            <button class="room__button">1800 руб./сут.</button>

                        </div>
                    </div>
                </div>
                <div class="rooms__item">
                    <div class="room">
                        <img src="<?= $templateFolder ?>/img/img4.jpg" alt="" class="room__img">
                        <div class="room__wrapper">
                            <p class="room__title">2-х местный номер в корпусе №6</p>
                            <ul class="room__list">
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
                            </ul>
                            <button class="room__button">1200 руб./сут.</button>
                        </div>
                    </div>
                </div>
                <div class="rooms__item">
                    <div class="room">
                        <img src="<?= $templateFolder ?>/img/img5.jpg" alt="" class="room__img">
                        <div class="room__wrapper">
                            <p class="room__title">2-х местный номер в корпусах №1, №2 и №3</p>
                            <ul class="room__list">
                                <li class="room__item">
                                    <span class="room__icon playground"></span>
                                    <span class="room__text">4-х местный номер </span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon bed"></span> <span class="room__text">4 односпальных кровати</span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon shower"></span> <span class="room__text">Душевая кабинка</span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon square"></span> <span class="room__text">40 м <sup>2</sup></span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon parking"></span> <span class="room__text">Бесплатная парковка  </span>
                                </li>
                            </ul>
                            <button class="room__button">1800 руб./сут.</button>

                        </div>
                    </div>
                </div>
                <div class="rooms__item">
                    <div class="room">
                        <img src="<?= $templateFolder ?>/img/img6.jpg" alt="" class="room__img">
                        <div class="room__wrapper">
                            <p class="room__title">4-х местный номер в корпусе №5 </p>
                            <ul class="room__list">
                                <li class="room__item">
                                    <span class="room__icon playground"></span>
                                    <span class="room__text">4-х места + доп. места </span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon bed"></span> <span class="room__text">4 односпальных кровати</span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon shower"></span> <span class="room__text">на этаже </span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon square"></span> <span class="room__text">19 м <sup>2</sup></span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon parking"></span> <span class="room__text">Бесплатная парковка  </span>
                                </li>
                            </ul>
                            <button class="room__button">1800 руб./сут.</button>
                        </div>
                    </div>
                </div>


            </div>
            <div class="rooms__wrapper" id="withoutShelter">
                <div class="rooms__item">
                    <div class="room">
                        <img src="<?= $templateFolder ?>/img/img7.jpg" alt="" class="room__img">
                        <div class="room__wrapper">
                            <p class="room__title">Дневное пребывание</p>
                            <ul class="room__list">
                                <li class="room__item">
                                    <span class="room__icon playground"></span>
                                    <span class="room__text">На одного человека</span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon bed"></span> <span class="room__text">Без спального места</span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon wc"></span> <span class="room__text">Туалет 1</span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon playground"></span> <span class="room__text">Детская площадка<sup>2</sup></span>
                                </li>
                                <li class="room__item">
                                    <span class="room__icon parking"></span> <span class="room__text">Бесплатная парковка  </span>
                                </li>
                            </ul>
                            <button class="room__button">1200 руб./сут.</button>
                        </div>
                    </div>
                </div>
            </div>
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