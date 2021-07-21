<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-10 01:55:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 04:31:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:05:36 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 05:05:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:06:28 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 05:06:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:07:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 05:07:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:08:17 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 05:08:17 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 05:08:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:08:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:09:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 05:09:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 05:09:33 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 05:09:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:10:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 05:10:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 05:10:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:11:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:11:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 05:11:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 05:12:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:12:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:13:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:15:07 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 05:15:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:16:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:16:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:16:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:18:07 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-10 05:18:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 05:18:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:20:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 05:53:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 05:53:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 06:11:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 06:23:34 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-10 06:23:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-10 06:23:51 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-10 06:26:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-10 06:26:27 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-10 06:26:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-10 06:26:47 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-10 06:29:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-10 06:29:29 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-10 06:42:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 06:45:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 06:45:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 06:57:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 06:57:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 08:18:35 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-10 08:18:50 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-02-10 08:18:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-10 08:18:50 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-10 08:19:11 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-02-10 08:19:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-10 08:19:11 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-10 08:19:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-10 08:19:27 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-10 08:31:50 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 08:31:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 08:51:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 08:51:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 08:51:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 08:51:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:00:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:01:34 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-10 09:02:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:02:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:02:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:02:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:03:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:05:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:06:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:08:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-10 09:08:07 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-02-10 09:08:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:08:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:09:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:13:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:13:30 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-10 09:14:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:15:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 09:15:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:16:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:17:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:18:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:20:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:21:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 09:21:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:22:21 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 09:22:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:25:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:27:19 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 09:27:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:27:52 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 09:27:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:28:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:31:21 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-10 09:31:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-10 09:31:32 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-10 09:33:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:33:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 09:33:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:37:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:43:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:48:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 09:50:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 10:01:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 10:01:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 10:05:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 10:07:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 10:13:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 10:14:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 10:14:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 10:14:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 10:16:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 10:16:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 10:16:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 10:17:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 10:19:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 10:19:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 10:19:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 10:21:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 10:21:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 10:22:24 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-10 10:25:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 10:25:06 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 10:25:06 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 10:26:23 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 10:26:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 10:32:49 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 10:32:49 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 10:37:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 10:37:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 10:44:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 10:44:27 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 10:44:27 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 10:53:49 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 10:53:49 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 10:54:34 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-10 10:55:06 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 10:55:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 10:58:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-02-10 11:05:27 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-10 11:06:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 11:25:40 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-10 11:27:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 11:33:01 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 11:33:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 11:35:37 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-10 11:42:28 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 11:42:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 11:44:30 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-10 11:44:46 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 11:44:46 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 11:45:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 11:45:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 11:46:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 11:46:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 11:46:29 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-10 11:46:38 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-02-10 11:46:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-10 11:46:38 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-10 11:56:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 11:57:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 11:57:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 12:01:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 12:01:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 12:04:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 12:04:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 12:08:16 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-10 12:09:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 12:25:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 12:25:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 12:26:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 12:26:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 12:30:48 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 12:30:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 12:31:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 12:33:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 12:33:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 12:34:54 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 12:34:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 12:40:10 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 12:40:10 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 12:40:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 12:46:26 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-10 12:49:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 12:49:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 12:51:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 12:51:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 12:59:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-02-10 12:59:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-02-10 13:05:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 13:16:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 13:16:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 13:32:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 13:38:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 13:38:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 13:39:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 13:39:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 13:51:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 13:51:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 14:14:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 14:14:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 14:14:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 14:15:27 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-10 14:16:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-10 14:16:22 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-10 14:17:51 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-10 14:18:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 14:20:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 14:22:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 14:22:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 14:24:06 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 14:24:06 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 14:24:25 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-10 14:24:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 14:24:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 14:25:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 14:25:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 14:26:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 14:42:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 14:42:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 14:44:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 14:44:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 14:45:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2020-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-10 14:45:23 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2020-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2020-02-10 14:45:23', 'TTS-TIARA/BCG/20200210/8390', '0', '', '0', '0', '0', '0', '0', 0, 0, '', '', '', 'Paid', '0', '43', NULL, '5')
ERROR - 2020-02-10 14:45:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-10 14:45:23 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-02-10 14:45:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 14:46:21 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 14:46:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 14:49:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 14:49:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 15:19:09 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 15:19:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 15:22:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 15:22:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 15:23:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 15:23:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 15:23:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 15:24:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 15:27:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 15:28:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 15:28:59 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 15:29:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 15:39:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 15:40:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 15:40:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 16:13:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 16:13:21 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 16:13:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 16:24:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 16:24:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 16:26:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 16:26:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 16:31:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 16:31:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 16:32:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 16:32:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 16:34:34 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 16:34:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 16:36:39 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 16:36:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 16:37:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 16:37:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 16:44:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 16:44:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 16:49:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 16:50:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 16:50:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 16:57:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 17:16:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 17:24:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 17:25:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 17:25:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 17:31:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 17:32:43 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 17:32:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 17:37:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 17:37:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 17:37:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 17:38:00 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-10 17:39:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 17:39:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 17:39:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 17:50:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 17:53:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 17:53:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 17:55:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 18:10:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 18:11:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 18:12:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 18:13:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 18:13:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 18:14:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 18:14:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 18:15:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 18:16:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 18:17:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 18:18:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 18:18:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 18:25:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 18:28:40 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 18:28:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 18:35:50 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 18:35:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 18:36:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 18:38:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 18:38:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 18:39:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 18:39:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 18:40:05 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 18:40:05 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 18:49:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:00:34 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 19:00:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:03:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:05:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:06:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:07:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:07:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 19:07:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:08:22 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-10 19:09:28 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 19:09:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:10:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:11:29 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-10 19:11:38 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-10 19:13:15 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-10 19:14:34 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 19:14:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:16:53 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 19:16:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:17:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:18:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:20:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:21:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 19:21:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:22:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:23:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:24:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-10 19:24:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:28:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:36:37 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 19:36:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:42:46 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 19:42:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:44:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:46:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:51:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 19:54:28 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-02-10 19:55:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-02-10 19:55:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-02-10 20:02:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 20:05:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 20:05:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 20:09:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 20:13:22 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 20:13:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 20:16:10 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 20:16:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 20:21:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 20:29:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 20:30:32 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-10 20:30:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 20:44:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 20:46:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 20:49:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 20:59:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 21:02:09 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-10 21:22:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 21:25:56 --> 404 Page Not Found: Closing/build
ERROR - 2020-02-10 21:26:25 --> 404 Page Not Found: Closing/build
ERROR - 2020-02-10 21:29:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 21:29:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-10 22:37:15 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-10 22:37:22 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-10 22:37:24 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-10 22:37:35 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-02-10 22:44:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-10 23:12:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-10 23:12:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
