<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-26 04:38:47 --> Query error: Table 'oyetunji_code.dbt_deposit' doesn't exist - Invalid query: SELECT MONTHNAME(`deposit_date`) as month, SUM(`amount`) as deposit FROM `dbt_deposit` WHERE `currency_symbol`='USD' GROUP BY YEAR(`deposit_date`), MONTH(`deposit_date`)
ERROR - 2020-07-26 04:45:25 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-26 05:45:31 --> 404 Page Not Found: Coin/btc
ERROR - 2020-07-26 05:45:37 --> 404 Page Not Found: Coins/btc
ERROR - 2020-07-26 08:59:54 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-26 09:00:28 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-26 08:06:03 --> Severity: Notice --> Trying to get property 'wallet' of non-object C:\xampp\htdocs\libopro\application\views\website\new-deposit.php 44
ERROR - 2020-07-26 08:06:04 --> Severity: Notice --> Trying to get property 'wallet' of non-object C:\xampp\htdocs\libopro\application\views\website\new-deposit.php 52
ERROR - 2020-07-26 08:07:01 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\libopro\application\views\website\new-deposit.php 25
ERROR - 2020-07-26 08:07:01 --> Severity: Notice --> Trying to get property 'wallet' of non-object C:\xampp\htdocs\libopro\application\views\website\new-deposit.php 44
ERROR - 2020-07-26 08:07:01 --> Severity: Notice --> Trying to get property 'wallet' of non-object C:\xampp\htdocs\libopro\application\views\website\new-deposit.php 52
ERROR - 2020-07-26 08:07:28 --> Severity: Notice --> Trying to get property 'wallet' of non-object C:\xampp\htdocs\libopro\application\views\website\new-deposit.php 44
ERROR - 2020-07-26 08:07:28 --> Severity: Notice --> Trying to get property 'wallet' of non-object C:\xampp\htdocs\libopro\application\views\website\new-deposit.php 52
ERROR - 2020-07-26 08:10:15 --> Severity: Notice --> Trying to get property 'wallet' of non-object C:\xampp\htdocs\libopro\application\views\website\new-deposit.php 44
ERROR - 2020-07-26 08:10:15 --> Severity: Notice --> Trying to get property 'wallet' of non-object C:\xampp\htdocs\libopro\application\views\website\new-deposit.php 52
ERROR - 2020-07-26 08:10:44 --> Severity: Notice --> Trying to get property 'wallet' of non-object C:\xampp\htdocs\libopro\application\views\website\new-deposit.php 44
ERROR - 2020-07-26 08:10:44 --> Severity: Notice --> Trying to get property 'wallet' of non-object C:\xampp\htdocs\libopro\application\views\website\new-deposit.php 52
ERROR - 2020-07-26 08:11:20 --> Severity: Notice --> Trying to get property 'wallet' of non-object C:\xampp\htdocs\libopro\application\views\website\new-deposit.php 52
ERROR - 2020-07-26 14:55:58 --> Severity: Notice --> Undefined variable: address C:\xampp\htdocs\libopro\application\controllers\Home.php 287
ERROR - 2020-07-26 14:55:58 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\libopro\application\controllers\Home.php 287
ERROR - 2020-07-26 14:55:58 --> Severity: Notice --> Undefined variable: privateKey C:\xampp\htdocs\libopro\application\controllers\Home.php 288
ERROR - 2020-07-26 14:55:58 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\libopro\application\controllers\Home.php 288
ERROR - 2020-07-26 14:55:58 --> Query error: Column 'wallet' cannot be null - Invalid query: INSERT INTO `dbt_user_addess` (`user_id`, `wallet`, `coin`) VALUES ('LISNK9', NULL, 'ETH')
ERROR - 2020-07-26 14:58:15 --> Severity: Notice --> Undefined variable: address C:\xampp\htdocs\libopro\application\controllers\Home.php 215
ERROR - 2020-07-26 14:58:16 --> Severity: Notice --> Undefined variable: address C:\xampp\htdocs\libopro\application\controllers\Home.php 294
ERROR - 2020-07-26 14:58:16 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\libopro\application\controllers\Home.php 294
ERROR - 2020-07-26 14:58:16 --> Severity: Notice --> Undefined variable: privateKey C:\xampp\htdocs\libopro\application\controllers\Home.php 295
ERROR - 2020-07-26 14:58:16 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\libopro\application\controllers\Home.php 295
ERROR - 2020-07-26 14:58:16 --> Query error: Column 'wallet' cannot be null - Invalid query: INSERT INTO `dbt_user_addess` (`user_id`, `wallet`, `coin`) VALUES ('LISNK9', NULL, 'ETH')
ERROR - 2020-07-26 14:58:59 --> Severity: Notice --> Undefined variable: address C:\xampp\htdocs\libopro\application\controllers\Home.php 215
ERROR - 2020-07-26 15:00:40 --> Severity: Notice --> Undefined variable: address C:\xampp\htdocs\libopro\application\controllers\Home.php 216
ERROR - 2020-07-26 15:00:40 --> Severity: Notice --> Undefined property: stdClass::$ C:\xampp\htdocs\libopro\application\controllers\Home.php 216
ERROR - 2020-07-26 15:06:01 --> Severity: Notice --> Trying to get property 'wallet' of non-object C:\xampp\htdocs\libopro\application\controllers\Home.php 357
ERROR - 2020-07-26 15:06:01 --> Severity: Notice --> Trying to get property 'public_key' of non-object C:\xampp\htdocs\libopro\application\controllers\Home.php 358
ERROR - 2020-07-26 15:06:01 --> Severity: Notice --> Trying to get property 'private_key' of non-object C:\xampp\htdocs\libopro\application\controllers\Home.php 359
ERROR - 2020-07-26 15:06:01 --> Severity: Notice --> Trying to get property 'wif' of non-object C:\xampp\htdocs\libopro\application\controllers\Home.php 360
ERROR - 2020-07-26 15:06:01 --> Query error: Column 'wallet' cannot be null - Invalid query: INSERT INTO `dbt_user_keys` (`user_id`, `wallet`, `public_key`, `private_key`, `wif`, `coin`) VALUES ('LISNK9', NULL, NULL, NULL, NULL, 'USDT')
ERROR - 2020-07-26 16:48:14 --> Severity: error --> Exception: Too few arguments to function Web_model::getaddress(), 0 passed in C:\xampp\htdocs\libopro\application\controllers\Home.php on line 421 and exactly 1 expected C:\xampp\htdocs\libopro\application\models\website\Web_model.php 422
ERROR - 2020-07-26 19:11:15 --> 404 Page Not Found: Home/create_addressETH
ERROR - 2020-07-26 17:48:31 --> Severity: error --> Exception: Too few arguments to function Web_model::getaddress(), 0 passed in C:\xampp\htdocs\libopro\application\controllers\Home.php on line 442 and exactly 1 expected C:\xampp\htdocs\libopro\application\models\website\Web_model.php 422
ERROR - 2020-07-26 17:48:58 --> Severity: error --> Exception: Too few arguments to function Home::withdrawstatus(), 0 passed in C:\xampp\htdocs\libopro\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\libopro\application\controllers\Home.php 436
ERROR - 2020-07-26 19:49:06 --> 404 Page Not Found: Withdrawstatus/BTC
ERROR - 2020-07-26 17:53:02 --> Severity: error --> Exception: Too few arguments to function Home::withdrawstatus(), 0 passed in C:\xampp\htdocs\libopro\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\libopro\application\controllers\Home.php 437
ERROR - 2020-07-26 20:51:54 --> Query error: Unknown column 'request_date' in 'field list' - Invalid query: SELECT MONTHNAME(`request_date`) as month, SUM(`amount`) as withdraw FROM `dbt_withdraw` WHERE `currency_symbol`='USD' GROUP BY YEAR(`request_date`), MONTH(`request_date`)
ERROR - 2020-07-26 20:52:56 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-26 20:53:14 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-26 20:53:14 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-26 20:55:01 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-26 20:55:01 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-26 21:00:43 --> 404 Page Not Found: Assets/img
