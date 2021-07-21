<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-25 00:02:59 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 00:02:59 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 00:38:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 00:56:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 01:50:53 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 01:50:53 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 02:45:18 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-25 03:28:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 03:28:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 05:03:48 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 05:03:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 05:04:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 05:04:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 05:09:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 05:09:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 05:11:06 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 05:11:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 05:11:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 05:12:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 05:14:50 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 05:14:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 05:16:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 05:16:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 05:18:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 05:18:55 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 05:18:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 05:23:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 05:23:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 05:24:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 05:28:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 05:31:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 05:32:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 05:32:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 05:34:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 05:34:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 05:48:09 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-25 05:49:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-25 05:49:03 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-25 05:49:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 05:49:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 06:20:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 06:20:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 06:24:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 06:24:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 06:24:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 06:28:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 06:38:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 06:38:45 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-25 06:47:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 07:22:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 07:22:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 07:24:05 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-25 07:24:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 07:27:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 07:27:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 07:27:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 07:27:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 07:29:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 07:32:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 07:34:46 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 07:34:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 07:35:50 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 07:35:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 07:36:53 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 07:36:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 07:41:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 07:43:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 07:43:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 07:43:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 07:43:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 07:44:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 07:53:38 --> Severity: Notice --> Undefined index: yoel /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-25 07:54:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 07:54:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 08:03:27 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 08:03:27 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 08:03:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 08:03:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 08:17:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 08:24:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 08:24:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 08:25:00 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 08:25:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 08:25:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 08:26:35 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-25 08:29:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 08:39:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 08:41:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 08:43:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 08:44:55 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 08:44:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 08:46:13 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 08:46:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 08:47:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 08:50:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 08:52:19 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-25 08:53:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 08:53:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 08:53:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 09:05:29 --> Severity: Notice --> Undefined index: faizal /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-25 09:23:23 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 09:23:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 09:24:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 09:26:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 09:28:41 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 09:28:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 09:28:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 09:30:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 09:35:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-25 09:36:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 09:42:33 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 09:42:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 09:46:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 09:53:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 10:12:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 11:05:00 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-25 11:05:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-25 11:05:15 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-25 11:07:52 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-25 11:13:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 11:15:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 11:16:00 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-25 11:16:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 11:16:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 11:16:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 11:17:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-25 11:17:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 11:23:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 11:24:11 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-25 11:24:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 11:25:43 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-25 11:28:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 11:28:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 11:38:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 11:38:37 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 11:38:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 11:39:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 11:53:30 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 11:53:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 11:54:19 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 11:54:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 11:56:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 11:56:11 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-25 11:56:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 12:05:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 12:07:11 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-25 12:08:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-25 12:12:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 12:31:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 12:35:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 12:35:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-25 12:35:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 12:55:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 13:01:02 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 13:01:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 13:01:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 13:06:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 13:06:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 13:07:42 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 13:08:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 13:09:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 13:09:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 13:11:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 13:14:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 13:14:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 13:16:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 13:43:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 13:43:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 13:43:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 13:54:48 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-25 14:00:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 14:08:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 14:09:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-25 14:09:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 14:14:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 14:14:52 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 14:14:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 14:16:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 14:18:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 14:28:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 14:42:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 14:42:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-25 14:42:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 15:06:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 15:11:40 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 15:11:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 15:12:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 15:20:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 15:23:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 15:28:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 15:28:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-25 15:28:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 15:33:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 15:45:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 15:51:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 16:03:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 16:05:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-25 16:05:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 16:07:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-25 16:07:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 16:09:37 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 16:09:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 16:10:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 16:11:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 16:11:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 16:11:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 16:16:02 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-25 16:25:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-25 16:25:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 16:25:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 16:26:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 16:29:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-25 16:29:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 16:38:29 --> Severity: Notice --> Undefined index: deddy /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-25 16:55:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 16:59:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 17:01:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 17:01:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 17:04:12 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 17:04:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 17:11:14 --> Severity: Notice --> Undefined index: hengki_firmansyah /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-25 17:11:15 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-25 17:11:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 17:12:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 17:19:31 --> Severity: Notice --> Undefined index: ismail /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-25 17:40:02 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 17:40:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 17:40:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 17:45:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 18:11:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 18:17:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 18:17:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 18:18:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 18:19:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 18:19:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 18:25:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 18:30:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 18:30:59 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 18:30:59 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 18:36:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 18:38:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 18:45:06 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 18:45:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 18:47:55 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 18:47:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 18:50:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 18:54:59 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 18:54:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 18:55:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 18:55:30 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 18:55:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 18:55:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 18:59:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 19:00:49 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-25 19:00:59 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-25 19:01:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 19:03:18 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 19:03:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 19:06:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 19:09:27 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 19:09:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 19:24:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 19:52:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 19:52:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 19:53:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 19:54:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 19:54:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 19:54:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 19:54:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 19:55:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 19:55:08 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 19:55:08 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 19:56:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 19:58:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:00:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:02:43 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 20:02:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:03:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 20:03:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:04:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:04:37 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-25 20:04:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:04:43 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 20:04:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:05:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:06:09 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 20:06:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:06:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:07:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:08:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:08:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:08:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:09:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:12:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 20:12:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 20:12:33 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 20:12:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:13:51 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 20:13:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:15:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:16:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:24:44 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-25 20:24:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:25:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:26:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:28:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:33:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:34:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:35:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:37:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:38:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-25 20:38:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:41:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:49:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:50:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:55:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:58:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 20:59:02 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-25 20:59:15 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-25 20:59:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-25 20:59:15 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-25 21:02:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 21:03:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 21:05:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 21:05:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 21:07:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 21:08:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 21:08:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 21:10:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 21:14:37 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-25 21:14:44 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-25 21:14:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-25 21:14:46 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-25 21:15:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-25 21:15:14 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-25 21:15:27 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-25 21:15:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-25 21:15:27 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-25 21:27:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 21:27:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 22:01:13 --> 404 Page Not Found: Closing/build
ERROR - 2020-01-25 22:21:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 22:30:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 22:30:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 22:36:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 23:00:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-25 23:00:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-25 23:07:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 23:17:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 23:25:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 23:25:51 --> 404 Page Not Found: Report/build
ERROR - 2020-01-25 23:26:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-25 23:29:53 --> Severity: Notice --> Undefined index: ajat_sudrajat /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-25 23:55:06 --> 404 Page Not Found: Spj/build
