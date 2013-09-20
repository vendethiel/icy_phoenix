<?php
/***************************************************************************
*					lang_adr_admin.php [French]
*				    -------------------
*
*					    Translation : Thos
*					 http://www.thosforum.com
*
****************************************************************************/

if ( !defined ('IN_ADR_ADMIN') )
{
    return;
}

$lang['ADR_THIS_IS_LOOTTABLES'] = 'Note : cette liste est la liste des <b>tables de butin</b>.<br/>Vous pouvez les modifier dans l\'onglet "Objet" puis "Tables de butin".<br/>';

if ( defined ('IN_ADR_CHARACTER'))
{
    //ZONE
    if ( defined ('IN_ADR_SEASONS'))
    {
        $lang['Adr_seasons_acp_title']='Configurations des Saisons';
        $lang['Adr_seasons_acp_explain']='Ici vous pouvez changer les saisons et la dur�e �coul�e entre chaque saison';
        $lang['Adr_seasons_acp_config']='Configurations des Saisons';
        $lang['Adr_seasons_acp_choice']='Changer de saison';
        $lang['Adr_seasons_acp_time']='Temps �coul� entre chaque saison';
        $lang['Adr_seasons_acp_days']='Jours';
        $lang['Adr_seasons_acp_submit']='Changer la configuration des saisons';
        $lang['Adr_season_change_successful']='La configuration des saisons a �t� chang�e avec succ�s';
        $lang['Adr_season_empty']='Vous devez obligatoirement mettre une dur�e entre chaque saison';
        $lang['Adr_Season_1']='Printemps';
        $lang['Adr_Season_2']='Et�';
        $lang['Adr_Season_3']='Automne';
        $lang['Adr_Season_4']='Hiver';
    }
    //ZONE end
    // Races
    $lang['Adr_races_explain']='Ici vous pouvez configurer les races , en ajouter , modifier celles existantes ou les supprimer .';
    $lang['Adr_races_add']='Ajouter une race';
    $lang['Adr_races_add_edit']='Ajout et �dition de races';
    $lang['Adr_races_add_edit_explain']='Ici vous pouvez ajouter une race ou �diter une race d�j� existante .';
    $lang['Adr_races_name_explain']='Vous pouvez utiliser une cl� du tableau langue';
    $lang['Adr_races_image_explain']='L\'image correspondante doit �tre plac�e dans le r�pertoire /adr/images/races/';
    $lang['Adr_races_level']='Niveau des utilisateurs';
    $lang['Adr_races_level_explain']='Vous pouvez r�server certaines races � certains niveaux d\'utilisateurs';
    $lang['Adr_races_level_all']='Tous';
    $lang['Adr_races_level_admin']='Administrateur';
    $lang['Adr_races_level_mod']='Mod�rateur';
    $lang['Adr_race_successful_added']='Nouvelle race ajout�e avec succ�s';
    $lang['Adr_race_successful_edited']='Race �dit�e avec succ�s';
    $lang['Adr_race_default']='Vous ne pouvez pas supprimer la classe par d�faut';
    $lang['Adr_race_successful_deleted']='Race supprim�e avec succ�s';
    $lang['Adr_races_weight']='Poids de base maximum';
    $lang['Adr_races_weight_per_level']='Pourcentage de poids en plus lors de la mont�e de niveau';


    // Classes
    $lang['Adr_classes_explain']='Ici vous pouvez configurer les classes , en ajouter , modifier celles existantes ou les supprimer .';
    $lang['Adr_classes_add']='Ajouter une classe';
    $lang['Adr_classes_add_edit']='Ajout et �dition de classes';
    $lang['Adr_classes_add_edit_explain']='Ici vous pouvez ajouter une classe ou �diter une classe d�j� existante .';
    $lang['Adr_classes_image_explain']='L\'image correspondante doit �tre plac�e dans le r�pertoire /adr/images/classes/';
    $lang['Adr_classes_level_explain']='Vous pouvez r�server certaines classes � certains niveaux d\'utilisateurs';
    $lang['Adr_classes_req_might']='Caract�ristique Force minimale';
    $lang['Adr_classes_req_dext']='Caract�ristique Agilit� minimale';
    $lang['Adr_classes_req_const']='Caract�ristique Endurance minimale';
    $lang['Adr_classes_req_int']='Caract�ristique Intelligence minimale';
    $lang['Adr_classes_req_wis']='Caract�ristique Volont� minimale';
    $lang['Adr_classes_req_cha']='Caract�ristique Charme minimale';
    $lang['Adr_classes_req_ma']='Caract�ristique Attaque Magique minimale';
    $lang['Adr_classes_req_md']='Caract�ristique R�sistance � la Magie minimale';
    $lang['Adr_class_successful_added']='Nouvelle classe ajout�e avec succ�s';
    $lang['Adr_class_successful_edited']='Classe �dit�e avec succ�s';
    $lang['Adr_class_default']='Vous ne pouvez pas supprimer la classe par d�faut';
    $lang['Adr_class_successful_deleted']='Classe supprim�e avec succ�s';
    $lang['Adr_classes_update_xp_req']='Points d\'exp�rience n�cessaires pour monter de niveau';
    $lang['Adr_classes_update_of']='Est une �volution de';
    $lang['Adr_classes_update_of_req']='Niveau minimal pour �voluer vers cette classe';
    $lang['Adr_classes_selectable']='Peut �tre s�lectionn� lors de la cr�ation d\'un nouveau personnage';
    $lang['Adr_classes_evolution_none']='N\'est pas une �volution';

    // Elements
    $lang['Adr_elements_add']='Ajouter un �l�ment';
    $lang['Adr_elements_explain']='Ici vous pouvez configurer les �l�ments , en ajouter , modifier ceux existants ou les supprimer .';
    $lang['Adr_elements_add_edit']='Ajout et �dition d\'�l�ments';
    $lang['Adr_elements_add_edit_explain']='Ici vous pouvez ajouter un �l�ment ou �diter un �l�ment d�j� existante .';
    $lang['Adr_elements_colour']='Couleur';
    $lang['Adr_elements_colour_ex']='Ici, vous pouvez choisir une couleur pour l\'�l�ment.<br>Vous pouvez utiliser une couleur nomm�e ou une couleur <a href="http://www.w3schools.com/html/html_colornames.asp" target="_blank">hexad�cimale</a> � la place.';
    $lang['Adr_elements_image_explain']='L\'image correspondante doit �tre plac�e dans le r�pertoire /adr/images/elements/';
    $lang['Adr_elements_level_explain']='Vous pouvez r�server certains �l�ments � certains niveaux d\'utilisateurs';
    $lang['Adr_element_successful_added']='Nouvel �l�ment ajout� avec succ�s';
    $lang['Adr_element_successful_edited']='El�ment �dit� avec succ�s';
    $lang['Adr_element_successful_deleted']='El�ment supprim� avec succ�s';
    $lang['Adr_element_default']='Vous ne pouvez supprimer l\'�l�ment de base';

    $lang['Adr_element_oppose_str']='Choisissez un �l�ment oppos� contre lequel cet �l�ment sera plus fort';
    $lang['Adr_element_oppose_weak']='Choisissez un �l�ment oppos� contre lequel cet �l�ment sera plus faible';
    $lang['Adr_element_oppose_str_dmg']='Choisissez un pourcentage pour l\'�l�ment le plus fort';
    $lang['Adr_element_oppose_same_dmg']='Choisissez un pourcentage pour le m�me �l�ment';
    $lang['Adr_element_oppose_weak_dmg']='Choisissez un pourcentage pour l\'�l�ment le plus faible';

    // Alignments
    $lang['Adr_alignments_add']='Ajouter un alignement';
    $lang['Adr_alignments_explain']='Ici vous pouvez configurer les alignements , en ajouter , modifier ceux existants ou les supprimer .';
    $lang['Adr_alignments_add_edit']='Ajout et �dition d\'alignements';
    $lang['Adr_alignments_add_edit_explain']='Ici vous pouvez ajouter un �l�ment ou �diter un alignement d�j� existante .';
    $lang['Adr_alignments_image_explain']='L\'image correspondante doit �tre plac�e dans le r�pertoire /adr/images/alignments/';
    $lang['Adr_alignments_level_explain']='Vous pouvez r�server certains alignements � certains niveaux d\'utilisateurs';
    $lang['Adr_alignment_successful_added']='Nouvel alignement ajout� avec succ�s';
    $lang['Adr_alignment_successful_edited']='Alignement �dit� avec succ�s';
    $lang['Adr_alignment_successful_deleted']='Alignement supprim� avec succ�s';
    $lang['Adr_alignment_default']='Vous ne pouvez pas supprimer l\'alignement par d�faut';

    //Skills
    $lang['Adr_skills_add_edit']='Edition des comp�tences';
    $lang['Adr_skills_explain']='Ici vous pouvez �diter les comp�tences';
    $lang['Adr_skills_req']='Utilisations';
    $lang['Adr_skills_req_explain']='Nombres d\'utilisations r�ussies avant que la comp�tence augmente';
    $lang['Adr_skills_chance']='Chances';
    $lang['Adr_skills_chance_explain']='Pourcentage de chance de r�ussite de l\'utilisation de la comp�tence pour chaque niveau de comp�tence';
    $lang['Adr_skills_successful_edited']='Comp�tence mise � jour avec succ�s';

    // Inventory
    $lang['Adr_character_admin_inventory']='Voir l\'inventaire du membre';
    $lang['Adr_delete_inventory']='Supprimer l\'inventaire entier';
    $lang['Adr_character_inventory_title']=' Contenu de l\'Inventaire & de l\'entrepot';
    $lang['Adr_admin_delete_entire_inventory']='L\'enventaire entier a �t� supprim�';
    $lang['Adr_admin_item_deleted']='Objet(s) supprim�(s) de l\'inventaire du membre';

    //ARMOUR SET
    $lang['Adr_admin_set_title']='Sets d\'armures'; 
    $lang['Adr_admin_set_text']='Ajouter & mettre a jour vos Sets d\'armures'; 
    $lang['Adr_admin_set_success']='Sets d\'armures ajout� avec succ�s'; 
    $lang['Adr_admin_set_updated']='Sets d\'armures mis a jour avec succ�s';
    $lang['Adr_admin_set_deleted']='Sets d\'armures supprim� avec succ�s';
    $lang['Adr_admin_set_add']='Ajouter Sets d\'armures';
    $lang['Adr_admin_set_no_item']='Rien Selectionn�';
    $lang['Adr_admin_set_name']='Nom du Sets d\'armures:';
    $lang['Adr_admin_set_desc']='Description du Sets d\'armures:';
    $lang['Adr_admin_set_img']='Image du Sets d\'armures:';
    $lang['Adr_admin_set_img_explain']='Les images doivent �tre plac�es dans le repertoire adr/images/sets';
    $lang['Adr_admin_set_helm']='Choisir Casque:';
    $lang['Adr_admin_set_armour']='Choisir Armure:';
    $lang['Adr_admin_set_gloves']='Choisir Gant:';
    $lang['Adr_admin_set_shield']='Choisir Bouclier:';
    $lang['Adr_admin_set_greave']='Choisir Jambi�re:';
    $lang['Adr_admin_set_boot']='Choisir Bottes:';
    $lang['Adr_admin_set_hp_max_bonus']='HP max bonus:';
    $lang['Adr_admin_set_mp_max_bonus']='MP max  bonus:';
    $lang['Adr_admin_set_might_bonus']='Force bonus:';
    $lang['Adr_admin_set_con_bonus']='Constitution bonus:';
    $lang['Adr_admin_set_ac_bonus']='Classe d\'Armure bonus:';
    $lang['Adr_admin_set_dex_bonus']='Dexterit� bonus:';
    $lang['Adr_admin_set_int_bonus']='Intelligence bonus:';
    $lang['Adr_admin_set_wis_bonus']='Charisme bonus:';
    $lang['Adr_admin_set_hp_max_pen']='HP max penalt�:';
    $lang['Adr_admin_set_mp_max_pen']='MP max penalt�:';
    $lang['Adr_admin_set_might_pen']='Force penalt�:';
    $lang['Adr_admin_set_con_pen']='Constitution penalt�:';
    $lang['Adr_admin_set_ac_pen']='Classe d\'Armure penalt�:';
    $lang['Adr_admin_set_dex_pen']='Dexterit� penalt�:';
    $lang['Adr_admin_set_int_pen']='Intelligence penalt�:';
    $lang['Adr_admin_set_wis_pen']='Charisme penalt�:';
    //ARMOUR SET end
}

