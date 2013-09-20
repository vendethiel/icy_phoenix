<?php
/***************************************************************************
 *                            lang_rabbitoshi.php [French]
 *                              -------------------
 *     begin                : Thurs June 9 2006
 *     copyright            : (C) 2006 The ADR Dev Crew
 *     site                 : http://www.adr-support.com
 *
 *     $Id: lang_rabbitoshi.php,v 4.00.0.00 2006/06/09 02:32:18 Ethalic Exp $
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

//
// CONTRIBUTORS:
//	 Add your details here if wanted, e.g. Name, username, email address, website
// 200x-0x-xx  Malicious Rabbit - Original creation
// 200x-0x-xx  One Piece - Beta Development
// 200x-0x-xx  Seteo-Bloke & Narc0sis- English Translations
// 200x-06-09  Ethalic - New Release
// 2006-07-03  Vladek - French Translation
//

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['Day']='Jour';
$lang['Days']='Jours';
$lang['Hour']='Heure';
$lang['Hours']='Heures';
$lang['Minute']='Minute';
$lang['Minutes']='Minutes';
$lang['Rabbitoshi_seconds']='Secondes';

// If you would like add a language key so that your items can be multi-languaged, then use the following.
// Replace x with the item name in lowercase of the item, then replace item name with the item name how you
// want it to appear on your site. Do the same for description. If you wish to add more, copy these two
// instances and repeat the same steps for each item.
// When you want to use the keys, goto your item management and input Rabbitoshi_items_x by itself as the item
// name and vice-verca with Rabbitoshi_items_x_desc for the description field. Remember to rename x for each
// individual item.
$lang['Rabbitoshi_items_x']='iten name';
$lang['Rabbitoshi_items_x_desc']='item description';


/***************************************************************************
 *   Rabbitoshi Page(s) Language Keys
 ***************************************************************************/

//
// General Messages
//
$lang['Rabbitoshi_title']='Rabbitoshi';
$lang['Rabbitoshi_previous']='Clicquez %sIci%s pour revenir a la page pr�c�dente';
$lang['Rabbitoshi_disable']='L\'animalerie est actuellement ferm�e . Veuillez r�essayer plus tard.';
$lang['Rabbitoshi_owner_pet_lack']='Cet utilisateur ne poss�de pas de cr�ature';
$lang['Rabbitoshi_default_points_name']='Neph';

//
// Index Page
//
$lang['Rabbitoshi_nopet_choose']='Il est pr�f�rable d\'avoir une cr�ature avant de continuer';
$lang['Rabbitoshi_nopet_title']='Acheter une cr�ature';
$lang['Rabbitoshi_nopet_lack']='Vous n\'avez pas suffisamment de Neph pour avoir une cr�ature.';
$lang['Rabbitoshi_name_select']='Veuillez choisir un nom pour votre cr�ature';
$lang['Rabbitoshi_buypet_success'] ='F�licitations pour votre achat ! Vous avez achet� cette cr�ature avec succ�s.';
$lang['Rabbitoshi_pet_of']='La cr�ature de';
$lang['Rabbitoshi_pet_prize']='Prix';
$lang['Rabbitoshi_pet_buy']='Acheter cette cr�ature';
$lang['Rabbitoshi_pet_choose']='Choisir la cr�ature ';
$lang['Rabbitoshi_pet_hunger']='R�sistance � la faim';
$lang['Rabbitoshi_pet_thirst']='R�sistance � la soif';
$lang['Rabbitoshi_pet_hygiene']='R�sistance � la salet�';
$lang['Rabbitoshi_pet_call_vet']='V�t�rinaire';
$lang['Rabbitoshi_pet_feed']='Nourrir';
$lang['Rabbitoshi_pet_drink']='Donner � boire';
$lang['Rabbitoshi_pet_clean']='Nettoyer';
$lang['Rabbitoshi_pet_caracs']='Caracteristiques';
$lang['Rabbitoshi_pet_characteristics']='Caract�ristiques Combat';
$lang['Rabbitoshi_pet_attacks']='Ratio Attaques';
$lang['Rabbitoshi_pet_level']='Niveau';
$lang['Rabbitoshi_pet_experience']='Exp�rience';
$lang['Rabbitoshi_pet_curxp']='Exp�rience';
$lang['Rabbitoshi_pet_age']='Age';
$lang['Rabbitoshi_health']='Sant�';
$lang['Rabbitoshi_health_explain']='Veuillez noter que l\'animal de compagnie perd �galement des points de sant� s\'il a faim, alt�r�, ou son statut d\'hygi�ne est bas';
$lang['Rabbitoshi_ability_title']='Capacit� restante';
$lang['Rabbitoshi_topic']='Voir l\'animal de compagnie de cet utilisateur';
$lang['Rabbitoshi_owner_last_visit']='Derniere visite';
$lang['Rabbitoshi_pet_favorite_food']='Nourriture favorite';
$lang['Rabbitoshi_pet_vet']='Votre cr�ature est maintenant compl�tement gu�rie !';
$lang['Rabbitoshi_pet_vet_full']='Pourquoi aller chez le v�t�rinaire alors que votre cr�ature est en bonne sant� ?';
$lang['Rabbitoshi_pet_vet_lack']='Vous n\'avez pas suffisamment de points pour vous offrir ce service';
$lang['Rabbitoshi_vet_holidays']='Le v�t�rinaire est actuellement en d�placement . Veuillez r�essayer plus tard.';
$lang['Rabbitoshi_services']='Services';
$lang['Rabbitoshi_pet_call_vet_explain']='Le v�t�rinaire peut gu�rir votre animal . Co�t : ';
$lang['Rabbitoshi_owner_list']='Voir la liste des propri�taires';
$lang['Rabbitoshi_owner_list_explain']='Liste des possesseurs de cr�atures';
$lang['Rabbitoshi_food_no_need']='Votre cr�ature n\'a pas besoin d\'�tre nourrie pour le moment';
$lang['Rabbitoshi_water_no_need']='Votre cr�ature n\'a pas besoin de boire pour le moment';
$lang['Rabbitoshi_clean_no_need']='L\'habitat de votre cr�ature n\'a pas besoin d\'�tre nettoy� pour le moment';
$lang['Rabbitoshi_lack_food']='Vous ne poss�dez pas la nourriture favorite de votre cr�ature';
$lang['Rabbitoshi_lack_water']='Vous ne poss�dez rien pour donner � boire � votre cr�ature';
$lang['Rabbitoshi_lack_cleaner']='Vous ne poss�dez rien pour nettoyer l\'habitat de votre cr�ature';
$lang['Rabbitoshi_hidden']='D�sol� , cet utilisateur souhaite garder secr�tes les caract�ristiques de sa cr�ature<br /><br /> Cliquez <a href="'.append_sid("index.PHP_EXT").'">ici</a> pour retourner � l\'index du forum';

