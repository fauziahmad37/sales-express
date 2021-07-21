<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-16 09:32:20 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-05-16 09:32:20 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-05-16 10:22:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;ap_jaminan&quot; violates foreign key constraint &quot;ap_jaminan_master_pool_fk&quot;
DETAIL:  Key (pool_id)=(0) is not present in table &quot;master_pool&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-16 10:22:43 --> Query error: ERROR:  insert or update on table "ap_jaminan" violates foreign key constraint "ap_jaminan_master_pool_fk"
DETAIL:  Key (pool_id)=(0) is not present in table "master_pool". - Invalid query: INSERT INTO "ap_jaminan" ("driver_id", "pool_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "doc_number", "pt_id") VALUES ('120', '0', '2020-05-16 10:22:43', 'Paid', 'Top Up by Pool', '450000', '50000', 500000, 'TOPUP/PB/202005/01513', 12)
ERROR - 2020-05-16 10:22:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-16 10:22:43 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-05-16 10:23:46 --> 404 Page Not Found: Jaminan/build
ERROR - 2020-05-16 10:24:36 --> 404 Page Not Found: Spj/build
ERROR - 2020-05-16 10:25:20 --> 404 Page Not Found: Driver/build
ERROR - 2020-05-16 10:25:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-16 10:25:27 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-05-16 19:01:22 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-05-16 19:01:22 --> 404 Page Not Found: Spj/build
ERROR - 2020-05-16 20:26:17 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2020-05-16 20:28:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-05-16 20:28:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-05-16 22:21:22 --> 404 Page Not Found: Closing/build