if ( defined ('IN_ADR_SETTINGS'))
{
    // General settings
    $lang['Adr_admin_general_settings']='Configuration g�n�rale';
    $lang['Adr_admin_general_settings_explain']='Ici vous pouvez d�finir toutes les options g�n�rales relatives � ADR';
    $lang['Adr_admin_general_character_creation']='Cr�ation de personnages';
    $lang['Adr_admin_general_character_page_name']='Nom du lien vers la page de la fiche des personnages';
    $lang['Adr_admin_general_character_allow_reroll']='Autoriser les utilisateurs � retirer leurs caract�ristiques';
    $lang['Adr_admin_general_character_allow_delete']='Autoriser les utilisateurs � recr�er leur personnage';
    $lang['Adr_admin_general_character_stats_max']='Valeur maximale des caract�ristiques';
    $lang['Adr_admin_general_character_stats_min']='Valeur minimale des caract�ristiques';
    $lang['Adr_character_general_update_error']='Erreur durant la mise � jour de la configuration g�n�rale';
    $lang['Adr_character_general_update_success']='Mise � jour de la configuration g�n�rale effectu�e avec succ�s';

    $lang['Adr_admin_general_shop_settings']='Configuration des magasins';
    $lang['Adr_admin_general_item_base_price_settings']='Configuration des objets - Prix de base';
    $lang['Adr_admin_general_item_modifier_price_settings']='Configuration des objets - Modificateurs';
    $lang['Adr_admin_general_item_modifier_power_settings']='Modificateurs par la puissance des objets';
    $lang['Adr_admin_general_item_modifier_power_settings_explain']='Vous pouvez d�finir une valeur en pourcentage de la valeur d\'un objet en fonction de sa puissance';
    $lang['Adr_admin_general_item_modifier_quality_settings']='Modificateurs par la qualit� des objets';
    $lang['Adr_admin_general_item_modifier_quality_settings_explain']='Vous pouvez d�finir une valeur en pourcentage de la valeur d\'un objet en fonction de sa qualit�';
    $lang['Adr_admin_general_item_modifier_type_settings']='Prix de base des objets';
    $lang['Adr_admin_general_item_modifier_type_settings_explain']='Vous pouvez d�finir un prix de base pour les objets en fonction de leur type';
    $lang['Adr_admin_general_item_modifier_power']='Pourcentage de la valeur de base le l\'objet pour chaque niveau de puissance';
    $lang['Adr_admin_allow_steal']='Autoriser les utilisateurs � voler dans les magasins';
    $lang['Adr_admin_allow_steal_sell']='Permettre la revente d\'objets vol�s ?';
    $lang['Adr_admin_allow_steal_sell_ex']='D�sactiver cette option emp�chera les utilisateurs de revendre � la boutique du forum les objets vol�s � celle-ci. Ces objets ne pourront ainsi �tre vendus que via les boutiques des utilisateurs.';
    $lang['Adr_admin_allow_steal_lvl']='Niveau minimum requis pour utiliser la comp�tence \'voleur\'';
    $lang['Adr_admin_allow_steal_lvl_ex']='Les joueurs devront avoir atteint ce niveau pour �tre capables de voler.';
    $lang['Adr_admin_steal_show']='Afficher le niveau de difficult� du vol d\'un objet dans la boutique du forum';
    $lang['Adr_admin_steal_show_ex']='Cette option active l\'affichage du niveau de difficult� du vol de l\'objet concern� dans la boutique du forum';

    $lang['Adr_admin_cache_int']='Intervalle de mise � jour automatique du cache';
    $lang['Adr_admin_cache_int_ex']='Cette option permet au cache de se r�generer toutes les x minutes. Une v�rification des renouvellements de quota est aussi effectu�e.<br>La valeur recommand�e est de 15 minutes. Diminuez cette valeur si vous jugez que les quotas sont incorrectement rafra�chies. Si cette valeur est trop faible vous risquez d\'avoir des probl�mes de surcharge de votre serveur, il est recommand� de ne pas descendre en dessous de 5 minutes.';
    $lang['Adr_admin_new_shop_price']='Prix pour ouvrir un nouveau magasin';
    $lang['Adr_admin_character_age']='Age initial du personnage � la cr�ation';
    $lang['Adr_admin_character_tax']='Taxes des Magasins & Entrepots';
    $lang['Adr_admin_character_shop_tax']='Imposer une  taxe des magasins:';
    $lang['Adr_admin_character_shop_dura']='Dur�e entre les pr�l�vement des taxes des magasins:';
    $lang['Adr_admin_character_wh_tax']='Imposer une taxe des entrepots:';
    $lang['Adr_admin_character_wh_dura']='Dur�e entre les pr�l�vement des taxes des entrepots';
    $lang['Adr_admin_days']='Jours';
    $lang['Adr_items_element_none']='Pas d\'�l�ments';
    $lang['Adr_items_dex_explain']='Quand le membre s\'�quipe avec des objets pour les combats, cette valeur sera ajout�e au total de la puissance des objets. *Ceci n\'a pas d\'effet sur les Anneaux & Amulettes*';
    $lang['Adr_items_mp_use_explain']='Si activ�, cette valeur retirera des MP additionels au membre quand il utilise une *arme* ou un *sort*.';
    $lang['Adr_admin_general_item_modifier_settings']='Modificateurs au prix des objets';
    $lang['Adr_admin_general_item_modifier_power']='Pourcentage de la valeur de base de l\'objet gagn�e pour chaque niveau de puissance';
    $lang['Adr_admin_experience_posting']='Exp�rience lors des posts';
    $lang['Adr_admin_weight_enable_title']='Restriction de poids';
    $lang['Adr_admin_weight_enable']='Mettre la restriction de poids sur ON / OFF';
    $lang['Adr_admin_experience_posting_new']='Points d\'exp�rience gagn�s pour un nouveau sujet';
    $lang['Adr_admin_experience_posting_reply']='Points d\'exp�rience gagn�s pour une r�ponse';
    $lang['Adr_admin_experience_posting_edit']='Points d\'exp�rience gagn�s pour une �dition de message';
    $lang['Adr_skill_trading_power']='Pourcentage de modifications de prix par tranche de niveaux';
    $lang['Adr_skill_thief_failure_amend']='Amende minimale pour les utilisateurs pris en train de voler';
    $lang['Adr_skill_thief_failure_amend_explain']='L\'amende est bas�e sur le prix de l\'objet vol� : si ce dernier est inf�rieur � l\'amende minimale , c\'est cette derni�re qui sera inflig�e . Laissez cette valeur nulle pour ne pas infliger d\'amende';
    $lang['Adr_fail_steal_punishment']='Que faire si l\'utilisateur ne peut pas payer l\'amende ?';
    $lang['Adr_fail_steal_punishment0']='Ne pas ingliger l\'amende';
    $lang['Adr_fail_steal_punishment1']='Prendre tous les points';
    $lang['Adr_fail_steal_punishment2']='Emprisonnement';
    $lang['Adr_fail_steal_type']='Type d\'emprisonnement dans ce cas';
    $lang['Adr_fail_steal_type0']='Bloquer l\'acc�s au forum';
    $lang['Adr_fail_steal_type1']='Interdire les nouveaux messages';
    $lang['Adr_fail_steal_type2']='Interdire la lecture des messages';
    $lang['Adr_fail_steal_time']='Nombre d\'heures d\'emprisonnement';

    $lang['Adr_admin_regen_enable']='Activer la limite pour les combats & les comp�tences';
    $lang['Adr_battle_item_power_level']='Limiter l\'utilisation des objets des combats';
    $lang['Adr_battle_item_power_level_explain']='Si vous cochez cette option , les utilisateurs ne pourront utiliser en combat que les objets dont la puissance est inf�rieure ou �gale � leur niveau';
    $lang['Adr_town_training_grounds_admin']='Entrainement';
    $lang['Adr_town_training_grounds_admin_change_allow']='Autoriser le changement de classe';
    $lang['Adr_town_training_grounds_admin_change_cost']='Co�t du changement de classe';
    $lang['Adr_town_training_grounds_admin_skill_cost']='Co�t de l\'entrainement d\'une comp�tence ( par niveau )';
    $lang['Adr_town_training_grounds_admin_charac_cost']='Co�t de l\'entrainement d\'une caract�ristique ( par niveau )';
    $lang['Adr_town_training_grounds_admin_upgrade_cost']='Co�t de la promotion d\'une classe';

    $lang['Adr_use_cache']='Utilisez le syst�me de cache';
    $lang['Adr_use_cache_explain']='Le syst�me de cache permet de r�duire le nombre de requ�tes SQL . Pour pouvoir l\'utiliser , vous devez faire un CHMOD 666 sur les fichiers suivants :';
    $lang['Adr_display_profile']='Affichage dans les profils';
    $lang['Adr_display_profile_allow']='Activer l\'affichage des informations du personnage dans le profil';
    $lang['Adr_display_topics']='Affichage dans les posts';
    $lang['Adr_display_topics_level']='Afficher le niveau';
    $lang['Adr_display_topics_text']='En tant que texte';
    $lang['Adr_display_topics_pic']='En tant qu\'image';
    $lang['Adr_display_topics_class']='Afficher la classe';
    $lang['Adr_display_topics_race']='Afficher la race';
    $lang['Adr_display_topics_element']='Afficher l\'�l�ment';
    $lang['Adr_display_topics_alignment']='Afficher l\'alignement';
    $lang['Adr_display_topics_pvp']='Afficher un lien JcJ';
    $lang['Adr_display_topics_rank']='Afficher le rang RPG';
    $lang['Adr_display_topics_battle_stats']='Afficher les stats';
    $lang['Adr_next_level_penalty']='P�nalit� � la mont�e de niveau';
    $lang['Adr_next_level_penalty_explain']='Pourcentage d\'exp�rience suppl�mentaire requise par niveau pour la mont�e de niveau ( au plus un personnage est de haut niveau , au plus il a besoin d\'exp�rience pour prendre un autre niveau ) ';
    //GUILD
    $lang['Adr_guilds_title']='Configuration des guildes';
    $lang['Adr_guilds_overall_allow']='Activer les guildes OUI ou NON';
    $lang['Adr_guilds_create_allow']='Activer la cr�ation des guildes OUI ou NON';
    $lang['Adr_guilds_join_allow']='Activer l\'acc�s aux guildes OUI ou NON';
    $lang['Adr_guilds_create_level']='Niveau minimum pour cr�er une guilde';
    $lang['Adr_guilds_create_money']='Co�t de cr�ation d\'une guilde';
    $lang['On']='Oui';
    $lang['Off']='Non';
    //GUILD end
    $lang['Adr_admin_regen_period_title']='Limites des Combats & Utilisation des Comp�tences';
    $lang['Adr_admin_regen_period']='P�riode de r�g�n�ration par combat et comp�tence ( en jours )';
    $lang['Adr_admin_battle_limit']='Nombres de combats autoris�s par jour';
    $lang['Adr_admin_skill_limit']='Nombre d\'entrainement maximum r�ussi des caract�ristiques par jour';
    $lang['Adr_admin_trading_limit']='Nombre maximum de vente r�ussie par jour';
    $lang['Adr_admin_thief_limit']='Nombre maximum de vols r�ussis par jour';
    $lang['Adr_admin_enable_rpg_title']='Activer / D�sactiver le RPG';
    $lang['Adr_admin_enable_rpg']='Mettre le mod RPG entier sur on / off';
    $lang['Adr_admin_posts']='Activer le nombre de postes minimal n�cessaire � la cr�ation d\'un personnage:';
    $lang['Adr_admin_posts_min']='Nombre de postes minimum pour cr�er un personnage:';

    $lang['Adr_pvp']='Combats entre utilisateurs';
    $lang['Adr_display_topics_link']='Afficher le lien vers le personnage';
    $lang['Adr_pvp_enable_pvp']='Autoriser les combats entre joueurs';
    $lang['Adr_pvp_defies_max']='Nombre maximal de d�fis simultan�s autoris�s';
    $lang['Adr_pvp_stats_exp_modifier_explain']='D�finit un pourcentage de diff�rence de l\'exp�rience gagn�e pour chaque degr� de diff�rence entre les deux utilisateurs';
    $lang['Adr_pvp_stats_reward_modifier_explain']='D�finit un pourcentage de diff�rence de la r�compense gagn�e pour chaque degr� de diff�rence entre les deux utilisateurs';
}

