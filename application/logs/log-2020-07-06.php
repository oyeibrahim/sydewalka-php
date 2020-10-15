<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-06 08:38:38 --> Severity: Notice --> Undefined variable: open_date C:\xampp\htdocs\libopro\application\controllers\Home.php 1816
ERROR - 2020-07-06 08:38:38 --> Severity: Notice --> Undefined variable: open_date C:\xampp\htdocs\libopro\application\controllers\Home.php 1835
ERROR - 2020-07-06 08:38:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
ORDER BY `success_time` DESC' at line 3 - Invalid query: SELECT SUM(`complete_qty`) AS `complete_qty`
FROM `dbt_biding_log`
WHERE (TIMESTAMPDIFF(HOUR, success_time, NOW()) <= 1) AND `bid_type` = 'BUY' AND `market_symbol` = 'BTC_USDT')
ORDER BY `success_time` DESC
ERROR - 2020-07-06 08:47:36 --> Severity: Notice --> Undefined variable: open_date C:\xampp\htdocs\libopro\application\controllers\Home.php 2036
ERROR - 2020-07-06 14:07:03 --> Query error: Unknown column 'success_time' in 'where clause' - Invalid query: SELECT *
FROM `dbt_coinhistory`
WHERE (TIMESTAMPDIFF(SECOND, success_time, NOW()) <= 3600 AND `market_symbol` = 'BTC_USDT')
ORDER BY `date` ASC
ERROR - 2020-07-06 14:21:36 --> Severity: Notice --> Object of class stdClass could not be converted to number C:\xampp\htdocs\libopro\application\controllers\Home.php 1968
ERROR - 2020-07-06 14:21:36 --> Severity: Notice --> Object of class stdClass could not be converted to number C:\xampp\htdocs\libopro\application\controllers\Home.php 2018
ERROR - 2020-07-06 16:41:41 --> Severity: error --> Exception: syntax error, unexpected '$qty' (T_VARIABLE) C:\xampp\htdocs\libopro\application\controllers\Home.php 2106
ERROR - 2020-07-06 16:41:52 --> Severity: error --> Exception: syntax error, unexpected '$qty' (T_VARIABLE) C:\xampp\htdocs\libopro\application\controllers\Home.php 2106
ERROR - 2020-07-06 16:41:53 --> Severity: error --> Exception: syntax error, unexpected '$qty' (T_VARIABLE) C:\xampp\htdocs\libopro\application\controllers\Home.php 2106
ERROR - 2020-07-06 16:41:54 --> Severity: error --> Exception: syntax error, unexpected '$qty' (T_VARIABLE) C:\xampp\htdocs\libopro\application\controllers\Home.php 2106
ERROR - 2020-07-06 16:41:59 --> Severity: error --> Exception: syntax error, unexpected '$qty' (T_VARIABLE) C:\xampp\htdocs\libopro\application\controllers\Home.php 2106
ERROR - 2020-07-06 16:41:59 --> Severity: error --> Exception: syntax error, unexpected '$qty' (T_VARIABLE) C:\xampp\htdocs\libopro\application\controllers\Home.php 2106
ERROR - 2020-07-06 16:42:00 --> Severity: error --> Exception: syntax error, unexpected '$qty' (T_VARIABLE) C:\xampp\htdocs\libopro\application\controllers\Home.php 2106
ERROR - 2020-07-06 16:42:00 --> Severity: error --> Exception: syntax error, unexpected '$qty' (T_VARIABLE) C:\xampp\htdocs\libopro\application\controllers\Home.php 2106
ERROR - 2020-07-06 16:42:01 --> Severity: error --> Exception: syntax error, unexpected '$qty' (T_VARIABLE) C:\xampp\htdocs\libopro\application\controllers\Home.php 2106
ERROR - 2020-07-06 16:42:01 --> Severity: error --> Exception: syntax error, unexpected '$qty' (T_VARIABLE) C:\xampp\htdocs\libopro\application\controllers\Home.php 2106
ERROR - 2020-07-06 16:42:02 --> Severity: error --> Exception: syntax error, unexpected '$qty' (T_VARIABLE) C:\xampp\htdocs\libopro\application\controllers\Home.php 2106
ERROR - 2020-07-06 17:33:16 --> Severity: Notice --> Trying to get property 'last_price' of non-object C:\xampp\htdocs\libopro\application\controllers\Home.php 1620
ERROR - 2020-07-06 17:33:16 --> Severity: Notice --> Undefined variable: exchangedata C:\xampp\htdocs\libopro\application\controllers\Home.php 1696
ERROR - 2020-07-06 17:40:44 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'as `price`) AS `bid_price as price`
FROM `dbt_biding`
WHERE `status` = 2' at line 1 - Invalid query: SELECT MIN(`bid_price` as `price`) AS `bid_price as price`
FROM `dbt_biding`
WHERE `status` = 2
ERROR - 2020-07-06 17:41:57 --> Severity: Notice --> Undefined variable: exchangedata C:\xampp\htdocs\libopro\application\controllers\Home.php 1699
