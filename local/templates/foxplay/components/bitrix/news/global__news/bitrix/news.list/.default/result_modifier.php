<?if(!defined('B_PROLOG_INCLUDED')||B_PROLOG_INCLUDED!==true)die();
$rsSections = CIBlockSection::GetList(
	Array('SORT' => 'ASC'),
	Array(
		'=IBLOCK_ID' => $arParams['IBLOCK_ID'],
		'=ACTIVE'    => 'Y'
	)
);
while ($arSection = $rsSections->GetNext()) {
	$arSections[$arSection['ID']] = $arSection;
}
foreach($arResult['ITEMS'] as $arItem) {
	$arSections[$arItem['IBLOCK_SECTION_ID']]['ITEMS'][] = $arItem;
}
$arResult['SECTIONS'] = $arSections;
?>