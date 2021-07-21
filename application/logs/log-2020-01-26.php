<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-26 03:48:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 05:05:55 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 05:05:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 05:07:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 05:07:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 05:08:01 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 05:08:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 05:08:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 05:08:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 05:14:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 05:14:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 05:18:30 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 05:18:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 05:29:43 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 05:29:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 05:43:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 06:11:18 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 06:11:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 06:22:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 06:30:29 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-26 06:30:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 06:33:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 06:33:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 06:39:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 06:50:10 --> Severity: Notice --> Undefined index: ajat_sudrajat /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-26 06:53:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 06:55:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 07:11:39 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-26 07:12:32 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-26 07:16:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 07:16:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 07:16:14 --> 404 Page Not Found: Report/build
ERROR - 2020-01-26 07:16:42 --> 404 Page Not Found: Report/setoran
ERROR - 2020-01-26 07:16:53 --> 404 Page Not Found: Report/setoran
ERROR - 2020-01-26 07:17:02 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-26 07:17:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 07:17:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 07:17:28 --> 404 Page Not Found: Report/build
ERROR - 2020-01-26 07:27:56 --> Severity: Notice --> Undefined index: ajat_sudrajat /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-26 07:28:57 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-26 07:29:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-26 07:29:05 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-26 07:30:03 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 07:30:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 07:30:16 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-26 07:30:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 07:33:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-26 07:33:27 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-26 07:33:35 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-26 07:33:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-26 07:33:45 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-26 07:33:48 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-26 07:40:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 07:40:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 07:42:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 07:42:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 07:57:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 08:02:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 08:03:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 08:16:25 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-26 08:23:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2020-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-26 08:23:24 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2020-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2020-01-26 08:23:24', 'TTS-TIARA/BCG/20200126/7439', '0', '', '0', '0', '0', '0', '0', 0, 0, '', '', '', 'Paid', '0', '45', NULL, '5')
ERROR - 2020-01-26 08:23:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-26 08:23:24 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-01-26 08:23:34 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_setoran_spj_tiara(), called in /var/www/html/rental/application/controllers/Spj.php on line 479 and defined /var/www/html/rental/application/models/Spj_model.php 690
ERROR - 2020-01-26 08:23:34 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_setoran_spj_tiara(), called in /var/www/html/rental/application/controllers/Spj.php on line 479 and defined /var/www/html/rental/application/models/Spj_model.php 690
ERROR - 2020-01-26 08:23:34 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_setoran_spj_tiara(), called in /var/www/html/rental/application/controllers/Spj.php on line 479 and defined /var/www/html/rental/application/models/Spj_model.php 690
ERROR - 2020-01-26 08:23:34 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_setoran_spj_tiara(), called in /var/www/html/rental/application/controllers/Spj.php on line 479 and defined /var/www/html/rental/application/models/Spj_model.php 690
ERROR - 2020-01-26 08:23:34 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 691
ERROR - 2020-01-26 08:23:34 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 692
ERROR - 2020-01-26 08:23:34 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 709
ERROR - 2020-01-26 08:23:34 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 709
ERROR - 2020-01-26 08:23:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 16:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-26 08:23:34 --> Query error: ERROR:  syntax error at or near "and"
LINE 16:    where a.pool_id= and a.created>='1970-01-01 00:00:00' and...
                             ^ - Invalid query: select a.id, a.doc_number as setoran_no, a.total_tagihan, a.payment_total,a.created, 
			a.payment_via_tabungan, a.payment_via_charge_room, a.payment_via_edc, a.amount_kembalian, a.no_ct, 	
			a.no_charge_room, a.no_edc, a.denda, a.setoran_wajib, b.username, a.payment_via_cash, a.payment_via_ct,
			c.doc_number as spj_no, c.tipe_rental, c.jam_mulai_denda, c.created as spj_date, 
			d.name as pool_name,
			e.no_pintu, 
			f.kip_number, f.name as driver_name,
			g.updated_dt
			from trx_setoran a
			left join cac_user b on (a.creator_id = b.id) 
			left join trx_spj c on (a.spj_id = c.id)
			left join master_pool d on (a.pool_id = d.id)
			left join master_car e on (c.car_id = e.id)
			left join master_driver f on (c.driver_id = f.id) 
			left join checker_header g on (c.id = g.spj_id)
			where a.pool_id= and a.created>='1970-01-01 00:00:00' and a.created<='1970-01-01 23:59:59' and a.status in('')
			and e.unit_bisnis='TIARA'
			order by a.created desc;
