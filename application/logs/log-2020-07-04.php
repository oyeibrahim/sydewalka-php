<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-04 08:58:49 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-04 07:21:09 --> Query error: Table 'oyetunji_code.dbt_minimum' doesn't exist - Invalid query: SELECT *
FROM `dbt_minimum`
WHERE `coin_symbol` = 'USDT'
ERROR - 2020-07-04 07:26:08 --> Severity: Notice --> Undefined variable: mini C:\xampp\htdocs\libopro\application\controllers\Home.php 1620
ERROR - 2020-07-04 07:26:09 --> Severity: Notice --> Undefined variable: fees_amount C:\xampp\htdocs\libopro\application\controllers\Home.php 1640
ERROR - 2020-07-04 07:26:09 --> Severity: Notice --> Undefined variable: fees C:\xampp\htdocs\libopro\application\controllers\Home.php 1646
ERROR - 2020-07-04 07:26:09 --> Severity: Notice --> Trying to get property 'fees' of non-object C:\xampp\htdocs\libopro\application\controllers\Home.php 1646
ERROR - 2020-07-04 07:26:09 --> Severity: Notice --> Undefined variable: fees_amount C:\xampp\htdocs\libopro\application\controllers\Home.php 1652
ERROR - 2020-07-04 07:26:09 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: INSERT INTO `dbt_biding` (`bid_type`, `bid_price`, `bid_qty`, `bid_qty_available`, `total_amount`, `amount_available`, `currency_symbol`, `market_symbol`, `user_id`, `open_order`, `fees_amount`, `status`) VALUES ('BUY', '10000', '1', 1, 10000, 10000, 'BTC', 'BTC_USDT', 'LISNK9', '2020-07-04 07:26:09', NULL, 2)
ERROR - 2020-07-04 07:29:35 --> Severity: Notice --> Undefined variable: minimum_c0 C:\xampp\htdocs\libopro\application\controllers\Home.php 1619
ERROR - 2020-07-04 07:31:57 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\libopro\application\controllers\Home.php 1620
ERROR - 2020-07-04 07:31:58 --> Severity: 4096 --> Object of class stdClass could not be converted to string C:\xampp\htdocs\libopro\application\controllers\Home.php 1621
ERROR - 2020-07-04 10:13:03 --> Severity: Notice --> Undefined property: Sell_fl::$web_model C:\xampp\htdocs\libopro\application\controllers\Sell_fl.php 19
ERROR - 2020-07-04 10:13:04 --> Severity: error --> Exception: Call to a member function checkBalance() on null C:\xampp\htdocs\libopro\application\controllers\Sell_fl.php 19
ERROR - 2020-07-04 08:13:59 --> Severity: error --> Exception: Call to undefined method Sell_fl::langSet() C:\xampp\htdocs\libopro\application\controllers\Sell_fl.php 23
ERROR - 2020-07-04 08:14:48 --> Severity: error --> Exception: Call to undefined method Sell_fl::langSet() C:\xampp\htdocs\libopro\application\controllers\Sell_fl.php 23
ERROR - 2020-07-04 09:29:07 --> Query error: Unknown column 'LISNK9' in 'where clause' - Invalid query: SELECT `spot_maker_percent_of_fee` as `maker`, `spot_taker_percent_of_fee` as `taker`
FROM `dbt_user`
WHERE `LISNK9` IS NULL
ERROR - 2020-07-04 11:33:24 --> Severity: error --> Exception: syntax error, unexpected '$date' (T_VARIABLE), expecting ',' or ';' C:\xampp\htdocs\libopro\application\controllers\Home.php 1632
ERROR - 2020-07-04 11:33:25 --> Severity: error --> Exception: syntax error, unexpected '$date' (T_VARIABLE), expecting ',' or ';' C:\xampp\htdocs\libopro\application\controllers\Home.php 1632
ERROR - 2020-07-04 11:33:25 --> Severity: error --> Exception: syntax error, unexpected '$date' (T_VARIABLE), expecting ',' or ';' C:\xampp\htdocs\libopro\application\controllers\Home.php 1632
ERROR - 2020-07-04 09:33:43 --> Severity: Notice --> Undefined variable: fees_amount C:\xampp\htdocs\libopro\application\controllers\Home.php 1640
ERROR - 2020-07-04 09:33:43 --> Severity: Notice --> Undefined variable: fees C:\xampp\htdocs\libopro\application\controllers\Home.php 1643
ERROR - 2020-07-04 09:33:43 --> Severity: Notice --> Trying to get property 'fees' of non-object C:\xampp\htdocs\libopro\application\controllers\Home.php 1643
ERROR - 2020-07-04 09:33:43 --> Severity: Notice --> Undefined variable: fees_amount C:\xampp\htdocs\libopro\application\controllers\Home.php 1649
ERROR - 2020-07-04 09:33:43 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: INSERT INTO `dbt_biding` (`bid_type`, `bid_price`, `bid_qty`, `bid_qty_available`, `total_amount`, `amount_available`, `currency_symbol`, `market_symbol`, `user_id`, `open_order`, `fees_amount`, `status`) VALUES ('BUY', '10000', '1', 1, 10000, 10000, 'BTC', 'BTC_USDT', 'LISNK9', '2020-07-04 09:33:43', NULL, 2)
ERROR - 2020-07-04 23:08:46 --> Query error: Unknown column 'currency_symbol' in 'where clause' - Invalid query: UPDATE `dbt_user` SET `user_id` = 'LISNK9', `currency_symbol` = 'BTC', `balance` = 'balance + 20'
WHERE `user_id` = 'LISNK9'
AND `currency_symbol` = 'BTC'
ERROR - 2020-07-04 19:41:23 --> Severity: error --> Exception: syntax error, unexpected ';' C:\xampp\htdocs\libopro\application\controllers\Home.php 1674
ERROR - 2020-07-04 19:41:23 --> Severity: error --> Exception: syntax error, unexpected ';' C:\xampp\htdocs\libopro\application\controllers\Home.php 1674
ERROR - 2020-07-04 19:41:24 --> Severity: error --> Exception: syntax error, unexpected ';' C:\xampp\htdocs\libopro\application\controllers\Home.php 1674
ERROR - 2020-07-04 19:41:25 --> Severity: error --> Exception: syntax error, unexpected ';' C:\xampp\htdocs\libopro\application\controllers\Home.php 1674
ERROR - 2020-07-04 19:41:25 --> Severity: error --> Exception: syntax error, unexpected ';' C:\xampp\htdocs\libopro\application\controllers\Home.php 1674
ERROR - 2020-07-04 19:41:26 --> Severity: error --> Exception: syntax error, unexpected ';' C:\xampp\htdocs\libopro\application\controllers\Home.php 1674
ERROR - 2020-07-04 19:41:26 --> Severity: error --> Exception: syntax error, unexpected ';' C:\xampp\htdocs\libopro\application\controllers\Home.php 1674
ERROR - 2020-07-04 19:41:27 --> Severity: error --> Exception: syntax error, unexpected ';' C:\xampp\htdocs\libopro\application\controllers\Home.php 1674
ERROR - 2020-07-04 19:41:28 --> Severity: error --> Exception: syntax error, unexpected ';' C:\xampp\htdocs\libopro\application\controllers\Home.php 1674
ERROR - 2020-07-04 17:45:36 --> Severity: error --> Exception: Call to undefined function ucword() C:\xampp\htdocs\libopro\application\controllers\Home.php 1676
