<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-04 00:46:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 04:40:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 05:10:37 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 05:10:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 05:10:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 05:11:37 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 05:11:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 05:12:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 05:12:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 05:13:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 05:15:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 05:16:27 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 05:16:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 05:33:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 05:45:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 05:45:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 05:48:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 05:53:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 05:53:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 05:53:37 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 05:53:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 05:54:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 06:32:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 06:32:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 06:32:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 06:33:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 06:58:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 06:58:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 07:32:13 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 07:32:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-04 07:32:29 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-04 07:32:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-04 07:32:40 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-04 07:32:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-04 07:32:40 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-02-04 07:48:06 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 07:48:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 07:52:22 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 07:52:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 07:58:16 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 08:00:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 08:10:53 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 08:10:53 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 08:11:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 08:41:03 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 08:46:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 08:46:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 08:46:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 08:58:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 08:58:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 08:59:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 09:24:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 09:24:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 09:30:37 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 09:52:42 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-04 09:57:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 09:58:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 09:59:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 10:00:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 10:00:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 10:00:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 10:01:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 10:05:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 10:09:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 10:16:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 10:17:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 10:17:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 10:24:10 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 10:24:14 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 10:33:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 10:35:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 10:41:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-02-04 10:42:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 10:43:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 10:43:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 10:58:00 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-04 10:59:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 11:00:12 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-04 11:01:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-04 11:01:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 11:47:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 11:51:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 11:51:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-04 11:51:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 11:52:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 11:52:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 11:57:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 12:02:44 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 12:02:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 12:03:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 12:03:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 12:03:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 12:04:52 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-04 12:10:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 12:10:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 12:10:54 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 12:10:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 12:11:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 12:12:44 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 12:12:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 12:16:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 12:16:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 12:21:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 12:30:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 12:31:19 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 12:31:29 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 12:31:31 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 12:31:37 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 12:31:54 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 12:32:10 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 12:32:18 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 12:32:19 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 12:48:50 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 12:48:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 12:51:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 12:53:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 12:54:28 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 12:54:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 12:55:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 12:55:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-04 12:55:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 13:11:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 13:11:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 13:11:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 13:24:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 13:24:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 13:32:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-04 13:32:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 13:33:44 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-04 13:34:20 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-04 13:37:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 13:43:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 13:47:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 13:47:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 14:01:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 14:02:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 14:02:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-04 14:02:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 14:04:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 14:13:18 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 14:13:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 14:16:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 14:26:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 14:26:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 14:27:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 14:27:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-04 14:27:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 14:29:34 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 14:29:38 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 14:32:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-04 14:32:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 14:37:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 14:37:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 14:37:50 --> The upload destination folder does not appear to be writable.
ERROR - 2020-02-04 14:37:53 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 14:38:03 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:40:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 14:40:05 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:40:09 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:40:36 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:40:57 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:40:59 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:41:00 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:41:04 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 14:41:12 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 14:41:14 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 14:41:21 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:41:33 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:42:37 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:42:39 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:43:35 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:44:05 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:44:18 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:45:52 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:45:54 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:46:30 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:46:32 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:46:40 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 14:49:50 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:49:52 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:50:26 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 14:52:19 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:52:20 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:52:21 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:55:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 14:55:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 14:55:40 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:56:34 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 14:56:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-04 14:56:45 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2020-02-04 14:56:46 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:56:56 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:56:57 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:57:04 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 218
ERROR - 2020-02-04 14:57:27 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 14:57:43 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 15:03:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 15:05:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 15:16:37 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-04 15:16:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 15:16:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 15:27:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 15:27:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 15:27:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 15:27:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 15:34:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 15:40:12 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 15:40:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 15:41:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 15:44:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 15:44:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 15:48:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 15:57:03 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 15:57:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 15:57:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 16:05:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 16:05:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 16:20:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 16:29:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 16:29:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 16:31:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 16:32:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 16:32:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 16:34:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 16:35:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 16:38:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-04 16:38:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 16:46:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 16:50:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 16:51:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 16:52:13 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 16:52:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 17:00:26 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-04 17:01:07 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 17:01:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 17:06:27 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 17:06:27 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 17:15:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-04 17:15:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 17:15:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 17:19:21 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-04 17:19:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 17:21:30 --> Severity: Notice --> Undefined index: deddy /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-04 17:25:57 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 17:25:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 17:30:07 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-02-04 17:30:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 17:37:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 17:37:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 17:39:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 17:39:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 17:40:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 17:40:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 17:41:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-04 17:41:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 17:42:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-04 17:42:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 17:46:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 17:57:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 18:00:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-04 18:00:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 18:02:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 18:02:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 18:02:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 18:06:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 18:07:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-04 18:07:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 18:08:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 18:16:56 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 18:16:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 18:29:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 18:32:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 18:33:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 18:34:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 18:34:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 18:34:48 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 18:34:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 18:37:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 18:41:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 18:47:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 18:49:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 18:50:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-04 18:50:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 18:53:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 18:53:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 18:57:21 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-04 19:04:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 19:05:48 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-04 19:06:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 19:06:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-04 19:06:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 19:06:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 19:07:45 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 19:07:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 19:10:42 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-04 19:11:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 19:11:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 19:17:26 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-04 19:21:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 19:22:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 19:22:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 19:24:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 19:27:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 19:38:59 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 19:39:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 19:39:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 19:41:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 19:43:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 19:46:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 19:48:01 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 19:48:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 19:54:18 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 19:54:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 19:56:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 19:56:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 20:00:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 20:09:33 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 20:09:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 20:11:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 20:23:46 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 20:23:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 20:32:41 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-04 20:32:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 20:35:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 20:36:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 20:37:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 20:38:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 20:38:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 20:49:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 20:58:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 20:59:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 20:59:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 21:03:16 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-04 21:05:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 21:16:27 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-04 21:16:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 21:24:08 --> 404 Page Not Found: Closing/build
ERROR - 2020-02-04 21:26:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 21:33:27 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 21:33:27 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 21:41:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-04 21:41:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-04 22:14:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 22:22:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 22:36:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 22:56:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-04 23:17:47 --> 404 Page Not Found: Spj/build
