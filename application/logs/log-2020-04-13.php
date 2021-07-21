<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-13 06:40:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-13 06:40:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-13 07:06:52 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-13 07:27:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-13 07:27:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-13 07:29:19 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-13 07:29:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-13 08:22:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-13 08:22:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-13 08:23:43 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-04-13 08:23:46 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-13 08:31:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-13 08:49:06 --> 404 Page Not Found: Seragam/build
ERROR - 2020-04-13 09:02:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-13 09:02:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-13 09:02:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-13 09:02:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-13 10:37:55 --> 404 Page Not Found: Report/build
ERROR - 2020-04-13 10:37:57 --> 404 Page Not Found: Report/build
ERROR - 2020-04-13 10:38:19 --> 404 Page Not Found: Report/build
ERROR - 2020-04-13 10:38:22 --> 404 Page Not Found: Report/build
ERROR - 2020-04-13 10:39:02 --> 404 Page Not Found: Report/build
ERROR - 2020-04-13 10:59:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-13 10:59:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-13 12:06:13 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-13 12:48:37 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-13 12:48:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-13 12:53:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-13 13:10:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-13 13:10:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-13 13:20:42 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-13 13:20:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-13 13:20:56 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-13 13:47:54 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-13 13:48:05 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-13 13:48:06 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-13 13:48:23 --> 404 Page Not Found: Uploads/rekening
ERROR - 2020-04-13 13:50:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-13 13:50:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-13 13:51:03 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-13 13:51:08 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-13 13:51:09 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-13 14:02:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-04-13 15:24:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-13 15:24:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-13 16:59:34 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-04-13 17:00:00 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-13 17:02:08 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-13 17:28:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-13 17:53:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-13 18:05:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-13 18:05:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-13 18:05:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-13 18:05:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-13 18:41:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-13 19:02:54 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-04-13 19:03:15 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-13 19:03:28 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-13 19:47:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-13 19:47:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-13 19:48:46 --> 404 Page Not Found: Spj/build
