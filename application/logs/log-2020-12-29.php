<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-29 03:37:50 --> Severity: Notice --> Undefined index: amount_awal C:\xampp5\htdocs\sales\application\models\Payment_model.php 25
ERROR - 2020-12-29 03:37:50 --> Severity: Notice --> Undefined index: amount_awal C:\xampp5\htdocs\sales\application\models\Payment_model.php 27
ERROR - 2020-12-29 03:37:50 --> Severity: Notice --> Undefined index: amount_awal C:\xampp5\htdocs\sales\application\models\Payment_model.php 28
ERROR - 2020-12-29 03:37:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;id&quot; violates not-null constraint
DETAIL:  Failing row contains (null, 2020-12-29 03:37:50, 1, Belum Lunas, null, 0, 0, TRX/202012/1, 10). C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-29 03:37:50 --> Query error: ERROR:  null value in column "id" violates not-null constraint
DETAIL:  Failing row contains (null, 2020-12-29 03:37:50, 1, Belum Lunas, null, 0, 0, TRX/202012/1, 10). - Invalid query: INSERT INTO "payment" ("skh_id", "created_dt", "created_by", "amount_awal", "amount", "amount_akhir", "status", "doc_number") VALUES ('10', '2020-12-29 03:37:50', '1', NULL, '0', 0, 'Belum Lunas', 'TRX/202012/1')
ERROR - 2020-12-29 03:37:50 --> Severity: Notice --> Undefined index: amount_awal C:\xampp5\htdocs\sales\application\models\Payment_model.php 41
ERROR - 2020-12-29 03:37:50 --> Severity: Notice --> Undefined index: amount_awal C:\xampp5\htdocs\sales\application\models\Payment_model.php 42
ERROR - 2020-12-29 03:37:50 --> Severity: Notice --> Undefined index: amount_awal C:\xampp5\htdocs\sales\application\models\Payment_model.php 42
ERROR - 2020-12-29 03:37:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-29 03:37:50 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: UPDATE "skh" SET "updated_dt" = '2020-12-29 03:37:50', "updated_by" = '1', "amount_terbayar" = 0, "status" = 'Lunas', "lunas_dt" = '2020-12-29 03:37:50'
WHERE "id" = '10'
ERROR - 2020-12-29 03:37:50 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 345
ERROR - 2020-12-29 03:43:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  null value in column &quot;id&quot; violates not-null constraint
DETAIL:  Failing row contains (null, 2020-12-29 03:43:41, 1, Lunas, 5000, 0, 5000, TRX/202012/2, 10). C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-29 03:43:41 --> Query error: ERROR:  null value in column "id" violates not-null constraint
DETAIL:  Failing row contains (null, 2020-12-29 03:43:41, 1, Lunas, 5000, 0, 5000, TRX/202012/2, 10). - Invalid query: INSERT INTO "payment" ("skh_id", "created_dt", "created_by", "amount_awal", "amount", "amount_akhir", "status", "doc_number") VALUES ('10', '2020-12-29 03:43:41', '1', '5000', '0', 5000, 'Lunas', 'TRX/202012/2')
ERROR - 2020-12-29 03:43:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-29 03:43:41 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: UPDATE "skh" SET "updated_dt" = '2020-12-29 03:43:41', "updated_by" = '1', "amount_terbayar" = 5000, "status" = 'Lunas', "lunas_dt" = '2020-12-29 03:43:41'
WHERE "id" = '10'
ERROR - 2020-12-29 03:43:41 --> Severity: Warning --> pg_affected_rows() expects parameter 1 to be resource, boolean given C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 345
ERROR - 2020-12-29 03:45:00 --> Severity: Notice --> Undefined index: invoice_number C:\xampp5\htdocs\sales\application\views\payment\index.php 59
ERROR - 2020-12-29 03:45:00 --> Severity: Notice --> Undefined index: wo_number C:\xampp5\htdocs\sales\application\views\payment\index.php 60
ERROR - 2020-12-29 03:45:00 --> Severity: Notice --> Undefined index: lunas C:\xampp5\htdocs\sales\application\views\payment\index.php 61
ERROR - 2020-12-29 03:45:00 --> Severity: Notice --> Undefined index: total_billing C:\xampp5\htdocs\sales\application\views\payment\index.php 62
ERROR - 2020-12-29 03:45:00 --> Severity: Notice --> Undefined index: tipe_pembayaran C:\xampp5\htdocs\sales\application\views\payment\index.php 63
ERROR - 2020-12-29 03:45:00 --> Severity: Notice --> Undefined index: tipe_pembayaran C:\xampp5\htdocs\sales\application\views\payment\index.php 63
ERROR - 2020-12-29 03:45:00 --> Severity: Notice --> Undefined index: tipe_pembayaran C:\xampp5\htdocs\sales\application\views\payment\index.php 63
ERROR - 2020-12-29 03:45:00 --> Severity: Notice --> Undefined index: dt_lunas C:\xampp5\htdocs\sales\application\views\payment\index.php 66
ERROR - 2020-12-29 03:45:00 --> Severity: Notice --> Undefined index: no_pintu C:\xampp5\htdocs\sales\application\views\payment\index.php 67
ERROR - 2020-12-29 03:45:00 --> Severity: Notice --> Undefined index: nama_customer C:\xampp5\htdocs\sales\application\views\payment\index.php 68
ERROR - 2020-12-29 03:45:00 --> Severity: Notice --> Undefined variable: dataUser C:\xampp5\htdocs\sales\application\views\payment\index.php 69
ERROR - 2020-12-29 03:45:00 --> Severity: Notice --> Undefined index: input_by C:\xampp5\htdocs\sales\application\views\payment\index.php 69
ERROR - 2020-12-29 03:45:00 --> Severity: Notice --> Undefined variable: dataUser C:\xampp5\htdocs\sales\application\views\payment\index.php 70
ERROR - 2020-12-29 03:45:00 --> Severity: Notice --> Undefined index: receiver_id C:\xampp5\htdocs\sales\application\views\payment\index.php 70
ERROR - 2020-12-29 03:46:54 --> Severity: Notice --> Undefined index: wo_number C:\xampp5\htdocs\sales\application\views\payment\index.php 60
ERROR - 2020-12-29 03:46:54 --> Severity: Notice --> Undefined index: lunas C:\xampp5\htdocs\sales\application\views\payment\index.php 61
ERROR - 2020-12-29 03:46:54 --> Severity: Notice --> Undefined index: total_billing C:\xampp5\htdocs\sales\application\views\payment\index.php 62
ERROR - 2020-12-29 03:46:54 --> Severity: Notice --> Undefined index: tipe_pembayaran C:\xampp5\htdocs\sales\application\views\payment\index.php 63
ERROR - 2020-12-29 03:46:54 --> Severity: Notice --> Undefined index: tipe_pembayaran C:\xampp5\htdocs\sales\application\views\payment\index.php 63
ERROR - 2020-12-29 03:46:54 --> Severity: Notice --> Undefined index: tipe_pembayaran C:\xampp5\htdocs\sales\application\views\payment\index.php 63
ERROR - 2020-12-29 03:46:54 --> Severity: Notice --> Undefined index: dt_lunas C:\xampp5\htdocs\sales\application\views\payment\index.php 66
ERROR - 2020-12-29 03:46:54 --> Severity: Notice --> Undefined index: no_pintu C:\xampp5\htdocs\sales\application\views\payment\index.php 67
ERROR - 2020-12-29 03:46:54 --> Severity: Notice --> Undefined index: nama_customer C:\xampp5\htdocs\sales\application\views\payment\index.php 68
ERROR - 2020-12-29 03:46:54 --> Severity: Notice --> Undefined variable: dataUser C:\xampp5\htdocs\sales\application\views\payment\index.php 69
ERROR - 2020-12-29 03:46:54 --> Severity: Notice --> Undefined index: input_by C:\xampp5\htdocs\sales\application\views\payment\index.php 69
ERROR - 2020-12-29 03:46:54 --> Severity: Notice --> Undefined variable: dataUser C:\xampp5\htdocs\sales\application\views\payment\index.php 70
ERROR - 2020-12-29 03:46:54 --> Severity: Notice --> Undefined index: receiver_id C:\xampp5\htdocs\sales\application\views\payment\index.php 70
ERROR - 2020-12-29 03:47:19 --> Severity: Notice --> Undefined index: lunas C:\xampp5\htdocs\sales\application\views\payment\index.php 59
ERROR - 2020-12-29 03:47:19 --> Severity: Notice --> Undefined index: total_billing C:\xampp5\htdocs\sales\application\views\payment\index.php 60
ERROR - 2020-12-29 03:47:19 --> Severity: Notice --> Undefined index: tipe_pembayaran C:\xampp5\htdocs\sales\application\views\payment\index.php 61
ERROR - 2020-12-29 03:47:19 --> Severity: Notice --> Undefined index: tipe_pembayaran C:\xampp5\htdocs\sales\application\views\payment\index.php 61
ERROR - 2020-12-29 03:47:19 --> Severity: Notice --> Undefined index: tipe_pembayaran C:\xampp5\htdocs\sales\application\views\payment\index.php 61
ERROR - 2020-12-29 03:47:19 --> Severity: Notice --> Undefined index: dt_lunas C:\xampp5\htdocs\sales\application\views\payment\index.php 64
ERROR - 2020-12-29 03:47:19 --> Severity: Notice --> Undefined index: no_pintu C:\xampp5\htdocs\sales\application\views\payment\index.php 65
ERROR - 2020-12-29 03:47:19 --> Severity: Notice --> Undefined index: nama_customer C:\xampp5\htdocs\sales\application\views\payment\index.php 66
ERROR - 2020-12-29 03:47:19 --> Severity: Notice --> Undefined variable: dataUser C:\xampp5\htdocs\sales\application\views\payment\index.php 67
ERROR - 2020-12-29 03:47:19 --> Severity: Notice --> Undefined index: input_by C:\xampp5\htdocs\sales\application\views\payment\index.php 67
ERROR - 2020-12-29 03:47:19 --> Severity: Notice --> Undefined variable: dataUser C:\xampp5\htdocs\sales\application\views\payment\index.php 68
ERROR - 2020-12-29 03:47:19 --> Severity: Notice --> Undefined index: receiver_id C:\xampp5\htdocs\sales\application\views\payment\index.php 68
ERROR - 2020-12-29 03:47:37 --> Severity: Notice --> Undefined index: lunas C:\xampp5\htdocs\sales\application\views\payment\index.php 58
ERROR - 2020-12-29 03:47:37 --> Severity: Notice --> Undefined index: tipe_pembayaran C:\xampp5\htdocs\sales\application\views\payment\index.php 60
ERROR - 2020-12-29 03:47:37 --> Severity: Notice --> Undefined index: tipe_pembayaran C:\xampp5\htdocs\sales\application\views\payment\index.php 60
ERROR - 2020-12-29 03:47:37 --> Severity: Notice --> Undefined index: tipe_pembayaran C:\xampp5\htdocs\sales\application\views\payment\index.php 60
ERROR - 2020-12-29 03:47:37 --> Severity: Notice --> Undefined index: dt_lunas C:\xampp5\htdocs\sales\application\views\payment\index.php 63
ERROR - 2020-12-29 03:47:37 --> Severity: Notice --> Undefined index: no_pintu C:\xampp5\htdocs\sales\application\views\payment\index.php 64
ERROR - 2020-12-29 03:47:37 --> Severity: Notice --> Undefined index: nama_customer C:\xampp5\htdocs\sales\application\views\payment\index.php 65
ERROR - 2020-12-29 03:47:37 --> Severity: Notice --> Undefined variable: dataUser C:\xampp5\htdocs\sales\application\views\payment\index.php 66
ERROR - 2020-12-29 03:47:37 --> Severity: Notice --> Undefined index: input_by C:\xampp5\htdocs\sales\application\views\payment\index.php 66
ERROR - 2020-12-29 03:47:37 --> Severity: Notice --> Undefined variable: dataUser C:\xampp5\htdocs\sales\application\views\payment\index.php 67
ERROR - 2020-12-29 03:47:37 --> Severity: Notice --> Undefined index: receiver_id C:\xampp5\htdocs\sales\application\views\payment\index.php 67
ERROR - 2020-12-29 04:02:20 --> Severity: Notice --> Undefined index: Harga Disepakati C:\xampp5\htdocs\sales\application\views\payment\index.php 60
ERROR - 2020-12-29 04:04:07 --> 404 Page Not Found: Payment/detail
ERROR - 2020-12-29 05:03:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;03/20/1993&quot;
LINE 1: ...Shilvi Witanti', '3674062111930001', 'tangerang', '03/20/199...
                                                             ^