if ( defined ('IN_ADR_SHOPS'))
{
    //ZONE
    $lang['Adr_item_zone_choose']='Dans quel zone apparait cet objet ?';
    $lang['Adr_items_zone_title']='Zone';
    //ZONE end
    $lang['Adr_shops_item_title']='Gestion des objets du magasin du forum';
    $lang['Adr_shops_item_title_explain']='Ici vous pouvez g�rer les objets du magasin du forum';
    $lang['Adr_shops_item_add']='Ajouter un objet';
    $lang['Adr_shops_categories']='Cat�gorie';
    $lang['Adr_shops_item_add_title']='Ajout et �dition d\'objets';
    $lang['Adr_shops_item_add_title_explain']='Ici vous pouvez ajouter ou �diter les objets du magasin du forum';
    $lang['Adr_items_image_explain']='L\'image correspondante doit �tre plac�e dans le r�pertoire /adr/images/items/';
    $lang['Adr_shop_image_explain']='L\'image correspondante doit �tre plac�e dans le r�pertoire /adr/images/store/';
    $lang['Adr_shops_items_successful_edited']='Objet mis � jour avec succ�s';
    $lang['Adr_shops_items_successful_added']='Objet ajout� au magasin des forums avec succ�s';
    $lang['Adr_shops_items_successful_deleted']='Objet supprim� du magasin des forums avec succ�s';
    $lang['Adr_items_price_explain']='Si vous laissez ce champ vide , le prix utilis� sera le prix id�al de l\'objet bas� sur ses caract�ristiques ( recommand� ) ';
    $lang['Adr_items_duration_max']='Dur�e maximale';
    $lang['Adr_item_max_skill']='Puissance maximum pour l\'utilisation de la Forge:';
    $lang['Adr_item_sell_back']='Revendre avec un pourcentage de p�nalit�:';
    $lang['Adr_item_sell_back_explain']='Ceci est le pourcentage de p�nalit� sur le prix pour un magasin de forum standard pour les objets quand ils sont revendus au magasin du forum. Ce calcul est fait avant de prendre en conte la qualit� de l\'objet, la durabilit� et la comp�tence marchandage dans le compte pour le prix de revente total.';
    $lang['Adr_item_sell_back_title']='Resell';
    $lang['Adr_item_sell_back_title']='Revendre';
    $lang['Adr_items_price_explain']='Si vous laissez ce champ vide, le prix id�al sera calcul� et utilis� (recommand�)';
    $lang['Adr_shops_item_element']='Type d\'�l�ment: (armes/sorts seulement)';
    $lang['Adr_shops_item_element_str']='Pourcentage donn� contre un �l�ment oppos� plus faible:';
    $lang['Adr_shops_item_element_same']='Pourcentage donn� contre le m�me �l�ment:';
    $lang['Adr_shops_item_element_weak']='Pourcentage donn� contre un �l�ment oppos� plus fort:';

    $lang['Adr_items_store']='Ajouter au type de magasin:';
    $lang['Adr_store_title']='Cat�gories de magasin du forum';
    $lang['Adr_store_title_explain']='Cr�er & �diter les categories de magasins:';
    $lang['Adr_store_name']='Nom du magasin:';
    $lang['Adr_store_desc']='Description:';
    $lang['Adr_store_status']='Status:';
    $lang['Adr_store_sales']='Status des ventes:';
    $lang['Adr_store_auth']='Faire un objet "que pour les admins":';
    $lang['Adr_store_no_sell']='Cocher la case pour emp�cher les joueurs de vendre cet objet';
    $lang['Adr_store_view']='Rendre les objets du magasin impossible � acheter ( seulement visibles )';
    $lang['Adr_store_view_title']='Voir:';
    $lang['Adr_store_cat_add']='Ajouter une nouvelle Categorie';
    $lang['Adr_store_status_closed']='Ferm�';
    $lang['Adr_store_status_open']='Ouvert';
    $lang['Adr_store_sales_on']='Ventes ON';
    $lang['Adr_store_sales_off']='Ventes OFF';
    $lang['Adr_store_auth_all']='Tout';
    $lang['Adr_store_auth_admin']='Admin seulement';
    $lang['Adr_store_open']='Ouvert';
    $lang['Adr_store_closed']='Ferm�';
    $lang['Adr_store_normal']='Normal';
    $lang['Adr_store_sale']='Vente  ';
    $lang['Adr_store_all']='Tous les membres';
    $lang['Adr_store_admin']='Admin Seulement';
    $lang['Adr_store_image_explain']='L\'image doit �tre plac�e dans le r�pertoire /adr/images/store/';
    $lang['Adr_store_cats_successful_deleted']='Magasin supprim� avec succ�s';
    $lang['Adr_store_cats_successful_edit']='Magasin mis � jour avec succ�s';
    $lang['Adr_store_cats_successful_new']='Magasin cr�er avec succ�s';
}

if ( defined ('IN_ADR_VAULT'))
{
    $lang['Adr_vault_update_error']='Erreur durant la mise � jour de la configuration de la tr�sorerie';
    $lang['Adr_vault_updated_return_settings']='La configuration de la tr�sorerie a �t� mise � jour avec succ�s . <br /><br />Cliquez %sIci%s pour retourner � la configuration de la tr�sorerie';
    $lang['Adr_vault_settings']='Configuration de la tr�sorerie';
    $lang['Adr_vault_settings_explain']='Ici vous pouvez configurer les options de la tr�sorerie';
    $lang['Adr_vault_use']='Activer la tr�sorerie';
    $lang['Adr_vault_settings_name']='Nom de la tr�sorerie';
    $lang['Adr_vault_interests_rate']='Taux d\'inter�ts';
    $lang['Adr_vault_interests_rate_explain']='Pourcentage de la somme mise dans la tr�sorerie gagn�e par l\'utilisateur lors de l\'expiration du temps de paiement des int�rets';
    $lang['Adr_vault_interests_time']='Temps de paiement des inter�ts';
    $lang['Adr_vault_interests_time_explain']='Intervalle de temps entre deux versement des inter�ts ( en secondes ).';
    $lang['Adr_vault_loan_use']='Activer le syst�me de pr�ts';
    $lang['Adr_vault_loan_interests']='Taux d\'inter�ts des pr�ts';
    $lang['Adr_vault_loan_interests_explain']='Pourcentage de la somme emprunt�e que l\'utilisateur devra rembourser';
    $lang['Adr_vault_loan_interests_time']='Temps de paiement du pr�t';
    $lang['Adr_vault_loan_interests_time_explain']='Temps au bout duquel l\'utilisateur ayant fait un emprunt devra le rembourser ( en secondes ).';
    $lang['Adr_vault_max_sum']='Somme maximale';
    $lang['Adr_vault_max_sum_explain']='Montant maximum que l\'utilisateur peut emprunter';
    $lang['Adr_vault_requirements']='Pr�-requis';
    $lang['Adr_vault_requirements_explain']='Nombre de messages minimum que l\'utilisateur doit avoir pour pouvoir faire un pr�t';
    $lang['Adr_vault_attack_use']='Activer le syst�me d\'attaque de la tr�sorerie';
    $lang['Adr_vault_time_explain']='Soit ';
    $lang['Adr_vault_exchange_settings']='Configuration de la bourse';
    $lang['Adr_vault_exchange_settings_explain']='Ici vous pouvez configurer le syst�me de bourse , ainsi qu\'ajouter/supprimer/�diter des actions';
    $lang['Adr_vault_exchange_use']='Activer la bourse';
    $lang['Adr_vault_exchange_min']='Pourcentage minimal de changements';
    $lang['Adr_vault_exchange_min_explain']='Ceci repr�sente - en pourcentage - la variation minimale du cours des actions';
    $lang['Adr_vault_exchange_max']='Pourcentage maximal de changements';
    $lang['Adr_vault_exchange_max_explain']='Ceci repr�sente - en pourcentage - la variation maximale du cours des actions';
    $lang['Adr_vault_exchange_time']='Intervalle entre les variations';
    $lang['Adr_vault_exchange_time_explain']='Ceci repr�sente le temps en secondes entre les variations de valeurs des actions';
    $lang['Adr_vault_exchange_updated_return_settings']='La configuration de la bourse a �t� mise � jour avec succ�s . <br /><br />Cliquez %sIci%s pour retourner � la configuration de la bourse';
    $lang['Adr_vault_exchange_actions']='Actions disponibles';
    $lang['Adr_vault_exchange_actions_name']='Nom';
    $lang['Adr_vault_exchange_actions_desc']='Description';
    $lang['Adr_vault_exchange_actions_amount']='Valeur';
    $lang['Adr_vault_exchange_action']='Action';
    $lang['Adr_vault_exchange_edit']='Editer';
    $lang['Adr_vault_exchange_delete']='Supprimer';
    $lang['Adr_vault_exchange_actions_add']='Ajouter une action';
    $lang['Adr_vault_exchange_settings_add']='Ajouter une action';
    $lang['Adr_vault_exchange_settings_explain_add']='Ce formulaire vous permet d\'ajouter une action dans la bourse';
    $lang['Adr_vault_exchange_actions_add']='Ajout d\'une action';
    $lang['Adr_vault_exchange_settings_edit']='Editer une action';
    $lang['Adr_vault_exchange_settings_explain_edit']='Ce formulaire vous permet d\'�diter une action de la bourse';
    $lang['Adr_vault_exchange_actions_edit']='Edition d\'une action';
    $lang['Adr_vault_exchange_added_return_settings']='La nouvelle action a �t� ajout�e avec succ�s . <br /><br />Cliquez %sIci%s pour retourner � la configuration de la bourse';
    $lang['Adr_vault_exchange_edited_return_settings']='Cette action a �t� �dit�e avec succ�s . <br /><br />Cliquez %sIci%s pour retourner � la configuration de la bourse';
    $lang['Adr_vault_exchange_deleted_return_settings']='Cette action a �t� supprim�e avec succ�s . <br /><br />Cliquez %sIci%s pour retourner � la configuration de la bourse';
    $lang['Adr_vault_users_title']='Gestion des possesseurs de compte';
    $lang['Adr_vault_users_title_explain']='Ici vous pouvez �diter toutes les informations relatives aux utilisateurs de la tr�sorerie';
    $lang['Adr_vault_user_select']='S�lectionnez un utilisateur';
    $lang['Adr_vault_user_select_list']='Depuis cette liste';
    $lang['Adr_vault_user_select_input']='Ou en entrant son pseudo';
    $lang['Adr_vault_user']='Utilisateur';
    $lang['Adr_vault_user_account']='Compte';
    $lang['Adr_vault_user_on_account']='Dans le compte';
    $lang['Adr_vault_no_loan']='Aucun emprunt effectu�';
    $lang['Adr_vault_user_loan']='Somme emprunt�e';
    $lang['Adr_vault_user_pay_off']='Rembourser le pr�t de cet utilisateur';
    $lang['Adr_vault_user_preferences']='Preferences';
    $lang['Adr_vault_user_protect_account']='Compte prot�g�';
    $lang['Adr_vault_user_protect_loan']='Emprunt prot�g�';
    $lang['Adr_vault_users_updated_return_settings']='Edition de l\'utilisateur effectu�e avec succ�s . <br /><br /> Cliquez %sIci%s pour revenir � l\'�dition des utilisateurs';
}

