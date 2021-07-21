<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-08 00:29:15 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-08 01:12:08 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-08 01:12:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-08 01:12:11 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-08 05:31:34 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-08 05:31:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 05:33:27 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-08 05:33:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 05:34:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 05:35:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 05:36:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 05:36:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 05:38:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 07:11:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 07:32:58 --> Severity: Notice --> Undefined index: ajat_sudrajat /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-08 07:35:05 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-08 07:35:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 07:36:02 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-08 07:36:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 07:38:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-08 07:38:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 07:42:50 --> 404 Page Not Found: Report/build
ERROR - 2020-01-08 07:42:52 --> 404 Page Not Found: Report/build
ERROR - 2020-01-08 07:42:53 --> 404 Page Not Found: Report/setoran
ERROR - 2020-01-08 07:43:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-08 08:15:00 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-08 08:22:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 08:23:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 08:23:21 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 08:23:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 08:25:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 08:30:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 08:30:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 08:31:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 08:33:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 08:37:52 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-08 08:39:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 08:41:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 08:43:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 08:45:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 08:56:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 08:57:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 08:58:03 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-08 09:00:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 09:00:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 09:04:32 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-08 09:04:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 09:06:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 09:08:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 09:08:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 09:08:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 09:09:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 09:17:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 09:22:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 09:24:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 09:24:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 09:26:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 09:28:23 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-08 09:28:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-08 09:28:39 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-08 09:30:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 09:37:40 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-08 09:37:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 09:59:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 10:00:00 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-08 10:01:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-08 10:01:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-08 10:02:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 10:10:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-08 10:10:52 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-08 10:10:54 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-08 10:14:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-08 10:17:59 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-08 10:18:49 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-08 10:20:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-08 10:20:33 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-08 10:26:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type timestamp: &quot;1577676379&quot;
LINE 10: ...l_id=1 and a.created&gt;='2019-12-25' and a.created&lt;='157767637...
                                                              ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-08 10:26:19 --> Query error: ERROR:  invalid input syntax for type timestamp: "1577676379"
LINE 10: ...l_id=1 and a.created>='2019-12-25' and a.created<='157767637...
                                                              ^ - Invalid query: select a.id,doc_number, a.status, a.created, a.tipe_rental, a.jam_mulai_denda,
			b.no_pintu, c.name as pool_name,
			d.kip_number,d.name as driver_name, d.hari_kerja,
			e.username
			from trx_spj a
			left join master_car b on (a.car_id = b.id)
			left join master_pool c on (a.pool_id = c.id)
			left join master_driver d on (a.driver_id = d.id)
			left join cac_user e on (a.creator_id =e.id)
			where a.pool_id=1 and a.created>='2019-12-25' and a.created<='1577676379' and a.status in('Active','Drive','Payment','Paid')
			and b.unit_bisnis in ('EXPRESS','EAGLE')
			order by a.created desc;
