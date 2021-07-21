<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-02 05:07:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 05:07:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 05:08:52 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 05:08:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 05:12:22 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 05:12:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 05:48:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 05:48:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 05:49:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 05:49:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 05:54:45 --> Severity: Notice --> Undefined index: ajat_sudrajat /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-02 05:56:16 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-02 05:57:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 05:57:41 --> Severity: Notice --> Undefined index: ajat_sudrajat /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-02 06:00:43 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 06:00:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 06:29:42 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 06:29:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 06:30:26 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-02 06:30:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 06:32:05 --> Severity: Notice --> Undefined index: ajat_sudrajat /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-02 06:34:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 06:34:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 07:35:28 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 07:35:47 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 07:35:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-02 07:35:55 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-02 07:41:11 --> Severity: Notice --> Undefined index: agung_wardhana /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2020-01-02 07:41:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 07:58:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 07:58:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 07:58:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 07:58:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 07:58:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 07:59:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 08:07:28 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 08:14:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 08:18:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 08:18:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 08:20:29 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 08:20:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-02 08:20:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-02 08:20:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-02 08:26:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 08:31:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 08:32:12 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 08:32:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-02 08:32:23 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-02 08:32:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 08:33:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 08:35:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 08:35:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 08:36:08 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 08:36:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-02 08:36:17 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-02 08:39:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 08:39:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 08:40:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 08:40:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 08:40:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 08:40:56 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 08:41:46 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 08:41:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 08:42:10 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 08:42:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 08:43:30 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-02 08:45:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 08:47:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 08:48:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 08:48:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 08:48:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 08:49:18 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 08:49:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 08:58:38 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-02 09:01:42 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 09:01:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:02:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:02:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:02:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:04:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:05:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:05:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 09:05:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 09:05:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:06:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 09:06:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:09:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:10:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 09:10:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 09:10:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:10:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:11:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:11:24 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-02 09:12:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 09:12:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:14:15 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 09:14:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:16:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 09:16:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 09:17:13 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-02 09:18:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:18:27 --> 404 Page Not Found: Report/build
ERROR - 2020-01-02 09:20:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:20:21 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 597
ERROR - 2020-01-02 09:20:21 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 600
ERROR - 2020-01-02 09:20:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 7:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-02 09:20:21 --> Query error: ERROR:  syntax error at or near ";"
LINE 7:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from 
			trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2020-01-02 09:28:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:32:56 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 09:38:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:38:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:54:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 09:54:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 09:59:39 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-02 10:03:33 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-02 10:03:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 10:12:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 10:14:03 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-02 10:19:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 10:20:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 10:20:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 10:20:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 10:20:57 --> Severity: Warning --> fsockopen(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2020-01-02 10:20:57 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (php_network_getaddresses: getaddrinfo failed: Name or service not known) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2020-01-02 10:24:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 10:26:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 10:26:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 10:27:57 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-02 10:29:59 --> 404 Page Not Found: Report/build
ERROR - 2020-01-02 10:35:48 --> 404 Page Not Found: Report/build
ERROR - 2020-01-02 10:44:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 10:45:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 10:49:39 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-02 10:51:45 --> 404 Page Not Found: Report/build
ERROR - 2020-01-02 10:51:48 --> 404 Page Not Found: Report/setoran
ERROR - 2020-01-02 10:51:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 10:51:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 10:53:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 10:53:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 11:02:43 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 11:02:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 11:03:54 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 11:05:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 11:13:33 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 11:13:33 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 11:14:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 11:20:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 11:21:09 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 11:21:09 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 11:21:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 11:21:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 11:22:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 11:22:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 11:41:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 11:42:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 11:50:12 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 11:50:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 11:52:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 11:52:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 12:00:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 12:00:30 --> 404 Page Not Found: Report/build
ERROR - 2020-01-02 12:01:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 12:09:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 12:23:50 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 12:23:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 12:31:13 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 12:34:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 12:36:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 13:03:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 13:03:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 13:03:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 13:05:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 13:09:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 13:09:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 13:14:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 13:14:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 13:16:07 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 13:16:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 13:25:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 13:38:18 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-02 13:39:36 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 13:39:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-02 13:39:45 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-02 13:40:32 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 13:40:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 13:42:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 13:52:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 13:55:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 13:56:50 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 13:56:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-02 13:56:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-02 13:57:59 --> 404 Page Not Found: Uploads/photo
ERROR - 2020-01-02 13:57:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-02 13:57:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-02 14:01:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 14:07:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 14:07:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 14:14:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 14:14:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 14:14:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 14:21:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 14:22:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 14:23:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 14:31:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 14:40:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 14:40:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 14:42:02 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 14:42:02 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 14:47:35 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-02 14:55:43 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-02 14:55:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 14:56:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 14:57:04 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 14:58:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 15:02:12 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 15:02:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-02 15:02:14 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-02 15:02:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 15:02:37 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 15:02:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 15:04:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 15:04:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 15:05:00 --> 404 Page Not Found: Report/build
ERROR - 2020-01-02 15:07:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 15:08:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 15:08:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 15:09:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 15:13:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 15:13:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 15:13:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 15:13:40 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 15:15:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 15:34:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 15:39:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 15:39:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 15:39:27 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 15:45:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 15:45:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 15:47:15 --> 404 Page Not Found: Report/build
ERROR - 2020-01-02 16:01:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:04:04 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:04:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 16:04:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:06:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:07:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 16:07:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:15:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:15:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:17:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:24:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:25:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:25:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 16:25:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:26:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:26:37 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 16:26:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:26:50 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:28:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 16:28:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:29:23 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-02 16:30:18 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:31:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:31:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:32:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-02 16:32:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-02 16:32:30 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-02 16:32:53 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 16:33:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-02 16:33:00 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-02 16:33:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:33:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:33:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 16:33:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 16:33:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:37:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:45:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-02 16:45:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:46:18 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 16:46:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-02 16:46:30 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-02 16:47:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:47:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-02 16:47:53 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:50:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:54:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 16:54:28 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:58:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-02 16:58:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-02 16:58:28 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-01-02 16:58:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 16:59:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:01:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:01:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:03:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 17:03:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:04:35 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:05:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 17:05:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:07:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-02 17:11:43 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-02 17:12:20 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 17:13:46 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 17:15:38 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 17:15:45 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 17:16:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:16:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:17:33 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 17:17:39 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 17:17:42 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 17:17:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:18:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 17:18:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:19:09 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 17:19:10 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 17:20:42 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 17:20:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:21:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:22:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:24:13 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 17:25:33 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 17:25:37 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 17:25:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:26:28 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 17:26:30 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 17:26:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:27:14 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 17:27:47 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 17:29:34 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:30:29 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 17:37:54 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-02 17:44:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:55:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:56:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:57:48 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:59:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 17:59:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:00:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:00:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:01:40 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 18:01:41 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:04:10 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-02 18:05:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 18:06:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:07:49 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 18:08:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:11:56 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 18:11:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:14:37 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 18:14:37 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:18:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:18:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 18:18:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:18:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 18:18:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:19:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:20:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:21:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:21:59 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 18:22:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:22:30 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:23:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:23:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:23:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:24:01 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-01-02 18:25:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:25:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 18:25:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 18:26:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:26:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:28:43 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 18:28:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:29:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:30:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:31:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:34:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:36:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:38:46 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 18:38:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:40:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:40:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:41:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 18:41:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:42:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:42:26 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:44:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 18:44:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:45:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:48:14 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:51:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:59:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 18:59:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:00:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:01:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:06:01 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 19:06:01 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:07:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:12:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:12:42 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:14:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:14:46 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:17:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:18:11 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:18:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:18:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 19:18:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 19:19:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:20:15 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 19:20:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-02 19:20:22 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-02 19:22:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:23:24 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 19:23:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:24:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:25:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:25:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:27:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:28:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:28:16 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:30:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:30:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:30:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:31:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 19:31:32 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:34:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:40:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:40:52 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:40:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:41:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:41:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:43:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:43:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:46:47 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:46:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:46:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:47:51 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 19:47:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:48:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:52:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:52:21 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:52:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:52:23 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:52:24 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 19:54:55 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 19:54:55 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 19:55:10 --> 404 Page Not Found: Report/build
ERROR - 2020-01-02 19:55:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 19:55:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 19:57:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:00:44 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 20:00:45 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:01:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:03:00 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:04:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:05:08 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:05:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 20:05:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:08:17 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 20:08:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:09:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:18:47 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-02 20:19:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 20:19:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 20:20:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 20:20:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 20:21:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 20:21:05 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:21:15 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:22:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 20:22:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 20:24:12 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:24:54 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 20:24:54 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:25:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:25:58 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:26:11 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 20:27:09 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-01-02 20:27:56 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:28:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:29:17 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:30:19 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:31:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 20:31:06 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:31:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 20:31:57 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:32:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2020-01-02 20:32:44 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:33:29 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:35:03 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 20:35:03 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:35:38 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:36:13 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:38:51 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 20:38:51 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:38:59 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 20:38:59 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 20:40:07 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:41:39 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:44:33 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:45:09 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:48:31 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:51:49 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:55:25 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 20:58:43 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 625
ERROR - 2020-01-02 20:58:43 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 21:05:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-02 21:05:36 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 21:05:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-02 21:05:56 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-01-02 21:11:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 21:18:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 21:18:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 21:19:02 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 21:21:09 --> 404 Page Not Found: Seragam/build
ERROR - 2020-01-02 21:29:59 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 21:33:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-02 21:34:28 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-02 21:34:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-02 21:34:55 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 21:35:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-02 21:37:20 --> 404 Page Not Found: Spj/build
ERROR - 2020-01-02 21:47:50 --> 404 Page Not Found: Driver/build
ERROR - 2020-01-02 21:47:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-01-02 22:01:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 22:01:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 22:02:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 22:02:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 22:05:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 22:05:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 22:47:49 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-01-02 22:47:49 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-01-02 23:14:40 --> 404 Page Not Found: Closing/build
