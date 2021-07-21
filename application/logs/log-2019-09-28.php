<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-28 00:54:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 01:49:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-28 01:50:20 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-28 01:50:20 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-28 01:50:20 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-28 01:50:20 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-28 01:50:20 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-28 01:50:20 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-28 01:50:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-28 01:50:20 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-28 02:00:39 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-28 02:04:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 02:42:49 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-28 02:44:05 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 02:44:05 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 02:47:44 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-28 02:58:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 04:39:33 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-28 04:39:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 05:38:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 07:21:41 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-28 07:21:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 07:22:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 07:22:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 07:59:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 07:59:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 08:04:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 08:04:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 08:04:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 08:04:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 08:05:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 08:05:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 08:05:47 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 524
ERROR - 2019-09-28 08:05:47 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 527
ERROR - 2019-09-28 08:05:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 7:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-28 08:05:47 --> Query error: ERROR:  syntax error at or near ";"
LINE 7:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from 
			trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-09-28 08:05:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 08:06:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 08:06:46 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 08:06:46 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 08:20:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 08:25:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 08:29:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 08:29:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-28 08:31:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 08:32:08 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-28 08:32:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 08:35:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 08:35:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 08:43:03 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-28 08:43:03 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-28 08:43:03 --> 404 Page Not Found: Report/build
