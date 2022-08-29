<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-30 00:51:49 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 00:51:49 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 00:51:49 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 00:51:49 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 00:51:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 00:53:20 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 00:53:20 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 00:53:20 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 00:53:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 00:53:23 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 00:53:23 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 00:53:23 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 00:53:23 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 00:53:23 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 00:53:23 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 00:53:23 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-11-30 00:53:23 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-11-30 00:53:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 00:53:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 00:53:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 00:53:41 --> Invalid query: 
ERROR - 2021-11-30 00:53:41 --> Invalid query: 
ERROR - 2021-11-30 00:53:41 --> Invalid query: 
ERROR - 2021-11-30 00:53:41 --> Invalid query: 
ERROR - 2021-11-30 00:53:41 --> Invalid query: 
ERROR - 2021-11-30 00:53:42 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 00:53:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 00:53:50 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 00:56:30 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 00:56:30 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 00:56:30 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 00:56:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 01:00:27 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:00:27 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:00:27 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 01:00:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 01:01:10 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:01:10 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:01:10 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 01:01:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 01:01:48 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 01:25:24 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:25:24 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:25:24 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 01:25:28 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:25:28 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:25:28 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 01:25:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 01:28:51 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:28:51 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:28:51 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 01:28:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 01:43:20 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:43:20 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:43:20 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 01:43:20 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 01:43:20 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 01:43:20 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 01:43:20 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-11-30 01:43:20 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-11-30 01:43:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 01:43:21 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:43:21 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:43:21 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 01:43:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 01:43:31 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:43:31 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:43:31 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 01:43:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 01:43:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 01:43:55 --> Severity: Warning --> date_format() expects parameter 1 to be DateTimeInterface, string given /home/onamhamy/public_html/onlineedu/mvc/controllers/Bulkimport.php 424
ERROR - 2021-11-30 01:44:46 --> 404 Page Not Found: Bulkimport/index
ERROR - 2021-11-30 01:44:50 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:44:50 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:44:50 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 01:45:06 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:45:06 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:45:06 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 01:45:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 01:45:53 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:45:53 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:45:53 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 01:45:56 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:45:56 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:45:56 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 01:46:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 01:56:28 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:56:28 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:56:28 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 01:56:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 01:56:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 01:56:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 01:56:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 01:56:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 01:56:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 01:56:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 01:56:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 01:56:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 01:56:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 01:57:23 --> Severity: error --> Exception: syntax error, unexpected end of file, expecting ')' /home/onamhamy/public_html/onlineedu/mvc/controllers/Bulkimport.php 588
ERROR - 2021-11-30 01:57:54 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:57:54 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:57:54 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 01:58:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 01:58:27 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:58:27 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:58:27 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 01:58:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 01:58:41 --> Severity: Notice --> A non well formed numeric value encountered /home/onamhamy/public_html/onlineedu/mvc/controllers/Bulkimport.php 421
ERROR - 2021-11-30 01:59:29 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:59:29 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:59:29 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 01:59:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 01:59:52 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:59:52 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:59:52 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 01:59:55 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 01:59:55 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 01:59:55 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:00:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 02:00:06 --> Severity: Warning --> date_format() expects parameter 1 to be DateTimeInterface, string given /home/onamhamy/public_html/onlineedu/mvc/controllers/Bulkimport.php 424
ERROR - 2021-11-30 02:00:21 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 02:00:21 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 02:00:21 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:00:24 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 02:00:24 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 02:00:24 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:00:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 02:03:51 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 02:03:51 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 02:03:51 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:03:53 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 02:03:53 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 02:03:53 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:03:55 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 02:03:55 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 02:03:55 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:04:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 02:04:51 --> 404 Page Not Found: Bulkimport/index
ERROR - 2021-11-30 02:05:05 --> 404 Page Not Found: Bulkimport/index
ERROR - 2021-11-30 02:05:07 --> 404 Page Not Found: Bulkimport/index
ERROR - 2021-11-30 02:05:24 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 02:05:24 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 02:05:24 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:05:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 02:08:57 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 02:08:57 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 02:08:57 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:09:00 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 02:09:00 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 02:09:00 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:09:07 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 02:13:06 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 02:13:06 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 02:13:06 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:13:09 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 02:13:09 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 02:13:09 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:13:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 02:13:33 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 02:13:33 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 02:13:33 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:13:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 02:13:44 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 02:13:44 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 02:13:44 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:13:51 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 02:14:57 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 02:14:57 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 02:14:57 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:15:01 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 02:15:01 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 02:15:01 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:15:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 02:15:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-11-30 02:15:17 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-11-30 02:16:24 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 02:16:24 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 02:16:24 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:16:27 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 02:16:27 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 02:16:27 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:16:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 02:16:44 --> Invalid query: 
ERROR - 2021-11-30 02:16:44 --> Invalid query: 
ERROR - 2021-11-30 02:16:44 --> Invalid query: 
ERROR - 2021-11-30 02:16:44 --> Invalid query: 
ERROR - 2021-11-30 02:16:44 --> Invalid query: 
ERROR - 2021-11-30 02:16:44 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:16:53 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:16:53 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 02:16:53 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 02:16:53 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 02:16:53 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 02:16:53 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 02:16:53 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 02:16:53 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 02:16:53 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 02:16:53 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 02:16:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1605'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 02:17:57 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:18:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1605'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 02:18:07 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:18:10 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:18:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1605'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 02:19:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-11-30 02:19:12 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-11-30 02:19:14 --> 404 Page Not Found: Sitemapxml/index
ERROR - 2021-11-30 02:26:46 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 02:26:46 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 02:26:46 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:26:46 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 02:26:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 02:47:30 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 02:47:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1605'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 03:56:34 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-11-30 07:34:39 --> Invalid query: 
ERROR - 2021-11-30 07:34:39 --> Invalid query: 
ERROR - 2021-11-30 07:34:39 --> Invalid query: 
ERROR - 2021-11-30 07:34:39 --> Invalid query: 
ERROR - 2021-11-30 07:34:39 --> Invalid query: 
ERROR - 2021-11-30 07:35:03 --> Invalid query: 
ERROR - 2021-11-30 07:35:03 --> Invalid query: 
ERROR - 2021-11-30 07:35:03 --> Invalid query: 
ERROR - 2021-11-30 07:35:03 --> Invalid query: 
ERROR - 2021-11-30 07:35:03 --> Invalid query: 
ERROR - 2021-11-30 07:35:22 --> Invalid query: 
ERROR - 2021-11-30 07:35:22 --> Invalid query: 
ERROR - 2021-11-30 07:35:22 --> Invalid query: 
ERROR - 2021-11-30 07:35:22 --> Invalid query: 
ERROR - 2021-11-30 07:35:22 --> Invalid query: 
ERROR - 2021-11-30 07:35:39 --> Invalid query: 
ERROR - 2021-11-30 07:35:39 --> Invalid query: 
ERROR - 2021-11-30 07:35:39 --> Invalid query: 
ERROR - 2021-11-30 07:35:39 --> Invalid query: 
ERROR - 2021-11-30 07:35:39 --> Invalid query: 
ERROR - 2021-11-30 07:35:53 --> Invalid query: 
ERROR - 2021-11-30 07:35:53 --> Invalid query: 
ERROR - 2021-11-30 07:35:53 --> Invalid query: 
ERROR - 2021-11-30 07:35:53 --> Invalid query: 
ERROR - 2021-11-30 07:35:53 --> Invalid query: 
ERROR - 2021-11-30 08:19:42 --> Invalid query: 
ERROR - 2021-11-30 08:19:42 --> Invalid query: 
ERROR - 2021-11-30 08:19:42 --> Invalid query: 
ERROR - 2021-11-30 08:19:42 --> Invalid query: 
ERROR - 2021-11-30 08:19:42 --> Invalid query: 
ERROR - 2021-11-30 08:19:42 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 08:19:42 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 08:19:42 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 08:19:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:19:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 08:20:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 08:20:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:12 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 08:20:12 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 08:20:12 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 08:20:12 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 08:20:12 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 08:20:12 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 08:20:12 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-11-30 08:20:12 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-11-30 08:20:12 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:20:15 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 08:20:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:02 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:44:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 08:52:01 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 08:52:01 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 08:52:01 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 08:52:01 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 08:52:01 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 08:52:01 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 08:52:01 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-11-30 08:52:01 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-11-30 08:52:01 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 08:52:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 09:08:37 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:09:44 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:11:18 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:14:13 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:15:01 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:32:13 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:32:57 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:33:12 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:35:19 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:37:19 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:37:47 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:40:32 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:41:47 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:42:01 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:42:34 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:42:45 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:43:16 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:44:44 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 09:49:01 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 10:11:23 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-11-30 10:35:02 --> Invalid query: 
ERROR - 2021-11-30 10:35:02 --> Invalid query: 
ERROR - 2021-11-30 10:35:02 --> Invalid query: 
ERROR - 2021-11-30 10:35:02 --> Invalid query: 
ERROR - 2021-11-30 10:35:02 --> Invalid query: 
ERROR - 2021-11-30 10:35:02 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 10:35:02 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 10:35:02 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 10:35:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:23 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:29 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:42 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 10:35:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 11:00:01 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 11:00:01 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 11:00:01 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 11:00:01 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:09 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 11:00:15 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 11:00:15 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 11:00:15 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 11:00:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 11:00:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:00:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:05:07 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 11:05:07 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 11:05:07 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 11:05:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:21 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 11:43:29 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 11:51:51 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 11:51:51 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 11:51:51 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 11:52:07 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 11:52:45 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 11:52:45 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 11:52:45 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 11:53:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 11:54:00 --> 404 Page Not Found: Img/log.png
ERROR - 2021-11-30 11:54:00 --> 404 Page Not Found: Img/log.png
ERROR - 2021-11-30 11:54:07 --> 404 Page Not Found: Img/log.png
ERROR - 2021-11-30 11:54:07 --> 404 Page Not Found: Img/log.png
ERROR - 2021-11-30 11:54:09 --> 404 Page Not Found: Img/log.png
ERROR - 2021-11-30 11:54:09 --> 404 Page Not Found: Img/log.png
ERROR - 2021-11-30 11:54:12 --> 404 Page Not Found: Img/log.png
ERROR - 2021-11-30 11:54:12 --> 404 Page Not Found: Img/log.png
ERROR - 2021-11-30 11:55:55 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 11:55:55 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 11:55:55 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 11:56:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 11:56:34 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 11:56:34 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 11:56:34 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 11:57:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 11:58:35 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 11:58:35 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 11:58:35 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 11:58:41 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 11:58:45 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 11:58:45 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 11:58:45 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 11:59:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 12:00:21 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 12:00:21 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 12:00:21 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:00:26 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 12:00:26 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 12:00:26 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:00:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 12:04:04 --> 404 Page Not Found: Enroll-studentphp/index
ERROR - 2021-11-30 12:04:06 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 12:04:07 --> 404 Page Not Found: Dashboardphp/index
ERROR - 2021-11-30 12:04:12 --> 404 Page Not Found: Sign-uphtml/index
ERROR - 2021-11-30 12:04:42 --> 404 Page Not Found: Loginlmsphp/index
ERROR - 2021-11-30 12:04:44 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 12:05:26 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 12:05:26 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 12:05:26 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:05:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 12:05:47 --> 404 Page Not Found: Print-rollno-slipphp/index
ERROR - 2021-11-30 12:05:58 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 12:05:58 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 12:05:58 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:05:58 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 12:05:58 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 12:05:58 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 12:05:58 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-11-30 12:05:58 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-11-30 12:05:58 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:06:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 12:24:39 --> Invalid query: 
ERROR - 2021-11-30 12:24:39 --> Invalid query: 
ERROR - 2021-11-30 12:24:39 --> Invalid query: 
ERROR - 2021-11-30 12:24:39 --> Invalid query: 
ERROR - 2021-11-30 12:24:39 --> Invalid query: 
ERROR - 2021-11-30 12:24:40 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:24:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1226'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 12:24:56 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:25:07 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:25:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1226'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 12:25:18 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:25:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1226'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 12:25:33 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:25:38 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:25:45 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:25:51 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1226'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 12:25:56 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:25:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:25:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:25:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:25:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:25:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:25:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:25:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:25:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:25:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:26:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1226'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 12:26:10 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:26:13 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:26:15 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:26:16 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:26:22 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:26:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1226'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 12:26:26 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:26:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1226'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 12:26:44 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:26:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1226'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 12:26:50 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:26:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1226'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 12:27:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1226'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 12:27:22 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:27:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1226'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 12:27:25 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:27:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1226'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 12:27:31 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:27:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1226'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 12:27:42 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:27:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1226'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 12:27:49 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:27:52 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:27:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1226'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 12:27:59 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:28:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1226'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:25 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 12:42:30 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 12:42:30 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 12:42:30 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:42:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 12:46:30 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 12:46:30 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 12:46:30 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 12:46:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:05:28 --> Invalid query: 
ERROR - 2021-11-30 13:05:28 --> Invalid query: 
ERROR - 2021-11-30 13:05:28 --> Invalid query: 
ERROR - 2021-11-30 13:05:28 --> Invalid query: 
ERROR - 2021-11-30 13:05:28 --> Invalid query: 
ERROR - 2021-11-30 13:05:29 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:05:29 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:05:29 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:05:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:05:59 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:05:59 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:05:59 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:06:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:06:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:06:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:06:28 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:08:48 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:08:59 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:09:47 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:09:47 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:09:47 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:09:47 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 13:09:47 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 13:09:47 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 13:09:47 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-11-30 13:09:47 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-11-30 13:09:47 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:09:52 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 13:09:53 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:43 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:45 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:54 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:10:54 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:11:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:11:20 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:11:20 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:11:20 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:11:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:11:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:15:54 --> Invalid query: 
ERROR - 2021-11-30 13:15:54 --> Invalid query: 
ERROR - 2021-11-30 13:15:54 --> Invalid query: 
ERROR - 2021-11-30 13:15:54 --> Invalid query: 
ERROR - 2021-11-30 13:15:54 --> Invalid query: 
ERROR - 2021-11-30 13:17:22 --> Invalid query: 
ERROR - 2021-11-30 13:17:22 --> Invalid query: 
ERROR - 2021-11-30 13:17:22 --> Invalid query: 
ERROR - 2021-11-30 13:17:22 --> Invalid query: 
ERROR - 2021-11-30 13:17:22 --> Invalid query: 
ERROR - 2021-11-30 13:17:23 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:17:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1455'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 13:18:35 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:18:41 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:18:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1455'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 13:18:50 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:18:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1455'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 13:19:03 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:19:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1455'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 13:21:18 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:21:21 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:21:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1455'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 13:21:38 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:21:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1455'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 13:21:58 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:22:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1455'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 13:22:09 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:04 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:07 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:28:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:32:09 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:32:09 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:32:09 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:32:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:05 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:11 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:58:11 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:58:11 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:58:11 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:58:33 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:58:37 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:58:37 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:58:37 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:58:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:58:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:59:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:59:12 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:59:12 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:59:12 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:59:12 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:59:12 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:59:12 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:59:12 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:59:12 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:59:12 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:59:12 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:59:12 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:59:12 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:59:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 13:59:29 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 13:59:29 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 13:59:29 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 13:59:29 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 13:59:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:06 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 14:00:20 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 14:00:20 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 14:00:20 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:00:20 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 14:00:20 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 14:00:20 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 14:00:20 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-11-30 14:00:20 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-11-30 14:00:20 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:00:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 14:16:54 --> Invalid query: 
ERROR - 2021-11-30 14:16:54 --> Invalid query: 
ERROR - 2021-11-30 14:16:54 --> Invalid query: 
ERROR - 2021-11-30 14:16:54 --> Invalid query: 
ERROR - 2021-11-30 14:16:54 --> Invalid query: 
ERROR - 2021-11-30 14:16:54 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 14:16:54 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 14:16:54 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:17:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 14:17:01 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 14:17:01 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 14:17:01 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:17:45 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 14:17:45 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 14:17:45 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:17:49 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 14:17:49 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 14:17:49 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:17:55 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 14:17:55 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 14:17:55 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:17:56 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 14:17:56 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 14:17:56 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:18:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 14:18:13 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 14:18:13 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 14:18:13 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:18:17 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 14:18:17 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 14:18:17 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:18:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 14:18:40 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 14:18:40 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 14:18:40 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:18:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 14:20:37 --> Invalid query: 
ERROR - 2021-11-30 14:20:37 --> Invalid query: 
ERROR - 2021-11-30 14:20:37 --> Invalid query: 
ERROR - 2021-11-30 14:20:37 --> Invalid query: 
ERROR - 2021-11-30 14:20:37 --> Invalid query: 
ERROR - 2021-11-30 14:20:39 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:21:29 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:21:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '118'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 14:22:00 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:22:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '118'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 14:22:58 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:23:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '118'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 14:23:24 --> Invalid query: 
ERROR - 2021-11-30 14:23:24 --> Invalid query: 
ERROR - 2021-11-30 14:23:24 --> Invalid query: 
ERROR - 2021-11-30 14:23:24 --> Invalid query: 
ERROR - 2021-11-30 14:23:24 --> Invalid query: 
ERROR - 2021-11-30 14:25:52 --> Invalid query: 
ERROR - 2021-11-30 14:25:52 --> Invalid query: 
ERROR - 2021-11-30 14:25:52 --> Invalid query: 
ERROR - 2021-11-30 14:25:52 --> Invalid query: 
ERROR - 2021-11-30 14:25:52 --> Invalid query: 
ERROR - 2021-11-30 14:25:52 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:25:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '835'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 14:26:00 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:45:47 --> Invalid query: 
ERROR - 2021-11-30 14:45:47 --> Invalid query: 
ERROR - 2021-11-30 14:45:47 --> Invalid query: 
ERROR - 2021-11-30 14:45:47 --> Invalid query: 
ERROR - 2021-11-30 14:45:47 --> Invalid query: 
ERROR - 2021-11-30 14:45:48 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:46:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1098'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 14:46:08 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:46:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1098'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 14:46:34 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 14:46:34 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 14:46:34 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:46:40 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:46:41 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 14:46:41 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 14:46:41 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:46:51 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1098'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 14:46:55 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:46:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 14:47:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1098'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 14:47:06 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:47:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1098'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 14:47:24 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:47:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1098'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 14:47:44 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:47:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1098'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 14:47:48 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:47:54 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1098'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 14:52:36 --> 404 Page Not Found: Wordpress/index
ERROR - 2021-11-30 14:52:45 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 14:52:45 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 14:52:45 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:52:53 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 14:53:16 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 14:53:16 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 14:53:16 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 14:53:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 14:53:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 15:02:16 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 15:02:16 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 15:02:16 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 15:02:16 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 15:02:16 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 15:02:16 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-11-30 15:02:16 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-11-30 15:02:16 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-11-30 15:02:16 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 15:02:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 15:13:01 --> Invalid query: 
ERROR - 2021-11-30 15:13:01 --> Invalid query: 
ERROR - 2021-11-30 15:13:01 --> Invalid query: 
ERROR - 2021-11-30 15:13:01 --> Invalid query: 
ERROR - 2021-11-30 15:13:01 --> Invalid query: 
ERROR - 2021-11-30 15:24:23 --> Invalid query: 
ERROR - 2021-11-30 15:24:23 --> Invalid query: 
ERROR - 2021-11-30 15:24:23 --> Invalid query: 
ERROR - 2021-11-30 15:24:23 --> Invalid query: 
ERROR - 2021-11-30 15:24:23 --> Invalid query: 
ERROR - 2021-11-30 15:24:23 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 15:24:50 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '199'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 15:24:51 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 15:24:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 15:24:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 15:24:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 15:24:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 15:24:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 15:24:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 15:24:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 15:24:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 15:24:51 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 15:24:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '199'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 15:25:12 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 15:25:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '199'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 15:25:40 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 15:25:45 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 15:25:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '199'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 15:25:52 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '199'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 15:26:05 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 15:26:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '199'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 15:28:18 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 15:28:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '199'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 15:40:16 --> Invalid query: 
ERROR - 2021-11-30 15:40:16 --> Invalid query: 
ERROR - 2021-11-30 15:40:16 --> Invalid query: 
ERROR - 2021-11-30 15:40:16 --> Invalid query: 
ERROR - 2021-11-30 15:40:16 --> Invalid query: 
ERROR - 2021-11-30 15:40:21 --> Invalid query: 
ERROR - 2021-11-30 15:40:21 --> Invalid query: 
ERROR - 2021-11-30 15:40:21 --> Invalid query: 
ERROR - 2021-11-30 15:40:21 --> Invalid query: 
ERROR - 2021-11-30 15:40:21 --> Invalid query: 
ERROR - 2021-11-30 16:08:26 --> Invalid query: 
ERROR - 2021-11-30 16:08:26 --> Invalid query: 
ERROR - 2021-11-30 16:08:26 --> Invalid query: 
ERROR - 2021-11-30 16:08:26 --> Invalid query: 
ERROR - 2021-11-30 16:08:26 --> Invalid query: 
ERROR - 2021-11-30 16:08:26 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 16:08:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '554'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 16:08:34 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 16:11:14 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 16:11:15 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 16:11:21 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 16:11:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '554'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 16:36:06 --> Invalid query: 
ERROR - 2021-11-30 16:36:06 --> Invalid query: 
ERROR - 2021-11-30 16:36:06 --> Invalid query: 
ERROR - 2021-11-30 16:36:06 --> Invalid query: 
ERROR - 2021-11-30 16:36:06 --> Invalid query: 
ERROR - 2021-11-30 16:36:06 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 16:36:06 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 16:36:06 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 16:36:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:27 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:45 --> Could not find the language line "quantity"
ERROR - 2021-11-30 16:36:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 17:22:12 --> Invalid query: 
ERROR - 2021-11-30 17:22:12 --> Invalid query: 
ERROR - 2021-11-30 17:22:12 --> Invalid query: 
ERROR - 2021-11-30 17:22:12 --> Invalid query: 
ERROR - 2021-11-30 17:22:12 --> Invalid query: 
ERROR - 2021-11-30 17:23:12 --> Invalid query: 
ERROR - 2021-11-30 17:23:12 --> Invalid query: 
ERROR - 2021-11-30 17:23:12 --> Invalid query: 
ERROR - 2021-11-30 17:23:12 --> Invalid query: 
ERROR - 2021-11-30 17:23:12 --> Invalid query: 
ERROR - 2021-11-30 19:43:24 --> Invalid query: 
ERROR - 2021-11-30 19:43:24 --> Invalid query: 
ERROR - 2021-11-30 19:43:24 --> Invalid query: 
ERROR - 2021-11-30 19:43:24 --> Invalid query: 
ERROR - 2021-11-30 19:43:24 --> Invalid query: 
ERROR - 2021-11-30 19:43:24 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 19:44:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '761'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 19:45:47 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-11-30 20:12:55 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-11-30 21:05:46 --> Invalid query: 
ERROR - 2021-11-30 21:05:46 --> Invalid query: 
ERROR - 2021-11-30 21:05:46 --> Invalid query: 
ERROR - 2021-11-30 21:05:46 --> Invalid query: 
ERROR - 2021-11-30 21:05:46 --> Invalid query: 
ERROR - 2021-11-30 21:05:46 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 21:05:46 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 21:05:46 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 21:05:54 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 21:13:28 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 21:13:28 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 21:13:28 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 21:13:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 21:28:47 --> Invalid query: 
ERROR - 2021-11-30 21:28:47 --> Invalid query: 
ERROR - 2021-11-30 21:28:47 --> Invalid query: 
ERROR - 2021-11-30 21:28:47 --> Invalid query: 
ERROR - 2021-11-30 21:28:47 --> Invalid query: 
ERROR - 2021-11-30 21:28:48 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 21:28:57 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 21:29:02 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 21:29:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1616'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 21:29:16 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 21:29:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1616'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 21:35:35 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 21:35:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1616'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-11-30 21:36:12 --> Invalid query: 
ERROR - 2021-11-30 21:36:12 --> Invalid query: 
ERROR - 2021-11-30 21:36:12 --> Invalid query: 
ERROR - 2021-11-30 21:36:12 --> Invalid query: 
ERROR - 2021-11-30 21:36:12 --> Invalid query: 
ERROR - 2021-11-30 21:36:13 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 21:36:13 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 21:36:13 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 21:36:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 21:36:28 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 21:36:28 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 21:36:28 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 21:36:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 21:36:38 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 21:36:38 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 21:36:38 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 21:36:44 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 21:36:44 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 21:36:44 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 21:36:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 21:36:51 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 21:36:59 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 21:36:59 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 21:36:59 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 21:37:06 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 21:37:23 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 21:37:23 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 21:37:23 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 21:37:33 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:02:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:02:10 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:20 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:07:20 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:07:20 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:07:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:30 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:07:38 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:07:44 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:07:44 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:07:44 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:07:52 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:09:28 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:09:28 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:09:28 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:09:31 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:09:31 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:09:31 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:09:38 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:09:48 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:09:48 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:09:48 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:09:54 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:09:55 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:09:55 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:09:55 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:10:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:10:07 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:10:07 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:10:07 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:10:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:10:20 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:10:20 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:10:20 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:10:26 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:10:26 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:10:26 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:10:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:10:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:10:33 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:10:33 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:10:33 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:10:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:11:02 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:11:02 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:11:02 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:11:06 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:11:06 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:11:06 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:11:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:11:14 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:11:14 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:11:14 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:11:19 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:11:19 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:11:19 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:11:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:08 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:12:11 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:12:11 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:12:11 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:12:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:13:21 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:13:21 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:13:21 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:13:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:13:33 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:13:33 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:13:33 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:13:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:13:39 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:13:39 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:13:39 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:13:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:14:00 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:14:00 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:14:00 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:14:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:14:25 --> 404 Page Not Found: Balancefeereport/index
ERROR - 2021-11-30 22:14:26 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-11-30 22:14:43 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:14:43 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:14:43 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:14:50 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:15:37 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:15:37 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:15:37 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:15:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:27:06 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:27:06 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:27:06 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:27:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:27:34 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:27:34 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:27:34 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:27:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:31:30 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:31:30 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:31:30 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:31:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:27 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:32:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:34:21 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:34:21 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:34:21 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:34:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:34:36 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:34:36 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:34:36 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:34:38 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:34:39 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:34:39 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:34:39 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:34:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:34:44 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:34:44 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:34:44 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:34:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:34:51 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:34:53 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:34:53 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:34:53 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:34:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:35:02 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:35:02 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:35:02 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:35:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:35:10 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:35:10 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:35:10 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:35:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:35:18 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:35:18 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:35:18 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:35:23 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:35:23 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:35:23 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:35:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:35:29 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:37 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:44 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:35:44 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:35:44 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:35:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:35:52 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:35:56 --> Could not find the language line "invoice_date"
ERROR - 2021-11-30 22:36:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 22:38:25 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-11-30 22:38:25 --> Could not find the language line "menu_Admissions"
ERROR - 2021-11-30 22:38:25 --> Could not find the language line "menu_Enroll"
ERROR - 2021-11-30 22:38:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-11-30 23:12:42 --> 404 Page Not Found: Wp-loginphp/index
