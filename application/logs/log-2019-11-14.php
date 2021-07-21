<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-14 00:36:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-14 05:29:21 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-14 05:29:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 07:11:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 07:37:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 07:58:20 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-14 07:58:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 08:18:29 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-14 08:19:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 08:20:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 08:23:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 08:27:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 08:28:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 08:28:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 08:28:46 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-14 08:30:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 08:33:27 --> Severity: Notice --> Undefined index: very /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-11-14 08:35:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 08:36:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 08:36:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 08:38:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 08:38:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 08:39:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 08:39:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 08:48:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 08:49:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 08:49:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:01:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:02:29 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-14 09:02:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:04:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:07:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:08:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 09:08:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:09:12 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-14 09:09:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 09:12:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:13:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:18:33 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-14 09:19:04 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-14 09:21:55 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-14 09:31:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:31:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 09:31:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:36:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:37:03 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-14 09:37:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 09:37:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 09:37:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:38:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 09:38:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-14 09:38:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-14 09:38:58 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-11-14 09:39:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 09:39:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-14 09:39:19 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-14 09:39:22 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-11-14 09:39:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:39:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-14 09:39:30 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-14 09:48:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 09:50:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 09:51:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:51:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:52:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-14 09:52:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-14 09:52:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:52:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:53:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-14 09:53:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-14 09:53:42 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 09:53:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:56:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 09:57:46 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-14 09:57:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 10:09:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 10:09:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-14 10:09:49 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-14 10:10:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 10:10:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-14 10:10:28 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-14 10:12:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-14 10:12:40 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-14 10:14:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-14 10:14:42 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-14 10:15:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-14 10:15:06 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-14 10:15:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 10:22:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 10:22:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 10:25:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 10:27:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 10:27:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 10:28:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 10:28:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 10:28:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 10:28:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-14 10:28:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-14 10:29:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 10:29:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 10:32:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 10:35:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 10:36:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 10:36:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 10:38:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 10:43:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 10:52:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 11:08:14 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-14 11:08:14 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-14 11:16:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 11:25:10 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-14 12:05:26 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-14 12:05:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 12:10:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 12:28:28 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-14 12:29:22 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-14 12:33:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 12:36:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 13:19:12 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-14 13:19:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-14 13:19:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-14 13:19:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 13:19:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-14 13:19:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-14 13:54:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 13:56:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 13:58:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 13:58:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 13:59:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:00:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:01:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:06:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 14:06:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:07:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-14 14:07:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-14 14:08:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:10:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-14 14:10:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-14 14:11:11 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 14:11:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:11:24 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-14 14:11:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:12:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 14:12:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:12:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:14:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:14:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:14:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:24:04 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-14 14:24:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:25:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:25:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:26:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 14:26:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:29:16 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-14 14:29:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:30:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:30:37 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 14:31:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 14:31:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:36:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:37:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 14:37:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:40:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:41:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:45:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:47:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:48:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 14:48:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:48:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:48:50 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-14 14:49:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 14:53:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:55:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:55:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:55:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 14:56:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:56:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 14:59:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:11:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:12:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:17:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:18:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:19:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:19:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 15:19:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:21:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:26:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 15:26:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:29:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:29:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:30:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:32:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:34:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:35:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:40:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:41:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:41:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 15:42:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:43:11 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 15:43:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:43:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-14 15:43:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-14 15:44:27 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-14 15:44:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-14 15:44:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-14 15:50:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 15:51:06 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-11-14 15:51:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-14 15:51:12 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-14 15:53:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-14 15:53:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-14 15:53:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-14 15:53:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-14 15:59:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 16:00:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:02:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:02:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:03:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 16:03:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:04:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 16:04:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:05:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 16:05:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:05:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:08:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-14 16:11:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:12:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 16:12:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:12:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-14 16:12:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-14 16:12:26 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-14 16:12:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-14 16:12:26 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-14 16:12:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-14 16:12:35 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-11-14 16:12:35'
WHERE "id" = 'build'
ERROR - 2019-11-14 16:20:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:26:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:26:24 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-14 16:27:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 16:27:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:29:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:30:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 16:30:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:30:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:31:58 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 575
ERROR - 2019-11-14 16:31:58 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 575
ERROR - 2019-11-14 16:31:58 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 575
ERROR - 2019-11-14 16:31:58 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 575
ERROR - 2019-11-14 16:31:58 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 576
ERROR - 2019-11-14 16:31:58 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 577
ERROR - 2019-11-14 16:31:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 588
ERROR - 2019-11-14 16:31:58 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 588
ERROR - 2019-11-14 16:31:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 10:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-14 16:31:58 --> Query error: ERROR:  syntax error at or near "and"
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
ERROR - 2019-11-14 16:32:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:34:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:35:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 16:35:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:35:34 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-14 16:35:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:36:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 16:36:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:36:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:36:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:37:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:37:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:37:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 16:37:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:40:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:40:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:42:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 16:42:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:43:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:46:18 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-14 16:46:30 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-14 16:47:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:48:26 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-14 16:48:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:48:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-14 16:49:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:50:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 16:51:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 16:51:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:51:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 16:51:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:57:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-14 16:57:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:57:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 16:58:42 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-14 16:58:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 17:07:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-14 17:07:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-14 17:07:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 17:14:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-14 17:14:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-14 17:21:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 17:21:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 17:25:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 17:47:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 17:48:47 --> Severity: Notice --> Undefined index: hengki_firmansyah /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-11-14 17:49:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 17:49:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 17:49:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 17:56:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-14 17:56:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-14 17:56:33 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-14 17:56:33 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-14 18:06:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 18:15:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 18:22:25 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-14 18:22:33 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-14 18:31:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 18:31:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 19:29:16 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-14 20:26:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-14 20:56:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-14 20:56:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-14 20:56:30 --> 404 Page Not Found: Spj/build
