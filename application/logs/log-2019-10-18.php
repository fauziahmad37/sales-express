<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-10-18 03:03:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 03:27:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 03:27:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 03:29:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 03:30:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 03:30:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 03:30:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 08:13:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 08:14:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 08:17:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 08:17:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 08:18:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 08:18:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 08:23:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 08:30:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 08:33:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 08:33:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 08:33:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 08:33:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 08:34:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 08:38:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 08:49:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 08:51:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 08:51:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 08:53:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 08:55:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 08:59:32 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-18 08:59:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 09:14:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-18 09:15:18 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-18 09:15:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 09:20:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 09:24:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 09:29:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 09:31:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 09:31:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 09:32:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 09:32:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 09:33:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 09:33:28 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 09:36:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 09:39:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 09:41:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 09:43:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 09:44:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 09:44:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 09:46:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 10:07:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 10:07:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-18 10:07:39 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.created_dt, a.kip_number, a.name, a.phone, a.status, b.domicile_address, b.email, b.bank_account_number, 
			c.amount_akhir, 
			d.amount_akhir as amount_seragam, e.ktp_number 
			from master_driver a
			left join driver_registration b on(b.id=a.driver_registration_id)
			left join ap_jaminan c on (c.id=a.ap_jaminan_id)
			left join ap_pembayaran_seragam d on(d.id=a.ap_pembayaran_seragam_id)
			left join master_ktp e on(e.id=b.ktp_id)
			where a.id=build;
ERROR - 2019-10-18 10:22:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 10:22:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 10:24:26 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 10:24:38 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 10:24:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 10:28:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 10:29:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 10:29:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 10:31:08 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-18 10:31:34 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 10:36:17 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 10:36:30 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 10:37:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 10:37:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 10:37:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 10:37:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 10:37:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 10:52:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 10:52:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 10:52:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 10:58:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 11:03:09 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-18 11:03:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 11:05:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 11:06:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 11:07:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 11:25:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 11:29:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 11:29:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 12:30:03 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-18 12:30:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 12:30:27 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 12:30:27 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 12:32:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 12:34:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 12:44:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 12:47:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-18 12:51:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-18 12:55:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 13:15:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 13:15:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 13:15:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 13:29:05 --> 404 Page Not Found: Assets/css
ERROR - 2019-10-18 13:34:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 13:34:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 13:48:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 13:49:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-18 13:49:09 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.created_dt, a.kip_number, a.name, a.phone, a.status, b.domicile_address, b.email, b.bank_account_number, 
			c.amount_akhir, 
			d.amount_akhir as amount_seragam, e.ktp_number 
			from master_driver a
			left join driver_registration b on(b.id=a.driver_registration_id)
			left join ap_jaminan c on (c.id=a.ap_jaminan_id)
			left join ap_pembayaran_seragam d on(d.id=a.ap_pembayaran_seragam_id)
			left join master_ktp e on(e.id=b.ktp_id)
			where a.id=build;
