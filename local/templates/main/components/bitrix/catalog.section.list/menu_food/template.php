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

<section class="section-foods foods">
    <div class="container">
        <div class="row">
            <div class="foods__wrapper">
                <div class="foods__item food">
                    <img src="img/food/img2.jpg" alt="" class="food__img">
                    <div class="food__title food__title-orange">
                        <span class="food__title-name">Завтрак в столовой</span> 
                        <span class="food__title-ptice">150 руб</span>
                    </div>
                    <div class="food__more"><button class="food__more-button">Подробнее</button></div>
                </div>
                <div class="foods__item food">
                    <img src="img/food/img3.jpg" alt="" class="food__img">
                    <div class="food__title food__title-pink">
                        <span class="food__title-name">Обед в столовой</span> 
                        <span class="food__title-ptice">150 руб</span>
                    </div>
                    <div class="food__more"><button class="food__more-button">Подробнее</button></div>
                </div>
                <div class="foods__item food">
                    <img src="img/food/img1.jpg" alt="" class="food__img">
                    <div class="food__title food__title-pink">
                        <span class="food__title-name">Ужин в столовой</span> 
                        <span class="food__title-ptice">150 руб</span>
                    </div>
                    <div class="food__more"><button class="food__more-button">Подробнее</button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup__fade">
        <div class="popup__modal meal__popup">
            <div class="meal__title">
                <div class="meal__title-name">Завтрак в столовой</div>
                <div class="meal__title-wrapper">
                    <div class="meal__title-item">Стоимость: 150 руб.</div>
                    <div class="meal__title-item">Выход порции</div>
                </div>
            </div>
            <div class="meal__wrapper">
                <ol class="meal__list">
                    <li class="meal__item"><span class="meal__item-name">Каша молочная на выбор с маслом сливочным</span><span class="meal__item-size">200/5гр.</span></li>
                    <li class="meal__item meal__item-submenu"><span class="meal__item-name">Блюдо на выбор: </span>
                        <ul class="meal__submenu">
                            <li><span class="meal__item-name">омлет</span><span class="meal__item-size">105/5гр.</span></li>
                            <li><span class="meal__item-name">манник со сгущенным молоком</span><span class="meal__item-size">150/20 гр</span></li>
                            <li><span class="meal__item-name">запеканка творожная со сгущенным молоком</span><span class="meal__item-size">100/20 гр</span></li>
                            <li><span class="meal__item-name">пудинг творожный с изюмом и сгущенным молоком</span><span class="meal__item-size">100/20 гр</span></li>
                            <li><span class="meal__item-name">спагетти с сыром</span><span class="meal__item-size">150 гр</span></li>
                        </ul>
                    </li>
                    <li class="meal__item"><span class="meal__item-name">Булка/масло слив./сыр</span><span class="meal__item-size">70/10/15гр.</span></li>
                    <li class="meal__item meal__item-submenu"><span class="meal__item-name">На выбор напитки</span>
                        <ul class="meal__submenu">
                            <li><span class="meal__item-name">чай с сахаром</span><span class="meal__item-size">200/20гр.</span></li>
                            <li><span class="meal__item-name">кофе черный растворимый</span><span class="meal__item-size">1 п./20 гр</span></li>
                            <li><span class="meal__item-name">кофейный напиток с молоком и сахаром</span><span class="meal__item-size">200 мл</span></li>
                            <li><span class="meal__item-name">какао с молоком</span><span class="meal__item-size">200 мл</span></li>
                        </ul>
                    </li>
                </ol>
                <button class="meal__button">Время питания согласовывается</button>
            </div>
            <span class="popup__close meal__close"><i class="bi bi-x "></i></span>
        </div>
    </div>
</section>