if ( defined ('IN_ADR_BATTLE'))
{
    //ZONE
    $lang['Adr_monster_message_yes']='Activ�';
    $lang['Adr_monster_message_no']='Desactiv�';
    $lang['Adr_monsters_zone_title']='Zone';
    $lang['Adr_monsters_seasons_title']='Saison';
    $lang['Adr_monsters_weather_title']='Temps';
    $lang['Adr_monsters_item_title']='Objet';
    $lang['Adr_monsters_message_title']='Message';
    $lang['Adr_monster_item_nothing']='Pas d\'objet';
    $lang['Adr_monster_item_choose']='Choisir un objet que le monstre peut donner a la fin du combat';
    $lang['Adr_monster_message_enable']='Activer le message du monstre ?';
    $lang['Adr_monster_message_choose']='Mettez ici le message que le monstre peut donner';
    $lang['Adr_monster_season_choose']='Apparait pour quelle saison ?';
    $lang['Adr_monster_weather_choose']='Apparait � quel temps ?';
    $lang['Adr_monster_zone_choose']='Apparait dans quelle zone ?';
    $lang['Adr_Season_all']='Toutes les saisons';
    $lang['Adr_Season_1']='Printemps';
    $lang['Adr_Season_2']='Et�';
    $lang['Adr_Season_3']='Automne';
    $lang['Adr_Season_4']='Hiver';
    $lang['Adr_Weather_all']='Tous les temps';
    $lang['Adr_Weather_1']='Soleil';
    $lang['Adr_Weather_2']='Nuit';
    $lang['Adr_Weather_3']='Nuages';
    $lang['Adr_Weather_4']='Pluie';
    $lang['Adr_Weather_5']='Eclaircie';
    $lang['Adr_Weather_6']='Neige';
    $lang['Adr_monster_all_zones']='Toutes les zones';
    //ZONE end
    $lang['Adr_battle_settings']='Configuration du syst�me de combats';
    $lang['Adr_battle_settings_explain']='Ici vous pouvez param�trer les options du syst�me de combat';
    $lang['Adr_battle_use']='Activer le syst�me de combat';
    $lang['Adr_battle_monsters']='Combats contre les monstres';
    $lang['Adr_battle_monsters_stats_modifier']='Modification des caract�ristiques en fonction de la diff�rence de niveaux';
    $lang['Adr_battle_monsters_stats_modifier_explain']='D�finit un pourcentage de diff�rence des statistiques pour chaque degr� de diff�rence entre le niveau de l\'utilisateur et du monstre';
    $lang['Adr_battle_monster_stats_exp_min']='Exp�rience minimale gagn�e en cas de combat victorieux';
    $lang['Adr_battle_monster_stats_exp_max']='Exp�rience maximale gagn�e en cas de combat victorieux';
    $lang['Adr_battle_monster_stats_exp_modifier']='Modification de l\'exp�rience gagn�e en fonction de la diff�rence de niveaux';
    $lang['Adr_battle_monster_stats_exp_modifier_explain']='D�finit un pourcentage de diff�rence de l\'exp�rience gagn�e pour chaque degr� de diff�rence entre le niveau de l\'utilisateur et du monstre';
    $lang['Adr_battle_monster_stats_sp_modifier']='Modification des Spirit Points (SP) gagn� selon la diff�rence du niveau';
    $lang['Adr_battle_monster_stats_sp_modifier_explain']='D�finissez une diff�rence de pourcentage gagn�e pour chaque degr� de diff�rence entre le niveau de l\'utilisateur et le niveau du monstre ';
    $lang['Adr_battle_monster_stats_reward_min']='R�compense minimale gagn�e en cas de combat victorieux';
    $lang['Adr_battle_monster_stats_reward_max']='R�compense maximale gagn�e en cas de combat victorieux';
    $lang['Adr_battle_monster_stats_reward_modifier']='Modification de la r�compense gagn�e en fonction de la diff�rence de niveaux';
    $lang['Adr_battle_monster_stats_reward_modifier_explain']='D�finit un pourcentage de diff�rence de la r�compense gagn�e pour chaque degr� de diff�rence entre le niveau de l\'utilisateur et du monstre';
    $lang['Adr_admin_monsters']='Monstres';
    $lang['Adr_admin_monsters_explain']='Ici vous pouvez ajouter , �diter ou supprimer les monstres du syt�me de combat';
    $lang['Adr_monsters_name']='Nom du monstre';
    $lang['Adr_monsters_image']='Image';
    $lang['Adr_monsters_level']='Niveau';
    $lang['Adr_admin_monsters_base_hp']='Points de vie';
    $lang['Adr_admin_monsters_base_def']='D�fense';
    $lang['Adr_admin_monsters_att']='Attaque';
    $lang['Adr_admin_monsters_element']='Element';
    $lang['Adr_admin_monsters_ma']='Attaque magique';
    $lang['Adr_admin_monsters_md']='Resistance � la magie';
    $lang['Adr_admin_monsters_base_mp']='Points de mana';
    $lang['Adr_admin_monsters_base_mp_power']='Puissance du sort';
    $lang['Adr_admin_monsters_base_sp']='Spirit Points (SP)';
    $lang['Adr_admin_monsters_custom_spell']='Nom de sort personnalis�';
    $lang['Adr_admin_monsters_custom_spell_explain']='Entrez un nom de monstre personnalis� pour ce monstre pour qu\'il l\'utilise pendant le combat. Laisser ce champ vide fera utiliser un nom par d�fault.';
    $lang['Adr_admin_monsters_thief_skill']='Niveau de comp�tence de vol';
    $lang['Adr_monsters_add']='Ajouter un monstre';
    $lang['Adr_monsters_add_edit']='Ajout et �dition de monstres';
    $lang['Adr_monsters_add_edit_explain']='Ici vous pouvez ajouter et �diter des monstres du syst�me de combat';
    $lang['Adr_monsters_image_explain']='L\'image correspondante doit �tre plac�e dans le r�pertoire /adr/images/monsters/';
    $lang['Adr_monster_successful_added']='Nouveau monstre ajout� avec succ�s';
    $lang['Adr_monster_successful_deleted']='Monstre effac� avec succ�s';
    $lang['Adr_monster_successful_edited']='Monstre �dit� avec succ�s';
    $lang['Adr_battle_thief']='R�glages sur le vol des monstres';
    $lang['Adr_battle_thief_enable']='Activer / D�sactiver la possibilit� pour un monstre de voler';
    $lang['Adr_battle_thief_points']='Pourcentage de points � voler au membre';
    $lang['Adr_battle_disabled']='Le syst�me de combat n\'est pas disponible actuellemnt . Veuillez r�essayer plus tard';
}

