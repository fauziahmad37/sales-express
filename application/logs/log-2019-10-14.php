<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-10-14 00:05:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 05:43:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 05:43:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 06:38:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 06:38:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 07:33:14 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-14 07:33:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 07:39:53 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-14 07:40:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 07:50:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 07:52:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 07:54:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-14 07:54:47 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-10-14 07:54:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 08:09:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 08:09:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 08:12:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 08:12:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 08:12:37 --> Severity: Notice --> Undefined index: adji_haryadi /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-10-14 08:18:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 08:19:33 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 08:19:33 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 08:20:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 08:25:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 08:31:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 08:38:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-14 08:39:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-14 08:41:19 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-14 08:49:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 08:49:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-14 08:50:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 08:50:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-14 08:50:09 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-14 08:50:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-14 08:50:35 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-14 08:51:07 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-14 08:51:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 08:52:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 08:52:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 08:52:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 08:52:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 08:57:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 09:04:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 09:08:31 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-14 09:13:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 09:13:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 09:13:44 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-14 09:14:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 09:14:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 09:15:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 09:15:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-14 09:15:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 09:18:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 09:19:49 --> Severity: Notice --> Undefined index: faizal /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-10-14 09:26:10 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-14 09:27:28 --> Severity: Notice --> Undefined index: sholehuddin /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-10-14 09:27:52 --> Severity: Notice --> Undefined index: faizal /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-10-14 09:36:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 09:44:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-14 09:44:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-14 09:45:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-14 09:45:25 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-10-14 09:45:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-14 09:45:27 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-10-14 09:46:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 09:46:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 09:46:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 09:48:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 09:52:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-14 09:52:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-14 09:53:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-14 09:53:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 09:55:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 09:58:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 09:59:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-14 09:59:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-14 09:59:26 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-14 09:59:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 09:59:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-14 10:00:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-14 10:00:10 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-14 10:00:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:02:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:03:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:05:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:06:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:07:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:08:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:09:12 --> Severity: Notice --> Undefined index: sholehuddin /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-10-14 10:10:06 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 10:10:06 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 10:11:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:11:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 10:11:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 10:12:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:13:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:16:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-14 10:17:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-14 10:22:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:22:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-14 10:25:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:25:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:25:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:29:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:34:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:35:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 10:35:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 10:36:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:36:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:36:37 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 10:36:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:39:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:41:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:43:12 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-14 10:44:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:44:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:44:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:45:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:46:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:47:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:48:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 10:48:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:48:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 10:56:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-14 10:58:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 11:01:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 11:09:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-14 11:10:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 11:17:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 11:18:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 11:22:14 --> 404 Page Not Found: Seragam/build
ERROR - 2019-10-14 11:25:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-14 11:25:00 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-10-14 11:26:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 11:26:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 11:33:18 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-14 11:34:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 11:39:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 11:41:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 11:46:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 11:46:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 11:49:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 11:54:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 11:56:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 12:05:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 12:05:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 12:26:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 12:26:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 12:28:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 12:33:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 12:33:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 12:34:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 12:34:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 12:34:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 12:34:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 12:34:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 12:34:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-14 12:34:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 12:34:46 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 12:34:46 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 12:43:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 12:44:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 12:44:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 12:53:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 13:04:32 --> Severity: Notice --> Undefined index: faizal /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-10-14 13:19:03 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-14 13:22:04 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-14 13:22:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 13:23:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-14 13:23:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-14 13:23:51 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-14 13:24:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 13:26:35 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-14 13:26:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 13:27:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 13:33:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 13:36:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 13:36:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 13:37:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 13:37:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 13:37:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 13:47:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 13:47:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 13:47:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 13:47:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 13:48:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 13:49:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 13:54:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 13:59:24 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-14 14:00:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:00:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:00:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:01:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:01:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:01:56 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 14:02:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:02:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 14:02:13 --> Severity: Warning --> fsockopen(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-10-14 14:02:13 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (php_network_getaddresses: getaddrinfo failed: Name or service not known) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-10-14 14:02:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:02:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:03:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 14:03:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:03:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:03:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 14:03:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:04:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:04:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:05:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 14:05:26 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 573
ERROR - 2019-10-14 14:05:26 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 573
ERROR - 2019-10-14 14:05:26 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 573
ERROR - 2019-10-14 14:05:26 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 573
ERROR - 2019-10-14 14:05:26 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 574
ERROR - 2019-10-14 14:05:26 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 575
ERROR - 2019-10-14 14:05:26 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 586
ERROR - 2019-10-14 14:05:26 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 586
ERROR - 2019-10-14 14:05:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 10:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-14 14:05:26 --> Query error: ERROR:  syntax error at or near "and"
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
ERROR - 2019-10-14 14:05:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:05:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:05:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:05:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:06:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:06:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:06:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:06:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:07:26 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-14 14:08:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:08:42 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 14:08:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:09:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:09:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:09:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:10:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:10:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 14:10:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:10:57 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-14 14:11:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:11:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:12:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:12:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:13:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 14:13:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:14:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 14:14:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:14:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:18:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:19:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:20:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 14:20:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:21:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:24:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:24:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-14 14:31:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:32:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:32:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:35:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:35:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 14:35:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:36:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:36:53 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-14 14:37:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:37:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:37:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:38:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:39:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 14:39:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:43:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 14:43:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 14:47:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 14:47:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 14:48:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:49:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 14:49:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 14:50:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:53:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:54:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:54:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:54:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:54:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:55:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:55:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 14:56:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:02:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 15:02:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 15:05:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:05:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:06:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:06:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:07:10 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 15:07:10 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 15:07:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 15:07:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 15:08:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 15:08:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:08:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:09:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:09:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 15:09:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:12:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:14:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:14:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:16:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:17:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:18:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:20:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:22:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:22:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:22:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 15:22:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 15:26:27 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 15:26:27 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 15:29:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:29:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:29:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:29:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:31:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 15:31:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:31:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:31:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:40:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:40:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 15:40:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 15:41:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:42:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:42:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 15:42:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:43:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:44:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 15:44:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:50:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:51:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 15:52:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-14 15:52:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-14 15:53:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-14 15:53:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-14 15:57:38 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-14 16:10:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:11:11 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 16:11:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:17:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:18:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 16:18:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 16:18:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:19:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:19:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:20:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:20:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:21:46 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-14 16:21:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:22:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:22:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 16:22:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:23:06 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-14 16:24:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:25:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 16:25:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 16:26:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:26:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:27:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:27:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 16:27:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 16:27:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 16:27:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:27:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:28:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:28:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:29:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 16:29:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:30:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:31:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:31:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 16:31:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:32:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:32:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 16:32:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:33:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 16:33:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:34:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:34:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 16:34:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:34:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:35:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:36:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:36:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:37:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-14 16:37:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-14 16:37:46 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-14 16:37:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:39:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:39:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:39:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:40:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 16:40:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:40:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:40:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:42:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:43:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-14 16:43:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-14 16:43:21 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-14 16:43:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-14 16:43:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-14 16:43:47 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-14 16:43:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-14 16:44:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-14 16:44:02 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-14 16:44:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:51:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:51:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:52:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:52:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 16:53:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 16:53:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:53:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 16:53:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:54:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 16:54:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:54:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 16:55:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-14 16:55:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 17:00:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 17:16:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 17:16:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 17:22:42 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-14 17:23:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 17:32:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 17:42:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 17:44:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 17:54:53 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-14 17:54:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 17:56:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 18:21:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 18:27:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 18:34:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 18:35:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 18:43:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 18:43:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 18:44:59 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj_tiara.php 35
ERROR - 2019-10-14 18:44:59 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj_tiara.php 35
ERROR - 2019-10-14 18:44:59 --> 404 Page Not Found: Report/build
ERROR - 2019-10-14 18:46:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 18:46:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 18:46:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 18:46:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 18:47:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 18:47:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-14 18:47:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-14 18:49:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-14 22:57:14 --> 404 Page Not Found: Spj/build
