<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-14 00:00:29 --> Severity: Notice --> Trying to get property 'user_id' of non-object C:\xampp\htdocs\libopro\application\controllers\api\V1.php 780
ERROR - 2020-07-14 01:05:19 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\libopro\system\libraries\User_agent.php 51
ERROR - 2020-07-14 01:05:20 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\libopro\system\libraries\Session\drivers\Session_files_driver.php 178
ERROR - 2020-07-14 01:05:20 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2020-07-14 01:05:20 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: C:\xampp\htdocs\libopro\application\cache/session) Unknown 0
ERROR - 2020-07-14 01:05:20 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\libopro\system\libraries\Session\drivers\Session_files_driver.php 178
ERROR - 2020-07-14 01:05:20 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2020-07-14 01:05:20 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: C:\xampp\htdocs\libopro\application\cache/session) Unknown 0
ERROR - 2020-07-14 01:05:20 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\libopro\system\libraries\Session\drivers\Session_files_driver.php 178
ERROR - 2020-07-14 01:05:20 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2020-07-14 01:05:20 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: C:\xampp\htdocs\libopro\application\cache/session) Unknown 0
ERROR - 2020-07-14 01:05:22 --> Severity: Error --> Maximum execution time of 30 seconds exceeded C:\xampp\htdocs\libopro\system\libraries\Session\drivers\Session_files_driver.php 178
ERROR - 2020-07-14 01:05:22 --> Severity: Warning --> Unknown: Cannot call session save handler in a recursive manner Unknown 0
ERROR - 2020-07-14 01:05:22 --> Severity: Warning --> Unknown: Failed to write session data using user defined save handler. (session.save_path: C:\xampp\htdocs\libopro\application\cache/session) Unknown 0
ERROR - 2020-07-14 07:35:23 --> Severity: Notice --> Undefined variable: user_id C:\xampp\htdocs\libopro\application\controllers\api\V1.php 685
ERROR - 2020-07-14 03:42:07 --> Severity: error --> Exception: syntax error, unexpected '}', expecting ',' or ';' C:\xampp\htdocs\libopro\application\controllers\Home.php 3849
ERROR - 2020-07-14 03:31:28 --> Severity: Notice --> Trying to get property 'user_id' of non-object C:\xampp\htdocs\libopro\application\controllers\Home.php 3862
ERROR - 2020-07-14 05:33:39 --> 404 Page Not Found: Order-cancel/rd
ERROR - 2020-07-14 05:33:57 --> 404 Page Not Found: Order-cancel/rd
ERROR - 2020-07-14 05:35:06 --> 404 Page Not Found: Order_cancel/rd
ERROR - 2020-07-14 03:35:53 --> Severity: Notice --> Trying to get property 'user_id' of non-object C:\xampp\htdocs\libopro\application\controllers\Home.php 3862
ERROR - 2020-07-14 05:37:35 --> 404 Page Not Found: Order-cancel/47
ERROR - 2020-07-14 05:39:41 --> 404 Page Not Found: Order-cancel/47
ERROR - 2020-07-14 03:44:20 --> Severity: error --> Exception: Too few arguments to function Home::order_cancel(), 1 passed in C:\xampp\htdocs\libopro\system\core\CodeIgniter.php on line 532 and exactly 2 expected C:\xampp\htdocs\libopro\application\controllers\Home.php 3852
ERROR - 2020-07-14 03:44:42 --> Severity: error --> Exception: Too few arguments to function Home::order_cancel(), 1 passed in C:\xampp\htdocs\libopro\system\core\CodeIgniter.php on line 532 and exactly 2 expected C:\xampp\htdocs\libopro\application\controllers\Home.php 3852
ERROR - 2020-07-14 03:45:02 --> Severity: error --> Exception: Too few arguments to function Home::order_cancel(), 1 passed in C:\xampp\htdocs\libopro\system\core\CodeIgniter.php on line 532 and exactly 2 expected C:\xampp\htdocs\libopro\application\controllers\Home.php 3852
ERROR - 2020-07-14 12:14:35 --> Query error: Unknown column 'currency_symbol' in 'where clause' - Invalid query: SELECT *
FROM `dbt_user_addess`
WHERE `user_id` = 'LISNK9'
AND `currency_symbol` = 'USDT'
ERROR - 2020-07-14 12:15:47 --> Query error: Unknown column 'currency_symbol' in 'where clause' - Invalid query: SELECT *
FROM `dbt_user_addess`
WHERE `user_id` = 'LISNK9'
AND `currency_symbol` = 'USDT'
ERROR - 2020-07-14 12:15:57 --> Query error: Unknown column 'currency_symbol' in 'where clause' - Invalid query: SELECT *
FROM `dbt_user_addess`
WHERE `user_id` = 'LISNK9'
AND `currency_symbol` = 'USDT'
ERROR - 2020-07-14 09:36:37 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-14 10:24:30 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-14 10:31:38 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-14 10:32:05 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-14 11:13:43 --> Severity: Notice --> Undefined property: CI_DB_mysqli_result::$password C:\xampp\htdocs\libopro\application\models\backend\dashboard\Auth_model.php 27
ERROR - 2020-07-14 11:13:43 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\libopro\application\controllers\backend\dashboard\Auth.php 58
ERROR - 2020-07-14 11:15:19 --> Severity: Notice --> Undefined property: stdClass::$password C:\xampp\htdocs\libopro\application\models\backend\dashboard\Auth_model.php 27
ERROR - 2020-07-14 11:15:19 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\libopro\application\controllers\backend\dashboard\Auth.php 58
ERROR - 2020-07-14 11:16:32 --> Severity: Notice --> Undefined property: stdClass::$password C:\xampp\htdocs\libopro\application\models\backend\dashboard\Auth_model.php 27
ERROR - 2020-07-14 11:16:32 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\libopro\application\controllers\backend\dashboard\Auth.php 58
ERROR - 2020-07-14 11:19:57 --> Severity: Notice --> Undefined property: stdClass::$password C:\xampp\htdocs\libopro\application\models\backend\dashboard\Auth_model.php 26
ERROR - 2020-07-14 11:19:57 --> Severity: error --> Exception: Call to a member function num_rows() on null C:\xampp\htdocs\libopro\application\controllers\backend\dashboard\Auth.php 58
ERROR - 2020-07-14 15:21:35 --> Severity: Notice --> Undefined variable: data C:\xampp\htdocs\libopro\application\controllers\Workshop.php 152
ERROR - 2020-07-14 15:22:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\xampp\htdocs\libopro\application\controllers\Workshop.php 153
ERROR - 2020-07-14 15:23:30 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\xampp\htdocs\libopro\application\controllers\Workshop.php 153
ERROR - 2020-07-14 11:28:24 --> Severity: Notice --> Undefined property: stdClass::$password C:\xampp\htdocs\libopro\application\models\backend\dashboard\Auth_model.php 27
ERROR - 2020-07-14 11:34:14 --> Severity: Notice --> Undefined property: stdClass::$password C:\xampp\htdocs\libopro\application\models\backend\dashboard\Auth_model.php 27
ERROR - 2020-07-14 11:34:42 --> Severity: Notice --> Undefined property: stdClass::$password C:\xampp\htdocs\libopro\application\models\backend\dashboard\Auth_model.php 27
ERROR - 2020-07-14 11:35:54 --> Severity: Notice --> Undefined property: stdClass::$password C:\xampp\htdocs\libopro\application\models\backend\dashboard\Auth_model.php 27
ERROR - 2020-07-14 11:37:12 --> Severity: Notice --> Undefined property: stdClass::$password C:\xampp\htdocs\libopro\application\models\backend\dashboard\Auth_model.php 27
ERROR - 2020-07-14 15:40:08 --> Severity: Notice --> Undefined variable: user_data C:\xampp\htdocs\libopro\application\controllers\Workshop.php 172
ERROR - 2020-07-14 15:40:08 --> Severity: Notice --> Trying to get property 'password' of non-object C:\xampp\htdocs\libopro\application\controllers\Workshop.php 172
ERROR - 2020-07-14 11:43:13 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-14 11:49:50 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-14 11:50:21 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-14 11:51:35 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-14 11:54:39 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-14 12:33:45 --> Severity: Notice --> Undefined property: Exchange::$fiat_model C:\xampp\htdocs\libopro\application\controllers\backend\exchange\Exchange.php 27
ERROR - 2020-07-14 12:33:45 --> Severity: error --> Exception: Call to a member function countOpenTrades() on null C:\xampp\htdocs\libopro\application\controllers\backend\exchange\Exchange.php 27
ERROR - 2020-07-14 12:34:09 --> Severity: Notice --> Undefined variable: page C:\xampp\htdocs\libopro\application\controllers\backend\exchange\Exchange.php 34
ERROR - 2020-07-14 12:35:01 --> Query error: Unknown column 'created' in 'order clause' - Invalid query: SELECT *
FROM `dbt_biding`
WHERE `status` = '2' or `status` = '3'
ORDER BY `created` DESC
 LIMIT 100
