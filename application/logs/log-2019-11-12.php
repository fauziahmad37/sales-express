<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-12 02:18:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 06:57:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 08:10:32 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-12 08:11:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 08:12:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 08:13:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-12 08:13:18 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-12 08:33:22 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-12 08:33:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 08:33:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 08:34:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 08:34:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 08:35:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 08:36:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 08:38:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 08:40:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 08:40:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 08:44:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 08:46:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 08:56:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-12 08:56:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-12 09:08:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 09:08:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 09:09:43 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-12 09:09:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 09:14:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 09:17:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 09:17:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-12 09:19:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 09:22:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 09:31:22 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-12 09:35:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 09:35:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-12 09:35:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 09:35:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-12 09:35:32 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-12 09:55:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 09:56:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 09:56:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 09:57:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 10:10:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 10:17:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 10:18:15 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-12 10:43:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 10:44:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 10:46:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 10:46:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-12 10:46:54 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-12 10:47:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-12 10:47:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 10:49:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 10:49:21 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 10:49:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 10:56:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 10:56:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 11:18:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-12 11:18:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-12 11:31:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-12 11:31:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-12 11:37:31 --> The upload destination folder does not appear to be writable.
ERROR - 2019-11-12 11:37:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-12 11:47:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-12 11:50:12 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-12 11:50:12 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-12 12:13:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-12 12:13:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-12 12:13:45 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-12 12:13:45 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-12 12:20:18 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 197
ERROR - 2019-11-12 12:52:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-12 12:54:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-12 13:08:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-12 13:28:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-12 13:28:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-12 13:42:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-12 13:42:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-12 13:43:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 13:51:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 13:51:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 13:52:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-12 13:52:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-12 13:53:10 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-12 13:58:24 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-12 13:58:24 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-12 14:00:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:01:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:02:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:02:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:03:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:04:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:04:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 14:04:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:05:42 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 14:05:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:07:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:08:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:09:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:09:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:11:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:13:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-12 14:13:22 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-11-12 14:13:22', 'TTS-TIARA/BCG/20191112/2600', '0', '', '0', '0', '0', '0', '0', 0, 0, '', '', '', 'Paid', '0', '45', NULL, '5')
ERROR - 2019-11-12 14:13:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-12 14:13:22 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-11-12 14:15:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:18:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:19:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 14:19:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:21:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 14:21:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:30:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:32:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 14:32:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:32:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:35:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:39:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:39:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:40:22 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 575
ERROR - 2019-11-12 14:40:22 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 575
ERROR - 2019-11-12 14:40:22 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 575
ERROR - 2019-11-12 14:40:22 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 429 and defined /var/www/html/rental/application/models/Spj_model.php 575
ERROR - 2019-11-12 14:40:22 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 576
ERROR - 2019-11-12 14:40:22 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 577
ERROR - 2019-11-12 14:40:22 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 588
ERROR - 2019-11-12 14:40:22 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 588
ERROR - 2019-11-12 14:40:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 10:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-12 14:40:22 --> Query error: ERROR:  syntax error at or near "and"
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
ERROR - 2019-11-12 14:40:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-12 14:40:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-12 14:40:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-12 14:42:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:43:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:50:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:51:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:57:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:57:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 14:57:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 14:59:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 15:01:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 15:01:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 15:02:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 15:02:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 15:04:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-12 15:04:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-12 15:05:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 15:13:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 15:22:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 15:26:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 15:31:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 15:31:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 15:33:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 15:38:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 15:39:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 15:40:37 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-12 15:41:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 15:49:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 15:54:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 15:55:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 15:56:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:02:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 16:02:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:02:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 16:03:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:06:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:06:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 16:06:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:08:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 16:08:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:08:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:09:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 16:09:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:14:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:16:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:17:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:20:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:20:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:23:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:25:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:27:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:27:35 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-12 16:29:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:30:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 16:30:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:31:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:32:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:32:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 16:32:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:35:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:35:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:35:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:36:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:37:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:46:28 --> Severity: Notice --> Undefined index: faizal /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-11-12 16:46:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:47:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:48:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:48:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 16:48:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:51:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 16:51:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:51:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:52:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:52:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:53:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:54:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:55:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:56:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 16:56:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:56:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:56:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:56:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:58:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 16:58:17 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-12 16:58:17 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-12 16:58:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-12 16:58:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 17:12:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 17:16:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 17:32:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-12 17:32:50 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-12 17:32:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-12 17:32:59 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-12 17:32:59 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-11-12 17:35:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 18:01:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 18:09:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-12 18:09:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-12 18:10:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 18:19:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-12 18:19:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-12 18:19:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 19:03:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 19:17:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-12 20:05:13 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-12 20:53:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-12 20:53:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-12 21:07:26 --> 404 Page Not Found: Spj/build
