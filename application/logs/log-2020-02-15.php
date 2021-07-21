<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-15 00:04:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 00:12:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 00:33:43 --> 404 Page Not Found: Report/build
ERROR - 2020-02-15 01:11:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 01:28:26 --> Severity: Notice --> Undefined index: tukiyo /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-15 01:33:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 03:39:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 04:42:29 --> Severity: Notice --> Undefined index: ajat_sudrajat /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-15 05:03:38 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 05:03:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:04:30 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 05:04:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:05:36 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 05:05:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:06:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 05:06:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:07:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 05:07:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:07:26 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-15 05:07:26 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-15 05:08:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 05:08:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:10:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:10:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:11:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:12:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:13:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:14:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:14:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:16:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:18:02 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 05:18:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:19:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:19:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:20:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:22:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:46:54 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-15 05:47:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:52:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 05:52:46 --> Severity: Notice --> Undefined index: ajat_sudrajat /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-15 06:34:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 06:37:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 06:41:59 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-15 06:42:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-15 06:42:26 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-15 06:44:51 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 06:44:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 07:02:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 07:42:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-15 07:42:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-15 08:06:08 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-15 08:06:08 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-15 08:06:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 08:06:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 08:06:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 08:07:06 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-15 08:07:06 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-15 08:08:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 08:15:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 08:20:39 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 08:20:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 08:44:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-15 08:44:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-15 08:45:48 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 08:45:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 08:49:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-15 08:49:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-15 08:51:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 08:56:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:01:10 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-02-15 09:08:34 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-15 09:08:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-15 09:08:41 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-15 09:10:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:18:43 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-15 09:25:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:27:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:29:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:30:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:32:11 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-15 09:32:11 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-15 09:32:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:32:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:33:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:35:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:37:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:39:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:40:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:40:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:41:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:41:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:41:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:43:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:45:01 --> Severity: Notice --> Undefined index: hengki_firmansyah /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-15 09:45:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:45:45 --> Severity: Notice --> Undefined index: wahyu_prasetya /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-15 09:46:57 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 09:46:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:48:35 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-15 09:48:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-15 09:48:42 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-15 09:48:52 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-15 09:48:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-15 09:48:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-15 09:48:59 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 09:49:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:49:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:49:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:50:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 09:50:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:50:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 09:50:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 09:57:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-15 09:57:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-15 09:59:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-15 09:59:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-15 09:59:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 10:00:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 10:02:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 10:02:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 10:03:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 10:04:19 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 10:04:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 10:06:40 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-15 10:14:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 10:16:37 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-15 10:21:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 10:21:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 10:32:36 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 10:32:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 10:35:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-15 10:35:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-15 10:52:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-15 10:52:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-15 10:57:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 11:17:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 11:18:40 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-15 11:21:43 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 11:21:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 11:23:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 11:23:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 11:23:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 11:24:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 11:24:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 11:27:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 11:27:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-02-15 11:43:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 11:44:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 11:44:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 11:44:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 11:52:44 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-15 11:53:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 11:53:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 11:53:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 11:58:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 12:02:42 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-15 12:04:09 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 12:04:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 12:17:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 12:19:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 12:24:33 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 12:24:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 12:27:41 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 12:27:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 12:27:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 12:35:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...jam_mulai_denda&quot;, &quot;total_tagihan&quot;) VALUES ('109', '', '1', '...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-15 12:35:42 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...jam_mulai_denda", "total_tagihan") VALUES ('109', '', '1', '...
                                                             ^ - Invalid query: INSERT INTO "trx_spj" ("driver_id", "car_id", "pool_id", "created", "creator_id", "doc_number", "keterangan", "modified", "status", "tipe_rental", "tanggal_spj", "denda_perjam", "jam_mulai_denda", "total_tagihan") VALUES ('109', '', '1', '2020-02-15 12:35:42', '17', 'SPJ/PB/20200215/8802', 'Create SPJ by Pool', '2020-02-15 12:35:42', 'Active', '24 Jam', '2020-02-15', 15000, '2020-02-16 12:35:42', 0)
ERROR - 2020-02-15 12:35:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-15 12:35:42 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: update master_driver set hari_kerja=hari_kerja+1 where id=109;
ERROR - 2020-02-15 12:35:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 12:36:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 12:41:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 12:54:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 12:54:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 12:55:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 12:55:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 12:56:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 13:02:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 13:03:13 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 13:03:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 13:07:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 13:31:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 13:36:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-15 13:36:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-15 13:47:39 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-15 13:51:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 13:51:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 13:51:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 13:52:54 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 13:52:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 13:54:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 14:08:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 14:19:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 14:37:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 14:46:01 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 14:46:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 15:21:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 15:25:30 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 15:25:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 15:28:43 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-15 15:28:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-15 15:28:50 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-15 15:29:54 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 15:29:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 15:30:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 15:31:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 15:31:57 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-15 15:32:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-15 15:32:03 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-02-15 15:36:12 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-15 15:52:56 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-15 15:53:13 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 15:53:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 15:57:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 16:02:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 16:10:00 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-15 16:11:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 16:13:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 16:23:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-15 16:23:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-15 16:31:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 16:40:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 16:40:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 16:41:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 16:43:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 16:43:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:00:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 17:00:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:08:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:13:27 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 17:13:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:14:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:16:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:17:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 17:17:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:20:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:24:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:24:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:25:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 17:25:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:25:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:27:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 17:27:01 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 17:27:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:27:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:29:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 17:29:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:35:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:43:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:44:34 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-02-15 17:45:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 17:45:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:46:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 17:46:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:49:39 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 17:49:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 17:50:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 18:13:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 18:14:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 18:14:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 18:14:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 18:18:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 18:20:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-15 18:20:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-15 18:31:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 18:37:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 18:52:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 18:53:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 18:53:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 18:58:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 18:58:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 18:58:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 19:03:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 19:05:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 19:07:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 19:07:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 19:08:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 19:08:42 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 19:08:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 19:11:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 19:16:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 19:23:40 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-15 19:25:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 19:34:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 19:35:55 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-15 19:36:10 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-02-15 19:40:32 --> 404 Page Not Found: Driver/build
ERROR - 2020-02-15 19:45:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 19:51:45 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-02-15 19:51:48 --> Severity: Notice --> Undefined index: hengki_firmansyah /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-15 19:52:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 19:52:23 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 19:52:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 19:53:07 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 19:53:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 19:53:28 --> Severity: Notice --> Undefined index: wahyu_prasetya /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-15 19:57:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 19:57:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 19:57:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 19:59:11 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 19:59:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 20:05:32 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-02-15 20:05:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 20:06:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 20:09:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 20:15:59 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-15 20:15:59 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-15 20:20:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 20:33:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 20:35:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 20:36:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 20:36:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 20:39:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 20:45:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 20:52:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 20:54:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-02-15 20:54:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 20:56:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 20:58:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 20:59:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-15 20:59:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-15 21:07:12 --> 404 Page Not Found: Seragam/build
ERROR - 2020-02-15 21:10:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 21:25:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 21:28:46 --> 404 Page Not Found: Report/setoran
ERROR - 2020-02-15 21:29:15 --> 404 Page Not Found: Closing/build
ERROR - 2020-02-15 21:34:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 21:36:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-02-15 21:47:10 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-02-15 21:47:10 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-02-15 22:43:12 --> Severity: Notice --> Undefined index: ajat_sudrajat /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-02-15 23:17:54 --> 404 Page Not Found: Spj/build
