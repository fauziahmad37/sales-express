<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-16 00:53:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 00:54:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 01:20:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 01:20:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 03:21:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 03:21:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 03:22:43 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-16 03:23:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-16 03:23:13 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-03-16 03:23:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-16 03:23:23 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-03-16 03:48:12 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 03:48:12 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 03:48:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 03:51:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 03:51:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 05:04:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 05:04:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 05:04:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 05:06:50 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 05:06:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 05:07:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 05:07:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 05:07:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 05:07:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 05:08:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 05:08:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 05:09:25 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-03-16 05:09:50 --> Severity: Notice --> Undefined index: darul /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-03-16 05:09:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 05:10:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 05:10:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-16 05:10:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 05:10:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 05:12:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 05:13:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 05:17:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 05:19:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 05:19:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 05:20:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 05:20:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 05:21:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 05:21:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 05:21:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 05:21:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 05:28:37 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 05:28:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 05:29:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 05:42:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 06:06:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 06:06:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 06:39:46 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 06:39:46 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 06:41:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 06:41:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 06:48:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 07:10:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 07:21:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 07:21:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 07:22:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 07:28:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 07:28:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 07:30:00 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 07:30:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 07:36:10 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-16 07:58:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 07:58:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 07:58:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 08:00:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 08:00:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 08:16:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 08:16:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 08:27:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 08:29:42 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-16 08:30:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 08:30:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 08:35:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 08:35:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 08:37:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 08:38:28 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-03-16 08:38:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-16 08:39:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 08:43:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 08:51:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 08:56:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 08:57:29 --> 404 Page Not Found: Report/build
ERROR - 2020-03-16 08:57:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 09:13:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 09:14:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 09:15:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-16 09:15:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 09:15:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 09:16:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-16 09:16:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 09:22:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 09:22:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 09:27:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 09:29:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 09:34:41 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 09:34:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 09:44:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 09:44:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 09:54:14 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 09:54:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 09:58:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 09:58:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 09:59:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 09:59:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 10:01:09 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 10:01:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 10:07:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 10:07:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 10:26:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 10:43:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 10:45:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 10:56:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 11:01:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 11:49:42 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 11:49:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 11:52:13 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 11:52:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 11:54:43 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 11:54:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 11:58:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 12:04:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 12:22:27 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 12:22:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 12:50:00 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 12:50:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 13:15:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 13:15:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 13:21:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 13:33:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 13:33:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 13:34:00 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 13:34:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 13:34:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 13:35:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 13:38:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 14:12:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 14:19:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 14:19:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 14:21:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-16 14:21:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 14:33:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 14:33:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 14:38:22 --> 404 Page Not Found: Seragam/build
ERROR - 2020-03-16 14:38:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 14:38:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-16 14:38:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 14:49:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 14:50:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 14:53:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 14:53:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 15:04:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 15:06:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 15:07:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 15:09:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 15:09:34 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 15:09:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 15:13:33 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-03-16 15:14:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 15:15:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 15:19:43 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 15:19:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 15:20:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 15:23:32 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 15:23:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 15:30:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 15:32:21 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 15:32:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 15:36:25 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 15:36:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 15:36:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 15:36:49 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-03-16 15:38:16 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-03-16 15:39:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 15:40:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-16 15:40:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 15:41:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 16:00:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 16:00:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 16:02:41 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 16:02:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 16:03:13 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 16:03:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 16:03:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 16:06:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-16 16:07:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 16:08:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 16:14:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 16:15:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 16:20:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 16:20:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 16:22:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 16:22:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 16:36:30 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 16:36:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 16:43:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 16:54:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 16:54:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 16:56:06 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-16 16:56:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-16 16:56:21 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-03-16 16:57:46 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 16:57:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 17:12:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 17:17:32 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 17:17:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 17:24:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 17:26:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 17:38:33 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 17:38:33 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 17:43:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 17:47:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 17:47:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 17:47:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 17:56:15 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 17:56:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 18:11:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 18:11:53 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 18:11:53 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 18:15:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 18:35:15 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 18:35:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 18:40:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 18:46:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 18:46:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 18:48:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 18:56:46 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-03-16 19:03:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 19:06:22 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 19:06:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 19:09:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 19:09:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 19:11:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 19:11:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 19:21:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-16 19:21:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 19:22:48 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 19:22:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 19:28:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 19:28:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 19:29:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 19:33:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 19:38:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 19:40:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 19:57:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:00:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 20:00:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 20:16:43 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 20:16:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:19:33 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 20:19:33 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 20:19:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:19:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:21:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:23:02 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 20:23:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:24:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:26:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:32:00 --> 404 Page Not Found: Seragam/build
ERROR - 2020-03-16 20:37:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 20:37:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:40:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:41:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:42:15 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 20:42:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:43:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:43:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:44:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:44:55 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 20:44:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:45:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:46:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-16 20:46:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:47:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:54:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 20:54:38 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-16 20:54:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 21:06:47 --> 404 Page Not Found: Seragam/build
ERROR - 2020-03-16 21:11:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 21:15:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 21:28:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 21:36:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 21:39:33 --> 404 Page Not Found: Closing/build
ERROR - 2020-03-16 21:40:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-16 21:40:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-16 21:51:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 22:15:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 22:28:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 22:46:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 22:49:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 23:33:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-16 23:47:43 --> 404 Page Not Found: Spj/build
