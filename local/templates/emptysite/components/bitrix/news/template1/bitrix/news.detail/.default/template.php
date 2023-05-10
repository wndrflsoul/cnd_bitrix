<body>
<div class="article-card">
    <div class="article-card__title"><?php $arResult['NAME'] ?></div>
    <div class="article-card__date"><?php $arResult['DISPLAY_ACTIVE_FROM'] ?></div>
    <div class="article-card__content">
        <div class="article-card__image sticky"><img
                src="<?php $arResult['DETAIL_PICTURE']['SRC'] ?>" data-object-fit="cover"/>
        </div>
        <div class="article-card__text">
            <div class="block-content" data-anim="anim-3"><p><?php $arResult['DETAIL_TEXT'] ?></p>
            </div>
            <a class="article-card__button" href="<?php $arResult['LIST_PAGE_URL'] ?>">Назад к новостям</a>
        </div>
    </div>
</div>
</body>
</html>