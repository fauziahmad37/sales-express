<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-04 08:07:37 --> 404 Page Not Found: Report/setoran
ERROR - 2020-05-04 08:07:39 --> 404 Page Not Found: Report/setoran
ERROR - 2020-05-04 08:47:48 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-04 08:47:51 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-04 08:47:52 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-04 08:48:11 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-05-04 10:01:01 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-05-04 10:56:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-05-04 10:56:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-05-04 11:38:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-05-04 13:24:00 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-04 13:30:13 --> Severity: Notice --> Undefined index: sigit_purwanto /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-05-04 13:30:34 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-04 14:24:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-05-04 15:33:05 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-04 15:33:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-05-04 15:33:16 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-04 15:33:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:33:28 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-05-04 15:34:14 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-05-04 15:49:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-05-04 20:10:43 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-04 20:10:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 20:10:53 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-05-04 20:35:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-05-04 20:35:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
