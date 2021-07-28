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
			<!-- <a class="popup-close" href="# "><i class="bi bi-x "></i></a> -->
		</div>
	</div>
</div>