// Hotel
$lang['Rabbitoshi_hotel']='Hotel';
$lang['Rabbitoshi_hotel_explain']='Confier votre cr�ature pendant les vacances';
$lang['Rabbitoshi_hotel_no_actions']='Vous ne pouvez pas effectuer cette action tant que votre cr�ature est � l\'h�tel';
$lang['Rabbitoshi_pet_into_hotel']='Cette cr�ature est actuellement � l\'h�tel . <br /> Elle reviendra le ';
$lang['Rabbitoshi_is_in_hotel']='Votre cr�ature est dans l\'h�tel jusqu\'au ';
$lang['Rabbitoshi_hotel_welcome']='Bienvenue � l\'h�tel';
$lang['Rabbitoshi_out_of_hotel']='Cliquez ici pour r�cup�rer votre cr�ature';
$lang['Rabbitoshi_hotel_out_success']='Vous avez r�cup�r� votre cr�ature avec succ�s';
$lang['Rabbitoshi_hotel_welcome_services']='Nous pouvons garder votre cr�ature si vous le d�sirez';
$lang['Rabbitoshi_hotel_welcome_services_select']='Selecionnez le nombre de jours';
$lang['Rabbitoshi_hotel_get_in']='Laisser votre animal � l\'h�tel';
$lang['Rabbitoshi_hotel_in_success']='Votre animal est maintenant h�berg� � l\'h�tel';
$lang['Rabbitoshi_hotel_lack_money']='Vous n\'avez pas assez d\'argent pour payer l\'h�tel si longtemps � votre cr�ature';
$lang['Rabbitoshi_hotel_disable']='L\'hotel est actuellement ferm�.';

// Evolution
$lang['Rabbitoshi_evolution']='Evolution';
$lang['Rabbitoshi_evolution_explain']='Peut-�tre que votre cr�ature peut �voluer...';
$lang['Rabbitoshi_no_evolution']='Votre cr�ature est incapable d\'�voluer.';
$lang['Rabbitoshi_no_evolution_time']='Votre cr�ature est trop jeune pour �voluer, r�essayez plus tard !';
$lang['Rabbitoshi_evolution']='Evolution';
$lang['Rabbitoshi_evolution_welcome']='Veuillez choisir l\'�volution de votre cr�ature';
$lang['Rabbitoshi_evolution_exec']='Evolution !';
$lang['Rabbitoshi_evolution_lack']='Vous ne pouvez pas vous permettre cette �volution';
$lang['Rabbitoshi_evolution_success']='Votre cr�ature a �volu� avec succ�s !!';
$lang['Rabbitoshi_evolution_enable']='Aucune �volution disponible.';

// Owners
$lang['Rabbitoshi_pet_name']='Nom de la cr�ature';
$lang['Rabbitoshi_pet_time']='Age';
$lang['Rabbitoshi_pet_type']='Type';

// Preferences
$lang['Rabbitoshi_preferences']='Pr�f�rences';
$lang['Rabbitoshi_preferences_explain']='Gestion de vos pr�f�rences';
$lang['Rabbitoshi_preferences_notify']='Etre averti par message priv� des besoins de ma cr�ature';
$lang['Rabbitoshi_preferences_hide']='Cacher ma cr�ature aux autres utilisateurs';
$lang['Rabbitoshi_preferences_feed_full']='Toujours donner � ma cr�ature toute la nourriture dont elle a besoin';
$lang['Rabbitoshi_preferences_feed_full_explain']='En cochant cette option, vous utiliserez toute la nourriture disponible pour que votre cr�ature n\'ait plus faim. Dans le cas contraire, vous ne lui donnerez qu\'un peu de nourriture � chaque fois';
$lang['Rabbitoshi_preferences_drink_full']='Toujours donner � ma cr�ature l\'eau dont elle a besoin';
$lang['Rabbitoshi_preferences_drink_full_explain']='En cochant cette option, vous utiliserez toute l\'eau disponible pour que votre cr�ature n\'ait plus soif. Dans le cas contraire, vous ne lui donnerez qu\'un peu d\'eau � chaque fois';
$lang['Rabbitoshi_preferences_clean_full']='Toujours nettoyer l\'habitat de ma cr�ature jusqu\'� ce qu\'il soit compl�tement propre';
$lang['Rabbitoshi_preferences_clean_full_explain']='En cochant cette option vous nettoierez l\'habitat de votre cr�ature jusqu\'� ce qu\'il soit enti�rement propre. Dans le cas contraire, vous ne nettoirerez qu\'un peu � chaque fois';
$lang['Rabbitoshi_preferences_updated']='Vos pr�f�rences ont �t� mises � jour avec succ�s';

// Notification
$lang['Rabbitoshi_pm_news']='Quelques nouvelles de votre cr�ature';
$lang['Rabbitoshi_pm_news_hotel']='Votre cr�ature est actuellement confortablement install�e � l\'h�tel';
$lang['Rabbitoshi_APM_pm']='Les statistiques de votre cr�ature ont �t� mises � jour. Vous devriez aller prendre de ses nouvelles.';

