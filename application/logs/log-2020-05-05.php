<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-05 06:27:24 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-05 06:27:24 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-05 06:27:25 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-05 06:27:25 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-05 06:27:57 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-05 06:27:57 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-05 06:27:57 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-05 06:28:08 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-05 06:28:08 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-05 06:28:08 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-05 06:28:08 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-05 06:28:25 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-05 06:28:25 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-05 06:59:30 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-05 09:51:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-05-05 09:52:03 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-05-05 10:13:26 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-05 10:13:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-05 10:13:42 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-05-05 10:13:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-05 10:13:42 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-05-05 11:28:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-05 11:28:39 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2020-05-05 11:29:07 --> Severity: Notice --> Undefined index: feddi /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-05-05 11:29:07 --> 404 Page Not Found: Assets/css
ERROR - 2020-05-05 11:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2020-05-05 11:32:25 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-05 12:14:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-05-05 12:14:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-05-05 12:26:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-05-05 15:12:01 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-05 15:12:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-05 15:12:05 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-05-05 15:22:08 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-05 16:06:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-05-05 16:06:18 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-05-05 16:21:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-05-05 16:21:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-05-05 18:20:56 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-05 20:04:17 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-05 21:03:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-05-05 21:03:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-05-05 21:58:46 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-05-05 22:42:06 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-05 22:42:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-05 22:42:12 --> Query error: ERROR:  column "build" does not exist
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