if ( defined ('IN_ADR_TOOLS'))
{
    $lang['Adr_admin_tools_cache_settings']='Gestion du cache';
    $lang['Adr_admin_tools_cache_settings_explain']='Synchronisez le cache si vous constatez des d�calages entre votre configuration et son application';
    $lang['Adr_admin_tools_update_cache']='Mettre le cache � jour';
    $lang['Adr_admin_tools_cache_updated']='Mise � jour du cache effectu�e avec succ�s';
    $lang['Adr_admin_tools_convertors_settings']='Convertisseurs';
    $lang['Adr_admin_tools_convertors_settings_explain']='A partir de ce formulaire , vous pouvez convertir les donn�es d\'autres mods vers ADR';
    $lang['Adr_admin_tools_convertors_update']='Mise � jour';
    $lang['Adr_admin_tools_convertors_update_items']='Convertir les objets du mod SHOP de Zarath vers ADR';
    $lang['Adr_admin_tools_convertors_update_bank']='Convertir les comptes du mod BANK de Zarath vers ADR';
    $lang['Adr_admin_tools_convertors_delete']='Supprimer';
    $lang['Adr_admin_tools_convertors_delete_item']='Supprimer les alt�rations de la base de donn�es du mod SHOP de Zarath';
    $lang['Adr_admin_tools_convertors_delete_vault']='Supprimer les alt�rations de la base de donn�es du mod VAULT de Dr DLP';
    $lang['Adr_admin_tools_convertors_delete_bank']='Supprimer les alt�rations de la base de donn�es du mod BANK de Zarath';
    $lang['Adr_admin_tools_convertors_bank_updated']='Conversion du mod BANK effectu�e avec succ�s';
    $lang['Adr_admin_tools_convertors_bank_deleted']='Alt�rations du mod BANK supprim�es avec succ�s';
    $lang['Adr_admin_users_updated']='Conversion du mod RPG STATS effectu�e avec succ�s';
    $lang['Adr_admin_tools_convertors_update_users']='Convertir les personnages du mod RPG STATS de Moogie vers ADR';
    $lang['Adr_admin_tools_convertors_delete_rpg_stats']='Supprimer les alt�rations de la base de donn�es du mod RPG STATS de Moogie';
    $lang['Adr_admin_tools_convertors_update_vault']='Convertir les comptes du mod VAULT de Dr DLP vers ADR';
    $lang['Adr_admin_tools_convertors_vault_deleted']='Alt�rations de la base de donn�es du mod VAULT supprim�es avec succ�s';
    $lang['Adr_admin_tools_convertors_rpg_stats_deleted']='Alt�rations de la base de donn�es du mod RPG STATS supprim�es avec succ�s';
    $lang['Adr_admin_tools_convertors_shop_deleted']='Alt�rations de la base de donn�es du mod SHOP supprim�es avec succ�s';
    $lang['Adr_admin_tools_convertors_vault_updated']='Conversion du mod VAULT effectu�e avec succ�s';
    $lang['Adr_admin_tools_convertors_shop_updated']='Conversion du mod SHOP effectu�e avec succ�s';
    $lang['Adr_admin_tools_convertors_jail_updated']='Conversion du mod JAIL effectu�e avec succ�s';
    $lang['Adr_admin_tools_convertors_update_jail']='Convertir les comptes du mod JAIL de Dr DLP vers ADR';
    $lang['Adr_admin_tools_convertors_jail_deleted']='Alt�rations du mod JAIL supprim�es avec succ�s';
    $lang['Adr_admin_tools_convertors_delete_jail']='Supprimer les alt�rations de la base de donn�es du mod JAIL de Dr DLP';
    $lang['Adr_admin_tools_convertors_warnings']='ATTENTION !! Toutes ces op�rations sont irr�versibles ! Soyez s�rs de savoir ce que vous faites avant de vous en servir .<br /><br />Faites une sauvegarde compl�te de votre base de donn�es avant de lancer ces op�rations .<br /><br />L\'auteur du mod n\'est en aucun cas responsable des erreurs qui pourraient survenir suite � la mauvaise utilisation de ces outils .';
    $lang['Adr_admin_tools_resync_items']='Resynchronisation du prix des objets';
    $lang['Adr_admin_tools_resync_items_explain']='Ceci vous permet de recalculer le prix des objets du magasin des forums � leur juste valeur , c\'est � dire bas�e sur vos param�tres de modificateurs de prix par le niveau , le type et la qualit� .';
    $lang['Adr_admin_tools_resync_items_action']='Recalculer les prix';
    $lang['Adr_admin_tools_items_updated']='Prix recalcul�s avec succ�s';
    $lang['Adr_admin_tools_armaggedon']='Remise � z�ro des magasins , objets et personnages';
    $lang['Adr_admin_tools_armaggedon_explain']='En cliquant sur le bouton ci-dessous , vous pouvez effacer tous les objets , magasins et personnages cr��s par vos utilisateurs . <br /><b>Cette op�ration est irr�versible !</b> ';
    $lang['Adr_admin_tools_armaggedon_characters']='Supprimer seulement tous les personnages ADR';
    $lang['Adr_admin_tools_armaggedon_zero_dura']='Nettoyer les tables des objets ayant 0 de durabilit�';
    $lang['Adr_admin_tools_armaggedon_shops']='Supprimer tous les magasins des utilisateurs seulement';
    $lang['Adr_admin_tools_armaggedon_user_items']='Supprimer tous les objets des utilisateurs seulement';
    $lang['Adr_admin_tools_armaggedon_shops_items']='Supprimer tous les objets des magasins du forum seulement';
    $lang['Adr_admin_tools_armaggedon_done']='Suppression effectu�e avec succ�s';
    $lang['Adr_admin_tools_armaggedon_dura']='Objets avec 0 de durabilit�s supprim�s avec succ�s';
    $lang['Adr_admin_tools_armaggedon_dura_done']='Tous les objets des magasins ont �t� supprim�s avec succ�s';
}

if ( defined ('IN_ADR_USERS'))
{
    $lang['Adr_admin_character_inventory']='Selectioner l\'inventaire d\'un membre';
    $lang['Adr_admin_character_delete']='Supprimer ce personnage - Attention , cette op�ration est irr�versible !';
    $lang['Adr_admin_character_edit']='Valider les modifications';
    $lang['Adr_admin_character_charac']='Caract�ristiques';
    $lang['Adr_admin_character_edited']='Personnage �dit� avec succ�s';
    $lang['Adr_admin_character_deleted']='Personnage supprim� avec succ�s';
    $lang['Adr_admin_character_lack']='Cet utilisateur n\'a pas cr�e de personnage';
    $lang['Adr_user_admin']='Gestion des personnages';
    $lang['Adr_user_admin_explain']='Ici vous pouvez �diter ou supprimer les personnages du mod ADR';
    $lang['Adr_user_battle_skills']='Limites des Combats & Comp�tences';
    $lang['Adr_user_battle_limit']='Nombre de combats restants:';
    $lang['Adr_user_skill_limit']='Nombre d\'utilisation de comp�tences restant:';
    $lang['Adr_user_trading_limit']='Nombre d\'utilisation de la comp�tence marchandage restant:';
    $lang['Adr_user_thief_limit']='Nombre d\'utilisation de la comp�tence vol restant:';
    }

    if ( defined ('IN_ADR_TRACKER'))
    {
    $lang['Adr_tracker_title']='"Track" les objets ADR';
    $lang['Adr_tracker_text']='Ici vous pouvez voir les achats , ventes , donations et vols';
    $lang['Adr_tracker_name']='Membres:';
    $lang['Adr_tracker_item']='Objets:';
    $lang['Adr_tracker_from']='Du membre:';
    $lang['Adr_tracker_shop']='Nom du magasin:';
    $lang['Adr_tracker_action']='Action:';
    $lang['Adr_tracker_date']='Date:';
    $lang['Adr_tracker_clear']='Vider la liste';
}
if ( defined ('IN_ADR_JOB'))
{
    $lang['Adr_job_successful_added']='Metier ajout� avec succ�s';
    $lang['Adr_job_successful_updated']='Mise � jour accomplie avec succ�s';
    $lang['Adr_job_successful_deleted']='Metier supprim� avec succ�s';
    $lang['Adr_admin_job_add']='Ajouter un metier';
    $lang['Adr_admin_job_no_item_reward']='Pas de selection d\'objet';
    $lang['Adr_admin_job_all_races']='Toutes les races';
    $lang['Adr_admin_job_all_classes']='Toutes les classes';
    $lang['Adr_admin_job_all_alignments']='Tous les alignments';
    $lang['Adr_admin_job_name']='Nom du metier:';
    $lang['Adr_admin_job_desc']='Description:';
    $lang['Adr_admin_job_img']='Image:';
    $lang['Adr_admin_job_level']='Niveau requit:';
    $lang['Adr_admin_job_race']='Race requise:';
    $lang['Adr_admin_job_class']='Classe requise:';
    $lang['Adr_admin_job_alignment']='Alignement requit:';
    $lang['Adr_admin_job_salary']='Salaire: (gagn� chaque jour)';
    $lang['Adr_admin_job_exp']='Experience: (gagn� � la fin du metier)';
    $lang['Adr_admin_job_item_reward']='R�compense: (gagn� � la fin du metier)';
    $lang['Adr_admin_job_duration']='Dur�e du m�tier: (en jours)';
    $lang['Adr_admin_job_slots']='Nombre de places disponibles:';
    $lang['Adr_admin_job_slots_max']='Nombre maximum de places disponibles:';
    $lang['Adr_admin_job_auth_level']='Niveau d\'authorisation:';
    $lang['Adr_admin_job_title']='Metiers';
    $lang['Adr_admin_job_enable']='Activers les metiers de ADR';
    $lang['Adr_admin_job_cron_time']='Dur�e entre les diff�rents payement';
    $lang['Adr_admin_job_sp_reward']='Points de spiritualit� (SP) gagn�: (gagn� � la fin du m�tier)';
}

if ( defined ('IN_ADR_TEMPLE'))
{
    $lang['Adr_temple_title']='Configuration du don d\'item du temple';
    $lang['Adr_temple_title_explain']='Ici vous pouvez configurer les items disponible apres les dons au temple';
    $lang['Adr_temple_chance']='Chance de gagner';
    $lang['Adr_temple_chance_explain']='Placez ceci � la chance de l\'utilisateur recevoir cet article lorsqu\'il re�oit une r�compense du temple.<br />R�gler celui ci � \'Exceptionellement Rare\' demande au membre de donner au minimum la somme pr�cider dans le panneau \'Temple\' de l\ACP pour �tre accessible';
    $lang['Adr_temple_chance_common']='Commun';
    $lang['Adr_temple_chance_uncommon']='Non commun';
    $lang['Adr_temple_chance_rare']='Rare';
    $lang['Adr_temple_chance_very_rare']='Tr�s rare';
    $lang['Adr_temple_chance_super_rare']='Exceptionellement Rare';
    $lang['Adr_temple_min_amount']='Don minimun pour gagner un item:';
    $lang['Adr_temple_min_amount_explain']='Il s\'agit du minimum que doit donner un membre pour avoir une chance d\'avoir un item. <br />Ce n\'est pas le don minimum. Un membre peut donner plus ou moins que cette valeur.';
    $lang['Adr_temple_win_chance']='Chance de gagner un item:';
    $lang['Adr_temple_win_chance_explain']='Quand un utilisateur donne le minimum requis, c\'est le pourcentage de chance de gagner r�ellement n\'importe quel type d\'article';
    $lang['Adr_temple_chance_increase']='Seuil de chance:';
    $lang['Adr_temple_chance_increase_explain']='C\'est le seuil d\'argent qui permet d\'augmenter la chance de recevoir un item.  Par exemple placez le seuil � 100 points et si l\'utilisateur donne 500 points ils aura 5% plus de chance de recevoir un item';
    $lang['Adr_temple_super_rare']='Seuil de chance pour un objet super rare:';
    $lang['Adr_temple_super_rare_explain']='C\'est le don minimum exig�e de l\'utilisateur pour avoir une chance � recevoir un item particuli�rement rare.<br /><b>Note:</b> Ceci ne joue pas sur la chance pour l\'utilisateur de recevoir un article tr�s rare';
    $lang['Adr_temple_title']='Donation au temple';
}

