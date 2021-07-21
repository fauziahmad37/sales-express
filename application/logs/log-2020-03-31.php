<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-31 05:01:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 05:01:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 05:02:46 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 05:02:46 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 05:24:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-31 05:24:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 05:25:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 05:25:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 05:26:00 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-31 05:26:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 05:26:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 08:08:26 --> 404 Page Not Found: Report/build
ERROR - 2020-03-31 08:12:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 08:12:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 08:53:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 09:50:56 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-03-31 09:52:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 10:56:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 10:56:51 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-03-31 10:56:51 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-03-31 10:56:57 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-31 10:57:02 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-03-31 10:57:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 10:57:02 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-03-31 10:57:10 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-31 10:57:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 10:57:43 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-31 10:57:43 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-31 10:57:43 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-31 10:57:45 --> 404 Page Not Found: Uploads/ktp
ERROR - 2020-03-31 10:57:45 --> 404 Page Not Found: Uploads/rekening
ERROR - 2020-03-31 10:59:04 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-03-31 11:00:51 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-03-31 11:00:59 --> 404 Page Not Found: Uploads/rekening
ERROR - 2020-03-31 11:01:19 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-03-31 11:01:33 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-03-31 11:01:47 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-03-31 11:01:53 --> 404 Page Not Found: Uploads/rekening
ERROR - 2020-03-31 11:01:54 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-03-31 11:01:57 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-03-31 11:02:14 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-31 11:02:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 11:02:32 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-03-31 11:49:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 12:00:10 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-31 12:00:24 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-31 12:00:25 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-31 12:00:39 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-03-31 12:01:52 --> 404 Page Not Found: Uploads/ktp
ERROR - 2020-03-31 12:01:52 --> 404 Page Not Found: Uploads/rekening
ERROR - 2020-03-31 12:02:23 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-03-31 12:03:00 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-03-31 12:05:34 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-03-31 12:06:16 --> 404 Page Not Found: Uploads/rekening
ERROR - 2020-03-31 12:06:21 --> 404 Page Not Found: Uploads/rekening
ERROR - 2020-03-31 12:06:51 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-03-31 12:07:24 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-03-31 12:07:47 --> 404 Page Not Found: Uploads/rekening
ERROR - 2020-03-31 12:07:47 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-03-31 12:29:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-03-31 12:30:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 12:35:39 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-31 12:35:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 12:36:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 12:37:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-31 12:37:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 12:59:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 12:59:32 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-31 13:44:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 13:44:39 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-31 13:44:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 13:44:53 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-03-31 13:47:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 14:00:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 14:00:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 14:10:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 14:11:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 14:12:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 14:13:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 14:14:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 14:14:06 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-03-31 14:15:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 14:15:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 15:33:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 15:33:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 15:48:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 15:49:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 15:49:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 16:08:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 16:08:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 16:08:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 16:50:12 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 16:50:12 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 17:31:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 17:31:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 17:32:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 17:33:37 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-31 17:33:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-03-31 17:33:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 17:46:57 --> Severity: Notice --> Undefined index: choiruman /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-03-31 17:49:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 17:49:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 18:06:14 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 18:06:14 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 18:11:47 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-31 18:12:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 18:12:29 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-03-31 18:15:06 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 18:15:06 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 18:16:28 --> 404 Page Not Found: Driver/build
ERROR - 2020-03-31 18:16:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 18:16:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 18:16:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-31 18:16:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 18:18:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 18:22:13 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-03-31 18:23:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 18:23:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 18:25:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 18:25:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 18:26:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 18:26:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 18:27:53 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-03-31 18:28:08 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 18:28:08 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 18:29:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 18:29:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 18:29:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 18:30:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 18:30:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 18:33:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 18:43:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 18:56:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 19:04:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-31 19:04:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 19:10:05 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-03-31 19:10:05 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-03-31 19:40:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-03-31 19:40:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-03-31 21:15:32 --> 404 Page Not Found: Seragam/build
ERROR - 2020-03-31 21:50:52 --> 404 Page Not Found: Closing/build