// Selling Your Pet
$lang['Rabbitoshi_owner_sell']='Vendre votre cr�ature';
$lang['Rabbitoshi_owner_pet_value']='Valeur de votre cr�ature';
$lang['Rabbitoshi_pet_sell']='Vente de votre cr�ature';
$lang['Rabbitoshi_pet_sell_for']='Voulez vraiment vendre votre cr�ature pour';
$lang['Rabbitoshi_pet_sell_confirm']='Etes vous s�r de vouloir vendre votre cr�ature ?';
$lang['Rabbitoshi_pet_sold']='Vous avez vendu votre cr�ature pour ';
$lang['Rabbitoshi_return']='<br /><br /> Cliquez <a href="'.append_sid("rabbitoshi.PHP_EXT").'">ici</a> pour en acheter une autre<br /><br /> Cliquez <a href="'.append_sid("index.PHP_EXT").'">ici</a> pour retourner � l\'index du forum';

// Death of a Pet
$lang['Rabbitoshi_confirm']='Confirmation';
$lang['Rabbitoshi_pet_is_dead']='Votre cr�ature est morte';
$lang['Rabbitoshi_pet_has_died']='Votre cr�ature est morte.';
$lang['Rabbitoshi_pet_is_dead_cost']='Pour la revoir il vous en coutera';
$lang['Rabbitoshi_pet_is_dead_cost_explain']='D�sirez vous payer ceci pour ressuciter votre cr�ature ?';
$lang['Rabbitoshi_pet_dead_rebirth_no']='Votre cr�ature est morte, revenez quand vous serez pr�t � la r�ssuciter.<br /><br />Cliquez <a href="'.append_sid("adr_zones.PHP_EXT").'">ici</a> pour retourner au RPG<br /><br /> Cliquez <a href="'.append_sid("index.PHP_EXT").'">ici</a> pour retourner � l\'index du forum';
//Vous avez laiss� mourrir votre cr�ature .
$lang['Rabbitoshi_pet_dead_rebirth_ok']='Votre cr�ature a ressucit� !<br /><br /> Cliquez <a href="'.append_sid("rabbitoshi.PHP_EXT").'">ici</a> pour retourner vous en occuper<br /><br /> Cliquez <a href="'.append_sid("index.PHP_EXT").'">ici</a> pour retourner � l\'index du forum';
$lang['Rabbitoshi_pet_dead_lack']='Vous n\'avez pas les moyens de ressuciter votre cr�ature';
$lang['Rabbitoshi_pet_dead']='Votre cr�ature est morte. il est temps d\'en acheter une autre.';

//
// Progression Page
//
$lang['Rabbitoshi_pet_progress']='Progression de la cr�ature';
$lang['Rabbitoshi_progress']='Ici vous pouvez augmenter les statistiques et le niveau de votre cr�ature.';
$lang['Rabbitoshi_progress_experiencelimit_lack']='Votre cr�ature n\'a pas le niveau requis pour augmenter de niveau.<br /><br />Cliquez <a href="'.append_sid("rabbitoshi.PHP_EXT").'">ici</a> pour retournez � la page de votre cr�ature.';
$lang['Rabbitoshi_experience_name']='Points';
$lang['Rabbitoshi_progress_name']='Stats';
$lang['Rabbitoshi_progress_explain']='Explications';
$lang['Rabbitoshi_progress_number']='Points de progression';
$lang['Rabbitoshi_progress_price']='Prix';
$lang['Rabbitoshi_progress_submit']='Augmenter';
$lang['Rabbitoshi_progress_submit_title']='Progresser';
$lang['Rabbitoshi_owner_pet_health_explain']='Augmenter la Sant� maximale';
$lang['Rabbitoshi_owner_pet_hunger_explain']='Augmenter la Faim maximale';
$lang['Rabbitoshi_owner_pet_thirst_explain']='Augmenter la Soif maximale';
$lang['Rabbitoshi_owner_pet_hygiene_explain']='Augmenter l\'Hygi�ne maximale';
$lang['Rabbitoshi_owner_pet_level_explain']='Augmentez le niveau de votre cr�ature';
$lang['Rabbitoshi_owner_pet_power_explain']='Augmenter la Force';
$lang['Rabbitoshi_owner_pet_magicpower_explain']='Augmenter la Force mentale';
$lang['Rabbitoshi_owner_pet_armor_explain']='Augmenter l\'Armure';
$lang['Rabbitoshi_owner_pet_mpmax_explain']='Augmenter le Mana maximal';
$lang['Rabbitoshi_owner_pet_attack_explain']='Augmenter la limite d\'attaques';
$lang['Rabbitoshi_owner_pet_magicattack_explain']='Augmenter la limite de Magie';
$lang['Rabbitoshi_progress_ok']='Progression effectu�e avec succ�s.';
$lang['Rabbitoshi_progress_experience_lack']='Votre cr�ature n\'a pas assez d\'exp�rience pour augmenter cette statistique.';

// Reload
$lang['Rabbitoshi_progress_reload']='Recharger';
$lang['Rabbitoshi_owner_pet_attack_reload']='Limite d\'attaques recharg�e au maximum';
$lang['Rabbitoshi_owner_pet_magic_reload']='Limite de Magie recharg�e au maximum';

// Abilities
$lang['Rabbitoshi_ability_submit']='Apprendre';
$lang['Rabbitoshi_ability_name']='Capacit�s';
$lang['Rabbitoshi_ability_lack']='Aucune capacit�';
$lang['Rabbitoshi_ability_explain']='Effet de la capacit�';
$lang['Rabbitoshi_ability_price']='Co�t de la capacit�';
$lang['Rabbitoshi_ability_submit_title']='Apprendre';
$lang['Rabbitoshi_ability_regeneration']='R�g�n�ration';
$lang['Rabbitoshi_ability_regeneration_explain']='La r�g�n�ration rend quelques points de sant� � votre cr�ature apr�s chaque tour en utilisant ses propres points de mana.';
$lang['Rabbitoshi_ability_health']='Transfert de vie';
$lang['Rabbitoshi_ability_health_explain']='Le transfert de vie donne quelques points de vie de votre personnage � votre cr�ature.';
$lang['Rabbitoshi_ability_mana']='Transfert de mana';
$lang['Rabbitoshi_ability_mana_explain']='Le transfert de mana donne quelques points de mana de votre personnage � votre cr�ature.';
$lang['Rabbitoshi_ability_sacrifice']='Sacrifice';
$lang['Rabbitoshi_ability_sacrifice_explain']='Votre cr�ature perd tous ses points de vie et inflige beaucoup de dommages � votre adversaire.';
$lang['Rabbitoshi_ability_price_lack']='Votre cr�ature n\'a pas assez d\'exp�rience pour apprendre cette capacit�<br /><br />Cliquez <a href="'.append_sid("rabbitoshi_progress.PHP_EXT").'">ici</a> pour revenir sur la page de progression de votre cr�ature.';
$lang['Rabbitoshi_ability_stats_lack']='Les statistiques de votre cr�ature ne sont pas suffisamment �lev�es pour apprendre cette capacit�<br /><br />Cliquez <a href="'.append_sid("rabbitoshi_progress.PHP_EXT").'">ici</a> pour revenir sur la page de progression de votre cr�ature.';

