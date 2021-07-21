<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-20 01:31:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 01:48:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 01:54:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 02:22:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 04:13:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 04:13:24 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-20 04:13:24', 
				updated_by=31, 
				bbm_in='3',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='363' 
ERROR - 2019-09-20 04:13:24 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 04:17:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 04:17:20 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-20 04:17:20', 
				updated_by=31, 
				bbm_in='1',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='360' 
ERROR - 2019-09-20 04:17:20 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 04:17:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 04:17:43 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-20 04:17:43', 
				updated_by=31, 
				bbm_in='1',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='360' 
ERROR - 2019-09-20 04:17:43 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 04:18:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 04:18:53 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-20 04:18:53', 
				updated_by=31, 
				bbm_in='1',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='363' 
ERROR - 2019-09-20 04:18:53 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 04:19:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 04:19:35 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-20 04:19:35', 
				updated_by=31, 
				bbm_in='1',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='360' 
ERROR - 2019-09-20 04:19:35 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 04:28:52 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 04:42:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 04:46:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 04:47:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 04:47:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 04:47:43 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 04:49:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 04:49:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 04:49:57 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 04:51:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 06:13:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 5:     rit_in='',
                   ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 06:13:50 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 5:     rit_in='',
                   ^ - Invalid query: update checker_header set updated_dt='2019-09-20 06:13:50', 
				updated_by=31, 
				bbm_in='8',
				km_in='120841',
				rit_in='',
				drop_in=''
			where spj_id='362' 
ERROR - 2019-09-20 06:13:50 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 07:21:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 07:21:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 07:21:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 07:21:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 07:21:50 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 07:22:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 07:23:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 07:23:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 07:25:23 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 07:32:17 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 07:32:17 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 08:02:45 --> Severity: Notice --> Undefined index: faizal /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-20 08:03:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 08:08:05 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 08:08:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 08:10:57 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 08:11:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 08:14:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 08:14:31 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 08:14:50 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 08:14:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 08:18:11 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 08:18:11 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 08:18:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 08:18:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 08:18:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 08:21:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 08:21:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 08:22:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 08:24:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 08:29:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 08:29:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 08:29:08 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 08:30:19 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-20 08:30:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 08:30:19 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 08:31:58 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 08:31:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 08:32:08 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 08:32:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 08:39:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 08:40:04 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 08:40:24 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 08:40:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 08:40:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 08:42:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 08:42:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 08:42:40 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 08:45:31 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 08:45:31 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 08:45:45 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 08:45:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 08:46:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 08:46:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 08:46:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 08:46:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 08:47:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 08:47:19 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-20 08:51:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 08:51:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 08:57:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 08:58:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 08:58:22 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-20 08:58:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 08:58:22 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 09:00:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 09:00:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 09:07:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 09:16:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 09:16:21 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 09:16:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 09:17:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 09:19:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 09:19:04 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 09:19:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 09:19:43 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 09:19:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 09:20:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 09:20:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 09:23:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 09:24:21 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 09:27:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 09:28:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 09:28:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 09:28:21 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 09:28:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 09:28:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 09:29:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 09:29:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 09:30:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 09:31:58 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 09:32:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 09:32:52 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-20 09:33:04 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-20 09:36:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 09:44:09 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-20 09:47:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 09:48:08 --> Severity: Notice --> Undefined index: ismail /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-20 09:50:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 09:50:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 09:51:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 09:51:30 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-20 09:51:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 09:51:30 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 09:51:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 09:51:51 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-20 09:51:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 09:51:51 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 09:52:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 09:52:06 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 09:52:50 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 09:52:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 09:54:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 09:54:51 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 09:55:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 09:55:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 09:56:10 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 09:56:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 09:56:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 09:57:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 09:59:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 09:59:33 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-20 09:59:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 09:59:33 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 10:00:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 10:00:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 10:00:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 10:02:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 10:02:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 10:03:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 10:03:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 10:06:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 10:09:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 10:09:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 10:09:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 10:10:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 10:10:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 10:11:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 10:13:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 10:13:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 10:13:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 10:13:32 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 10:13:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 10:13:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 10:14:50 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 10:17:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 10:17:10 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 10:17:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 10:18:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 10:23:46 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 10:23:46 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 10:23:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 10:24:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 10:24:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 10:24:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 10:24:10 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 10:24:48 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 10:25:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 10:25:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 10:25:12 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 10:37:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 10:39:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 10:47:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 10:50:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 10:50:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 10:52:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 10:53:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 10:53:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 10:54:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 10:54:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 10:54:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 10:55:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 10:55:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 10:57:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 11:02:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 11:05:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 11:05:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 11:07:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 11:10:18 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 11:11:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 11:13:17 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 11:13:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 11:14:11 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 11:14:11 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 11:14:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 11:14:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 11:15:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 11:15:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 11:15:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 11:19:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:20:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:20:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:21:58 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 11:22:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:22:29 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:28:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:28:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:28:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 11:28:08 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 11:28:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:28:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:28:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:33:43 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:34:16 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:34:19 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:34:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 11:34:24 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 11:34:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:34:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:35:03 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:35:08 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:37:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 11:38:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:38:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:38:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 11:38:46 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 11:39:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:40:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:40:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 11:40:33 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 11:40:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 11:40:33 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 11:40:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 11:40:53 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 11:41:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:41:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 11:41:28 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 11:41:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 11:41:28 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 11:41:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 11:41:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 11:41:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 11:41:47 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 11:42:03 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 11:43:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 11:43:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 11:43:48 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 11:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 12:00:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 12:05:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:05:00 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-20 12:05:00', 
				updated_by=81, 
				bbm_in='1',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='361' 
ERROR - 2019-09-20 12:05:00 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 12:06:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:06:30 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-20 12:06:30', 
				updated_by=81, 
				bbm_in='1',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='361' 
