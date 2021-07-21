<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-25 00:02:15 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-25 00:41:27 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 00:41:27 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 00:41:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 00:41:43 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 00:41:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 06:05:14 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-25 06:05:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 06:51:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 06:51:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 07:41:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 07:41:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 07:52:33 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 07:52:33 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 07:59:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 07:59:49 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-25 07:59:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 07:59:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 08:06:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 08:14:15 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-25 08:14:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 08:15:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 08:16:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 08:17:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:17:26 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 08:18:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 08:20:06 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 08:20:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 08:21:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 08:23:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 08:23:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 08:24:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 08:25:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 08:26:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:26:09 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:27:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:27:00 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:27:04 --> Severity: Notice --> Undefined index: dede_mulyadi /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-25 08:27:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:27:28 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:29:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:29:07 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:29:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:33:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:33:16 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:33:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 08:33:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:33:46 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:34:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:34:03 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:34:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:34:22 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:34:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 08:34:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:34:38 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:34:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:34:56 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:35:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 08:36:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:36:10 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, 
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-25 08:38:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:38:49 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:38:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:38:57 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:39:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:39:55 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:40:09 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-25 08:40:09 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-25 08:40:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:40:09 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:40:09 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-25 08:44:07 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-25 08:44:13 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-25 08:44:21 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-25 08:45:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:45:54 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:47:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 08:49:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:49:22 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:49:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:49:35 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:49:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:49:48 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:50:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:50:11 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:50:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:50:24 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:50:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:50:37 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:51:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 08:51:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 08:52:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 08:53:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 08:53:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:53:40 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:53:40 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-25 08:53:40 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-25 08:53:43 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-25 08:53:47 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-25 08:54:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:54:19 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:54:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:54:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:54:45 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-25 08:54:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:54:45 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:54:45 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-25 08:54:45 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-25 08:54:45 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-25 08:54:48 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-25 08:55:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:55:05 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:55:05 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-25 08:55:08 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-25 08:55:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:55:23 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:55:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 08:55:43 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 08:56:03 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-25 08:57:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 08:58:19 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-25 08:58:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 09:00:58 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-25 09:04:08 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 09:04:08 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 09:08:22 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 192
ERROR - 2019-09-25 09:08:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 09:15:21 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-25 09:26:19 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-25 09:29:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 09:29:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 09:40:13 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-25 09:41:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 09:41:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 09:43:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 09:47:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 09:49:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 09:49:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 09:49:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 09:50:18 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 09:50:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 09:50:22 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 09:50:53 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 09:53:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 09:57:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 09:58:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 09:58:01 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 10:01:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 10:03:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 10:03:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 10:04:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 10:05:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 10:05:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 10:05:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 10:05:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 10:05:39 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 10:06:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 10:06:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 10:06:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 10:06:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 10:07:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 10:10:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 10:10:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 10:14:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 10:16:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 10:16:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 10:16:27 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, 
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-25 10:22:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 10:22:21 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, 
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-25 10:22:54 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 192
ERROR - 2019-09-25 10:24:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 10:25:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 10:26:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 10:26:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 10:26:18 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 10:26:19 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-25 10:26:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 10:32:15 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 10:32:18 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-09-25 10:32:18 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 10:33:49 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-09-25 10:33:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 10:33:51 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-09-25 10:33:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 10:34:06 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-09-25 10:34:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 10:36:27 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-09-25 10:36:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 10:39:23 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-09-25 10:39:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 10:39:27 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-09-25 10:39:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 10:40:39 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-09-25 10:40:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 10:40:44 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-09-25 10:40:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 10:40:56 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-09-25 10:40:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 10:41:21 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-09-25 10:41:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 10:42:17 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/controllers/Vehicle.php 20
ERROR - 2019-09-25 10:42:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 10:42:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 10:42:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 10:44:09 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-25 10:44:09 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-25 10:44:09 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 10:44:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 10:45:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 10:45:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 10:45:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 10:45:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 10:46:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 10:46:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 10:47:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 10:47:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 10:47:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 10:48:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 10:49:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 10:49:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 10:51:27 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-25 10:56:00 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-25 10:56:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:00:13 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 11:00:18 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 11:00:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 11:00:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:00:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:00:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:01:10 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 11:01:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:01:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:05:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 11:05:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:07:44 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-25 11:08:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 11:08:01 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 11:10:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:13:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:13:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:22:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:24:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:25:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:25:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 11:25:31 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 11:25:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:30:24 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 11:31:14 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 11:32:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:32:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:32:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:32:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 11:32:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:33:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 11:33:05 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 11:33:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 11:33:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 11:34:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:34:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:34:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:34:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 11:34:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 11:35:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:35:19 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 11:35:41 --> Severity: Notice --> Undefined index: hadi_sucipto /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-25 11:35:49 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 11:35:49 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 11:40:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:40:53 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 11:41:12 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 11:41:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:41:34 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:27 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:28 --> Severity: Notice --> Undefined index: created_dt /var/www/html/rental/application/views/driver/list_driver.php 81
ERROR - 2019-09-25 11:42:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:43:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:44:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;created_dt&quot; is ambiguous
LINE 3:    e.sim_number, c,created_dt
                           ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 11:44:51 --> Query error: ERROR:  column reference "created_dt" is ambiguous
