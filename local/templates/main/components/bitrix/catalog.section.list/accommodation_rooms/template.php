<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
?>

<section class="section-notes">
	<div class="container">
		<div class="row">
			<h2 class="notes__title">Стоимость путёвки</h2>
		</div>
	</div>
	<article class="article-notes lines-three">
		<div class="container">
			<div class="row">
				<div class="col-12 notes__wrapper notes__wrapper-first notes__wrapper-right">
					<div class="notes__item notes__item-img notes__item-img-left">
						<img class="notes__img notes__img-left" src="<?= $templateFolder ?>/img/building2.png" alt="">
					</div>
					<div class="notes__item notes__item-text note note-green">
						<div class="note__title">
							Кошкин дом
						</div>
						<div class="note__text">
							<p>В “Кошкином доме” располагаются номера повышенной комфортности, и прямо в самом здании есть собственная столовая и банкетный зал. Вам достаточно просто спуститься из своего номера на первый этаж или заказать обслуживание в номер, чтобы насладиться свежеприготовленной едой. Вместимость зала до 40 человек. Прекрасный интерьер, мебель и богатая сервировка.</p>
						</div>
						<div class="note__card note__card-right note__card-angle note__card-green">
							<div class="note__card-text">
								Делаем все возможное, чтобы пребывание детей было комфортным!
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
	<article class="article-notes lines-two">
		<div class="container">
			<div class="row">
				<div class="col-12 notes__wrapper notes__wrapper-left">
					<div class="notes__item notes__item-img notes__item-img-left">
						<img class="notes__img notes__img-left" src="<?= $templateFolder ?>/img/building1.png" alt="">
					</div>
					<div class="notes__item notes__item-text note note-orange">
						<div class="note__title">
							Корпуса
						</div>
						<div class="note__text">
							<p>Собственная облагороженная территория 16 га в самой живописной березовой роще, Чистый воздух, артезианская вода, изумительная природа - не оставят равнодушным ни одного человека. Кирпичные отапливаемые 3-х этажные корпуса. Количество мест в номере - от 2 до 8 человек. Удобства в номере. В холлах есть телевизоры, кулеры с горячей и холодной питьевой водой.</p>
						</div>
						<div class="note__card note__card-left note__card-orange">
							<div class="note__card-text">
								Круглосуточное дежурство охраны. Система охранного освещения по всей территории. Пожарная сигнализация и система дымоудаления во всех помещениях.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article>
</section>




