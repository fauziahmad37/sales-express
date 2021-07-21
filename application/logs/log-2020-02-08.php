<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-08 05:01:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 05:01:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 05:03:38 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 05:03:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 05:05:28 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 05:05:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 05:06:27 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-08 05:07:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 05:07:44 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 05:07:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 05:08:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 05:10:25 --> Severity: Notice --> Undefined index: ajat_sudrajat /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-08 05:42:22 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 05:42:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 05:59:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 06:32:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 06:55:48 --> Severity: Notice --> Undefined index: choiruman /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-08 07:04:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 07:04:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 07:08:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 07:26:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 07:26:49 --> Severity: Notice --> Undefined index: darul /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-08 07:27:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 07:28:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 07:28:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 07:28:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 07:34:08 --> Severity: Notice --> Undefined index: choiruman /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-08 07:35:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 07:35:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 07:36:53 --> Severity: Notice --> Undefined index: darul /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-08 07:37:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 07:41:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 07:42:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 07:46:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 08:23:29 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-08 08:23:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-08 08:23:32 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-08 08:48:08 --> Severity: Notice --> Undefined index: tukiyo /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-08 09:04:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 09:14:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-08 09:14:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-08 09:16:55 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 09:16:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 09:21:20 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-08 09:22:19 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 09:22:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 09:22:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 09:24:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 09:24:53 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 09:24:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 09:26:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 09:30:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 09:35:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 09:40:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 09:40:57 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-08 09:44:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 09:46:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 09:51:05 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 09:51:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 09:51:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-08 09:51:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-08 09:52:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 09:52:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 09:53:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 10:08:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 10:11:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 10:18:16 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-08 10:18:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 10:19:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 10:21:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 10:22:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-08 10:22:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-08 10:23:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 10:23:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 10:24:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 10:25:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 10:27:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 10:28:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 10:32:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 10:37:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 10:44:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 10:50:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 10:50:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 10:53:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 10:53:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 10:56:55 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 10:56:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 11:02:44 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 11:02:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 11:04:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 11:09:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 11:13:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 11:18:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 11:18:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 11:22:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 11:23:33 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-08 11:30:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 11:35:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 11:36:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 11:36:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 11:52:53 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 11:52:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 12:03:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 12:04:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 12:05:23 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 12:05:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 12:07:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 12:13:25 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 12:13:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 12:16:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-08 12:16:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-08 12:17:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 12:25:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 12:36:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 12:36:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 12:41:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 13:00:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 13:01:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 13:01:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 13:02:14 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-08 13:02:14 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-08 13:14:04 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-08 13:14:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 13:14:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 13:17:34 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-08 13:34:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 13:36:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 13:37:06 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 13:37:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 13:39:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 13:47:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 13:47:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 13:47:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 13:57:23 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 13:57:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 13:57:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 14:02:44 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 14:02:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 14:04:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 14:04:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 14:04:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 14:05:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 14:05:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 14:05:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 14:10:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 14:15:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 14:20:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 14:20:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 14:49:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-08 14:49:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-08 14:59:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 14:59:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 14:59:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 15:05:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 15:15:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 15:16:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 15:16:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 15:18:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 15:18:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 15:23:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 15:29:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 15:44:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 15:57:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 15:57:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 15:58:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-08 15:58:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-08 16:34:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 16:35:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 16:35:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 16:35:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 16:45:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 16:51:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 16:51:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 16:57:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 16:57:48 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 16:57:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 16:59:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 17:01:22 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 17:01:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 17:09:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 17:09:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 17:12:53 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 17:12:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 17:15:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 17:27:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 17:31:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 17:31:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 17:32:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 17:37:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 18:05:22 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 18:05:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 18:11:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 18:11:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 18:19:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 18:19:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 18:19:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 18:24:57 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-08 18:25:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 18:25:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 18:29:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 18:38:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-08 18:38:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-08 18:39:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 18:39:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 18:39:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 18:39:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 18:41:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 18:41:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 18:42:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 18:44:22 --> Severity: Notice --> Undefined index: tukiyo /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-08 18:52:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 18:52:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 19:00:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 19:01:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 19:07:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 19:07:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 19:07:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 19:07:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 19:27:54 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-08 19:34:22 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 19:34:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 19:43:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 19:50:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 19:51:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 19:53:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 19:53:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 19:53:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 19:58:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 19:59:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 19:59:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:00:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:00:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:02:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:02:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 20:02:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:11:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 20:11:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:11:36 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 20:11:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:12:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:12:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 20:12:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:15:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:26:30 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 20:26:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:27:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:30:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:32:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-08 20:32:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-08 20:34:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:36:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:37:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 20:37:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:38:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:40:48 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-08 20:40:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:40:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:41:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:43:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:44:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:44:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:45:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:46:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:47:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:47:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:49:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:52:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:53:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 20:53:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:54:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:57:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:58:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-08 20:58:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 20:59:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 21:03:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 21:06:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 21:11:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 21:12:07 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-08 21:12:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 21:13:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 21:16:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 21:19:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-08 21:19:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-08 21:32:35 --> 404 Page Not Found: Closing/build
ERROR - 2020-02-08 21:45:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 21:45:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 21:54:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-08 21:54:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-08 21:55:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-08 22:22:07 --> 404 Page Not Found: Spj/build