//
// Shop Page
//
$lang['Rabbitoshi_Shop']='Magasin';
$lang['Rabbitoshi_shop_name']='Nom';
$lang['Rabbitoshi_shop_img']='Image';
$lang['Rabbitoshi_item_desc']='Description';
$lang['Rabbitoshi_shop_prize']='Prix';
$lang['Rabbitoshi_item_type']='Type';
$lang['Rabbitoshi_item_sum']='Poss�d�';
$lang['Rabbitoshi_owner_points']='Votre argent';
$lang['Rabbitoshi_shop_action']='Objets en vente';
$lang['Rabbitoshi_shop_buy']='Acheter';
$lang['Rabbitoshi_shop_sell']='Vendre';
$lang['Rabbitoshi_lack_items']='Vous ne pouvez pas vendre un article que vous ne poss�dez pas.';
$lang['Rabbitoshi_lack']='Vous n\'avez pas assez d\'argent pour acheter cet article.';
$lang['Rabbitoshi_pet_shop']='Acheter et vendre des articles pour votre cr�ature';
$lang['Rabbitoshi_general_return'] ='<br /><br /> Cliquez <a href="'.append_sid("rabbitoshi.PHP_EXT").'">ici</a> pour voir votre cr�ature<br /><br /> Cliquez <a href="'.append_sid("rabbitoshi_shop.PHP_EXT").'">ici</a> pour acheter des articles pour votre cr�ature<br /><br /> Cliquez <a href="'.append_sid("index.PHP_EXT").'">ici</a> pour retourner au Forum';
$lang['Rabbitoshi_shop_action_plus']='Ces articles ont �t� achet�s pour ';
$lang['Rabbitoshi_shop_action_less']='Ces articles ont �t� vendus pour ';
$lang['Rabbitoshi_shop_lack_items']='Vous ne pouvez pas vendre des articles que vous ne poss�dez pas. ';

//
// Pet Inventory
//
$lang['Rabbitoshi_inventory']='Voir l\'Inventaire';
$lang['Rabbitoshi_inventory_value']='Valeur';
$lang['Rabbitoshi_inventory_quanity']='Quanity';
$lang['Rabbitoshi_inventory_action']='Vendre des Articles';


/***************************************************************************
 *   Rabbitoshi Pet Messages
 ***************************************************************************/

//
// Alerts
//
$lang['Rabbitoshi_message']='Alertes importantes';
$lang['Rabbitoshi_message_hungry']='Piti�, nourrissez-moi !';
$lang['Rabbitoshi_message_very_hungry']='Je deviens squelettique !';
$lang['Rabbitoshi_message_thirst']='Donnez-moi � boire, piti� ! ';
$lang['Rabbitoshi_message_very_thirst']='De l\'eau ... J\'en ai r�ellement besoin maintenant ...';
$lang['Rabbitoshi_message_health']='Piti�, soignez-moi !';
$lang['Rabbitoshi_message_very_health']='Argh ... Je meurs ... tout seul ... ';
$lang['Rabbitoshi_message_hygiene']='Je ne peux pas vivre dans cet endroit malpropre !';
$lang['Rabbitoshi_message_very_hygiene']='Je pense que j\'empeste. Ct endroit est trop sale.';

//
// Thoughts
//
$lang['Rabbitoshi_general_message']='Pens�es r�centes';
$lang['Rabbitoshi_general_message_very_bad']='Pourquoi?...Pourquoi moi?... Je meurs ... Je n\'ai plus aucune chance ... Que quelqu\'un m\'aide ...';
$lang['Rabbitoshi_general_message_bad']='Mon ma�tre reviendra-t\'il ? il ne s\'occupe jamais de moi. Ce type de personne ne devrait pas �tre autoris�e � poss�der une cr�ature !!';
$lang['Rabbitoshi_general_message_neutral']='Ma vie est sans int�r�t !';
$lang['Rabbitoshi_general_message_good']='*chante sa joie de vivre*';
$lang['Rabbitoshi_general_message_very_good']='Je ne pourrais pas r�ver d\'un meilleur ma�tre ! Il est aux petits soins pour moi, je suis vraiment chanceux !';

//
// Pet Conditions
//
$lang['Rabbitoshi_creature_statut_0']='En bonne sant�';
$lang['Rabbitoshi_creature_statut_1']='Triste';
$lang['Rabbitoshi_creature_statut_2']='Malade';
$lang['Rabbitoshi_creature_statut_3']='Empoisonn�';
$lang['Rabbitoshi_creature_statut_4']='Furieux';


/***************************************************************************
 *   Administration Page Language Keys
 ***************************************************************************/

//
// Admin
//
$lang['rRabbitoshi_title']='Edition et suppression de cr�ature';
$lang['rRabbitoshi_config_edit']='Edition de cr�ature';
$lang['rRabbitoshi_desc']='Ici vous pouvez ajouter / �diter les cr�atures';

