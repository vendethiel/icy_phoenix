<?php
/* V:
 * This functions were made as modifications done to the EzArena premodded board
 * and are "just" code refactoring, because sometimes it makes me cry to have 5-times dups.
 *
 * Do note that the file name should be changed, though ...
 *
 * Contains :
 *  - Zone functions
 *  -
 */

//!!! ZONE FUNCTIONS

function zone_goto($goto_name, $cost_goto)
{
	global $board_config, $adr_user;

	if ( ( $board_config['zone_dead_travel'] == '1' ) && ( $adr_user['character_hp'] < '1' ) )
		adr_previous( Adr_zone_change_dead , adr_zones , '' );

	//Prevent blank destination error
	if ( $goto_name . '' == $lang['Adr_zone_destination_none'] )
		adr_previous( Adr_zone_change_unavaible , adr_zones , '' );

	//Select the zone destination
	$sql = " SELECT * FROM  " . ADR_ZONES_TABLE . "
      	WHERE zone_name = '" . $db->sql_escape($goto_name) . "' ";
	if( !($result = $db->sql_query($sql)) )
       	 message_die(GENERAL_ERROR, 'Could not query area list', '', __LINE__, __FILE__, $sql);

	$zone_id = $db->sql_fetchrow($result);
	if (!$zone_id)
	{
		adr_previous('Adr_zone_change_unavaible', 'adr_zones');
	}
	$destination_id = $zone_id['zone_id'];
	$required_item = $zone_id['zone_item'];

	$required_level = $zone_id['zone_level'];
    // Check if user meets the required level
	$sql = " SELECT character_id, character_level
        	FROM  " . ADR_CHARACTERS_TABLE . "
                WHERE character_id = '$user_id' ";
	if( !($result = $db->sql_query($sql)) )
   	{ message_die(GENERAL_ERROR, 'Could not obtain character information', "", __LINE__, __FILE__, $sql); }
	$char = $db->sql_fetchrow($result);

	if( $char['character_level'] < $required_level )
	{ adr_previous( Adr_zone_change_level , adr_zones , '' ); }

 	// Check if user has the required item
	$sql = " SELECT * FROM  " . ADR_SHOPS_ITEMS_TABLE . "
   		WHERE item_name = '$required_item'
   		AND item_owner_id = '$user_id'
   		AND item_in_shop = '0'
   		AND item_in_warehouse = '0' ";
	$result = $db->sql_query($sql);
	if( !$result )
   		message_die(GENERAL_ERROR, 'Could not obtain required item information', "", __LINE__, __FILE__, $sql);

	$item_check = $db->sql_fetchrow($result);

	if ( ( $required_item == '0' ) || ( $required_item == $item_check['item_name'] ) ) 
	{
		adr_substract_points( $user_id , $cost_goto , adr_zones , '' );

		//Update character zone
		$sql = " UPDATE  " . ADR_CHARACTERS_TABLE . " 
			SET character_area = '$destination_id'
			WHERE character_id = '$user_id' ";
		if( !($result = $db->sql_query($sql)) )
			message_die(GENERAL_ERROR, 'Could not update character zone', '', __LINE__, __FILE__, $sql);

		@header('Location:'.append_sid("adr_zones.$phpEx"));
		adr_previous( Adr_zone_change_success , adr_zones , '' );
		break;
	}
	else
	{
		$message = '' . $lang['Adr_zone_item_lack'] . ' : ' . $required_item . '<br /><br />' . $lang['Adr_zone_event_return'] . '<br /><br />';
		message_die(GENERAL_ERROR, $message , Zones , '' );
		break;
	}
}

