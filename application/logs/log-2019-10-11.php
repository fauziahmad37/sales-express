<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-10-11 01:06:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 01:14:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 02:36:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 04:42:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 06:34:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-11 06:34:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-11 06:40:08 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-11 08:03:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 08:13:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 08:13:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 08:13:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-11 08:13:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-11 08:13:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-11 08:13:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-11 08:14:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-11 08:14:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-11 08:14:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 08:15:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 08:16:18 --> 404 Page Not Found: Assets/css
ERROR - 2019-10-11 08:20:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 08:20:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-11 08:20:43 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-11 08:20:43 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-11 08:22:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-11 08:22:08 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-11 08:22:08 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-10-11 08:22:08 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-10-11 08:22:08 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-11 08:23:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 08:27:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 08:30:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 08:32:43 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-11 08:34:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-11 08:34:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 08:46:13 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-11 08:46:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 08:46:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 08:48:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 08:48:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 08:53:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-11 08:53:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-11 09:02:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 09:05:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 09:05:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 09:14:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 09:14:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 09:16:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-11 09:16:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-11 09:17:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 09:20:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 09:21:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 09:23:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 09:24:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 09:24:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 09:31:24 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-11 09:33:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 09:35:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 09:35:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 09:35:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-11 09:35:26 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-11 09:35:26 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-11 09:36:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 09:37:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 09:40:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 09:40:08 --> Severity: Notice --> Undefined index: faizal /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-10-11 09:40:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 09:43:29 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-11 09:44:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 10:06:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 10:09:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 10:14:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 10:16:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 10:17:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 10:17:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 10:17:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-11 10:17:13 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-11 10:17:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 10:17:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 10:17:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 10:19:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 10:24:08 --> 404 Page Not Found: Seragam/cetak
ERROR - 2019-10-11 10:24:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 10:27:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-11 10:27:53 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-11 10:28:37 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-11 10:29:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 10:35:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 10:35:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 10:36:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 10:38:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 10:40:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-11 10:40:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-11 10:40:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 10:49:08 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-11 10:49:29 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-11 10:58:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 11:00:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 11:01:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 11:02:10 --> Severity: Notice --> Undefined index: faizal /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-10-11 11:02:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 11:02:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 11:02:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 11:04:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 11:04:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 11:05:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 11:07:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 11:10:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 11:10:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 11:11:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 11:11:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 11:12:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 11:13:37 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj_tiara.php 35
ERROR - 2019-10-11 11:13:37 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj_tiara.php 35
ERROR - 2019-10-11 11:13:37 --> 404 Page Not Found: Report/build
ERROR - 2019-10-11 11:20:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 11:20:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 11:20:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 11:22:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 11:23:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 11:24:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 11:25:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 11:26:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 11:34:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 12:47:35 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-11 12:47:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 12:49:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 12:55:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 13:07:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 13:07:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 13:11:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 13:11:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 13:30:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 13:33:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-11 13:33:16 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-11 13:33:17 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-10-11 13:45:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:02:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:03:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 14:03:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-11 14:03:31 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-11 14:03:31 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-10-11 14:04:50 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-11 14:05:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:05:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:06:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 14:06:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:06:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:09:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:10:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 14:10:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:10:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 14:12:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:13:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:13:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:14:12 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-11 14:14:12 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-11 14:14:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:19:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:19:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:20:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 14:20:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:23:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:28:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:31:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:33:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 14:34:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:35:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:44:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:44:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:45:20 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-11 14:45:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 14:46:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:46:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 14:46:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:47:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:49:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:50:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:52:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:56:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 14:58:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:02:50 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-11 15:04:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 15:04:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:07:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:13:09 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-11 15:13:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:13:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:14:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 15:15:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 15:15:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:15:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:15:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-11 15:15:56 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-10-11 15:16:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:18:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:22:37 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 15:22:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 15:22:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:23:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:25:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:27:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 15:27:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:34:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:35:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:35:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:36:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:38:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:42:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:43:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:43:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:44:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 15:44:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:49:14 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-11 15:49:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-11 15:49:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:49:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:50:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:50:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:52:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:53:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:53:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:56:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:58:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 15:59:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:02:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:02:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:02:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:03:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 16:03:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-11 16:03:41 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-11 16:05:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 16:05:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-11 16:05:21 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-11 16:06:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:07:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:08:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:09:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:09:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:10:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:11:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:11:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:12:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:13:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:14:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:15:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:18:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:19:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:21:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 16:22:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-11 16:22:13 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-11 16:22:13 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-11 16:22:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 16:23:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-11 16:23:14 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-11 16:23:15 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-10-11 16:23:15 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-10-11 16:23:15 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-11 16:23:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:24:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:24:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:25:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:25:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:26:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 16:27:09 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-10-11 16:27:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-11 16:27:09 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-11 16:27:09 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-10-11 16:27:09 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-11 16:28:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 16:28:49 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-10-11 16:28:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-11 16:28:49 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-11 16:28:49 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-10-11 16:28:49 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-11 16:29:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:29:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-11 16:29:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-11 16:29:31 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-10-11 16:29:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:29:42 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-11 16:29:42 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-10-11 16:29:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:30:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:32:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:32:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-11 16:32:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-11 16:32:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:33:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:33:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 16:34:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:35:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:35:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-11 16:36:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:36:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:37:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:37:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:38:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:38:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:38:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:38:56 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:39:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:42:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:43:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:43:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:44:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:44:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:45:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:47:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:47:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:47:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:48:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 16:48:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:49:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:50:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:50:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:51:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:51:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:51:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:51:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:51:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:52:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:52:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:53:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:55:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:56:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:56:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:57:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:57:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 16:58:39 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-11 16:58:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-11 16:58:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 17:00:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 17:02:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 17:05:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 17:07:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 17:19:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 17:26:15 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-11 17:28:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 17:37:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 17:37:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 17:43:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 17:52:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 17:59:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 18:09:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 18:09:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 18:09:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 18:10:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-11 18:10:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-11 18:17:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 18:18:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 18:36:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 19:29:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 20:31:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 20:38:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 20:39:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 20:40:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 21:05:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 22:00:36 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-11 22:00:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-11 22:00:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-11 22:07:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 22:07:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-11 22:21:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-11 22:22:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 22:47:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-11 23:18:34 --> 404 Page Not Found: Spj/build
