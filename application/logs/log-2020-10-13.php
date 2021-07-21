<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-13 13:21:16 --> 404 Page Not Found: Driver/build
ERROR - 2020-10-13 13:21:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-13 13:21:23 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-10-13 13:26:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-13 13:26:43 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-10-13 13:32:52 --> 404 Page Not Found: Driver/build
ERROR - 2020-10-13 13:33:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-13 13:33:09 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2020-10-13 13:33:09 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-10-13 13:46:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-13 13:46:26 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2020-10-13 13:46:26 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-10-13 13:49:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-13 13:49:30 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-10-13 14:08:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-13 14:08:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-10-13 14:08:54 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-10-13 14:08:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-13 14:08:54 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2020-10-13 14:15:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-13 14:15:11 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-10-13 14:26:12 --> 404 Page Not Found: Driver/build
ERROR - 2020-10-13 14:26:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-13 14:26:24 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2020-10-13 14:26:24 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-10-13 14:35:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-13 14:35:12 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2020-10-13 14:35:12 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-10-13 14:35:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-13 14:35:25 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-10-13 14:36:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-13 14:36:51 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2020-10-13 14:36:51 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-10-13 14:37:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-13 14:37:00 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2020-10-13 14:41:15 --> 404 Page Not Found: Driver/build
ERROR - 2020-10-13 14:50:39 --> 404 Page Not Found: Driver/build
ERROR - 2020-10-13 14:50:49 --> 404 Page Not Found: Uploads/domisili
ERROR - 2020-10-13 14:50:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-13 14:50:49 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
