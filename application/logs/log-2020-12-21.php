<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-21 02:12:32 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\add_car.php 122
ERROR - 2020-12-21 02:12:32 --> Severity: Notice --> Undefined index: workshop_id_trf C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:12:32 --> Severity: Notice --> Undefined index: id_workshop C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:12:33 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:12:33 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 130
ERROR - 2020-12-21 02:12:33 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:12:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:12:33 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:12:37 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:12:44 --> 404 Page Not Found: Skh/build
ERROR - 2020-12-21 02:12:44 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:20:17 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:20:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:20:25 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:20:25 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:20:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:20:34 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ - Invalid query: INSERT INTO "skh_detail" ("skh_id", "car_id", "no_polisi", "pt", "tipe", "price_list") VALUES ('4', '18860', 'B1008BUA', 'PT EXPRESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
ERROR - 2020-12-21 02:22:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:22:20 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ - Invalid query: INSERT INTO "skh_detail" ("skh_id", "car_id", "no_polisi", "pt", "tipe", "price_list") VALUES ('4', '18860', 'B1008BUA', 'PT EXPRESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
ERROR - 2020-12-21 02:22:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:22:23 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:22:23 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:22:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:22:28 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...ESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
                                                                    ^ - Invalid query: INSERT INTO "skh_detail" ("skh_id", "car_id", "no_polisi", "pt", "tipe", "price_list") VALUES ('4', '18860', 'B1008BUA', 'PT EXPRESS KENCANA KELOLA JAYAJASA', 'Toyota Alphard X 2.4 AT', '')
ERROR - 2020-12-21 02:22:37 --> Severity: Notice --> Undefined index: car_id C:\xampp5\htdocs\sales\application\models\Skh_model.php 55
ERROR - 2020-12-21 02:22:37 --> Severity: Notice --> Undefined index: no_polisi C:\xampp5\htdocs\sales\application\models\Skh_model.php 56
ERROR - 2020-12-21 02:22:37 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\models\Skh_model.php 57
ERROR - 2020-12-21 02:22:37 --> Severity: Notice --> Undefined index: tipe C:\xampp5\htdocs\sales\application\models\Skh_model.php 58
ERROR - 2020-12-21 02:22:37 --> Severity: Notice --> Undefined index: price_list C:\xampp5\htdocs\sales\application\models\Skh_model.php 59
ERROR - 2020-12-21 02:22:45 --> Severity: Notice --> Undefined index: car_id C:\xampp5\htdocs\sales\application\models\Skh_model.php 55
ERROR - 2020-12-21 02:22:45 --> Severity: Notice --> Undefined index: no_polisi C:\xampp5\htdocs\sales\application\models\Skh_model.php 56
ERROR - 2020-12-21 02:22:45 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\models\Skh_model.php 57
ERROR - 2020-12-21 02:22:45 --> Severity: Notice --> Undefined index: tipe C:\xampp5\htdocs\sales\application\models\Skh_model.php 58
ERROR - 2020-12-21 02:22:45 --> Severity: Notice --> Undefined index: price_list C:\xampp5\htdocs\sales\application\models\Skh_model.php 59
ERROR - 2020-12-21 02:22:51 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\add_car.php 122
ERROR - 2020-12-21 02:22:51 --> Severity: Notice --> Undefined index: workshop_id_trf C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:22:51 --> Severity: Notice --> Undefined index: id_workshop C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:22:51 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:22:51 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 130
ERROR - 2020-12-21 02:22:51 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\add_car.php 122
ERROR - 2020-12-21 02:22:51 --> Severity: Notice --> Undefined index: workshop_id_trf C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:22:51 --> Severity: Notice --> Undefined index: id_workshop C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:22:51 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:22:51 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 130
ERROR - 2020-12-21 02:22:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:22:51 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:22:51 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:22:55 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\add_car.php 122
ERROR - 2020-12-21 02:22:55 --> Severity: Notice --> Undefined index: workshop_id_trf C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:22:55 --> Severity: Notice --> Undefined index: id_workshop C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:22:56 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:22:56 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 130
ERROR - 2020-12-21 02:22:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\add_car.php 122
ERROR - 2020-12-21 02:22:56 --> Severity: Notice --> Undefined index: workshop_id_trf C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:22:56 --> Severity: Notice --> Undefined index: id_workshop C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:22:56 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:22:56 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 130
ERROR - 2020-12-21 02:22:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:22:56 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:22:56 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:23:24 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\add_car.php 122
ERROR - 2020-12-21 02:23:24 --> Severity: Notice --> Undefined index: workshop_id_trf C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:23:24 --> Severity: Notice --> Undefined index: id_workshop C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:23:24 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:23:24 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 130
ERROR - 2020-12-21 02:23:24 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\add_car.php 122
ERROR - 2020-12-21 02:23:24 --> Severity: Notice --> Undefined index: workshop_id_trf C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:23:24 --> Severity: Notice --> Undefined index: id_workshop C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:23:24 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:23:24 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 130
ERROR - 2020-12-21 02:23:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:23:24 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:23:25 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:24:42 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\add_car.php 122
ERROR - 2020-12-21 02:24:42 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:24:42 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 130
ERROR - 2020-12-21 02:24:42 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\add_car.php 122
ERROR - 2020-12-21 02:24:42 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 124
ERROR - 2020-12-21 02:24:42 --> Severity: Notice --> Undefined index: active C:\xampp5\htdocs\sales\application\views\skh\add_car.php 130
ERROR - 2020-12-21 02:24:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:24:42 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:24:43 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:25:19 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\add_car.php 122
ERROR - 2020-12-21 02:25:19 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\add_car.php 122
ERROR - 2020-12-21 02:25:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:25:19 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:25:20 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:25:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:25:59 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:25:59 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:27:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:27:17 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:27:17 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:27:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:27:43 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:27:43 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:27:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ... &quot;price_list&quot;) VALUES ('4', '18860', 'B1008BUA', '', '', '')
                                                                    ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:27:48 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ... "price_list") VALUES ('4', '18860', 'B1008BUA', '', '', '')
                                                                    ^ - Invalid query: INSERT INTO "skh_detail" ("skh_id", "car_id", "no_polisi", "pt", "tipe", "price_list") VALUES ('4', '18860', 'B1008BUA', '', '', '')
