<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-08-29 00:00:00 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 00:00:06 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 00:00:06 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 01:30:22 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 01:30:27 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 01:30:30 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 01:30:30 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 01:30:33 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 01:30:33 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 01:30:39 --> Query error: Unknown column 'onlineadmissionID' in 'where clause' - Invalid query: SELECT *
FROM `admission`
WHERE `status` IN(0, 2)
AND `onlineadmissionID` = '66'
ERROR - 2021-08-29 01:30:39 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/core/MY_Model.php 132
ERROR - 2021-08-29 01:42:49 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 01:42:49 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:42:49 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:42:49 --> Severity: error --> Exception: Data has already been sent to output (/home/onamhamy/public_html/demo/main/core/Exceptions.php at line 271), unable to output PDF file /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 9294
ERROR - 2021-08-29 01:42:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-29 01:42:56 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 01:42:56 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:42:56 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:42:56 --> Severity: error --> Exception: Data has already been sent to output (/home/onamhamy/public_html/demo/main/core/Exceptions.php at line 271), unable to output PDF file /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 9294
ERROR - 2021-08-29 01:42:56 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-29 01:53:00 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 01:53:00 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:53:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:53:00 --> Severity: error --> Exception: Data has already been sent to output (/home/onamhamy/public_html/demo/main/core/Exceptions.php at line 271), unable to output PDF file /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 9294
ERROR - 2021-08-29 01:53:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-29 01:54:09 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 01:54:09 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 01:54:09 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:54:09 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:54:09 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:54:09 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:54:09 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:54:09 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:54:09 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:54:09 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:54:09 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:54:09 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:54:09 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:54:09 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:54:10 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:54:10 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:54:10 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:54:10 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:54:10 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:54:10 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:54:10 --> Severity: error --> Exception: Data has already been sent to output (/home/onamhamy/public_html/demo/main/core/Exceptions.php at line 271), unable to output PDF file /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 9294
ERROR - 2021-08-29 01:54:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-29 01:55:29 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 01:55:29 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:55:29 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:55:29 --> Severity: error --> Exception: Data has already been sent to output (/home/onamhamy/public_html/demo/main/core/Exceptions.php at line 271), unable to output PDF file /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 9294
ERROR - 2021-08-29 01:55:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-29 01:56:23 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 01:56:23 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 01:56:23 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 01:57:25 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 01:57:25 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:57:25 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:57:25 --> Severity: error --> Exception: Data has already been sent to output (/home/onamhamy/public_html/demo/main/core/Exceptions.php at line 271), unable to output PDF file /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 9294
ERROR - 2021-08-29 01:57:25 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-29 01:58:00 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 01:58:00 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 01:58:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 01:58:00 --> Severity: error --> Exception: Data has already been sent to output (/home/onamhamy/public_html/demo/main/core/Exceptions.php at line 271), unable to output PDF file /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 9294
ERROR - 2021-08-29 01:58:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-29 02:04:00 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:04:00 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:04:00 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:04:00 --> Severity: error --> Exception: Data has already been sent to output (/home/onamhamy/public_html/demo/main/core/Exceptions.php at line 271), unable to output PDF file /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 9294
ERROR - 2021-08-29 02:04:00 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-29 02:05:18 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:05:18 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:05:18 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:05:18 --> Severity: error --> Exception: Data has already been sent to output (/home/onamhamy/public_html/demo/main/core/Exceptions.php at line 271), unable to output PDF file /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 9294
ERROR - 2021-08-29 02:05:18 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-29 02:07:04 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:07:04 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:07:04 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:07:04 --> Severity: error --> Exception: Data has already been sent to output (/home/onamhamy/public_html/demo/main/core/Exceptions.php at line 271), unable to output PDF file /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 9294
ERROR - 2021-08-29 02:07:04 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-29 02:10:29 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:10:29 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:10:29 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:10:29 --> Severity: error --> Exception: Data has already been sent to output (/home/onamhamy/public_html/demo/main/core/Exceptions.php at line 271), unable to output PDF file /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 9294
ERROR - 2021-08-29 02:10:29 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-29 02:10:31 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:10:31 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:10:31 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:10:31 --> Severity: error --> Exception: Data has already been sent to output (/home/onamhamy/public_html/demo/main/core/Exceptions.php at line 271), unable to output PDF file /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 9294
ERROR - 2021-08-29 02:10:31 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-29 02:13:46 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:13:46 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:13:46 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:13:46 --> Severity: error --> Exception: Data has already been sent to output (/home/onamhamy/public_html/demo/main/core/Exceptions.php at line 271), unable to output PDF file /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 9294
ERROR - 2021-08-29 02:13:46 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-29 02:13:48 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:13:48 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:13:48 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:13:48 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:13:48 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:13:48 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:13:48 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:13:48 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:13:48 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:13:48 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:13:48 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:13:48 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:13:48 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:13:48 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:13:49 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:13:49 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:13:49 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:13:49 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:13:49 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:13:49 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:13:49 --> Severity: error --> Exception: Data has already been sent to output (/home/onamhamy/public_html/demo/main/core/Exceptions.php at line 271), unable to output PDF file /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 9294
ERROR - 2021-08-29 02:13:49 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-29 02:18:07 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:18:07 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17489
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 3 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17492
ERROR - 2021-08-29 02:18:08 --> Severity: Notice --> Undefined offset: 0 /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 17562
ERROR - 2021-08-29 02:18:08 --> Severity: error --> Exception: Data has already been sent to output (/home/onamhamy/public_html/demo/main/core/Exceptions.php at line 271), unable to output PDF file /home/onamhamy/public_html/demo/mvc/libraries/mpdf/src/Mpdf.php 9294
ERROR - 2021-08-29 02:18:08 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/onamhamy/public_html/demo/main/core/Exceptions.php:271) /home/onamhamy/public_html/demo/main/core/Common.php 570
ERROR - 2021-08-29 02:19:59 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 02:19:59 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 02:20:08 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 02:20:08 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:11 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 02:20:20 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 02:20:21 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 02:20:21 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 02:20:21 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-29 02:20:21 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-29 02:20:21 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-29 02:20:21 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 182
ERROR - 2021-08-29 02:20:21 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 194
ERROR - 2021-08-29 02:20:21 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:20:28 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 02:20:28 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 02:21:25 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 02:21:25 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 02:21:25 --> Severity: Notice --> Undefined variable: invoice /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-29 02:21:25 --> Severity: Notice --> Trying to get property 'feetypeID' of non-object /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-29 02:21:25 --> Severity: Notice --> Undefined index:  /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 137
ERROR - 2021-08-29 02:21:25 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 182
ERROR - 2021-08-29 02:21:25 --> Severity: Notice --> Undefined variable: totalsubtotal /home/onamhamy/public_html/demo/mvc/views/invoice/view.php 194
ERROR - 2021-08-29 02:21:25 --> Could not find the language line "invoice_date"
ERROR - 2021-08-29 02:21:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 02:21:31 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 02:25:55 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:25:55 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:29:13 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:29:13 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:32:12 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:32:12 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:32:56 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:32:56 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:35:47 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:35:47 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:39:25 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:39:25 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:46:05 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:46:05 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:47:02 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:47:02 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:50:45 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:50:45 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:51:46 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 02:51:46 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 07:49:58 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2021-08-29 07:50:14 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 07:50:14 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 07:50:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 07:50:20 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 07:50:24 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 07:50:24 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 07:50:31 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 07:50:31 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 07:50:41 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 07:50:41 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 07:50:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 07:50:48 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 07:50:55 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 07:50:55 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 07:50:59 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 07:50:59 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 07:51:01 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 07:51:01 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 07:51:03 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 07:51:03 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 07:51:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 07:51:09 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 07:51:39 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 07:51:39 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 07:51:44 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 07:51:44 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 07:54:18 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 07:54:18 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 07:54:27 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 07:54:27 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 08:04:53 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 08:04:53 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:35:57 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 09:35:57 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:36:03 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 09:36:03 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:36:05 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 09:36:05 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:36:11 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 09:36:11 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 09:36:14 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 09:36:14 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:36:16 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 09:36:16 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:36:22 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 09:36:22 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 09:36:36 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 09:36:36 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:36:42 --> 404 Page Not Found: Frontend/apple-touch-icon.png
ERROR - 2021-08-29 09:36:51 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2021-08-29 09:37:04 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 09:37:04 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:37:08 --> 404 Page Not Found: Apple-touch-iconpng/index
ERROR - 2021-08-29 09:37:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 09:37:14 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 09:37:14 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 09:37:14 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:37:18 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 09:37:18 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:37:20 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 09:37:20 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:37:26 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 09:37:26 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 09:37:27 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 09:37:27 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:37:29 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 09:37:29 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:37:31 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 09:37:31 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:37:34 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 09:37:34 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:37:36 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 09:37:36 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:37:37 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 09:37:37 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:37:44 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 09:37:44 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 09:37:50 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:38:00 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 09:38:00 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 09:38:02 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:38:06 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:38:09 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:38:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 09:38:15 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 09:50:11 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:50:17 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 09:50:17 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 09:50:20 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:50:23 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:50:26 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:50:28 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:50:30 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:50:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 09:50:36 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 09:50:53 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 09:50:59 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 09:50:59 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 10:16:38 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 10:16:47 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 10:16:48 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 10:16:48 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 10:16:55 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 10:16:55 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 10:16:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 10:16:57 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 10:40:14 --> 404 Page Not Found: Frontend/apple-touch-icon.png
ERROR - 2021-08-29 10:40:30 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 10:40:30 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 10:40:36 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 10:40:36 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 10:40:43 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 10:40:43 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 10:40:47 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 10:40:47 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 10:40:49 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 10:40:49 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 10:41:15 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 10:41:15 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 22:30:33 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 22:30:57 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 22:30:57 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 22:31:13 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 22:31:20 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 22:31:20 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 22:32:04 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 22:32:04 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 22:32:12 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 22:32:12 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 22:32:13 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 22:32:13 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 22:32:17 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 22:32:17 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 22:32:23 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 22:32:23 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 22:32:29 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 22:32:29 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 22:32:33 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 22:32:33 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 22:32:42 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 22:32:42 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 22:32:42 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 22:32:42 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 22:32:46 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 22:32:46 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 22:32:51 --> Could not find the language line "menu_Fee Structure"
ERROR - 2021-08-29 22:32:51 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 22:32:58 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
FROM `conversation_user`
LEFT JOIN `conversation_message_info` ON `conversation_user`.`conversation_id`=`conversation_message_info`.`id`
LEFT JOIN `conversation_msg` ON `conversation_user`.`conversation_id`=`conversation_msg`.`conversation_id`
WHERE `conversation_user`.`user_id` = '1'
AND `conversation_user`.`usertypeID` = '1'
AND `conversation_user`.`trash` = 0
AND `conversation_msg`.`start` = 1
AND `conversation_message_info`.`draft` = 0
GROUP BY `conversation_message_info`.`id`
ORDER BY `conversation_message_info`.`id` DESC
ERROR - 2021-08-29 22:32:58 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 22:33:08 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 22:33:12 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 22:33:12 --> 404 Page Not Found: Img/log.png
ERROR - 2021-08-29 22:33:13 --> 404 Page Not Found: Faviconico/index
ERROR - 2021-08-29 22:33:15 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 22:33:15 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 22:51:30 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 22:51:37 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 22:51:37 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 23:01:32 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 6
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Trying to get property 'classesID' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 6
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: schoolyears /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 23
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 28
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Trying to get property 'schoolyearID' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 28
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 42
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Trying to get property 'name' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 42
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 54
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Trying to get property 'dob' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 54
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 68
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Trying to get property 'sex' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 68
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 93
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Trying to get property 'bloodgroup' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 93
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 106
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Trying to get property 'religion' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 106
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 118
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Trying to get property 'email' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 118
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 130
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Trying to get property 'phone' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 130
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 142
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Trying to get property 'address' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 142
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 173
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Trying to get property 'country' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 173
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: classes /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 187
ERROR - 2021-08-29 23:01:32 --> Severity: Warning --> Invalid argument supplied for foreach() /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 187
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: classArray /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 192
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 192
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Trying to get property 'classesID' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 192
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: sections /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 207
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: studentgroups /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 228
ERROR - 2021-08-29 23:01:32 --> Severity: Notice --> Undefined variable: optionalSubjects /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 249
ERROR - 2021-08-29 23:01:43 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 23:01:43 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 23:10:02 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 23:10:02 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 6
ERROR - 2021-08-29 23:10:02 --> Severity: Notice --> Trying to get property 'classesID' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 6
ERROR - 2021-08-29 23:10:02 --> Severity: Notice --> Undefined variable: schoolyears /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 23
ERROR - 2021-08-29 23:10:02 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 28
ERROR - 2021-08-29 23:10:02 --> Severity: Notice --> Trying to get property 'schoolyearID' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 28
ERROR - 2021-08-29 23:10:02 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 51
ERROR - 2021-08-29 23:10:02 --> Severity: Notice --> Trying to get property 'country' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 51
ERROR - 2021-08-29 23:10:13 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 23:10:13 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 23:12:07 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 23:12:07 --> Severity: Notice --> Undefined variable: schoolyears /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 22
ERROR - 2021-08-29 23:12:07 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 27
ERROR - 2021-08-29 23:12:07 --> Severity: Notice --> Trying to get property 'schoolyearID' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 27
ERROR - 2021-08-29 23:12:07 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 50
ERROR - 2021-08-29 23:12:07 --> Severity: Notice --> Trying to get property 'country' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 50
ERROR - 2021-08-29 23:12:14 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 23:12:14 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 23:15:44 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 23:15:44 --> Severity: Notice --> Undefined variable: schoolyears /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 22
ERROR - 2021-08-29 23:15:44 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 27
ERROR - 2021-08-29 23:15:44 --> Severity: Notice --> Trying to get property 'schoolyearID' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 27
ERROR - 2021-08-29 23:15:44 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 50
ERROR - 2021-08-29 23:15:44 --> Severity: Notice --> Trying to get property 'country' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 50
ERROR - 2021-08-29 23:15:50 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 23:15:50 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 23:17:40 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 23:17:40 --> Severity: Notice --> Undefined variable: schoolyears /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 22
ERROR - 2021-08-29 23:17:40 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 27
ERROR - 2021-08-29 23:17:40 --> Severity: Notice --> Trying to get property 'schoolyearID' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 27
ERROR - 2021-08-29 23:17:40 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 50
ERROR - 2021-08-29 23:17:40 --> Severity: Notice --> Trying to get property 'country' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 50
ERROR - 2021-08-29 23:17:47 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 23:17:47 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 23:24:48 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 23:24:48 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 27
ERROR - 2021-08-29 23:24:48 --> Severity: Notice --> Trying to get property 'schoolyearID' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 27
ERROR - 2021-08-29 23:24:54 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 23:24:54 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 23:40:02 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 23:40:02 --> Severity: Notice --> Undefined variable: schoolyears /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 26
ERROR - 2021-08-29 23:40:02 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 31
ERROR - 2021-08-29 23:40:02 --> Severity: Notice --> Trying to get property 'schoolyearID' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 31
ERROR - 2021-08-29 23:40:09 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 23:40:09 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
ERROR - 2021-08-29 23:45:39 --> Could not find the language line "menu_Admissions"
ERROR - 2021-08-29 23:45:39 --> Severity: Notice --> Undefined variable: schoolyears /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 26
ERROR - 2021-08-29 23:45:39 --> Severity: Notice --> Undefined variable: admissioninfo /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 31
ERROR - 2021-08-29 23:45:39 --> Severity: Notice --> Trying to get property 'schoolyearID' of non-object /home/onamhamy/public_html/demo/mvc/views/onlineadmissions/bankadd.php 31
ERROR - 2021-08-29 23:45:46 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'onamhamy_account.conversation_user.is_sender' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT DISTINCT *
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
ERROR - 2021-08-29 23:45:46 --> Severity: error --> Exception: Call to a member function result() on bool /home/onamhamy/public_html/demo/mvc/models/Conversation_m.php 42