ERROR - 2019-09-20 12:06:30 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 12:10:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:10:58 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-20 12:10:58', 
				updated_by=81, 
				bbm_in='1',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='361' 
ERROR - 2019-09-20 12:10:58 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 12:13:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:13:21 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-20 12:13:21', 
				updated_by=81, 
				bbm_in='1',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='361' 
ERROR - 2019-09-20 12:13:21 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 12:19:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:19:34 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-20 12:19:34', 
				updated_by=81, 
				bbm_in='1',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='361' 
ERROR - 2019-09-20 12:19:34 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 12:20:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:20:49 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-20 12:20:49', 
				updated_by=81, 
				bbm_in='1',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='361' 
ERROR - 2019-09-20 12:20:49 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 12:22:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:22:41 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-20 12:22:41', 
				updated_by=81, 
				bbm_in='1',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='361' 
ERROR - 2019-09-20 12:22:41 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 12:24:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:24:14 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-20 12:24:14', 
				updated_by=81, 
				bbm_in='1',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='361' 
ERROR - 2019-09-20 12:24:14 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 12:25:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:25:41 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-20 12:25:41', 
				updated_by=81, 
				bbm_in='1',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='361' 
ERROR - 2019-09-20 12:25:41 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 12:36:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 12:36:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 12:36:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 12:36:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 12:37:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 12:37:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 12:37:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 12:38:10 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 12:38:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:38:12 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 12:38:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:38:18 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 12:38:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:38:25 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 12:38:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:38:35 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 12:38:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:38:40 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 12:38:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:38:46 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 12:38:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:38:50 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 12:38:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:38:56 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 12:39:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:39:08 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 12:39:08 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 12:39:08 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-20 12:39:11 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 12:40:29 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-20 12:40:33 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 12:40:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:40:46 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 12:42:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 12:44:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 12:44:36 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 12:47:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 12:47:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 12:47:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 13:13:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 13:13:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 13:19:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 13:23:54 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:24:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:24:01 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:24:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:24:01 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:24:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:24:05 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:24:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:24:06 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:24:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:24:17 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:24:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:24:24 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:24:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:24:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:24:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:24:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:25:52 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 13:26:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:26:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:27:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 13:28:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:28:33 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:28:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:28:39 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:30:14 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:30:19 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:30:22 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:30:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 13:30:25 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:30:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 13:30:28 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:30:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 13:30:31 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:30:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 13:30:33 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:30:36 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:30:40 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:30:43 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:30:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 13:30:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 13:30:48 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:30:49 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:30:51 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:30:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:30:56 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2019-09-20 13:30:56 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:30:59 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:31:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 13:31:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 13:31:01 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:31:05 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:31:08 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:31:12 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:31:19 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:31:24 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:31:27 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:31:28 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:31:30 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:31:59 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:32:02 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:32:05 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:32:09 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:32:13 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:32:17 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:34:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:34:11 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:34:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:34:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:35:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:35:05 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:35:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:35:05 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:35:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:35:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:35:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:35:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:37:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:37:14 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:37:19 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 13:37:19 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 13:37:19 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-20 13:37:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:37:19 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:37:38 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 13:37:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:37:38 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:37:38 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 13:37:39 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-20 13:38:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:38:00 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:38:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:38:00 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:38:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 13:39:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 13:39:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:39:50 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:39:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:39:57 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:42:05 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:42:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 13:42:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 13:42:21 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:42:23 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:43:48 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:43:50 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:43:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:43:53 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:46:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:46:22 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:46:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:46:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:49:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 13:49:50 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:50:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:50:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:50:04 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:50:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:50:21 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:50:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:50:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:51:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:51:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:51:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:51:47 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-20 13:52:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:52:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:53:12 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:53:18 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:53:52 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:53:54 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 13:53:54 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:53:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:53:56 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 13:53:57 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:54:04 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 13:54:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:54:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:54:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:54:49 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:55:02 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-20 13:55:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 13:55:24 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-20 13:55:24 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-20 13:55:24 --> 404 Page Not Found: Report/build
ERROR - 2019-09-20 13:56:43 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:56:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:57:01 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 13:57:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 13:57:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 13:57:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:57:14 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:57:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 13:57:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 13:57:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 13:57:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:57:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:58:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 13:58:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 13:59:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 13:59:18 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:59:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 13:59:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 14:00:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 14:00:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 14:00:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 14:00:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:00:58 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 14:01:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 14:01:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:01:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:01:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 14:01:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 14:01:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 14:01:42 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 14:01:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:01:46 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 14:01:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 14:02:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:02:01 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 14:02:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 14:02:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:02:22 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 14:02:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:02:24 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 14:02:24 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 14:02:24 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 14:02:24 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-20 14:02:38 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 14:02:41 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 14:02:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 14:02:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 14:02:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 14:03:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 14:03:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:03:29 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 14:03:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:03:29 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 14:03:57 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 14:03:59 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 14:03:59 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 14:04:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:04:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 14:04:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:05:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:05:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:06:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:06:09 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-20 14:06:09', 
				updated_by=29, 
				bbm_in='3',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='380' 
