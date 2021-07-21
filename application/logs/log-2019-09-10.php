<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-10 00:10:18 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-10 00:45:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 00:45:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 00:46:45 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 00:50:49 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 00:50:49 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 00:50:58 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 00:52:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 00:52:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 00:57:28 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 00:58:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 01:32:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 01:55:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 02:00:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 02:22:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 02:29:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 02:34:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 02:35:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 02:51:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 02:55:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 02:55:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 02:56:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 02:57:46 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 02:58:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 02:58:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 02:58:43 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 02:58:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 02:58:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 02:58:57 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 02:59:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 02:59:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 02:59:05 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 02:59:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 02:59:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 03:02:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 03:02:05 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 03:02:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 03:02:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 05:08:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 05:28:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 05:52:20 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 32
ERROR - 2019-09-10 05:52:20 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 47
ERROR - 2019-09-10 05:52:20 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 59
ERROR - 2019-09-10 05:52:20 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 71
ERROR - 2019-09-10 05:52:20 --> Severity: Notice --> Undefined index: id_car /var/www/html/rental/application/controllers/Vehicle.php 122
ERROR - 2019-09-10 05:52:20 --> Severity: Notice --> Undefined index: id_pool /var/www/html/rental/application/controllers/Vehicle.php 123
ERROR - 2019-09-10 05:52:20 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 124
ERROR - 2019-09-10 05:52:20 --> Severity: Notice --> Undefined index: no_polisi /var/www/html/rental/application/controllers/Vehicle.php 125
ERROR - 2019-09-10 05:52:20 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/controllers/Vehicle.php 126
ERROR - 2019-09-10 05:52:20 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/controllers/Vehicle.php 127
ERROR - 2019-09-10 05:52:20 --> Severity: Notice --> Undefined index: tahun /var/www/html/rental/application/controllers/Vehicle.php 128
ERROR - 2019-09-10 05:52:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 05:52:24 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 32
ERROR - 2019-09-10 05:52:24 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 47
ERROR - 2019-09-10 05:52:24 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 59
ERROR - 2019-09-10 05:52:24 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 71
ERROR - 2019-09-10 05:52:24 --> Severity: Notice --> Undefined index: id_car /var/www/html/rental/application/controllers/Vehicle.php 122
ERROR - 2019-09-10 05:52:24 --> Severity: Notice --> Undefined index: id_pool /var/www/html/rental/application/controllers/Vehicle.php 123
ERROR - 2019-09-10 05:52:24 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 124
ERROR - 2019-09-10 05:52:24 --> Severity: Notice --> Undefined index: no_polisi /var/www/html/rental/application/controllers/Vehicle.php 125
ERROR - 2019-09-10 05:52:24 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/controllers/Vehicle.php 126
ERROR - 2019-09-10 05:52:24 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/controllers/Vehicle.php 127
ERROR - 2019-09-10 05:52:24 --> Severity: Notice --> Undefined index: tahun /var/www/html/rental/application/controllers/Vehicle.php 128
ERROR - 2019-09-10 05:52:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 05:52:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 05:52:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 05:52:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 05:53:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 05:58:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 06:05:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 06:05:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 06:05:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 06:05:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 06:05:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 06:05:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 06:05:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 06:05:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 06:05:40 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-10 06:05:40'
WHERE "id" = 'build'
ERROR - 2019-09-10 06:05:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 06:05:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 06:05:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 06:05:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 06:05:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 06:05:45 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-10 06:05:45'
WHERE "id" = 'build'
ERROR - 2019-09-10 06:05:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 06:05:46 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 06:05:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 06:05:46 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 06:05:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 06:05:49 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-10 06:05:49'
WHERE "id" = 'build'
ERROR - 2019-09-10 06:22:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 06:22:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 06:29:16 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 07:52:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 07:52:42 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 07:54:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 07:54:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 07:58:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:04:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 08:11:29 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:11:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:13:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:13:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 08:13:04 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 08:13:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 08:13:04 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 08:13:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 08:13:07 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-10 08:13:07'
WHERE "id" = 'build'
ERROR - 2019-09-10 08:13:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 08:13:08 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 08:13:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 08:13:08 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 08:13:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 08:13:10 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-10 08:13:10'
WHERE "id" = 'build'
ERROR - 2019-09-10 08:13:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:14:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 08:14:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:14:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:16:46 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 08:16:46 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 08:17:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 08:20:33 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 08:20:33 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 08:21:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 08:22:03 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 08:22:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 08:22:03 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 08:22:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 08:26:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 08:26:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 08:30:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 08:33:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_car_no_stnk_unique&quot;
DETAIL:  Key (no_stnk)=(2992871) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 08:33:18 --> Query error: ERROR:  duplicate key value violates unique constraint "master_car_no_stnk_unique"
DETAIL:  Key (no_stnk)=(2992871) already exists. - Invalid query: INSERT INTO "master_car" ("id_pool", "tahun", "no_pintu", "no_polisi", "unit_bisnis", "no_rangka", "no_mesin", "merek", "tipe", "warna", "no_stnk", "no_tera", "no_keur", "no_kiukio", "setoran_harian", "date_expired_stnk", "date_expired_tera", "date_expired_keur", "date_expired_kiukio", "image_path_stnk", "image_path_keur", "image_path_tera", "image_path_kiukio", "status", "create_by") VALUES ('1', '2014', 'JJB8216', 'B 1154 KUA', 'TIARA', 'ANH208348871', '2AZG450165', 'TOYOTA', 'ALPHARD X 2.4 AT', 'WULING', '2992871', '43.05240', 'BKS152622', '0036337', 0, '2020-05-26', '2019-02-02', '2020-02-16', '2019-12-31', '/uploads/stnk/STNK_JJB8216.jpg', '/uploads/keur/KEUR_JJB8216.jpg', '/uploads/tera/TERA_JJB8216.jpg', '/uploads/kiukio/KIUKIO_JJB8216.jpg', 'Waiting Approval', '21')
ERROR - 2019-09-10 08:33:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:34:30 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-10 08:36:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:38:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:38:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:38:28 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 08:38:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 08:38:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 08:38:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 08:39:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 08:39:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 08:39:09 --> Severity: Notice --> Undefined index: choiruman /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-10 08:39:35 --> Severity: Notice --> Undefined index: tukiyo /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-10 08:39:35 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 08:39:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 08:39:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 08:40:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 08:41:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 08:41:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 08:42:16 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 08:47:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 08:48:43 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:49:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 08:50:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 08:50:10 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 08:51:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 08:52:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:52:11 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 08:52:11 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 08:52:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 08:52:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 08:52:50 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-10 08:52:50 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-10 08:52:50 --> 404 Page Not Found: Report/build
ERROR - 2019-09-10 08:53:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 08:53:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-10 08:53:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 08:53:43 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 08:54:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-10 08:54:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-10 08:54:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 08:54:28 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-10 08:54:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 08:54:30 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 08:54:30 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 08:55:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:56:46 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:57:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:57:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:58:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 08:58:07 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:58:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:59:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 08:59:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 08:59:29 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 08:59:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 08:59:29 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 08:59:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 08:59:32 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-10 08:59:32'
WHERE "id" = 'build'
ERROR - 2019-09-10 08:59:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 09:00:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 09:01:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-10 09:01:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-10 09:01:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 09:02:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:02:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:02:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:03:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_car_no_stnk_unique&quot;
DETAIL:  Key (no_stnk)=(2992871) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:03:35 --> Query error: ERROR:  duplicate key value violates unique constraint "master_car_no_stnk_unique"
DETAIL:  Key (no_stnk)=(2992871) already exists. - Invalid query: INSERT INTO "master_car" ("tahun", "no_pintu", "no_polisi", "unit_bisnis", "no_rangka", "no_mesin", "merek", "tipe", "warna", "no_stnk", "no_tera", "no_keur", "no_kiukio", "setoran_harian", "date_expired_stnk", "date_expired_tera", "date_expired_keur", "date_expired_kiukio", "image_path_stnk", "image_path_keur", "image_path_tera", "image_path_kiukio", "status", "create_by") VALUES ('2014', 'JJB8216', 'B 1154 KUA', 'TIARA', 'ANH208348871', '2AZG450165', 'TOYOTA', 'ALPHARD X 2.4 AT', 'WULING', '2992871', '43.05240', 'BKS 152622', '0036337', 0, '2020-05-26', '2019-02-12', '2020-02-16', '2019-03-03', '/uploads/stnk/STNK_JJB82161.jpg', '/uploads/keur/KEUR_JJB82161.jpg', '/uploads/tera/TERA_JJB82161.jpg', '/uploads/kiukio/KIUKIO_JJB82161.jpg', 'Waiting Approval', '21')
ERROR - 2019-09-10 09:03:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 09:03:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:03:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:03:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:03:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:03:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 09:04:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 09:04:30 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 09:04:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 09:04:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 09:04:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 09:05:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 09:05:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 09:05:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 09:07:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 09:08:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:09:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 09:09:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_car_no_stnk_unique&quot;
DETAIL:  Key (no_stnk)=(2992871) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:09:17 --> Query error: ERROR:  duplicate key value violates unique constraint "master_car_no_stnk_unique"
DETAIL:  Key (no_stnk)=(2992871) already exists. - Invalid query: INSERT INTO "master_car" ("id_pool", "tahun", "no_pintu", "no_polisi", "unit_bisnis", "no_rangka", "no_mesin", "merek", "tipe", "warna", "no_stnk", "no_tera", "no_keur", "no_kiukio", "setoran_harian", "date_expired_stnk", "date_expired_tera", "date_expired_keur", "date_expired_kiukio", "image_path_stnk", "image_path_keur", "image_path_tera", "image_path_kiukio", "status", "create_by") VALUES ('1', '2014', 'JJB8216', 'B 1154 KUA', 'TIARA', 'ANH208348871', '2AZG450165', 'TOYOTA', 'ALPHARD X 2.4 AT', 'WULING', '2992871', '43.05240', 'BKS 152622', '0036337', 0, '2020-05-26', '2019-02-12', '2020-02-16', '2019-12-31', '/uploads/stnk/STNK_JJB82162.jpg', '/uploads/keur/KEUR_JJB82162.jpg', '/uploads/tera/TERA_JJB82162.jpg', '/uploads/kiukio/KIUKIO_JJB82162.jpg', 'Waiting Approval', '21')
ERROR - 2019-09-10 09:09:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 09:10:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:10:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 09:11:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 09:11:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:11:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 09:11:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:11:27 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 09:11:27 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 09:11:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 09:12:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:12:21 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 09:12:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:12:25 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 09:13:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:13:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:13:44 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 09:14:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:14:19 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 09:14:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:14:45 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 09:14:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:14:48 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 09:14:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:14:55 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 09:14:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:14:57 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 09:14:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:14:58 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 09:15:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:15:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 09:15:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:15:03 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 09:15:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:15:05 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 09:15:28 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-10 09:15:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:16:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:16:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:17:11 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-10 09:17:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 09:17:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:19:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 09:19:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 09:19:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:19:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 09:20:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:20:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:20:04 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 09:20:05 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 09:23:37 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-10 09:26:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:26:30 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 09:26:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:26:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:26:47 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 09:26:47 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 09:27:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:27:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 09:27:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:27:50 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 09:27:50 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 09:27:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:27:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 09:28:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:28:33 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 09:28:33 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 09:29:09 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-10 09:29:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:30:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:30:39 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 09:30:39 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 09:31:02 --> Severity: Notice --> Trying to get property of non-object /var/www/html/rental/application/models/Spj_model.php 386
ERROR - 2019-09-10 09:31:02 --> Severity: Notice --> Trying to get property of non-object /var/www/html/rental/application/models/Spj_model.php 387
ERROR - 2019-09-10 09:31:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 09:31:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 09:34:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 09:34:42 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-10 09:38:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:38:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:38:08 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 09:38:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:40:27 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-10 09:40:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:42:18 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 09:44:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 09:44:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:44:17 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 09:45:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:45:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:45:34 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 09:45:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:45:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 09:45:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:45:36 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 09:45:36 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 09:46:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:49:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 09:49:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 09:50:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:50:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:50:21 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 09:50:21 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 09:51:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 09:51:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 09:52:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:54:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:54:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:54:03 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 09:54:03 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 09:54:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:54:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 09:55:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:57:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 09:57:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 09:58:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 09:58:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 09:58:43 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 10:00:08 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 10:02:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:04:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:04:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:05:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 10:06:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 10:06:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 10:08:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 10:08:53 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 10:10:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:10:15 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 10:10:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 10:10:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:10:25 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 10:10:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:10:25 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 10:11:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 10:11:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 10:11:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:12:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 10:12:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 10:12:53 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 10:13:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 10:13:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 10:14:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 10:14:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 10:15:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:15:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:15:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:15:28 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 10:15:28 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 10:15:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:15:30 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 10:17:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:17:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:17:41 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 10:17:41 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 10:17:52 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-10 10:21:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:22:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:22:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:22:04 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 10:22:04 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 10:22:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:22:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:22:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:22:30 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 10:24:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 10:24:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 10:24:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 10:25:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:25:01 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 10:25:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 10:26:26 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-10 10:27:22 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 10:30:37 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-10 10:31:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 10:32:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 10:32:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 10:32:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:32:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:32:43 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 10:32:53 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 10:32:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:32:54 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 10:32:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:32:55 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 10:32:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:32:56 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-10 10:32:56'
WHERE "id" = 'build'
ERROR - 2019-09-10 10:32:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:32:58 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 10:32:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:32:58 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 10:33:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:33:00 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-10 10:33:00'
WHERE "id" = 'build'
ERROR - 2019-09-10 10:33:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:33:01 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 10:33:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:33:01 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 10:33:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:33:03 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-10 10:33:03'
WHERE "id" = 'build'
ERROR - 2019-09-10 10:33:15 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 10:33:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 10:33:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:33:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:33:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 10:33:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:33:46 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 10:33:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:33:48 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 10:33:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:33:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:33:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 10:34:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:35:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:36:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:36:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:36:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 10:36:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:36:45 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 10:40:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 10:40:23 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-10 10:41:56 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-10 10:42:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:45:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 10:49:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 10:50:13 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 10:50:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:50:15 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 10:50:17 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 10:50:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 10:50:18 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 10:50:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:50:31 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 10:50:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:50:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 10:56:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 10:56:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 10:57:11 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-10 10:57:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 10:57:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 10:58:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:02:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 11:12:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:12:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 11:12:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:14:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 11:17:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 11:18:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 11:18:08 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 11:18:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 11:18:27 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 11:18:29 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-10 11:18:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 11:18:36 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 11:18:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 11:18:49 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 11:18:53 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 11:18:53 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 11:19:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 11:19:03 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 11:19:27 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-10 11:20:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 11:23:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 11:27:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 11:30:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_ktp_un&quot;
DETAIL:  Key (ktp_number)=(3171080509830007) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 11:30:15 --> Query error: ERROR:  duplicate key value violates unique constraint "master_ktp_un"
DETAIL:  Key (ktp_number)=(3171080509830007) already exists. - Invalid query: INSERT INTO "master_ktp" ("name", "created_by", "ktp_number", "location", "type", "address", "path_photo") VALUES ('BUDDY MULYA', '17', '3171080509830007', 'Jakarta', 'KTP Seumur Hidup', 'JL RAWA TENGAH RT09/05 GALUR JOHAR BARU JAKPUS', '/uploads/ktp/KTP_31710805098300071.jpg')
ERROR - 2019-09-10 11:30:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 11:30:15 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 11:30:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:31:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:32:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:32:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:32:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:32:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:33:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:34:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 11:35:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 11:35:34 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 11:35:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:35:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:36:14 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 11:37:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 11:37:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 11:37:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 11:38:10 --> 404 Page Not Found: %20login/index
ERROR - 2019-09-10 11:38:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:38:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 11:38:23 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 11:41:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:44:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:44:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:44:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:45:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:45:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 11:45:08 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 11:45:08 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 11:45:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 11:45:11 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 11:45:11 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 11:45:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 11:45:46 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 11:45:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:45:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:46:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:46:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 11:46:14 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 11:46:14 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 11:46:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 11:46:21 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 11:46:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 11:46:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 11:50:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 11:50:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 11:50:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 11:50:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 11:51:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:52:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:52:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:52:43 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 11:52:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 11:53:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 11:57:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:57:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 11:57:51 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 11:57:51 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 11:59:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 11:59:57 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-10 12:00:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:00:47 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 12:01:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:01:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 12:02:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:04:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 12:04:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:04:59 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 12:05:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:05:01 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-10 12:05:01'
WHERE "id" = 'build'
ERROR - 2019-09-10 12:05:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:05:03 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 12:05:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:05:05 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-10 12:05:05'
WHERE "id" = 'build'
ERROR - 2019-09-10 12:05:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:05:06 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 12:05:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:05:08 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-10 12:05:08'
WHERE "id" = 'build'
ERROR - 2019-09-10 12:05:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:05:10 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 12:05:30 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 12:05:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:06:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:06:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:06:35 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 12:06:35 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 12:06:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:07:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:07:32 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-10 12:08:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:08:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 12:09:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:09:17 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 12:09:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:09:22 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 12:09:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:09:31 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 12:09:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:09:47 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 12:09:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:09:54 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 12:10:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:10:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:11:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:11:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 12:11:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 12:11:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:11:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:11:38 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 12:11:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:11:53 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 12:11:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:11:53 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 12:11:53 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 12:12:33 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 12:12:33 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 12:13:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:13:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:13:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:13:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:13:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:13:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:13:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:13:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:13:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:13:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:13:46 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 12:13:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:13:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:13:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:13:48 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 12:13:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:13:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:13:50 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-10 12:13:50'
WHERE "id" = 'build'
ERROR - 2019-09-10 12:13:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:13:52 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 12:15:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:15:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:15:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:15:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 12:15:46 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 12:15:46 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 12:16:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:16:24 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 12:16:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:16:24 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 12:16:34 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-10 12:16:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:16:47 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 12:16:48 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 12:17:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 12:17:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 12:17:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:17:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:19:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:19:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:19:58 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 12:20:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:20:13 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 12:20:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:20:13 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 12:20:13 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 12:20:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:21:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:21:14 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 12:21:14 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 12:21:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 12:21:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 12:22:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 12:22:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 12:23:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:23:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 12:23:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 12:23:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 12:23:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 12:24:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:24:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:24:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 12:25:04 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-10 12:25:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:25:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:27:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:27:20 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 12:27:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 12:27:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:27:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 12:28:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:28:06 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 12:28:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:28:06 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 12:28:06 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 12:28:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 12:29:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:29:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 12:29:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:29:30 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 12:29:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:29:35 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 12:29:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 12:29:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:29:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:29:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:29:52 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 12:29:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:29:52 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 12:29:52 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 12:29:56 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 12:30:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:30:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:30:17 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 12:30:17 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 12:30:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:30:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:30:59 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 12:30:59 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 12:31:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:31:37 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 12:31:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:31:37 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 12:31:38 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 12:31:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:32:01 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-10 12:32:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:32:08 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-10 12:32:28 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 12:32:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:32:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:33:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:33:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:36:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:36:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 12:36:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:36:26 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 12:36:49 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-10 12:36:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:36:54 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 12:39:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:39:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:39:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:39:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 12:39:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:40:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:40:03 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 12:40:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_ktp_un&quot;
DETAIL:  Key (ktp_number)=(3174101205620011) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:40:36 --> Query error: ERROR:  duplicate key value violates unique constraint "master_ktp_un"
DETAIL:  Key (ktp_number)=(3174101205620011) already exists. - Invalid query: INSERT INTO "master_ktp" ("name", "created_by", "ktp_number", "location", "type", "address", "path_photo") VALUES ('PANDU TRIBRATHA', '23', '3174101205620011', 'Jakarta', 'KTP Seumur Hidup', 'JL Masjid no 85 kel petukangan Utara kec pesanggarahan Jakarta Selatan', '/uploads/ktp/KTP_31741012056200111.jpg')
ERROR - 2019-09-10 12:40:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:40:36 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 12:40:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:40:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:41:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:43:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 12:44:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:46:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:46:39 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 12:46:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:47:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 12:47:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 12:48:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_sim_un&quot;
DETAIL:  Key (sim_number)=(1205170914682) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:48:53 --> Query error: ERROR:  duplicate key value violates unique constraint "master_sim_un"
DETAIL:  Key (sim_number)=(1205170914682) already exists. - Invalid query: INSERT INTO "master_sim" ("created_by", "sim_number", "name", "type", "address", "sim_expire_date", "path_photo") VALUES ('23', '1205170914682', 'DERY KURNIAWAN', 'A', 'RAWAMANGUN TEGALAN NO. 63 RT 008 RW 003,RAWAMANGUN,PULO GADUNG', '09/05/2022', '/uploads/sim/SIM_12051709146821.jpg')
ERROR - 2019-09-10 12:48:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:48:53 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 12:49:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:50:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:50:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 12:50:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:50:07 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 12:50:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 12:50:09 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-10 12:50:09'
WHERE "id" = 'build'
ERROR - 2019-09-10 12:53:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 12:53:14 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 12:53:50 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 12:55:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 13:00:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 13:00:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 13:03:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 13:03:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 13:05:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_car_no_stnk_unique&quot;
DETAIL:  Key (no_stnk)=(2992871) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 13:05:49 --> Query error: ERROR:  duplicate key value violates unique constraint "master_car_no_stnk_unique"
DETAIL:  Key (no_stnk)=(2992871) already exists. - Invalid query: INSERT INTO "master_car" ("id_pool", "tahun", "no_pintu", "no_polisi", "unit_bisnis", "no_rangka", "no_mesin", "merek", "tipe", "warna", "no_stnk", "no_tera", "no_keur", "no_kiukio", "setoran_harian", "date_expired_stnk", "date_expired_tera", "date_expired_keur", "date_expired_kiukio", "image_path_stnk", "image_path_keur", "image_path_tera", "image_path_kiukio", "status", "create_by") VALUES ('1', '2014', 'JJB8216', 'B 1154 KUA', 'TIARA', 'ANH208348871', '2AZG450265', 'TOYOTA', 'ALPHARD X 2.4 AT', 'WULING', '2992871', '43.05559', 'BKS 152622', '0036337', 0, '2020-05-26', '2019-08-16', '2020-02-16', '2019-12-31', '/uploads/stnk/STNK_JJB8216.pdf', '/uploads/keur/KEUR_JJB8216.pdf', '/uploads/tera/TERA_JJB8216.pdf', '/uploads/kiukio/KIUKIO_JJB8216.pdf', 'Waiting Approval', '18')
ERROR - 2019-09-10 13:05:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 13:09:50 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:10:44 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:10:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 13:10:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 13:10:56 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:11:07 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:11:30 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 13:12:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 13:18:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 13:19:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:19:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:20:31 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-10 13:20:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 13:21:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:22:45 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:23:16 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:24:31 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:26:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 13:27:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:27:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:27:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:27:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:27:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 13:27:41 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 13:28:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:29:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:29:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:30:05 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:30:07 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:30:09 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:30:10 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:30:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:30:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:30:50 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:31:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 13:31:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 13:31:53 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:32:32 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:34:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:34:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 13:34:51 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 13:35:06 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:36:06 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:36:44 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:37:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:37:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:38:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:38:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 13:38:10 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 13:38:20 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-10 13:38:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:38:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 13:38:27 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 13:38:27 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 13:39:04 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-10 13:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:39:48 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:40:05 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-10 13:40:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:40:11 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 13:40:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 13:40:11 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 13:40:23 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:40:46 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:42:12 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:43:02 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:46:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:47:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 13:47:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 13:47:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 13:49:55 --> Severity: Notice --> Undefined index: novi_hariyanto /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-10 13:51:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:51:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:51:23 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 13:51:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 13:51:23 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 13:51:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:51:30 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 13:51:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 13:51:30 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 13:52:58 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:53:00 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:53:01 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:53:05 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:53:08 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:53:12 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 13:53:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 13:53:47 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:54:16 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:54:50 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:54:52 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:54:53 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:55:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 13:55:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:56:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 13:56:53 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 13:56:53 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 13:57:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 13:57:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 13:57:16 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:57:21 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:57:22 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:57:27 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:57:28 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:57:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:57:43 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 13:57:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 13:57:43 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 13:57:59 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:58:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 13:58:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 13:58:20 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:58:26 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:58:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 13:58:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 13:58:28 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:58:30 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:58:32 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:58:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 13:58:33 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:58:34 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:58:36 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 13:58:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 13:59:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 13:59:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 13:59:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:00:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 14:00:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 14:00:06 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 14:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 14:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 14:00:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:00:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 14:00:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 14:00:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:02:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-10 14:02:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:02:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:02:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:03:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:03:44 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 14:03:46 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 14:03:46 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 14:03:46 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 14:04:00 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 14:04:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:04:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:05:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 14:05:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 14:05:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:06:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:07:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:07:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:08:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:08:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:08:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:08:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:08:54 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 14:08:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:10:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:10:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:10:27 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 14:11:30 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-10 14:11:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:12:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:12:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:12:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:12:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:12:41 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 14:12:41 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 14:12:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:13:00 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 14:13:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:13:00 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 14:13:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:13:05 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 14:13:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:15:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:16:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:16:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:16:27 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 14:16:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:16:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:16:38 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 14:16:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 14:16:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 14:16:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:16:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:16:59 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 14:17:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:17:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:17:03 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 14:18:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:19:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:19:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 14:19:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:19:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:19:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:20:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:21:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:21:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:21:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:21:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:21:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:21:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:22:35 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 14:22:45 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 14:22:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;kembalian&quot; of relation &quot;trx_setoran&quot; does not exist
LINE 1: ...payment_via_tabungan&quot;, &quot;payment_total&quot;, &quot;status&quot;, &quot;kembalian...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:22:46 --> Query error: ERROR:  column "kembalian" of relation "trx_setoran" does not exist
LINE 1: ...payment_via_tabungan", "payment_total", "status", "kembalian...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_tabungan", "payment_total", "status", "kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('8', '2019-09-10 14:22:45', 'TTS/PB/20190910/4', '140000', '140000', '0', '140000', 0, 140000, 'Paid', '140000', '26', NULL, '1')
ERROR - 2019-09-10 14:22:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:22:46 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 14:22:59 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 14:23:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;kembalian&quot; of relation &quot;trx_setoran&quot; does not exist
LINE 1: ...payment_via_tabungan&quot;, &quot;payment_total&quot;, &quot;status&quot;, &quot;kembalian...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:23:07 --> Query error: ERROR:  column "kembalian" of relation "trx_setoran" does not exist
LINE 1: ...payment_via_tabungan", "payment_total", "status", "kembalian...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_tabungan", "payment_total", "status", "kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('8', '2019-09-10 14:23:07', 'TTS/PB/20190910/4', '140000', '140000', '0', '140000', 0, 140000, 'Paid', '140000', '26', NULL, '1')
ERROR - 2019-09-10 14:23:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:23:07 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 14:23:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:23:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:23:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:23:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:23:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:24:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;kembalian&quot; of relation &quot;trx_setoran&quot; does not exist
LINE 1: ...payment_via_tabungan&quot;, &quot;payment_total&quot;, &quot;status&quot;, &quot;kembalian...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:24:01 --> Query error: ERROR:  column "kembalian" of relation "trx_setoran" does not exist
LINE 1: ...payment_via_tabungan", "payment_total", "status", "kembalian...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_tabungan", "payment_total", "status", "kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('8', '2019-09-10 14:24:01', 'TTS/PB/20190910/4', '140000', '140000', '0', '140000', 0, 140000, 'Paid', '140000', '26', NULL, '1')
ERROR - 2019-09-10 14:24:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:24:01 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 14:24:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;kembalian&quot; of relation &quot;trx_setoran&quot; does not exist
LINE 1: ...payment_via_tabungan&quot;, &quot;payment_total&quot;, &quot;status&quot;, &quot;kembalian...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:24:41 --> Query error: ERROR:  column "kembalian" of relation "trx_setoran" does not exist
LINE 1: ...payment_via_tabungan", "payment_total", "status", "kembalian...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_tabungan", "payment_total", "status", "kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('8', '2019-09-10 14:24:41', 'TTS/PB/20190910/4', '140000', '140000', '0', '140000', 0, 140000, 'Paid', '140000', '26', NULL, '1')
ERROR - 2019-09-10 14:24:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:24:41 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 14:24:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:25:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:25:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:25:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:25:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:26:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:26:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;kembalian&quot; of relation &quot;trx_setoran&quot; does not exist
LINE 1: ...payment_via_tabungan&quot;, &quot;payment_total&quot;, &quot;status&quot;, &quot;kembalian...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:26:39 --> Query error: ERROR:  column "kembalian" of relation "trx_setoran" does not exist
LINE 1: ...payment_via_tabungan", "payment_total", "status", "kembalian...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_tabungan", "payment_total", "status", "kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('8', '2019-09-10 14:26:39', 'TTS/PB/20190910/4', '140000', '140000', '0', '140000', 0, 140000, 'Paid', '140000', '26', NULL, '1')
ERROR - 2019-09-10 14:26:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:26:39 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 14:26:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 14:27:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:27:59 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 14:27:59 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 14:28:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:28:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:28:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:29:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:29:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:29:11 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 14:29:11 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 14:29:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:29:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:29:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:30:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 14:30:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:31:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 14:31:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 14:31:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:33:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:33:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:33:09 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 14:33:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:33:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:33:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:33:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:33:39 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 14:33:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:33:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:33:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 14:34:08 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 14:34:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 14:34:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 14:34:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 14:34:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 14:34:51 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-10 14:34:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:37:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:37:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:37:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:38:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:39:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:39:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:40:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:40:42 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-10 14:40:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:41:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:41:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:41:16 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 14:41:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:41:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:41:29 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 14:41:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:41:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:41:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:41:41 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 14:41:49 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 14:41:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:41:49 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 14:41:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-10 14:42:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:42:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:42:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:42:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 14:42:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:43:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:43:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 14:43:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 14:43:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 14:44:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:44:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:44:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 14:44:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 14:44:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:44:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:44:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:45:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:45:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:45:12 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 14:45:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 14:45:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 14:45:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:46:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:46:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:47:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:47:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:47:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 14:47:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 14:47:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:47:29 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 14:47:41 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-10 14:47:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:48:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:48:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:49:07 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 14:49:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:49:09 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 14:49:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:49:09 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 14:49:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:49:11 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-10 14:49:11'
WHERE "id" = 'build'
ERROR - 2019-09-10 14:49:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 14:49:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 14:49:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:50:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:50:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:50:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_car_no_stnk_unique&quot;
DETAIL:  Key (no_stnk)=(2992871) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:50:11 --> Query error: ERROR:  duplicate key value violates unique constraint "master_car_no_stnk_unique"
DETAIL:  Key (no_stnk)=(2992871) already exists. - Invalid query: INSERT INTO "master_car" ("id_pool", "tahun", "no_pintu", "no_polisi", "unit_bisnis", "no_rangka", "no_mesin", "merek", "tipe", "warna", "no_stnk", "no_tera", "no_keur", "no_kiukio", "setoran_harian", "date_expired_stnk", "date_expired_tera", "date_expired_keur", "date_expired_kiukio", "image_path_stnk", "image_path_keur", "image_path_tera", "image_path_kiukio", "status", "create_by") VALUES ('1', '2014', 'JJB8216', 'B 1154 KUA', 'TIARA', 'ANH208348871', '2AZG450265', 'TOYOTA', 'ALPHARD X 2.4 AT', 'WULING', '2992871', '43.05559', 'BKS 152622', '0036337', 0, '2020-05-26', '2019-08-16', '2020-02-16', '2019-12-31', '/uploads/stnk/STNK_JJB82161.pdf', '/uploads/keur/KEUR_JJB82161.pdf', '/uploads/tera/TERA_JJB82161.pdf', '/uploads/kiukio/KIUKIO_JJB82161.pdf', 'Waiting Approval', '23')
ERROR - 2019-09-10 14:50:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 14:50:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:51:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:51:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:51:06 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 14:51:06 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 14:51:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:52:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 14:52:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:52:32 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 14:52:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 14:53:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:53:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:53:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:54:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 14:54:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 14:54:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:54:34 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 14:54:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:54:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 14:54:41 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 14:54:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:54:41 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 14:55:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 14:55:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 14:56:38 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-10 14:56:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:57:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:57:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 14:57:38 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 14:57:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 14:57:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:04:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:04:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 15:04:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:04:12 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 15:04:33 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-10 15:07:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:08:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-10 15:08:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:08:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 15:11:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:11:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:11:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:16:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:16:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:18:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:21:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:21:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:21:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 15:22:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:22:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:22:37 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-10 15:23:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:23:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 15:23:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:23:41 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 15:23:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:26:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:27:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:27:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:27:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:27:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:32:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 15:32:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 15:32:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:33:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:33:00 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 15:33:00 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-10 15:35:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:36:17 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-10 15:37:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 15:37:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 15:37:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:37:16 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 15:37:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:37:16 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 15:38:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:38:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:38:20 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 15:38:20 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-10 15:38:20 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-10 15:38:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:38:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:38:46 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 15:39:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:40:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:40:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:40:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:40:37 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 15:40:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:40:53 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 15:40:53 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-10 15:40:53 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-10 15:40:57 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-10 15:41:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:41:08 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 15:41:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:41:15 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 15:41:15 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-10 15:41:15 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-10 15:41:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:41:24 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 15:41:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:41:28 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 15:41:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:41:32 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 512
ERROR - 2019-09-10 15:41:32 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 515
ERROR - 2019-09-10 15:41:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 6:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:41:32 --> Query error: ERROR:  syntax error at or near ";"
LINE 6:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-09-10 15:41:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 15:41:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 15:41:51 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-10 15:42:31 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-10 15:43:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:43:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:43:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:43:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:43:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:43:28 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 15:43:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:43:55 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 15:44:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:44:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:44:12 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 15:44:12 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-10 15:44:12 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-10 15:44:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:44:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:44:29 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 15:44:29 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-10 15:44:29 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-10 15:45:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:45:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:45:49 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 15:45:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:45:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 15:45:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 15:45:54 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-10 15:45:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:46:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:46:30 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 15:46:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:46:30 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 15:46:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:46:31 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_tabungan", "payment_total", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-09-10 15:46:31', 'TTS-TIARA/BCG/20190910/6', '0', '', '0', '0', 0, 0, 'Paid', '0', '38', NULL, '5')
ERROR - 2019-09-10 15:46:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:46:31 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 15:46:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:46:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:46:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:47:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:47:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:47:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:47:37 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_tabungan", "payment_total", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-09-10 15:47:37', 'TTS-TIARA/BCG/20190910/6', '0', '', '0', '0', 0, 0, 'Paid', '0', '38', NULL, '5')
ERROR - 2019-09-10 15:47:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:47:37 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 15:47:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:47:37 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 15:47:37 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-10 15:47:37 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-10 15:47:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:48:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:48:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:48:11 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_tabungan", "payment_total", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-09-10 15:48:11', 'TTS-TIARA/BCG/20190910/6', '0', '', '0', '0', 0, 0, 'Paid', '0', '38', NULL, '5')
ERROR - 2019-09-10 15:48:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:48:11 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 15:48:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:48:16 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 15:48:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:48:16 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 15:48:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:48:32 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_tabungan", "payment_total", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-09-10 15:48:32', 'TTS-TIARA/BCG/20190910/6', '0', '', '0', '0', 0, 0, 'Paid', '0', '38', NULL, '5')
ERROR - 2019-09-10 15:48:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:48:32 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 15:48:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-10 15:48:40 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-10 15:48:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:49:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:50:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:50:01 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-10 15:50:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:50:01 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 15:50:01 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-10 15:50:02 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 15:50:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:50:02 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 15:50:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:50:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-10 15:50:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:50:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:50:37 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-10 15:51:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:51:32 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 15:51:32 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-10 15:51:32 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-10 15:51:36 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-10 15:51:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:51:36 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-10 15:51:36 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 15:51:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:52:04 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-10 15:52:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:52:56 --> Severity: Notice --> Undefined index: novi_hariyanto /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-10 15:53:08 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-10 15:53:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:53:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:53:30 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 15:53:34 --> Severity: Notice --> Undefined index: deky /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-10 15:53:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:54:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:54:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:54:21 --> Severity: Notice --> Undefined index: sigit /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-10 15:54:21 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 15:54:31 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 15:54:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 15:55:13 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-10 15:55:17 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-10 15:55:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 15:55:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:55:28 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 15:55:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:55:28 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 15:55:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:55:30 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-10 15:55:30'
WHERE "id" = 'build'
ERROR - 2019-09-10 15:55:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:55:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-10 15:55:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:55:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:56:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:56:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:56:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:56:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:56:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 15:56:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:56:36 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 15:56:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:56:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 15:56:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:56:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:56:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 15:56:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:57:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 15:57:08 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 512
ERROR - 2019-09-10 15:57:08 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 515
ERROR - 2019-09-10 15:57:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 6:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 15:57:08 --> Query error: ERROR:  syntax error at or near ";"
LINE 6:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-09-10 15:57:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:57:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 15:59:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:00:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:03:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 16:03:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 16:03:53 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-10 16:10:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:10:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:13:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 16:13:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 16:14:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 16:14:23 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2019-09-10 16:14:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 16:14:38 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-09-10 16:14:38', 'TTS-TIARA/BCG/20190910/7', '0', '', '0', '0', '0', '0', '0', 0, 0, '', '', '', 'Paid', '0', '43', NULL, '5')
ERROR - 2019-09-10 16:14:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 16:14:38 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 16:14:49 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 16:14:49 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 16:14:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:15:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 16:15:20 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2019-09-10 16:15:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 16:15:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 16:15:36 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 16:16:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:17:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 16:17:34 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-09-10 16:17:34', 'TTS-TIARA/BCG/20190910/7', '0', '', '0', '0', '0', '0', '0', 0, 0, '', '', '', 'Paid', '0', '43', NULL, '5')
ERROR - 2019-09-10 16:17:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 16:17:34 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 16:17:52 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 16:17:53 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 16:18:49 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 16:18:49 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 16:19:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 16:19:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 16:19:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:21:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:22:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 16:22:48 --> Severity: Notice --> Undefined index: tukiyo /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-10 16:23:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:24:51 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 16:25:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 16:25:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 16:26:24 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 16:26:24 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 16:26:24 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 16:26:26 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 16:30:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:30:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:31:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:31:58 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-10 16:33:18 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 16:33:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:33:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:33:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:34:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:34:21 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-10 16:34:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 16:34:21 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 16:34:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:34:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 16:34:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 16:34:40 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 16:34:45 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-10 16:35:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:35:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 16:35:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 16:35:18 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 16:35:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:35:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 16:35:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 16:35:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 16:35:27 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 16:35:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:36:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:36:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 16:36:07 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 16:36:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 16:36:14 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 16:36:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:36:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 16:36:20 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 16:36:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:36:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:37:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:38:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:39:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 16:39:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 16:39:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:39:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:39:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 16:39:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:41:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-10 16:41:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:41:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:42:22 --> Severity: Notice --> Undefined index: novi_hariyanto /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-10 16:42:43 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-10 16:43:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:43:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:43:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:44:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:44:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:44:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 16:44:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 16:44:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:45:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:45:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:45:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 16:45:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 16:45:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:45:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:45:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 16:45:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 16:45:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 16:45:47 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-10 16:46:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 16:46:56 --> Severity: Notice --> Undefined index: sigit /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-10 16:50:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 16:50:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:54:11 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-10 16:54:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 16:59:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 17:00:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 17:01:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-10 17:01:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 17:03:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 17:03:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 17:05:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 17:06:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 17:07:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-10 17:07:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 17:09:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...:09:01', 'Paid', 'Pemotongan Jaminan', '0', -9, -9, '1', '')
                                                                    ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 17:09:01 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...:09:01', 'Paid', 'Pemotongan Jaminan', '0', -9, -9, '1', '')
                                                                    ^ - Invalid query: INSERT INTO "ap_jaminan" ("created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "driver_id") VALUES ('2019-09-10 17:09:01', 'Paid', 'Pemotongan Jaminan', '0', -9, -9, '1', '')
ERROR - 2019-09-10 17:09:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 17:09:01 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 17:09:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...:09:20', 'Paid', 'Pemotongan Jaminan', '0', -9, -9, '1', '')
                                                                    ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 17:09:20 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...:09:20', 'Paid', 'Pemotongan Jaminan', '0', -9, -9, '1', '')
                                                                    ^ - Invalid query: INSERT INTO "ap_jaminan" ("created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "driver_id") VALUES ('2019-09-10 17:09:20', 'Paid', 'Pemotongan Jaminan', '0', -9, -9, '1', '')
ERROR - 2019-09-10 17:09:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 17:09:20 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 17:10:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...:10:18', 'Paid', 'Pemotongan Jaminan', '0', -9, -9, '1', '')
                                                                    ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 17:10:18 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...:10:18', 'Paid', 'Pemotongan Jaminan', '0', -9, -9, '1', '')
                                                                    ^ - Invalid query: INSERT INTO "ap_jaminan" ("created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "driver_id") VALUES ('2019-09-10 17:10:18', 'Paid', 'Pemotongan Jaminan', '0', -9, -9, '1', '')
ERROR - 2019-09-10 17:10:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 17:10:18 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 17:10:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...:10:51', 'Paid', 'Pemotongan Jaminan', '0', -9, -9, '1', '')
                                                                    ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 17:10:51 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...:10:51', 'Paid', 'Pemotongan Jaminan', '0', -9, -9, '1', '')
                                                                    ^ - Invalid query: INSERT INTO "ap_jaminan" ("created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "driver_id") VALUES ('2019-09-10 17:10:51', 'Paid', 'Pemotongan Jaminan', '0', -9, -9, '1', '')
ERROR - 2019-09-10 17:10:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 17:10:51 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 17:11:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...:11:16', 'Paid', 'Pemotongan Jaminan', '0', -9, -9, '1', '')
                                                                    ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 17:11:16 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...:11:16', 'Paid', 'Pemotongan Jaminan', '0', -9, -9, '1', '')
                                                                    ^ - Invalid query: INSERT INTO "ap_jaminan" ("created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "driver_id") VALUES ('2019-09-10 17:11:16', 'Paid', 'Pemotongan Jaminan', '0', -9, -9, '1', '')
ERROR - 2019-09-10 17:11:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 17:11:16 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 17:13:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 17:13:55 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-09-10 17:13:55', 'TTS-TIARA/PB/20190910/8', '10', '', '0', '90', '0', '0', '0', 0, 90, '', '', '', 'Paid', '80', '1', NULL, '1')
ERROR - 2019-09-10 17:13:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 17:13:55 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 17:20:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 17:21:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 17:21:07 --> Query error: ERROR:  column "build" does not exist
LINE 9:    where a.id=build;
                      ^ - Invalid query: select a.id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.last_education, a.status, a.email,
			a.bank_account_number, a.skck_number, a.domicile_address, a.phone, a.religion, a.path_photo, b.ktp_number, b.location, b.type, b.address,
			b.path_photo as path_ktp, c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, a.path_rek, e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-10 17:22:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 17:25:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 17:27:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.payment_cash does not exist
LINE 3: ...rental, c.jam_mulai_denda, c.created as spj_date, a.payment_...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 17:27:13 --> Query error: ERROR:  column a.payment_cash does not exist
LINE 3: ...rental, c.jam_mulai_denda, c.created as spj_date, a.payment_...
                                                             ^ - Invalid query: select 
			a.id, a.doc_number as setoran_no, c.doc_number as spj_no, e.no_pintu, f.kip_number, f.name as driver_name, a.total_tagihan, 
			a.payment_total,a.created, b.username,  d.name as pool_name, c.tipe_rental, c.jam_mulai_denda, c.created as spj_date, a.payment_cash, a.payment_credit_ticket
			from trx_setoran a
			left join cac_user b on (a.creator_id = b.id) 
			left join trx_spj c on (a.spj_id = c.id)
			left join master_pool d on (a.pool_id = d.id)
			left join master_car e on (c.car_id = e.id)
			left join master_driver f on (c.driver_id = f.id) 
			where e.unit_bisnis IN ('EXPRESS','EAGLE')
			order by a.created desc;
ERROR - 2019-09-10 17:27:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.payment_cash does not exist
LINE 3: ...rental, c.jam_mulai_denda, c.created as spj_date, a.payment_...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 17:27:14 --> Query error: ERROR:  column a.payment_cash does not exist
LINE 3: ...rental, c.jam_mulai_denda, c.created as spj_date, a.payment_...
                                                             ^ - Invalid query: select 
			a.id, a.doc_number as setoran_no, c.doc_number as spj_no, e.no_pintu, f.kip_number, f.name as driver_name, a.total_tagihan, 
			a.payment_total,a.created, b.username,  d.name as pool_name, c.tipe_rental, c.jam_mulai_denda, c.created as spj_date, a.payment_cash, a.payment_credit_ticket
			from trx_setoran a
			left join cac_user b on (a.creator_id = b.id) 
			left join trx_spj c on (a.spj_id = c.id)
			left join master_pool d on (a.pool_id = d.id)
			left join master_car e on (c.car_id = e.id)
			left join master_driver f on (c.driver_id = f.id) 
			where e.unit_bisnis IN ('EXPRESS','EAGLE')
			order by a.created desc;
ERROR - 2019-09-10 17:29:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.payment_via_jaminan does not exist
LINE 4:    a.payment_via_jaminan
           ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 17:29:19 --> Query error: ERROR:  column a.payment_via_jaminan does not exist
LINE 4:    a.payment_via_jaminan
           ^ - Invalid query: select 
			a.id, a.doc_number as setoran_no, c.doc_number as spj_no, e.no_pintu, f.kip_number, f.name as driver_name, a.total_tagihan, 
			a.payment_total,a.created, b.username,  d.name as pool_name, c.tipe_rental, c.jam_mulai_denda, c.created as spj_date, a.payment_via_cash, a.payment_via_ct,
			a.payment_via_jaminan
			from trx_setoran a
			left join cac_user b on (a.creator_id = b.id) 
			left join trx_spj c on (a.spj_id = c.id)
			left join master_pool d on (a.pool_id = d.id)
			left join master_car e on (c.car_id = e.id)
			left join master_driver f on (c.driver_id = f.id) 
			where e.unit_bisnis IN ('EXPRESS','EAGLE')
			order by a.created desc;
ERROR - 2019-09-10 17:29:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.payment_via_jaminan does not exist
LINE 4:    a.payment_via_jaminan
           ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 17:29:19 --> Query error: ERROR:  column a.payment_via_jaminan does not exist
LINE 4:    a.payment_via_jaminan
           ^ - Invalid query: select 
			a.id, a.doc_number as setoran_no, c.doc_number as spj_no, e.no_pintu, f.kip_number, f.name as driver_name, a.total_tagihan, 
			a.payment_total,a.created, b.username,  d.name as pool_name, c.tipe_rental, c.jam_mulai_denda, c.created as spj_date, a.payment_via_cash, a.payment_via_ct,
			a.payment_via_jaminan
			from trx_setoran a
			left join cac_user b on (a.creator_id = b.id) 
			left join trx_spj c on (a.spj_id = c.id)
			left join master_pool d on (a.pool_id = d.id)
			left join master_car e on (c.car_id = e.id)
			left join master_driver f on (c.driver_id = f.id) 
			where e.unit_bisnis IN ('EXPRESS','EAGLE')
			order by a.created desc;
ERROR - 2019-09-10 17:29:44 --> Severity: error --> Exception: /var/www/html/rental/application/models/Spj_model.php exists, but doesn't declare class Spj_model /var/www/html/rental/system/core/Loader.php 336
ERROR - 2019-09-10 17:29:44 --> Severity: error --> Exception: /var/www/html/rental/application/models/Spj_model.php exists, but doesn't declare class Spj_model /var/www/html/rental/system/core/Loader.php 336
ERROR - 2019-09-10 17:36:00 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/spj/setoran_spj_index.php 54
ERROR - 2019-09-10 17:36:00 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/spj/setoran_spj_index.php 54
ERROR - 2019-09-10 17:36:00 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/spj/setoran_spj_index.php 54
ERROR - 2019-09-10 17:36:00 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/spj/setoran_spj_index.php 54
ERROR - 2019-09-10 17:36:00 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/spj/setoran_spj_index.php 54
ERROR - 2019-09-10 17:36:00 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/spj/setoran_spj_index.php 54
ERROR - 2019-09-10 17:36:00 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/spj/setoran_spj_index.php 54
ERROR - 2019-09-10 17:36:00 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/spj/setoran_spj_index.php 54
ERROR - 2019-09-10 17:36:00 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/spj/setoran_spj_index.php 54
ERROR - 2019-09-10 17:36:00 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/spj/setoran_spj_index.php 54
ERROR - 2019-09-10 17:36:00 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/spj/setoran_spj_index.php 54
ERROR - 2019-09-10 17:36:00 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/spj/setoran_spj_index.php 54
ERROR - 2019-09-10 17:36:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 17:36:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 17:40:36 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-10 17:40:41 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-10 17:41:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 17:43:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 17:43:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 17:53:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 18:03:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 18:03:54 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-09-10 18:03:54', 'TTS/PB/20190910/8', '0', '0', '0', '1', '0', 0, 0, 0, 1, '', '', '', 'Paid', '1', '1', NULL, '1')
ERROR - 2019-09-10 18:03:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 18:03:54 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 18:04:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 18:04:04 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-09-10 18:04:04', 'TTS-TIARA/PB/20190910/8', '0', '', '0', '1', '0', '0', '0', 0, 1, '', '', '', 'Paid', '1', '1', NULL, '1')
ERROR - 2019-09-10 18:04:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 18:04:04 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-10 18:13:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 18:46:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 19:00:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-10 19:03:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 19:21:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 19:25:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 19:25:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 19:44:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 19:45:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 19:45:53 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 19:46:15 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-10 19:46:15 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-10 19:46:15 --> 404 Page Not Found: Report/build
ERROR - 2019-09-10 19:46:38 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-10 19:46:41 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-10 19:46:41 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-10 19:46:46 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 19:57:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 19:58:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 20:02:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 20:02:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 20:02:07 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 20:02:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 20:02:07 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 20:02:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 20:02:09 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-10 20:02:09'
WHERE "id" = 'build'
ERROR - 2019-09-10 20:02:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 20:02:13 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-10 20:02:15 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 20:02:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 20:12:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 20:34:19 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-10 20:34:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 20:34:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 20:34:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 20:35:29 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 20:36:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 21:34:49 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-10 21:34:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 21:37:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 21:38:07 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 21:44:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 21:51:10 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 21:51:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 21:51:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 21:59:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 22:05:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 22:05:43 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 22:05:43 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 22:06:42 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 22:16:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 22:16:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 22:27:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 22:27:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 22:28:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 22:37:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 22:37:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 22:38:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 22:44:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-10 22:44:48 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-10 22:47:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 22:47:54 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 22:54:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 22:56:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 22:57:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 22:57:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 23:06:08 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 23:06:10 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 23:06:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 23:19:03 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 23:19:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 23:29:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_car_no_stnk_unique&quot;
DETAIL:  Key (no_stnk)=(2992872) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 23:29:40 --> Query error: ERROR:  duplicate key value violates unique constraint "master_car_no_stnk_unique"
DETAIL:  Key (no_stnk)=(2992872) already exists. - Invalid query: INSERT INTO "master_car" ("id_pool", "tahun", "no_pintu", "no_polisi", "unit_bisnis", "no_rangka", "no_mesin", "merek", "tipe", "warna", "no_stnk", "no_tera", "no_keur", "no_kiukio", "setoran_harian", "date_expired_stnk", "date_expired_tera", "date_expired_keur", "date_expired_kiukio", "image_path_stnk", "image_path_keur", "image_path_tera", "image_path_kiukio", "status", "create_by") VALUES ('5', '2014', 'JJB8210', 'B1160KUA', 'TIARA', 'ANH208347560', '2AZG447058', 'TOYOTA', 'ALPHARD X 2.4 AT', 'WULING', '2992872', '05565', '152628', '3230018-00370', 0, '2020-05-26', '2019-04-11', '2019-09-15', '2019-12-31', '/uploads/stnk/STNK_jjb8210.jpeg', '/uploads/keur/KEUR_jjb8210.jpeg', '/uploads/tera/TERA_jjb8210.jpeg', '/uploads/kiukio/KIUKIO_jjb8210.jpeg', 'Waiting Approval', '36')
ERROR - 2019-09-10 23:29:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 23:29:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 23:33:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_car_no_stnk_unique&quot;
DETAIL:  Key (no_stnk)=(2992872) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-10 23:33:16 --> Query error: ERROR:  duplicate key value violates unique constraint "master_car_no_stnk_unique"
DETAIL:  Key (no_stnk)=(2992872) already exists. - Invalid query: INSERT INTO "master_car" ("id_pool", "tahun", "no_pintu", "no_polisi", "unit_bisnis", "no_rangka", "no_mesin", "merek", "tipe", "warna", "no_stnk", "no_tera", "no_keur", "no_kiukio", "setoran_harian", "date_expired_stnk", "date_expired_tera", "date_expired_keur", "date_expired_kiukio", "image_path_stnk", "image_path_keur", "image_path_tera", "image_path_kiukio", "status", "create_by") VALUES ('5', '2014', 'JJB8210', 'B1160KUA', 'TIARA', 'ANH208347560', '2AZG447058', 'TOYOTA', 'ALPHARD X 2.4 AT', 'WULING', '2992872', '05565', '152628', '3230018-00370', 0, '2020-05-26', '2019-04-11', '2019-09-15', '2019-12-31', '/uploads/stnk/STNK_jjb82101.jpeg', '/uploads/keur/KEUR_jjb82101.jpeg', '/uploads/tera/TERA_jjb82101.jpeg', '/uploads/kiukio/KIUKIO_jjb82101.jpeg', 'Waiting Approval', '36')
ERROR - 2019-09-10 23:33:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 23:33:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 23:33:29 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 23:34:10 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-10 23:34:10 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-10 23:34:18 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-10 23:35:05 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 23:35:17 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 23:35:25 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 23:35:33 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 23:35:37 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-10 23:35:39 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 23:35:43 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 23:35:45 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-10 23:36:07 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 23:36:13 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 23:36:17 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-10 23:36:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 23:41:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 23:42:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 23:42:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 23:46:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 23:56:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-10 23:56:07 --> 404 Page Not Found: Vehicle/build
