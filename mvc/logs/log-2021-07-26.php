<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-26 08:43:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-26 08:43:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-26 18:12:15 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-07-26 22:53:23 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-26 22:53:23 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-26 23:44:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-26 23:44:57 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'onamhamy_account'@'localhost' (using password: YES) /home/onamhamy/public_html/demo/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2021-07-26 23:45:20 --> Unable to connect to the database
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'onamhamy_account'@'localhost' (using password: YES) /home/onamhamy/public_html/demo/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2021-07-26 23:45:20 --> Unable to connect to the database
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'onamhamy_account'@'localhost' (using password: YES) /home/onamhamy/public_html/demo/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2021-07-26 23:45:20 --> Unable to connect to the database
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'onamhamy_account'@'localhost' (using password: YES) /home/onamhamy/public_html/demo/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2021-07-26 23:45:20 --> Unable to connect to the database
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'onamhamy_account'@'localhost' (using password: YES) /home/onamhamy/public_html/demo/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2021-07-26 23:45:20 --> Unable to connect to the database
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'onamhamy_account'@'localhost' (using password: YES) /home/onamhamy/public_html/demo/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2021-07-26 23:45:20 --> Unable to connect to the database
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'onamhamy_account'@'localhost' (using password: YES) /home/onamhamy/public_html/demo/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2021-07-26 23:45:20 --> Unable to connect to the database
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'onamhamy_account'@'localhost' (using password: YES) /home/onamhamy/public_html/demo/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2021-07-26 23:45:20 --> Unable to connect to the database
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'onamhamy_account'@'localhost' (using password: YES) /home/onamhamy/public_html/demo/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2021-07-26 23:45:20 --> Unable to connect to the database
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/onamhamy/public_html/demo/main/libraries/Session/Session.php 282
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> session_set_cookie_params(): Cannot change session cookie parameters when headers already sent /home/onamhamy/public_html/demo/main/libraries/Session/Session.php 294
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/onamhamy/public_html/demo/main/libraries/Session/Session.php 304
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/onamhamy/public_html/demo/main/libraries/Session/Session.php 314
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/onamhamy/public_html/demo/main/libraries/Session/Session.php 315
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/onamhamy/public_html/demo/main/libraries/Session/Session.php 316
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/onamhamy/public_html/demo/main/libraries/Session/Session.php 317
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> ini_set(): Headers already sent. You cannot change the session module's ini settings at this time /home/onamhamy/public_html/demo/main/libraries/Session/Session.php 375
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> session_set_save_handler(): Cannot change save handler when headers already sent /home/onamhamy/public_html/demo/main/libraries/Session/Session.php 110
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> session_start(): Cannot start session when headers already sent /home/onamhamy/public_html/demo/main/libraries/Session/Session.php 143
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'onamhamy_account'@'localhost' (using password: YES) /home/onamhamy/public_html/demo/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2021-07-26 23:45:20 --> Unable to connect to the database
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'onamhamy_account'@'localhost' (using password: YES) /home/onamhamy/public_html/demo/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2021-07-26 23:45:20 --> Unable to connect to the database
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> mysqli::real_connect(): (HY000/1045): Access denied for user 'onamhamy_account'@'localhost' (using password: YES) /home/onamhamy/public_html/demo/main/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2021-07-26 23:45:20 --> Unable to connect to the database
ERROR - 2021-07-26 23:45:20 --> Query error: Access denied for user 'onamhamy_account'@'localhost' (using password: YES) - Invalid query: SELECT *
FROM `setting`
ERROR - 2021-07-26 23:45:20 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Site_m.php 22
ERROR - 2021-07-26 23:45:20 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-07-26 23:45:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-26 23:45:40 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-26 23:45:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-26 23:45:55 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-26 23:46:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-26 23:46:43 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