ERROR - 2019-09-20 14:06:09 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 14:06:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:07:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:07:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:07:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ... VALUES ('CEK/PB/201909/00400', '78', '400', '0', '', '', ''...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ... VALUES ('CEK/PB/201909/00400', '78', '400', '0', '', '', ''...
                                                             ^ - Invalid query: INSERT INTO "checker_header" ("doc_number", "created_by", "spj_id", "bbm_out", "km_out", "rit_out", "drop_out") VALUES ('CEK/PB/201909/00400', '78', '400', '0', '', '', '')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '1', '', '1', '2019-09-20 02:07:20', '78', 'BAGASI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '2', '', '1', '2019-09-20 02:07:20', '78', 'BAN CADANGAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '3', '', '1', '2019-09-20 02:07:20', '78', 'DONGKRAK')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '4', '', '1', '2019-09-20 02:07:20', '78', 'BUMPER BELAKANG')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '5', '', '1', '2019-09-20 02:07:20', '78', 'FENDER BELAKANG KANAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '6', '', '1', '2019-09-20 02:07:20', '78', 'FENDER BELAKANG KIRI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '7', '', '1', '2019-09-20 02:07:20', '78', 'STIKER NO PINTU BAGASI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '8', '', '1', '2019-09-20 02:07:20', '78', 'STIKER CALL CENTER')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '9', '', '1', '2019-09-20 02:07:20', '78', 'STIKER WEBSITE')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '10', '', '1', '2019-09-20 02:07:20', '78', 'PLAT NOMOR BELAKANG')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '11', '', '1', '2019-09-20 02:07:20', '78', 'KACA BELAKANG')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '12', '', '1', '2019-09-20 02:07:20', '78', 'LAMPU LED BELAKANG')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '13', '', '1', '2019-09-20 02:07:20', '78', 'LAMPU BELAKANG KANAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '14', '', '1', '2019-09-20 02:07:20', '78', 'LAMPU BELAKANG KIRI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '15', '', '1', '2019-09-20 02:07:20', '78', 'KONDISI BAN BELAKANG KIRI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '16', '', '1', '2019-09-20 02:07:20', '78', 'STIKER LIST STRIPING KIRI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '17', '', '1', '2019-09-20 02:07:20', '78', 'STIKER EKSTERIOR NO PINTU KIRI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '18', '', '1', '2019-09-20 02:07:20', '78', 'STIKER EKSTERIOR EAGLE PINTU KIRI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '19', '', '1', '2019-09-20 02:07:20', '78', 'PINTU KIRI DEPAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '20', '', '1', '2019-09-20 02:07:20', '78', 'PINTU KIRI BELAKANG')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '21', '', '1', '2019-09-20 02:07:20', '78', 'FENDER DEPAN KIRI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '22', '', '1', '2019-09-20 02:07:20', '78', 'SPION KIRI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '23', '', '1', '2019-09-20 02:07:20', '78', 'KONDISI BAN DEPAN KIRI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '24', '', '1', '2019-09-20 02:07:20', '78', 'KAP MESIN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '25', '', '1', '2019-09-20 02:07:20', '78', 'SEGEL SIKRING / FUSE')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '26', '', '1', '2019-09-20 02:07:20', '78', 'TUTUP MINYAK REM')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '27', '', '1', '2019-09-20 02:07:20', '78', 'ACCU')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '28', '', '1', '2019-09-20 02:07:20', '78', 'TUTUP RADIATOR')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '29', '', '1', '2019-09-20 02:07:20', '78', 'TUTUP TABUNG WIPER')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '30', '', '1', '2019-09-20 02:07:20', '78', 'STICK OLI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '31', '', '1', '2019-09-20 02:07:20', '78', 'LAMPU DEPAN KANAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '32', '', '1', '2019-09-20 02:07:20', '78', 'LAMPU DEPAN KIRI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '33', '', '1', '2019-09-20 02:07:20', '78', 'KACA DEPAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '34', '', '1', '2019-09-20 02:07:20', '78', 'STICKER EXPRESS GROUP KACA DEPAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '35', '', '1', '2019-09-20 02:07:20', '78', 'PLAT NOMOR DEPAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '36', '', '1', '2019-09-20 02:07:20', '78', 'FENDER DEPAN KANAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '37', '', '1', '2019-09-20 02:07:20', '78', 'FENDER DEPAN KIRI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '38', '', '1', '2019-09-20 02:07:20', '78', 'KONDISI BAN DEPAN KANAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '39', '', '1', '2019-09-20 02:07:20', '78', 'SPION KANAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '40', '', '1', '2019-09-20 02:07:20', '78', 'STIKER LIST STRIPING KANAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '41', '', '1', '2019-09-20 02:07:20', '78', 'STIKER EKSTERIOR NO PINTU KANAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '42', '', '1', '2019-09-20 02:07:20', '78', 'STIKER EKSTERIOR EAGLE PINTU KANAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '43', '', '1', '2019-09-20 02:07:20', '78', 'PINTU KANAN DEPAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '44', '', '1', '2019-09-20 02:07:20', '78', 'KONDISI BAN BELAKANG KANAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '27', '', '1', '2019-09-20 02:07:20', '78', 'ACCU')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '28', '', '1', '2019-09-20 02:07:20', '78', 'TUTUP RADIATOR')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '47', '', '1', '2019-09-20 02:07:20', '78', 'STIKER INFORMASI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '48', '', '1', '2019-09-20 02:07:20', '78', 'STIKER INTERIOR NO PINTU DOORTRIM KANAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '49', '', '1', '2019-09-20 02:07:20', '78', 'STIKER INTERIOR NO PINTU DOORTRIM KIRI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '50', '', '1', '2019-09-20 02:07:20', '78', 'STIKER INTERIOR NO PINTU DASHBOARD')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '51', '', '1', '2019-09-20 02:07:20', '78', 'TEMPAT KIP')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '52', '', '1', '2019-09-20 02:07:20', '78', 'LAMPU LED VACANT')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '53', '', '1', '2019-09-20 02:07:20', '78', 'RDS')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '54', '', '1', '2019-09-20 02:07:20', '78', 'ARGO')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '55', '', '1', '2019-09-20 02:07:20', '78', 'SEGEL RDS')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '56', '', '1', '2019-09-20 02:07:20', '78', 'SEGEL ARGO')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '57', '', '1', '2019-09-20 02:07:20', '78', 'SEGEL VACANT')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '58', '', '1', '2019-09-20 02:07:20', '78', 'SEGEL PANEL KANAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '59', '', '1', '2019-09-20 02:07:20', '78', 'SEGEL PANEL KIRI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '60', '', '1', '2019-09-20 02:07:20', '78', 'SEGEL SPEEDO KANAN')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '61', '', '1', '2019-09-20 02:07:20', '78', 'SEGEL SPEEDO KIRI')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '62', '', '1', '2019-09-20 02:07:20', '78', 'BOX MAHKOTA')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '63', '', '1', '2019-09-20 02:07:20', '78', 'LAMPU MAHKOTA')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '64', '', '1', '2019-09-20 02:07:20', '78', 'LAMPU BAHAYA')
