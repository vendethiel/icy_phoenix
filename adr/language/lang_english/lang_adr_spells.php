<?php 
/*************************************************************************** 
* 			lang_adr_spells.php [English] 
* 				------------------- 
*				begin: 01/07/2007
*				copyright: egdcltd (http://games.directorygold.com)
****************************************************************************/ 

$lang['Adr_spells_page_name'] = 'Sorts';
$lang['Adr_battle_check_two'] = 'Vous n\'avez pas assez de mana pour lancer ce sort';
$lang['Adr_battle_healing_success'] = '%s lance %s, se rendant %s HP !';
$lang['Adr_battle_no_spell_learned'] = 'Pas de sort';
$lang['Adr_spell_learned'] = 'Lancer un sort';
$lang['Adr_spells_learned'] = 'Lancer un sort';
$lang['Adr_items_class_limit'] = 'Classes autoris�es';
$lang['Adr_items_type_magic_heal'] = 'Sort de soin';
$lang['Adr_spell_not_learned'] = 'Vous n\'avez pas appris de sort';


$lang['Adr_items_type_spell_attack'] = 'Sort : &Eacute;vocation';
$lang['Adr_items_type_spell_defend'] = 'Sort : Abjuration';
$lang['Adr_spells_already_learned'] = 'Sort d�j� connu';
$lang['Adr_spells_too_powerful'] = 'Le personnage n\'est pas assez haut niveau pour apprendre ce sort';
$lang['Adr_spells_wrong_class'] = 'Votre classe ne vous permet pas d\'apprendre ce sort';
$lang['Adr_spells_wrong_alignment'] = 'Votre alignement ne vous permet pas d\'apprendre ce sort';
$lang['Adr_spells_wrong_element'] = 'Votre �l�ment ne vous permet pas d\'apprendre ce sort';
$lang['Adr_spells_skill_evocation'] = '&Eacute;vocation';
$lang['Adr_spells_skill_healing'] = 'Soin';
$lang['Adr_spells_skill_abjuration'] = 'Abjuration';
$lang['Adr_spells_successful_added'] = 'Vosu avze correctement appris ce sort';
$lang['Adr_spells_learn_link'] = 'Apprendre';
$lang['Adr_items_type_spell_recipe'] = 'Parchemin de sort';
$lang['Adr_spells_was_deleted'] = 'Ce sort a �t� supprim�';
$lang['Adr_spells_missing_item'] = 'Vous ne disposez pas des composants n�cessaires pour lancer ce sort';

//Casting messages
$lang['Adr_spells_cast'] = 'Lancer ce sort';
$lang['Adr_spells_cast_mp'] = 'Vous avez %s points de Mana';
$lang['Adr_spells_target_select'] = 'Choisissez sur qui lancer le sort :';
$lang['Adr_spells_target_battle'] = 'Ce personnage est en combat, vous ne pouvez pas lui lancer de sort dessus pour le moment';
$lang['Adr_spells_target_dead'] = 'Ce personnage est mort, vous ne pouvez pas lui lancer de sort dessus pour le moment';
$lang['Adr_spells_target_health_full'] = 'La vie de ce personnage est d�j� au maximum';
$lang['Adr_spells_heal_cast'] = 'Vous venez de lancer <i>%s</i> sur %s, rendant %s points de vie !';
$lang['Adr_spells_heal_pm_title'] = 'Vous avez �t� soign� par un autre joueur';
$lang['Adr_spells_heal_pm_text'] = '%s vous a lanc� un sort de soin, vous rendant %s points de vie !';
$lang['Adr_spells_cast_already'] = '%s a d�j� lanc� un sort de soin sur ce personnage';
$lang['Adr_spells_cast_boost_success'] = 'Vous avez lanc� <i>%s</i> sur %s, augmentant son attaque et son d�fense pour son prochain combat';
$lang['Adr_lang_cast_boost_pm_title'] = 'On vous a lanc� un sort';
$lang['Adr_lang_cast_boost_pm_text'] = '%s a lanc� <i>%s</i> sur vous, augmentant votre attaque et votre d�fense pour votre prochain combat';
$lang['Adr_spells_wrong_place'] = 'Vous devez �tre dans la m�me zone que votre cible';

