<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-10-03 01:35:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 01:41:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 05:51:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-03 05:51:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 05:52:12 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-10-03 05:52:12 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-10-03 05:52:12 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-10-03 05:52:12 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-10-03 05:52:12 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-10-03 05:52:12 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-10-03 05:52:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-03 05:52:12 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-03 06:45:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 06:52:13 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-03 06:52:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 06:52:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 07:37:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 07:43:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 07:43:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 07:45:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 07:47:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 07:48:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 07:53:48 --> Severity: Notice --> Undefined index: heru /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-10-03 07:59:36 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-03 08:00:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:03:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 08:04:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 08:04:35 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-10-03 08:04:35 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-10-03 08:04:35 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-10-03 08:04:35 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-10-03 08:04:35 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-10-03 08:04:35 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-10-03 08:04:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-03 08:04:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-03 08:04:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 08:05:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 08:07:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:08:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-03 08:08:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-03 08:08:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:08:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 08:08:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:09:11 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-03 08:09:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:10:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 08:10:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:12:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:13:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:16:36 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-03 08:16:36 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-03 08:16:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 08:16:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 08:17:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:20:12 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-03 08:22:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:25:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 08:28:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 08:42:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:43:02 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-10-03 08:43:02 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-10-03 08:43:02 --> 404 Page Not Found: Report/build
ERROR - 2019-10-03 08:45:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:46:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:50:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:53:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:53:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-03 08:53:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-03 08:53:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:54:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:54:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 08:57:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 09:05:48 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-10-03 09:05:48 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-10-03 09:05:48 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-10-03 09:05:48 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-10-03 09:05:48 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-10-03 09:05:48 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-10-03 09:05:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-03 09:05:48 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-03 09:08:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 09:08:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 09:47:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 10:08:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 10:10:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 10:20:31 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-03 10:23:24 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-03 10:23:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 10:26:11 --> The upload destination folder does not appear to be writable.
ERROR - 2019-10-03 10:26:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 10:31:11 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-03 10:31:11 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-03 10:35:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 10:35:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 10:36:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-03 10:44:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 10:45:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 10:55:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 10:56:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-03 10:56:05 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-03 10:56:05 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-03 10:58:24 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 197
ERROR - 2019-10-03 10:59:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 11:06:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 11:21:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 11:22:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 11:32:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 11:35:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 11:37:00 --> 404 Page Not Found: Report/setoran
ERROR - 2019-10-03 11:37:06 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-10-03 11:37:06 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-10-03 11:37:06 --> 404 Page Not Found: Report/build
ERROR - 2019-10-03 11:37:29 --> 404 Page Not Found: Report/setoran
ERROR - 2019-10-03 11:37:31 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-10-03 11:37:31 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 34
ERROR - 2019-10-03 11:37:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 11:48:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-03 11:48:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-03 11:53:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-03 11:53:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-03 11:53:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-03 11:54:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-03 11:56:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 11:58:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 12:15:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-03 12:15:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-03 12:16:21 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 35
ERROR - 2019-10-03 12:16:21 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 50
ERROR - 2019-10-03 12:16:21 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 62
ERROR - 2019-10-03 12:16:21 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 74
ERROR - 2019-10-03 12:16:21 --> Severity: Notice --> Undefined index: id_car /var/www/html/rental/application/controllers/Vehicle.php 125
ERROR - 2019-10-03 12:16:21 --> Severity: Notice --> Undefined index: id_pool /var/www/html/rental/application/controllers/Vehicle.php 126
ERROR - 2019-10-03 12:16:21 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 127
ERROR - 2019-10-03 12:16:21 --> Severity: Notice --> Undefined index: no_polisi /var/www/html/rental/application/controllers/Vehicle.php 128
ERROR - 2019-10-03 12:16:21 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/controllers/Vehicle.php 129
ERROR - 2019-10-03 12:16:21 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/controllers/Vehicle.php 130
ERROR - 2019-10-03 12:16:21 --> Severity: Notice --> Undefined index: tahun /var/www/html/rental/application/controllers/Vehicle.php 131
ERROR - 2019-10-03 12:16:21 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-10-03 12:18:35 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-03 12:19:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-03 12:19:54 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-03 12:21:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-03 12:21:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-03 12:21:43 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-03 12:21:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-03 12:21:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-03 12:23:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 12:26:12 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 35
ERROR - 2019-10-03 12:26:12 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 50
ERROR - 2019-10-03 12:26:12 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 62
ERROR - 2019-10-03 12:26:12 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 74
ERROR - 2019-10-03 12:26:12 --> Severity: Notice --> Undefined index: id_car /var/www/html/rental/application/controllers/Vehicle.php 125
ERROR - 2019-10-03 12:26:12 --> Severity: Notice --> Undefined index: id_pool /var/www/html/rental/application/controllers/Vehicle.php 126
ERROR - 2019-10-03 12:26:12 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 127
ERROR - 2019-10-03 12:26:12 --> Severity: Notice --> Undefined index: no_polisi /var/www/html/rental/application/controllers/Vehicle.php 128
ERROR - 2019-10-03 12:26:12 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/controllers/Vehicle.php 129
ERROR - 2019-10-03 12:26:12 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/controllers/Vehicle.php 130
ERROR - 2019-10-03 12:26:12 --> Severity: Notice --> Undefined index: tahun /var/www/html/rental/application/controllers/Vehicle.php 131
ERROR - 2019-10-03 12:26:12 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-10-03 12:27:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-03 12:29:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-03 12:32:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-03 12:32:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-03 12:47:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-03 12:47:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-03 13:16:07 --> 404 Page Not Found: Report/build
ERROR - 2019-10-03 13:16:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 13:19:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 13:25:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 13:53:46 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-03 13:55:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 13:58:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-03 13:58:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-03 14:02:08 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-03 14:02:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 14:02:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 14:02:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 14:02:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 14:03:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 14:03:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 14:03:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 14:03:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 14:04:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 14:05:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 14:06:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 14:10:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 14:10:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 14:10:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 14:11:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 14:20:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 14:32:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 14:43:24 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-03 14:43:25 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-03 14:43:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 14:48:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 14:51:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 14:52:27 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 571
ERROR - 2019-10-03 14:52:27 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 571
ERROR - 2019-10-03 14:52:27 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 571
ERROR - 2019-10-03 14:52:27 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 571
ERROR - 2019-10-03 14:52:27 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 572
ERROR - 2019-10-03 14:52:27 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 573
ERROR - 2019-10-03 14:52:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 584
ERROR - 2019-10-03 14:52:27 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 584
ERROR - 2019-10-03 14:52:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 10:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-03 14:52:27 --> Query error: ERROR:  syntax error at or near "and"
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
ERROR - 2019-10-03 14:52:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 14:52:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 14:53:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 15:01:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:03:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:04:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:05:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 15:05:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:09:25 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-03 15:09:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:14:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:17:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 15:17:42 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-10-03 15:17:42 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-10-03 15:17:42 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-10-03 15:17:42 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-10-03 15:17:42 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-10-03 15:17:42 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-10-03 15:17:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-03 15:17:42 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-03 15:18:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:20:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:20:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:21:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:24:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 15:24:59 --> Severity: Notice --> Undefined variable: arrModel /var/www/html/rental/application/views/driver/driver.php 166
ERROR - 2019-10-03 15:24:59 --> Severity: Notice --> Undefined variable: arrWarna /var/www/html/rental/application/views/driver/driver.php 185
ERROR - 2019-10-03 15:24:59 --> Severity: Notice --> Undefined variable: arrWorkshop /var/www/html/rental/application/views/driver/driver.php 206
ERROR - 2019-10-03 15:24:59 --> Severity: Notice --> Undefined variable: arrMainProblem /var/www/html/rental/application/views/driver/driver.php 226
ERROR - 2019-10-03 15:24:59 --> Severity: Notice --> Undefined variable: arrJenis /var/www/html/rental/application/views/driver/driver.php 246
ERROR - 2019-10-03 15:24:59 --> Severity: Notice --> Undefined variable: arrUom /var/www/html/rental/application/views/driver/driver.php 268
ERROR - 2019-10-03 15:24:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-03 15:24:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-03 15:25:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-03 15:27:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-03 15:27:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-03 15:30:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-03 15:30:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-03 15:34:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:35:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:37:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:45:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:45:21 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 15:45:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:45:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:45:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:46:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-03 15:46:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-03 15:46:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:47:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:47:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:48:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:51:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:58:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 15:58:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:01:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:01:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 16:01:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:01:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:02:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 16:03:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-03 16:03:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-03 16:03:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:03:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 16:03:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:07:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:11:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:12:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:13:06 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-03 16:13:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:14:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:19:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 16:19:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:22:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 16:23:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:25:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:25:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:26:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:26:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 16:26:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:28:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:29:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:31:04 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-03 16:32:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:33:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:34:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 16:34:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:34:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:35:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 16:35:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:36:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:37:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:40:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:40:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 16:40:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:44:42 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 16:44:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:45:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 16:47:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:47:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:47:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:47:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:48:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 16:48:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:49:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:50:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 16:50:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:52:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 16:52:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:52:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 16:53:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:54:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:54:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-03 16:55:01 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Jaminan_model.php 75
ERROR - 2019-10-03 16:55:01 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Jaminan_model.php 76
ERROR - 2019-10-03 16:55:09 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Jaminan_model.php 75
ERROR - 2019-10-03 16:55:09 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Jaminan_model.php 76
ERROR - 2019-10-03 16:55:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:56:16 --> Severity: Notice --> Undefined index: rosi /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-10-03 16:57:04 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Jaminan_model.php 75
ERROR - 2019-10-03 16:57:04 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Jaminan_model.php 76
ERROR - 2019-10-03 16:57:22 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Jaminan_model.php 75
ERROR - 2019-10-03 16:57:22 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Jaminan_model.php 76
ERROR - 2019-10-03 16:57:22 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-03 16:57:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:58:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 16:59:01 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Jaminan_model.php 75
ERROR - 2019-10-03 16:59:01 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Jaminan_model.php 76
ERROR - 2019-10-03 16:59:01 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-03 16:59:09 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Jaminan_model.php 75
ERROR - 2019-10-03 16:59:09 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Jaminan_model.php 76
ERROR - 2019-10-03 16:59:30 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Jaminan_model.php 75
ERROR - 2019-10-03 16:59:30 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Jaminan_model.php 76
ERROR - 2019-10-03 16:59:34 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Jaminan_model.php 75
ERROR - 2019-10-03 16:59:34 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Jaminan_model.php 76
ERROR - 2019-10-03 17:00:23 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Jaminan_model.php 75
ERROR - 2019-10-03 17:00:23 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Jaminan_model.php 76
ERROR - 2019-10-03 17:00:53 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Jaminan_model.php 75
ERROR - 2019-10-03 17:00:53 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Jaminan_model.php 76
ERROR - 2019-10-03 17:01:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 17:01:42 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Jaminan_model.php 75
ERROR - 2019-10-03 17:01:42 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Jaminan_model.php 76
ERROR - 2019-10-03 17:07:32 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Jaminan_model.php 75
ERROR - 2019-10-03 17:07:32 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Jaminan_model.php 76
ERROR - 2019-10-03 17:07:59 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Jaminan_model.php 75
ERROR - 2019-10-03 17:07:59 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Jaminan_model.php 76
ERROR - 2019-10-03 17:08:31 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Jaminan_model.php 75
ERROR - 2019-10-03 17:08:31 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Jaminan_model.php 76
ERROR - 2019-10-03 17:17:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 17:17:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 17:17:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-03 17:17:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-03 17:19:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 17:24:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-03 17:24:03 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-10-03 17:24:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 17:32:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 17:33:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 17:34:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 17:34:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 17:35:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-03 17:35:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-03 17:51:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 17:51:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 17:53:11 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-03 18:33:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-03 21:20:50 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-03 21:20:58 --> 404 Page Not Found: Spj/build