ERROR - 2020-12-21 02:28:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:28:41 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:28:41 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:28:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:28:44 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:28:44 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:28:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ... &quot;tipe&quot;, &quot;price_list&quot;) VALUES ('4', '18860', '', '', '', '')
                                                                    ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:28:49 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ... "tipe", "price_list") VALUES ('4', '18860', '', '', '', '')
                                                                    ^ - Invalid query: INSERT INTO "skh_detail" ("skh_id", "car_id", "no_polisi", "pt", "tipe", "price_list") VALUES ('4', '18860', '', '', '', '')
ERROR - 2020-12-21 02:30:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:30:23 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:30:23 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:30:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ... &quot;tipe&quot;, &quot;price_list&quot;) VALUES ('4', '18860', '', '', '', '')
                                                                    ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:30:33 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ... "tipe", "price_list") VALUES ('4', '18860', '', '', '', '')
                                                                    ^ - Invalid query: INSERT INTO "skh_detail" ("skh_id", "car_id", "no_polisi", "pt", "tipe", "price_list") VALUES ('4', '18860', '', '', '', '')
ERROR - 2020-12-21 02:33:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:33:32 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:33:32 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:33:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:33:33 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:33:34 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:33:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 1: ...pt&quot;, &quot;tipe&quot;, &quot;price_list&quot;) VALUES (4, 18860, '', '', '', '')
                                                                    ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:33:38 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 1: ...pt", "tipe", "price_list") VALUES (4, 18860, '', '', '', '')
                                                                    ^ - Invalid query: INSERT INTO "skh_detail" ("skh_id", "car_id", "no_polisi", "pt", "tipe", "price_list") VALUES (4, 18860, '', '', '', '')
