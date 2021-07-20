<?
/**
* Module: Кнопка наверх
* Author: Anton Kuleshov
* Site: http://falbar.ru/
* File: options.php
* Version: 1.0.0
**/

use Bitrix\Main\Localization\Loc;
use	Bitrix\Main\HttpApplication;
use Bitrix\Main\Loader;
use Bitrix\Main\Config\Option;

Loc::loadMessages(__FILE__);

$request = HttpApplication::getInstance()->getContext()->getRequest();

$module_id = htmlspecialcharsbx($request["mid"] != "" ? $request["mid"] : $request["id"]);

Loader::includeModule($module_id);

$aTabs = array(
	array(
		"DIV" 	  => "edit",
		"TAB" 	  => Loc::getMessage("FALBAR_TOTOP_OPTIONS_TAB_NAME"),
		"TITLE"   => Loc::getMessage("FALBAR_TOTOP_OPTIONS_TAB_NAME"),
		"OPTIONS" => array(
			Loc::getMessage("FALBAR_TOTOP_OPTIONS_TAB_COMMON"),
			[
			    'main_phone',
                Loc::getMessage('FALBAR_TOTOP_OPTIONS_MAIN_PHONE'),
                '',
                ['text', 20]
            ],
            [
                'second_phone',
                Loc::getMessage('FALBAR_TOTOP_OPTIONS_SECOND_PHONE'),
                '',
                ['text', 20]
            ],
            [
                'email',
                Loc::getMessage('FALBAR_TOTOP_OPTIONS_EMAIL'),
                '',
                ['text', 20]
            ],
            Loc::getMessage("FALBAR_TOTOP_OPTIONS_TAB_LINK_SOCIAL"),
            [
                'link_vk',
                Loc::getMessage('FALBAR_TOTOP_OPTIONS_LINK_VK'),
                '',
                ['text', 50]
            ],
            [
                'link_youtube',
                Loc::getMessage('FALBAR_TOTOP_OPTIONS_LINK_YOUTUBE'),
                '',
                ['text', 50]
            ],
            [
                'link_fb',
                Loc::getMessage('FALBAR_TOTOP_OPTIONS_LINK_FB'),
                '',
                ['text', 50]
            ],
            [
                'link_insta',
                Loc::getMessage('FALBAR_TOTOP_OPTIONS_LINK_INSTA'),
                '',
                ['text', 50]
            ],
            [
                'link_ok',
                Loc::getMessage('FALBAR_TOTOP_OPTIONS_LINK_OK'),
                '',
                ['text', 50]
            ],
            Loc::getMessage("FALBAR_TOTOP_OPTIONS_TAB_LOCATION"),
            [
                'address_office',
                Loc::getMessage('FALBAR_TOTOP_OPTIONS_ADDRESS_OFFICE'),
                '',
                ['textarea', 3, 50]
            ],
            [
                'address_complex',
                Loc::getMessage('FALBAR_TOTOP_OPTIONS_ADDRESS_COMPLEX'),
                '',
                ['textarea', 3, 50]
            ],
            [
                'working_hours',
                Loc::getMessage('FALBAR_TOTOP_OPTIONS_WORKING_HOURS'),
                '',
                ['textarea', 3, 50]
            ],
            [
                'coors',
                Loc::getMessage('FALBAR_TOTOP_OPTIONS_COORS'),
                '',
                ['text', 50]
            ]
		)
	)
);

if($request->isPost() && check_bitrix_sessid()){

	foreach($aTabs as $aTab){

		foreach($aTab["OPTIONS"] as $arOption){

			if(!is_array($arOption)){

				continue;
			}

			if($arOption["note"]){

				continue;
			}

			if($request["apply"]){

				$optionValue = $request->getPost($arOption[0]);

				if($arOption[0] == "switch_on"){

					if($optionValue == ""){

						$optionValue = "N";
					}
				}

				Option::set($module_id, $arOption[0], is_array($optionValue) ? implode(",", $optionValue) : $optionValue);
			}elseif($request["default"]){

				Option::set($module_id, $arOption[0], $arOption[2]);
			}
		}
	}

	LocalRedirect($APPLICATION->GetCurPage()."?mid=".$module_id."&lang=".LANG);
}

