<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-11 00:17:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 00:17:19 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:26 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:32 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 00:18:32 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 00:18:38 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 00:18:38 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 00:18:38 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 00:18:38 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 159
ERROR - 2021-07-11 00:18:38 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 171
ERROR - 2021-07-11 00:18:38 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23073
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23073
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23073
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23074
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23074
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23074
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23073
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23073
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23073
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23074
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23074
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23074
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23071
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23072
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23073
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23073
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23073
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23074
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23074
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type null /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23074
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23114
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23114
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23114
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23114
ERROR - 2021-07-11 00:18:42 --> Severity: Notice --> Trying to access array offset on value of type int /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 23114
ERROR - 2021-07-11 00:18:42 --> Severity: error --> Exception: Data has already been sent to output (/home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php at line 2211), unable to output PDF file /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 9294
ERROR - 2021-07-11 00:18:42 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php:2211) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-07-11 00:18:44 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 00:18:44 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 00:28:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:28:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:29:00 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:29:00 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:29:01 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:29:31 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:29:36 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 00:29:36 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 00:29:36 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 00:29:36 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 159
ERROR - 2021-07-11 00:29:36 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 171
ERROR - 2021-07-11 00:29:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:29:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:29:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 00:29:45 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 00:29:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:30:29 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:30:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 00:31:12 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:28 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 00:31:28 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 00:31:28 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 00:31:28 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 159
ERROR - 2021-07-11 00:31:28 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 171
ERROR - 2021-07-11 00:31:28 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 00:31:30 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 00:31:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 00:31:34 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 00:31:35 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:31:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 00:33:02 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:07 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 00:33:13 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 00:33:18 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 00:33:18 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 00:33:18 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 00:33:18 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 159
ERROR - 2021-07-11 00:33:18 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 171
ERROR - 2021-07-11 00:33:18 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:20 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 00:33:24 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 00:33:31 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 00:33:31 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 00:33:31 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 00:33:31 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 159
ERROR - 2021-07-11 00:33:31 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 171
ERROR - 2021-07-11 00:33:31 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 00:33:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 00:33:45 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 00:35:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 00:35:37 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 00:35:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 00:35:43 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 01:21:40 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 01:21:40 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 01:21:40 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 01:21:40 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 159
ERROR - 2021-07-11 01:21:40 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 171
ERROR - 2021-07-11 01:21:40 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:46 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:51 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 01:21:51 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 01:21:52 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 01:21:52 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 01:21:52 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 01:21:52 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 159
ERROR - 2021-07-11 01:21:52 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 171
ERROR - 2021-07-11 01:21:52 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 01:21:53 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 01:21:53 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 01:21:53 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 01:21:53 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 01:21:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 01:21:58 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 07:27:55 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2021-07-11 07:28:19 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 07:28:19 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:23 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:29 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 07:28:29 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 07:28:36 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 07:28:39 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 07:28:39 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 07:28:39 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 07:28:39 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 159
ERROR - 2021-07-11 07:28:39 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 171
ERROR - 2021-07-11 07:28:39 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 07:28:45 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 07:28:45 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 07:28:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:57:42 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 08:57:42 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 08:57:42 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 08:57:42 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 159
ERROR - 2021-07-11 08:57:42 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 171
ERROR - 2021-07-11 08:57:42 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:57:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 08:57:49 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 08:58:16 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 08:58:16 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 08:58:16 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 08:58:16 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 159
ERROR - 2021-07-11 08:58:16 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 171
ERROR - 2021-07-11 08:58:16 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 08:58:25 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 08:58:25 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 10:13:29 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-07-11 10:13:29 --> 404 Page Not Found: Wp-loginphp/index
ERROR - 2021-07-11 21:25:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 21:25:02 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:33 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:38:41 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 21:38:41 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 21:40:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 21:40:16 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:40:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 21:40:47 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:15 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 21:41:15 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 21:41:15 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 21:41:15 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 159
ERROR - 2021-07-11 21:41:15 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 171
ERROR - 2021-07-11 21:41:15 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:41:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 21:41:18 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 21:41:21 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 21:41:21 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:36 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:56:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 21:56:42 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:32 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 21:57:39 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 21:57:39 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:01:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 22:02:01 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:24 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:02:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 22:02:31 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:34 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:12:40 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 22:12:40 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:04 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:13:10 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 22:13:10 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 22:18:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 22:18:26 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:41 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 22:31:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 22:31:48 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:27 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:34 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 23:27:34 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:47 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:27:53 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 23:27:53 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 23:28:10 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 23:28:10 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 23:28:10 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 136
ERROR - 2021-07-11 23:28:10 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 159
ERROR - 2021-07-11 23:28:10 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 171
ERROR - 2021-07-11 23:28:10 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:28:16 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 23:28:16 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 23:33:52 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:33:52 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:33:52 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:33:52 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 174
ERROR - 2021-07-11 23:33:52 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 186
ERROR - 2021-07-11 23:33:52 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:33:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 23:33:59 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 23:36:17 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:36:17 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:36:17 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:36:17 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 174
ERROR - 2021-07-11 23:36:17 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 186
ERROR - 2021-07-11 23:36:17 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:36:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 23:36:24 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 23:37:55 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:37:55 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:37:55 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:37:55 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 175
ERROR - 2021-07-11 23:37:55 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 187
ERROR - 2021-07-11 23:37:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:38:02 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 23:38:02 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 23:38:55 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:38:55 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:38:55 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:38:55 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 174
ERROR - 2021-07-11 23:38:55 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 186
ERROR - 2021-07-11 23:38:55 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:39:01 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 23:39:01 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 23:39:11 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:39:11 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:39:11 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:39:11 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 174
ERROR - 2021-07-11 23:39:11 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 186
ERROR - 2021-07-11 23:39:11 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:39:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 23:39:17 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 23:39:49 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:39:49 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:39:49 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-07-11 23:39:49 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 174
ERROR - 2021-07-11 23:39:49 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 186
ERROR - 2021-07-11 23:39:49 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:39:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 23:39:55 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-07-11 23:41:12 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:55:28 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/print_preview.php 181
ERROR - 2021-07-11 23:55:28 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/print_preview.php 193
ERROR - 2021-07-11 23:55:28 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:57:30 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/print_preview.php 181
ERROR - 2021-07-11 23:57:30 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/print_preview.php 193
ERROR - 2021-07-11 23:57:30 --> Could not find the language line "invoice_date"
ERROR - 2021-07-11 23:58:18 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_ilab.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-07-11 23:58:18 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
