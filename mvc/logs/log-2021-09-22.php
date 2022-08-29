<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-09-22 02:08:53 --> 404 Page Not Found: Home/wp-login.php
ERROR - 2021-09-22 02:13:54 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2021-09-22 02:15:43 --> 404 Page Not Found: New/wp-login.php
ERROR - 2021-09-22 02:15:58 --> 404 Page Not Found: En/wp-login.php
ERROR - 2021-09-22 02:16:19 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2021-09-22 02:17:31 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-09-22 02:18:43 --> 404 Page Not Found: New/wp-login.php
ERROR - 2021-09-22 02:19:52 --> 404 Page Not Found: Test/wp-login.php
ERROR - 2021-09-22 02:20:18 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-09-22 02:27:57 --> 404 Page Not Found: Web/wp-login.php
ERROR - 2021-09-22 02:29:43 --> 404 Page Not Found: News/wp-login.php
ERROR - 2021-09-22 02:32:22 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-09-22 02:33:25 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-09-22 02:37:18 --> 404 Page Not Found: En/wp-login.php
ERROR - 2021-09-22 02:37:46 --> 404 Page Not Found: Test/wp-login.php
ERROR - 2021-09-22 02:38:17 --> 404 Page Not Found: Web/wp-login.php
ERROR - 2021-09-22 02:48:21 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2021-09-22 02:54:11 --> 404 Page Not Found: Home/wp-login.php
ERROR - 2021-09-22 02:56:15 --> 404 Page Not Found: Wp/wp-login.php
ERROR - 2021-09-22 02:57:07 --> 404 Page Not Found: Cms/wp-login.php
ERROR - 2021-09-22 02:57:44 --> 404 Page Not Found: Site/wp-login.php
ERROR - 2021-09-22 03:01:26 --> 404 Page Not Found: Wordpress/wp-login.php
ERROR - 2021-09-22 03:01:44 --> 404 Page Not Found: News/wp-login.php
ERROR - 2021-09-22 03:02:18 --> 404 Page Not Found: Site/wp-login.php
ERROR - 2021-09-22 03:10:05 --> 404 Page Not Found: Blog/wp-login.php
ERROR - 2021-09-22 03:26:07 --> 404 Page Not Found: Cms/wp-login.php
ERROR - 2021-09-22 08:25:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 08:25:28 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 08:25:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 08:25:39 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 08:25:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 08:25:49 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 08:25:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 08:25:57 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:15 --> Could not find the language line "quantity"
ERROR - 2021-09-22 08:26:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 08:26:23 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 09:36:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 09:36:01 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:13 --> Could not find the language line "quantity"
ERROR - 2021-09-22 09:39:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 09:39:23 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 09:39:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '2'
AND `conversation_user`.`usertypeID` = '9'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 09:39:43 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 18:52:22 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-09-22 20:43:06 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 20:43:06 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 20:43:26 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 20:43:26 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 20:43:32 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 20:43:32 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 20:43:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 20:43:39 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 21:32:50 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 21:32:50 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 21:33:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 21:33:13 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 21:33:15 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 21:33:15 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 21:33:22 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 21:33:22 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 21:33:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 21:33:23 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 21:33:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 21:33:30 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 21:53:23 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 21:53:23 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 21:53:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 21:53:30 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 22:31:21 --> 404 Page Not Found: Assets/datatables
ERROR - 2021-09-22 22:37:35 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 22:37:35 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 22:37:36 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 22:37:36 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 22:37:58 --> 404 Page Not Found: Assets/datatables
ERROR - 2021-09-22 22:38:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 22:38:04 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 22:38:06 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 22:38:06 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 22:38:11 --> 404 Page Not Found: Assets/datatables
ERROR - 2021-09-22 22:38:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 22:38:19 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 22:46:58 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 22:46:58 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 22:47:06 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 22:47:06 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 22:47:21 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 22:47:21 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 22:47:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 22:47:27 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 22:48:40 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 22:48:40 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 22:48:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 22:48:46 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 22:49:08 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 22:49:08 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 22:49:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 22:49:15 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 22:49:53 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 22:49:53 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 22:50:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 22:50:02 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 22:51:27 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 22:51:27 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 22:51:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 22:51:35 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 22:51:49 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 22:51:49 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 22:51:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 22:51:56 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 22:52:28 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 22:52:28 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 22:52:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 22:52:34 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 22:52:44 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 22:52:44 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 22:52:51 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-09-22 22:52:51 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 22:52:51 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-22 22:52:56 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-22 22:52:56 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-22 22:53:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-09-22 22:53:02 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
