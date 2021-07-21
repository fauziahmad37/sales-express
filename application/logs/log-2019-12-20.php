<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-20 00:22:53 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 00:22:53 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 04:30:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 04:30:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 04:36:14 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 04:36:14 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 05:03:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 05:04:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 05:14:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 05:16:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 05:17:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 05:18:42 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 423 and defined /var/www/html/rental/application/models/Spj_model.php 598
ERROR - 2019-12-20 05:18:42 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 423 and defined /var/www/html/rental/application/models/Spj_model.php 598
ERROR - 2019-12-20 05:18:42 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 423 and defined /var/www/html/rental/application/models/Spj_model.php 598
ERROR - 2019-12-20 05:18:42 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 423 and defined /var/www/html/rental/application/models/Spj_model.php 598
ERROR - 2019-12-20 05:18:42 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 599
ERROR - 2019-12-20 05:18:42 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 600
ERROR - 2019-12-20 05:18:42 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-20 05:18:42 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-20 05:18:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 10:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 05:18:42 --> Query error: ERROR:  syntax error at or near "and"
LINE 10:    where a.pool_id= and a.created>='1970-01-01 00:00:00' and...
                             ^ - Invalid query: select a.id,doc_number, a.status, a.created, a.tipe_rental, a.jam_mulai_denda,
			b.no_pintu, c.name as pool_name,
			d.kip_number,d.name as driver_name, d.hari_kerja,
			e.username
			from trx_spj a
			left join master_car b on (a.car_id = b.id)
			left join master_pool c on (a.pool_id = c.id)
			left join master_driver d on (a.driver_id = d.id)
			left join cac_user e on (a.creator_id =e.id)
			where a.pool_id= and a.created>='1970-01-01 00:00:00' and a.created<='1970-01-01 23:59:59' and a.status in('')
			and b.unit_bisnis in ('EXPRESS','EAGLE')
			order by a.created desc;