if ( defined ('IN_ADR_BEGGAR'))
{
    $lang['Adr_beggar_title']='Configuration du don d\'item du mendiant';
    $lang['Adr_beggar_title_explain']='Ici vous pouvez configurer les items disponible apres les dons au mendiant';
    $lang['Adr_beggar_chance']='Chance de gagner';
    $lang['Adr_beggar_chance_explain']='Placez ceci � la chance de l\'utilisateur recevoir cet article lorsqu\'il re�oit une r�compense du mendiant.<br />R�gler celui ci � \'Exceptionellement Rare\' demande au membre de donner au minimum la somme pr�cider dans le panneau \'memdiant\' de l\ACP pour �tre accessible';
    $lang['Adr_beggar_chance_common']='Commun';
    $lang['Adr_beggar_chance_uncommon']='Non commun';
    $lang['Adr_beggar_chance_rare']='Rare';
    $lang['Adr_beggar_chance_very_rare']='Tr�s rare';
    $lang['Adr_beggar_chance_super_rare']='Exceptionellement Rare';
    $lang['Adr_beggar_min_amount']='Don minimun pour gagner un item:';
    $lang['Adr_beggar_min_amount_explain']='Il s\'agit du minimum que doit donner un membre pour avoir une chance d\'avoir un item. <br />Ce n\'est pas le don minimum. Un membre peut donner plus ou moins que cette valeur.';
    $lang['Adr_beggar_win_chance']='Chance de gagner un item:';
    $lang['Adr_beggar_win_chance_explain']='Quand un utilisateur donne le minimum requis, c\'est le pourcentage de chance de gagner r�ellement n\'importe quel type d\'article';
    $lang['Adr_beggar_chance_increase']='Seuil de chance:';
    $lang['Adr_beggar_chance_increase_explain']='C\'est le seuil d\'argent qui permet d\'augmenter la chance de recevoir un item.  Par exemple placez le seuil � 100 points et si l\'utilisateur donne 500 points ils aura 5% plus de chance de recevoir un item';
    $lang['Adr_beggar_super_rare']='Seuil de chance pour un objet super rare:';
    $lang['Adr_beggar_super_rare_explain']='C\'est le don minimum exig�e de l\'utilisateur pour avoir une chance � recevoir un item particuli�rement rare.<br /><b>Note:</b> Ceci ne joue pas sur la chance pour l\'utilisateur de recevoir un article tr�s rare';
    $lang['Adr_beggar_title']='Donation au mendiant';
}

if ( defined ('IN_ADR_LAKE'))
{
    $lang['Adr_lake_title']='Configuration du don d\'item du Lac';
    $lang['Adr_lake_title_explain']='Ici vous pouvez configurer les items disponible apres les dons au Lac';
    $lang['Adr_lake_chance']='Chance de gagner';
    $lang['Adr_lake_chance_explain']='Placez ceci � la chance de l\'utilisateur recevoir cet article lorsqu\'il re�oit une r�compense du Lac.<br />R�gler celui ci � \'Exceptionellement Rare\' demande au membre de donner au minimum la somme pr�cider dans le panneau \'Lac\' de l\ACP pour �tre accessible';
    $lang['Adr_lake_chance_common']='Commun';
    $lang['Adr_lake_chance_uncommon']='Non commun';
    $lang['Adr_lake_chance_rare']='Rare';
    $lang['Adr_lake_chance_very_rare']='Tr�s Rare';
    $lang['Adr_lake_chance_super_rare']='Exceptionellement Rare';
    $lang['Adr_lake_min_amount']='Don minimun pour gagner un item:';
    $lang['Adr_lake_min_amount_explain']='Il s\'agit du minimum que doit donner un membre pour avoir une chance d\'avoir un item. <br />Ce n\'est pas le don minimum. Un membre peut donner plus ou moins que cette valeur.';
    $lang['Adr_lake_win_chance']='Chance de gagner un item:';
    $lang['Adr_lake_win_chance_explain']='Quand un utilisateur donne le minimum requis, c\'est le pourcentage de chance de gagner r�ellement n\'importe quel type d\'article';
    $lang['Adr_lake_chance_increase']='Seuil de chance:';
    $lang['Adr_lake_chance_increase_explain']='C\'est le seuil d\'argent qui permet d\'augmenter la chance de recevoir un item.  Par exemple placez le seuil � 100 points et si l\'utilisateur donne 500 points ils aura 5% plus de chance de recevoir un item';
    $lang['Adr_lake_super_rare']='Seuil de chance pour un objet super rare:';
    $lang['Adr_lake_super_rare_explain']='C\'est le don minimum exig�e de l\'utilisateur pour avoir une chance � recevoir un item particuli�rement rare.<br /><b>Note:</b> Ceci ne joue pas sur la chance pour l\'utilisateur de recevoir un article tr�s rare';
    $lang['Adr_lake_title']='Donation au Lac';
}


//CAULDRON
if ( defined ('IN_ADR_CAULDRON'))
{
    $lang['Adr_cauldron']='Chaudron Magique';
    $lang['Adr_cauldron_explain']='Ici vous pouvez cr�er des combinaisons afin de composer des objets avec le chaudron magique';
    $lang['Adr_item_created_name']='Objet � cr�er';
    $lang['Adr_item1_combine_name']='Ingr�dient 1';
    $lang['Adr_item2_combine_name']='Ingr�dient 2';
    $lang['Adr_item3_combine_name']='Ingr�dient 3';
    $lang['Adr_cauldron_add']='Ajouter Combinaison';
    $lang['Action']='Actions';
    $lang['Delete']='Supprimer';
    $lang['Edit']='Editer';
    $lang['Submit']='Envoyer';
    $lang['Fields_empty']='Vous devez imp�rativement remplir tous les champs demand�s';
    $lang['Adr_item_choose_item']='Choisir Objet';
    $lang['Adr_cauldron_pack_successful_added']='Combinaison ajout�e avec succ�s';
    $lang['Adr_cauldron_successful_edited']='Combinaison �dit�e avec succ�s';
    $lang['Adr_cauldron_pack_successful_deleted']='Combinaison supprim�e avec succ�s';
}
//CAULDRON end


$lang['Adr_admin_tools_armaggedon_battle_list']='Supprimer le texte de combat';
$lang['Adr_admin_tools_armaggedon_optimise']='Optimiser les tables';
$lang['Adr_admin_tools_armaggedon_shops_done']='Objets du magasin g�n�ral supprim�s.';
$lang['Adr_admin_tools_armaggedon_shops_yes']='Tous les objets des magasins ont �t� supprim�s';
$lang['Adr_admin_tools_user_items']='Tous les objets des utilisateurs ont �t� supprim�s.';

$lang['Adr_items_steal_explain']='Choisissez le niveau de difficult� du vol de cet objet dans le magasin. La valeur entre parenth�ses est la classe de difficult� (DC), elle devrait �tre doubl�e pour savoir quel niveau est n�cessaire au joueur pour r�ussir son vol. Cette valeur est invisible pour le joueur et devrait le rester.';

// Item Restriction keys
$lang['Adr_admin_item_restrict_title']='Restrictions d\'utilisation de l\'objet';
$lang['Adr_admin_item_restrict_class_enable']='Activer la restriction de classe';
$lang['Adr_admin_item_restrict_class_enable_explain']='Activer cette option permet de restreindre cet objet � une ou plusieurs classes.<br>Si elle est d�sactiv�e alors l\'objet sera accessible � tous ind�pendamment de la classe.';
$lang['Adr_admin_item_restrict_class']='S�lection de classe';
$lang['Adr_admin_item_restrict_alignment_enable']='Activer la restriction d\'�l�ment';
$lang['Adr_admin_item_restrict_alignment_enable_explain']='Activer cette option permet de restreindre cet objet � un ou plusieurs alignements.<br>Si elle est d�sactiv�e alors l\'objet sera accessible � tous ind�pendamment de l\'alignement.';
$lang['Adr_admin_item_restrict_alignment']='S�lection d\'alignement';
$lang['Adr_admin_item_restrict_race_enable']='Activer la restriction de race';
$lang['Adr_admin_item_restrict_race_enable_explain']='Activer cette option permet de restreindre cet objet � une ou plusieurs races.<br>Si elle est d�sactiv�e alors l\'objet sera accessible � tous ind�pendamment de la race';
$lang['Adr_admin_item_restrict_race']='S�lection de race';
$lang['Adr_admin_item_restrict_element_enable']='Activer la restriction d\'�lement';
$lang['Adr_admin_item_restrict_element_enable_explain']='Activer cette option permet de restreindre cet objet � un ou plusieurs �l�ments.<br>Si elle est d�sactiv�e alors l\'objet sera accessible � tous ind�pendamment de l\'�l�ment.';
$lang['Adr_admin_item_restrict_element']='S�lection d\'�l�ment';
$lang['Adr_admin_item_restrict_level']='Restriction de niveau';
$lang['Adr_admin_item_restrict_level_explain']='Niveau minimum requis pour utiliser cet objet.';
$lang['Adr_admin_item_restrict_chars']='Restrictions de caract�ristiques';
$lang['Adr_admin_item_restrict_chars_explain']='Vous pouvez d�finir ici les caract�ristiques minimums n�cessaires pour pouvoir utiliser cet objet.';
$lang['Adr_admin_item_mass_delete']='Suppresion massive de cet objet des inventaires des utilisateurs';
$lang['Adr_admin_item_mass_delete_ex']='Selectioner cette option supprimera toutes les occurences de cet objet dans les inventaires des utilisateurs.<br>La recherche dans la base de donn�es se fait par nom d\'objet uniquement, vous devriez donc selectionner cette option AVANT de renommer un objet si vous souhaitez supprimer massivement cet objet.<br>Cette option ne supprimera pas l\'objet des boutiques du forum, vous continuerez donc de le voir dans la liste d\'objets de l\'ACP.';

$lang['Adr_items_price_sp']='Co�t en Points de Spiritualit� (SP)';
$lang['Adr_items_price_sp_explain']='Vous pouvez rajouter un co�t additionnel en points de spiritualit� � cet objet (SP). Ils se gagnent en gagnant des combats contre des monstres.<br>Si la valeur est � z�ro alors ce ne sera pas affich� dans la boutique du forum.';
$lang['Adr_items_price_fp']='Co�t en Points de Faction (FP)';
$lang['Adr_items_price_fp_explain']='Vous pouvez rajouter un co�t additionnel en points de faction � cet objet (FP). Ils se gagnent en gagnat des duels.<br>Si la valeur est � z�ro alors ce ne sera pas affich� dans la boutique du forum.';

$lang['Adr_item_type_explain']='Ici, vous pouvez configurer les types d\'objet.'; 
$lang['Adr_item_type_add_edit']='Ajoutez ou �ditez des types';
$lang['Adr_item_type_name']='Nom';
$lang['Adr_item_type_name_explain']='Nom de ce type d\'objet. Vous pouvez utiliser une clef de langue.';
$lang['Adr_item_type_id']='ID';
$lang['Adr_item_type_id_explain']='L\'ID (identfiant) du type';
$lang['Adr_item_type_price']='Prix';
$lang['Adr_item_type_price_explain']='Prix basique pour ce type d\'objet.';
$lang['Adr_item_type_successful_added']='Type d\'objet ajout� avec succ�s';
$lang['Adr_item_type_successful_edited']='Type d\'objet �dit� avec succ�s';
$lang['Adr_item_type_successful_deleted']='Type d\'objet supprim� avec succ�s';
$lang['Adr_item_type_add']='Ajoutez un type d\'objet';
$lang['Adr_item_type_category']='Cat�gorie';
$lang['Adr_item_type_category_explain']='S�lectionnez une cat�gorie dans la liste ou ajoutez-en une en remplissant le champ de texte';

