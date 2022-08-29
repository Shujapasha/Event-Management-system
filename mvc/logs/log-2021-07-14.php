<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-14 03:43:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 03:43:26 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 03:56:42 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 03:56:43 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 03:56:43 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 03:56:43 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 03:56:43 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 182
ERROR - 2021-07-14 03:56:43 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 194
ERROR - 2021-07-14 03:56:43 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 03:56:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 03:56:49 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 04:59:54 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 04:59:54 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 04:59:54 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 04:59:54 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 182
ERROR - 2021-07-14 04:59:54 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 194
ERROR - 2021-07-14 04:59:54 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 05:00:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 05:00:00 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 05:02:25 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 05:02:25 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 05:02:25 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 05:02:25 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 182
ERROR - 2021-07-14 05:02:25 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 194
ERROR - 2021-07-14 05:02:25 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:19:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 08:19:02 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 08:19:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 08:19:19 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:42 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 08:21:42 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 08:21:42 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 08:21:42 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 182
ERROR - 2021-07-14 08:21:42 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 194
ERROR - 2021-07-14 08:21:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:21:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 08:21:47 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 08:29:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 08:29:05 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 08:29:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 08:29:13 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 08:29:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 08:29:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 08:43:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 08:43:02 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 08:55:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 08:55:09 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 09:10:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 09:10:59 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 09:11:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 09:11:17 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 09:11:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 09:11:49 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 09:12:29 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 09:12:29 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 09:12:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 09:12:37 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 09:14:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 09:14:45 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:51 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 09:20:51 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 09:20:51 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 09:20:51 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 182
ERROR - 2021-07-14 09:20:51 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 194
ERROR - 2021-07-14 09:20:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:20:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 09:20:57 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 09:20:59 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 09:21:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 09:21:04 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 10:31:53 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 10:31:53 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 10:31:53 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-14 10:31:53 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 182
ERROR - 2021-07-14 10:31:53 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 194
ERROR - 2021-07-14 10:31:53 --> Could not find the language line "invoice_date"
ERROR - 2021-07-14 10:32:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 10:32:04 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 17:31:14 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2021-07-14 21:42:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 21:42:56 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 21:51:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 21:51:39 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 21:52:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 21:52:02 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-14 21:52:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-14 21:52:19 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