//
// Abilities
//
$lang['Rabbitoshi_abilities_settings']='Capacit�s sp�ciales';
$lang['Rabbitoshi_abilities_settings_explain']='Ici vous pouvez g�rer toutes les capacit�s sp�ciales des cr�atures.';
$lang['Rabbitoshi_regeneration_level']='Niveau minimal requis pour apprendre la capacit� R�g�n�ration';
$lang['Rabbitoshi_regeneration_magicpower']='Force mentale minimale requise pour apprendre la capacit� R�g�n�ration';
$lang['Rabbitoshi_regeneration_mp']='Mana minimal requis pour apprendre la capacit� R�g�n�ration';
$lang['Rabbitoshi_regeneration_mp_need']='Mana consumm� par tour';
$lang['Rabbitoshi_regeneration_hp_give']='Points de vie re�us par tour';
$lang['Rabbitoshi_regeneration_price']='Co�t de la capacit� R�g�n�ration';
$lang['Rabbitoshi_health_level']='Niveau minimal requis pour apprendre la capacit� Transfert de vie';
$lang['Rabbitoshi_health_magicpower']='Force mentale minimale requise pour apprendre la capacit� Transfert de vie';
$lang['Rabbitoshi_health_health']='Points de vie requis pour apprendre la capacit� Transfert de vie';
$lang['Rabbitoshi_health_percent']='Pourcentage de Points de vie donn�s au personnage';
$lang['Rabbitoshi_healthtransfert_price']='Co�t de la capacit� Transfert de vie';
$lang['Rabbitoshi_mana_level']='Niveau minimal requis pour apprendre la capacit� Transfert de mana';
$lang['Rabbitoshi_mana_magicpower']='Force mentale minimale requise pour apprendre la capacit� Transfert de mana';
$lang['Rabbitoshi_mana_mp']='Mana minimal requis pour apprendre la capacit� Transfert de mana';
$lang['Rabbitoshi_mana_percent']='Pourcentage de Points de mana donn�s au personnage';
$lang['Rabbitoshi_mana_price']='Co�t de la capacit� Transfert de mana';
$lang['Rabbitoshi_sacrifice_level']='Niveau minimal requis pour apprendre la capacit� Sacrifice';
$lang['Rabbitoshi_sacrifice_power']='Force minimale requise pour apprendre la capacit� Sacrifice';
$lang['Rabbitoshi_sacrifice_armor']='Armure minimale requise pour apprendre la capacit� Sacrifice';
$lang['Rabbitoshi_sacrifice_mp']='Mana minimal requis pour apprendre la capacit� Sacrifice';
$lang['Rabbitoshi_sacrifice_price']='Co�t de la comp�tence Sacrifice';

//
// Level Up
//
$lang['Rabbitoshi_levelup_settings']='Mont�e de niveau';
$lang['Rabbitoshi_levelup_settings_explain']='Ici vous pouvez param�trer tous les bonus que re�oit la cr�ature lors de la mont�e de niveau';
$lang['Rabbitoshi_levelup_earned']='Points max. gagn�s';
$lang['Rabbitoshi_health_levelup']='Vie';
$lang['Rabbitoshi_hunger_levelup']='Faim';
$lang['Rabbitoshi_thirst_levelup']='Soif';
$lang['Rabbitoshi_hygiene_levelup']='Hygi�ne';
$lang['Rabbitoshi_power_levelup']='Force';
$lang['Rabbitoshi_magicpower_levelup']='Force mentale';
$lang['Rabbitoshi_armor_levelup']='Armure';
$lang['Rabbitoshi_mp_levelup']='Mana';
$lang['Rabbitoshi_attack_levelup']='Attaques';
$lang['Rabbitoshi_magicattack_levelup']='Attaques magiques';

//
// Pet Management
//
//$lang['Rabbitoshi_Pets_Management']='Gestion des cr�atures';
$lang['Rabbitoshi_manage_title']='Gestion de toutes les cr�atures';
$lang['Rabbitoshi_desc']='Ici vous pouvez g�rer les cr�atures, modifier les valeurs, les �diter, ou les suprimer.';
$lang['Rabbitoshi_add']='Ajouter une cr�ature';
$lang['Rabbitoshi_config']='Ajout de nouvelle cr�ature';
$lang['Rabbitoshi_name']='Nom';
$lang['Rabbitoshi_img']='Image';
$lang['Rabbitoshi_img_explain']='Le nom de fichier et l\'extension o� se trouve l\'image.';
$lang['Rabbitoshi_pet_health']='Vie';
$lang['Rabbitoshi_pet_hunger']='Faim';
$lang['Rabbitoshi_pet_thirst']='soif';
$lang['Rabbitoshi_pet_hygiene']='Hygi�ne';
$lang['Rabbitoshi_pet_armor']='Armure';
$lang['Rabbitoshi_pet_mp']='Mana';
$lang['Rabbitoshi_pet_power']='Force';
$lang['Rabbitoshi_pet_magicpower']='Force mentale';
$lang['Rabbitoshi_pet_ratioattack']='Attaques';
$lang['Rabbitoshi_pet_ratiomagic']='Magie';
$lang['Rabbitoshi_pet_xp']='Limite d\'exp�rience';
$lang['Rabbitoshi_pet_experience_limit']='Limite d\'exp�rience';
$lang['Rabbitoshi_food_type']='Type de nourriture';
$lang['Rabbitoshi_is_evolution_of']='Evolution';
$lang['Rabbitoshi_is_evolution_of_explain']='Vous pouvez s�lectionnez une cr�ature dont celle-ci sera l\'�volution.';
$lang['Rabbitoshi_is_evolution_of_none']='aucune';
$lang['Rabbitoshi_buyable']='En vente';
$lang['Rabbitoshi_buyable_explain']='Ceci permettra aux utilisateurs d\'acheter cette cr�ature.';
$lang['Rabbitoshi_del_success']='Cette cr�ature a �t� supprim�e avec succ�s';
$lang['Rabbitoshi_add_success']='Cette cr�ature a �t� ajout�e avec succ�s';
$lang['Rabbitoshi_edit_success']='Cette cr�ature a �t� �dit�e avec succ�s';
$lang['Click_return_rabbitoshiadmin']='Cliquez %sici%s pour retourner � l\'administration des cr�atures';

