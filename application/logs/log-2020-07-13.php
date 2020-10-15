<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-13 06:17:13 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-13 06:17:56 --> Severity: Notice --> Trying to get property 'article_id' of non-object C:\xampp\htdocs\libopro\application\controllers\backend\cms\Contact.php 34
ERROR - 2020-07-13 09:50:17 --> Severity: Compile Error --> Cannot redeclare V1_model::readPairs() C:\xampp\htdocs\libopro\application\models\api\V1_model.php 23
ERROR - 2020-07-13 10:24:13 --> 404 Page Not Found: api/V1/get-all-balance
ERROR - 2020-07-13 14:25:26 --> Severity: Notice --> Undefined variable: user_id C:\xampp\htdocs\libopro\application\controllers\api\V1.php 45
ERROR - 2020-07-13 15:54:56 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'V1' does not have a method 'index_get' C:\xampp\htdocs\libopro\application\libraries\REST_Controller.php 739
ERROR - 2020-07-13 15:55:58 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'V1' does not have a method 'index_get' C:\xampp\htdocs\libopro\application\libraries\REST_Controller.php 739
ERROR - 2020-07-13 15:56:17 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'V1' does not have a method 'index_get' C:\xampp\htdocs\libopro\application\libraries\REST_Controller.php 739
ERROR - 2020-07-13 15:57:05 --> Severity: Notice --> Undefined variable: user_id C:\xampp\htdocs\libopro\application\controllers\api\V1.php 35
ERROR - 2020-07-13 15:57:55 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'V1' does not have a method 'index_get' C:\xampp\htdocs\libopro\application\libraries\REST_Controller.php 739
ERROR - 2020-07-13 15:58:13 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'V1' does not have a method 'index_get' C:\xampp\htdocs\libopro\application\libraries\REST_Controller.php 739
ERROR - 2020-07-13 15:58:23 --> Severity: Notice --> Undefined variable: user_id C:\xampp\htdocs\libopro\application\controllers\api\V1.php 35
ERROR - 2020-07-13 15:58:57 --> Severity: Notice --> Undefined variable: user_id C:\xampp\htdocs\libopro\application\controllers\api\V1.php 35
ERROR - 2020-07-13 16:00:57 --> Severity: Notice --> Undefined variable: balance_data C:\xampp\htdocs\libopro\application\controllers\api\V1.php 46
ERROR - 2020-07-13 16:02:27 --> Severity: Notice --> Undefined property: V1::$workshop_model C:\xampp\htdocs\libopro\application\controllers\api\V1.php 48
ERROR - 2020-07-13 16:02:27 --> Severity: error --> Exception: Call to a member function readAllBalance() on null C:\xampp\htdocs\libopro\application\controllers\api\V1.php 48
ERROR - 2020-07-13 12:54:57 --> Severity: Compile Error --> Cannot redeclare V1_model::readCoinBalance() C:\xampp\htdocs\libopro\application\models\api\V1_model.php 89
ERROR - 2020-07-13 16:56:16 --> Severity: Notice --> Trying to get property 'currency_symbol' of non-object C:\xampp\htdocs\libopro\application\controllers\api\V1.php 89
ERROR - 2020-07-13 16:56:16 --> Severity: Notice --> Trying to get property 'balance' of non-object C:\xampp\htdocs\libopro\application\controllers\api\V1.php 90
ERROR - 2020-07-13 16:56:16 --> Severity: Notice --> Trying to get property 'on_hold' of non-object C:\xampp\htdocs\libopro\application\controllers\api\V1.php 91
ERROR - 2020-07-13 17:02:43 --> Severity: Warning --> call_user_func_array() expects parameter 1 to be a valid callback, class 'V1' does not have a method 'index_get' C:\xampp\htdocs\libopro\application\libraries\REST_Controller.php 739
ERROR - 2020-07-13 12:26:28 --> Severity: Notice --> Trying to get property 'last_price' of non-object C:\xampp\htdocs\libopro\application\controllers\Home.php 3763
ERROR - 2020-07-13 18:49:41 --> Severity: Warning --> array_push() expects parameter 1 to be array, object given C:\xampp\htdocs\libopro\application\controllers\api\V1.php 118
ERROR - 2020-07-13 19:43:08 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\libopro\application\controllers\api\V1.php 120
ERROR - 2020-07-13 19:43:50 --> Severity: Warning --> array_push() expects parameter 1 to be array, null given C:\xampp\htdocs\libopro\application\controllers\api\V1.php 120
ERROR - 2020-07-13 20:56:27 --> Query error: Unknown column 'is_maker' in 'where clause' - Invalid query: SELECT *
FROM `dbt_biding`
WHERE `market_symbol` = 'BTC_USDT'
AND `is_maker` =0
AND `status` = 1
ORDER BY `success_time` DESC
 LIMIT 10
