<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-28 04:31:44 --> Severity: Notice --> Undefined index: id_workshop C:\xampp5\htdocs\sales\application\controllers\Payment.php 16
ERROR - 2020-12-28 04:31:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;master_workshop&quot; does not exist
LINE 2: FROM &quot;master_workshop&quot;
             ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-28 04:31:44 --> Query error: ERROR:  relation "master_workshop" does not exist
LINE 2: FROM "master_workshop"
             ^ - Invalid query: SELECT *
FROM "master_workshop"
ERROR - 2020-12-28 04:42:10 --> Severity: error --> Exception: Unable to locate the model you have specified: Payment_model C:\xampp5\htdocs\sales\system\core\Loader.php 344
ERROR - 2020-12-28 04:45:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;payment&quot; does not exist
LINE 1: select * from payment
                      ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-28 04:45:14 --> Query error: ERROR:  relation "payment" does not exist
LINE 1: select * from payment
                      ^ - Invalid query: select * from payment
ERROR - 2020-12-28 05:05:52 --> Severity: Notice --> Undefined variable: id_workshop C:\xampp5\htdocs\sales\application\views\payment\index.php 8
ERROR - 2020-12-28 05:05:52 --> Severity: Notice --> Undefined variable: arrWorkshop C:\xampp5\htdocs\sales\application\views\payment\index.php 8
ERROR - 2020-12-28 05:05:52 --> Severity: Notice --> Undefined variable: id_workshop C:\xampp5\htdocs\sales\application\views\payment\index.php 8
ERROR - 2020-12-28 05:05:52 --> Severity: Notice --> Undefined variable: date C:\xampp5\htdocs\sales\application\views\payment\index.php 8
ERROR - 2020-12-28 05:05:52 --> Severity: Notice --> Undefined variable: arrWorkshop C:\xampp5\htdocs\sales\application\views\payment\index.php 31
ERROR - 2020-12-28 05:05:52 --> Severity: Notice --> Undefined variable: date C:\xampp5\htdocs\sales\application\views\payment\index.php 46
ERROR - 2020-12-28 05:07:39 --> Severity: Notice --> Undefined variable: date C:\xampp5\htdocs\sales\application\views\payment\index.php 20
ERROR - 2020-12-28 05:09:40 --> Severity: Notice --> Undefined property: Payment::$master_workshop_model C:\xampp5\htdocs\sales\application\controllers\Payment.php 20
ERROR - 2020-12-28 05:12:52 --> 404 Page Not Found: Payment/add
ERROR - 2020-12-28 07:41:01 --> 404 Page Not Found: Assets/fonts
ERROR - 2020-12-28 07:41:31 --> Severity: Notice --> Undefined property: Payment::$skh_model C:\xampp5\htdocs\sales\application\controllers\Payment.php 36
ERROR - 2020-12-28 07:41:48 --> Severity: Notice --> Undefined variable: doc_number C:\xampp5\htdocs\sales\application\models\Payment_model.php 9
ERROR - 2020-12-28 07:41:48 --> Severity: Notice --> Undefined property: stdClass::$nama C:\xampp5\htdocs\sales\application\controllers\Payment.php 42
ERROR - 2020-12-28 07:41:48 --> Severity: Notice --> Undefined property: stdClass::$nama C:\xampp5\htdocs\sales\application\controllers\Payment.php 42
ERROR - 2020-12-28 07:41:48 --> Severity: Notice --> Undefined property: stdClass::$nama C:\xampp5\htdocs\sales\application\controllers\Payment.php 42
ERROR - 2020-12-28 07:42:50 --> Severity: Notice --> Undefined variable: doc_number C:\xampp5\htdocs\sales\application\models\Payment_model.php 9
ERROR - 2020-12-28 07:42:50 --> Severity: Notice --> Undefined property: stdClass::$nama C:\xampp5\htdocs\sales\application\controllers\Payment.php 42
ERROR - 2020-12-28 07:42:50 --> Severity: Notice --> Undefined property: stdClass::$nama C:\xampp5\htdocs\sales\application\controllers\Payment.php 42
ERROR - 2020-12-28 07:42:50 --> Severity: Notice --> Undefined property: stdClass::$nama C:\xampp5\htdocs\sales\application\controllers\Payment.php 42
ERROR - 2020-12-28 07:43:40 --> Severity: Notice --> Undefined property: stdClass::$nama C:\xampp5\htdocs\sales\application\controllers\Payment.php 42
ERROR - 2020-12-28 07:43:40 --> Severity: Notice --> Undefined property: stdClass::$nama C:\xampp5\htdocs\sales\application\controllers\Payment.php 42
ERROR - 2020-12-28 07:43:40 --> Severity: Notice --> Undefined property: stdClass::$nama C:\xampp5\htdocs\sales\application\controllers\Payment.php 42
ERROR - 2020-12-28 07:45:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;doc_number&quot; is ambiguous
LINE 3:    where upper(doc_number) like(upper('%a%')) limit 10;
                       ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-28 07:45:55 --> Query error: ERROR:  column reference "doc_number" is ambiguous
LINE 3:    where upper(doc_number) like(upper('%a%')) limit 10;
                       ^ - Invalid query: select * from skh a
			left join customer b on(b.id = a.customer_id)
			where upper(doc_number) like(upper('%a%')) limit 10;
ERROR - 2020-12-28 07:45:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;doc_number&quot; is ambiguous
LINE 3:    where upper(doc_number) like(upper('%1%')) limit 10;
                       ^ C:\xampp5\htdocs\sales\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2020-12-28 07:45:57 --> Query error: ERROR:  column reference "doc_number" is ambiguous
LINE 3:    where upper(doc_number) like(upper('%1%')) limit 10;
                       ^ - Invalid query: select * from skh a
			left join customer b on(b.id = a.customer_id)
			where upper(doc_number) like(upper('%1%')) limit 10;