ERROR - 2019-09-20 14:07:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(400) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:07:54 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(400) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (400, '65', '', '1', '2019-09-20 02:07:20', '78', 'ROOF / ATAP')
ERROR - 2019-09-20 14:08:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 14:08:15 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 14:09:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 14:12:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 14:13:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:13:07 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-20 14:13:07', 
				updated_by=29, 
				bbm_in='2',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='371' 
ERROR - 2019-09-20 14:13:07 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 14:14:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:15:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 4:     km_in='',
                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:15:05 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 4:     km_in='',
                  ^ - Invalid query: update checker_header set updated_dt='2019-09-20 14:15:05', 
				updated_by=29, 
				bbm_in='3',
				km_in='',
				rit_in='',
				drop_in=''
			where spj_id='380' 
ERROR - 2019-09-20 14:15:05 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 345
ERROR - 2019-09-20 14:16:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:18:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:18:39 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 14:20:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:21:08 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-20 14:23:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:24:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:24:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:24:55 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 14:24:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:24:55 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 14:25:03 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-20 14:25:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:26:03 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 14:26:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 14:26:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:26:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:27:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 14:27:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:28:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:28:47 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...EK/PB/201909/00403', '29', '403', '1', '127682', '9574', '')
                                                                    ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...EK/PB/201909/00403', '29', '403', '1', '127682', '9574', '')
                                                                    ^ - Invalid query: INSERT INTO "checker_header" ("doc_number", "created_by", "spj_id", "bbm_out", "km_out", "rit_out", "drop_out") VALUES ('CEK/PB/201909/00403', '29', '403', '1', '127682', '9574', '')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '1', '', '1', '2019-09-20 02:29:20', '29', 'BAGASI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '2', '', '1', '2019-09-20 02:29:20', '29', 'BAN CADANGAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '3', '', '1', '2019-09-20 02:29:20', '29', 'DONGKRAK')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '4', '', '1', '2019-09-20 02:29:20', '29', 'BUMPER BELAKANG')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '5', '', '1', '2019-09-20 02:29:20', '29', 'FENDER BELAKANG KANAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '6', '', '1', '2019-09-20 02:29:20', '29', 'FENDER BELAKANG KIRI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '7', '', '1', '2019-09-20 02:29:20', '29', 'STIKER NO PINTU BAGASI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '8', '', '1', '2019-09-20 02:29:20', '29', 'STIKER CALL CENTER')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '9', '', '1', '2019-09-20 02:29:20', '29', 'STIKER WEBSITE')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '10', '', '1', '2019-09-20 02:29:20', '29', 'PLAT NOMOR BELAKANG')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '11', '', '1', '2019-09-20 02:29:20', '29', 'KACA BELAKANG')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '12', '', '1', '2019-09-20 02:29:20', '29', 'LAMPU LED BELAKANG')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '13', '', '1', '2019-09-20 02:29:20', '29', 'LAMPU BELAKANG KANAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '14', '', '1', '2019-09-20 02:29:20', '29', 'LAMPU BELAKANG KIRI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '15', '', '1', '2019-09-20 02:29:20', '29', 'KONDISI BAN BELAKANG KIRI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '16', '', '1', '2019-09-20 02:29:20', '29', 'STIKER LIST STRIPING KIRI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '17', '', '1', '2019-09-20 02:29:20', '29', 'STIKER EKSTERIOR NO PINTU KIRI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '18', '', '1', '2019-09-20 02:29:20', '29', 'STIKER EKSTERIOR EAGLE PINTU KIRI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '19', '', '1', '2019-09-20 02:29:20', '29', 'PINTU KIRI DEPAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '20', '', '1', '2019-09-20 02:29:20', '29', 'PINTU KIRI BELAKANG')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '21', '', '1', '2019-09-20 02:29:20', '29', 'FENDER DEPAN KIRI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '22', '', '1', '2019-09-20 02:29:20', '29', 'SPION KIRI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '23', '', '1', '2019-09-20 02:29:20', '29', 'KONDISI BAN DEPAN KIRI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '24', '', '1', '2019-09-20 02:29:20', '29', 'KAP MESIN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '25', '', '1', '2019-09-20 02:29:20', '29', 'SEGEL SIKRING / FUSE')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '26', '', '1', '2019-09-20 02:29:20', '29', 'TUTUP MINYAK REM')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '27', '', '1', '2019-09-20 02:29:20', '29', 'ACCU')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '28', '', '1', '2019-09-20 02:29:20', '29', 'TUTUP RADIATOR')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '29', '', '1', '2019-09-20 02:29:20', '29', 'TUTUP TABUNG WIPER')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '30', '', '1', '2019-09-20 02:29:20', '29', 'STICK OLI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '31', '', '1', '2019-09-20 02:29:20', '29', 'LAMPU DEPAN KANAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '32', '', '1', '2019-09-20 02:29:20', '29', 'LAMPU DEPAN KIRI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '33', '', '1', '2019-09-20 02:29:20', '29', 'KACA DEPAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '34', '', '1', '2019-09-20 02:29:20', '29', 'STICKER EXPRESS GROUP KACA DEPAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '35', '', '1', '2019-09-20 02:29:20', '29', 'PLAT NOMOR DEPAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '36', '', '1', '2019-09-20 02:29:20', '29', 'FENDER DEPAN KANAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '37', '', '1', '2019-09-20 02:29:20', '29', 'FENDER DEPAN KIRI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '38', '', '1', '2019-09-20 02:29:20', '29', 'KONDISI BAN DEPAN KANAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '39', '', '1', '2019-09-20 02:29:20', '29', 'SPION KANAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '40', '', '1', '2019-09-20 02:29:20', '29', 'STIKER LIST STRIPING KANAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '41', '', '1', '2019-09-20 02:29:20', '29', 'STIKER EKSTERIOR NO PINTU KANAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '42', '', '1', '2019-09-20 02:29:20', '29', 'STIKER EKSTERIOR EAGLE PINTU KANAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '43', '', '1', '2019-09-20 02:29:20', '29', 'PINTU KANAN DEPAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '44', '', '1', '2019-09-20 02:29:20', '29', 'KONDISI BAN BELAKANG KANAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '27', '', '1', '2019-09-20 02:29:20', '29', 'ACCU')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '28', '', '1', '2019-09-20 02:29:20', '29', 'TUTUP RADIATOR')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '47', '', '1', '2019-09-20 02:29:20', '29', 'STIKER INFORMASI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '48', '', '1', '2019-09-20 02:29:20', '29', 'STIKER INTERIOR NO PINTU DOORTRIM KANAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '49', '', '1', '2019-09-20 02:29:20', '29', 'STIKER INTERIOR NO PINTU DOORTRIM KIRI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '50', '', '1', '2019-09-20 02:29:20', '29', 'STIKER INTERIOR NO PINTU DASHBOARD')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '51', '', '1', '2019-09-20 02:29:20', '29', 'TEMPAT KIP')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '52', '', '1', '2019-09-20 02:29:20', '29', 'LAMPU LED VACANT')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '53', '', '1', '2019-09-20 02:29:20', '29', 'RDS')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '54', '', '1', '2019-09-20 02:29:20', '29', 'ARGO')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '55', '', '1', '2019-09-20 02:29:20', '29', 'SEGEL RDS')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '56', '', '1', '2019-09-20 02:29:20', '29', 'SEGEL ARGO')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '57', '', '1', '2019-09-20 02:29:20', '29', 'SEGEL VACANT')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '58', '', '1', '2019-09-20 02:29:20', '29', 'SEGEL PANEL KANAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '59', '', '1', '2019-09-20 02:29:20', '29', 'SEGEL PANEL KIRI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '60', '', '1', '2019-09-20 02:29:20', '29', 'SEGEL SPEEDO KANAN')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '61', '', '1', '2019-09-20 02:29:20', '29', 'SEGEL SPEEDO KIRI')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '62', '', '1', '2019-09-20 02:29:20', '29', 'BOX MAHKOTA')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '63', '', '1', '2019-09-20 02:29:20', '29', 'LAMPU MAHKOTA')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '64', '', '1', '2019-09-20 02:29:20', '29', 'LAMPU BAHAYA')
