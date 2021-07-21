<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-16 01:17:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 03:06:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 05:46:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 06:57:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 07:40:22 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-16 07:49:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 07:54:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-16 07:54:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-16 07:54:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 07:59:27 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-16 07:59:27 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-16 08:03:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:04:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:05:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 08:05:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:05:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:10:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:17:40 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-16 08:18:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:20:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:21:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:22:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:23:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:24:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:25:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-16 08:25:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-16 08:25:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:25:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 08:25:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:26:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:28:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:30:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:46:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:49:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:49:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-16 08:49:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-16 08:50:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 08:52:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 09:13:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 09:16:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 09:20:42 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-16 09:23:16 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-16 09:23:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-16 09:23:23 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-16 09:29:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 09:33:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 09:45:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 09:59:16 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-16 10:11:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 10:12:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 10:39:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 10:39:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 10:40:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 10:42:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-16 10:51:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 10:58:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 10:59:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 10:59:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 10:59:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 11:11:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 11:17:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 11:25:40 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-16 11:25:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 11:26:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 11:27:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-16 11:30:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 11:58:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 12:06:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-16 12:06:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-16 12:06:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 12:55:22 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-16 12:56:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-16 12:56:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-16 12:58:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 13:00:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 13:38:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 13:39:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 13:39:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:00:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:00:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 14:00:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:01:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:02:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:02:15 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-16 14:02:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:02:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:03:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 14:03:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:03:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:03:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:04:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:04:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:05:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:06:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 14:06:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:06:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:19:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:33:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:37:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:39:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:42:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 14:42:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:51:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:53:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 14:59:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 15:00:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 15:05:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 15:06:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-16 15:06:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-16 15:12:41 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-16 15:13:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 15:14:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 15:27:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 15:40:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 15:42:41 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-16 15:42:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 15:43:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 15:52:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 15:57:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 15:59:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 15:59:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:00:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:01:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:04:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:04:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:04:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 16:04:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:04:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:15:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:16:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:18:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:22:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:23:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:26:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:26:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:28:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:31:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 16:31:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:32:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 16:32:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:33:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 16:33:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:34:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:36:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:38:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:38:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:39:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:39:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:40:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 16:40:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:42:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 16:42:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:44:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 16:44:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:45:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:47:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:47:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:47:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:48:07 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 575
ERROR - 2019-11-16 16:48:07 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 575
ERROR - 2019-11-16 16:48:07 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 575
ERROR - 2019-11-16 16:48:07 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 575
ERROR - 2019-11-16 16:48:07 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 576
ERROR - 2019-11-16 16:48:07 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 577
ERROR - 2019-11-16 16:48:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 588
ERROR - 2019-11-16 16:48:07 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 588
ERROR - 2019-11-16 16:48:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 10:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-16 16:48:07 --> Query error: ERROR:  syntax error at or near "and"
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
ERROR - 2019-11-16 16:48:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-16 16:48:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-16 16:49:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:49:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:49:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:49:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-16 16:49:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:49:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:50:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:50:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:50:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 16:50:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:50:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:50:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:52:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 16:52:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:54:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 16:54:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:55:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 16:55:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:56:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 16:56:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:57:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 16:57:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:57:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 16:58:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:58:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-16 16:58:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 16:59:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-16 17:00:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 17:02:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 17:13:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 17:14:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 17:15:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 17:17:15 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-16 17:19:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 17:30:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-16 17:30:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-16 17:30:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 17:40:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-16 17:40:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-16 17:41:29 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-16 17:54:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 17:57:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-16 17:57:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-16 18:13:06 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-16 18:13:06 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-16 18:13:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 18:14:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 18:24:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-16 18:24:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-16 19:35:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 20:26:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-16 21:06:34 --> 404 Page Not Found: Spj/build