ERROR - 2020-01-26 08:23:36 --> Severity: Warning --> Missing argument 1 for spj_model::get_data_for_index_setoran_spj_tiara(), called in /var/www/html/rental/application/controllers/Spj.php on line 479 and defined /var/www/html/rental/application/models/Spj_model.php 690
ERROR - 2020-01-26 08:23:36 --> Severity: Warning --> Missing argument 2 for spj_model::get_data_for_index_setoran_spj_tiara(), called in /var/www/html/rental/application/controllers/Spj.php on line 479 and defined /var/www/html/rental/application/models/Spj_model.php 690
ERROR - 2020-01-26 08:23:36 --> Severity: Warning --> Missing argument 3 for spj_model::get_data_for_index_setoran_spj_tiara(), called in /var/www/html/rental/application/controllers/Spj.php on line 479 and defined /var/www/html/rental/application/models/Spj_model.php 690
ERROR - 2020-01-26 08:23:36 --> Severity: Warning --> Missing argument 4 for spj_model::get_data_for_index_setoran_spj_tiara(), called in /var/www/html/rental/application/controllers/Spj.php on line 479 and defined /var/www/html/rental/application/models/Spj_model.php 690
ERROR - 2020-01-26 08:23:36 --> Severity: Notice --> Undefined variable: date /var/www/html/rental/application/models/Spj_model.php 691
ERROR - 2020-01-26 08:23:36 --> Severity: Notice --> Undefined variable: dateakhir /var/www/html/rental/application/models/Spj_model.php 692
ERROR - 2020-01-26 08:23:36 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/models/Spj_model.php 709
ERROR - 2020-01-26 08:23:36 --> Severity: Notice --> Undefined variable: id_lunas /var/www/html/rental/application/models/Spj_model.php 709
ERROR - 2020-01-26 08:23:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;and&quot;
LINE 16:    where a.pool_id= and a.created&gt;='1970-01-01 00:00:00' and...
                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-26 08:23:36 --> Query error: ERROR:  syntax error at or near "and"
LINE 16:    where a.pool_id= and a.created>='1970-01-01 00:00:00' and...
                             ^ - Invalid query: select a.id, a.doc_number as setoran_no, a.total_tagihan, a.payment_total,a.created, 
			a.payment_via_tabungan, a.payment_via_charge_room, a.payment_via_edc, a.amount_kembalian, a.no_ct, 	
			a.no_charge_room, a.no_edc, a.denda, a.setoran_wajib, b.username, a.payment_via_cash, a.payment_via_ct,
			c.doc_number as spj_no, c.tipe_rental, c.jam_mulai_denda, c.created as spj_date, 
			d.name as pool_name,
			e.no_pintu, 
			f.kip_number, f.name as driver_name,
			g.updated_dt
			from trx_setoran a
			left join cac_user b on (a.creator_id = b.id) 
			left join trx_spj c on (a.spj_id = c.id)
			left join master_pool d on (a.pool_id = d.id)
			left join master_car e on (c.car_id = e.id)
			left join master_driver f on (c.driver_id = f.id) 
			left join checker_header g on (c.id = g.spj_id)
			where a.pool_id= and a.created>='1970-01-01 00:00:00' and a.created<='1970-01-01 23:59:59' and a.status in('')
			and e.unit_bisnis='TIARA'
			order by a.created desc;
