<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:45 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:49 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-23 00:18:49 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-23 00:18:49 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-23 00:18:49 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 182
ERROR - 2021-08-23 00:18:49 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 194
ERROR - 2021-08-23 00:18:49 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 00:18:52 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 00:18:52 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 00:18:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 00:18:56 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 07:01:56 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2021-08-23 07:02:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 07:02:18 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:30 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-23 07:02:30 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-23 07:02:30 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-23 07:02:30 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 182
ERROR - 2021-08-23 07:02:30 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 194
ERROR - 2021-08-23 07:02:30 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 07:02:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 07:02:35 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 07:03:13 --> 404 Page Not Found: Frontend/apple-touch-icon.png
ERROR - 2021-08-23 08:25:41 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 08:25:41 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 08:25:54 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 08:25:54 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:02 --> Could not find the language line "quantity"
ERROR - 2021-08-23 08:26:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 08:26:18 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 12:07:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 12:07:09 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 12:11:54 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 12:11:54 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 12:12:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 12:12:00 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 12:12:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 12:12:16 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 12:20:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 12:20:02 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 12:20:03 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-08-23 12:20:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 12:20:14 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:17 --> Could not find the language line "quantity"
ERROR - 2021-08-23 12:20:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 12:20:25 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 13:48:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 13:48:32 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 14:07:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 14:07:57 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 14:08:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 14:08:20 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 14:08:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 14:08:30 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 14:33:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 14:33:28 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:45:53 --> Could not find the language line "quantity"
ERROR - 2021-08-23 14:46:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 14:46:00 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 21:36:26 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-08-23 22:14:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 22:14:43 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 22:15:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 22:15:14 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 22:15:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 22:15:27 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:34 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:15:41 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 22:15:41 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:00 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:07 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 22:16:07 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:16:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 22:16:34 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:15 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 22:18:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 22:18:24 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:05 --> Could not find the language line "invoice_date"
ERROR - 2021-08-23 23:09:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-23 23:09:15 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-23 23:09:17 --> 404 Page Not Found: Assets/datatables
