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
<div class="listing">
    <div class="container">
<?foreach ($arResult['SECTIONS'] as $arSection) {?>
        <div class="list__block">
            <h2><?=$arSection['NAME']?></h2>
            <ul>
    <?foreach ($arSection['ITEMS'] as $arItem) {?>
                <li id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a>
                </li>
    <?}?>
            </ul>
        </div>
<?}?>
    </div>
</div>