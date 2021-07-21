<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-13 02:10:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 04:52:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-13 04:52:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-13 05:02:49 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-13 05:02:49 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-13 05:03:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 05:05:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 05:13:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 05:14:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 05:15:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...jam_mulai_denda&quot;, &quot;total_tagihan&quot;) VALUES ('118', '', '1', '...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-13 05:15:15 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...jam_mulai_denda", "total_tagihan") VALUES ('118', '', '1', '...
                                                             ^ - Invalid query: INSERT INTO "trx_spj" ("driver_id", "car_id", "pool_id", "created", "creator_id", "doc_number", "keterangan", "modified", "status", "tipe_rental", "tanggal_spj", "denda_perjam", "jam_mulai_denda", "total_tagihan") VALUES ('118', '', '1', '2019-12-13 05:15:15', '24', 'SPJ/PB/20191213/4625', 'Create SPJ by Pool', '2019-12-13 05:15:15', 'Active', '24 Jam', '2019-12-13', 15000, '2019-12-14 05:15:15', 0)
ERROR - 2019-12-13 05:15:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-13 05:15:15 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: update master_driver set hari_kerja=hari_kerja+1 where id=118;
ERROR - 2019-12-13 05:15:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 05:15:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 05:16:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 05:17:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 05:24:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 05:43:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 06:20:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 06:20:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-13 06:20:21 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-13 07:11:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 07:11:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 07:12:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 07:22:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 08:02:00 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-13 08:02:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 08:03:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 08:04:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 08:06:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 08:09:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 08:42:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-13 08:42:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-13 08:42:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 08:42:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 08:43:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 08:47:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 08:47:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-13 08:47:29 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-13 08:50:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 08:51:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 08:53:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-13 08:53:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-13 08:53:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 08:53:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 08:54:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 08:57:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 08:58:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 08:58:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 08:59:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 09:00:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 09:06:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 09:07:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-13 09:07:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-13 09:20:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 09:29:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 09:35:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 09:37:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 09:44:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 09:55:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 10:04:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 10:05:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 10:05:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 10:20:40 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-13 10:21:35 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-13 10:24:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 10:25:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 10:30:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 10:30:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 10:36:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 10:38:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 10:39:25 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-13 10:39:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 10:41:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 10:42:32 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-13 10:43:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 10:43:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 10:49:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 10:49:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 10:50:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-13 10:50:06 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-13 11:00:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 11:02:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-13 11:02:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 11:03:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 11:03:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-13 11:17:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 11:17:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 11:17:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 11:19:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 11:33:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 11:50:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 11:51:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 11:51:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 12:31:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 12:33:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 12:35:41 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-13 12:36:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 12:37:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 12:37:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-13 12:37:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-13 12:38:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 12:41:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 12:45:06 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-13 12:46:10 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-13 12:46:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 12:46:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 12:46:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 12:46:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 12:46:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 12:48:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 12:49:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 12:49:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 12:49:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 12:50:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 12:50:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 12:52:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 12:55:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 13:06:11 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 13:06:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 13:11:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 13:30:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 13:30:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 13:38:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 13:38:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 13:46:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 14:04:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 14:10:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 14:11:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 14:38:37 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-13 14:38:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-13 14:39:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-13 14:44:24 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-12-13 14:44:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-13 14:44:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-13 14:45:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 14:45:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 14:48:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 14:49:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 14:54:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 14:54:28 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-13 14:54:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-13 14:54:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-12-13 14:54:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-13 14:54:38 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-12-13 14:54:38'
WHERE "id" = 'build'
ERROR - 2019-12-13 15:05:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 15:06:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 15:06:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 15:11:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-13 15:12:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 15:14:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 15:14:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 15:14:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 15:17:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 15:33:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 15:33:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 15:33:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 15:37:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 15:59:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 16:00:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 16:00:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 16:04:49 --> The upload destination folder does not appear to be writable.
ERROR - 2019-12-13 16:04:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 16:05:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:05:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:06:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:11:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:13:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 16:13:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-13 16:13:48 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-13 16:13:48 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-13 16:14:11 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-12-13 16:16:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 16:22:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:23:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:23:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:23:41 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-13 16:23:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:23:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:23:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:23:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-13 16:24:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:24:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;ap_jaminan&quot; violates foreign key constraint &quot;ap_jaminan_master_pool_fk&quot;
DETAIL:  Key (pool_id)=(0) is not present in table &quot;master_pool&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-13 16:24:46 --> Query error: ERROR:  insert or update on table "ap_jaminan" violates foreign key constraint "ap_jaminan_master_pool_fk"
DETAIL:  Key (pool_id)=(0) is not present in table "master_pool". - Invalid query: INSERT INTO "ap_jaminan" ("driver_id", "pool_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "doc_number", "pt_id") VALUES ('29', '0', '2019-12-13 16:24:46', 'Paid', 'Top Up by Pool', '434100', '365900', 800000, 'TOPUP/PB/201912/00726', 12)
ERROR - 2019-12-13 16:24:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-13 16:24:46 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-12-13 16:25:28 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-13 16:25:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 16:26:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:26:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:31:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-13 16:32:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 16:33:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:35:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:35:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:36:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:36:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:37:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:37:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 16:37:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:39:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:39:51 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-13 16:41:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:42:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:43:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:44:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:45:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 16:47:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:49:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:52:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 16:57:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:02:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 17:02:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:03:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:06:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:07:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:07:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:09:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:09:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:11:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:12:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:12:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:13:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 17:13:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:15:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:18:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:19:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 17:19:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:22:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:22:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:24:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 17:24:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:30:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 17:30:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:36:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:37:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-13 17:37:12 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-12-13 17:37:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 17:37:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-13 17:37:26 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-13 17:38:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:41:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:49:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:53:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 17:53:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 17:53:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 18:03:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 18:04:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-13 18:04:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-13 18:11:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 18:12:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 18:12:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 18:13:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 18:13:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 18:13:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 18:14:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 18:14:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 18:15:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 18:15:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 18:17:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 18:17:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 18:27:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 18:31:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 18:31:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 18:48:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 18:50:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 19:04:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 19:05:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 19:09:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 19:11:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 19:13:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 19:17:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 19:23:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 19:32:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 19:42:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 19:45:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 19:46:29 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-13 19:51:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 19:52:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 19:53:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 19:54:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 19:56:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 19:56:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-13 19:56:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-13 20:00:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:09:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:15:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 20:21:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:23:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:24:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:24:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:25:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:25:22 --> 404 Page Not Found: Report/build
ERROR - 2019-12-13 20:25:26 --> 404 Page Not Found: Report/setoran
ERROR - 2019-12-13 20:25:30 --> 404 Page Not Found: Closing/build
ERROR - 2019-12-13 20:25:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:25:46 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-13 20:25:46 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-13 20:26:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:26:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:32:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:34:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:35:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:35:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:36:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:38:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:38:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:39:12 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-13 20:39:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 20:39:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:39:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:40:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:40:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:40:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 20:41:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:41:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:41:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 20:41:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:42:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 20:42:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:43:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 20:43:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:43:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:46:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:46:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:47:30 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-13 20:48:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:48:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:49:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-13 20:49:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-13 20:50:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-13 20:50:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:52:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:58:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 20:58:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 21:03:36 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-13 21:04:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 21:04:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 21:06:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 21:11:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 22:04:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 22:07:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-13 22:07:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-13 22:13:47 --> 404 Page Not Found: Closing/build
ERROR - 2019-12-13 22:36:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-13 22:36:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-13 22:41:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 22:44:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 22:45:24 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-13 22:45:24 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-13 22:45:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 22:45:59 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-13 22:45:59 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-13 22:53:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-13 23:18:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 23:52:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 23:52:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-13 23:53:50 --> 404 Page Not Found: Spj/build
