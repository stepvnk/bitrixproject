<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?
	use Bitrix\Main\Page\Asset; 
	use Bitrix\Main\Localization\Loc;

	Loc::loadMessages(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="LANGUAGE_ID">
<head>
	<?$APPLICATION->ShowHead()?>
	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="icon" type="image/x-icon" href="/local/templates/.default/favicon.ico"/>
	
	<?
		$asset = Asset::getInstance();
		$asset->addJs('/local/templates/.default/js/jquery-1.8.2.min.js'); 
		$asset->addJs('/local/templates/.default/js/functions.js'); 
		
		$asset->addCss('/local/templates/.default/template_style.css');
	?>
	
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
	<div class="wrap">
		<div class="hd_header_area">
			<?include_once($_SERVER["DOCUMENT_ROOT"] . "/local/templates/.default/include/header.php");?>
		</div>
		
		<!--- // end header area --->
		<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"nav",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
		<div class="main_container page">
			<div class="mn_container">
				<div class="mn_content">
					<div class="main_post">
						<div class="main_title">
							<p class="title"><?$APPLICATION->ShowTitle('false')?></p>
						</div>
						<!-- workarea -->