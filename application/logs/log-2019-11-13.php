<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-13 01:19:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 01:23:42 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-13 01:23:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 01:25:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-13 01:25:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-13 04:57:45 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-13 04:57:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 05:11:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 05:27:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 07:56:18 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-13 08:03:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:04:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:04:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:05:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:06:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:06:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:06:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:06:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 08:06:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:07:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:07:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-13 08:07:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-13 08:07:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:08:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:09:16 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-13 08:09:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:09:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:10:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:11:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:11:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:14:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:24:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 08:24:50 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-11-13 08:24:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-13 08:24:50 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-13 08:24:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:34:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:37:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:40:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:42:12 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-13 08:42:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:52:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 08:56:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 08:57:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-13 08:57:04 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-13 08:58:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 08:58:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 09:00:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 09:07:10 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-13 09:14:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 09:22:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 09:23:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 09:23:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 09:23:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 09:23:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 09:24:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 09:30:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 09:33:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 09:40:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 09:40:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 09:43:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 09:43:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 09:44:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 09:49:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 09:52:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 09:52:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 10:04:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 10:04:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-13 10:09:32 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-13 10:11:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 10:12:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 10:13:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 10:13:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 10:16:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 10:25:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 10:27:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 10:27:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 10:27:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 10:52:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 10:53:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 10:54:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 11:01:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 11:08:17 --> The upload destination folder does not appear to be writable.
ERROR - 2019-11-13 11:08:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 11:14:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-13 11:14:17 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, 
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-11-13 11:14:17 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-13 11:19:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 11:19:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 11:24:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 11:30:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 11:30:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 11:31:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 11:33:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 11:33:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 11:33:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 11:35:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 11:35:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-13 11:35:42 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, 
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-11-13 11:35:42 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-13 11:36:04 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 197
ERROR - 2019-11-13 11:38:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 11:38:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 11:38:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 11:38:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 11:38:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 11:38:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 11:39:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 11:40:01 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-13 11:40:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 11:41:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 11:42:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 12:18:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 12:22:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 13:21:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 13:30:27 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-13 13:31:17 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-13 13:31:30 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-13 13:32:11 --> 404 Page Not Found: Report/build
ERROR - 2019-11-13 13:48:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:01:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:01:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:04:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:04:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:04:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:05:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 14:05:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:05:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:07:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:07:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 14:07:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:08:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:09:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:09:42 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 14:09:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:09:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:10:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:11:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:12:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-13 14:12:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-13 14:13:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:14:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:15:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 14:15:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:16:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 14:16:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:19:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:25:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:28:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:29:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 14:29:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:36:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:37:38 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-13 14:38:08 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-13 14:38:38 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-13 14:39:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 14:48:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:15:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:15:42 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-13 15:17:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:17:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:17:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 15:17:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:17:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:18:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:20:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:24:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:25:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 15:25:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:27:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:31:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-13 15:32:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:35:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:36:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 15:36:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:36:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 15:36:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:37:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 15:37:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:39:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:39:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 15:39:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:40:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:41:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 15:42:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:42:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:48:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 15:49:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:50:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:56:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 15:58:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 15:59:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:00:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:00:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 16:00:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:04:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:05:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 16:05:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:05:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:06:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:06:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:07:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:08:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 16:08:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:09:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:13:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 16:13:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:14:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:19:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:21:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:22:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:23:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 16:23:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:28:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:31:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 16:31:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:35:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:35:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:40:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:40:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 16:40:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:41:55 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-13 16:42:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 16:42:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:42:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:43:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:43:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:44:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:47:45 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-13 16:49:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:51:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:54:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:54:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 16:55:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 16:56:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 16:56:46 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 575
ERROR - 2019-11-13 16:56:46 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 575
ERROR - 2019-11-13 16:56:46 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 575
ERROR - 2019-11-13 16:56:46 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 575
ERROR - 2019-11-13 16:56:46 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 576
ERROR - 2019-11-13 16:56:46 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 577
ERROR - 2019-11-13 16:56:46 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 588
ERROR - 2019-11-13 16:56:46 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 588
ERROR - 2019-11-13 16:56:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 10:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-13 16:56:46 --> Query error: ERROR:  syntax error at or near "and"
LINE 10:    where a.pool_id= and a.created>='1970-01-01 00:00:00' and...
                             ^ - Invalid query: select a.id,doc_number, a.status, a.created, a.tipe_rental, a.jam_mulai_denda,
			b.no_pintu, c.name as pool_name,
			d.kip_number,d.name as driver_name, 
			e.username
			from trx_spj a
			left join master_car b on (a.car_id = b.id)
			left join master_pool c on (a.pool_id = c.id)
			left join master_driver d on (a.driver_id = d.id)
			left join cac_user e on (a.creator_id =e.id)
			where a.pool_id= and a.created>='1970-01-01 00:00:00' and a.created<='1970-01-01 23:59:59' and a.status in('')
			and b.unit_bisnis in ('EXPRESS','EAGLE')
			order by a.created desc;
ERROR - 2019-11-13 16:57:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 16:57:42 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 16:57:56 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 16:58:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 16:58:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-13 16:58:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 17:00:22 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-13 17:08:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 17:12:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 17:33:05 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-13 17:33:05 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-13 18:07:58 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-13 18:09:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 18:10:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 19:00:10 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-13 19:00:10 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-13 19:30:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 19:39:59 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-13 19:39:59 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-13 21:29:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 21:30:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 21:30:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-13 21:40:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-13 23:18:33 --> 404 Page Not Found: Vehicle/build
