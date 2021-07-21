<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-12-26 00:40:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 00:40:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 00:51:42 --> 404 Page Not Found: Report/build
ERROR - 2019-12-26 00:52:35 --> 404 Page Not Found: Report/build
ERROR - 2019-12-26 00:54:08 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 03:48:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 03:51:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 03:51:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 03:53:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 04:40:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 04:42:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 04:59:59 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 04:59:59 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 05:06:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 05:06:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 623
ERROR - 2019-12-26 05:06:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 05:06:52 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 623
ERROR - 2019-12-26 05:06:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 05:07:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 623
ERROR - 2019-12-26 05:07:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 05:07:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:07:20 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%001%' or "name" like '%001%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%001%' ESCAPE '!'
OR  "md"."name" LIKE '%001%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:07:39 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 623
ERROR - 2019-12-26 05:07:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 05:07:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 05:08:03 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 623
ERROR - 2019-12-26 05:08:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 05:08:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:08:10 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%00166%' or "name" like '%00166%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%00166%' ESCAPE '!'
OR  "md"."name" LIKE '%00166%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:08:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:08:19 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%KHUN%' or "name" like '%KHUN%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%KHUN%' ESCAPE '!'
OR  "md"."name" LIKE '%KHUN%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:09:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:09:05 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%00166%' or "name" like '%00166%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%00166%' ESCAPE '!'
OR  "md"."name" LIKE '%00166%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:09:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 05:09:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:09:39 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%M%' or "name" like '%M%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%M%' ESCAPE '!'
OR  "md"."name" LIKE '%M%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:09:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:09:44 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%M.KHUN%' or "name" like '%M.KHUN%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%M.KHUN%' ESCAPE '!'
OR  "md"."name" LIKE '%M.KHUN%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:10:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:10:05 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%00166%' or "name" like '%00166%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%00166%' ESCAPE '!'
OR  "md"."name" LIKE '%00166%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:11:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 05:11:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:11:32 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 05:12:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:12:11 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%00166%' or "name" like '%00166%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%00166%' ESCAPE '!'
OR  "md"."name" LIKE '%00166%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:12:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:12:17 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%166%' or "name" like '%166%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%166%' ESCAPE '!'
OR  "md"."name" LIKE '%166%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:12:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:12:23 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%KHUND%' or "name" like '%KHUND%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%KHUND%' ESCAPE '!'
OR  "md"."name" LIKE '%KHUND%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:13:15 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-26 05:13:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:13:40 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%00166%' or "name" like '%00166%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%00166%' ESCAPE '!'
OR  "md"."name" LIKE '%00166%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:13:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:13:56 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%KHUND%' or "name" like '%KHUND%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%KHUND%' ESCAPE '!'
OR  "md"."name" LIKE '%KHUND%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:13:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:13:59 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%KHUNDIR%' or "name" like '%KHUNDIR%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%KHUNDIR%' ESCAPE '!'
OR  "md"."name" LIKE '%KHUNDIR%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:14:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:14:06 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%00166%' or "name" like '%00166%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%00166%' ESCAPE '!'
OR  "md"."name" LIKE '%00166%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:14:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:14:49 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%166%' or "name" like '%166%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%166%' ESCAPE '!'
OR  "md"."name" LIKE '%166%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:15:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 05:15:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 05:15:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:15:40 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 05:16:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 05:17:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:17:00 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%M%' or "name" like '%M%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%M%' ESCAPE '!'
OR  "md"."name" LIKE '%M%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:17:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:17:01 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%M.%' or "name" like '%M.%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%M.%' ESCAPE '!'
OR  "md"."name" LIKE '%M.%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:17:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:17:04 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%M.KHUN%' or "name" like '%M.KHUN%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%M.KHUN%' ESCAPE '!'
OR  "md"."name" LIKE '%M.KHUN%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:17:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 05:19:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:19:38 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%00166%' or "name" like '%00166%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%00166%' ESCAPE '!'
OR  "md"."name" LIKE '%00166%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:20:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:20:33 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%RIZAL S%' or "name" like '%RIZAL S%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%RIZAL S%' ESCAPE '!'
OR  "md"."name" LIKE '%RIZAL S%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:20:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:20:39 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%00143%' or "name" like '%00143%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%00143%' ESCAPE '!'
OR  "md"."name" LIKE '%00143%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:21:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:21:07 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%00143%' or "name" like '%00143%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%00143%' ESCAPE '!'
OR  "md"."name" LIKE '%00143%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:23:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:23:51 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%KHUND%' or "name" like '%KHUND%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%KHUND%' ESCAPE '!'
OR  "md"."name" LIKE '%KHUND%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:23:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:23:53 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%KHUNDIR%' or "name" like '%KHUNDIR%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%KHUNDIR%' ESCAPE '!'
OR  "md"."name" LIKE '%KHUNDIR%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:23:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:23:54 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%KHUNDIRIN%' or "name" like '%KHUNDIRIN%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%KHUNDIRIN%' ESCAPE '!'
OR  "md"."name" LIKE '%KHUNDIRIN%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:27:22 --> Severity: Notice --> Undefined index: choiruman /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-12-26 05:29:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:29:40 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%KHUND%' or "name" like '%KHUND%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%KHUND%' ESCAPE '!'
OR  "md"."name" LIKE '%KHUND%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:29:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:29:43 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%KHUN%' or "name" like '%KHUN%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%KHUN%' ESCAPE '!'
OR  "md"."name" LIKE '%KHUN%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:40:38 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 05:40:38 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 05:41:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:41:00 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%00172%' or "name" like '%00172%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%00172%' ESCAPE '!'
OR  "md"."name" LIKE '%00172%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:41:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 05:41:37 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-26 05:41:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 05:42:05 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 05:42:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:42:13 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 05:42:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:42:31 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%ILYAS%' or "name" like '%ILYAS%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%ILYAS%' ESCAPE '!'
OR  "md"."name" LIKE '%ILYAS%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:44:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:44:01 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%KHUND%' or "name" like '%KHUND%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%KHUND%' ESCAPE '!'
OR  "md"."name" LIKE '%KHUND%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:46:28 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 05:46:28 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 05:46:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:46:45 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%0016%' or "name" like '%0016%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%0016%' ESCAPE '!'
OR  "md"."name" LIKE '%0016%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:46:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:46:46 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%00166%' or "name" like '%00166%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%00166%' ESCAPE '!'
OR  "md"."name" LIKE '%00166%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 05:46:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 05:46:54 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%KHUNDIRI%' or "name" like '%KHUNDIRI%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%KHUNDIRI%' ESCAPE '!'
OR  "md"."name" LIKE '%KHUNDIRI%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 06:13:53 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 06:13:53 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 06:14:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 06:14:17 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%KHUN%' or "name" like '%KHUN%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%KHUN%' ESCAPE '!'
OR  "md"."name" LIKE '%KHUN%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 06:14:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 06:14:21 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%00166%' or "name" like '%00166%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%00166%' ESCAPE '!'
OR  "md"."name" LIKE '%00166%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 06:19:42 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 623
ERROR - 2019-12-26 06:19:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 06:20:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 623
ERROR - 2019-12-26 06:20:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 06:21:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 06:21:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 06:21:42 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 623
ERROR - 2019-12-26 06:21:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 06:23:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 06:23:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 06:23:33 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 623
ERROR - 2019-12-26 06:23:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 06:23:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 06:23:42 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%00156%' or "name" like '%00156%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%00156%' ESCAPE '!'
OR  "md"."name" LIKE '%00156%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 06:24:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 06:26:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 06:26:05 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%SUSILO%' or "name" like '%SUSILO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%SUSILO%' ESCAPE '!'
OR  "md"."name" LIKE '%SUSILO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 06:26:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 06:26:07 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%SUSILO %' or "name" like '%SUSILO %') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%SUSILO %' ESCAPE '!'
OR  "md"."name" LIKE '%SUSILO %' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 06:26:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 06:26:10 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%SUSILO PURNOMO%' or "name" like '%SUSILO PURNOMO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%SUSILO PURNOMO%' ESCAPE '!'
OR  "md"."name" LIKE '%SUSILO PURNOMO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 06:29:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 06:29:28 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 06:29:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 06:33:09 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 06:39:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 06:39:13 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/%' or "name" like '%R/%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 06:39:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 06:39:14 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/%' or "name" like '%R/PB/%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 06:39:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 06:39:17 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201912%' or "name" like '%R/PB/201912%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201912%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201912%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 06:39:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 06:39:18 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201912/%' or "name" like '%R/PB/201912/%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201912/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201912/%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 06:39:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 06:39:21 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201912/00166%' or "name" like '%R/PB/201912/00166%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201912/00166%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201912/00166%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 06:39:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 06:39:27 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%KHUNDIR%' or "name" like '%KHUNDIR%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%KHUNDIR%' ESCAPE '!'
OR  "md"."name" LIKE '%KHUNDIR%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 06:54:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 06:54:02 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%00166%' or "name" like '%00166%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%00166%' ESCAPE '!'
OR  "md"."name" LIKE '%00166%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 06:54:50 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 623
ERROR - 2019-12-26 06:54:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 07:07:49 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 07:07:49 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 07:11:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 07:11:00 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%KHU%' or "name" like '%KHU%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%KHU%' ESCAPE '!'
OR  "md"."name" LIKE '%KHU%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 07:11:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 07:11:04 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%KHUND%' or "name" like '%KHUND%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%KHUND%' ESCAPE '!'
OR  "md"."name" LIKE '%KHUND%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 07:11:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 07:11:08 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%KHUNDIRI%' or "name" like '%KHUNDIRI%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%KHUNDIRI%' ESCAPE '!'
OR  "md"."name" LIKE '%KHUNDIRI%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 07:11:56 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 623
ERROR - 2019-12-26 07:11:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 07:37:11 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 623
ERROR - 2019-12-26 07:37:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 07:38:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 07:48:01 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 07:48:01 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 07:48:11 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 07:48:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 07:48:29 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 07:52:50 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 623
ERROR - 2019-12-26 07:52:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 07:53:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 07:53:59 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%00164%' or "name" like '%00164%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%00164%' ESCAPE '!'
OR  "md"."name" LIKE '%00164%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 07:54:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 07:54:20 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%ROS%' or "name" like '%ROS%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%ROS%' ESCAPE '!'
OR  "md"."name" LIKE '%ROS%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 07:54:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 07:54:21 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%ROSI%' or "name" like '%ROSI%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%ROSI%' ESCAPE '!'
OR  "md"."name" LIKE '%ROSI%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 07:54:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 07:54:23 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%ROSIDI%' or "name" like '%ROSIDI%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%ROSIDI%' ESCAPE '!'
OR  "md"."name" LIKE '%ROSIDI%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 07:54:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 07:55:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 07:55:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 08:09:25 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 08:09:25 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 08:11:25 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 623
ERROR - 2019-12-26 08:11:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 08:11:34 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 08:11:34 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 08:24:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 08:25:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 08:25:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 08:32:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 08:33:19 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 08:33:19 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 08:43:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:43:48 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO%' or "name" like '%JOKO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:43:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:43:50 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO %' or "name" like '%JOKO %') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO %' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO %' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:43:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:43:56 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO M%' or "name" like '%JOKO M%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO M%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO M%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:43:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:43:56 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO MU%' or "name" like '%JOKO MU%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO MU%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO MU%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:43:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:43:57 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO M%' or "name" like '%JOKO M%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO M%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO M%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:44:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:44:15 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JO%' or "name" like '%JO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JO%' ESCAPE '!'
OR  "md"."name" LIKE '%JO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:44:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:44:16 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO %' or "name" like '%JOKO %') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO %' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO %' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:44:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:44:25 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO%' or "name" like '%JOKO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:44:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 08:44:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:44:55 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 08:45:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:45:46 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%J%' or "name" like '%J%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%J%' ESCAPE '!'
OR  "md"."name" LIKE '%J%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:45:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:45:46 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JO%' or "name" like '%JO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JO%' ESCAPE '!'
OR  "md"."name" LIKE '%JO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:45:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:45:46 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO%' or "name" like '%JOKO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:45:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:45:47 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO %' or "name" like '%JOKO %') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO %' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO %' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:45:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:45:47 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JO%' or "name" like '%JO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JO%' ESCAPE '!'
OR  "md"."name" LIKE '%JO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:45:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:45:48 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO%' or "name" like '%JOKO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:46:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:46:08 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO%' or "name" like '%JOKO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:46:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:46:11 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/%' or "name" like '%R/%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:46:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:46:13 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/BCG%' or "name" like '%R/BCG%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/BCG%' ESCAPE '!'
OR  "md"."name" LIKE '%R/BCG%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:46:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:46:15 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/BCG/%' or "name" like '%R/BCG/%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/BCG/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/BCG/%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:46:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:46:16 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/BCG/2%' or "name" like '%R/BCG/2%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/BCG/2%' ESCAPE '!'
OR  "md"."name" LIKE '%R/BCG/2%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:46:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:46:18 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/BCG/201%' or "name" like '%R/BCG/201%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/BCG/201%' ESCAPE '!'
OR  "md"."name" LIKE '%R/BCG/201%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:46:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:46:20 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/BCG/2019%' or "name" like '%R/BCG/2019%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/BCG/2019%' ESCAPE '!'
OR  "md"."name" LIKE '%R/BCG/2019%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:46:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:46:22 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/BCG/201912/%' or "name" like '%R/BCG/201912/%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/BCG/201912/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/BCG/201912/%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:46:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:46:24 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/BCG/201912/001%' or "name" like '%R/BCG/201912/001%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/BCG/201912/001%' ESCAPE '!'
OR  "md"."name" LIKE '%R/BCG/201912/001%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:46:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 08:46:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 08:46:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:46:49 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 08:46:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:46:58 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 800000 and md.tipe='TIARA' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '500000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj where driver_id in (select id from master_driver where kip_number like '%A%' or "name" like '%A%') and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%A%' ESCAPE '!'
OR  "md"."name" LIKE '%A%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:47:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:47:13 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%J%' or "name" like '%J%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%J%' ESCAPE '!'
OR  "md"."name" LIKE '%J%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:47:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:47:14 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JO%' or "name" like '%JO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JO%' ESCAPE '!'
OR  "md"."name" LIKE '%JO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:47:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:47:15 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO%' or "name" like '%JOKO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:47:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:47:15 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO %' or "name" like '%JOKO %') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO %' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO %' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 08:47:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 08:48:22 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 08:48:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 08:48:31 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 08:50:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 08:54:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 08:54:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 08:54:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 623
ERROR - 2019-12-26 08:54:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 08:57:15 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-26 08:58:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 08:59:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 08:59:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 09:00:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 09:02:31 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 09:02:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 09:02:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:02:54 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO%' or "name" like '%JOKO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:02:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:02:55 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO %' or "name" like '%JOKO %') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO %' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO %' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:02:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:02:56 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO %' or "name" like '%JOKO %') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO %' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO %' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:05:45 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 09:06:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 09:08:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  insert or update on table &quot;ap_jaminan&quot; violates foreign key constraint &quot;ap_jaminan_master_pool_fk&quot;
DETAIL:  Key (pool_id)=(0) is not present in table &quot;master_pool&quot;. /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:08:04 --> Query error: ERROR:  insert or update on table "ap_jaminan" violates foreign key constraint "ap_jaminan_master_pool_fk"
DETAIL:  Key (pool_id)=(0) is not present in table "master_pool". - Invalid query: INSERT INTO "ap_jaminan" ("driver_id", "pool_id", "created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "doc_number", "pt_id") VALUES ('82', '0', '2019-12-26 09:08:04', 'Paid', 'Top Up by Pool', '85000', '715000', 800000, 'TOPUP/BCG/201912/00807', 12)
ERROR - 2019-12-26 09:08:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:08:04 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-12-26 09:09:00 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-26 09:09:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 09:09:36 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 09:09:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 09:09:56 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 09:10:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 09:13:28 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 09:13:44 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 09:14:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 09:14:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:14:37 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%SU%' or "name" like '%SU%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%SU%' ESCAPE '!'
OR  "md"."name" LIKE '%SU%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:14:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:14:40 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%SUSILO%' or "name" like '%SUSILO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%SUSILO%' ESCAPE '!'
OR  "md"."name" LIKE '%SUSILO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:14:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:14:57 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%001%' or "name" like '%001%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%001%' ESCAPE '!'
OR  "md"."name" LIKE '%001%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:14:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:14:59 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%00156%' or "name" like '%00156%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%00156%' ESCAPE '!'
OR  "md"."name" LIKE '%00156%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:15:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:15:09 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
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
ERROR - 2019-12-26 09:15:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:15:13 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB%' or "name" like '%R/PB%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:15:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:15:19 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB%' or "name" like '%R/PB%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:15:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:15:20 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/%' or "name" like '%R/PB/%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:15:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:15:25 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/2019%' or "name" like '%R/PB/2019%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/2019%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/2019%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:15:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:15:26 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201912/%' or "name" like '%R/PB/201912/%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201912/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201912/%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:15:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:15:29 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/201912/00156%' or "name" like '%R/PB/201912/00156%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/201912/00156%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/201912/00156%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:20:36 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 09:20:36 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 09:20:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:20:48 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO%' or "name" like '%JOKO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:20:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:20:49 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO %' or "name" like '%JOKO %') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO %' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO %' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:21:52 --> Severity: Notice --> Undefined index: very /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-12-26 09:22:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:22:12 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
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
ERROR - 2019-12-26 09:22:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:22:13 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/%' or "name" like '%R/%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:22:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:22:15 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB%' or "name" like '%R/PB%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:22:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:22:16 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/PB/%' or "name" like '%R/PB/%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/PB/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/PB/%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:23:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 09:23:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:23:28 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JO%' or "name" like '%JO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JO%' ESCAPE '!'
OR  "md"."name" LIKE '%JO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:23:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:23:28 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO%' or "name" like '%JOKO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:23:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:23:31 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO %' or "name" like '%JOKO %') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO %' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO %' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:23:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:23:31 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO%' or "name" like '%JOKO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:23:37 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-26 09:23:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:23:41 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%J%' or "name" like '%J%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%J%' ESCAPE '!'
OR  "md"."name" LIKE '%J%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:23:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:23:42 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JO%' or "name" like '%JO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JO%' ESCAPE '!'
OR  "md"."name" LIKE '%JO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:23:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:23:43 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOK%' or "name" like '%JOK%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOK%' ESCAPE '!'
OR  "md"."name" LIKE '%JOK%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:23:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:23:45 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO%' or "name" like '%JOKO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:23:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:23:57 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%001%' or "name" like '%001%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%001%' ESCAPE '!'
OR  "md"."name" LIKE '%001%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:24:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:24:19 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JO%' or "name" like '%JO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JO%' ESCAPE '!'
OR  "md"."name" LIKE '%JO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:24:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 09:25:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 09:25:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:25:49 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JO%' or "name" like '%JO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JO%' ESCAPE '!'
OR  "md"."name" LIKE '%JO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:25:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:25:50 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JO%' or "name" like '%JO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JO%' ESCAPE '!'
OR  "md"."name" LIKE '%JO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:25:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:25:55 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOK%' or "name" like '%JOK%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOK%' ESCAPE '!'
OR  "md"."name" LIKE '%JOK%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:26:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:26:02 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JO%' or "name" like '%JO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JO%' ESCAPE '!'
OR  "md"."name" LIKE '%JO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:26:07 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-26 09:26:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:26:13 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%J%' or "name" like '%J%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%J%' ESCAPE '!'
OR  "md"."name" LIKE '%J%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:26:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:26:14 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO%' or "name" like '%JOKO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:26:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:26:37 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO %' or "name" like '%JOKO %') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO %' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO %' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:26:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:26:38 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO%' or "name" like '%JOKO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:27:02 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 09:27:20 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-26 09:27:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:27:25 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
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
ERROR - 2019-12-26 09:27:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:27:41 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%R/%' or "name" like '%R/%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%R/%' ESCAPE '!'
OR  "md"."name" LIKE '%R/%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:27:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:27:42 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
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
ERROR - 2019-12-26 09:27:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:27:44 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
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
ERROR - 2019-12-26 09:28:55 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-26 09:29:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:29:11 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
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
ERROR - 2019-12-26 09:29:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:29:12 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%RE%' or "name" like '%RE%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%RE%' ESCAPE '!'
OR  "md"."name" LIKE '%RE%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:29:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:29:17 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%J%' or "name" like '%J%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%J%' ESCAPE '!'
OR  "md"."name" LIKE '%J%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:29:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:29:18 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JO%' or "name" like '%JO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JO%' ESCAPE '!'
OR  "md"."name" LIKE '%JO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:29:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:29:19 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOK%' or "name" like '%JOK%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOK%' ESCAPE '!'
OR  "md"."name" LIKE '%JOK%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:29:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:29:20 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO%' or "name" like '%JOKO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:29:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:29:22 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOK%' or "name" like '%JOK%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOK%' ESCAPE '!'
OR  "md"."name" LIKE '%JOK%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:29:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:29:26 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%J%' or "name" like '%J%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%J%' ESCAPE '!'
OR  "md"."name" LIKE '%J%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:29:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:29:28 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOK%' or "name" like '%JOK%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOK%' ESCAPE '!'
OR  "md"."name" LIKE '%JOK%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:29:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:29:37 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO%' or "name" like '%JOKO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO%' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:29:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:29:38 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOKO %' or "name" like '%JOKO %') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOKO %' ESCAPE '!'
OR  "md"."name" LIKE '%JOKO %' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:29:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:29:54 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%J%' or "name" like '%J%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%J%' ESCAPE '!'
OR  "md"."name" LIKE '%J%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:29:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:29:55 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JO%' or "name" like '%JO%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JO%' ESCAPE '!'
OR  "md"."name" LIKE '%JO%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:29:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:29:56 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 500000 and md.tipe='REGULAR' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '100000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj 
			where driver_id in (select id from master_driver where kip_number like '%JOK%' or "name" like '%JOK%') 
			and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%JOK%' ESCAPE '!'
