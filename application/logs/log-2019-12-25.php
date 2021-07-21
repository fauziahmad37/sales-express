<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-25 00:27:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 02:14:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 02:15:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 02:23:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-25 02:23:51 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-25 02:36:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 02:36:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 02:36:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 04:33:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 04:33:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 04:34:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 04:43:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 04:43:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 04:44:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 04:44:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 04:56:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 04:58:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 04:59:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 05:00:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 05:00:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 05:01:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 05:01:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 05:01:56 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 05:01:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 05:02:14 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 05:02:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 05:02:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 05:03:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 05:03:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 05:04:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 05:04:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 05:04:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 05:04:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 05:05:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 05:05:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 05:05:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 05:07:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 05:09:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 05:09:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 05:19:39 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 05:19:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 05:28:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 05:28:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 05:29:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 05:37:44 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 05:37:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 06:06:59 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 06:07:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 06:26:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 06:26:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 06:34:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 06:35:14 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 06:35:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 06:37:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 06:48:06 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 06:48:06 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 06:50:51 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 06:50:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 06:56:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 06:56:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 07:00:02 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 07:00:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 07:01:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 07:10:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 07:10:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 07:14:11 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 07:14:11 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 07:18:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 07:31:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 07:31:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 07:31:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 08:09:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 08:10:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 08:10:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 08:13:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 08:18:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 08:18:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 08:19:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 08:19:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 08:19:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 08:20:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 08:20:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 08:20:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 08:20:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 08:24:02 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 08:24:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 08:32:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-25 08:32:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 08:35:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 08:35:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 08:36:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 08:40:25 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 08:40:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 08:40:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 08:40:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 08:41:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 08:41:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 08:41:48 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 08:41:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 08:58:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...jam_mulai_denda&quot;, &quot;total_tagihan&quot;) VALUES ('167', '', '1', '...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-25 08:58:58 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...jam_mulai_denda", "total_tagihan") VALUES ('167', '', '1', '...
                                                             ^ - Invalid query: INSERT INTO "trx_spj" ("driver_id", "car_id", "pool_id", "created", "creator_id", "doc_number", "keterangan", "modified", "status", "tipe_rental", "tanggal_spj", "denda_perjam", "jam_mulai_denda", "total_tagihan") VALUES ('167', '', '1', '2019-12-25 08:58:58', '18', 'SPJ/PB/20191225/5457', 'Create SPJ by Pool', '2019-12-25 08:58:58', 'Active', '24 Jam', '2019-12-25', 15000, '2019-12-26 08:58:58', 0)
ERROR - 2019-12-25 08:58:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-25 08:58:58 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: update master_driver set hari_kerja=hari_kerja+1 where id=167;
ERROR - 2019-12-25 08:58:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 08:59:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 09:04:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 09:11:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 09:11:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 09:12:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 09:18:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 09:18:33 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-25 09:18:45 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-25 09:19:01 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-25 09:22:21 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-25 09:22:43 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 09:22:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 09:25:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 09:25:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 09:33:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 09:37:14 --> Severity: Notice --> Undefined index: very /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-12-25 09:51:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 09:51:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 10:00:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 10:01:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 10:10:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 10:42:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 10:43:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 10:43:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 10:44:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 11:12:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 11:14:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 11:19:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...jam_mulai_denda&quot;, &quot;total_tagihan&quot;) VALUES ('118', '', '1', '...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-25 11:19:28 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...jam_mulai_denda", "total_tagihan") VALUES ('118', '', '1', '...
                                                             ^ - Invalid query: INSERT INTO "trx_spj" ("driver_id", "car_id", "pool_id", "created", "creator_id", "doc_number", "keterangan", "modified", "status", "tipe_rental", "tanggal_spj", "denda_perjam", "jam_mulai_denda", "total_tagihan") VALUES ('118', '', '1', '2019-12-25 11:19:28', '18', 'SPJ/PB/20191225/5464', 'Create SPJ by Pool', '2019-12-25 11:19:28', 'Active', '24 Jam', '2019-12-25', 15000, '2019-12-26 11:19:28', 0)
ERROR - 2019-12-25 11:19:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-25 11:19:28 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: update master_driver set hari_kerja=hari_kerja+1 where id=118;
ERROR - 2019-12-25 11:19:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 11:20:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 11:22:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 11:45:07 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 11:45:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 11:49:13 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 11:49:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 11:54:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 11:54:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 12:07:04 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-25 12:18:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 12:27:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 12:29:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 12:39:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 12:40:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 12:44:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 12:45:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 12:51:00 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 12:51:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 13:00:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-25 13:00:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 13:02:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 13:19:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 13:19:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 13:24:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 13:24:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 13:24:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 13:25:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 13:25:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 13:29:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 13:29:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 13:36:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 13:46:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 13:49:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 13:49:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 13:49:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 13:59:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 13:59:58 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-25 14:00:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 14:00:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 14:12:15 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 14:12:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 14:16:03 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 14:16:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 14:17:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 14:21:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 14:21:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 14:21:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 14:22:09 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 14:22:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 14:23:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 14:29:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 14:29:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 14:33:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 14:42:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 14:42:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 14:49:21 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 14:49:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 14:53:38 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 14:53:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 14:55:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 14:59:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 15:09:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 15:11:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 15:12:11 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 15:12:11 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 15:15:01 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-25 15:20:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 15:21:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 15:21:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 15:26:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 15:36:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 15:36:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 15:38:01 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 15:38:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 15:45:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 15:48:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 15:48:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 15:49:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 15:49:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 15:49:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 15:54:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 15:55:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 15:55:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 16:09:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 16:09:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 16:10:45 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 16:10:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 16:13:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 16:16:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 16:16:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 16:25:53 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 16:25:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:02:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:07:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 17:07:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 17:10:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:11:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:11:17 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 17:11:17 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 17:14:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:15:32 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-25 17:15:53 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 17:15:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:16:12 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 17:16:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:16:51 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 17:16:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:17:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:18:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 17:18:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:25:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:25:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:26:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:27:05 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-25 17:27:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:29:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:30:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:33:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:34:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 17:34:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:37:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:37:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:39:06 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 17:39:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:40:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:40:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 17:40:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:42:27 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-25 17:45:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:50:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:56:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:58:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:58:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 17:58:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 17:59:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 18:00:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 18:00:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 18:01:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 18:01:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 18:02:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 18:08:21 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 18:08:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 18:19:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 18:21:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 18:21:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 18:42:31 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-25 18:46:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 18:57:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 18:57:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 18:57:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 18:58:13 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 18:58:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 19:04:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 19:09:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 19:09:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 19:14:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 19:21:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 19:22:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 19:22:55 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 19:22:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 19:36:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 19:36:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 19:36:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 19:37:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-25 19:37:04 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-25 19:37:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 19:37:23 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-25 19:37:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 19:38:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 19:38:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 19:38:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 19:45:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...jam_mulai_denda&quot;, &quot;total_tagihan&quot;) VALUES ('100', '', '1', '...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-25 19:45:36 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...jam_mulai_denda", "total_tagihan") VALUES ('100', '', '1', '...
                                                             ^ - Invalid query: INSERT INTO "trx_spj" ("driver_id", "car_id", "pool_id", "created", "creator_id", "doc_number", "keterangan", "modified", "status", "tipe_rental", "tanggal_spj", "denda_perjam", "jam_mulai_denda", "total_tagihan") VALUES ('100', '', '1', '2019-12-25 19:45:36', '17', 'SPJ/PB/20191225/5497', 'Create SPJ by Pool', '2019-12-25 19:45:36', 'Active', '24 Jam', '2019-12-25', 15000, '2019-12-26 19:45:36', 0)
ERROR - 2019-12-25 19:45:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-25 19:45:36 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: update master_driver set hari_kerja=hari_kerja+1 where id=100;
ERROR - 2019-12-25 19:45:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 19:48:43 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 19:48:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 19:49:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 19:54:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 19:54:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 19:54:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 19:55:46 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 19:55:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 19:56:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 20:00:25 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 20:00:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 20:05:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 20:05:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 20:06:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 20:07:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 20:14:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 20:17:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 20:17:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 20:17:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 20:18:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 20:18:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 20:21:54 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 611
ERROR - 2019-12-25 20:21:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 20:22:18 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-25 20:22:53 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 20:22:53 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 20:26:50 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-25 20:26:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 20:26:57 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-25 20:27:06 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-25 20:27:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 20:27:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 20:27:17 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-25 20:27:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-25 20:27:29 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-25 20:27:39 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-25 20:27:50 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-25 20:27:58 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-25 20:28:14 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-25 20:28:24 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-25 20:28:32 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-25 20:28:40 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-25 20:28:48 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-25 20:28:57 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-25 20:29:01 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-25 20:29:14 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-25 20:29:22 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-25 20:42:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 20:42:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 20:43:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 20:47:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 20:47:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 20:48:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-25 20:48:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 20:49:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 20:49:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 20:49:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 20:56:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 21:01:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 21:01:54 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-25 21:09:57 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-25 21:10:19 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-25 21:10:49 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-25 21:14:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 21:17:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 21:18:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 21:18:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 21:30:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 21:30:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 21:58:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 21:59:05 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 21:59:05 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 21:59:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 22:00:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 22:02:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-25 22:02:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-25 23:00:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 23:31:18 --> 404 Page Not Found: Closing/build
ERROR - 2019-12-25 23:44:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-25 23:44:53 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-25 23:44:56 --> 404 Page Not Found: Assets/css