ERROR - 2019-12-20 05:19:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 05:19:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 05:19:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 05:20:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 05:23:57 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-20 05:24:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 05:24:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 05:24:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 05:31:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 05:33:14 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-20 05:33:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 05:33:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 05:34:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 05:48:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 05:51:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 06:12:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 06:19:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 06:33:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 06:35:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 06:35:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 06:36:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 06:36:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 07:05:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 07:06:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 07:06:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 07:07:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 07:08:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 07:08:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 07:08:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 07:08:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 07:10:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 07:12:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 07:12:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 07:12:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 07:17:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 07:17:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 07:22:13 --> The upload destination folder does not appear to be writable.
ERROR - 2019-12-20 07:22:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 07:50:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 08:10:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 08:10:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 08:14:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 08:14:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 08:14:14 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-20 08:14:31 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-12-20 08:23:04 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-20 08:54:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 09:02:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 09:04:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 09:05:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 09:05:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 09:06:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 09:07:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 09:07:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 09:10:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 09:12:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 09:13:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 09:13:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 09:14:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 09:15:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 09:18:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 09:21:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 09:31:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 09:37:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 09:37:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 09:38:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 09:41:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 09:41:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 09:41:30 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-20 09:43:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-20 09:43:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 09:44:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-20 09:58:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 10:00:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 10:00:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 10:01:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 10:01:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 10:01:21 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 10:01:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 10:06:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 10:07:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 10:07:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 10:07:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-20 10:10:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 10:14:02 --> The upload destination folder does not appear to be writable.
ERROR - 2019-12-20 10:14:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 10:18:32 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-20 10:21:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 10:21:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 10:21:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 10:32:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 10:41:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 10:41:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 10:43:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 10:43:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 10:43:18 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-20 10:47:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 10:47:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 10:47:10 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-20 10:47:12 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-20 10:47:30 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-12-20 10:48:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 10:49:14 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-20 10:50:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 10:53:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 10:53:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 10:53:09 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-20 10:54:38 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-20 10:55:00 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-20 10:59:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 11:00:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 11:07:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 11:07:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-20 11:07:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-20 11:15:31 --> Severity: Notice --> Undefined variable: arrPT /var/www/html/rental/application/views/vehicle/vehicle_registration.php 61
ERROR - 2019-12-20 11:15:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-20 11:18:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 11:18:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-20 11:20:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-20 11:21:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 11:22:18 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-20 11:22:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 11:22:22 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-12-20 11:22:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 11:22:28 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-12-20 11:22:28'
WHERE "id" = 'build'
ERROR - 2019-12-20 11:24:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 11:24:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 11:33:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 11:35:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-20 11:42:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 11:42:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 11:42:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 11:42:23 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-20 12:01:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 12:38:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 12:38:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 12:38:51 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-20 12:42:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 12:43:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 12:47:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 12:49:18 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-20 12:49:47 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-20 12:49:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 12:50:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 12:50:22 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-12-20 12:51:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 12:55:14 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-20 12:56:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 13:04:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 13:06:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 13:07:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 13:07:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 13:08:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 13:08:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 13:10:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 13:13:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 13:14:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 13:30:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 13:33:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 13:34:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 13:34:00 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-20 13:38:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 13:43:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 13:46:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 13:48:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 13:51:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 14:04:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 14:07:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-20 14:07:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 14:07:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 14:08:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 14:09:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 14:09:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 14:11:05 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 14:11:05 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 14:12:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 14:12:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 14:12:18 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-20 14:12:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 14:15:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 14:15:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 14:16:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 14:16:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 14:16:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 14:17:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 14:20:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 14:23:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 14:23:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 14:26:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 14:27:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 14:28:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 14:29:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 14:29:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 14:30:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 14:31:59 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 14:31:59 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 14:47:40 --> 404 Page Not Found: Report/setoran
ERROR - 2019-12-20 14:47:43 --> 404 Page Not Found: Report/setoran
ERROR - 2019-12-20 14:47:52 --> 404 Page Not Found: Report/build
ERROR - 2019-12-20 14:55:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 14:55:47 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-20 14:58:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 14:58:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:00:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:01:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:06:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:06:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:07:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:08:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-20 15:08:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-20 15:10:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-20 15:12:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:13:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:14:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:14:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:16:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-20 15:16:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:17:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:19:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:19:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 15:19:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:20:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:34:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:43:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:44:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:45:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 15:45:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:53:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 15:54:10 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-20 15:54:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 16:09:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 16:09:11 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-12-20 16:20:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 16:25:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 16:32:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 16:33:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 16:38:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 16:39:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 16:39:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 16:40:07 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-20 16:46:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 16:52:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 16:52:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 16:57:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 16:57:36 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-12-20 16:57:46 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-20 16:57:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 16:57:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 16:57:53 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-20 16:58:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:00:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:01:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:02:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 17:02:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:05:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:05:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 17:05:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 17:05:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:07:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:10:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:29:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:30:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:32:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:33:36 --> 404 Page Not Found: Report/build
ERROR - 2019-12-20 17:34:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:35:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:35:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:37:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:38:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 17:38:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 17:38:15 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-20 17:42:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:42:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 17:42:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:44:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:45:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 17:45:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:51:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:52:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 17:52:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:54:16 --> 404 Page Not Found: Report/setoran
ERROR - 2019-12-20 17:54:21 --> 404 Page Not Found: Report/setoran
ERROR - 2019-12-20 17:54:22 --> 404 Page Not Found: Report/setoran
ERROR - 2019-12-20 17:54:31 --> 404 Page Not Found: Report/build
ERROR - 2019-12-20 17:54:36 --> 404 Page Not Found: Report/build
ERROR - 2019-12-20 17:54:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:55:07 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-20 17:56:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:58:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 17:58:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:05:21 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-20 18:05:43 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-20 18:06:13 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-20 18:06:14 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-20 18:06:28 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-20 18:06:29 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-20 18:08:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:17:59 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 18:18:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:23:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:23:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:26:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:27:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:29:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:32:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 18:32:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:33:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 18:33:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:34:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 18:34:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:35:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 18:35:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:35:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:37:42 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 18:37:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:43:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 18:43:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:47:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:53:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:54:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 18:59:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 19:00:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 19:01:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 19:02:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 19:02:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 19:18:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 19:26:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 19:26:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 19:44:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 19:49:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 19:51:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 19:51:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-20 19:51:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 19:51:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 19:51:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 19:52:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 19:55:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 19:56:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 19:57:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 19:58:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:01:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:07:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:08:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:13:24 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-20 20:21:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:24:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:26:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:27:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:30:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:32:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:33:03 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-20 20:35:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:35:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 20:37:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 20:37:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:41:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:42:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:42:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:43:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:43:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:44:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:45:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:45:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:46:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:46:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:47:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:47:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-20 20:47:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:48:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:49:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:49:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:51:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-20 20:51:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-20 20:51:18 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-20 20:56:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 20:58:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 21:04:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 21:20:38 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-20 21:21:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 21:23:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 21:26:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 22:16:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-20 23:20:56 --> 404 Page Not Found: Closing/build
ERROR - 2019-12-20 23:53:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-20 23:53:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