ERROR - 2019-09-20 14:29:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;checker_detail&quot; violates foreign key constraint &quot;checker_detail_checker_header_fk&quot;
DETAIL:  Key (checker_header_id)=(403) is not present in table &quot;checker_header&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 14:29:34 --> Query error: ERROR:  insert or update on table "checker_detail" violates foreign key constraint "checker_detail_checker_header_fk"
DETAIL:  Key (checker_header_id)=(403) is not present in table "checker_header". - Invalid query: INSERT INTO "checker_detail" ("checker_header_id", "master_pertanyaan_id", "noted_out", "out", "created_dt", "created_by", "pertanyaan") VALUES (403, '65', '', '1', '2019-09-20 02:29:20', '29', 'ROOF / ATAP')
ERROR - 2019-09-20 14:29:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 14:30:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:30:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:31:24 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-20 14:31:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 14:33:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:33:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:34:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 14:37:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 14:37:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 14:38:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:45:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:47:15 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-20 14:48:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:48:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:48:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:48:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:49:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:49:33 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 14:50:11 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 14:50:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:50:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:50:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:50:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 14:50:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 14:51:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:51:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:51:41 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 14:51:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:52:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:52:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:52:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 14:52:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:54:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:54:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:54:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:55:02 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-20 14:55:05 --> 404 Page Not Found: Report/build
ERROR - 2019-09-20 14:55:38 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-20 14:57:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:57:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:58:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:58:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:59:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 14:59:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:00:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:01:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:02:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:02:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:02:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:02:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:03:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:03:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:03:30 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:03:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:03:37 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 15:03:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:03:40 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 15:03:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:03:58 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-20 15:04:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:04:00 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 15:04:02 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-20 15:04:02 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-20 15:04:03 --> 404 Page Not Found: Report/build
ERROR - 2019-09-20 15:04:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:04:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:04:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:04:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:04:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:04:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:05:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:07:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:08:18 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 15:08:18 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 15:08:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:11:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:13:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:14:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:14:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:14:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:15:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:15:58 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 15:16:04 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 15:16:05 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 15:16:19 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 15:16:27 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 15:16:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:19:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:19:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:21:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:21:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:21:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:21:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:21:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:21:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:21:56 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 15:21:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:22:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:22:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:22:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:22:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:23:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:23:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:23:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:23:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:24:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:24:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:24:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:24:31 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:25:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:25:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:25:27 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:25:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:25:54 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:26:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:26:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:26:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:26:09 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-20 15:27:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:27:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:28:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:28:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:28:03 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:28:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:28:27 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:28:40 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 15:28:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:28:40 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:28:45 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:28:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:28:59 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 15:29:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:29:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:29:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:29:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 15:30:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:30:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:30:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 15:31:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:31:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:31:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:32:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:32:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:32:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:32:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:32:57 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:33:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:35:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:35:46 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 192
ERROR - 2019-09-20 15:35:46 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:35:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:35:56 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:36:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 15:36:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 15:36:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:36:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:36:44 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 15:36:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:37:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:37:03 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:38:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:38:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:38:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:41:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 15:41:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:41:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:41:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:41:39 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:41:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:42:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:43:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:43:15 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:43:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:44:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:44:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:45:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:45:18 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:45:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:46:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:46:29 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:46:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:46:33 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:46:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:48:07 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:48:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:48:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:48:15 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:48:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:48:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 15:48:55 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:49:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:49:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:49:07 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 15:49:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:49:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:49:17 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 192
ERROR - 2019-09-20 15:49:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:49:18 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 15:49:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:49:23 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 15:49:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:49:40 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-20 15:49:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:49:47 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 15:49:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:49:48 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:49:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:49:53 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:50:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:50:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:50:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:51:00 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:51:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:51:13 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 15:51:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:51:24 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:51:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:51:55 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:52:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:52:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:52:56 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 15:53:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:54:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:54:21 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-20 15:54:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:55:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:55:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:55:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:55:03 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-20 15:55:03 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-20 15:55:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:55:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:55:06 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Reject', "approve_by" = '89', "approve_dt" = '2019-09-20 15:55:06'
WHERE "id" = 'build'
ERROR - 2019-09-20 15:55:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:55:10 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:55:10 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-20 15:55:10 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-20 15:55:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:55:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:55:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:55:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:55:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:55:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:55:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:55:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:55:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:55:40 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:55:40 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-20 15:55:40 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-20 15:55:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:55:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:55:56 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 15:56:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:56:19 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:56:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:56:19 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:56:19 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-20 15:56:19 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-20 15:56:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:56:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:56:33 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:56:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:56:58 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:57:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 15:57:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:57:48 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:58:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:58:02 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 15:58:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:58:25 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 15:58:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:58:37 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 15:58:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:58:56 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:59:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:59:28 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 15:59:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 15:59:35 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 15:59:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:00:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:00:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:00:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:00:15 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:00:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:00:21 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:00:21 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:00:33 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:00:50 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:01:08 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:01:29 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:01:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:01:33 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:01:50 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-20 16:01:54 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-20 16:01:54 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-20 16:01:54 --> 404 Page Not Found: Report/build
ERROR - 2019-09-20 16:02:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:02:10 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:02:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:03:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 16:03:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:03:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:03:50 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:03:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:03:50 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:04:03 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:04:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:04:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:05:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:05:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:05:45 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:05:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:05:45 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:05:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:05:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:05:56 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:06:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:06:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:06:06 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:06:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:06:36 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:06:53 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-20 16:06:58 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:06:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:06:59 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:07:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:07:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:07:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:07:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:07:32 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:07:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:07:32 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:08:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:08:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:08:30 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:08:31 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:08:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:08:35 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:09:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:09:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:09:55 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:10:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:10:00 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:10:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:10:04 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:10:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:10:08 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:10:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:10:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:10:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:10:33 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:10:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:11:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:11:01 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:11:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:11:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:12:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;.&quot;
LINE 3:    e.sim_number
            ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:12:15 --> Query error: ERROR:  syntax error at or near "."
