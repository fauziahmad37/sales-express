<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-18 03:53:58 --> Severity: Notice --> Undefined index: nik C:\xampp5\htdocs\sales\application\views\skh\index.php 41
ERROR - 2020-12-18 03:53:58 --> Severity: Notice --> Undefined index: nama C:\xampp5\htdocs\sales\application\views\skh\index.php 43
ERROR - 2020-12-18 03:53:58 --> Severity: Notice --> Undefined index: no_telepon C:\xampp5\htdocs\sales\application\views\skh\index.php 44
ERROR - 2020-12-18 03:53:58 --> Severity: Notice --> Undefined index: alamat C:\xampp5\htdocs\sales\application\views\skh\index.php 45
ERROR - 2020-12-18 03:53:58 --> Severity: Notice --> Undefined index: nama_badan_usaha C:\xampp5\htdocs\sales\application\views\skh\index.php 46
ERROR - 2020-12-18 03:53:58 --> Severity: Notice --> Undefined index: pemberi_kuasa C:\xampp5\htdocs\sales\application\views\skh\index.php 47
ERROR - 2020-12-18 03:53:58 --> Severity: Notice --> Undefined index: tanggal_kuasa C:\xampp5\htdocs\sales\application\views\skh\index.php 48
ERROR - 2020-12-18 03:54:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 1: select * from customer where id=build 
                                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 03:54:22 --> Query error: ERROR:  column "build" does not exist
LINE 1: select * from customer where id=build 
                                        ^ - Invalid query: select * from customer where id=build 
ERROR - 2020-12-18 03:54:25 --> Severity: Notice --> Undefined index: nik C:\xampp5\htdocs\sales\application\views\skh\index.php 41
ERROR - 2020-12-18 03:54:25 --> Severity: Notice --> Undefined index: nama C:\xampp5\htdocs\sales\application\views\skh\index.php 43
ERROR - 2020-12-18 03:54:25 --> Severity: Notice --> Undefined index: no_telepon C:\xampp5\htdocs\sales\application\views\skh\index.php 44
ERROR - 2020-12-18 03:54:25 --> Severity: Notice --> Undefined index: alamat C:\xampp5\htdocs\sales\application\views\skh\index.php 45
ERROR - 2020-12-18 03:54:25 --> Severity: Notice --> Undefined index: nama_badan_usaha C:\xampp5\htdocs\sales\application\views\skh\index.php 46
ERROR - 2020-12-18 03:54:25 --> Severity: Notice --> Undefined index: pemberi_kuasa C:\xampp5\htdocs\sales\application\views\skh\index.php 47
ERROR - 2020-12-18 03:54:25 --> Severity: Notice --> Undefined index: tanggal_kuasa C:\xampp5\htdocs\sales\application\views\skh\index.php 48
ERROR - 2020-12-18 03:54:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 1: select * from skh where id=build;
                                   ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 03:54:34 --> Query error: ERROR:  column "build" does not exist
LINE 1: select * from skh where id=build;
                                   ^ - Invalid query: select * from skh where id=build;
ERROR - 2020-12-18 05:19:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 1: select * from skh where id=build;
                                   ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 05:19:10 --> Query error: ERROR:  column "build" does not exist
LINE 1: select * from skh where id=build;
                                   ^ - Invalid query: select * from skh where id=build;
ERROR - 2020-12-18 05:19:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 1: select * from skh where id=build;
                                   ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 05:19:53 --> Query error: ERROR:  column "build" does not exist
LINE 1: select * from skh where id=build;
                                   ^ - Invalid query: select * from skh where id=build;
ERROR - 2020-12-18 05:21:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;id&quot; is ambiguous
LINE 3:    where id=4;
                 ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 05:21:13 --> Query error: ERROR:  column reference "id" is ambiguous
LINE 3:    where id=4;
                 ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id)
			where id=4;
ERROR - 2020-12-18 05:21:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;id&quot; is ambiguous
LINE 2: ... left join customer b on(b.id = skh.customer_id) where id=4;
                                                                  ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 05:21:47 --> Query error: ERROR:  column reference "id" is ambiguous
LINE 2: ... left join customer b on(b.id = skh.customer_id) where id=4;
                                                                  ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) where id=4;
