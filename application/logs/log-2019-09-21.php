<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-21 00:02:13 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-21 00:02:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 01:04:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-21 01:04:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 01:04:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 01:05:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-21 01:06:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 01:06:00 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 01:06:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 01:06:25 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 01:10:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 01:10:14 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 01:11:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 01:11:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 01:11:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 01:11:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 06:20:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 06:20:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 06:32:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 06:56:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 06:56:06 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-21 06:56:06', 
				updated_by=31, 
				bbm_in='2',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='394' 
ERROR - 2019-09-21 06:56:06 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-21 06:56:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 06:57:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 07:22:20 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-21 07:22:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 07:38:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:03:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:04:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:05:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:12:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 08:12:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 08:12:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:20:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 08:20:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 08:25:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:29:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:31:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:33:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:34:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:37:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:38:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:40:19 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-21 08:48:12 --> Severity: Notice --> Undefined index: muhamad_ridwan /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-21 08:48:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:48:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 08:48:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 08:48:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:48:49 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 08:48:49 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 08:50:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:52:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:52:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:52:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:53:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:56:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 08:56:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 09:00:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 09:22:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 09:24:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 09:26:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 09:32:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 09:32:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 09:35:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 09:42:45 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-21 09:49:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 09:51:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 10:07:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 10:26:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 10:30:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 10:30:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 10:30:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 10:36:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 10:37:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 10:39:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 10:56:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 10:57:33 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-21 10:59:08 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 10:59:08 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 10:59:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 11:00:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 11:00:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 11:23:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 11:24:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 11:25:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 11:26:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 11:32:40 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-21 11:47:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 11:47:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 11:48:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 11:51:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 11:52:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 11:52:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 11:52:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 11:54:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 11:54:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 11:55:03 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-21 11:55:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 11:55:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 11:58:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 11:58:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 11:58:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:02:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:02:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:03:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:11:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:11:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 12:11:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 12:12:44 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-21 12:12:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 12:12:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 12:13:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:13:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 12:13:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 12:18:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:20:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:34:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:34:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:34:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:34:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:35:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:37:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:40:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:41:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:41:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:41:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 12:41:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:41:43 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 12:41:53 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-21 12:41:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:41:57 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 12:44:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:51:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-21 12:51:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:51:54 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ... VALUES ('CEK/PB/201909/00433', '75', '400', '0', '', '', ''...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ... VALUES ('CEK/PB/201909/00433', '75', '400', '0', '', '', ''...
                                                             ^ - Invalid query: INSERT INTO "checker_header" ("doc_number", "created_by", "spj_id", "bbm_out", "km_out", "rit_out", "drop_out") VALUES ('CEK/PB/201909/00433', '75', '400', '0', '', '', '')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '1', '', '1', '2019-09-21 12:55:21', '75', 'BAGASI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '2', '', '1', '2019-09-21 12:55:21', '75', 'BAN CADANGAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '3', '', '1', '2019-09-21 12:55:21', '75', 'DONGKRAK')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '4', '', '1', '2019-09-21 12:55:21', '75', 'BUMPER BELAKANG')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '5', '', '1', '2019-09-21 12:55:21', '75', 'FENDER BELAKANG KANAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '6', '', '1', '2019-09-21 12:55:21', '75', 'FENDER BELAKANG KIRI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '7', '', '1', '2019-09-21 12:55:21', '75', 'STIKER NO PINTU BAGASI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '8', '', '1', '2019-09-21 12:55:21', '75', 'STIKER CALL CENTER')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '9', '', '1', '2019-09-21 12:55:21', '75', 'STIKER WEBSITE')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '10', '', '1', '2019-09-21 12:55:21', '75', 'PLAT NOMOR BELAKANG')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '11', '', '1', '2019-09-21 12:55:21', '75', 'KACA BELAKANG')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '12', '', '1', '2019-09-21 12:55:21', '75', 'LAMPU LED BELAKANG')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '13', '', '1', '2019-09-21 12:55:21', '75', 'LAMPU BELAKANG KANAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '14', '', '1', '2019-09-21 12:55:21', '75', 'LAMPU BELAKANG KIRI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '15', '', '1', '2019-09-21 12:55:21', '75', 'KONDISI BAN BELAKANG KIRI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '16', '', '1', '2019-09-21 12:55:21', '75', 'STIKER LIST STRIPING KIRI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '17', '', '1', '2019-09-21 12:55:21', '75', 'STIKER EKSTERIOR NO PINTU KIRI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '18', '', '1', '2019-09-21 12:55:21', '75', 'STIKER EKSTERIOR EAGLE PINTU KIRI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '19', '', '1', '2019-09-21 12:55:21', '75', 'PINTU KIRI DEPAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '20', '', '1', '2019-09-21 12:55:21', '75', 'PINTU KIRI BELAKANG')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '21', '', '1', '2019-09-21 12:55:21', '75', 'FENDER DEPAN KIRI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '22', '', '1', '2019-09-21 12:55:21', '75', 'SPION KIRI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '23', '', '1', '2019-09-21 12:55:21', '75', 'KONDISI BAN DEPAN KIRI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '24', '', '1', '2019-09-21 12:55:21', '75', 'KAP MESIN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '25', '', '1', '2019-09-21 12:55:21', '75', 'SEGEL SIKRING / FUSE')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '26', '', '1', '2019-09-21 12:55:21', '75', 'TUTUP MINYAK REM')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '27', '', '1', '2019-09-21 12:55:21', '75', 'ACCU')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '28', '', '1', '2019-09-21 12:55:21', '75', 'TUTUP RADIATOR')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '29', '', '1', '2019-09-21 12:55:21', '75', 'TUTUP TABUNG WIPER')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '30', '', '1', '2019-09-21 12:55:21', '75', 'STICK OLI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '31', '', '1', '2019-09-21 12:55:21', '75', 'LAMPU DEPAN KANAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '32', '', '1', '2019-09-21 12:55:21', '75', 'LAMPU DEPAN KIRI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '33', '', '1', '2019-09-21 12:55:21', '75', 'KACA DEPAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '34', '', '1', '2019-09-21 12:55:21', '75', 'STICKER EXPRESS GROUP KACA DEPAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '35', '', '1', '2019-09-21 12:55:21', '75', 'PLAT NOMOR DEPAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '36', '', '1', '2019-09-21 12:55:21', '75', 'FENDER DEPAN KANAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '37', '', '1', '2019-09-21 12:55:21', '75', 'FENDER DEPAN KIRI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '38', '', '1', '2019-09-21 12:55:21', '75', 'KONDISI BAN DEPAN KANAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '39', '', '1', '2019-09-21 12:55:21', '75', 'SPION KANAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '40', '', '1', '2019-09-21 12:55:21', '75', 'STIKER LIST STRIPING KANAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '41', '', '1', '2019-09-21 12:55:21', '75', 'STIKER EKSTERIOR NO PINTU KANAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '42', '', '1', '2019-09-21 12:55:21', '75', 'STIKER EKSTERIOR EAGLE PINTU KANAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '43', '', '1', '2019-09-21 12:55:21', '75', 'PINTU KANAN DEPAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '44', '', '1', '2019-09-21 12:55:21', '75', 'KONDISI BAN BELAKANG KANAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '27', '', '1', '2019-09-21 12:55:21', '75', 'ACCU')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '28', '', '1', '2019-09-21 12:55:21', '75', 'TUTUP RADIATOR')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '47', '', '1', '2019-09-21 12:55:21', '75', 'STIKER INFORMASI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '48', '', '1', '2019-09-21 12:55:21', '75', 'STIKER INTERIOR NO PINTU DOORTRIM KANAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '49', '', '1', '2019-09-21 12:55:21', '75', 'STIKER INTERIOR NO PINTU DOORTRIM KIRI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '50', '', '1', '2019-09-21 12:55:21', '75', 'STIKER INTERIOR NO PINTU DASHBOARD')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '51', '', '1', '2019-09-21 12:55:21', '75', 'TEMPAT KIP')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '52', '', '1', '2019-09-21 12:55:21', '75', 'LAMPU LED VACANT')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '53', '', '1', '2019-09-21 12:55:21', '75', 'RDS')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '54', '', '1', '2019-09-21 12:55:21', '75', 'ARGO')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '55', '', '1', '2019-09-21 12:55:21', '75', 'SEGEL RDS')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '56', '', '1', '2019-09-21 12:55:21', '75', 'SEGEL ARGO')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '57', '', '1', '2019-09-21 12:55:21', '75', 'SEGEL VACANT')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '58', '', '1', '2019-09-21 12:55:21', '75', 'SEGEL PANEL KANAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '59', '', '1', '2019-09-21 12:55:21', '75', 'SEGEL PANEL KIRI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '60', '', '1', '2019-09-21 12:55:21', '75', 'SEGEL SPEEDO KANAN')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '61', '', '1', '2019-09-21 12:55:21', '75', 'SEGEL SPEEDO KIRI')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '62', '', '1', '2019-09-21 12:55:21', '75', 'BOX MAHKOTA')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '63', '', '1', '2019-09-21 12:55:21', '75', 'LAMPU MAHKOTA')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '64', '', '1', '2019-09-21 12:55:21', '75', 'LAMPU BAHAYA')