HINT:  Perhaps you need a different &quot;datestyle&quot; setting. C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-29 05:03:49 --> Query error: ERROR:  date/time field value out of range: "03/20/1993"
LINE 1: ...Shilvi Witanti', '3674062111930001', 'tangerang', '03/20/199...
                                                             ^
HINT:  Perhaps you need a different "datestyle" setting. - Invalid query: INSERT INTO "customer" ("created_dt", "created_by", "nik", "nama", "path_ktp", "alamat", "nama_badan_usaha", "tanggal_lahir", "tempat_lahir", "no_telepon", "pemberi_kuasa", "no_kuasa", "tanggal_kuasa", "no_identitas_badan_usaha", "nama_perwakilan", "no_identitas_perwakilan", "tempat_lahir_perwakilan", "tanggal_lahir_perwakilan", "no_telepon_perwakilan", "doc_number") VALUES ('2020-12-29 05:03:49', '1', '3674062111930001', 'Ahmad fauzi', '/uploads/ktp/3674062111930001.JPG', 'jl. oscar raya, rt001/002, bambu apus, pamulang, tangerang selatan', 'pt. murah tani, tbk.', '1993-11-21', 'tangerang', '085624904879', 'Bpk. Malawi', '20201201', '2020-12-01', '1222931100010', 'Shilvi Witanti', '3674062111930001', 'tangerang', '03/20/1993', '087809066802', 'CUST/202012/5')
ERROR - 2020-12-29 05:13:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;03/20/1997&quot;
LINE 1: ...001', 'shilvi', '3674062111930001', '11/21/1993', '03/20/199...
                                                             ^
