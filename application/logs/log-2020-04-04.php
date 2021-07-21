<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-04 05:15:09 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-04 05:15:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-04 05:17:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-04 06:14:27 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-04 06:14:27 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-04 06:21:54 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-04 06:21:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-04 08:57:39 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-04 08:57:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 08:57:44 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-04 08:57:44 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-04-04 08:58:07 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-04 08:58:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 08:58:14 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-04 08:59:40 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-04 08:59:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 08:59:57 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-04 08:59:57 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-04-04 09:00:23 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-04 09:01:03 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-04-04 09:01:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 09:01:03 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-04 09:01:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 09:01:47 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-04 09:02:02 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-04 09:02:04 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-04 09:02:33 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 09:13:34 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-04 09:21:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-04 09:23:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-04 09:23:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-04 09:23:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-04 09:23:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-04 09:23:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-04 09:24:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-04 09:40:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-04 09:48:07 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-04 09:48:13 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-04 09:48:15 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-04 09:49:51 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 09:51:06 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 09:52:04 --> 404 Page Not Found: Uploads/Mochamad%20Farid.jpg
ERROR - 2020-04-04 09:54:44 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 09:55:23 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 09:55:54 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 09:56:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-04 09:56:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-04 09:56:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-04 09:56:34 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 09:57:10 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 09:57:46 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 09:58:17 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 09:58:49 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-04 09:58:50 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 09:58:58 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-04 09:58:59 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-04 09:59:24 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:00:03 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:00:43 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:01:11 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:01:40 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:02:16 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:02:45 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:03:13 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:03:43 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:04:15 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:04:37 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:04:49 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:04:49 --> 404 Page Not Found: Uploads/rekening
ERROR - 2020-04-04 10:05:29 --> 404 Page Not Found: Uploads/sim
ERROR - 2020-04-04 10:05:29 --> 404 Page Not Found: Uploads/ktp
ERROR - 2020-04-04 10:06:02 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:06:22 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:06:55 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:07:38 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:08:10 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:08:59 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:09:29 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:09:53 --> 404 Page Not Found: Uploads/rekening
ERROR - 2020-04-04 10:09:53 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:10:21 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:12:10 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:12:42 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-04 10:17:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-04 10:17:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-04 10:17:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-04 10:25:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-04 11:08:39 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-04 11:08:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-04 12:43:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-04 14:55:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-04 14:55:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-04 14:59:54 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-04 14:59:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-04 16:04:54 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-04-04 16:38:59 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-04 16:38:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-04 20:47:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-04 20:47:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-04 21:03:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-04 21:03:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-04 21:33:00 --> 404 Page Not Found: Closing/build