// Pet specific levelup
$lang['Rabbitoshi_healthlevelup']='Vie � la mont�e de niveau';
$lang['Rabbitoshi_health_levelup_explain']='Nombre de points de vie que le familier re�oit quand il monte de niveau';
$lang['Rabbitoshi_hungerlevelup']='Faim � la mont�e de niveau';
$lang['Rabbitoshi_hunger_levelup_explain']='Nombre de points de faim que le familier re�oit quand il monte de niveau';
$lang['Rabbitoshi_thirstlevelup']='Soif � la mont�e de niveau';
$lang['Rabbitoshi_thirst_levelup_explain']='Nombre de points de soif que le familier re�oit quand il monte de niveau';
$lang['Rabbitoshi_hygienelevelup']='Hygi�ne � la mont�e de niveau';
$lang['Rabbitoshi_hygiene_levelup_explain']='Nombre de points d\'hygi�ne que le familier re�oit quand il monte de niveau';
$lang['Rabbitoshi_powerlevelup']='Force � la mont�e de niveau';
$lang['Rabbitoshi_power_levelup_explain']='Nombre de points de force que le familier re�oit quand il monte de niveau';
$lang['Rabbitoshi_magicpowerlevelup']='Force mentale � la mont�e de niveau';
$lang['Rabbitoshi_magicpower_levelup_explain']='Nombre de points de force mentale que le familier re�oit quand il monte de niveau';
$lang['Rabbitoshi_armorlevelup']='D�fense � la mont�e de niveau';
$lang['Rabbitoshi_armor_levelup_explain']='Nombre de points de d�fense que le familier re�oit quand il monte de niveau';
$lang['Rabbitoshi_mplevelup']='Mana � la mont�e de niveau';
$lang['Rabbitoshi_mp_levelup_explain']='Nombre de points de mana que le familier re�oit quand il monte de niveau';
$lang['Rabbitoshi_attacklevelup']='Attaque � la mont�e de niveau';
$lang['Rabbitoshi_attack_levelup_explain']='Nombre de points d\'attaque que le familier re�oit quand il monte de niveau';
$lang['Rabbitoshi_magicattacklevelup']='Attaque magique � la mont�e de niveau';
$lang['Rabbitoshi_magicattack_levelup_explain']='Nombre de points d\'attaque magique que le familier re�oit quand il monte de niveau';

//
// Pet Shop
//
$lang['Rabbitoshi_shop_title']='Gestion du Magasin des cr�atures';
$lang['Rabbitoshi_shop_desc']='Ici vous pouvez g�rer les articles du magasin des cr�atures';
$lang['Rabbitoshi_shop_edit_success']='Les articles ont �t� �dit�s avec succ�s';
$lang['Rabbitoshi_shop_name']='Nom';
$lang['Rabbitoshi_shop_prize']='Prix';
$lang['Rabbitoshi_shop_type']='Type';
$lang['Rabbitoshi_shop_img']='Image';
$lang['Rabbitoshi_shop_power']='Puissance';
$lang['Rabbitoshi_shop_power_explain']='Points regagn�s apr�s utilisation de l\'article';
$lang['Rabbitoshi_item_type_food']='Nourriture';
$lang['Rabbitoshi_item_type_water']='Eau';
$lang['Rabbitoshi_item_type_misc']='Divers';
$lang['Rabbitoshi_item_type_food']='Nourriture';
$lang['Rabbitoshi_item_type_food_none']='Aucun';
$lang['Rabbitoshi_item_type_misc']='Divers';
$lang['Rabbitoshi_item_desc']='Description';
$lang['Rabbitoshi_shop_add']='Ajouter un article';
$lang['Rabbitoshi_shop_power_explain']='Ceci est le nombre de points regagn�s quand l\'utilisateur utilise l\'article';
$lang['Rabbitoshi_item_type_misc']='Nettoyage';
$lang['Rabbitoshi_shop_title_add']='Ajouter un article';
$lang['Rabbitoshi_shop_config_add']='Cette fonction vous permet d\'ajouter un article dans le magasin des cr�atures';
$lang['Rabbitoshi_language_key']='Vous pouvez utiliser une cl� de langue, r�f�rez-vous � language/lang_xxxx/lang_rabbitoshi.php';
$lang['Rabbitoshi_img_item_explain']='Le nom du fichier et l\'extension o� se trouve l\'image.';
$lang['Rabbitoshi_shop_added_success']='Ce nouvel article a �t� ajout� avec succ�s';
$lang['Rabbitoshi_shop_del_success']='Cet article a �t� supprim� avec succ�s';
$lang['Click_return_rabbitoshi_shopadmin']='Cliquez %sici%s pour retourner sur la page de gestion du magasin des cr�atures';

//
// Pet Owners
//
$lang['Rabbitoshi_owner_admin_title']='Gestion des possesseurs de cr�atures';
$lang['Rabbitoshi_owner_admin_title_explain']='Ici vous pouvez modifier les caract�ristiques des cr�atures des utilisateurs';
$lang['Rabbitoshi_owner_admin_submit']='Valider les modifications';
$lang['Rabbitoshi_owner_admin_select']='S�lectionnez un utilisateur :';
$lang['Rabbitoshi_owner_admin_select_submit']='Voir cet utilisateur';
$lang['Rabbitoshi_owner']='Nom du propri�taire';
$lang['Rabbitoshi_owner_pet']='Nom de la cr�ature';
$lang['Rabbitoshi_owner_pet_type']='Type de cr�ature';
$lang['Rabbitoshi_owner_pet_health']='Vie Max';
$lang['Rabbitoshi_owner_pet_hunger']='Faim Max';
$lang['Rabbitoshi_owner_pet_thirst']='Soif Max';
$lang['Rabbitoshi_owner_pet_hygiene']='Hygi�ne Max';
$lang['Rabbitoshi_owner_pet_mpmax']='Mana Max';
$lang['Rabbitoshi_owner_pet_level']='Niveau';
$lang['Rabbitoshi_owner_pet_power']='Force';
$lang['Rabbitoshi_owner_pet_magicpower']='Force mentale';
$lang['Rabbitoshi_owner_pet_armor']='Armure';
$lang['Rabbitoshi_owner_pet_experience']='Exp�rience';
$lang['Rabbitoshi_owner_pet_mp']='Mana';
$lang['Rabbitoshi_owner_pet_attack']='Attaque(s)';
$lang['Rabbitoshi_owner_pet_magicattack']='Attaque(s) magique(s)';
//$lang['Rabbitoshi_owner_pet_health']='Vie';
//$lang['Rabbitoshi_owner_pet_hunger']='Faim';
//$lang['Rabbitoshi_owner_pet_thirst']='Soif';
//$lang['Rabbitoshi_owner_pet_hygiene']='Hygi�ne';
$lang['Rabbitoshi_owner_admin_ok']='Caract�ristiques de la cr�ature �dit�es avec succ�s';
$lang['Rabbitoshi_admin_general_return']='<br /><br /> Cliquez <a href="'.append_sid("admin_rabbitoshi_owners.PHP_EXT").'">ici</a> pour retourner sur la page pr�c�dente<br /><br />';
$lang['Rabbitoshi_cron_admin_update']='Mise � jour manuelle ';
$lang['Rabbitoshi_cron_admin_update_explain']='Puisque les statistiques des cr�atures sont seulement mises � jour lorsque le propri�taire les regarde ou lors des mises � jour automatiques, les informations sur les propri�taires que vous pouvez voir � cette page pourraient �tre erron�es. Cliquer sur le bouton de de mise � jour manuelle si vous voulez mettre � jour toutes les statistiques de cr�atures ';
$lang['Rabbitoshi_owner_admin_cron_ok']='Mise � jour manuelle effectu�e avec succ�s';

