<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-10-16 00:15:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 00:17:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 00:17:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 00:17:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 00:18:00 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:19:02 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:19:21 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:19:22 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:19:23 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:19:42 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:19:57 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:20:01 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:20:29 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:20:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 00:20:59 --> 404 Page Not Found: Assets/css
ERROR - 2019-10-16 00:21:13 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:22:51 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:24:17 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:25:39 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:26:34 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:28:39 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:30:04 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:34:56 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:36:49 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:37:54 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:37:59 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:38:18 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:39:51 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:42:17 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:42:19 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-16 00:53:01 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-16 00:53:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 00:53:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-16 00:53:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-16 05:16:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 07:22:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 07:59:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 07:59:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:04:21 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 08:04:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:06:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:09:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 08:09:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-16 08:09:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-16 08:09:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 08:10:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:11:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 08:11:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 08:11:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 08:11:40 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 08:11:40 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-10-16 08:12:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 08:12:25 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 08:12:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:12:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:14:56 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-16 08:15:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:15:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:16:24 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-16 08:16:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:17:04 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-16 08:17:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:18:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 08:18:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 08:18:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:18:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:18:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 08:19:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 08:19:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:21:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:26:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:28:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:32:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:36:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:38:40 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-16 08:38:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:40:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:41:55 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-16 08:41:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:45:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:45:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 08:49:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 08:49:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 08:49:39 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 08:53:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 08:53:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 09:04:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 09:04:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 09:06:28 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-16 09:07:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-16 09:07:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-16 09:08:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 09:08:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 09:11:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 09:12:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 09:23:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 09:25:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 09:26:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 09:29:13 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-16 09:29:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 09:33:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 09:33:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-16 09:34:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 09:38:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 09:39:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 09:39:02 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 09:44:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 09:44:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 09:45:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 09:45:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 09:51:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 09:52:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 09:52:11 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 09:52:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 09:52:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 09:52:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 09:53:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 09:53:02 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 09:54:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 09:54:52 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 09:55:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 09:58:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 09:58:39 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-16 09:58:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 09:58:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 09:58:42 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 09:58:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 10:01:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 10:01:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 10:03:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 10:05:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 10:05:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 10:07:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 10:08:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 10:08:34 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-10-16 10:08:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 10:08:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 10:11:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 10:16:15 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-16 10:19:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 10:20:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 10:20:54 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-16 10:21:00 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-16 10:21:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 10:21:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 10:21:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 10:29:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 10:31:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 10:33:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 10:34:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 10:34:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 10:34:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 10:39:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 10:41:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 10:42:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 10:42:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 10:42:29 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 10:44:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 10:44:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 10:44:46 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 10:45:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 10:45:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 10:45:56 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 10:47:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 11:00:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 11:01:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 11:02:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 11:24:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 11:35:38 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-16 11:36:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 11:37:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 11:37:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 11:38:04 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-10-16 11:38:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 11:38:04 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 11:38:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 11:39:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 11:40:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 11:40:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 11:41:51 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-16 11:42:12 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-16 11:43:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 11:43:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 11:47:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 11:57:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 12:14:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 12:14:53 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-16 12:17:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 12:22:35 --> Severity: Notice --> Undefined index: very /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-10-16 12:44:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 12:55:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 12:55:07 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 13:07:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-16 13:08:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 13:11:12 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-16 13:12:30 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 588
ERROR - 2019-10-16 13:12:30 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 591
ERROR - 2019-10-16 13:12:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 7:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 13:12:30 --> Query error: ERROR:  syntax error at or near ";"
LINE 7:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from 
			trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-10-16 13:13:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 13:16:57 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-16 13:19:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 13:21:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-16 13:51:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 13:51:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 13:51:14 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 13:51:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-16 13:51:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-16 14:02:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:02:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:03:15 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-16 14:03:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:05:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:05:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:06:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:08:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 14:08:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:08:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:08:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:09:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 14:09:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:10:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 14:10:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:12:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:12:49 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-16 14:12:49 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-16 14:13:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:14:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 14:14:05 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-10-16 14:14:05', 'TTS/PB/20191016/1446', '0', '0', '0', '0', '0', 0, 0, 0, 0, '', '', '', 'Paid', '0', '26', NULL, '1')
ERROR - 2019-10-16 14:14:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 14:14:05 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-10-16 14:17:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:18:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:20:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:34:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:35:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:36:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-16 14:40:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:40:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 14:40:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:43:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:46:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:55:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 14:56:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 14:56:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 14:58:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:03:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:05:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:05:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:15:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:26:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:26:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:30:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:36:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:39:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 15:39:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:40:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:40:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:40:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:42:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:43:53 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-16 15:43:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:44:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:45:49 --> Severity: Notice --> Undefined index: heru /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-10-16 15:46:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:46:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:50:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 15:50:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:51:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:52:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:55:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:55:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 15:55:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:56:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 15:56:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:57:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:57:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 15:57:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 15:58:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:05:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 16:05:47 --> Severity: Notice --> Undefined index: aep_muhdor /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-10-16 16:05:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:05:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:06:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:10:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 16:10:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:10:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:11:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 16:11:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:15:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 16:15:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:17:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 16:17:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:19:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-16 16:19:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-16 16:21:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:22:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:23:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:24:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:25:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 16:26:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 16:26:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:29:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:30:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:32:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:32:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 16:32:24 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-10-16 16:33:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:34:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:34:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:35:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 16:35:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:35:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:36:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:37:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:37:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:37:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:37:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 16:37:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:38:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 16:38:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:38:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:38:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:40:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 16:40:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:41:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 16:43:57 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-16 16:44:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-16 16:44:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-16 16:45:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:46:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:47:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:50:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 16:50:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:51:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 16:51:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:52:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 16:52:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:53:23 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-16 16:54:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 16:55:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:55:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(50) /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 16:55:53 --> Query error: ERROR:  value too long for type character varying(50) - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('1471', '2019-10-16 16:55:53', 'TTS-TIARA/BCG/20191016/1462', '650000', '650000', '0', '0', '0', '1167000', '0', 0, 1167000, '', '074723+075482+075473+075271(WAITING FEE) Rp 237.500', '', 'Paid', '517000', '45', NULL, '5')
ERROR - 2019-10-16 16:55:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 16:55:53 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-10-16 16:56:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:56:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:56:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:57:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-16 16:57:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:57:46 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-16 16:58:09 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-16 16:58:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:58:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 16:58:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 16:58:33 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-10-16 16:59:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 17:02:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 17:15:50 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-16 17:21:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 17:24:10 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-16 17:24:15 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-16 17:25:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 17:28:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 17:28:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 17:42:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 17:45:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 17:45:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-16 17:45:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 17:45:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-16 17:45:32 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-16 17:45:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 17:45:49 --> 404 Page Not Found: Seragam/build
ERROR - 2019-10-16 17:46:00 --> 404 Page Not Found: Seragam/build
ERROR - 2019-10-16 18:13:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-16 18:13:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-16 19:06:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 19:35:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 19:49:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 20:29:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 20:42:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 21:03:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 21:04:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 21:04:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-16 21:29:21 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-16 21:32:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 22:28:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 22:35:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 22:35:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 22:40:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 22:55:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 22:57:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 23:01:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 23:01:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-16 23:02:15 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 260
ERROR - 2019-10-16 23:02:19 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 260
ERROR - 2019-10-16 23:02:25 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 260
ERROR - 2019-10-16 23:14:10 --> 404 Page Not Found: Spj/build