LINE 3:    e.sim_number
            ^ - Invalid query: select a.id, a.kip_number, a.name, a.status, b.name as pool_name, c.phone, c.emergency_number, 
			c.bank_account_number, c.email, d.ktp_number, c.bank, f.amount_akhir
			e.sim_number
			from master_driver a 
			left join master_pool b on(b.id=a.pool_id)
			left join driver_registration c on(a.driver_registration_id=c.id)
			left join master_ktp d on(d.id=c.ktp_id)
			left join master_sim e on(e.id=c.sim_id)
			left join ap_jaminan f on(f.id=a.ap_jaminan_id)
			where a.status in('Active','Inactive') order by a.id desc;
ERROR - 2019-09-20 16:12:17 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 16:12:20 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 16:12:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;.&quot;
LINE 3:    e.sim_number
            ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:12:25 --> Query error: ERROR:  syntax error at or near "."
LINE 3:    e.sim_number
            ^ - Invalid query: select a.id, a.kip_number, a.name, a.status, b.name as pool_name, c.phone, c.emergency_number, 
			c.bank_account_number, c.email, d.ktp_number, c.bank, f.amount_akhir
			e.sim_number
			from master_driver a 
			left join master_pool b on(b.id=a.pool_id)
			left join driver_registration c on(a.driver_registration_id=c.id)
			left join master_ktp d on(d.id=c.ktp_id)
			left join master_sim e on(e.id=c.sim_id)
			left join ap_jaminan f on(f.id=a.ap_jaminan_id)
			where a.status in('Active','Inactive') order by a.id desc;
ERROR - 2019-09-20 16:12:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;.&quot;
LINE 3:    e.sim_number
            ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:12:25 --> Query error: ERROR:  syntax error at or near "."
LINE 3:    e.sim_number
            ^ - Invalid query: select a.id, a.kip_number, a.name, a.status, b.name as pool_name, c.phone, c.emergency_number, 
			c.bank_account_number, c.email, d.ktp_number, c.bank, f.amount_akhir
			e.sim_number
			from master_driver a 
			left join master_pool b on(b.id=a.pool_id)
			left join driver_registration c on(a.driver_registration_id=c.id)
			left join master_ktp d on(d.id=c.ktp_id)
			left join master_sim e on(e.id=c.sim_id)
			left join ap_jaminan f on(f.id=a.ap_jaminan_id)
			where a.status in('Active','Inactive') order by a.id desc;
