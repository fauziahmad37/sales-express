<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-29 08:49:12 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-29 08:49:12 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-29 08:49:12 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-29 08:49:19 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-29 08:49:19 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-29 08:49:23 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-29 10:54:46 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-05-29 12:12:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-05-29 12:12:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-05-29 12:18:28 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-05-29 12:18:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-05-29 12:38:18 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-05-29 13:25:21 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-29 13:25:21 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-29 15:57:29 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-05-29 15:57:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-05-29 16:15:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-05-29 18:34:08 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-29 18:34:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-29 18:34:21 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-05-29 19:03:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-05-29 19:03:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
