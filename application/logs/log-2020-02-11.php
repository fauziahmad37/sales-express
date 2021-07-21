<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-11 04:02:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 04:02:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 04:04:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-11 04:04:13 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-02-11 04:05:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 04:58:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 05:01:10 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 05:01:10 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 05:02:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 05:02:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 05:03:23 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 05:03:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 05:04:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 05:04:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 05:04:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 05:04:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 05:05:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 05:05:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 05:05:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 05:05:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 05:06:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 05:08:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 05:08:19 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 05:08:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 05:11:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 05:19:24 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-11 05:31:00 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 05:31:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 05:31:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 05:37:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 06:16:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 07:29:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 07:29:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 07:31:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 07:33:15 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-11 07:33:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-11 07:33:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-11 07:35:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 07:35:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 07:37:28 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-11 07:53:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 07:53:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 07:54:27 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 07:54:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 07:55:28 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-11 07:55:30 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-11 07:55:32 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-11 07:55:37 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-11 07:55:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-11 07:55:44 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-11 07:56:29 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-11 07:56:39 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-11 07:56:40 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-11 07:56:53 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-11 08:04:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 08:09:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 08:09:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 08:09:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 08:09:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 08:27:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 08:27:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 08:30:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 08:30:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 08:30:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 08:47:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 08:49:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 08:49:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 08:49:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 08:51:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 08:53:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 08:54:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 08:56:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 08:58:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 08:58:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 08:59:09 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 08:59:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 08:59:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 09:00:32 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 09:00:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 09:12:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 09:17:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 09:35:55 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-11 09:43:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 09:44:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-11 09:44:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 10:05:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-11 10:05:49 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2020-02-11 10:06:10 --> 404 Page Not Found: Assets/css
ERROR - 2020-02-11 10:10:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 10:10:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 10:13:59 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 10:13:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 10:18:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 10:20:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 10:30:54 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-02-11 10:40:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 11:05:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 11:11:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 11:11:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 11:11:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 11:12:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 11:12:59 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 11:13:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 11:13:30 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 11:13:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 11:13:59 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 11:13:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 11:14:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 11:26:01 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-11 11:51:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 11:51:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 12:00:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 12:19:53 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 12:19:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 12:20:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 12:20:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 12:20:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 12:21:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 12:28:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 12:30:10 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 12:30:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 12:30:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 12:33:58 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-11 12:48:36 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 12:48:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 13:02:01 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-11 13:02:04 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-11 13:02:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 13:10:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 13:18:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 13:45:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 14:03:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 14:06:27 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-11 14:07:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-11 14:07:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-11 14:07:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 14:17:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 14:20:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 14:36:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 14:36:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-11 14:37:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 15:25:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 15:42:03 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-11 15:42:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-11 15:42:08 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-11 15:53:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 15:59:13 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 15:59:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 16:00:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 16:09:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 16:09:24 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-11 16:10:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-11 16:10:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 16:20:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 16:21:26 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-11 16:27:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 16:28:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 16:28:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-11 16:28:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 16:37:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 16:37:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 16:37:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 16:37:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 16:39:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 16:43:03 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-11 16:43:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-11 16:43:09 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-11 16:43:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 16:45:19 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-11 16:45:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-11 16:45:29 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-11 16:47:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 17:00:32 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 17:00:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 17:03:08 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-11 17:10:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 17:16:33 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 17:16:33 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 17:18:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-11 17:18:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 17:19:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 17:35:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 17:35:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 17:36:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 17:36:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 17:50:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 17:54:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-11 17:54:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 17:56:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 17:59:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 17:59:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:02:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-02-11 18:04:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:05:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-11 18:05:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:06:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:07:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-11 18:07:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:07:59 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-11 18:12:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:14:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:15:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:15:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-11 18:15:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:28:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 18:28:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 18:36:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 18:36:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 18:37:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 18:37:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 18:42:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:43:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 18:43:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:43:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:44:30 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 18:44:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:44:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-11 18:44:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:44:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:46:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-11 18:46:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:50:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:50:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 18:55:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:00:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:05:00 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 19:05:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:05:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:06:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:07:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:09:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-11 19:09:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:09:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:14:40 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 19:14:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:18:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:18:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:20:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:26:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 19:26:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 19:26:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 19:26:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 19:27:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:29:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:29:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:30:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-11 19:30:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:32:45 --> Severity: Notice --> Undefined index: hengki_firmansyah /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-11 19:33:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:33:55 --> Severity: Notice --> Undefined index: wahyu_prasetya /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-11 19:34:10 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 19:34:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:36:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:42:05 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 19:42:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:43:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:47:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:49:23 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-11 19:54:32 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 19:54:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:55:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 19:56:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:01:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 20:01:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:02:12 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-11 20:03:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 20:03:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:04:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 20:04:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:05:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:05:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:06:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 20:06:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 20:07:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:12:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:16:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:18:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:20:14 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 20:20:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:21:06 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 20:21:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:21:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:27:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:29:09 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-11 20:29:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:29:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:30:14 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-11 20:31:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:33:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:33:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:37:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:38:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-11 20:38:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:41:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:46:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:50:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:50:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:51:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-11 20:51:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:56:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:56:41 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-11 20:57:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 20:57:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 21:03:56 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-11 21:14:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 21:17:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 21:19:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 21:22:17 --> 404 Page Not Found: Report/build
ERROR - 2020-02-11 21:29:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 21:33:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 21:35:54 --> 404 Page Not Found: Closing/build
ERROR - 2020-02-11 21:36:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-11 21:36:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-11 21:36:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 21:54:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 22:20:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-11 22:20:51 --> 404 Page Not Found: Spj/build