ERROR - 2019-10-18 13:54:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 13:55:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:04:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:05:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:05:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:07:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:08:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 14:08:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 14:08:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 14:08:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 14:09:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:09:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:09:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:09:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 14:09:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:09:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:10:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:10:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:11:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:11:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:13:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-18 14:13:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:16:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:18:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:19:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:23:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:27:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:33:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:33:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 14:33:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 14:33:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:33:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 14:33:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:41:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:41:25 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 588
ERROR - 2019-10-18 14:41:25 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 591
ERROR - 2019-10-18 14:41:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 7:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-18 14:41:25 --> Query error: ERROR:  syntax error at or near ";"
LINE 7:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from 
			trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-10-18 14:42:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 14:42:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:42:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:42:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:46:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:49:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:49:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 14:49:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:51:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 14:51:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:52:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:52:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:53:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:53:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:54:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:54:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:54:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 14:55:53 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 14:56:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 14:59:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:00:55 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 15:05:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:09:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:12:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:12:42 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 15:14:59 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-18 15:15:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:18:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:18:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:18:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 15:18:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 15:19:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:20:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:20:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:20:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 15:20:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 15:21:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:23:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:23:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:25:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:25:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:25:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 15:25:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:26:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:27:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:28:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:31:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:31:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:32:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:35:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:38:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 15:38:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:39:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:40:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:40:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:42:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:43:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:50:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:53:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:54:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 15:56:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 15:56:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 15:57:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:01:55 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 16:04:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 16:06:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:10:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:10:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:14:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:15:24 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 16:15:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:16:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 16:16:15 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-10-18 16:16:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-18 16:16:15 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.created_dt, a.kip_number, a.name, a.phone, a.status, b.domicile_address, b.email, b.bank_account_number, 
			c.amount_akhir, 
			d.amount_akhir as amount_seragam, e.ktp_number 
			from master_driver a
			left join driver_registration b on(b.id=a.driver_registration_id)
			left join ap_jaminan c on (c.id=a.ap_jaminan_id)
			left join ap_pembayaran_seragam d on(d.id=a.ap_pembayaran_seragam_id)
			left join master_ktp e on(e.id=b.ktp_id)
			where a.id=build;
ERROR - 2019-10-18 16:16:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:19:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:19:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:23:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:23:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 16:23:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:26:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 16:28:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:30:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 16:30:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-18 16:30:48 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.created_dt, a.kip_number, a.name, a.phone, a.status, b.domicile_address, b.email, b.bank_account_number, 
			c.amount_akhir, 
			d.amount_akhir as amount_seragam, e.ktp_number 
			from master_driver a
			left join driver_registration b on(b.id=a.driver_registration_id)
			left join ap_jaminan c on (c.id=a.ap_jaminan_id)
			left join ap_pembayaran_seragam d on(d.id=a.ap_pembayaran_seragam_id)
			left join master_ktp e on(e.id=b.ktp_id)
			where a.id=build;
ERROR - 2019-10-18 16:31:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:31:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 16:31:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:32:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 16:32:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:32:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:32:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 16:32:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:32:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:33:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:33:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 16:33:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 16:33:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:33:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 16:34:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 16:34:05 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 16:34:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:34:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:37:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:37:50 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 16:38:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:38:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:38:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:38:31 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 16:38:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 16:38:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-18 16:38:55 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.created_dt, a.kip_number, a.name, a.phone, a.status, b.domicile_address, b.email, b.bank_account_number, 
			c.amount_akhir, 
			d.amount_akhir as amount_seragam, e.ktp_number 
			from master_driver a
			left join driver_registration b on(b.id=a.driver_registration_id)
			left join ap_jaminan c on (c.id=a.ap_jaminan_id)
			left join ap_pembayaran_seragam d on(d.id=a.ap_pembayaran_seragam_id)
			left join master_ktp e on(e.id=b.ktp_id)
			where a.id=build;
ERROR - 2019-10-18 16:39:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:40:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:40:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:42:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:42:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 16:42:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:43:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:43:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 16:43:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:44:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 16:44:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:45:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:45:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:45:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:45:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:46:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:47:14 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 16:47:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 16:47:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-18 16:47:27 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.created_dt, a.kip_number, a.name, a.phone, a.status, b.domicile_address, b.email, b.bank_account_number, 
			c.amount_akhir, 
			d.amount_akhir as amount_seragam, e.ktp_number 
			from master_driver a
			left join driver_registration b on(b.id=a.driver_registration_id)
			left join ap_jaminan c on (c.id=a.ap_jaminan_id)
			left join ap_pembayaran_seragam d on(d.id=a.ap_pembayaran_seragam_id)
			left join master_ktp e on(e.id=b.ktp_id)
			where a.id=build;
ERROR - 2019-10-18 16:47:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 16:48:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-18 16:48:06 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.created_dt, a.kip_number, a.name, a.phone, a.status, b.domicile_address, b.email, b.bank_account_number, 
			c.amount_akhir, 
			d.amount_akhir as amount_seragam, e.ktp_number 
			from master_driver a
			left join driver_registration b on(b.id=a.driver_registration_id)
			left join ap_jaminan c on (c.id=a.ap_jaminan_id)
			left join ap_pembayaran_seragam d on(d.id=a.ap_pembayaran_seragam_id)
			left join master_ktp e on(e.id=b.ktp_id)
			where a.id=build;
