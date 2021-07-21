<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-19 01:47:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 07:09:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 07:31:33 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-19 07:37:42 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-19 07:38:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 07:54:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 07:56:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 07:57:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-19 07:57:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-19 07:57:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 07:59:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 08:00:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 08:09:34 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-19 08:11:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 08:12:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 08:19:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 08:21:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 08:30:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 08:37:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 08:46:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 09:04:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 09:06:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 09:25:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 09:25:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 09:27:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 09:29:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 09:44:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 09:44:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 09:51:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 09:56:09 --> The upload destination folder does not appear to be writable.
ERROR - 2019-11-19 09:56:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 09:57:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 09:58:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 10:01:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 10:01:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 10:01:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 10:04:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 10:04:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 10:07:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 10:07:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 10:09:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 10:11:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 10:13:12 --> The upload destination folder does not appear to be writable.
ERROR - 2019-11-19 10:13:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 10:21:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 10:22:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 10:23:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 10:23:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 10:23:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 10:23:54 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-19 10:23:55 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-19 10:27:37 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-11-19 10:27:44 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-19 10:27:44 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-11-19 10:27:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 10:27:44 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-19 10:28:07 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-11-19 10:28:07 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-19 10:28:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 10:28:07 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-19 10:32:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 10:33:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-19 10:33:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-19 10:34:10 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-11-19 10:34:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 10:37:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 10:37:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 10:46:04 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-11-19 10:46:13 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-11-19 10:46:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 10:46:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 10:50:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 10:50:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 10:53:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-19 10:53:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-19 10:54:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 10:54:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 11:01:28 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-19 11:02:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 11:02:57 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-11-19 11:02:57', 'TTS/PB/20191119/2910', '0', '0', '0', '0', '0', 0, 0, 0, 0, '', '', '', 'Paid', '0', '1', NULL, '1')
ERROR - 2019-11-19 11:02:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 11:02:57 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-11-19 11:03:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 11:03:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 11:04:33 --> The upload destination folder does not appear to be writable.
ERROR - 2019-11-19 11:04:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 11:04:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 11:05:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 11:07:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 11:07:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 11:10:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 11:11:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 11:12:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 11:12:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 11:12:42 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-19 11:12:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 11:12:42 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-19 11:16:35 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-11-19 11:18:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 11:19:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 11:23:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 11:24:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 11:24:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 11:24:28 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 11:24:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 11:24:30 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-11-19 11:24:30'
WHERE "id" = 'build'
ERROR - 2019-11-19 11:24:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 11:24:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 11:26:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 11:28:06 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-19 11:28:56 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-19 11:30:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 11:33:10 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 11:33:30 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 11:33:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 11:35:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 11:37:55 --> The upload destination folder does not appear to be writable.
ERROR - 2019-11-19 11:37:56 --> The upload destination folder does not appear to be writable.
ERROR - 2019-11-19 11:37:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_ktp_un&quot;
DETAIL:  Key (ktp_number)=(3275011203600029) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 11:37:56 --> Query error: ERROR:  duplicate key value violates unique constraint "master_ktp_un"
DETAIL:  Key (ktp_number)=(3275011203600029) already exists. - Invalid query: INSERT INTO "master_ktp" ("name", "created_by", "ktp_number", "location", "type", "address", "path_photo") VALUES ('TARSONO', '17', '3275011203600029', 'Luar Jakarta', 'KTP Seumur Hidup', 'KP.PEDURENAN NO.69 RT 003 /005,DUREN JAYA, BEKASI TIMUR,BEKASI', '/uploads/ktp/KTP_32750112036000291.jpg')
ERROR - 2019-11-19 11:37:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 11:37:56 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-11-19 11:39:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 11:41:08 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-11-19 11:41:08 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 11:41:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 11:41:14 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 11:41:41 --> Severity: Notice --> Undefined index: very /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-11-19 11:41:42 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-19 11:41:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 11:43:07 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-19 11:43:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 11:43:41 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-19 11:43:41 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-19 11:46:51 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-11-19 11:47:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 11:47:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 11:47:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 11:47:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 11:51:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 11:51:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 11:55:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 11:55:34 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-11-19 11:55:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 11:55:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 11:56:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 11:57:14 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 11:57:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 12:04:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 12:08:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 12:08:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 12:08:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 12:09:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 12:13:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 12:13:16 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-11-19 12:13:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 12:13:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 12:15:00 --> The upload destination folder does not appear to be writable.
ERROR - 2019-11-19 12:15:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 12:15:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 12:15:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 12:19:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 12:19:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 12:19:27 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-19 12:22:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 12:27:34 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-11-19 12:27:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 12:27:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 12:27:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 12:28:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 12:28:18 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 12:28:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-19 12:28:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-19 12:35:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 12:36:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 12:37:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 12:37:03 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 12:37:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 12:37:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 12:37:14 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 12:37:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 12:37:15 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 12:37:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 12:37:16 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-11-19 12:37:16'
WHERE "id" = 'build'
ERROR - 2019-11-19 12:37:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 12:37:21 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 12:37:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 12:37:22 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 12:37:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 12:37:24 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-11-19 12:37:24'
WHERE "id" = 'build'
ERROR - 2019-11-19 12:37:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 12:37:27 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 12:37:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 12:37:27 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 12:37:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 12:37:29 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-11-19 12:37:29'
WHERE "id" = 'build'
ERROR - 2019-11-19 12:37:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 12:37:30 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 12:37:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 12:37:31 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 12:37:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 12:37:32 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-11-19 12:37:32'
WHERE "id" = 'build'
ERROR - 2019-11-19 12:38:03 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 12:41:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 12:51:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 12:51:54 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-19 12:51:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 12:51:56 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-19 12:51:56 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-19 12:53:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 13:00:30 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 13:01:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 13:02:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 13:03:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 13:06:21 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-11-19 13:06:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-19 13:06:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-19 13:06:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-19 13:06:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-19 13:08:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 13:08:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 13:15:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 13:16:54 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 13:26:23 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-19 13:26:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 3:     where a.id=;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 13:26:55 --> Query error: ERROR:  syntax error at or near ";"
LINE 3:     where a.id=;
                       ^ - Invalid query: select a.*, b.code from master_driver a
				left join master_pool b on(a.pool_id=b.id)
				where a.id=;
