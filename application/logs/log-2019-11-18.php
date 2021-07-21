<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-18 01:24:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 02:10:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 07:50:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 07:51:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 07:55:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 08:01:10 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-18 08:05:39 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-18 08:05:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 08:06:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 08:43:44 --> Severity: Notice --> Undefined index: very /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-11-18 08:44:28 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-18 08:44:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 08:47:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 09:09:46 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-18 09:10:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:10:04 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%t%' ESCAPE '!'
OR  "md"."name" LIKE '%t%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:10:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:10:06 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:10:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:10:06 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOT%' ESCAPE '!'
OR  "md"."name" LIKE '%TOT%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:10:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:10:08 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOTOK%' ESCAPE '!'
OR  "md"."name" LIKE '%TOTOK%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:10:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:10:12 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:10:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:10:16 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOTOK EDY ASTOPO. S.SOS.%' ESCAPE '!'
OR  "md"."name" LIKE '%TOTOK EDY ASTOPO. S.SOS.%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:10:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:10:32 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201910/00101%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00101%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:10:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:10:39 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201910/00%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:10:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:10:42 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R%' ESCAPE '!'
OR  "md"."name" LIKE '%R%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:10:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:10:43 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:10:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:10:43 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:10:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:10:54 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201910/00101%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00101%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:11:06 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R%' ESCAPE '!'
OR  "md"."name" LIKE '%R%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:11:07 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:11:08 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:11:09 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/2019%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/2019%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:11:37 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R%' ESCAPE '!'
OR  "md"."name" LIKE '%R%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:11:37 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:11:38 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/P%' ESCAPE '!'
OR  "md"."name" LIKE '%R/P%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:11:38 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:11:39 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:11:39 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/2019%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/2019%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:11:40 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201901%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201901%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:11:41 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/2019%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/2019%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:11:42 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201910/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:11:42 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201910/00%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:11:43 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201910/000%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/000%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:11:43 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201910/00010%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00010%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:11:44 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201910/000101%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/000101%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:11:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 09:11:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 09:12:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:12:12 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%m%' ESCAPE '!'
OR  "md"."name" LIKE '%m%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:12:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:12:15 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:12:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:12:16 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:12:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:12:21 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TPT%' ESCAPE '!'
OR  "md"."name" LIKE '%TPT%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:12:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:12:23 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOTO%' ESCAPE '!'
OR  "md"."name" LIKE '%TOTO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:12:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:12:24 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R%' ESCAPE '!'
OR  "md"."name" LIKE '%R%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:12:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:12:25 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:12:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:12:26 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:12:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:12:27 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/2019%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/2019%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:12:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:12:29 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:12:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:12:32 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:12:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:12:33 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TT%' ESCAPE '!'
OR  "md"."name" LIKE '%TT%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:12:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:12:35 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:12:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:12:36 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201910/00101%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00101%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:13:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:13:58 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:13:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:13:58 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:13:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:13:59 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOTO%' ESCAPE '!'
OR  "md"."name" LIKE '%TOTO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:14:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 09:15:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:15:14 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:15:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:15:20 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:15:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:15:20 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOT%' ESCAPE '!'
OR  "md"."name" LIKE '%TOT%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:15:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:15:20 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOTO%' ESCAPE '!'
OR  "md"."name" LIKE '%TOTO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:15:27 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-18 09:15:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:15:51 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:15:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:15:53 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:15:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:15:54 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOT%' ESCAPE '!'
OR  "md"."name" LIKE '%TOT%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:15:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:15:55 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOTO%' ESCAPE '!'
OR  "md"."name" LIKE '%TOTO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:15:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:15:56 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOTOK%' ESCAPE '!'
OR  "md"."name" LIKE '%TOTOK%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:17:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:17:17 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:17:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:17:18 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:17:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:17:20 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201910/00101%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00101%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:17:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:17:54 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:17:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:17:55 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R%' ESCAPE '!'
OR  "md"."name" LIKE '%R%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:17:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:17:56 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:17:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:17:57 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:18:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 09:18:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 09:18:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:18:18 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:18:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:18:20 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TIO%' ESCAPE '!'
OR  "md"."name" LIKE '%TIO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:18:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:18:21 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:18:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:18:21 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:18:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:18:22 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOT%' ESCAPE '!'
OR  "md"."name" LIKE '%TOT%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:18:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:18:23 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:18:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:18:41 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOTO%' ESCAPE '!'
OR  "md"."name" LIKE '%TOTO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:18:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:18:42 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOTOK%' ESCAPE '!'
OR  "md"."name" LIKE '%TOTOK%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:18:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:18:55 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:19:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:19:05 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:19:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:19:05 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:19:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:19:09 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOTO%' ESCAPE '!'
OR  "md"."name" LIKE '%TOTO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:19:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:19:11 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201910/00101%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00101%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:19:22 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 09:19:22 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 09:19:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:19:38 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:19:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:19:39 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:19:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:19:40 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOT%' ESCAPE '!'
OR  "md"."name" LIKE '%TOT%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:19:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:19:41 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOTO%' ESCAPE '!'
OR  "md"."name" LIKE '%TOTO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:19:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:19:41 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOTOK%' ESCAPE '!'
OR  "md"."name" LIKE '%TOTOK%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:19:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:19:49 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:19:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:19:50 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:19:56 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 09:19:56 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 09:20:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:20:37 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:21:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:21:07 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%t%' ESCAPE '!'
OR  "md"."name" LIKE '%t%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:21:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:21:10 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:21:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:21:12 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:21:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:21:13 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:21:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:21:13 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:21:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:21:16 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:21:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:21:16 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:21:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 09:22:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 09:22:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 09:23:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 09:23:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:23:17 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R%' ESCAPE '!'
OR  "md"."name" LIKE '%R%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:23:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:23:18 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:23:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:23:19 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/P%' ESCAPE '!'
OR  "md"."name" LIKE '%R/P%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:23:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:23:19 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:23:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:23:21 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:23:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:23:22 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/2019%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/2019%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:23:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:23:33 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R%' ESCAPE '!'
OR  "md"."name" LIKE '%R%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:23:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:23:34 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:23:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:23:35 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/P%' ESCAPE '!'
OR  "md"."name" LIKE '%R/P%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:23:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:23:35 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:23:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:23:36 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:23:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:23:36 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/2019%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/2019%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:24:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:24:11 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:24:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:24:12 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%S%' ESCAPE '!'
OR  "md"."name" LIKE '%S%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:24:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:24:14 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:24:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:24:14 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:24:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:24:16 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOTO%' ESCAPE '!'
OR  "md"."name" LIKE '%TOTO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:24:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:24:19 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201910/00101%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00101%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:26:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:26:09 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R%' ESCAPE '!'
OR  "md"."name" LIKE '%R%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:26:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:26:18 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%ER%' ESCAPE '!'
OR  "md"."name" LIKE '%ER%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:26:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:26:19 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R%' ESCAPE '!'
OR  "md"."name" LIKE '%R%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:26:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:26:20 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:27:22 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-18 09:30:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 09:31:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 09:32:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:32:03 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%t%' ESCAPE '!'
OR  "md"."name" LIKE '%t%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:32:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:32:05 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R%' ESCAPE '!'
OR  "md"."name" LIKE '%R%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:32:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:32:06 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:32:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:32:08 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:32:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:32:08 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:32:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:32:09 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:32:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:32:10 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201909%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201909%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:32:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:32:11 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/2019%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/2019%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:32:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:32:12 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201910%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:32:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:32:13 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/20191%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/20191%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:32:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:32:14 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201910/00101%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00101%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:33:24 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 09:33:24 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 09:33:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-18 09:34:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 09:34:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 09:35:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:35:19 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201910/00101%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00101%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:35:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:35:22 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%t%' ESCAPE '!'
OR  "md"."name" LIKE '%t%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:35:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:35:23 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:35:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:35:24 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TOT%' ESCAPE '!'
OR  "md"."name" LIKE '%TOT%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:35:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:35:28 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:35:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:35:29 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:35:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:35:50 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:35:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:35:51 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TO%' ESCAPE '!'
OR  "md"."name" LIKE '%TO%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:36:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 09:37:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 09:38:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 09:38:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 09:39:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 09:40:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 09:40:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:40:50 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%r%' or "name" like '%r%') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%r%' ESCAPE '!'
OR  "md"."name" LIKE '%r%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:40:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:40:53 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R%' or "name" like '%R%') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R%' ESCAPE '!'
OR  "md"."name" LIKE '%R%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:41:53 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-18 09:41:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 09:41:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:41:59 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201910/00097%' or "name" like '%R/PB/201910/00097%') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201910/00097%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00097%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:42:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:42:09 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%t%' ESCAPE '!'
OR  "md"."name" LIKE '%t%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:42:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:42:10 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:42:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:42:12 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R%' ESCAPE '!'
OR  "md"."name" LIKE '%R%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:42:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:42:12 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:42:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:42:13 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:42:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:42:14 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:42:17 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 09:42:17 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 09:42:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:42:32 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%	R/PB/201910/00100%' or "name" like '%	R/PB/201910/00100%') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%	R/PB/201910/00100%' ESCAPE '!'
OR  "md"."name" LIKE '%	R/PB/201910/00100%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:42:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:42:33 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R%' ESCAPE '!'
OR  "md"."name" LIKE '%R%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:42:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:42:34 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:42:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:42:35 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:42:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:42:35 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201910/00100%' or "name" like '%R/PB/201910/00100%') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201910/00100%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00100%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:42:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:42:40 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:42:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:42:40 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TR%' ESCAPE '!'
OR  "md"."name" LIKE '%TR%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:42:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:42:41 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%TR/%' ESCAPE '!'
OR  "md"."name" LIKE '%TR/%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:42:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:42:44 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-18 09:44:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 09:45:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 09:46:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:46:45 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%	R/PB/201910/00100%' or "name" like '%	R/PB/201910/00100%') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%	R/PB/201910/00100%' ESCAPE '!'
OR  "md"."name" LIKE '%	R/PB/201910/00100%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:46:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:46:47 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201910/00100%' or "name" like '%R/PB/201910/00100%') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201910/00100%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00100%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:47:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:47:32 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201909/00011%' or "name" like '%R/PB/201909/00011%') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201909/00011%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201909/00011%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:48:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:48:10 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%R/PB/201910/00101%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00101%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:48:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:48:20 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '% R/PB/201909/00011%' or "name" like '% R/PB/201909/00011%') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '% R/PB/201909/00011%' ESCAPE '!'
OR  "md"."name" LIKE '% R/PB/201909/00011%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:48:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:48:21 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201909/00011%' or "name" like '%R/PB/201909/00011%') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201909/00011%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201909/00011%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:48:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:48:38 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201909/0001%' or "name" like '%R/PB/201909/0001%') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201909/0001%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201909/0001%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:48:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:48:39 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201909/00011%' or "name" like '%R/PB/201909/00011%') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201909/00011%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201909/00011%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:49:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:49:13 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%	R/PB/201909/00048%' or "name" like '%	R/PB/201909/00048%') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%	R/PB/201909/00048%' ESCAPE '!'
OR  "md"."name" LIKE '%	R/PB/201909/00048%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:49:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:49:15 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201909/00048%' or "name" like '%R/PB/201909/00048%') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201909/00048%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201909/00048%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:51:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 09:53:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:53:32 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ..., ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, '(', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, dr.ketentuan_jaminan, dr.tipe
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "md"."kip_number" LIKE '%T%' ESCAPE '!'
OR  "md"."name" LIKE '%T%' ESCAPE '!'
ORDER BY "md"."kip_number" ASC
 LIMIT 10
