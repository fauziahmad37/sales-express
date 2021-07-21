<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-10-04 00:35:14 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-04 00:35:14 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-04 00:35:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 07:51:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 07:51:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 07:51:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 07:53:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 08:01:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 08:11:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 08:11:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 08:15:54 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-04 08:16:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 08:19:16 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-10-04 08:19:16 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-10-04 08:19:16 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-10-04 08:19:16 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-10-04 08:19:16 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-10-04 08:19:16 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-10-04 08:19:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 08:19:17 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 08:21:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 08:23:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 08:24:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 08:29:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 08:32:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 08:35:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 08:38:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 08:39:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 08:39:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 08:42:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 08:58:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 09:05:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 09:05:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:06:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:06:38 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:07:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:07:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 09:07:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:07:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:07:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 09:07:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 09:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:07:54 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:08:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:08:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:08:47 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:09:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:09:38 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-10-04 09:09:38 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-10-04 09:09:38 --> 404 Page Not Found: Report/build
ERROR - 2019-10-04 09:10:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:10:02 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:10:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:10:30 --> 404 Page Not Found: Report/setoran
ERROR - 2019-10-04 09:10:32 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-10-04 09:10:32 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-10-04 09:10:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:10:35 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:10:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:11:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:11:11 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:11:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:11:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:11:49 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:12:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:12:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:12:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:12:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:12:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:12:55 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:13:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:13:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:13:40 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:14:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:14:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:14:11 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:14:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:14:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:14:40 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:15:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:15:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:15:16 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:15:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:15:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:15:53 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:16:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:16:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:16:35 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:17:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:17:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:17:50 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:17:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 09:18:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:18:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:18:28 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:18:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:19:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 09:19:03 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 09:22:28 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-04 09:22:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 09:27:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 09:28:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-04 09:29:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:32:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 09:42:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 09:42:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 09:43:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 09:45:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 09:48:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 09:49:56 --> 404 Page Not Found: Report/setoran
ERROR - 2019-10-04 09:50:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-04 09:50:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-04 09:52:46 --> 404 Page Not Found: Report/setoran
ERROR - 2019-10-04 09:52:58 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-10-04 09:52:58 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-10-04 09:52:58 --> 404 Page Not Found: Report/build
ERROR - 2019-10-04 09:53:18 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-10-04 09:53:18 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-10-04 09:53:18 --> 404 Page Not Found: Report/build
ERROR - 2019-10-04 09:53:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-04 09:53:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-04 10:01:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 10:04:50 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-04 10:05:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 10:07:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 10:12:25 --> Severity: Notice --> Undefined variable: id_status_invoice /var/www/html/rental/application/controllers/Jaminan.php 27
ERROR - 2019-10-04 10:12:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;pool_id&quot; is ambiguous
LINE 7: ... 00:00:00' and created &lt;='2019-10-31 23:59:59' and pool_id=1
                                                              ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 10:12:25 --> Query error: ERROR:  column reference "pool_id" is ambiguous
LINE 7: ... 00:00:00' and created <='2019-10-31 23:59:59' and pool_id=1
                                                              ^ - Invalid query: select a.id, a.doc_number, a.amount,created, a.status, 
			b.kip_number,b.name as name_driver, 
			c.name as name_pool 
			from ap_jaminan a 
			left join master_driver b on (a.driver_id = b.id)
			left join master_pool c on (a.pool_id = c.id)
			where created >='2019-10-01 00:00:00' and created <='2019-10-31 23:59:59' and pool_id=1
			order by a.created desc;
ERROR - 2019-10-04 10:12:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;pool_id&quot; is ambiguous
LINE 7: ... 00:00:00' and created &lt;='2019-10-31 23:59:59' and pool_id=1
                                                              ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 10:12:37 --> Query error: ERROR:  column reference "pool_id" is ambiguous
LINE 7: ... 00:00:00' and created <='2019-10-31 23:59:59' and pool_id=1
                                                              ^ - Invalid query: select a.id, a.doc_number, a.amount,created, a.status, 
			b.kip_number,b.name as name_driver, 
			c.name as name_pool 
			from ap_jaminan a 
			left join master_driver b on (a.driver_id = b.id)
			left join master_pool c on (a.pool_id = c.id)
			where created >='2019-10-01 00:00:00' and created <='2019-10-31 23:59:59' and pool_id=1
			order by a.created desc;
ERROR - 2019-10-04 10:13:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-04 10:18:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 10:18:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 10:18:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 10:21:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 10:22:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 10:29:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 10:29:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 10:30:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 10:33:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 10:34:05 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-10-04 10:34:05 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-10-04 10:34:05 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-10-04 10:34:05 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-10-04 10:34:05 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-10-04 10:34:05 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-10-04 10:34:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 10:34:06 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 10:36:04 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Next.php 40
ERROR - 2019-10-04 10:36:04 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Next.php 43
ERROR - 2019-10-04 10:36:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 7:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 10:36:04 --> Query error: ERROR:  syntax error at or near ";"
LINE 7:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from 
			trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-10-04 10:36:04 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Next.php 40
