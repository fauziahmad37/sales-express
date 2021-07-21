<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-02 00:06:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 00:06:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 00:17:15 --> Severity: Notice --> Undefined index: iman /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-12-02 00:17:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 01:27:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 01:38:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 01:38:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 01:43:47 --> Severity: Notice --> Undefined index: iman /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-12-02 01:43:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 05:24:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 07:48:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 07:55:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 08:00:13 --> 404 Page Not Found: Report/build
ERROR - 2019-12-02 08:00:34 --> 404 Page Not Found: Report/build
ERROR - 2019-12-02 08:02:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 08:08:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 08:09:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 08:19:00 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-02 08:19:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 08:20:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 08:21:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 08:21:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 08:29:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 08:39:48 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-02 08:39:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 08:44:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 08:44:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 08:44:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 08:50:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:01:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 09:02:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 09:02:05 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-02 09:05:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:06:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 09:07:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 09:07:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 09:07:15 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 09:07:18 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 09:07:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 09:07:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 09:07:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 09:07:27 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-02 09:14:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 09:31:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:31:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:32:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:34:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:38:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:39:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:44:17 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-02 09:47:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:48:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:52:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:53:11 --> 404 Page Not Found: Closing/build
ERROR - 2019-12-02 09:53:47 --> 404 Page Not Found: Closing/build
ERROR - 2019-12-02 09:54:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:54:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:56:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:56:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:56:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:57:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:57:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:57:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:58:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 09:59:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:00:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:01:09 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-02 10:03:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:04:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:04:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 10:04:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:06:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:12:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 10:12:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 10:12:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:12:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:13:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 10:13:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:13:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 10:13:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-12-02 10:16:53 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 10:17:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 10:17:07 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 10:17:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:17:33 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-02 10:17:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:17:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 10:17:50 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-12-02 10:18:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 10:18:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:18:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 10:18:15 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-12-02 10:18:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:19:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 10:19:22 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-12-02 10:19:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 10:20:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 10:20:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:23:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:25:00 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-02 10:28:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:34:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:35:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:36:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 10:36:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:36:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:39:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:44:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:47:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 10:48:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:48:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:49:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:49:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:50:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:56:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:57:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 10:57:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 11:05:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 11:13:33 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-02 11:20:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 11:21:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 11:26:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 11:28:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 11:28:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 11:28:21 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-02 11:38:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 11:38:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 11:44:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 11:44:24 --> 404 Page Not Found: Report/build
ERROR - 2019-12-02 11:44:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 11:45:34 --> 404 Page Not Found: Report/build
ERROR - 2019-12-02 11:45:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 11:47:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 11:49:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 11:49:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 11:50:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 11:51:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 11:51:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 12:01:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 12:02:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 12:05:56 --> The upload destination folder does not appear to be writable.
ERROR - 2019-12-02 12:05:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 12:06:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 12:09:15 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-02 12:09:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 12:09:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 12:10:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 12:11:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 12:12:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 12:15:43 --> 404 Page Not Found: Report/build
ERROR - 2019-12-02 12:16:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 12:26:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 12:26:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 12:26:32 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-02 12:26:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 12:26:32 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-02 12:26:43 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-12-02 12:29:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 12:29:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 12:29:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 12:29:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 12:33:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 12:35:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 12:43:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 12:45:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 12:49:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 12:49:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 12:49:24 --> Severity: Warning --> fsockopen(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-12-02 12:49:24 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (php_network_getaddresses: getaddrinfo failed: Name or service not known) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-12-02 13:00:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 13:02:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 13:03:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 13:03:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 13:06:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 13:10:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 13:13:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 13:15:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 13:15:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 13:19:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 13:19:55 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-02 13:19:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 13:33:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 13:34:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 13:35:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 13:36:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 13:37:12 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 13:37:12 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 13:37:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 13:41:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 13:41:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 13:45:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 13:47:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 13:49:18 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-02 13:49:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 13:49:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 13:49:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 13:50:04 --> Severity: Warning --> fsockopen(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-12-02 13:50:04 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (php_network_getaddresses: getaddrinfo failed: Name or service not known) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-12-02 14:03:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:05:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:12:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:16:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 14:16:34 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-02 14:17:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 14:17:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 14:22:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:24:02 --> The upload destination folder does not appear to be writable.
ERROR - 2019-12-02 14:24:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 14:24:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 14:24:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:25:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:25:50 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-02 14:26:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:27:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 14:27:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:28:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:28:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 14:30:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:33:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 14:35:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:38:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 14:38:22 --> 404 Page Not Found: Report/build
ERROR - 2019-12-02 14:39:12 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-02 14:39:22 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-02 14:42:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:43:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:43:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:45:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:45:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:47:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 14:47:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 14:47:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 14:47:30 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-02 14:47:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 14:47:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 14:48:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 14:48:10 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-02 14:49:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 14:49:08 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-02 14:49:37 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-02 14:51:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:52:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 14:52:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:55:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 14:55:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 14:55:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 14:59:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 15:00:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 15:02:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 15:02:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 15:06:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 15:13:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 15:21:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 15:26:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 15:28:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 15:32:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 15:32:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 15:33:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 15:36:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 15:37:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 15:38:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 15:41:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 15:42:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 15:42:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 15:42:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 15:44:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 15:45:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 15:45:34 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2019-12-02 15:45:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 15:45:50 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2019-12-02 15:46:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 15:46:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 15:46:13 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-02 15:46:13 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-02 15:48:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 15:48:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 15:48:45 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-12-02 15:48:54 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-02 15:48:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 15:48:54 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-02 15:49:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 15:49:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 15:49:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 15:49:59 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-02 15:49:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 15:49:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-02 15:52:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 15:52:44 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-02 15:52:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 15:52:44 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-02 16:07:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 16:09:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 16:09:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 16:10:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 16:13:30 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-02 16:14:02 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-02 16:15:42 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-02 16:17:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 16:18:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 16:20:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 16:21:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 16:21:40 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2019-12-02 16:21:40 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-02 16:21:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 16:21:52 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2019-12-02 16:21:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 16:32:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 16:32:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 16:32:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 16:34:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 16:34:29 --> 404 Page Not Found: Report/build
ERROR - 2019-12-02 16:34:29 --> 404 Page Not Found: Report/build
ERROR - 2019-12-02 16:34:29 --> Severity: Notice --> Undefined index: hengki_firmansyah /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-12-02 16:34:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 16:34:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 16:34:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 16:35:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 16:35:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 16:36:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 16:36:36 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-02 16:36:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 16:36:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-02 16:36:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 16:37:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 16:37:29 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-02 16:39:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 16:39:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 16:39:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 16:40:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 16:41:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 16:47:33 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 16:47:33 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 16:48:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 16:48:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 16:50:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 16:54:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:18:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:19:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 17:19:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:19:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:20:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:32:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:32:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:32:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 17:33:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:35:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:35:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:35:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:36:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 17:36:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:38:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:38:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:39:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 17:39:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:39:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:40:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:42:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:43:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 17:43:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:44:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 17:44:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 17:44:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:49:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 17:53:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 17:53:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:53:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-02 17:53:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:54:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:54:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 17:55:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 17:55:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:58:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:59:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 17:59:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 17:59:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 17:59:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 18:00:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 18:00:37 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-02 18:01:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 18:01:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 18:02:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 18:03:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 18:04:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 18:07:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 18:07:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 18:18:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 18:18:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 18:19:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 18:19:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 18:23:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 18:24:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 18:27:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 18:27:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 18:32:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 18:36:42 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-02 18:44:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 18:44:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 18:44:13 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-02 18:56:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 18:57:12 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-02 19:02:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 19:10:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 19:11:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 19:14:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 19:16:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 19:16:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 19:19:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 19:19:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 19:20:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 19:24:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 19:24:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 19:24:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 19:24:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 19:29:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 19:29:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 19:34:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 19:38:07 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 581
ERROR - 2019-12-02 19:38:07 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 584
ERROR - 2019-12-02 19:38:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 7:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-02 19:38:07 --> Query error: ERROR:  syntax error at or near ";"
LINE 7:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from 
			trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-12-02 19:48:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 19:52:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 19:52:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 19:56:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 19:57:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 19:57:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:15:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 20:15:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 20:16:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:17:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 20:17:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 20:18:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:23:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:29:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:30:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:31:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:32:24 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-02 20:35:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:40:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:42:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:45:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:45:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:46:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:47:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:48:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:51:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:51:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:52:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:53:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 20:53:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 20:55:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 20:55:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 21:00:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-02 21:01:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-02 21:03:32 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-02 21:05:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 21:17:18 --> 404 Page Not Found: Closing/build
ERROR - 2019-12-02 21:47:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-02 22:36:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-02 22:36:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-02 23:36:16 --> 404 Page Not Found: Spj/build