ERROR - 2019-11-18 09:53:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:53:43 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201910/00101%' or "name" like '%R/PB/201910/00101%') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201910/00101%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00101%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:53:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:53:44 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201910/00101 %' or "name" like '%R/PB/201910/00101 %') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201910/00101 %' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00101 %' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:53:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:53:45 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201910/00101%' or "name" like '%R/PB/201910/00101%') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201910/00101%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00101%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:53:48 --> 404 Page Not Found: Assets/css
ERROR - 2019-11-18 09:53:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:53:53 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201910/00101 %' or "name" like '%R/PB/201910/00101 %') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201910/00101 %' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00101 %' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:53:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 09:53:57 --> Query error: ERROR:  column dr.ketentuan_jaminan does not exist
LINE 1: ...numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentu...
                                                             ^ - Invalid query: SELECT md.id id_driver, md.kip_number as kip, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201910/00101%' or "name" like '%R/PB/201910/00101%') 
				and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201910/00101%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201910/00101%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-11-18 09:57:02 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-18 09:57:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 10:01:10 --> 404 Page Not Found: Assets/css
ERROR - 2019-11-18 10:01:14 --> 404 Page Not Found: Assets/css
ERROR - 2019-11-18 10:01:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 10:02:21 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-18 10:04:15 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-18 10:06:49 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-18 10:10:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 10:10:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 10:15:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 10:16:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 10:24:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 10:27:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 10:32:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 10:32:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 10:32:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 10:34:12 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-18 10:34:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 10:39:36 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-18 10:58:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 10:58:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 11:00:48 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-18 11:12:23 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 11:12:23 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 11:19:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 11:19:05 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-18 11:19:38 --> 404 Page Not Found: Report/setoran
ERROR - 2019-11-18 11:33:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 11:38:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-18 11:46:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 11:48:33 --> The upload destination folder does not appear to be writable.
ERROR - 2019-11-18 11:48:38 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-18 11:55:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-18 11:55:16 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-18 11:55:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 11:55:20 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-11-18 11:55:20 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-18 12:00:53 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-18 12:02:27 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-11-18 12:31:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-18 12:31:45 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-18 12:36:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 12:39:50 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-18 12:44:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 12:44:59 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-18 12:46:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 12:47:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 12:56:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 12:58:01 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-18 13:02:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-18 13:08:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 13:08:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 13:13:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 13:14:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 13:14:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 13:18:15 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-18 13:19:24 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-18 13:21:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 13:27:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 13:27:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 13:30:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 13:30:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 13:31:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 13:39:39 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 13:39:39 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 13:40:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 13:44:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-18 13:44:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 13:48:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 13:48:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 13:48:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 13:49:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 13:53:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 13:54:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 13:55:58 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 13:55:58 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 14:00:33 --> Severity: Notice --> Undefined index: faizal /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-11-18 14:04:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:04:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:04:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:05:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:05:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 14:05:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:06:20 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 14:06:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:06:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 14:06:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 14:08:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:14:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:18:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:20:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:21:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:30:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:34:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:40:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:47:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:47:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:51:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:54:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:56:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:58:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 14:59:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 14:59:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:00:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-18 15:05:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:09:37 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-18 15:12:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:18:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 15:18:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:22:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:22:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:23:28 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 15:23:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:24:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:29:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:29:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:33:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:34:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:36:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:37:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:38:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:41:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:46:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:50:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:52:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 15:52:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:54:37 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 15:54:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:55:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 15:55:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 15:56:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:00:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:06:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 16:06:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:07:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:12:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 16:12:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:13:06 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-18 16:15:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:22:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:24:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 16:24:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:26:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 16:26:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:28:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:31:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:33:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:36:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 16:36:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:42:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 16:42:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:42:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:43:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:43:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 16:43:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:45:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:45:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:46:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:51:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:52:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:53:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 16:53:04 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-11-18 16:53:04', 'TTS-TIARA/BCG/20191118/2889', '0', '', '0', '0', '0', '0', '0', 0, 0, '', '', '', 'Paid', '0', '45', NULL, '5')
ERROR - 2019-11-18 16:53:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-18 16:53:04 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-11-18 16:58:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:58:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 16:58:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 16:59:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 16:59:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:00:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-18 17:00:49 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 17:00:49 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 17:05:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:08:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:12:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:15:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:21:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:22:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:25:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:27:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:28:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:28:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:31:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:31:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:31:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 17:31:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:32:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:34:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:35:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:36:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 17:41:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 18:03:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 18:03:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 18:03:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 18:05:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 18:06:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 18:09:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 18:13:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 18:14:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 18:19:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 18:20:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 18:20:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 18:20:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 18:21:50 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-18 18:23:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 18:23:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 18:25:01 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-18 18:31:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 18:31:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 18:58:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 19:01:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 19:04:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 19:09:54 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 19:09:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 19:18:39 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-18 19:21:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 19:21:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 19:39:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 19:40:09 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 19:40:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 19:42:50 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 19:42:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 19:43:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 19:47:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 19:48:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 19:48:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 19:49:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 19:49:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 19:51:42 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-18 20:35:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 20:37:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 20:37:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 20:39:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 20:44:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 20:44:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 20:45:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 20:45:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 20:45:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 20:55:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 20:56:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 20:56:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 20:57:02 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-18 20:57:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 21:04:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 21:06:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 21:09:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 21:09:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-18 21:48:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-18 21:50:14 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-18 21:50:14 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
