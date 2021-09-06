<!-- тут будет описание раздела "Питание" и <a href="/recreation-center/food">ссылка на него</a><br> -->
<section class="section-nutrition">
    <div class="container-fluid">
        <div class="row">
            <div class="nutrition__wrapper nutrition__wrapper-recreation">
                <div class="nutrition">
                    <div class="section__title nutrition__title">
                        <h3 class="section__title-text nutrition__title-text"><?=$arrIblockList['food']['NAME'];?></h3>
                        <span class="section__title-line nutrition__title-line"></span>
                    </div>
                    <div class="nutrition__text">
                        <?=$arrIblockList['food']['DESCRIPTION'];?>
                        
                    </div>
                    <a href="<?=$arrIblockList['food']['LIST_PAGE_URL'];?>" class="button button-transparent nutrition__button">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</section>