ERROR - 2020-01-08 10:30:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 10:32:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 10:38:03 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-08 10:38:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 10:42:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 10:45:34 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-08 10:45:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 10:46:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 10:46:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 10:49:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 10:50:26 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-08 10:50:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 10:51:05 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 445 and defined /var/www/html/rental/application/models/Spj_model.php 637
ERROR - 2020-01-08 10:51:05 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 445 and defined /var/www/html/rental/application/models/Spj_model.php 637
ERROR - 2020-01-08 10:51:05 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 445 and defined /var/www/html/rental/application/models/Spj_model.php 637
ERROR - 2020-01-08 10:51:05 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_spj(), called in /var/www/html/rental/application/controllers/Spj.php on line 445 and defined /var/www/html/rental/application/models/Spj_model.php 637
ERROR - 2020-01-08 10:51:05 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 638
ERROR - 2020-01-08 10:51:05 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 639
ERROR - 2020-01-08 10:51:05 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 651
ERROR - 2020-01-08 10:51:05 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 651
ERROR - 2020-01-08 10:51:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 10:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-08 10:51:05 --> Query error: ERROR:  syntax error at or near "and"
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
ERROR - 2020-01-08 11:00:03 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-08 11:00:08 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-08 11:00:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 11:15:25 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-08 11:16:29 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-08 11:16:51 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 11:16:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 11:17:20 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-08 11:19:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 11:25:05 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 11:25:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 11:28:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 11:28:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 11:35:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 11:35:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 11:35:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 11:41:45 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-08 11:49:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 11:49:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 11:52:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 11:52:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-08 11:57:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-08 11:57:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-08 11:58:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-08 12:05:56 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-08 12:13:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 12:23:37 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 12:23:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 12:41:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 12:48:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 12:48:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 12:55:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 12:58:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 12:58:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:01:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:05:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:06:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 13:06:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:07:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 13:07:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:08:12 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 13:08:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:11:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:14:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:17:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:21:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:22:00 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 13:22:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:22:35 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 13:22:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:25:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 13:25:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:30:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:33:37 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-08 13:34:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:41:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:47:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:51:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 13:52:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 14:04:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 14:05:28 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-08 14:06:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 14:06:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 14:06:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 14:10:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 14:20:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 14:22:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 14:23:18 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 14:23:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 14:24:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 14:35:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 14:47:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 14:50:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 14:53:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 14:53:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 14:56:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 15:11:28 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 15:11:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 15:25:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-08 15:27:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 15:33:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 15:34:48 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-08 15:35:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 15:38:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 15:39:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 15:46:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 15:46:37 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 15:46:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 15:51:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 15:51:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 15:51:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 15:54:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 15:57:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 16:05:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 16:06:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 16:06:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 16:07:30 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 16:07:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 16:22:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 16:22:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 16:34:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 16:50:00 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 16:50:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 16:54:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 16:54:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 17:01:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 17:01:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 17:14:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 17:14:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 17:14:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 17:21:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 17:27:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 17:37:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 17:37:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 17:43:30 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 17:43:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 17:46:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 17:47:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 17:47:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 17:53:50 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-08 17:53:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-08 17:53:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-08 17:58:06 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 17:58:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:01:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:08:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:14:01 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-08 18:22:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:29:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:30:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-08 18:30:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-08 18:32:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-08 18:32:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-08 18:33:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:34:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:34:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:37:23 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 18:37:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:39:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 18:39:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:40:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 18:40:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:40:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:40:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 18:41:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 18:41:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 18:41:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:42:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:44:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:44:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:44:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 18:44:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 18:44:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:44:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:46:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:46:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:47:07 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 18:47:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:47:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 18:47:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:48:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:48:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:49:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 18:49:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:49:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:50:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 18:50:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:50:50 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 18:50:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:50:56 --> Severity: Notice --> Undefined index: hengki_firmansyah /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-08 18:51:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:52:03 --> Severity: Notice --> Undefined index: wahyu_prasetya /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-08 18:52:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 18:52:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:53:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:56:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 18:59:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 19:07:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 19:12:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 19:16:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 19:16:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 19:17:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 19:17:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 19:29:05 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 19:29:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 19:35:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 19:47:52 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 19:47:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 19:49:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 19:53:50 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 19:53:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 19:54:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 19:55:07 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-08 19:56:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 19:56:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 19:56:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 19:56:50 --> 404 Page Not Found: Report/build
ERROR - 2020-01-08 19:57:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 19:57:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 19:57:13 --> 404 Page Not Found: Report/setoran
ERROR - 2020-01-08 19:57:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 19:58:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:13:09 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 20:13:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:13:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-08 20:13:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-08 20:13:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:14:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 20:14:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:17:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:20:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:21:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:22:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:24:57 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-08 20:28:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:28:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:29:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:31:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:33:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:34:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:34:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 608
ERROR - 2020-01-08 20:34:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:34:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:35:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:37:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:38:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 20:38:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:39:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 20:39:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:39:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 20:40:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:40:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:47:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:48:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:48:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:49:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 20:49:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:54:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 20:59:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-08 20:59:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 21:21:38 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-08 21:33:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 21:43:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-08 21:43:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-08 21:43:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-08 22:27:12 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-08 23:14:32 --> 404 Page Not Found: Closing/build
ERROR - 2020-01-08 23:33:19 --> 404 Page Not Found: Spj/build