# Advanced NPC System Expansion
$lang['Adr_races_all']='Toutes les races';
$lang['Adr_classes_all']='Toutes les classes';
$lang['Adr_elements_all']='Tous les �l�ments';
$lang['Adr_alignments_all']='Tous les alignements';
$lang['Adr_levels_all']='N\'importe quel niveau';

$lang['Adr_zones_all_stores']='-Toutes les zones-';
  $lang['Adr_zone_name_explain']='Choisissez les zones dans lesquelles le magasin appara�tra (utilisez ctrl+clic pour en s�lectionner plusieurs).';

# Loots
if ( defined ('IN_ADR_LOOTTABLES'))
{
    $lang['Adr_no_loottable'] = 'Pas de table de butin';
    $lang['Adr_admin_loot'] = 'R�glages des objets � obtenir'; 
    $lang['Adr_admin_mine'] = 'Objets � obtenir � la mine'; 
    $lang['Adr_admin_fish'] = 'Objets � obtenir � la p�che';
    $lang['Adr_admin_hunt'] = 'Objets � obtenir � la chasse';
    $lang['Adr_admin_herb'] = 'Objets � obtenir en herborisme';
    $lang['Adr_admin_lumber'] = 'Objets � obtenir en b�cheronnage';
    $lang['Adr_admin_tailor'] = 'Objets � obtenir en couture';
    $lang['Adr_admin_alchemy'] = 'Objets � obtenir en alchimie';

    $lang['Adr_items_loottables_title']='Table de butin';   
    $lang['Adr_items_loottables']='Tables de butin';
    $lang['Adr_items_loottables_explain']='Choisissez les tables de butin auxquelles vous voulez ajouter l\'objet';
    $lang['Adr_loottable_title']='Cat�gories de table';
    $lang['Adr_loottable_title_explain']='Cr�ez et �ditez les cat�gories de tables de butin :';
    $lang['Adr_loottable_name']='Nom de la table de butin :';
    $lang['Adr_loottable_items']='Objets :';
    $lang['Adr_loottable_name_explain']='Choisissez un nom pour la table :';
    $lang['Adr_loottable_desc']='Description :';
    $lang['Adr_loottable_desc_explain']='Description courte :';
    $lang['Adr_loottable_status_deactivated']='Off';
    $lang['Adr_loottable_status_activated']='On';
    $lang['Adr_loottable_dropchance_explain']='Choisissez la chance d\'obtention (1 � 10000)';
    $lang['Adr_loottable_dropchance_title']='Chance d\'obtention :';
    $lang['Adr_loottable_status']='Statut :';
    $lang['Adr_loottable_cat_add']='Ajouter une table de butin';
    $lang['Adr_loottable_cats_successful_new']='Table de butin cr��e avec succ�s';
    $lang['Adr_loottable_cats_successful_deleted']='Table de butin supprim�e avec succ�s';
    $lang['Adr_loottable_cats_successful_edit']='Table de butin mise � jour avec succ�s';
    $lang['Adr_loottable_cats_successful_item_deleted']='L\'objet a �t� retir� de la table de butin';
    $lang['Adr_monster_loottables_title']='Choisissez les tables de butin que le monstre utilisera pour d�terminer les objets que le joueur obtiendra';
    $lang['Adr_monster_loottables_explain']='Choisissez autant de tables de butin que vous voulez';
    $lang['Adr_monster_possible_drop_title']='Nombre d\'objets maximum � obtenir';
    $lang['Adr_monster_possible_drop_explain']='Choisissez le nombre d\'objets un joueur peut obtenir AU MAXIMUM, ce n\'est pas garanti';
    $lang['Adr_monster_guranteened_drop_title']='Nombre d\'objets minimum � obtenir';
    $lang['Adr_monster_guranteened_drop_explain']='Choisissez le nombre d\'objets un joueur sera s�r d\'obtenir !';
    $lang['Adr_monster_specific_drop_title']='Quels objets sp�cifiques ce monstre devrait faire tomber ?';
    $lang['Adr_monster_specific_drop_explain']='Choisissez quels objets doivent toukours tomber !';
    $lang['Adr_no_items']='Pas d\'objets';
}

# Monster Abilities
$lang['Adr_admin_monsters_base_regeneration']='Reg�n�ration de vie par tour';
$lang['Adr_admin_monsters_base_mp_regeneration']='Reg�n�ration de mana par tour';
$lang['Adr_admin_monsters_base_mp_drain']='Drain de mana par round';
$lang['Adr_admin_monsters_base_mp_transfer']='Drain/transfert de mana par round';
$lang['Adr_admin_monsters_base_hp_drain']='Drain de vie par round';
$lang['Adr_admin_monsters_base_hp_transfer']='Drain/transfert de vie round';

