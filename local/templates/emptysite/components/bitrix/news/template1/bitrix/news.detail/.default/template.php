<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
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
<div class="news-detail">
    <div>
        <div class="article-card__image sticky"><img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt=""
                data-object-fit="cover" />
        </div>
    </div>
    <?php if ($arParams["DISPLAY_DATE"] != "N" && $arResult["DISPLAY_ACTIVE_FROM"]): ?>
        <div "article-card__date">
            <?= $arResult["DISPLAY_ACTIVE_FROM"] ?>
        </div>
    <?php endif; ?>

    <?php if ($arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]): ?>
        <div class="article-card__title">
            <?= $arResult["NAME"] ?>
        </div>

    <?php endif; ?>
    <div class="article-card__text">
        <div class="block-content" data-anim="anim-3">
            <?= $arResult["DETAIL_TEXT"]; ?>
        </div>


        <a class="article-card__button" href="<?php $arResult['LIST_PAGE_URL'] ?>">Назад к новостям</a>
    </div>
</div>
