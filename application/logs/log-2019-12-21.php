<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-21 00:06:47 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-21 00:08:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 02:01:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 03:04:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 04:19:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 05:08:41 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-12-21 05:11:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 05:15:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 05:15:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 05:16:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 05:17:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 05:51:48 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-21 05:51:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-21 05:51:51 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-12-21 06:02:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 06:05:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 06:05:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 06:13:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 06:16:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...jam_mulai_denda&quot;, &quot;total_tagihan&quot;) VALUES ('172', '', '1', '...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-21 06:16:07 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...jam_mulai_denda", "total_tagihan") VALUES ('172', '', '1', '...
                                                             ^ - Invalid query: INSERT INTO "trx_spj" ("driver_id", "car_id", "pool_id", "created", "creator_id", "doc_number", "keterangan", "modified", "status", "tipe_rental", "tanggal_spj", "denda_perjam", "jam_mulai_denda", "total_tagihan") VALUES ('172', '', '1', '2019-12-21 06:16:07', '50', 'SPJ/PB/20191221/5198', 'Create SPJ by Pool', '2019-12-21 06:16:07', 'Active', '24 Jam', '2019-12-21', 15000, '2019-12-22 06:16:07', 0)
ERROR - 2019-12-21 06:16:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-21 06:16:07 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: update master_driver set hari_kerja=hari_kerja+1 where id=172;
ERROR - 2019-12-21 06:16:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 06:19:34 --> Severity: Notice --> Undefined index: choiruman /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-12-21 06:24:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 06:26:32 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-12-21 06:27:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 06:33:48 --> Severity: Notice --> Undefined index: choiruman /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-12-21 06:37:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 06:38:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 06:40:25 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 06:40:32 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 06:40:34 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 06:40:36 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 06:42:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 06:44:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 06:53:13 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 06:59:39 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-21 06:59:39 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 07:00:01 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 07:00:31 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-21 07:00:31 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 07:00:49 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 07:01:47 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 07:19:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 07:26:50 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 07:49:05 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 07:49:24 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 07:54:42 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 08:46:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 08:51:31 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-21 09:00:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 09:04:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 09:04:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 09:15:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 09:17:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 09:20:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 09:28:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 09:28:42 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 09:28:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 09:31:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 09:34:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 09:40:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 09:42:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 09:42:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 09:48:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 09:52:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 09:52:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 09:53:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 09:53:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 09:57:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 09:58:30 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 09:58:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 10:00:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 10:00:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 10:01:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 10:13:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 10:13:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 10:14:51 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 10:14:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 10:15:21 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-21 10:16:12 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 10:16:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 10:17:12 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 10:17:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 10:29:59 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 10:29:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 10:36:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 10:36:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 10:48:23 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 10:48:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 10:56:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 11:32:57 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 11:32:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 12:04:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-21 12:04:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-21 12:04:44 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-21 12:09:57 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-21 12:11:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 12:11:27 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 12:11:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 12:12:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 12:28:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 12:28:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 12:43:13 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 12:43:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 12:43:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 12:43:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 12:48:56 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-21 12:49:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-21 12:49:07 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-21 12:57:58 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 12:57:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 13:04:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 13:04:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 13:04:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 13:08:30 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 13:08:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 13:18:57 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 13:18:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 13:18:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 13:35:22 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-21 13:35:41 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 13:35:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 13:40:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 14:00:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 14:01:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 14:03:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-21 14:03:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 14:04:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-21 14:04:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-21 14:04:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-21 14:04:27 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-21 14:04:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-21 14:04:37 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-21 14:10:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-21 14:10:22 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-12-21 14:20:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 14:24:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 14:29:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 14:41:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-21 14:41:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-21 14:41:44 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-21 14:47:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 14:53:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 14:54:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 14:54:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 14:58:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:00:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 15:00:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 15:00:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:01:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:01:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 15:01:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:13:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:18:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:29:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:32:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 15:32:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:33:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:38:12 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 15:38:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:38:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:41:53 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 15:41:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:49:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 15:49:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:51:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 15:51:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:51:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:53:48 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 15:53:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:54:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:55:48 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 15:55:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:56:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:56:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 15:56:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:58:02 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 15:58:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 15:59:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 16:02:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 16:04:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 16:05:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 16:10:01 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 16:10:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 16:11:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 16:11:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 16:25:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 16:25:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 16:30:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-21 16:30:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-21 16:30:45 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-21 16:30:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-21 16:30:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-21 16:35:17 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-21 16:35:17 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-21 16:47:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 16:56:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 17:06:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 17:06:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 17:07:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 17:15:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 17:19:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 17:22:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 17:22:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 17:22:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 17:24:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 17:25:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 17:25:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 17:27:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-21 17:27:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-21 17:28:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 17:35:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 17:40:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 17:48:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 17:49:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 17:49:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 17:57:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 17:57:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 17:59:13 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 17:59:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 18:00:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 18:09:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 18:17:27 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 18:17:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 18:22:51 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 18:22:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 18:38:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 18:46:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 18:48:20 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 18:48:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:01:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:05:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 19:05:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:05:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 19:05:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:08:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 19:08:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:09:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:11:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:15:09 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 19:15:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:18:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:21:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:23:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:25:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 19:25:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:28:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 19:29:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:30:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:33:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;ap_jaminan&quot; violates foreign key constraint &quot;ap_jaminan_master_pool_fk&quot;
DETAIL:  Key (pool_id)=(0) is not present in table &quot;master_pool&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-21 19:33:46 --> Query error: ERROR:  insert or update on table "ap_jaminan" violates foreign key constraint "ap_jaminan_master_pool_fk"
DETAIL:  Key (pool_id)=(0) is not present in table "master_pool". - Invalid query: INSERT INTO "ap_jaminan" ("driver_id", "pool_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "doc_number", "pt_id") VALUES ('170', '0', '2019-12-21 19:33:46', 'Paid', 'Top Up by Pool', '530000', '30000', 560000, 'TOPUP/PB/201912/00777', 12)
ERROR - 2019-12-21 19:33:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-21 19:33:46 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-12-21 19:34:13 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-21 19:36:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:37:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 19:37:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:46:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:46:41 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 19:46:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:47:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 19:47:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 19:55:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 19:55:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:11:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 20:11:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:12:39 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 20:12:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:13:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:13:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:14:39 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 20:14:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:14:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:15:44 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 595
ERROR - 2019-12-21 20:15:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:15:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:38:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:38:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:39:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:39:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:39:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:40:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:45:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:49:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:49:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 20:50:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:52:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:56:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:57:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 20:57:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-21 20:57:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 21:00:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 21:08:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 21:20:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 21:21:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 21:22:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 21:24:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-21 21:27:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 21:27:46 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-21 21:27:46 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-21 21:55:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 21:55:52 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-21 21:57:23 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 21:57:32 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 21:58:57 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 21:59:36 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-21 22:48:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 22:49:13 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-21 22:49:13 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-21 22:51:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-21 23:18:07 --> 404 Page Not Found: Closing/build