ERROR - 2020-07-14 12:56:12 --> Severity: Notice --> Undefined variable: page C:\xampp\htdocs\libopro\application\controllers\backend\exchange\Exchange.php 65
ERROR - 2020-07-14 12:57:32 --> Query error: Unknown column 'updated' in 'order clause' - Invalid query: SELECT *
FROM `dbt_biding_log`
WHERE `is_maker` =0 and `status` = '1'
ORDER BY `updated` DESC
 LIMIT 50
ERROR - 2020-07-14 12:58:21 --> Severity: Notice --> Undefined variable: open_trades C:\xampp\htdocs\libopro\application\views\backend\exchange\open_order.php 29
ERROR - 2020-07-14 12:58:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\libopro\application\views\backend\exchange\open_order.php 29
ERROR - 2020-07-14 12:59:02 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:02 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:02 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:02 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:02 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:02 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:02 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:02 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:02 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:02 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:02 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:02 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:02 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:02 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:02 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:02 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:02 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:03 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:03 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 12:59:03 --> Severity: Notice --> Undefined property: stdClass::$open_order C:\xampp\htdocs\libopro\application\views\backend\exchange\trade_history.php 41
ERROR - 2020-07-14 13:07:52 --> 404 Page Not Found: backend/exchange/Exchange/all_trades
ERROR - 2020-07-14 13:08:18 --> Severity: Notice --> Undefined variable: open_trades C:\xampp\htdocs\libopro\application\views\backend\exchange\open_order.php 29
ERROR - 2020-07-14 13:08:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\libopro\application\views\backend\exchange\open_order.php 29
ERROR - 2020-07-14 11:35:17 --> Severity: Notice --> Undefined variable: captcha_image C:\xampp\htdocs\libopro\application\views\website\login.php 43
ERROR - 2020-07-14 14:23:41 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-14 19:32:18 --> Severity: Notice --> Undefined variable: project C:\xampp\htdocs\libopro\application\views\features\manage\mail_users.php 11
ERROR - 2020-07-14 19:32:18 --> Severity: Notice --> Trying to get property 'project_id' of non-object C:\xampp\htdocs\libopro\application\views\features\manage\mail_users.php 11
ERROR - 2020-07-14 19:32:18 --> Severity: Notice --> Undefined variable: project C:\xampp\htdocs\libopro\application\views\features\manage\mail_users.php 17
ERROR - 2020-07-14 19:32:18 --> Severity: Notice --> Trying to get property 'long_desc' of non-object C:\xampp\htdocs\libopro\application\views\features\manage\mail_users.php 17
ERROR - 2020-07-14 19:32:44 --> Severity: Notice --> Undefined variable: project C:\xampp\htdocs\libopro\application\views\features\manage\mail_users.php 11
ERROR - 2020-07-14 19:32:45 --> Severity: Notice --> Trying to get property 'project_id' of non-object C:\xampp\htdocs\libopro\application\views\features\manage\mail_users.php 11
ERROR - 2020-07-14 21:53:50 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\libopro\system\libraries\Email.php 1896
ERROR - 2020-07-14 21:56:41 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\libopro\system\libraries\Email.php 1896
ERROR - 2020-07-14 22:01:33 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\libopro\system\libraries\Email.php 1896
ERROR - 2020-07-14 22:08:45 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\libopro\system\libraries\Email.php 1896
ERROR - 2020-07-14 22:13:44 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\libopro\system\libraries\Email.php 1896
ERROR - 2020-07-14 22:15:50 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\libopro\system\libraries\Email.php 1896
ERROR - 2020-07-14 22:22:45 --> Severity: Warning --> mail(): Failed to connect to mailserver at &quot;localhost&quot; port 25, verify your &quot;SMTP&quot; and &quot;smtp_port&quot; setting in php.ini or use ini_set() C:\xampp\htdocs\libopro\system\libraries\Email.php 1896
ERROR - 2020-07-14 22:27:01 --> Severity: Warning --> fsockopen(): unable to connect to ssl://mail.libopro.com:465 (A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
) C:\xampp\htdocs\libopro\system\libraries\Email.php 2063
ERROR - 2020-07-14 22:27:26 --> Severity: Warning --> fsockopen(): unable to connect to ssl://mail.libopro.com:465 (A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
) C:\xampp\htdocs\libopro\system\libraries\Email.php 2063
ERROR - 2020-07-14 22:27:56 --> Severity: Warning --> fsockopen(): unable to connect to ssl://libopro.com:465 (A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
) C:\xampp\htdocs\libopro\system\libraries\Email.php 2063
ERROR - 2020-07-14 22:28:31 --> Severity: Warning --> fsockopen(): unable to connect to mail.libopro.com:465 (A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
) C:\xampp\htdocs\libopro\system\libraries\Email.php 2063
ERROR - 2020-07-14 22:29:05 --> Severity: Warning --> fsockopen(): unable to connect to libopro.com:465 (A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
) C:\xampp\htdocs\libopro\system\libraries\Email.php 2063
ERROR - 2020-07-14 22:32:54 --> Severity: Warning --> fsockopen(): unable to connect to mail.libopro.com:465 (A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
) C:\xampp\htdocs\libopro\system\libraries\Email.php 2063
ERROR - 2020-07-14 22:34:42 --> Severity: Warning --> fsockopen(): unable to connect to mail.libopro.com:465 (A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
) C:\xampp\htdocs\libopro\system\libraries\Email.php 2063
ERROR - 2020-07-14 22:38:55 --> Severity: Warning --> fsockopen(): unable to connect to libopro.com:465 (A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
) C:\xampp\htdocs\libopro\system\libraries\Email.php 2063
ERROR - 2020-07-14 22:42:23 --> Severity: Warning --> fsockopen(): unable to connect to libopro.com:465 (A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
) C:\xampp\htdocs\libopro\system\libraries\Email.php 2063
