<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-16 04:10:46 --> 404 Page Not Found: Closing/build
ERROR - 2020-06-16 06:10:26 --> 404 Page Not Found: Closing/build
ERROR - 2020-06-16 06:13:09 --> 404 Page Not Found: Closing/build
ERROR - 2020-06-16 09:23:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-16 10:07:44 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-06-16 10:08:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-16 10:46:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-16 10:46:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-06-16 10:46:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-06-16 10:49:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-16 10:50:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-06-16 10:50:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-06-16 11:02:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-06-16 12:01:43 --> 404 Page Not Found: Driver/build
ERROR - 2020-06-16 12:02:13 --> 404 Page Not Found: Driver/build
ERROR - 2020-06-16 13:45:59 --> Severity: Notice --> Undefined index: very /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-06-16 13:46:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-16 13:46:05 --> 404 Page Not Found: Driver/build
ERROR - 2020-06-16 14:12:45 --> 404 Page Not Found: Driver/build
ERROR - 2020-06-16 14:24:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-06-16 14:24:24 --> 404 Page Not Found: Driver/build
ERROR - 2020-06-16 14:24:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-16 14:24:43 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-06-16 15:30:24 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-06-16 15:30:24 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