ERROR - 2020-12-18 05:22:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 05:22:09 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 05:24:10 --> Severity: Notice --> Undefined variable: skh_detail C:\xampp5\htdocs\sales\application\views\skh\add_car.php 119
ERROR - 2020-12-18 05:24:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 05:24:10 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 05:26:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 05:26:36 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:40:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:40:23 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:41:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:41:34 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:41:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:41:49 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:42:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:42:18 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:42:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:42:34 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:44:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:44:30 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:44:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:44:40 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:44:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:44:52 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:44:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:44:53 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:46:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:46:21 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:47:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:47:49 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:48:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:48:04 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:48:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:48:15 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:48:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:48:32 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:48:50 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 07:48:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:48:52 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:48:52 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 07:48:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:48:59 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:48:59 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 07:53:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:53:54 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:54:00 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 07:54:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:54:01 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:54:01 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 07:54:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:54:49 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:54:49 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 07:55:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:55:17 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:55:17 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 07:56:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:56:15 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:56:16 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 07:56:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:56:36 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:56:37 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 07:57:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:57:19 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:57:20 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 07:57:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 07:57:58 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 07:57:58 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 08:01:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:01:30 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 08:01:30 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 08:01:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:01:37 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 08:01:37 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 08:08:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:08:14 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 08:08:14 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 08:15:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:15:07 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 08:15:07 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 08:26:21 --> Severity: Notice --> Undefined index: skh_id C:\xampp5\htdocs\sales\application\views\skh\add_car.php 181
ERROR - 2020-12-18 08:26:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:26:21 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 08:26:21 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 08:26:30 --> Severity: Notice --> Undefined index: skh_id C:\xampp5\htdocs\sales\application\views\skh\add_car.php 181
ERROR - 2020-12-18 08:26:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:26:31 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 08:26:31 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 08:28:10 --> Severity: Notice --> Undefined index: skh_id C:\xampp5\htdocs\sales\application\views\skh\add_car.php 182
ERROR - 2020-12-18 08:28:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:28:10 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 08:28:11 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 08:29:02 --> Severity: Notice --> Undefined index: skh_id C:\xampp5\htdocs\sales\application\views\skh\add_car.php 182
ERROR - 2020-12-18 08:29:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:29:02 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 08:29:03 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 08:35:31 --> Severity: Notice --> Undefined index: skh_id C:\xampp5\htdocs\sales\application\views\skh\add_car.php 182
ERROR - 2020-12-18 08:35:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:35:31 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 08:35:31 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 08:37:38 --> Severity: Notice --> Undefined index: workshop_id_trf C:\xampp5\htdocs\sales\application\views\skh\add_car.php 182
ERROR - 2020-12-18 08:37:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:37:39 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 08:37:39 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 08:38:22 --> Severity: Notice --> Undefined index: workshop_id_trf C:\xampp5\htdocs\sales\application\views\skh\add_car.php 181
ERROR - 2020-12-18 08:38:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:38:22 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 08:38:22 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 08:38:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:38:39 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 08:38:39 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 08:38:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;pbag&quot; does not exist
LINE 2:     from pbag a
                 ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:38:40 --> Query error: ERROR:  relation "pbag" does not exist
LINE 2:     from pbag a
                 ^ - Invalid query: select a.*, b.name as workshop_name_req, c.name as workshop_name_trf, d.full_name 
				from pbag a
				join master_workshop b on(b.id=a.workshop_id_req)
				join master_workshop c on(c.id=a.workshop_id_trf)
				join cac_user d on(d.id=a.user_id_req)
				where a.id=4 
ERROR - 2020-12-18 08:39:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:39:10 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 08:39:10 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 08:39:11 --> Severity: Notice --> Undefined index: pbag_id C:\xampp5\htdocs\sales\application\controllers\Pbag.php 89
ERROR - 2020-12-18 08:39:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at end of input
LINE 6:     where a.id= 
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:39:11 --> Query error: ERROR:  syntax error at end of input
LINE 6:     where a.id= 
                        ^ - Invalid query: select a.*, b.name as workshop_name_req, c.name as workshop_name_trf, d.full_name 
				from pbag a
				join master_workshop b on(b.id=a.workshop_id_req)
				join master_workshop c on(c.id=a.workshop_id_trf)
				join cac_user d on(d.id=a.user_id_req)
				where a.id= 
