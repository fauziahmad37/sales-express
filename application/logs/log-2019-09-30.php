<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-30 00:01:17 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-30 00:01:24 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 260
ERROR - 2019-09-30 00:01:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 00:01:30 --> Query error: ERROR:  integer out of range - Invalid query: select a.id, b.name as pool_name, a.no_pintu, a.no_polisi, a.merek, a.tipe, a.tahun, a.status, a.date_expired_stnk, a.date_expired_keur, a.date_expired_stnk, 
								a.date_expired_tera, a.date_expired_kiukio, a.no_rangka, a.no_mesin	,a.no_stnk, a.no_tera, a.no_keur, a.no_kiukio
								from master_car a
			left join master_pool b on(a.id_pool=b.id) 
			where extract (epoch from (a.date_expired_keur - now()))::integer/(60*60*24) < 0 
			order by a.create_dt desc
ERROR - 2019-09-30 00:01:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 00:01:34 --> Query error: ERROR:  integer out of range - Invalid query: select a.id, b.name as pool_name, a.no_pintu, a.no_polisi, a.merek, a.tipe, a.tahun, a.status, a.date_expired_stnk, a.date_expired_keur, a.date_expired_stnk, 
								a.date_expired_tera, a.date_expired_kiukio, a.no_rangka, a.no_mesin	,a.no_stnk, a.no_tera, a.no_keur, a.no_kiukio
								from master_car a
			left join master_pool b on(a.id_pool=b.id) 
			where extract (epoch from (a.date_expired_keur - now()))::integer/(60*60*24) < 0 
			order by a.create_dt desc
