<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-30 07:29:06 --> Severity: Notice --> Undefined index: path_depan C:\xampp5\htdocs\sales\application\views\vehicle\vehicle_registration.php 204
ERROR - 2020-12-30 07:29:06 --> Severity: Notice --> Undefined index: path_depan C:\xampp5\htdocs\sales\application\views\vehicle\vehicle_registration.php 204
ERROR - 2020-12-30 07:29:06 --> Severity: Notice --> Undefined index: path_belakang C:\xampp5\htdocs\sales\application\views\vehicle\vehicle_registration.php 213
ERROR - 2020-12-30 07:29:06 --> Severity: Notice --> Undefined index: path_belakang C:\xampp5\htdocs\sales\application\views\vehicle\vehicle_registration.php 213
ERROR - 2020-12-30 07:29:06 --> Severity: Notice --> Undefined index: path_kanan C:\xampp5\htdocs\sales\application\views\vehicle\vehicle_registration.php 222
ERROR - 2020-12-30 07:29:06 --> Severity: Notice --> Undefined index: path_kanan C:\xampp5\htdocs\sales\application\views\vehicle\vehicle_registration.php 222
ERROR - 2020-12-30 07:29:06 --> Severity: Notice --> Undefined index: path_kiri C:\xampp5\htdocs\sales\application\views\vehicle\vehicle_registration.php 231
ERROR - 2020-12-30 07:29:06 --> Severity: Notice --> Undefined index: path_kiri C:\xampp5\htdocs\sales\application\views\vehicle\vehicle_registration.php 231
ERROR - 2020-12-30 08:31:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...umber&quot;) VALUES ('13', '2020-12-30 08:31:55', '1', '', '60000...
                                                             ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-30 08:31:55 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...umber") VALUES ('13', '2020-12-30 08:31:55', '1', '', '60000...
                                                             ^ - Invalid query: INSERT INTO "payment" ("skh_id", "created_dt", "created_by", "amount_awal", "amount", "amount_akhir", "status", "doc_number") VALUES ('13', '2020-12-30 08:31:55', '1', '', '60000000', 60000000, 'Belum Lunas', 'TRX/202012/5')
ERROR - 2020-12-30 08:31:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-30 08:31:55 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: UPDATE "skh" SET "updated_dt" = '2020-12-30 08:31:55', "updated_by" = '1', "amount_terbayar" = 60000000
WHERE "id" = '13'
ERROR - 2020-12-30 08:31:55 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 345
