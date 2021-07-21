<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-11 00:52:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 01:55:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 03:51:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 07:12:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 07:15:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 07:55:40 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-11 08:03:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:04:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:05:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:06:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:07:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 08:07:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:08:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 08:08:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:11:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:12:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:17:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:20:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 08:20:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 08:22:46 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 08:22:46 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 08:24:02 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-11 08:24:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:25:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 08:25:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 08:28:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:28:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:28:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:36:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:40:33 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-11 08:43:37 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-11 08:43:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:44:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:48:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:50:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:57:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 08:58:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 09:12:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 09:13:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 09:13:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 09:13:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 09:13:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 09:13:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 09:15:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-11 09:15:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-11 09:15:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-11 09:16:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-11 09:18:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-11 09:18:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-11 09:20:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-11 09:20:20 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-11 09:24:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-11 09:24:08 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-11 09:26:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 09:30:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-11 09:39:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 09:49:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 09:50:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-11 09:50:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-11 09:50:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-11 10:00:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 10:00:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 10:00:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 10:12:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 10:16:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-11 10:16:18 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-11 10:20:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-11 10:38:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 10:43:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-11 10:43:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-11 10:43:48 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-11 11:04:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 11:08:20 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-11 11:08:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 11:43:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 11:55:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 11:59:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 12:14:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-11 12:51:23 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-11 13:46:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 13:46:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 13:51:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 13:56:02 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-11 14:02:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:04:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:04:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:04:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 14:04:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 14:05:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-11 14:07:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-11 14:07:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-11 14:07:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:07:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:08:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:08:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:08:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:09:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:09:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 14:09:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:09:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:09:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:09:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:10:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:10:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:10:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 14:10:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:11:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:11:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 14:11:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:11:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:11:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:11:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 14:11:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:12:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 14:12:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:13:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:13:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 14:13:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:13:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:13:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:16:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-11 14:17:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 14:17:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:17:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:18:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-11 14:18:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-11 14:22:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 14:22:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:27:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:27:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:29:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:29:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:30:10 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 14:30:10 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 14:30:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:31:02 --> Severity: Notice --> Undefined index: hengki_firmansyah /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-11-11 14:31:35 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-11-11 14:31:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-11 14:31:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-11 14:31:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:34:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-11 14:34:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-11 14:34:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 14:34:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-11 14:34:33 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-11 14:34:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-11 14:34:35 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-11 14:34:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-11 14:34:36 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-11-11 14:34:36'
WHERE "id" = 'build'
ERROR - 2019-11-11 14:34:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:35:14 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-11 14:35:17 --> Severity: Notice --> Undefined index: wahyu_prasetya /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-11-11 14:35:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 14:35:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:37:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 14:38:01 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-11 14:38:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:38:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:39:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-11 14:40:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:41:03 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-11 14:41:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:41:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:42:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 14:42:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 14:44:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:44:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:44:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 14:44:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:45:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:50:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 14:50:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 14:52:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-11 14:52:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-11 14:52:29 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-11 14:53:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-11 14:56:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 14:56:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 15:04:14 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 15:04:14 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 15:04:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:05:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 15:05:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:09:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 15:09:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 15:10:17 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-11 15:10:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 15:10:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 15:11:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:14:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:18:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-11 15:20:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:25:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:26:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 15:26:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 15:28:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:29:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 15:29:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 15:29:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:30:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:30:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:31:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 15:31:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:32:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:34:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:37:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 15:37:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 15:40:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:41:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:46:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:47:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:51:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:53:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:54:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 15:54:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:58:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 15:58:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:01:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:01:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 16:01:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 16:01:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:01:46 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-11 16:03:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:05:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:08:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-11 16:08:30 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-11-11 16:08:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-11 16:08:30 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-11 16:10:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:11:11 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 16:11:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:12:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:13:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 16:13:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:15:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:17:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:28:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:29:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:30:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:30:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:30:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 16:31:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:32:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 16:32:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:33:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:34:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:37:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:37:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:38:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 16:38:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 16:39:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:40:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 16:40:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:40:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:43:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:44:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:44:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:45:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:47:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:48:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:48:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 16:48:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 16:48:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:49:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:49:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:49:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:50:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:50:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:50:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 16:51:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:51:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:51:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:51:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:51:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 16:51:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:52:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 16:52:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:52:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:52:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:52:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 16:53:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:53:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:53:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 16:53:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:54:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:54:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:54:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 16:54:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:55:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:56:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:56:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:56:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:56:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 16:56:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:56:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 16:56:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:56:59 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 16:57:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:57:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:57:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 16:57:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 16:57:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:57:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:57:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 16:58:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-11 16:58:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 17:00:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 17:02:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 17:02:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 17:04:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 17:20:09 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-11 17:22:55 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-11 17:33:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 17:50:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 19:16:33 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 19:16:33 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 19:18:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-11 19:18:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-11 19:37:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 22:33:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-11 22:34:32 --> 404 Page Not Found: Spj/build
