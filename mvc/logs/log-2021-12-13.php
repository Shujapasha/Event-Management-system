<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-12-13 00:06:02 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:06:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 00:14:18 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 00:14:18 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 00:14:18 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 00:14:18 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:14:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 00:14:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 00:21:05 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 00:21:05 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 00:21:05 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 00:21:05 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 00:21:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 00:38:47 --> Invalid query: 
ERROR - 2021-12-13 00:38:47 --> Invalid query: 
ERROR - 2021-12-13 00:38:47 --> Invalid query: 
ERROR - 2021-12-13 00:38:47 --> Invalid query: 
ERROR - 2021-12-13 00:38:47 --> Invalid query: 
ERROR - 2021-12-13 00:38:48 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 00:38:48 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 00:38:55 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 00:38:55 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 00:38:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:38:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:38:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:38:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:38:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:38:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:38:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:38:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:38:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 00:39:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1059'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 00:39:16 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 00:39:16 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 00:39:19 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 00:39:19 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:14:04 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:14:04 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:14:04 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:14:04 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:14:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:14:15 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:14:15 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:14:15 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:14:15 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:14:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:14:48 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:14:48 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:14:48 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:14:48 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:14:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:15:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:16:09 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:16:09 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:16:09 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:16:09 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:16:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:16:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:20:40 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:20:40 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:20:40 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:20:40 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:20:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:20:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:21:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:21:57 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:21:57 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:21:57 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:21:57 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:22:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:22:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:23:00 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:23:00 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:23:00 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:23:00 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:23:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:23:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:24:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:24:39 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:24:39 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:24:39 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:24:39 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:24:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:29:55 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 01:29:55 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 01:29:55 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:29:55 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:29:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:29:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:29:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:29:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:29:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:29:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:29:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:29:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:29:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:30:07 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 01:41:59 --> Invalid query: 
ERROR - 2021-12-13 01:41:59 --> Invalid query: 
ERROR - 2021-12-13 01:41:59 --> Invalid query: 
ERROR - 2021-12-13 01:41:59 --> Invalid query: 
ERROR - 2021-12-13 01:41:59 --> Invalid query: 
ERROR - 2021-12-13 01:44:16 --> Invalid query: 
ERROR - 2021-12-13 01:44:16 --> Invalid query: 
ERROR - 2021-12-13 01:44:16 --> Invalid query: 
ERROR - 2021-12-13 01:44:16 --> Invalid query: 
ERROR - 2021-12-13 01:44:16 --> Invalid query: 
ERROR - 2021-12-13 01:44:16 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:44:16 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:44:38 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1695'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 01:45:07 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:45:07 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:45:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1695'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 01:45:14 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:45:14 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:45:19 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:45:19 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:45:21 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:45:21 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:45:21 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:45:21 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:45:21 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:45:21 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:45:21 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:45:21 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:45:21 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:45:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1695'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 01:45:48 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:45:48 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:45:54 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:45:54 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:45:54 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:45:54 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:45:54 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:45:54 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:45:54 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:45:54 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:45:54 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:45:58 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:45:58 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:46:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1695'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 01:46:07 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:46:07 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:46:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1695'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 01:46:28 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:46:28 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:46:36 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:46:36 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:46:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1695'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 01:49:42 --> Invalid query: 
ERROR - 2021-12-13 01:49:42 --> Invalid query: 
ERROR - 2021-12-13 01:49:42 --> Invalid query: 
ERROR - 2021-12-13 01:49:42 --> Invalid query: 
ERROR - 2021-12-13 01:49:42 --> Invalid query: 
ERROR - 2021-12-13 01:49:42 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:49:42 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:49:46 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:49:46 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:49:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:49:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:49:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:49:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:49:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:49:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:49:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 01:49:52 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1818'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 01:50:21 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:50:21 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 01:50:29 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 01:50:29 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 04:55:24 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-12-13 07:37:45 --> 404 Page Not Found: PayPallog/index
ERROR - 2021-12-13 08:16:39 --> Invalid query: 
ERROR - 2021-12-13 08:16:39 --> Invalid query: 
ERROR - 2021-12-13 08:16:39 --> Invalid query: 
ERROR - 2021-12-13 08:16:39 --> Invalid query: 
ERROR - 2021-12-13 08:16:39 --> Invalid query: 
ERROR - 2021-12-13 08:16:40 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 08:16:40 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 08:17:07 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '470'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 08:17:09 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 08:17:09 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 08:17:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 08:17:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 08:17:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 08:17:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 08:17:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 08:17:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 08:17:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 08:17:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 08:17:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 08:17:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '470'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 08:17:20 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 08:17:20 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 08:17:20 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 08:17:20 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 08:17:20 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 08:17:20 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 08:17:20 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 08:17:20 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 08:17:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '470'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 09:22:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-12-13 09:22:41 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-12-13 09:33:04 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 09:33:04 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 09:33:10 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 09:33:10 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 09:33:10 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:33:10 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:33:10 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:33:10 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:33:10 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:33:10 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:33:10 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:33:10 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:33:10 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:33:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '470'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 09:33:22 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 09:33:22 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 09:33:22 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 09:33:22 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 09:33:22 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 09:33:22 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 09:33:22 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 09:33:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:33:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '470'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 09:54:11 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 09:54:11 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 09:54:16 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 09:54:16 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 09:54:16 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:54:16 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:54:16 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:54:16 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:54:16 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:54:16 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:54:16 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:54:16 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:54:16 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:54:22 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 09:54:22 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 09:54:22 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 09:54:22 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 09:54:22 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 09:54:22 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 09:54:22 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 09:54:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 09:54:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '470'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 11:05:46 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-12-13 11:07:53 --> Invalid query: 
ERROR - 2021-12-13 11:07:53 --> Invalid query: 
ERROR - 2021-12-13 11:07:53 --> Invalid query: 
ERROR - 2021-12-13 11:07:53 --> Invalid query: 
ERROR - 2021-12-13 11:07:53 --> Invalid query: 
ERROR - 2021-12-13 11:10:20 --> Invalid query: 
ERROR - 2021-12-13 11:10:20 --> Invalid query: 
ERROR - 2021-12-13 11:10:20 --> Invalid query: 
ERROR - 2021-12-13 11:10:20 --> Invalid query: 
ERROR - 2021-12-13 11:10:20 --> Invalid query: 
ERROR - 2021-12-13 11:11:42 --> Invalid query: 
ERROR - 2021-12-13 11:11:42 --> Invalid query: 
ERROR - 2021-12-13 11:11:42 --> Invalid query: 
ERROR - 2021-12-13 11:11:42 --> Invalid query: 
ERROR - 2021-12-13 11:11:42 --> Invalid query: 
ERROR - 2021-12-13 11:11:49 --> Invalid query: 
ERROR - 2021-12-13 11:11:49 --> Invalid query: 
ERROR - 2021-12-13 11:11:49 --> Invalid query: 
ERROR - 2021-12-13 11:11:49 --> Invalid query: 
ERROR - 2021-12-13 11:11:49 --> Invalid query: 
ERROR - 2021-12-13 11:31:28 --> Invalid query: 
ERROR - 2021-12-13 11:31:28 --> Invalid query: 
ERROR - 2021-12-13 11:31:28 --> Invalid query: 
ERROR - 2021-12-13 11:31:28 --> Invalid query: 
ERROR - 2021-12-13 11:31:28 --> Invalid query: 
ERROR - 2021-12-13 11:39:29 --> Invalid query: 
ERROR - 2021-12-13 11:39:29 --> Invalid query: 
ERROR - 2021-12-13 11:39:29 --> Invalid query: 
ERROR - 2021-12-13 11:39:29 --> Invalid query: 
ERROR - 2021-12-13 11:39:29 --> Invalid query: 
ERROR - 2021-12-13 11:39:30 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 11:39:30 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 11:39:30 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 11:39:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 11:39:51 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 11:39:51 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 11:39:51 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 11:39:51 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:56 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 11:39:56 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 11:39:56 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 11:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:40:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:38 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:44 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:41:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 11:42:09 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 11:42:09 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 11:42:09 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 11:42:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 11:47:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 11:48:51 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-12-13 11:58:53 --> Invalid query: 
ERROR - 2021-12-13 11:58:53 --> Invalid query: 
ERROR - 2021-12-13 11:58:53 --> Invalid query: 
ERROR - 2021-12-13 11:58:53 --> Invalid query: 
ERROR - 2021-12-13 11:58:53 --> Invalid query: 
ERROR - 2021-12-13 11:58:54 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 11:58:54 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:00:01 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:00:01 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:00:07 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:00:07 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:00:07 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:00:07 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:00:07 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:00:07 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:00:07 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:00:07 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:00:07 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:00:07 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:00:07 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:00:07 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1227'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:00:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1227'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:00:37 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:00:37 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:00:37 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:00:37 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:00:37 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:00:37 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 12:00:37 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 12:00:37 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:00:44 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1227'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:02:46 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:02:46 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:02:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:02:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:02:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:02:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:02:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:02:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:02:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:02:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:02:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:02:51 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:02:51 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:02:51 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:02:51 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:02:51 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:02:51 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 12:02:51 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 12:02:51 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:02:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1227'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:05:31 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:05:31 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:05:36 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:05:36 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:05:36 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:36 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:36 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:36 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:36 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:36 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:36 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:36 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:36 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1227'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:05:44 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:05:44 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:05:48 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:05:48 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:05:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:53 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:05:53 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:05:57 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:05:57 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:05:57 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:57 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:57 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:57 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:57 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:57 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:57 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:57 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:05:57 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:02 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:06:02 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:06:02 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:06:02 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:06:02 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:06:02 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 12:06:02 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 12:06:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:07 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1227'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:06:26 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:06:26 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:06:26 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:26 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:26 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:26 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:26 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:26 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:26 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:26 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:26 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:31 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:06:31 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:06:31 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:06:31 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:06:31 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:06:31 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 12:06:31 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 12:06:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1227'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:06:47 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:06:47 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:06:47 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:47 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:47 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:47 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:47 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:47 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:47 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:47 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:47 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:51 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:06:51 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:06:51 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:06:51 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:06:51 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:06:51 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 12:06:51 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 12:06:51 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:06:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1227'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:15:22 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 12:15:24 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 12:15:50 --> Invalid query: 
ERROR - 2021-12-13 12:15:50 --> Invalid query: 
ERROR - 2021-12-13 12:15:50 --> Invalid query: 
ERROR - 2021-12-13 12:15:50 --> Invalid query: 
ERROR - 2021-12-13 12:15:50 --> Invalid query: 
ERROR - 2021-12-13 12:15:50 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:15:50 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:15:56 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 12:15:57 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 12:16:01 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:16:01 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:16:01 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:16:01 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:16:01 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:16:01 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:16:01 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:16:01 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:16:01 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:16:01 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:16:01 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:16:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1119'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:16:02 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 12:16:04 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 12:16:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1119'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:16:36 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:16:36 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:16:38 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 12:16:39 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 12:16:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1119'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:16:51 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:16:51 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:17:10 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 12:17:10 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:17:10 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:17:12 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 12:17:14 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 12:17:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1119'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:18:24 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:18:24 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:18:38 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 12:18:39 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 12:18:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1119'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:18:59 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:18:59 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:28:22 --> Invalid query: 
ERROR - 2021-12-13 12:28:22 --> Invalid query: 
ERROR - 2021-12-13 12:28:22 --> Invalid query: 
ERROR - 2021-12-13 12:28:22 --> Invalid query: 
ERROR - 2021-12-13 12:28:22 --> Invalid query: 
ERROR - 2021-12-13 12:28:22 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:28:22 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:28:41 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1691'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:29:02 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:29:02 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:29:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:29:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:29:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:29:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:29:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:29:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:29:02 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:29:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1691'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:29:24 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:29:24 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:29:24 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:29:24 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:29:24 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:29:24 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 12:29:24 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 12:29:24 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:29:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1691'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:29:42 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:29:42 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:29:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:29:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:29:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:29:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:29:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:29:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:29:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:29:45 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:29:45 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:29:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1691'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:30:13 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:30:13 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:30:13 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:30:13 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:30:13 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:30:13 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:30:13 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:30:13 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:30:13 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:30:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1691'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:30:23 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:30:23 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:30:28 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:30:28 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:30:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1691'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:30:42 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:30:42 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:30:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1691'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:30:56 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:30:56 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:31:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1691'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:31:37 --> 404 Page Not Found: Frontend/apple-touch-icon.png
ERROR - 2021-12-13 12:31:48 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:31:48 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:31:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1691'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:32:02 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:32:02 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:32:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1691'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:32:15 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:32:15 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:32:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1691'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:32:26 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:32:26 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:32:33 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1691'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:32:45 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:32:45 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:32:49 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:32:49 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:32:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:32:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:32:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:32:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:32:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:32:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:32:49 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:32:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1691'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:33:05 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:33:05 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:33:05 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:33:05 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:33:05 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:33:05 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 12:33:05 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 12:33:05 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1691'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:33:16 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:33:16 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:33:16 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:16 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:16 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:16 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:16 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:16 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:16 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:20 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:33:20 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:33:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1691'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:33:46 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:33:46 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:33:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:46 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:47 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:33:47 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:33:47 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:47 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:47 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:47 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:47 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:47 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:33:47 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:52:26 --> Invalid query: 
ERROR - 2021-12-13 12:52:26 --> Invalid query: 
ERROR - 2021-12-13 12:52:26 --> Invalid query: 
ERROR - 2021-12-13 12:52:26 --> Invalid query: 
ERROR - 2021-12-13 12:52:26 --> Invalid query: 
ERROR - 2021-12-13 12:52:27 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:52:27 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:52:41 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1746'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:53:13 --> 404 Page Not Found: Frontend/apple-touch-icon.png
ERROR - 2021-12-13 12:53:43 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:53:43 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:53:52 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1746'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:54:25 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:54:25 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:54:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1746'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:55:13 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:55:13 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:55:13 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:55:13 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:55:13 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:55:13 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:55:13 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:55:13 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:55:13 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:55:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1746'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:55:33 --> Invalid query: 
ERROR - 2021-12-13 12:55:33 --> Invalid query: 
ERROR - 2021-12-13 12:55:33 --> Invalid query: 
ERROR - 2021-12-13 12:55:33 --> Invalid query: 
ERROR - 2021-12-13 12:55:33 --> Invalid query: 
ERROR - 2021-12-13 12:55:34 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:55:34 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:55:44 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:55:44 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:55:44 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:55:44 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:55:44 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:55:44 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:55:44 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:55:44 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:55:44 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:55:44 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:55:44 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:55:50 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1230'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:56:51 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:56:51 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:56:51 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:56:51 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:56:51 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:56:51 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 12:56:51 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 12:56:51 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:56:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1746'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:57:10 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:57:10 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:57:10 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:57:10 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:57:10 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:57:10 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 12:57:10 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 12:57:10 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:57:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1746'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:58:18 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:58:18 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:58:18 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:58:18 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:58:18 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 12:58:18 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 12:58:18 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 12:58:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:58:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1746'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:58:31 --> Invalid query: 
ERROR - 2021-12-13 12:58:31 --> Invalid query: 
ERROR - 2021-12-13 12:58:31 --> Invalid query: 
ERROR - 2021-12-13 12:58:31 --> Invalid query: 
ERROR - 2021-12-13 12:58:31 --> Invalid query: 
ERROR - 2021-12-13 12:58:31 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:58:31 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:58:38 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1197'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:58:40 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:58:40 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:58:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:58:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:58:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:58:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:58:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:58:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:58:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:58:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:58:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:58:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1197'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 12:58:48 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 12:58:48 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 12:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:58:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 12:58:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1746'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 13:00:24 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:00:38 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 13:00:38 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 13:00:41 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 13:00:41 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 13:01:58 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 13:01:58 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 13:01:58 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 13:01:58 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 13:01:58 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:01:58 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:01:58 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:01:58 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:01:58 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:01:58 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:01:58 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:02:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1746'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 13:02:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1746'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 13:02:18 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 13:02:18 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 13:02:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:02:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:02:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:02:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:02:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:02:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:02:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:02:24 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 13:02:24 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 13:02:24 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 13:02:24 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 13:02:24 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 13:02:24 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 13:02:24 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 13:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:02:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1746'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 13:02:39 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 13:02:39 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 13:02:39 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 13:02:39 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 13:02:39 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 13:02:39 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 13:02:39 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 13:02:39 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:02:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1746'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 13:03:06 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 13:03:06 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 13:03:06 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:03:06 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:03:06 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:03:06 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:03:06 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:03:06 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:03:06 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:03:07 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 13:03:07 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 13:38:10 --> Invalid query: 
ERROR - 2021-12-13 13:38:10 --> Invalid query: 
ERROR - 2021-12-13 13:38:10 --> Invalid query: 
ERROR - 2021-12-13 13:38:10 --> Invalid query: 
ERROR - 2021-12-13 13:38:10 --> Invalid query: 
ERROR - 2021-12-13 13:38:11 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 13:38:11 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 13:38:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1746'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 13:38:41 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 13:38:41 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 13:38:41 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:38:41 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:38:41 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:38:41 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:38:41 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:38:41 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:38:41 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:38:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1746'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 13:38:55 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 13:38:55 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 13:38:55 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 13:38:55 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 13:38:55 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 13:38:55 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 13:38:55 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 13:38:55 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:39:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1746'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 13:39:14 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 13:39:14 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 13:39:14 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 13:39:14 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 13:39:14 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 13:39:14 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 13:39:14 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 13:39:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 13:39:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1746'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:07:09 --> 404 Page Not Found: Dashboardphp/index
ERROR - 2021-12-13 14:07:09 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 14:07:13 --> 404 Page Not Found: Dashboardphp/index
ERROR - 2021-12-13 14:07:17 --> 404 Page Not Found: Resultphp/index
ERROR - 2021-12-13 14:07:29 --> Invalid query: 
ERROR - 2021-12-13 14:07:29 --> Invalid query: 
ERROR - 2021-12-13 14:07:29 --> Invalid query: 
ERROR - 2021-12-13 14:07:29 --> Invalid query: 
ERROR - 2021-12-13 14:07:29 --> Invalid query: 
ERROR - 2021-12-13 14:07:29 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:07:29 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:07:38 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1252'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:07:40 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:07:40 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:08:05 --> Invalid query: 
ERROR - 2021-12-13 14:08:05 --> Invalid query: 
ERROR - 2021-12-13 14:08:05 --> Invalid query: 
ERROR - 2021-12-13 14:08:05 --> Invalid query: 
ERROR - 2021-12-13 14:08:05 --> Invalid query: 
ERROR - 2021-12-13 14:08:06 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:08:06 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:08:14 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:08:14 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:08:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:08:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:08:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:08:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:08:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:08:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:08:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:08:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:08:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:08:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '411'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:08:28 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:08:28 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:08:29 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:08:29 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:09:19 --> Invalid query: 
ERROR - 2021-12-13 14:09:19 --> Invalid query: 
ERROR - 2021-12-13 14:09:19 --> Invalid query: 
ERROR - 2021-12-13 14:09:19 --> Invalid query: 
ERROR - 2021-12-13 14:09:19 --> Invalid query: 
ERROR - 2021-12-13 14:09:20 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 14:09:20 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 14:09:20 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:09:20 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:09:20 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:09:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 14:09:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '411'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 14:09:42 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 14:09:42 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 14:09:42 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:09:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:42 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 14:09:56 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 14:09:56 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 14:09:56 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:09:56 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:09:56 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:09:56 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:09:56 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 14:09:56 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 14:09:56 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:09:58 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 14:09:58 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 14:09:58 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:09:58 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:09:58 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:09:58 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:09:58 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 14:09:58 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 14:09:58 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 14:10:04 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 14:10:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 14:10:11 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:10:11 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:10:15 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:10:15 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:15 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:20 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:10:20 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:10:20 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:10:20 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:10:20 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:10:20 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 14:10:20 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 14:10:20 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '411'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:10:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '411'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:10:34 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:10:34 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:10:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:10:39 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:10:39 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:10:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '411'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:11:26 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:11:26 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:11:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '411'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:12:00 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:12:00 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:12:07 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '411'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:12:11 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:12:11 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:12:14 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:12:14 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:12:17 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:12:17 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:12:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:12:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:12:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:12:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:12:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:12:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:12:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:12:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:12:17 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:12:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '411'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:13:10 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:13:10 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:13:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '411'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:13:34 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:13:34 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:13:41 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '411'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:13:47 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:13:47 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:13:53 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '411'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:13:56 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:13:56 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:14:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '411'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:14:13 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:14:13 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:14:38 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '411'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:14:41 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:14:41 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:14:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '411'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:14:59 --> Invalid query: 
ERROR - 2021-12-13 14:14:59 --> Invalid query: 
ERROR - 2021-12-13 14:14:59 --> Invalid query: 
ERROR - 2021-12-13 14:14:59 --> Invalid query: 
ERROR - 2021-12-13 14:14:59 --> Invalid query: 
ERROR - 2021-12-13 14:17:29 --> Invalid query: 
ERROR - 2021-12-13 14:17:29 --> Invalid query: 
ERROR - 2021-12-13 14:17:29 --> Invalid query: 
ERROR - 2021-12-13 14:17:29 --> Invalid query: 
ERROR - 2021-12-13 14:17:29 --> Invalid query: 
ERROR - 2021-12-13 14:17:29 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:17:29 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:18:48 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:18:48 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:18:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1804'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:19:06 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:19:06 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:19:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1804'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:19:19 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:19:19 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:19:25 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:19:25 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:19:31 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:19:31 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:19:41 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:19:41 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:19:48 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:19:48 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:19:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:19:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:19:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:19:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:19:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:19:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:19:48 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:19:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1804'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:20:17 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:20:17 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:20:26 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:20:26 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:20:26 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:20:26 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:20:26 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:20:26 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:20:26 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:20:26 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:20:26 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:20:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1804'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:20:34 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:20:34 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:20:34 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:20:34 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:20:34 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:20:34 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 14:20:34 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 14:20:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:20:40 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:20:40 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:20:40 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:20:40 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:20:40 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:20:40 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 14:20:40 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 14:20:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:20:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1804'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:21:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1804'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:21:40 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 14:21:40 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 14:21:40 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:21:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:21:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:21:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:21:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:21:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:21:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:21:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:21:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:21:40 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:21:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 14:23:10 --> Invalid query: 
ERROR - 2021-12-13 14:23:10 --> Invalid query: 
ERROR - 2021-12-13 14:23:10 --> Invalid query: 
ERROR - 2021-12-13 14:23:10 --> Invalid query: 
ERROR - 2021-12-13 14:23:10 --> Invalid query: 
ERROR - 2021-12-13 14:23:30 --> Invalid query: 
ERROR - 2021-12-13 14:23:30 --> Invalid query: 
ERROR - 2021-12-13 14:23:30 --> Invalid query: 
ERROR - 2021-12-13 14:23:30 --> Invalid query: 
ERROR - 2021-12-13 14:23:30 --> Invalid query: 
ERROR - 2021-12-13 14:24:18 --> Invalid query: 
ERROR - 2021-12-13 14:24:18 --> Invalid query: 
ERROR - 2021-12-13 14:24:18 --> Invalid query: 
ERROR - 2021-12-13 14:24:18 --> Invalid query: 
ERROR - 2021-12-13 14:24:18 --> Invalid query: 
ERROR - 2021-12-13 14:24:31 --> Invalid query: 
ERROR - 2021-12-13 14:24:31 --> Invalid query: 
ERROR - 2021-12-13 14:24:31 --> Invalid query: 
ERROR - 2021-12-13 14:24:31 --> Invalid query: 
ERROR - 2021-12-13 14:24:31 --> Invalid query: 
ERROR - 2021-12-13 14:25:43 --> 404 Page Not Found: Env/index
ERROR - 2021-12-13 14:26:38 --> Invalid query: 
ERROR - 2021-12-13 14:26:38 --> Invalid query: 
ERROR - 2021-12-13 14:26:38 --> Invalid query: 
ERROR - 2021-12-13 14:26:38 --> Invalid query: 
ERROR - 2021-12-13 14:26:38 --> Invalid query: 
ERROR - 2021-12-13 14:26:38 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:26:38 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:26:52 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:26:52 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:26:52 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:26:52 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:26:52 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:26:52 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:26:52 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:26:52 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:26:52 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:26:52 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:26:52 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:26:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1596'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:28:14 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:28:14 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:28:18 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:28:18 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:28:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:28:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:28:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:28:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:28:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:28:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:28:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:28:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:28:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:28:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1596'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:31:07 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:31:07 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:31:07 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:31:07 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:31:07 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:31:07 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 14:31:07 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 14:31:07 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:31:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1596'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:32:01 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:32:01 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:32:01 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:32:01 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:32:01 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:32:01 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 14:32:01 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 14:32:01 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:32:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1596'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:32:29 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:32:29 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:32:29 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:32:29 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:32:29 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:32:29 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:32:29 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:32:29 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:32:29 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:32:29 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:32:29 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:32:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1596'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:32:41 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:32:41 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:32:41 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:32:41 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:32:41 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:32:41 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 14:32:41 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 14:32:41 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:32:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1596'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:33:01 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:33:01 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:33:01 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:33:01 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:33:01 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 14:33:01 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 14:33:01 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 14:33:01 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:33:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1596'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 14:33:34 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 14:33:34 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 14:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 14:33:41 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1596'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:01:06 --> Invalid query: 
ERROR - 2021-12-13 15:01:06 --> Invalid query: 
ERROR - 2021-12-13 15:01:06 --> Invalid query: 
ERROR - 2021-12-13 15:01:06 --> Invalid query: 
ERROR - 2021-12-13 15:01:06 --> Invalid query: 
ERROR - 2021-12-13 15:01:07 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:01:07 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:01:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1740'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:01:26 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:01:26 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:01:28 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:01:28 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:01:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1740'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:02:06 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:02:06 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:02:06 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:02:06 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:02:06 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:02:06 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:02:06 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:02:06 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:02:06 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:02:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1740'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:02:17 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:02:17 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:02:20 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:02:20 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:02:20 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 15:02:20 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 15:02:20 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 15:02:20 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 15:02:20 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 15:02:20 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:02:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1596'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:02:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1740'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:02:39 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:02:39 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:02:39 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:02:39 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:02:39 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:02:39 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:02:39 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:02:39 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:02:39 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:02:43 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:02:43 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:02:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1740'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:02:50 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:02:50 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:02:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1596'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:03:05 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:03:05 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:03:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1740'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:03:11 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:03:11 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:03:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1740'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:03:21 --> Invalid query: 
ERROR - 2021-12-13 15:03:21 --> Invalid query: 
ERROR - 2021-12-13 15:03:21 --> Invalid query: 
ERROR - 2021-12-13 15:03:21 --> Invalid query: 
ERROR - 2021-12-13 15:03:21 --> Invalid query: 
ERROR - 2021-12-13 15:03:21 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:03:21 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:03:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1606'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:03:33 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:03:33 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:03:33 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:03:33 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:03:33 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:03:33 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:03:33 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:03:33 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:03:33 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:03:33 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:03:33 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:03:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1606'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:03:41 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:03:41 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:03:44 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:03:44 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:03:51 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1740'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:03:52 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:03:52 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:03:52 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 15:03:52 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 15:03:52 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 15:03:52 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 15:03:52 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 15:03:52 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:04:08 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:04:08 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:04:12 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:04:12 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:04:12 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:04:12 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:04:12 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:04:12 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:04:12 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:04:12 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:04:12 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:04:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1740'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:04:21 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:04:21 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:04:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1740'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:04:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1606'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:06:31 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:06:31 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:06:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:06:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:06:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:06:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:06:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:06:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:06:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:06:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:06:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:06:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1596'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:06:51 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:06:51 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:06:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1596'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:07:27 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:07:27 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:07:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:07:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:07:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:07:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:07:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:07:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:07:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:07:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:07:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:07:32 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:07:32 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:07:32 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 15:07:32 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 15:07:32 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 15:07:32 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 15:07:32 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 15:07:32 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:07:38 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1596'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:08:18 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:08:18 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:08:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:08:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:08:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:08:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:08:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:08:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:08:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:08:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:08:18 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:08:36 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:08:36 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:08:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1606'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:08:56 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:08:56 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:09:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1606'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:09:12 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:09:12 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:09:19 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:09:19 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:09:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1606'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:09:28 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:09:28 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:10:16 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:10:16 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:10:22 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:10:22 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:10:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:10:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:10:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:10:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:10:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:10:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:10:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:10:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:10:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:10:28 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:10:28 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:10:28 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 15:10:28 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 15:10:28 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 15:10:28 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 15:10:28 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 15:10:28 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:10:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1596'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:11:08 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:11:08 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:11:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:11:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:11:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:11:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:11:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:11:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:11:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:11:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:11:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:11:14 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:11:14 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:11:14 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 15:11:14 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 15:11:14 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 15:11:14 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 15:11:14 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 15:11:14 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:11:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1596'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:11:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1596'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:22:03 --> Invalid query: 
ERROR - 2021-12-13 15:22:03 --> Invalid query: 
ERROR - 2021-12-13 15:22:03 --> Invalid query: 
ERROR - 2021-12-13 15:22:03 --> Invalid query: 
ERROR - 2021-12-13 15:22:03 --> Invalid query: 
ERROR - 2021-12-13 15:22:03 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:22:03 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:22:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1724'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:22:09 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:22:09 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:22:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:22:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:22:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:22:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:22:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:22:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:22:09 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:22:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1724'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:22:18 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:22:18 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:22:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1724'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:37:24 --> Invalid query: 
ERROR - 2021-12-13 15:37:24 --> Invalid query: 
ERROR - 2021-12-13 15:37:24 --> Invalid query: 
ERROR - 2021-12-13 15:37:24 --> Invalid query: 
ERROR - 2021-12-13 15:37:24 --> Invalid query: 
ERROR - 2021-12-13 15:39:53 --> Invalid query: 
ERROR - 2021-12-13 15:39:53 --> Invalid query: 
ERROR - 2021-12-13 15:39:53 --> Invalid query: 
ERROR - 2021-12-13 15:39:53 --> Invalid query: 
ERROR - 2021-12-13 15:39:53 --> Invalid query: 
ERROR - 2021-12-13 15:39:53 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:39:53 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:40:06 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1348'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:40:11 --> Invalid query: 
ERROR - 2021-12-13 15:40:11 --> Invalid query: 
ERROR - 2021-12-13 15:40:11 --> Invalid query: 
ERROR - 2021-12-13 15:40:11 --> Invalid query: 
ERROR - 2021-12-13 15:40:11 --> Invalid query: 
ERROR - 2021-12-13 15:40:11 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:40:11 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:40:31 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:40:31 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:40:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:40:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:40:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:40:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:40:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:40:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:40:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:40:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:40:31 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 15:40:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1348'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 15:40:40 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 15:40:40 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 15:43:19 --> Invalid query: 
ERROR - 2021-12-13 15:43:19 --> Invalid query: 
ERROR - 2021-12-13 15:43:19 --> Invalid query: 
ERROR - 2021-12-13 15:43:19 --> Invalid query: 
ERROR - 2021-12-13 15:43:19 --> Invalid query: 
ERROR - 2021-12-13 15:43:29 --> Invalid query: 
ERROR - 2021-12-13 15:43:29 --> Invalid query: 
ERROR - 2021-12-13 15:43:29 --> Invalid query: 
ERROR - 2021-12-13 15:43:29 --> Invalid query: 
ERROR - 2021-12-13 15:43:29 --> Invalid query: 
ERROR - 2021-12-13 15:43:56 --> 404 Page Not Found: Apple-touch-icon-precomposedpng/index
ERROR - 2021-12-13 15:43:56 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2021-12-13 15:43:57 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 16:08:48 --> Invalid query: 
ERROR - 2021-12-13 16:08:48 --> Invalid query: 
ERROR - 2021-12-13 16:08:48 --> Invalid query: 
ERROR - 2021-12-13 16:08:48 --> Invalid query: 
ERROR - 2021-12-13 16:08:48 --> Invalid query: 
ERROR - 2021-12-13 16:08:49 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 16:08:49 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 16:08:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '629'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 16:09:09 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 16:09:09 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 16:09:09 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 16:09:09 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 16:09:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '629'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 16:27:07 --> Invalid query: 
ERROR - 2021-12-13 16:27:07 --> Invalid query: 
ERROR - 2021-12-13 16:27:07 --> Invalid query: 
ERROR - 2021-12-13 16:27:07 --> Invalid query: 
ERROR - 2021-12-13 16:27:07 --> Invalid query: 
ERROR - 2021-12-13 16:27:07 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 16:27:07 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 16:27:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '618'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 16:28:27 --> Invalid query: 
ERROR - 2021-12-13 16:28:27 --> Invalid query: 
ERROR - 2021-12-13 16:28:27 --> Invalid query: 
ERROR - 2021-12-13 16:28:27 --> Invalid query: 
ERROR - 2021-12-13 16:28:27 --> Invalid query: 
ERROR - 2021-12-13 16:28:44 --> Invalid query: 
ERROR - 2021-12-13 16:28:44 --> Invalid query: 
ERROR - 2021-12-13 16:28:44 --> Invalid query: 
ERROR - 2021-12-13 16:28:44 --> Invalid query: 
ERROR - 2021-12-13 16:28:44 --> Invalid query: 
ERROR - 2021-12-13 16:28:45 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 16:28:45 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 16:28:51 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '629'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 16:28:51 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 16:28:51 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 16:29:02 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 16:29:02 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 16:29:07 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '629'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 16:29:09 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 16:29:09 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 16:29:21 --> Invalid query: 
ERROR - 2021-12-13 16:29:21 --> Invalid query: 
ERROR - 2021-12-13 16:29:21 --> Invalid query: 
ERROR - 2021-12-13 16:29:21 --> Invalid query: 
ERROR - 2021-12-13 16:29:21 --> Invalid query: 
ERROR - 2021-12-13 16:29:21 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 16:29:21 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 16:29:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '618'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 16:29:30 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 16:29:30 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 17:02:32 --> Invalid query: 
ERROR - 2021-12-13 17:02:32 --> Invalid query: 
ERROR - 2021-12-13 17:02:32 --> Invalid query: 
ERROR - 2021-12-13 17:02:32 --> Invalid query: 
ERROR - 2021-12-13 17:02:32 --> Invalid query: 
ERROR - 2021-12-13 17:07:52 --> Invalid query: 
ERROR - 2021-12-13 17:07:52 --> Invalid query: 
ERROR - 2021-12-13 17:07:52 --> Invalid query: 
ERROR - 2021-12-13 17:07:52 --> Invalid query: 
ERROR - 2021-12-13 17:07:52 --> Invalid query: 
ERROR - 2021-12-13 17:07:53 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 17:07:53 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 17:08:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '974'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 17:18:16 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-12-13 17:23:35 --> Invalid query: 
ERROR - 2021-12-13 17:23:35 --> Invalid query: 
ERROR - 2021-12-13 17:23:35 --> Invalid query: 
ERROR - 2021-12-13 17:23:35 --> Invalid query: 
ERROR - 2021-12-13 17:23:35 --> Invalid query: 
ERROR - 2021-12-13 17:24:35 --> Invalid query: 
ERROR - 2021-12-13 17:24:35 --> Invalid query: 
ERROR - 2021-12-13 17:24:35 --> Invalid query: 
ERROR - 2021-12-13 17:24:35 --> Invalid query: 
ERROR - 2021-12-13 17:24:35 --> Invalid query: 
ERROR - 2021-12-13 17:29:56 --> Invalid query: 
ERROR - 2021-12-13 17:29:56 --> Invalid query: 
ERROR - 2021-12-13 17:29:56 --> Invalid query: 
ERROR - 2021-12-13 17:29:56 --> Invalid query: 
ERROR - 2021-12-13 17:29:56 --> Invalid query: 
ERROR - 2021-12-13 17:35:03 --> Invalid query: 
ERROR - 2021-12-13 17:35:03 --> Invalid query: 
ERROR - 2021-12-13 17:35:03 --> Invalid query: 
ERROR - 2021-12-13 17:35:03 --> Invalid query: 
ERROR - 2021-12-13 17:35:03 --> Invalid query: 
ERROR - 2021-12-13 17:35:19 --> Invalid query: 
ERROR - 2021-12-13 17:35:19 --> Invalid query: 
ERROR - 2021-12-13 17:35:19 --> Invalid query: 
ERROR - 2021-12-13 17:35:19 --> Invalid query: 
ERROR - 2021-12-13 17:35:19 --> Invalid query: 
ERROR - 2021-12-13 17:38:08 --> Invalid query: 
ERROR - 2021-12-13 17:38:08 --> Invalid query: 
ERROR - 2021-12-13 17:38:08 --> Invalid query: 
ERROR - 2021-12-13 17:38:08 --> Invalid query: 
ERROR - 2021-12-13 17:38:08 --> Invalid query: 
ERROR - 2021-12-13 17:40:57 --> Invalid query: 
ERROR - 2021-12-13 17:40:57 --> Invalid query: 
ERROR - 2021-12-13 17:40:57 --> Invalid query: 
ERROR - 2021-12-13 17:40:57 --> Invalid query: 
ERROR - 2021-12-13 17:40:57 --> Invalid query: 
ERROR - 2021-12-13 17:41:14 --> Invalid query: 
ERROR - 2021-12-13 17:41:14 --> Invalid query: 
ERROR - 2021-12-13 17:41:14 --> Invalid query: 
ERROR - 2021-12-13 17:41:14 --> Invalid query: 
ERROR - 2021-12-13 17:41:14 --> Invalid query: 
ERROR - 2021-12-13 17:41:14 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 17:41:14 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 17:41:23 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 17:41:23 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 17:41:24 --> Invalid query: 
ERROR - 2021-12-13 17:41:24 --> Invalid query: 
ERROR - 2021-12-13 17:41:24 --> Invalid query: 
ERROR - 2021-12-13 17:41:24 --> Invalid query: 
ERROR - 2021-12-13 17:41:24 --> Invalid query: 
ERROR - 2021-12-13 17:41:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 17:41:32 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 17:41:32 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 17:41:32 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:41:32 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:41:32 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:41:32 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:41:32 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:41:32 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:41:32 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:41:32 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:41:32 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:41:38 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 17:41:42 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 17:41:42 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 17:41:46 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 17:41:46 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 17:41:52 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 17:41:57 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 17:41:57 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 17:42:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 17:42:11 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 17:42:11 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 17:42:19 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 17:51:24 --> Invalid query: 
ERROR - 2021-12-13 17:51:24 --> Invalid query: 
ERROR - 2021-12-13 17:51:24 --> Invalid query: 
ERROR - 2021-12-13 17:51:24 --> Invalid query: 
ERROR - 2021-12-13 17:51:24 --> Invalid query: 
ERROR - 2021-12-13 17:54:50 --> Invalid query: 
ERROR - 2021-12-13 17:54:50 --> Invalid query: 
ERROR - 2021-12-13 17:54:50 --> Invalid query: 
ERROR - 2021-12-13 17:54:50 --> Invalid query: 
ERROR - 2021-12-13 17:54:50 --> Invalid query: 
ERROR - 2021-12-13 17:54:51 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 17:54:51 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 17:55:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1766'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 17:55:07 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 17:55:07 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 17:55:07 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:55:07 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:55:07 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:55:07 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:55:07 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:55:07 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:55:07 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:55:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1766'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 17:55:36 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 17:55:36 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 17:55:36 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 17:55:36 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 17:55:36 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 17:55:36 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 17:55:36 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 17:55:36 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:55:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1766'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 17:56:33 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 17:56:33 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 17:56:33 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:56:33 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:56:33 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:56:33 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:56:33 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:56:33 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:56:33 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 17:56:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1766'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 17:56:50 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 17:56:50 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 17:57:00 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 17:57:00 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 18:47:02 --> Invalid query: 
ERROR - 2021-12-13 18:47:02 --> Invalid query: 
ERROR - 2021-12-13 18:47:02 --> Invalid query: 
ERROR - 2021-12-13 18:47:02 --> Invalid query: 
ERROR - 2021-12-13 18:47:02 --> Invalid query: 
ERROR - 2021-12-13 18:47:02 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 18:47:02 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 18:47:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '236'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 18:47:26 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 18:47:26 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 18:47:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '236'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 18:48:05 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 18:48:05 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 18:48:08 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 18:48:08 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 18:48:18 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 18:48:18 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 18:48:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '236'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 18:48:47 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 18:48:47 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 18:48:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '236'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 18:49:16 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 18:49:16 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 18:49:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '236'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 18:50:22 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 18:50:22 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 18:54:04 --> Invalid query: 
ERROR - 2021-12-13 18:54:04 --> Invalid query: 
ERROR - 2021-12-13 18:54:04 --> Invalid query: 
ERROR - 2021-12-13 18:54:04 --> Invalid query: 
ERROR - 2021-12-13 18:54:04 --> Invalid query: 
ERROR - 2021-12-13 18:54:05 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 18:54:05 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 18:54:08 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 18:54:08 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 18:54:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 18:54:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 18:54:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 18:54:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 18:54:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 18:54:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 18:54:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 18:54:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 18:54:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 18:54:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1059'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 18:54:17 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 18:54:17 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 18:54:19 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 18:54:19 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:19:34 --> Invalid query: 
ERROR - 2021-12-13 19:19:34 --> Invalid query: 
ERROR - 2021-12-13 19:19:34 --> Invalid query: 
ERROR - 2021-12-13 19:19:34 --> Invalid query: 
ERROR - 2021-12-13 19:19:34 --> Invalid query: 
ERROR - 2021-12-13 19:19:34 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 19:19:34 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:19:41 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 19:19:41 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:19:41 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:19:41 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:19:41 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:19:41 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:19:41 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:19:41 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:19:41 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:19:41 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:19:41 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:19:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '928'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 19:19:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '928'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 19:19:57 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 19:19:57 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:19:57 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 19:19:57 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 19:19:57 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 19:19:57 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 19:19:57 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 19:19:57 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:20:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '928'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 19:21:22 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 19:21:22 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:21:22 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 19:21:22 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 19:21:22 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 19:21:22 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 19:21:22 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 19:21:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:21:22 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 19:21:22 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:21:25 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 19:21:25 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:21:25 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:21:25 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:21:25 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:21:25 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:21:25 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:21:25 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:21:25 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:21:25 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:21:25 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:21:29 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 19:21:29 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:21:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '928'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 19:31:43 --> Invalid query: 
ERROR - 2021-12-13 19:31:43 --> Invalid query: 
ERROR - 2021-12-13 19:31:43 --> Invalid query: 
ERROR - 2021-12-13 19:31:43 --> Invalid query: 
ERROR - 2021-12-13 19:31:43 --> Invalid query: 
ERROR - 2021-12-13 19:31:43 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 19:31:43 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:31:52 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 19:31:59 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 19:31:59 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:31:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:31:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:31:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:31:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:31:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:31:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:31:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:31:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:31:59 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 19:32:08 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 19:32:08 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:32:08 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 19:32:08 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 19:32:08 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 19:32:08 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 19:32:08 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 19:32:08 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 19:32:23 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 19:32:23 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:32:23 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:23 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:23 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:23 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:23 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:23 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:23 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:23 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:23 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:29 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 19:32:32 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 19:32:32 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:32:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 19:32:43 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 19:32:43 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:32:43 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:43 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:43 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:43 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:43 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:43 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:43 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:43 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:43 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:32:50 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 19:34:51 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 19:34:51 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:34:51 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 19:34:51 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 19:34:51 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 19:34:51 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 19:34:51 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 19:34:51 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:35:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 19:35:27 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 19:35:27 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:35:27 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 19:35:27 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 19:35:27 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 140
ERROR - 2021-12-13 19:35:27 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 186
ERROR - 2021-12-13 19:35:27 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/onlineedu/mvc/views/invoice/view.php 198
ERROR - 2021-12-13 19:35:27 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 19:35:35 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-12-13 19:35:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 19:35:40 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 19:35:40 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:35:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 19:37:04 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 19:37:04 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 19:58:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-12-13 19:58:18 --> 404 Page Not Found: Robotstxt/index
ERROR - 2021-12-13 20:39:02 --> Invalid query: 
ERROR - 2021-12-13 20:39:02 --> Invalid query: 
ERROR - 2021-12-13 20:39:02 --> Invalid query: 
ERROR - 2021-12-13 20:39:02 --> Invalid query: 
ERROR - 2021-12-13 20:39:02 --> Invalid query: 
ERROR - 2021-12-13 20:39:03 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 20:39:03 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 20:39:22 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 20:39:22 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 20:39:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:39:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:39:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:39:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:39:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:39:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:39:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:39:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:39:22 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:39:29 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '983'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 20:40:04 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 20:40:04 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 20:40:04 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:40:04 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:40:04 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:40:04 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:40:04 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:40:04 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:40:04 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:40:04 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:40:04 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 20:40:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '983'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 20:40:11 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 20:40:11 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 21:10:59 --> Invalid query: 
ERROR - 2021-12-13 21:10:59 --> Invalid query: 
ERROR - 2021-12-13 21:10:59 --> Invalid query: 
ERROR - 2021-12-13 21:10:59 --> Invalid query: 
ERROR - 2021-12-13 21:10:59 --> Invalid query: 
ERROR - 2021-12-13 21:11:00 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 21:11:00 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 21:11:00 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 21:11:00 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 21:11:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 21:11:19 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 21:11:19 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 21:11:19 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 21:11:19 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 21:11:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 21:20:39 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2021-12-13 21:38:27 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 21:38:27 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 21:38:27 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 21:38:27 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 21:38:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 21:48:25 --> Invalid query: 
ERROR - 2021-12-13 21:48:25 --> Invalid query: 
ERROR - 2021-12-13 21:48:25 --> Invalid query: 
ERROR - 2021-12-13 21:48:25 --> Invalid query: 
ERROR - 2021-12-13 21:48:25 --> Invalid query: 
ERROR - 2021-12-13 21:48:25 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 21:48:25 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 21:48:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '980'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 21:48:34 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 21:48:34 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 21:50:10 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 21:50:10 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 21:51:44 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 21:51:44 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 21:51:44 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 21:51:44 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 21:51:49 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 21:51:49 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 21:51:49 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 21:51:49 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 21:51:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 21:56:07 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 21:56:07 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 21:56:07 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 21:56:07 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 21:56:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 22:52:27 --> Invalid query: 
ERROR - 2021-12-13 22:52:27 --> Invalid query: 
ERROR - 2021-12-13 22:52:27 --> Invalid query: 
ERROR - 2021-12-13 22:52:27 --> Invalid query: 
ERROR - 2021-12-13 22:52:27 --> Invalid query: 
ERROR - 2021-12-13 22:52:28 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 22:52:28 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 22:52:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1321'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 22:52:39 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 22:52:39 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 22:52:39 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 22:52:39 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 22:52:39 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 22:52:39 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 22:52:39 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 22:52:39 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 22:52:39 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 22:52:39 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 22:52:39 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 22:52:46 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 22:52:46 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 22:52:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1321'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 22:52:54 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1321'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 22:52:56 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 22:52:56 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 22:53:00 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 22:53:00 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 22:53:07 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1321'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 22:53:21 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 22:53:21 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 22:53:29 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1321'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 22:53:31 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 22:53:31 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 22:53:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1321'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 22:56:26 --> Invalid query: 
ERROR - 2021-12-13 22:56:26 --> Invalid query: 
ERROR - 2021-12-13 22:56:26 --> Invalid query: 
ERROR - 2021-12-13 22:56:26 --> Invalid query: 
ERROR - 2021-12-13 22:56:26 --> Invalid query: 
ERROR - 2021-12-13 22:56:29 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 22:56:29 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 22:56:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1724'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 22:56:50 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 22:56:50 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 22:56:50 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 22:56:50 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 22:56:50 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 22:56:50 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 22:56:50 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 22:56:50 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 22:56:50 --> Could not find the language line "invoice_date"
ERROR - 2021-12-13 22:56:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1724'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 23:21:16 --> Invalid query: 
ERROR - 2021-12-13 23:21:16 --> Invalid query: 
ERROR - 2021-12-13 23:21:16 --> Invalid query: 
ERROR - 2021-12-13 23:21:16 --> Invalid query: 
ERROR - 2021-12-13 23:21:16 --> Invalid query: 
ERROR - 2021-12-13 23:21:17 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 23:21:17 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 23:21:25 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 23:21:25 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 23:21:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '974'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 23:21:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '974'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-12-13 23:44:50 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 23:44:50 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 23:44:50 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 23:44:50 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 23:45:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-12-13 23:47:08 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-12-13 23:47:08 --> Could not find the language line "menu_Admissions"
ERROR - 2021-12-13 23:47:08 --> Could not find the language line "menu_Enroll"
ERROR - 2021-12-13 23:47:08 --> Could not find the language line "menu_Exam Slip"
ERROR - 2021-12-13 23:47:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
