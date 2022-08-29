<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:40:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 00:40:20 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 00:40:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 00:40:27 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 00:42:21 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 00:42:53 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 00:42:53 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 00:44:21 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:21:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 01:21:00 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 01:21:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 01:21:24 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 01:22:29 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:22:38 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 01:22:38 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 01:27:06 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:27:06 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:27:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 01:27:17 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 01:27:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 01:27:45 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 01:29:01 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 01:33:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 01:33:19 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 01:34:25 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 02:11:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 02:35:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 02:43:50 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 02:47:54 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 02:54:53 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:02:06 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1566
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> sort() expects parameter 1 to be array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1567
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1595
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1566
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> sort() expects parameter 1 to be array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1567
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1595
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1566
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> sort() expects parameter 1 to be array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1567
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1595
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1566
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> sort() expects parameter 1 to be array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1567
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, string given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_keys() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> array_diff(): Expected parameter 1 to be an array, null given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1572
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> ksort() expects parameter 1 to be array, int given /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/main/database/DB_query_builder.php 1595
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 1 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 2 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 4 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 5 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 6 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 7 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 8 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 9 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 10 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 11 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 12 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 13 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 14 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 15 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1562
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1563
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1564
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1577
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1578
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1579
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1580
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1581
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1582
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1583
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1584
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1585
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1586
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Undefined offset: 16 /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:02:06 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1593
ERROR - 2021-07-06 03:09:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:11:50 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:11:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:11:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:11:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:11:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:11:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:11:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:11:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:11:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:11:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:11:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:11:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:11:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:11:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:11:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:12:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 03:12:01 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 03:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:22:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:22:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 03:22:36 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 03:23:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 03:23:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 03:23:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:23:42 --> Severity: Notice --> Undefined variable: getstudentt /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1473
ERROR - 2021-07-06 03:23:42 --> Severity: Notice --> Trying to get property 'no_installment' of non-object /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1473
ERROR - 2021-07-06 03:23:42 --> Severity: Notice --> Undefined variable: getstudentt /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1473
ERROR - 2021-07-06 03:23:42 --> Severity: Notice --> Trying to get property 'no_installment' of non-object /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1473
ERROR - 2021-07-06 03:23:42 --> Severity: Notice --> Undefined variable: getstudentt /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1473
ERROR - 2021-07-06 03:23:42 --> Severity: Notice --> Trying to get property 'no_installment' of non-object /home/onamhamy/public_html/demo/mvc/controllers/Invoice.php 1473
ERROR - 2021-07-06 03:24:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:26:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:30:08 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:41:28 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:42:31 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:42:31 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:42:31 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:42:31 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:42:31 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:42:31 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:42:31 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:42:31 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:42:31 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:42:31 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:42:31 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:42:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 03:42:37 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 03:44:14 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:44:14 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:44:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 03:44:23 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 03:44:56 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:44:57 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:44:57 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:44:57 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:44:57 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:44:57 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:45:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 03:45:04 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 03:45:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 03:45:22 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 03:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:45:37 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:45:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 03:45:43 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 03:46:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 03:46:05 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 03:46:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 03:46:13 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 03:46:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 03:46:20 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 03:48:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:48:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 03:48:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 03:48:45 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 08:33:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 08:33:11 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 08:33:16 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:33:16 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:33:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 08:33:24 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 08:33:45 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:33:45 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:33:45 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:33:45 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:33:45 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:33:51 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 08:33:51 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 08:33:53 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:33:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 08:33:58 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 08:34:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 08:34:08 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 08:34:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:34:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:34:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 08:34:19 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 08:41:54 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:41:54 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:42:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 08:42:00 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 08:42:16 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:42:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 08:42:31 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 08:42:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 08:42:42 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 08:42:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:42:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:42:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:42:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:42:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:42:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:42:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:42:50 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:42:50 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 08:43:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 08:43:01 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 08:43:54 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 08:43:54 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 08:44:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 08:44:14 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:10:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:10:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:10:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:10:57 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:12:16 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:12:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:12:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:12:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:12:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:12:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:12:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:12:22 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:13:13 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:13:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:13:19 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:13:20 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:13:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:13:25 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:13:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:13:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:13:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:13:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:13:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:13:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:13:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:13:35 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:13:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:13:44 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:13:44 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:13:50 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:14:00 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:14:00 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:14:00 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:14:00 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:14:00 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:14:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:14:08 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:14:19 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:14:20 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:14:20 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:14:20 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:14:20 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:14:20 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:14:20 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:14:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:14:25 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:14:29 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:14:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:14:34 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:16:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:16:39 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:17:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:17:16 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:17:35 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:17:35 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:17:35 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:17:35 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:17:35 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:17:35 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:17:41 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:17:41 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:17:48 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:17:53 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:17:53 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:18:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:18:11 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:18:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:18:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:18:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:18:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:18:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:18:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:18:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:18:48 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:19:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:19:00 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:33:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:33:57 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:34:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:34:23 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:34:29 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:34:29 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:34:53 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:34:53 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:39:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:39:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:39:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:39:28 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:39:35 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:39:35 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:39:35 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:39:35 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:39:35 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:39:35 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:39:44 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:39:44 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:39:56 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:40:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:40:02 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:40:05 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:40:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:40:11 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:40:22 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:40:37 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:40:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:40:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:40:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:40:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:40:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:40:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:40:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:40:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:40:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:40:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:40:45 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:40:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:40:56 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:41:15 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:16 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:16 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:16 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:16 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:16 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:16 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:16 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:16 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:16 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:16 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:41:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:41:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:33 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:41:33 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:41:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:41:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:41:49 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:42:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '8'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-06 09:42:10 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:42:11 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:42:11 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:42:11 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:42:11 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:42:11 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:42:11 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:42:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '8'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-06 09:42:17 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:42:38 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:42:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '8'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-06 09:42:43 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:44:01 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:01 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:01 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:01 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:01 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:01 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:03 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '8'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-06 09:44:09 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:44:10 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:10 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:10 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:10 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:10 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:10 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '8'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-06 09:44:16 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:44:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '8'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-06 09:44:34 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:44:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:51 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:44:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '8'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-06 09:44:56 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:45:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:45:30 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:45:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:45:39 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:46:41 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:46:41 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:47:06 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:06 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:06 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:06 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:06 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:06 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:08 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '8'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-06 09:47:14 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 09:47:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:19 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 09:47:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 09:47:25 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 10:10:11 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 11:21:05 --> Could not find the language line "invoice_date"
ERROR - 2021-07-06 12:02:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 12:02:46 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 16:00:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 16:00:56 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 16:01:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 16:01:05 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 16:01:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 16:01:12 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 16:01:29 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 16:01:29 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 16:01:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 16:01:45 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 16:02:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 16:02:22 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 16:02:47 --> 404 Page Not Found: Home/index
ERROR - 2021-07-06 16:03:54 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 16:03:54 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 16:04:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 16:04:04 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 16:05:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 16:05:02 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 16:06:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 16:06:15 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 16:06:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 16:06:32 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 16:07:07 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 16:07:07 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 16:07:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 16:07:16 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-06 16:07:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-07-06 16:07:26 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
