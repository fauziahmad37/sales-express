<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-15 08:24:37 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-15 08:40:14 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-15 08:40:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-15 08:40:23 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-15 08:46:19 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-15 09:38:40 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-15 09:44:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-15 11:08:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-15 12:30:33 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-04-15 12:30:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-15 13:11:09 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-15 13:11:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-15 13:11:17 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-15 13:39:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-15 13:39:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-15 13:40:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-15 13:42:18 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-04-15 14:54:42 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-15 14:59:07 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-15 14:59:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-15 14:59:14 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-15 14:59:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-15 14:59:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-15 14:59:52 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-15 14:59:57 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-15 15:00:02 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-15 15:00:16 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-15 15:03:16 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-15 15:03:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-15 15:03:43 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-15 15:46:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-15 16:25:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-15 18:41:50 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-15 18:46:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-15 19:04:43 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-15 19:13:16 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-15 19:15:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-15 19:16:00 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-15 20:43:09 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-15 20:43:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-15 21:35:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-15 21:35:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-15 22:03:50 --> 404 Page Not Found: Closing/build
