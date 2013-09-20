<?php
/***************************************************************************
*                               admin_adr_armour_set.php
*                              -------------------
*     begin                : 10/12/2004
*     copyright            : Seteo-Bloke
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
define('IN_ADR_SHOPS', 1);
define('IN_ADR_CHARACTER', 1);

if( !empty($setmodules) )
{
        $filename = basename(__FILE__);
        $module['Adr']['Adr_armour_sets'] = $filename;

        return;
}

define('IP_ROOT_PATH', "./../");

require('./pagestart.' . $phpEx);
include(IP_ROOT_PATH . 'adr/includes/adr_global.'.$phpEx);
include_once(IP_ROOT_PATH . 'adr/includes/adr_functions_armour_sets.'.$phpEx);

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

                case 'add_armour_set':

                        adr_template_file('admin/config_adr_armour_set_edit_body.tpl');
                        $template->assign_block_vars('add',array());
                        $s_hidden_fields = '<input type="hidden" name="mode" value="savenew_armour_set" /><input type="hidden" name="item_type" value="' . $item_type . '" />';

                        // Grab Helms types
                        $sql = "SELECT * FROM " . ADR_SHOPS_ITEMS_TABLE . "
                                        WHERE item_owner_id = 1
                                        AND item_type_use = 9 ";
                        $result = $db->sql_query($sql);
                        if( !$result ){
                                message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);}
                        $helm = $db->sql_fetchrowset($result);

                        // Helm list
                        $helm_list = '<select name="helm_list">';
                        $helm_list .= '<option value = "0" >' . $lang['Adr_admin_set_no_item'] . '</option>';
                        for($i = 0; $i < count($helm); $i++)
                        {
                                $helm[$i]['item_name'] = adr_get_lang($helm[$i]['item_name']);
                                $helm_selected = ( $items['item_id'] == $helm[$i]['item_name'] ) ? 'selected' : '';
                                $helm_list .= '<option value = "'.$helm[$i]['item_name'].'" '.$helm_selected.' >' . $helm[$i]['item_name'] . '</option>';
                        }
                        $helm_list .= '</select>';

                        // Grab Armour types
                        $sql = "SELECT * FROM " . ADR_SHOPS_ITEMS_TABLE . "
                                        WHERE item_owner_id = 1
                                        AND item_type_use = 7 ";
                        $result = $db->sql_query($sql);
                        if( !$result )
                        {
                                message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
                        }
                        $armour = $db->sql_fetchrowset($result);

                        // Armour list
                        $armour_list = '<select name="armour_list">';
                        $armour_list .= '<option value = "0" >' . $lang['Adr_admin_set_no_item'] . '</option>';
                        for($i = 0; $i < count($armour); $i++)
                        {
                                $armour[$i]['item_name'] = adr_get_lang($armour[$i]['item_name']);
                                $armour_selected = ( $items['item_id'] == $armour[$i]['item_name'] ) ? 'selected' : '';
                                $armour_list .= '<option value = "'.$armour[$i]['item_name'].'" '.$armour_selected.' >' . $armour[$i]['item_name'] . '</option>';
                        }
                        $armour_list .= '</select>';

                        // Grab Gloves types
                        $sql = "SELECT * FROM " . ADR_SHOPS_ITEMS_TABLE . "
                                        WHERE item_owner_id = 1
                                        AND item_type_use = 10 ";
                        $result = $db->sql_query($sql);
                        if( !$result )
                        {
                                message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
                        }
                        $gloves = $db->sql_fetchrowset($result);

                        // Gloves list
                        $gloves_list = '<select name="gloves_list">';
                        $gloves_list .= '<option value = "0" >' . $lang['Adr_admin_set_no_item'] . '</option>';
                        for($i = 0; $i < count($gloves); $i++)
                        {
                                $gloves[$i]['item_name'] = adr_get_lang($gloves[$i]['item_name']);
                                $gloves_selected = ( $items['item_id'] == $gloves[$i]['item_name'] ) ? 'selected' : '';
                                $gloves_list .= '<option value = "'.$gloves[$i]['item_name'].'" '.$gloves_selected.' >' . $gloves[$i]['item_name'] . '</option>';
                        }
                        $gloves_list .= '</select>';

                        // Grab shield types
                        $sql = "SELECT * FROM " . ADR_SHOPS_ITEMS_TABLE . "
                                        WHERE item_owner_id = 1
                                        AND item_type_use = 8 ";
                        $result = $db->sql_query($sql);
                        if( !$result )
                        {
                                message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
                        }
                        $shield = $db->sql_fetchrowset($result);

                        // Buckler list
                        $shield_list = '<select name="shield_list">';
                        $shield_list .= '<option value = "0" >' . $lang['Adr_admin_set_no_item'] . '</option>';
                        for($i = 0; $i < count($shield); $i++)
                        {
                                $shield[$i]['item_name'] = adr_get_lang($shield[$i]['item_name']);
                                $shield_selected = ( $items['item_id'] == $shield[$i]['item_name'] ) ? 'selected' : '';
                                $shield_list .= '<option value = "'.$shield[$i]['item_name'].'" '.$shield_selected.' >' . $shield[$i]['item_name'] . '</option>';
                        }
                        $shield_list .= '</select>';


                        $template->assign_vars(array(
                                "HELM_LIST"                 => $helm_list,
                                "ARMOUR_LIST"                 => $armour_list,
                                "GLOVES_LIST"                 => $gloves_list,
                                "SHIELD_LIST"                 => $shield_list,
                                "L_SET_NAME"                 => $lang['Adr_admin_set_name'],
                                "L_SET_DESC"                 => $lang['Adr_admin_set_desc'],
                                "L_SET_IMG"                 => $lang['Adr_admin_set_img'],
                                "L_SET_HELM"                 => $lang['Adr_admin_set_helm'],
                                "L_SET_ARMOUR"                 => $lang['Adr_admin_set_armour'],
                                "L_SET_GLOVES"                 => $lang['Adr_admin_set_gloves'],
                                "L_SET_SHIELD"                 => $lang['Adr_admin_set_shield'],
                                "L_SET_MIGHT_BONUS"        => $lang['Adr_admin_set_might_bonus'],
                                "L_SET_CON_BONUS"         => $lang['Adr_admin_set_con_bonus'],
                                "L_SET_AC_BONUS"                 => $lang['Adr_admin_set_ac_bonus'],
                                "L_SET_DEX_BONUS"         => $lang['Adr_admin_set_dex_bonus'],
                                "L_SET_INT_BONUS"         => $lang['Adr_admin_set_int_bonus'],
                                "L_SET_WIS_BONUS"                => $lang['Adr_admin_set_wis_bonus'],
                                "L_SET_MIGHT_PEN"                => $lang['Adr_admin_set_might_pen'],
                                "L_SET_CON_PEN"                 => $lang['Adr_admin_set_con_pen'],
                                "L_SET_AC_PEN"                 => $lang['Adr_admin_set_ac_pen'],
                                "L_SET_DEX_PEN"                 => $lang['Adr_admin_set_dex_pen'],
                                "L_SET_INT_PEN"                 => $lang['Adr_admin_set_int_pen'],
                                "L_SET_WIS_PEN"                => $lang['Adr_admin_set_wis_pen'],
                                "L_ACTION"                         => $lang['Action'],
                                "L_EDIT"                         => $lang['Edit'],
                                "L_DELETE"                        => $lang['Delete'],
                                "L_SUBMIT"                         => $lang['Submit'],
                                "S_ITEMS_ACTION"                 => append_sid("admin_adr_armour_sets.".$phpEx),
                                "S_HIDDEN_FIELDS"         => $s_hidden_fields, 
                        ));

                        $template->pparse("body");

                break;

                case 'delete_armour_set':

                        $set_id = ( !empty($_POST['set_id']) ) ? intval($_POST['set_id']) : intval($_GET['set_id']);

                        $sql = "DELETE FROM " . ADR_ARMOUR_SET_TABLE . "
                                WHERE set_id = $set_id ";
                        $result = $db->sql_query($sql);
                        if( !$result )
                        {
                                message_die(GENERAL_ERROR, "Couldn't delete set", "", __LINE__, __FILE__, $sql);
                        }

                        adr_previous( Adr_admin_set_deleted , admin_adr_armour_sets , '' );

                break;

                case 'edit_armour_set':

                        $set_id = ( !empty($_POST['set_id']) ) ? intval($_POST['set_id']) : intval($_GET['set_id']);

                        adr_template_file('admin/config_adr_armour_set_edit_body.tpl');
                        $template->assign_block_vars('edit',array());

                        $sql = " SELECT * FROM " . ADR_ARMOUR_SET_TABLE . "
                                WHERE set_id = $set_id ";
                        $result = $db->sql_query($sql);
                        if( !$result )
                        {
                                message_die(GENERAL_ERROR, 'Could not obtain items information', "", __LINE__, __FILE__, $sql);
                        }
                        $items = $db->sql_fetchrow($result);

                        $s_hidden_fields = '<input type="hidden" name="mode" value="save_armour_set" /><input type="hidden" name="set_id" value="' . $set_id . '" />';

                        // Grab Helms types
                        $sql = "SELECT * FROM " . ADR_SHOPS_ITEMS_TABLE . "
                                        WHERE item_owner_id = 1
                                        AND item_type_use = 9 ";
                        $result = $db->sql_query($sql);
                        if( !$result )
                        {
                                message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
                        }
                        $helm = $db->sql_fetchrowset($result);

                        // Helm list
                        $helm_list = '<select name="helm_list">';
                        $helm_list .= '<option value = "0" >' . $lang['Adr_admin_set_no_item'] . '</option>';
                        for($i = 0; $i < count($helm); $i++)
                        {
                                $helm[$i]['item_name'] = adr_get_lang($helm[$i]['item_name']);
                                $helm_selected = ( $items['set_helm'] == $helm[$i]['item_name'] ) ? 'selected' : '';
                                $helm_list .= '<option value = "'.$helm[$i]['item_name'].'" '.$helm_selected.' >' . $helm[$i]['item_name'] . '</option>';
                        }
                        $helm_list .= '</select>';

                        // Grab Armour types
                        $sql = "SELECT * FROM " . ADR_SHOPS_ITEMS_TABLE . "
                                        WHERE item_owner_id = 1
                                        AND item_type_use = 7 ";
                        $result = $db->sql_query($sql);
                        if( !$result )
                        {
                                message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
                        }
                        $armour = $db->sql_fetchrowset($result);

                        // Armour list
                        $armour_list = '<select name="armour_list">';
                        $armour_list .= '<option value = "0" >' . $lang['Adr_admin_set_no_item'] . '</option>';
                        for($i = 0; $i < count($armour); $i++)
                        {
                                $armour[$i]['item_name'] = adr_get_lang($armour[$i]['item_name']);
                                $armour_selected = ( $items['set_armour'] == $armour[$i]['item_name'] ) ? 'selected' : '';
                                $armour_list .= '<option value = "'.$armour[$i]['item_name'].'" '.$armour_selected.' >' . $armour[$i]['item_name'] . '</option>';
                        }
                        $armour_list .= '</select>';

                        // Grab Gloves types
                        $sql = "SELECT * FROM " . ADR_SHOPS_ITEMS_TABLE . "
                                        WHERE item_owner_id = 1
                                        AND item_type_use = 10 ";
                        $result = $db->sql_query($sql);
                        if( !$result )
                        {
                                message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
                        }
                        $gloves = $db->sql_fetchrowset($result);

                        // Gloves list
                        $gloves_list = '<select name="gloves_list">';
                        $gloves_list .= '<option value = "0" >' . $lang['Adr_admin_set_no_item'] . '</option>';
                        for($i = 0; $i < count($gloves); $i++)
                        {
                                $gloves[$i]['item_name'] = adr_get_lang($gloves[$i]['item_name']);
                                $gloves_selected = ( $items['set_gloves'] == $gloves[$i]['item_name'] ) ? 'selected' : '';
                                $gloves_list .= '<option value = "'.$gloves[$i]['item_name'].'" '.$gloves_selected.' >' . $gloves[$i]['item_name'] . '</option>';
                        }
                        $gloves_list .= '</select>';

                        // Grab Shield/Buckler types
                        $sql = "SELECT * FROM " . ADR_SHOPS_ITEMS_TABLE . "
                                        WHERE item_owner_id = 1
                                        AND item_type_use = 8 ";
                        $result = $db->sql_query($sql);
                        if( !$result )
                        {
                                message_die(GENERAL_ERROR, 'Could not obtain elements information', "", __LINE__, __FILE__, $sql);
                        }
                        $shield = $db->sql_fetchrowset($result);

                        // Shield list
                        $shield_list = '<select name="shield_list">';
                        $shield_list .= '<option value = "0" >' . $lang['Adr_admin_set_no_item'] . '</option>';
                        for($i = 0; $i < count($shield); $i++)
                        {
                                $shield[$i]['item_name'] = adr_get_lang($shield[$i]['item_name']);
                                $shield_selected = ( $items['set_shield'] == $shield[$i]['item_name'] ) ? 'selected' : '';
                                $shield_list .= '<option value = "'.$shield[$i]['item_name'].'" '.$shield_selected.' >' . $shield[$i]['item_name'] . '</option>';
                        }
                        $shield_list .= '</select>';

                        $template->assign_vars(array(
                                "HELM_LIST"                 => $helm_list,
                                "ARMOUR_LIST"                 => $armour_list,
                                "GLOVES_LIST"                 => $gloves_list,
                                "SHIELD_LIST"                 => $shield_list,
                                "SET_NAME"                         => $items['set_name'],
                                "SET_IMG"                         => $items['set_img'],
                                "SET_DESC"                         => $items['set_desc'],
                                "MIGHT_BONUS"                => $items['set_might_bonus'],
                                "CON_BONUS"                => $items['set_constitution_bonus'],
                                "AC_BONUS"                => $items['set_ac_bonus'],
                                "DEX_BONUS"                => $items['set_dexterity_bonus'],
                                "INT_BONUS"                => $items['set_intelligence_bonus'],
                                "WIS_BONUS"                => $items['set_wisdom_bonus'],
                                "MIGHT_PEN"                => $items['set_might_penalty'],
                                "CON_PEN"                => $items['set_constitution_penalty'],
                                "AC_PEN"                => $items['set_ac_penalty'],
                                "DEX_PEN"                => $items['set_dexterity_penalty'],
                                "INT_PEN"                => $items['set_intelligence_penalty'],
                                "WIS_PEN"                => $items['set_wisdom_penalty'],
                			"L_SET_NAME"                => $lang['Adr_admin_set_name'],
                			"L_SET_DESC"                => $lang['Adr_admin_set_desc'],
                			"L_SET_IMG"                => $lang['Adr_admin_set_img'],
                			"L_SET_HELM"                 => $lang['Adr_admin_set_helm'],
                			"L_SET_ARMOUR"                 => $lang['Adr_admin_set_armour'],
                			"L_SET_GLOVES"                 => $lang['Adr_admin_set_gloves'],
                			"L_SET_SHIELD"                 => $lang['Adr_admin_set_shield'],
                			"L_SET_MIGHT_BONUS"        => $lang['Adr_admin_set_might_bonus'],
                			"L_SET_CON_BONUS"         => $lang['Adr_admin_set_con_bonus'],
                			"L_SET_AC_BONUS"                 => $lang['Adr_admin_set_ac_bonus'],
                			"L_SET_DEX_BONUS"         => $lang['Adr_admin_set_dex_bonus'],
                			"L_SET_INT_BONUS"         => $lang['Adr_admin_set_int_bonus'],
                			"L_SET_WIS_BONUS"                => $lang['Adr_admin_set_wis_bonus'],
                			"L_SET_MIGHT_PEN"                => $lang['Adr_admin_set_might_pen'],
                			"L_SET_CON_PEN"                 => $lang['Adr_admin_set_con_pen'],
                			"L_SET_AC_PEN"                 => $lang['Adr_admin_set_ac_pen'],
                			"L_SET_DEX_PEN"                 => $lang['Adr_admin_set_dex_pen'],
                			"L_SET_INT_PEN"                 => $lang['Adr_admin_set_int_pen'],
                			"L_SET_WIS_PEN"                => $lang['Adr_admin_set_wis_pen'],
                                "L_POINTS"                         => $board_config['points_name'],
                                "L_ACTION"                         => $lang['Action'],
                                "L_EDIT"                         => $lang['Edit'],
                                "L_DELETE"                         => $lang['Delete'],
                                "L_SUBMIT"                         => $lang['Submit'],
                                "S_ITEMS_ACTION"                 => append_sid("admin_adr_armour_sets.".$phpEx),
                                "S_HIDDEN_FIELDS"         => $s_hidden_fields, 
                        ));

                        $template->pparse("body");

                break;

                case "save_armour_set":

                        $set_id = ( !empty($_POST['set_id']) ) ? intval($_POST['set_id']) : intval($_GET['set_id']);
                        $set_name = ( isset($_POST['set_name']) ) ? trim($_POST['set_name']) : trim($_GET['set_name']);
                        $set_desc = ( isset($_POST['set_desc']) ) ? trim($_POST['set_desc']) : trim($_GET['set_desc']);
                        $set_img = ( isset($_POST['set_img']) ) ? trim($_POST['set_img']) : trim($_GET['set_img']);
                        $set_helm = ( isset($_POST['helm_list']) ) ? trim($_POST['helm_list']) : trim($_GET['helm_list']);
                        $set_armour = ( isset($_POST['armour_list']) ) ? trim($_POST['armour_list']) : trim($_GET['armour_list']);
                        $set_gloves = ( isset($_POST['gloves_list']) ) ? trim($_POST['gloves_list']) : trim($_GET['gloves_list']);
                        $set_shield = ( isset($_POST['shield_list']) ) ? trim($_POST['shield_list']) : trim($_GET['shield_list']);
                        $set_might_bonus = intval($_POST['set_might_bonus']);
                        $set_constitution_bonus = intval($_POST['set_con_bonus']);
                        $set_ac_bonus = intval($_POST['set_ac_bonus']);
                        $set_dexterity_bonus = intval($_POST['set_dex_bonus']);
                        $set_intelligence_bonus = intval($_POST['set_int_bonus']);
                        $set_wisdom_bonus = intval($_POST['set_wis_bonus']);
                        $set_might_penalty = intval($_POST['set_might_penalty']);
                        $set_constitution_penalty = intval($_POST['set_con_penalty']);
                        $set_ac_penalty = intval($_POST['set_ac_penalty']);
                        $set_dexterity_penalty = intval($_POST['set_dex_penalty']);
                        $set_intelligence_penalty = intval($_POST['set_int_penalty']);
                        $set_wisdom_penalty = intval($_POST['set_wis_penalty']);

                        if ($set_name == '' ){
							message_die(MESSAGE, $lang['Fields_empty']);}

						// Do not allow partial sets in this release!
						if(($set_helm == '') || ($set_armour == '') || ($set_gloves == '') || ($set_shield == ''))
							message_die(MESSAGE, "You have not selected a complete set. You cannot have partial sets in this release.");

                        $sql = "UPDATE " . ADR_ARMOUR_SET_TABLE . "
                                SET		set_name = '" . str_replace("\'", "''", $set_name) . "', 
                                        set_desc = '" . str_replace("\'", "''", $set_desc) . "', 
                                        set_img = '" . str_replace("\'", "''", $set_img) . "', 
                                        set_helm = '" . str_replace("\'", "''", $set_helm) . "', 
                                        set_armour = '" . str_replace("\'", "''", $set_armour) . "',
                                        set_gloves = '" . str_replace("\'", "''", $set_gloves) . "',
                                        set_shield = '" . str_replace("\'", "''", $set_shield) . "',
                                        set_might_bonus = $set_might_bonus,
                                        set_constitution_bonus = $set_constitution_bonus,
                                        set_ac_bonus = $set_ac_bonus,
                                        set_dexterity_bonus = $set_dexterity_bonus,
                                        set_intelligence_bonus = $set_intelligence_bonus,
                                        set_wisdom_bonus = $set_wisdom_bonus,
                                        set_might_penalty = $set_might_penalty,
                                        set_constitution_penalty = $set_constitution_penalty,
                                        set_ac_penalty = $set_ac_penalty,
                                        set_dexterity_penalty = $set_dexterity_penalty,
                                        set_intelligence_penalty = $set_intelligence_penalty,
                                        set_wisdom_penalty = $set_wisdom_penalty
                                WHERE set_id = $set_id ";
                        if( !($result = $db->sql_query($sql)) )
                        {
                                message_die(GENERAL_ERROR, "Couldn't update armour set", "", __LINE__, __FILE__, $sql);
                        }

                        adr_previous( Adr_admin_set_updated , admin_adr_armour_sets , '' );

                break;

                case "savenew_armour_set":

                        $set_id = ( !empty($_POST['set_id']) ) ? intval($_POST['set_id']) : intval($_GET['set_id']);
                        $set_name = ( isset($_POST['set_name']) ) ? trim($_POST['set_name']) : trim($_GET['set_name']);
                        $set_desc = ( isset($_POST['set_desc']) ) ? trim($_POST['set_desc']) : trim($_GET['set_desc']);
                        $set_img = ( isset($_POST['set_img']) ) ? trim($_POST['set_img']) : trim($_GET['set_img']);
                        $set_helm = ( isset($_POST['helm_list']) ) ? trim($_POST['helm_list']) : trim($_GET['helm_list']);
                        $set_armour = ( isset($_POST['armour_list']) ) ? trim($_POST['armour_list']) : trim($_GET['armour_list']);
                        $set_gloves = ( isset($_POST['gloves_list']) ) ? trim($_POST['gloves_list']) : trim($_GET['gloves_list']);
                        $set_shield = ( isset($_POST['shield_list']) ) ? trim($_POST['shield_list']) : trim($_GET['shield_list']);
                        $set_might_bonus = intval($_POST['set_might_bonus']);
                        $set_constitution_bonus = intval($_POST['set_con_bonus']);
                        $set_ac_bonus = intval($_POST['set_ac_bonus']);
                        $set_dexterity_bonus = intval($_POST['set_dex_bonus']);
                        $set_intelligence_bonus = intval($_POST['set_int_bonus']);
                        $set_wisdom_bonus = intval($_POST['set_wis_bonus']);
                        $set_might_penalty = intval($_POST['set_might_penalty']);
                        $set_constitution_penalty = intval($_POST['set_con_penalty']);
                        $set_ac_penalty = intval($_POST['set_ac_penalty']);
                        $set_dexterity_penalty = intval($_POST['set_dex_penalty']);
                        $set_intelligence_penalty = intval($_POST['set_int_penalty']);
                        $set_wisdom_penalty = intval($_POST['set_wis_penalty']);

						if ($set_name == '' ){
							message_die(MESSAGE, $lang['Fields_empty']);}

						// Do not allow partial sets in this release!
						if(($set_helm == '') || ($set_armour == '') || ($set_gloves == '') || ($set_shield == ''))
							message_die(MESSAGE, "You have not selected a complete set. You cannot have partial sets in this release.");

                        $sql = "INSERT INTO " . ADR_ARMOUR_SET_TABLE . " 
                                ( set_name , set_desc , set_img , set_helm , set_armour , set_gloves , set_shield , set_might_bonus , set_constitution_bonus , set_ac_bonus , set_dexterity_bonus , set_intelligence_bonus , set_wisdom_bonus , set_might_penalty , set_constitution_penalty , set_ac_penalty , set_dexterity_penalty , set_intelligence_penalty , set_wisdom_penalty )
                                VALUES ( '" . str_replace("\'", "''", $set_name) . "' , '" . str_replace("\'", "''", $set_desc) . "' , '" . str_replace("\'", "''", $set_img) . "' , '" . str_replace("\'", "''", $set_helm) . "' , '" . str_replace("\'", "''", $set_armour) . "' , '" . str_replace("\'", "''", $set_gloves) . "' , '" . str_replace("\'", "''", $set_shield) . "' , $set_might_bonus , $set_constitution_bonus , $set_ac_bonus , $set_dexterity_bonus , $set_intelligence_bonus , $set_wisdom_bonus , $set_might_penalty , $set_constitution_penalty , $set_ac_penalty , $set_dexterity_penalty , $set_intelligence_penalty , $set_wisdom_penalty )";
                        $result = $db->sql_query($sql);
                        if( !$result )
                        {
                                message_die(GENERAL_ERROR, "Couldn't insert new set", "", __LINE__, __FILE__, $sql);
                        }

                        adr_previous( Adr_admin_set_success, admin_adr_armour_sets , '' );

                break;
        }
}
else
{
        adr_template_file('admin/config_adr_armour_set_list_body.tpl');

        $sql = "SELECT * FROM " . ADR_ARMOUR_SET_TABLE;
        if ( !($result = $db->sql_query($sql)) ) 
        { 
                message_die(GENERAL_ERROR, 'Error showing all armour sets list' , "", __LINE__, __FILE__, $sql); 
        } 
        $sets = $db->sql_fetchrowset($result);

        $s_hidden_fields = '<input type="hidden" name="mode" value="add_armour_set" /><input type="hidden" name="item_type" value="' . $category_id . '" />';

        for($i = 0; $i < count($sets); $i++)
        {
                $row_color = ( !($i % 2) ) ? $theme['td_color1'] : $theme['td_color2']; 
                $row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2']; 

                $image = $sets[$i]['set_image'] != '' ? adr_get_lang($sets[$i]['set_image']) : '';

                $row_class = ( !($i % 2) ) ? $theme['td_class1'] : $theme['td_class2'];

                $template->assign_block_vars("sets", array(
                        "ROW_CLASS"                => $row_class, 
                        "SET_ID"                => $sets[$i]['set_id'],
                        "SET_IMG"                => $image,
                        "SET_NAME"                => $sets[$i]['set_name'],
                        "SET_DESC"                => $sets[$i]['set_desc'],
                        "SET_HELM"                => adr_get_lang($sets[$i]['set_helm']),
                        "SET_ARMOUR"        => adr_get_lang($sets[$i]['set_armour']),
                        "SET_GLOVES"        => adr_get_lang($sets[$i]['set_gloves']),
                        "SET_SHIELD"        => adr_get_lang($sets[$i]['set_shield']),
                        "SET_MIGHT_BONUS"        => $sets[$i]['set_might_bonus'],
                        "SET_CON_BONUS"        => $sets[$i]['set_constitution_bonus'],
                        "SET_AC_BONUS"        => $sets[$i]['set_ac_bonus'],
                        "SET_DEX_BONUS"        => $sets[$i]['set_dexterity_bonus'],
                        "SET_INT_BONUS"        => $sets[$i]['set_intelligence_bonus'],
                        "SET_WIS_BONUS"        => $sets[$i]['set_wisdom_bonus'],
                        "SET_MIGHT_PEN"        => $sets[$i]['set_might_penalty'],
                        "SET_CON_PEN"        => $sets[$i]['set_constitution_penalty'],
                        "SET_AC_PEN"        => $sets[$i]['set_ac_penalty'],
                        "SET_DEX_PEN"        => $sets[$i]['set_dexterity_penalty'],
                        "SET_INT_PEN"        => $sets[$i]['set_intelligence_penalty'],
                        "SET_WIS_PEN"        => $sets[$i]['set_wisdom_penalty'],
                        "U_SET_EDIT"         => append_sid("admin_adr_armour_sets.$phpEx?mode=edit_armour_set&amp;set_id=" . $sets[$i]['set_id']), 
                        "U_SET_DELETE"         => append_sid("admin_adr_armour_sets.$phpEx?mode=delete_armour_set&amp;set_id=" . $sets[$i]['set_id']),
                ));
        }

        $sql = "SELECT count(*) AS total FROM " . ADR_ARMOUR_SET_TABLE ;
        if ( !($result = $db->sql_query($sql)) )
        {
                message_die(GENERAL_ERROR, 'Error getting total users', '', __LINE__, __FILE__, $sql);
        }
        if ( $total = $db->sql_fetchrow($result) )
        {
                $total_sets = $total['total'];
                $pagination = generate_pagination("admin_adr_armour_sets.$phpEx?mode2=$mode2&amp;order=$sort_order&amp;cat=$cat", $total_sets, $board_config['topics_per_page'], $start). '&nbsp;';        
        }

        $template->assign_vars(array(
                "POINTS"                        => $board_config['points_name'],
                "L_ADD_SET"                        => $lang['Adr_admin_set_add'],
                "L_SET_TITLE"                => $lang['Adr_admin_set_title'],
                "L_SET_TEXT"                => $lang['Adr_admin_set_text'],
                "L_SET_HELM"                 => $lang['Adr_admin_set_helm'],
                "L_SET_ARMOUR"                 => $lang['Adr_admin_set_armour'],
                "L_SET_GLOVES"                 => $lang['Adr_admin_set_gloves'],
                "L_SET_SHIELD"                 => $lang['Adr_admin_set_shield'],
                "L_SET_MIGHT_BONUS"        => $lang['Adr_admin_set_might_bonus'],
                "L_SET_CON_BONUS"         => $lang['Adr_admin_set_con_bonus'],
                "L_SET_AC_BONUS"                 => $lang['Adr_admin_set_ac_bonus'],
                "L_SET_DEX_BONUS"         => $lang['Adr_admin_set_dex_bonus'],
                "L_SET_INT_BONUS"         => $lang['Adr_admin_set_int_bonus'],
                "L_SET_WIS_BONUS"                => $lang['Adr_admin_set_wis_bonus'],
                "L_SET_MIGHT_PEN"                => $lang['Adr_admin_set_might_pen'],
                "L_SET_CON_PEN"                 => $lang['Adr_admin_set_con_pen'],
                "L_SET_AC_PEN"                 => $lang['Adr_admin_set_ac_pen'],
                "L_SET_DEX_PEN"                 => $lang['Adr_admin_set_dex_pen'],
                "L_SET_INT_PEN"                 => $lang['Adr_admin_set_int_pen'],
                "L_SET_WIS_PEN"                => $lang['Adr_admin_set_wis_pen'],
                "L_ACTION"                        => $lang['Action'],
                "L_JOBS"                        => $lang['Adr_shops_categories_items'],
                "L_EDIT"                        => $lang['Edit'],
                "L_DELETE"                        => $lang['Delete'],
                "L_SET_IMG"                        => $lang['Adr_races_image'],
			"L_SET_IMG_EXPLAIN"		=> $lang['Adr_admin_set_img_explain'],
                "L_SET_PRICE"                => $lang['Adr_items_price'],
                'L_SELECT_SORT_METHOD'        => $lang['Select_sort_method'],
                'L_ORDER'                         => $lang['Order'],
                'L_SORT'                         => $lang['Sort'],
                'L_SUBMIT'                         => $lang['Sort'],
                'L_GOTO_PAGE'                 => $lang['Goto_page'],
                "L_GIVE"                         => $lang['Adr_items_give'],
                "L_SELL"                         => $lang['Adr_items_sell'],
                "L_EDIT"                         => $lang['Adr_items_edit'],
                "L_SHOP"                         => $lang['Adr_items_into_shop'],
                'L_SELECT_CAT'                 => $lang['Adr_items_select'],
                'S_MODE_SELECT'                 => $select_sort_mode,
                'S_ORDER_SELECT'                 => $select_sort_order,
                'SELECT_CAT'                 => $select_category,
                'PAGINATION'                 => $pagination,
                'PAGE_NUMBER'                 => sprintf($lang['Page_of'], ( floor( $start / $board_config['topics_per_page'] ) + 1 ), ceil( $total_sets / $board_config['topics_per_page'] )), 
                "S_SET_ACTION"                 => append_sid("admin_adr_armour_sets.$phpEx?mode2=$mode2&amp;order=$sort_order"),
                "S_HIDDEN_FIELDS"         => $s_hidden_fields, 
        ));

        $template->pparse("body");
}

include('./page_footer_admin.'.$phpEx);

?>