ERROR - 2020-12-18 08:39:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:39:26 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 08:39:26 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 08:39:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:39:28 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 08:39:28 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 08:39:28 --> Severity: Notice --> Undefined variable: pbag_id C:\xampp5\htdocs\sales\application\views\skh\skh_modal.php 10
ERROR - 2020-12-18 08:39:28 --> Severity: Notice --> Undefined variable: pbag_id C:\xampp5\htdocs\sales\application\views\skh\skh_modal.php 84
ERROR - 2020-12-18 08:39:28 --> Severity: Notice --> Undefined variable: id_workshop C:\xampp5\htdocs\sales\application\views\skh\skh_modal.php 84
ERROR - 2020-12-18 08:40:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 08:40:40 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 08:40:40 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 08:40:42 --> Severity: Notice --> Undefined variable: pbag_id C:\xampp5\htdocs\sales\application\views\skh\skh_modal.php 84
ERROR - 2020-12-18 08:40:42 --> Severity: Notice --> Undefined variable: id_workshop C:\xampp5\htdocs\sales\application\views\skh\skh_modal.php 84
ERROR - 2020-12-18 10:07:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 10:07:38 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 10:07:38 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 10:07:39 --> Severity: Notice --> Undefined variable: pbag_id C:\xampp5\htdocs\sales\application\views\skh\skh_modal.php 84
ERROR - 2020-12-18 10:07:39 --> Severity: Notice --> Undefined variable: id_workshop C:\xampp5\htdocs\sales\application\views\skh\skh_modal.php 84
ERROR - 2020-12-18 10:08:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 10:08:14 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 10:08:15 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 10:08:16 --> Severity: Notice --> Undefined variable: pbag_id C:\xampp5\htdocs\sales\application\views\skh\skh_modal.php 84
ERROR - 2020-12-18 10:08:16 --> Severity: Notice --> Undefined variable: id_workshop C:\xampp5\htdocs\sales\application\views\skh\skh_modal.php 84
ERROR - 2020-12-18 10:09:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 10:09:03 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 10:09:04 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 10:09:04 --> Severity: Notice --> Undefined variable: pbag_id C:\xampp5\htdocs\sales\application\views\skh\skh_modal.php 84
ERROR - 2020-12-18 10:09:04 --> Severity: Notice --> Undefined variable: id_workshop C:\xampp5\htdocs\sales\application\views\skh\skh_modal.php 84
ERROR - 2020-12-18 10:09:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 10:09:40 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 10:09:41 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 10:10:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 10:10:14 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 10:10:14 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 10:10:16 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:12:42 --> Severity: Notice --> Undefined index: nik C:\xampp5\htdocs\sales\application\views\skh\index.php 41
ERROR - 2020-12-18 17:12:42 --> Severity: Notice --> Undefined index: nama C:\xampp5\htdocs\sales\application\views\skh\index.php 43
ERROR - 2020-12-18 17:12:42 --> Severity: Notice --> Undefined index: no_telepon C:\xampp5\htdocs\sales\application\views\skh\index.php 44
ERROR - 2020-12-18 17:12:42 --> Severity: Notice --> Undefined index: alamat C:\xampp5\htdocs\sales\application\views\skh\index.php 45
ERROR - 2020-12-18 17:12:42 --> Severity: Notice --> Undefined index: nama_badan_usaha C:\xampp5\htdocs\sales\application\views\skh\index.php 46
ERROR - 2020-12-18 17:12:42 --> Severity: Notice --> Undefined index: pemberi_kuasa C:\xampp5\htdocs\sales\application\views\skh\index.php 47
ERROR - 2020-12-18 17:12:42 --> Severity: Notice --> Undefined index: tanggal_kuasa C:\xampp5\htdocs\sales\application\views\skh\index.php 48
ERROR - 2020-12-18 17:14:44 --> Severity: Notice --> Undefined index: nama C:\xampp5\htdocs\sales\application\views\skh\index.php 43
ERROR - 2020-12-18 17:14:44 --> Severity: Notice --> Undefined index: no_telepon C:\xampp5\htdocs\sales\application\views\skh\index.php 44
ERROR - 2020-12-18 17:14:44 --> Severity: Notice --> Undefined index: alamat C:\xampp5\htdocs\sales\application\views\skh\index.php 45
ERROR - 2020-12-18 17:14:44 --> Severity: Notice --> Undefined index: nama_badan_usaha C:\xampp5\htdocs\sales\application\views\skh\index.php 46
ERROR - 2020-12-18 17:14:44 --> Severity: Notice --> Undefined index: pemberi_kuasa C:\xampp5\htdocs\sales\application\views\skh\index.php 47
ERROR - 2020-12-18 17:14:44 --> Severity: Notice --> Undefined index: tanggal_kuasa C:\xampp5\htdocs\sales\application\views\skh\index.php 48
ERROR - 2020-12-18 17:14:54 --> Severity: Notice --> Undefined index: no_telepon C:\xampp5\htdocs\sales\application\views\skh\index.php 44
ERROR - 2020-12-18 17:14:54 --> Severity: Notice --> Undefined index: alamat C:\xampp5\htdocs\sales\application\views\skh\index.php 45
ERROR - 2020-12-18 17:14:54 --> Severity: Notice --> Undefined index: nama_badan_usaha C:\xampp5\htdocs\sales\application\views\skh\index.php 46
ERROR - 2020-12-18 17:14:54 --> Severity: Notice --> Undefined index: pemberi_kuasa C:\xampp5\htdocs\sales\application\views\skh\index.php 47
ERROR - 2020-12-18 17:14:54 --> Severity: Notice --> Undefined index: tanggal_kuasa C:\xampp5\htdocs\sales\application\views\skh\index.php 48
ERROR - 2020-12-18 17:15:06 --> Severity: Notice --> Undefined index: alamat C:\xampp5\htdocs\sales\application\views\skh\index.php 45
ERROR - 2020-12-18 17:15:06 --> Severity: Notice --> Undefined index: nama_badan_usaha C:\xampp5\htdocs\sales\application\views\skh\index.php 46
ERROR - 2020-12-18 17:15:06 --> Severity: Notice --> Undefined index: pemberi_kuasa C:\xampp5\htdocs\sales\application\views\skh\index.php 47
ERROR - 2020-12-18 17:15:06 --> Severity: Notice --> Undefined index: tanggal_kuasa C:\xampp5\htdocs\sales\application\views\skh\index.php 48
ERROR - 2020-12-18 17:15:14 --> Severity: Notice --> Undefined index: nama_badan_usaha C:\xampp5\htdocs\sales\application\views\skh\index.php 46
ERROR - 2020-12-18 17:15:14 --> Severity: Notice --> Undefined index: pemberi_kuasa C:\xampp5\htdocs\sales\application\views\skh\index.php 47
ERROR - 2020-12-18 17:15:14 --> Severity: Notice --> Undefined index: tanggal_kuasa C:\xampp5\htdocs\sales\application\views\skh\index.php 48
ERROR - 2020-12-18 17:15:27 --> Severity: Notice --> Undefined index: pemberi_kuasa C:\xampp5\htdocs\sales\application\views\skh\index.php 47
ERROR - 2020-12-18 17:15:27 --> Severity: Notice --> Undefined index: tanggal_kuasa C:\xampp5\htdocs\sales\application\views\skh\index.php 48
ERROR - 2020-12-18 17:15:37 --> Severity: Notice --> Undefined index: tanggal_kuasa C:\xampp5\htdocs\sales\application\views\skh\index.php 48
ERROR - 2020-12-18 17:15:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 1: select * from customer where id=build 
                                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:15:52 --> Query error: ERROR:  column "build" does not exist