ERROR - 2019-11-19 13:27:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 3:     where a.id=;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 13:27:08 --> Query error: ERROR:  syntax error at or near ";"
LINE 3:     where a.id=;
                       ^ - Invalid query: select a.*, b.code from master_driver a
				left join master_pool b on(a.pool_id=b.id)
				where a.id=;
ERROR - 2019-11-19 13:27:44 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-19 13:27:51 --> 404 Page Not Found: Seragam/cetak
ERROR - 2019-11-19 13:28:01 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-19 13:28:19 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-19 13:28:35 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-19 13:35:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 13:44:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 13:45:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 13:48:34 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-11-19 13:48:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 13:48:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 13:49:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 13:52:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 13:52:18 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-19 13:52:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 13:52:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 13:52:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 13:52:47 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 13:52:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 13:52:48 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 13:52:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 13:52:50 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-11-19 13:52:50'
WHERE "id" = 'build'
ERROR - 2019-11-19 13:53:09 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-19 13:53:28 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-19 13:53:46 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-19 13:54:01 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-19 13:54:07 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-19 13:54:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 13:54:54 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-19 13:55:43 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-19 13:56:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 13:56:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 13:57:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 13:57:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 13:57:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 13:57:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 13:59:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 13:59:29 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 14:02:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 14:15:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 14:16:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 14:16:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 14:16:54 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 14:17:40 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-11-19 14:17:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 14:17:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:18:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-19 14:18:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-19 14:19:08 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 14:19:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:20:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:21:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 14:21:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:23:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:27:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:27:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 14:27:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:29:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:30:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:31:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:32:07 --> 404 Page Not Found: Report/setoran
ERROR - 2019-11-19 14:32:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 14:32:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:32:15 --> 404 Page Not Found: Report/build
ERROR - 2019-11-19 14:35:44 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-19 14:35:49 --> 404 Page Not Found: Report/build
ERROR - 2019-11-19 14:37:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:38:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:42:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 14:42:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:47:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 14:47:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 14:47:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 14:48:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:48:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:48:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 14:48:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 14:48:44 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 14:48:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 14:48:49 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 14:49:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 14:49:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 14:49:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:50:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 14:50:32 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-11-19 14:50:32'
WHERE "id" = 'build'
ERROR - 2019-11-19 14:50:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:51:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:51:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 14:52:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 14:57:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 15:00:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 15:00:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 15:02:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 15:03:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 15:03:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 15:19:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 15:22:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 15:39:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 15:44:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 15:44:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 15:47:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 15:48:28 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-19 15:48:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 15:48:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 15:48:53 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 15:49:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-19 15:50:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 15:52:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 15:58:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 15:59:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 15:59:38 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-19 16:01:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:01:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 16:01:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:11:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:12:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 16:12:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:12:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:14:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 16:14:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:18:38 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 419 and defined /var/www/html/rental/application/models/Spj_model.php 568
ERROR - 2019-11-19 16:18:38 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 419 and defined /var/www/html/rental/application/models/Spj_model.php 568
ERROR - 2019-11-19 16:18:38 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 419 and defined /var/www/html/rental/application/models/Spj_model.php 568
ERROR - 2019-11-19 16:18:38 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 419 and defined /var/www/html/rental/application/models/Spj_model.php 568
ERROR - 2019-11-19 16:18:38 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 569
ERROR - 2019-11-19 16:18:38 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 570
ERROR - 2019-11-19 16:18:38 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 581
ERROR - 2019-11-19 16:18:38 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 581
ERROR - 2019-11-19 16:18:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 10:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 16:18:38 --> Query error: ERROR:  syntax error at or near "and"
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
ERROR - 2019-11-19 16:21:00 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-19 16:21:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:23:37 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 419 and defined /var/www/html/rental/application/models/Spj_model.php 568
ERROR - 2019-11-19 16:23:37 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 419 and defined /var/www/html/rental/application/models/Spj_model.php 568
ERROR - 2019-11-19 16:23:37 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 419 and defined /var/www/html/rental/application/models/Spj_model.php 568
ERROR - 2019-11-19 16:23:37 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 419 and defined /var/www/html/rental/application/models/Spj_model.php 568
ERROR - 2019-11-19 16:23:37 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 569
ERROR - 2019-11-19 16:23:37 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 570
ERROR - 2019-11-19 16:23:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 581
ERROR - 2019-11-19 16:23:37 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 581
ERROR - 2019-11-19 16:23:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 10:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 16:23:37 --> Query error: ERROR:  syntax error at or near "and"
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
ERROR - 2019-11-19 16:23:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 16:24:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:24:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:26:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 16:26:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:28:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:28:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:29:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 16:29:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:30:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:30:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:33:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:33:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 16:34:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 16:34:07 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 16:35:21 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 16:35:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:37:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:51:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 16:51:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:51:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:55:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:55:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:56:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 16:56:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 16:57:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:01:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 17:01:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:14:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:18:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:18:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:23:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:23:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 17:23:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:25:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:30:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-19 17:30:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 17:30:58 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 17:38:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:39:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:40:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:41:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:42:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:42:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:43:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:46:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:49:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:50:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 17:54:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 17:54:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:01:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:06:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:08:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:09:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 18:09:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:17:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:19:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:20:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 18:20:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:21:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:21:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:22:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:23:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:23:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:24:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:26:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:30:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 18:30:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:32:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:37:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 18:54:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 19:04:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 19:06:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-19 19:06:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-19 19:08:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-19 19:08:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-19 19:10:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 19:20:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 19:22:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 19:32:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 19:34:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 19:38:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 19:42:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 19:57:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 19:58:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 19:59:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 19:59:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:17:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-19 20:17:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-19 20:28:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:32:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:33:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 20:33:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:35:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:36:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:39:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:40:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 20:40:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:45:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 20:45:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:46:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:48:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:48:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:50:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 20:50:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:54:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:55:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:55:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 20:55:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:55:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 20:55:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:56:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-19 20:56:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 20:58:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 20:58:32 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 20:58:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-19 20:58:38 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-19 21:01:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 21:13:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 21:20:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 21:55:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 22:03:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 22:51:27 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-19 22:51:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 23:38:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 23:43:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-19 23:53:38 --> 404 Page Not Found: Spj/build