ERROR - 2019-10-04 10:36:04 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Next.php 43
ERROR - 2019-10-04 10:36:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 7:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 10:36:04 --> Query error: ERROR:  syntax error at or near ";"
LINE 7:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from 
			trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-10-04 10:36:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 10:36:24 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Next.php 42
ERROR - 2019-10-04 10:36:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 7:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 10:36:24 --> Query error: ERROR:  syntax error at or near ";"
LINE 7:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from 
			trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-10-04 10:36:24 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Next.php 42
ERROR - 2019-10-04 10:36:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 7:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 10:36:24 --> Query error: ERROR:  syntax error at or near ";"
LINE 7:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from 
			trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-10-04 10:38:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 10:41:07 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-04 10:41:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 10:42:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-04 10:45:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 10:49:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 10:49:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 10:51:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 10:53:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 10:53:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 10:54:50 --> The upload destination folder does not appear to be writable.
ERROR - 2019-10-04 10:54:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 10:54:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 10:57:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 11:06:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 11:06:59 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-10-04 11:06:59 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-10-04 11:06:59 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-10-04 11:06:59 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-10-04 11:06:59 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-10-04 11:06:59 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-10-04 11:06:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 11:06:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 11:08:44 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-10-04 11:08:44 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-10-04 11:08:44 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-10-04 11:08:44 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-10-04 11:08:44 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-10-04 11:08:44 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-10-04 11:08:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 11:08:44 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 11:09:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 11:10:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 11:10:22 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 11:10:22 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-04 11:10:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 11:11:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 11:12:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 11:12:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 11:12:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 11:12:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 11:13:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 11:13:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 11:14:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 11:15:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 11:15:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 11:15:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-04 11:15:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-04 11:15:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 11:16:12 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 197
ERROR - 2019-10-04 11:17:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 11:17:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 11:18:30 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-04 11:22:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 11:26:49 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-04 11:32:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-04 11:32:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-04 11:33:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 12:29:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 12:29:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 12:29:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-10-04 12:30:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 12:54:12 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-04 12:54:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 12:55:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-04 12:55:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-04 13:17:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 13:27:28 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-04 13:54:17 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-04 13:54:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 13:54:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 13:55:07 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-04 13:55:08 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-04 13:56:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 13:56:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 13:59:54 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-04 14:07:51 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-04 14:08:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:08:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:09:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:09:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:09:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:09:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:10:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:11:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:11:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:16:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 14:16:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:17:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 14:19:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 14:20:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 14:20:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:26:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:28:04 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-04 14:29:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:30:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 14:30:35 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-10-04 14:30:35 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-10-04 14:30:35 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-10-04 14:30:35 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-10-04 14:30:35 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-10-04 14:30:35 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-10-04 14:30:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 14:30:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 14:34:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:37:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:37:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 14:38:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:40:53 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-04 14:42:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-04 14:42:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-04 14:45:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:48:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 14:49:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 14:50:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:51:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-04 14:51:12 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-04 14:53:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 14:55:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 14:56:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 15:00:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 15:00:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 15:02:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 15:04:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 15:06:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 15:08:44 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-10-04 15:08:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-04 15:08:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 15:08:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-04 15:11:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 15:11:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 15:15:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 15:18:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-04 15:18:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-04 15:18:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 15:21:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 15:22:09 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-04 15:24:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 15:24:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 15:24:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 15:24:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 15:24:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 15:25:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 15:25:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 15:28:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 15:29:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 15:30:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-04 15:32:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 15:33:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 15:52:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 15:56:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 15:58:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:02:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 16:02:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:02:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 16:05:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:06:54 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-04 16:07:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:07:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 16:07:18 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-04 16:07:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:08:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-04 16:09:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:10:44 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-04 16:10:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:11:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:12:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:15:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:17:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:17:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:19:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:19:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:20:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:20:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:21:21 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 16:21:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 16:21:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:21:31 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-10-04 16:21:31 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-10-04 16:21:31 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-10-04 16:21:31 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-10-04 16:21:31 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-10-04 16:21:31 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-10-04 16:21:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-04 16:21:31 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-04 16:21:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 16:22:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:23:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 16:23:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:23:32 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-04 16:24:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:24:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:25:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:26:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 16:26:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:26:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 16:26:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:29:18 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-04 16:30:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 16:30:42 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 16:31:08 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-04 16:31:08 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-04 16:32:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:32:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 16:35:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 16:35:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:35:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:37:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 16:38:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 16:40:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:47:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:47:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:49:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:51:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 16:52:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 16:52:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:55:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:56:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:56:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 16:56:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 16:56:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 16:57:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-04 17:07:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 17:07:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 17:09:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 17:17:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 17:18:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-04 17:18:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-04 17:20:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-04 17:20:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-04 17:20:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 17:34:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 17:34:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 17:34:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 17:56:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 18:23:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 19:34:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 20:15:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 20:17:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 20:35:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-04 20:35:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 22:38:16 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-04 22:38:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 22:48:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 22:49:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 23:24:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 23:25:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 23:39:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 23:40:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-04 23:52:46 --> 404 Page Not Found: Spj/build
