<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-09 07:53:15 --> Query error: Unknown column 'fees_amount' in 'field list' - Invalid query: SELECT IF(`bid_type`='BUY', SUBSTRING_INDEX(`market_symbol`,'_',-1), `currency_symbol`) as currency_symbol, SUBSTRING_INDEX(`market_symbol`,'_',-1) as currency_symbol2, SUM(`fees_amount`) as fees_amount FROM dbt_biding WHERE `status`=1 GROUP BY IF(`bid_type`='BUY', `currency_symbol2`, `currency_symbol`) ORDER BY `dbt_biding`.`currency_symbol` ASC
