<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-10-30 08:10:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 08:15:24 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-30 08:16:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 08:16:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 08:17:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 08:18:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 08:19:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 08:20:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 08:22:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 08:24:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 08:25:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 08:26:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 08:28:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 08:30:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 08:41:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-30 08:41:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-30 08:46:28 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 35
ERROR - 2019-10-30 08:46:28 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 35
ERROR - 2019-10-30 08:46:29 --> 404 Page Not Found: Report/build
ERROR - 2019-10-30 08:46:38 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj_tiara.php 35
ERROR - 2019-10-30 08:46:38 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj_tiara.php 35
ERROR - 2019-10-30 08:46:38 --> 404 Page Not Found: Report/build
ERROR - 2019-10-30 08:49:07 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 35
ERROR - 2019-10-30 08:49:07 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 35
ERROR - 2019-10-30 08:49:07 --> 404 Page Not Found: Report/build
ERROR - 2019-10-30 08:53:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 08:54:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 08:59:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-30 09:06:58 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-30 09:07:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 09:13:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 09:14:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 09:14:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 09:16:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 09:26:57 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 35
ERROR - 2019-10-30 09:26:57 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/rekap_spj.php 35
ERROR - 2019-10-30 09:27:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-30 09:27:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-30 09:27:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-30 09:27:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-30 09:27:24 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-10-30 09:29:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-30 09:34:40 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 197
ERROR - 2019-10-30 09:35:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-30 09:38:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 09:40:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-30 10:12:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 10:13:36 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-30 10:13:38 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-30 10:21:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 10:25:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 10:37:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 10:42:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 10:46:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 10:46:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 11:03:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 11:26:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 11:37:59 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-30 12:19:30 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-30 13:13:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 13:26:20 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-30 13:29:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 13:31:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 13:32:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 13:58:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 13:58:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 13:59:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 13:59:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:00:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:01:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:02:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:03:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:03:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 14:03:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:05:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:06:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:07:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-30 14:07:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-30 14:07:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:08:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 14:08:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:13:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:14:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:20:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:20:51 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-10-30 14:24:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:29:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:34:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:34:47 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-30 14:35:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:38:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:47:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:50:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:51:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 14:51:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:55:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:55:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:56:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 14:56:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 14:58:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:01:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:01:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:04:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:12:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:12:57 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-10-30 15:13:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:20:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:23:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:23:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:23:59 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 15:24:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:24:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 15:24:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-30 15:24:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:25:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:31:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:32:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:33:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 15:33:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:34:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:35:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:35:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:36:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:36:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:40:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:41:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:41:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:41:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:43:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 15:43:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:43:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:44:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:44:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 15:44:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:45:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 15:45:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:46:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-30 15:46:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-30 15:46:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:47:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:48:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 15:48:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:49:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:49:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 15:49:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 15:57:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 15:57:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:00:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-30 16:04:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 16:04:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:04:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:05:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:10:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:15:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:17:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:19:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:20:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:20:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:21:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 16:21:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:22:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:23:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:24:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 16:24:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:25:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 16:25:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:28:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:29:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:29:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:29:53 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-10-30 16:35:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:36:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:38:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:40:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:40:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:42:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:42:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:43:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:43:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:44:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:45:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:45:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:46:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:46:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 16:46:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:47:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 16:47:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:47:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:48:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:48:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:49:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 16:49:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:49:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 16:49:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:50:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 16:50:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:51:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:51:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 16:51:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:51:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:52:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 16:52:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:54:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 16:55:59 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-10-30 16:56:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 17:00:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 17:01:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 17:01:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 17:10:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 17:19:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 17:26:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-10-30 17:26:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-10-30 17:26:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-10-30 18:14:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-30 18:14:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-30 19:11:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-10-30 19:11:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-10-30 19:32:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 19:34:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-10-30 22:23:27 --> 404 Page Not Found: Spj/build
