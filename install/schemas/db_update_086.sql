SET storage_engine=MYISAM;

########################################
##              BUILD 087             ##
########################################
ALTER TABLE `phpbb_posts` ADD `post_images` MEDIUMTEXT NOT NULL AFTER `post_likes`;
##UPDATE `phpbb_ajax_shoutbox` SET `shout_room` = REPLACE(`shout_room`, '||', '|');



########################################
##              BUILD 088             ##
########################################
DROP TABLE IF EXISTS `___topics_watch___`;
CREATE TABLE `___topics_watch___` (
	`topic_id` MEDIUMINT(8) unsigned NOT NULL DEFAULT '0',
	`forum_id` MEDIUMINT(8) unsigned NOT NULL DEFAULT '0',
	`user_id` MEDIUMINT(8) NOT NULL DEFAULT '0',
	`notify_status` TINYINT(1) NOT NULL DEFAULT '0',
	KEY `topic_id` (`topic_id`),
	KEY `user_id` (`user_id`),
	KEY `notify_status` (`notify_status`)
);

INSERT INTO `___topics_watch___`
SELECT tw.topic_id, tw.forum_id, tw.user_id, tw.notify_status
FROM `phpbb_topics_watch` tw
GROUP BY tw.topic_id, tw.forum_id, tw.user_id
ORDER BY tw.topic_id, tw.user_id;

DROP TABLE IF EXISTS `_old_topics_watch`;
RENAME TABLE `phpbb_topics_watch` TO `_old_topics_watch`;
RENAME TABLE `___topics_watch___` TO `phpbb_topics_watch`;

INSERT INTO `phpbb_config` (`config_name`, `config_value`) VALUES ('google_custom_search', '');



########################################
##              BUILD 089             ##
########################################
ALTER TABLE `phpbb_users` DROP `user_pc_timeOffsets`;
INSERT INTO `phpbb_config` (`config_name`, `config_value`) VALUES ('use_jquery_tags', '');



########################################
##              BUILD 090             ##
########################################
ALTER TABLE `phpbb_users` ADD `user_ip` VARCHAR(40) NOT NULL DEFAULT '' AFTER `user_level`;
ALTER TABLE `phpbb_users` ADD `user_email_hash` BIGINT(20) UNSIGNED DEFAULT '0' NOT NULL AFTER `user_email`;
ALTER TABLE `phpbb_users` CHANGE `user_color_group` `group_id` MEDIUMINT( 8 ) UNSIGNED NOT NULL DEFAULT '0';
ALTER TABLE `phpbb_users` CHANGE COLUMN `user_email` `user_email` VARCHAR(255) DEFAULT NULL AFTER `username_clean`;
ALTER TABLE `phpbb_users` CHANGE COLUMN `user_email_hash` `user_email_hash` BIGINT(20) UNSIGNED DEFAULT '0' NOT NULL AFTER `user_email`;
ALTER TABLE `phpbb_users` CHANGE COLUMN `user_website` `user_website` VARCHAR(255) DEFAULT NULL AFTER `user_email_hash`;
ALTER TABLE `phpbb_users` CHANGE COLUMN `user_ip` `user_ip` VARCHAR(40) DEFAULT '' AFTER `user_website`;
## rename user_color to user_colour?



########################################
##              BUILD 091             ##
########################################



########################################
##              BUILD 092             ##
########################################
##ALTER TABLE `phpbb_topics` ADD `topic_trashed` TINYINT(1) NOT NULL DEFAULT '0' AFTER `topic_status`;
##ALTER TABLE `phpbb_topics` ADD `topic_approved` TINYINT(1) NOT NULL DEFAULT '0' AFTER `topic_status`;
ALTER TABLE `phpbb_posts` ADD `post_locked` TINYINT(1) NOT NULL DEFAULT '0' AFTER `post_bluecard`;
##ALTER TABLE `phpbb_posts` ADD `post_trashed` TINYINT(1) NOT NULL DEFAULT '0' AFTER `post_locked`;
##ALTER TABLE `phpbb_posts` ADD `post_approved` TINYINT(1) NOT NULL DEFAULT '0' AFTER `post_bluecard`;
INSERT INTO `phpbb_config` (`config_name`, `config_value`) VALUES ('user_allow_pm_register', '1');