HINT:  Perhaps you need a different &quot;datestyle&quot; setting. C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-29 05:13:33 --> Query error: ERROR:  date/time field value out of range: "03/20/1997"
LINE 1: ...001', 'shilvi', '3674062111930001', '11/21/1993', '03/20/199...
                                                             ^
HINT:  Perhaps you need a different "datestyle" setting. - Invalid query: INSERT INTO "customer" ("created_dt", "created_by", "nik", "nama", "path_ktp", "alamat", "nama_badan_usaha", "tanggal_lahir", "tempat_lahir", "no_telepon", "pemberi_kuasa", "no_kuasa", "tanggal_kuasa", "no_identitas_badan_usaha", "nama_perwakilan", "no_identitas_perwakilan", "tempat_lahir_perwakilan", "tanggal_lahir_perwakilan", "no_telepon_perwakilan", "doc_number") VALUES ('2020-12-29 05:13:33', '1', '3674062111930001', 'Ahmad fauzi', '/uploads/ktp/36740621119300011.JPG', 'jl. oscar raya, rt001/002, bambu apus, pamulang, tangerang selatan', 'pt murah tani, tbk', '1993-11-21', 'tangerang', '085624904879', 'bapak malawi', '20201201', '2020-12-01', '3674062111930001', 'shilvi', '3674062111930001', '11/21/1993', '03/20/1997', '085624904879', 'CUST/202012/6')
ERROR - 2020-12-29 05:16:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;12/15/2020&quot;
LINE 1: ..., 'ahmad fauzi', '3674062111930001', 'tangerang', '12/15/202...
                                                             ^
