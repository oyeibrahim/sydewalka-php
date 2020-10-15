<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-10 04:50:45 --> 404 Page Not Found: backend/user/User/search_user
ERROR - 2020-06-10 05:00:27 --> Severity: Warning --> A non-numeric value encountered C:\xampp\htdocs\libopro\application\controllers\backend\user\User.php 301
ERROR - 2020-06-10 05:00:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near '-15, 15' at line 5 - Invalid query: SELECT `bidmaster`.*, `biddetail`.`bid_type` as `bid_type1`, `biddetail`.`bid_price` as `bid_price1`, `biddetail`.`market_symbol` as `market_symbol1`, `biddetail`.`complete_amount` as `complete_amount1`, `biddetail`.`success_time` as `success_time1`, `biddetail`.`complete_qty`, `biddetail`.`complete_amount`, `biddetail`.`success_time`
FROM `dbt_biding` `bidmaster`
LEFT JOIN `dbt_biding_log` `biddetail` ON `biddetail`.`bid_id` = `bidmaster`.`id`
WHERE `bidmaster`.`user_id` = 'LISNK9'
 LIMIT -15, 15
ERROR - 2020-06-10 06:25:19 --> Severity: Notice --> Undefined variable: userReq C:\xampp\htdocs\libopro\application\views\backend\user\search_user.php 140
ERROR - 2020-06-10 06:25:19 --> Severity: Notice --> Undefined variable: userReq C:\xampp\htdocs\libopro\application\views\backend\user\search_user.php 148
ERROR - 2020-06-10 06:26:47 --> Severity: Notice --> Undefined variable: userReq C:\xampp\htdocs\libopro\application\views\backend\user\search_user.php 140
ERROR - 2020-06-10 06:26:47 --> Severity: Notice --> Undefined variable: userReq C:\xampp\htdocs\libopro\application\views\backend\user\search_user.php 148
ERROR - 2020-06-10 06:27:35 --> Severity: Notice --> Undefined variable: userReq C:\xampp\htdocs\libopro\application\views\backend\user\search_user.php 140
ERROR - 2020-06-10 06:27:35 --> Severity: Notice --> Undefined variable: userReq C:\xampp\htdocs\libopro\application\views\backend\user\search_user.php 148
ERROR - 2020-06-10 07:05:26 --> Severity: Notice --> Undefined variable: userReq C:\xampp\htdocs\libopro\application\views\backend\user\search_user.php 140
ERROR - 2020-06-10 07:05:26 --> Severity: Notice --> Undefined variable: userReq C:\xampp\htdocs\libopro\application\views\backend\user\search_user.php 149
ERROR - 2020-06-10 07:20:09 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:20:10 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:20:14 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:20:15 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:20:51 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:20:51 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:20:54 --> Severity: Notice --> Undefined property: User::$fiat_model C:\xampp\htdocs\libopro\application\controllers\backend\user\User.php 272
ERROR - 2020-06-10 07:20:54 --> Severity: error --> Exception: Call to a member function countBalance() on null C:\xampp\htdocs\libopro\application\controllers\backend\user\User.php 272
ERROR - 2020-06-10 07:23:31 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:23:32 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:23:33 --> Severity: Notice --> Undefined property: User::$fiat_model C:\xampp\htdocs\libopro\application\controllers\backend\user\User.php 272
ERROR - 2020-06-10 07:23:34 --> Severity: error --> Exception: Call to a member function countBalance() on null C:\xampp\htdocs\libopro\application\controllers\backend\user\User.php 272
ERROR - 2020-06-10 07:23:41 --> Severity: Notice --> Undefined property: User::$fiat_model C:\xampp\htdocs\libopro\application\controllers\backend\user\User.php 272
ERROR - 2020-06-10 07:23:41 --> Severity: error --> Exception: Call to a member function countBalance() on null C:\xampp\htdocs\libopro\application\controllers\backend\user\User.php 272
ERROR - 2020-06-10 07:24:51 --> Query error: Unknown column 'created' in 'order clause' - Invalid query: SELECT *
FROM `dbt_balance` `balance`
LEFT JOIN `dbt_cryptocoin` `coin` ON `coin`.`symbol` = `balance`.`currency_symbol`
WHERE `balance`.`user_id` = 'LISNK9'
ORDER BY `created` DESC
 LIMIT 50
