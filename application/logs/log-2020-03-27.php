<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-27 05:10:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 05:15:58 --> Severity: Notice --> Undefined index: ajat_sudrajat /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-03-27 05:20:53 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-27 05:20:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 05:53:24 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-03-27 05:53:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 06:34:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-27 06:34:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 06:35:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 08:14:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 09:32:31 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-27 09:41:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 09:41:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 09:55:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 10:00:50 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 10:04:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 10:10:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 10:10:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 10:26:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 10:26:31 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-27 10:26:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 10:26:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 10:26:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 10:27:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 10:28:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 10:28:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 10:42:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 10:53:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 10:54:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-27 10:54:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-03-27 10:56:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 10:59:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 11:01:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-27 11:01:14 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-03-27 11:01:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-27 11:01:43 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-03-27 11:05:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 11:07:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 11:17:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 11:17:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 11:18:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 11:20:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 11:32:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 11:32:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 11:34:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 11:39:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-27 11:39:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 11:42:23 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-27 11:42:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 11:54:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 11:56:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 11:57:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-27 11:57:10 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-03-27 11:57:15 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 11:57:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 11:57:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 12:14:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 12:15:39 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-03-27 12:28:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 12:30:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 12:31:55 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-27 12:32:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-27 12:32:03 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-03-27 12:33:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 12:45:48 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-27 12:46:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 12:47:42 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-27 12:47:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-27 12:47:48 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-03-27 13:00:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 13:00:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 13:00:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 13:01:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 13:02:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 13:02:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 13:08:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 13:08:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 13:09:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 13:10:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 13:10:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 13:10:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 13:10:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 13:18:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 13:18:49 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 13:18:49 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 13:19:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 13:22:32 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-27 13:22:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 13:23:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 13:23:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 13:35:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 13:35:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 14:04:21 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-03-27 14:15:08 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-27 14:15:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 14:22:33 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-27 14:22:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 14:35:53 --> 404 Page Not Found: Seragam/build
ERROR - 2020-03-27 14:36:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 14:36:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 14:37:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 14:37:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 14:41:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 14:43:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 14:43:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 14:45:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-27 14:45:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 14:52:12 --> 404 Page Not Found: Assets/css
ERROR - 2020-03-27 14:52:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 14:52:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 14:52:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 14:53:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 14:58:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 15:00:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 15:00:47 --> Severity: Notice --> Undefined index: darul /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-03-27 15:00:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 15:08:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-27 15:16:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 15:32:21 --> 404 Page Not Found: Report/build
ERROR - 2020-03-27 15:32:40 --> 404 Page Not Found: Report/build
ERROR - 2020-03-27 15:52:02 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-27 15:52:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 15:53:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 16:07:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 16:07:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 16:14:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 16:14:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-27 16:29:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 16:36:58 --> 404 Page Not Found: Seragam/build
ERROR - 2020-03-27 16:37:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 16:38:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-27 16:38:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 16:55:52 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-03-27 17:01:14 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-27 17:01:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 17:02:59 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-27 17:06:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-27 17:06:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 17:11:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 17:11:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 17:14:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 17:33:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 17:37:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 17:37:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 17:50:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-27 17:50:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 17:51:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 17:51:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 18:31:03 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-27 18:31:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 18:33:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 18:45:05 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 18:45:05 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 18:45:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 18:45:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-27 18:45:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 18:46:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 18:47:05 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-27 18:54:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 18:57:37 --> 404 Page Not Found: Seragam/build
ERROR - 2020-03-27 19:05:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-27 19:05:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 19:05:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 19:05:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 19:06:54 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-27 19:06:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 19:21:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 19:21:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 19:21:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 19:21:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 19:22:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-27 19:22:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 19:33:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 19:55:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 19:55:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-27 20:27:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-27 20:47:47 --> 404 Page Not Found: Seragam/build
ERROR - 2020-03-27 21:44:48 --> 404 Page Not Found: Closing/build
ERROR - 2020-03-27 21:45:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-27 21:45:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
