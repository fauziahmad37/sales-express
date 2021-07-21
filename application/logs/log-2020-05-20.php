<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-20 08:00:25 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-20 08:00:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-20 08:00:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-05-20 08:00:42 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-20 08:00:44 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-20 08:00:46 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-20 08:00:55 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-05-20 08:00:55 --> 404 Page Not Found: Uploads/rekening
ERROR - 2020-05-20 08:07:25 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-20 09:37:08 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-05-20 09:40:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-05-20 10:15:59 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-20 13:49:25 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-20 13:51:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-20 13:51:11 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-05-20 17:32:46 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-05-20 17:32:46 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-05-20 19:31:21 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-20 19:37:24 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-05-20 19:37:24 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-05-20 19:48:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-05-20 19:48:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-05-20 20:03:30 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-05-20 20:03:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-05-20 23:28:35 --> 404 Page Not Found: Closing/build
