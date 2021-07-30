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

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-md-12 teachers">
                <div class="section__title teachers__title">
                    <h2 class="section__title-text teachers__title-text">Педагогический состав</h2>
                    <span class="section__title-line teachers__title-line"></span>
                </div>
                <div class="teachers__text">
                    <p>Когда дети уезжают в детские летние лагеря, расставание почти на месяц всегда вызывает много волнений и у взрослых, и у детей. Но когда рядом находятся старшие заботливые друзья, эти переживания совершенно беспочвенны.</p>
                    <p>В оздоровительном комплексе «Березка» такими друзьями станут опытные воспитатели и вожатые. Все воспитатели лагеря имеют высшую квалификационную категорию и опыт работы с детьми разного возраста. Вожатые, пришедшие школу вожатского
                        мастерства и ставшие частью педагогического отряда «Орлята», станут креативными вожаками организованного отдыха детей. Педагоги дополнительного образования — настоящие мастера своего дела: шьют, пилят, рисуют, лепят, поют, танцуют.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center teachers__row">
            <div class="col-sm-9">
                <p class="teachers__row-text">
                    Мы делаем все для того, чтобы каждый ребенок еще не раз захотел повторить этот незабываемый отдых в оздоровительном комплексе «Березка»!
                </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 teachers__list">
                <div class="teachers__item teacher" data-id="0" </div>
                    <div class="teacher__img-wrapper">
                        <img class="teacher__img" src="<?=$templateFolder?>/img/img1.jpg" alt="teacher1">
                    </div>
                    <div class="teacher__text-wrapper">
                        <p class="teacher__name">Безбатченко Ольга Викторовна</p>
                        <span class="teacher__line"></span>
                        <div class="teacher__status">Педагог</div>
                        <div class="teacher__description">
                            Получает педагогическое образование в УдГУ. Сначала приезжал в лагерь ребенком, затем стал вожатым, потом спортинструктором, диджеем. А теперь - самый молодой организатор "Березки".
                        </div>
                    </div>
                </div>
                <div class="teachers__item teacher" data-id="1">
                    <div class="teacher__img-wrapper">
                        <img class="teacher__img" src="<?=$templateFolder?>/img/img2.jpg" alt="teacher1">
                    </div>
                    <div class="teacher__text-wrapper">
                        <p class="teacher__name">Сидоров Пётр Анатольевич</p>
                        <span class="teacher__line"></span>
                        <div class="teacher__status">Педагог</div>
                        <div class="teacher__description">
                            Получает педагогическое образование в УдГУ. Сначала приезжал в лагерь ребенком, затем стал вожатым, потом спортинструктором, диджеем. А теперь - самый молодой организатор "Березки".
                        </div>
                    </div>

                </div>
                <div class="teachers__item teacher" data-id="2">
                    <div class="teacher__img-wrapper">
                        <img class="teacher__img" src="<?=$templateFolder?>/img/img3.jpg" alt="teacher1">
                    </div>
                    <div class="teacher__text-wrapper">
                        <p class="teacher__name">Корниенко Татьяна Николаевна</p>
                        <span class="teacher__line"></span>
                        <div class="teacher__status">Педагог</div>
                        <div class="teacher__description">
                            Получает педагогическое образование в УдГУ. Сначала приезжал в лагерь ребенком, затем стал вожатым, потом спортинструктором, диджеем. А теперь - самый молодой организатор "Березки".
                        </div>
                    </div>
                </div>
                <div class="teachers__item teacher" data-id="3">
                    <div class="teacher__img-wrapper">
                        <img class="teacher__img" src=" <?=$templateFolder?>/img/img4.jpg " alt="teacher1 ">
                    </div>
                    <div class="teacher__text-wrapper">
                        <p class="teacher__name ">Шутов Сергей Викторович</p>
                        <span class="teacher__line "></span>
                        <div class="teacher__status ">Педагог</div>
                        <div class="teacher__description">
                            Получает педагогическое образование в УдГУ. Сначала приезжал в лагерь ребенком, затем стал вожатым, потом спортинструктором, диджеем. А теперь - самый молодой организатор "Березки".
                        </div>
                    </div>
                </div>
                <div class="teachers__item teacher" data-id="4">
                    <div class="teacher__img-wrapper">
                        <img class="teacher__img" src="<?=$templateFolder?>/img/img1.jpg " alt="teacher1 ">
                    </div>
                    <div class="teacher__text-wrapper">
                        <p class="teacher__name ">Корниенко Татьяна Николаевна</p>
                        <span class="teacher__line "></span>
                        <div class="teacher__status ">Педагог</div>
                        <div class="teacher__description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt expedita quis beatae perspiciatis unde repudiandae error optio dignissimos quos reprehenderit alias neque architecto a, placeat ullam nulla quasi corporis similique fuga! Asperiores est ab
                            nobis laborum unde voluptatum blanditiis vel accusantium dolor iste inventore veritatis earum dolore tempore, similique et. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt expedita quis beatae perspiciatis unde
                            repudiandae error optio dignissimos quos reprehenderit alias neque architecto a, placeat ullam nulla quasi corporis similique fuga! Asperiores est ab nobis laborum unde voluptatum blanditiis vel accusantium dolor iste inventore
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt expedita quis beatae perspiciatis unde repudiandae error optio dignissimos quos reprehenderit alias neque architecto a, placeat ullam nulla quasi corporis similique
                            fuga! Asperiores est ab nobis laborum unde voluptatum blanditiis vel accusantium dolor iste inventore veritatis earum dolore tempore, similique et. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt expedita quis
                            beatae perspiciatis unde repudiandae error optio dignissimos quos reprehenderit alias neque architecto a, placeat ullam nulla quasi corporis similique fuga! Asperiores est ab nobis laborum unde voluptatum blanditiis vel accusantium
                            dolor iste inventore
                        </div>
                    </div>
                </div>
            </div>
            <div class="teachers__popup popup-fade">
                <div class="popup">
                </div>
            </div>
        </div>
    </div>

</section>
