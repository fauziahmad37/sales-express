<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-08 05:05:10 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-08 05:05:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-08 05:05:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-08 05:05:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-08 05:23:00 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-08 05:23:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-08 05:24:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-08 05:24:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-08 05:24:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-08 05:25:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-08 08:55:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-08 09:28:45 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-04-08 09:28:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-08 10:15:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-08 11:18:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-08 12:19:31 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-08 12:23:23 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-08 12:29:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-08 12:29:26 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-08 12:29:26 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-04-08 12:34:19 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-08 12:34:20 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-08 12:35:17 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-08 12:35:17 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-08 12:35:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-08 12:35:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-08 12:36:26 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-08 12:36:26 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-08 12:36:39 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-08 12:36:45 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-08 12:36:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-08 12:36:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-08 12:52:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-08 12:52:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-08 12:52:41 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-08 12:56:26 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-08 12:56:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-08 13:31:15 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-08 14:16:29 --> 404 Page Not Found: Report/build
ERROR - 2020-04-08 14:16:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-08 15:55:02 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-08 16:51:13 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-04-08 18:52:37 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-08 18:59:00 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-08 19:01:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-08 19:02:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-08 19:17:53 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-08 19:22:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-08 19:58:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-08 19:58:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-08 19:59:02 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-08 19:59:14 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-08 19:59:14 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-08 19:59:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-08 21:31:39 --> 404 Page Not Found: Closing/build
ERROR - 2020-04-08 21:31:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-08 21:31:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