HINT:  Perhaps you need a different &quot;datestyle&quot; setting. C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-29 05:16:46 --> Query error: ERROR:  date/time field value out of range: "12/15/2020"
LINE 1: ..., 'ahmad fauzi', '3674062111930001', 'tangerang', '12/15/202...
                                                             ^
HINT:  Perhaps you need a different "datestyle" setting. - Invalid query: INSERT INTO "customer" ("created_dt", "created_by", "nik", "nama", "path_ktp", "alamat", "nama_badan_usaha", "tanggal_lahir", "tempat_lahir", "no_telepon", "pemberi_kuasa", "no_kuasa", "tanggal_kuasa", "no_identitas_badan_usaha", "nama_perwakilan", "no_identitas_perwakilan", "tempat_lahir_perwakilan", "tanggal_lahir_perwakilan", "no_telepon_perwakilan", "doc_number") VALUES ('2020-12-29 05:16:46', '1', '3674062111930001', 'ahmad fauzi', '/uploads/ktp/36740621119300012.JPG', 'jl. oscar raya rt006/001 bambu apus, pamulang, tangerang selatan', 'pt murah tani', '2020-12-22', 'tangerang', '085624904879', 'bapak malawi', '20201201', '2020-12-29', '3674062111930001', 'ahmad fauzi', '3674062111930001', 'tangerang', '12/15/2020', '085624904879', 'CUST/202012/7')
ERROR - 2020-12-29 05:18:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;12/15/2020&quot;
LINE 1: ..., 'ahmad fauzi', '3674062111930001', 'tangerang', '12/15/202...
                                                             ^
