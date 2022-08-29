<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-21 00:07:58 --> Invalid query: 
ERROR - 2021-11-21 00:07:58 --> Invalid query: 
ERROR - 2021-11-21 00:07:58 --> Invalid query: 
ERROR - 2021-11-21 00:07:58 --> Invalid query: 
ERROR - 2021-11-21 00:07:58 --> Invalid query: 
ERROR - 2021-11-21 00:07:58 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 00:07:58 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 00:07:58 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 00:08:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 00:08:17 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 00:08:17 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 00:08:17 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 00:08:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:33 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 00:08:33 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 00:08:33 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 00:08:33 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-21 00:08:33 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-21 00:08:33 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-21 00:08:33 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-11-21 00:08:33 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-11-21 00:08:33 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:08:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 00:08:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 00:09:21 --> Invalid query: 
ERROR - 2021-11-21 00:09:21 --> Invalid query: 
ERROR - 2021-11-21 00:09:21 --> Invalid query: 
ERROR - 2021-11-21 00:09:21 --> Invalid query: 
ERROR - 2021-11-21 00:09:21 --> Invalid query: 
ERROR - 2021-11-21 00:09:21 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 00:09:37 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 00:09:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '605'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:10:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 00:21:59 --> Invalid query: 
ERROR - 2021-11-21 00:21:59 --> Invalid query: 
ERROR - 2021-11-21 00:21:59 --> Invalid query: 
ERROR - 2021-11-21 00:21:59 --> Invalid query: 
ERROR - 2021-11-21 00:21:59 --> Invalid query: 
ERROR - 2021-11-21 00:21:59 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 00:22:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '408'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 00:22:16 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 00:22:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:22:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:22:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:22:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:22:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:22:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:22:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:22:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:22:16 --> Severity: Notice --> Undefined property: MY_Loader::$pagination /home/onamhamy/public_html/onlineedu/mvc/views/invoice/index.php 203
ERROR - 2021-11-21 00:22:16 --> Severity: error --> Exception: Call to a member function create_links() on null /home/onamhamy/public_html/onlineedu/mvc/views/invoice/index.php 203
ERROR - 2021-11-21 00:23:38 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-21 00:24:01 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 00:24:01 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:24:01 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:24:01 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:24:01 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:24:01 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:24:01 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:24:01 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:24:01 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:24:01 --> Severity: Notice --> Undefined property: MY_Loader::$pagination /home/onamhamy/public_html/onlineedu/mvc/views/invoice/index.php 203
ERROR - 2021-11-21 00:24:01 --> Severity: error --> Exception: Call to a member function create_links() on null /home/onamhamy/public_html/onlineedu/mvc/views/invoice/index.php 203
ERROR - 2021-11-21 00:27:14 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 00:27:14 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:27:14 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:27:14 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:27:14 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:27:14 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:27:14 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:27:14 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:27:14 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:27:14 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:27:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '408'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 00:32:40 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 00:32:40 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:32:40 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:32:40 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:32:40 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:32:40 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:32:40 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:32:40 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:32:40 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:32:40 --> Severity: Notice --> Undefined property: MY_Loader::$pagination /home/onamhamy/public_html/onlineedu/mvc/views/invoice/index.php 205
ERROR - 2021-11-21 00:32:40 --> Severity: error --> Exception: Call to a member function create_links() on null /home/onamhamy/public_html/onlineedu/mvc/views/invoice/index.php 205
ERROR - 2021-11-21 00:32:51 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 00:32:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:32:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:32:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:32:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:32:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:32:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:32:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:32:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:32:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:32:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '408'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 00:33:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 01:44:07 --> Invalid query: 
ERROR - 2021-11-21 01:44:07 --> Invalid query: 
ERROR - 2021-11-21 01:44:07 --> Invalid query: 
ERROR - 2021-11-21 01:44:07 --> Invalid query: 
ERROR - 2021-11-21 01:44:07 --> Invalid query: 
ERROR - 2021-11-21 01:44:08 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 01:44:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '682'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 01:44:29 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 04:53:03 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-11-21 08:05:49 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-11-21 08:18:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-11-21 09:04:22 --> Invalid query: 
ERROR - 2021-11-21 09:04:22 --> Invalid query: 
ERROR - 2021-11-21 09:04:22 --> Invalid query: 
ERROR - 2021-11-21 09:04:22 --> Invalid query: 
ERROR - 2021-11-21 09:04:22 --> Invalid query: 
ERROR - 2021-11-21 09:04:23 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:04:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '576'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 09:04:36 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:04:36 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 09:04:36 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 09:04:36 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 09:04:36 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 09:04:36 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 09:04:36 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 09:04:36 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 09:04:36 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 09:04:36 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 09:04:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '576'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 09:04:55 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:04:59 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:05:04 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:05:08 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:05:11 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:05:13 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:05:18 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:05:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '576'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 09:05:24 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:05:27 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:05:33 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '576'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 09:05:33 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:05:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '576'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 09:05:39 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:05:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '576'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 09:05:44 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:05:48 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:05:53 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '576'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 09:05:55 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:05:59 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:06:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '576'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 09:06:12 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:06:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '576'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 09:07:09 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:07:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '576'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 09:07:18 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:07:21 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:07:25 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 09:07:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '576'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 10:03:58 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-11-21 12:29:20 --> 404 Page Not Found: Wordpress/index
ERROR - 2021-11-21 13:10:46 --> Invalid query: 
ERROR - 2021-11-21 13:10:46 --> Invalid query: 
ERROR - 2021-11-21 13:10:46 --> Invalid query: 
ERROR - 2021-11-21 13:10:46 --> Invalid query: 
ERROR - 2021-11-21 13:10:46 --> Invalid query: 
ERROR - 2021-11-21 13:10:46 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 13:10:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '728'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 13:11:14 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 13:17:16 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-21 13:28:58 --> Invalid query: 
ERROR - 2021-11-21 13:28:58 --> Invalid query: 
ERROR - 2021-11-21 13:28:58 --> Invalid query: 
ERROR - 2021-11-21 13:28:58 --> Invalid query: 
ERROR - 2021-11-21 13:28:58 --> Invalid query: 
ERROR - 2021-11-21 13:29:24 --> Invalid query: 
ERROR - 2021-11-21 13:29:24 --> Invalid query: 
ERROR - 2021-11-21 13:29:24 --> Invalid query: 
ERROR - 2021-11-21 13:29:24 --> Invalid query: 
ERROR - 2021-11-21 13:29:24 --> Invalid query: 
ERROR - 2021-11-21 13:30:03 --> Invalid query: 
ERROR - 2021-11-21 13:30:03 --> Invalid query: 
ERROR - 2021-11-21 13:30:03 --> Invalid query: 
ERROR - 2021-11-21 13:30:03 --> Invalid query: 
ERROR - 2021-11-21 13:30:03 --> Invalid query: 
ERROR - 2021-11-21 13:30:13 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-21 16:35:11 --> Invalid query: 
ERROR - 2021-11-21 16:35:11 --> Invalid query: 
ERROR - 2021-11-21 16:35:11 --> Invalid query: 
ERROR - 2021-11-21 16:35:11 --> Invalid query: 
ERROR - 2021-11-21 16:35:11 --> Invalid query: 
ERROR - 2021-11-21 16:35:11 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 16:35:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '191'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 16:35:30 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 16:35:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '191'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 16:41:49 --> Invalid query: 
ERROR - 2021-11-21 16:41:49 --> Invalid query: 
ERROR - 2021-11-21 16:41:49 --> Invalid query: 
ERROR - 2021-11-21 16:41:49 --> Invalid query: 
ERROR - 2021-11-21 16:41:49 --> Invalid query: 
ERROR - 2021-11-21 16:41:50 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 16:42:17 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 16:43:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '300'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 16:43:52 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 16:51:22 --> Invalid query: 
ERROR - 2021-11-21 16:51:22 --> Invalid query: 
ERROR - 2021-11-21 16:51:22 --> Invalid query: 
ERROR - 2021-11-21 16:51:22 --> Invalid query: 
ERROR - 2021-11-21 16:51:22 --> Invalid query: 
ERROR - 2021-11-21 16:51:23 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 16:52:07 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 16:54:53 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 16:54:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '291'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 16:55:01 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 16:55:32 --> Invalid query: 
ERROR - 2021-11-21 16:55:32 --> Invalid query: 
ERROR - 2021-11-21 16:55:32 --> Invalid query: 
ERROR - 2021-11-21 16:55:32 --> Invalid query: 
ERROR - 2021-11-21 16:55:32 --> Invalid query: 
ERROR - 2021-11-21 16:55:33 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 16:55:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '290'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 16:55:40 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 17:45:31 --> Invalid query: 
ERROR - 2021-11-21 17:45:31 --> Invalid query: 
ERROR - 2021-11-21 17:45:31 --> Invalid query: 
ERROR - 2021-11-21 17:45:31 --> Invalid query: 
ERROR - 2021-11-21 17:45:31 --> Invalid query: 
ERROR - 2021-11-21 17:45:31 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 17:45:37 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 17:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:45:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '922'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 17:45:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '922'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 17:46:07 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 17:46:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:46:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:46:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:46:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:46:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:46:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:46:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:46:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:46:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 17:46:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '922'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 17:46:29 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 17:46:38 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '922'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 17:46:40 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 17:46:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '922'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 18:18:30 --> Invalid query: 
ERROR - 2021-11-21 18:18:30 --> Invalid query: 
ERROR - 2021-11-21 18:18:30 --> Invalid query: 
ERROR - 2021-11-21 18:18:30 --> Invalid query: 
ERROR - 2021-11-21 18:18:30 --> Invalid query: 
ERROR - 2021-11-21 18:18:30 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 18:18:49 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 18:19:42 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 18:19:51 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1018'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 18:19:57 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 18:20:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1018'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 18:46:53 --> Invalid query: 
ERROR - 2021-11-21 18:46:53 --> Invalid query: 
ERROR - 2021-11-21 18:46:53 --> Invalid query: 
ERROR - 2021-11-21 18:46:53 --> Invalid query: 
ERROR - 2021-11-21 18:46:53 --> Invalid query: 
ERROR - 2021-11-21 18:46:53 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 18:47:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '443'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 19:34:09 --> Invalid query: 
ERROR - 2021-11-21 19:34:09 --> Invalid query: 
ERROR - 2021-11-21 19:34:09 --> Invalid query: 
ERROR - 2021-11-21 19:34:09 --> Invalid query: 
ERROR - 2021-11-21 19:34:09 --> Invalid query: 
ERROR - 2021-11-21 19:34:10 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 19:34:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '420'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 19:35:04 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 19:35:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '420'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 19:35:27 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 19:35:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '420'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 19:35:58 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 19:36:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '420'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 19:36:13 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 19:36:13 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:36:13 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:36:13 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:36:13 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:36:13 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:36:13 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:36:13 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:36:13 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:36:13 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:36:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '420'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 19:37:03 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 19:37:03 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-21 19:37:03 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-21 19:37:03 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-21 19:37:03 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-11-21 19:37:03 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-11-21 19:37:03 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:37:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '420'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 19:37:48 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 19:38:56 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 19:38:59 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 19:38:59 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-21 19:38:59 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-21 19:38:59 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-21 19:38:59 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-11-21 19:38:59 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-11-21 19:38:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:39:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '420'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 19:39:26 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 19:39:26 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:39:26 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:39:26 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:39:26 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:39:26 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:39:26 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:39:26 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:39:26 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:39:26 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 19:39:39 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 20:04:23 --> Invalid query: 
ERROR - 2021-11-21 20:04:23 --> Invalid query: 
ERROR - 2021-11-21 20:04:23 --> Invalid query: 
ERROR - 2021-11-21 20:04:23 --> Invalid query: 
ERROR - 2021-11-21 20:04:23 --> Invalid query: 
ERROR - 2021-11-21 20:04:23 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 20:04:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '255'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 20:05:03 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 20:40:22 --> 404 Page Not Found: Dashboardphp/index
ERROR - 2021-11-21 20:48:46 --> Invalid query: 
ERROR - 2021-11-21 20:48:46 --> Invalid query: 
ERROR - 2021-11-21 20:48:46 --> Invalid query: 
ERROR - 2021-11-21 20:48:46 --> Invalid query: 
ERROR - 2021-11-21 20:48:46 --> Invalid query: 
ERROR - 2021-11-21 20:48:46 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 20:49:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '196'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 20:49:00 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 20:54:43 --> Invalid query: 
ERROR - 2021-11-21 20:54:43 --> Invalid query: 
ERROR - 2021-11-21 20:54:43 --> Invalid query: 
ERROR - 2021-11-21 20:54:43 --> Invalid query: 
ERROR - 2021-11-21 20:54:43 --> Invalid query: 
ERROR - 2021-11-21 20:54:44 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 20:56:05 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 21:45:03 --> 404 Page Not Found: Enroll-studentphp/index
ERROR - 2021-11-21 21:54:27 --> Invalid query: 
ERROR - 2021-11-21 21:54:27 --> Invalid query: 
ERROR - 2021-11-21 21:54:27 --> Invalid query: 
ERROR - 2021-11-21 21:54:27 --> Invalid query: 
ERROR - 2021-11-21 21:54:27 --> Invalid query: 
ERROR - 2021-11-21 21:54:35 --> Invalid query: 
ERROR - 2021-11-21 21:54:35 --> Invalid query: 
ERROR - 2021-11-21 21:54:35 --> Invalid query: 
ERROR - 2021-11-21 21:54:35 --> Invalid query: 
ERROR - 2021-11-21 21:54:35 --> Invalid query: 
ERROR - 2021-11-21 21:54:46 --> Invalid query: 
ERROR - 2021-11-21 21:54:46 --> Invalid query: 
ERROR - 2021-11-21 21:54:46 --> Invalid query: 
ERROR - 2021-11-21 21:54:46 --> Invalid query: 
ERROR - 2021-11-21 21:54:46 --> Invalid query: 
ERROR - 2021-11-21 21:54:57 --> Invalid query: 
ERROR - 2021-11-21 21:54:57 --> Invalid query: 
ERROR - 2021-11-21 21:54:57 --> Invalid query: 
ERROR - 2021-11-21 21:54:57 --> Invalid query: 
ERROR - 2021-11-21 21:54:57 --> Invalid query: 
ERROR - 2021-11-21 21:55:30 --> Invalid query: 
ERROR - 2021-11-21 21:55:30 --> Invalid query: 
ERROR - 2021-11-21 21:55:30 --> Invalid query: 
ERROR - 2021-11-21 21:55:30 --> Invalid query: 
ERROR - 2021-11-21 21:55:30 --> Invalid query: 
ERROR - 2021-11-21 21:57:24 --> Invalid query: 
ERROR - 2021-11-21 21:57:24 --> Invalid query: 
ERROR - 2021-11-21 21:57:24 --> Invalid query: 
ERROR - 2021-11-21 21:57:24 --> Invalid query: 
ERROR - 2021-11-21 21:57:24 --> Invalid query: 
ERROR - 2021-11-21 21:57:31 --> Invalid query: 
ERROR - 2021-11-21 21:57:31 --> Invalid query: 
ERROR - 2021-11-21 21:57:31 --> Invalid query: 
ERROR - 2021-11-21 21:57:31 --> Invalid query: 
ERROR - 2021-11-21 21:57:31 --> Invalid query: 
ERROR - 2021-11-21 21:59:56 --> Invalid query: 
ERROR - 2021-11-21 21:59:56 --> Invalid query: 
ERROR - 2021-11-21 21:59:56 --> Invalid query: 
ERROR - 2021-11-21 21:59:56 --> Invalid query: 
ERROR - 2021-11-21 21:59:56 --> Invalid query: 
ERROR - 2021-11-21 22:00:11 --> Invalid query: 
ERROR - 2021-11-21 22:00:11 --> Invalid query: 
ERROR - 2021-11-21 22:00:11 --> Invalid query: 
ERROR - 2021-11-21 22:00:11 --> Invalid query: 
ERROR - 2021-11-21 22:00:11 --> Invalid query: 
ERROR - 2021-11-21 22:02:42 --> Invalid query: 
ERROR - 2021-11-21 22:02:42 --> Invalid query: 
ERROR - 2021-11-21 22:02:42 --> Invalid query: 
ERROR - 2021-11-21 22:02:42 --> Invalid query: 
ERROR - 2021-11-21 22:02:42 --> Invalid query: 
ERROR - 2021-11-21 22:02:43 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 22:02:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '687'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 22:03:49 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 22:03:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '687'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 22:04:00 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 22:04:05 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 22:04:06 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '687'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 22:04:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '687'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 22:47:53 --> Invalid query: 
ERROR - 2021-11-21 22:47:53 --> Invalid query: 
ERROR - 2021-11-21 22:47:53 --> Invalid query: 
ERROR - 2021-11-21 22:47:53 --> Invalid query: 
ERROR - 2021-11-21 22:47:53 --> Invalid query: 
ERROR - 2021-11-21 22:47:54 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 22:47:54 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 22:47:54 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 22:48:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 22:48:37 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 22:48:37 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 22:48:37 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 22:48:42 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 22:48:42 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 22:48:42 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 22:48:45 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 22:48:45 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 22:48:45 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 22:48:52 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 22:48:56 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 22:48:56 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 22:48:56 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 22:49:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 22:49:07 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 22:49:07 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 22:49:07 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 22:49:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 22:50:05 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 22:50:05 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 22:50:05 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 22:50:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 22:50:12 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 22:50:12 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 22:50:12 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 22:50:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 22:53:58 --> Invalid query: 
ERROR - 2021-11-21 22:53:58 --> Invalid query: 
ERROR - 2021-11-21 22:53:58 --> Invalid query: 
ERROR - 2021-11-21 22:53:58 --> Invalid query: 
ERROR - 2021-11-21 22:53:58 --> Invalid query: 
ERROR - 2021-11-21 22:54:12 --> Invalid query: 
ERROR - 2021-11-21 22:54:12 --> Invalid query: 
ERROR - 2021-11-21 22:54:12 --> Invalid query: 
ERROR - 2021-11-21 22:54:12 --> Invalid query: 
ERROR - 2021-11-21 22:54:12 --> Invalid query: 
ERROR - 2021-11-21 22:54:33 --> Invalid query: 
ERROR - 2021-11-21 22:54:33 --> Invalid query: 
ERROR - 2021-11-21 22:54:33 --> Invalid query: 
ERROR - 2021-11-21 22:54:33 --> Invalid query: 
ERROR - 2021-11-21 22:54:33 --> Invalid query: 
ERROR - 2021-11-21 22:54:44 --> Invalid query: 
ERROR - 2021-11-21 22:54:44 --> Invalid query: 
ERROR - 2021-11-21 22:54:44 --> Invalid query: 
ERROR - 2021-11-21 22:54:44 --> Invalid query: 
ERROR - 2021-11-21 22:54:44 --> Invalid query: 
ERROR - 2021-11-21 22:54:52 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-21 23:08:23 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 23:08:23 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 23:08:23 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 23:08:32 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 23:08:32 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 23:08:32 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 23:08:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 23:09:23 --> Invalid query: 
ERROR - 2021-11-21 23:09:23 --> Invalid query: 
ERROR - 2021-11-21 23:09:23 --> Invalid query: 
ERROR - 2021-11-21 23:09:23 --> Invalid query: 
ERROR - 2021-11-21 23:09:23 --> Invalid query: 
ERROR - 2021-11-21 23:09:24 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 23:09:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1631'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-21 23:24:15 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-11-21 23:24:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-11-21 23:28:31 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 23:28:31 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 23:28:31 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 23:28:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 23:38:19 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 23:38:19 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 23:38:19 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 23:38:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 23:39:42 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 23:39:42 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 23:39:42 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 23:39:50 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 23:41:04 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 23:41:04 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 23:41:04 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 23:41:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 23:41:13 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 23:41:13 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 23:41:13 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 23:41:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:41:50 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:42:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:55:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:56:06 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 23:56:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:44 --> Could not find the language line "invoice_date"
ERROR - 2021-11-21 23:59:51 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