ERROR - 2019-09-28 08:47:10 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 08:47:10 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 08:47:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 08:51:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 08:51:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 08:53:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 08:58:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 09:00:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 09:02:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 09:03:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 09:05:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 09:09:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 09:12:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 09:13:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 09:16:38 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-28 09:17:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 09:19:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 09:35:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 09:35:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 09:35:10 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-28 09:35:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 09:35:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 09:35:56 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 09:36:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 09:37:06 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 09:37:06 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 10:00:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 10:00:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 10:11:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 10:11:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 10:15:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 10:20:13 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-28 10:21:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 10:37:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-28 10:37:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 10:38:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 10:38:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 10:38:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 10:40:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-28 10:40:41 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-28 10:40:41 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-28 10:40:41 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-28 10:40:41 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-28 10:40:41 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-28 10:40:41 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-28 10:40:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-28 10:40:42 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-28 10:40:42 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-28 10:43:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-28 10:53:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 10:53:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 10:59:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-28 11:00:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 11:01:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 11:01:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 11:01:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 11:02:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 11:02:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 11:11:01 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-28 11:54:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 11:58:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 11:58:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 11:58:27 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 11:58:27 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 12:23:27 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-28 12:23:27 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-28 12:23:27 --> 404 Page Not Found: Report/build
ERROR - 2019-09-28 12:23:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-28 12:23:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-28 12:23:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-28 12:26:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-28 12:27:05 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-28 12:27:05 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-28 12:27:05 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-28 12:27:05 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-28 12:27:05 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-28 12:27:05 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-28 12:27:05 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-28 12:27:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-28 12:27:05 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-28 12:29:24 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-28 12:30:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 12:33:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 12:33:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 12:34:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 12:34:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 13:14:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 13:28:47 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-28 13:28:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 13:28:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 13:28:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 13:32:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 13:35:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 13:35:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 13:35:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 13:37:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 13:39:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 13:39:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 13:40:51 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-28 13:41:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 13:41:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 13:45:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 13:49:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 13:49:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 13:56:59 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 13:56:59 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 13:57:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 13:57:35 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-28 13:58:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:00:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 14:00:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 14:00:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:00:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:01:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:01:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:02:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:02:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 14:02:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:03:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:03:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 14:03:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:04:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:07:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:08:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:08:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:11:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:11:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:11:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:13:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:14:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:14:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:14:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 14:14:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:15:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:16:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:16:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:18:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:21:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:22:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:23:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:25:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:26:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 14:26:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:32:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:32:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 14:32:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 14:34:06 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 14:34:06 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 14:34:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:35:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 14:35:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:36:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 14:36:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 14:41:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:43:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:44:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:50:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 14:50:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 14:50:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:04:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:05:32 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-28 15:06:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 15:06:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:07:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:10:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:16:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:17:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:17:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 15:17:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 15:17:43 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-28 15:18:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:19:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:20:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 15:20:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:24:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:24:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:26:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:29:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 15:29:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 15:31:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 15:31:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 15:32:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:33:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 15:33:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 15:34:11 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 15:34:11 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 15:36:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 15:36:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:40:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:42:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 15:42:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 15:43:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:54:10 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 15:54:10 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 15:54:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-28 15:56:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 15:56:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 15:56:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 15:59:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:00:04 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-28 16:01:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:01:28 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-28 16:01:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 16:01:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:02:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 16:02:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:02:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:02:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:03:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 16:03:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 16:03:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-28 16:05:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 16:05:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 16:19:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:19:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 16:19:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:20:17 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-28 16:20:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:21:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 16:21:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:21:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 16:21:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 16:21:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:22:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 16:22:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:22:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:22:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:22:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:23:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:24:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:24:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:26:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:26:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:29:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:29:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 16:29:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:32:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:32:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-28 16:33:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:33:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:37:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-28 16:37:07 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-28 16:37:10 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-28 16:37:10 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-28 16:37:10 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-28 16:37:10 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-28 16:37:10 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-28 16:37:10 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-28 16:37:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-28 16:37:10 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-28 16:38:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:40:35 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-28 16:41:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:41:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:41:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:44:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:44:55 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-28 16:45:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:45:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 16:45:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:46:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;407,500&quot;
LINE 1: ...28 16:46:16', 'Paid', 'Top Up by Pool', '393200', '407,500',...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-28 16:46:16 --> Query error: ERROR:  invalid input syntax for integer: "407,500"
LINE 1: ...28 16:46:16', 'Paid', 'Top Up by Pool', '393200', '407,500',...
                                                             ^ - Invalid query: INSERT INTO "ap_jaminan" ("driver_id", "pool_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "doc_number") VALUES ('52', '1', '2019-09-28 16:46:16', 'Paid', 'Top Up by Pool', '393200', '407,500', 393607, 'TOPUP/PB/201909/00281')
ERROR - 2019-09-28 16:46:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-28 16:46:16 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-28 16:46:29 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-28 16:47:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:47:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:47:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 16:47:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:53:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 16:53:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 16:54:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:56:14 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-28 16:56:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:56:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:57:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:58:22 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-28 16:58:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 16:58:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-28 16:58:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 17:00:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 17:01:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 17:02:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 17:02:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 17:02:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 17:03:05 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 17:03:05 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 17:03:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 17:04:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 17:04:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 17:37:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 17:37:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 17:37:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 17:37:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 17:41:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 17:52:48 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-28 17:52:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 17:53:10 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 17:53:10 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 18:09:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 18:09:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 18:09:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 18:09:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 18:09:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 18:30:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 18:30:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 18:43:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-28 18:44:01 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-28 18:44:01 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-28 18:44:01 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-28 18:44:01 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-28 18:44:01 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-28 18:44:01 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-28 18:44:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-28 18:44:01 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-28 20:41:43 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-28 20:45:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 20:57:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 20:59:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 21:02:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 21:03:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 22:20:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-28 22:20:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-28 23:08:02 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-28 23:08:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-28 23:21:53 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:21:53 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:21:53 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:21:53 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:21:53 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:21:53 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:21:53 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:21:53 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:21:53 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:21:53 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:21:53 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:21:53 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:21:53 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/views/spj/spj_index.php 46
ERROR - 2019-09-28 23:21:53 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/views/spj/spj_index.php 57
ERROR - 2019-09-28 23:27:13 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:27:13 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:27:13 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:27:13 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:27:13 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:27:13 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:27:13 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:27:13 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:27:13 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:27:13 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:27:13 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:27:13 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:27:13 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/views/spj/spj_index.php 46
ERROR - 2019-09-28 23:27:13 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/views/spj/spj_index.php 57
ERROR - 2019-09-28 23:28:16 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:28:16 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:28:16 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:28:16 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:28:16 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:28:16 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:28:16 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:28:16 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:28:16 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:28:16 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:28:16 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:28:16 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:29:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:29:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:29:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:29:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:29:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:29:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:29:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:29:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:29:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:29:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:29:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:29:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;,&quot;
LINE 10: ...reated='2019-09-30 23:59:59' and a.status='Active','Drive','...
                                                              ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-28 23:40:10 --> Query error: ERROR:  syntax error at or near ","
LINE 10: ...reated='2019-09-30 23:59:59' and a.status='Active','Drive','...
                                                              ^ - Invalid query: select a.id,doc_number, a.status, a.created, a.tipe_rental, a.jam_mulai_denda,
			b.no_pintu, c.name as pool_name,
			d.kip_number,d.name as driver_name, 
			e.username
			from trx_spj a
			left join master_car b on (a.car_id = b.id)
			left join master_pool c on (a.pool_id = c.id)
			left join master_driver d on (a.driver_id = d.id)
			left join cac_user e on (a.creator_id =e.id)
			where a.pool_id=1 and a.created='2019-09-01 00:00:00' and a.created='2019-09-30 23:59:59' and a.status='Active','Drive','Payment','Paid'
			and b.unit_bisnis in ('EXPRESS','EAGLE')
			order by a.created desc;
ERROR - 2019-09-28 23:40:46 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:46 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:46 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:46 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:46 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:46 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:46 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:46 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:46 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:46 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:46 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:46 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:40:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:38 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:38 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:38 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:38 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:38 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:38 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:38 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:38 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:38 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:38 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:38 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:41:38 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:45:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:45:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:45:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:45:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:45:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:45:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:45:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:45:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:45:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:45:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:45:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:45:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:46:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:09 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:09 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:47:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/spj/spj_index.php 31
ERROR - 2019-09-28 23:54:56 --> Severity: Warning --> Illegal string offset 'Active','Drive','Payment','Paid' /var/www/html/rental/application/views/spj/spj_index.php 68
ERROR - 2019-09-28 23:54:56 --> Severity: Warning --> Illegal string offset 'Active','Drive','Payment','Paid' /var/www/html/rental/application/views/spj/spj_index.php 68
ERROR - 2019-09-28 23:55:19 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-28 23:59:15 --> Severity: Warning --> Illegal string offset 'Active' /var/www/html/rental/application/views/spj/spj_index.php 69
ERROR - 2019-09-28 23:59:16 --> Severity: Warning --> Illegal string offset 'Active' /var/www/html/rental/application/views/spj/spj_index.php 69
ERROR - 2019-09-28 23:59:16 --> 404 Page Not Found: Assets/css