ERROR - 2019-09-20 16:12:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 16:12:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:12:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:12:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:12:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 16:13:03 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-20 16:13:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:13:03 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 16:13:03 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 16:13:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:13:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:13:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 16:13:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:13:31 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 16:13:31 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-20 16:13:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:13:37 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 16:14:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:14:18 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 16:14:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:14:19 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:14:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:14:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:15:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:16:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:17:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:17:09 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:17:12 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:17:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:17:27 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 16:18:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:18:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:18:51 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:19:54 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:19:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:19:55 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:19:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:20:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:20:15 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:20:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:20:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 16:20:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:21:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:21:25 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:21:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:22:14 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:22:14 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:22:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:22:23 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:22:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:22:31 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:22:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:22:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:22:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:22:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:22:48 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:22:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:22:58 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 16:23:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:23:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:23:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:23:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:23:56 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 16:24:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:24:08 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:24:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:24:38 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 16:25:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:25:28 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:26:09 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-20 16:26:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:26:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:27:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:27:13 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:27:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:27:42 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 16:27:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:28:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:28:29 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:28:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:28:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type real: &quot;&quot;
LINE 1: ...'650000', '650000', '0', '357500', '0', '292500', '', 0, 650...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:28:43 --> Query error: ERROR:  invalid input syntax for type real: ""
LINE 1: ...'650000', '650000', '0', '357500', '0', '292500', '', 0, 650...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('392', '2019-09-20 16:28:43', 'TTS-TIARA/BCG/20190920/383', '650000', '650000', '0', '357500', '0', '292500', '', 0, 650000, '', '074660', '', 'Paid', '292500', '45', NULL, '5')
ERROR - 2019-09-20 16:28:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:28:43 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-20 16:28:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:29:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:30:39 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-20 16:30:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:32:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:32:31 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:33:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:33:04 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:33:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:33:10 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:33:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:33:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:33:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:33:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:34:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 16:34:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 16:34:06 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 16:34:06 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 16:34:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:34:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:34:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:35:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:35:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:35:45 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:35:45 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:36:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:36:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:36:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:36:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:37:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 16:37:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:38:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:38:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:38:30 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:38:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:38:36 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:38:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:38:38 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 16:38:40 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:38:44 --> 404 Page Not Found: Spj/setoran_spj_index
ERROR - 2019-09-20 16:38:46 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:38:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:39:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:39:04 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:39:04 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:39:06 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:39:31 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:39:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:39:58 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:39:58 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:40:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:40:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:40:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:40:24 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:40:24 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:40:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:41:02 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:41:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:41:24 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:41:24 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:41:28 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:41:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:41:28 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:42:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:42:10 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-20 16:42:29 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:42:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:42:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:42:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 16:43:06 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:43:08 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 16:43:08 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 16:43:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:43:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 16:43:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:44:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:44:16 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:44:16 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:44:19 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:44:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:45:24 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 16:45:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:45:29 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:46:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 16:46:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:46:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:46:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:47:13 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-20 16:47:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 16:47:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 16:47:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:49:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:50:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:50:24 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:51:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 16:51:19 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 16:51:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:51:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:51:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:51:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:52:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:52:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:52:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 16:52:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:52:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:53:08 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 16:53:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:54:15 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:54:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 16:54:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:54:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:54:49 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:55:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:55:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:55:41 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:56:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:56:13 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:56:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:56:30 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:56:30 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 16:56:30 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:56:30 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-20 16:56:43 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 16:56:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:56:49 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 16:57:02 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-20 16:57:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 16:57:08 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 16:57:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:57:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:57:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 16:58:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-20 16:58:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:58:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 16:59:42 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:00:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:00:18 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:10:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:10:17 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:10:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 17:10:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 17:11:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:11:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:11:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 17:11:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 17:11:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:11:28 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:11:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 17:11:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 3: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:11:40 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 3: WHERE "id" = 'build'
                     ^ - Invalid query: SELECT *
FROM "cac_user"
WHERE "id" = 'build'
 LIMIT 1