//Battle messages
$lang['Adr_battle_spell_ma_increase'] = '%s lance %s, augmentant votre attaque magique par %s points !';
$lang['Adr_battle_spell_md_increase'] = '%s lance %s, augmentant votre d�fense magique par %s points !';
$lang['Adr_battle_spell_pa_increase'] = '%s lance %s, augmentant votre attaque physique par %s points !';
$lang['Adr_battle_spell_pd_increase'] = '%s lance %s, augmentant votre d�fense physique par %s points !';	
$lang['Adr_battle_spell_mamd_increase'] = '%s lance %s augmentant votre attaque et d�fense magique par %s points !';
$lang['Adr_battle_spell_pama_increase'] = '%s lance %s augmentant votre attaque physique et magique par %s points !';
$lang['Adr_battle_spell_pdmd_increase'] = '%s lance %s augmentant votre d�fense physique et magique par %s points !';
$lang['Adr_battle_spell_papdmamd_increase'] = '%s lance %s augmentant votre physical attack and defense and magical attack and defense par %s points !';
	$lang['Adr_battle_spell_hpmana'] = '%s lance %s, �changeant des points de vie pour des points de mana, pour un total de %s points de Mana !';
$lang['Adr_battle_spell_monster_pa_decrease'] = '%s lance %s sur %s, diminuant leur attaque physique par %s';
$lang['Adr_battle_spell_monster_pa_decrease_fail'] = '%s lance %s sur %s, mais leur attaque physique est d�j� 0';
$lang['Adr_battle_spell_monster_pd_decrease'] = '%s lance %s sur %s, diminuant leur d�fense physique par %s';
$lang['Adr_battle_spell_monster_pd_decrease_fail'] = '%s lance %s sur %s, mais leur d�fense physique est d�j� 0';
$lang['Adr_battle_spell_monster_ma_decrease'] = '%s lance %s sur %s, diminuant leur attaque magique par %s';
$lang['Adr_battle_spell_monster_ma_decrease_fail'] = '%s lance %s sur %s, mais leur attaque magique est d�j� 0';
$lang['Adr_battle_spell_monster_md_decrease'] = '%s lance %s sur %s, diminuant leur d�fense magique par %s';
$lang['Adr_battle_spell_monster_md_decrease_fail'] = '%s lance %s sur %s, mais leur d�fense magique est d�j� 0';
$lang['Adr_battle_spell_disease_cure'] = '%s lance %s, se gu�rissant de %s';
$lang['Adr_battle_spell_disease_no_cure'] = '%s lance %s mais ce sort ne peut pas gu�rir l\'empoisonnement qui vous touche';
$lang['Adr_battle_spell_no_disease'] = '%s lance %s mais vous n\'avez pas �t� empoisonn�';

