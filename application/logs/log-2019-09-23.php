<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-23 06:25:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 06:25:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 06:34:10 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-23 07:23:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 07:25:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 07:26:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 07:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-23 07:38:41 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-23 07:48:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 07:49:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 08:03:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 08:03:24 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 522
ERROR - 2019-09-23 08:03:24 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 525
ERROR - 2019-09-23 08:03:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 6:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:03:24 --> Query error: ERROR:  syntax error at or near ";"
LINE 6:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-09-23 08:04:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 08:05:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 08:10:55 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-23 08:10:55 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-23 08:11:22 --> 404 Page Not Found: Report/build
ERROR - 2019-09-23 08:21:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 08:21:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:21:05 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:22:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 08:22:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:22:15 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 08:23:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 08:23:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 08:26:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 08:41:12 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 08:42:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 08:42:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 08:44:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 08:44:07 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 08:46:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:46:31 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:46:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:46:42 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:46:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:46:51 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:47:06 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-23 08:47:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:47:06 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:47:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:47:14 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:47:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:47:25 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:48:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:48:07 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:48:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:48:15 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:48:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:48:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:48:25 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-23 08:48:32 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-23 08:48:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:48:32 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:48:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:48:42 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:48:54 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-23 08:48:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:48:54 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:49:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:49:10 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:49:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:49:38 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:49:47 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-23 08:49:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:49:47 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:50:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:50:01 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:50:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:50:17 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:50:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:50:28 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:50:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:50:45 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:50:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:50:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:53:49 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-23 08:55:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:55:02 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:55:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:55:19 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:55:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:55:28 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:55:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:55:40 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:55:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:55:50 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:56:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:56:00 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:56:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:56:07 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:56:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:56:18 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:56:29 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-23 08:56:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:56:29 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:56:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:56:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:56:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:56:43 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:57:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:57:05 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:57:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:57:16 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:57:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:57:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:57:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:57:41 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:57:50 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-23 08:57:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:57:50 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:58:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:58:02 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:58:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:58:09 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:58:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:58:18 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:58:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:58:31 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 08:58:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 08:58:43 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 09:01:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 09:06:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 09:06:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 09:12:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 09:14:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 09:36:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 09:46:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 09:49:29 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-23 09:50:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 09:51:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 10:31:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 10:34:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 10:34:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 10:36:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 10:38:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 10:43:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 10:53:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 10:56:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 11:01:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 11:02:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 11:02:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 11:02:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 11:03:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 11:03:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 11:16:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 11:16:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 11:16:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 11:16:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 11:17:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 11:17:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 11:18:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 11:18:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 11:23:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 11:23:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 11:24:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 11:24:09 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 11:24:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 11:25:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 11:27:45 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-23 11:27:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 11:31:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 11:32:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 11:38:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 11:38:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 11:38:57 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-23 11:38:57 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-23 11:38:57 --> 404 Page Not Found: Report/build
ERROR - 2019-09-23 11:39:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 11:39:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 11:39:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 11:39:43 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 11:39:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 11:40:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 11:42:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 11:43:46 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-23 11:45:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 11:47:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 11:48:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 11:48:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 11:49:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 11:49:40 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 11:49:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 11:49:40 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 11:50:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 11:50:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 12:08:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 12:09:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 12:09:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 12:10:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 12:10:16 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, 
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-23 12:10:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 12:10:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 12:17:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 12:22:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 12:22:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 12:22:44 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, 
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-23 12:45:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 12:56:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 12:56:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 12:56:44 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, 
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-23 13:11:30 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-23 13:18:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 13:24:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 13:26:46 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-23 13:32:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 13:37:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 13:37:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 13:37:11 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, 
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-09-23 13:38:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 13:38:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 13:39:18 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 192
ERROR - 2019-09-23 13:43:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 13:43:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 13:43:41 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 13:49:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 13:49:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 13:51:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 13:54:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 13:56:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 13:56:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 13:57:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 13:59:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:00:06 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 14:00:06 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 14:00:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:01:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:02:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:02:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:03:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 14:03:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 14:06:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:08:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:09:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:10:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 14:10:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:11:07 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-23 14:12:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:12:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 14:12:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 14:13:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 14:13:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:13:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:13:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 14:13:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 14:13:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 14:14:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:15:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 14:17:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 14:17:17 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 14:17:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 14:17:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 14:17:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:18:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:19:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 14:19:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:19:34 --> 404 Page Not Found: Report/build
ERROR - 2019-09-23 14:20:02 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-23 14:20:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:21:40 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-23 14:22:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:22:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:22:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:23:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 14:23:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 14:23:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:23:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 14:23:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:24:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:24:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 14:25:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 14:25:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 14:25:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:25:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:26:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:26:33 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-23 14:26:50 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-23 14:27:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:28:59 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 14:29:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:29:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:30:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 14:30:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:34:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:34:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:39:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:39:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:40:33 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-23 14:40:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:41:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 14:41:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:45:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:45:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:50:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:52:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 14:52:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:55:23 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-23 14:55:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:57:06 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 522
ERROR - 2019-09-23 14:57:06 --> Severity: Notice --> Undefined variable: id /var/www/html/rental/application/controllers/Spj.php 525
ERROR - 2019-09-23 14:57:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 6:    where a.id=;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 14:57:06 --> Query error: ERROR:  syntax error at or near ";"
LINE 6:    where a.id=;
                      ^ - Invalid query: select a.*, b.name, b.kip_number, c.no_pintu, c.no_polisi, d.full_name, e.email from trx_spj a 
			left join master_driver b on(b.id=a.driver_id)
			left join master_car c on(c.id=a.car_id)
			left join cac_user d on(d.id=a.creator_id)
			left join driver_registration e on(e.id=b.driver_registration_id)
			where a.id=;
