<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-09-14 01:58:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 02:00:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 02:00:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 02:35:06 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-14 02:35:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 05:17:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-14 05:17:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-14 05:18:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 05:18:27 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-14 05:18:27 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-14 05:18:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 05:18:40 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-14 05:19:13 --> 404 Page Not Found: Report/setoran
ERROR - 2019-09-14 05:19:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 05:19:16 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-14 05:19:19 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-14 05:19:19 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-14 05:19:19 --> 404 Page Not Found: Report/build
ERROR - 2019-09-14 05:19:44 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-14 05:19:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-14 05:19:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-14 05:44:06 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-14 05:44:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 05:45:08 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-14 05:45:08 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-14 06:06:08 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-14 06:07:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 06:08:45 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-14 06:55:39 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-14 06:56:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-14 06:56:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-14 06:57:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 06:57:18 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-09-14 06:57:18', 'TTS/PB/20190914/111', '0', '0', '0', '0', '0', 0, 0, 0, 0, '', '', '', 'Paid', '0', '26', NULL, '1')
ERROR - 2019-09-14 06:57:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 06:57:18 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-14 06:58:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 06:58:23 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-09-14 06:58:23', 'TTS/PB/20190914/111', '0', '0', '0', '0', '0', 0, 0, 0, 0, '', '', '', 'Paid', '0', '26', NULL, '1')
ERROR - 2019-09-14 06:58:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 06:58:23 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-09-14 07:00:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 07:05:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 07:05:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 07:05:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 07:24:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 07:41:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 07:41:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 07:41:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 07:57:54 --> Severity: Notice --> Undefined index: hengki_firmansyah /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-14 07:57:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 07:59:47 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-14 07:59:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 08:02:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 08:04:30 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-14 08:04:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-14 08:04:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-14 08:13:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 09:18:58 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_rangka /var/www/html/rental/application/views/vehicle/list_vehicle.php 81
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_mesin /var/www/html/rental/application/views/vehicle/list_vehicle.php 82
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_stnk /var/www/html/rental/application/views/vehicle/list_vehicle.php 83
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_tera /var/www/html/rental/application/views/vehicle/list_vehicle.php 84
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_keur /var/www/html/rental/application/views/vehicle/list_vehicle.php 85
ERROR - 2019-09-14 09:19:01 --> Severity: Notice --> Undefined index: no_kiukio /var/www/html/rental/application/views/vehicle/list_vehicle.php 86
ERROR - 2019-09-14 09:19:02 --> Severity: Notice --> Undefined variable: data /var/www/html/rental/application/controllers/Vehicle.php 253
ERROR - 2019-09-14 09:19:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 09:20:23 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-14 09:22:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 09:23:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 09:23:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 09:43:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 09:44:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 09:51:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 09:57:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 09:57:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 09:59:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 10:38:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 10:38:00 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-14 10:40:11 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-14 10:40:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-14 10:41:08 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-14 10:41:54 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-14 10:48:46 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-14 10:48:47 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-14 11:09:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 11:11:28 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-14 11:45:22 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-14 11:47:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 11:49:46 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-14 11:55:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 11:56:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 12:03:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 12:24:15 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-14 12:27:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 12:45:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 12:47:45 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-14 12:57:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 13:02:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-14 13:13:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 13:13:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 13:13:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 13:14:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 13:15:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 13:15:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 13:15:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 13:18:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-14 13:18:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 13:18:45 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-14 13:19:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-14 13:19:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 13:20:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 13:20:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 13:21:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-14 13:21:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 13:21:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 13:21:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 13:21:25 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-14 13:21:34 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-09-14 13:21:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 13:21:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-14 13:24:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 13:25:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 13:36:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 13:44:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 13:54:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 13:56:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:01:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:01:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:04:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:11:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:16:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:17:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:18:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:18:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:19:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:19:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:20:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:21:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-14 14:22:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:23:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:23:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:24:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 14:24:21 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-09-14 14:26:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:27:01 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-14 14:27:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-14 14:27:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-14 14:27:21 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 14:27:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:28:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:29:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:30:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:30:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:32:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 14:32:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:32:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:33:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:33:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:36:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:38:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:41:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:41:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:41:30 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-14 14:41:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:42:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:42:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:42:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:43:46 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-14 14:44:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:46:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:47:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:47:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:48:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:52:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:53:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:55:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:56:30 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-14 14:58:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:59:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 14:59:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:02:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:06:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:06:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:06:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:06:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:07:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:07:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:09:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:10:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 15:10:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:10:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:11:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:11:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-14 15:13:38 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-14 15:13:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:14:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:14:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:15:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:19:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:19:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:20:26 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-14 15:21:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:25:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:26:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:29:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:32:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:32:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 15:32:17 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-14 15:32:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 15:32:32 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-14 15:32:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 15:32:36 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-14 15:32:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:32:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 15:32:50 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-14 15:32:59 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-14 15:33:02 --> 404 Page Not Found: Uploads/stnk
ERROR - 2019-09-14 15:33:02 --> 404 Page Not Found: Uploads/kiukio
ERROR - 2019-09-14 15:33:02 --> 404 Page Not Found: Uploads/tera
ERROR - 2019-09-14 15:33:02 --> 404 Page Not Found: Uploads/keur
ERROR - 2019-09-14 15:33:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 15:33:02 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-14 15:33:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-14 15:33:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 15:33:13 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-14 15:35:20 --> 404 Page Not Found: Seragam/build
ERROR - 2019-09-14 15:35:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:40:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:42:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:44:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:48:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:52:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:53:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:57:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:58:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 15:59:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:00:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:00:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:01:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:04:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:07:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:10:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:12:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:13:11 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-14 16:15:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:17:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:17:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:19:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:20:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:20:49 --> Severity: Notice --> Undefined index: muhamad_ridwan /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-14 16:20:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:20:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:21:17 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-14 16:21:18 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-14 16:21:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-14 16:21:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-14 16:23:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:25:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:25:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:25:42 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 16:25:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:25:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:25:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:26:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;jam_mulai_denda&quot;, &quot;total_tagihan&quot;) VALUES ('61', '', '5', '...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 16:26:33 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."jam_mulai_denda", "total_tagihan") VALUES ('61', '', '5', '...
                                                             ^ - Invalid query: INSERT INTO "trx_spj" ("driver_id", "car_id", "pool_id", "created", "creator_id", "doc_number", "keterangan", "modified", "status", "tipe_rental", "tanggal_spj", "tagihan_wajib", "denda_perjam", "jam_mulai_denda", "total_tagihan") VALUES ('61', '', '5', '2019-09-14 16:26:33', '41', 'SPJ-TIARA/BCG/20190914/167', 'Create SPJ by Pool', '2019-09-14 16:26:33', 'Active', '24 Jam', '2019-09-14', 650000, 50000, '2019-09-15 16:26:33', 0)
ERROR - 2019-09-14 16:26:33 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 16:26:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:26:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:27:11 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 16:27:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:28:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:28:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:28:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:28:38 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 16:28:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:28:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:29:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 16:29:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:31:05 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-14 16:31:05 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-14 16:31:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:31:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 16:31:31 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-14 16:31:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:44:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 16:44:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:46:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;jam_mulai_denda&quot;, &quot;total_tagihan&quot;) VALUES ('32', '', '5', '...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 16:46:41 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."jam_mulai_denda", "total_tagihan") VALUES ('32', '', '5', '...
                                                             ^ - Invalid query: INSERT INTO "trx_spj" ("driver_id", "car_id", "pool_id", "created", "creator_id", "doc_number", "keterangan", "modified", "status", "tipe_rental", "tanggal_spj", "tagihan_wajib", "denda_perjam", "jam_mulai_denda", "total_tagihan") VALUES ('32', '', '5', '2019-09-14 16:46:41', '41', 'SPJ-TIARA/BCG/20190914/171', 'Create SPJ by Pool', '2019-09-14 16:46:41', 'Active', '24 Jam', '2019-09-14', 650000, 50000, '2019-09-15 16:46:41', 0)
ERROR - 2019-09-14 16:46:41 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 16:46:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:46:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:50:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:50:56 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 16:50:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:51:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:52:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 16:57:14 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-14 16:57:14 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-14 16:57:23 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-14 17:00:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 17:01:25 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-14 17:02:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 17:06:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 17:07:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 17:07:21 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-09-14 17:07:23 --> 404 Page Not Found: Driver/build
ERROR - 2019-09-14 17:07:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 17:15:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 17:15:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 17:24:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-09-14 17:24:58 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-09-14 17:34:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 17:37:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 17:39:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 17:40:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 17:40:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 17:41:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 17:46:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 17:49:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 17:52:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 17:55:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 17:59:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 18:07:03 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-14 18:07:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 18:14:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 18:14:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 18:29:30 --> Severity: Notice --> Undefined index: heru /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-09-14 18:32:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 18:41:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 18:41:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 18:42:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 18:42:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 18:44:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 18:47:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 18:47:50 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-14 18:47:50 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-14 18:48:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 18:52:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 18:53:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 19:03:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 19:03:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 19:05:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 19:05:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 19:07:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 19:16:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 19:36:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 19:37:08 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-14 19:37:08 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-14 20:09:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 20:09:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 20:29:05 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-14 20:29:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 20:34:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 20:35:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 21:06:49 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-14 21:06:49 --> Severity: Notice --> Undefined index: pool_id /var/www/html/rental/application/views/report/report_cashback.php 34
ERROR - 2019-09-14 21:06:49 --> 404 Page Not Found: Report/build
ERROR - 2019-09-14 21:10:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-14 21:10:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-14 21:41:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-14 21:41:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-14 21:58:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-09-14 21:58:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-09-14 22:07:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 22:19:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 22:20:01 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-09-14 22:22:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 22:23:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-09-14 22:23:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 22:23:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-09-14 22:27:10 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-09-14 23:07:41 --> 404 Page Not Found: Images/favicon.ico
