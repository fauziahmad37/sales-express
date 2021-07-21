<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-06 05:04:17 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-06 05:04:17 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-06 05:08:00 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-04-06 05:08:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-06 05:08:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 05:10:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-06 05:10:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-06 05:10:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 06:00:43 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-06 06:00:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 08:37:16 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-04-06 08:37:46 --> 404 Page Not Found: Seragam/build
ERROR - 2020-04-06 08:38:47 --> 404 Page Not Found: Seragam/build
ERROR - 2020-04-06 09:13:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 09:32:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-06 09:32:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-06 09:34:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 09:34:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 09:35:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 10:28:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 10:35:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 10:37:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-04-06 10:37:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 10:41:52 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-06 10:42:50 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-06 10:44:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-06 10:44:38 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-06 10:56:36 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-06 11:07:13 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-06 11:11:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 11:22:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 11:23:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-06 11:23:11 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-04-06 11:23:26 --> 404 Page Not Found: Report/setoran
ERROR - 2020-04-06 12:06:57 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-06 12:44:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-06 12:44:35 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-06 12:44:37 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-06 12:45:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 12:52:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-06 12:52:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-06 13:01:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 13:17:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 13:20:23 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-06 14:31:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-06 14:31:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-06 15:53:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 16:17:48 --> 404 Page Not Found: Seragam/build
ERROR - 2020-04-06 16:22:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-04-06 16:23:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 16:24:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-06 16:24:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-06 17:23:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-06 17:23:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-06 17:24:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-06 17:24:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 17:25:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-06 17:25:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-06 17:27:01 --> 404 Page Not Found: Driver/build
ERROR - 2020-04-06 17:27:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-06 17:27:15 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-04-06 17:28:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-06 17:28:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-06 17:28:34 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-04-06 17:28:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-06 17:28:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-06 17:29:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 20:19:41 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-06 20:19:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 20:43:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-06 20:43:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-06 20:45:46 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-04-06 20:45:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 20:46:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-04-06 21:23:08 --> 404 Page Not Found: Closing/build
ERROR - 2020-04-06 21:23:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-04-06 21:23:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-04-06 22:27:08 --> 404 Page Not Found: Spj/build
