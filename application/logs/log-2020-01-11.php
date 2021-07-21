<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-11 00:20:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 00:21:27 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-11 01:28:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 01:35:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 05:00:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 05:04:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 05:04:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 05:06:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 05:06:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 05:06:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 05:06:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 05:06:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 05:06:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 05:10:18 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 05:10:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 05:12:05 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 05:12:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 05:12:52 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 05:12:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 05:13:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 05:13:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 05:13:33 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-11 05:15:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 05:16:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 05:17:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 05:18:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 05:39:18 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 05:39:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 06:11:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 06:23:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 06:23:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 06:25:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 06:36:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 06:59:25 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 06:59:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 07:00:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 07:06:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 07:44:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 07:51:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 07:55:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 08:23:58 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-11 08:24:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-11 08:24:06 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-11 08:24:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 08:39:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 08:39:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 08:42:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 08:43:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 08:43:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 08:44:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 08:44:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 08:45:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 08:48:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 08:49:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 08:51:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 08:51:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 08:53:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 08:58:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 08:58:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 09:02:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-11 09:08:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 09:09:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-11 09:10:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 09:10:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 09:10:05 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 09:10:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 09:10:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 09:10:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 09:10:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 09:26:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 09:29:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 09:33:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 09:38:12 --> 404 Page Not Found: Report/build
ERROR - 2020-01-11 09:38:25 --> 404 Page Not Found: Report/build
ERROR - 2020-01-11 09:38:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 09:46:09 --> Severity: Notice --> Undefined index: amri_pb /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-11 09:46:33 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 09:46:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 09:47:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 09:47:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 09:47:14 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-11 09:55:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 10:14:15 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-11 10:18:02 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-11 10:18:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 10:26:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 10:30:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-11 10:31:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 10:32:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 10:41:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 10:49:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 10:50:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 10:53:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 10:53:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 10:54:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 11:02:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 11:02:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 11:12:05 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 11:12:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 11:21:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-11 11:24:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 11:24:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 11:28:44 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 11:28:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 11:30:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 11:49:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 12:01:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 12:01:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 12:10:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 12:12:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 12:12:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 12:12:32 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 12:12:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 12:18:49 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-11 12:19:53 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-11 12:27:09 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-11 12:33:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 12:43:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 12:43:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 12:46:18 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-11 12:47:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 12:51:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 12:51:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 12:56:12 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-11 13:07:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 13:07:39 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-11 13:12:05 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 13:12:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 13:12:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 13:13:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 13:14:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 13:57:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 13:57:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 14:02:27 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-11 14:13:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 14:13:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 14:15:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 14:31:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 14:31:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 14:32:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 14:36:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 14:37:22 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 14:37:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 14:38:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 14:39:34 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 14:39:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 14:40:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 14:41:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 14:46:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 14:47:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 14:48:51 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-11 14:50:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 14:50:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 14:50:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 14:54:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 14:54:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 14:55:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 14:55:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 14:58:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 14:59:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 14:59:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 15:07:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 15:07:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 15:11:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 15:28:07 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 15:28:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 15:37:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 15:37:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 15:37:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 15:38:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 15:41:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 16:00:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 16:01:17 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-11 16:02:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 16:02:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 16:05:50 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-11 16:12:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 16:12:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 16:23:39 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-11 16:24:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 16:24:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 16:26:19 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 16:26:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 16:34:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 16:42:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 16:43:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 16:43:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 17:00:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 17:03:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 17:03:44 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-11 17:03:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 17:04:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 17:05:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 17:05:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 17:06:10 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-11 17:07:50 --> Severity: Notice --> Undefined index: hengki_firmansyah /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-11 17:08:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 17:10:09 --> Severity: Notice --> Undefined index: wahyu_prasetya /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-11 17:14:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 17:17:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 17:17:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 17:18:01 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 17:18:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 17:21:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 17:23:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 17:23:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 17:24:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 17:25:30 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-11 17:25:42 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-11 17:25:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-11 17:25:42 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-11 17:42:05 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 17:42:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 17:44:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 17:52:09 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 17:52:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 17:54:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 17:54:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 18:00:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 18:04:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 18:04:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 18:12:09 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 18:12:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 18:27:59 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 18:27:59 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 18:32:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 18:35:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 18:35:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 18:36:42 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 18:36:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 18:38:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 18:38:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 18:38:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 18:38:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 18:38:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 18:39:49 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 18:39:49 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 18:48:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 18:48:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 18:48:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 18:49:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 18:49:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 18:52:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 18:52:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:09:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:09:40 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 19:09:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:13:03 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 19:13:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:13:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:15:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:16:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:18:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:20:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:23:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:32:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:33:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:34:00 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-11 19:34:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 19:34:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:37:12 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 19:37:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:41:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 19:41:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:42:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:43:00 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 19:43:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:55:47 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-11 19:57:14 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 19:57:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:57:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:58:14 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 19:58:14 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 19:58:16 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-11 19:58:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:58:23 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-11 19:58:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 19:58:59 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-11 19:59:06 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-11 19:59:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 19:59:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 19:59:31 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-11 19:59:46 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 19:59:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:01:17 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-11 20:02:52 --> Severity: Notice --> Undefined index: hengki_firmansyah /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-11 20:03:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:04:38 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 20:04:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:05:53 --> Severity: Notice --> Undefined index: wahyu_prasetya /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-11 20:06:37 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 20:06:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:07:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:08:27 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 20:08:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:10:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 20:10:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 20:15:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:17:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:18:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:18:42 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 20:18:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:19:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 20:19:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:20:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 20:20:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:21:42 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 20:21:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:22:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:23:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 20:23:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:23:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 20:24:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:29:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:32:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:32:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:33:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:44:24 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 20:44:24 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 20:48:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:56:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:57:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-11 20:57:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:59:42 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-11 20:59:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 20:59:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 21:04:27 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-11 21:09:08 --> 404 Page Not Found: Closing/build
ERROR - 2020-01-11 21:09:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 21:12:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 21:12:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 21:29:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 21:29:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-11 21:29:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-11 21:57:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 22:17:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-11 23:08:32 --> 404 Page Not Found: Driver/build
