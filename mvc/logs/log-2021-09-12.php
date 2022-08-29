<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-09-12 00:49:46 --> 404 Page Not Found: Wp-admin/css
ERROR - 2021-09-12 00:49:50 --> 404 Page Not Found: Well-known/index
ERROR - 2021-09-12 00:49:54 --> 404 Page Not Found: Sites/default
ERROR - 2021-09-12 00:49:59 --> 404 Page Not Found: Admin/controller
ERROR - 2021-09-12 00:50:05 --> 404 Page Not Found: Images/index
ERROR - 2021-09-12 00:50:09 --> 404 Page Not Found: Files/index
ERROR - 2021-09-12 12:13:01 --> 404 Page Not Found: Wp-admin/css
ERROR - 2021-09-12 12:13:06 --> 404 Page Not Found: Well-known/index
ERROR - 2021-09-12 12:13:13 --> 404 Page Not Found: Sites/default
ERROR - 2021-09-12 12:13:23 --> 404 Page Not Found: Admin/controller
ERROR - 2021-09-12 12:13:31 --> 404 Page Not Found: Images/index
ERROR - 2021-09-12 12:13:34 --> 404 Page Not Found: Files/index
ERROR - 2021-09-12 18:26:49 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2021-09-12 18:26:50 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2021-09-12 18:26:50 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2021-09-12 18:26:50 --> 404 Page Not Found: Web/wp-includes
ERROR - 2021-09-12 18:26:51 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2021-09-12 18:26:51 --> 404 Page Not Found: Website/wp-includes
ERROR - 2021-09-12 18:26:51 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2021-09-12 18:26:52 --> 404 Page Not Found: News/wp-includes
ERROR - 2021-09-12 18:26:52 --> 404 Page Not Found: 2020/wp-includes
ERROR - 2021-09-12 18:26:52 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2021-09-12 18:26:52 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2021-09-12 18:26:53 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2021-09-12 18:26:53 --> 404 Page Not Found: Test/wp-includes
ERROR - 2021-09-12 18:26:53 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2021-09-12 18:26:53 --> 404 Page Not Found: Site/wp-includes
ERROR - 2021-09-12 18:26:54 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2021-09-12 18:26:54 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2021-09-12 20:42:01 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-09-12 22:25:12 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-12 22:25:12 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-12 22:25:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '4'
AND `conversation_user`.`usertypeID` = '5'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-12 22:25:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-12 22:26:15 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-12 22:26:15 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-12 22:26:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '4'
AND `conversation_user`.`usertypeID` = '5'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-12 22:26:22 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-12 22:28:48 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-12 22:28:48 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-12 22:28:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '4'
AND `conversation_user`.`usertypeID` = '5'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-12 22:28:55 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-12 22:36:57 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-12 22:36:57 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-12 22:37:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '4'
AND `conversation_user`.`usertypeID` = '5'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-12 22:37:03 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-12 22:48:52 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-12 22:48:52 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-12 22:48:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '4'
AND `conversation_user`.`usertypeID` = '5'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-12 22:48:58 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-12 22:51:12 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-12 22:51:12 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-12 22:51:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '4'
AND `conversation_user`.`usertypeID` = '5'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-12 22:51:20 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-12 22:52:04 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-12 22:52:04 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-12 22:52:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '4'
AND `conversation_user`.`usertypeID` = '5'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-12 22:52:11 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-12 22:52:44 --> 404 Page Not Found: Img/log.png
ERROR - 2021-09-12 22:52:44 --> 404 Page Not Found: Img/log.png
ERROR - 2021-09-12 22:52:45 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-09-12 22:53:01 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-12 22:53:01 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-12 22:53:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '4'
AND `conversation_user`.`usertypeID` = '5'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-12 22:53:08 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-12 22:53:29 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-12 22:53:29 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-12 22:53:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '4'
AND `conversation_user`.`usertypeID` = '5'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-12 22:53:35 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-12 23:08:19 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-12 23:08:19 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-12 23:08:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '4'
AND `conversation_user`.`usertypeID` = '5'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-12 23:08:26 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-12 23:09:07 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-12 23:09:07 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-12 23:09:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '4'
AND `conversation_user`.`usertypeID` = '5'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-12 23:09:14 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-12 23:13:14 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-12 23:13:14 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-12 23:13:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '4'
AND `conversation_user`.`usertypeID` = '5'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-12 23:13:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-12 23:14:05 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-12 23:14:05 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-12 23:14:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '4'
AND `conversation_user`.`usertypeID` = '5'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-12 23:14:12 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-12 23:14:40 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-12 23:14:40 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-12 23:14:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '4'
AND `conversation_user`.`usertypeID` = '5'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-12 23:14:47 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