$tabControl = new CAdminTabControl(
	"tabControl",
	$aTabs
);

$tabControl->Begin();
?>

<form action="<? echo($APPLICATION->GetCurPage()); ?>?mid=<? echo($module_id); ?>&lang=<? echo(LANG); ?>" method="post">

	<?
	foreach($aTabs as $aTab){

		if($aTab["OPTIONS"]){

			$tabControl->BeginNextTab();

			__AdmSettingsDrawList($module_id, $aTab["OPTIONS"]);
		}
	}
	$tabControl->Buttons();
	?>
	<input type="submit" name="apply" value="<? echo(Loc::GetMessage("FALBAR_TOTOP_OPTIONS_INPUT_APPLY")); ?>" class="adm-btn-save" />
	<input type="submit" name="default" value="<? echo(Loc::GetMessage("FALBAR_TOTOP_OPTIONS_INPUT_DEFAULT")); ?>" />

	<?
	echo(bitrix_sessid_post());
	?>

</form>

<?
$tabControl->End();

$rootPath = Bitrix\Main\Application::getDocumentRoot();

?>

<script src="/local/modules/falbar.totop/js/jquery.min.js" type="text/javascript"></script>
<script src="/local/modules/falbar.totop/js/jquery.inputmask.min.js" type="text/javascript"></script>
<script src="https://api-maps.yandex.ru/2.1/?apikey=09c26306-65e5-493d-af7d-21a2fc9cd21a&lang=ru_RU"
        type="text/javascript"></script>
<script>
    $(document).ready(function (){

        $('input[name="coors"]').parent().append($('<div>', {
            'id': 'map',
        }));
        $('input[name="coors"]').parent().append($('<p>', {
            'class': 'desc',
            'text': 'Перетащите красный указатель на нужное местоположение',
        }));
        $('input[name="coors"]').parent().append($('<div>', {
            'id': 'marker',
        }));

        $('input[name="coors"]').closest('tr').find('td').css('vertical-align', 'top');

        $("input[name='email']").inputmask("email");
        $("input[name='main_phone']").inputmask("+7(999)999-99-99");
        $("input[name='second_phone']").inputmask("+7(999)999-99-99");
        $("input[name='link_vk']").inputmask({ regex: "https://.*" });
        $("input[name='link_youtube']").inputmask({ regex: "https://.*" });
        $("input[name='link_fb']").inputmask({ regex: "https://.*" });
        $("input[name='link_insta']").inputmask({ regex: "https://.*" });
        $("input[name='link_ok']").inputmask({ regex: "https://.*" });
    });
