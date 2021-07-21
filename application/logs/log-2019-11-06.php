<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-06 00:52:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 05:40:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 07:04:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 07:22:27 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-06 07:22:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 07:22:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 07:59:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 08:07:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 08:08:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 08:09:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 08:10:03 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-06 08:11:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 08:12:04 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-06 08:13:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 08:13:38 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 588
ERROR - 2019-11-06 08:13:38 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 591
ERROR - 2019-11-06 08:13:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 7:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-06 08:13:38 --> Query error: ERROR:  syntax error at or near ";"
LINE 7:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from 
			trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-11-06 08:14:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 08:14:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 08:14:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 08:19:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 08:30:42 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-06 08:31:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 08:38:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 08:38:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 08:38:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 08:39:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 08:39:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 08:42:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 09:07:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 09:22:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 09:25:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 09:35:56 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-06 09:36:00 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-06 09:38:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 09:38:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-06 09:38:37 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-06 09:44:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 10:11:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 10:12:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 10:12:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 10:15:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 10:15:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 10:26:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 10:26:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 10:33:41 --> The upload destination folder does not appear to be writable.
ERROR - 2019-11-06 10:33:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 10:33:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 10:33:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 10:49:09 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-06 10:49:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 10:51:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 10:59:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 10:59:39 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-06 11:01:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 11:01:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 11:35:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 11:44:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 11:50:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 12:00:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 12:07:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 12:07:10 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 12:07:10 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 12:07:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-06 12:07:25 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-06 12:07:25 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-06 12:12:59 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-06 12:15:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 12:23:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 12:25:46 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 197
ERROR - 2019-11-06 12:27:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 12:53:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 12:54:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 12:55:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 12:55:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 13:18:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 13:19:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 13:19:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 13:19:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 13:20:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 13:27:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 13:36:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 13:51:03 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-06 13:54:54 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 13:55:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 13:58:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:01:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-06 14:01:11 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-06 14:02:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 14:02:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 14:02:07 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 14:02:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:02:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:03:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:03:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 14:03:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 14:03:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:03:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:04:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-06 14:04:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-06 14:04:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:04:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 14:05:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:06:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:07:39 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 588
ERROR - 2019-11-06 14:07:39 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 591
ERROR - 2019-11-06 14:07:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 7:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-06 14:07:39 --> Query error: ERROR:  syntax error at or near ";"
LINE 7:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from 
			trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-11-06 14:09:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:09:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 14:10:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 14:10:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:14:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:15:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:16:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:17:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:21:47 --> Severity: Notice --> Undefined index: hengki_firmansyah /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-11-06 14:21:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:23:02 --> Severity: Notice --> Undefined index: wahyu_prasetya /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-11-06 14:24:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 14:24:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:25:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:26:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:26:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:27:41 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-06 14:28:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:29:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:32:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 14:32:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-06 14:32:15 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-06 14:33:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:35:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:37:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:40:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:42:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:43:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:44:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-06 14:44:53 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-11-06 14:44:53', 'TTS-TIARA/BCG/20191106/2317', '0', '', '0', '0', '0', '0', '0', 0, 0, '', '', '', 'Paid', '0', '43', NULL, '5')
ERROR - 2019-11-06 14:44:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-06 14:44:53 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-11-06 14:46:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:46:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 14:46:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 14:46:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 14:47:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 14:47:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 14:47:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:47:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 14:47:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 14:48:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:49:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:51:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:51:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 14:51:24 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 14:51:24 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 14:51:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:51:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:53:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 14:53:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 14:53:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 14:53:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 14:53:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 14:53:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 14:56:12 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 14:56:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 14:56:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 14:59:46 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 14:59:46 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 14:59:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:00:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 15:00:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:00:59 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 15:01:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:03:07 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-11-06 15:03:07 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 15:03:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 15:05:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:07:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 15:07:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 15:12:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:13:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 15:13:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 15:13:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:14:06 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 15:14:06 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 15:14:18 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 15:14:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-06 15:14:21 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-06 15:14:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-06 15:14:21 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-06 15:14:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-06 15:14:24 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-11-06 15:14:24'
WHERE "id" = 'build'
ERROR - 2019-11-06 15:15:29 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 15:15:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:15:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 15:16:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:16:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:17:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:20:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 15:21:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-06 15:23:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 15:23:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:24:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:27:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 15:28:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 15:28:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:29:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:29:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 15:29:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:29:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 15:29:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:30:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:34:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 15:34:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:40:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:48:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:49:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 15:49:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:50:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:51:03 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-06 15:51:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:54:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:54:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 15:54:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:55:10 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 588
ERROR - 2019-11-06 15:55:10 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 591
ERROR - 2019-11-06 15:55:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 7:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-06 15:55:10 --> Query error: ERROR:  syntax error at or near ";"
LINE 7:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from 
			trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-11-06 15:55:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 15:58:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:00:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 16:00:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:05:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:15:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:15:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 16:15:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:16:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:17:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:18:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:19:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:21:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:22:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:23:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:24:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:25:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:25:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:27:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:29:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:30:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 16:30:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:31:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:31:37 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 16:31:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:31:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:33:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 16:33:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-06 16:33:33 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-06 16:33:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:33:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 16:33:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:34:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:35:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 16:35:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:36:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:37:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:38:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:39:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:39:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:39:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 16:39:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:40:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:42:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:42:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 16:42:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:43:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:44:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 16:44:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 16:45:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 16:49:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:51:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:51:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:52:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:52:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 16:52:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:54:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:54:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:54:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:54:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 16:55:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:56:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:56:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 16:56:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:57:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:59:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 16:59:37 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-06 16:59:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 17:03:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 17:04:13 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-06 17:05:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 17:11:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 17:12:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 17:22:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 17:22:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 17:22:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 17:25:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 17:25:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 17:27:25 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-06 17:28:14 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 17:28:14 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 17:38:56 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-06 17:44:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 17:55:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-06 18:17:06 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 18:17:06 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 19:35:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-06 22:02:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-06 22:02:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-06 22:03:01 --> 404 Page Not Found: Spj/build
