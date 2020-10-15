<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-28 09:13:15 --> Severity: Notice --> Array to string conversion C:\xampp\htdocs\libopro\application\controllers\Workshop.php 229
ERROR - 2020-07-28 13:42:26 --> Severity: Notice --> Undefined variable: check_user_balance C:\xampp\htdocs\libopro\application\controllers\Workshop.php 198
ERROR - 2020-07-28 13:42:26 --> Severity: Notice --> Undefined variable: check_user_balance C:\xampp\htdocs\libopro\application\controllers\Workshop.php 201
ERROR - 2020-07-28 18:18:30 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-28 18:19:33 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
ERROR - 2020-07-28 18:25:25 --> Severity: Warning --> file_get_contents(http://api.ethplorer.io/getAddressInfo/?apiKey=nqsjx81105ypRd12): failed to open stream: HTTP request failed! HTTP/1.1 406 Not Acceptable
 C:\xampp\htdocs\libopro\application\views\backend\deposit\list.php 223
ERROR - 2020-07-28 18:56:46 --> Severity: Notice --> Undefined property: Withdraw::$exchange_model C:\xampp\htdocs\libopro\application\controllers\backend\withdraw\Withdraw.php 27
ERROR - 2020-07-28 18:56:46 --> Severity: error --> Exception: Call to a member function countAllWithdrawal() on null C:\xampp\htdocs\libopro\application\controllers\backend\withdraw\Withdraw.php 27
ERROR - 2020-07-28 18:57:10 --> Severity: Notice --> Undefined variable: page C:\xampp\htdocs\libopro\application\controllers\backend\withdraw\Withdraw.php 34
ERROR - 2020-07-28 19:14:30 --> Severity: Notice --> Undefined variable: page C:\xampp\htdocs\libopro\application\controllers\backend\withdraw\Withdraw.php 64
