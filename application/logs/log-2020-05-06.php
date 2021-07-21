<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-06 06:46:07 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-06 06:46:07 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2020-05-06 11:15:10 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-06 13:07:57 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-06 14:35:09 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-05-06 14:46:28 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-06 14:46:32 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-05-06 14:46:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-06 14:46:43 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2020-05-06 14:47:27 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-05-06 14:49:23 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-05-06 14:55:12 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-06 14:55:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-06 14:55:21 --> Query error: ERROR:  column "build" does not exist
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
