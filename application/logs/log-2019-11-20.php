<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-20 00:49:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 03:37:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 03:37:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 04:42:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 05:00:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 05:01:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 05:01:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 07:46:15 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-20 07:48:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 08:06:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 08:10:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 08:20:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 08:29:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 08:29:42 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 08:29:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 08:30:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 08:30:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 08:31:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 08:31:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 08:34:41 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-20 08:35:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 08:35:24 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-20 08:35:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 08:36:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 08:36:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 08:37:14 --> The upload destination folder does not appear to be writable.
ERROR - 2019-11-20 08:37:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 08:37:27 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 08:37:27 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 08:42:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 08:44:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 08:44:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 08:44:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 08:45:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 09:09:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 09:23:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 09:23:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 09:23:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 09:27:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 09:28:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 09:34:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 09:35:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-20 09:35:02 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
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
ERROR - 2019-11-20 09:35:02 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-20 09:38:16 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-11-20 09:39:38 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-20 09:39:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 09:40:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 09:47:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 09:51:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 09:53:33 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-20 10:04:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 10:12:06 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-20 10:16:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 10:17:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 10:18:19 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-20 10:24:20 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-20 10:29:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 10:42:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 10:42:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 10:46:19 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-20 10:46:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 10:52:17 --> The upload destination folder does not appear to be writable.
ERROR - 2019-11-20 10:52:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 10:59:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 11:00:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 11:00:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 11:02:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 11:03:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 11:03:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 11:04:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 11:04:52 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-20 11:05:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 11:08:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 11:08:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 11:08:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 11:08:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 11:08:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 11:13:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-20 11:13:50 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
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
ERROR - 2019-11-20 11:13:50 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-20 11:19:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 11:19:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 11:19:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 11:19:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 11:20:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 11:20:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 11:20:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 11:21:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 11:21:50 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-20 11:22:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 11:22:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 11:23:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 11:23:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-20 11:23:38 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
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
ERROR - 2019-11-20 11:23:38 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-20 11:24:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 11:24:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-20 11:24:11 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
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
ERROR - 2019-11-20 11:24:11 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-20 11:24:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 11:24:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 11:27:35 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-20 11:34:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 11:37:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 11:37:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 11:37:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 11:39:21 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-20 11:40:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 11:41:34 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-20 11:46:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 11:46:34 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-20 11:47:56 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-20 11:48:17 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-20 11:49:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 12:00:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 12:00:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 12:00:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 12:01:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-20 12:01:14 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
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
ERROR - 2019-11-20 12:01:15 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-20 12:03:52 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-20 12:11:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 12:16:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 12:16:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 12:17:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 12:18:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 12:18:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 12:19:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 12:39:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 12:45:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 12:45:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 12:46:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 12:46:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 12:47:27 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-20 12:48:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 12:51:01 --> Severity: Notice --> Undefined index: cecep /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-11-20 13:04:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 13:06:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 13:08:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 13:10:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 13:17:11 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 13:17:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 13:17:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 13:19:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 13:19:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 13:22:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 13:25:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 13:39:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 13:41:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 13:47:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 13:48:24 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-20 13:51:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-20 13:51:50 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2019-11-20 13:52:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 13:52:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-20 13:52:12 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-20 13:52:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 13:52:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-20 13:52:22 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
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
ERROR - 2019-11-20 13:52:22 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-20 13:54:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 13:55:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 13:57:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 13:58:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 13:58:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 13:58:13 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-20 13:58:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-20 13:58:45 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
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
ERROR - 2019-11-20 14:00:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 14:01:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 14:01:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-20 14:01:48 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
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
ERROR - 2019-11-20 14:01:48 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-20 14:03:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 14:03:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 14:04:57 --> The upload destination folder does not appear to be writable.
ERROR - 2019-11-20 14:04:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(30) /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-20 14:04:57 --> Query error: ERROR:  value too long for type character varying(30) - Invalid query: INSERT INTO "master_ktp" ("name", "created_by", "ktp_number", "location", "type", "address", "path_photo") VALUES ('aaaaaaaaa', '1', '1111111111111111111111111111111111', 'Jakarta', 'Biasa', '11111111111111111111111111111111111111', '/uploads/ktp/KTP_1111111111111111111111111111111111.JPG')
ERROR - 2019-11-20 14:04:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-20 14:04:57 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-11-20 14:10:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 14:15:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 14:15:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 14:20:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 14:21:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 14:27:36 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-20 14:28:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 14:29:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 14:30:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 14:31:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 14:32:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 14:34:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 14:36:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 14:36:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 14:38:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 14:40:20 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-20 14:40:46 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 14:40:46 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 14:41:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 14:41:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 14:41:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-20 14:41:53 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
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
ERROR - 2019-11-20 14:41:53 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-20 14:41:59 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-11-20 14:44:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 14:51:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 14:52:37 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-20 14:52:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 14:53:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 14:53:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 14:53:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 14:57:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 14:58:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 14:58:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 15:05:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 15:05:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 15:06:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 15:08:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 15:10:03 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 15:19:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 15:23:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 15:25:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 15:30:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 15:32:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 15:34:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 15:34:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 15:36:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 15:37:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 15:49:29 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 15:56:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:01:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:04:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:06:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:08:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:09:37 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 16:09:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:12:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:22:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 16:22:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 16:31:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:31:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 16:31:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:35:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:39:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:41:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:42:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:48:37 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 16:48:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:50:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 16:50:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:50:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:51:20 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-20 16:52:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:54:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 16:57:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:02:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:02:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 17:02:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:02:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 17:03:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 17:03:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:04:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 17:04:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:13:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:16:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:16:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:16:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:18:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 17:18:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:20:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:20:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 17:21:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 17:21:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:24:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:26:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:27:19 --> The upload destination folder does not appear to be writable.
ERROR - 2019-11-20 17:27:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 17:28:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 17:28:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:30:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 17:31:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 17:31:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:34:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:36:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:39:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:43:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 17:43:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-20 17:43:41 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
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
ERROR - 2019-11-20 17:43:41 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-20 17:45:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 17:45:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:48:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:56:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 17:59:11 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 17:59:11 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 18:00:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 18:00:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 18:03:40 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-20 18:05:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 18:05:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 18:10:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 18:11:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-20 18:12:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 18:13:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 18:13:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-20 18:13:33 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-20 18:14:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 18:15:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 18:15:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 18:15:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 18:15:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 18:19:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 18:19:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 18:20:03 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 18:24:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 18:28:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 18:51:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 18:51:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 18:52:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 18:57:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 18:58:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 18:59:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 19:10:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 19:10:26 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-20 19:11:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 19:15:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 19:18:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 19:19:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 19:19:42 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 19:24:04 --> Severity: Notice --> Undefined index: very /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-11-20 19:24:20 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-11-20 19:24:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 19:24:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 19:25:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-20 19:25:17 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-20 19:25:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-20 19:25:47 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-20 19:25:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 19:30:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 19:30:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 19:31:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 19:31:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 19:34:59 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 19:35:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 19:36:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 19:36:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 19:37:14 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 19:37:14 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 19:47:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 19:49:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 19:49:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 19:49:25 --> Severity: Warning --> fsockopen(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-11-20 19:49:25 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (php_network_getaddresses: getaddrinfo failed: Name or service not known) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-11-20 20:07:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 20:11:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 20:11:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 20:11:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 20:14:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 20:18:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 20:19:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 20:30:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 20:30:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 20:30:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 20:32:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 20:32:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 20:35:10 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-20 20:36:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 20:36:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 20:36:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 20:39:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 20:44:08 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 20:44:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 20:46:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 20:46:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 20:46:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 20:47:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 20:47:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 20:48:17 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 20:48:17 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 20:48:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 20:49:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 20:49:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 20:52:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 20:55:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-20 20:55:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 20:57:10 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 20:57:10 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 20:57:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 20:57:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 21:01:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 21:01:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 21:01:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 21:08:13 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-20 21:08:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 21:10:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 21:10:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 21:10:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 21:10:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 21:10:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 21:10:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 21:10:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 21:11:22 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-20 21:13:59 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-11-20 21:13:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 21:14:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 21:14:24 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-20 21:14:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 21:19:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-20 21:19:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-20 21:23:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 21:24:29 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 21:24:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 21:29:08 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-11-20 21:29:08 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 21:29:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 21:34:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 21:37:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 21:37:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 21:37:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 21:42:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 21:42:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 21:45:52 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-11-20 21:45:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 21:45:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 21:52:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 21:56:03 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-11-20 21:56:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 21:56:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-20 22:03:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 22:04:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 22:09:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 22:34:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-20 23:42:59 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-20 23:44:55 --> 404 Page Not Found: Driver/build
