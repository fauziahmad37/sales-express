<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-24 08:30:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-05-24 11:37:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-05-24 11:37:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-05-24 11:40:54 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-05-24 11:40:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-05-24 23:55:08 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-05-24 23:58:41 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-24 23:59:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-24 23:59:21 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-05-24 23:59:22 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-05-24 23:59:53 --> 404 Page Not Found: Driver/build