ERROR - 2020-06-10 07:27:34 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:27:35 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:28:09 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:28:09 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:28:30 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:28:30 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:30:52 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:30:52 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:33:07 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:33:07 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:38:24 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:38:25 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:40:47 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:40:48 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:41:45 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:41:45 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:42:15 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:43:06 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:43:07 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:43:49 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:43:50 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:44:25 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:44:26 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:45:28 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:45:28 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:45:39 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:45:40 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:46:02 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:46:03 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 07:46:56 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 07:46:56 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 08:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 08:22:57 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 08:23:34 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 08:23:38 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 08:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 08:24:06 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 08:25:06 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 08:25:06 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 08:26:51 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 08:26:51 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 08:27:23 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 08:27:23 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 08:27:56 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 08:27:57 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 09:59:15 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 09:59:16 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:02:18 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:02:18 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:02:48 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:07:30 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:07:31 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:08:20 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:08:21 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:09:06 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:09:07 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:09:31 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:09:31 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:09:56 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:09:56 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:11:58 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:11:58 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:14:10 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:14:10 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:22:29 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:22:29 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:22:45 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:22:46 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:33:28 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:33:29 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:34:39 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:34:39 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:36:23 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:36:23 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:39:52 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:41:15 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:41:16 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:41:44 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:41:45 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:42:15 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:42:15 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:44:46 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:44:46 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:45:44 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:45:45 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:57:51 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:57:52 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 10:58:54 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 10:58:54 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:00:11 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:00:12 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:00:53 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:00:54 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:01:58 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:01:58 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:03:17 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:04:53 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:04:53 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:07:17 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:07:17 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:07:52 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:07:53 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:09:13 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:09:13 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:10:29 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:10:30 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:11:13 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:11:13 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:11:21 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:11:21 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:11:57 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:11:57 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:13:16 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:13:16 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:14:20 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:14:20 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:14:49 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:14:50 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:15:33 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:15:34 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:23:15 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:23:16 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 11:25:31 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 11:25:31 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 15:53:39 --> Severity: Notice --> Undefined variable: start_fetch_num C:\xampp\htdocs\libopro\application\controllers\Fiat.php 299
ERROR - 2020-06-10 15:53:39 --> Severity: Notice --> Undefined property: Fiat::$user_model C:\xampp\htdocs\libopro\application\controllers\Fiat.php 315
ERROR - 2020-06-10 15:53:40 --> Severity: error --> Exception: Call to a member function countAdvert() on null C:\xampp\htdocs\libopro\application\controllers\Fiat.php 315
ERROR - 2020-06-10 16:08:06 --> Severity: Notice --> Undefined variable: start_fetch_num C:\xampp\htdocs\libopro\application\controllers\Fiat.php 299
ERROR - 2020-06-10 16:08:06 --> Severity: Notice --> Undefined property: Fiat::$user_model C:\xampp\htdocs\libopro\application\controllers\Fiat.php 315
ERROR - 2020-06-10 16:08:06 --> Severity: error --> Exception: Call to a member function countAdvert() on null C:\xampp\htdocs\libopro\application\controllers\Fiat.php 315
ERROR - 2020-06-10 16:08:13 --> Severity: Notice --> Undefined variable: start_fetch_num C:\xampp\htdocs\libopro\application\controllers\Fiat.php 299
ERROR - 2020-06-10 16:08:13 --> Severity: Notice --> Undefined property: Fiat::$user_model C:\xampp\htdocs\libopro\application\controllers\Fiat.php 315
ERROR - 2020-06-10 16:08:13 --> Severity: error --> Exception: Call to a member function countAdvert() on null C:\xampp\htdocs\libopro\application\controllers\Fiat.php 315
ERROR - 2020-06-10 16:09:11 --> Severity: Notice --> Undefined property: Fiat::$user_model C:\xampp\htdocs\libopro\application\controllers\Fiat.php 315
ERROR - 2020-06-10 16:09:11 --> Severity: error --> Exception: Call to a member function countAdvert() on null C:\xampp\htdocs\libopro\application\controllers\Fiat.php 315
ERROR - 2020-06-10 16:09:47 --> Severity: Notice --> Undefined variable: user_id C:\xampp\htdocs\libopro\application\controllers\Fiat.php 315
ERROR - 2020-06-10 16:09:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'IS NULL' at line 3 - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `fiat_advert`
WHERE  IS NULL
ERROR - 2020-06-10 12:21:07 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 12:21:07 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 12:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 12:23:26 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 16:07:31 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No connection could be made because the target machine actively refused it.
 C:\xampp\htdocs\libopro\system\database\drivers\mysqli\mysqli_driver.php 201
ERROR - 2020-06-10 16:07:32 --> Unable to connect to the database
ERROR - 2020-06-10 16:15:11 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 16:15:13 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 16:15:49 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 16:15:50 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 16:34:40 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 16:34:40 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 16:35:30 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 16:35:31 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 16:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 16:35:47 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 16:36:46 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 16:36:46 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 16:38:45 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 16:38:46 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 19:31:05 --> Query error: Table 'oyetunji_code.dbt_user_address' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `dbt_user_address`
WHERE `user_id` = 'LISNK9'
ERROR - 2020-06-10 19:31:16 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 19:31:16 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 19:31:33 --> Query error: Table 'oyetunji_code.dbt_user_address' doesn't exist - Invalid query: SELECT COUNT(*) AS `numrows`
FROM `dbt_user_address`
WHERE `user_id` = 'LISNK9'
ERROR - 2020-06-10 19:33:28 --> Query error: Table 'oyetunji_code.dbt_user_address' doesn't exist - Invalid query: SELECT *
FROM `dbt_user_address` `addess`
LEFT JOIN `dbt_cryptocoin` `coin` ON `coin`.`symbol` = `address`.`coin`
WHERE `address`.`user_id` = 'LISNK9'
ORDER BY `coin`.`coin_name` ASC
 LIMIT 100
ERROR - 2020-06-10 19:34:07 --> 404 Page Not Found: Assets/css
ERROR - 2020-06-10 19:34:08 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 19:39:30 --> 404 Page Not Found: Assets/datatables
ERROR - 2020-06-10 19:39:30 --> 404 Page Not Found: Assets/css
