<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-10-21 06:15:56 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'fpo360_marketview.dbt_biding.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, SUM(`bid_qty_available`) as total_qty, SUM(`bid_qty_available`*`bid_price`) as total_price FROM dbt_biding WHERE `status`=2 AND `market_symbol`='LTC_BTC'  AND `bid_type`='BUY' GROUP BY `bid_price` ORDER BY `dbt_biding`.`bid_price` ASC
ERROR - 2019-10-21 06:15:56 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'fpo360_marketview.dbt_biding.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, SUM(`bid_qty_available`) as total_qty, SUM(`bid_qty_available`*`bid_price`) as total_price FROM dbt_biding WHERE `status`=2 AND `market_symbol`='LTC_BTC' AND `bid_type`='SELL' GROUP BY `bid_price` ORDER BY `dbt_biding`.`bid_price` DESC
ERROR - 2019-10-21 06:15:58 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'fpo360_marketview.dbt_biding.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, SUM(`bid_qty_available`) as total_qty, SUM(`bid_qty_available`*`bid_price`) as total_price FROM dbt_biding WHERE `status`=2 AND `market_symbol`='LTC_BTC'  AND `bid_type`='BUY' GROUP BY `bid_price` ORDER BY `dbt_biding`.`bid_price` ASC
ERROR - 2019-10-21 06:15:59 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'fpo360_marketview.dbt_biding.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, SUM(`bid_qty_available`) as total_qty, SUM(`bid_qty_available`*`bid_price`) as total_price FROM dbt_biding WHERE `status`=2 AND `market_symbol`='LTC_BTC' AND `bid_type`='SELL' GROUP BY `bid_price` ORDER BY `dbt_biding`.`bid_price` DESC
ERROR - 2019-10-21 06:16:03 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'fpo360_marketview.dbt_biding.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, SUM(`bid_qty_available`) as total_qty, SUM(`bid_qty_available`*`bid_price`) as total_price FROM dbt_biding WHERE `status`=2 AND `market_symbol`='LTC_BTC'  AND `bid_type`='BUY' GROUP BY `bid_price` ORDER BY `dbt_biding`.`bid_price` ASC
ERROR - 2019-10-21 06:16:03 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'fpo360_marketview.dbt_biding.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT *, SUM(`bid_qty_available`) as total_qty, SUM(`bid_qty_available`*`bid_price`) as total_price FROM dbt_biding WHERE `status`=2 AND `market_symbol`='LTC_BTC' AND `bid_type`='SELL' GROUP BY `bid_price` ORDER BY `dbt_biding`.`bid_price` DESC
ERROR - 2019-10-21 14:13:46 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'fpo360_marketview.dbt_deposit.deposit_date' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT MONTHNAME(`deposit_date`) as month, SUM(`amount`) as deposit FROM `dbt_deposit` WHERE `currency_symbol`='USD' GROUP BY YEAR(`deposit_date`), MONTH(`deposit_date`)
ERROR - 2019-10-21 14:14:02 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'fpo360_marketview.dbt_deposit.deposit_date' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT MONTHNAME(`deposit_date`) as month, SUM(`amount`) as deposit FROM `dbt_deposit` WHERE `currency_symbol`='USD' GROUP BY YEAR(`deposit_date`), MONTH(`deposit_date`)
ERROR - 2019-10-21 14:14:05 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'fpo360_marketview.dbt_deposit.deposit_date' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT MONTHNAME(`deposit_date`) as month, SUM(`amount`) as deposit FROM `dbt_deposit` WHERE `currency_symbol`='USD' GROUP BY YEAR(`deposit_date`), MONTH(`deposit_date`)
ERROR - 2019-10-21 14:14:07 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'fpo360_marketview.dbt_deposit.deposit_date' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT MONTHNAME(`deposit_date`) as month, SUM(`amount`) as deposit FROM `dbt_deposit` WHERE `currency_symbol`='USD' GROUP BY YEAR(`deposit_date`), MONTH(`deposit_date`)
ERROR - 2019-10-21 14:14:10 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'fpo360_marketview.dbt_deposit.deposit_date' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT MONTHNAME(`deposit_date`) as month, SUM(`amount`) as deposit FROM `dbt_deposit` WHERE `currency_symbol`='USD' GROUP BY YEAR(`deposit_date`), MONTH(`deposit_date`)
ERROR - 2019-10-21 14:14:20 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'fpo360_marketview.dbt_deposit.deposit_date' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT MONTHNAME(`deposit_date`) as month, SUM(`amount`) as deposit FROM `dbt_deposit` WHERE `currency_symbol`='USD' GROUP BY YEAR(`deposit_date`), MONTH(`deposit_date`)
ERROR - 2019-10-21 17:34:11 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'fpo360_marketview.dbt_deposit.deposit_date' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT MONTHNAME(`deposit_date`) as month, SUM(`amount`) as deposit FROM `dbt_deposit` WHERE `currency_symbol`='USD' GROUP BY YEAR(`deposit_date`), MONTH(`deposit_date`)
ERROR - 2019-10-21 17:35:30 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'fpo360_marketview.dbt_deposit.deposit_date' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT MONTHNAME(`deposit_date`) as month, SUM(`amount`) as deposit FROM `dbt_deposit` WHERE `currency_symbol`='USD' GROUP BY YEAR(`deposit_date`), MONTH(`deposit_date`)
