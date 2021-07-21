<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-20 06:33:57 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-20 06:33:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-20 06:33:58 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-20 06:35:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-20 06:35:43 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-20 06:35:43 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-20 06:38:02 --> Severity: Notice --> Undefined index: tipe C:\xampp5\htdocs\sales\application\models\Skh_model.php 57
ERROR - 2020-12-20 06:39:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-20 06:39:33 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-20 06:39:33 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-20 07:00:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-20 07:00:09 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-20 07:00:09 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-20 07:09:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;skh_dtail&quot; does not exist
LINE 1: INSERT INTO &quot;skh_dtail&quot; (&quot;skh_id&quot;, &quot;car_id&quot;, &quot;no_polisi&quot;, &quot;p...
                    ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-20 07:09:45 --> Query error: ERROR:  relation "skh_dtail" does not exist
LINE 1: INSERT INTO "skh_dtail" ("skh_id", "car_id", "no_polisi", "p...
                    ^ - Invalid query: INSERT INTO "skh_dtail" ("skh_id", "car_id", "no_polisi", "pt", "tipe", "price_list") VALUES ('6', '18860', 'B1008BUA', 'PT EXPRESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
ERROR - 2020-12-20 07:09:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-20 07:09:56 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ - Invalid query: INSERT INTO "skh_detail" ("skh_id", "car_id", "no_polisi", "pt", "tipe", "price_list") VALUES ('6', '18860', 'B1008BUA', 'PT EXPRESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
ERROR - 2020-12-20 07:12:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-20 07:12:57 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ - Invalid query: INSERT INTO "skh_detail" ("skh_id", "car_id", "no_polisi", "pt", "tipe", "price_list") VALUES ('6', '18860', 'B1008BUA', 'PT EXPRESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
ERROR - 2020-12-20 07:12:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-20 07:12:58 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ - Invalid query: INSERT INTO "skh_detail" ("skh_id", "car_id", "no_polisi", "pt", "tipe", "price_list") VALUES ('6', '18860', 'B1008BUA', 'PT EXPRESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
ERROR - 2020-12-20 07:13:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-20 07:13:33 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ - Invalid query: INSERT INTO "skh_detail" ("skh_id", "car_id", "no_polisi", "pt", "tipe", "price_list") VALUES ('6', '18860', 'B1008BUA', 'PT EXPRESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
ERROR - 2020-12-20 07:14:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-20 07:14:22 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ - Invalid query: INSERT INTO "skh_detail" ("skh_id", "car_id", "no_polisi", "pt", "tipe", "price_list") VALUES ('6', '18860', 'B1008BUA', 'PT EXPRESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
ERROR - 2020-12-20 07:14:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-20 07:14:25 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ - Invalid query: INSERT INTO "skh_detail" ("skh_id", "car_id", "no_polisi", "pt", "tipe", "price_list") VALUES ('6', '18860', 'B1008BUA', 'PT EXPRESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
ERROR - 2020-12-20 07:15:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-20 07:15:35 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ - Invalid query: INSERT INTO "skh_detail" ("skh_id", "car_id", "no_polisi", "pt", "tipe", "price_list") VALUES ('6', '18860', 'B1008BUA', 'PT EXPRESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
