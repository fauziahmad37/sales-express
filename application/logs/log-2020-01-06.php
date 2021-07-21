<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-06 00:32:54 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 00:36:47 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 02:49:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 04:22:46 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 04:59:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 05:00:53 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 05:00:53 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 05:01:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 05:08:27 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 05:08:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 05:08:59 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 05:09:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 05:09:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 05:09:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 05:09:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 05:09:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 05:15:05 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 05:15:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 05:16:15 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 05:16:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 05:17:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 05:17:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 05:18:13 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 05:18:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 05:19:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 05:19:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 05:22:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 05:22:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 05:57:24 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 05:57:24 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 06:01:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 06:01:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 06:13:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 06:13:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 06:13:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 06:14:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 06:15:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 06:27:56 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 07:41:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 07:46:02 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 07:46:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 07:46:21 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-06 08:00:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 08:21:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 08:23:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 08:27:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 08:27:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 08:28:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 08:29:29 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-06 08:30:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 08:30:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 08:30:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 08:31:44 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 08:31:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 08:31:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 08:32:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 08:33:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 08:35:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 08:37:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 08:37:06 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 08:37:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 08:37:19 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-06 08:38:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 08:41:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 08:45:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 08:45:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 08:46:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 08:46:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 08:51:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 08:57:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 09:00:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 09:04:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 09:11:14 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 09:14:07 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 09:14:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 09:14:15 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-06 09:22:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 09:31:27 --> 404 Page Not Found: Report/build
ERROR - 2020-01-06 09:32:41 --> 404 Page Not Found: Report/build
ERROR - 2020-01-06 09:32:46 --> 404 Page Not Found: Report/build
ERROR - 2020-01-06 09:34:09 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 09:34:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 09:34:14 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-06 09:36:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 09:41:00 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 09:55:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 09:57:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 10:04:12 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 10:04:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 10:04:30 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-06 10:06:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 10:08:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 10:13:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...jam_mulai_denda&quot;, &quot;total_tagihan&quot;) VALUES ('120', '', '1', '...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 10:13:46 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...jam_mulai_denda", "total_tagihan") VALUES ('120', '', '1', '...
                                                             ^ - Invalid query: INSERT INTO "trx_spj" ("driver_id", "car_id", "pool_id", "created", "creator_id", "doc_number", "keterangan", "modified", "status", "tipe_rental", "tanggal_spj", "denda_perjam", "jam_mulai_denda", "total_tagihan") VALUES ('120', '', '1', '2020-01-06 10:13:46', '18', 'SPJ/PB/20200106/6252', 'Create SPJ by Pool', '2020-01-06 10:13:46', 'Active', '24 Jam', '2020-01-06', 15000, '2020-01-07 10:13:46', 0)
ERROR - 2020-01-06 10:13:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 10:13:46 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: update master_driver set hari_kerja=hari_kerja+1 where id=120;
ERROR - 2020-01-06 10:14:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 10:15:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 10:27:04 --> 404 Page Not Found: Report/build
ERROR - 2020-01-06 10:30:06 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 10:30:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 10:39:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 10:39:50 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 10:39:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 10:44:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 10:44:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 10:49:22 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 10:49:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 10:49:30 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-06 10:51:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 10:51:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 10:51:34 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 10:56:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 10:56:25 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 10:56:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 10:56:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-06 11:01:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 11:02:10 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 11:02:12 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 11:02:37 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 425 and defined /var/www/html/rental/application/models/Spj_model.php 637
ERROR - 2020-01-06 11:02:37 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 425 and defined /var/www/html/rental/application/models/Spj_model.php 637
ERROR - 2020-01-06 11:02:37 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 425 and defined /var/www/html/rental/application/models/Spj_model.php 637
ERROR - 2020-01-06 11:02:37 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 425 and defined /var/www/html/rental/application/models/Spj_model.php 637
ERROR - 2020-01-06 11:02:37 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 638
ERROR - 2020-01-06 11:02:37 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 639
ERROR - 2020-01-06 11:02:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 650
ERROR - 2020-01-06 11:02:37 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 650
ERROR - 2020-01-06 11:02:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 10:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 11:02:37 --> Query error: ERROR:  syntax error at or near "and"
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
ERROR - 2020-01-06 11:02:56 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 425 and defined /var/www/html/rental/application/models/Spj_model.php 637
ERROR - 2020-01-06 11:02:56 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 425 and defined /var/www/html/rental/application/models/Spj_model.php 637
ERROR - 2020-01-06 11:02:56 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 425 and defined /var/www/html/rental/application/models/Spj_model.php 637
ERROR - 2020-01-06 11:02:56 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 425 and defined /var/www/html/rental/application/models/Spj_model.php 637
ERROR - 2020-01-06 11:02:56 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 638
ERROR - 2020-01-06 11:02:56 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 639
ERROR - 2020-01-06 11:02:56 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 650
ERROR - 2020-01-06 11:02:56 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 650
ERROR - 2020-01-06 11:02:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 10:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 11:02:56 --> Query error: ERROR:  syntax error at or near "and"
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
ERROR - 2020-01-06 11:03:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 11:03:20 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 445 and defined /var/www/html/rental/application/models/Spj_model.php 637
ERROR - 2020-01-06 11:03:20 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 445 and defined /var/www/html/rental/application/models/Spj_model.php 637
ERROR - 2020-01-06 11:03:20 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 445 and defined /var/www/html/rental/application/models/Spj_model.php 637
ERROR - 2020-01-06 11:03:20 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 445 and defined /var/www/html/rental/application/models/Spj_model.php 637
ERROR - 2020-01-06 11:03:20 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 638
ERROR - 2020-01-06 11:03:20 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 639
ERROR - 2020-01-06 11:03:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 650
ERROR - 2020-01-06 11:03:20 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 650
ERROR - 2020-01-06 11:03:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 10:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 11:03:20 --> Query error: ERROR:  syntax error at or near "and"
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
ERROR - 2020-01-06 11:12:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 11:15:28 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 11:15:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 11:15:43 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-06 11:15:43 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-06 11:15:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 11:15:54 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-06 11:16:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 11:36:52 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 11:36:52 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 11:39:57 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 11:40:02 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-06 11:40:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 11:40:02 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-06 11:40:13 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 11:40:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 11:40:23 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-06 11:42:47 --> The upload destination folder does not appear to be writable.
ERROR - 2020-01-06 11:42:47 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-06 11:42:49 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 11:43:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 11:43:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 11:45:20 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-06 11:45:24 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 11:45:24 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 11:45:37 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 11:46:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 11:48:42 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-06 11:49:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 11:50:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 11:51:19 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 11:51:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 11:51:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-06 11:51:24 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-01-06 11:51:37 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 218
ERROR - 2020-01-06 11:52:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 11:52:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 11:52:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 11:53:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 11:57:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 11:58:03 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 11:58:53 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 11:58:55 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 12:00:24 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 12:02:27 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-06 12:06:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 12:12:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 12:16:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 12:16:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 12:18:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 12:21:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 12:30:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 12:30:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 12:34:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 12:34:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 12:48:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 12:55:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 13:05:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 13:07:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 13:13:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 13:18:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 13:18:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 13:18:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 13:21:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 13:26:51 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 13:28:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 13:31:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 13:33:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 13:33:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 13:36:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 13:36:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 13:55:54 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 13:55:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 13:57:12 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 13:57:12 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 14:02:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 14:02:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 14:03:28 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-06 14:03:53 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 14:03:53 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 14:04:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 14:06:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 14:17:02 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 14:17:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 14:18:27 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 14:18:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 14:18:33 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 14:18:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 14:31:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 14:31:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 14:31:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 14:37:41 --> 404 Page Not Found: Assets/css
ERROR - 2020-01-06 14:39:23 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-06 14:39:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 14:39:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 14:39:41 --> 404 Page Not Found: Report/build
ERROR - 2020-01-06 14:39:43 --> 404 Page Not Found: Report/build
ERROR - 2020-01-06 14:39:45 --> 404 Page Not Found: Report/setoran
ERROR - 2020-01-06 14:39:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 14:40:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 14:40:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 14:40:25 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-06 14:40:36 --> 404 Page Not Found: Report/build
ERROR - 2020-01-06 14:40:38 --> 404 Page Not Found: Report/build
ERROR - 2020-01-06 14:40:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 14:40:42 --> 404 Page Not Found: Report/build
ERROR - 2020-01-06 14:40:45 --> 404 Page Not Found: Report/setoran
ERROR - 2020-01-06 14:41:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 14:42:11 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 14:42:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 14:42:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 14:57:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 14:58:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 15:00:23 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 15:02:02 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 15:02:24 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 15:11:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 15:15:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 15:19:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 15:26:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 15:29:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 15:46:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 15:48:19 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-06 15:49:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 15:56:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 15:56:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 15:57:53 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 15:58:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 15:58:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 16:05:02 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 16:05:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 16:06:07 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 16:06:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 16:08:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 16:10:50 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 16:10:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 16:11:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 16:15:04 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-06 16:22:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 16:23:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 16:23:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 16:28:14 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 16:39:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;trx_pengambilan_seragam_unique&quot;
DETAIL:  Key (driver_id)=(170) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:39:38 --> Query error: ERROR:  duplicate key value violates unique constraint "trx_pengambilan_seragam_unique"
DETAIL:  Key (driver_id)=(170) already exists. - Invalid query: INSERT INTO "trx_pengambilan_seragam" ("driver_id", "created", "status", "keterangan", "harga_satuan", "total_tagihan", "jumlah_item", "ukuran", "nominal_cicilan", "doc_number") VALUES ('170', '2020-01-06 16:39:38', 'Belum Lunas', 'Pengambilan Seragam', '205000', '205000', '1', 'XL', '20000', 'SERAGAM/PB/202001/00011')
ERROR - 2020-01-06 16:39:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:39:38 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: INSERT INTO "ap_pembayaran_seragam" ("driver_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "created_by") VALUES ('170', '2020-01-06 16:39:38', 'Paid', 'Create Hutang Seragam', 0, '205000', '205000', '1', '127')
ERROR - 2020-01-06 16:39:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:39:38 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-01-06 16:39:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;trx_pengambilan_seragam_unique&quot;
DETAIL:  Key (driver_id)=(170) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:39:45 --> Query error: ERROR:  duplicate key value violates unique constraint "trx_pengambilan_seragam_unique"
DETAIL:  Key (driver_id)=(170) already exists. - Invalid query: INSERT INTO "trx_pengambilan_seragam" ("driver_id", "created", "status", "keterangan", "harga_satuan", "total_tagihan", "jumlah_item", "ukuran", "nominal_cicilan", "doc_number") VALUES ('170', '2020-01-06 16:39:45', 'Belum Lunas', 'Pengambilan Seragam', '205000', '205000', '1', 'XL', '20000', 'SERAGAM/PB/202001/00012')
ERROR - 2020-01-06 16:39:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:39:45 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: INSERT INTO "ap_pembayaran_seragam" ("driver_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "created_by") VALUES ('170', '2020-01-06 16:39:45', 'Paid', 'Create Hutang Seragam', 0, '205000', '205000', '1', '127')
ERROR - 2020-01-06 16:39:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:39:45 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-01-06 16:39:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;trx_pengambilan_seragam_unique&quot;
DETAIL:  Key (driver_id)=(170) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:39:57 --> Query error: ERROR:  duplicate key value violates unique constraint "trx_pengambilan_seragam_unique"
DETAIL:  Key (driver_id)=(170) already exists. - Invalid query: INSERT INTO "trx_pengambilan_seragam" ("driver_id", "created", "status", "keterangan", "harga_satuan", "total_tagihan", "jumlah_item", "ukuran", "nominal_cicilan", "doc_number") VALUES ('170', '2020-01-06 16:39:57', 'Belum Lunas', 'Pengambilan Seragam', '205000', '205000', '1', 'XL', '20000', 'SERAGAM/PB/202001/00013')
ERROR - 2020-01-06 16:39:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:39:57 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: INSERT INTO "ap_pembayaran_seragam" ("driver_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "created_by") VALUES ('170', '2020-01-06 16:39:57', 'Paid', 'Create Hutang Seragam', 0, '205000', '205000', '1', '127')
ERROR - 2020-01-06 16:39:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:39:57 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-01-06 16:40:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;trx_pengambilan_seragam_unique&quot;
DETAIL:  Key (driver_id)=(170) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:40:00 --> Query error: ERROR:  duplicate key value violates unique constraint "trx_pengambilan_seragam_unique"
DETAIL:  Key (driver_id)=(170) already exists. - Invalid query: INSERT INTO "trx_pengambilan_seragam" ("driver_id", "created", "status", "keterangan", "harga_satuan", "total_tagihan", "jumlah_item", "ukuran", "nominal_cicilan", "doc_number") VALUES ('170', '2020-01-06 16:40:00', 'Belum Lunas', 'Pengambilan Seragam', '205000', '205000', '1', 'XL', '20000', 'SERAGAM/PB/202001/00014')
ERROR - 2020-01-06 16:40:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:40:00 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: INSERT INTO "ap_pembayaran_seragam" ("driver_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "created_by") VALUES ('170', '2020-01-06 16:40:00', 'Paid', 'Create Hutang Seragam', 0, '205000', '205000', '1', '127')
ERROR - 2020-01-06 16:40:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:40:00 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-01-06 16:40:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;trx_pengambilan_seragam_unique&quot;
DETAIL:  Key (driver_id)=(170) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:40:02 --> Query error: ERROR:  duplicate key value violates unique constraint "trx_pengambilan_seragam_unique"
DETAIL:  Key (driver_id)=(170) already exists. - Invalid query: INSERT INTO "trx_pengambilan_seragam" ("driver_id", "created", "status", "keterangan", "harga_satuan", "total_tagihan", "jumlah_item", "ukuran", "nominal_cicilan", "doc_number") VALUES ('170', '2020-01-06 16:40:02', 'Belum Lunas', 'Pengambilan Seragam', '205000', '205000', '1', 'XL', '20000', 'SERAGAM/PB/202001/00015')
ERROR - 2020-01-06 16:40:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:40:02 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: INSERT INTO "ap_pembayaran_seragam" ("driver_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "created_by") VALUES ('170', '2020-01-06 16:40:02', 'Paid', 'Create Hutang Seragam', 0, '205000', '205000', '1', '127')
ERROR - 2020-01-06 16:40:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:40:02 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-01-06 16:40:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;trx_pengambilan_seragam_unique&quot;
DETAIL:  Key (driver_id)=(170) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:40:04 --> Query error: ERROR:  duplicate key value violates unique constraint "trx_pengambilan_seragam_unique"
DETAIL:  Key (driver_id)=(170) already exists. - Invalid query: INSERT INTO "trx_pengambilan_seragam" ("driver_id", "created", "status", "keterangan", "harga_satuan", "total_tagihan", "jumlah_item", "ukuran", "nominal_cicilan", "doc_number") VALUES ('170', '2020-01-06 16:40:04', 'Belum Lunas', 'Pengambilan Seragam', '205000', '205000', '1', 'XL', '20000', 'SERAGAM/PB/202001/00016')
ERROR - 2020-01-06 16:40:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:40:04 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: INSERT INTO "ap_pembayaran_seragam" ("driver_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "created_by") VALUES ('170', '2020-01-06 16:40:04', 'Paid', 'Create Hutang Seragam', 0, '205000', '205000', '1', '127')
ERROR - 2020-01-06 16:40:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:40:04 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-01-06 16:40:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;trx_pengambilan_seragam_unique&quot;
DETAIL:  Key (driver_id)=(170) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:40:15 --> Query error: ERROR:  duplicate key value violates unique constraint "trx_pengambilan_seragam_unique"
DETAIL:  Key (driver_id)=(170) already exists. - Invalid query: INSERT INTO "trx_pengambilan_seragam" ("driver_id", "created", "status", "keterangan", "harga_satuan", "total_tagihan", "jumlah_item", "ukuran", "nominal_cicilan", "doc_number") VALUES ('170', '2020-01-06 16:40:15', 'Belum Lunas', 'Pengambilan Seragam', '205000', '205000', '1', 'XL', '20000', 'SERAGAM/PB/202001/00017')
ERROR - 2020-01-06 16:40:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:40:15 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: INSERT INTO "ap_pembayaran_seragam" ("driver_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "created_by") VALUES ('170', '2020-01-06 16:40:15', 'Paid', 'Create Hutang Seragam', 0, '205000', '205000', '1', '127')
ERROR - 2020-01-06 16:40:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:40:15 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-01-06 16:40:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;trx_pengambilan_seragam_unique&quot;
DETAIL:  Key (driver_id)=(170) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:40:16 --> Query error: ERROR:  duplicate key value violates unique constraint "trx_pengambilan_seragam_unique"
DETAIL:  Key (driver_id)=(170) already exists. - Invalid query: INSERT INTO "trx_pengambilan_seragam" ("driver_id", "created", "status", "keterangan", "harga_satuan", "total_tagihan", "jumlah_item", "ukuran", "nominal_cicilan", "doc_number") VALUES ('170', '2020-01-06 16:40:16', 'Belum Lunas', 'Pengambilan Seragam', '205000', '205000', '1', 'XL', '20000', 'SERAGAM/PB/202001/00018')
ERROR - 2020-01-06 16:40:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:40:16 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: INSERT INTO "ap_pembayaran_seragam" ("driver_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "created_by") VALUES ('170', '2020-01-06 16:40:16', 'Paid', 'Create Hutang Seragam', 0, '205000', '205000', '1', '127')
ERROR - 2020-01-06 16:40:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:40:16 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-01-06 16:40:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 16:40:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 16:42:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;trx_pengambilan_seragam_unique&quot;
DETAIL:  Key (driver_id)=(170) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:42:51 --> Query error: ERROR:  duplicate key value violates unique constraint "trx_pengambilan_seragam_unique"
DETAIL:  Key (driver_id)=(170) already exists. - Invalid query: INSERT INTO "trx_pengambilan_seragam" ("driver_id", "created", "status", "keterangan", "harga_satuan", "total_tagihan", "jumlah_item", "ukuran", "nominal_cicilan", "doc_number") VALUES ('170', '2020-01-06 16:42:51', 'Belum Lunas', 'Pengambilan Seragam', '205000', '205000', '1', 'XL', '20000', 'SERAGAM/PB/202001/00019')
ERROR - 2020-01-06 16:42:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:42:51 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: INSERT INTO "ap_pembayaran_seragam" ("driver_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "created_by") VALUES ('170', '2020-01-06 16:42:51', 'Paid', 'Create Hutang Seragam', 0, '205000', '205000', '1', '127')
ERROR - 2020-01-06 16:42:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:42:51 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-01-06 16:44:16 --> 404 Page Not Found: Seragam/cetak
ERROR - 2020-01-06 16:47:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 16:50:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;trx_pengambilan_seragam_unique&quot;
DETAIL:  Key (driver_id)=(170) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:50:07 --> Query error: ERROR:  duplicate key value violates unique constraint "trx_pengambilan_seragam_unique"
DETAIL:  Key (driver_id)=(170) already exists. - Invalid query: INSERT INTO "trx_pengambilan_seragam" ("driver_id", "created", "status", "keterangan", "harga_satuan", "total_tagihan", "jumlah_item", "ukuran", "nominal_cicilan", "doc_number") VALUES ('170', '2020-01-06 16:50:07', 'Belum Lunas', 'Pengambilan Seragam', '205000', '205000', '1', 'XL', '20000', 'SERAGAM/PB/202001/00020')
ERROR - 2020-01-06 16:50:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:50:07 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: INSERT INTO "ap_pembayaran_seragam" ("driver_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "created_by") VALUES ('170', '2020-01-06 16:50:07', 'Paid', 'Create Hutang Seragam', 0, '205000', '205000', '1', '127')
ERROR - 2020-01-06 16:50:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 16:50:07 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-01-06 16:50:12 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-06 16:50:56 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-06 16:51:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 16:52:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 16:52:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 16:52:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 16:53:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 16:53:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 16:54:23 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-06 16:54:46 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 16:54:46 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 16:59:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 17:00:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 17:00:36 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-06 17:00:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 17:00:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 17:00:42 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-06 17:01:22 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-06 17:04:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 17:04:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 17:06:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 17:06:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 17:09:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 17:16:30 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-06 17:16:35 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-06 17:16:59 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-06 17:20:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 17:20:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 17:21:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 17:22:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 17:22:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 17:24:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 17:24:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 17:25:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 17:30:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 17:30:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 17:30:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 17:30:18 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-06 17:30:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 17:31:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 17:31:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 17:31:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 17:37:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 17:40:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 17:41:38 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 17:41:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 17:43:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 17:57:56 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-06 18:02:10 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 18:02:10 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 18:03:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 18:03:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 18:04:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 18:04:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 18:05:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 18:06:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 18:07:12 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 18:07:12 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 18:07:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 18:07:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 18:08:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 18:13:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 18:28:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;trx_pengambilan_seragam_unique&quot;
DETAIL:  Key (driver_id)=(170) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 18:28:09 --> Query error: ERROR:  duplicate key value violates unique constraint "trx_pengambilan_seragam_unique"
DETAIL:  Key (driver_id)=(170) already exists. - Invalid query: INSERT INTO "trx_pengambilan_seragam" ("driver_id", "created", "status", "keterangan", "harga_satuan", "total_tagihan", "jumlah_item", "ukuran", "nominal_cicilan", "doc_number") VALUES ('170', '2020-01-06 18:28:09', 'Belum Lunas', 'Pengambilan Seragam', '205000', '205000', '1', 'XL', '20000', 'SERAGAM/PB/202001/00023')
ERROR - 2020-01-06 18:28:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 18:28:09 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: INSERT INTO "ap_pembayaran_seragam" ("driver_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "created_by") VALUES ('170', '2020-01-06 18:28:09', 'Paid', 'Create Hutang Seragam', 0, '205000', '205000', '1', '127')
ERROR - 2020-01-06 18:28:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 18:28:09 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-01-06 18:28:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 18:28:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 18:29:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;trx_pengambilan_seragam_unique&quot;
DETAIL:  Key (driver_id)=(170) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 18:29:30 --> Query error: ERROR:  duplicate key value violates unique constraint "trx_pengambilan_seragam_unique"
DETAIL:  Key (driver_id)=(170) already exists. - Invalid query: INSERT INTO "trx_pengambilan_seragam" ("driver_id", "created", "status", "keterangan", "harga_satuan", "total_tagihan", "jumlah_item", "ukuran", "nominal_cicilan", "doc_number") VALUES ('170', '2020-01-06 18:29:30', 'Belum Lunas', 'Pengambilan Seragam', '205000', '205000', '1', 'XL', '20000', 'SERAGAM/PB/202001/00024')
ERROR - 2020-01-06 18:29:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 18:29:30 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: INSERT INTO "ap_pembayaran_seragam" ("driver_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "created_by") VALUES ('170', '2020-01-06 18:29:30', 'Paid', 'Create Hutang Seragam', 0, '205000', '205000', '1', '127')
ERROR - 2020-01-06 18:29:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 18:29:30 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-01-06 18:42:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;trx_pengambilan_seragam_unique&quot;
DETAIL:  Key (driver_id)=(170) already exists. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 18:42:38 --> Query error: ERROR:  duplicate key value violates unique constraint "trx_pengambilan_seragam_unique"
DETAIL:  Key (driver_id)=(170) already exists. - Invalid query: INSERT INTO "trx_pengambilan_seragam" ("driver_id", "created", "status", "keterangan", "harga_satuan", "total_tagihan", "jumlah_item", "ukuran", "nominal_cicilan", "doc_number") VALUES ('170', '2020-01-06 18:42:38', 'Belum Lunas', 'Pengambilan Seragam', '205000', '205000', '1', 'L', '20000', 'SERAGAM/PB/202001/00025')
ERROR - 2020-01-06 18:42:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 18:42:38 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: INSERT INTO "ap_pembayaran_seragam" ("driver_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "created_by") VALUES ('170', '2020-01-06 18:42:38', 'Paid', 'Create Hutang Seragam', 0, '205000', '205000', '1', '1')
ERROR - 2020-01-06 18:42:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 18:42:38 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-01-06 18:44:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 18:44:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 18:44:47 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-06 18:46:07 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-06 18:46:44 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-06 18:50:56 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 18:50:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 18:51:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 18:51:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 18:52:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 18:53:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 18:54:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 18:56:09 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-06 19:00:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 19:00:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 19:00:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 19:00:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 19:03:10 --> Severity: Notice --> Undefined index: muchtar_sumanjaya /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-06 19:06:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 19:07:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 19:13:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 19:13:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 19:13:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 19:14:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 19:14:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 19:20:55 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 19:20:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 19:24:23 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 19:24:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 19:28:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 19:33:48 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-06 19:36:39 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 19:36:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 19:37:22 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 19:38:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 19:38:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 19:39:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 19:50:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 19:52:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 19:56:12 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-06 19:57:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 19:58:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 19:58:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 19:58:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:01:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 20:01:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:02:03 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 20:02:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 20:02:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:03:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:03:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 20:04:15 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 20:08:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:09:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 20:09:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:10:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:10:43 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-06 20:10:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:11:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 20:11:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:13:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 20:13:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 20:16:19 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 20:16:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:17:48 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 20:17:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:18:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 20:18:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-06 20:19:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:19:04 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 20:20:04 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 20:20:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:21:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:34:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:36:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:36:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 20:37:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:37:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 20:37:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 20:41:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:43:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:44:34 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-06 20:45:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:45:10 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-06 20:45:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:45:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:46:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:46:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:47:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:50:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:52:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:52:29 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 20:52:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-06 20:52:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-06 20:53:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:53:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:54:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:56:00 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 20:56:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-06 20:56:19 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-06 20:56:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:56:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:56:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:56:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 20:57:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-06 20:57:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 21:05:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 21:13:14 --> 404 Page Not Found: Closing/build
ERROR - 2020-01-06 21:36:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-06 21:36:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-06 21:44:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 22:14:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-06 22:46:32 --> 404 Page Not Found: Spj/build
