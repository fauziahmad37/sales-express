<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-29 05:08:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 05:09:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 06:51:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-29 06:51:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 06:52:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-29 06:52:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-29 06:52:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 07:48:02 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-29 07:48:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 07:51:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 09:40:21 --> 404 Page Not Found: Report/build
ERROR - 2020-03-29 09:57:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 11:00:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-29 11:00:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-29 11:01:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-29 11:01:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-29 11:03:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-29 11:03:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-29 11:13:26 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-29 11:13:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-29 11:13:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-03-29 12:22:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-29 12:22:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-29 12:24:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-29 12:24:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-29 12:48:24 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-03-29 12:51:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 13:28:53 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-29 13:28:53 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-29 13:44:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 13:45:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-29 13:45:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 14:04:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 14:10:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 14:18:17 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-29 14:18:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-29 14:18:28 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-03-29 15:21:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 15:22:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-29 15:22:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 15:24:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-29 15:24:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 15:25:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-29 15:25:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-29 15:26:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 16:10:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-29 16:10:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-29 16:12:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 16:17:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 17:00:55 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-29 17:00:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 17:02:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-29 17:02:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-29 17:19:10 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-29 17:19:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-29 17:19:16 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-03-29 17:43:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 18:20:22 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-29 18:20:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 18:22:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-29 18:22:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 18:22:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 18:22:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-29 18:22:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-29 18:45:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 19:14:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 19:23:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 19:24:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 19:28:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 19:29:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-29 19:29:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 19:29:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 19:30:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 19:31:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 19:31:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 19:33:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 19:40:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 19:40:49 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-03-29 19:41:40 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-29 19:41:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 19:49:15 --> 404 Page Not Found: Seragam/build
ERROR - 2020-03-29 20:04:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 20:32:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 20:33:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 20:59:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-29 21:40:22 --> 404 Page Not Found: Closing/build
ERROR - 2020-03-29 21:41:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-29 21:41:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