ERROR - 2019-09-21 12:55:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(433) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:55:57 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(433) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (433, '65', '', '1', '2019-09-21 12:55:21', '75', 'ROOF / ATAP')
ERROR - 2019-09-21 12:56:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:56:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 12:59:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 12:59:24 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 13:05:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 13:06:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 13:07:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 13:07:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ... VALUES ('CEK/PB/201909/00434', '26', '403', '1', '', '', ''...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:26 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ... VALUES ('CEK/PB/201909/00434', '26', '403', '1', '', '', ''...
                                                             ^ - Invalid query: INSERT INTO "checker_header" ("doc_number", "created_by", "spj_id", "bbm_out", "km_out", "rit_out", "drop_out") VALUES ('CEK/PB/201909/00434', '26', '403', '1', '', '', '')
ERROR - 2019-09-21 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:26 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '1', '', '1', '2019-09-21 01:08:21', '26', 'BAGASI')
ERROR - 2019-09-21 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:26 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '2', '', '1', '2019-09-21 01:08:21', '26', 'BAN CADANGAN')
ERROR - 2019-09-21 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:26 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '3', '', '1', '2019-09-21 01:08:21', '26', 'DONGKRAK')
ERROR - 2019-09-21 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:26 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '4', '', '1', '2019-09-21 01:08:21', '26', 'BUMPER BELAKANG')
ERROR - 2019-09-21 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:26 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '5', '', '1', '2019-09-21 01:08:21', '26', 'FENDER BELAKANG KANAN')
ERROR - 2019-09-21 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:26 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '6', '', '1', '2019-09-21 01:08:21', '26', 'FENDER BELAKANG KIRI')
ERROR - 2019-09-21 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:26 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '7', '', '1', '2019-09-21 01:08:21', '26', 'STIKER NO PINTU BAGASI')
ERROR - 2019-09-21 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:26 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '8', '', '1', '2019-09-21 01:08:21', '26', 'STIKER CALL CENTER')
ERROR - 2019-09-21 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:26 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '9', '', '1', '2019-09-21 01:08:21', '26', 'STIKER WEBSITE')
ERROR - 2019-09-21 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:26 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '10', '', '1', '2019-09-21 01:08:21', '26', 'PLAT NOMOR BELAKANG')
ERROR - 2019-09-21 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:26 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '11', '', '1', '2019-09-21 01:08:21', '26', 'KACA BELAKANG')
ERROR - 2019-09-21 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:26 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '12', '', '1', '2019-09-21 01:08:21', '26', 'LAMPU LED BELAKANG')
ERROR - 2019-09-21 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:26 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '13', '', '1', '2019-09-21 01:08:21', '26', 'LAMPU BELAKANG KANAN')
ERROR - 2019-09-21 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:26 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '14', '', '1', '2019-09-21 01:08:21', '26', 'LAMPU BELAKANG KIRI')
ERROR - 2019-09-21 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:26 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '15', '', '1', '2019-09-21 01:08:21', '26', 'KONDISI BAN BELAKANG KIRI')
ERROR - 2019-09-21 13:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:26 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '16', '', '1', '2019-09-21 01:08:21', '26', 'STIKER LIST STRIPING KIRI')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '17', '', '1', '2019-09-21 01:08:21', '26', 'STIKER EKSTERIOR NO PINTU KIRI')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '18', '', '1', '2019-09-21 01:08:21', '26', 'STIKER EKSTERIOR EAGLE PINTU KIRI')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '19', '', '1', '2019-09-21 01:08:21', '26', 'PINTU KIRI DEPAN')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '20', '', '1', '2019-09-21 01:08:21', '26', 'PINTU KIRI BELAKANG')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '21', '', '1', '2019-09-21 01:08:21', '26', 'FENDER DEPAN KIRI')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '22', '', '1', '2019-09-21 01:08:21', '26', 'SPION KIRI')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '23', '', '1', '2019-09-21 01:08:21', '26', 'KONDISI BAN DEPAN KIRI')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '24', '', '1', '2019-09-21 01:08:21', '26', 'KAP MESIN')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '25', '', '1', '2019-09-21 01:08:21', '26', 'SEGEL SIKRING / FUSE')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '26', '', '1', '2019-09-21 01:08:21', '26', 'TUTUP MINYAK REM')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '27', '', '1', '2019-09-21 01:08:21', '26', 'ACCU')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '28', '', '1', '2019-09-21 01:08:21', '26', 'TUTUP RADIATOR')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '29', '', '1', '2019-09-21 01:08:21', '26', 'TUTUP TABUNG WIPER')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '30', '', '1', '2019-09-21 01:08:21', '26', 'STICK OLI')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '31', '', '1', '2019-09-21 01:08:21', '26', 'LAMPU DEPAN KANAN')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '32', '', '1', '2019-09-21 01:08:21', '26', 'LAMPU DEPAN KIRI')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '33', '', '1', '2019-09-21 01:08:21', '26', 'KACA DEPAN')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '34', '', '1', '2019-09-21 01:08:21', '26', 'STICKER EXPRESS GROUP KACA DEPAN')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '35', '', '1', '2019-09-21 01:08:21', '26', 'PLAT NOMOR DEPAN')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '36', '', '1', '2019-09-21 01:08:21', '26', 'FENDER DEPAN KANAN')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '37', '', '1', '2019-09-21 01:08:21', '26', 'FENDER DEPAN KIRI')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '38', '', '1', '2019-09-21 01:08:21', '26', 'KONDISI BAN DEPAN KANAN')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '39', '', '1', '2019-09-21 01:08:21', '26', 'SPION KANAN')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '40', '', '1', '2019-09-21 01:08:21', '26', 'STIKER LIST STRIPING KANAN')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '41', '', '1', '2019-09-21 01:08:21', '26', 'STIKER EKSTERIOR NO PINTU KANAN')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '42', '', '1', '2019-09-21 01:08:21', '26', 'STIKER EKSTERIOR EAGLE PINTU KANAN')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '43', '', '1', '2019-09-21 01:08:21', '26', 'PINTU KANAN DEPAN')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '44', '', '1', '2019-09-21 01:08:21', '26', 'KONDISI BAN BELAKANG KANAN')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '27', '', '1', '2019-09-21 01:08:21', '26', 'ACCU')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '28', '', '1', '2019-09-21 01:08:21', '26', 'TUTUP RADIATOR')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '47', '', '1', '2019-09-21 01:08:21', '26', 'STIKER INFORMASI')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '48', '', '1', '2019-09-21 01:08:21', '26', 'STIKER INTERIOR NO PINTU DOORTRIM KANAN')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '49', '', '1', '2019-09-21 01:08:21', '26', 'STIKER INTERIOR NO PINTU DOORTRIM KIRI')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '50', '', '1', '2019-09-21 01:08:21', '26', 'STIKER INTERIOR NO PINTU DASHBOARD')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '51', '', '1', '2019-09-21 01:08:21', '26', 'TEMPAT KIP')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '52', '', '1', '2019-09-21 01:08:21', '26', 'LAMPU LED VACANT')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '53', '', '1', '2019-09-21 01:08:21', '26', 'RDS')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '54', '', '1', '2019-09-21 01:08:21', '26', 'ARGO')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '55', '', '1', '2019-09-21 01:08:21', '26', 'SEGEL RDS')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '56', '', '1', '2019-09-21 01:08:21', '26', 'SEGEL ARGO')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '57', '', '1', '2019-09-21 01:08:21', '26', 'SEGEL VACANT')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '58', '', '1', '2019-09-21 01:08:21', '26', 'SEGEL PANEL KANAN')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '59', '', '1', '2019-09-21 01:08:21', '26', 'SEGEL PANEL KIRI')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '60', '', '1', '2019-09-21 01:08:21', '26', 'SEGEL SPEEDO KANAN')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '61', '', '1', '2019-09-21 01:08:21', '26', 'SEGEL SPEEDO KIRI')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '62', '', '1', '2019-09-21 01:08:21', '26', 'BOX MAHKOTA')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '63', '', '1', '2019-09-21 01:08:21', '26', 'LAMPU MAHKOTA')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '64', '', '1', '2019-09-21 01:08:21', '26', 'LAMPU BAHAYA')
ERROR - 2019-09-21 13:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(434) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:08:27 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(434) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (434, '65', '', '1', '2019-09-21 01:08:21', '26', 'ROOF / ATAP')
ERROR - 2019-09-21 13:09:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 13:11:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 13:11:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:11:59 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 13:14:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(255) /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 13:14:27 --> Query error: ERROR:  value too long for type character varying(255) - Invalid query: INSERT INTO "cac_backend_log" ("ip", "user_agent", "browser", "reff_page", "curr_page", "id_user", "dt") VALUES ('10.0.27.108', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Chrome', 'http://apps.expdds.com/rental/Spj/checker_keluar_pool/', '/rental/Spj/get_autocomplete_spj?term=No%09No+Polisi%09No+Pintu%09Jenis+Mobil%09Doc+Number%09SPJ+Number%09Tanggal+Cetak+SPJ%09Tanggal+Checker+Keluar%09Input+By%09Tanggal+Checker+Masuk%09Update+By%09BBM+Keluar%09BBM+Masuk+57%09B+1068+KUA%09JJB8165%09TOYOTA+-+ALPHARD+X+2.4+AT%09CEK%2FPB%2F201909%2F00312%09SPJ-TIARA%2FPB%2F20190918%2F313%0918-09-2019+11%3A37%3A48%0918-09-2019+12%3A44%3A57%0931%0919-09-2019+12%3A58%3A43%0929%090.5%091+83%09B+1068+KUA%09JJB8165%09TOYOTA+-+ALPHARD+X+2.4+AT%09CEK%2FPB%2F201909%2F00251%09SPJ-TIARA%2FPB%2F20190916%2F262%0916-09-2019+17%3A02%3A01%0916-09-2019+17%3A07%3A19%0960%0917-09-2019+19%3A07%3A01%0931%09Tidak+Penuh+-+0+Balok%090+103%09B+1068+KUA%09JJB8165%09TOYOTA+-+ALPHARD+X+2.4+AT%09CEK%2FPB%2F201909%2F00212%09SPJ-TIARA%2FPB%2F20190915%2F216%0915-09-2019+17%3A18%3A14%0915-09-2019+17%3A19%3A49%0929%0916-09-2019+16%3A48%3A08%0960%09Tidak+Penuh+-+1+Balok%09Tidak+Penuh+-+1+Balok+160%09B+1068+KUA%09JJB8165%09TOYOTA+-+ALPHARD+X+2.4+AT%09CEK%2FPB%2F201909%2F00086%09SPJ-TIARA%2FPB%2F20190912%2F89%0912-09-2019+15%3A05%3A04%0912-09-2019+15%3A11%3A46%0931%0913-09-2019+13%3A43%3A31%0929%09Tidak+Penuh+-+1+Balok%09Tidak+Penuh+-+1+Balok+174%09B+1068+KUA%09JJB8165%09TOYOTA+-+ALPHARD+X+2.4+AT%09CEK%2FPB%2F201909%2F00052%09SPJ-TIARA%2FPB%2F20190911%2F53%0911-09-2019+15%3A42%3A40%0911-09-2019+17%3A02%3A54%0961%0912-09-2019+14%3A56%3A47%0931%09Tidak+Penuh+-+1+Balok%09Tidak+Penuh+-+1+Balok+192%09B+1068+KUA%09JJB8165%09TOYOTA+-+ALPHARD+X+2.4+AT%09CEK%2FPB%2F201909%2F00018%09SPJ-TIARA%2FPB%2F20190910%2F20%0910-09-2019+14%3A40%3A42%0910-09-2019+14%3A52%3A30%0961%0911-09-2019+13%3A07%3A47%0961%09Tidak%09Tidak+Penuh+-+1+Balok', '26', '2019-09-21 13:14:27')
ERROR - 2019-09-21 13:15:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 13:21:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 13:24:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 13:30:43 --> Severity: error --> Exception: /var/www/html/rental/application/models/Spj_model.php exists, but doesn't declare class Spj_model /var/www/html/rental/system/core/Loader.php 336
ERROR - 2019-09-21 13:36:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 13:36:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 13:36:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 13:38:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-21 13:39:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-21 13:40:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 13:41:11 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 13:41:11 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 13:42:50 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-21 13:43:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 13:43:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 13:49:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:00:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:01:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:02:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:02:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:03:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:06:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 14:06:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:07:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:07:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:10:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:11:05 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-21 14:11:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:11:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:11:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 14:11:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:11:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:13:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 14:13:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:13:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:13:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:13:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:15:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:15:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:15:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:15:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:16:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:16:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 14:16:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:16:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:25:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:30:49 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:54 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:31:55 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:15 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-21 14:33:17 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:21 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:22 --> Severity: Notice --> Undefined index: status /var/www/html/rental/application/views/spj/index_checker.php 85
ERROR - 2019-09-21 14:33:40 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-21 14:33:40 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-21 14:33:40 --> 404 Page Not Found: Report/build
ERROR - 2019-09-21 14:33:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-21 14:34:04 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-21 14:34:07 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-21 14:34:07 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-21 14:34:10 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 14:34:10 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 14:34:40 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-21 14:35:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:36:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 14:36:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:37:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:37:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 14:37:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 14:38:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:39:49 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-21 14:40:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:41:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-21 14:41:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 14:41:13 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 14:42:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 14:42:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 14:44:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 14:44:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 14:45:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 14:54:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:01:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:02:33 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-21 15:06:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:10:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:11:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:11:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:12:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:13:35 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-21 15:17:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:17:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-21 15:17:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:20:00 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-21 15:27:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:28:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:29:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 15:29:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:30:10 --> Severity: Warning --> fsockopen(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-21 15:30:10 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (php_network_getaddresses: getaddrinfo failed: Name or service not known) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-21 15:30:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:32:37 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 15:32:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:33:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:35:47 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-21 15:38:45 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-21 15:40:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-21 15:40:27 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-21 15:40:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 15:40:35 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 15:40:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:41:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-21 15:43:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:43:23 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-21 15:43:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 15:43:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:48:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:50:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:52:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:53:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:54:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 15:54:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 15:58:09 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-21 16:00:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:00:09 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 16:00:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 16:00:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 16:03:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:03:57 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-21 16:04:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:04:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 16:04:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:06:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 16:06:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:07:11 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 16:07:11 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 16:07:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:08:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:08:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:08:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:08:47 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-21 16:09:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:09:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:09:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:11:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:14:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-21 16:14:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 16:14:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 16:16:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 16:16:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 16:16:55 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-21 16:16:55 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-21 16:16:55 --> 404 Page Not Found: Report/build
ERROR - 2019-09-21 16:17:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:18:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:19:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 16:19:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 16:19:58 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-21 16:20:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:20:14 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 16:20:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:20:58 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 16:20:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:20:59 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 16:21:12 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 16:21:12 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 16:21:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 16:21:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 16:22:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:22:15 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 16:22:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:22:15 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 16:23:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:23:21 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 16:23:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:23:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:23:54 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 16:23:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:23:54 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 16:23:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-21 16:24:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-21 16:24:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:24:10 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-21 16:24:30 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-21 16:24:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:24:30 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-21 16:24:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:24:35 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-21 16:24:35 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-21 16:24:39 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-21 16:24:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:24:39 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-21 16:24:41 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-21 16:24:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:24:41 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-21 16:24:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:24:46 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-21 16:25:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:25:00 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-21 16:25:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:25:00 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-21 16:25:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:25:06 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-21 16:25:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:25:06 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-21 16:25:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:25:16 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-21 16:25:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 16:25:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 16:26:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:26:17 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-21 16:26:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:26:35 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-21 16:27:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:27:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:28:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-21 16:30:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:31:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:31:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 16:31:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:33:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:33:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 16:33:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 16:34:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 16:34:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:34:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:34:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 16:34:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 16:34:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:36:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:36:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:38:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:39:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:40:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:40:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:40:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:40:59 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 16:41:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:43:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 16:43:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:44:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:44:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:45:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:47:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-21 16:47:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-21 16:47:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:47:29 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-21 16:48:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-21 16:48:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:48:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:49:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:53:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:53:16 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2019-09-21 16:53:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 16:53:16 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2019-09-21 16:53:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:57:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 16:57:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 16:57:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-21 16:58:10 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-21 16:58:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 16:59:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 16:59:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 17:04:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 17:04:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 17:04:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 17:06:51 --> Severity: Notice --> Undefined index: sosilo /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-21 17:06:51 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-21 17:10:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-21 17:10:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 17:30:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 17:34:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 17:34:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 17:34:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 17:34:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 17:34:35 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-21 17:34:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 17:35:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 17:35:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 17:35:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-21 17:35:05 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-21 18:05:49 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 18:05:49 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 18:39:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 18:39:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 19:08:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 19:08:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 19:09:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 19:09:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 19:10:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 19:10:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 19:10:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 19:12:43 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-21 19:15:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 19:15:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 19:16:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 19:16:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 19:17:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 19:18:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 19:18:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-21 19:18:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-21 19:18:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-21 19:18:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-21 19:23:44 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-21 19:24:05 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-21 19:25:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-21 19:27:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-21 19:30:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-21 19:43:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 19:43:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 19:43:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 19:43:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 20:16:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 20:16:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-21 20:18:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 20:48:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 20:50:16 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-21 20:50:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-21 21:16:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-21 21:16:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