//
// General Settings
//
//$lang['Rabbitoshi_settings']='Configuration g�n�rale du syst�me de cr�atures';
//$lang['Rabbitoshi_settings_explanations']='Indiquez la p�riode entre deux diminutions, et la valeur de chaque diminution';
$lang['Rabbitoshi_settings_explain']='Vous pouvez actuver/d�sactiver le syst�me de cr�atures, changer son nom, etc.';
$lang['Rabbitoshi_use']='Utiliser le syst�me de cr�atures';
$lang['Rabbitoshi_settings_name']='Nom du syst�me de cr�ature';
$lang['Rabbitoshi_cron_use']='Utiliser la mise � jour automatique des statistiques des cr�atures';
$lang['Rabbitoshi_cron_explain']='Ce syst�me permet de mettre � jour automatiquement les statistiques des cr�atures . Etant donn� que ceci consomme beaucoup de puissance machine , cela ne peut pas �tre r�alis� en permanence . Si vous poss�dez beaucoup d\'utilisateurs , il est conseill� de ne pas mettre une dur�e entre deux mises � jour automatiques inf�rieure � une journ�e';
$lang['Rabbitoshi_cron_time']='D�lai entre les mises � jour automatique des statistiques des cr�atures';
$lang['Rabbitoshi_rebirth_enable']='Autoriser la r�surrection';
$lang['Rabbitoshi_rebirth_enable_explain']='Si vous cochez cette option , vos membres pourront payer pour que leur cr�ature revive une fois morte. Dans le cas contraire ils devront en acheter une autre';
$lang['Rabbitoshi_rebirth_price']='Co�t de la r�surrection';
$lang['Rabbitoshi_vet_enable']='Activer le v�t�rinaire';
$lang['Rabbitoshi_rebirth_vet_explain']='En utilisant le v�t�rinaire, les propri�taires peuvent redonner tous ses points de vie � leur cr�ature';
$lang['Rabbitoshi_vet_price']='Co�t du v�t�rinaire';
$lang['Rabbitoshi_hotel_use']='Activer l\'h�tel';
$lang['Rabbitoshi_hotel_use_explain']='When a pet is in the hotel, his status bars don\'t decrease';
$lang['Rabbitoshi_hotel_price']='Hotel price';
$lang['Rabbitoshi_hotel_price_explain'] ='Co�t pour chaque jour pass� dans l\'h�tel';
$lang['Rabbitoshi_hotel_exp']='Perte d\'exp�rience';
$lang['Rabbitoshi_hotel_exp_explain']='Points d\'exp�rience perdus par jour pass� � l\'h�tel';
$lang['Rabbitoshi_evolution_use']='Activer l\'�volution';
$lang['Rabbitoshi_evolution_use_explain']='Si vous cochez cette option, certaines cr�atures pourront �voluer ( regardez aussi dans la gestion des cr�atures )';
$lang['Rabbitoshi_evolution_price']='Prix d\'une �volution';
$lang['Rabbitoshi_evolution_price_explain']='Pourcentage du co�t de la cr�ature ( laissez cette valeur nulle si vous voulez que l\'�volution soit gratuite )';
$lang['Rabbitoshi_evolution_time']='Temps requis';
$lang['Rabbitoshi_evolution_time_explain']='Nombre de jours de possession minimal pour �voluer';
$lang['Rabbitoshi_hunger_time']='Temps avant que la <b>Faim</b> ne diminue (en secondes)';
$lang['Rabbitoshi_hunger_value']='Valeur de la diminution';
$lang['Rabbitoshi_thirst_time']='Temps avant que la <b>Soif</b> ne diminue (en secondes)';
$lang['Rabbitoshi_thirst_value']='Valeur de la diminution';
$lang['Rabbitoshi_health_time']='Temps avant que la <b>Sant�</b> ne diminue (en secondes)';
$lang['Rabbitoshi_health_value']='Valeur de la diminution';
$lang['Rabbitoshi_hygiene_time']='Temps avant que l\'<b>Hygi�ne</b> ne diminue (en secondes)';
$lang['Rabbitoshi_hygiene_value']='Valeur de la diminution';
$lang['Rabbitoshi_level_price']='Points d\'exp�rience n�cessaires pour la mont�e de niveau';
$lang['Rabbitoshi_attack_reload_price']='Exp�rience requise pour augmenter le nombre d\'attaques de 1';
$lang['Rabbitoshi_magic_reload_price']='Exp�rience requise pour augmenter la magie de 1';
$lang['Rabbitoshi_health_price']='Exp�rience n�cessaire pour augmenter les Points de vie max.';
$lang['Rabbitoshi_hunger_price']='Exp�rience n�cessaire pour augmenter la Faim max.';
$lang['Rabbitoshi_thirst_price']='Exp�rience n�cessaire pour augmenter la Soif max.';
$lang['Rabbitoshi_hygiene_price']='Exp�rience n�cessaire pour augmenter l\'Hygi�ne max.';
$lang['Rabbitoshi_power_price']='Exp�rience n�cessaire pour augmenter la Force';
$lang['Rabbitoshi_magicpower_price']='Exp�rience n�cessaire pour augmenter la Force mentale';
$lang['Rabbitoshi_armor_price']='Exp�rience n�cessaire pour augmenter l\'Armure';
$lang['Rabbitoshi_attack_price']='Exp�rience n�cessaire pour augmenter l\'Attaque max.';
$lang['Rabbitoshi_magicattack_price']='Exp�rience n�cessaire pour augmenter la magie max.';
$lang['Rabbitoshi_mp_price']='Exp�rience n�cessaire pour augmenter les Points de mana max.';
$lang['Rabbitoshi_health_raise']='Points gagn�s';
$lang['Rabbitoshi_hunger_raise']='Points gagn�s';
$lang['Rabbitoshi_thirst_raise']='Points gagn�s';
$lang['Rabbitoshi_hygiene_raise']='Points gagn�s';
$lang['Rabbitoshi_power_raise']='Points gagn�s';
$lang['Rabbitoshi_magicpower_raise']='Points gagn�s';
$lang['Rabbitoshi_armor_raise']='Points gagn�s';
$lang['Rabbitoshi_attack_raise']='Points gagn�s';
$lang['Rabbitoshi_magicattack_raise']='Points gagn�s';
$lang['Rabbitoshi_mp_raise']='Points gagn�s';
$lang['Rabbitoshi_experience_min']='Exp�rience minimale gagn�e par la cr�ature apr�s chaque combat';
$lang['Rabbitoshi_experience_max']='Exp�rience maximale gagn�e par la cr�ature apr�s chaque combat';
$lang['Rabbitoshi_mp_min']='Mana <b>minimum</b>requis pour une attaque magique, entre deux valeurs';
$lang['Rabbitoshi_mp_max']='Mana <b>maximum</b>requis pour une attaque magique, entre deux valeurs';
$lang['Rabbitoshi_updated_return_settings']='Configurations g�n�rales mises � jour avec succ�s<br /><br /> Clisuez %sici%s pour retourner sur la page de configuration g�n�rale des cr�atures';
$lang['Rabbitoshi_update_error']='Une erreur s\'est produite lors de la mise � jour !';


