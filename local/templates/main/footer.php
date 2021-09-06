
	<footer class="footer">
        <!-- map -->
        <section class="section">
            <div class="map__wrapper">
                <div class="map">
                    <?
                    $coors = explode(',', $allInfo['coors']);
                    ?>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:map.yandex.view",
                        "",
                       [
                            "INIT_MAP_TYPE" => "MAP",
                            "MAP_DATA" => serialize(
                                [
                                    "yandex_lat" => $coors[0],
                                    "yandex_lon" => $coors[1],
                                    "yandex_scale" => 16,
                                    "PLACEMARKS" => [
                                        0 => [
                                            "LAT" => $coors[0],
                                            "LON" => $coors[1],
                                            "TEXT" => $allInfo['address_complex'],
                                        ],
                                    ],
                                ],
        ),
                            "MAP_WIDTH" => "100%",
                            "MAP_HEIGHT" => "100%",
                            "CONTROLS" => ["SCALELINE", "ZOOM", "TOOLBAR", "SEARCH"],
                            "OPTIONS" => ["ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING"],
                            "MAP_ID" => "MAP_AFISHA",
                       ],
                        false
                    );?>
                </div>
                <div class="map__card">
                    <h3 class="map__title">Березка</h3>
                    <div class="map__text">
                        <?
                        if (!empty($allInfo['address_complex'])) {
                        ?>
                        <p>Адрес:</p>
                        <p><?=$allInfo['address_complex'];?></p>
                        <?
                        }
                        ?>
                        <?
                        if (!empty($allInfo['main_phone'])) {
                            ?>
                            <p>Телефон:</p>
                            <p><?=$allInfo['main_phone'];?></p>
                            <?
                        }
                        ?>
                        <?
                        if (!empty($allInfo['main_phone'])) {
                            ?>
                            <p>Режим работы:</p>
                            <p><?=$allInfo['working_hours'];?></p>
                            <?
                        }
                        ?>
                    </div>
                    <a href="/" class="map__route route">
                        <span class="route__icon"></span> <span class="route__text">Проложить маршрут</span>
                    </a>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col footer__social">
                    <ul class="social">
                        <?
                        if (!empty($allInfo['link_vk'])) {
                            ?>
                            <li class="social__item">
                                <a href="<?=$allInfo['link_vk'];?>" class="social__link social__link-vk"></a>
                            </li>
                            <?
                        }
                        ?>
                        <?
                        if (!empty($allInfo['link_youtube'])) {
                            ?>
                            <li class="social__item">
                                <a href="<?=$allInfo['link_youtube'];?>" class="social__link social__link-youtube"></a>
                            </li>
                            <?
                        }
                        ?>
                        <?
                        if (!empty($allInfo['link_fb'])) {
                            ?>
                            <li class="social__item">
                                <a href="<?=$allInfo['link_fb'];?>" class="social__link social__link-facebook"></a>
                            </li>
                            <?
                        }
                        ?>
                        <?
                        if (!empty($allInfo['link_insta'])) {
                            ?>
                            <li class="social__item">
                                <a href="<?=$allInfo['link_insta'];?>" class="social__link social__link-inst"></a>
                            </li>
                            <?
                        }
                        ?>
                        <?
                        if (!empty($allInfo['link_ok'])) {
                            ?>
                            <li class="social__item">
                                <a href="<?=$allInfo['link_ok'];?>" class="social__link social__link-ok"></a>
                            </li>
                            <?
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col footer__icon">&copy; Берёзка, <?=date('Y');?> год
                </div>
            </div>
        </div>
    </footer>
    <?
    $APPLICATION->IncludeComponent(
        'bitrix:main.include',
        '.default',
        [
            'AREA_FILE_SHOW' => 'file',
            'PATH' => '/include/ajax_preloader.php'
        ]
    )
    ?>
</body>
</html>