OR  "md"."name" LIKE '%JOK%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:30:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 09:30:37 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-26 09:33:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 09:33:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  smallint out of range /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:33:46 --> Query error: ERROR:  smallint out of range - Invalid query: SELECT md.id id_driver, md.kip_number as kip, md.hari_kerja, CASE
				WHEN hari_kerja <= limit_hk_cicilan_jaminan and aj.amount_akhir < (md.jaminan_awal + (md.hari_kerja*md.amount_cicilan_jaminan) ) THEN 'no'
				WHEN hari_kerja > limit_hk_cicilan_jaminan and aj.amount_akhir < 800000 and md.tipe='TIARA' THEN 'no'
				ELSE 'yes'
			END AS cetak_spj, CONCAT(md.name, ' (', md.kip_number, ') ') as kip_numbers, aj.amount_akhir, md.name, md.created_dt, dr.ketentuan_jaminan, dr.tipe as tipe_driver
FROM "master_driver" "md"
LEFT JOIN "ap_jaminan" "aj" ON "md"."ap_jaminan_id" = "aj"."id"
LEFT JOIN "driver_registration" "dr" ON "dr"."id" = "md"."driver_registration_id"
WHERE "aj"."amount_akhir" >= '500000'
AND md.id NOT IN (SELECT driver_id FROM trx_spj where driver_id in (select id from master_driver where kip_number like '%000%' or "name" like '%000%') and "status" in( 'Active','Drive','Payment'))
AND   (
"md"."kip_number" LIKE '%000%' ESCAPE '!'
OR  "md"."name" LIKE '%000%' ESCAPE '!'
 )
