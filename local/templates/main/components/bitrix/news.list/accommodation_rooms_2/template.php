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

<section class="section-numbers numbers">
    <div class="container">
        <div class="row">
            <h2 class="numbers__title">Доступные номера</h2>
        </div>
        <div class="row">
            <div class="numbers__wrapper">
                <div class="numbers__item number">
                    <div class="number__title">
                        <span class="number__title-text">4-х комнатный номер. Family room</span>
                        <span class="number__title-button">3500 руб./сут.</span>
                    </div>
                    <img src="<?= $templateFolder ?>/img/img1.jpg" alt="" class="number__img">
                    <div class="number__more">Подробнее</div>
                </div>
                <div class="numbers__item number">
                    <div class="number__title">
                        <span class="number__title-text">4-х комнатный номер. Family room</span>
                        <span class="number__title-button">3500 руб./сут.</span>
                    </div>
                    <img src="<?= $templateFolder ?>/img/img2.jpg" alt="" class="number__img">
                    <div class="number__more">Подробнее</div>
                </div>
                <div class="numbers__item number">
                    <div class="number__title">
                        <span class="number__title-text">4-х комнатный номер. Family room</span>
                        <span class="number__title-button">3500 руб./сут.</span>
                    </div>
                    <img src="<?= $templateFolder ?>/img/img3.jpg" alt="" class="number__img">
                    <div class="number__more">Подробнее</div>
                </div>
                <div class="numbers__item number">
                    <div class="number__title">
                        <span class="number__title-text">4-х комнатный номер. Family room</span>
                        <span class="number__title-button">3500 руб./сут.</span>
                    </div>
                    <img src="<?= $templateFolder ?>/img/img4.jpg" alt="" class="number__img">
                    <div class="number__more">Подробнее</div>
                </div>
                <div class="numbers__item number">
                    <div class="number__title">
                        <span class="number__title-text">4-х комнатный номер. Family room</span>
                        <span class="number__title-button">3500 руб./сут.</span>
                    </div>
                    <img src="<?= $templateFolder ?>/img/img5.jpg" alt="" class="number__img">
                    <div class="number__more">Подробнее</div>
                </div>
                <div class="numbers__item number">
                    <div class="number__title">
                        <span class="number__title-text">4-х комнатный номер. Family room</span>
                        <span class="number__title-button">3500 руб./сут.</span>
                    </div>
                    <img src="<?= $templateFolder ?>/img/img6.jpg" alt="" class="number__img">
                    <div class="number__more">Подробнее</div>
                </div>
                <div class="numbers__item number">
                    <div class="number__title">
                        <span class="number__title-text">4-х комнатный номер. Family room</span>
                        <span class="number__title-button">3500 руб./сут.</span>
                    </div>
                    <img src="<?= $templateFolder ?>/img/img7.jpg" alt="" class="number__img">
                    <div class="number__more">Подробнее</div>
                </div>
                <div class="numbers__item number">
                    <div class="number__title">
                        <span class="number__title-text">4-х комнатный номер. Family room</span>
                        <span class="number__title-button">3500 руб./сут.</span>
                    </div>
                    <img src="<?= $templateFolder ?>/img/img8.jpg" alt="" class="number__img">
                    <div class="number__more">Подробнее</div>
                </div>
                <div class="numbers__item number">
                    <div class="number__title">
                        <span class="number__title-text">4-х комнатный номер. Family room</span>
                        <span class="number__title-button">3500 руб./сут.</span>
                    </div>
                    <img src="<?= $templateFolder ?>/img/img9.jpg" alt="" class="number__img">
                    <div class="number__more">Подробнее</div>
                </div>
                <div class="numbers__item number">
                    <div class="number__title">
                        <span class="number__title-text">4-х комнатный номер. Family room</span>
                        <span class="number__title-button">3500 руб./сут.</span>
                    </div>
                    <img src="<?= $templateFolder ?>/img/img10.jpg" alt="" class="number__img">
                    <div class="number__more">Подробнее</div>
                </div>
            </div>
            <div class="numbers__information">
                <div class="numbers__information-column">
                    <p class="numbers__information-text">При заказе проживания на 100 человек и более – <span class="numbers__information-discount">скидка 10% от общей суммы проживания.</span></p>
                    <p class="numbers__information-text">При заказе проживания на 20 человек и более – <span class="numbers__information-discount">холл корпуса предоставляется бесплатно.</span></p>
                </div>
                <div class="numbers__information-column">
                    <p class="numbers__information-text">Путевка может быть <span class="numbers__information-pink">индивидуальной или групповой.</span></p>
                    <p class="numbers__information-text">Расчетный час – 12:00.</p>
                    <p class="numbers__information-text">Проживание детей до 5 лет – бесплатно.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="popup__fade">
        <div class="popup__modal hotelroom__slaider">
            <div class="hotelroom">
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
            <div class="hotelroom">
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
            <div class="hotelroom">
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
            <div class="hotelroom">
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
    </div>
</section>