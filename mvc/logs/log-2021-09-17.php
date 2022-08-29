<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-09-17 03:13:30 --> 404 Page Not Found: Dbphp/index
ERROR - 2021-09-17 10:14:48 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-17 10:14:48 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-17 10:14:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-09-17 10:14:59 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-09-17 11:07:23 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-09-17 11:07:23 --> Could not find the language line "menu_Admissions"
ERROR - 2021-09-17 11:07:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-09-17 11:07:30 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