HINT:  Perhaps you need a different &quot;datestyle&quot; setting. C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-29 05:18:15 --> Query error: ERROR:  date/time field value out of range: "12/15/2020"
LINE 1: ..., 'ahmad fauzi', '3674062111930001', 'tangerang', '12/15/202...
                                                             ^
HINT:  Perhaps you need a different "datestyle" setting. - Invalid query: INSERT INTO "customer" ("created_dt", "created_by", "nik", "nama", "path_ktp", "alamat", "nama_badan_usaha", "tanggal_lahir", "tempat_lahir", "no_telepon", "pemberi_kuasa", "no_kuasa", "tanggal_kuasa", "no_identitas_badan_usaha", "nama_perwakilan", "no_identitas_perwakilan", "tempat_lahir_perwakilan", "tanggal_lahir_perwakilan", "no_telepon_perwakilan", "doc_number") VALUES ('2020-12-29 05:18:15', '1', '3674062111930001', 'ahmad fauzi', '/uploads/ktp/36740621119300013.JPG', 'jl. oscar raya rt006/001 bambu apus, pamulang, tangerang selatan', 'pt murah tani', '2020-12-22', 'tangerang', '085624904879', 'bapak malawi', '20201201', '2020-12-29', '3674062111930001', 'ahmad fauzi', '3674062111930001', 'tangerang', '12/15/2020', '085624904879', 'CUST/202012/8')
ERROR - 2020-12-29 05:34:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;12/15/2020&quot;
LINE 1: ...ilan&quot; = 'tangerang', &quot;tanggal_lahir_perwakilan&quot; = '12/15/202...
                                                             ^
HINT:  Perhaps you need a different &quot;datestyle&quot; setting. C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-29 05:34:40 --> Query error: ERROR:  date/time field value out of range: "12/15/2020"
LINE 1: ...ilan" = 'tangerang', "tanggal_lahir_perwakilan" = '12/15/202...
                                                             ^
