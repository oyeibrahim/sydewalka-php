<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-02 10:03:42 --> Query error: Unknown column 'created' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM (
SELECT *
FROM `dbt_biding_log`
WHERE TIMESTAMPDIFF(MONTH, created, NOW()) <= 2 and `status` = '1'
GROUP BY `currency_symbol`
) CI_count_all_results
ERROR - 2020-07-02 10:06:53 --> Query error: Unknown column 'created' in 'where clause' - Invalid query: SELECT COUNT(*) AS `numrows`
FROM (
SELECT *
FROM `dbt_biding_log`
WHERE TIMESTAMPDIFF(MONTH, created, NOW()) <= 2 and `status` = '1'
GROUP BY `currency_symbol`
) CI_count_all_results
ERROR - 2020-07-02 10:07:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '(fees_amount) as fee
FROM `dbt_biding_log`
WHERE TIMESTAMPDIFF(MONTH, success_ti' at line 1 - Invalid query: SELECT `currency_symbol` as `symbol`, SUM(complete_qty) as amountSUM(fees_amount) as fee
FROM `dbt_biding_log`
WHERE TIMESTAMPDIFF(MONTH, success_time, NOW()) <= 2 and `status` = '1'
GROUP BY `currency_symbol`
ORDER BY `amount` DESC
 LIMIT 200
ERROR - 2020-07-02 06:08:44 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-02 06:09:04 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-07-02 06:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2020-07-02 06:10:19 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-02 06:10:59 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-02 06:12:11 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-02 06:12:41 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-02 06:13:25 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-02 06:14:09 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-02 06:14:14 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-02 06:14:50 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-02 06:16:06 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-02 06:17:08 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-02 06:17:50 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-02 10:18:24 --> Severity: error --> Exception: Call to undefined function parseFloat() C:\xampp\htdocs\libopro\application\views\features\manage\total_trades.php 158
ERROR - 2020-07-02 06:18:41 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-02 06:20:21 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-02 06:20:58 --> 404 Page Not Found: Assets/img
ERROR - 2020-07-02 08:01:09 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\libopro\application\controllers\Home.php 1611
ERROR - 2020-07-02 08:01:10 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\libopro\application\controllers\Home.php 1644
ERROR - 2020-07-02 08:01:10 --> Severity: Notice --> Undefined offset: 1 C:\xampp\htdocs\libopro\application\controllers\Home.php 1645
