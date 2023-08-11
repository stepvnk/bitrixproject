<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>

<div class="hd_header">
				<table>
					<tr>
						<td rowspan="2" class="hd_companyname">
							<h1>
								<a href="/">
									<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									"",
									Array(
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "inc",
										"EDIT_TEMPLATE" => "",
										"PATH" => "/local/include/logo.php"
									)
									);?>
								</a>
							</h1>
						</td>
						<td rowspan="2" class="hd_txarea">
							<span class="tel">
								<?$APPLICATION->IncludeComponent(
									"bitrix:main.include",
									".default",
									Array(
										"AREA_FILE_SHOW" => "file",
										"COMPONENT_TEMPLATE" => ".default",
										"EDIT_TEMPLATE" => "",
										"PATH" => "/local/include/phone.php"
									)
								);?>
							</span>	<br/>	
							время работы <span class="workhours">ежедневно с 9-00 до 18-00</span>						
						</td>
						<td style="width:232px">
							<?$APPLICATION->IncludeComponent(
								"bitrix:search.form",
								"search_form",
								Array(
									"PAGE" => "#SITE_DIR#search/index.php",
									"USE_SUGGEST" => "N"
								)
							);?>
						</td>
					</tr>
					<tr>
						<td style="padding-top: 11px;">
						<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"auth", 
	array(
		"FORGOT_PASSWORD_URL" => "/login/?forgot_password=yes",
		"PROFILE_URL" => "/login/profile.php",
		"REGISTER_URL" => "/login/registration.php",
		"SHOW_ERRORS" => "Y",
		"COMPONENT_TEMPLATE" => "auth"
	),
	false
);?>
						</td>
					</tr>
				</table>
<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_multi", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"COMPONENT_TEMPLATE" => "top_multi",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y"
	),
	false
);?>
			</div>