LINE 3:    e.sim_number, c,created_dt
                           ^ - Invalid query: select a.id, a.kip_number, a.name, a.status, b.name as pool_name, c.phone, c.emergency_number, 
			c.bank_account_number, c.email, d.ktp_number, c.bank, f.amount_akhir,
			e.sim_number, c,created_dt
			from master_driver a 
			left join master_pool b on(b.id=a.pool_id)
			left join driver_registration c on(a.driver_registration_id=c.id)
			left join master_ktp d on(d.id=c.ktp_id)
			left join master_sim e on(e.id=c.sim_id)
			left join ap_jaminan f on(f.id=a.ap_jaminan_id)
			where a.status in('Active','Inactive') order by a.id desc;
ERROR - 2019-09-25 11:45:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:48:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:49:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:49:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:51:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:52:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 11:52:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:52:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:53:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:54:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 11:55:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:55:20 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 11:55:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 11:56:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 12:08:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 12:09:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 12:21:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 12:37:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 12:40:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 12:43:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 12:43:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 12:44:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 12:44:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 12:48:00 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 12:54:14 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 12:55:06 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 12:55:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 12:55:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:07 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:08 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/report/report_cashback.php 107
ERROR - 2019-09-25 12:58:09 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:29 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 101
ERROR - 2019-09-25 12:58:30 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 108
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:13 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:14 --> Severity: Notice --> Undefined index: created /var/www/html/rental/application/views/report/report_cashback.php 106
ERROR - 2019-09-25 12:59:50 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-25 12:59:52 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:00:14 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:00:27 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-25 13:00:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 13:00:37 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 13:00:42 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:00:53 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:01:08 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:01:35 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:01:43 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:01:49 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:01:56 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:02:34 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-25 13:02:39 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-25 13:02:39 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-25 13:02:40 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:02:45 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:02:53 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:02:55 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-25 13:02:58 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-25 13:02:58 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-25 13:03:12 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:03:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 13:03:32 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:03:40 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:03:45 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:03:50 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-25 13:03:54 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:04:02 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:06:09 --> 404 Page Not Found: Report/cashback
ERROR - 2019-09-25 13:06:09 --> 404 Page Not Found: Report/cashback
ERROR - 2019-09-25 13:06:15 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:06:21 --> 404 Page Not Found: Report/report_spj_tiara
ERROR - 2019-09-25 13:06:21 --> 404 Page Not Found: Report/report_spj_tiara
ERROR - 2019-09-25 13:07:16 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:07:17 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:09:03 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 13:09:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 13:10:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 13:10:25 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:10:27 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:10:58 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:11:00 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:11:07 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:11:53 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:11:56 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:11:59 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:12:02 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:12:12 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:12:30 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:13:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 13:13:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 13:14:08 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 13:14:08 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 13:14:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 13:15:16 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:16:59 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:20:35 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:21:21 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:21:23 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:21:25 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:21:28 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:21:30 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:21:45 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 13:22:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 13:22:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 13:22:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 13:30:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 13:36:13 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 13:37:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 13:38:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 13:38:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 13:39:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 13:40:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 13:43:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 13:48:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 13:51:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 13:58:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 13:58:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 14:01:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:01:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 14:01:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:01:57 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 14:02:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:03:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:03:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:05:18 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 14:06:21 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 14:06:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:07:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:08:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 14:08:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:08:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:10:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:10:56 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 14:11:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 14:11:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 14:11:22 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 14:12:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:13:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 14:13:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:15:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:20:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 14:20:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 14:24:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:26:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:35:54 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 14:36:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:36:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 14:36:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 14:36:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:37:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:37:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:37:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:38:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 14:38:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:38:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:38:52 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 14:38:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 14:39:21 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 14:39:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:39:34 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 14:39:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:40:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:40:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 14:40:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:40:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:40:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:40:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:40:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:41:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 14:41:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 14:41:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 14:41:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:41:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 14:41:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 14:42:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 14:42:04 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 14:42:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 14:42:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 14:42:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:42:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:43:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 14:43:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:44:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 14:44:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:44:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 14:47:20 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 14:47:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 14:47:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 14:47:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 14:47:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 14:47:34 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, 
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-25 14:48:01 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 14:48:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 14:48:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:49:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:49:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:50:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:52:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:53:43 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 14:54:15 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 14:55:02 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 14:55:17 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 14:55:47 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-25 14:55:54 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-25 14:56:36 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 14:56:39 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 14:56:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:56:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:57:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:57:59 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-25 14:58:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:58:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;jam_mulai_denda&quot;, &quot;total_tagihan&quot;) VALUES ('69', '', '5', '...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 14:58:48 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."jam_mulai_denda", "total_tagihan") VALUES ('69', '', '5', '...
                                                             ^ - Invalid query: INSERT INTO "trx_spj" ("driver_id", "car_id", "pool_id", "created", "creator_id", "doc_number", "keterangan", "modified", "status", "tipe_rental", "tanggal_spj", "tagihan_wajib", "denda_perjam", "jam_mulai_denda", "total_tagihan") VALUES ('69', '', '5', '2019-09-25 14:58:48', '40', 'SPJ-TIARA/BCG/20190925/609', 'Create SPJ by Pool', '2019-09-25 14:58:48', 'Active', '24 Jam', '2019-09-25', 650000, 50000, '2019-09-26 14:58:48', 0)
ERROR - 2019-09-25 14:58:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 14:58:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:59:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 14:59:57 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 15:00:48 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 15:00:58 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 15:01:42 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 15:02:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:02:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 15:02:24 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 15:02:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 15:02:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:03:46 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 15:04:35 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 15:04:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 15:04:59 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 15:05:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 15:05:16 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 15:05:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:06:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 15:06:11 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 15:06:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:07:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:07:05 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 15:07:12 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 15:07:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 15:07:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:07:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:07:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:08:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:09:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 15:09:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:10:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 15:10:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:10:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:10:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 15:10:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 15:11:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:11:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:12:28 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 15:12:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 15:13:25 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 15:14:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:19:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:25:24 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 15:26:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:26:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 15:26:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:28:22 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-09-25 15:28:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 15:28:30 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 15:32:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:32:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 15:32:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:33:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:37:08 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 15:37:53 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 15:37:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 15:37:59 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 15:37:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 15:37:59 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-25 15:38:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 15:38:01 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-25 15:38:01'
WHERE "id" = 'build'
ERROR - 2019-09-25 15:38:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:41:10 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-25 15:41:14 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 15:41:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:42:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:44:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:48:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 15:48:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 15:48:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 15:49:10 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 15:49:10 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 15:49:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:50:02 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 15:50:03 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-25 15:50:14 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 15:50:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 15:50:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:52:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:52:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:56:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:56:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 15:57:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 15:59:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:02:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:02:31 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 16:02:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:03:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:04:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:04:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:06:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:07:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 16:07:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:08:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:10:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:11:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:13:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 16:13:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 16:15:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:15:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:17:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:17:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:17:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 16:17:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:21:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:24:31 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 16:25:28 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-25 16:25:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-25 16:26:14 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 16:26:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:26:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:26:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:27:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:28:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 16:29:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 16:29:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 16:29:20 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 16:31:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:32:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 16:32:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 16:34:06 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 129
ERROR - 2019-09-25 16:34:06 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 148
ERROR - 2019-09-25 16:34:06 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 167
ERROR - 2019-09-25 16:34:06 --> Severity: Notice --> Undefined variable: arrPool /var/www/html/rental/application/views/driver/driver.php 187
ERROR - 2019-09-25 16:34:06 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 207
ERROR - 2019-09-25 16:34:06 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-25 16:34:06 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 245
ERROR - 2019-09-25 16:34:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 16:34:06 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 16:35:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:35:16 --> Severity: Warning --> fsockopen(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-25 16:35:16 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (php_network_getaddresses: getaddrinfo failed: Name or service not known) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-25 16:35:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:36:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:36:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 16:36:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:36:32 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 129
ERROR - 2019-09-25 16:36:32 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 148
ERROR - 2019-09-25 16:36:32 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 167
ERROR - 2019-09-25 16:36:32 --> Severity: Notice --> Undefined variable: arrPool /var/www/html/rental/application/views/driver/driver.php 187
ERROR - 2019-09-25 16:36:32 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 207
ERROR - 2019-09-25 16:36:32 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-25 16:36:32 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 245
ERROR - 2019-09-25 16:36:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 16:36:32 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 16:36:57 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 129
ERROR - 2019-09-25 16:36:57 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 148
ERROR - 2019-09-25 16:36:57 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 167
ERROR - 2019-09-25 16:36:57 --> Severity: Notice --> Undefined variable: arrPool /var/www/html/rental/application/views/driver/driver.php 187
ERROR - 2019-09-25 16:36:57 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 207
ERROR - 2019-09-25 16:36:57 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-25 16:36:57 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 245
ERROR - 2019-09-25 16:36:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 16:36:57 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 16:38:06 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 129
ERROR - 2019-09-25 16:38:06 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 148
ERROR - 2019-09-25 16:38:06 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 167
ERROR - 2019-09-25 16:38:06 --> Severity: Notice --> Undefined variable: arrPool /var/www/html/rental/application/views/driver/driver.php 187
ERROR - 2019-09-25 16:38:06 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 207
ERROR - 2019-09-25 16:38:06 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-25 16:38:06 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 245
ERROR - 2019-09-25 16:38:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 16:38:07 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 16:38:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:38:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:39:32 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 129
ERROR - 2019-09-25 16:39:32 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 148
ERROR - 2019-09-25 16:39:32 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 167
ERROR - 2019-09-25 16:39:32 --> Severity: Notice --> Undefined variable: arrPool /var/www/html/rental/application/views/driver/driver.php 187
ERROR - 2019-09-25 16:39:32 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 207
ERROR - 2019-09-25 16:39:32 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-25 16:39:32 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 245
ERROR - 2019-09-25 16:39:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 16:39:33 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 16:40:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 16:40:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:40:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 16:40:58 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 129
ERROR - 2019-09-25 16:40:58 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 148
ERROR - 2019-09-25 16:40:58 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 167
ERROR - 2019-09-25 16:40:58 --> Severity: Notice --> Undefined variable: arrPool /var/www/html/rental/application/views/driver/driver.php 187
ERROR - 2019-09-25 16:40:58 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 207
ERROR - 2019-09-25 16:40:58 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-25 16:40:58 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 245
ERROR - 2019-09-25 16:40:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 16:40:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 16:42:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 16:42:12 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 129
ERROR - 2019-09-25 16:42:12 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 148
ERROR - 2019-09-25 16:42:12 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 167
ERROR - 2019-09-25 16:42:12 --> Severity: Notice --> Undefined variable: arrPool /var/www/html/rental/application/views/driver/driver.php 187
ERROR - 2019-09-25 16:42:12 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 207
ERROR - 2019-09-25 16:42:12 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-25 16:42:12 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 245
ERROR - 2019-09-25 16:42:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 16:42:12 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 16:43:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:44:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:44:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 16:44:42 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 129
ERROR - 2019-09-25 16:44:42 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 148
ERROR - 2019-09-25 16:44:42 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 167
ERROR - 2019-09-25 16:44:42 --> Severity: Notice --> Undefined variable: arrPool /var/www/html/rental/application/views/driver/driver.php 187
ERROR - 2019-09-25 16:44:42 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 207
ERROR - 2019-09-25 16:44:42 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-25 16:44:42 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 245
ERROR - 2019-09-25 16:44:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 16:44:42 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 16:44:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 16:45:08 --> Severity: Notice --> Undefined variable: arrPool /var/www/html/rental/application/views/driver/driver.php 128
ERROR - 2019-09-25 16:45:08 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 151
ERROR - 2019-09-25 16:45:08 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 170
ERROR - 2019-09-25 16:45:08 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 189
ERROR - 2019-09-25 16:45:08 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 210
ERROR - 2019-09-25 16:45:08 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 229
ERROR - 2019-09-25 16:45:08 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 248
ERROR - 2019-09-25 16:45:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 16:45:08 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 16:45:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:45:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:45:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:46:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 16:46:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:46:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:47:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:49:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:50:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 16:50:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:50:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:51:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 16:51:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 16:51:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:51:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:51:56 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-25 16:53:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 16:53:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:55:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 16:55:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:55:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 16:56:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:56:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 16:57:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:58:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:58:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 16:59:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-25 16:59:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 17:01:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 17:03:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 17:11:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 17:11:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 17:38:31 --> Severity: Notice --> Undefined variable: arrPool /var/www/html/rental/application/views/driver/driver.php 130
ERROR - 2019-09-25 17:38:31 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 152
ERROR - 2019-09-25 17:38:31 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 171
ERROR - 2019-09-25 17:38:31 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 192
ERROR - 2019-09-25 17:38:31 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 212
ERROR - 2019-09-25 17:38:31 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 232
ERROR - 2019-09-25 17:38:31 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 254
ERROR - 2019-09-25 17:38:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 17:38:31 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 17:38:49 --> Severity: Notice --> Undefined variable: arrPool /var/www/html/rental/application/views/driver/driver.php 130
ERROR - 2019-09-25 17:38:49 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 152
ERROR - 2019-09-25 17:38:49 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 171
ERROR - 2019-09-25 17:38:49 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 192
ERROR - 2019-09-25 17:38:49 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 212
ERROR - 2019-09-25 17:38:49 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 232
ERROR - 2019-09-25 17:38:49 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 254
ERROR - 2019-09-25 17:38:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 17:38:50 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 17:38:53 --> Severity: Notice --> Undefined variable: arrPool /var/www/html/rental/application/views/driver/driver.php 130
ERROR - 2019-09-25 17:38:53 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 152
ERROR - 2019-09-25 17:38:53 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 171
ERROR - 2019-09-25 17:38:53 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 192
ERROR - 2019-09-25 17:38:53 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 212
ERROR - 2019-09-25 17:38:53 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 232
ERROR - 2019-09-25 17:38:53 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 254
ERROR - 2019-09-25 17:38:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 17:38:53 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:06:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 18:06:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 18:15:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 18:15:52 --> Severity: Notice --> Undefined variable: arrPool /var/www/html/rental/application/views/driver/driver.php 130
ERROR - 2019-09-25 18:15:52 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 152
ERROR - 2019-09-25 18:15:52 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 171
ERROR - 2019-09-25 18:15:52 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 192
ERROR - 2019-09-25 18:15:52 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 212
ERROR - 2019-09-25 18:15:52 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 232
ERROR - 2019-09-25 18:15:52 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 254
ERROR - 2019-09-25 18:15:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:15:52 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:34:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 18:34:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 18:36:34 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 152
ERROR - 2019-09-25 18:36:34 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 171
ERROR - 2019-09-25 18:36:34 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 192
ERROR - 2019-09-25 18:36:34 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 212
ERROR - 2019-09-25 18:36:34 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 232
ERROR - 2019-09-25 18:36:34 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 254
ERROR - 2019-09-25 18:36:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:36:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:36:44 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 152
ERROR - 2019-09-25 18:36:44 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 171
ERROR - 2019-09-25 18:36:44 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 192
ERROR - 2019-09-25 18:36:44 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 212
ERROR - 2019-09-25 18:36:44 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 232
ERROR - 2019-09-25 18:36:44 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 254
ERROR - 2019-09-25 18:36:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:36:44 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:38:17 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 152
ERROR - 2019-09-25 18:38:17 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 171
ERROR - 2019-09-25 18:38:17 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 192
ERROR - 2019-09-25 18:38:17 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 212
ERROR - 2019-09-25 18:38:17 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 232
ERROR - 2019-09-25 18:38:17 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 254
ERROR - 2019-09-25 18:38:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:38:18 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:38:27 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 152
ERROR - 2019-09-25 18:38:27 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 171
ERROR - 2019-09-25 18:38:27 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 192
ERROR - 2019-09-25 18:38:27 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 212
ERROR - 2019-09-25 18:38:27 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 232
ERROR - 2019-09-25 18:38:27 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 254
ERROR - 2019-09-25 18:38:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:38:27 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:38:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 18:39:13 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 152
ERROR - 2019-09-25 18:39:13 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 171
ERROR - 2019-09-25 18:39:13 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 192
ERROR - 2019-09-25 18:39:13 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 212
ERROR - 2019-09-25 18:39:13 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 232
ERROR - 2019-09-25 18:39:13 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 254
ERROR - 2019-09-25 18:39:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:39:14 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:39:20 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 152
ERROR - 2019-09-25 18:39:20 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 171
ERROR - 2019-09-25 18:39:20 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 192
ERROR - 2019-09-25 18:39:20 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 212
ERROR - 2019-09-25 18:39:20 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 232
ERROR - 2019-09-25 18:39:20 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 254
ERROR - 2019-09-25 18:39:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:39:20 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:42:22 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 18:42:25 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 152
ERROR - 2019-09-25 18:42:25 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 171
ERROR - 2019-09-25 18:42:25 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 192
ERROR - 2019-09-25 18:42:25 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 212
ERROR - 2019-09-25 18:42:25 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 232
ERROR - 2019-09-25 18:42:25 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 254
ERROR - 2019-09-25 18:42:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:42:25 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:42:26 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 18:42:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:42:38 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:44:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 18:44:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 18:44:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 18:44:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 18:45:23 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 152
ERROR - 2019-09-25 18:45:23 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 171
ERROR - 2019-09-25 18:45:23 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 192
ERROR - 2019-09-25 18:45:23 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 212
ERROR - 2019-09-25 18:45:23 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 232
ERROR - 2019-09-25 18:45:23 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 254
ERROR - 2019-09-25 18:45:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:45:23 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:45:24 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 18:46:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 18:46:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 18:48:25 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 152
ERROR - 2019-09-25 18:48:25 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 171
ERROR - 2019-09-25 18:48:25 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 192
ERROR - 2019-09-25 18:48:25 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 212
ERROR - 2019-09-25 18:48:25 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 232
ERROR - 2019-09-25 18:48:25 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 254
ERROR - 2019-09-25 18:48:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:48:25 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:48:26 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 18:48:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 18:48:38 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'kip_number' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'code' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'active' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> Illegal string offset 'id' /var/www/html/rental/application/views/driver/driver.php 131
ERROR - 2019-09-25 18:48:47 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 152
ERROR - 2019-09-25 18:48:47 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 171
ERROR - 2019-09-25 18:48:47 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 192
ERROR - 2019-09-25 18:48:47 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 212
ERROR - 2019-09-25 18:48:47 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 232
ERROR - 2019-09-25 18:48:47 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 254
ERROR - 2019-09-25 18:48:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:48:47 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:48:47 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined index: code /var/www/html/rental/application/views/driver/driver.php 133
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/views/driver/driver.php 133
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined index: code /var/www/html/rental/application/views/driver/driver.php 133
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/views/driver/driver.php 133
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined index: code /var/www/html/rental/application/views/driver/driver.php 133
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/views/driver/driver.php 133
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined index: code /var/www/html/rental/application/views/driver/driver.php 133
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/views/driver/driver.php 133
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined index: code /var/www/html/rental/application/views/driver/driver.php 133
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/views/driver/driver.php 133
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined index: code /var/www/html/rental/application/views/driver/driver.php 133
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/views/driver/driver.php 133
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 156
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 175
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 196
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 216
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 236
ERROR - 2019-09-25 18:50:30 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 258
ERROR - 2019-09-25 18:50:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:50:30 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:50:30 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 18:51:36 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 156
ERROR - 2019-09-25 18:51:36 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 175
ERROR - 2019-09-25 18:51:36 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 196
ERROR - 2019-09-25 18:51:36 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 216
ERROR - 2019-09-25 18:51:36 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 236
ERROR - 2019-09-25 18:51:36 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 258
ERROR - 2019-09-25 18:51:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:51:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:51:36 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 18:51:48 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 156
ERROR - 2019-09-25 18:51:48 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 175
ERROR - 2019-09-25 18:51:48 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 196
ERROR - 2019-09-25 18:51:48 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 216
ERROR - 2019-09-25 18:51:48 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 236
ERROR - 2019-09-25 18:51:48 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 258
ERROR - 2019-09-25 18:51:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:51:49 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:51:49 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 18:52:09 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 154
ERROR - 2019-09-25 18:52:09 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 173
ERROR - 2019-09-25 18:52:09 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 194
ERROR - 2019-09-25 18:52:09 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 214
ERROR - 2019-09-25 18:52:09 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 234
ERROR - 2019-09-25 18:52:09 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 256
ERROR - 2019-09-25 18:52:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:52:09 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:52:10 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 18:52:37 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 152
ERROR - 2019-09-25 18:52:37 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 171
ERROR - 2019-09-25 18:52:37 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 192
ERROR - 2019-09-25 18:52:37 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 212
ERROR - 2019-09-25 18:52:37 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 232
ERROR - 2019-09-25 18:52:37 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 254
ERROR - 2019-09-25 18:52:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:52:37 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:52:37 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 18:55:46 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 156
ERROR - 2019-09-25 18:55:46 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 175
ERROR - 2019-09-25 18:55:46 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 196
ERROR - 2019-09-25 18:55:46 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 216
ERROR - 2019-09-25 18:55:46 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 236
ERROR - 2019-09-25 18:55:46 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 258
ERROR - 2019-09-25 18:55:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:55:46 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:55:46 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 18:57:03 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 159
ERROR - 2019-09-25 18:57:03 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 178
ERROR - 2019-09-25 18:57:03 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 199
ERROR - 2019-09-25 18:57:03 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 219
ERROR - 2019-09-25 18:57:03 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 239
ERROR - 2019-09-25 18:57:03 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 261
ERROR - 2019-09-25 18:57:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:57:03 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:57:03 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 18:57:24 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 159
ERROR - 2019-09-25 18:57:24 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 178
ERROR - 2019-09-25 18:57:24 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 199
ERROR - 2019-09-25 18:57:24 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 219
ERROR - 2019-09-25 18:57:24 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 239
ERROR - 2019-09-25 18:57:24 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 261
ERROR - 2019-09-25 18:57:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:57:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:57:25 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 18:58:45 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 163
ERROR - 2019-09-25 18:58:45 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 182
ERROR - 2019-09-25 18:58:45 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 203
ERROR - 2019-09-25 18:58:45 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 223
ERROR - 2019-09-25 18:58:45 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 243
ERROR - 2019-09-25 18:58:45 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 265
ERROR - 2019-09-25 18:58:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:58:45 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:58:45 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 18:58:55 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 164
ERROR - 2019-09-25 18:58:55 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 183
ERROR - 2019-09-25 18:58:55 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 204
ERROR - 2019-09-25 18:58:55 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 224
ERROR - 2019-09-25 18:58:55 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 244
ERROR - 2019-09-25 18:58:55 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 266
ERROR - 2019-09-25 18:58:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:58:56 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:58:56 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 18:59:32 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 164
ERROR - 2019-09-25 18:59:32 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 183
ERROR - 2019-09-25 18:59:32 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 204
ERROR - 2019-09-25 18:59:32 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 224
ERROR - 2019-09-25 18:59:32 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 244
ERROR - 2019-09-25 18:59:32 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 266
ERROR - 2019-09-25 18:59:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 18:59:32 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 18:59:33 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 19:00:20 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 164
ERROR - 2019-09-25 19:00:20 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 183
ERROR - 2019-09-25 19:00:20 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 204
ERROR - 2019-09-25 19:00:20 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 224
ERROR - 2019-09-25 19:00:20 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 244
ERROR - 2019-09-25 19:00:20 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 266
ERROR - 2019-09-25 19:00:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 19:00:20 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 19:00:20 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 19:04:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 19:04:28 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 164
ERROR - 2019-09-25 19:04:28 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 183
ERROR - 2019-09-25 19:04:28 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 204
ERROR - 2019-09-25 19:04:28 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 224
ERROR - 2019-09-25 19:04:28 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 244
ERROR - 2019-09-25 19:04:28 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 266
ERROR - 2019-09-25 19:04:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 19:04:28 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 19:04:28 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 164
ERROR - 2019-09-25 19:04:28 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 183
ERROR - 2019-09-25 19:04:28 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 204
ERROR - 2019-09-25 19:04:28 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 224
ERROR - 2019-09-25 19:04:28 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 244
ERROR - 2019-09-25 19:04:28 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 266
ERROR - 2019-09-25 19:04:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 19:04:42 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 164
ERROR - 2019-09-25 19:04:42 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 183
ERROR - 2019-09-25 19:04:42 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 204
ERROR - 2019-09-25 19:04:42 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 224
ERROR - 2019-09-25 19:04:42 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 244
ERROR - 2019-09-25 19:04:42 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 266
ERROR - 2019-09-25 19:04:42 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-25 19:04:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 19:04:42 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 19:04:43 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 164
ERROR - 2019-09-25 19:04:43 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 183
ERROR - 2019-09-25 19:04:43 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 204
ERROR - 2019-09-25 19:04:43 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 224
ERROR - 2019-09-25 19:04:43 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 244
ERROR - 2019-09-25 19:04:43 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 266
ERROR - 2019-09-25 19:05:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-25 19:06:03 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 164
ERROR - 2019-09-25 19:06:03 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 183
ERROR - 2019-09-25 19:06:03 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 204
ERROR - 2019-09-25 19:06:03 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 224
ERROR - 2019-09-25 19:06:03 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 244
ERROR - 2019-09-25 19:06:03 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 266
ERROR - 2019-09-25 19:06:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 19:06:03 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 19:06:03 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 164
ERROR - 2019-09-25 19:06:03 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 183
ERROR - 2019-09-25 19:06:03 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 204
ERROR - 2019-09-25 19:06:03 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 224
ERROR - 2019-09-25 19:06:03 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 244
ERROR - 2019-09-25 19:06:03 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 266
ERROR - 2019-09-25 19:09:46 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-25 19:09:46 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-25 19:09:46 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-25 19:09:46 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-25 19:09:46 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-25 19:09:46 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-25 19:09:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-25 19:09:46 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-25 19:09:47 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 20:42:18 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-25 20:42:25 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-25 20:42:25 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-25 20:42:25 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 20:42:55 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-25 20:42:55 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-25 20:42:55 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 20:44:10 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-25 20:44:10 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-25 20:44:10 --> 404 Page Not Found: Report/build
ERROR - 2019-09-25 20:44:14 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-25 20:44:16 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-25 20:44:16 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-25 20:45:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-25 20:45:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-25 20:46:47 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-25 21:56:04 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-25 22:16:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-25 22:52:02 --> 404 Page Not Found: Images/favicon.ico
