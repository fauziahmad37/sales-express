<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-18 01:00:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 01:11:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 01:55:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 02:12:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 04:38:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 05:08:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 05:08:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 05:09:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 05:10:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 05:14:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 05:17:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 05:23:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 05:24:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 05:25:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 05:30:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 05:32:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 05:33:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 05:33:37 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 05:33:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 05:34:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 05:34:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 05:34:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 05:35:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 05:36:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 06:53:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 06:53:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 07:19:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 07:23:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 07:23:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 07:24:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ..., 'Paid', 'Penambahan Jaminan', '0', '0', 0, '1', '', 'TTS/P...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-18 07:24:03 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..., 'Paid', 'Penambahan Jaminan', '0', '0', 0, '1', '', 'TTS/P...
                                                             ^ - Invalid query: INSERT INTO "ap_jaminan" ("created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "driver_id", "doc_number") VALUES ('2019-12-18 07:24:03', 'Paid', 'Penambahan Jaminan', '0', '0', 0, '1', '', 'TTS/PB/20191218/4884')
ERROR - 2019-12-18 07:24:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-18 07:24:03 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-12-18 07:24:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;jam_mulai_denda&quot;, &quot;total_tagihan&quot;) VALUES ('97', '', '1', '...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-18 07:24:26 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."jam_mulai_denda", "total_tagihan") VALUES ('97', '', '1', '...
                                                             ^ - Invalid query: INSERT INTO "trx_spj" ("driver_id", "car_id", "pool_id", "created", "creator_id", "doc_number", "keterangan", "modified", "status", "tipe_rental", "tanggal_spj", "denda_perjam", "jam_mulai_denda", "total_tagihan") VALUES ('97', '', '1', '2019-12-18 07:24:26', '24', 'SPJ/PB/20191218/4977', 'Create SPJ by Pool', '2019-12-18 07:24:26', 'Active', '24 Jam', '2019-12-18', 15000, '2019-12-19 07:24:26', 0)
ERROR - 2019-12-18 07:24:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-18 07:24:26 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: update master_driver set hari_kerja=hari_kerja+1 where id=97;
ERROR - 2019-12-18 07:24:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 07:25:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 07:26:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 07:26:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 07:47:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 07:54:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 08:14:38 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-18 08:16:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 08:17:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 08:18:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 08:19:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 08:21:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 08:23:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 08:24:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 08:25:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 08:25:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 08:26:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 08:30:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 08:33:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 08:35:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 08:36:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 08:47:05 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-18 08:47:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 08:56:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:04:54 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-18 09:07:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 09:07:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 09:07:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:08:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:09:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:09:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:10:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 09:10:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:13:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:16:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:16:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:16:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:18:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:21:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:22:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:23:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:24:51 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-18 09:25:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:25:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 09:25:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 09:25:35 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-18 09:25:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:26:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 09:26:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:27:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:28:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:32:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:41:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:41:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 09:42:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:43:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:49:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:50:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 09:50:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 09:56:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 09:56:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 10:08:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 10:08:31 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-18 10:11:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 10:11:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 10:12:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 10:12:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 10:12:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 10:12:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 10:25:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 10:28:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 10:28:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 10:36:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 10:39:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-18 10:39:46 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-18 10:39:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-18 10:39:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 10:42:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 10:42:51 --> 404 Page Not Found: Report/build
ERROR - 2019-12-18 11:00:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 11:01:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 11:10:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 11:13:58 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-18 11:14:22 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-18 11:21:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 11:22:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 11:22:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 11:23:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 11:23:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 11:39:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 11:40:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 11:41:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 11:41:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 11:41:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 11:47:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 11:51:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 11:51:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 11:55:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 11:55:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 11:57:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 12:00:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 12:05:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 12:12:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 12:13:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 12:29:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 12:36:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 12:36:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 12:39:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 12:50:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 12:50:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 12:54:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 12:58:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 12:59:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 12:59:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 13:12:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 13:12:30 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-18 13:12:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-18 13:15:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 13:17:51 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-18 13:19:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 13:20:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 13:21:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 13:34:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 13:42:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 13:43:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 13:43:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 13:44:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 13:44:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 13:46:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 13:47:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 13:47:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 13:47:33 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-18 13:48:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 13:52:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 13:52:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 13:55:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 14:00:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 14:01:22 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-18 14:02:39 --> The upload destination folder does not appear to be writable.
ERROR - 2019-12-18 14:02:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 14:02:45 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-18 14:03:06 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-18 14:03:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 14:05:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 14:05:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-18 14:05:11 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-18 14:05:12 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-18 14:05:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 14:07:59 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-12-18 14:08:25 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-18 14:10:15 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-18 14:12:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 14:13:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 14:15:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 14:15:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 14:15:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 14:17:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 14:17:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 14:24:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 14:27:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 14:35:50 --> The upload destination folder does not appear to be writable.
ERROR - 2019-12-18 14:35:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 14:40:30 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-18 14:40:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 14:40:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-18 14:40:46 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-18 14:40:46 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-18 14:40:53 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-12-18 14:41:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 14:41:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-18 14:41:52 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-18 14:47:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 14:51:11 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-18 14:52:05 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-18 14:52:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 14:52:36 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-18 14:56:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 14:56:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 15:01:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 15:03:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 15:03:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 15:07:42 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-18 15:08:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 15:10:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 15:10:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 15:10:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 15:11:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 15:11:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 15:25:05 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-18 15:38:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 15:38:35 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-18 15:42:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 15:42:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 15:50:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 15:51:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 15:51:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 15:52:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 15:56:38 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-18 15:59:28 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-18 15:59:36 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-18 16:00:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-18 16:00:08 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-12-18 16:01:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 16:05:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 16:15:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 16:15:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 16:20:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 16:20:52 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-18 16:21:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 16:23:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 16:23:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 16:33:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 16:34:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 16:36:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 16:36:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 16:39:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 16:39:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 16:40:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 16:48:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 16:49:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 16:49:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 16:55:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 16:55:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 16:59:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:00:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:07:26 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-18 17:08:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:08:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:12:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:12:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:12:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 17:12:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:13:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:13:46 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-18 17:14:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:14:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:14:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 17:14:39 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-12-18 17:14:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-18 17:14:39 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-18 17:14:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:16:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:18:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:19:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:20:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 17:20:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:26:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:27:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:33:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 17:40:25 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-18 17:57:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:00:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:01:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:01:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:04:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 18:04:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:07:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:09:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:12:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:13:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 18:13:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 18:15:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:16:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 18:16:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 18:16:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:19:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:24:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:27:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:27:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:30:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:32:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:40:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 18:40:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:41:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:42:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:47:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:50:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 18:50:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:51:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 18:55:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 18:55:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 19:00:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 19:00:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 19:01:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 19:01:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 19:02:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 19:03:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 19:03:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 19:08:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-18 19:08:03 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-18 19:08:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-18 19:08:16 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-18 19:08:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-18 19:08:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-18 19:09:26 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-18 19:12:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 19:14:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 19:16:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 19:16:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 19:23:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 19:29:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 19:30:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 19:39:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 19:40:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 19:47:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 19:55:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:03:33 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 20:03:33 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 20:07:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 20:10:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-18 20:10:16 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-18 20:10:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:10:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:11:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 20:11:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:13:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:16:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:17:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:19:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:20:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:21:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:22:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:26:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:27:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-18 20:28:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:31:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:32:10 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 20:32:10 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 20:32:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 20:32:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:32:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:33:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:34:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:35:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:36:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:37:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:38:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 20:38:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:38:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-18 20:39:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:39:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:40:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 20:40:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:40:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:42:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-18 20:42:28 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-18 20:42:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 20:42:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:45:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:45:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:46:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:47:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:47:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:47:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:48:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:52:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:52:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:53:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:53:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 20:53:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:53:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:54:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-18 20:54:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:54:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:55:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:55:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:57:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 20:59:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 21:01:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 21:01:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 21:11:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 21:11:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 21:12:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 21:12:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 21:12:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 21:12:34 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-18 21:19:33 --> 404 Page Not Found: Closing/build
ERROR - 2019-12-18 21:30:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-18 21:30:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-18 22:12:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-18 22:42:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 22:42:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 22:46:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 22:57:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 23:19:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 23:20:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-18 23:38:32 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-18 23:38:59 --> 404 Page Not Found: Spj/build