function zone_events($zone)
{
	global $db, $userdata;

	$event_1 = $zone['zone_event1'];
	$event_2 = $zone['zone_event2'];
	$event_3 = $zone['zone_event3'];
	$event_4 = $zone['zone_event4'];
	$event_5 = $zone['zone_event5'];
	$event_6 = $zone['zone_event6'];
	$event_7 = $zone['zone_event7'];
	$event_8 = $zone['zone_event8'];
	$zone_pointwin1 = $zone['zone_pointwin1'];
	$zone_pointwin2 = $zone['zone_pointwin2'];
	$zone_pointloss1 = $zone['zone_pointloss1'];
	$zone_pointloss2 = $zone['zone_pointloss2'];
	$zone_chance = $zone['zone_chance'];

	if (!$zone_events)
	{
		return;
	}

	$zone_events = rand( 1 , $zone_chance );

	if ( $zone_events == '1' )
	{
		$what_event = rand( 1 , 8 );

		//Get points
		if ( $what_event == '1' && $event_1 == '1' )
		{
			//Define money value
			$win = rand( $zone_pointwin1 , $zone_pointwin2 );

			adr_add_points( $user_id , $win );

			$message = '<img src="adr/images/zones/get_money.gif"><br /><br />' . $lang['Adr_zone_event_winpoint'] . ' ' . $win . ' ' . $board_config['points_name'] . '<br /><br />' . $lang['Adr_zone_event_return'] . '<br /><br />';
			message_die(GENERAL_ERROR, $message , Zones , '' );
		}

		//Loss of points
		else if ( $what_event == '2' && $event_2 == '1' )
		{
			//Define money value
			$loss = rand( $zone_pointloss1 , $zone_pointloss2 );

			if ( $loss > $userdata['user_points'] ) $loss = ( $userdata['user_points'] / 2 );

			adr_substract_points( $user_id , $loss , adr_zones , '' );

			$message = '<img src="adr/images/zones/loss_money.gif"><br /><br />' . $lang['Adr_zone_event_losspoint'] . ' ' . $loss . ' ' . $board_config['points_name'] . '<br /><br />' . $lang['Adr_zone_event_return'] . '<br /><br />';
			message_die(GENERAL_ERROR, $message , Zones , '' );
		}

		//Fountain of youth
		else if ( $what_event == '3' && $event_3 == '1' )
		{
			//Update character health
			$sql = " UPDATE  " . ADR_CHARACTERS_TABLE . " 
				SET character_hp = character_hp_max
				WHERE character_id = '$user_id' ";
			if( !($result = $db->sql_query($sql)) )
				message_die(GENERAL_ERROR, 'Could not update character zone', '', __LINE__, __FILE__, $sql);

			$message = '<img src="adr/images/zones/fountain_of_youth.gif"><br /><br />' . $lang['Adr_zone_event_fountain_youth'] . '<br /><br />' . $lang['Adr_zone_event_return'] . '<br /><br />';
			message_die(GENERAL_ERROR, $message , Zones , '' );
		}

		//Fountain of mana
		else if ( $what_event == '4' && $event_4 == '1' )
		{
			//Update character mp
			$sql = " UPDATE  " . ADR_CHARACTERS_TABLE . " 
				SET character_mp = character_mp_max
				WHERE character_id = '$user_id' ";
			if( !($result = $db->sql_query($sql)) )
				message_die(GENERAL_ERROR, 'Could not update character zone', '', __LINE__, __FILE__, $sql);

			$message = '<img src="adr/images/zones/fountain_of_mana.gif"><br /><br />' . $lang['Adr_zone_event_fountain_mana'] . '<br /><br />' . $lang['Adr_zone_event_return'] . '<br /><br />';
			message_die(GENERAL_ERROR, $message , Zones , '' );
		}

		//Poisonned
		else if ( $what_event == '5' && $event_5 == '1' )
		{
			//Update character hp
			$sql = " UPDATE  " . ADR_CHARACTERS_TABLE . " 
				SET character_hp = '1'
				WHERE character_id = '$user_id' ";
			if( !($result = $db->sql_query($sql)) )
				message_die(GENERAL_ERROR, 'Could not update character zone', '', __LINE__, __FILE__, $sql);

			$message = '<img src="adr/images/zones/poisonned.gif"><br /><br />' . $lang['Adr_zone_event_poison'] . '<br /><br />' . $lang['Adr_zone_event_return'] . '<br /><br />';
			message_die(GENERAL_ERROR, $message , Zones , '' );
		}

		//Weakness
		else if ( $what_event == '6' && $event_6 == '1' )
		{
			//Update character mp
			$sql = " UPDATE  " . ADR_CHARACTERS_TABLE . " 
				SET character_mp = '0'
				WHERE character_id = '$user_id' ";
			if( !($result = $db->sql_query($sql)) )
				message_die(GENERAL_ERROR, 'Could not update character zone', '', __LINE__, __FILE__, $sql);

			$message = '<img src="adr/images/zones/weakness.gif"><br /><br />' . $lang['Adr_zone_event_weakness'] . '<br /><br />' . $lang['Adr_zone_event_return'] . '<br /><br />';
			message_die(GENERAL_ERROR, $message , Zones , '' );
		}

		//Get items
		else if ( $what_event == '7' && $event_7 == '1' )
		{
			//Select zone specific items
			$sql = " SELECT * FROM  " . ADR_SHOPS_ITEMS_TABLE . " 
				WHERE item_owner_id = '1'
				AND ( item_zone = '$area_id' || item_zone = '0' )
				ORDER BY rand() LIMIT 1 ";
			if( !($result = $db->sql_query($sql)) )
				message_die(GENERAL_ERROR, 'Could not query battle list', '', __LINE__, __FILE__, $sql);

			$new_item				= $db->sql_fetchrow($result);
			adr_shop_insert_item($new_item['item_id'], adr_make_new_item_id($user_id), $user_id, 1);
			$item_name 				= $new_item['item_name'];
			$message = '<img src="adr/images/zones/get_item.gif"><br /><br />' . $lang['Adr_zone_event_item'] . '<br /><br /><b>' . $item_name . '</b><br /><br /><img src="adr/images/items/' . $item_icon . '"><br /><br />' . $item_desc . '<br /><br />' . $lang['Adr_zone_event_return'] . '<br /><br />';
			message_die(GENERAL_ERROR, $message , Zones , '' );
		}

		//Ambush
		else if ( $what_event == '8' && $event_8 == '1' )
		{
			//Define money value
			$loss = rand( $zone_pointloss1 , $zone_pointloss2 );

			if ( $loss > $userdata['user_points'] ) $loss =  $userdata['user_points'];

			adr_substract_points( $user_id , $loss , adr_zones , '' );

			$message = '<img src="adr/images/zones/ambush.gif"><br /><br />' . $lang['Adr_zone_event_ambush'] . ' ' . $loss . ' ' . $board_config['points_name'] . '<br /><br />' . $lang['Adr_zone_event_battle'] . '<br />' . $lang['Adr_zone_event_return'] . '<br /><br />';
			message_die(GENERAL_ERROR, $message , Zones , '' );
		}
	}
}

