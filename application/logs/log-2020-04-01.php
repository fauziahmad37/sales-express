<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-01 05:40:51 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-01 05:40:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 05:42:08 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-04-01 05:43:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 08:34:25 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-01 08:34:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 08:37:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 09:38:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-04-01 09:38:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-01 09:38:45 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-04-01 10:40:57 --> 404 Page Not Found: Seragam/build
ERROR - 2020-04-01 12:42:33 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-01 12:46:36 --> 404 Page Not Found: 1001Rental/index
ERROR - 2020-04-01 12:46:36 --> 404 Page Not Found: 1001Rental/index
ERROR - 2020-04-01 12:51:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 12:55:05 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-01 12:55:05 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-01 12:55:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 12:59:19 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-01 13:23:25 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-01 13:26:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 13:26:59 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-01 13:27:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-01 13:27:07 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-01 13:27:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-04-01 13:27:14 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-01 13:27:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-01 13:27:19 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-01 13:29:52 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-01 13:30:45 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-01 13:30:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-01 13:30:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-01 13:30:53 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-01 13:30:56 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-01 13:30:56 --> 404 Page Not Found: Uploads/rekening
ERROR - 2020-04-01 13:30:58 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-01 13:30:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-01 13:30:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-01 13:31:01 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-01 13:31:02 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-01 13:31:09 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-01 13:31:18 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-01 13:31:19 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-01 13:31:26 --> 404 Page Not Found: Uploads/rekening
ERROR - 2020-04-01 13:31:26 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-04-01 13:31:29 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-04-01 13:31:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-01 13:31:29 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-01 13:32:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-01 13:32:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-01 13:35:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 13:35:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-01 13:35:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-01 13:36:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 13:51:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-01 13:51:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 13:55:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 14:22:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-01 14:22:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-01 14:22:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-01 14:22:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-01 14:22:52 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-01 14:22:57 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-04-01 14:22:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-01 14:22:57 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-01 14:30:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 14:30:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-04-01 14:30:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 15:14:49 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-04-01 15:14:49 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-04-01 15:15:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 15:22:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-01 15:22:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-01 15:22:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-01 15:22:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-01 15:26:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-01 15:26:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-01 16:14:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-01 16:14:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-01 16:48:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 16:58:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 17:00:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 17:02:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 17:02:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 17:32:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 18:12:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-01 18:12:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-01 18:14:07 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-04-01 18:27:38 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-01 18:27:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 18:28:14 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-01 18:28:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 19:20:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-01 19:20:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-01 19:28:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 19:35:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-01 19:35:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-01 19:49:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 20:02:24 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-01 20:02:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-01 20:02:35 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-01 20:09:31 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-04-01 20:09:46 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-01 20:09:58 --> 404 Page Not Found: Report/build
ERROR - 2020-04-01 20:10:00 --> 404 Page Not Found: Report/build
ERROR - 2020-04-01 20:10:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 20:12:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-01 20:12:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-01 20:40:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-04-01 21:12:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 21:12:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-01 21:12:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-01 21:46:25 --> 404 Page Not Found: Assets/css
ERROR - 2020-04-01 21:55:20 --> 404 Page Not Found: Assets/css
ERROR - 2020-04-01 21:55:22 --> Severity: Warning --> Invalid argument supplied for foreach() /var/www/html/rental/application/controllers/Spj.php 339
ERROR - 2020-04-01 21:55:22 --> Severity: Notice --> Undefined variable: arr_result /var/www/html/rental/application/controllers/Spj.php 369
ERROR - 2020-04-01 22:00:46 --> Severity: error --> Exception: /var/www/html/rental/application/models/Spj_model.php exists, but doesn't declare class Spj_model /var/www/html/rental/system/core/Loader.php 336
ERROR - 2020-04-01 22:01:04 --> 404 Page Not Found: Assets/css
ERROR - 2020-04-01 22:55:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 22:55:24 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-01 22:55:24 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-01 23:37:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-01 23:37:55 --> 404 Page Not Found: Spj/build