ERROR - 2019-09-20 17:11:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 17:11:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 17:11:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:11:54 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:12:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:12:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:12:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:12:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:13:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:13:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:13:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:13:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:14:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:14:01 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:14:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:14:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:14:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:14:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:14:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:14:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:14:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:14:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:14:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:14:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:14:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:15:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:15:01 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:15:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:15:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:15:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:15:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:15:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:15:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:16:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:17:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:17:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:18:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:18:25 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:19:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:19:17 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:20:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:24:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:24:12 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:25:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:25:19 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:26:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:26:27 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:26:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:26:59 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:27:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:27:50 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:28:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:28:48 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:29:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:29:51 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:30:48 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 32
ERROR - 2019-09-20 17:30:48 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 47
ERROR - 2019-09-20 17:30:48 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 59
ERROR - 2019-09-20 17:30:48 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 71
ERROR - 2019-09-20 17:30:48 --> Severity: Notice --> Undefined index: id_car /var/www/html/rental/application/controllers/Vehicle.php 122
ERROR - 2019-09-20 17:30:48 --> Severity: Notice --> Undefined index: id_pool /var/www/html/rental/application/controllers/Vehicle.php 123
ERROR - 2019-09-20 17:30:48 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 124
ERROR - 2019-09-20 17:30:48 --> Severity: Notice --> Undefined index: no_polisi /var/www/html/rental/application/controllers/Vehicle.php 125
ERROR - 2019-09-20 17:30:48 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/controllers/Vehicle.php 126
ERROR - 2019-09-20 17:30:48 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/controllers/Vehicle.php 127
ERROR - 2019-09-20 17:30:48 --> Severity: Notice --> Undefined index: tahun /var/www/html/rental/application/controllers/Vehicle.php 128
ERROR - 2019-09-20 17:31:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:31:17 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:32:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:32:16 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:33:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:33:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:33:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:33:33 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:33:33 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 17:33:36 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 17:33:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:33:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:33:52 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:34:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:34:25 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:34:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:34:29 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:34:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:34:29 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:34:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:34:52 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:36:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:36:15 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:36:37 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 32
ERROR - 2019-09-20 17:36:37 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 47
ERROR - 2019-09-20 17:36:37 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 59
ERROR - 2019-09-20 17:36:37 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 71
ERROR - 2019-09-20 17:36:37 --> Severity: Notice --> Undefined index: id_car /var/www/html/rental/application/controllers/Vehicle.php 122
ERROR - 2019-09-20 17:36:37 --> Severity: Notice --> Undefined index: id_pool /var/www/html/rental/application/controllers/Vehicle.php 123
ERROR - 2019-09-20 17:36:37 --> Severity: Notice --> Undefined index: no_pintu /var/www/html/rental/application/controllers/Vehicle.php 124
ERROR - 2019-09-20 17:36:37 --> Severity: Notice --> Undefined index: no_polisi /var/www/html/rental/application/controllers/Vehicle.php 125
ERROR - 2019-09-20 17:36:37 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/controllers/Vehicle.php 126
ERROR - 2019-09-20 17:36:37 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/controllers/Vehicle.php 127
ERROR - 2019-09-20 17:36:37 --> Severity: Notice --> Undefined index: tahun /var/www/html/rental/application/controllers/Vehicle.php 128
ERROR - 2019-09-20 17:37:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:37:18 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:38:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:38:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:38:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:38:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:38:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:38:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:38:47 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:38:50 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:38:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:38:54 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:39:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:39:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:39:13 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:39:47 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:39:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:39:50 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:40:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:40:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:40:58 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:41:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:41:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:41:43 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:42:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:42:05 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:43:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:43:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:43:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:43:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:43:18 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:43:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:43:39 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:44:10 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:44:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:44:19 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:44:30 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:44:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:44:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:45:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:45:07 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:46:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:46:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:46:11 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:46:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:46:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:46:27 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:46:43 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:47:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:47:27 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:48:15 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:48:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:48:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:48:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:48:56 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:49:34 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:49:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:49:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:49:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:49:42 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 17:49:42 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-20 17:49:42 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 17:49:42 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-20 17:49:44 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 17:49:47 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 17:49:49 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-20 17:49:51 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-20 17:50:29 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 17:50:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:50:51 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:50:51 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:51:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:53:13 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:53:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:53:50 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:54:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:54:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:54:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 17:55:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 17:55:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:55:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:55:34 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 17:55:34 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 17:55:34 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-20 17:55:34 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-20 17:55:40 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 17:55:45 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 17:55:49 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-20 17:55:51 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-20 17:57:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 17:57:55 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 17:57:55 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 18:00:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:00:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:00:42 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:00:53 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 18:00:53 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 18:02:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:02:28 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:02:28 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 18:07:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:07:26 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:08:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:08:19 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:08:19 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 18:08:19 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 18:08:19 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-20 18:09:03 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 18:10:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:10:09 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:10:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:10:43 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:11:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:11:26 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:12:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:12:58 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:16:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:17:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:17:09 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:17:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 18:17:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:17:43 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 18:18:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:18:00 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 18:21:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:21:33 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:21:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:21:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:21:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:21:35 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:21:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:21:37 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:21:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:21:38 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:26:53 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:28:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 18:28:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:28:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 18:28:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:28:55 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 18:29:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:29:04 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 18:29:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 18:29:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:29:10 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 18:29:11 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-20 18:29:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:29:11 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 18:29:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:29:18 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 18:29:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:29:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:29:34 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 18:29:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 18:29:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 18:30:03 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 18:35:53 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 18:35:58 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:36:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:36:09 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:36:09 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-20 18:36:09 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-20 18:36:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:36:42 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:36:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:36:57 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:37:34 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-20 18:37:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:37:39 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:37:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:37:57 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:41:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:41:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:41:54 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:42:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:42:05 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:42:06 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-20 18:42:55 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:43:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:43:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:43:12 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 18:43:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:43:13 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:43:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;build&quot;
LINE 2: WHERE &quot;id&quot; = 'build'
                     ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:43:27 --> Query error: ERROR:  invalid input syntax for integer: "build"
LINE 2: WHERE "id" = 'build'
                     ^ - Invalid query: UPDATE "master_car" SET "status" = 'Active', "approve_by" = '89', "approve_dt" = '2019-09-20 18:43:27'
WHERE "id" = 'build'
ERROR - 2019-09-20 18:43:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:43:35 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:43:35 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 18:43:39 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 18:44:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 18:44:41 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:53:58 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 18:54:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 18:54:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 18:55:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:58:01 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 18:58:05 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 18:58:08 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 18:58:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:58:08 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 18:58:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 18:58:47 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 19:11:04 --> 404 Page Not Found: Assets/css
ERROR - 2019-09-20 19:11:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 19:11:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 19:11:49 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 19:12:22 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 19:12:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 19:12:51 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 19:13:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 19:13:03 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 19:18:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 19:18:11 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 19:19:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 19:19:12 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 19:20:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 19:20:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 19:21:01 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-20 19:21:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 19:21:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 19:21:08 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 19:21:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 19:21:36 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 19:22:29 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 19:22:29 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 19:22:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 19:22:47 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 19:22:47 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-20 19:22:47 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 19:22:47 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-20 19:23:10 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-20 19:23:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 19:23:59 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 19:25:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 19:25:51 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-20 19:28:00 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 19:28:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 19:28:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 19:35:26 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 19:42:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-20 19:42:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 19:42:12 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 19:42:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 19:42:23 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 19:42:29 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-20 19:42:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 19:42:29 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 19:42:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-20 19:42:35 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-20 19:46:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 19:47:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 19:47:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 19:51:55 --> 404 Page Not Found: Spj/setoran_spj_index
ERROR - 2019-09-20 19:56:00 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 19:56:00 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 19:56:48 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-20 20:00:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 20:00:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 20:01:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 20:04:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 20:04:46 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-20 20:04:46 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-20 20:16:42 --> 404 Page Not Found: Lohin/index
ERROR - 2019-09-20 20:17:18 --> Severity: Notice --> Undefined index: dodi /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-20 22:44:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 22:44:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-20 22:57:15 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-20 22:57:45 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-20 22:57:50 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