<?php if (false) : ?>
	$arViewModeList = $arResult['VIEW_MODE_LIST'];

	$arViewStyles = array(
	'LIST' => array(
	'CONT' => 'bx_sitemap',
	'TITLE' => 'bx_sitemap_title',
	'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
	'CONT' => 'bx_catalog_line',
	'TITLE' => 'bx_catalog_line_category_title',
	'LIST' => 'bx_catalog_line_ul',
	'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
	'CONT' => 'bx_catalog_text',
	'TITLE' => 'bx_catalog_text_category_title',
	'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
	'CONT' => 'bx_catalog_tile',
	'TITLE' => 'bx_catalog_tile_category_title',
	'LIST' => 'bx_catalog_tile_ul',
	'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
	);
	$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

	$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
	$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
	$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

	?>


	<div class="<? echo $arCurView['CONT']; ?>"><?
												if ('Y' == $arParams['SHOW_PARENT_NAME'] && 0 < $arResult['SECTION']['ID']) {
													$this->AddEditAction($arResult['SECTION']['ID'], $arResult['SECTION']['EDIT_LINK'], $strSectionEdit);
													$this->AddDeleteAction($arResult['SECTION']['ID'], $arResult['SECTION']['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

												?><h1 class="<? echo $arCurView['TITLE']; ?>" id="<? echo $this->GetEditAreaId($arResult['SECTION']['ID']); ?>"><a href="<? echo $arResult['SECTION']['SECTION_PAGE_URL']; ?>"><?
																																														echo (isset($arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"]) && $arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"] != ""
																																															? $arResult['SECTION']["IPROPERTY_VALUES"]["SECTION_PAGE_TITLE"]
																																															: $arResult['SECTION']['NAME']);
																																														?></a></h1><?
												}
												if (0 < $arResult["SECTIONS_COUNT"]) {
					?>
			<ul class="<? echo $arCurView['LIST']; ?>">
				<?
													switch ($arParams['VIEW_MODE']) {
														case 'LINE':
															foreach ($arResult['SECTIONS'] as &$arSection) {
																$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
																$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

																if (false === $arSection['PICTURE'])
																	$arSection['PICTURE'] = array(
																		'SRC' => $arCurView['EMPTY_IMG'],
																		'ALT' => ('' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
																			? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
																			: $arSection["NAME"]),
																		'TITLE' => ('' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
																			? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
																			: $arSection["NAME"])
																	);
				?><li id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
								<a href="<? echo $arSection['SECTION_PAGE_URL']; ?>" class="bx_catalog_line_img" style="background-image: url('<? echo $arSection['PICTURE']['SRC']; ?>');" title="<? echo $arSection['PICTURE']['TITLE']; ?>"></a>
								<h2 class="bx_catalog_line_title"><a href="<? echo $arSection['SECTION_PAGE_URL']; ?>"><? echo $arSection['NAME']; ?></a><?
																																							if ($arParams["COUNT_ELEMENTS"] && $arSection['ELEMENT_CNT'] !== null) {
																																							?> <span>(<? echo $arSection['ELEMENT_CNT']; ?>)</span><?
																																							}
																				?></h2><?
																if ('' != $arSection['DESCRIPTION']) {
							?><p class="bx_catalog_line_description"><? echo $arSection['DESCRIPTION']; ?></p><?
																										}
																											?><div style="clear: both;"></div>
							</li><?
															}
															unset($arSection);
															break;
														case 'TEXT':
															foreach ($arResult['SECTIONS'] as &$arSection) {
																$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
																$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

									?><li id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
								<h2 class="bx_catalog_text_title"><a href="<? echo $arSection['SECTION_PAGE_URL']; ?>"><? echo $arSection['NAME']; ?></a><?
																																							if ($arParams["COUNT_ELEMENTS"] && $arSection['ELEMENT_CNT'] !== null) {
																																							?> <span>(<? echo $arSection['ELEMENT_CNT']; ?>)</span><?
																																							}
																				?></h2>
							</li><?
															}
															unset($arSection);
															break;
														case 'TILE':
															foreach ($arResult['SECTIONS'] as &$arSection) {
																$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
																$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

																if (false === $arSection['PICTURE'])
																	$arSection['PICTURE'] = array(
																		'SRC' => $arCurView['EMPTY_IMG'],
																		'ALT' => ('' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
																			? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_ALT"]
																			: $arSection["NAME"]),
																		'TITLE' => ('' != $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
																			? $arSection["IPROPERTY_VALUES"]["SECTION_PICTURE_FILE_TITLE"]
																			: $arSection["NAME"])
																	);
									?><li id="<? echo $this->GetEditAreaId($arSection['ID']); ?>">
								<a href="<? echo $arSection['SECTION_PAGE_URL']; ?>" class="bx_catalog_tile_img" style="background-image:url('<? echo $arSection['PICTURE']['SRC']; ?>');" title="<? echo $arSection['PICTURE']['TITLE']; ?>"> </a><?
																																																													if ('Y' != $arParams['HIDE_SECTION_NAME']) {
																																																													?><h2 class="bx_catalog_tile_title"><a href="<? echo $arSection['SECTION_PAGE_URL']; ?>"><? echo $arSection['NAME']; ?></a><?
																																																														if ($arParams["COUNT_ELEMENTS"] && $arSection['ELEMENT_CNT'] !== null) {
																																					?> <span>(<? echo $arSection['ELEMENT_CNT']; ?>)</span><?
																																																														}
																					?></h2><?
																																																													}
							?>
							</li><?
															}
															unset($arSection);
															break;
														case 'LIST':
															$intCurrentDepth = 1;
															$boolFirst = true;
															foreach ($arResult['SECTIONS'] as &$arSection) {
																$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
																$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

																if ($intCurrentDepth < $arSection['RELATIVE_DEPTH_LEVEL']) {
																	if (0 < $intCurrentDepth)
																		echo "\n", str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']), '<ul>';
																} elseif ($intCurrentDepth == $arSection['RELATIVE_DEPTH_LEVEL']) {
																	if (!$boolFirst)
																		echo '</li>';
																} else {
																	while ($intCurrentDepth > $arSection['RELATIVE_DEPTH_LEVEL']) {
																		echo '</li>', "\n", str_repeat("\t", $intCurrentDepth), '</ul>', "\n", str_repeat("\t", $intCurrentDepth - 1);
																		$intCurrentDepth--;
																	}
																	echo str_repeat("\t", $intCurrentDepth - 1), '</li>';
																}

																echo (!$boolFirst ? "\n" : ''), str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']);
									?><li id="<?= $this->GetEditAreaId($arSection['ID']); ?>">
								<h2 class="bx_sitemap_li_title"><a href="<? echo $arSection["SECTION_PAGE_URL"]; ?>"><? echo $arSection["NAME"]; ?><?
																																					if ($arParams["COUNT_ELEMENTS"] && $arSection['ELEMENT_CNT'] !== null) {
																																					?> <span>(<? echo $arSection["ELEMENT_CNT"]; ?>)</span><?
																																					}
																				?></a></h2><?

																$intCurrentDepth = $arSection['RELATIVE_DEPTH_LEVEL'];
																$boolFirst = false;
															}
															unset($arSection);
															while ($intCurrentDepth > 1) {
																echo '</li>', "\n", str_repeat("\t", $intCurrentDepth), '</ul>', "\n", str_repeat("\t", $intCurrentDepth - 1);
																$intCurrentDepth--;
															}
															if ($intCurrentDepth > 0) {
																echo '</li>', "\n";
															}
															break;
													}
								?>
			</ul>
		<?
													echo ('LINE' != $arParams['VIEW_MODE'] ? '<div style="clear: both;"></div>' : '');
												}
		?>
	</div>
<?php endif; ?>