########################################
##              BUILD 093             ##
########################################
## EDITS ON GROUPS SUSPENDED
##ALTER TABLE `phpbb_groups` DROP `group_single_user`;
##ALTER TABLE `phpbb_auth_access` ADD `group_id` MEDIUMINT(8) NOT NULL DEFAULT '0' AFTER `group_id`;
##ALTER TABLE `phpbb_users` ADD `user_groups_ids` MEDIUMTEXT NOT NULL AFTER `user_mask`;
##ALTER TABLE `phpbb_users` ADD `user_groups_refresh` TINYINT(1) DEFAULT '0' AFTER `user_groups_ids`;
DELETE FROM `phpbb_config` WHERE `config_name` = 'admin_protect';



########################################
##              BUILD 094             ##
########################################
ALTER TABLE `phpbb_users` ADD `user_facebook_id` VARCHAR(40) NOT NULL DEFAULT '' AFTER `user_email_hash`;
INSERT INTO `phpbb_config` (`config_name`, `config_value`) VALUES ('enable_social_connect', '0');
INSERT INTO `phpbb_config` (`config_name`, `config_value`) VALUES ('enable_facebook_login', '0');
INSERT INTO `phpbb_config` (`config_name`, `config_value`) VALUES ('facebook_app_id', '');
INSERT INTO `phpbb_config` (`config_name`, `config_value`) VALUES ('facebook_app_secret', '');
DELETE FROM `phpbb_config` WHERE `config_name` = 'index_links';
DELETE FROM `phpbb_cms_blocks` WHERE bs_id = (SELECT bs_id FROM `phpbb_cms_block_settings` WHERE blockfile = 'links');
DELETE FROM `phpbb_cms_block_variable` WHERE block = 'links';
DELETE FROM `phpbb_cms_block_settings` WHERE blockfile = 'links';
DELETE FROM `phpbb_cms_layout_special` WHERE page_id = 'links';
DELETE FROM `phpbb_cms_nav_menu` WHERE menu_links = 'links.php';



########################################
##              BUILD 095             ##
########################################
ALTER TABLE `phpbb_images` ADD `exif` text NOT NULL;
ALTER TABLE `phpbb_images` ADD `camera_model` varchar(255) DEFAULT '' NOT NULL;
ALTER TABLE `phpbb_images` ADD `lens` varchar(255) DEFAULT '' NOT NULL;
ALTER TABLE `phpbb_images` ADD `focal_length` varchar(255) DEFAULT '' NOT NULL;
ALTER TABLE `phpbb_images` ADD `exposure` varchar(255) DEFAULT '' NOT NULL;
ALTER TABLE `phpbb_images` ADD `aperture` varchar(255) DEFAULT '' NOT NULL;
ALTER TABLE `phpbb_images` ADD `iso` varchar(255) DEFAULT '' NOT NULL;



#####################

##UPDATE phpbb_config SET config_value = '2' WHERE config_name = 'main_admin_id';

#-- DB CHANGES FOR VERSIONING
UPDATE phpbb_config SET config_value = '2.0.9.95' WHERE config_name = 'ip_version';
UPDATE phpbb_config SET config_value = '.0.23' WHERE config_name = 'version';
UPDATE phpbb_config SET config_value = '2.0.0' WHERE config_name = 'cms_version';
UPDATE phpbb_album_config SET config_value = '1.5.0' WHERE config_name = 'fap_version';
UPDATE phpbb_config SET config_value = '2.4.5' WHERE config_name = 'attach_version';
UPDATE phpbb_config SET config_value = '3.0.7' WHERE config_name = 'upi2db_version';