ERROR - 2019-09-30 00:01:38 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 260
ERROR - 2019-09-30 00:32:20 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 260
ERROR - 2019-09-30 00:32:32 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 260
ERROR - 2019-09-30 00:32:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 00:40:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 00:58:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 02:11:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 02:11:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 02:12:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 05:00:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 07:41:17 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 07:41:17 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 07:44:36 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-30 07:44:36 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-30 07:44:36 --> 404 Page Not Found: Report/build
ERROR - 2019-09-30 07:44:40 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-30 07:44:42 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-30 07:44:42 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-30 07:45:21 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-30 08:05:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 08:06:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 08:09:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 08:18:40 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-30 08:31:18 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-30 08:39:17 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-30 08:40:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 08:53:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 09:01:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 09:14:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 09:15:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 09:18:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 09:25:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 09:26:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 09:37:08 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-30 09:37:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 09:38:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 09:38:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 09:49:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 09:51:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 09:53:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 09:54:17 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 09:54:17 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 09:54:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 09:56:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 09:57:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 10:01:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 10:03:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 10:04:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 10:06:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 10:08:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 10:35:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 10:35:59 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-30 10:36:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 10:36:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-30 10:38:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 10:38:08 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2019-09-30 10:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-30 10:44:07 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-30 10:50:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 10:50:13 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2019-09-30 10:51:29 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-30 10:54:14 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 10:54:14 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 10:59:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 11:01:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 11:02:07 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-30 11:03:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 11:05:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 11:05:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 11:07:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 11:08:49 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-30 11:10:05 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 11:10:05 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 11:10:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 11:19:07 --> 404 Page Not Found: Report/build
ERROR - 2019-09-30 11:19:18 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-30 11:19:30 --> 404 Page Not Found: Report/build
ERROR - 2019-09-30 11:20:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 11:39:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 11:40:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 11:40:55 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-30 11:40:55 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-30 11:40:55 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-30 11:40:55 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-30 11:40:55 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-30 11:40:55 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-30 11:40:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 11:40:55 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-30 11:40:56 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-30 11:40:56 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-30 11:40:56 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-30 11:40:56 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-30 11:40:56 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-30 11:40:56 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-30 11:41:20 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-30 11:41:20 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-30 11:41:20 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-30 11:41:20 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-30 11:41:20 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-30 11:41:20 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-30 11:41:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 11:41:20 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-30 11:41:21 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-30 11:41:21 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-30 11:41:21 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-30 11:41:21 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-30 11:41:21 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-30 11:41:21 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-30 11:41:27 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-30 11:41:27 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-30 11:41:27 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-30 11:41:27 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-30 11:41:27 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-30 11:41:27 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-30 11:41:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 11:41:28 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-30 11:41:29 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-30 11:41:29 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-30 11:41:29 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-30 11:41:29 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-30 11:41:29 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-30 11:41:29 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-30 11:41:44 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-30 11:41:44 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-30 11:41:44 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-30 11:41:44 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-30 11:41:44 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-30 11:41:44 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-30 11:41:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 11:41:44 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-30 11:41:44 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-30 11:41:44 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-30 11:41:44 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-30 11:41:44 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-30 11:41:44 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-30 11:41:44 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-30 11:42:22 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-30 11:42:22 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-30 11:42:22 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-30 11:42:22 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-30 11:42:22 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-30 11:42:22 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-30 11:42:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 11:42:22 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-30 11:42:23 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-30 11:42:23 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-30 11:42:23 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-30 11:42:23 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-30 11:42:23 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-30 11:42:23 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-30 11:42:52 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-30 11:42:52 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-30 11:42:52 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-30 11:42:52 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-30 11:42:52 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-30 11:42:52 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-30 11:42:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 11:42:52 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-30 11:42:53 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-30 11:42:53 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-30 11:42:53 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-30 11:42:53 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-30 11:42:53 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-30 11:42:53 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-30 11:44:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 11:47:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 11:57:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 11:58:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 12:13:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 12:14:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 12:14:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 12:30:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 12:30:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 12:32:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 12:32:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 12:32:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 12:34:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 12:48:11 --> The upload destination folder does not appear to be writable.
ERROR - 2019-09-30 12:48:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 12:48:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 12:50:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 12:50:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 12:53:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 12:54:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 12:54:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 12:54:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 12:54:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 12:54:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 12:56:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 12:57:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 12:57:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 12:57:12 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 12:57:12 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 12:57:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 12:59:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 13:01:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 13:03:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 13:05:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 13:11:54 --> 404 Page Not Found: Report/build
ERROR - 2019-09-30 13:12:00 --> 404 Page Not Found: Report/build
ERROR - 2019-09-30 13:12:02 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-30 13:12:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 13:14:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 13:14:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 13:20:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 13:20:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 13:22:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 13:23:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 13:34:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 13:34:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 13:35:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 13:36:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 13:36:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 13:36:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 13:36:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 13:37:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 13:38:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 13:38:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 13:40:13 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-30 13:43:48 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-30 13:45:15 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-30 13:45:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 13:45:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 13:46:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 13:57:42 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-30 13:58:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 13:58:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 13:59:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:01:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:01:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 14:02:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:02:32 --> The upload destination folder does not appear to be writable.
ERROR - 2019-09-30 14:02:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:02:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:03:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 14:03:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:03:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 14:03:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:03:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:03:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:03:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:03:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:05:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:05:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 14:05:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:05:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:05:53 --> Severity: Notice --> Undefined index: faizal /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-30 14:06:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:06:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:06:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:06:22 --> Severity: Notice --> Undefined index: sholehuddin /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-30 14:07:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 14:07:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:07:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:07:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:08:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:08:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:09:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:10:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:10:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:10:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:10:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:11:17 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 14:11:17 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 14:11:38 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-30 14:11:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:12:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 14:12:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:12:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:12:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:13:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:14:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:14:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:14:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:14:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:14:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:15:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:15:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:15:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 14:15:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:16:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 14:16:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 14:16:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:16:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:17:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:17:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 14:18:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:18:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:18:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:18:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 14:18:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:19:39 --> The upload destination folder does not appear to be writable.
ERROR - 2019-09-30 14:19:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;master_ktp_un&quot;
DETAIL:  Key (ktp_number)=(3209252102650003) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 14:19:39 --> Query error: ERROR:  duplicate key value violates unique constraint "master_ktp_un"
DETAIL:  Key (ktp_number)=(3209252102650003) already exists. - Invalid query: INSERT INTO "master_ktp" ("name", "created_by", "ktp_number", "location", "type", "address", "path_photo") VALUES ('MISKA', '17', '3209252102650003', 'Luar Jakarta', 'KTP Seumur Hidup', 'DUSUN 2 RT 004/002,GUJUG,PANGURAGAN,CIREBON,JABAR', '/uploads/ktp/KTP_32092521026500031.jpg')
ERROR - 2019-09-30 14:19:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 14:19:39 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-30 14:20:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:21:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:21:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:24:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:26:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:27:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:27:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 14:27:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:27:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:28:06 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-30 14:29:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 14:31:53 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 14:31:53 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 14:32:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:32:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 14:32:33 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, 
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-30 14:32:33 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-09-30 14:33:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:33:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:33:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:34:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:34:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:35:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 14:35:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:35:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:36:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:36:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:37:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:37:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:37:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:37:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:37:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:37:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:37:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:37:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 14:37:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 14:37:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:38:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:38:13 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-30 14:38:13 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-30 14:38:13 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-30 14:38:13 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-30 14:38:13 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-30 14:38:13 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-30 14:38:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 14:38:13 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-30 14:38:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 14:38:15 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, 
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-30 14:38:15 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-09-30 14:39:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:39:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:39:50 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 14:39:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:39:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:41:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:41:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:41:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:41:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:42:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:42:30 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 14:43:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:43:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:44:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:44:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 14:44:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:45:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:46:50 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 197
ERROR - 2019-09-30 14:46:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 14:46:55 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, 
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-30 14:46:56 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-09-30 14:47:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:47:05 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 197
ERROR - 2019-09-30 14:47:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 14:48:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:49:11 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 14:49:11 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 14:49:54 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-30 14:50:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:51:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:51:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:52:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 14:56:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 14:57:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:02:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 15:02:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 15:06:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:07:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 15:07:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:07:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 15:07:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:08:43 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-30 15:09:47 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-30 15:12:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:13:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:13:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:14:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:16:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:22:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:25:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:29:03 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 15:29:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 15:29:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 15:31:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:34:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:37:18 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 571
ERROR - 2019-09-30 15:37:18 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 571
ERROR - 2019-09-30 15:37:18 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 571
ERROR - 2019-09-30 15:37:18 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 571
ERROR - 2019-09-30 15:37:18 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 572
ERROR - 2019-09-30 15:37:18 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 573
ERROR - 2019-09-30 15:37:18 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 584
ERROR - 2019-09-30 15:37:18 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 584
ERROR - 2019-09-30 15:37:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 10:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 15:37:18 --> Query error: ERROR:  syntax error at or near "and"
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
ERROR - 2019-09-30 15:37:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:37:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:37:53 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 571
ERROR - 2019-09-30 15:37:53 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 571
ERROR - 2019-09-30 15:37:53 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 571
ERROR - 2019-09-30 15:37:53 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 571
ERROR - 2019-09-30 15:37:53 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 572
ERROR - 2019-09-30 15:37:53 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 573
ERROR - 2019-09-30 15:37:53 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 584
ERROR - 2019-09-30 15:37:53 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 584
ERROR - 2019-09-30 15:37:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 10:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 15:37:53 --> Query error: ERROR:  syntax error at or near "and"
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
ERROR - 2019-09-30 15:39:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:39:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:40:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:40:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:41:47 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-30 15:43:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 15:43:17 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 15:43:17 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 15:43:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 15:43:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:43:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:44:10 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 15:44:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:48:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:48:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:49:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:49:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 15:49:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:49:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:49:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:50:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:50:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:51:06 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-30 15:56:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:56:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:57:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:58:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 15:58:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:58:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:58:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:59:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 15:59:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 15:59:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:00:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:00:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:00:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:02:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:02:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-30 16:03:40 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-30 16:03:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:05:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 16:05:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:05:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:06:37 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-30 16:06:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 16:06:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:06:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:08:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 16:08:36 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-30 16:08:36 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-30 16:08:36 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-30 16:08:36 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-30 16:08:36 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-30 16:08:36 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-30 16:08:36 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-30 16:08:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 16:08:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-30 16:09:21 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 16:09:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:09:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:10:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:10:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 16:10:20 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-30 16:12:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 16:13:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:14:53 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-30 16:15:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 16:15:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:16:02 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-30 16:16:02 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-30 16:16:02 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-30 16:16:02 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-30 16:16:02 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-30 16:16:02 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-30 16:16:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 16:16:02 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-30 16:17:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:18:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 16:18:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:20:09 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-30 16:20:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:20:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:20:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:20:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 16:20:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:21:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:22:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 16:22:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:22:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 16:22:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 16:22:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:23:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:24:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 16:24:15 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-09-30 16:24:15', 'TTS-TIARA/PB/20190930/795', '0', '', '0', '0', '0', '0', '0', 0, 0, '', '', '', 'Paid', '0', '26', NULL, '1')
ERROR - 2019-09-30 16:24:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 16:24:15 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-30 16:24:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 16:24:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 16:24:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 16:24:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:24:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:24:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:25:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 16:25:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:25:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:26:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:27:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 16:27:12 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 16:27:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:29:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:30:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:30:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 16:30:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:31:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:32:24 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-09-30 16:32:24 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-09-30 16:32:24 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-09-30 16:32:24 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-09-30 16:32:24 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-09-30 16:32:24 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-09-30 16:32:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 16:32:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-30 16:34:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:35:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 16:35:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:37:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:37:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:38:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:39:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:40:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 16:40:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 16:40:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 16:40:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 16:41:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:42:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 16:43:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:43:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:43:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:44:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:44:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:44:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 16:45:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:45:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:45:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:46:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 16:49:08 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 16:49:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 16:49:12 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 16:50:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 16:50:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:51:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 16:52:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:52:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:53:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:54:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 16:54:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 16:55:34 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 571
ERROR - 2019-09-30 16:55:34 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 571
ERROR - 2019-09-30 16:55:34 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 571
ERROR - 2019-09-30 16:55:34 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 571
ERROR - 2019-09-30 16:55:34 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 572
ERROR - 2019-09-30 16:55:34 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 573
ERROR - 2019-09-30 16:55:34 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 584
ERROR - 2019-09-30 16:55:34 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 584
ERROR - 2019-09-30 16:55:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 10:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-30 16:55:34 --> Query error: ERROR:  syntax error at or near "and"
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
ERROR - 2019-09-30 16:56:30 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-30 16:58:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-30 16:58:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 17:02:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 17:04:44 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 35
ERROR - 2019-09-30 17:04:44 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 50
ERROR - 2019-09-30 17:04:44 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 62
ERROR - 2019-09-30 17:04:44 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 74
ERROR - 2019-09-30 17:04:44 --> Severity: Notice --> Undefined index: id_car /var/www/html/rental/application/controllers/Vehicle.php 125
ERROR - 2019-09-30 17:04:44 --> Severity: Notice --> Undefined index: id_pool /var/www/html/rental/application/controllers/Vehicle.php 126
ERROR - 2019-09-30 17:04:44 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 127
ERROR - 2019-09-30 17:04:44 --> Severity: Notice --> Undefined index: no_polisi /var/www/html/rental/application/controllers/Vehicle.php 128
ERROR - 2019-09-30 17:04:44 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/controllers/Vehicle.php 129
ERROR - 2019-09-30 17:04:44 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/controllers/Vehicle.php 130
ERROR - 2019-09-30 17:04:44 --> Severity: Notice --> Undefined index: tahun /var/www/html/rental/application/controllers/Vehicle.php 131
ERROR - 2019-09-30 17:04:44 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-09-30 17:05:21 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 35
ERROR - 2019-09-30 17:05:21 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 50
ERROR - 2019-09-30 17:05:21 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 62
ERROR - 2019-09-30 17:05:21 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 74
ERROR - 2019-09-30 17:05:21 --> Severity: Notice --> Undefined index: id_car /var/www/html/rental/application/controllers/Vehicle.php 125
ERROR - 2019-09-30 17:05:21 --> Severity: Notice --> Undefined index: id_pool /var/www/html/rental/application/controllers/Vehicle.php 126
ERROR - 2019-09-30 17:05:21 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 127
ERROR - 2019-09-30 17:05:21 --> Severity: Notice --> Undefined index: no_polisi /var/www/html/rental/application/controllers/Vehicle.php 128
ERROR - 2019-09-30 17:05:21 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/controllers/Vehicle.php 129
ERROR - 2019-09-30 17:05:21 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/controllers/Vehicle.php 130
ERROR - 2019-09-30 17:05:21 --> Severity: Notice --> Undefined index: tahun /var/www/html/rental/application/controllers/Vehicle.php 131
ERROR - 2019-09-30 17:05:21 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-09-30 17:07:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 17:08:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 17:08:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 17:13:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 17:13:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 17:14:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 17:14:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 17:14:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 17:14:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 17:14:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 17:23:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 17:43:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 18:03:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 18:04:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 18:06:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 18:07:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 18:28:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 18:28:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 18:28:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 18:49:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-30 19:15:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 19:15:55 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-30 19:16:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 19:16:53 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-30 19:16:53 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-30 19:16:53 --> 404 Page Not Found: Report/build
ERROR - 2019-09-30 19:17:09 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-30 19:17:11 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-30 19:17:11 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-30 19:17:12 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-30 19:17:12 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-09-30 19:17:12 --> 404 Page Not Found: Report/build
ERROR - 2019-09-30 19:17:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 19:17:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 19:58:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 19:58:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 19:59:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 19:59:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 20:01:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 20:01:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 22:02:45 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-30 22:24:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 22:24:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 22:24:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-30 22:24:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-30 22:24:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-30 22:24:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-30 23:20:50 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-30 23:20:53 --> 404 Page Not Found: Spj/build