HINT:  Perhaps you need a different "datestyle" setting. - Invalid query: UPDATE "customer" SET "created_dt" = '2020-12-29 00:00:00', "created_by" = '1', "nik" = '3674062111930001', "nama" = 'ahmad fauzi', "path_ktp" = '/uploads/ktp/36740621119300017.jpg', "alamat" = 'jl. oscar raya rt006/001 bambu apus, pamulang, tangerang selatan', "nama_badan_usaha" = 'pt murah tani', "tanggal_lahir" = '2020-12-22', "tempat_lahir" = 'tangerang', "no_telepon" = '085624904879', "pemberi_kuasa" = 'bapak malawi', "no_kuasa" = '20201201', "tanggal_kuasa" = '2020-12-29', "no_identitas_badan_usaha" = '3674062111930001', "nama_perwakilan" = 'ahmad fauzi', "no_identitas_perwakilan" = '3674062111930001', "tempat_lahir_perwakilan" = 'tangerang', "tanggal_lahir_perwakilan" = '12/15/2020', "no_telepon_perwakilan" = '01/01/1970'
WHERE "id" = '14'
ERROR - 2020-12-29 08:38:20 --> 404 Page Not Found: Uploads/ktp
ERROR - 2020-12-29 08:38:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;12/15/2020&quot;
LINE 1: ...ilan&quot; = 'tangerang', &quot;tanggal_lahir_perwakilan&quot; = '12/15/202...
                                                             ^
HINT:  Perhaps you need a different &quot;datestyle&quot; setting. C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-29 08:38:28 --> Query error: ERROR:  date/time field value out of range: "12/15/2020"
LINE 1: ...ilan" = 'tangerang', "tanggal_lahir_perwakilan" = '12/15/202...
                                                             ^
HINT:  Perhaps you need a different "datestyle" setting. - Invalid query: UPDATE "customer" SET "created_dt" = '2020-12-29 00:00:00', "created_by" = '1', "nik" = '3674062111930001', "nama" = 'ahmad fauzi', "path_ktp" = '/uploads/ktp/3674062111930001.jpg', "alamat" = 'jl. oscar raya rt006/001 bambu apus, pamulang, tangerang selatan', "nama_badan_usaha" = 'pt murah tani', "tanggal_lahir" = '2020-12-22', "tempat_lahir" = 'tangerang', "no_telepon" = '085624904879', "pemberi_kuasa" = 'bapak malawi', "no_kuasa" = '20201201', "tanggal_kuasa" = '2020-12-29', "no_identitas_badan_usaha" = '3674062111930001', "nama_perwakilan" = 'ahmad fauzi', "no_identitas_perwakilan" = '3674062111930001', "tempat_lahir_perwakilan" = 'tangerang', "tanggal_lahir_perwakilan" = '12/15/2020', "no_telepon_perwakilan" = '01/01/1970'
WHERE "id" = '14'
ERROR - 2020-12-29 08:38:30 --> 404 Page Not Found: Uploads/ktp
ERROR - 2020-12-29 08:40:23 --> 404 Page Not Found: Uploads/ktp
ERROR - 2020-12-29 08:42:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;12/15/2020&quot;
LINE 1: ...ilan&quot; = 'tangerang', &quot;tanggal_lahir_perwakilan&quot; = '12/15/202...
                                                             ^
HINT:  Perhaps you need a different &quot;datestyle&quot; setting. C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-29 08:42:13 --> Query error: ERROR:  date/time field value out of range: "12/15/2020"
LINE 1: ...ilan" = 'tangerang', "tanggal_lahir_perwakilan" = '12/15/202...
                                                             ^
HINT:  Perhaps you need a different "datestyle" setting. - Invalid query: UPDATE "customer" SET "created_dt" = '2020-12-29 00:00:00', "created_by" = '1', "nik" = '3674062111930001', "nama" = 'ahmad fauzi', "path_ktp" = '/uploads/ktp/36740621119300011.jpg', "alamat" = 'jl. oscar raya rt006/001 bambu apus, pamulang, tangerang selatan', "nama_badan_usaha" = 'pt murah tani', "tanggal_lahir" = '2020-12-22', "tempat_lahir" = 'tangerang', "no_telepon" = '085624904879', "pemberi_kuasa" = 'bapak malawi', "no_kuasa" = '20201201', "tanggal_kuasa" = '2020-12-29', "no_identitas_badan_usaha" = '3674062111930001', "nama_perwakilan" = 'ahmad fauzi', "no_identitas_perwakilan" = '3674062111930001', "tempat_lahir_perwakilan" = 'tangerang', "tanggal_lahir_perwakilan" = '12/15/2020', "no_telepon_perwakilan" = '01/01/1970'
WHERE "id" = '14'
ERROR - 2020-12-29 08:42:16 --> 404 Page Not Found: Uploads/ktp
ERROR - 2020-12-29 08:45:48 --> 404 Page Not Found: Uploads/ktp
ERROR - 2020-12-29 08:55:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;12/15/2020&quot;
LINE 1: ...ilan&quot; = 'tangerang', &quot;tanggal_lahir_perwakilan&quot; = '12/15/202...
                                                             ^
