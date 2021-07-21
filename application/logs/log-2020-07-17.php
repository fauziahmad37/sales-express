<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-17 12:31:10 --> 404 Page Not Found: Spj/build
ERROR - 2020-07-17 12:31:16 --> 404 Page Not Found: Driver/build
ERROR - 2020-07-17 16:40:15 --> 404 Page Not Found: Driver/build
ERROR - 2020-07-17 19:19:38 --> 404 Page Not Found: Driver/build
ERROR - 2020-07-17 21:01:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-17 21:01:38 --> Query error: ERROR:  column "build" does not exist
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
