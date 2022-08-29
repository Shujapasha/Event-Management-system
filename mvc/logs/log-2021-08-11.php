<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-08-11 00:00:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 00:00:42 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 00:03:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 00:03:05 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 00:28:51 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '12'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 00:28:51 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 00:30:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '11'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 00:30:09 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 00:30:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '10'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 00:30:58 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 00:31:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '10'
AND `conversation_user`.`usertypeID` = '3'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 00:31:25 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 00:38:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 00:38:42 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 00:42:06 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 00:42:06 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 00:43:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 00:43:19 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 01:38:06 --> Severity: error --> Exception: Call to undefined method Book::paginationCompress() /home/onamhamy/public_html/demo/mvc/controllers/Book.php 29
ERROR - 2021-08-11 01:40:08 --> Severity: Warning --> Use of undefined constant SEGMENT - assumed 'SEGMENT' (this will throw an Error in a future version of PHP) /home/onamhamy/public_html/demo/mvc/controllers/Book.php 42
ERROR - 2021-08-11 01:40:08 --> Severity: Warning --> Use of undefined constant SEGMENT - assumed 'SEGMENT' (this will throw an Error in a future version of PHP) /home/onamhamy/public_html/demo/mvc/controllers/Book.php 66
ERROR - 2021-08-11 01:40:08 --> Severity: error --> Exception: Too few arguments to function MY_Model::get_orders_by(), 2 passed in /home/onamhamy/public_html/demo/mvc/models/Book_m.php on line 25 and exactly 3 expected /home/onamhamy/public_html/demo/mvc/core/MY_Model.php 82
ERROR - 2021-08-11 01:40:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-11 01:42:02 --> Severity: Warning --> Use of undefined constant SEGMENT - assumed 'SEGMENT' (this will throw an Error in a future version of PHP) /home/onamhamy/public_html/demo/mvc/controllers/Book.php 67
ERROR - 2021-08-11 01:42:02 --> Severity: error --> Exception: Too few arguments to function MY_Model::get_orders_by(), 2 passed in /home/onamhamy/public_html/demo/mvc/models/Book_m.php on line 25 and exactly 3 expected /home/onamhamy/public_html/demo/mvc/core/MY_Model.php 82
ERROR - 2021-08-11 01:42:02 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-11 01:42:04 --> Severity: Warning --> Use of undefined constant SEGMENT - assumed 'SEGMENT' (this will throw an Error in a future version of PHP) /home/onamhamy/public_html/demo/mvc/controllers/Book.php 67
ERROR - 2021-08-11 01:42:04 --> Severity: error --> Exception: Too few arguments to function MY_Model::get_orders_by(), 2 passed in /home/onamhamy/public_html/demo/mvc/models/Book_m.php on line 25 and exactly 3 expected /home/onamhamy/public_html/demo/mvc/core/MY_Model.php 82
ERROR - 2021-08-11 01:42:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-11 01:42:29 --> Severity: error --> Exception: Too few arguments to function MY_Model::get_orders_by(), 2 passed in /home/onamhamy/public_html/demo/mvc/models/Book_m.php on line 25 and exactly 3 expected /home/onamhamy/public_html/demo/mvc/core/MY_Model.php 82
ERROR - 2021-08-11 01:43:25 --> Severity: error --> Exception: Too few arguments to function Book_m::get_orders_by_book(), 2 passed in /home/onamhamy/public_html/demo/mvc/controllers/Book.php on line 31 and exactly 3 expected /home/onamhamy/public_html/demo/mvc/models/Book_m.php 24
ERROR - 2021-08-11 01:44:12 --> Severity: error --> Exception: Too few arguments to function Book_m::get_orders_by_book(), 2 passed in /home/onamhamy/public_html/demo/mvc/controllers/Book.php on line 31 and exactly 3 expected /home/onamhamy/public_html/demo/mvc/models/Book_m.php 24
ERROR - 2021-08-11 01:44:36 --> Severity: error --> Exception: Too few arguments to function Book_m::get_orders_by_book(), 2 passed in /home/onamhamy/public_html/demo/mvc/controllers/Book.php on line 31 and exactly 3 expected /home/onamhamy/public_html/demo/mvc/models/Book_m.php 24
ERROR - 2021-08-11 01:46:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 01:46:18 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 01:46:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 01:46:25 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 01:48:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 01:48:30 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 01:48:31 --> 404 Page Not Found: Book/5
ERROR - 2021-08-11 01:52:07 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 01:52:07 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 01:54:06 --> 404 Page Not Found: Book/5
ERROR - 2021-08-11 01:56:45 --> 404 Page Not Found: Book/5
ERROR - 2021-08-11 02:01:33 --> 404 Page Not Found: Book/5
ERROR - 2021-08-11 02:01:35 --> 404 Page Not Found: Book/5
ERROR - 2021-08-11 02:01:37 --> 404 Page Not Found: Book/5
ERROR - 2021-08-11 02:01:47 --> 404 Page Not Found: Book/5
ERROR - 2021-08-11 02:02:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 02:02:56 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 02:04:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 02:04:09 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 02:04:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 02:04:27 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 02:06:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 02:06:32 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 02:06:56 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 02:06:56 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 02:18:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 02:18:16 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 02:19:29 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 02:19:29 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 02:19:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 02:19:43 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 02:19:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 02:19:55 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 02:20:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 02:20:15 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 05:59:41 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2021-08-11 06:00:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 06:00:05 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 06:00:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 06:00:19 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 06:00:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 06:00:34 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 06:00:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 06:00:40 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 06:01:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 06:01:13 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 06:01:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 06:01:28 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:41 --> Could not find the language line "quantity"
ERROR - 2021-08-11 06:01:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 06:01:48 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 06:02:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 06:02:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 06:02:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 06:02:32 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 06:02:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 06:02:42 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 06:03:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 06:03:00 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 06:04:02 --> 404 Page Not Found: Frontend/apple-touch-icon.png
ERROR - 2021-08-11 06:20:38 --> 404 Page Not Found: Frontend/apple-touch-icon.png
ERROR - 2021-08-11 06:45:10 --> 404 Page Not Found: Frontend/apple-touch-icon.png
ERROR - 2021-08-11 08:58:10 --> 404 Page Not Found: Frontend/apple-touch-icon.png
ERROR - 2021-08-11 09:12:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 09:12:27 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 09:12:33 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 09:12:33 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:39 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:12:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 09:12:45 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 09:13:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 09:13:17 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:19 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:26 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:13:38 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 09:13:38 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 09:14:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 09:14:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 09:14:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 09:14:57 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 09:33:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 09:33:34 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:20 --> Could not find the language line "quantity"
ERROR - 2021-08-11 09:38:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 09:38:27 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 09:38:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 09:38:34 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 09:38:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 09:38:42 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 09:41:50 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 09:41:50 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:06:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '6'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 10:06:10 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:06:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '6'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 10:06:19 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:06:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '6'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 10:06:27 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:06:33 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '6'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 10:06:33 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:12:05 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:12:05 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:12:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:12:49 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:13:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:13:13 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:13:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:13:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:14:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:14:00 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:14:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:14:09 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:15:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:15:14 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:15:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:15:25 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:15:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:15:58 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:16:06 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:16:06 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:16:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:16:22 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:16:33 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:16:33 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:27 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:17:33 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:17:33 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:18:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:18:32 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:36 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:51 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:18:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:18:57 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:19:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:19:04 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:19:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:19:59 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:25 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:21:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:21:31 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:27:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:27:04 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:27:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:27:47 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:28:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:28:03 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:44:29 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:44:29 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:44:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:44:57 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:45:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:45:03 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:45:04 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 10:45:04 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:45:07 --> Could not find the language line "download"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:09 --> Could not find the language line "quantity"
ERROR - 2021-08-11 10:45:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 10:45:13 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:45:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-11 10:45:15 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:45:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 10:45:19 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:45:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 10:45:25 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:45:53 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 10:45:53 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 10:59:52 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 10:59:52 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:00:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:00:28 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:00:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:00:34 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:00:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:00:46 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:02:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:02:03 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:02:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:02:23 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:02:33 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:02:33 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:02:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:02:57 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:03:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:03:12 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:03:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:03:19 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:03:29 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:03:29 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:03:44 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:03:44 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:03:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:03:55 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:08:32 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:08:35 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-11 11:08:35 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-11 11:08:35 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-11 11:08:35 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 182
ERROR - 2021-08-11 11:08:35 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 194
ERROR - 2021-08-11 11:08:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:08:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:08:40 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:35 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:41 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:09:41 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:09:42 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:50 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:09:50 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:09:59 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:10:08 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:53 --> Could not find the language line "invoice_date"
ERROR - 2021-08-11 11:10:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:10:59 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:11:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:11:23 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:14:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:14:22 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:14:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:14:32 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:16:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:16:09 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:17:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:17:14 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:17:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:17:35 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:21:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:21:45 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:26:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:26:23 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:26:28 --> Could not find the language line "download"
ERROR - 2021-08-11 11:26:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:26:34 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 11:26:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 11:26:47 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 12:00:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 12:00:01 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 12:00:35 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 12:00:35 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 12:00:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 12:00:55 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 12:01:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 12:01:39 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 12:01:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 12:01:46 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 12:02:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 12:02:09 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 12:02:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 12:02:24 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 12:02:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 12:02:30 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 12:02:44 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 12:02:44 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 12:02:54 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 12:02:54 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 12:03:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 12:03:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 12:08:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 12:08:25 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 12:09:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 12:09:17 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 12:13:54 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 12:13:54 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 12:14:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '6'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 12:14:15 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 13:50:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 13:50:24 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 13:51:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 13:51:27 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 13:51:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 13:51:48 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 13:51:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 13:51:55 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 13:54:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 13:54:26 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 14:18:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 14:18:39 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 14:18:51 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 14:18:51 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 14:19:03 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 14:19:03 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 14:19:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 14:19:18 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 14:20:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 14:20:16 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 14:20:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 14:20:24 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 14:20:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 14:20:45 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 14:21:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 14:21:25 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 20:58:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 20:58:59 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 21:13:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 21:13:11 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 22:25:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 22:25:18 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-11 23:18:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-11 23:18:18 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
