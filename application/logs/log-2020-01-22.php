<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-22 00:22:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 01:00:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 03:41:07 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 03:42:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-22 03:50:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-22 03:50:53 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-22 03:52:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-22 03:52:05 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-22 03:52:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-22 03:52:40 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-22 03:54:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-22 05:00:58 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-22 05:01:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 05:01:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 05:01:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 05:06:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 05:06:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 05:07:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 05:07:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 05:07:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 05:08:03 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 05:08:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 05:09:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 05:10:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 05:11:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 05:23:10 --> Severity: Notice --> Undefined index: ajat_sudrajat /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-22 05:32:03 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-22 05:33:11 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-22 05:33:11 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-22 05:33:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 05:33:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 05:33:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 05:34:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 05:37:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-22 05:37:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-22 05:51:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 05:51:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 06:06:41 --> Severity: Notice --> Undefined index: choiruman /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-22 06:07:58 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-22 06:08:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 06:08:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 06:09:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 06:09:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 06:13:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 06:14:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 06:14:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 06:35:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 06:59:21 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 06:59:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 07:02:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 07:24:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 07:24:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-22 07:24:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-22 07:26:01 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 07:26:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 07:26:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 07:27:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-22 07:27:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-22 07:27:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 08:16:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 08:16:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 08:17:41 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-22 08:20:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 08:23:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 08:30:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 08:35:10 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 08:35:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 08:50:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:12:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:12:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:12:19 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-22 09:13:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:15:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:16:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:16:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:16:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:19:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:21:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:22:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:23:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:23:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 09:23:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:23:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 09:23:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:24:52 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 09:24:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:26:45 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 09:26:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:30:06 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-22 09:33:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-22 09:33:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-22 09:42:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:47:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:48:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-22 09:48:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-22 09:53:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:54:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 09:54:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:56:29 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-22 09:57:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:58:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 09:58:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 09:59:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 09:59:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 10:02:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-22 10:02:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-22 10:31:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 10:33:19 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 10:33:31 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 10:44:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 10:52:48 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 10:57:48 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 10:57:55 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 10:58:01 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 10:58:39 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 10:59:05 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 10:59:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-22 10:59:13 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-22 11:00:16 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 11:06:15 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 11:06:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 11:07:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 11:08:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 11:09:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-22 11:09:12 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-22 11:14:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-22 11:14:44 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-22 11:16:46 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 11:16:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 11:17:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-22 11:17:32 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-22 11:25:02 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 11:25:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 11:34:42 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-22 11:35:27 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-22 11:37:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 11:38:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 11:41:38 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-22 11:43:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 11:44:23 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 11:44:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 11:56:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 11:56:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 11:57:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 11:57:37 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 11:57:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 11:58:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 11:58:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 12:18:34 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 12:18:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 12:20:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 12:22:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 12:22:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 12:27:02 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 12:27:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 12:49:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 12:50:33 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 12:50:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 12:55:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 12:59:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 13:03:02 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 13:03:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 13:04:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 13:08:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-22 13:08:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-22 13:09:37 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 13:09:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 13:10:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-22 13:10:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-22 13:21:44 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 13:21:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 13:23:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 13:23:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-22 13:23:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-22 13:26:56 --> 404 Page Not Found: Assets/css
ERROR - 2020-01-22 13:27:21 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 13:27:30 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 13:40:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 13:41:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 13:41:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 13:41:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 13:42:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 13:42:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 13:44:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 13:44:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 13:58:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 13:58:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 13:58:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 13:58:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 13:59:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 14:06:00 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-22 14:16:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 14:23:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 14:24:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 14:31:54 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-22 14:32:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 14:33:09 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 14:33:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 14:36:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 14:38:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 14:43:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 14:43:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 14:43:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 14:44:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 14:44:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 14:51:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 14:52:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 14:52:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 14:52:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 14:53:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 14:53:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 14:56:46 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 14:56:54 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 14:58:07 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-22 14:58:40 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 14:58:46 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 14:59:17 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 14:59:23 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 14:59:42 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 14:59:43 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 14:59:44 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 14:59:46 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 14:59:47 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 14:59:49 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:00:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 15:00:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 15:00:37 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 15:00:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 15:05:05 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 15:05:09 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 15:05:11 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 15:05:30 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-22 15:13:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-22 15:13:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-22 15:19:08 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:19:10 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:19:12 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:19:14 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:19:15 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:19:16 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:19:22 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:19:24 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:19:26 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:19:27 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:20:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 15:24:54 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:24:56 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:25:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 15:28:23 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:28:25 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:28:26 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:28:27 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:28:28 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:28:29 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:28:29 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:28:30 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:28:31 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:28:32 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:29:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 15:29:43 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:29:45 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:30:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 15:30:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 15:30:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 15:33:09 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:33:11 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:33:12 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:33:14 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:33:15 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:33:16 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:33:19 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:33:21 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:33:24 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:33:26 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:39:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 15:46:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 15:47:53 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:47:55 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 15:52:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 16:06:18 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:06:19 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:06:20 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:13:30 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 16:13:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-22 16:13:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-22 16:14:08 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 16:14:11 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:17:44 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:17:45 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:19:28 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:20:42 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:21:25 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 16:21:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 16:30:16 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:30:18 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:30:19 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:30:21 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:30:30 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:30:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 16:30:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 16:31:03 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 16:31:13 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:31:15 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:32:23 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-22 16:34:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 16:36:02 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 16:36:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-22 16:36:21 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-22 16:36:38 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 16:46:47 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:46:51 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:46:54 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:46:54 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:51:26 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:53:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 16:53:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 16:53:36 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:53:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 16:57:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 16:58:07 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-22 16:59:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 16:59:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:01:50 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 17:03:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:05:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:06:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-22 17:06:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-22 17:08:13 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 17:08:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:08:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-22 17:08:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-22 17:09:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:09:44 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 17:09:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:12:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:13:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 17:14:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:17:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:23:33 --> 404 Page Not Found: Report/setoran
ERROR - 2020-01-22 17:23:33 --> 404 Page Not Found: Report/setoran
ERROR - 2020-01-22 17:23:37 --> 404 Page Not Found: Report/build
ERROR - 2020-01-22 17:24:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:25:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:26:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 17:26:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:28:48 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 17:28:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:31:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-22 17:31:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-22 17:31:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:32:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:41:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:46:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 17:46:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:48:45 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 17:48:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:54:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:56:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:56:39 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-22 17:57:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 17:57:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:59:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 17:59:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 17:59:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 17:59:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 18:03:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 18:08:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 18:09:55 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-22 18:13:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 18:13:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 18:14:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 18:15:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 18:21:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-22 18:21:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-22 18:21:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 18:23:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-22 18:23:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-22 18:41:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 18:42:34 --> Severity: Notice --> Undefined index: hengki_firmansyah /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-22 18:42:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 18:43:57 --> Severity: Notice --> Undefined index: ismail /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-22 18:44:37 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-22 18:52:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 18:52:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 18:54:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 18:58:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 18:58:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 18:58:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 19:02:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 19:02:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 19:09:02 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 19:09:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 19:10:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 19:21:39 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-22 19:21:42 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 19:21:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 19:21:50 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 19:21:59 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 19:22:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 19:22:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 19:32:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 19:35:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 19:35:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 19:38:55 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-22 19:41:36 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 19:42:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 19:45:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 19:49:17 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-22 19:56:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 19:57:16 --> Severity: Notice --> Undefined index: hengki_firmansyah /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-22 19:57:18 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-22 20:00:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:01:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:13:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 20:13:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:16:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 20:16:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:23:40 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 20:23:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:26:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:28:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:29:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 20:29:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:31:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 20:31:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:31:10 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 20:31:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:31:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:32:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:35:21 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 20:35:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:35:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:40:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:42:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:43:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:43:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:43:48 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-22 20:43:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:44:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:48:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:48:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:48:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 20:48:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:53:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 20:53:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-22 20:53:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 21:00:53 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-22 21:06:49 --> 404 Page Not Found: Closing/build
ERROR - 2020-01-22 21:09:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 21:16:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 21:16:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-22 21:16:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-22 21:23:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-22 21:23:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-22 21:28:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 21:45:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 22:48:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 23:08:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-22 23:48:57 --> 404 Page Not Found: Spj/build