ORDER BY "md"."kip_number" ASC
 LIMIT 3
ERROR - 2019-12-26 09:33:57 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 09:34:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 09:39:03 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-26 09:39:23 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-26 09:40:03 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-26 09:40:11 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-26 09:44:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 09:47:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 09:47:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 09:47:14 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 09:53:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 09:53:37 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 09:53:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 09:58:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 09:59:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 10:00:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 10:01:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 10:11:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 10:11:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 10:11:32 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 10:15:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 10:15:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 10:16:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 10:49:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 10:49:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 10:49:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 11:02:11 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-26 11:02:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 11:02:21 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-26 11:06:36 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 11:06:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 11:06:48 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 11:17:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 11:17:15 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 11:17:29 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 12:11:12 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 12:11:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 12:13:18 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 12:13:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 12:13:35 --> 404 Page Not Found: Assets/css
ERROR - 2019-12-26 12:15:14 --> 404 Page Not Found: Assets/fonts
ERROR - 2019-12-26 12:16:31 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 12:16:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 12:17:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 12:17:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 12:23:25 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-26 12:24:31 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-26 12:25:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 12:25:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 12:25:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 12:26:34 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-26 12:28:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 12:46:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 12:47:19 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-26 12:48:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 12:48:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 13:11:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 13:12:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 13:13:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 13:13:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 13:14:41 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 13:14:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 13:14:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 13:14:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 13:14:51 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 13:15:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 13:16:01 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-26 13:17:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 13:18:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 13:18:40 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 13:18:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 13:22:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 13:22:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 13:22:51 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-26 13:23:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 13:23:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 13:26:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 13:26:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 13:26:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 13:45:22 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 13:45:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 13:47:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 13:56:47 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 13:56:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 13:56:57 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 13:57:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 13:57:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 13:58:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 13:58:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 13:58:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 14:02:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 14:14:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 14:18:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;NaN&quot;
LINE 1: ...4:18:54', 'Paid', 'Penambahan Jaminan', '320000', 'NaN', 320...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:18:54 --> Query error: ERROR:  invalid input syntax for integer: "NaN"
LINE 1: ...4:18:54', 'Paid', 'Penambahan Jaminan', '320000', 'NaN', 320...
                                                             ^ - Invalid query: INSERT INTO "ap_jaminan" ("created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "driver_id", "doc_number") VALUES ('2019-12-26 14:18:54', 'Paid', 'Penambahan Jaminan', '320000', 'NaN', 320000, '5', '176', 'TTS/BCG/20191226/5444')
ERROR - 2019-12-26 14:18:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:18:54 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-12-26 14:19:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;NaN&quot;
LINE 1: ...4:19:10', 'Paid', 'Penambahan Jaminan', '320000', 'NaN', 320...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:19:10 --> Query error: ERROR:  invalid input syntax for integer: "NaN"
LINE 1: ...4:19:10', 'Paid', 'Penambahan Jaminan', '320000', 'NaN', 320...
                                                             ^ - Invalid query: INSERT INTO "ap_jaminan" ("created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "driver_id", "doc_number") VALUES ('2019-12-26 14:19:10', 'Paid', 'Penambahan Jaminan', '320000', 'NaN', 320000, '5', '176', 'TTS/BCG/20191226/5444')
ERROR - 2019-12-26 14:19:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:19:10 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-12-26 14:19:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;NaN&quot;
LINE 1: ...4:19:49', 'Paid', 'Penambahan Jaminan', '320000', 'NaN', 320...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:19:49 --> Query error: ERROR:  invalid input syntax for integer: "NaN"
LINE 1: ...4:19:49', 'Paid', 'Penambahan Jaminan', '320000', 'NaN', 320...
                                                             ^ - Invalid query: INSERT INTO "ap_jaminan" ("created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "driver_id", "doc_number") VALUES ('2019-12-26 14:19:49', 'Paid', 'Penambahan Jaminan', '320000', 'NaN', 320000, '5', '176', 'TTS/BCG/20191226/5444')
ERROR - 2019-12-26 14:19:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:19:49 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-12-26 14:20:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;NaN&quot;
LINE 1: ...4:20:33', 'Paid', 'Penambahan Jaminan', '320000', 'NaN', 320...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:20:33 --> Query error: ERROR:  invalid input syntax for integer: "NaN"
LINE 1: ...4:20:33', 'Paid', 'Penambahan Jaminan', '320000', 'NaN', 320...
                                                             ^ - Invalid query: INSERT INTO "ap_jaminan" ("created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "driver_id", "doc_number") VALUES ('2019-12-26 14:20:33', 'Paid', 'Penambahan Jaminan', '320000', 'NaN', 320000, '5', '176', 'TTS/BCG/20191226/5444')
ERROR - 2019-12-26 14:20:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:20:33 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-12-26 14:21:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;NaN&quot;
LINE 1: ...4:21:23', 'Paid', 'Penambahan Jaminan', '320000', 'NaN', 320...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:21:23 --> Query error: ERROR:  invalid input syntax for integer: "NaN"
LINE 1: ...4:21:23', 'Paid', 'Penambahan Jaminan', '320000', 'NaN', 320...
                                                             ^ - Invalid query: INSERT INTO "ap_jaminan" ("created", "status", "keterangan", "amount_awal", "amount", "amount_akhir", "pool_id", "driver_id", "doc_number") VALUES ('2019-12-26 14:21:23', 'Paid', 'Penambahan Jaminan', '320000', 'NaN', 320000, '5', '176', 'TTS/BCG/20191226/5444')
ERROR - 2019-12-26 14:21:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:21:23 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-12-26 14:21:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 14:22:02 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-26 14:22:04 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 14:22:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:22:12 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 14:22:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:22:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 14:22:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:22:36 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 14:22:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:22:38 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 14:22:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:22:44 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 14:23:03 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 14:23:03 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 14:23:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:23:34 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 14:28:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:28:33 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 14:32:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 14:32:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 14:33:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 14:43:16 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 14:43:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 14:48:40 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-12-26 14:48:43 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 14:48:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:48:47 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 14:50:04 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 14:50:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 14:51:12 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 14:51:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 14:51:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 14:51:13 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 14:51:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 14:52:32 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 14:52:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 14:53:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 14:53:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 14:53:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 14:55:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 14:57:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 15:05:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 15:08:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 15:09:12 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 15:09:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 15:09:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 15:10:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 15:12:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 15:21:00 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 15:21:01 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 15:33:46 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 15:33:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 15:38:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 15:38:46 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 15:38:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 15:38:54 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 15:44:20 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-26 15:44:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 15:44:57 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 15:45:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 15:48:44 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 15:48:44 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 15:49:06 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 15:49:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 15:49:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 15:51:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 15:56:48 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 15:56:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 15:57:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 15:57:17 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 15:57:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 15:57:24 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 15:59:05 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-26 16:00:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 16:04:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 16:04:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 16:04:49 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 16:04:49 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 16:09:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 16:11:07 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-26 16:11:34 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-26 16:13:06 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-26 16:13:24 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-26 16:14:51 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 16:14:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 16:14:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-12-26 16:15:14 --> 404 Page Not Found: Driver/build
ERROR - 2019-12-26 16:15:16 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-12-26 16:21:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 16:21:39 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 16:21:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 16:21:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 16:21:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 16:27:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 16:28:33 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-26 16:29:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 16:29:42 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 16:29:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 16:34:12 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 16:34:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 16:35:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 16:48:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 16:56:16 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 16:56:16 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 16:57:36 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 16:59:57 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-12-26 17:00:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 17:12:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 17:17:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 17:19:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 17:21:03 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 17:21:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 17:33:45 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-26 17:35:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 17:35:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 17:37:51 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-26 17:40:52 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 17:40:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 17:46:08 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 17:46:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 17:47:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...&quot;creator_id&quot;, &quot;ap_jaminan_id&quot;, &quot;pool_id&quot;) VALUES ('', '2019-...
                                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 17:47:28 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ..."creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-...
                                                             ^ - Invalid query: INSERT INTO "trx_setoran" ("spj_id", "created", "doc_number", "total_tagihan", "setoran_wajib", "denda", "payment_via_cash", "payment_via_ct", "payment_via_charge_room", "payment_via_edc", "payment_via_tabungan", "payment_total", "no_ct", "no_charge_room", "no_edc", "status", "amount_kembalian", "creator_id", "ap_jaminan_id", "pool_id") VALUES ('', '2019-12-26 17:47:28', 'TTS-TIARA/BCG/20191226/5457', '0', '', '0', '0', '0', '0', '0', 0, 0, '', '', '', 'Paid', '0', '43', NULL, '5')
ERROR - 2019-12-26 17:47:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 17:47:28 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-12-26 17:49:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 17:49:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:01:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:11:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:11:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 18:11:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:21:08 --> 404 Page Not Found: Report/build
ERROR - 2019-12-26 18:21:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:26:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 18:26:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:28:12 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 18:28:12 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 18:28:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:29:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:29:57 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 18:29:57 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 18:31:06 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 18:31:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:31:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:36:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:36:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:37:00 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 18:37:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:37:30 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 18:37:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:38:26 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 18:38:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:48:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:52:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:54:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:54:49 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 18:54:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 18:55:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 19:00:52 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 19:00:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 19:02:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 19:05:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 19:07:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 19:11:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 19:17:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 19:17:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 19:27:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 19:34:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 19:34:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 19:38:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 19:47:44 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 19:47:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 19:49:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 19:57:29 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 19:57:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 20:01:08 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 20:01:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 20:10:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 20:10:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 20:12:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 20:12:53 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 20:12:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 20:13:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 20:14:15 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 20:14:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 20:15:15 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 20:15:15 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 20:15:49 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 20:15:49 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 20:27:07 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-26 20:32:08 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-12-26 20:32:47 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 20:32:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 20:32:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 20:35:35 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-12-26 20:35:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 20:37:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 20:38:45 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 20:38:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 20:39:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 20:43:10 --> Severity: Notice --> Undefined variable: amount_akhir /var/www/html/rental/application/models/Spj_model.php 624
ERROR - 2019-12-26 20:43:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 20:43:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 20:54:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 21:05:15 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-26 21:05:48 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-26 21:06:04 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-26 21:06:28 --> 404 Page Not Found: Seragam/build
ERROR - 2019-12-26 21:07:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 21:08:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 21:12:00 --> 404 Page Not Found: Closing/build
ERROR - 2019-12-26 21:13:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 21:29:42 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-12-26 21:29:42 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-12-26 21:57:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 21:59:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 22:00:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 22:01:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 22:05:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 23:04:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-12-26 23:05:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-12-26 23:05:14 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
