<?php
/***************************************************************************
*                               admin_adr_blacksmithing_recipes.php
*                              -------------------
*     begin                : 19. December 2006
*     copyright            : Himmelweiss
*
*
****************************************************************************/
/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

define('IN_ICYPHOENIX', 1);
define('IN_ADR_ADMIN', 1);
define('IN_ADR_CRAFTING', 1);
define('IN_ADR_SHOPS', 1);
define('IN_ADR_BATTLE', 1);
define('IN_ADR_CHARACTER', 1);


if( !empty($setmodules) )
{
	$filename = basename(__FILE__);
	$module['ADR-Recipes']['Crafting Recipes'] = $filename;

	return;
}

define('IP_ROOT_PATH', "./../");

if (!defined('PHP_EXT')) define('PHP_EXT', $phpEx = substr(strrchr(__FILE__, '.'), 1));
require('pagestart.' . PHP_EXT);
include(IP_ROOT_PATH . 'adr/includes/adr_global.'.$phpEx);
include_once(IP_ROOT_PATH . 'adr/includes/adr_functions_admin.'.$phpEx);

if( isset($_POST['mode']) || isset($_GET['mode']) )
{
	$mode = ( isset($_POST['mode']) ) ? $_POST['mode'] : $_GET['mode'];
	$mode = htmlspecialchars($mode);
}
else
{
	$mode = "";
}