HINT:  Perhaps you need a different &quot;datestyle&quot; setting. C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-29 08:55:04 --> Query error: ERROR:  date/time field value out of range: "12/15/2020"
LINE 1: ...ilan" = 'tangerang', "tanggal_lahir_perwakilan" = '12/15/202...
                                                             ^
HINT:  Perhaps you need a different "datestyle" setting. - Invalid query: UPDATE "customer" SET "created_dt" = '2020-12-29 00:00:00', "created_by" = '1', "nik" = '3674062111930001', "nama" = 'ahmad fauzi', "path_ktp" = '/uploads/ktp/36740621119300013.jpg', "alamat" = 'jl. oscar raya rt006/001 bambu apus, pamulang, tangerang selatan', "nama_badan_usaha" = 'pt murah tani', "tanggal_lahir" = '2020-12-22', "tempat_lahir" = 'tangerang', "no_telepon" = '085624904879', "pemberi_kuasa" = 'bapak malawi', "no_kuasa" = '20201201', "tanggal_kuasa" = '2020-12-29', "no_identitas_badan_usaha" = '3674062111930001', "nama_perwakilan" = 'ahmad fauzi', "no_identitas_perwakilan" = '3674062111930001', "tempat_lahir_perwakilan" = 'tangerang', "tanggal_lahir_perwakilan" = '12/15/2020', "no_telepon_perwakilan" = '01/01/1970'
WHERE "id" = '14'
ERROR - 2020-12-29 08:55:07 --> 404 Page Not Found: Uploads/ktp
ERROR - 2020-12-29 08:56:12 --> 404 Page Not Found: Uploads/ktp
ERROR - 2020-12-29 08:58:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;12/15/2020&quot;
LINE 1: ...ilan&quot; = 'tangerang', &quot;tanggal_lahir_perwakilan&quot; = '12/15/202...
                                                             ^
HINT:  Perhaps you need a different &quot;datestyle&quot; setting. C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-29 08:58:07 --> Query error: ERROR:  date/time field value out of range: "12/15/2020"
LINE 1: ...ilan" = 'tangerang', "tanggal_lahir_perwakilan" = '12/15/202...
                                                             ^
HINT:  Perhaps you need a different "datestyle" setting. - Invalid query: UPDATE "customer" SET "created_dt" = '2020-12-29 00:00:00', "created_by" = '1', "nik" = '3674062111930001', "nama" = 'ahmad fauzi', "path_ktp" = '/uploads/ktp/36740621119300011.jpg', "alamat" = 'jl. oscar raya rt006/001 bambu apus, pamulang, tangerang selatan', "nama_badan_usaha" = 'pt murah tani', "tanggal_lahir" = '2020-12-22', "tempat_lahir" = 'tangerang', "no_telepon" = '085624904879', "pemberi_kuasa" = 'bapak malawi', "no_kuasa" = '20201201', "tanggal_kuasa" = '2020-12-29', "no_identitas_badan_usaha" = '3674062111930001', "nama_perwakilan" = 'ahmad fauzi', "no_identitas_perwakilan" = '3674062111930001', "tempat_lahir_perwakilan" = 'tangerang', "tanggal_lahir_perwakilan" = '12/15/2020', "no_telepon_perwakilan" = '01/01/1970'
WHERE "id" = '14'
ERROR - 2020-12-29 10:50:43 --> Severity: Notice --> Undefined variable: updated_status C:\xampp5\htdocs\sales\application\models\Phk_model.php 92
