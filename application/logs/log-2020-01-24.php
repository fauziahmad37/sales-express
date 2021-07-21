<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-24 00:03:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 00:57:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 01:00:13 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 01:00:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-24 01:09:31 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 01:10:22 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 01:10:23 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 01:10:33 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 01:11:32 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 01:11:32 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 01:12:11 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 01:12:24 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 01:12:45 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 01:12:45 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 01:14:31 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 01:16:04 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 01:17:54 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 01:20:40 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 01:23:11 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 01:23:12 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 01:23:12 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 01:23:44 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 01:23:59 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 01:24:15 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 01:25:58 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 01:29:38 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 01:34:20 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 01:36:12 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 01:38:38 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 01:39:50 --> 404 Page Not Found: Report/build
ERROR - 2020-01-24 01:40:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 01:40:11 --> 404 Page Not Found: Report/build
ERROR - 2020-01-24 01:43:15 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 01:44:08 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 01:44:33 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 01:47:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 05:04:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 05:04:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 05:04:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 05:04:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 05:04:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 05:04:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 05:05:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 05:05:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 05:06:36 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 05:06:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 05:08:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 05:10:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 05:10:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 05:17:06 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 05:17:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 05:17:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 05:18:34 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 05:18:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 05:18:41 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 05:19:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 05:19:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 05:19:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 06:11:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 06:11:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 06:13:36 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 06:13:55 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 06:13:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 06:31:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 06:35:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 06:35:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 06:36:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 06:39:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 06:40:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 06:40:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 06:41:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 06:41:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 06:41:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 06:41:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 06:42:41 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 06:42:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 06:45:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 06:56:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 06:56:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 06:57:02 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 06:57:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 06:57:10 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 06:57:23 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 07:00:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 07:01:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 07:01:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 07:10:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 07:11:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 07:12:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 07:12:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 07:13:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 07:13:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 07:13:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 07:13:57 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 07:13:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 07:28:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 07:56:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 08:05:01 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 08:06:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 08:15:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 08:15:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 08:17:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 08:33:22 --> 404 Page Not Found: Report/build
ERROR - 2020-01-24 08:37:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 08:38:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 08:40:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 08:41:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 08:52:37 --> Severity: Notice --> Undefined index: yuda_wardana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-24 08:52:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-24 08:53:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 08:53:36 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-24 08:53:50 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 08:54:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 08:54:00 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 08:54:10 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 08:54:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-24 08:54:31 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 08:54:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 08:54:39 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 08:54:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 08:54:50 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 08:55:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 08:55:01 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 08:55:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 08:55:10 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 08:55:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 08:55:28 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 08:55:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 08:55:39 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 08:55:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 08:55:54 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 08:56:04 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-24 08:56:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 08:56:04 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 08:57:41 --> 404 Page Not Found: Report/setoran
ERROR - 2020-01-24 08:57:48 --> 404 Page Not Found: Report/build
ERROR - 2020-01-24 08:57:51 --> 404 Page Not Found: Report/build
ERROR - 2020-01-24 08:58:05 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 08:58:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-24 08:59:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 08:59:08 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-24 08:59:24 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-24 08:59:29 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 09:00:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 09:01:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 09:02:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 09:02:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 09:03:02 --> 404 Page Not Found: Report/build
ERROR - 2020-01-24 09:03:09 --> 404 Page Not Found: Report/build
ERROR - 2020-01-24 09:03:24 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 09:03:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-24 09:04:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 09:04:31 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-24 09:05:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-24 09:05:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 09:08:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 09:10:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 09:11:33 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 09:11:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-24 09:11:51 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 09:11:53 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-24 09:11:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-24 09:11:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 09:11:57 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-24 09:11:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 09:11:59 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-24 09:12:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 09:12:01 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2020-01-24 09:12:01'
WHERE "id" = 'build'
ERROR - 2020-01-24 09:12:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 09:14:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-24 09:15:30 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 09:15:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-24 09:18:14 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 09:18:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 09:20:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 09:21:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 09:23:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 09:24:51 --> 404 Page Not Found: Report/build
ERROR - 2020-01-24 09:25:04 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 09:25:04 --> 404 Page Not Found: Report/build
ERROR - 2020-01-24 09:25:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 09:25:08 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 09:25:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 09:25:52 --> 404 Page Not Found: Report/build
ERROR - 2020-01-24 09:26:22 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 09:26:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 09:26:30 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 09:35:54 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 09:35:57 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 09:43:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 09:43:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 09:53:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 09:58:06 --> The upload destination folder does not appear to be writable.
ERROR - 2020-01-24 09:58:08 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:06:56 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:07:07 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:07:37 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:07:55 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:08:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 10:09:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 10:09:05 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:09:07 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:14:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 10:14:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 10:17:47 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:18:03 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:18:13 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:18:15 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:18:18 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:19:29 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:20:17 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:20:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 10:20:19 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:21:23 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:21:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 10:21:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 10:22:39 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:22:41 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:22:59 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:23:00 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:23:08 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:23:09 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:23:11 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 10:24:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-24 10:24:29 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:24:57 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:24:59 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:26:21 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 10:26:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 10:26:47 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-24 10:27:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 10:27:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 10:27:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 10:28:14 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:28:15 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:32:48 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:32:49 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:32:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 10:32:57 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:40:39 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:40:40 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:40:40 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:40:48 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:40:49 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:40:49 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:41:06 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:43:00 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:44:14 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:44:25 --> 404 Page Not Found: Report/build
ERROR - 2020-01-24 10:45:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 10:45:31 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:45:36 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:45:44 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:45:49 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:46:06 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:46:11 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:47:31 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:48:31 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:48:35 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:48:44 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:48:59 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:49:00 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:49:02 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:49:13 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:49:19 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:49:20 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:50:13 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:50:16 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:52:34 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:52:35 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:54:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 10:54:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 10:54:47 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:55:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 10:55:04 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 10:58:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 10:58:17 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:58:32 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:58:35 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 10:59:12 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 10:59:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 10:59:38 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 11:00:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 11:09:31 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 11:09:34 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 11:09:36 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 11:09:43 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 11:12:12 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 11:12:14 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 11:14:13 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 11:18:45 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 11:18:47 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 11:21:32 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 11:21:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 11:23:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 11:27:43 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 11:28:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 11:29:32 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 11:29:35 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 11:30:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 11:31:37 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 11:33:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 11:33:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 11:57:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 11:58:07 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 11:58:12 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 11:58:12 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 11:58:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 11:58:30 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 11:58:32 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 11:58:42 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 12:39:19 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 12:39:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 12:40:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 12:42:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 12:42:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 12:42:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 12:47:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 12:47:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 12:51:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 12:51:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 12:51:53 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 12:51:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 12:54:02 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 12:54:07 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 12:54:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 12:54:44 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 12:54:46 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 12:54:48 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 12:58:40 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 12:58:41 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 12:58:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 12:58:44 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 12:58:50 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 12:58:53 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 218
ERROR - 2020-01-24 12:59:15 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 12:59:15 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 12:59:17 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 12:59:19 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 12:59:33 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 12:59:35 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 12:59:56 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 13:00:09 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 13:00:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:00:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 13:00:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 13:06:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 13:06:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:07:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:09:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:10:30 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-24 13:11:36 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 13:11:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:12:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 13:12:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:16:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:17:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:17:55 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 13:17:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:20:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:21:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:22:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:25:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 13:25:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:25:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:26:33 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-24 13:27:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 13:27:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:34:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:35:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 13:35:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:37:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:56:08 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 13:56:15 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-24 13:56:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 13:56:15 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 13:56:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 13:57:36 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-24 13:57:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 13:57:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:05:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:12:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:15:25 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 14:15:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:16:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:24:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:31:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:33:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:34:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 14:34:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:34:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:35:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:36:55 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 14:36:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:37:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 14:37:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:37:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 14:37:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:37:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-24 14:38:00 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 14:38:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:40:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:40:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:41:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 14:41:38 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 14:57:56 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 14:57:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 15:00:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 15:05:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 15:16:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 15:17:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 15:17:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 15:21:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 15:39:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 15:42:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 15:43:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 15:43:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 15:44:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 15:44:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 15:47:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 16:09:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 16:10:25 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 16:10:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 16:11:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 16:12:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 16:12:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 16:13:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 16:14:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 16:15:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 16:21:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 16:21:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 16:22:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 16:23:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 16:33:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 16:50:06 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 16:50:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 16:52:18 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 16:52:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 16:52:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 16:53:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 16:53:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 16:53:33 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 16:53:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 16:53:43 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 16:53:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 16:56:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 16:57:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 16:57:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 16:58:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 16:58:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 17:02:10 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 17:02:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 17:04:39 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 17:04:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 17:04:45 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 17:04:49 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 17:05:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 17:05:21 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 17:05:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 17:05:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 17:06:07 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 17:06:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 17:06:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 17:21:42 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 17:21:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 17:21:50 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 17:23:01 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-24 17:23:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 17:23:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 17:23:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 17:33:20 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 17:33:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 17:33:31 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 17:33:31 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-24 17:34:34 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 17:34:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 17:34:44 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 17:35:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 17:36:55 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 17:36:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 17:39:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 17:40:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 17:41:01 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 17:41:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 17:41:17 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 17:43:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 17:43:33 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-24 17:43:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 17:44:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 18:08:59 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 18:09:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 18:09:08 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 18:09:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 18:09:25 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 18:12:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 18:19:44 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-24 18:21:09 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-24 18:23:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 18:27:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 18:27:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 18:30:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 18:30:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 18:31:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 18:31:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 18:32:20 --> Severity: Notice --> Undefined index: hengki_firmansyah /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-24 18:33:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 18:33:54 --> Severity: Notice --> Undefined index: wahyu_prasetya /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-24 18:36:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 18:49:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 18:51:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 18:56:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 18:59:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:02:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-24 19:03:00 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 19:03:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 19:03:06 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 19:05:06 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 19:05:44 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 19:06:05 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 19:11:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:13:50 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 19:13:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:15:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:16:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 19:16:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:17:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:19:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-24 19:19:41 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 19:19:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-24 19:19:52 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-24 19:20:53 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 19:21:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:21:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:22:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:23:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:28:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:34:13 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-24 19:34:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:36:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:36:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 19:36:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:37:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:38:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:41:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:46:46 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 19:46:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:49:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:51:43 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 19:51:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:53:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:53:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 19:53:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 19:54:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 19:55:00 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 19:58:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:02:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:02:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 20:02:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:03:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:06:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:11:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:12:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 20:12:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:17:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:18:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:26:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:27:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 20:27:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:28:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:30:27 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 20:30:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:31:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:31:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 20:31:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:31:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 20:31:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:33:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:33:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:35:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:43:52 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 20:43:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:45:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:46:33 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 20:46:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:48:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-24 20:48:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:48:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:52:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:55:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 20:56:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-24 20:56:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 21:07:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 21:15:18 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 21:18:37 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-24 21:45:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 22:10:44 --> 404 Page Not Found: Closing/build
ERROR - 2020-01-24 22:33:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-24 22:33:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-24 22:34:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-24 23:09:22 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-24 23:48:44 --> 404 Page Not Found: Spj/build