LINE 1: select * from customer where id=build 
                                        ^ - Invalid query: select * from customer where id=build 
ERROR - 2020-12-18 17:15:59 --> 404 Page Not Found: Skh/build
ERROR - 2020-12-18 17:16:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:16:48 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 33
ERROR - 2020-12-18 17:16:56 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:18:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:18:53 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:18:57 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:18:57 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:18:57 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:18:57 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:18:57 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:18:57 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:18:57 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:18:57 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:18:57 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:18:57 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:19:10 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:19:10 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:19:10 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:19:10 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:19:10 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:19:10 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:19:10 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:19:10 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:19:10 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:19:10 --> Severity: Notice --> Undefined index: sale_price C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:19:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:19:40 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:19:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:19:43 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:21:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:21:53 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:23:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:23:05 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:23:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:23:23 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:23:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:23:26 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:24:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:24:25 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:24:27 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 17:24:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:24:30 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:24:30 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 17:26:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:26:22 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:26:22 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 17:27:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:27:08 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:27:09 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 17:29:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:29:53 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:29:53 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 32
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 32
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 32
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 32
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 32
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 32
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 32
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 32
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 32
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 32
ERROR - 2020-12-18 17:29:56 --> Severity: Notice --> Undefined index: pt C:\xampp5\htdocs\sales\application\views\skh\list_available_car.php 41
ERROR - 2020-12-18 17:30:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:30:13 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:30:13 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 17:31:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:31:40 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:31:40 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 17:32:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:32:28 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:32:28 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 17:34:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:34:38 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:34:38 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 17:36:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:36:25 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:36:26 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 17:42:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:42:50 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:42:50 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 17:42:57 --> 404 Page Not Found: Skh/add_sparepart_pbag
ERROR - 2020-12-18 17:43:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:43:19 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:43:19 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 17:43:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:43:22 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:43:22 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 17:43:27 --> 404 Page Not Found: Skh/add_sparepart_pbag
ERROR - 2020-12-18 17:45:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:45:37 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:45:37 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 17:45:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 3:    where skh.id=build;
                        ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-18 17:45:40 --> Query error: ERROR:  column "build" does not exist
LINE 3:    where skh.id=build;
                        ^ - Invalid query: select skh.*, b.nama from skh 
			left join customer b on(b.id = skh.customer_id) 
			where skh.id=build;
ERROR - 2020-12-18 17:45:40 --> 404 Page Not Found: Assets/css
ERROR - 2020-12-18 17:45:46 --> Severity: Notice --> Undefined variable: skh_id C:\xampp5\htdocs\sales\application\models\Skh_model.php 54
ERROR - 2020-12-18 17:45:46 --> Severity: Warning --> Illegal string offset 'car_id' C:\xampp5\htdocs\sales\application\models\Skh_model.php 55
