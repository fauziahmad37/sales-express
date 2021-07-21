<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-15 09:40:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 10:16:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-15 10:16:32 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2020-06-15 10:49:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 10:51:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 10:53:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 10:53:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 10:54:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 10:54:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 10:54:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 10:55:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 10:56:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-06-15 10:56:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-06-15 10:57:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 10:57:17 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-06-15 10:57:17 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-06-15 10:57:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 11:00:12 --> 404 Page Not Found: Driver/build
ERROR - 2020-06-15 11:00:30 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 11:06:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 11:09:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 11:09:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 11:11:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 11:11:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 11:12:08 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 11:12:12 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 11:12:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 11:12:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 11:12:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 11:18:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 11:19:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 11:19:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 11:19:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 11:21:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 11:38:06 --> 404 Page Not Found: Driver/build
ERROR - 2020-06-15 12:21:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 12:36:28 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 13:14:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 13:47:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 13:47:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 13:50:42 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-06-15 13:50:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 13:50:49 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 604
ERROR - 2020-06-15 13:50:49 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 607
ERROR - 2020-06-15 13:50:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 7:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-15 13:50:49 --> Query error: ERROR:  syntax error at or near ";"
LINE 7:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from 
			trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2020-06-15 14:09:17 --> 404 Page Not Found: Driver/build
ERROR - 2020-06-15 14:18:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 14:18:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 14:19:00 --> 404 Page Not Found: Driver/build
ERROR - 2020-06-15 14:36:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-15 14:36:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-06-15 18:03:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-06-15 18:03:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-06-15 18:04:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 18:04:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-06-15 18:04:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-06-15 18:44:12 --> 404 Page Not Found: Driver/build
ERROR - 2020-06-15 18:57:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 19:29:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-06-15 19:29:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-06-15 20:08:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 20:09:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-15 20:10:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 20:10:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 20:15:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 20:15:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 20:15:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-06-15 20:15:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-06-15 20:16:12 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-06-15 20:16:12 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-06-15 20:16:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 20:16:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-06-15 20:16:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-06-15 20:16:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-15 20:16:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-06-15 20:16:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
