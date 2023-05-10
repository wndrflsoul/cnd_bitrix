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
?>

<div id="barba-wrapper">
	<div class="article-list">
		<?php foreach ($arResult["ITEMS"] as $arItem) : ?>
			<a class="article-item article-list__item" href="<?php $arItem['DETAIL_PAGE_URL'] ?>" data-anim="anim-3">
				<div class="article-item__background"><img src="<?php $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="" /></div>
				<div class="article-item__wrapper">
					<div class="article-item__title">
						<?php $arItem["NAME"] ?>
					</div>
					<div class="article-item__content">
						<?php $arItem["PREVIEW_TEXT"] ?>
					</div>
				</div>
			</a>
		<?php endforeach; ?>
	</div>
</div>