// Zone - NPCs
function zone_npc_actions()
{
	global $db, $userdata, $area_id, $user_id, $lang;

	if ( isset($_GET['npc']) || isset($_POST['npc']) )
		$npc_action = ( isset($_POST['npc']) ) ? intval($_POST['npc']) : intval($_GET['npc']);

	$npc_give_action = $_POST['npc_give'];
	$user_npc_visit_array = explode( ',' , $adr_user['character_npc_visited'] );
	$user_npc_quest_array = explode( ';' , $adr_user['character_npc_check'] );

	if( isset($npc_action) )
	{
		// Deny access if user is imprisioned
		if($userdata['user_cell_time']){
			adr_previous(Adr_zone_no_thief_npc, adr_cell, '');}

		if ( isset($_GET['npc_id']) || isset($_POST['npc_id']) )
		{
			$npc_id = ( isset($_POST['npc_id']) ) ? intval($_POST['npc_id']) : intval($_GET['npc_id']);
		}
	    $adr_user = adr_npc_visit_update( $npc_id, $adr_user );

		$sql = "SELECT * FROM  " . ADR_NPC_TABLE . "
				WHERE npc_id = '$npc_id'
					AND npc_enable = '1'";
		if ( !($result = $db->sql_query($sql)) )
	        message_die(GENERAL_ERROR, 'Could not query npc information', '', __LINE__, __FILE__, $sql);

		//prevent user exploit
		if ( !($npc_row = $db->sql_fetchrow($result)))
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);

		$npc_zone_array = explode( ',' , $npc_row['npc_zone'] );
		$npc_race_array = explode( ',' , $npc_row['npc_race'] );
		$npc_class_array = explode( ',' , $npc_row['npc_class'] );
		$npc_alignment_array = explode( ',' , $npc_row['npc_alignment'] );
		$npc_element_array = explode( ',' , $npc_row['npc_element'] );
		$npc_character_level_array = explode( ',' , $npc_row['npc_character_level'] );
		$npc_visit_array = explode( ',' , $npc_row['npc_visit_prerequisite'] );
		$npc_quest_array = explode( ',' , $npc_row['npc_quest_prerequisite'] );

		$npc_visit = array();
		$npc_quest = array();
		$no_talk_message = array();
		$npc_quest_hide_array = array();
		$x = 0;

		if ( !($npc_row['npc_enable']) )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		if ( !in_array( $area_id , $npc_zone_array ) && $npc_zone_array[0] != '0' )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		if ( !in_array( $adr_user['character_race'] , $npc_race_array ) && $npc_race_array[0] != '0' && !$npc_row['npc_view'] )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		else if ( !in_array( $adr_user['character_race'] , $npc_race_array ) && $npc_race_array[0] != '0' && $npc_row['npc_view'] )
		{
		    $no_talk_message[$x] = $lang['Adr_Npc_race_no_talk_message'];
		    $x++;
		}

		if ( !in_array( $adr_user['character_class'] , $npc_class_array ) && $npc_class_array[0] != '0' && !$npc_row['npc_view'] )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		else if ( !in_array( $adr_user['character_class'] , $npc_class_array ) && $npc_class_array[0] != '0' && $npc_row['npc_view'] )
		{
		    $no_talk_message[$x] = $lang['Adr_Npc_class_no_talk_message'];
		    $x++;
		}

		if ( !in_array( $adr_user['character_alignment'] , $npc_alignment_array ) && $npc_alignment_array[0] != '0' && !$npc_row['npc_view'] )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		else if ( !in_array( $adr_user['character_alignment'] , $npc_alignment_array ) && $npc_alignment_array[0] != '0' && $npc_row['npc_view'] )
		{
		    $no_talk_message[$x] = $lang['Adr_Npc_alignment_no_talk_message'];
		    $x++;
		}

		if ( !in_array( $adr_user['character_element'] , $npc_element_array ) && $npc_element_array[0] != '0' && !$npc_row['npc_view'] )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		else if( !in_array( $adr_user['character_element'] , $npc_element_array ) && $npc_element_array[0] != '0' && $npc_row['npc_view'] )
		{
		    $no_talk_message[$x] = $lang['Adr_Npc_element_no_talk_message'];
		    $x++;
		}
		if ( !in_array( $adr_user['character_level'] , $npc_character_level_array ) && $npc_character_level_array[0] != '0' && !$npc_row['npc_view'] )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		else if ( !in_array( $adr_user['character_level'] , $npc_character_level_array ) && $npc_character_level_array[0] != '0' && $npc_row['npc_view'] )
		{
		    $no_talk_message[$x] = $lang['Adr_Npc_character_level_no_talk_message'];
		    $x++;
		}

		for ( $y = 0 ; $y < count( $user_npc_visit_array ) ; $y++ )
			$npc_visit[$y] = ( in_array( $user_npc_visit_array[$y] , $npc_visit_array ) ) ? '1' : '0';
		
		if ( !in_array( '1' , $npc_visit ) && $npc_visit_array[0] != '0' && !$npc_row['npc_view'] )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		else if ( !in_array( '1' , $npc_visit ) && $npc_visit_array[0] != '0' && $npc_row['npc_view'] )
		{
		    $no_talk_message[$x] = $lang['Adr_Npc_character_visit_no_talk_message'];
		    $x++;
		}
		
		for ( $y = 0 ; $y < count( $user_npc_quest_array ) ; $y++ )
		{
			$npc_quest_id = explode( ':' , $user_npc_quest_array[$y] );
			$npc_quest[$y] = ( in_array( $npc_quest_id[0] , $npc_quest_array ) ) ? '1' : '0';
			$npc_quest_hide_array[$y] = ( $npc_quest_id[0] == $npc_row['npc_id'] ) ? '1' : '0';
		}
		
		if ( !in_array( '1' , $npc_quest ) && $npc_quest_array[0] != '0' && !$npc_row['npc_view'] )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		else if ( !in_array( '1' , $npc_quest ) && $npc_quest_array[0] != '0' && $npc_row['npc_view'] )
		{
		    $no_talk_message[$x] = $lang['Adr_Npc_character_quest_no_talk_message'];
		}
		
		if 	( in_array( '1' , $npc_quest_hide_array ) && $npc_row['npc_quest_hide'] )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		$adr_moderators_array = explode( ',' , $board_config['zone_adr_moderators'] );
		if ( $npc_row['npc_user_level'] != '0' && !( ( $npc_row['npc_user_level'] == '1' && $userdata['user_level'] == ADMIN ) || ( $npc_row['npc_user_level'] == '2' && ( in_array( $user_id , $adr_moderators_array ) || $userdata['user_level'] == ADMIN ) ) ) )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		//----

		adr_substract_points( $user_id , $npc_row['npc_price'] , 'adr_zones' , '' );
		if ( count( $no_talk_message ) )
		{
			$message_id = rand( 0 , ( count( $no_talk_message ) - 1 ) );
			$message = "<img src=\"adr/images/zones/npc/" . $npc_row['npc_img'] . "\"><br /><br /><b>" . $npc_row['npc_name'] . ":</b> <i>\"" . $no_talk_message[$message_id] . "\"</i><br /><br />" . $lang['Adr_zone_event_return'];
			$adr_zone_npc_title = sprintf( $lang['Adr_Npc_speaking_with'], $npc_row['npc_name'] );
			message_die(GENERAL_MESSAGE, $message , $adr_zone_npc_title , '' );
			break;
		}
		else
		{
			if ( adr_item_quest_check($npc_row['npc_id'], $adr_user['character_npc_check'], $npc_row['npc_times'] ) )
			{
				zone_npc_item_quest_check($npc_row);
			}
			else
			{
				$message = "<img src=\"adr/images/zones/npc/" . $npc_row['npc_img'] . "\"><br /><br /><b>" . $npc_row['npc_name'] . ":</b> <i>\"" . $npc_row['npc_message3'] . "\"</i><br /><br />" . $lang['Adr_zone_event_return'];
				$adr_zone_npc_title = sprintf( $lang['Adr_Npc_speaking_with'], $npc_row['npc_name'] );
				message_die(GENERAL_ERROR, $message , $adr_zone_npc_title , '' );
				break;
			}
		}
	}
	else if( isset($npc_give_action) )
	{
		$npc_id = intval($_POST['npc_id']);
		$item_id_array = explode( ',' , $_POST['item_id']);
		$sql = "SELECT * FROM  " . ADR_NPC_TABLE . "
				WHERE npc_id = '$npc_id'
					AND npc_enable = 1 " ;
		if ( !($result = $db->sql_query($sql)) )
	        message_die(GENERAL_ERROR, 'Could not query npc information', '', __LINE__, __FILE__, $sql);

		//prevent user exploit
		if ( !($npc_give_row = $db->sql_fetchrow($result)))
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		if ( !($npc_give_row['npc_enable']) )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);

		$npc_zone_array = explode( ',' , $npc_give_row['npc_zone'] );
		$npc_race_array = explode( ',' , $npc_give_row['npc_race'] );
		$npc_class_array = explode( ',' , $npc_give_row['npc_class'] );
		$npc_alignment_array = explode( ',' , $npc_give_row['npc_alignment'] );
		$npc_element_array = explode( ',' , $npc_give_row['npc_element'] );
		$npc_character_level_array = explode( ',' , $npc_give_row['npc_character_level'] );
		$npc_visit_array = explode( ',' , $npc_give_row['npc_visit_prerequisite'] );
		$npc_quest_array = explode( ',' , $npc_give_row['npc_quest_prerequisite'] );

		$npc_visit = array();
		$npc_quest = array();
		$npc_quest_hide_array = array();
		if ( !in_array( $area_id , $npc_zone_array ) && $npc_zone_array[0] != '0' )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		if ( !in_array( $adr_user['character_race'] , $npc_race_array ) && $npc_race_array[0] != '0' )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		if ( !in_array( $adr_user['character_class'] , $npc_class_array ) && $npc_class_array[0] != '0' )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		if ( !in_array( $adr_user['character_alignment'] , $npc_alignment_array ) && $npc_alignment_array[0] != '0' )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		if ( !in_array( $adr_user['character_element'] , $npc_element_array ) && $npc_element_array[0] != '0' )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		if ( !in_array( $adr_user['character_level'] , $npc_character_level_array ) && $npc_character_level_array[0] != '0' )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		for ( $y = 0 ; $y < count( $user_npc_visit_array ) ; $y++ )
			$npc_visit[$y] = ( in_array( $user_npc_visit_array[$y] , $npc_visit_array ) ) ? '1' : '0';
		if ( !in_array( '1' , $npc_visit ) && $npc_visit_array[0] != '0' && !$npc_give_row['npc_view'] )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		for ( $y = 0 ; $y < count( $user_npc_quest_array ) ; $y++ )
		{
			$npc_quest_id = explode( ':' , $user_npc_quest_array[$y] );
			$npc_quest[$y] = ( in_array( $npc_quest_id[0] , $npc_quest_array ) ) ? '1' : '0';
			$npc_quest_hide_array[$y] = ( $npc_quest_id[0] == $npc_give_row['npc_id'] ) ? '1' : '0';
		}
		if ( !in_array( '1' , $npc_quest ) && $npc_quest_array[0] != '0' && !$npc_give_row['npc_view'] )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		if 	( in_array( '1' , $npc_quest_hide_array ) && $npc_give_row['npc_quest_hide'] )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		$adr_moderators_array = explode( ',' , $board_config['zone_adr_moderators'] );
		if ( $npc_give_row['npc_user_level'] != '0' && !( ( $npc_give_row['npc_user_level'] == '1' && $userdata['user_level'] == ADMIN ) || ( $npc_give_row['npc_user_level'] == '2' && ( in_array( $user_id , $adr_moderators_array ) || $userdata['user_level'] == ADMIN ) ) ) )
			adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);

		if ( !$npc_give_row['npc_quest_clue'] )
		{
	 		// Check if user has the item(s)
			$npc_item_array = explode( ',' , $npc_give_row['npc_item'] );
			for ( $i = 0 ; $i < count( $npc_item_array ) ; $i++ )
			{
				$sql = "SELECT * FROM  " . ADR_SHOPS_ITEMS_TABLE . "
	   					WHERE item_id = '" . $item_id_array[$i] ."'
	   					    AND item_name = '" . $npc_item_array[$i] . "'
	   						AND item_owner_id = '$user_id'
		   					AND item_in_shop = '0'
			   				AND item_in_warehouse = '0'
						LIMIT 1 ";
				if ( !($result = $db->sql_query($sql)) )
	    		    message_die(GENERAL_ERROR, 'Could not query shop item information', '', __LINE__, __FILE__, $sql);
		    	$item_npc = $db->sql_fetchrowset($result);
				if ( count($item_npc) == 0 && ($npc_give_row['npc_kill_monster'] == "" or $npc_give_row['npc_kill_monster'] == '0'))
			        adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_1']);
			}
		}
		else
		{
			if ( !$npc_give_row['npc_quest_clue'] )
				adr_item_quest_cheat_notification($user_id, $lang['Adr_zone_npc_cheating_type_2']);
		}
		//----

		if ( adr_item_quest_check($npc_give_row['npc_id'], $adr_user['character_npc_check'], $npc_give_row['npc_times'] ) )
		{
			if ( !$npc_give_row['npc_quest_clue'] )
			{
				//Delete item(s) from character inventory
				for ( $i = 0 ; $i < count( $npc_item_array ) ; $i++ )
				{
					$delsql =  "DELETE FROM " . ADR_SHOPS_ITEMS_TABLE . "
								WHERE item_owner_id = '$user_id'
									AND item_id = '" . $item_id_array[$i] . "' ";
					if( !($aresult = $db->sql_query($delsql)) )
						message_die(GENERAL_ERROR, "Couldn't update inventory info", "", __LINE__, __FILE__, $asql);

					############ QUESTBOOK MOD v1.0.2 - START ############
					$sql5 = "SELECT * FROM " . ADR_QUEST_LOG_TABLE . "
						WHERE quest_item_need like '".$npc_item_array[$i].","."%' 
						OR quest_item_need like '".$npc_item_array[$i]."'
						OR quest_item_need like '".$npc_item_array[$i].","."'
						OR quest_item_need like '%".",".$npc_item_array[$i].","."%'
						OR quest_item_need like '%".",".$npc_item_array[$i]."'
						AND user_id = '$user_id'
						";
					$cresult = $db->sql_query($sql5);
					if( !$cresult )
				   		message_die(GENERAL_ERROR, 'Could not obtain required quest information', "", __LINE__, __FILE__, $sql5);
					if ( $got_item_log = $db->sql_fetchrow($cresult) )
						$got_item += 1;
					
					if ($got_item == count( $npc_item_array ) && ($npc_give_row['npc_kill_monster'] == '0' || $npc_give_row['npc_kill_monster'] == ""))
					{
						//Copy Quest to the History
						$insertsql = "INSERT INTO " . ADR_QUEST_LOG_HISTORY_TABLE . "
							( user_id, quest_killed_monster , quest_killed_monsters_amount , npc_id, quest_item_gave)
							VALUES ( '$user_id' , '".$npc_give_row['npc_kill_monster']."' , '".$npc_give_row['npc_monster_amount']."' , '". $npc_give_row['npc_id'] ."', '".$npc_give_row['npc_item']."' )";
						$result = $db->sql_query($insertsql);
						if( !$result )
							message_die(GENERAL_ERROR, "Couldn't insert finished quest", "", __LINE__, __FILE__, $insertsql);

						//Delete the Quest of the log
						$delsql2 = " DELETE FROM  " . ADR_QUEST_LOG_TABLE . "
					   		WHERE user_id = '$user_id'
							AND npc_id = '$npc_id'
					   		";
						if( !($bresult = $db->sql_query($delsql2)) )
							message_die(GENERAL_ERROR, "Couldn't update questlog info", "", __LINE__, __FILE__, $delsql2);
					}
					############ QUESTBOOK MOD v1.0.2 - END ############
				}
				############ QUESTBOOK MOD v1.0.2 - START ############
				if ($npc_give_row['npc_kill_monster'] != '0' && $npc_give_row['npc_kill_monster'] != "" && ($npc_give_row['quest_kill_monster_current_amount'] == $npc_give_row['npc_kill_monster_amount']))
				{
					//Copy Quest to the History
					$insertsql = "INSERT INTO " . ADR_QUEST_LOG_HISTORY_TABLE . "
						( user_id, quest_killed_monster , quest_killed_monsters_amount , npc_id, quest_item_gave)
						VALUES ( '$user_id' , '".$npc_give_row['npc_kill_monster']."' , '".$npc_give_row['npc_monster_amount']."' , '". $npc_give_row['npc_id'] ."', '".$npc_give_row['npc_item']."' )";
					$result = $db->sql_query($insertsql);
					if( !$result )
						message_die(GENERAL_ERROR, "Couldn't insert finished quest", "", __LINE__, __FILE__, $insertsql);
					
					//Delete the Quest of the log
					$delsql3 = " DELETE FROM  " . ADR_QUEST_LOG_TABLE . "
			   			WHERE quest_kill_monster = '".$npc_give_row['npc_kill_monster']."'
			   			AND quest_kill_monster_current_amount = '".$npc_give_row['npc_monster_amount']."'
						AND user_id = '$user_id'
						AND npc_id = '$npc_id'
				   		";
					if( !($dresult = $db->sql_query($delsql3)) )
						message_die(GENERAL_ERROR, "Couldn't update questlog info", "", __LINE__, __FILE__, $delsql3);
				}
				############ QUESTBOOK MOD v1.0.2 - END ############
			}
			else
			############ QUESTBOOK MOD v1.0.2 - START ############
			{
				adr_substract_points( $user_id , $npc_give_row['npc_quest_clue_price'] , adr_zones , '' );
				//Delete the Quest of the log
				$delsql2 = " DELETE FROM  " . ADR_QUEST_LOG_TABLE . "
			   		WHERE user_id = '$user_id'
					AND npc_id = '$npc_id'
			   		";
				if( !($bresult = $db->sql_query($delsql2)) )
					message_die(GENERAL_ERROR, "Couldn't update questlog info", "", __LINE__, __FILE__, $delsql2);
			}
			############ QUESTBOOK MOD v1.0.2 - END ############

			//give points prize
			adr_add_points( $user_id , $npc_give_row['npc_points'] );

			//give exp and sp prize
			$sql = "UPDATE  " . ADR_CHARACTERS_TABLE . "
					SET character_xp = character_xp + '".$npc_give_row['npc_exp']."',
						character_sp = character_sp + '".$npc_give_row['npc_sp']."'
					WHERE character_id = '$user_id' ";
			if ( !($result = $db->sql_query($sql)) )
		        message_die(GENERAL_ERROR, 'Could not update character information', '', __LINE__, __FILE__, $sql);

			$prize_item = '';
			if ( $npc_give_row['npc_item2'] != "0" && $npc_give_row['npc_item2'] != "" )
			{
				$npc_item2_array = explode( ',' , $npc_give_row['npc_item2'] );
				for ( $i = 0 ; $i < count( $npc_item2_array ) ; $i++ )
				{
					adr_shop_insert_item($npc_item2_array[$i], adr_make_new_item_id($user_id), $user_id, 1, 0, 0, 'item_name');

					if ( count( $npc_item2_array ) == 1 )
						$prize_item .= adr_get_lang( $npc_item2_array[$i] ) ;
					else
					{
						if ( ( $i >= 1 ) && ( $i == ( count( $npc_item2_array ) + 1 ) ) )
							$prize_item .= ' and ' . adr_get_lang( $npc_item2_array[$i] ) ;
						else
							$prize_item .= ', ' . adr_get_lang( $npc_item2_array[$i] ) ;
					}
				}
				$prize_message = sprintf($lang['Adr_zone_npc_item_prize'], $npc_give_row['npc_name'] , $prize_item ) ;
			}

			//Insert Character in check field
			if( $npc_give_row['npc_times'] > 0 )
				adr_item_quest_check_insert( $adr_user['character_npc_check'] , $npc_give_row['npc_id'] , $user_id );
			//----

			$points_prize_lang = ( $npc_give_row['npc_points'] == 0 ) ? "" : sprintf( $lang['Adr_zone_npc_points_prize'] , number_format( intval( $npc_give_row['npc_points'] ) ) , $board_config['points_name'] ) ;
			$exp_prize_lang = ( $npc_give_row['npc_exp'] == 0 ) ? "" : sprintf( $lang['Adr_zone_npc_exp_prize'] , number_format( intval( $npc_give_row['npc_exp'] ) ) ) ;
			$sp_prize_lang = ( $npc_give_row['npc_sp'] == 0 ) ? "" : sprintf( $lang['Adr_zone_npc_sp_prize'] , number_format( intval( $npc_give_row['npc_sp'] ) ) ) ;
			$item_prize_lang = ( count( $npc_item2_array ) == 0 || $npc_give_row['npc_item2'] == "" ) ? "" : $prize_message;

			$message = "<img src=\"adr/images/zones/npc/" . $npc_give_row['npc_img'] . "\"><br /><br /><b>" . $npc_give_row['npc_name'] . ":</b> <i>\"" . $npc_give_row['npc_message2'] . "\"</i><br /><br />".$item_prize_lang."".$points_prize_lang."".$exp_prize_lang."".$sp_prize_lang."<br />" . $lang['Adr_zone_event_return'];
			$adr_zone_npc_title = sprintf( $lang['Adr_Npc_speaking_with'], $npc_row['npc_name'] );
			message_die(GENERAL_ERROR, $message , $adr_zone_npc_title , '' );
			break;
		}
		else
		{
			$message = "<img src=\"adr/images/zones/npc/" . $npc_give_row['npc_img'] . "\"><br /><br /><b>" . $npc_give_row['npc_name'] . ":</b> <i>\"" . $npc_give_row['npc_message2'] . "\"</i><br /><br />" . $lang['Adr_zone_event_return'];
			$adr_zone_npc_title = sprintf( $lang['Adr_Npc_speaking_with'], $npc_row['npc_name'] );
			message_die(GENERAL_ERROR, $message , $adr_zone_npc_title , '' );
			break;
		}
	}
}