/***************************************************************************
 *   ADR Battle Language Keys
 ***************************************************************************/

$lang['Adr_Rabbitoshi_invoc_succes']='Vous avez appel� votre cr�ature pour qu\'elle vous aide au combat.';
$lang['Rabbitoshi_battle_pet_title']='Votre cr�ature est sur le champ de bataille';
$lang['Rabbitoshi_battle_pet_health']='Vie';
$lang['Rabbitoshi_battle_pet_mp']='Mana';
$lang['Rabbitoshi_battle_pet_attack']='Attaques';
$lang['Rabbitoshi_battle_pet_magicattack']='Magie';
$lang['Rabbitoshi_battle_pet_action_attack']='Attaquer';
$lang['Rabbitoshi_battle_pet_action_magicattack']='Lancer une attaque magique';
$lang['Rabbitoshi_battle_pet_action_invoc']='Appeler ';

// Battle Text
$lang['Adr_battle_monster_success_critical']='Votre adversaire inflige un coup critique de %s point(s) de d�g�t � votre cr�ature.';
$lang['Adr_battle_monster_success']='Votre adversaire inflige %s point(s) de d�g�t � votre cr�ature.';
$lang['Adr_battle_pet_success']='Votre cr�ature inflige %s points de d�g�t � votre adversaire.';
$lang['Adr_battle_pet_success_critical']='Votre cr�ature inflige un coup critique de %s point(s) de d�g�t � votre adversaire.';
$lang['Adr_battle_pet_poison']='Le poison inflige point(s) de d�g�t � votre cr�ature.';
$lang['Adr_battle_pet_dead_or_limitattack']='Vous ne pouvez pas lancer cette attaque avec votre cr�ature parce qu\'elle est d�j� morte ou que la limite d\'attaques a �t� atteinte.';
$lang['Adr_battle_pet_dead_or_limitmagicattack']='Vous ne pouvez pas lancer cette attaque avec votre cr�ature parce qu\'elle est d�j� morte ou que la limite d\'attaques magiques a �t� atteinte.';
$lang['Adr_battle_pet_mp_lack']='Vous n\'avez pas assez de mana pour tenter cette attaque';
$lang['Adr_battle_pet_regeneration_mess']='La capacit� R�g�n�ration est automatique. Vous n\'avez pas besoin de l\'activer';
$lang['Adr_battle_pet_noability']='Vous n\'avez aucune capacit� sp�ciale';
$lang['Rabbitoshi_Adr_battle_regen']='Votre cr�ature regagne %s point(s) de vie avec la capacit� R�g�n�ration.';
$lang['Rabbitoshi_Adr_battle_pet_sacrifice']='Votre cr�ature se sacrifie et inflige %s point(s) de d�g�t � votre adversaire.';
$lang['Rabbitoshi_Adr_battle_pet_mana_transfert']='Votre cr�ature vous c�de %s points de mana.';
$lang['Rabbitoshi_Adr_battle_pet_health_transfert']='Votre cr�ature vous c�de %s points de vie.';
$lang['Adr_battle_pet_win']='Votre cr�ature gagne %s point(s) d\'exp�rience pour avoir participp� au combat.';

// Condition
$lang['Adr_battle_pet_newstatut_1']='Votre cr�ature d�prime';
$lang['Adr_battle_pet_newstatut_2']='Votre cr�ature est actuellement malade';
$lang['Adr_battle_pet_newstatut_3']='Votre cr�ature est actuellement empoisonne�';
$lang['Adr_battle_pet_newstatut_4']='Votre cr�ature est furieuse';

//
// That's all Folks!
// -------------------------------------------------

// V: Level Up Penalty

$lang['Rabbitoshi_level_up_penalty']='P�nalit� d\'xp pour la mont�e de niveau';
$lang['Rabbitoshi_level_up_penalty_explain']='Pourcentage d\'exp�rience n�cessaire pour monter de niveau (plus un familier est haut niveau, plus il a besoin d\'exp�rience pour passer le prochain niveau)';