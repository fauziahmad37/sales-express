<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-04 00:59:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 01:05:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 01:05:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 03:14:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 03:21:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 05:14:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 06:16:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 06:24:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 08:13:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 08:14:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 08:15:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 08:15:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 08:16:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 08:25:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 08:29:15 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-04 08:31:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 08:38:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 08:38:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 08:39:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 08:42:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 08:49:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 08:58:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 08:58:12 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-04 08:59:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 08:59:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 09:23:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 09:23:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 09:31:11 --> The upload destination folder does not appear to be writable.
ERROR - 2019-12-04 09:31:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 09:34:59 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-04 09:34:59 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-04 09:36:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 09:36:37 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-04 09:39:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 09:39:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 09:40:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 09:40:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 09:40:34 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 09:40:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 09:40:35 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 09:40:47 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-12-04 09:41:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 09:41:16 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2019-12-04 09:42:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 09:49:51 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-04 09:52:16 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-04 09:52:29 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-04 09:52:37 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-04 09:53:09 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-04 09:53:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 09:57:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 09:58:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 09:59:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 10:00:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 10:02:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 10:05:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 10:06:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 10:06:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 10:07:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-04 10:07:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-04 10:11:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-04 10:11:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-04 10:14:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 10:14:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 10:14:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-04 10:27:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 10:32:15 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-04 10:45:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 10:45:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 10:46:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 10:46:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 10:46:16 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-04 10:46:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 10:46:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 10:46:40 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 10:46:40 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-04 10:48:41 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-04 10:48:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 10:48:41 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 10:48:42 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-04 10:48:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 10:48:42 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 10:50:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 10:54:11 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-04 10:54:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 10:54:11 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 10:54:12 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-04 10:54:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 10:54:12 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 10:54:22 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-04 10:54:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 10:54:22 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 11:01:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 11:14:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 11:15:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 11:18:53 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-04 11:18:53 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-04 11:25:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-04 11:25:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-04 11:29:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 11:34:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 11:37:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 11:37:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 11:37:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 11:37:54 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-04 11:39:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 12:01:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 12:05:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 12:06:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 12:11:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 12:15:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 12:30:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 12:30:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 12:31:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 12:35:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 12:41:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 12:43:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 12:45:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 13:11:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 13:14:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 13:17:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 13:19:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 13:20:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 13:20:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 13:25:56 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 13:25:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 13:26:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 13:29:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 13:31:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 13:37:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 13:39:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 13:42:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 13:44:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 13:47:29 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-04 13:47:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 13:47:35 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-12-04 13:48:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 13:50:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 13:58:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 14:00:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 14:00:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 14:00:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 14:01:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 14:07:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 14:08:13 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-04 14:12:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 14:12:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 14:13:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 14:13:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 14:15:47 --> Severity: Notice --> Undefined index: faizal /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-12-04 14:17:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 14:18:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 14:37:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 14:37:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 14:37:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 14:41:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 14:48:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 14:52:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 14:53:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 14:54:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 14:54:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 14:57:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 15:08:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 15:10:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 15:10:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 15:12:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 15:12:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 15:12:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 15:13:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 15:15:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 15:17:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 15:23:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 15:24:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 15:25:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 15:28:11 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 15:28:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 15:29:50 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-04 15:31:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 15:31:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 15:31:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 15:31:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 15:31:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 15:31:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 15:32:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 15:39:02 --> 404 Page Not Found: Report/setoran
ERROR - 2019-12-04 15:39:09 --> 404 Page Not Found: Report/build
ERROR - 2019-12-04 15:39:18 --> 404 Page Not Found: Report/build
ERROR - 2019-12-04 15:39:25 --> 404 Page Not Found: Report/build
ERROR - 2019-12-04 15:39:26 --> 404 Page Not Found: Report/build
ERROR - 2019-12-04 15:42:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 15:42:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 15:42:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 15:42:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 15:42:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 15:42:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 15:45:34 --> The upload destination folder does not appear to be writable.
ERROR - 2019-12-04 15:45:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 15:56:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 15:57:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 16:00:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 16:01:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 16:02:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 16:03:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 16:03:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 16:06:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 16:07:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 16:07:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 16:07:03 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 16:07:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 16:07:03 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 16:07:31 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-12-04 16:08:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 16:09:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 16:09:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 16:09:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 16:12:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 16:13:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 16:16:30 --> The upload destination folder does not appear to be writable.
ERROR - 2019-12-04 16:16:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 16:17:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 16:17:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 16:17:44 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 16:17:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 16:17:45 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 16:17:59 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-12-04 16:18:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 16:18:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 16:18:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 16:18:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 16:29:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 16:32:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 16:40:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 16:44:45 --> The upload destination folder does not appear to be writable.
ERROR - 2019-12-04 16:44:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 16:45:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 16:45:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 16:51:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 16:53:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 16:53:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-04 16:53:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-04 16:54:13 --> The upload destination folder does not appear to be writable.
ERROR - 2019-12-04 16:54:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 16:54:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 16:55:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-04 16:55:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-04 16:56:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 16:57:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 16:57:11 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 16:57:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 16:57:12 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 16:57:16 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-12-04 16:57:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 16:57:24 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 16:57:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 16:57:24 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 16:57:33 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-12-04 16:57:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 16:57:40 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 16:57:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 16:57:40 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 16:57:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 16:58:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 16:58:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 16:58:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 16:59:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 16:59:02 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 16:59:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 16:59:02 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-12-04 16:59:09 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-12-04 16:59:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_driver_un&quot;
DETAIL:  Key (driver_registration_id)=(164) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 16:59:09 --> Query error: ERROR:  duplicate key value violates unique constraint "master_driver_un"
DETAIL:  Key (driver_registration_id)=(164) already exists. - Invalid query: INSERT INTO "master_driver" ("created_by", "name", "tipe", "driver_registration_id", "phone", "status", "pool_id", "kip_number", "barcode", "kip_expire_date") VALUES ('35', 'KASNO', 'REGULAR', '164', '081327073934', 'Active', '1', 'R/PB/201912/00162', 'uploads/barcode_kip/164.png', '2020-12-03')
ERROR - 2019-12-04 17:06:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 17:06:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 17:21:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 17:21:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 17:25:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 17:29:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 17:29:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 17:29:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 17:30:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 17:32:02 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-04 17:32:40 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-04 17:33:18 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-04 17:33:45 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-04 17:34:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 17:37:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 17:38:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 17:39:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-04 17:39:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-04 17:42:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 17:42:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 17:44:24 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-04 17:44:24 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-04 17:44:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 17:44:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 17:45:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 17:47:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 17:47:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 17:48:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 17:53:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 17:53:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 17:57:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 18:05:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 18:07:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 18:12:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-04 18:12:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-04 18:15:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 18:15:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 18:15:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 18:16:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 18:16:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 18:16:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 18:17:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 18:17:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 18:19:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 18:28:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 18:29:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 18:29:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 18:35:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 18:44:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 18:44:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 18:51:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 18:53:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 18:53:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 19:02:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 19:02:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 19:05:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 19:12:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 19:13:21 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-04 19:16:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 19:22:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 19:22:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 19:22:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 19:26:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 19:31:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 19:33:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 19:36:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 19:38:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 19:40:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 19:40:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 19:41:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 19:41:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 19:46:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 19:56:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:00:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 20:00:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:03:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:05:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:07:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:08:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-04 20:09:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-04 20:09:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-04 20:09:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:10:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 20:10:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:10:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-04 20:10:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-04 20:10:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:11:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:12:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:14:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:15:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:19:26 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-12-04 20:19:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-04 20:20:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-04 20:23:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:23:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 20:23:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:23:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:23:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 20:23:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:24:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-04 20:24:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-04 20:24:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-04 20:24:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 20:24:58 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-12-04 20:25:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 20:25:00 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-12-04 20:25:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 20:25:13 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-12-04 20:25:13'
WHERE "id" = 'build'
ERROR - 2019-12-04 20:27:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:27:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:28:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 20:29:54 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-04 20:31:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:31:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:31:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:31:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:33:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-04 20:35:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:35:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:35:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 20:36:02 --> 404 Page Not Found: Closing/build
ERROR - 2019-12-04 20:36:04 --> 404 Page Not Found: Report/build
ERROR - 2019-12-04 20:36:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:37:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:38:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 20:38:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:39:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:40:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:40:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-04 20:40:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:41:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:42:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:43:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:43:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:43:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:44:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:45:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:46:00 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-04 20:46:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:50:59 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-04 20:50:59 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-04 20:51:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 20:51:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:52:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 20:52:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 21:01:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 21:02:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 21:04:17 --> 404 Page Not Found: Closing/build
ERROR - 2019-12-04 21:04:46 --> 404 Page Not Found: Closing/build
ERROR - 2019-12-04 21:12:56 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-04 21:21:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 21:41:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 21:46:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 21:55:36 --> 404 Page Not Found: Closing/build
ERROR - 2019-12-04 21:56:15 --> 404 Page Not Found: Closing/build
ERROR - 2019-12-04 21:57:33 --> 404 Page Not Found: Closing/build
ERROR - 2019-12-04 21:59:17 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-04 21:59:17 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-04 22:00:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 22:08:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-04 22:08:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-04 22:08:38 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-04 22:09:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 22:12:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 23:22:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-04 23:22:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-04 23:22:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-04 23:23:35 --> Severity: Notice --> Undefined index: faizal /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-12-04 23:24:01 --> 404 Page Not Found: Spj/build