ERROR - 2019-10-18 16:49:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:50:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:51:10 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 16:51:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:51:45 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 16:52:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 16:52:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:52:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:53:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:53:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 16:53:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:53:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 16:53:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:53:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:55:21 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 16:55:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:55:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:56:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 16:56:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:57:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-18 16:57:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 16:57:48 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 16:58:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:02:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:02:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:03:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:04:32 --> Severity: Notice --> Undefined index: hengki_firmansyah /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-10-18 17:04:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:06:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 17:06:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 17:09:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 17:11:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:11:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:12:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:13:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 17:13:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 17:15:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 17:15:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-18 17:15:22 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.created_dt, a.kip_number, a.name, a.phone, a.status, b.domicile_address, b.email, b.bank_account_number, 
			c.amount_akhir, 
			d.amount_akhir as amount_seragam, e.ktp_number 
			from master_driver a
			left join driver_registration b on(b.id=a.driver_registration_id)
			left join ap_jaminan c on (c.id=a.ap_jaminan_id)
			left join ap_pembayaran_seragam d on(d.id=a.ap_pembayaran_seragam_id)
			left join master_ktp e on(e.id=b.ktp_id)
			where a.id=build;
ERROR - 2019-10-18 17:19:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-18 17:19:28 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2019-10-18 17:19:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:21:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:22:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:24:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:26:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:27:49 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-18 17:28:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-18 17:28:45 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-10-18 17:29:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 17:29:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 17:35:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:36:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:36:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 17:36:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 17:39:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 17:39:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 17:39:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:45:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 17:45:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:45:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:47:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 17:47:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 17:47:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 17:47:24 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 17:47:24 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 17:48:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-18 17:48:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-18 17:48:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-18 17:48:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-18 17:48:39 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-10-18 18:52:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 20:23:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 20:23:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-18 20:23:48 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.created_dt, a.kip_number, a.name, a.phone, a.status, b.domicile_address, b.email, b.bank_account_number, 
			c.amount_akhir, 
			d.amount_akhir as amount_seragam, e.ktp_number 
			from master_driver a
			left join driver_registration b on(b.id=a.driver_registration_id)
			left join ap_jaminan c on (c.id=a.ap_jaminan_id)
			left join ap_pembayaran_seragam d on(d.id=a.ap_pembayaran_seragam_id)
			left join master_ktp e on(e.id=b.ktp_id)
			where a.id=build;
ERROR - 2019-10-18 22:08:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-18 23:12:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-18 23:13:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-18 23:13:14 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.created_dt, a.kip_number, a.name, a.phone, a.status, b.domicile_address, b.email, b.bank_account_number, 
			c.amount_akhir, 
			d.amount_akhir as amount_seragam, e.ktp_number 
			from master_driver a
			left join driver_registration b on(b.id=a.driver_registration_id)
			left join ap_jaminan c on (c.id=a.ap_jaminan_id)
			left join ap_pembayaran_seragam d on(d.id=a.ap_pembayaran_seragam_id)
			left join master_ktp e on(e.id=b.ktp_id)
			where a.id=build;
ERROR - 2019-10-18 23:13:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-18 23:13:15 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.created_dt, a.kip_number, a.name, a.phone, a.status, b.domicile_address, b.email, b.bank_account_number, 
			c.amount_akhir, 
			d.amount_akhir as amount_seragam, e.ktp_number 
			from master_driver a
			left join driver_registration b on(b.id=a.driver_registration_id)
			left join ap_jaminan c on (c.id=a.ap_jaminan_id)
			left join ap_pembayaran_seragam d on(d.id=a.ap_pembayaran_seragam_id)
			left join master_ktp e on(e.id=b.ktp_id)
			where a.id=build;