ERROR - 2020-01-26 08:28:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 08:29:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 08:29:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 08:30:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 08:48:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 08:48:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 09:33:44 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 09:33:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 09:35:46 --> 404 Page Not Found: Assets/css
ERROR - 2020-01-26 09:35:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 09:37:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 09:38:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 10:05:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-26 10:05:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-26 10:10:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 10:24:42 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 10:24:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 10:26:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 10:39:23 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 10:39:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 10:40:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 10:40:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 10:50:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 10:50:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 10:50:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 10:57:57 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 10:57:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 11:39:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 11:46:41 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 11:46:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 11:47:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 11:53:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 11:58:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 12:05:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 12:05:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 12:06:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 12:07:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 12:07:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 12:08:46 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-26 12:18:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 12:20:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 12:21:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 12:23:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 12:23:42 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 12:23:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 12:26:29 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-26 12:26:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-26 12:26:57 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-26 12:28:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 12:28:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 12:32:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 12:33:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 12:35:46 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 12:35:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 12:37:48 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 12:37:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 12:46:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-26 12:46:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-26 12:50:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 13:15:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 13:15:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 13:21:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 13:28:55 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-26 13:29:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 13:31:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 13:36:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-26 13:36:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-26 13:36:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 13:37:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 13:37:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 13:58:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-26 13:58:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-26 14:01:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 14:10:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 14:10:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 14:10:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 14:13:53 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 14:13:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 14:13:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 14:13:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 14:15:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 14:16:45 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-26 14:17:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 14:18:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 14:19:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 14:23:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 14:23:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 14:24:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 14:35:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 14:35:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 14:35:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 14:42:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 14:52:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:03:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:08:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:35:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:35:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 15:35:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:36:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 15:36:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:38:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:43:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:48:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:49:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:50:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 15:50:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:51:51 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 15:51:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:52:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:54:01 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 15:54:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:54:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:55:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:55:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:56:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:56:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:58:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 15:59:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 15:59:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 16:00:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 16:00:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 16:03:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 16:03:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 16:03:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 16:04:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 16:06:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 16:06:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 16:19:19 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 16:19:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 16:20:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 16:20:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 16:22:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 16:24:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 16:26:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 16:28:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 16:32:43 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-26 16:33:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 16:34:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 16:34:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 16:34:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 16:36:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 16:36:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 16:39:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 16:39:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 16:41:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-26 16:41:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-26 16:47:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 17:04:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 17:04:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 17:08:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 17:18:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 17:19:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 17:19:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 17:23:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 17:33:27 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 17:33:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 17:35:54 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 17:35:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 17:35:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 17:37:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 17:40:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 17:45:07 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-26 17:52:23 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 17:52:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 17:54:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 17:56:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 17:57:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 18:03:45 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 18:03:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 18:12:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 18:12:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 18:16:34 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 18:16:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 18:17:53 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-26 18:18:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 18:20:02 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 18:20:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 18:25:14 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-26 18:32:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 18:34:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 18:41:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 18:41:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 18:43:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-26 18:43:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-26 18:43:52 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-26 18:44:01 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-26 18:51:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 18:51:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 18:51:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 18:52:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 18:52:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 18:56:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 18:57:41 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 18:57:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:05:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:07:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:09:27 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-26 19:09:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:09:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 19:09:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:11:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:13:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:16:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:18:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-26 19:21:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:22:14 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 19:22:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:24:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 19:24:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:26:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:27:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:27:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:27:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 19:27:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:28:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 19:28:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:33:36 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-26 19:36:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:38:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:41:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 19:59:41 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 19:59:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:02:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:10:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:13:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 20:13:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:13:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 20:13:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:14:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 20:14:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:15:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:24:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-01-26 20:24:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:28:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:29:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:30:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:31:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:31:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:32:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-26 20:32:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-26 20:34:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:43:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:45:17 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-26 20:46:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:52:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:53:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-26 20:53:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 20:58:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 21:01:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 21:05:57 --> 404 Page Not Found: Closing/build
ERROR - 2020-01-26 21:20:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-26 21:20:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-26 22:18:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 22:18:14 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-26 22:18:24 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-26 22:18:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-26 22:18:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-26 22:19:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-26 22:20:23 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-26 22:36:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-26 22:36:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-26 22:40:00 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-26 22:41:11 --> 404 Page Not Found: Spj/build