if ( $mode != "" )
{
	switch( $mode )
	{

		case 'add_recipe':

			adr_template_file('admin/config_adr_crafting_recipes_edit_body.tpl');

			$template->assign_block_vars('add',array());

			$s_hidden_fields = '<input type="hidden" name="mode" value="savenew_recipe" />';

			$sql = "SELECT * FROM " . ADR_ELEMENTS_TABLE ;
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$element_list = $db->sql_fetchrowset($result);

			$element_weap_list = '<select name="element_weap_list">';
            $element_weap_list .= '<option value = "0" >' . $lang['Adr_items_element_none'] . '</option>';
            for( $i = 0; $i < count($element_list); $i++ )
            {
				$element_list[$i]['element_name'] = adr_get_lang($element_list[$i]['element_name']);
				$element_selected = ( $item['item_element'] == $element_list[$i]['element_id'] ) ? 'selected' : '';
				$element_weap_list .= '<option value = "'.$element_list[$i]['element_id'].'" '.$element_selected.' >' . adr_get_lang($element_list[$i]['element_name']) . '</option>';
			}
			$element_weap_list .= '</select>';	

			// Skills list
			$sql = "SELECT * FROM " . ADR_SKILLS_TABLE ;
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain skills information', "", __LINE__, __FILE__, $sql);
			}
			$skill_list = $db->sql_fetchrowset($result);

			$skill_item_list = '<select name="skill_item_list">';
			for( $i = 0; $i < count($skill_list); $i++ )
			{
				$skill_list[$i]['skill_name'] = adr_get_lang($skill_list[$i]['skill_name']);
				$skill_selected = ( $recipe['item_recipe_skill_id'] == $skill_list[$i]['skill_id'] ) ? 'selected' : '';
				$skill_item_list .= '<option value = "'.$skill_list[$i]['skill_id'].'" '.$skill_selected.' >' . adr_get_lang($skill_list[$i]['skill_name']) . '</option>';
			}
			$skill_item_list .= '</select>';

			$sql = "SELECT * FROM " . ADR_STORES_TABLE . "
					WHERE store_admin = 0 ";
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$store_list = $db->sql_fetchrowset($result);

			// Stores list
			$store_cat_list = '<select name="store_cat_list">';
			for($i = 0; $i < count($store_list); $i++)
			{
				$store_list[$i]['store_name'] = adr_get_lang($store_list[$i]['store_name']);
				$store_selected = ( $items['item_store_id'] == $store_list[$i]['store_id'] ) ? 'selected' : '';
				$store_cat_list .= '<option value = "'.$store_list[$i]['store_id'].'" '.$store_selected.' >' . $store_list [$i]['store_name'] . '</option>';
			}
			$store_cat_list .= '</select>';
			
			// recipe Stores list
			$recipe_store_cat_list = '<select name="recipe_store_cat_list">';
			for($i = 0; $i < count($store_list); $i++)
			{
				$store_list[$i]['store_name'] = adr_get_lang($store_list[$i]['store_name']);
				$recipe_store_selected = ( $items['item_store_id'] == $store_list[$i]['store_id'] ) ? 'selected' : '';
				$recipe_store_cat_list .= '<option value = "'.$store_list[$i]['store_id'].'" '.$recipe_store_selected.' >' . $store_list [$i]['store_name'] . '</option>';
			}
			$recipe_store_cat_list .= '</select>';

			//item list
  			$sql = "SELECT * FROM ". ADR_SHOPS_ITEMS_TABLE ."
       			WHERE item_owner_id = '1'
				ORDER BY item_name ASC ";
			$result = $db->sql_query($sql);
			if( !$result )
				message_die(GENERAL_ERROR, 'Could not obtain items information', "", __LINE__, __FILE__, $sql);
			$itemslist = $db->sql_fetchrowset($result);
			$items_list = '<select name="recipe_items_req[]" size="8" multiple>';
			$items_list .= '<option value = "0" selected>' . $lang['Adr_store_element_none'] . '</option>';
			for ( $i = 0 ; $i < count($itemslist) ; $i++ )
			  	$items_list .= '<option value = "' . $itemslist[$i]['item_id'] . '" >'.adr_get_lang($itemslist[$i]['item_name']) . ' - ' . $lang['Adr_items_level'] . ' ' . $itemslist[$i]['item_power'] . '</option>';
			$items_list .= '</select>';
	
			// Steal DC options
			$steal_dc[0] = $lang['Adr_steal_none'];
			$steal_dc[1] = $lang['Adr_steal_very_easy'];
			$steal_dc[2] = $lang['Adr_steal_easy'];
			$steal_dc[3] = $lang['Adr_steal_average'];
			$steal_dc[4] = $lang['Adr_steal_tough'];
			$steal_dc[5] = $lang['Adr_steal_challenging'];
			$steal_dc[6] = $lang['Adr_steal_formidable'];
			$steal_dc[7] = $lang['Adr_steal_heroic'];
			$steal_dc[8] = $lang['Adr_steal_impossible'];
			$recipe_steal_dc[0] = $lang['Adr_steal_none'];
			$recipe_steal_dc[1] = $lang['Adr_steal_very_easy'].' (7)';
			$recipe_steal_dc[2] = $lang['Adr_steal_easy'].' (12)';
			$recipe_steal_dc[3] = $lang['Adr_steal_average'].' (20)';
			$recipe_steal_dc[4] = $lang['Adr_steal_tough'].' (30)';
			$recipe_steal_dc[5] = $lang['Adr_steal_challenging'].' (45)';
			$recipe_steal_dc[6] = $lang['Adr_steal_formidable'].' (75)';
			$recipe_steal_dc[7] = $lang['Adr_steal_heroic'].' (100)';
			$recipe_steal_dc[8] = $lang['Adr_steal_impossible'].' (150)';

			$steal_list = '<select name="steal_dc">';
			for($i = 0; $i < 9; $i++)
			{
				$steal_list .= '<option value = "'.$i.'" >' . $steal_dc[$i] . '</option>';
			}
			$steal_list .= '</select>';
			
			$recipe_steal_list = '<select name="recipe_steal_dc">';
			for($i = 0; $i < 9; $i++)
			{
				$recipe_steal_list .= '<option value = "'.$i.'" >' . $steal_dc[$i] . '</option>';
			}
			$recipe_steal_list .= '</select>';
			// END steal DC options

			// START alignment restrictions
			$sql = "SELECT * FROM " . ADR_ALIGNMENTS_TABLE;
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$align_list = $db->sql_fetchrowset($result);

			// Explode current alignment list
			$current_align_list = explode(",", $item['item_restrict_align']);

			// Make multiple selection box
			$align_type = '<select name="align_type_list[]" size="6" multiple>';
			for($i = 0; $i < count($align_list); $i++)
			{
				$align_list[$i]['alignment_name'] = adr_get_lang($align_list[$i]['alignment_name']);
				$align_selected = (in_array($align_list[$i]['alignment_id'], $current_align_list)) ? 'selected' : '';
				$align_type .= '<option value = "'.$align_list[$i]['alignment_id'].'" '.$align_selected.' >' . $align_list[$i]['alignment_name'] . '</option>';
			}
			$align_type .= '</select>';
			// END alignment restrictions

			// START class restrictions
			$sql = "SELECT * FROM " . ADR_CLASSES_TABLE;
			$result = $db->sql_query($sql);
			if(!$result)
			{
				message_die(GENERAL_ERROR, 'Could not obtain class info', "", __LINE__, __FILE__, $sql);
			}
			$class_list = $db->sql_fetchrowset($result);

			// Explode current class list
			$current_class_list = explode(",", $item['item_restrict_class']);

			// Make multiple selection box
			$class_type = '<select name="class_type_list[]" size="6" multiple>';
			for($i = 0; $i < count($class_list); $i++)
			{
				$class_list[$i]['class_name'] = adr_get_lang($class_list[$i]['class_name']);
				$class_selected = (in_array($class_list[$i]['class_id'], $current_class_list)) ? 'selected' : '';
				$class_type .= '<option value = "'.$class_list[$i]['class_id'].'" '.$class_selected.' >' . $class_list[$i]['class_name'] . '</option>';
			}
			$class_type .= '</select>';
			// END class restrictions

			// START race restrictions
			$sql = "SELECT * FROM " . ADR_RACES_TABLE;
			$result = $db->sql_query($sql);
			if(!$result)
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$race_list = $db->sql_fetchrowset($result);

			// Explode current race list
			$current_race_list = explode(",", $item['shop_restrict_race']);

			// Make multiple selection box
			$race_type = '<select name="race_type_list[]" size="6" multiple>';
			for($i = 0; $i < count($race_list); $i++)
			{
				$race_list[$i]['race_name'] = adr_get_lang($race_list[$i]['race_name']);
				$race_selected = (in_array($race_list[$i]['race_id'], $current_race_list)) ? 'selected' : '';
				$race_type .= '<option value = "'.$race_list[$i]['race_id'].'" '.$race_selected.' >' . $race_list[$i]['race_name'] . '</option>';
			}
			$race_type .= '</select>';
			// END race restrictions

			// START element restrictions
			$sql = "SELECT * FROM " . ADR_ELEMENTS_TABLE;
			$result = $db->sql_query($sql);
			if(!$result)
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$element_list = $db->sql_fetchrowset($result);

			// Explode current element list
			$current_element_list = explode(",", $item['shop_restrict_element']);

			// Make multiple selection box
			$element_type = '<select name="element_type_list[]" size="6" multiple>';
			for($i = 0; $i < count($element_list); $i++)
			{
				$element_list[$i]['element_name'] = adr_get_lang($element_list[$i]['element_name']);
				$element_selected = (in_array($element_list[$i]['element_id'], $current_element_list)) ? 'selected' : '';
				$element_type .= '<option value = "'.$element_list[$i]['element_id'].'" '.$element_selected.' >' . $element_list[$i]['element_name'] . '</option>';
			}
			$element_type .= '</select>';
			// END element restrictions

			// START alignment restrictions
			$sql = "SELECT * FROM " . ADR_ALIGNMENTS_TABLE;
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$recipe_align_list = $db->sql_fetchrowset($result);

			// Explode current alignment list
			$recipe_current_align_list = explode(",", $recipe['item_restrict_align']);

			// Make multiple selection box
			$recipe_align_type = '<select name="recipe_align_type_list[]" size="6" multiple>';
			for($i = 0; $i < count($recipe_align_list); $i++)
			{
				$recipe_align_list[$i]['alignment_name'] = adr_get_lang($align_list[$i]['alignment_name']);
				$recipe_align_selected = (in_array($recipe_align_list[$i]['alignment_id'], $recipe_current_align_list)) ? 'selected' : '';
				$recipe_align_type .= '<option value = "'.$recipe_align_list[$i]['alignment_id'].'" '.$recipe_align_selected.' >' . $recipe_align_list[$i]['alignment_name'] . '</option>';
			}
			$recipe_align_type .= '</select>';
			// END alignment restrictions

			// START class restrictions
			$sql = "SELECT * FROM " . ADR_CLASSES_TABLE;
			$result = $db->sql_query($sql);
			if(!$result)
			{
				message_die(GENERAL_ERROR, 'Could not obtain class info', "", __LINE__, __FILE__, $sql);
			}
			$recipe_class_list = $db->sql_fetchrowset($result);

			// Explode current class list
			$recipe_current_class_list = explode(",", $recipe['item_restrict_class']);

			// Make multiple selection box
			$recipe_class_type = '<select name="recipe_class_type_list[]" size="6" multiple>';
			for($i = 0; $i < count($recipe_class_list); $i++)
			{
				$recipe_class_list[$i]['class_name'] = adr_get_lang($recipe_class_list[$i]['class_name']);
				$recipe_class_selected = (in_array($recipe_class_list[$i]['class_id'], $recipe_current_class_list)) ? 'selected' : '';
				$recipe_class_type .= '<option value = "'.$recipe_class_list[$i]['class_id'].'" '.$recipe_class_selected.' >' . $recipe_class_list[$i]['class_name'] . '</option>';
			}
			$recipe_class_type .= '</select>';
			// END class restrictions

			// START race restrictions
			$sql = "SELECT * FROM " . ADR_RACES_TABLE;
			$result = $db->sql_query($sql);
			if(!$result)
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$recipe_race_list = $db->sql_fetchrowset($result);

			// Explode current race list
			$recipe_current_race_list = explode(",", $recipe['shop_restrict_race']);

			// Make multiple selection box
			$recipe_race_type = '<select name="recipe_race_type_list[]" size="6" multiple>';
			for($i = 0; $i < count($recipe_race_list); $i++)
			{
				$recipe_race_list[$i]['race_name'] = adr_get_lang($recipe_race_list[$i]['race_name']);
				$recipe_race_selected = (in_array($recipe_race_list[$i]['race_id'], $recipe_current_race_list)) ? 'selected' : '';
				$recipe_race_type .= '<option value = "'.$recipe_race_list[$i]['race_id'].'" '.$recipe_race_selected.' >' . $recipe_race_list[$i]['race_name'] . '</option>';
			}
			$race_type .= '</select>';
			// END race restrictions

			// START element restrictions
			$sql = "SELECT * FROM " . ADR_ELEMENTS_TABLE;
			$result = $db->sql_query($sql);
			if(!$result)
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$recipe_element_list = $db->sql_fetchrowset($result);

			// Explode current element list
			$recipe_current_element_list = explode(",", $recipe['shop_restrict_element']);

			// Make multiple selection box
			$recipe_element_type = '<select name="recipe_element_type_list[]" size="6" multiple>';
			for($i = 0; $i < count($recipe_element_list); $i++)
			{
				$recipe_element_list[$i]['element_name'] = adr_get_lang($recipe_element_list[$i]['element_name']);
				$recipe_element_selected = (in_array($recipe_element_list[$i]['element_id'], $recipe_current_element_list)) ? 'selected' : '';
				$recipe_element_type .= '<option value = "'.$recipe_element_list[$i]['element_id'].'" '.$recipe_element_selected.' >' . $recipe_element_list[$i]['element_name'] . '</option>';
			}
			$recipe_element_type .= '</select>';
			// END element restrictions
			
			$sql = "SELECT * FROM  " . ADR_SHOPS_ITEMS_QUALITY_TABLE;
			if(!$result = $db->sql_query($sql)){
				message_die(GENERAL_ERROR, 'Unable to query item quality infos (non-cache)', '', __LINE__, __FILE__, $sql);}
			$recipes_quality = $db->sql_fetchrowset($result);
			$r_quality = '<select name="recipe_quality">';
			for ($l = 1 ; $l < count($recipes_quality) ; $l++ )
			{
				$selected = ( $recipes_quality[$l]['item_quality_id'] == $item ) ? 'selected="selected"' : '';
				$r_quality .= '<option value = "'.$recipes_quality[$l]['item_quality_id'].'" '.$selected.'>' . $lang[$recipes_quality[$l]['item_quality_lang']] . '</option>';
			}
			$r_quality .= '</select>';

			$template->assign_vars(array(
				//recipe
				"L_RECIPE_NAME" => $lang['recipe_name'],
				"L_RECIPE_NAME_DESC" => $lang['recipe_name_desc'],
				"L_RECIPE_DESC" => $lang['recipe_desc'],
				"L_RECIPE_DESC_DESC" => $lang['recipe_desc_desc'],
				"L_RECIPE_IMG" => $lang['Adr_races_image'],
				"L_RECIPE_IMG_DESC" => $lang['Adr_items_image_explain'],
				"L_RECIPE_LEVEL" => $lang['recipe_level'],
				"L_RECIPE_LEVEL_DESC" => $lang['recipe_level_desc'],
				"L_RECIPE_SKILL" => $lang['Adr_recipe_skill'],
				"L_RECIPE_SKILL_EXPLAIN" => $lang['Adr_recipe_skill_explain'],
				"L_RECIPE_ADMIN_ONLY" => $lang['recipe_admin_only'],
				"L_RECIPE_ADMIN_ONLY_DESC" => $lang['recipe_admin_only_desc'],
				"RECIPE_NAME" => $recipe['item_name'],
				"RECIPE_DESC" => $recipe['item_desc'],
				"RECIPE_IMG" => $recipe['item_icon'],
				"RECIPE_LEVEL" => $recipe['item_power'],
				"RECIPE_SKILL_LIST" => $skill_item_list,
				"RECIPE_ADMIN_ONLY" => ( $recipe['item_auth'] ) ? 'checked' : '',
				"L_RECIPE_WEIGHT" => $lang['Adr_shops_item_weight'],
				"RECIPE_WEIGHT" => $recipe['item_weight'],
				"L_RECIPE_STORE" => $lang['Adr_items_store'],
				"RECIPE_STORE_LIST" => $recipe_store_cat_list,
				"L_RECIPE_STEAL" => $lang['Adr_items_steal'],
				"L_RECIPE_STEAL_EXPLAIN" => $lang['Adr_items_steal_explain'],
				"RECIPE_STEAL_LIST" => $recipe_steal_list,
				"L_RECIPE_QUALITY" => $lang['Adr_items_quality'],
				"RECIPE_QUALITY" => $r_quality,
				"RECIPE_ALIGNMENT_TYPE_ENABLE" => ($recipe['item_restrict_alignment_enable']) ? 'checked' : '',
				"RECIPE_ALIGNMENT_LIST" => $recipe_align_type,
				"RECIPE_CLASS_TYPE_ENABLE" => ($recipe['item_restrict_class_enable']) ? 'checked' : '',
				"RECIPE_CLASS_LIST" => $recipe_class_type,
				"RECIPE_RACE_TYPE_ENABLE" => ($recipe['item_restrict_race_enable']) ? 'checked' : '',
				"RECIPE_RACE_LIST" => $recipe_race_type,
				"RECIPE_ELEMENT_TYPE_ENABLE" => ($recipe['item_restrict_element_enable']) ? 'checked' : '',
				"RECIPE_ELEMENT_LIST" => $recipe_element_type,
				"L_RECIPE_TYPE" => $lang['Adr_items_type_use'],
				"RECIPE_TYPE" => adr_get_item_type(20,'simple'),
				"L_RECIPE_DURATION" => $lang['Adr_items_duration'],
				"L_RECIPE_DURATION_MAX" => $lang['Adr_items_duration_max'],
				"L_RECIPE_DURATION" => $lang['Adr_items_duration'],
				"L_RECIPE_DURATION_MAX" => $lang['Adr_items_duration_max'],
				"L_RECIPE_PRICE" => $lang['Adr_items_price'],
				"L_RECIPE_PRICE_EXPLAIN" => $lang['Adr_items_price_explain'],
				"L_RECIPE_SELL_BACK_PERCENT" => $lang['Adr_item_sell_back'],
				"L_RECIPE_SELL_BACK_PERCENT_EXPLAIN" => $lang['Adr_item_sell_back_explain'],
					
				//product
				"L_RECIPE_ITEMS_REQ" => $lang['recipe_items_req'],
				"L_RECIPE_ITEMS_REQ_DESC" => $lang['recipe_items_req_desc'],
				"L_RECIPE_ITEMS_AMOUNT" =>  $lang['recipe_items_amount'],
				"L_RECIPE_ITEMS_AMOUNT_DESC" =>  $lang['recipe_items_amount_desc'],
				"RECIPE_ITEMS_REQ" => $items_list,
				"RECIPE_ITEMS_AMOUNT" => $item['item_brewing_items_amount'],
				"RECIPE_EFFECT" => $item['item_brewing_effect'],
				"L_RECIPE_EFFECT" => $lang['recipe_effect'],
				"L_RECIPE_EFFECT_DESC" => $lang['recipe_effect_desc'],
				"L_RECIPE_EFFECT_HP" => $lang['Adr_character_health'],
				"L_RECIPE_EFFECT_MP" => $lang['Adr_character_magic'],
				"L_RECIPE_EFFECT_EXP" => $lang['Adr_character_experience'],
				"L_RECIPE_EFFECT_GOLD" => get_reward_name(),
				"L_RECIPE_EFFECT_SP" => $lang['Adr_character_sp'],
				"L_RECIPE_EFFECT_AC" => $lang['Adr_character_ac'],
				"L_RECIPE_EFFECT_STR" => $lang['Adr_character_power'],
				"L_RECIPE_EFFECT_DEX" => $lang['Adr_character_agility'],
				"L_RECIPE_EFFECT_CON" => $lang['Adr_character_endurance'],
				"L_RECIPE_EFFECT_INT" => $lang['Adr_character_intelligence'],
				"L_RECIPE_EFFECT_WIS" => $lang['Adr_character_willpower'],
				"L_RECIPE_EFFECT_CHA" => $lang['Adr_character_charm'],
				"L_RECIPE_EFFECT_BATTLES_REM" => $lang['Adr_character_battle_limit'],
				"L_RECIPE_EFFECT_SKILLUSE_REM" => $lang['Adr_character_skill_limit'],
				"L_RECIPE_EFFECT_TRADINGSKILL_REM" => $lang['Adr_character_trading_limit'],
				"L_RECIPE_EFFECT_THEFTSKILL_REM" => $lang['Adr_character_thief_limit'],
				"L_RECIPE_EFFECT_MA" => $lang['Adr_character_ma'],
				"L_RECIPE_EFFECT_MD" => $lang['Adr_character_md'],
				"L_RECIPE_EFFECT_ATT" => $lang['Adr_monster_list_att'],
				"L_RECIPE_EFFECT_DEF" => $lang['Adr_monster_list_def'],
				"L_RECIPE_TEMP_AND_PERM" => $lang['Adr_temp_and_perm_effects'],
				"L_RECIPE_PERM_ONLY" => $lang['Adr_perm_only_effects'],
				"L_RECIPE_PERM_EFFECT" => $lang['Adr_perm_effect'],
				"L_RECIPE_HIT_MONSTER" => $lang['Adr_hit_monster'],
				"RECIPE_EFFECT_HP" => $item['recipe_effect_hp'],
				"RECIPE_EFFECT_HP_M" => ( $item['recipe_effect_hp_m'] ) ? 'checked' : '',
				"RECIPE_EFFECT_MP" => $item['recipe_effect_mp'],
				"RECIPE_EFFECT_MP_M" => ( $item['recipe_effect_mp_m'] ) ? 'checked' : '',
				"RECIPE_EFFECT_AC" => $item['recipe_effect_ac'],
				"RECIPE_EFFECT_STR" => $item['recipe_effect_str'],
				"RECIPE_EFFECT_DEX" => $item['recipe_effect_dex'],
				"RECIPE_EFFECT_CON" => $item['recipe_effect_con'],
				"RECIPE_EFFECT_INT" => $item['recipe_effect_int'],
				"RECIPE_EFFECT_WIS" => $item['recipe_effect_wis'],
				"RECIPE_EFFECT_CHA" => $item['recipe_effect_cha'],
				"RECIPE_EFFECT_MA_PERM" => ( $item['recipe_effect_ma_perm'] ) ? 'checked' : '',
				"RECIPE_EFFECT_MA_M" => ( $item['recipe_effect_ma_m'] ) ? 'checked' : '',
				"RECIPE_EFFECT_MA" => $item['recipe_effect_ma'],
				"RECIPE_EFFECT_MD_PERM" => ( $item['recipe_effect_md_perm'] ) ? 'checked' : '',
				"RECIPE_EFFECT_MD_M" => ( $item['recipe_effect_md_m'] ) ? 'checked' : '',
				"RECIPE_EFFECT_MD" => $item['recipe_effect_md'],
				"RECIPE_EFFECT_EXP" => $item['recipe_effect_exp'],
				"RECIPE_EFFECT_GOLD" => $item['recipe_effect_gold'],
				"RECIPE_EFFECT_SP" => $item['recipe_effect_sp'],
				"RECIPE_EFFECT_BATTLES_REM" => $item['recipe_effect_battles_rem'],
				"RECIPE_EFFECT_SKILLUSE_REM" => $item['recipe_effect_skilluse_rem'],
				"RECIPE_EFFECT_TRADINGSKILL_REM" => $item['recipe_effect_tradingskill_rem'],
				"RECIPE_EFFECT_THEFTSKILL_REM" => $item['recipe_effect_theftskill_rem'],
				"ALIGNMENT_TYPE_ENABLE" => ($item['item_restrict_alignment_enable']) ? 'checked' : '',
				"ALIGNMENT_LIST" => $align_type,
				"CLASS_TYPE_ENABLE" => ($item['item_restrict_class_enable']) ? 'checked' : '',
				"CLASS_LIST" => $class_type,
				"RACE_TYPE_ENABLE" => ($item['item_restrict_race_enable']) ? 'checked' : '',
				"RACE_LIST" => $race_type,
				"ELEMENT_TYPE_ENABLE" => ($item['item_restrict_element_enable']) ? 'checked' : '',
				"ELEMENT_LIST" => $element_type,
				"ITEM_QUALITY" => adr_get_item_quality($item['item_quality'],'list'),
				"ITEM_TYPE" => adr_get_item_type($item['item_type_use'],'list'),
				"ITEM_ELEMENT_LIST" => $element_weap_list,
				"ITEM_ELEMENT_STR" => $item['item_element_str_dmg'],
				"ITEM_ELEMENT_SAME" => $item['item_element_same_dmg'],
				"ITEM_ELEMENT_WEAK" => $item['item_element_weak_dmg'],
				"ITEM_STORE_LIST" => $store_cat_list,
				"ITEM_WEIGHT" => $item['item_weight'],
				"ITEM_AUTH" => ( $item['item_auth'] ) ? 'checked' : '',
				"ITEM_MAX_SKILL" => $items['item_max_skill'],
				"ITEM_SELL_BACK_PERCENT" => $items['item_sell_back_percentage'],
				"ITEM_STEAL_LIST" => $steal_list,
				"L_ITEM_STEAL" => $lang['Adr_items_steal_dc'],
				"L_ITEM_STEAL_EXPLAIN" => $lang['Adr_items_steal_explain'],
				"L_ITEM_SELL_BACK_PERCENT" => $lang['Adr_item_sell_back'],
				"L_ITEM_SELL_BACK_PERCENT_EXPLAIN" => $lang['Adr_item_sell_back_explain'],
				"L_ITEM_ELEMENT" => $lang['Adr_shops_item_element'],
				"L_ITEM_ELEMENT_STR" => $lang['Adr_shops_item_element_str'],
				"L_ITEM_ELEMENT_SAME" => $lang['Adr_shops_item_element_same'],
				"L_ITEM_ELEMENT_WEAK" => $lang['Adr_shops_item_element_weak'],
				"L_ITEM_MAX_SKILL" => $lang['Adr_item_max_skill'],
				"L_ITEM_WEIGHT" => $lang['Adr_shops_item_weight'],
				"L_ITEM_STORE" => $lang['Adr_items_store'],
				"L_ITEM_ENHANCEMENTS" => $lang['Adr_items_enhancements'],
				"L_ITEM_ADD_POWER" => $lang['Adr_items_dex'],
				"L_ITEM_ADD_POWER_EXPLAIN" => $lang['Adr_items_dex_explain'],
				"L_ITEM_MP_USE" => $lang['Adr_items_mp_use'],
				"L_ITEM_MP_USE_EXPLAIN" => $lang['Adr_items_mp_use_explain'],
				"L_POINTS" => $board_config['points_name'],
				"L_NAME_EXPLAIN" => $lang['Adr_races_name_explain'],
				"L_RECIPES_TITLE" => $lang['Adr_recipes_add_title'],
				"L_RECIPES_EXPLAIN" => $lang['Adr_recipes_add_title_explain'],
				"L_ITEM_NAME" => $lang['Adr_shops_categories_item_name'],
				"L_ITEM_DESC" => $lang['Adr_shops_categories_item_desc'],
				"L_ITEM_QUALITY" => $lang['Adr_items_quality'],
				"L_ITEM_POWER" => $lang['Adr_items_power'],
				"L_ITEM_ENHANCEMENTS" => $lang['Adr_items_enhancements'],
				"L_ITEM_ADD_POWER" => $lang['Adr_items_dex'],
				"L_ITEM_ADD_POWER_EXPLAIN" => $lang['Adr_items_dex_explain'],
				"L_ITEM_MP_USE" => $lang['Adr_items_mp_use'],
				"L_ITEM_MP_USE_EXPLAIN" => $lang['Adr_items_mp_use_explain'],
				"L_ITEM_DURATION" => $lang['Adr_items_duration'],
				"L_ITEM_DURATION_MAX" => $lang['Adr_items_duration_max'],
				"L_ITEM_TYPE" => $lang['Adr_items_type_use'],
				"L_ITEM_AUTH" => $lang['Adr_store_auth'],
				"L_RESTRICT_CHARS" => $lang['Adr_admin_item_restrict_chars'],
				"L_RESTRICT_CHARS_EXPLAIN" => $lang['Adr_admin_item_restrict_chars_explain'],
				"L_RESTRICT_LEVEL" => $lang['Adr_admin_item_restrict_level'],
				"L_RESTRICT_LEVEL_EXPLAIN" => $lang['Adr_admin_item_restrict_level_explain'],
				"L_RESTRICT_AC" => $lang['Adr_char_ac'],
				"L_RESTRICT_DEX" => $lang['Adr_char_dex'],
				"L_RESTRICT_INT" => $lang['Adr_char_int'],
				"L_RESTRICT_WIS" => $lang['Adr_char_wis'],
				"L_RESTRICT_STR" => $lang['Adr_char_str'],
				"L_RESTRICT_CHA" => $lang['Adr_char_cha'],
				"L_RESTRICT_CON" => $lang['Adr_char_con'],
        		"L_RESTRICT_CLASS_ENABLE" => $lang['Adr_admin_item_restrict_class_enable'],
        		"L_RESTRICT_CLASS_ENABLE_EXPLAIN" => $lang['Adr_admin_item_restrict_class_enable_explain'],
        		"L_RESTRICT_ALIGNMENT_ENABLE" => $lang['Adr_admin_item_restrict_alignment_enable'],
        		"L_RESTRICT_ALIGNMENT_ENABLE_EXPLAIN" => $lang['Adr_admin_item_restrict_alignment_enable_explain'],
        		"L_RESTRICT_RACE_ENABLE" => $lang['Adr_admin_item_restrict_race_enable'],
        		"L_RESTRICT_RACE_ENABLE_EXPLAIN" => $lang['Adr_admin_item_restrict_race_enable_explain'],
        		"L_RESTRICT_ELEMENT_ENABLE" => $lang['Adr_admin_item_restrict_element_enable'],
        		"L_RESTRICT_ELEMENT_ENABLE_EXPLAIN" => $lang['Adr_admin_item_restrict_element_enable_explain'],
        		"L_RESTRICT_CLASS" => $lang['Adr_admin_item_restrict_class'],
        		"L_RESTRICT_ALIGNMENT" => $lang['Adr_admin_item_restrict_alignment'],
        		"L_RESTRICT_RACE" => $lang['Adr_admin_item_restrict_race'],
        		"L_RESTRICT_ELEMENT" => $lang['Adr_admin_item_restrict_element'],
				"L_NAME" => $lang['Adr_races_name'],
				"L_DESC" => $lang['Adr_races_desc'],
				"L_ACTION" => $lang['Action'],
				"L_ITEMS" => $lang['Adr_shops_categories_items'],
				"L_EDIT" => $lang['Edit'],
				"L_DELETE" => $lang['Delete'],
				"L_ITEM_IMG" => $lang['Adr_races_image'],
				"L_ITEM_PRICE" => $lang['Adr_items_price'],
				"L_ITEM_PRICE_EXPLAIN" => $lang['Adr_items_price_explain'],
				"L_IMG" => $lang['Adr_races_image'],
				"L_IMG_EXPLAIN" => $lang['Adr_items_image_explain'],
				"L_ITEM_ELEMENT" => $lang['Adr_shops_item_element'],
				"L_SUBMIT" => $lang['Submit'],
				"S_ITEMS_ACTION" => append_sid("admin_adr_crafting_recipes.$phpEx"),
				"S_HIDDEN_FIELDS" => $s_hidden_fields, 
			));

			$template->pparse("body");

		break;

		case 'delete_recipe':
			
			$recipe_id = ( !empty($_POST['recipe_id']) ) ? intval($_POST['recipe_id']) : intval($_GET['recipe_id']);
			$sql_get_linked_item = "SELECT * FROM " . ADR_SHOPS_ITEMS_TABLE . "
				WHERE item_id = " . $recipe_id . "
				AND item_owner_id = 1";
			$result_get_linked_item = $db->sql_query($sql_get_linked_item);
			if( !$result_get_linked_item )
			{
				message_die(GENERAL_ERROR, "Couldn't select recipe info", "", __LINE__, __FILE__, $sql_get_linked_item);
			}
			$linked_item = $db->sql_fetchrow($result_get_linked_item);
			$linked_item_id = $linked_item['item_recipe_linked_item'];
			
			$sql = "DELETE FROM " . ADR_SHOPS_ITEMS_TABLE . "
				WHERE item_id = " . $recipe_id . "
				AND item_owner_id = 1";
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, "Couldn't delete recipe", "", __LINE__, __FILE__, $sql);
			}
			
			$sql = "DELETE FROM " . ADR_SHOPS_ITEMS_TABLE . "
				WHERE item_id = " . $linked_item_id . "
				AND item_owner_id = 1";
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, "Couldn't delete linked item of the recipe", "", __LINE__, __FILE__, $sql);
			}

			//delete learned recipes of the recipebooks
			$sql = "DELETE FROM " . ADR_RECIPEBOOK_TABLE . "
				WHERE recipe_original_id = " . $recipe_id . "
				AND recipe_skill_id = 13
				";
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, "Couldn't delete recipes of the players recipebooks", "", __LINE__, __FILE__, $sql);
			}

			adr_previous( Adr_recipe_successful_deleted , admin_adr_crafting_recipes , '' );
			break;

		break;

		case 'edit_recipe':
			
			$recipe_id =  ( !empty($_POST['recipe_id']) ) ? intval($_POST['recipe_id']) : intval($_GET['recipe_id']);
			adr_template_file('admin/config_adr_crafting_recipes_edit_body.tpl');
			$template->assign_block_vars('edit',array());

			$sql_recipe = "SELECT * FROM " . ADR_SHOPS_ITEMS_TABLE . "
				WHERE item_id = " . $recipe_id . "
				AND item_owner_id = 1";
			$result_recipe = $db->sql_query($sql_recipe);
			if( !$result_recipe )
			{
				message_die(GENERAL_ERROR, "Couldn't select recipe info", "", __LINE__, __FILE__, $sql_recipe);
			}
			$recipe = $db->sql_fetchrow($result_recipe);
			
			$sql_item = "SELECT * FROM " . ADR_SHOPS_ITEMS_TABLE . "
				WHERE item_id = " . $recipe['item_recipe_linked_item'];
			$result_item = $db->sql_query($sql_item);
			if( !$result_item )
			{
				message_die(GENERAL_ERROR, "Couldn't select recipe info", "", __LINE__, __FILE__, $sql_item);
			}
			$item = $db->sql_fetchrow($result_item);

			$s_hidden_fields = '<input type="hidden" name="mode" value="save_recipe" /><input type="hidden" name="recipe_id" value="'.$recipe_id.'" /><input type="hidden" name="item_id" value="'.$item['item_id'].'" />';

			// Element list
			$sql = "SELECT * FROM " . ADR_ELEMENTS_TABLE ;
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$element_list = $db->sql_fetchrowset($result);

			$element_weap_list = '<select name="element_weap_list">';
			$element_weap_list .= '<option value = "0" >' . $lang['Adr_items_element_none'] . '</option>';
			for( $i = 0; $i < count($element_list); $i++ )
			{
				$element_list[$i]['element_name'] = adr_get_lang($element_list[$i]['element_name']);
				$element_selected = ( $item['item_element'] == $element_list[$i]['element_id'] ) ? 'selected' : '';
				$element_weap_list .= '<option value = "'.$element_list[$i]['element_id'].'" '.$element_selected.' >' . adr_get_lang($element_list[$i]['element_name']) . '</option>';
			}
			$element_weap_list .= '</select>';	

			// Skills list
			$sql = "SELECT * FROM " . ADR_SKILLS_TABLE ;
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain skills information', "", __LINE__, __FILE__, $sql);
			}
			$skill_list = $db->sql_fetchrowset($result);

			$skill_item_list = '<select name="skill_item_list">';
			for( $i = 0; $i < count($skill_list); $i++ )
			{
				$skill_list[$i]['skill_name'] = adr_get_lang($skill_list[$i]['skill_name']);
				$skill_selected = ( $recipe['item_recipe_skill_id'] == $skill_list[$i]['skill_id'] ) ? 'selected' : '';
				$skill_item_list .= '<option value = "'.$skill_list[$i]['skill_id'].'" '.$skill_selected.' >' . adr_get_lang($skill_list[$i]['skill_name']) . '</option>';
			}
			$skill_item_list .= '</select>';

			$sql = "SELECT * FROM " . ADR_STORES_TABLE . "
					WHERE store_admin = 0 ";
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$store_list = $db->sql_fetchrowset($result);

			// Stores list
			$store_cat_list = '<select name="store_cat_list">';
			for($i = 0; $i < count($store_list); $i++)
			{
				$store_list[$i]['store_name'] = adr_get_lang($store_list[$i]['store_name']);
				$store_selected = ( $item['item_store_id'] == $store_list[$i]['store_id'] ) ? 'selected' : '';
				$store_cat_list .= '<option value = "'.$store_list[$i]['store_id'].'" '.$store_selected.' >' . $store_list [$i]['store_name'] . '</option>';
			}
			$store_cat_list .= '</select>';
			
			// recipe Stores list
			$recipe_store_cat_list = '<select name="recipe_store_cat_list">';
			for($i = 0; $i < count($store_list); $i++)
			{
				$store_list[$i]['store_name'] = adr_get_lang($store_list[$i]['store_name']);
				$recipe_store_selected = ( $recipe['item_store_id'] == $store_list[$i]['store_id'] ) ? 'selected' : '';
				$recipe_store_cat_list .= '<option value = "'.$store_list[$i]['store_id'].'" '.$recipe_store_selected.' >' . $store_list [$i]['store_name'] . '</option>';
			}
			$recipe_store_cat_list .= '</select>';

			// item list
  			$sql = "SELECT * FROM ". ADR_SHOPS_ITEMS_TABLE ."
       			WHERE item_owner_id = '1'
				ORDER BY item_name ASC ";
			$result = $db->sql_query($sql);
			if( !$result )
				message_die(GENERAL_ERROR, 'Could not obtain items information', "", __LINE__, __FILE__, $sql);
			$itemslist = $db->sql_fetchrowset($result);
			
			$existing_items_load = explode(":",$item['item_brewing_items_req']);
			for( $i = 0; $i < count($existing_items_load); $i++ )
			{
				$switch_write = ( !($i % 2) ) ? $add_id=1 : $add_id=0;
				if ($add_id == 1)
					$new_item_list = ( $new_item_list == '' ) ? $new_item_list .= $existing_items_load[$i] : $new_item_list .= ':'.$existing_items_load[$i];
				else
					$new_item_amount_list = ( $new_item_amount_list == '' ) ? $new_item_amount_list .= $existing_items_load[$i] : $new_item_amount_list .= ':'.$existing_items_load[$i];
			}
			$existing_items = explode(":",$new_item_list);

			$items_list = '<select name="recipe_items_req[]" size="8" multiple>'; 
			if( in_array('0',$existing_items) )
			$selected_no_items = 'selected';
			$items_list .= '<option value = "0" '.$selected_no_items.'>'.$lang['Adr_store_element_none'].'</option>'; 
			for( $i = 0; $i < count($itemslist); $i++ ) 
			{ 
				if( in_array($itemslist[$i]['item_id'], $existing_items) && !isset($selected_no_items) )
				$selected_items = 'selected';
				$items_list .= '<option value = "'.$itemslist[$i]['item_id'].'" '.$selected_items.'>'.adr_get_lang($itemslist[$i]['item_name']) . ' - ' . $lang['Adr_items_level'] . ' ' . $itemslist[$i]['item_power'] . '</option>'; 
				$selected_items = '';
			} 
			$items_list .= '</select>'; 
	
			// Steal DC options
			$steal_dc[0] = $lang['Adr_steal_none'];
			$steal_dc[1] = $lang['Adr_steal_very_easy'];
			$steal_dc[2] = $lang['Adr_steal_easy'];
			$steal_dc[3] = $lang['Adr_steal_average'];
			$steal_dc[4] = $lang['Adr_steal_tough'];
			$steal_dc[5] = $lang['Adr_steal_challenging'];
			$steal_dc[6] = $lang['Adr_steal_formidable'];
			$steal_dc[7] = $lang['Adr_steal_heroic'];
			$steal_dc[8] = $lang['Adr_steal_impossible'];
			$recipe_steal_dc[0] = $lang['Adr_steal_none'];
			$recipe_steal_dc[1] = $lang['Adr_steal_very_easy'];
			$recipe_steal_dc[2] = $lang['Adr_steal_easy'];
			$recipe_steal_dc[3] = $lang['Adr_steal_average'];
			$recipe_steal_dc[4] = $lang['Adr_steal_tough'];
			$recipe_steal_dc[5] = $lang['Adr_steal_challenging'];
			$recipe_steal_dc[6] = $lang['Adr_steal_formidable'];
			$recipe_steal_dc[7] = $lang['Adr_steal_heroic'];
			$recipe_steal_dc[8] = $lang['Adr_steal_impossible'];

			$steal_list = '<select name="steal_dc">';
			for($i = 0; $i < 9; $i++)
			{
				$steal_list .= '<option value = "'.$i.'" >' . $steal_dc[$i] . '</option>';
			}
			$steal_list .= '</select>';
			
			$recipe_steal_list = '<select name="recipe_steal_dc">';
			for($i = 0; $i < 9; $i++)
			{
				$recipe_steal_list .= '<option value = "'.$i.'" >' . $steal_dc[$i] . '</option>';
			}
			$recipe_steal_list .= '</select>';
			// END steal DC options

			// START alignment restrictions
			$sql = "SELECT * FROM " . ADR_ALIGNMENTS_TABLE;
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$align_list = $db->sql_fetchrowset($result);

			// Explode current alignment list
			$current_align_list = explode(",", $item['item_restrict_align']);

			// Make multiple selection box
			$align_type = '<select name="align_type_list[]" size="6" multiple>';
			for($i = 0; $i < count($align_list); $i++)
			{
				$align_list[$i]['alignment_name'] = adr_get_lang($align_list[$i]['alignment_name']);
				$align_selected = (in_array($align_list[$i]['alignment_id'], $current_align_list)) ? 'selected' : '';
				$align_type .= '<option value = "'.$align_list[$i]['alignment_id'].'" '.$align_selected.' >' . $align_list[$i]['alignment_name'] . '</option>';
			}
			$align_type .= '</select>';
			// END alignment restrictions

			// START class restrictions
			$sql = "SELECT * FROM " . ADR_CLASSES_TABLE;
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain class info', "", __LINE__, __FILE__, $sql);
			}
			$class_list = $db->sql_fetchrowset($result);

			// Explode current class list
			$current_class_list = explode(",", $item['item_restrict_class']);

			// Make multiple selection box
			$class_type = '<select name="class_type_list[]" size="6" multiple>';
			for($i = 0; $i < count($class_list); $i++)
			{
				$class_list[$i]['class_name'] = adr_get_lang($class_list[$i]['class_name']);
				$class_selected = (in_array($class_list[$i]['class_id'], $current_class_list)) ? 'selected' : '';
				$class_type .= '<option value = "'.$class_list[$i]['class_id'].'" '.$class_selected.' >' . $class_list[$i]['class_name'] . '</option>';
			}
			$class_type .= '</select>';
			// END class restrictions

			// START race restrictions
			$sql = "SELECT * FROM " . ADR_RACES_TABLE;
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$race_list = $db->sql_fetchrowset($result);

			// Explode current race list
			$current_race_list = explode(",", $item['item_restrict_race']);

			// Make multiple selection box
			$race_type = '<select name="race_type_list[]" size="6" multiple>';
			for($i = 0; $i < count($race_list); $i++)
			{
				$race_list[$i]['race_name'] = adr_get_lang($race_list[$i]['race_name']);
				$race_selected = (in_array($race_list[$i]['race_id'], $current_race_list)) ? 'selected' : '';
				$race_type .= '<option value = "'.$race_list[$i]['race_id'].'" '.$race_selected.' >' . $race_list[$i]['race_name'] . '</option>';
			}
			$race_type .= '</select>';
			// END race restrictions

			// START element restrictions
			$sql = "SELECT * FROM " . ADR_ELEMENTS_TABLE;
			$result = $db->sql_query($sql);
			if(!$result)
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$element_list = $db->sql_fetchrowset($result);

			// Explode current element list
			$current_element_list = explode(",", $item['item_restrict_element']);

			// Make multiple selection box
			$element_type = '<select name="element_type_list[]" size="6" multiple>';
			for($i = 0; $i < count($element_list); $i++)
			{
				$element_list[$i]['element_name'] = adr_get_lang($element_list[$i]['element_name']);
				$element_selected = (in_array($element_list[$i]['element_id'], $current_element_list)) ? 'selected' : '';
				$element_type .= '<option value = "'.$element_list[$i]['element_id'].'" '.$element_selected.' >' . $element_list[$i]['element_name'] . '</option>';
			}
			$element_type .= '</select>';
			// END element restrictions

			// START alignment restrictions
			$sql = "SELECT * FROM " . ADR_ALIGNMENTS_TABLE;
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$recipe_align_list = $db->sql_fetchrowset($result);

			// Explode current alignment list
			$recipe_current_align_list = explode(",", $recipe['item_restrict_align']);

			// Make multiple selection box
			$recipe_align_type = '<select name="recipe_align_type_list[]" size="6" multiple>';
			for($i = 0; $i < count($recipe_align_list); $i++)
			{
				$recipe_align_list[$i]['alignment_name'] = adr_get_lang($recipe_align_list[$i]['alignment_name']);
				$recipe_align_selected = (in_array($recipe_align_list[$i]['alignment_id'], $recipe_current_align_list)) ? 'selected' : '';
				$recipe_align_type .= '<option value = "'.$recipe_align_list[$i]['alignment_id'].'" '.$recipe_align_selected.' >' . $recipe_align_list[$i]['alignment_name'] . '</option>';
			}
			$recipe_align_type .= '</select>';
			// END alignment restrictions

			// START class restrictions
			$sql = "SELECT * FROM " . ADR_CLASSES_TABLE;
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain class info', "", __LINE__, __FILE__, $sql);
			}
			$recipe_class_list = $db->sql_fetchrowset($result);

			// Explode current class list
			$recipe_current_class_list = explode(",", $recipe['item_restrict_class']);

			// Make multiple selection box
			$recipe_class_type = '<select name="recipe_class_type_list[]" size="6" multiple>';
			for($i = 0; $i < count($recipe_class_list); $i++)
			{
				$recipe_class_list[$i]['class_name'] = adr_get_lang($recipe_class_list[$i]['class_name']);
				$recipe_class_selected = (in_array($recipe_class_list[$i]['class_id'], $recipe_current_class_list)) ? 'selected' : '';
				$recipe_class_type .= '<option value = "'.$recipe_class_list[$i]['class_id'].'" '.$recipe_class_selected.' >' . $recipe_class_list[$i]['class_name'] . '</option>';
			}
			$recipe_class_type .= '</select>';
			// END class restrictions

			// START race restrictions
			$sql = "SELECT * FROM " . ADR_RACES_TABLE;
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$recipe_race_list = $db->sql_fetchrowset($result);

			// Explode current race list
			$recipe_current_race_list = explode(",", $recipe['item_restrict_race']);

			// Make multiple selection box
			$recipe_race_type = '<select name="recipe_race_type_list[]" size="6" multiple>';
			for($i = 0; $i < count($recipe_race_list); $i++)
			{
				$recipe_race_list[$i]['race_name'] = adr_get_lang($recipe_race_list[$i]['race_name']);
				$recipe_race_selected = (in_array($recipe_race_list[$i]['race_id'], $recipe_current_race_list)) ? 'selected' : '';
				$recipe_race_type .= '<option value = "'.$recipe_race_list[$i]['race_id'].'" '.$recipe_race_selected.' >' . $recipe_race_list[$i]['race_name'] . '</option>';
			}
			$recipe_race_type .= '</select>';
			// END race restrictions

			// START element restrictions
			$sql = "SELECT * FROM " . ADR_ELEMENTS_TABLE;
			$result = $db->sql_query($sql);
			if(!$result)
			{
				message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
			}
			$recipe_element_list = $db->sql_fetchrowset($result);

			// Explode current element list
			$recipe_current_element_list = explode(",", $recipe['item_restrict_element']);

			// Make multiple selection box
			$recipe_element_type = '<select name="recipe_element_type_list[]" size="6" multiple>';
			for($i = 0; $i < count($recipe_element_list); $i++)
			{
				$recipe_element_list[$i]['element_name'] = adr_get_lang($recipe_element_list[$i]['element_name']);
				$recipe_element_selected = (in_array($recipe_element_list[$i]['element_id'], $recipe_current_element_list)) ? 'selected' : '';
				$recipe_element_type .= '<option value = "'.$recipe_element_list[$i]['element_id'].'" '.$recipe_element_selected.' >' . $recipe_element_list[$i]['element_name'] . '</option>';
			}
			$element_type .= '</select>';
			// END element restrictions
			
			$sql = "SELECT * FROM  " . ADR_SHOPS_ITEMS_QUALITY_TABLE;
			if(!$result = $db->sql_query($sql)){
				message_die(GENERAL_ERROR, 'Unable to query item quality infos (non-cache)', '', __LINE__, __FILE__, $sql);}
			$recipes_quality = $db->sql_fetchrowset($result);
			$r_quality = '<select name="recipe_quality">';
			for ($l = 1 ; $l < count($recipes_quality) ; $l++ )
			{
				$selected = ( $recipes_quality[$l]['item_quality_id'] == $recipe['item_quality'] ) ? 'selected="selected"' : '';
				$r_quality .= '<option value = "'.$recipes_quality[$l]['item_quality_id'].'" '.$selected.'>' . $lang[$recipes_quality[$l]['item_quality_lang']] . '</option>';
			}
			$r_quality .= '</select>';

			$effects_list = array();
			$effects_list = explode(':',$recipe['item_effect']);
			for ($i = 0; $i < count($effects_list);$i++)
			{
				if($effects_list[$i] == 'HP') {
					$hp_effect_value = $effects_list[$i+1];
					$hp_monster_hit = $effects_list[$i+3];
					$hp_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'MP') {
					$mp_effect_value = $effects_list[$i+1];
					$mp_monster_hit = $effects_list[$i+3];
					$mp_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'AC') {
					$ac_effect_value = $effects_list[$i+1];
					$ac_monster_hit = $effects_list[$i+3];
					$ac_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'STR') {
					$str_effect_value = $effects_list[$i+1];
					$str_monster_hit = $effects_list[$i+3];
					$str_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'DEX') {
					$dex_effect_value = $effects_list[$i+1];
					$dex_monster_hit = $effects_list[$i+3];
					$dex_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'CON') {
					$con_effect_value = $effects_list[$i+1];
					$con_monster_hit = $effects_list[$i+3];
					$con_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'INT') {
					$int_effect_value = $effects_list[$i+1];
					$int_monster_hit = $effects_list[$i+3];
					$int_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'WIS') {
					$wis_effect_value = $effects_list[$i+1];
					$wis_monster_hit = $effects_list[$i+3];
					$wis_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'CHA') {
					$cha_effect_value = $effects_list[$i+1];
					$cha_monster_hit = $effects_list[$i+3];
					$cha_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'MA') {
					$ma_effect_value = $effects_list[$i+1];
					$ma_monster_hit = $effects_list[$i+3];
					$ma_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'MD') {
					$md_effect_value = $effects_list[$i+1];
					$md_monster_hit = $effects_list[$i+3];
					$md_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'EXP') {
					$exp_effect_value = $effects_list[$i+1];
					$exp_monster_hit = $effects_list[$i+3];
					$exp_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'GOLD') {
					$gold_effect_value = $effects_list[$i+1];
					$gold_monster_hit = $effects_list[$i+3];
					$gold_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'SP') {
					$sp_effect_value = $effects_list[$i+1];
					$sp_monster_hit = $effects_list[$i+3];
					$sp_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'BATTLES_REM') {
					$battles_rem_effect_value = $effects_list[$i+1];
					$battles_rem_monster_hit = $effects_list[$i+3];
					$battles_rem_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'SKILLUSE_REM') {
					$skilluse_rem_effect_value = $effects_list[$i+1];
					$skilluse_rem_monster_hit = $effects_list[$i+3];
					$skilluse_rem_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'TRADINGSKILL_REM') {
					$tradingskill_rem_effect_value = $effects_list[$i+1];
					$tradingskill_rem_monster_hit = $effects_list[$i+3];
					$tradingskill_rem_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'THEFTSKILL_REM') {
					$theftskill_rem_effect_value = $effects_list[$i+1];
					$theftskill_rem_monster_hit = $effects_list[$i+3];
					$theftskill_rem_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'ATT') {
					$att_effect_value = $effects_list[$i+1];
					$att_monster_hit = $effects_list[$i+3];
					$att_perm_effect = $effects_list[$i+5];
				}
				if($effects_list[$i] == 'DEF') {
					$def_effect_value = $effects_list[$i+1];
					$def_monster_hit = $effects_list[$i+3];
					$def_perm_effect = $effects_list[$i+5];
				}
			}
			
			$template->assign_vars(array(
				//recipe
				"L_RECIPE_NAME" => $lang['recipe_name'],
				"L_RECIPE_NAME_DESC" => $lang['recipe_name_desc'],
				"L_RECIPE_DESC" => $lang['recipe_desc'],
				"L_RECIPE_DESC_DESC" => $lang['recipe_desc_desc'],
				"L_RECIPE_IMG" => $lang['Adr_races_image'],
				"L_RECIPE_IMG_DESC" => $lang['Adr_items_image_explain'],
				"L_RECIPE_LEVEL" => $lang['recipe_level'],
				"L_RECIPE_LEVEL_DESC" => $lang['recipe_level_desc'],
				"L_RECIPE_SKILL" => $lang['Adr_recipe_skill'],
				"L_RECIPE_SKILL_EXPLAIN" => $lang['Adr_recipe_skill_explain'],
				"L_RECIPE_ADMIN_ONLY" => $lang['recipe_admin_only'],
				"L_RECIPE_ADMIN_ONLY_DESC" => $lang['recipe_admin_only_desc'],
				"RECIPE_NAME" => $recipe['item_name'],
				"RECIPE_DESC" => $recipe['item_desc'],
				"RECIPE_IMG" => $recipe['item_icon'],
				"RECIPE_LEVEL" => $recipe['item_power'],
				"RECIPE_SKILL_LIST" => $skill_item_list,
				"RECIPE_DURATION" => $recipe['item_duration'],
				"RECIPE_DURATION_MAX" => $recipe['item_duration_max'],
				"RECIPE_ADD_POWER" => $recipe['item_add_power'],
				"RECIPE_MP_USE" => $recipe['item_mp_use'],
				"RECIPE_PRICE" => $recipe['item_price'],
				"RECIPE_ADMIN_ONLY" => ( $recipe['item_auth'] ) ? 'checked' : '',
				"RECIPE_SELL_BACK_PERCENT" => $recipe['item_sell_back_percentage'],
				"L_RECIPE_WEIGHT" => $lang['Adr_shops_item_weight'],
				"RECIPE_WEIGHT" => $recipe['item_weight'],
				"L_RECIPE_STORE" => $lang['Adr_items_store'],
				"RECIPE_STORE_LIST" => $recipe_store_cat_list,
				"L_RECIPE_STEAL" => $lang['Adr_items_steal'],
				"L_RECIPE_STEAL_EXPLAIN" => $lang['Adr_items_steal_explain'],
				"RECIPE_STEAL_LIST" => $recipe_steal_list,
				"RECIPE_ALIGNMENT_TYPE_ENABLE" => ($recipe['item_restrict_align_enable']) ? 'checked' : '',
				"RECIPE_ALIGNMENT_LIST" => $recipe_align_type,
				"RECIPE_CLASS_TYPE_ENABLE" => ($recipe['item_restrict_class_enable']) ? 'checked' : '',
				"RECIPE_CLASS_LIST" => $recipe_class_type,
				"RECIPE_RACE_TYPE_ENABLE" => ($recipe['item_restrict_race_enable']) ? 'checked' : '',
				"RECIPE_RACE_LIST" => $recipe_race_type,
				"RECIPE_ELEMENT_TYPE_ENABLE" => ($recipe['item_restrict_element_enable']) ? 'checked' : '',
				"RECIPE_ELEMENT_LIST" => $recipe_element_type,
				"RECIPE_RESTRICT_LEVEL" => $recipe['item_restrict_level'],
				"RECIPE_RESTRICT_CON" => $recipe['item_restrict_con'],
				"RECIPE_RESTRICT_STR" => $recipe['item_restrict_str'],
				"RECIPE_RESTRICT_DEX" => $recipe['item_restrict_dex'],
				"RECIPE_RESTRICT_INT" => $recipe['item_restrict_int'],
				"RECIPE_RESTRICT_WIS" => $recipe['item_restrict_wis'],
				"RECIPE_RESTRICT_CHA" => $recipe['item_restrict_cha'],
				"L_RECIPE_QUALITY" => $lang['Adr_items_quality'],
				"RECIPE_QUALITY" => $r_quality,
				"L_RECIPE_TYPE" => $lang['Adr_items_type_use'],
				"RECIPE_TYPE" => adr_get_item_type(20,'simple'),
				"L_RECIPE_DURATION" => $lang['Adr_items_duration'],
				"L_RECIPE_DURATION_MAX" => $lang['Adr_items_duration_max'],
				"L_RECIPE_DURATION" => $lang['Adr_items_duration'],
				"L_RECIPE_DURATION_MAX" => $lang['Adr_items_duration_max'],
				"L_RECIPE_PRICE" => $lang['Adr_items_price'],
				"L_RECIPE_PRICE_EXPLAIN" => $lang['Adr_items_price_explain'],
				"L_RECIPE_SELL_BACK_PERCENT" => $lang['Adr_item_sell_back'],
				"L_RECIPE_SELL_BACK_PERCENT_EXPLAIN" => $lang['Adr_item_sell_back_explain'],
					
				//product
				"L_RECIPE_ITEMS_REQ" => $lang['recipe_items_req'],
				"L_RECIPE_ITEMS_REQ_DESC" => $lang['recipe_items_req_desc'],
				"L_RECIPE_ITEMS_AMOUNT" =>  $lang['recipe_items_amount'],
				"L_RECIPE_ITEMS_AMOUNT_DESC" =>  $lang['recipe_items_amount_desc'],
				"RECIPE_ITEMS_REQ" => $items_list,
				"RECIPE_ITEMS_AMOUNT" => $new_item_amount_list,
				"RECIPE_EFFECT" => $item['item_brewing_effect'],
				"L_RECIPE_EFFECT" => $lang['recipe_effect'],
				"L_RECIPE_EFFECT_DESC" => $lang['recipe_effect_desc'],
				"L_RECIPE_EFFECT_HP" => $lang['Adr_character_health'],
				"L_RECIPE_EFFECT_MP" => $lang['Adr_character_magic'],
				"L_RECIPE_EFFECT_EXP" => $lang['Adr_character_experience'],
				"L_RECIPE_EFFECT_GOLD" => get_reward_name(),
				"L_RECIPE_EFFECT_SP" => $lang['Adr_character_sp'],
				"L_RECIPE_EFFECT_AC" => $lang['Adr_character_ac'],
				"L_RECIPE_EFFECT_STR" => $lang['Adr_character_power'],
				"L_RECIPE_EFFECT_DEX" => $lang['Adr_character_agility'],
				"L_RECIPE_EFFECT_CON" => $lang['Adr_character_endurance'],
				"L_RECIPE_EFFECT_INT" => $lang['Adr_character_intelligence'],
				"L_RECIPE_EFFECT_WIS" => $lang['Adr_character_willpower'],
				"L_RECIPE_EFFECT_CHA" => $lang['Adr_character_charm'],
				"L_RECIPE_EFFECT_BATTLES_REM" => $lang['Adr_character_battle_limit'],
				"L_RECIPE_EFFECT_SKILLUSE_REM" => $lang['Adr_character_skill_limit'],
				"L_RECIPE_EFFECT_TRADINGSKILL_REM" => $lang['Adr_character_trading_limit'],
				"L_RECIPE_EFFECT_THEFTSKILL_REM" => $lang['Adr_character_thief_limit'],
				"L_RECIPE_EFFECT_MA" => $lang['Adr_character_ma'],
				"L_RECIPE_EFFECT_MD" => $lang['Adr_character_md'],
				"L_RECIPE_EFFECT_ATT" => $lang['Adr_monster_list_att'],
				"L_RECIPE_EFFECT_DEF" => $lang['Adr_monster_list_def'],
				"L_RECIPE_TEMP_AND_PERM" => $lang['Adr_temp_and_perm_effects'],
				"L_RECIPE_PERM_ONLY" => $lang['Adr_perm_only_effects'],
				"L_RECIPE_PERM_EFFECT" => $lang['Adr_perm_effect'],
				"L_RECIPE_HIT_MONSTER" => $lang['Adr_hit_monster'],
				"RECIPE_EFFECT_HP" => $hp_effect_value,
				"RECIPE_EFFECT_HP_M" => ( $hp_monster_hit ) ? 'checked' : '',
				"RECIPE_EFFECT_MP" => $mp_effect_value,
				"RECIPE_EFFECT_MP_M" => ( $mp_monster_hit ) ? 'checked' : '',
				"RECIPE_EFFECT_AC" => $ac_effect_value,
				"RECIPE_EFFECT_STR" => $str_effect_value,
				"RECIPE_EFFECT_DEX" => $dex_effect_value,
				"RECIPE_EFFECT_CON" => $con_effect_value,
				"RECIPE_EFFECT_INT" => $int_effect_value,
				"RECIPE_EFFECT_WIS" => $wis_effect_value,
				"RECIPE_EFFECT_CHA" => $cha_effect_value,
				"RECIPE_EFFECT_MA_PERM" => ( $ma_perm_effect ) ? 'checked' : '',
				"RECIPE_EFFECT_MA_M" => ( $ma_monster_hit ) ? 'checked' : '',
				"RECIPE_EFFECT_MA" => $ma_effect_value,
				"RECIPE_EFFECT_MD_PERM" => ( $md_perm_effect ) ? 'checked' : '',
				"RECIPE_EFFECT_MD_M" => ( $md_monster_hit ) ? 'checked' : '',
				"RECIPE_EFFECT_MD" => $md_effect_value,
				"RECIPE_EFFECT_ATT_M" => ( $att_monster_hit ) ? 'checked' : '',
				"RECIPE_EFFECT_ATT" => $att_effect_value,
				"RECIPE_EFFECT_DEF_M" => ( $def_monster_hit ) ? 'checked' : '',
				"RECIPE_EFFECT_DEF" => $def_effect_value,
				"RECIPE_EFFECT_EXP" => $exp_effect_value,
				"RECIPE_EFFECT_GOLD" => $gold_effect_value,
				"RECIPE_EFFECT_SP" => $sp_effect_value,
				"RECIPE_EFFECT_BATTLES_REM" => $battles_rem_effect_value,
				"RECIPE_EFFECT_SKILLUSE_REM" => $skilluse_rem_effect_value,
				"RECIPE_EFFECT_TRADINGSKILL_REM" => $tradingskill_rem_effect_value,
				"RECIPE_EFFECT_THEFTSKILL_REM" => $theftskill_rem_effect_value,
				"ITEM_NAME" => $item['item_name'],
				"ITEM_DESC" => $item['item_desc'],
				"ITEM_NAME_EXPLAIN" => adr_get_lang($item['item_name']),
				"ITEM_DESC_EXPLAIN" => adr_get_lang($item['item_desc']),
				"ITEM_IMG" => $item['item_icon'],
				"ITEM_QUALITY" => adr_get_item_quality($item['item_quality'],'list'),
				"ITEM_TYPE" => adr_get_item_type($item['item_type_use'],'list'),
				"ITEM_ELEMENT_LIST" => $element_weap_list,
				"ITEM_ELEMENT_STR" => $item['item_element_str_dmg'],
				"ITEM_ELEMENT_SAME" => $item['item_element_same_dmg'],
				"ITEM_ELEMENT_WEAK" => $item['item_element_weak_dmg'],
				"ITEM_STORE_LIST" => $store_cat_list,
				"ITEM_WEIGHT" => $item['item_weight'],
				"ITEM_AUTH" => ( $item['item_auth'] ) ? 'checked' : '',
				"ITEM_MAX_SKILL" => $item['item_max_skill'],
				"ITEM_SELL_BACK_PERCENT" => $item['item_sell_back_percentage'],
				"ITEM_STEAL_LIST" => $steal_list,
				"ALIGNMENT_TYPE_ENABLE" => ($item['item_restrict_align_enable']) ? 'checked' : '',
				"ALIGNMENT_LIST" => $align_type,
				"CLASS_TYPE_ENABLE" => ($item['item_restrict_class_enable']) ? 'checked' : '',
				"CLASS_LIST" => $class_type,
				"RACE_TYPE_ENABLE" => ($item['item_restrict_race_enable']) ? 'checked' : '',
				"RACE_LIST" => $race_type,
				"ELEMENT_TYPE_ENABLE" => ($item['item_restrict_element_enable']) ? 'checked' : '',
				"ELEMENT_LIST" => $element_type,
				"RESTRICT_LEVEL" => $item['item_restrict_level'],
				"RESTRICT_CON" => $item['item_restrict_con'],
				"RESTRICT_STR" => $item['item_restrict_str'],
				"RESTRICT_DEX" => $item['item_restrict_dex'],
				"RESTRICT_INT" => $item['item_restrict_int'],
				"RESTRICT_WIS" => $item['item_restrict_wis'],
				"RESTRICT_CHA" => $item['item_restrict_cha'],
				"ITEM_DURATION" => $item['item_duration'],
				"ITEM_DURATION_MAX" => $item['item_duration_max'],
				"ITEM_POWER" => $item['item_power'],
				"ITEM_ADD_POWER" => $item['item_add_power'],
				"ITEM_MP_USE" => $item['item_mp_use'],
				"ITEM_PRICE" => $item['item_price'],
				"L_ITEM_STEAL" => $lang['Adr_items_steal_dc'],
				"L_ITEM_STEAL_EXPLAIN" => $lang['Adr_items_steal_explain'],
				"L_ITEM_SELL_BACK_PERCENT" => $lang['Adr_item_sell_back'],
				"L_ITEM_SELL_BACK_PERCENT_EXPLAIN" => $lang['Adr_item_sell_back_explain'],
				"L_ITEM_ELEMENT" => $lang['Adr_shops_item_element'],
				"L_ITEM_ELEMENT_STR" => $lang['Adr_shops_item_element_str'],
				"L_ITEM_ELEMENT_SAME" => $lang['Adr_shops_item_element_same'],
				"L_ITEM_ELEMENT_WEAK" => $lang['Adr_shops_item_element_weak'],
				"L_ITEM_MAX_SKILL" => $lang['Adr_item_max_skill'],
				"L_ITEM_WEIGHT" => $lang['Adr_shops_item_weight'],
				"L_ITEM_STORE" => $lang['Adr_items_store'],
				"L_ITEM_ENHANCEMENTS" => $lang['Adr_items_enhancements'],
				"L_ITEM_ADD_POWER" => $lang['Adr_items_dex'],
				"L_ITEM_ADD_POWER_EXPLAIN" => $lang['Adr_items_dex_explain'],
				"L_ITEM_MP_USE" => $lang['Adr_items_mp_use'],
				"L_ITEM_MP_USE_EXPLAIN" => $lang['Adr_items_mp_use_explain'],
				"L_POINTS" => $board_config['points_name'],
				"L_NAME_EXPLAIN" => $lang['Adr_races_name_explain'],
				"L_RECIPES_TITLE" => $lang['Adr_recipes_add_title'],
				"L_RECIPES_EXPLAIN" => $lang['Adr_recipes_add_title_explain'],
				"L_ITEM_NAME" => $lang['Adr_shops_categories_item_name'],
				"L_ITEM_DESC" => $lang['Adr_shops_categories_item_desc'],
				"L_ITEM_QUALITY" => $lang['Adr_items_quality'],
				"L_ITEM_POWER" => $lang['Adr_items_power'],
				"L_ITEM_ENHANCEMENTS" => $lang['Adr_items_enhancements'],
				"L_ITEM_ADD_POWER" => $lang['Adr_items_dex'],
				"L_ITEM_ADD_POWER_EXPLAIN" => $lang['Adr_items_dex_explain'],
				"L_ITEM_MP_USE" => $lang['Adr_items_mp_use'],
				"L_ITEM_MP_USE_EXPLAIN" => $lang['Adr_items_mp_use_explain'],
				"L_ITEM_DURATION" => $lang['Adr_items_duration'],
				"L_ITEM_DURATION_MAX" => $lang['Adr_items_duration_max'],
				"L_ITEM_TYPE" => $lang['Adr_items_type_use'],
				"L_ITEM_AUTH" => $lang['Adr_store_auth'],
				"L_RESTRICT_CHARS" => $lang['Adr_admin_item_restrict_chars'],
				"L_RESTRICT_CHARS_EXPLAIN" => $lang['Adr_admin_item_restrict_chars_explain'],
				"L_RESTRICT_LEVEL" => $lang['Adr_admin_item_restrict_level'],
				"L_RESTRICT_LEVEL_EXPLAIN" => $lang['Adr_admin_item_restrict_level_explain'],
				"L_RESTRICT_AC" => $lang['Adr_char_ac'],
				"L_RESTRICT_DEX" => $lang['Adr_char_dex'],
				"L_RESTRICT_INT" => $lang['Adr_char_int'],
				"L_RESTRICT_WIS" => $lang['Adr_char_wis'],
				"L_RESTRICT_STR" => $lang['Adr_char_str'],
				"L_RESTRICT_CHA" => $lang['Adr_char_cha'],
				"L_RESTRICT_CON" => $lang['Adr_char_con'],
        		"L_RESTRICT_CLASS_ENABLE" => $lang['Adr_admin_item_restrict_class_enable'],
        		"L_RESTRICT_CLASS_ENABLE_EXPLAIN" => $lang['Adr_admin_item_restrict_class_enable_explain'],
        		"L_RESTRICT_ALIGNMENT_ENABLE" => $lang['Adr_admin_item_restrict_alignment_enable'],
        		"L_RESTRICT_ALIGNMENT_ENABLE_EXPLAIN" => $lang['Adr_admin_item_restrict_alignment_enable_explain'],
        		"L_RESTRICT_RACE_ENABLE" => $lang['Adr_admin_item_restrict_race_enable'],
        		"L_RESTRICT_RACE_ENABLE_EXPLAIN" => $lang['Adr_admin_item_restrict_race_enable_explain'],
        		"L_RESTRICT_ELEMENT_ENABLE" => $lang['Adr_admin_item_restrict_element_enable'],
        		"L_RESTRICT_ELEMENT_ENABLE_EXPLAIN" => $lang['Adr_admin_item_restrict_element_enable_explain'],
        		"L_RESTRICT_CLASS" => $lang['Adr_admin_item_restrict_class'],
        		"L_RESTRICT_ALIGNMENT" => $lang['Adr_admin_item_restrict_alignment'],
        		"L_RESTRICT_RACE" => $lang['Adr_admin_item_restrict_race'],
        		"L_RESTRICT_ELEMENT" => $lang['Adr_admin_item_restrict_element'],
				"L_MASS_ITEM_DELETION" => $lang['Adr_admin_item_mass_delete'],
				"L_MASS_ITEM_DELETION_EXPLAIN" => $lang['Adr_admin_item_mass_delete_ex'],
				"L_NAME" => $lang['Adr_races_name'],
				"L_DESC" => $lang['Adr_races_desc'],
				"L_ACTION" => $lang['Action'],
				"L_ITEMS" => $lang['Adr_shops_categories_items'],
				"L_EDIT" => $lang['Edit'],
				"L_DELETE" => $lang['Delete'],
				"L_ITEM_IMG" => $lang['Adr_races_image'],
				"L_ITEM_PRICE" => $lang['Adr_items_price'],
				"L_ITEM_PRICE_EXPLAIN" => $lang['Adr_items_price_explain'],
				"L_IMG" => $lang['Adr_races_image'],
				"L_IMG_EXPLAIN" => $lang['Adr_items_image_explain'],
				"L_ITEM_ELEMENT" => $lang['Adr_shops_item_element'],
				"L_SUBMIT" => $lang['Submit'],
				"S_ITEMS_ACTION" => append_sid("admin_adr_crafting_recipes.$phpEx"),
				"S_HIDDEN_FIELDS" => $s_hidden_fields, 
			));

			$template->pparse("body");

		break;

		case "save_recipe":

			$item_id = intval($_POST['item_id']);
			$recipe_id = intval($_POST['recipe_id']);
			$item_name = ( isset($_POST['item_name']) ) ? trim($_POST['item_name']) : trim($_GET['item_name']);
			$recipe_name = ( isset($_POST['recipe_name']) ) ? trim($_POST['recipe_name']) : trim($_GET['recipe_name']);
			$item_desc = ( isset($_POST['item_desc']) ) ? trim($_POST['item_desc']) : trim($_GET['item_desc']);
			$recipe_desc = ( isset($_POST['recipe_desc']) ) ? trim($_POST['recipe_desc']) : trim($_GET['recipe_desc']);
			$item_icon = ( isset($_POST['item_img']) ) ? trim($_POST['item_img']) : trim($_GET['item_img']);
			$recipe_img = ( isset($_POST['recipe_img']) ) ? trim($_POST['recipe_img']) : trim($_GET['recipe_img']);
			$item_quality = intval($_POST['item_quality']);
			$recipe_quality = intval($_POST['recipe_quality']);
			$item_type = intval($_POST['item_type_use']);
			$recipe_type = 20;
			$item_power = intval($_POST['item_power']);
			$recipe_power = intval($_POST['recipe_level']);
			$item_duration = intval($_POST['item_duration']);
			$recipe_duration = intval($_POST['recipe_duration']);
			$item_duration_max = intval($_POST['item_duration_max']);
			$recipe_duration_max = intval($_POST['recipe_duration_max']);
			$item_price = intval($_POST['item_price']);
			$recipe_price = intval($_POST['recipe_price']);
			$item_add_power = intval($_POST['item_add_power']);
			$recipe_add_power = intval($_POST['item_add_power']);			
			$item_mp_use = intval($_POST['item_mp_use']);
			$recipe_mp_use = intval($_POST['item_mp_use']);
			$item_element = intval($_POST['element_weap_list']);
			$recipe_element = intval($_POST['element_weap_list']);
			$item_element_str = intval($_POST['item_element_str']);
			$recipe_element_str = intval($_POST['item_element_str']);
			$item_element_same = intval($_POST['item_element_same']);
			$recipe_element_same = intval($_POST['item_element_same']);
			$item_element_weak = intval($_POST['item_element_weak']);	
			$recipe_element_weak = intval($_POST['item_element_weak']);	
			$item_weight = intval($_POST['item_weight']);
			$recipe_weight = intval($_POST['recipe_weight']);
			$item_store = intval($_POST['store_cat_list']);
			$recipe_store = intval($_POST['recipe_store_cat_list']);
			$item_auth = intval($_POST['item_auth']);
			$recipe_auth = intval($_POST['recipe_admin_only']);
			$item_max_skill = intval($_POST['item_max_skill']);
			$recipe_max_skill = intval($_POST['item_max_skill']);			
			$item_sell_back_percent = intval($_POST['item_sell_back_percent']);
			$recipe_sell_back_percent = intval($_POST['recipe_sell_back_percent']);
			$item_steal_dc = intval($_POST['steal_dc']);
			$recipe_steal_dc = intval($_POST['recipe_steal_dc']);
			$recipe_skill = intval($_POST['skill_item_list']);
			$restrict_level = intval($_POST['restrict_level']);
			$restrict_str = intval($_POST['restrict_str']);
			$restrict_dex = intval($_POST['restrict_dex']);
			$restrict_con = intval($_POST['restrict_con']);
			$restrict_int = intval($_POST['restrict_int']);
			$restrict_wis = intval($_POST['restrict_wis']);
			$restrict_cha = intval($_POST['restrict_cha']);
			$class_enable = intval($_POST['class_enable']);
			$class = (isset($_POST['class_type_list'])) ? $_POST['class_type_list'] : array();
			$alignment_enable = intval($_POST['alignment_enable']);
			$alignment = (isset($_POST['align_type_list'])) ? $_POST['align_type_list'] : array();
			$race_enable = intval($_POST['race_enable']);
			$race = (isset($_POST['race_type_list'])) ? $_POST['race_type_list'] : array();
			$element_enable = intval($_POST['element_enable']);
			$element = (isset($_POST['element_type_list'])) ? $_POST['element_type_list'] : array();
			$recipe_restrict_level = intval($_POST['recipe_restrict_level']);
			$recipe_restrict_str = intval($_POST['recipe_restrict_str']);
			$recipe_restrict_dex = intval($_POST['recipe_restrict_dex']);
			$recipe_restrict_con = intval($_POST['recipe_restrict_con']);
			$recipe_restrict_int = intval($_POST['recipe_restrict_int']);
			$recipe_restrict_wis = intval($_POST['recipe_restrict_wis']);
			$recipe_restrict_cha = intval($_POST['recipe_restrict_cha']);
			$recipe_class_enable = intval($_POST['recipe_class_enable']);
			$recipe_class = (isset($_POST['recipe_class_type_list'])) ? $_POST['recipe_class_type_list'] : array();
			$recipe_alignment_enable = intval($_POST['recipe_alignment_enable']);
			$recipe_alignment = (isset($_POST['recipe_align_type_list'])) ? $_POST['recipe_align_type_list'] : array();
			$recipe_race_enable = intval($_POST['recipe_race_enable']);
			$recipe_race = (isset($_POST['recipe_race_type_list'])) ? $_POST['recipe_race_type_list'] : array();
			$recipe_element_enable = intval($_POST['recipe_element_enable']);
			$recipe_element = (isset($_POST['recipe_element_type_list'])) ? $_POST['recipe_element_type_list'] : array();

			//recipe effects (alot of stuff :o)
			$recipe_effect_hp = ( isset($_POST['recipe_effect_hp']) ) ? trim($_POST['recipe_effect_hp']) : trim($_GET['recipe_effect_hp']);
			$recipe_effect_hp_m = intval($_POST['recipe_effect_hp_m']);
			$recipe_effect_mp = ( isset($_POST['recipe_effect_mp']) ) ? trim($_POST['recipe_effect_mp']) : trim($_GET['recipe_effect_mp']);
			$recipe_effect_mp_m = intval($_POST['recipe_effect_mp_m']);
			$recipe_effect_ac = ( isset($_POST['recipe_effect_ac']) ) ? trim($_POST['recipe_effect_ac']) : trim($_GET['recipe_effect_ac']);
			$recipe_effect_str = ( isset($_POST['recipe_effect_str']) ) ? trim($_POST['recipe_effect_str']) : trim($_GET['recipe_effect_str']);
			$recipe_effect_dex = ( isset($_POST['recipe_effect_dex']) ) ? trim($_POST['recipe_effect_dex']) : trim($_GET['recipe_effect_dex']);
			$recipe_effect_con = ( isset($_POST['recipe_effect_con']) ) ? trim($_POST['recipe_effect_con']) : trim($_GET['recipe_effect_con']);
			$recipe_effect_int = ( isset($_POST['recipe_effect_int']) ) ? trim($_POST['recipe_effect_int']) : trim($_GET['recipe_effect_int']);
			$recipe_effect_wis = ( isset($_POST['recipe_effect_wis']) ) ? trim($_POST['recipe_effect_wis']) : trim($_GET['recipe_effect_wis']);
			$recipe_effect_cha = ( isset($_POST['recipe_effect_cha']) ) ? trim($_POST['recipe_effect_cha']) : trim($_GET['recipe_effect_cha']);
			$recipe_effect_ma = ( isset($_POST['recipe_effect_ma']) ) ? trim($_POST['recipe_effect_ma']) : trim($_GET['recipe_effect_ma']);
			$recipe_effect_ma_m = intval($_POST['recipe_effect_ma_m']);
			$recipe_effect_ma_perm = intval($_POST['recipe_effect_ma_perm']);
			$recipe_effect_md = ( isset($_POST['recipe_effect_md']) ) ? trim($_POST['recipe_effect_md']) : trim($_GET['recipe_effect_md']);
			$recipe_effect_md_m = intval($_POST['recipe_effect_md_m']);
			$recipe_effect_md_perm = intval($_POST['recipe_effect_md_perm']);
			$recipe_effect_att = ( isset($_POST['recipe_effect_att']) ) ? trim($_POST['recipe_effect_att']) : trim($_GET['recipe_effect_att']);
			$recipe_effect_att_m = intval($_POST['recipe_effect_att_m']);
			$recipe_effect_att_perm = intval($_POST['recipe_effect_att_perm']);
			$recipe_effect_def = ( isset($_POST['recipe_effect_def']) ) ? trim($_POST['recipe_effect_def']) : trim($_GET['recipe_effect_def']);
			$recipe_effect_def_m = intval($_POST['recipe_effect_def_m']);
			$recipe_effect_def_perm = intval($_POST['recipe_effect_def_perm']);
			$recipe_effect_exp = ( isset($_POST['recipe_effect_exp']) ) ? trim($_POST['recipe_effect_exp']) : trim($_GET['recipe_effect_exp']);
			$recipe_effect_gold = ( isset($_POST['recipe_effect_gold']) ) ? trim($_POST['recipe_effect_gold']) : trim($_GET['recipe_effect_gold']);
			$recipe_effect_sp = ( isset($_POST['recipe_effect_sp']) ) ? trim($_POST['recipe_effect_sp']) : trim($_GET['recipe_effect_sp']);
			$recipe_effect_battles_rem = ( isset($_POST['recipe_effect_battles_rem']) ) ? trim($_POST['recipe_effect_battles_rem']) : trim($_GET['recipe_effect_battles_rem']);
			$recipe_effect_skilluse_rem = ( isset($_POST['recipe_effect_skilluse_rem']) ) ? trim($_POST['recipe_effect_skilluse_rem']) : trim($_GET['recipe_effect_skilluse_rem']);
			$recipe_effect_tradingskill_rem = ( isset($_POST['recipe_effect_tradingskill_rem']) ) ? trim($_POST['recipe_effect_tradingskill_rem']) : trim($_GET['recipe_effect_tradingskill_rem']);
			$recipe_effect_theftskill_rem = ( isset($_POST['recipe_effect_theftskill_rem']) ) ? trim($_POST['recipe_effect_theftskill_rem']) : trim($_GET['recipe_effect_theftskill_rem']);
			
			if ($item_name == '' || !$item_power || !$item_duration )
			{
				message_die(MESSAGE, $lang['Fields_empty']);
			}
			if ($recipe_name == '' || !$recipe_power || !$recipe_duration )
			{
				message_die(MESSAGE, $lang['Fields_empty']);
			}

			if ($recipe_effect_hp != '' && $recipe_effect_hp != 0) {
				$recipe_effects .= 'HP:'.$recipe_effect_hp.':';
				if ($recipe_effect_hp_m != 0)
					$recipe_effects .= 'M:1:';
				else
					$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_mp != '' && $recipe_effect_mp != 0) {
				$recipe_effects .= 'MP:'.$recipe_effect_mp.':';
				if ($recipe_effect_mp_m != 0)
					$recipe_effects .= 'M:1:';
				else
					$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_ac != '' && $recipe_effect_ac != 0) {
				$recipe_effects .= 'AC:'.$recipe_effect_ac.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_str != '' && $recipe_effect_str != 0) {
				$recipe_effects .= 'STR:'.$recipe_effect_str.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_dex != '' && $recipe_effect_dex != 0) {
				$recipe_effects .= 'DEX:'.$recipe_effect_dex.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_con != '' && $recipe_effect_con != 0) {
				$recipe_effects .= 'CON:'.$recipe_effect_con.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_int != '' && $recipe_effect_int != 0) {
				$recipe_effects .= 'INT:'.$recipe_effect_int.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_wis != '' && $recipe_effect_wis != 0) {
				$recipe_effects .= 'WIS:'.$recipe_effect_wis.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_cha != '' && $recipe_effect_cha != 0) {
				$recipe_effects .= 'CHA:'.$recipe_effect_cha.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_ma != '' && $recipe_effect_ma != 0) {
				$recipe_effects .= 'MA:'.$recipe_effect_ma.':';
				if ($recipe_effect_ma_m != 0) {
					$recipe_effects .= 'M:1:';
					$recipe_effects .= 'PERM:0:';
				}
				else {
					$recipe_effects .= 'M:0:';
					if ($recipe_effect_ma_perm != 0)
						$recipe_effects .= 'PERM:1:';
					else
						$recipe_effects .= 'PERM:0:';
				}
			}
			if ($recipe_effect_md != '' && $recipe_effect_md != 0) {
				$recipe_effects .= 'MD:'.$recipe_effect_md.':';
				if ($recipe_effect_md_m != 0) {
					$recipe_effects .= 'M:1:';
					$recipe_effects .= 'PERM:0:';
				}
				else {
					$recipe_effects .= 'M:0:';
					if ($recipe_effect_md_perm != 0)
						$recipe_effects .= 'PERM:1:';
					else
						$recipe_effects .= 'PERM:0:';
				}
			}
			if ($recipe_effect_att != '' && $recipe_effect_att != 0) {
				$recipe_effects .= 'ATT:'.$recipe_effect_att.':';
				if ($recipe_effect_att_m != 0) {
					$recipe_effects .= 'M:1:';
					$recipe_effects .= 'PERM:0:';
				}
				else {
					$recipe_effects .= 'M:0:';
					if ($recipe_effect_att_perm != 0)
						$recipe_effects .= 'PERM:1:';
					else
						$recipe_effects .= 'PERM:0:';
				}
			}
			if ($recipe_effect_def != '' && $recipe_effect_def != 0) {
				$recipe_effects .= 'DEF:'.$recipe_effect_def.':';
				if ($recipe_effect_def_m != 0) {
					$recipe_effects .= 'M:1:';
					$recipe_effects .= 'PERM:0:';
				}
				else {
					$recipe_effects .= 'M:0:';
					if ($recipe_effect_def_perm != 0)
						$recipe_effects .= 'PERM:1:';
					else
						$recipe_effects .= 'PERM:0:';
				}
			}
			if ($recipe_effect_exp != '' && $recipe_effect_exp != 0) {
				$recipe_effects .= 'EXP:'.$recipe_effect_exp.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_gold != '' && $recipe_effect_gold != 0) {
				$recipe_effects .= 'GOLD:'.$recipe_effect_gold.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_sp != '' && $recipe_effect_sp != 0) {
				$recipe_effects .= 'SP:'.$recipe_effect_sp.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_battles_rem != '' && $recipe_effect_battles_rem != 0) {
				$recipe_effects .= 'BATTLES_REM:'.$recipe_effect_battles_rem.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_skilluse_rem != '' && $recipe_effect_skilluse_rem != 0) {
				$recipe_effects .= 'SKILLUSE_REM:'.$recipe_effect_skilluse_rem.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_tradingskill_rem != '' && $recipe_effect_tradingskill_rem != 0) {
				$recipe_effects .= 'TRADINGSKILL_REM:'.$recipe_effect_tradingskill_rem.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_theftskill_rem != '' && $recipe_effect_theftskill_rem != 0) {
				$recipe_effects .= 'THEFTSKILL_REM:'.$recipe_effect_theftskill_rem.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}

			// START RESTRICTION CHECKS
			// Make new restriction arrays
			$newalignlist = adr_admin_make_array($alignment_enable, $alignment);
			$newclasslist = adr_admin_make_array($class_enable, $class);
			$newracelist = adr_admin_make_array($race_enable, $race);
			$newelementlist = adr_admin_make_array($element_enable, $element);

			// Make sure admin chose one or more options if enabled
			if(($alignment_enable == '1') && (count($alignment) < '1')) message_die(MESSAGE, $lang['Adr_admin_store_alignment_error']);
			if(($class_enable == '1') && (count($class) < '1')) message_die(MESSAGE, $lang['Adr_admin_store_class_error']);
			if(($race_enable == '1') && (count($race) < '1')) message_die(MESSAGE, $lang['Adr_admin_store_race_error']);
			if(($element_enable == '1') && (count($element) < '1')) message_die(MESSAGE, $lang['Adr_admin_store_element_error']);
			// END RESTRICTION CHECKS

			##=== START: Check for mass item deletion from character inventories
			if(intval($_POST['mass_item_deletion']) == '1'){
				$sql = "DELETE FROM " . ADR_SHOPS_ITEMS_TABLE . "
					WHERE item_name = '$item_name'
					AND item_owner_id != '1'";
				if( !($result = $db->sql_query($sql)) ){
					message_die(GENERAL_ERROR, "Could NOT mass delete by item name", "", __LINE__, __FILE__, $sql);}
			}
			##=== END: Check for mass item deletion from character inventories

			if ($item_price == '')
			{
				// If no price is defined , let's calculate the real item price
				$adr_general = adr_get_general_config();
				// Get the base and modifier price
				$adr_quality_price = adr_get_item_quality( $item_quality , price );
				$adr_type_price = adr_get_item_type( $item_type , price );
				// First define the base price
				$item_price = $adr_type_price;
				// Then apply the quality modifier
				$item_price = $item_price * ( ( $adr_quality_price / 100 ));
				// And now the power - it's a little more complicated
				$item_price = ( $item_power > 1 ) ? ( $item_price + ( $item_price * ( ( $item_power - 1 ) * ( $adr_general['item_modifier_power'] - 100 ) / 100 ))) : $item_price ;
				// Apply the duration penalty
				$item_price = abs($item_price / ($item_duration_max / $item_duration));
				// Finally let's use a non decimal value & add 10 %
				$item_price = ceil($item_price * 1.1);
			}

			// START RESTRICTION CHECKS
			// Make new restriction arrays
			$recipe_newalignlist = adr_admin_make_array($recipe_alignment_enable, $recipe_alignment);
			$recipe_newclasslist = adr_admin_make_array($recipe_class_enable, $recipe_class);
			$recipe_newracelist = adr_admin_make_array($recipe_race_enable, $recipe_race);
			$recipe_newelementlist = adr_admin_make_array($recipe_element_enable, $recipe_element);

			// Make sure admin chose one or more options if enabled
			if(($recipe_alignment_enable == '1') && (count($recipe_alignment) < '1')) message_die(MESSAGE, $lang['Adr_admin_store_alignment_error']);
			if(($recipe_class_enable == '1') && (count($recipe_class) < '1')) message_die(MESSAGE, $lang['Adr_admin_store_class_error']);
			if(($recipe_race_enable == '1') && (count($recipe_race) < '1')) message_die(MESSAGE, $lang['Adr_admin_store_race_error']);
			if(($recipe_element_enable == '1') && (count($recipe_element) < '1')) message_die(MESSAGE, $lang['Adr_admin_store_element_error']);
			// END RESTRICTION CHECKS

			##=== START: Check for mass item deletion from character inventories
			if(intval($_POST['mass_item_deletion']) == '1'){
				$sql = "DELETE FROM " . ADR_SHOPS_ITEMS_TABLE . "
					WHERE item_name = '$item_name'
					AND item_owner_id != '1'";
				if( !($result = $db->sql_query($sql)) ){
					message_die(GENERAL_ERROR, "Could NOT mass delete by item name", "", __LINE__, __FILE__, $sql);}
			}
			##=== END: Check for mass item deletion from character inventories

			if ($recipe_price == '')
			{
				// If no price is defined , let's calculate the real item price
				$adr_general = adr_get_general_config();
				// Get the base and modifier price
				$adr_quality_price = adr_get_item_quality( $recipe_quality , price );
				$adr_type_price = adr_get_item_type( $recipe_type , price );
				// First define the base price
				$recipe_price = $adr_type_price;
				// Then apply the quality modifier
				$recipe_price = $recipe_price * ( ( $adr_quality_price / 100 ));
				// And now the power - it's a little more complicated
				$recipe_price = ( $recipe_power > 1 ) ? ( $recipe_price + ( $recipe_price * ( ( $recipe_power - 1 ) * ( $adr_general['item_modifier_power'] - 100 ) / 100 ))) : $recipe_price ;
				// Apply the duration penalty
				$recipe_price = abs($recipe_price / ($recipe_duration_max / $recipe_duration));
				// Finally let's use a non decimal value & add 10 %
				$recipe_price = ceil($recipe_price * 1.1);
			}

			//recipe_items_req
			$recipe_items_req_list = array();
			$recipe_items_req_list = $_POST['recipe_items_req'];
			$recipe_items_amount_list = array();
			$recipe_items_amount_list = explode(':',$_POST['recipe_items_amount']);
			
			$selected_req_item = count($recipe_items_req_list);
			if ( $selected_req_item == 0 )
				$final_req_list = '';
			elseif ( in_array('0',$recipe_items_req_list) )
				$final_req_list = '0';
			else
			{
				sort($recipe_items_req_list);
				$final_req_list = '';
				for ($a = 0; $a < $selected_req_item; $a++) {
					if ($recipe_items_amount_list[$a] == '')
						$amount = ':1';
					else
						$amount = ':'.$recipe_items_amount_list[$a];
					$final_req_list .= ( $final_req_list == '' ) ? $recipe_items_req_list[$a].$amount : ":".$recipe_items_req_list[$a].$amount;
				}
			}

			//update product
			$sql = "UPDATE " . ADR_SHOPS_ITEMS_TABLE . "
				SET 	item_name = '" . str_replace("\'", "''", $item_name) . "', 
					item_desc = '" . str_replace("\'", "''", $item_desc) . "', 
					item_icon = '" . str_replace("\'", "''", $item_icon) . "', 
					item_quality = $item_quality, 
					item_type_use = $item_type, 
					item_power = $item_power, 
					item_add_power = $item_add_power,
					item_mp_use = $item_mp_use,
					item_duration = $item_duration, 
					item_duration_max = $item_duration_max, 
					item_price = $item_price , 
					item_weight = $item_weight, 
					item_auth = $item_auth , 
					item_max_skill = $item_max_skill ,
					item_sell_back_percentage = $item_sell_back_percent , 
					item_steal_dc = $item_steal_dc,
					item_restrict_align_enable = $alignment_enable,
					item_restrict_align = '$newalignlist',
					item_restrict_class_enable = $class_enable,
					item_restrict_class = '$newclasslist',
					item_restrict_race_enable = $race_enable,
					item_restrict_race = '$newracelist',
					item_restrict_element_enable = $element_enable,
					item_restrict_element = '$newelementlist',
					item_restrict_level = $restrict_level,
					item_restrict_str = $restrict_str,
					item_restrict_dex = $restrict_dex,
					item_restrict_con = $restrict_con,
					item_restrict_int = $restrict_int,
					item_restrict_wis = $restrict_wis,
					item_restrict_cha = $restrict_cha,
					item_store_id = $item_store , 
					item_element = $item_element,
					item_element_str_dmg = $item_element_str,
					item_element_same_dmg = $item_element_same,
					item_element_weak_dmg = $item_element_weak,
					item_brewing_items_req = '".$final_req_list."',
					item_effect = '".$recipe_effects."'
				WHERE item_id = " . $item_id . "
				AND item_owner_id = 1 ";
			if( !($result = $db->sql_query($sql)) )
			{
				message_die(GENERAL_ERROR, "Couldn't update product", "", __LINE__, __FILE__, $sql);
			}

			//update recipe
			$sql = "UPDATE " . ADR_SHOPS_ITEMS_TABLE . "
				SET 	item_name = '" . str_replace("\'", "''", $recipe_name) . "', 
					item_desc = '" . str_replace("\'", "''", $recipe_desc) . "', 
					item_icon = '" . str_replace("\'", "''", $recipe_img) . "', 
					item_quality = $recipe_quality, 
					item_type_use = $recipe_type, 
					item_power = $recipe_power, 
					item_add_power = $recipe_add_power,
					item_mp_use = $recipe_mp_use,
					item_duration = $recipe_duration, 
					item_duration_max = $recipe_duration_max, 
					item_price = $recipe_price , 
					item_weight = $recipe_weight, 
					item_auth = $recipe_auth , 
					item_max_skill = $recipe_max_skill ,
					item_sell_back_percentage = $recipe_sell_back_percent , 
					item_steal_dc = $recipe_steal_dc,
					item_restrict_align_enable = $recipe_alignment_enable,
					item_restrict_align = '$recipe_newalignlist',
					item_restrict_class_enable = $recipe_class_enable,
					item_restrict_class = '$recipe_newclasslist',
					item_restrict_race_enable = $recipe_race_enable,
					item_restrict_race = '$recipe_newracelist',
					item_restrict_element_enable = $recipe_element_enable,
					item_restrict_element = '$recipe_newelementlist',
					item_restrict_level = $recipe_restrict_level,
					item_restrict_str = $recipe_restrict_str,
					item_restrict_dex = $recipe_restrict_dex,
					item_restrict_con = $recipe_restrict_con,
					item_restrict_int = $recipe_restrict_int,
					item_restrict_wis = $recipe_restrict_wis,
					item_restrict_cha = $recipe_restrict_cha,
					item_store_id = $recipe_store , 
					item_element = $item_element,
					item_element_str_dmg = $recipe_element_str,
					item_element_same_dmg = $recipe_element_same,
					item_element_weak_dmg = $recipe_element_weak,
					item_brewing_recipe = 1,
					item_brewing_items_req = '".$final_req_list."',
					item_effect = '".$recipe_effects."',
					item_recipe_linked_item = $item_id,
					item_recipe_skill_id = $recipe_skill,
					item_original_recipe_id = $recipe_id
				WHERE item_id = " . $recipe_id . "
				AND item_owner_id = 1 ";
			if( !($result = $db->sql_query($sql)) )
			{
				message_die(GENERAL_ERROR, "Couldn't update recipe", "", __LINE__, __FILE__, $sql);
			}

			adr_previous( Adr_recipe_successful_edited , admin_adr_crafting_recipes , '' );
			
		break;

		case "savenew_recipe":
			
			$sql = "SELECT item_id FROM " . ADR_SHOPS_ITEMS_TABLE ."
				ORDER BY item_id 
				DESC LIMIT 1";
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, 'Could not obtain races information', "", __LINE__, __FILE__, $sql);
			}
			$fields_data = $db->sql_fetchrow($result);
			$item_id = $fields_data['item_id'] + 1 ;
			$recipe_id = $fields_data['item_id'] + 2 ;

			$item_name = ( isset($_POST['item_name']) ) ? trim($_POST['item_name']) : trim($_GET['item_name']);
			$recipe_name = ( isset($_POST['recipe_name']) ) ? trim($_POST['recipe_name']) : trim($_GET['recipe_name']);
			$item_desc = ( isset($_POST['item_desc']) ) ? trim($_POST['item_desc']) : trim($_GET['item_desc']);
			$recipe_desc = ( isset($_POST['recipe_desc']) ) ? trim($_POST['recipe_desc']) : trim($_GET['recipe_desc']);
			$item_icon = ( isset($_POST['item_img']) ) ? trim($_POST['item_img']) : trim($_GET['item_img']);
			$recipe_img = ( isset($_POST['recipe_img']) ) ? trim($_POST['recipe_img']) : trim($_GET['recipe_img']);
			$item_quality = intval($_POST['item_quality']);
			$recipe_quality = intval($_POST['recipe_quality']);
			$item_type = intval($_POST['item_type_use']);;
			$recipe_type = 20;
			$item_power = intval($_POST['item_power']);
			$recipe_power = intval($_POST['recipe_level']);
			$item_duration = intval($_POST['item_duration']);
			$recipe_duration = intval($_POST['recipe_duration']);
			$item_duration_max = intval($_POST['item_duration_max']);
			$recipe_duration_max = intval($_POST['recipe_duration_max']);
			$item_price = intval($_POST['item_price']);
			$recipe_price = intval($_POST['recipe_price']);
			$item_add_power = intval($_POST['item_add_power']);
			$item_mp_use = intval($_POST['item_mp_use']);
			$item_element = intval($_POST['element_weap_list']);
			$item_element_str = intval($_POST['item_element_str']);
			$item_element_same = intval($_POST['item_element_same']);
			$item_element_weak = intval($_POST['item_element_weak']);	
			$item_weight = intval($_POST['item_weight']);
			$recipe_weight = intval($_POST['recipe_weight']);
			$item_store = intval($_POST['store_cat_list']);
			$recipe_store = intval($_POST['recipe_store_cat_list']);
			$item_auth = intval($_POST['item_auth']);
			$recipe_auth = intval($_POST['recipe_admin_only']);
			$item_max_skill = intval($_POST['item_max_skill']);
			$item_sell_back_percent = intval($_POST['item_sell_back_percent']);
			$recipe_sell_back_percent = intval($_POST['recipe_sell_back_percent']);
			$item_steal_dc = intval($_POST['steal_dc']);
			$recipe_steal_dc = intval($_POST['recipe_steal_dc']);
			$recipe_skill = intval($_POST['skill_item_list']);
			$restrict_level = intval($_POST['restrict_level']);
			$restrict_str = intval($_POST['restrict_str']);
			$restrict_dex = intval($_POST['restrict_dex']);
			$restrict_con = intval($_POST['restrict_con']);
			$restrict_int = intval($_POST['restrict_int']);
			$restrict_wis = intval($_POST['restrict_wis']);
			$restrict_cha = intval($_POST['restrict_cha']);
			$class_enable = intval($_POST['class_enable']);
			$class = (isset($_POST['class_type_list'])) ? $_POST['class_type_list'] : array();
			$alignment_enable = intval($_POST['alignment_enable']);
			$alignment = (isset($_POST['align_type_list'])) ? $_POST['align_type_list'] : array();
			$race_enable = intval($_POST['race_enable']);
			$race = (isset($_POST['race_type_list'])) ? $_POST['race_type_list'] : array();
			$element_enable = intval($_POST['element_enable']);
			$element = (isset($_POST['element_type_list'])) ? $_POST['element_type_list'] : array();
			$recipe_restrict_level = intval($_POST['recipe_restrict_level']);
			$recipe_restrict_str = intval($_POST['recipe_restrict_str']);
			$recipe_restrict_dex = intval($_POST['recipe_restrict_dex']);
			$recipe_restrict_con = intval($_POST['recipe_restrict_con']);
			$recipe_restrict_int = intval($_POST['recipe_restrict_int']);
			$recipe_restrict_wis = intval($_POST['recipe_restrict_wis']);
			$recipe_restrict_cha = intval($_POST['recipe_restrict_cha']);
			$recipe_class_enable = intval($_POST['recipe_class_enable']);
			$recipe_class = (isset($_POST['recipe_class_type_list'])) ? $_POST['recipe_class_type_list'] : array();
			$recipe_alignment_enable = intval($_POST['recipe_alignment_enable']);
			$recipe_alignment = (isset($_POST['recipe_align_type_list'])) ? $_POST['recipe_align_type_list'] : array();
			$recipe_race_enable = intval($_POST['recipe_race_enable']);
			$recipe_race = (isset($_POST['recipe_race_type_list'])) ? $_POST['recipe_race_type_list'] : array();
			$recipe_element_enable = intval($_POST['recipe_element_enable']);
			$recipe_element = (isset($_POST['recipe_element_type_list'])) ? $_POST['recipe_element_type_list'] : array();
			
			//recipe effects (alot of stuff :o)
			$recipe_effect_hp = ( isset($_POST['recipe_effect_hp']) ) ? trim($_POST['recipe_effect_hp']) : trim($_GET['recipe_effect_hp']);
			$recipe_effect_hp_m = intval($_POST['recipe_effect_hp_m']);
			$recipe_effect_mp = ( isset($_POST['recipe_effect_mp']) ) ? trim($_POST['recipe_effect_mp']) : trim($_GET['recipe_effect_mp']);
			$recipe_effect_mp_m = intval($_POST['recipe_effect_mp_m']);
			$recipe_effect_ac = ( isset($_POST['recipe_effect_ac']) ) ? trim($_POST['recipe_effect_ac']) : trim($_GET['recipe_effect_ac']);
			$recipe_effect_str = ( isset($_POST['recipe_effect_str']) ) ? trim($_POST['recipe_effect_str']) : trim($_GET['recipe_effect_str']);
			$recipe_effect_dex = ( isset($_POST['recipe_effect_dex']) ) ? trim($_POST['recipe_effect_dex']) : trim($_GET['recipe_effect_dex']);
			$recipe_effect_con = ( isset($_POST['recipe_effect_con']) ) ? trim($_POST['recipe_effect_con']) : trim($_GET['recipe_effect_con']);
			$recipe_effect_int = ( isset($_POST['recipe_effect_int']) ) ? trim($_POST['recipe_effect_int']) : trim($_GET['recipe_effect_int']);
			$recipe_effect_wis = ( isset($_POST['recipe_effect_wis']) ) ? trim($_POST['recipe_effect_wis']) : trim($_GET['recipe_effect_wis']);
			$recipe_effect_cha = ( isset($_POST['recipe_effect_cha']) ) ? trim($_POST['recipe_effect_cha']) : trim($_GET['recipe_effect_cha']);
			$recipe_effect_ma = ( isset($_POST['recipe_effect_ma']) ) ? trim($_POST['recipe_effect_ma']) : trim($_GET['recipe_effect_ma']);
			$recipe_effect_ma_m = intval($_POST['recipe_effect_ma_m']);
			$recipe_effect_ma_perm = intval($_POST['recipe_effect_ma_perm']);
			$recipe_effect_md = ( isset($_POST['recipe_effect_md']) ) ? trim($_POST['recipe_effect_md']) : trim($_GET['recipe_effect_md']);
			$recipe_effect_md_m = intval($_POST['recipe_effect_md_m']);
			$recipe_effect_md_perm = intval($_POST['recipe_effect_md_perm']);
			$recipe_effect_att = ( isset($_POST['recipe_effect_att']) ) ? trim($_POST['recipe_effect_att']) : trim($_GET['recipe_effect_att']);
			$recipe_effect_att_m = intval($_POST['recipe_effect_att_m']);
			$recipe_effect_att_perm = intval($_POST['recipe_effect_att_perm']);
			$recipe_effect_def = ( isset($_POST['recipe_effect_def']) ) ? trim($_POST['recipe_effect_def']) : trim($_GET['recipe_effect_def']);
			$recipe_effect_def_m = intval($_POST['recipe_effect_def_m']);
			$recipe_effect_def_perm = intval($_POST['recipe_effect_def_perm']);
			$recipe_effect_exp = ( isset($_POST['recipe_effect_exp']) ) ? trim($_POST['recipe_effect_exp']) : trim($_GET['recipe_effect_exp']);
			$recipe_effect_gold = ( isset($_POST['recipe_effect_gold']) ) ? trim($_POST['recipe_effect_gold']) : trim($_GET['recipe_effect_gold']);
			$recipe_effect_sp = ( isset($_POST['recipe_effect_sp']) ) ? trim($_POST['recipe_effect_sp']) : trim($_GET['recipe_effect_sp']);
			$recipe_effect_battles_rem = ( isset($_POST['recipe_effect_battles_rem']) ) ? trim($_POST['recipe_effect_battles_rem']) : trim($_GET['recipe_effect_battles_rem']);
			$recipe_effect_skilluse_rem = ( isset($_POST['recipe_effect_skilluse_rem']) ) ? trim($_POST['recipe_effect_skilluse_rem']) : trim($_GET['recipe_effect_skilluse_rem']);
			$recipe_effect_tradingskill_rem = ( isset($_POST['recipe_effect_tradingskill_rem']) ) ? trim($_POST['recipe_effect_tradingskill_rem']) : trim($_GET['recipe_effect_tradingskill_rem']);
			$recipe_effect_theftskill_rem = ( isset($_POST['recipe_effect_theftskill_rem']) ) ? trim($_POST['recipe_effect_theftskill_rem']) : trim($_GET['recipe_effect_theftskill_rem']);
			
			if ($item_name == '' || !$item_power || !$item_duration )
			{
				message_die(MESSAGE, $lang['Fields_empty']);
			}
			if ($recipe_name == '' || !$recipe_power || !$recipe_duration )
			{
				message_die(MESSAGE, $lang['Fields_empty']);
			}

			if ($recipe_effect_hp != '' && $recipe_effect_hp != 0) {
				$recipe_effects .= 'HP:'.$recipe_effect_hp.':';
				if ($recipe_effect_hp_m != 0)
					$recipe_effects .= 'M:1:';
				else
					$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_mp != '' && $recipe_effect_mp != 0) {
				$recipe_effects .= 'MP:'.$recipe_effect_mp.':';
				if ($recipe_effect_mp_m != 0)
					$recipe_effects .= 'M:1:';
				else
					$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_ac != '' && $recipe_effect_ac != 0) {
				$recipe_effects .= 'AC:'.$recipe_effect_ac.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_str != '' && $recipe_effect_str != 0) {
				$recipe_effects .= 'STR:'.$recipe_effect_str.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_dex != '' && $recipe_effect_dex != 0) {
				$recipe_effects .= 'DEX:'.$recipe_effect_dex.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_con != '' && $recipe_effect_con != 0) {
				$recipe_effects .= 'CON:'.$recipe_effect_con.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_int != '' && $recipe_effect_int != 0) {
				$recipe_effects .= 'INT:'.$recipe_effect_int.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_wis != '' && $recipe_effect_wis != 0) {
				$recipe_effects .= 'WIS:'.$recipe_effect_wis.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_cha != '' && $recipe_effect_cha != 0) {
				$recipe_effects .= 'CHA:'.$recipe_effect_cha.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_ma != '' && $recipe_effect_ma != 0) {
				$recipe_effects .= 'MA:'.$recipe_effect_ma.':';
				if ($recipe_effect_ma_m != 0) {
					$recipe_effects .= 'M:1:';
					$recipe_effects .= 'PERM:0:';
				}
				else {
					$recipe_effects .= 'M:0:';
					if ($recipe_effect_ma_perm != 0)
						$recipe_effects .= 'PERM:1:';
					else
						$recipe_effects .= 'PERM:0:';
				}
			}
			if ($recipe_effect_md != '' && $recipe_effect_md != 0) {
				$recipe_effects .= 'MD:'.$recipe_effect_md.':';
				if ($recipe_effect_md_m != 0) {
					$recipe_effects .= 'M:1:';
					$recipe_effects .= 'PERM:0:';
				}
				else {
					$recipe_effects .= 'M:0:';
					if ($recipe_effect_md_perm != 0)
						$recipe_effects .= 'PERM:1:';
					else
						$recipe_effects .= 'PERM:0:';
				}
			}
			if ($recipe_effect_att != '' && $recipe_effect_att != 0) {
				$recipe_effects .= 'ATT:'.$recipe_effect_att.':';
				if ($recipe_effect_att_m != 0) {
					$recipe_effects .= 'M:1:';
					$recipe_effects .= 'PERM:0:';
				}
				else {
					$recipe_effects .= 'M:0:';
					if ($recipe_effect_att_perm != 0)
						$recipe_effects .= 'PERM:1:';
					else
						$recipe_effects .= 'PERM:0:';
				}
			}
			if ($recipe_effect_def != '' && $recipe_effect_def != 0) {
				$recipe_effects .= 'DEF:'.$recipe_effect_def.':';
				if ($recipe_effect_def_m != 0) {
					$recipe_effects .= 'M:1:';
					$recipe_effects .= 'PERM:0:';
				}
				else {
					$recipe_effects .= 'M:0:';
					if ($recipe_effect_def_perm != 0)
						$recipe_effects .= 'PERM:1:';
					else
						$recipe_effects .= 'PERM:0:';
				}
			}
			if ($recipe_effect_exp != '' && $recipe_effect_exp != 0) {
				$recipe_effects .= 'EXP:'.$recipe_effect_exp.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_gold != '' && $recipe_effect_gold != 0) {
				$recipe_effects .= 'GOLD:'.$recipe_effect_gold.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_sp != '' && $recipe_effect_sp != 0) {
				$recipe_effects .= 'SP:'.$recipe_effect_sp.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_battles_rem != '' && $recipe_effect_battles_rem != 0) {
				$recipe_effects .= 'BATTLES_REM:'.$recipe_effect_battles_rem.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_skilluse_rem != '' && $recipe_effect_skilluse_rem != 0) {
				$recipe_effects .= 'SKILLUSE_REM:'.$recipe_effect_skilluse_rem.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_tradingskill_rem != '' && $recipe_effect_tradingskill_rem != 0) {
				$recipe_effects .= 'TRADINGSKILL_REM:'.$recipe_effect_tradingskill_rem.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}
			if ($recipe_effect_theftskill_rem != '' && $recipe_effect_theftskill_rem != 0) {
				$recipe_effects .= 'THEFTSKILL_REM:'.$recipe_effect_theftskill_rem.':';
				$recipe_effects .= 'M:0:';
				$recipe_effects .= 'PERM:1:';
			}

			// START RESTRICTION CHECKS
			// Make new restriction arrays
			$newalignlist = adr_admin_make_array($alignment_enable, $alignment);
			$newclasslist = adr_admin_make_array($class_enable, $class);
			$newracelist = adr_admin_make_array($race_enable, $race);
			$newelementlist = adr_admin_make_array($element_enable, $element);

			// Make sure admin chose one or more options if enabled
			if(($alignment_enable == '1') && (count($alignment) < '1')) message_die(MESSAGE, $lang['Adr_admin_store_alignment_error']);
			if(($class_enable == '1') && (count($class) < '1')) message_die(MESSAGE, $lang['Adr_admin_store_class_error']);
			if(($race_enable == '1') && (count($race) < '1')) message_die(MESSAGE, $lang['Adr_admin_store_race_error']);
			if(($element_enable == '1') && (count($element) < '1')) message_die(MESSAGE, $lang['Adr_admin_store_element_error']);
			// END RESTRICTION CHECKS
			
			if ($item_price == '')
			{
				// If no price is defined , let's calculate the real item price
				$adr_general = adr_get_general_config();
				// Get the base and modifier price
				$adr_quality_price = adr_get_item_quality( $item_quality , price );
				$adr_type_price = adr_get_item_type( $item_type , price );
				// First define the base price
				$item_price = $adr_type_price;
				// Then apply the quality modifier
				$item_price = $item_price * ( ( $adr_quality_price / 100 ));
				// And now the power - it's a little more complicated
				$item_price = ( $item_power > 1 ) ? ( $item_price + ( $item_price * ( ( $item_power - 1 ) * ( $adr_general['item_modifier_power'] - 100 ) / 100 ))) : $item_price ;
				// Apply the duration penalty
				$item_price = abs($item_price / ($item_duration_max / $item_duration));
				// Finally let's use a non decimal value & add 10 %
				$item_price = ceil($item_price * 1.1);
			}

			// START RESTRICTION CHECKS
			// Make new restriction arrays
			$recipe_newalignlist = adr_admin_make_array($recipe_alignment_enable, $recipe_alignment);
			$recipe_newclasslist = adr_admin_make_array($recipe_class_enable, $recipe_class);
			$recipe_newracelist = adr_admin_make_array($recipe_race_enable, $recipe_race);
			$recipe_newelementlist = adr_admin_make_array($recipe_element_enable, $recipe_element);

			// Make sure admin chose one or more options if enabled
			if(($recipe_alignment_enable == '1') && (count($recipe_alignment) < '1')) message_die(MESSAGE, $lang['Adr_admin_store_alignment_error']);
			if(($recipe_class_enable == '1') && (count($recipe_class) < '1')) message_die(MESSAGE, $lang['Adr_admin_store_class_error']);
			if(($recipe_race_enable == '1') && (count($recipe_race) < '1')) message_die(MESSAGE, $lang['Adr_admin_store_race_error']);
			if(($recipe_element_enable == '1') && (count($recipe_element) < '1')) message_die(MESSAGE, $lang['Adr_admin_store_element_error']);
			// END RESTRICTION CHECKS

			if ($recipe_price == '')
			{
				// If no price is defined , let's calculate the real item price
				$adr_general = adr_get_general_config();
				// Get the base and modifier price
				$adr_quality_price = adr_get_item_quality( $recipe_quality , price );
				$adr_type_price = adr_get_item_type( $recipe_type , price );
				// First define the base price
				$recipe_price = $adr_type_price;
				// Then apply the quality modifier
				$recipe_price = $recipe_price * ( ( $adr_quality_price / 100 ));
				// And now the power - it's a little more complicated
				$recipe_price = ( $recipe_power > 1 ) ? ( $recipe_price + ( $recipe_price * ( ( $recipe_power - 1 ) * ( $adr_general['item_modifier_power'] - 100 ) / 100 ))) : $recipe_price ;
				// Apply the duration penalty
				$recipe_price = abs($recipe_price / ($recipe_duration_max / $recipe_duration));
				// Finally let's use a non decimal value & add 10 %
				$recipe_price = ceil($recipe_price * 1.1);
			}

			//recipe_items_req
			$recipe_items_req_list = array();
			$recipe_items_req_list = $_POST['recipe_items_req'];
			$recipe_items_amount_list = array();
			$recipe_items_amount_list = explode(':',$_POST['recipe_items_amount']);
			
			$selected_req_item = count($recipe_items_req_list);
			if ( $selected_req_item == 0 )
				$final_req_list = '';
			elseif ( in_array('0',$recipe_items_req_list) )
				$final_req_list = '0';
			else
			{
				sort($recipe_items_req_list);
				$final_req_list = '';
				for ($a = 0; $a < $selected_req_item; $a++) {
					if ($recipe_items_amount_list[$a] == '')
						$amount = ':1';
					else
						$amount = ':'.$recipe_items_amount_list[$a];
					$final_req_list .= ( $final_req_list == '' ) ? $recipe_items_req_list[$a].$amount : ":".$recipe_items_req_list[$a].$amount;
				}
			}

			//add product
			$sql = "INSERT INTO " . ADR_SHOPS_ITEMS_TABLE . " 
				( item_id , item_owner_id , item_type_use , item_name , item_desc , item_icon , item_price , item_quality , item_duration , item_duration_max , item_power , item_add_power , item_mp_use , item_weight , item_auth , item_max_skill, item_sell_back_percentage, item_steal_dc , item_restrict_align_enable, item_restrict_align, item_restrict_class_enable, item_restrict_class, item_restrict_race_enable, item_restrict_race, item_restrict_element_enable, item_restrict_element, item_restrict_level, item_restrict_str, item_restrict_dex, item_restrict_con, item_restrict_int, item_restrict_wis, item_restrict_cha , item_store_id , item_element , item_element_str_dmg , item_element_same_dmg , item_element_weak_dmg, item_brewing_items_req, item_effect )
				VALUES ( $item_id , 1 , $item_type , '" . str_replace("\'", "''", $item_name) . "', '" . str_replace("\'", "''", $item_desc) . "' , '" . str_replace("\'", "''", $item_icon) . "' , $item_price , $item_quality , $item_duration , $item_duration_max ,$item_power , $item_add_power , $item_mp_use , $item_weight , $item_auth , $item_max_skill, $item_sell_back_percent, $item_steal_dc , $alignment_enable, '$newalignlist', $class_enable, '$newclasslist', $race_enable, '$newracelist', $element_enable, '$newelementlist', $restrict_level, $restrict_str, $restrict_dex, $restrict_con, $restrict_int, $restrict_wis, $restrict_cha , $item_store , $item_element , $item_element_str , $item_element_same , $item_element_weak, '".$final_req_list."', '".$recipe_effects."' )";
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, "Couldn't insert new product", "", __LINE__, __FILE__, $sql);
			}

			//add recipe
			$sql = "INSERT INTO " . ADR_SHOPS_ITEMS_TABLE . " 
				( item_id , item_owner_id , item_type_use , item_name , item_desc , item_icon , item_price , item_quality , item_duration , item_duration_max , item_power , item_weight , item_auth , item_sell_back_percentage, item_steal_dc , item_restrict_align_enable, item_restrict_align, item_restrict_class_enable, item_restrict_class, item_restrict_race_enable, item_restrict_race, item_restrict_element_enable, item_restrict_element, item_restrict_level, item_restrict_str, item_restrict_dex, item_restrict_con, item_restrict_int, item_restrict_wis, item_restrict_cha , item_store_id , item_brewing_recipe, item_brewing_items_req, item_effect, item_recipe_linked_item, item_original_recipe_id , item_recipe_skill_id)
				VALUES ( $recipe_id , 1 , $recipe_type , '" . str_replace("\'", "''", $recipe_name) . "', '" . str_replace("\'", "''", $recipe_desc) . "' , '" . str_replace("\'", "''", $recipe_img) . "' , $recipe_price , $recipe_quality , $recipe_duration , $recipe_duration_max ,$recipe_power , $recipe_weight , $recipe_auth , $recipe_sell_back_percent, $recipe_steal_dc , $recipe_alignment_enable, '$recipe_newalignlist', $recipe_class_enable, '$recipe_newclasslist', $recipe_race_enable, '$recipe_newracelist', $recipe_element_enable, '$recipe_newelementlist', $recipe_restrict_level, $recipe_restrict_str, $recipe_restrict_dex, $recipe_restrict_con, $recipe_restrict_int, $recipe_restrict_wis, $recipe_restrict_cha , $recipe_store, 1, '".$final_req_list."', '".$recipe_effects."', $item_id, $recipe_id , $recipe_skill)";
			$result = $db->sql_query($sql);
			if( !$result )
			{
				message_die(GENERAL_ERROR, "Couldn't insert new recipe", "", __LINE__, __FILE__, $sql);
			}
			
			adr_previous( Adr_recipe_successful_added , admin_adr_crafting_recipes , '' );
		break;

	}
}
else
{
	adr_template_file('admin/config_adr_crafting_recipes_list_body.tpl');

	$start = ( isset($_GET['start']) ) ? intval($_GET['start']) : 0;

	if ( isset($_GET['mode2']) || isset($_POST['mode2']) )
	{
		$mode2 = ( isset($_POST['mode2']) ) ? htmlspecialchars($_POST['mode2']) : htmlspecialchars($_GET['mode2']);
	}
	else
	{
		$mode2 = 'name';
	}

	if(isset($_POST['order']))
	{
		$sort_order = ($_POST['order'] == 'ASC') ? 'ASC' : 'DESC';
	}
	else if(isset($_GET['order']))
	{
		$sort_order = ($_GET['order'] == 'ASC') ? 'ASC' : 'DESC';
	}
	else
	{
		$sort_order = 'ASC';
	}

	$mode_types_text = array( $lang['Adr_recipes_name'],'Skill:');
	$mode_types = array( 'name','skill');

	$select_sort_mode = '<select name="mode2">';
	for($i = 0; $i < count($mode_types_text); $i++)
	{
		$selected = ( $mode2 == $mode_types[$i] ) ? ' selected="selected"' : '';
		$select_sort_mode .= '<option value="' . $mode_types[$i] . '"' . $selected . '>' . $mode_types_text[$i] . '</option>';
	}
	$select_sort_mode .= '</select>';

	$select_sort_order = '<select name="order">';
	if($sort_order == 'ASC')
	{
		$select_sort_order .= '<option value="ASC" selected="selected">' . $lang['Sort_Ascending'] . '</option><option value="DESC">' . $lang['Sort_Descending'] . '</option>';
	}
	else
	{
		$select_sort_order .= '<option value="ASC">' . $lang['Sort_Ascending'] . '</option><option value="DESC" selected="selected">' . $lang['Sort_Descending'] . '</option>';
	}
	$select_sort_order .= '</select>';

	switch( $mode2 )
	{
		case 'name':
			$order_by = "item_name $sort_order LIMIT $start, " . $board_config['topics_per_page'];
			break;
		case 'skill':
			$order_by = "item_recipe_skill_id $sort_order LIMIT $start, " . $board_config['topics_per_page'];
			break;
		default:
			$order_by = "item_name $sort_order LIMIT $start, " . $board_config['topics_per_page'];
			break;
	}

	$sql = "SELECT * FROM " . ADR_SHOPS_ITEMS_TABLE . "
		where item_brewing_recipe = 1
		and item_owner_id = 1
		ORDER BY $order_by";
	$result = $db->sql_query($sql);
	if( !$result )
	{
		message_die(GENERAL_ERROR, 'Could not obtain recipes information', "", __LINE__, __FILE__, $sql);
	}
	$recipes = $db->sql_fetchrowset($result);

	$s_hidden_fields = '<input type="hidden" name="mode" value="add_recipe" /><input type="hidden" name="item_type" value="' . $item_type . '" />';

	for($k = 0; $k < count($recipes); $k++)
	{
		$row_class = ( !($k % 2) ) ? $theme['td_class1'] : $theme['td_class2'];

		$effects_list = array();
		$effects_list = explode(':',$recipes[$k]['item_effect']);
		$effects_print_list = '';
		$stats = array('','HP','MP','AC','STR','DEX','CON','INT','WIS','CHA','MA','MD','EXP','GOLD','SP','BATTLES_REM','SKILLUSE_REM','TRADINGSKILL_REM','THEFTSKILL_REM','ATT','DEF');
		for ($i = 0; $i < count($effects_list);$i++)
		{
			if(array_search($effects_list[$i],$stats)) {
				$effects_print_list .= $effects_list[$i].": ".$effects_list[$i+1];
				if($effects_list[$i+3]==0)
					$effects_print_list .= '';
				else
					$effects_print_list .= ' (Target Monster)';
				if($effects_list[$i+5]==0)
					$effects_print_list .= ' (TEMP Effect)';
				else
					$effects_print_list .= ' (PERM Effect)';
				$effects_print_list .= '<br />';
			}
		}
		
		$items_req = array();
		$items_req = explode(':',$recipes[$k]['item_brewing_items_req']);
		$items_req_print = '<table border="0" width="95%">';
		for ($i = 0; $i < count($items_req); $i++)
		{
			$switch = ( !($i % 2) ) ? $get_info=1 : $get_info=0;

			if ($get_info == 1) {
				$sql_info = "SELECT * FROM " . ADR_SHOPS_ITEMS_TABLE . "
					where item_id = ".$items_req[$i];
				$result_info = $db->sql_query($sql_info);
				if( !$result_info )
				{
					message_die(GENERAL_ERROR, 'Could not obtain items information', "", __LINE__, __FILE__, $sql_info);
				}
				$item_info = $db->sql_fetchrow($result_info);
				$items_req_print .= '<tr><td>'.$lang[$item_info['item_name']].'</td><td><img src="../adr/images/items/'.$item_info['item_icon'].'"></td>';
			}
			else {
				$items_req_print .= '<td>(x'.$items_req[$i].')</td></tr>';
			}
		}
		$items_req_print .= '</table>';

		$skill_data = adr_get_skill_data($recipes[$k]['item_recipe_skill_id']);
		
		$template->assign_block_vars("recipes", array(
			"ROW_CLASS" => $row_class,
			"RECIPE_IMG" => $recipes[$k]['item_icon'],
			"RECIPE_NAME" => $recipes[$k]['item_name'],
			"RECIPE_SKILL" => adr_get_lang($skill_data['skill_name']),
			"RECIPE_LEVEL" => $recipes[$k]['item_power'],
			"RECIPE_DESC" => $recipes[$k]['item_desc'],
			"RECIPE_EFFECT" => $effects_print_list,
			"RECIPE_ITEMS_REQ" => $items_req_print,
			"RECIPE_ADMIN_ONLY" => $recipes[$k]['item_auth'],
			"U_RECIPE_EDIT" => append_sid("admin_adr_crafting_recipes.$phpEx?mode=edit_recipe&amp;recipe_id=" . $recipes[$k]['item_id']), 
			"U_RECIPE_DELETE" => append_sid("admin_adr_crafting_recipes.$phpEx?mode=delete_recipe&amp;recipe_id=" . $recipes[$k]['item_id']),
		));
	}

	$sql = "SELECT count(*) AS total FROM " . ADR_SHOPS_ITEMS_TABLE ." 
		where item_brewing_recipe = 1
		";
	if ( !($result = $db->sql_query($sql)) )
	{
		message_die(GENERAL_ERROR, 'Error getting total crafting recipes', '', __LINE__, __FILE__, $sql);
	}
	if ( $total = $db->sql_fetchrow($result) )
	{
		$total_recipes = $total['total'];
		$pagination = generate_pagination("admin_adr_crafting_recipes.$phpEx?mode2=$mode2&amp;order=$sort_order", $total_recipes, $board_config['topics_per_page'], $start). '&nbsp;';	
	}

	$template->assign_vars(array(
		"L_RECIPES_TITLE" => $lang['Adr_recipes_title'],
		"L_RECIPES_ATTENTION" => $lang['Adr_recipe_attention'],
		"L_RECIPES_EXPLAIN" => $lang['Adr_recipes_title_explain'],
		"L_RECIPES_IMG" => $lang['Adr_recipes_img'],
		"L_RECIPES_NAME" => $lang['Adr_recipes_name'],
		"L_RECIPE_SKILL" => $lang['Adr_recipe_skill'],
		"L_RECIPES_LEVEL" => $lang['Adr_recipes_level'],		
		"L_RECIPES_DESC" => $lang['Adr_recipes_desc'],
		"L_RECIPES_EFFECT" => $lang['Adr_recipes_effect'],
		"L_RECIPES_ITEMS_REQ" => $lang['Adr_recipes_items_req'],
		"L_RECIPES_ADMIN_ONLY" => $lang['Adr_recipes_admin_only'],
		"L_RECIPES_ADD" => $lang['Adr_recipes_add'],
		"L_RECIPES_ACTION" => $lang['Action'],
		"L_RECIPES_EDIT" => $lang['Edit'],
		"L_RECIPES_DELETE" => $lang['Delete'],
		'L_RECIPES_ORDER' => $lang['Order'],
		'L_RECIPES_SORT' => $lang['Sort'],
		'L_RECIPES_SELECT_SORT_METHOD' => $lang['Select_sort_method'],
		'S_RECIPES_MODE_SELECT' => $select_sort_mode,
		'S_RECIPES_ORDER_SELECT' => $select_sort_order,
		'RECIPES_PAGINATION' => $pagination,
		'RECIPES_PAGE_NUMBER' => sprintf($lang['Page_of'], ( floor( $start / $board_config['topics_per_page'] ) + 1 ), ceil( $total_recipes / $board_config['topics_per_page'] )), 
		"S_RECIPES_ACTION" => append_sid("admin_adr_crafting_recipes.$phpEx?mode2=$mode2&amp;order=$sort_order"),
		"S_HIDDEN_FIELDS" => $s_hidden_fields, 
	));

	$template->pparse("body");
}

include('./page_footer_admin.'.$phpEx);

?>