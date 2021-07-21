<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-26 08:01:24 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 08:01:24 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 08:01:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:01:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 08:01:49 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-26 08:03:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 08:03:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 08:03:51 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 08:03:51 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 08:03:51 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 08:03:51 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 08:03:51 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 08:03:51 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 08:03:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 08:03:51 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 08:05:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:05:36 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-26 08:08:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:09:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:11:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:13:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:13:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 08:13:52 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-26 08:13:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:14:38 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-26 08:15:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:18:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:19:57 --> 404 Page Not Found: Spj/setoran_spj_index
ERROR - 2019-09-26 08:20:06 --> 404 Page Not Found: Spj/setoran_spj_index
ERROR - 2019-09-26 08:21:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:22:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:29:27 --> 404 Page Not Found: Spj/setoran_spj_index
ERROR - 2019-09-26 08:29:42 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-26 08:30:51 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 260
ERROR - 2019-09-26 08:30:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:31:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 08:31:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 08:31:53 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 08:32:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 08:32:11 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-26 08:33:21 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-26 08:33:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:34:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:34:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 08:34:14 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-09-26 08:34:14'
WHERE "id" = 'build'
ERROR - 2019-09-26 08:36:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:37:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 08:38:46 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-26 08:38:53 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-26 08:38:53 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-26 08:38:54 --> 404 Page Not Found: Report/build
ERROR - 2019-09-26 08:40:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:40:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 08:41:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 08:41:47 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-26 08:41:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 08:41:54 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-09-26 08:41:54'
WHERE "id" = 'build'
ERROR - 2019-09-26 08:42:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 08:42:30 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-26 08:42:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 08:42:38 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-09-26 08:42:38'
WHERE "id" = 'build'
ERROR - 2019-09-26 08:42:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 08:42:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-26 08:42:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 08:42:44 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-09-26 08:42:44'
WHERE "id" = 'build'
ERROR - 2019-09-26 08:43:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:44:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:45:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 08:45:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 08:45:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:46:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 08:46:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 08:58:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:02:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:03:17 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-26 09:03:54 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-26 09:04:18 --> 404 Page Not Found: Report/build
ERROR - 2019-09-26 09:13:16 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-26 09:15:42 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 09:16:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:16:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:18:24 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 09:18:29 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 09:20:00 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 09:21:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 09:21:20 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2019-09-26 09:21:27 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 09:21:27 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 09:22:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 09:22:05 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2019-09-26 09:22:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 09:23:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 09:23:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 09:23:39 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-26 09:25:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:27:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:27:44 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-26 09:28:19 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-26 09:29:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 09:30:53 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 09:30:56 --> 404 Page Not Found: Seragam/cetak
ERROR - 2019-09-26 09:31:17 --> 404 Page Not Found: Seragam/kirim
ERROR - 2019-09-26 09:31:23 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 09:31:40 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 09:32:00 --> 404 Page Not Found: Seragam/cetak
ERROR - 2019-09-26 09:32:11 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 09:33:36 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-26 09:34:23 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-26 09:34:23 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-26 09:34:23 --> 404 Page Not Found: Report/build
ERROR - 2019-09-26 09:34:59 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-26 09:35:02 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-26 09:35:02 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-26 09:35:38 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 09:35:53 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-26 09:35:53 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-26 09:35:53 --> 404 Page Not Found: Report/build
ERROR - 2019-09-26 09:35:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 09:36:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:37:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:37:42 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 09:38:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:38:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 09:39:05 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 09:39:05 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 09:39:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:42:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:42:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:43:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 09:43:43 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-26 09:44:03 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-26 09:44:03 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-26 09:44:03 --> 404 Page Not Found: Report/build
ERROR - 2019-09-26 09:44:54 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-26 09:44:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:44:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 09:44:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 09:44:59 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-26 09:44:59 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-26 09:44:59 --> 404 Page Not Found: Report/build
ERROR - 2019-09-26 09:45:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 09:46:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 09:46:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 09:46:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 09:46:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:46:37 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 09:46:37 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 09:46:37 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 09:46:37 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 09:46:37 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 09:46:37 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 09:46:37 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-26 09:46:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 09:46:37 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 09:46:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:47:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:47:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 09:47:28 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 09:47:28 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 09:47:28 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 09:47:28 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 09:47:28 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 09:47:28 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 09:47:28 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-26 09:47:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 09:47:28 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 09:48:16 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 09:48:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 09:48:54 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 09:48:54 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 09:48:54 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 09:48:54 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 09:48:54 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 09:48:54 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 09:48:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 09:48:54 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 09:48:54 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-26 09:48:54 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-26 09:49:01 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 09:49:12 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 09:50:40 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 09:50:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 09:50:43 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-26 09:51:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:52:59 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 09:52:59 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 09:53:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:55:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:58:16 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-26 09:59:05 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 09:59:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:59:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 09:59:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:00:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:00:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 10:00:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 10:00:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:00:33 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 10:00:33 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 10:00:33 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 10:00:33 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 10:00:33 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 10:00:33 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 10:00:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 10:00:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 10:00:34 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 10:00:34 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 10:00:34 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 10:00:34 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 10:00:34 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 10:00:34 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 10:00:46 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 10:00:46 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 10:00:46 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 10:00:46 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 10:00:46 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 10:00:46 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 10:00:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 10:00:46 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 10:00:46 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 10:00:46 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 10:00:46 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 10:00:46 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 10:00:46 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 10:00:46 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 10:01:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:01:43 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 10:01:43 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 10:01:43 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 10:01:43 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 10:01:43 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 10:01:43 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 10:01:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 10:01:43 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 10:01:43 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 10:01:43 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 10:01:43 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 10:01:43 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 10:01:43 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 10:01:43 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 10:02:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 10:03:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:04:33 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-26 10:05:15 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 10:05:15 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 10:05:15 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 10:05:15 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 10:05:15 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 10:05:15 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 10:05:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 10:05:15 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 10:05:15 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 10:05:15 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 10:05:15 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 10:05:15 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 10:05:15 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 10:05:15 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 10:05:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:05:36 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 10:05:36 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 10:05:36 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 10:05:36 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 10:05:36 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 10:05:36 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 10:05:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 10:05:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 10:05:37 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 10:05:37 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 10:05:37 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 10:05:37 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 10:05:37 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 10:05:37 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 10:05:51 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 10:05:51 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 10:05:51 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 10:05:51 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 10:05:51 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 10:05:51 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 10:05:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 10:05:51 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 10:05:51 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 10:05:51 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 10:05:51 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 10:05:51 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 10:05:51 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 10:05:51 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 10:06:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:06:54 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 10:11:16 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 10:11:30 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 10:11:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 10:11:41 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-26 10:11:47 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 10:11:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:11:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:12:31 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 10:12:47 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 10:12:51 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 10:13:32 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 10:13:41 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 10:14:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 10:14:59 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 10:15:01 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 10:15:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 10:15:22 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 10:15:43 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 10:15:50 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 10:16:56 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 10:17:25 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 10:17:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 10:17:52 --> 404 Page Not Found: Report/build
ERROR - 2019-09-26 10:17:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 10:19:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 10:19:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 10:19:23 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-26 10:20:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 10:21:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:23:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:24:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 10:24:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 10:24:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:25:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 10:25:09 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 10:26:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 10:26:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 10:26:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:27:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:27:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:28:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:28:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 10:28:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 10:29:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 10:29:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 10:29:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 10:30:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:33:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:33:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:33:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 10:34:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 10:34:52 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 10:34:52 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 10:34:52 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 10:34:52 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 10:34:52 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 10:34:52 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 10:34:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 10:34:52 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 10:34:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:36:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:36:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 10:37:01 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 10:37:01 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 10:37:01 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 10:37:01 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 10:37:01 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 10:37:01 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 10:37:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 10:37:01 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 10:37:02 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 10:37:02 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 10:37:02 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 10:37:02 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 10:37:02 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 10:37:02 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 10:37:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:38:11 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 10:38:38 --> 404 Page Not Found: Report/build
ERROR - 2019-09-26 10:38:49 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 10:38:49 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 10:38:49 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 10:38:49 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 10:38:49 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 10:38:49 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 10:38:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 10:38:49 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 10:40:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 10:40:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 10:41:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:41:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 10:41:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:41:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:49:09 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 10:50:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 10:52:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 10:52:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 10:52:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:52:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:52:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 10:52:47 --> Severity: Warning --> fsockopen(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-26 10:52:47 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (php_network_getaddresses: getaddrinfo failed: Name or service not known) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-26 10:52:54 --> Severity: Warning --> fsockopen(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-26 10:52:54 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (php_network_getaddresses: getaddrinfo failed: Name or service not known) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-26 10:55:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:56:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:56:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 10:56:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 10:56:51 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 10:56:51 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 10:56:51 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 10:56:51 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 10:56:51 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 10:56:51 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 10:56:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 10:56:52 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 10:57:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 10:58:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 10:58:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 10:58:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 10:58:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 10:58:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 11:03:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 11:05:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 11:05:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 11:05:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 11:06:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 11:06:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 11:08:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 11:08:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 11:10:14 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 11:10:14 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 11:10:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 11:10:50 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 11:10:50 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 11:10:50 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 11:10:50 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 11:10:50 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 11:10:50 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 11:10:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 11:10:50 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 11:10:59 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 11:10:59 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 11:11:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 11:11:14 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 11:11:14 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 11:11:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 11:11:47 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 11:12:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 11:12:24 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 11:12:24 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 11:12:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 11:13:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 11:17:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 11:26:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 11:26:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 11:26:44 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-26 11:32:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 11:32:57 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-26 11:35:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 11:35:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 11:38:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 11:40:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 11:46:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 11:54:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 12:08:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 12:08:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 12:19:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 12:26:30 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-26 12:26:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 12:32:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 12:33:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 12:33:26 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 12:33:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 12:37:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 12:47:15 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 12:59:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 13:02:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 13:04:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 13:04:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 13:04:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 13:05:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 13:05:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 13:10:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 13:10:26 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-26 13:12:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 13:12:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 13:13:43 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 13:14:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 13:16:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 13:17:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 13:19:38 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-09-26 13:19:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 13:20:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 13:20:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 13:20:04 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-26 13:20:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 13:20:04 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-26 13:20:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 13:20:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 13:20:11 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-26 13:20:11'
WHERE "id" = 'build'
ERROR - 2019-09-26 13:21:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 13:21:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 13:21:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 13:21:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 13:21:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 13:31:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 13:32:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 13:36:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 13:36:58 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 13:36:58 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 13:36:58 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 13:36:58 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 13:36:58 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 13:36:58 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 13:36:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 13:36:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 13:37:04 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 13:37:04 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 13:37:04 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 13:37:04 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 13:37:04 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 13:37:04 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 13:37:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 13:37:04 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 13:38:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 13:38:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 13:39:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 13:45:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 13:46:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 13:53:46 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-26 13:54:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 13:59:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:01:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:02:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:02:04 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 14:02:10 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 14:02:10 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 14:02:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:02:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 14:02:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 14:03:14 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 14:03:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:03:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:04:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 14:04:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 14:04:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:04:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:04:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:05:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 14:05:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:05:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 14:05:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 14:06:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:06:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 14:06:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:06:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:08:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:09:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:10:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:13:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:14:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:15:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:15:55 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-26 14:15:55 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-26 14:15:55 --> 404 Page Not Found: Report/build
ERROR - 2019-09-26 14:15:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:16:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 14:16:08 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-26 14:16:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:16:10 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-26 14:16:10 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-26 14:16:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:17:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:17:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:18:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:19:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 14:19:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:20:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:21:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:21:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:23:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:24:30 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 14:25:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:26:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:26:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:26:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:26:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:26:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:26:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:26:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:27:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 14:29:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:33:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:35:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:36:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:36:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:36:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:37:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 14:37:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:37:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:37:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:38:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:38:52 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 14:40:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:41:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:42:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 14:42:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:43:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:45:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:47:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 14:48:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:49:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:50:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:51:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:52:39 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 14:53:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:54:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 14:54:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:54:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:56:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 14:56:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 14:56:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 14:58:10 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 14:58:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 14:58:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 14:58:12 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 14:58:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:00:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:02:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:05:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:10:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:13:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:13:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 15:13:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:14:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:16:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:17:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:21:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 15:24:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:24:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:25:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:25:56 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 15:26:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:26:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:27:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 15:27:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:28:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:28:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 15:28:58 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 15:28:58 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 15:28:58 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 15:28:58 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 15:28:58 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 15:28:58 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 15:28:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 15:28:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 15:30:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:31:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:32:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 15:32:53 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 15:32:53 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 15:32:53 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 15:32:53 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 15:32:53 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 15:32:53 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 15:32:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 15:32:54 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 15:33:19 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 15:34:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:34:06 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 15:34:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:34:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:35:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:38:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:38:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:38:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:39:45 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 15:39:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 15:39:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 15:41:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:43:27 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-26 15:43:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:43:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 15:43:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:44:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:45:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 15:45:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 15:45:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 15:45:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 15:45:56 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 15:45:56 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 15:45:56 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 15:45:56 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 15:45:56 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 15:45:56 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 15:45:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 15:45:56 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 15:46:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 15:48:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:48:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 15:49:06 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 15:49:06 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 15:49:06 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 15:49:06 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 15:49:06 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 15:49:06 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 15:49:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 15:49:07 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 15:49:07 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-26 15:54:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:54:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 15:54:42 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 15:54:42 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 15:54:42 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 15:54:42 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 15:54:42 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 15:54:42 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 15:54:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 15:54:42 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 15:54:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 15:54:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:55:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:55:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:56:05 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-26 15:56:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 15:56:09 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-26 15:56:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:56:56 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 15:57:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:57:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:58:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 15:58:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 15:58:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:00:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:03:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:03:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:03:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:03:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:07:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:08:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:09:09 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 16:10:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:10:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:15:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 16:15:54 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 16:15:54 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 16:15:54 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 16:15:54 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 16:15:54 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 16:15:54 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 16:15:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 16:15:54 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 16:17:30 --> Severity: Notice --> Undefined index: tukiyo /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-26 16:23:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:23:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:24:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 16:24:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 16:24:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:25:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 16:25:01 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-26 16:25:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:25:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 16:25:48 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 16:26:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 16:26:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:27:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:29:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 16:29:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 16:29:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 16:29:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 16:29:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 16:29:42 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 16:29:42 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 16:29:42 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 16:29:42 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 16:29:42 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 16:29:42 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 16:29:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 16:29:43 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 16:30:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:30:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:30:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:31:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:31:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:31:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:31:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:31:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:31:48 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 16:32:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:32:48 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 16:33:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:33:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:33:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:33:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:33:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:33:48 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 16:33:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:34:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:35:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:35:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:35:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:35:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:35:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 16:35:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:35:58 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 16:35:58 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 16:35:58 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 16:35:58 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 16:35:58 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 16:35:58 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 16:35:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 16:35:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 16:36:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:36:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:37:03 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 16:37:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:37:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:37:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:38:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:38:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:38:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:39:12 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 16:39:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:39:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:39:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:40:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:40:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:41:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:41:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:42:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:42:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:42:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:43:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:44:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:46:18 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 16:46:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:47:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 16:47:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 16:47:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:47:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 16:47:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:47:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:48:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:48:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:48:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:48:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:48:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:48:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:48:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:49:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:49:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:49:51 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (Network is unreachable) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-26 16:49:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 16:50:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:50:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:50:12 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 16:50:12 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 16:50:12 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 16:50:12 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 16:50:12 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 16:50:12 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 16:50:12 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-26 16:50:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 16:50:12 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 16:50:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:50:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:50:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:50:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:51:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:51:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:51:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:51:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:52:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:52:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:52:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:52:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:52:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;jam_mulai_denda&quot;, &quot;total_tagihan&quot;) VALUES ('91', '', '5', '...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 16:52:56 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."jam_mulai_denda", "total_tagihan") VALUES ('91', '', '5', '...
                                                             ^ - Invalid query: INSERT INTO "trx_spj" ("driver_id", "car_id", "pool_id", "created", "creator_id", "doc_number", "keterangan", "modified", "status", "tipe_rental", "tanggal_spj", "tagihan_wajib", "denda_perjam", "jam_mulai_denda", "total_tagihan") VALUES ('91', '', '5', '2019-09-26 16:52:56', '41', 'SPJ-TIARA/BCG/20190926/683', 'Create SPJ by Pool', '2019-09-26 16:52:56', 'Active', '24 Jam', '2019-09-26', 650000, 50000, '2019-09-27 16:52:56', 0)
ERROR - 2019-09-26 16:52:56 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:53:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:53:17 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 16:53:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:53:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:53:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:54:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 16:54:17 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 16:54:17 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 16:54:17 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 16:54:17 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 16:54:17 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 16:54:17 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 16:54:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 16:54:17 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 16:54:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:54:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:54:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 16:54:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 16:54:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 16:54:32 --> Severity: Notice --> Undefined index: domisili_number /var/www/html/rental/application/views/driver/view_detail_registration_driver.php 72
ERROR - 2019-09-26 16:54:32 --> Severity: Notice --> Undefined index: path_domisili /var/www/html/rental/application/views/driver/view_detail_registration_driver.php 174
ERROR - 2019-09-26 16:54:32 --> Severity: Notice --> Undefined index: path_domisili /var/www/html/rental/application/views/driver/view_detail_registration_driver.php 174
ERROR - 2019-09-26 16:54:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 16:54:32 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 16:54:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:54:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 16:54:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:54:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:54:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:55:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:55:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:55:25 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 16:55:32 --> Severity: Notice --> Undefined index: path_domisili /var/www/html/rental/application/views/driver/view_detail_registration_driver.php 174
ERROR - 2019-09-26 16:55:32 --> Severity: Notice --> Undefined index: path_domisili /var/www/html/rental/application/views/driver/view_detail_registration_driver.php 174
ERROR - 2019-09-26 16:55:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 16:55:32 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, 
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-26 16:55:47 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 16:56:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 16:56:02 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 16:56:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:56:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:56:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:56:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-26 16:56:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:57:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 16:58:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 16:58:11 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 16:58:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:58:26 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-26 16:58:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:59:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:59:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 16:59:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:02:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:02:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:02:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:02:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:03:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:03:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:03:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:03:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:03:59 --> 404 Page Not Found: Spj/setoran_spj_index
ERROR - 2019-09-26 17:05:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:07:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:07:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 17:07:28 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 17:07:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 17:07:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-26 17:09:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:10:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 17:10:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 17:11:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:12:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:12:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:13:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:13:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:16:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:17:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:17:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:18:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:18:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:20:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 17:20:10 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-26 17:26:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:32:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:32:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:34:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:37:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:38:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:39:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 17:39:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 17:40:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:40:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:43:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:44:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 17:50:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 17:50:36 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-26 17:50:36 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-26 17:50:36 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-26 17:50:36 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-26 17:50:36 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-26 17:50:36 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-26 17:50:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-26 17:50:37 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-26 17:52:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 17:54:09 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 17:57:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 17:57:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-26 18:03:16 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-26 18:03:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 18:04:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 18:05:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 18:29:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 18:39:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 19:10:53 --> 404 Page Not Found: Assets/fonts
ERROR - 2019-09-26 19:11:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 19:11:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 19:11:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 19:37:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 19:41:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 19:41:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 19:42:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 19:44:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 20:33:09 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-26 20:33:57 --> Severity: Notice --> Undefined index: mardiyanto /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-26 20:35:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 20:35:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 20:49:45 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-26 20:51:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 20:51:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 21:34:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-26 21:34:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-26 21:35:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 21:38:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 21:40:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 22:01:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 22:01:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-26 22:04:44 --> 404 Page Not Found: Spj/build
