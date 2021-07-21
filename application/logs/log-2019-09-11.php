<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-11 00:10:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 00:38:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 00:53:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 01:15:21 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 01:15:29 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 01:16:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:16:06 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 01:16:06 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-11 01:16:11 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-11 01:16:14 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-11 01:16:33 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-11 01:17:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 01:17:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 01:21:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 01:22:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 01:22:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 01:22:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_car_no_stnk_unique&quot;
DETAIL:  Key (no_stnk)=(299838) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:22:41 --> Query error: ERROR:  duplicate key value violates unique constraint "master_car_no_stnk_unique"
DETAIL:  Key (no_stnk)=(299838) already exists. - Invalid query: INSERT INTO "master_car" ("id_pool", "tahun", "no_pintu", "no_polisi", "unit_bisnis", "no_rangka", "no_mesin", "merek", "tipe", "warna", "no_stnk", "no_tera", "no_keur", "no_kiukio", "setoran_harian", "date_expired_stnk", "date_expired_tera", "date_expired_keur", "date_expired_kiukio", "image_path_stnk", "image_path_keur", "image_path_tera", "image_path_kiukio", "status", "create_by") VALUES ('5', '2014', 'JJB8213', 'B1192KUA', 'TIARA', 'ANH208350525', '2AZG456589', 'TOYOTA', 'ALPHARD X 2.4 AT', 'WULING', '299838', '05595', '152658', '3230018-00384', 0, '2020-05-28', '2019-04-11', '2019-09-15', '2019-12-31', '/uploads/stnk/STNK_jjb82131.jpeg', '/uploads/keur/KEUR_jjb82131.jpeg', '/uploads/tera/TERA_jjb82131.jpeg', '/uploads/kiukio/KIUKIO_jjb82131.jpeg', 'Waiting Approval', '36')
ERROR - 2019-09-11 01:22:42 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 01:22:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_car_no_stnk_unique&quot;
DETAIL:  Key (no_stnk)=(2992835) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:22:47 --> Query error: ERROR:  duplicate key value violates unique constraint "master_car_no_stnk_unique"
DETAIL:  Key (no_stnk)=(2992835) already exists. - Invalid query: INSERT INTO "master_car" ("id_pool", "tahun", "no_pintu", "no_polisi", "unit_bisnis", "no_rangka", "no_mesin", "merek", "tipe", "warna", "no_stnk", "no_tera", "no_keur", "no_kiukio", "setoran_harian", "date_expired_stnk", "date_expired_tera", "date_expired_keur", "date_expired_kiukio", "image_path_stnk", "image_path_keur", "image_path_tera", "image_path_kiukio", "status", "create_by") VALUES ('5', '2014', 'JJB8289', 'B1146KUA', 'TIARA', 'ANH208349706', '2AZG460452', 'TOYOTA', 'ALPHARD X 2.4 AT', 'WULING', '2992835', '05551', '152614', '3230018-00362', 0, '2020-05-28', '2020-03-06', '2019-09-15', '2019-12-31', '/uploads/stnk/STNK_jjb82891.jpeg', '/uploads/keur/KEUR_jjb82891.jpeg', '/uploads/tera/TERA_jjb82891.jpeg', '/uploads/kiukio/KIUKIO_jjb82891.jpeg', 'Waiting Approval', '36')
ERROR - 2019-09-11 01:22:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 01:22:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 01:22:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 01:22:57 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 01:22:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 01:23:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 01:27:12 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 01:27:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_car_no_stnk_unique&quot;
DETAIL:  Key (no_stnk)=(2992872) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:27:43 --> Query error: ERROR:  duplicate key value violates unique constraint "master_car_no_stnk_unique"
DETAIL:  Key (no_stnk)=(2992872) already exists. - Invalid query: INSERT INTO "master_car" ("id_pool", "tahun", "no_pintu", "no_polisi", "unit_bisnis", "no_rangka", "no_mesin", "merek", "tipe", "warna", "no_stnk", "no_tera", "no_keur", "no_kiukio", "setoran_harian", "date_expired_stnk", "date_expired_tera", "date_expired_keur", "date_expired_kiukio", "image_path_stnk", "image_path_keur", "image_path_tera", "image_path_kiukio", "status", "create_by") VALUES ('5', '2014', 'JJB8210', 'B1160KUA', 'TIARA', 'ANH208347560', '2AZG447058', 'TOYOTA', 'ALPHARD X 2.4 AT', 'WULING', '2992872', '05565', '152628', '3230018-00370', 0, '2020-05-26', '2019-04-11', '2019-09-15', '2019-12-31', '/uploads/stnk/STNK_jjb82102.jpeg', '/uploads/keur/KEUR_jjb82102.jpeg', '/uploads/tera/TERA_jjb82102.jpeg', '/uploads/kiukio/KIUKIO_jjb82102.jpeg', 'Waiting Approval', '36')
ERROR - 2019-09-11 01:27:43 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 01:28:03 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 01:28:08 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 01:31:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_car_no_stnk_unique&quot;
DETAIL:  Key (no_stnk)=(2992872) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:31:01 --> Query error: ERROR:  duplicate key value violates unique constraint "master_car_no_stnk_unique"
DETAIL:  Key (no_stnk)=(2992872) already exists. - Invalid query: INSERT INTO "master_car" ("id_pool", "tahun", "no_pintu", "no_polisi", "unit_bisnis", "no_rangka", "no_mesin", "merek", "tipe", "warna", "no_stnk", "no_tera", "no_keur", "no_kiukio", "setoran_harian", "date_expired_stnk", "date_expired_tera", "date_expired_keur", "date_expired_kiukio", "image_path_stnk", "image_path_keur", "image_path_tera", "image_path_kiukio", "status", "create_by") VALUES ('5', '2014', 'JJB8210', 'B1160KUA', 'TIARA', 'ANH208347560', '2AZG447058', 'TOYOTA', 'ALPHARD X 2.4 AT', 'WULING', '2992872', '05565', '152628', '3230018-00370', 0, '2020-05-26', '2019-04-11', '2019-09-15', '2019-12-31', '/uploads/stnk/STNK_jjb82103.jpeg', '/uploads/keur/KEUR_jjb82103.jpeg', '/uploads/tera/TERA_jjb82103.jpeg', '/uploads/kiukio/KIUKIO_jjb82103.jpeg', 'Waiting Approval', '36')
ERROR - 2019-09-11 01:31:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 01:32:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:32:04 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 01:32:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 01:33:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:33:15 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 01:33:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:33:22 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 01:33:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:33:26 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 01:33:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:33:30 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 01:33:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:33:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 01:33:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:33:39 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 01:33:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:33:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 01:35:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:35:06 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 01:36:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:36:08 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 01:36:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:36:14 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 01:44:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 01:59:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 01:59:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 01:59:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:59:58 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 01:59:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 01:59:58 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 02:00:30 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-11 02:00:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 02:00:30 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 02:00:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 02:00:31 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 02:00:31 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-11 02:01:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 02:01:11 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 02:01:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 02:01:22 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 02:01:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 02:01:55 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 02:01:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 02:01:56 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 02:02:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 02:02:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 02:02:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 02:02:08 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 02:02:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 02:02:29 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 02:02:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 02:02:40 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 02:08:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 02:09:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 02:09:17 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 02:14:42 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 02:15:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 02:23:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 02:23:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 02:23:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 02:23:53 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 02:32:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 02:32:28 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 02:32:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 02:39:31 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 02:39:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 02:59:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 03:06:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 03:13:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 03:14:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 03:21:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 03:22:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 03:32:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 03:33:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 03:36:24 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-11 03:36:24 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-11 03:36:24 --> 404 Page Not Found: Report/build
ERROR - 2019-09-11 03:36:46 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-11 03:36:48 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-11 03:36:48 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-11 03:36:52 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-11 03:37:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 03:38:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 03:39:10 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-11 03:40:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 03:40:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 03:40:45 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 03:40:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 03:40:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 03:40:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 03:41:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 03:42:28 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-11 03:42:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 05:07:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 05:07:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 05:07:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 05:07:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 05:09:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 05:09:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:03 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:03 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-11 05:09:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:05 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:05'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:09:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:06 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:06 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:08 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:08'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:09:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:10 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:10 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:11 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:11'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:09:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:13 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:13 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:15 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:15'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:09:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:16 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:17 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:18 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:18'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:09:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:20 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:20 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:21 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:21'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:09:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:23 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:23 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:24 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:24'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:09:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:26 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:26 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:28 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:28'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:09:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:29 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:29 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:31 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:31'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:09:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:32 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:32 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:34 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:34'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:09:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:35 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:36 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:37 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:37'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:09:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:39 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:39 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:40 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:40'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:09:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:43 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:43'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:09:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:45 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:45 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:46 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:46'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:09:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:48 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:48 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:49 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:49'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:09:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:50 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:50 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:52 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:52'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:09:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:53 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:53 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:55 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:55'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:09:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:56 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:56 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:09:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:09:59 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:09:59'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:10:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:10:00 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:10:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:10:00 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:10:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:10:01 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:10:01'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:10:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:10:03 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:10:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:10:03 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:10:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:10:04 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:10:04'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:10:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:10:06 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:10:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:10:06 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:10:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:10:07 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:10:07'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:10:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:10:09 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:10:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:10:09 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:10:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:10:10 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:10:10'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:10:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:10:14 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:10:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:10:14 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:10:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:10:15 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 05:10:15'
WHERE "id" = 'build'
ERROR - 2019-09-11 05:18:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 05:22:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 05:22:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 05:22:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 05:22:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 05:24:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 05:25:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 05:25:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 05:28:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 05:30:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 05:30:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 05:30:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 05:31:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 05:31:37 --> Severity: Notice --> Undefined index: amri /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-11 05:40:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 05:40:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 05:40:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:40:51 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:41:34 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-11 05:43:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 05:45:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 05:45:03 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 05:45:03 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-11 05:45:39 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-11 05:47:18 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 05:47:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 05:47:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 05:47:53 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-11 05:50:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 05:50:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 06:01:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 06:02:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 06:02:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 06:02:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 06:02:35 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-11 06:02:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 06:02:35 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 06:02:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 06:02:35 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 06:02:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 06:02:37 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 06:02:37'
WHERE "id" = 'build'
ERROR - 2019-09-11 06:03:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 06:03:00 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 06:03:00'
WHERE "id" = 'build'
ERROR - 2019-09-11 06:12:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 06:14:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 06:14:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 06:14:48 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 06:16:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 06:17:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 06:17:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 06:18:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 06:27:46 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-11 06:42:51 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-11 06:42:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 06:46:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 06:46:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 06:52:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 06:59:03 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-11 06:59:17 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 06:59:17 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 07:03:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 07:08:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 07:10:49 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-11 07:20:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 07:20:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 07:21:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 07:23:14 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 07:27:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 07:27:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 07:29:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 07:31:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 07:32:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 07:32:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 07:32:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 07:34:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 07:34:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 07:34:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 07:34:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 07:35:01 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-11 07:35:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 07:36:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 07:45:34 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-11 07:48:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 07:48:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 07:49:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 07:54:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 07:54:11 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-09-11 07:54:11', 'TTS/PB/20190911/13', '0', '0', '0', '0', '0', 0, 0, 0, 0, '', '', '', 'Paid', '0', '26', NULL, '1')
ERROR - 2019-09-11 07:54:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 07:54:11 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-11 07:54:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 07:55:02 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 512
ERROR - 2019-09-11 07:55:02 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 515
ERROR - 2019-09-11 07:55:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 6:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 07:55:02 --> Query error: ERROR:  syntax error at or near ";"
LINE 6:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-09-11 08:01:08 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 08:01:08 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 08:01:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 08:01:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 08:03:46 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 08:04:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 08:06:03 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 08:06:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 08:07:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:09:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 08:09:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 08:09:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:09:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:09:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:09:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 08:09:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:12:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:13:59 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 08:15:51 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 08:18:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:18:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 08:18:25 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 08:21:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:21:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 08:21:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 08:21:53 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 08:22:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 08:23:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:25:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 08:26:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 08:26:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 08:28:03 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-11 08:28:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:29:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:30:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:30:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:34:11 --> Severity: Notice --> Undefined index: faizal /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-11 08:34:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 08:34:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:34:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 08:34:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 08:35:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 08:35:21 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 08:36:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:36:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 08:36:37 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 08:36:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:38:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:38:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 08:38:17 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 08:38:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 08:39:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 08:39:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 08:41:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:43:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;jam_mulai_denda&quot;, &quot;total_tagihan&quot;) VALUES ('14', '', '5', '...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 08:43:11 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."jam_mulai_denda", "total_tagihan") VALUES ('14', '', '5', '...
                                                             ^ - Invalid query: INSERT INTO "trx_spj" ("driver_id", "car_id", "pool_id", "created", "creator_id", "doc_number", "keterangan", "modified", "status", "tipe_rental", "tanggal_spj", "tagihan_wajib", "denda_perjam", "jam_mulai_denda", "total_tagihan") VALUES ('14', '', '5', '2019-09-11 08:43:11', '38', 'SPJ-TIARA/BCG/20190911/33', 'Create SPJ by Pool', '2019-09-11 08:43:11', 'Active', '24 Jam', '2019-09-11', 650000, 50000, '2019-09-12 08:43:11', 0)
ERROR - 2019-09-11 08:43:11 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 08:43:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 08:43:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 08:43:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:43:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 08:43:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 08:43:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 08:43:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:44:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 08:44:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 08:44:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:44:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:45:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:45:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 08:45:43 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 08:50:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 08:50:03 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 08:50:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 08:50:27 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 08:54:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 08:54:27 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 08:56:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 08:56:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:57:24 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-11 08:57:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 08:58:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 08:58:11 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 08:58:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 08:58:12 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 08:58:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:01:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:01:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:01:50 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:01:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:01:57 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:02:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:02:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:03:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:03:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:03:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:04:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:04:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:04:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:04:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:04:54 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 09:04:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:05:13 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 09:05:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:05:24 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-11 09:05:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:05:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:05:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:06:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:06:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:06:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:07:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:07:16 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:08:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:08:12 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:08:27 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:08:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:08:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 09:08:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:09:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:09:06 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:11:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 09:12:06 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 09:12:06 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 09:12:12 --> Severity: Notice --> Undefined index: iis_royani /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-11 09:12:12 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 09:13:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:13:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:15:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:15:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:15:25 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:15:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:15:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:16:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 09:16:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 09:16:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:16:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:16:45 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:19:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 09:19:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:19:31 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:20:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:20:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_ktp_un&quot;
DETAIL:  Key (ktp_number)=(3603080411690006) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:20:24 --> Query error: ERROR:  duplicate key value violates unique constraint "master_ktp_un"
DETAIL:  Key (ktp_number)=(3603080411690006) already exists. - Invalid query: INSERT INTO "master_ktp" ("name", "created_by", "ktp_number", "location", "type", "address", "path_photo") VALUES ('AMIRUDIN', '36', '3603080411690006', 'Luar Jakarta', 'KTP Seumur Hidup', 'KP KIJERENG RT 008/002 KEL SASAK KEC MAUK TANGERANG', '/uploads/ktp/KTP_36030804116900061.jpeg')
ERROR - 2019-09-11 09:20:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:20:24 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-11 09:20:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_ktp_un&quot;
DETAIL:  Key (ktp_number)=(3603080411690006) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:20:41 --> Query error: ERROR:  duplicate key value violates unique constraint "master_ktp_un"
DETAIL:  Key (ktp_number)=(3603080411690006) already exists. - Invalid query: INSERT INTO "master_ktp" ("name", "created_by", "ktp_number", "location", "type", "address", "path_photo") VALUES ('AMIRUDIN', '36', '3603080411690006', 'Luar Jakarta', 'KTP Seumur Hidup', 'KP KIJERENG RT 008/002 KEL SASAK KEC MAUK TANGERANG', '/uploads/ktp/KTP_36030804116900062.jpeg')
ERROR - 2019-09-11 09:20:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:20:41 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-11 09:20:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_ktp_un&quot;
DETAIL:  Key (ktp_number)=(3603080411690006) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:20:43 --> Query error: ERROR:  duplicate key value violates unique constraint "master_ktp_un"
DETAIL:  Key (ktp_number)=(3603080411690006) already exists. - Invalid query: INSERT INTO "master_ktp" ("name", "created_by", "ktp_number", "location", "type", "address", "path_photo") VALUES ('AMIRUDIN', '36', '3603080411690006', 'Luar Jakarta', 'KTP Seumur Hidup', 'KP KIJERENG RT 008/002 KEL SASAK KEC MAUK TANGERANG', '/uploads/ktp/KTP_36030804116900063.jpeg')
ERROR - 2019-09-11 09:20:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:20:43 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-11 09:20:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:20:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:21:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:21:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:21:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:21:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:22:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:22:29 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:22:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:22:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:22:43 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:22:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:22:54 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:24:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:24:41 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 09:24:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:24:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 09:25:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 09:25:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:27:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 09:29:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 09:30:27 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 512
ERROR - 2019-09-11 09:30:27 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 515
ERROR - 2019-09-11 09:30:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 6:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:30:27 --> Query error: ERROR:  syntax error at or near ";"
LINE 6:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-09-11 09:30:32 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 512
ERROR - 2019-09-11 09:30:32 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 515
ERROR - 2019-09-11 09:30:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 6:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:30:32 --> Query error: ERROR:  syntax error at or near ";"
LINE 6:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-09-11 09:31:19 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-11 09:31:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:31:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:31:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:31:28 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:32:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 09:32:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 09:32:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:32:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:32:33 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:32:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_ktp_un&quot;
DETAIL:  Key (ktp_number)=(3603080411690006) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:32:51 --> Query error: ERROR:  duplicate key value violates unique constraint "master_ktp_un"
DETAIL:  Key (ktp_number)=(3603080411690006) already exists. - Invalid query: INSERT INTO "master_ktp" ("name", "created_by", "ktp_number", "location", "type", "address", "path_photo") VALUES ('AMIRUDIN', '36', '3603080411690006', 'Luar Jakarta', 'KTP Seumur Hidup', 'KP KIJERENG RT 008/002 KEL SASAK KEC MAUK TANGERANG', '/uploads/ktp/KTP_36030804116900064.jpeg')
ERROR - 2019-09-11 09:32:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:32:51 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-11 09:33:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:33:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:33:16 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:33:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:36:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 09:36:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:38:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:38:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 09:39:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 09:39:23 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-11 09:39:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:39:23 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:39:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:39:32 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:39:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:39:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:40:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:42:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:42:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:43:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 09:43:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:43:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:44:09 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 09:44:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:44:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:44:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:44:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:44:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:44:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:46:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:50:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:51:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:51:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:51:08 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 09:52:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:52:21 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 09:52:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:53:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:53:22 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:53:23 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 09:53:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:53:55 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:53:55 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 09:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 09:54:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:54:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:54:13 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:54:13 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 09:54:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:54:21 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:55:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:55:12 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:57:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:57:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:57:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:57:37 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:57:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:57:51 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:58:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:58:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 09:58:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 09:58:57 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 09:58:57 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 09:58:57 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-11 09:58:57 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-11 09:59:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 10:00:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:00:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:00:08 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:00:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 10:00:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:00:44 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:01:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:01:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:01:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:03:14 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-11 10:03:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:03:17 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:03:17 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-11 10:03:17 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:03:17 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-11 10:03:21 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-11 10:03:21 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-11 10:03:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:04:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:04:14 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:04:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:04:23 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:04:52 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 10:04:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:05:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:05:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:05:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:05:11 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:05:25 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-11 10:05:25 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:05:25 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-11 10:05:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:05:25 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:05:25 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-11 10:05:25 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-11 10:05:25 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:05:26 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 10:05:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:06:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:06:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:06:29 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:06:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:06:49 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:06:49 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-11 10:06:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:06:49 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:06:49 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:06:52 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-11 10:07:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:07:42 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:07:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:08:30 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 10:08:30 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-11 10:08:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:08:30 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:08:30 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:08:30 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-11 10:08:32 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-11 10:08:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:08:32 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:08:32 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-11 10:08:32 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:08:55 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-11 10:09:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:09:08 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:09:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:09:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:09:25 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:09:32 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-11 10:09:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:09:37 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:09:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:09:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:09:50 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:09:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:09:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:09:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:09:58 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-11 10:09:58 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-11 10:09:58 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:10:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:10:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:10:17 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:10:17 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-11 10:10:17 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:10:18 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-11 10:10:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:10:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:10:57 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:10:57 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-11 10:10:57 --> 404 Page Not Found: Uploads/sim
ERROR - 2019-09-11 10:10:57 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:12:08 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 10:12:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 10:13:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 10:14:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:14:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:14:33 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:14:33 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:15:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:15:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:15:15 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:15:15 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:15:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:15:18 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:15:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:15:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:15:37 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:16:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:17:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:17:42 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:17:42 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:18:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:20:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:20:19 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:20:19 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:20:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:20:33 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:20:33 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:20:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:20:33 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:21:16 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:21:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:21:16 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:21:21 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:21:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:21:21 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:22:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:22:27 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:22:27 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:24:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:24:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:24:20 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:24:20 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:25:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 10:25:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:25:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:26:42 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-11 10:27:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:27:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 10:27:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:28:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:28:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:28:38 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:28:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:28:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:29:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:31:24 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 10:31:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:31:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:33:54 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 10:38:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:38:06 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:38:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:38:06 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:38:18 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:38:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:38:18 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:38:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:38:45 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:38:45 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:38:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:38:48 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:38:48 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:38:49 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:38:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:38:49 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:38:50 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:38:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:38:50 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:38:51 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:38:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:38:51 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:39:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 10:39:53 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:39:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:39:53 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:40:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 10:40:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 10:40:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 10:40:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 10:40:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 10:41:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 10:41:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 10:42:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 10:43:30 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 10:43:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 10:43:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:44:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:44:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:44:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:44:39 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:44:39 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:44:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 10:44:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:44:44 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:44:44 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:45:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 10:46:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:47:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:48:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:48:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:48:20 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:48:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:48:21 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:48:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 10:49:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:49:02 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:49:02 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:49:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 10:49:48 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 512
ERROR - 2019-09-11 10:49:48 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 515
ERROR - 2019-09-11 10:49:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 6:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:49:48 --> Query error: ERROR:  syntax error at or near ";"
LINE 6:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-09-11 10:49:54 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 10:50:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:50:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 10:51:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 10:52:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:52:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:52:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:52:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:52:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:53:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:53:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:53:24 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:53:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:53:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 10:53:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 10:54:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:54:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 10:54:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:56:39 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-11 10:56:47 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-11 10:56:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:56:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:56:52 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:56:52 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:57:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 10:57:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:57:07 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 10:57:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:57:12 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 10:57:12'
WHERE "id" = 'build'
ERROR - 2019-09-11 10:57:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:57:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:57:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:57:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:57:36 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 10:57:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:58:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:58:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:58:08 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:59:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 10:59:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 10:59:41 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 10:59:41 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 11:00:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 11:00:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 11:00:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:01:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 11:01:05 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 11:01:05 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 11:01:07 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 11:01:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 11:01:07 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 11:01:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 11:01:35 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 11:01:36 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 11:01:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 11:01:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 11:01:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:01:45 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-11 11:01:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:01:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:01:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:02:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:02:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 11:02:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 11:02:36 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-11 11:02:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:04:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 11:05:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:05:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:05:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:07:42 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 11:09:28 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:09:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:12:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:16:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:16:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:16:06 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 11:16:06 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 11:17:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:18:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:18:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 11:18:59 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 11:19:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 11:19:04 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 11:19:04'
WHERE "id" = 'build'
ERROR - 2019-09-11 11:19:42 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:19:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:19:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 11:20:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 11:20:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 11:20:43 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:21:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:21:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:24:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:24:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:26:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 11:29:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:29:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:30:29 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-11 11:30:29 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-11 11:30:33 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-11 11:30:33 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-11 11:30:36 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-11 11:30:36 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-11 11:31:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:31:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 11:31:08 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 11:31:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 11:31:12 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 11:31:12'
WHERE "id" = 'build'
ERROR - 2019-09-11 11:31:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:32:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 11:34:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 11:35:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 11:35:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 11:35:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 11:36:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:36:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:37:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 11:40:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 11:40:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 11:40:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 11:41:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 11:41:44 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-11 11:42:14 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-11 11:42:17 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-11 11:42:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 11:49:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:50:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:51:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 11:51:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 11:51:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:52:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:52:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:52:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:53:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:53:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:53:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:54:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 11:55:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:55:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:55:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:55:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 11:55:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 12:00:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 12:00:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 12:00:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 12:03:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 12:03:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 12:05:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 12:09:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 12:09:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 12:09:03 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 12:09:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 12:09:40 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 12:14:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 12:15:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 12:15:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 12:15:30 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 12:17:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 12:18:11 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-11 12:18:29 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 12:18:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 12:18:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 12:23:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 12:24:09 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 12:24:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 12:24:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 12:25:16 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 12:27:54 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 12:31:59 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 12:32:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 12:32:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 12:34:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 12:39:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 12:39:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 12:40:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 12:47:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 12:52:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 12:53:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 12:54:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 12:54:20 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 514
ERROR - 2019-09-11 12:54:20 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 517
ERROR - 2019-09-11 12:54:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 6:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 12:54:20 --> Query error: ERROR:  syntax error at or near ";"
LINE 6:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-09-11 12:55:27 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 514
ERROR - 2019-09-11 12:55:27 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 517
ERROR - 2019-09-11 12:55:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 6:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 12:55:27 --> Query error: ERROR:  syntax error at or near ";"
LINE 6:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-09-11 12:56:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:00:55 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-11 13:00:55 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-11 13:01:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:03:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:03:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:03:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:03:36 --> Severity: Notice --> Undefined property: Closing::$spj_model /var/www/html/rental/application/controllers/Closing.php 20
ERROR - 2019-09-11 13:03:37 --> Severity: Notice --> Undefined property: Closing::$spj_model /var/www/html/rental/application/controllers/Closing.php 20
ERROR - 2019-09-11 13:04:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:04:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:04:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:04:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:05:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:05:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:05:20 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:05:20 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 13:06:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 13:06:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_charge_room /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:07:06 --> Severity: Notice --> Undefined index: payment_via_edc /var/www/html/rental/application/views/closing/closing_index.php 57
ERROR - 2019-09-11 13:08:08 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 13:08:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:08:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:08:20 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-11 13:08:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:08:26 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:08:26 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-11 13:08:56 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 13:08:59 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 13:09:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:09:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:09:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:09:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:10:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:10:00 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:10:31 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 13:10:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:10:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:10:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:11:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:11:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:13:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:13:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:15:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:16:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:16:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.date_closing does not exist
LINE 2:    a.date_closing, a.value_jaminan, a.amount_jaminan, a.valu...
           ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:16:51 --> Query error: ERROR:  column a.date_closing does not exist
LINE 2:    a.date_closing, a.value_jaminan, a.amount_jaminan, a.valu...
           ^ - Invalid query: select 
			a.date_closing, a.value_jaminan, a.amount_jaminan, a.value_payment_cash, a.amount_payment_cash, a.value_payment_jaminan, 
			a.amount_payment_jaminan, a.value_payment_credit_ticket, a.amount_payment_credit_ticket, a.value_payment_edc, a.amount_payment_edc, 
			a.value_payment_charge_room, a.amount_payment_charge_room, a.created, a.pool_id
			from trx_setoran a
			left join master_pool b on (a.pool_id = b.id)
			order by a.created desc;
ERROR - 2019-09-11 13:16:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.date_closing does not exist
LINE 2:    a.date_closing, a.value_jaminan, a.amount_jaminan, a.valu...
           ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:16:51 --> Query error: ERROR:  column a.date_closing does not exist
LINE 2:    a.date_closing, a.value_jaminan, a.amount_jaminan, a.valu...
           ^ - Invalid query: select 
			a.date_closing, a.value_jaminan, a.amount_jaminan, a.value_payment_cash, a.amount_payment_cash, a.value_payment_jaminan, 
			a.amount_payment_jaminan, a.value_payment_credit_ticket, a.amount_payment_credit_ticket, a.value_payment_edc, a.amount_payment_edc, 
			a.value_payment_charge_room, a.amount_payment_charge_room, a.created, a.pool_id
			from trx_setoran a
			left join master_pool b on (a.pool_id = b.id)
			order by a.created desc;
ERROR - 2019-09-11 13:17:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:17:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:21:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:22:16 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-11 13:23:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:23:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 13:24:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:24:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:24:04 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-11 13:24:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:24:04 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:24:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:24:05 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:24:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:24:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:24:37 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-11 13:24:37 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-11 13:25:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:26:03 --> Severity: Notice --> Undefined index: value_payment_ct /var/www/html/rental/application/views/closing/closing_index.php 43
ERROR - 2019-09-11 13:26:03 --> Severity: Notice --> Undefined index: amount_payment_ct /var/www/html/rental/application/views/closing/closing_index.php 44
ERROR - 2019-09-11 13:26:03 --> Severity: Notice --> Undefined index: value_payment_ct /var/www/html/rental/application/views/closing/closing_index.php 43
ERROR - 2019-09-11 13:26:03 --> Severity: Notice --> Undefined index: amount_payment_ct /var/www/html/rental/application/views/closing/closing_index.php 44
ERROR - 2019-09-11 13:26:03 --> Severity: Notice --> Undefined index: value_payment_ct /var/www/html/rental/application/views/closing/closing_index.php 43
ERROR - 2019-09-11 13:26:03 --> Severity: Notice --> Undefined index: amount_payment_ct /var/www/html/rental/application/views/closing/closing_index.php 44
ERROR - 2019-09-11 13:26:03 --> Severity: Notice --> Undefined index: value_payment_ct /var/www/html/rental/application/views/closing/closing_index.php 43
ERROR - 2019-09-11 13:26:03 --> Severity: Notice --> Undefined index: amount_payment_ct /var/www/html/rental/application/views/closing/closing_index.php 44
ERROR - 2019-09-11 13:26:03 --> Severity: Notice --> Undefined index: value_payment_ct /var/www/html/rental/application/views/closing/closing_index.php 43
ERROR - 2019-09-11 13:26:03 --> Severity: Notice --> Undefined index: amount_payment_ct /var/www/html/rental/application/views/closing/closing_index.php 44
ERROR - 2019-09-11 13:26:03 --> Severity: Notice --> Undefined index: value_payment_ct /var/www/html/rental/application/views/closing/closing_index.php 43
ERROR - 2019-09-11 13:26:03 --> Severity: Notice --> Undefined index: amount_payment_ct /var/www/html/rental/application/views/closing/closing_index.php 44
ERROR - 2019-09-11 13:26:03 --> Severity: Notice --> Undefined index: value_payment_ct /var/www/html/rental/application/views/closing/closing_index.php 43
ERROR - 2019-09-11 13:26:03 --> Severity: Notice --> Undefined index: amount_payment_ct /var/www/html/rental/application/views/closing/closing_index.php 44
ERROR - 2019-09-11 13:26:03 --> Severity: Notice --> Undefined index: value_payment_ct /var/www/html/rental/application/views/closing/closing_index.php 43
ERROR - 2019-09-11 13:26:03 --> Severity: Notice --> Undefined index: amount_payment_ct /var/www/html/rental/application/views/closing/closing_index.php 44
ERROR - 2019-09-11 13:26:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:26:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:26:26 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:26:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:26:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:26:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:26:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:26:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:27:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:27:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:27:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:27:48 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:27:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:27:54 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:30:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:30:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:30:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:30:43 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:33:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:33:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:33:12 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-11 13:33:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:33:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:33:22 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:36:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:36:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 13:36:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 13:36:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:36:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:36:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:37:09 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 13:37:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:37:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:38:08 --> Severity: Notice --> Undefined index: value_kembalian /var/www/html/rental/application/views/closing/closing_index.php 55
ERROR - 2019-09-11 13:38:08 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:38:08 --> Severity: Notice --> Undefined index: value_kembalian /var/www/html/rental/application/views/closing/closing_index.php 55
ERROR - 2019-09-11 13:38:08 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:38:08 --> Severity: Notice --> Undefined index: value_kembalian /var/www/html/rental/application/views/closing/closing_index.php 55
ERROR - 2019-09-11 13:38:08 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:38:08 --> Severity: Notice --> Undefined index: value_kembalian /var/www/html/rental/application/views/closing/closing_index.php 55
ERROR - 2019-09-11 13:38:08 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:38:08 --> Severity: Notice --> Undefined index: value_kembalian /var/www/html/rental/application/views/closing/closing_index.php 55
ERROR - 2019-09-11 13:38:08 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:38:08 --> Severity: Notice --> Undefined index: value_kembalian /var/www/html/rental/application/views/closing/closing_index.php 55
ERROR - 2019-09-11 13:38:08 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:38:08 --> Severity: Notice --> Undefined index: value_kembalian /var/www/html/rental/application/views/closing/closing_index.php 55
ERROR - 2019-09-11 13:38:08 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:38:08 --> Severity: Notice --> Undefined index: value_kembalian /var/www/html/rental/application/views/closing/closing_index.php 55
ERROR - 2019-09-11 13:38:08 --> Severity: Notice --> Undefined index: amount_kembalian /var/www/html/rental/application/views/closing/closing_index.php 56
ERROR - 2019-09-11 13:38:23 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 13:39:05 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-11 13:39:28 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 13:40:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:40:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:40:20 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:41:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:41:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 13:41:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:41:42 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 13:41:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:41:50 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 13:42:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:42:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:42:30 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-11 13:42:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:42:30 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:42:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:42:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:42:34 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 13:42:35 --> 404 Page Not Found: Uploads/ktp
ERROR - 2019-09-11 13:42:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 13:42:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:42:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 13:42:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:42:57 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 13:43:06 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 13:43:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:43:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 13:43:56 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 13:45:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 13:45:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 13:46:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 13:47:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:47:50 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 13:47:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:47:52 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:47:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:48:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 13:48:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 13:48:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:48:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:48:30 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:48:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 13:48:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 13:48:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:48:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:51:01 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 13:51:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:51:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:51:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:51:28 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:51:28 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 13:53:01 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 13:53:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:53:01 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:54:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 13:54:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:55:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:56:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:57:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:57:25 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-11 13:57:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:58:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:58:47 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 13:58:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:58:47 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:59:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 13:59:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:59:08 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 13:59:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 13:59:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:59:14 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 13:59:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 13:59:18 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 13:59:18'
WHERE "id" = 'build'
ERROR - 2019-09-11 13:59:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 13:59:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 13:59:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:00:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:00:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:00:09 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 14:01:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:01:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 14:02:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 14:02:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:02:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:03:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 14:03:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:03:18 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 14:03:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:03:22 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 14:03:22'
WHERE "id" = 'build'
ERROR - 2019-09-11 14:03:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:03:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:03:53 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 14:03:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 14:04:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:04:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:04:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:05:55 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:05:55 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:05:55 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:05:55 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:05:55 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:05:55 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:05:57 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:05:57 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:05:57 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:05:59 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:05:59 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:05:59 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:01 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:01 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:01 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:02 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:02 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:02 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:03 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:03 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:03 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:06:04 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:04 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:04 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:05 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:05 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:05 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:07 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:07 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:07 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:08 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:08 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:08 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:09 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:09 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:09 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:10 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:10 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:10 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:06:10 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 14:06:12 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:12 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:12 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:12 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:12 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:12 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:14 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:14 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:14 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:15 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:15 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:15 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:15 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:15 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:15 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:16 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:16 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:16 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:16 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:16 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:16 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:18 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:18 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:18 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:19 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:19 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:19 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:21 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:21 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:22 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:06:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:06:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:06:28 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 14:06:28 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 14:06:31 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 14:06:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:06:32 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 14:06:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:06:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:06:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:06:50 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:50 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:50 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:50 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:51 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 14:06:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:06:59 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:59 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:59 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:59 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:59 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:06:59 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:01 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:02 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:07:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:07:19 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:19 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:19 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:19 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:19 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:19 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:20 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:20 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:20 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:22 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:22 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:22 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:07:24 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:24 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:24 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:24 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:24 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:24 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:25 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:25 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:25 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:25 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:25 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:25 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:07:28 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:28 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:28 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:32 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:32 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:32 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:33 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:33 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:33 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:33 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:33 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:33 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:35 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:35 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:35 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:36 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:36 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:36 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:36 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:36 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:36 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:37 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:37 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:37 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:38 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:38 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:38 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:07:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:07:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:07:58 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:08:02 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 14:08:03 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:08:17 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:17 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:24 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:24 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:24 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:25 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:25 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:25 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:26 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:26 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:26 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:28 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:28 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:28 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:29 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:29 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:08:40 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:40 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:40 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:40 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:40 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:40 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:41 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:41 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:41 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:44 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:44 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:44 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:45 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:45 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:45 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:46 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:46 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:46 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:47 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:47 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:47 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:47 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:47 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:47 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:48 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:48 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:48 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:50 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:50 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:50 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:51 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:51 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:51 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:52 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:52 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:52 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:53 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:53 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:53 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:57 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:57 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:57 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:58 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:58 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:58 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:58 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:58 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:58 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:59 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:59 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:08:59 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:05 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:05 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:05 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:06 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:06 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:06 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:07 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:07 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:07 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:08 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:13 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:13 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:13 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:14 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:14 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:14 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:15 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:15 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:15 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:16 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:16 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:16 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:18 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:18 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:18 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:19 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:19 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:19 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:20 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:20 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:20 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:21 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:21 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:21 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:09:21 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:21 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:21 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:23 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:23 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:23 --> Severity: Notice --> Undefined property: stdClass::$bbm_sebelumnya /var/www/html/rental/application/controllers/Spj.php 204
ERROR - 2019-09-11 14:09:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:09:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 14:09:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 14:09:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:10:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:10:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:10:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:10:22 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 14:10:22 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 14:10:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:10:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:10:41 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 14:10:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:11:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 14:11:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:11:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 14:11:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 14:11:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:11:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:11:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:12:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:12:33 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 515
ERROR - 2019-09-11 14:12:33 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 518
ERROR - 2019-09-11 14:12:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 6:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:12:33 --> Query error: ERROR:  syntax error at or near ";"
LINE 6:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-09-11 14:13:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:14:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:14:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:14:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 14:14:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:14:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 14:15:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:15:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:17:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:17:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:17:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:17:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 14:18:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:18:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:18:16 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 14:18:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:18:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 14:18:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:19:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:20:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:20:28 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 14:22:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:24:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:24:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:24:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 14:24:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 14:24:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:45 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:24:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:24:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 14:25:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:25:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:26:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:26:00 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 14:26:00 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 14:26:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 14:26:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> Severity: Notice --> Undefined index: sim_number /var/www/html/rental/application/views/driver/list_driver.php 65
ERROR - 2019-09-11 14:26:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:26:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:26:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:26:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 14:26:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:27:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:27:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:27:14 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 14:27:14 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 14:27:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:27:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:28:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:29:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:14 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: phone /var/www/html/rental/application/views/driver/list_driver.php 73
ERROR - 2019-09-11 14:30:16 --> Severity: Notice --> Undefined index: emergency_number /var/www/html/rental/application/views/driver/list_driver.php 74
ERROR - 2019-09-11 14:30:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:30:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:30:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:30:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:30:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:30:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:30:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:30:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 14:30:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:30:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:30:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:31:00 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 14:31:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:31:00 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 14:31:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:31:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:31:11 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-11 14:31:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:31:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:31:28 --> 404 Page Not Found: Logim/index
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:32 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:33 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 80
ERROR - 2019-09-11 14:32:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 14:32:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> Severity: Notice --> Undefined index: bank /var/www/html/rental/application/views/driver/list_driver.php 71
ERROR - 2019-09-11 14:32:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:34:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:35:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:35:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:35:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:35:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:35:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 14:36:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:37:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:37:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:37:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:37:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:37:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:38:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:38:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:39:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:39:25 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 14:39:32 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-11 14:39:35 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 14:39:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:40:27 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 14:40:27 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 14:40:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 14:40:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 14:42:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:42:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:43:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 14:43:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 14:43:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:43:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:44:02 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-11 14:44:15 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-11 14:45:11 --> Severity: Notice --> Undefined index: tukiyo /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-11 14:46:16 --> 404 Page Not Found: Spj/detail_checker
ERROR - 2019-09-11 14:46:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 14:46:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 14:46:54 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 14:46:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:47:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:47:11 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 14:47:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:49:45 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 14:50:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:50:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:54:55 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 14:56:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 14:56:54 --> Severity: Warning --> fsockopen(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-11 14:56:54 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (php_network_getaddresses: getaddrinfo failed: Name or service not known) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-11 14:58:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type date: &quot;&quot;
LINE 1: ...photo&quot;) VALUES ('36', '', 'NOER ARBA''I', '', '', '', '/uplo...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:58:15 --> Query error: ERROR:  invalid input syntax for type date: ""
LINE 1: ...photo") VALUES ('36', '', 'NOER ARBA''I', '', '', '', '/uplo...
                                                             ^ - Invalid query: INSERT INTO "master_sim" ("created_by", "sim_number", "name", "type", "address", "sim_expire_date", "path_photo") VALUES ('36', '', 'NOER ARBA''I', '', '', '', '/uploads/sim/SIM_.jpeg')
ERROR - 2019-09-11 14:58:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 14:58:15 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-11 14:58:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 14:58:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 15:01:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:03:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:03:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:03:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:03:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:04:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:04:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:04:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 15:04:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:04:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:04:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:05:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 15:05:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:05:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:05:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:05:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 15:05:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 15:05:52 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 15:06:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:06:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 15:08:35 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 15:10:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:10:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 15:10:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:10:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:10:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 15:10:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 15:10:54 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 15:11:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:12:03 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-11 15:12:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 15:12:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:12:48 --> Severity: Warning --> fsockopen(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-11 15:12:48 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (php_network_getaddresses: getaddrinfo failed: Name or service not known) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-11 15:12:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 15:13:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 15:13:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 15:13:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 15:13:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 15:13:43 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 15:13:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:13:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 15:14:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 15:14:03 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 15:15:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:15:46 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 15:15:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 15:17:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 15:17:21 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 15:18:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:18:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:19:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 15:21:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:21:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:22:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:22:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:24:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:26:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 15:26:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 15:26:28 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 15:28:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 15:29:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 15:30:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:14 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:15 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 15:30:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 15:31:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:32:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 15:32:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 15:32:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 15:33:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 15:33:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 15:33:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 15:33:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 15:34:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 15:34:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:35:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:35:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:35:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 15:36:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:37:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:38:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:38:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:38:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:39:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:42:25 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 15:42:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 15:42:42 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 15:42:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:45:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:46:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:47:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 15:53:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 15:54:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 15:58:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 15:58:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 15:58:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 15:58:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 15:58:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 15:58:51 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 15:58:51 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 15:59:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 15:59:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:00:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:01:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:01:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:02:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:02:36 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-11 16:02:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:02:37 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 16:03:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:03:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:03:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:04:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:04:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:04:12 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 16:04:12 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 16:04:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:05:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:06:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:07:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:08:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:08:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:08:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:08:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:10:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:10:46 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 16:11:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:11:46 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:11:49 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-11 16:11:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:11:49 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 16:11:49 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-11 16:11:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:11:53 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 16:11:53'
WHERE "id" = 'build'
ERROR - 2019-09-11 16:11:56 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-11 16:11:56 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-11 16:11:56 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-11 16:11:56 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-11 16:11:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:11:56 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 16:11:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:11:59 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 16:11:59'
WHERE "id" = 'build'
ERROR - 2019-09-11 16:12:02 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-11 16:12:02 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-11 16:12:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:12:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 16:12:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:12:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:12:06 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 16:12:06'
WHERE "id" = 'build'
ERROR - 2019-09-11 16:12:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:12:09 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 16:12:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:12:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:12:13 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 16:12:13'
WHERE "id" = 'build'
ERROR - 2019-09-11 16:12:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:13:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 16:13:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:13:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:13:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:15:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:15:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:15:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:15:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:15:44 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 16:16:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:16:25 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-09-11 16:16:25', 'TTS-TIARA/BCG/20190911/24', '0', '', '0', '0', '0', '0', '0', 0, 0, '', '', '', 'Paid', '0', '45', NULL, '5')
ERROR - 2019-09-11 16:16:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:16:25 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-11 16:17:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:18:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:18:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 16:18:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 16:21:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:22:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:22:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:23:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:23:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:23:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:24:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:24:05 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 16:24:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:25:12 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:25:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:25:15 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 16:25:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:25:20 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 16:25:20'
WHERE "id" = 'build'
ERROR - 2019-09-11 16:25:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:27:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:28:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:29:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 16:29:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 16:32:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:32:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:33:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:33:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:33:36 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 16:33:36 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-11 16:33:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:33:42 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 16:33:42'
WHERE "id" = 'build'
ERROR - 2019-09-11 16:34:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:34:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:35:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:35:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 16:35:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:35:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:35:28 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 16:36:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:37:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:38:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:38:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:38:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:39:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:39:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:39:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:39:48 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 16:40:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:40:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:40:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:40:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:40:25 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 16:41:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 16:41:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 16:41:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:41:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:42:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:42:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:42:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:42:22 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 16:42:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:42:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 16:42:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 16:42:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:42:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:42:51 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 16:42:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:42:52 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 16:43:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:43:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:43:06 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 16:43:06 --> 404 Page Not Found: Uploads/rekening
ERROR - 2019-09-11 16:43:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:43:07 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 16:43:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:43:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:43:26 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 16:43:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:43:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 16:43:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 16:44:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:44:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:44:23 --> Severity: Notice --> Undefined variable: get_data_spj_today /var/www/html/rental/application/views/home.php 57
ERROR - 2019-09-11 16:44:23 --> Severity: Notice --> Undefined variable: get_data_spj_today /var/www/html/rental/application/views/home.php 62
ERROR - 2019-09-11 16:44:24 --> Severity: Notice --> Undefined variable: get_data_spj_today /var/www/html/rental/application/views/home.php 57
ERROR - 2019-09-11 16:44:24 --> Severity: Notice --> Undefined variable: get_data_spj_today /var/www/html/rental/application/views/home.php 62
ERROR - 2019-09-11 16:45:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:45:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:45:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:45:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:45:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 16:46:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:46:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:46:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:46:55 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 16:47:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:47:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:47:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 16:47:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 16:47:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:48:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:48:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:48:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:48:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:49:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:49:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:49:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:49:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:49:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:49:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:49:47 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 16:50:20 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 16:50:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:51:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:51:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:51:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 16:51:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:52:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 16:52:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 16:52:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:52:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 16:53:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 16:53:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:53:54 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:54:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 16:54:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 16:54:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:54:30 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:54:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:54:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:54:33 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 16:54:33 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-11 16:54:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 16:54:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 16:54:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 16:54:37 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '16', "approve_dt" = '2019-09-11 16:54:37'
WHERE "id" = 'build'
ERROR - 2019-09-11 16:54:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:54:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:54:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 16:55:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:56:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 16:57:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:57:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 16:57:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:57:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 16:57:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 17:01:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:01:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:01:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 17:03:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:04:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:05:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:05:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:06:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 17:06:06 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 17:08:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:08:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 17:08:15 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-09-11 17:08:15', 'TTS-TIARA/BCG/20190911/25', '0', '', '0', '0', '0', '0', '0', 0, 0, '', '', '', 'Paid', '0', '45', NULL, '5')
ERROR - 2019-09-11 17:08:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 17:08:15 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-11 17:10:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:10:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:12:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:12:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 17:12:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:12:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:12:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 17:13:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 17:14:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:14:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:14:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:15:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 17:15:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 17:16:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:16:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:17:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:18:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 17:18:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 17:19:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 17:19:07 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 17:19:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 17:19:08 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 17:19:28 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 189
ERROR - 2019-09-11 17:19:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 17:20:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 17:20:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:20:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:21:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 17:22:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:22:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:22:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:23:40 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-11 17:23:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 17:23:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 17:24:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 17:24:00 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 17:24:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:25:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:26:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:28:53 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-11 17:28:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:29:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:29:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:30:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 17:30:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 17:30:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:31:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 17:31:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 17:31:35 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 17:33:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 17:33:36 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-11 17:33:36 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-11 17:33:36 --> 404 Page Not Found: Report/build
ERROR - 2019-09-11 17:36:56 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 17:37:27 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 17:37:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:37:35 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 17:37:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 17:37:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 17:37:52 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 17:37:55 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 17:38:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 17:39:20 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 17:45:16 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 17:45:21 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 17:45:26 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 18:05:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:05:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:05:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:06:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:06:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:06:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:06:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:07:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:07:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:07:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:08:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:08:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 18:08:16 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-09-11 18:08:16', 'TTS-TIARA/BCG/20190911/26', '0', '', '0', '0', '0', '0', '0', 0, 0, '', '', '', 'Paid', '0', '45', NULL, '5')
ERROR - 2019-09-11 18:08:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 18:08:16 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-11 18:09:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:22:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  table name &quot;e&quot; specified more than once /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 18:22:37 --> Query error: ERROR:  table name "e" specified more than once - Invalid query: select a.*, b.doc_number as doc_number_spj, b.created as created_spj, c.name, c.kip_number, 
			e.no_pintu, e.no_polisi, d.full_name, e.updated_dt as jam_checker
			from trx_setoran a 
			left join trx_spj b on(a.id=b.payment_id)
			left join master_driver c on(c.id=b.driver_id)
			left join cac_user d on(d.id=a.creator_id)
			left join master_car e on(e.id=b.car_id)
			left join checker_header e on(e.spj_id=b.spj_id)
			where a.id=18;
ERROR - 2019-09-11 18:23:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column b.spj_id does not exist
LINE 8:    left join checker_header f on(f.spj_id=b.spj_id)
                                                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 18:23:12 --> Query error: ERROR:  column b.spj_id does not exist
LINE 8:    left join checker_header f on(f.spj_id=b.spj_id)
                                                  ^ - Invalid query: select a.*, b.doc_number as doc_number_spj, b.created as created_spj, c.name, c.kip_number, 
			e.no_pintu, e.no_polisi, d.full_name, f.updated_dt as jam_checker
			from trx_setoran a 
			left join trx_spj b on(a.id=b.payment_id)
			left join master_driver c on(c.id=b.driver_id)
			left join cac_user d on(d.id=a.creator_id)
			left join master_car e on(e.id=b.car_id)
			left join checker_header f on(f.spj_id=b.spj_id)
			where a.id=18;
ERROR - 2019-09-11 18:24:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:26:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:26:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:27:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 18:27:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:28:34 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 18:33:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-11 18:33:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:37:05 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 18:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 18:41:12 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 18:41:12 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 18:45:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:47:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 18:52:12 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 18:52:12 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 18:52:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 19:01:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 19:02:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 19:12:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 19:16:14 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 19:21:08 --> Severity: Notice --> Undefined index: sholehuddin /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-11 19:21:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 19:23:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 19:23:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 20:02:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 20:02:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 20:09:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 20:16:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 20:16:28 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 20:16:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 20:16:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 20:17:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 20:17:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 20:18:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 20:18:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 20:22:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 20:22:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 20:32:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 20:33:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 20:35:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 20:47:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 20:47:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 20:57:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 20:57:17 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-09-11 20:57:17', 'TTS/PB/20190911/29', '0', '0', '0', '0', '0', 0, 0, 0, 0, '', '', '', 'Paid', '0', '26', NULL, '1')
ERROR - 2019-09-11 20:57:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 20:57:17 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-11 20:58:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 20:58:35 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 517
ERROR - 2019-09-11 20:58:35 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 520
ERROR - 2019-09-11 20:58:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 6:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 20:58:35 --> Query error: ERROR:  syntax error at or near ";"
LINE 6:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-09-11 21:16:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 21:17:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 21:21:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 21:49:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 21:49:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 21:49:24 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 21:49:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 21:49:24 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 21:50:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 21:50:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 21:50:14 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 21:50:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 21:50:14 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 21:54:42 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 21:55:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 21:55:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 21:57:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 21:57:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 21:59:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 21:59:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 21:59:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 21:59:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 21:59:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 21:59:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 21:59:55 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 22:00:01 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-11 22:33:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 22:44:45 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 22:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-11 22:57:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 23:07:53 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-11 23:07:53 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-11 23:08:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 23:13:36 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-11 23:13:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 23:14:51 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-11 23:16:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 23:16:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 23:16:52 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-11 23:17:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 23:17:26 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:18:00 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-11 23:18:48 --> 404 Page Not Found: Report/build
ERROR - 2019-09-11 23:18:53 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:55 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:19:57 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:14 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:15 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-11 23:20:17 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:19 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:20 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-11 23:20:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 23:20:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 23:20:32 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-11 23:20:36 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-11 23:21:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 23:21:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-11 23:21:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 23:21:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 23:23:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 23:24:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 23:31:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 23:31:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 23:31:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 23:33:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-11 23:51:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-11 23:55:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 23:55:09 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-11 23:55:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-11 23:55:09 --> Query error: ERROR:  column "build" does not exist
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
