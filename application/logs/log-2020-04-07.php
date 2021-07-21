<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-07 01:04:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-07 01:11:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-07 04:38:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-07 04:38:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-07 05:05:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-07 05:05:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-07 05:09:30 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-07 05:09:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-07 05:10:14 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-07 05:10:14 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-07 05:10:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-07 08:42:46 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-07 08:43:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-07 08:43:32 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-07 08:43:43 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-07 08:43:47 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-07 08:43:48 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-07 08:44:00 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-07 08:59:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-07 09:02:33 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-07 09:04:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-07 09:26:25 --> 404 Page Not Found: Seragam/build
ERROR - 2020-04-07 09:50:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-07 09:50:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-07 10:00:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-07 10:40:11 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-07 10:47:13 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-07 10:47:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-07 11:14:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-07 11:14:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-07 11:27:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-07 12:01:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-07 12:55:23 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-07 12:55:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-07 12:55:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-07 13:08:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-07 13:08:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-07 13:39:11 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-07 16:06:17 --> 404 Page Not Found: Seragam/build
ERROR - 2020-04-07 16:26:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-07 16:28:05 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-07 16:39:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-07 16:39:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-07 16:39:30 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-07 16:39:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-07 16:43:08 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-07 16:43:08 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-07 17:14:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-07 17:14:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-07 18:43:42 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-07 18:45:33 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-07 18:45:34 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-07 18:45:47 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-07 18:46:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-07 18:46:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-07 20:23:38 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-04-07 20:23:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-07 20:43:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-07 20:54:58 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-07 22:03:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-07 22:03:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-07 22:20:27 --> 404 Page Not Found: Closing/build
ERROR - 2020-04-07 23:23:14 --> 404 Page Not Found: Spj/build