</script>
<script>
    $(function () {
        ymaps.ready(init);
    });

    function init () {
        var map = new ymaps.Map('map', {
                <?
                $coors = \Falbar\ToTop\Main::getSingle('coors');
                if (empty($coors)) {
                ?>
                center: [55.819543, 37.611619],
                <?
                } else {
                ?>
                center: [<?=$coors;?>],
                <?
                }
                ?>
                zoom: 10
            }, {
                searchControlProvider: 'yandex#search'
            }),
            markerElement = jQuery('#marker'),
            dragger = new ymaps.util.Dragger({
                // Драггер будет автоматически запускаться при нажатии на элемент 'marker'.
                autoStartElement: markerElement[0]
            }),
            // Смещение маркера относительно курсора.
            markerOffset,
            markerPosition;
        <?if (!empty($coors)) {?>
        map.geoObjects
            .add(new ymaps.Placemark([<?=$coors;?>], {
                iconCaption: 'Местоположение на карте'
            }, {
                preset: 'islands#greenDotIconWithCaption'
            }));
        <?}?>


        dragger.events
            .add('start', onDraggerStart)
            .add('move', onDraggerMove)
            .add('stop', onDraggerEnd);

        function onDraggerStart(event) {
            var offset = markerElement.offset(),
                position = event.get('position');
            // Сохраняем смещение маркера относительно точки начала драга.
            markerOffset = [
                position[0] - offset.left,
                position[1] - offset.top
            ];
            markerPosition = [
                position[0] - markerOffset[0],
                position[1] - markerOffset[1]
            ];

            applyMarkerPosition();
        }

        function onDraggerMove(event) {
            applyDelta(event);
        }

        function onDraggerEnd(event) {
            applyDelta(event);
            markerPosition[0] += markerOffset[0];
            markerPosition[1] += markerOffset[1];
            // Переводим координаты страницы в глобальные пиксельные координаты.
            var markerGlobalPosition = map.converter.pageToGlobal(markerPosition),
                // Получаем центр карты в глобальных пиксельных координатах.
                mapGlobalPixelCenter = map.getGlobalPixelCenter(),
                // Получением размер контейнера карты на странице.
                mapContainerSize = map.container.getSize(),
                mapContainerHalfSize = [mapContainerSize[0] / 2, mapContainerSize[1] / 2],
                // Вычисляем границы карты в глобальных пиксельных координатах.
                mapGlobalPixelBounds = [
                    [mapGlobalPixelCenter[0] - mapContainerHalfSize[0], mapGlobalPixelCenter[1] - mapContainerHalfSize[1]],
                    [mapGlobalPixelCenter[0] + mapContainerHalfSize[0], mapGlobalPixelCenter[1] + mapContainerHalfSize[1]]
                ];
            // Проверяем, что завершение работы драггера произошло в видимой области карты.
            if (containsPoint(mapGlobalPixelBounds, markerGlobalPosition)) {
                // Теперь переводим глобальные пиксельные координаты в геокоординаты с учетом текущего уровня масштабирования карты.
                var geoPosition = map.options.get('projection').fromGlobalPixels(markerGlobalPosition, map.getZoom()),
                    // Получаем уровень зума карты.
                    zoom = map.getZoom(),
                    // Получаем координаты тайла.
                    tileCoordinates = getTileCoordinate(markerGlobalPosition, zoom, 256);
                alert([
                    'Координаты успешно выбраны',
                ].join(' '));
                $('input[name="coors"]').val(geoPosition);
            }
        }

        function applyDelta (event) {
            // Поле 'delta' содержит разницу между положениями текущего и предыдущего события драггера.
            var delta = event.get('delta');
            markerPosition[0] += delta[0];
            markerPosition[1] += delta[1];
            applyMarkerPosition();
        }

        function applyMarkerPosition () {
            markerElement.css({
                left: markerPosition[0],
                top: markerPosition[1]
            });
        }

        function containsPoint (bounds, point) {
            return point[0] >= bounds[0][0] && point[0] <= bounds[1][0] &&
                point[1] >= bounds[0][1] && point[1] <= bounds[1][1];
        }

        function getTileCoordinate(coords, zoom, tileSize){
            return [
                Math.floor(coords[0] * zoom / tileSize),
                Math.floor(coords[1] * zoom / tileSize)
            ];
        }
    }
</script>
<style>
    body, html {
        width: 100%;
        height: 95%;
        padding: 0;
        margin: 0;
        font-family: Arial;
    }
    #map {
        width: 100%;
        height: 80%;
    }

    #marker {
        background-image: url(/geometka-64x64.png);
        width: 33px;
        height: 36px;
        position: absolute;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-size: 60%;
        background-position: 16px 1px;
        overflow: visible;
    }
    .header {
        padding: 5px;
    }
    #map {
        width: 400px;
        height: 400px;
        margin: 30px 0 10px;
    }
    #edit_edit_table {
        margin-bottom: 30px !important;
    }
</style>

