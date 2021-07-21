<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-13 05:02:57 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 05:02:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 05:03:57 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 05:03:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 05:05:46 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 05:05:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 05:07:05 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 05:07:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 05:07:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-13 05:07:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-13 05:08:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 05:20:42 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 05:20:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 05:46:36 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-13 05:51:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 05:51:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 05:51:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 06:01:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-13 06:01:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-13 06:02:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-13 06:02:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-13 06:07:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 06:07:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 06:19:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-13 06:19:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-13 06:21:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-13 06:21:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-13 06:22:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 06:22:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 06:22:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 06:37:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 06:55:01 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-13 06:55:34 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-13 06:55:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 06:55:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-13 07:54:02 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-13 07:55:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 07:59:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 08:00:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 08:02:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 08:04:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 08:05:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 08:21:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 08:52:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 08:52:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-13 08:52:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 09:01:19 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 09:01:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 09:09:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-13 09:09:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 09:11:06 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-13 09:29:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 09:38:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-13 09:41:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 10:21:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 10:24:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 10:24:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-13 10:24:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 10:25:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-13 10:25:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 10:29:03 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 10:29:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 10:30:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-13 10:30:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 10:41:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 10:41:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 10:43:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 10:43:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 10:46:55 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 10:46:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 11:40:28 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 11:40:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 11:58:07 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 11:58:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 12:06:34 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 12:06:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 12:10:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 12:12:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 12:12:30 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-13 12:15:50 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-13 12:20:59 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 12:21:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 12:26:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 12:26:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 12:27:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-13 12:27:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 12:28:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 12:28:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 12:28:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 12:28:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 12:28:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 12:29:14 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-13 12:33:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 12:35:21 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-13 12:42:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 12:44:37 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-13 12:48:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 12:51:20 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-13 12:51:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 13:02:46 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 13:02:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 13:04:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 13:08:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 13:09:27 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 13:09:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 13:14:36 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 13:14:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 13:15:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 13:24:02 --> 404 Page Not Found: Report/build
ERROR - 2020-01-13 13:24:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 13:27:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 13:27:32 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-13 13:29:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 13:43:52 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-13 13:44:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 13:49:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 13:56:28 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 13:56:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 13:56:59 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 13:57:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 14:00:47 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-13 14:00:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 14:00:55 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-13 14:01:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 14:01:38 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 14:01:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 14:14:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 14:14:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 14:17:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 14:21:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 14:21:37 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 14:21:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 14:22:50 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 14:22:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 14:24:16 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-13 14:24:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 14:24:23 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-13 14:24:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 14:31:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 14:36:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 14:39:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 14:39:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 14:41:08 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-13 14:55:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 15:05:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 15:06:36 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 15:06:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 15:13:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 15:18:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 15:20:40 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-13 15:20:52 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-13 15:20:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 15:20:52 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-13 15:20:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 15:48:40 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 15:48:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 15:52:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 16:13:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 16:13:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 16:18:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 16:20:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 16:22:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 16:22:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 16:23:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-13 16:23:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 16:23:26 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-13 16:23:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 16:23:31 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-13 16:27:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-13 16:27:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 16:27:22 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-13 16:32:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-13 16:32:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 16:32:49 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-13 16:32:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 16:32:52 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2020-01-13 16:32:52'
WHERE "id" = 'build'
ERROR - 2020-01-13 16:33:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 16:34:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 16:37:50 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-13 16:42:12 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-13 16:42:45 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 16:42:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 16:48:18 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 16:48:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 16:51:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 17:21:10 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 17:21:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 17:30:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 17:30:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 17:31:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 17:31:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 17:31:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-13 17:32:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 17:34:11 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-13 17:36:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 17:37:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-13 17:37:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 17:54:51 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 17:54:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 17:55:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 17:58:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-13 17:59:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 18:00:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-13 18:00:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-13 18:01:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 18:10:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-13 18:10:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 18:11:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-13 18:11:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-13 18:11:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 18:12:55 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 18:12:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 18:13:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-13 18:13:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 18:14:27 --> Severity: Notice --> Undefined index: very /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-13 18:15:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 18:17:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 18:20:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-13 18:20:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-13 18:36:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 18:49:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 18:49:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 18:49:37 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 18:49:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 18:53:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-13 18:53:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-13 18:59:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:19:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 19:19:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:20:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:21:20 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-13 19:21:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 19:21:25 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-13 19:21:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:22:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:26:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 19:26:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:28:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:28:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:28:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-13 19:28:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:29:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:32:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 19:32:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:34:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:37:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-13 19:37:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-13 19:37:57 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-13 19:37:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:39:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-13 19:39:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-13 19:40:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:43:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:43:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-13 19:43:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:44:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:44:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:45:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-13 19:45:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:50:38 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 19:50:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:51:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:51:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:51:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-13 19:51:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:53:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:56:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:56:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 19:57:32 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 19:57:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:03:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-13 20:03:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-13 20:05:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-13 20:05:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-13 20:09:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 20:09:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:11:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:11:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:12:14 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 20:12:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:14:32 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 20:14:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:14:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:24:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:30:27 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-13 20:30:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:30:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:31:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:32:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:35:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-13 20:35:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-13 20:35:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:37:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:42:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:45:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:46:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:46:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:46:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:47:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:47:29 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-13 20:47:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 20:47:52 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-13 20:48:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 20:48:17 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-13 20:49:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:49:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:52:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:53:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 20:54:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-13 20:54:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 21:04:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-13 21:12:02 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-13 21:18:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 21:19:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 21:20:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 21:26:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 21:27:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 21:31:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 21:32:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 21:34:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-13 21:34:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-13 21:34:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 21:35:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-13 21:35:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-13 21:36:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 21:44:34 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-13 21:46:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 21:47:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-13 21:47:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-13 21:52:20 --> 404 Page Not Found: Closing/build
ERROR - 2020-01-13 22:05:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 23:20:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-13 23:20:26 --> 404 Page Not Found: Spj/build
