<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: Wp-includes/wlwmanifest.xml
ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: Xmlrpcphp/index
ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: Blog/wp-includes
ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: Web/wp-includes
ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: Wordpress/wp-includes
ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: Website/wp-includes
ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: Wp/wp-includes
ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: News/wp-includes
ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: 2018/wp-includes
ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: 2019/wp-includes
ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: Shop/wp-includes
ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: Wp1/wp-includes
ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: Test/wp-includes
ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: Media/wp-includes
ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: Wp2/wp-includes
ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: Site/wp-includes
ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: Cms/wp-includes
ERROR - 2021-09-16 05:24:07 --> 404 Page Not Found: Sito/wp-includes
ERROR - 2021-09-16 09:05:51 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-16 09:05:51 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-16 09:05:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-09-16 09:05:58 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-16 09:06:00 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-16 09:06:00 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-16 09:06:06 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-09-16 09:06:06 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
