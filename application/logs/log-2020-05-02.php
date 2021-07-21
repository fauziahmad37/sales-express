<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-02 08:18:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2020-05-02 18:47:07 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2020-05-02 18:47:07 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2020-05-02 19:01:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type real: &quot;30,000&quot;
LINE 1: .../PB/20200502/10893', '140000', '110000', '30000', '30,000', ...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-02 19:01:54 --> Query error: ERROR:  invalid input syntax for type real: "30,000"
LINE 1: .../PB/20200502/10893', '140000', '110000', '30000', '30,000', ...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("cicilan_jaminan", "spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('0', '10984', '2020-05-02 19:01:54', 'TTS/PB/20200502/10893', '140000', '110000', '30000', '30,000', '0', 0, 0, 139970, 140000, '', '', '', 'Paid', '0', '57', 7682, '1')
ERROR - 2020-05-02 19:01:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-02 19:01:54 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-05-02 19:03:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type real: &quot;30,000&quot;
LINE 1: .../PB/20200502/10893', '140000', '110000', '30000', '30,000', ...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-02 19:03:35 --> Query error: ERROR:  invalid input syntax for type real: "30,000"
LINE 1: .../PB/20200502/10893', '140000', '110000', '30000', '30,000', ...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("cicilan_jaminan", "spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('0', '10984', '2020-05-02 19:03:35', 'TTS/PB/20200502/10893', '140000', '110000', '30000', '30,000', '0', 0, 0, 139970, 140000, '', '', '', 'Paid', '0', '57', 7684, '1')
ERROR - 2020-05-02 19:03:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-02 19:03:35 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2020-05-02 19:05:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 610
ERROR - 2020-05-02 19:05:17 --> 404 Page Not Found: Spj/build
