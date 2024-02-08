<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
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
<section class="article">
	<div class="container">
		<div class="article__header">
			<span class="date"><?=$arResult['DISPLAY_ACTIVE_FROM']?></span>
			<h1><?=$arResult['NAME']?></h1>
		</div>
		<div class="article__body">
			<?=$arResult['DETAIL_TEXT'];?>
		</div>
	</div>
</section>