function zone_npc_item_quest_check($npc_row)
{
	global $user_id, $npc_id, $db, $lang;

	//[QUEST] Check if the NPC needs an item(s)
	if ( $npc_row['npc_item'] != "0" || $npc_row['npc_item'] != "" || $npc_row['npc_quest_clue'] )
	{
		if ( !$npc_row['npc_quest_clue'] )
		{
			$npc_item_array = explode( ',' , $npc_row['npc_item'] );
			$npc_item_list = '';
			$npc_item_id_list = '';
			$required_items = false;
			for ( $i = 0 ; $i < count( $npc_item_array ) ; $i++ )
			{
	 			// Check if user has the item
				$sql = "SELECT * FROM  " . ADR_SHOPS_ITEMS_TABLE . "
			   			WHERE item_name = '" . $npc_item_array[$i] . "'
			   				AND item_owner_id = '$user_id'
   							AND item_in_shop = '0'
   							AND item_in_warehouse = '0'
						LIMIT 1 ";
				$result = $db->sql_query($sql);
				if( !$result )
			   		message_die( GENERAL_ERROR , 'Could not obtain required item information' , "" , __LINE__ , __FILE__ , $sql );
				if ( $item_npc = $db->sql_fetchrow($result) )
				{
					if ( ( count( $npc_item_array ) == 1 ) || ( $i == ( count( $npc_item_array ) - 1 ) ) )
					{
						if ( $i == ( count( $npc_item_array ) - 1 ) && $i != 0 )
							$npc_item_list .= ' et ' . adr_get_lang( $npc_item_array[$i] );
						else
							$npc_item_list .= adr_get_lang( $npc_item_array[$i] );
						$npc_item_id_list .= $item_npc['item_id'];
					}
					else
					{
						if ( $i != 0 )
							$npc_item_list .=  ', ';
						$npc_item_list .= adr_get_lang( $npc_item_array[$i] );
						$npc_item_id_list .= $item_npc['item_id'] . ',';
					}
				    $required_items = true;
				}
				else
				{
				    $required_items = false;
				    break;
				}
			}
			// Get Quest Info
			$sql = " SELECT * FROM  " . ADR_QUEST_LOG_TABLE . "
				WHERE user_id = '$user_id'
				AND npc_id = '$npc_id'";
			$result = $db->sql_query($sql);
			if( !$result )
	   		message_die(GENERAL_ERROR, 'Could not obtain required quest information', "", __LINE__, __FILE__, $sql);
			
			if ( $quest_log = $db->sql_fetchrow($result))
			{
				if ( $required_items == true && ($npc_row['npc_kill_monster'] == '0' || $npc_row['npc_kill_monster'] == ""))
				{
					$give_lang = sprintf($lang['Adr_zone_npc_give_item'], $npc_item_list, $npc_row['npc_name']);
					$give = "<br /><br /><form method=\"post\" action=\"".append_sid("adr_zones.$phpEx")."\"><input type=\"hidden\" name=\"npc_id\" value=\"$npc_id\"><input type=\"hidden\" name=\"item_id\" value=\"".$npc_item_id_list."\"><input type=\"submit\" name=\"npc_give\" value=\"$give_lang\" class=\"mainoption\" /></form>";
				}
				elseif ( $required_items == true && $quest_log['quest_kill_monster_amount'] == $quest_log['quest_kill_monster_current_amount'])
				{
					$give_lang = sprintf($lang['Adr_zone_npc_give_item'], $npc_item_list, $npc_row['npc_name']);
					$give = "<br /><br /><form method=\"post\" action=\"".append_sid("adr_zones.$phpEx")."\"><input type=\"hidden\" name=\"npc_id\" value=\"$npc_id\"><input type=\"hidden\" name=\"item_id\" value=\"".$npc_item_id_list."\"><input type=\"submit\" name=\"npc_give\" value=\"$give_lang\" class=\"mainoption\" /></form>";
				}
			}
		}
		else
		{
			$give_lang = sprintf($lang['Adr_zone_npc_pay_price'], number_format( intval( $npc_row['npc_quest_clue_price'] ) ) . ' ' . $board_config['points_name'], $npc_row['npc_name']);
			$give = "<br /><br /><form method=\"post\" action=\"".append_sid("adr_zones.$phpEx")."\"><input type=\"hidden\" name=\"npc_id\" value=\"$npc_id\"><input type=\"hidden\" name=\"item_id\" value=\"0\"><input type=\"submit\" name=\"npc_give\" value=\"$give_lang\" class=\"mainoption\" /></form>";
		}
	}

	if ( ($npc_row['npc_item'] != "0" && $npc_row['npc_item'] != "") OR ($npc_row['npc_kill_monster'] != "0" && $npc_row['npc_kill_monster'] != "" && $npc_row['npc_kill_monster_amount'] != "0"))
	{
		// Check if the character already has the Quest !
		$sql = " SELECT * FROM  " . ADR_QUEST_LOG_TABLE . "
	   		WHERE (quest_item_need = '".$npc_row['npc_item']."'
			OR quest_kill_monster = '".$npc_row['npc_kill_monster']."')
			AND user_id = '$user_id'
			AND npc_id = '$npc_id'
	   		";
		$result = $db->sql_query($sql);
		if( !$result )
	   		message_die(GENERAL_ERROR, 'Could not obtain required quest information', "", __LINE__, __FILE__, $sql);
		if ( !($quest_log = $db->sql_fetchrow($result)) )
		{
			//Add the quest to the questlog
			$sql = "INSERT INTO " . ADR_QUEST_LOG_TABLE . "
				( user_id, quest_kill_monster , quest_kill_monster_amount , quest_kill_monster_current_amount , quest_item_have, quest_item_need, npc_id )
				VALUES ( '$user_id' , '".$npc_row['npc_kill_monster']."' , '".$npc_row['npc_monster_amount']."' , '0' , '', '". $npc_row['npc_item'] ."' , '". $npc_row['npc_id'] ."' )";
			$result = $db->sql_query($sql);
			if( !$result )
				message_die(GENERAL_ERROR, "Couldn't insert new quest", "", __LINE__, __FILE__, $sql);
		}
	}
	// Check if user has killed enough monsters
	$sqlm3 = " SELECT * FROM  " . ADR_QUEST_LOG_TABLE . "
   		WHERE quest_kill_monster = '".$npc_row['npc_kill_monster']."'
   		AND quest_kill_monster_current_amount = '".$npc_row['npc_monster_amount']."'
		AND user_id = '$user_id'
		AND npc_id = '$npc_id'
   		";
	$resultm3 = $db->sql_query($sqlm3);
	if( !$resultm3 )
   		message_die(GENERAL_ERROR, 'Could not obtain required quest information', "", __LINE__, __FILE__, $sqlm3);
	if ( $kills_npc = $db->sql_fetchrow($resultm3) )
	{
		if ($kills_npc['quest_kill_monster'] != "" && $kills_npc['quest_kill_monster'] != '0' && ($kills_npc['quest_item_need'] == '0' || $kills_npc['quest_item_need'] == ""))
		{
			$give_lang = sprintf($lang['Adr_zone_npc_complete_kill_quest'], $npc_row['npc_monster_amount'], adr_get_lang($npc_row['npc_kill_monster']));
			$give = "<br /><br /><form method=\"post\" action=\"".append_sid("adr_zones.$phpEx")."\"><input type=\"hidden\" name=\"npc_id\" value=\"$npc_id\"><input type=\"submit\" name=\"npc_give\" value=\"$give_lang\" class=\"mainoption\" /></form>";
		}
	}

	$message = "<img src=\"adr/images/zones/npc/" . $npc_row['npc_img'] . "\"><br /><br /><b>" . $npc_row['npc_name'] . ":</b> <i>\"" . $npc_row['npc_message'] . "\"</i>$give<br /><br />" . $lang['Adr_zone_event_return'];
	$adr_zone_npc_title = sprintf( $lang['Adr_Npc_speaking_with'], $npc_row['npc_name'] );
	message_die(GENERAL_MESSAGE, $message , $adr_zone_npc_title );
}