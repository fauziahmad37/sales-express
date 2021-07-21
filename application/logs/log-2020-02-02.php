<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-02 00:02:09 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 00:57:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 01:09:24 --> 404 Page Not Found: Report/build
ERROR - 2020-02-02 01:13:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 04:41:51 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-02 05:05:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 05:05:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 05:07:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 05:07:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 05:09:48 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 05:09:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 05:14:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 05:16:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 05:18:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 05:19:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 05:24:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 05:25:25 --> Severity: Notice --> Undefined index: ajat_sudrajat /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-02 05:31:10 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 05:31:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 06:14:06 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 06:14:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 06:49:57 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 06:49:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 06:51:32 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-02 06:51:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 07:15:03 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 07:15:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 07:19:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 07:50:42 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 07:50:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 08:03:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 08:10:13 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 08:10:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-02 08:10:31 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-02 08:12:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-02 08:12:03 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-02 08:12:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 08:15:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-02 08:15:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-02 08:16:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 08:16:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 08:17:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 08:22:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 08:24:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 08:29:00 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 08:29:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 08:30:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 08:33:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 08:38:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-02 08:38:18 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-02 08:45:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-02 08:45:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-02 08:52:21 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 08:57:03 --> 404 Page Not Found: Report/build
ERROR - 2020-02-02 08:57:10 --> 404 Page Not Found: Report/build
ERROR - 2020-02-02 08:57:18 --> 404 Page Not Found: Report/build
ERROR - 2020-02-02 08:57:25 --> 404 Page Not Found: Report/build
ERROR - 2020-02-02 09:05:50 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 09:09:04 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 09:11:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-02 09:11:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-02 09:14:56 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 09:15:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-02 09:15:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-02 09:16:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-02 09:16:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-02 09:22:07 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-02 09:22:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 09:30:34 --> 404 Page Not Found: Report/build
ERROR - 2020-02-02 09:33:56 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-02 09:36:46 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 09:36:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 09:38:12 --> 404 Page Not Found: Report/build
ERROR - 2020-02-02 09:38:40 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 09:38:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 09:41:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 09:42:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 09:43:18 --> 404 Page Not Found: Report/build
ERROR - 2020-02-02 09:44:06 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 09:44:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 09:46:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 09:46:34 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 09:46:36 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 09:46:47 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-02 09:49:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-02 09:49:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-02 09:57:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-02 09:57:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-02 09:57:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 09:58:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-02 09:58:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-02 09:59:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 09:59:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 10:00:31 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 10:00:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-02 10:00:38 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-02 10:00:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 10:13:36 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 10:13:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 10:13:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 10:25:05 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-02 10:25:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-02 10:25:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-02 10:26:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 10:26:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 10:26:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 10:27:21 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-02 10:27:30 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-02 10:31:10 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 10:35:34 --> 404 Page Not Found: Report/build
ERROR - 2020-02-02 10:38:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 10:38:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 10:38:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 10:40:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 10:54:29 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-02 10:54:56 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-02 10:58:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-02 10:58:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-02 10:59:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 11:00:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 11:00:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 11:05:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 11:06:32 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 11:06:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 11:12:16 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-02 11:14:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 11:14:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 11:22:23 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-02 11:29:38 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-02 11:30:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 11:32:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 11:42:10 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 11:42:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 11:45:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 11:52:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 11:56:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 11:58:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 12:01:45 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 12:03:03 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-02 12:03:43 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 12:03:46 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 12:03:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 12:04:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 12:04:16 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-02 12:06:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 12:13:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 12:13:48 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 12:13:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 12:18:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 12:26:40 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 12:26:50 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 12:26:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 12:29:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 12:36:19 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 12:39:23 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 12:39:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 12:49:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 12:57:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 12:59:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 13:29:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 13:37:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 13:47:02 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 13:47:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 13:48:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 13:51:37 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 13:51:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 13:52:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 13:54:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 14:05:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 14:05:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 14:15:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 14:28:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 14:28:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 14:28:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 14:28:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 14:28:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 14:31:13 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 14:31:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 14:38:56 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 14:53:10 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 14:53:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 14:54:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 14:54:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 14:55:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 14:55:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 15:00:34 --> Severity: Notice --> Undefined index: deddy /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-02 15:21:04 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-02 15:23:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 15:23:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 15:25:01 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 15:29:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 15:34:25 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 15:34:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 15:36:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 15:38:17 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-02 16:05:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 16:05:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:05:50 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-02 16:07:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 16:07:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:08:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:15:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:15:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:16:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 16:16:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:29:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 16:29:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:33:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:34:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:35:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 16:35:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:37:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-02 16:37:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-02 16:44:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:48:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 16:48:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:49:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:50:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 16:50:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:51:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:52:09 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-02 16:52:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:54:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 16:54:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:57:23 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-02 16:58:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 16:58:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 16:58:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 17:06:53 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 17:09:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 17:25:13 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 17:25:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 17:25:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 17:29:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 17:33:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 17:34:44 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-02 17:39:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 17:41:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 17:41:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 17:42:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 17:42:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 17:43:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-02 17:43:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-02 17:55:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 17:55:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 17:55:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 17:58:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 17:59:07 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 17:59:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 17:59:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 17:59:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:00:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:01:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:03:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:05:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:05:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 18:05:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:06:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:06:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:09:40 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 18:09:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:12:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:17:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:25:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-02 18:25:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-02 18:28:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:30:09 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-02 18:30:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:32:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-02 18:32:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-02 18:32:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:46:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:47:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 18:47:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:48:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:50:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:50:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:54:21 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 18:54:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:55:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 18:55:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:58:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 18:59:29 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-02 19:06:26 --> 404 Page Not Found: Report/build
ERROR - 2020-02-02 19:13:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 19:13:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 19:13:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 19:16:07 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 19:16:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 19:16:17 --> 404 Page Not Found: Report/build
ERROR - 2020-02-02 19:18:40 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 19:19:39 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 19:19:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 19:19:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 19:20:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 19:20:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 19:21:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 19:23:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 19:24:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 19:24:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 19:26:18 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-02 19:26:41 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 19:34:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-02-02 19:34:48 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 19:34:58 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 19:35:01 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-02 19:35:10 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-02 19:38:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 19:42:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 19:42:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 19:42:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 19:44:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 19:46:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 19:51:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 19:51:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 19:52:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 19:52:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 20:20:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 20:21:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 20:21:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 20:24:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 20:27:18 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 20:27:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 20:28:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 20:30:55 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-02 20:30:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 20:34:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 20:42:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 20:43:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 20:46:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 20:54:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-02 20:54:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 20:59:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 20:59:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 21:05:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 21:07:18 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-02 21:08:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-02 21:09:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-02 21:09:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-02 21:18:24 --> 404 Page Not Found: Report/build
ERROR - 2020-02-02 21:18:27 --> 404 Page Not Found: Report/build
ERROR - 2020-02-02 21:18:30 --> 404 Page Not Found: Report/setoran
ERROR - 2020-02-02 21:18:33 --> 404 Page Not Found: Report/build
ERROR - 2020-02-02 21:36:21 --> 404 Page Not Found: Closing/build
ERROR - 2020-02-02 21:37:17 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-02 21:37:17 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