ERROR - 2020-07-13 21:01:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-1' at line 7 - Invalid query: SELECT *
FROM `dbt_biding_log`
WHERE `market_symbol` = 'BTC_USDT'
AND `is_maker` =0
AND `status` = 1
ORDER BY `success_time` DESC
 LIMIT -1
ERROR - 2020-07-13 21:58:39 --> Severity: error --> Exception: Too few arguments to function V1_model::readPairTickerCandle(), 1 passed in C:\xampp\htdocs\libopro\application\controllers\api\V1.php on line 294 and at least 2 expected C:\xampp\htdocs\libopro\application\models\api\V1_model.php 43
ERROR - 2020-07-13 21:59:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'TIMESTAMPDIFF(MINUTE, created, NOW()) <= 60
ORDER BY `date` DESC
 LIMIT 100' at line 3 - Invalid query: SELECT *
FROM `dbt_coinhistory`
WHERE `market_symbol` = 'BTC_USDT' TIMESTAMPDIFF(MINUTE, created, NOW()) <= 60
ORDER BY `date` DESC
 LIMIT 100
ERROR - 2020-07-13 22:00:02 --> Query error: Unknown column 'created' in 'where clause' - Invalid query: SELECT *
FROM `dbt_coinhistory`
WHERE `market_symbol` = 'BTC_USDT' and TIMESTAMPDIFF(MINUTE, created, NOW()) <= 60
ORDER BY `date` DESC
 LIMIT 100
ERROR - 2020-07-13 22:01:48 --> Severity: Notice --> Undefined variable: build_data C:\xampp\htdocs\libopro\application\controllers\api\V1.php 310
ERROR - 2020-07-13 22:01:48 --> Severity: Notice --> Undefined variable: build_data C:\xampp\htdocs\libopro\application\controllers\api\V1.php 310
ERROR - 2020-07-13 22:01:48 --> Severity: Notice --> Undefined variable: build_data C:\xampp\htdocs\libopro\application\controllers\api\V1.php 310
ERROR - 2020-07-13 22:01:48 --> Severity: Notice --> Undefined variable: build_data C:\xampp\htdocs\libopro\application\controllers\api\V1.php 310
ERROR - 2020-07-13 22:01:48 --> Severity: Notice --> Undefined variable: build_data C:\xampp\htdocs\libopro\application\controllers\api\V1.php 310
ERROR - 2020-07-13 22:25:39 --> Severity: Notice --> Undefined variable: market_array C:\xampp\htdocs\libopro\application\controllers\api\V1.php 362
ERROR - 2020-07-13 23:14:45 --> Severity: Notice --> Undefined variable: market C:\xampp\htdocs\libopro\application\controllers\api\V1.php 497
ERROR - 2020-07-13 23:57:56 --> Severity: error --> Exception: Too few arguments to function V1::order_cancel(), 1 passed in C:\xampp\htdocs\libopro\application\controllers\api\V1.php on line 624 and exactly 2 expected C:\xampp\htdocs\libopro\application\controllers\api\V1.php 773
ERROR - 2020-07-13 23:58:30 --> Severity: Notice --> Trying to get property 'user_id' of non-object C:\xampp\htdocs\libopro\application\controllers\api\V1.php 780