ERROR - 2019-09-23 14:58:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 14:58:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:58:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 14:59:29 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 14:59:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:00:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 15:00:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:00:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:05:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:09:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 15:09:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:09:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 15:09:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 15:10:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:11:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:15:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 15:15:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:16:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:17:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:19:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:20:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:20:25 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-23 15:20:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:23:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 15:23:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 15:23:13 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 15:28:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:28:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:29:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:30:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:31:35 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-23 15:31:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 15:31:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 15:31:45 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 15:31:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:33:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:34:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:34:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:41:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:42:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 15:42:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 15:42:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 15:42:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:43:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:48:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:51:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 15:53:14 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-23 15:54:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 15:58:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 15:58:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 15:59:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:02:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:03:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 16:03:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:03:52 --> Severity: Warning --> fsockopen(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-23 16:03:52 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (php_network_getaddresses: getaddrinfo failed: Name or service not known) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-23 16:05:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:07:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:07:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:09:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 16:09:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:09:37 --> Severity: Warning --> fsockopen(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-23 16:09:37 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (php_network_getaddresses: getaddrinfo failed: Name or service not known) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-23 16:09:57 --> Severity: Warning --> fsockopen(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-23 16:09:57 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (php_network_getaddresses: getaddrinfo failed: Name or service not known) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-23 16:10:13 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (Network is unreachable) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-23 16:10:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 16:12:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:12:40 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:14:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:14:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:14:49 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:15:20 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-23 16:16:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:16:57 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:17:43 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 16:17:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:17:49 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:18:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:18:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:19:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 16:19:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:19:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 16:19:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:19:53 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:20:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:20:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 16:21:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 16:21:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 16:21:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:21:52 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:22:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:23:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:23:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:24:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:24:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:27:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:27:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:27:32 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:27:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:29:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:29:31 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:30:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 16:30:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:30:15 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 16:30:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:31:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:31:40 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:31:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:31:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:31:52 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:31:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 16:32:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:32:05 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 16:32:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 16:32:21 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 16:32:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:32:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:32:46 --> Severity: Warning --> fsockopen(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-23 16:32:46 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (php_network_getaddresses: getaddrinfo failed: Name or service not known) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-23 16:32:46 --> Severity: Warning --> fsockopen(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-23 16:32:46 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (php_network_getaddresses: getaddrinfo failed: Name or service not known) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-23 16:33:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:33:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:34:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:34:11 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:34:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:34:11 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:34:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 16:35:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:35:06 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:35:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 16:35:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:36:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 16:36:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:36:17 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:36:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:36:25 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 16:37:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:37:15 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:37:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:37:15 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:37:16 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-23 16:37:16 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-23 16:37:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:37:59 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:40:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:40:31 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 16:41:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 16:41:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:41:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:41:30 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:42:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 16:42:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:42:44 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:43:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:44:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:44:58 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:46:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:46:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:47:45 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 16:47:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:48:01 --> Severity: Warning --> fsockopen(): php_network_getaddresses: getaddrinfo failed: Name or service not known /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-23 16:48:01 --> Severity: Warning --> fsockopen(): unable to connect to ssl://smtp.googlemail.com:465 (php_network_getaddresses: getaddrinfo failed: Name or service not known) /var/www/html/rental/system/libraries/Email.php 2020
ERROR - 2019-09-23 16:48:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 16:48:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:48:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:48:11 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 16:48:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 16:48:18 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 16:49:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 16:49:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:49:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:50:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:51:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:52:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 16:52:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:54:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:55:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:56:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:57:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 16:57:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:57:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:57:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:58:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 16:58:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-23 16:59:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 16:59:14 --> 404 Page Not Found: Spj/indek_tiara
ERROR - 2019-09-23 16:59:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 17:00:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 17:00:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 17:00:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 17:00:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 17:00:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 17:01:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 17:01:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 17:02:45 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-23 17:05:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 17:06:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 17:06:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 17:06:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 17:06:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 17:08:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 17:16:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 17:16:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-23 17:16:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 17:16:46 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-23 17:16:59 --> 404 Page Not Found: Spj/setoran_spj_index
ERROR - 2019-09-23 17:17:40 --> 404 Page Not Found: Spj/setoran_spj_index
ERROR - 2019-09-23 17:19:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 17:19:15 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 17:19:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 17:19:56 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 17:20:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 17:20:01 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 17:22:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 17:27:10 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-23 17:36:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 17:37:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 17:37:21 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 17:42:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 17:42:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 17:42:59 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 17:46:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 17:46:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 17:51:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 17:51:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 17:55:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 17:55:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 17:55:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 17:55:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 17:55:19 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 17:57:10 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 17:58:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 17:58:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 18:01:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 18:01:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 18:02:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:02:35 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:02:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:02:35 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:03:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:03:38 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 18:07:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:07:24 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 18:07:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:07:46 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 18:10:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:10:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 18:10:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:10:19 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 18:11:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:11:01 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:11:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:11:04 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:11:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:11:06 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:11:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:11:12 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:11:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:11:45 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 18:11:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:11:47 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 18:11:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:11:51 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:12:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:12:53 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 18:13:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:13:29 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:13:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:13:44 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 18:13:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:13:45 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:13:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:13:46 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:14:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:14:21 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:14:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:14:34 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:15:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:15:38 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 18:16:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:16:19 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 18:21:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:21:07 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:29:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:29:03 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:29:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:29:25 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:29:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:29:46 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:29:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:29:46 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:29:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:29:59 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:29:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:29:59 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:31:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:31:45 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:31:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:31:55 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:31:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:31:58 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:31:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:31:59 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:32:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:32:00 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:32:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:32:00 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:32:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:32:01 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:32:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:32:01 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:32:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:32:01 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:32:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:32:01 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:32:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:32:02 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:32:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:32:02 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:32:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:32:03 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:32:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:32:04 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:32:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:32:05 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:32:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:32:06 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:32:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:32:06 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:32:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:32:06 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:32:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:32:06 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:32:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:32:07 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:32:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:32:07 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:34:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:34:48 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:40:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:40:43 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:40:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:40:50 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:40:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:40:51 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:40:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:40:51 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:40:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:40:51 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:40:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:40:52 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:40:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:40:52 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:40:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:40:56 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:40:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:40:57 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:44:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:44:19 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:45:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:45:00 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:48:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:48:27 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:48:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:48:30 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:48:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:48:36 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:52:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:52:29 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:53:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:53:13 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:53:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:53:54 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:56:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:56:01 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:56:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:56:01 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:56:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:56:15 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:56:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:56:15 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:56:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:56:21 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 18:56:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 18:56:22 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:02:12 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 19:02:12 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 19:07:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:07:26 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:10:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:10:36 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:10:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:10:41 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:15:47 --> Severity: Notice --> Undefined index: nurcholis /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-23 19:15:47 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-23 19:16:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:16:13 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:28:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:28:30 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:32:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:32:14 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:46:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:46:12 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:47:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:47:12 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:47:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:47:13 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:47:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:47:13 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:47:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:47:13 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:47:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:47:13 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:47:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:47:14 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:47:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:47:14 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:48:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:48:39 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:48:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:48:57 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:54:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:54:14 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:54:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:54:14 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:54:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:54:17 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:54:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:54:17 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:54:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:54:29 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:54:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:54:29 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:56:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:56:29 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:56:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:56:29 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:56:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:56:36 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:56:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:56:37 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:56:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:56:38 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:56:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:56:38 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:56:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:56:44 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:56:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:56:44 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:56:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:56:51 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:56:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:56:51 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:56:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:56:53 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:56:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:56:53 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:57:10 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-23 19:57:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:57:10 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:57:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:57:10 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 19:58:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 19:58:23 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 20:13:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 20:13:51 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 20:20:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 20:20:27 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 20:36:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 20:36:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 20:36:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 20:36:09 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 20:39:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 20:39:18 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) > 0 and extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 30;
ERROR - 2019-09-23 20:39:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  integer out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 20:39:22 --> Query error: ERROR:  integer out of range - Invalid query: select count(0) as keur from  master_car
where extract (epoch from (date_expired_keur - now()))::integer/(60*60*24) < 0;
ERROR - 2019-09-23 20:44:52 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 20:44:52 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 20:45:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 21:06:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 21:07:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 21:07:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 21:23:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 21:23:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 22:03:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 22:11:59 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-23 22:12:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-23 22:21:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-23 22:22:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 22:22:24 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 22:24:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 22:24:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 22:24:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 22:24:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 22:24:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 22:24:45 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 22:25:39 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-23 22:26:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 22:26:04 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 22:26:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-23 22:26:25 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-23 22:33:04 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-23 22:33:04 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-23 23:11:16 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-23 23:11:18 --> 404 Page Not Found: Spj/build
