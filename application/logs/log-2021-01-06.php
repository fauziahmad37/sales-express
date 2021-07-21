<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-06 09:01:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...number&quot;) VALUES ('6', '2021-01-06 09:01:21', '1', '', '20000...
                                                             ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-01-06 09:01:22 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...number") VALUES ('6', '2021-01-06 09:01:21', '1', '', '20000...
                                                             ^ - Invalid query: INSERT INTO "payment" ("skh_id", "created_dt", "created_by", "amount_awal", "amount", "amount_akhir", "status", "doc_number") VALUES ('6', '2021-01-06 09:01:21', '1', '', '20000000', 20000000, 'Belum Lunas', 'TRX/202101/1')
ERROR - 2021-01-06 09:01:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2021-01-06 09:01:22 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: UPDATE "skh" SET "updated_dt" = '2021-01-06 09:01:22', "updated_by" = '1', "amount_terbayar" = 20000000
WHERE "id" = '6'
ERROR - 2021-01-06 09:01:22 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 345
ERROR - 2021-01-06 09:09:03 --> Severity: Notice --> Undefined variable: updated_status C:\xampp5\htdocs\sales\application\models\Phk_model.php 92
