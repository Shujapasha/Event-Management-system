<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-08-03 10:41:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-03 10:41:28 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:37 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-03 10:41:43 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-03 10:41:46 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-03 10:41:46 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-03 10:41:46 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-03 10:41:46 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 182
ERROR - 2021-08-03 10:41:46 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 194
ERROR - 2021-08-03 10:41:46 --> Could not find the language line "invoice_date"
ERROR - 2021-08-03 10:41:52 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-03 10:41:52 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-03 13:07:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-03 13:07:12 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-03 15:55:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-03 15:55:09 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-03 15:55:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-03 15:55:35 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-03 15:55:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-03 15:55:47 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-03 16:06:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-03 16:06:31 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-03 16:06:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-03 16:06:37 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-03 16:07:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-03 16:07:16 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-03 16:07:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-03 16:07:55 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-03 22:48:57 --> 404 Page Not Found: Apple-touch-iconpng/index