ERROR - 2020-12-21 02:35:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:35:20 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:35:20 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:35:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:35:21 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:35:21 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:35:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:35:24 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:35:24 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:43:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:43:00 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:43:00 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:44:04 --> 404 Page Not Found: Add_car/4
ERROR - 2020-12-21 02:44:28 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:44:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:44:28 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:44:29 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:44:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:44:30 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:44:30 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:44:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:44:57 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:44:57 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:45:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:45:05 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:45:05 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 02:45:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 02:45:33 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 02:45:33 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 03:01:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 03:01:55 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 03:01:55 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 03:03:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 03:03:14 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 03:03:14 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 03:03:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 03:03:40 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 03:03:40 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 03:38:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 03:38:53 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 03:38:53 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 03:44:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 03:44:15 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 03:44:15 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 03:44:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 03:44:17 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 03:44:17 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 03:44:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 03:44:20 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 03:44:20 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 03:44:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 03:44:26 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 03:44:26 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 03:52:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 03:52:06 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 03:52:06 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 03:52:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 03:52:15 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 03:52:15 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 03:54:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 03:54:38 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 03:54:38 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 03:55:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 03:55:22 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 03:55:22 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 03:55:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 03:55:31 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 03:55:32 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 03:55:35 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 03:55:37 --> 404 Page Not Found: Skh/build
ERROR - 2020-12-21 03:55:38 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 03:56:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 03:56:06 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 03:56:06 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 03:59:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 03:59:40 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 03:59:40 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 04:00:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 04:00:07 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 04:00:07 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 04:00:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 04:00:58 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 04:00:58 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 04:01:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 04:01:33 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 04:01:33 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 04:02:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 04:02:13 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 04:02:13 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 04:18:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 04:18:55 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 04:18:56 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 04:24:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 04:24:15 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 04:24:15 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 04:24:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 04:24:36 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 04:24:36 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 04:27:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 04:27:19 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 04:27:19 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 04:37:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 04:37:17 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 04:37:17 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 04:38:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 04:38:25 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 04:38:25 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 04:40:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 04:40:18 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 04:40:18 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 04:40:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 04:40:39 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 04:40:39 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 04:43:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 04:43:09 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 04:43:10 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 04:43:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 04:43:41 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 04:43:41 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 04:43:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 04:43:46 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 04:43:47 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 04:44:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 04:44:21 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 04:44:21 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 04:44:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 04:44:27 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 04:44:27 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 08:38:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 08:38:18 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 08:38:19 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 08:39:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 08:39:12 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 08:39:12 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 08:39:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 08:39:50 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 08:39:51 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 08:51:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 08:51:02 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 08:51:02 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 08:51:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 08:51:17 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 08:51:17 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 08:53:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 08:53:43 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 08:53:43 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 08:55:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 08:55:35 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 08:55:36 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 08:57:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 08:57:26 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 08:57:26 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 08:59:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 08:59:14 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 08:59:15 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 08:59:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 08:59:34 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 08:59:34 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:00:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:00:00 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:00:00 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:00:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:00:28 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:00:29 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:01:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:01:21 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:01:22 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:01:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:01:30 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:03:15 --> Severity: Notice --> Undefined variable: val C:\xampp5\htdocs\sales\application\views\skh\add_car.php 101
ERROR - 2020-12-21 09:03:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:03:15 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:03:16 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:03:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:03:29 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:03:29 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:04:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:04:17 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:04:17 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:05:06 --> Severity: Notice --> Undefined index: id C:\xampp5\htdocs\sales\application\controllers\Skh.php 100
ERROR - 2020-12-21 09:05:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:05:58 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:05:59 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:06:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:06:00 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:06:01 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:06:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:06:25 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:06:25 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:06:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:06:27 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:06:27 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:11:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:11:48 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:11:49 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:11:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:11:50 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:11:51 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:12:45 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:12:47 --> 404 Page Not Found: Skh/build
ERROR - 2020-12-21 09:12:47 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:12:50 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:12:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:12:51 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:12:51 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:12:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:12:53 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:12:54 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:14:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:14:05 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:14:06 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:26:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:26:36 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:26:36 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:26:37 --> 404 Page Not Found: Skh/build
ERROR - 2020-12-21 09:26:38 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:26:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:26:41 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:26:41 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:26:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:26:44 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:26:44 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:29:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:29:55 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:29:56 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:30:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:30:08 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:30:08 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:31:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:31:08 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:31:09 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:31:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:31:25 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:31:26 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:31:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:31:36 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:31:37 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:31:39 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:31:41 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:31:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 1: select * from customer where id=build 
                                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:31:45 --> Query error: ERROR:  column "build" does not exist
LINE 1: select * from customer where id=build 
                                        ^ - Invalid query: select * from customer where id=build 
ERROR - 2020-12-21 09:31:45 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:31:48 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:31:51 --> 404 Page Not Found: Skh/build
ERROR - 2020-12-21 09:31:51 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:32:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:32:07 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:32:07 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:32:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:32:52 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:32:52 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 09:33:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 09:33:30 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 09:33:30 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 10:02:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 10:02:01 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 10:02:02 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 10:02:43 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 10:02:45 --> 404 Page Not Found: Skh/build
ERROR - 2020-12-21 10:02:45 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 10:02:48 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 10:02:49 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 10:02:50 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 10:02:51 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 10:02:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 10:02:56 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 10:02:56 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 10:03:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-21 10:03:02 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama, b.doc_number as customer_doc_number from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-21 10:03:03 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 30
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 31
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 42
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 43
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 48
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 49
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 64
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 69
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 74
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 80
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 86
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 91
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 96
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 105
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 105
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 110
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 115
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 120
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 125
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 130
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 135
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 150
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 159
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 196
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data_service_est C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 206
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 248
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 301
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: ct_detail C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 327
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 333
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 333
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 334
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 334
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 339
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 340
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 340
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 347
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 348
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 348
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 349
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 354
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 361
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 362
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 362
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 367
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 374
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 495
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 498
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 498
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 501
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 516
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 516
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 521
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 521
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 531
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 536
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 536
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 542
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 542
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 548
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 548
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: id_wo C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 554
ERROR - 2020-12-21 10:10:06 --> Severity: Notice --> Undefined variable: data C:\xampp5\htdocs\sales\application\views\skh\print_skh.php 579