// Dynamic Town Maps
if ( defined ('IN_ADR_ZONE_MAPS'))
{
    $lang['Adr_admin_maps_zonemaps_title']='<b>Types de zone de plan de ville</b><br />Cr�ation et gestion de zone de plan de ville.';
    $lang['Adr_admin_maps_townmap_types']='Types de plan de ville';
    $lang['Adr_admin_maps_building_title']='<b>Cellules de b�timent</b><br />D�terminez o� les b�timents peuvent �tre utilis�s dans quel plan de ville.';
    $lang['Adr_admin_maps_building_cells']='Cellules de b�timent';
    $lang['Adr_admin_maps_building_types_title']='<b>Types de b�timent/cit�</b><br />D�terminez le genre de b�timents/cit�s que vous utiliserez.';
    $lang['Adr_admin_maps_building_types']='Types de b�timent/cit�';
    $lang['Adr_admin_maps_townmap_create_title']='<b>Cr�er une zone de plan de ville</b><br />Liste de zones sans plan de ville attribu�.';
    $lang['Adr_admin_maps_townmap_edit_title']='Editer une zone existante du plan de ville</b><br />Liste des zones existantes du plan de ville.';
    $lang['Adr_admin_maps_zone_townmap_edit']='Edition de zone de plan de ville';
    $lang['Adr_admin_maps_townmap_edit_title']='<b>Editer une zone existante du plan de ville</b><br />Liste de zones avec plan de ville attribu�.';
    $lang['Adr_admin_maps_townmap_system_title']='Syst�me de configuration de zone dynamique de plans de ville';
    $lang['Adr_admin_maps_townmap_system_explain']='Cette section permet de modifier le syst�me de zone de plan de ville.';
    $lang['Adr_admin_maps_missing_town_name']='Veuillez saisir un nom de zone <b>ou</b> s�lectionnez en une existante! ';
    $lang['Adr_admin_maps_return_1']='<p>Cliquez %sici%s';
    $lang['Adr_admin_maps_return_2']=' pour retourner � la page principale de plan de zone.<p>Cliquez %sici%s';
    $lang['Adr_admin_maps_zone_not_exist']='Zone %s inexistante! ';
    $lang['Adr_admin_maps_no_townmap']=' Pas de plan de ville, en cr�er un ?';
    $lang['Adr_admin_maps_edit_townmap']='Edition de plan de ville';
    $lang['Adr_admin_maps_townmap_type']='Type de plan de ville';
    $lang['Adr_admin_maps_edit_zonemaps_title']='Editer les plans de zones';
    $lang['Adr_admin_maps_edit_zonemaps_explain']='Cette section permet d\'�diter les plans de zones pour les zones assign�es.';
    $lang['Adr_admin_maps_editing_townmap']='Edition du %s plan de ville';
    $lang['Adr_admin_maps_buildings']='B�timents';
    $lang['Adr_admin_maps_remove_building']='Supprimer un b�timent du plan de ville:';
    $lang['Adr_admin_maps_item']='El�ment:';
    $lang['Adr_admin_maps_edit_zonemap']='Edition de plan de zone';
    $lang['Adr_admin_maps_place']='Emplacement:';
    $lang['Adr_admin_maps_cells']='Cellule - ';
    $lang['Adr_admin_maps_building']='B�timent';
    $lang['Adr_admin_maps_place building']='Placer le b�timent';
    $lang['Adr_admin_maps_delete_townmap_explain']='<b>Note:</b>  Vous devez effacer un plan de ville pour attribuer � la zone un autre plan de ville.';
    $lang['Adr_admin_maps_delete_townmap']='EFFACER le plan de ville';
    $lang['Adr_admin_maps_main_back']='Retour � la page principale de configuration de plan de ville';
    $lang['Adr_admin_maps_main']='Principal';
    $lang['Adr_admin_maps_edit_townmaps_title']='Edition de plans de ville';
    $lang['Adr_admin_maps_edit_zone_townmaps_explain']='Cette section permet d\'�diter les plans de ville attribu�s aux zones.';
    $lang['Adr_admin_maps_zone_townmap_deleted']='Zone de plan de ville effac�e!';
    $lang['Adr_admin_maps_select_zonemap']='Veuillez s�lectionner un plan de ville!';
    $lang['Adr_admin_maps_zonemap_assigned']='Plan de zone attribu�!';
    $lang['Adr_admin_maps_building_removed']='B�timent enlev� avec succ�s!';
    $lang['Adr_admin_maps_edit_townmap_back']='Retour � la page d\'�dition de plan de ville';
    $lang['Adr_admin_maps_townmaps_explain']='Cette section permet d\'�diter la zone des plans de ville.';
    $lang['Adr_admin_maps_need_info']='Vous n\'avez pas renseign� tous les champs requis,<P>Veuillez recommencer!';
    $lang['Adr_admin_maps_duplicate_buildings']='Il y � d�j� un b�timent � cet emplacement!<p> Les b�timents ne sont pas superposables!<p> Veuillez enlever le b�timent avant d\'en mettre un autre!';
    $lang['Adr_admin_maps_place_building_success']='B�timent plac� avec succ�s!';
    $lang['Adr_admin_maps_defined_city_images']='Images de ville d�finies:';
    $lang['Adr_admin_maps_defined_building_images']='Images de b�timent d�finies:';
    $lang['Adr_admin_maps_defined_landscape_images']='Images de paysage d�finies:';
    $lang['Adr_admin_maps_no_images']='La base de donn�es n\'a pas d\'images de b�timent, de ville ou de paysage.';
    $lang['Adr_admin_maps_edit_item']='Editition d\'�l�ment';
    $lang['Adr_admin_maps_images_define']='Note: Les images de b�timents/paysages/villes doivent �tre au format GIF avec un fond transparent !<br />      Si l\'image n\'est pas au format GIF elle n\'appara�tra pas. Si l\'image n\'a pas de fond transparent elle recouvrira l\'image de la carte.';
    $lang['Adr_admin_maps_add_building_new']='Ajouter un nouveau b�timent/paysage/ville';
    $lang['Adr_admin_maps_select_building']='<b>B�timent, paysage ou ville:</b><br />Pr�cisez s\'il s\'agit d\'un b�timent, paysage ou ville.';
    $lang['Adr_admin_maps_place_city']='ville � placer sur une map monde';
    $lang['Adr_admin_maps_place_building']='b�timent � placer sur le plan de ville';
    $lang['Adr_admin_maps_place_image']='image � placer sur le plan de ville';
    $lang['Adr_admin_maps_building_name']='Nom du b�timent/paysage/ville:';
    $lang['Adr_admin_maps_building_name_explain']='Description basique de l\'image du b�timent/ville (exemple \'prison2\').';
    $lang['Adr_admin_maps_building_image']='Nom du fichier de l\'image:';
    $lang['Adr_admin_maps_building_image_explain']='Nom du fichier de l\'image (sans l\'extension, le fichier doit �tre dans le dossier adr/images/zones/townmap/buildings ), exemple \'banque_1\'.';
    $lang['Adr_admin_maps_building_zone_link']='Lien de Zone :';
    $lang['Adr_admin_maps_building_zone_link_explain']='Fichier � ex�cuter quand un b�timent est s�lectionn�. (sans l\'extension.  (exemple \'adr_shops\').';
    $lang['Adr_admin_maps_building_mouseover_tag']='Commentaire souris:';
    $lang['Adr_admin_maps_building_mouseover_tag_explain']='Texte � afficher quand le pointeur de la souris passe sur le b�timent (exemple \'Temple sacr�\').';
    $lang['Adr_admin_maps_building_tag_no']='Num�ro de commentaire b�timent:';
    $lang['Adr_admin_maps_building_tag_no_explain']='Num�ro correspondant au b�timent dans lang_adr_buildings.js.';
    $lang['Adr_admin_maps_add_building']='AJOUTER b�timent/ville';
    $lang['Adr_admin_maps_building_configure_title']='Configuration des b�timents/paysages/villes';
    $lang['Adr_admin_maps_building_configure_title_explain']='Cette section permet de sp�cifier le type de b�timents/paysages/villes sont dans la base de donn�es.';
    $lang['Adr_admin_maps_bulding_added']='B�timent ajout�/�dit�/effac� avec succ�s!';
    $lang['Adr_admin_maps_building_update']='MISE A JOUR d\'�l�ment';
    $lang['Adr_admin_maps_building_delete']='SUPPRESSION de b�timent/ville';
    $lang['Adr_admin_maps_building_info']='Vous ne pouvez pas s�lectionner \"Aucun\" avec des cellules.<P>Veuillez essayer � nouveau.';
    $lang['Adr_admin_maps_zone_cell_edit']='Edition de cellules de b�timents pour une zone';
    $lang['Adr_admin_maps_zone_edit']='EDITION DE ZONE';
    $lang['Adr_admin_maps_zone_cell_edit_explain']='Cette section permet de d�terminer dans quelles cellules tel b�timent peut �tre plac�.';
    $lang['Adr_admin_maps_zone_cell_edit_for']='Edition de cellules de b�timent pour';
    $lang['Adr_admin_maps_zonemap_cell_explain']='Image de plan de zone - Utilisez la souris pour voir le num�ro de cellule';
    $lang['Adr_admin_maps_zonemap_cell_define']='D�terminer les cellules de b�timent';
    $lang['Adr_admin_maps_zonemap_cell_ctrl']='Appuyez sur CTRL pour faire une s�lection multiple';
    $lang['Adr_admin_maps_zonemap_cell_update']='MISE A JOUR DE CELLULES';
    $lang['Adr_admin_maps_building_cell_updated']='Cellules de b�timent mises � jour!';
    $lang['Adr_admin_maps_zonemap_edit']='Edition des types de zone de plan de ville';
    $lang['Adr_admin_maps_zonemap_edit_existing']='Edition de plan de ville existant';
    $lang['Adr_admin_maps_zonemap_edit_map']='EDITION DE PLAN';
    $lang['Adr_admin_maps_zonemap_add_new']='Ajouter un nouveau plan de ville';
    $lang['Adr_admin_maps_zonemap_map_id']='ID de plan de ville';
    $lang['Adr_admin_maps_zonemap_map_id_explain']='Valeur num�rique pour chaque plan de ville (utilisez un entier sup�rieur � 0 et n\'�tant pas d�j� pris).';
    $lang['Adr_admin_maps_zonemap_map_name']='Nom de plan de ville';
    $lang['Adr_admin_maps_zonemap_map_name_explain']='Nom pour ce plan de ville (exemple \'Petite ville\').';
    $lang['Adr_admin_maps_zonemap_map_image']='Image de fond du plan de ville';
    $lang['Adr_admin_maps_zonemap_map_image_explain']='Entrez un nom de fichier avec son extension, les images doivent �tre dans le dossier /adr/images/zones/townmap, une image par saison (il y a un dossier par saison))';
    $lang['Adr_admin_maps_zonemap_map_image_width']='Largeur du plan de ville';
    $lang['Adr_admin_maps_zonemap_map_image_width_explain']='Largeur en pixels (utilisez les dimensions de l\'image de fond).';
    $lang['Adr_admin_maps_zonemap_map_cell_width']='Largeur de cellule du plan de ville';
    $lang['Adr_admin_maps_zonemap_map_cell_width_explain']='Largeur des cellules du plan de ville (utilisez des dimension pouvant couvrir le haut de l\'image de fond).';
    $lang['Adr_admin_maps_zonemap_map_cell_width_amount']='Nombre de cellules dans la largeur du plan de ville';
    $lang['Adr_admin_maps_zonemap_map_cell_width_amount_explain']='Quantit� de cellules que le plan de ville a dans sa largeur (La quantit� multipli�e avec la largeur de cellule doit �tre <i>exactement</i> la largeur de l\'image de fond !!!).';
    $lang['Adr_admin_maps_zonemap_map_image_height']='Hauteur du plan de ville';
    $lang['Adr_admin_maps_zonemap_map_image_height_explain']='Hauteur du plan de ville en pixels (utilisez les dimensions de l\'image de fond).';
    $lang['Adr_admin_maps_zonemap_map_cell_height']='Hauteur de cellule du plan de ville';
    $lang['Adr_admin_maps_zonemap_map_cell_height_explain']='Hauteur des cellules dans le plan de ville (utilisez des dimension pouvant couvrir le haut de l\'image de fond).';
    $lang['Adr_admin_maps_zonemap_map_cell_height_amount']='Quantit� de cellules dans la hauteur du plan de ville';
    $lang['Adr_admin_maps_zonemap_map_cell_height_amount_explain']='La quantit� multipli�e avec la hauteur de cellule doit �tre <i>exactement</i> la hauteur de l\'image de fond !!!).';
    $lang['Adr_admin_maps_zonemap_map_add']='AJOUT de plan de ville';
    $lang['Adr_admin_maps_zonemap_map_edit']='Edition des types de plan de ville';
    $lang['Adr_admin_maps_zonemap_map_edit_explain']='Permet d\'ajouter de nouveaux ou de modifier d\'exsistants plans de ville.';
    $lang['Adr_admin_maps_zonemap_added']='B�timent ajout�/�dit�/effac� avec succ�s!';
    $lang['Adr_admin_maps_zonemap_map_editing']='Edition';
    $lang['Adr_admin_maps_zonemap_map_update']='MISE A JOUR DE PLAN MAP';
    $lang['Adr_admin_maps_zonemap_map_note']='<b>Note:</b> Toutes les zones utilisant ce plan de ville n\'auront plus de plan.';
    $lang['Adr_admin_maps_zonemap_map_warn']='Modifier les param�tres d\'un plan de ville effacera tous les plans de zone de ville de ce genre actuellement utilis�s dans les zones!<br />(Toutes les zones utilisant ce plan de ville de ville seront sans plan.)';
    $lang['Adr_admin_maps_zonemap_map_delete']='EFFACER LE PLAN';
    $lang['Adr_admin_maps_need_numeric']='Un ou plusieurs champs n\'est pas num�rique!<P>Veuillez revenir en arri�re et essayer � nouveau.';
    $lang['Adr_admin_maps_need_negative']='Cet ID de plan de ville ne peut pas �tre 0 ou n�gatif.';
    $lang['Adr_admin_maps_need_exists']='Ce type de zone de plan de ville existe d�j�!<P>Veuillez revenir en arri�re et entrez un nouveau type de zone de plan de ville.';
    $lang['Adr_admin_maps_zone_remove_info']='Vous devez s�lectionner un �l�ment � supprimer!';
    $lang['Adr_admin_maps_error_1']='Erreur fatale lors de l\'acc�s aux plans de zone!';
    $lang['Adr_admin_maps_error_2']='Erreur fatale lors de l\'acc�s au nom de zone!';
    $lang['Adr_admin_maps_error_3']='Erreur fatale lors de l\'acc�s aux donn�es de la zone!';
    $lang['Adr_admin_maps_error_4']='Erreur fatale lors de l\'acc�s aux donn�es du b�timent!';
    $lang['Adr_admin_maps_error_5']='Erreur fatale lors de l\'acc�s au plan de zone!';
    $lang['Adr_admin_maps_error_6']='Erreur fatale lors de l\'acc�s aux zones!';
    $lang['Adr_admin_maps_error_7']='Erreur fatale lors de l\'acc�s aux donn�es de plan de ville!';
    $lang['Adr_admin_maps_error_8']='Erreur fatale lors de la mise � jour de zone des plans de ville!';
    $lang['Adr_admin_maps_error_9']='Erreur fatale lors de l\'acc�s au plan de ville!';
    $lang['Adr_admin_maps_error_10']='Erreur fatale lors de la mise � jour des donn�es de b�timent!';
    $lang['Adr_admin_maps_error_11']='Erreur fatale lors de la mise � jour des donn�es de zone.';
    $lang['Adr_admin_maps_error_12']='Erreur fatale lors de la mise � jour de type de zone de plan de ville';
    $lang['Adr_admin_maps_error_13']='Erreur fatale lors de la mise � jour de plan de ville!';
    $lang['Adr_admin_maps_required']='[Requis]';
    $lang['Adr_admin_maps_remove']='Supprimer';
    $lang['Adr_admin_maps_assign']='Assigner';
    $lang['Adr_admin_maps_none']='Aucun';
}

// Day & Night & moar
$lang['Adr_time_acp_title']='R�glages de la p�riode de la journ�e';
$lang['Adr_time_acp_explain']='Ici vous pouvez changer la p�riode de la journ�e et changer la dur�e entre chaque';
$lang['Adr_time_acp_config']='R�glages';
$lang['Adr_time_acp_choice']='Changer la p�riode de la journ�e';
$lang['Adr_time_acp_time']='Temps entre chaque p�riode';
$lang['Adr_time_acp_days']='Jours';
$lang['Adr_time_acp_submit']='Modifier';
$lang['Adr_time_change_successful']='R�glages modifi�s correctement';
$lang['Adr_time_empty']='Vous devez donner un temps entre 2 p�riodes';
$lang['Adr_Time_all']='N\'importe';
$lang['Adr_Time_1']='Aube';
$lang['Adr_Time_2']='Jour';
$lang['Adr_Time_3']='Cr�puscule';
$lang['Adr_Time_4']='Nuit';
$lang['Adr_monsters_time_title'] = 'P�riode de la journ�e';

$lang['Adr_monster_time_choose']='Appara�t � l\'heure :';