if ( defined ('IN_ADR_ADMIN'))
{
	$lang['Adr_forum_shop_spells'] = 'Sorts';
	$lang['Adr_spells_type_use_explain'] = 'Choisissez le type de sort depuis la liste d�roulante.<br/><b>Assurez vous d\'utiliser un type de sort valide (par d�faut : "sort offensif", "sort d�fensif", "sort de soin")';
	$lang['Adr_spells_type'] = 'Type de sort';
	$lang['Adr_spells_title'] = 'Gestion des sorts';
	$lang['Adr_spells_title_explain'] = 'Ici, vous pouvez g�rer les sorts du RPG';
	$lang['Adr_spells_class_explain'] = 'Choisissez les classes qui pourront utiliser ce sort. S�lectionnez "Toutes les classes" pour retirer la limitation. Utilisez ctrl+clic pour s�lectionner plusieurs classes.';
	$lang['Adr_spells_add_title'] = 'Ajouter ou �diter des sorts';
	$lang['Adr_spells_add_title_explain'] = 'Ici vous pouvez ajouter ou �diter des sorts';

	$lang['Adr_spells_attention'] = 'ATTENTION. Supprimer un sort le retirera aussi de la liste de sorts des joueurs.';
	$lang['Adr_spells_level_explain'] = 'Niveau que le personnage doit avoir pour apprendre ce sort';
	$lang['Adr_spells_auth'] = 'Pas en montant de niveau';
	$lang['Adr_spells_auth_explain'] = 'En cochant cette case, les joueurs n\'apprendront pas ce sort en montant de niveau.';
	$lang['Adr_spells_item_recipe'] = 'Recette';
	$lang['Adr_spells_item_recipe_explain'] = 'Si vous voulez qu\'une recette pr�-existant serve de recette (parchemin) pour apprendre ce sort, s�lectionnez-le ici. Sinon, choisissez "Non".';
	$lang['Adr_spells_recipe_none'] = 'Pas de recette';
	$lang['Adr_spells_items_req'] = 'Composants pour lancer';
	$lang['Adr_spells_items_req_desc'] = 'S�lectionnez les objets n�cessaires au lancement du sort. Si aucun, choisissez \'Non\'';
	$lang['Adr_spells_items_amount'] = 'Montant de chaque objet n�cessaire pour lancer le sort';
	$lang['Adr_spells_items_amount_desc'] = 'Exemple : si vous avez choisis 3 objets et que vous voulez 2x le premier, 1x le second et 5x du derni�re, mettez dans le champ 2:1:5. L\'ordre correspond � l\'ordre de la liste !<br /><br />Laissez blanc pour utiliser "1" comme quantit� partout';
	$lang['Adr_spells_components'] = 'Composants';
	$lang['Adr_spells_battle'] = 'Sort lan�able ...';
	$lang['Adr_spells_battle_explain'] = 'Choisissez \'En combat\' si le sort est lan�able SEULEMENT pendant un combat, \'En combat\' si le sort est seulement lan�able en combat (contre des monstres et en PVP), ou \'Les deux\' si le sort est utilisable dans les deux cas.';
	$lang['Adr_spells_xtreme'] = 'Code PHP au lancement du sort - Hors combat';
	$lang['Adr_spells_xtreme_explain'] = 'Code (PHP) a ex�cuter au lancement du sort <i>hors combat</i>, <b>au lieu</b> d\'utiliser le code de base.<br/><b>Si vous ne savez pas � quoi cette case correspond, LAISSEZ LA BLANCHE</b>';
	$lang['Adr_spells_xtreme_battle'] = 'Code PHP au lancement du sort - En combat';
	$lang['Adr_spells_xtreme_battle_explain'] = 'Code (PHP) a ex�cuter au lancement du sort <i>en combat</i>, <b>au lieu</b> d\'utiliser le code de base.<br/><b>Si vous ne savez pas � quoi cette case correspond, LAISSEZ LA BLANCHE</b>';
	$lang['Adr_spells_xtreme_pvp'] = 'Code PHP au lancement du sort - en JcJ';
	$lang['Adr_spells_xtreme_pvp_explain'] = 'Code (PHP) a ex�cuter au lancement du sort <i>dans un combat Joueur contre Joueur</i>.<br/><b>Si vous ne savez pas � quoi cette case correspond, LAISSEZ LA BLANCHE</b>';
	$lang['Adr_spells_no_battle'] = 'Hors combat';
	$lang['Adr_spells_battle'] = 'En combat';
	$lang['Adr_spells_battle_no_battle'] = 'Les deux';
	$lang['Adr_spells_admin_only'] = 'Administrateurs seulement ?';
	$lang['Adr_spells_spell_successful_deleted'] = 'Sort supprim� avec succ�s';
	$lang['Adr_spells_spell_successful_edited'] = 'Sort �dit� avec succ�s';
	$lang['Adr_spells_spell_successful_added'] = 'Sort ajout� avec succ�s';
	$lang['Adr_spells_spell_add'] = 'Ajouter un sort';
	$lang['Adr_spells_spell_name'] = 'Nom';
	$lang['Adr_spells_skill'] = 'Comp�tence';
	$lang['Adr_spells_alignment_limit'] = 'Restriction d\'alignement';
	$lang['Adr_spells_alignment_limit_explain'] = 'Choisissez le(s) alignement(s) autoris�s � utiliser ce sort. Utilisez ctrl - click pour s�lectionner plusieurs alignements.';
	$lang['Adr_spells_element_limit'] = 'Restriction d\'�l�ment';
	$lang['Adr_spells_element_limit_explain'] = 'Choisissez les �l�ments qui peuvent utiliser ce sort. Utilisez ctrl - click pour s�lectionner plusieurs �l�ments.';
	$lang['Adr_spells_give_spell_success'] = 'Sort(s) ajout�s avec succ�s';
	$lang['Adr_spells_general_change_successful'] = 'R�glages mis � jour';
	$lang['Adr_spells_pm'] = 'Envoyer des MPs';
	$lang['Adr_spells_pm_explain'] = 'Choisissez Oui pour que les joueurs re�oivent un message priv� lorsqu\'ils sont la cible d\'un sort.';
	$lang['Adr_spells_general_title'] = 'R�glages';
	$lang['Adr_spells_general_explain'] = 'Ici vous pouvez modifier les r�glages des sorts';
}