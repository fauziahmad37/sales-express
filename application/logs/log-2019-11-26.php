<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-11-26 02:12:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 02:12:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 05:08:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 05:08:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 05:09:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 05:15:33 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-26 05:17:12 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 05:17:12 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 05:17:43 --> Severity: Notice --> Undefined index: iman /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-11-26 05:18:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 05:18:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 05:24:27 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 05:24:27 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 07:55:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 08:01:16 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-26 08:01:54 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 08:01:54 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 08:12:55 --> Severity: Notice --> Undefined index: very /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-11-26 08:13:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 08:17:22 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-26 08:33:51 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-26 08:34:16 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-26 08:35:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 08:36:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 08:36:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 08:37:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 08:38:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 08:38:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 08:40:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 08:43:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 08:43:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 08:50:26 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-26 08:50:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 08:50:34 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-26 09:06:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 09:06:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 09:07:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 09:08:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 09:09:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 09:21:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 09:36:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 09:48:19 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-26 09:56:28 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-26 09:57:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 09:58:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 09:58:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 09:58:21 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-26 10:01:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 10:05:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 10:18:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 10:22:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 10:27:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 10:37:24 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-26 10:37:27 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-26 10:45:39 --> The upload destination folder does not appear to be writable.
ERROR - 2019-11-26 10:45:40 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-26 10:48:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-26 10:49:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 12:    where a.id=build;
                       ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 10:49:01 --> Query error: ERROR:  column "build" does not exist
LINE 12:    where a.id=build;
                       ^ - Invalid query: select a.id, a.ktp_id, a.sim_id, a.name, d.name as pool_name, a.date_of_birth, a.gender, a.blood, a.ketentuan_jaminan,
			a.last_education, a.status, a.path_rek, a.email, a.bank, a.phone, a.emergency_number, a.skck_type, a.bank_account_number, a.skck_number,
			a.domicile_address, a.phone, a.religion, a.path_photo, a.tipe, a.pool_id, a.place_of_birth as city_id, a.domisili_number, a.path_domisili, a.ketentuan_jaminan,
			b.ktp_number, b.location, b.type as ktp_type, b.address as ktp_address, b.path_photo as path_ktp, 
			c.sim_number, c.type as sim_type, c.address as sim_address, c.sim_expire_date, c.path_photo as path_sim, 
			e.name as place_of_birth 
			from driver_registration a
			left join master_ktp b on(b.id=a.ktp_id)
			left join master_sim c on(c.id=a.sim_id)
			left join master_pool d on(d.id=a.pool_id)
			left join master_city e on(e.id=a.place_of_birth)
			where a.id=build;
ERROR - 2019-11-26 10:49:01 --> 404 Page Not Found: Uploads/domisili
ERROR - 2019-11-26 10:50:04 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-26 10:50:06 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-26 10:52:14 --> Severity: Runtime Notice --> mktime(): You should be using the time() function instead /var/www/html/rental/application/models/Driver_model.php 198
ERROR - 2019-11-26 10:53:46 --> 404 Page Not Found: Assets/css
ERROR - 2019-11-26 10:56:11 --> 404 Page Not Found: Assets/css
ERROR - 2019-11-26 10:58:20 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-26 10:58:33 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-26 11:02:38 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-26 11:23:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 11:27:08 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-26 11:31:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:12 --> Severity: Notice --> Undefined variable: res2 /var/www/html/rental/application/models/Closing_model.php 53
ERROR - 2019-11-26 11:33:12 --> Severity: Notice --> Undefined variable: res2 /var/www/html/rental/application/models/Closing_model.php 73
ERROR - 2019-11-26 11:33:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;,&quot;
LINE 13:    , e.unit_bisnis
            ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 11:33:12 --> Query error: ERROR:  syntax error at or near ","
LINE 13:    , e.unit_bisnis
            ^ - Invalid query: insert into closing_cashier_daily_d 
			select nextval('closing_cashier_daily_d_id_seq'), date(a.created),
			0 as val_top_up_jaminan, 0 as total_top_up_jaminan,
			count(nullif(a.payment_via_cash,0)) as val_cash, sum(a.payment_via_cash) as total_cash,
			count(nullif(a.payment_via_tabungan,0)) as val_jaminan, sum(a.payment_via_tabungan) as total_jaminan,
			count(nullif(a.payment_via_ct,0)) as val_ct, sum(a.payment_via_ct) as total_ct,
			count(nullif(a.payment_via_edc,0)) as val_edc, sum(a.payment_via_edc) as total_edc,
			count(nullif(a.payment_via_charge_room,0)) as val_cr, sum(a.payment_via_charge_room) as total_cr,
			now(), a.pool_id,
			count(nullif(a.amount_kembalian,0)) as val_kembalian, sum(a.amount_kembalian) as total_kembalian, 
			'CLS-HARIAN/'||to_char(now(), 'YYMMDD')||'/'||g.code||'-'||f.ptshortname, 
			f.id,
			, e.unit_bisnis
			from trx_setoran a 
			left join trx_spj d on(d.id=a.spj_id)
			left join master_car e on(e.id=d.car_id)
			left join master_pt f on(f.id=e.pt_id)
			left join master_pool g on(g.id=a.pool_id)
			where date(a.created)=date(now())
			group by date(a.created), a.pool_id, f.id, g.code, f.ptshortname , e.unit_bisnis
			union all
			select nextval('closing_cashier_daily_d_id_seq'), date(z.created) as tanggal, 
			count(nullif(z.amount,0)) as val, sum(z.amount) as total,
			0, 0,
			0, 0, 
			0, 0, 
			0, 0, 
			0, 0,
			now(), z.pool_id, 
			0, 0,
			'CLS-HARIAN/'||to_char(now(), 'YYMMDD')||'/'||x.code||'-'||y.ptshortname||'/JAMINAN',
			y.id,
			, null
			from ap_jaminan z
			left join master_pt y on(y.id = z.pt_id)
			left join master_pool x on(x.id = z.pool_id)
			where z.keterangan='Top Up by Pool' and date(z.created)=date(now())
			group by date(z.created), z.pool_id, y.id, x.code, y.ptshortname; 
ERROR - 2019-11-26 11:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 11:33:12 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 11:33:12 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 11:33:40 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 11:33:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 11:40:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 11:45:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 11:49:11 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-26 11:51:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 11:53:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 11:54:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 11:55:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 11:58:47 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 11:58:47 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 12:00:14 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-26 12:00:39 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-26 12:01:11 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-26 12:01:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 12:11:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 12:16:38 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 12:22:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 12:32:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 12:36:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 12:36:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 12:37:33 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 12:40:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 12:41:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 12:54:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 13:11:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 13:20:13 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 13:24:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 13:36:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 13:36:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 13:38:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 13:41:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 13:42:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 13:42:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 13:42:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 13:47:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 13:48:37 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-26 13:53:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 13:53:39 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-26 13:54:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 13:54:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 14:04:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 14:06:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 14:07:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 14:09:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 14:29:45 --> Severity: Notice --> Undefined index: faizal /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-11-26 14:30:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 14:30:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 14:30:49 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-26 14:31:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 14:43:32 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 14:43:32 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 14:44:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 14:48:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 14:48:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 14:50:04 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 14:51:25 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 14:51:28 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 14:55:12 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-26 14:55:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 14:55:17 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-26 15:05:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 15:06:26 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-26 15:07:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 15:08:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 15:09:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 15:10:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 15:11:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 15:23:16 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2019-11-26 15:23:16 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2019-11-26 15:23:21 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2019-11-26 15:23:21 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2019-11-26 15:23:30 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2019-11-26 15:23:31 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2019-11-26 15:23:31 --> Severity: Notice --> Undefined index: active /var/www/html/rental/application/models/Cac_user_model.php 55
ERROR - 2019-11-26 15:27:45 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 15:27:45 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 15:31:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 15:32:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 15:33:58 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 15:34:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 15:39:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 15:40:04 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 15:40:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 15:42:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 15:56:27 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 15:56:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 15:59:20 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-26 15:59:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 7:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 15:59:32 --> Query error: ERROR:  column "build" does not exist
LINE 7:    where a.id=build;
                      ^ - Invalid query: select a.image_path_tera, a.image_path_keur, a.image_path_kiukio, a.image_path_stnk, 
			a.id, a.no_polisi, a.no_pintu, a.create_dt,  b.name as nama_pool, a.tahun, a.merek, a.tipe,  a.setoran_harian, a.create_by, a.status,a.no_mesin,a.no_rangka,a.no_stnk,a.date_expired_stnk , a.unit_bisnis,
			a.no_tera,a.no_keur,a.no_kiukio, a.date_expired_keur, a.date_expired_tera, a.date_expired_kiukio, c.full_name
			from master_car a
			left join master_pool b on (a.id_pool = b.id)
			left join cac_user c on(c.id=a.create_by)
			where a.id=build;
ERROR - 2019-11-26 16:00:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 16:01:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 16:01:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 16:04:09 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:27 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:17:32 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 16:19:41 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:43 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:19:49 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 16:21:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 16:22:20 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-26 16:22:59 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 16:23:18 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:18 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:18 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:18 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:18 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:18 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:18 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:18 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:18 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:18 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:18 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:18 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:23:19 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:35 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:37 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:30:55 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 16:31:58 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:02 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:32:20 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 16:33:09 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:12 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:33:17 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 16:33:37 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 16:33:37 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 16:34:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 16:35:21 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 16:35:21 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:35:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:36:33 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:36:33 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:36:33 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:36:33 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:36:33 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:36:33 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:36:33 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:36:33 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:36:33 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:36:33 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:36:33 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:36:33 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:36:34 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 16:40:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:25 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:28 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:28 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:28 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:28 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:28 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:28 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:28 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:28 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:28 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:28 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:28 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:28 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:40:28 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 16:40:32 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 16:43:18 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 16:43:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 16:43:33 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 16:43:33 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 16:45:42 --> 404 Page Not Found: Vehicle/build
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:07 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:46:57 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-26 16:48:03 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:03 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:03 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:03 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:03 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:03 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:03 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:03 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:03 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:03 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:03 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:03 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:06 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;&quot;closing_cashier_daily&quot;&quot;
LINE 1: INSERT INTO &quot;insert into&quot; &quot;closing_cashier_daily&quot; (select ne...
                                  ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 16:48:15 --> Query error: ERROR:  syntax error at or near ""closing_cashier_daily""
LINE 1: INSERT INTO "insert into" "closing_cashier_daily" (select ne...
                                  ^ - Invalid query: INSERT INTO "insert into" "closing_cashier_daily" (select nextval('closing_cashier_daily_id_seq'), date(a.created), 
			c.val as val_setoran_jaminan, c.total as total_setoran_jaminan, 
			count(nullif(a.payment_via_cash,0)) as val_cash, sum(a.payment_via_cash) as total_cash,
			count(nullif(a.payment_via_tabungan,0)) as val_jaminan, sum(a.payment_via_tabungan) as total_jaminan,
			count(nullif(a.payment_via_ct,0)) as val_ct, sum(a.payment_via_ct) as total_ct,
			count(nullif(a.payment_via_edc,0)) as val_edc, sum(a.payment_via_edc) as total_edc,
			count(nullif(a.payment_via_charge_room,0)) as val_cr, sum(a.payment_via_charge_room) as total_cr,
			now(), a.pool_id,
			count(nullif(a.amount_kembalian,0)) as val_kembalian, sum(a.amount_kembalian) as total_kembalian, 'tes',
			'CLS-HARIAN/'||d.code||'/'||to_char(now(), 'YYMMDD')||'/'||nextval('closing_number_seq')
			from trx_setoran a 
			left join (select date(b.created) as tanggal, sum(b.amount) as total, count(nullif(b.amount,0)) as val,  b.pool_id
				from ap_jaminan b 
				where b.keterangan='Top Up by Pool' group by date(b.created), b.pool_id ) c on (c.tanggal=date(a.created) and c.pool_id=a.pool_id)
			left join master_pool d on(d.id = a.pool_id)
			where a.pool_id=1 and date(a.created)=date(now())
			group by date(a.created), c.total, c.val, a.pool_id, d.code order by date asc; ) VALUES ('')
ERROR - 2019-11-26 16:48:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 16:48:15 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-11-26 16:48:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 17: ....total, c.val, a.pool_id, d.code order by date asc; ) VALUES...
                                                              ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 16:48:44 --> Query error: ERROR:  syntax error at or near ";"
LINE 17: ....total, c.val, a.pool_id, d.code order by date asc; ) VALUES...
                                                              ^ - Invalid query: INSERT INTO "closing_cashier_daily" (select nextval('closing_cashier_daily_id_seq'), date(a.created), 
			c.val as val_setoran_jaminan, c.total as total_setoran_jaminan, 
			count(nullif(a.payment_via_cash,0)) as val_cash, sum(a.payment_via_cash) as total_cash,
			count(nullif(a.payment_via_tabungan,0)) as val_jaminan, sum(a.payment_via_tabungan) as total_jaminan,
			count(nullif(a.payment_via_ct,0)) as val_ct, sum(a.payment_via_ct) as total_ct,
			count(nullif(a.payment_via_edc,0)) as val_edc, sum(a.payment_via_edc) as total_edc,
			count(nullif(a.payment_via_charge_room,0)) as val_cr, sum(a.payment_via_charge_room) as total_cr,
			now(), a.pool_id,
			count(nullif(a.amount_kembalian,0)) as val_kembalian, sum(a.amount_kembalian) as total_kembalian, 'tes',
			'CLS-HARIAN/'||d.code||'/'||to_char(now(), 'YYMMDD')||'/'||nextval('closing_number_seq')
			from trx_setoran a 
			left join (select date(b.created) as tanggal, sum(b.amount) as total, count(nullif(b.amount,0)) as val,  b.pool_id
				from ap_jaminan b 
				where b.keterangan='Top Up by Pool' group by date(b.created), b.pool_id ) c on (c.tanggal=date(a.created) and c.pool_id=a.pool_id)
			left join master_pool d on(d.id = a.pool_id)
			where a.pool_id=1 and date(a.created)=date(now())
			group by date(a.created), c.total, c.val, a.pool_id, d.code order by date asc; ) VALUES ('')
ERROR - 2019-11-26 16:48:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 16:48:44 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:47 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:48:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;;&quot;
LINE 17: ....total, c.val, a.pool_id, d.code order by date asc; ) VALUES...
                                                              ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 16:48:50 --> Query error: ERROR:  syntax error at or near ";"
LINE 17: ....total, c.val, a.pool_id, d.code order by date asc; ) VALUES...
                                                              ^ - Invalid query: INSERT INTO "closing_cashier_daily" (select nextval('closing_cashier_daily_id_seq'), date(a.created), 
			c.val as val_setoran_jaminan, c.total as total_setoran_jaminan, 
			count(nullif(a.payment_via_cash,0)) as val_cash, sum(a.payment_via_cash) as total_cash,
			count(nullif(a.payment_via_tabungan,0)) as val_jaminan, sum(a.payment_via_tabungan) as total_jaminan,
			count(nullif(a.payment_via_ct,0)) as val_ct, sum(a.payment_via_ct) as total_ct,
			count(nullif(a.payment_via_edc,0)) as val_edc, sum(a.payment_via_edc) as total_edc,
			count(nullif(a.payment_via_charge_room,0)) as val_cr, sum(a.payment_via_charge_room) as total_cr,
			now(), a.pool_id,
			count(nullif(a.amount_kembalian,0)) as val_kembalian, sum(a.amount_kembalian) as total_kembalian, 'res',
			'CLS-HARIAN/'||d.code||'/'||to_char(now(), 'YYMMDD')||'/'||nextval('closing_number_seq')
			from trx_setoran a 
			left join (select date(b.created) as tanggal, sum(b.amount) as total, count(nullif(b.amount,0)) as val,  b.pool_id
				from ap_jaminan b 
				where b.keterangan='Top Up by Pool' group by date(b.created), b.pool_id ) c on (c.tanggal=date(a.created) and c.pool_id=a.pool_id)
			left join master_pool d on(d.id = a.pool_id)
			where a.pool_id=1 and date(a.created)=date(now())
			group by date(a.created), c.total, c.val, a.pool_id, d.code order by date asc; ) VALUES ('')
ERROR - 2019-11-26 16:48:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 16:48:50 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-11-26 16:49:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;VALUES&quot;
LINE 17: ...otal, c.val, a.pool_id, d.code order by date asc) VALUES (''...
                                                              ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 16:49:11 --> Query error: ERROR:  syntax error at or near "VALUES"
LINE 17: ...otal, c.val, a.pool_id, d.code order by date asc) VALUES (''...
                                                              ^ - Invalid query: INSERT INTO "closing_cashier_daily" (select nextval('closing_cashier_daily_id_seq'), date(a.created), 
			c.val as val_setoran_jaminan, c.total as total_setoran_jaminan, 
			count(nullif(a.payment_via_cash,0)) as val_cash, sum(a.payment_via_cash) as total_cash,
			count(nullif(a.payment_via_tabungan,0)) as val_jaminan, sum(a.payment_via_tabungan) as total_jaminan,
			count(nullif(a.payment_via_ct,0)) as val_ct, sum(a.payment_via_ct) as total_ct,
			count(nullif(a.payment_via_edc,0)) as val_edc, sum(a.payment_via_edc) as total_edc,
			count(nullif(a.payment_via_charge_room,0)) as val_cr, sum(a.payment_via_charge_room) as total_cr,
			now(), a.pool_id,
			count(nullif(a.amount_kembalian,0)) as val_kembalian, sum(a.amount_kembalian) as total_kembalian, 'res',
			'CLS-HARIAN/'||d.code||'/'||to_char(now(), 'YYMMDD')||'/'||nextval('closing_number_seq')
			from trx_setoran a 
			left join (select date(b.created) as tanggal, sum(b.amount) as total, count(nullif(b.amount,0)) as val,  b.pool_id
				from ap_jaminan b 
				where b.keterangan='Top Up by Pool' group by date(b.created), b.pool_id ) c on (c.tanggal=date(a.created) and c.pool_id=a.pool_id)
			left join master_pool d on(d.id = a.pool_id)
			where a.pool_id=1 and date(a.created)=date(now())
			group by date(a.created), c.total, c.val, a.pool_id, d.code order by date asc) VALUES ('')
ERROR - 2019-11-26 16:49:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 16:49:11 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-11-26 16:49:41 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 16:49:41 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:57 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:50:58 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:02 --> Severity: Notice --> Array to string conversion /var/www/html/rental/system/database/DB_driver.php 1476
ERROR - 2019-11-26 16:51:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;0&quot;
LINE 1: INSERT INTO &quot;closing_cashier_daily&quot; (0) VALUES (Array)
                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 16:51:02 --> Query error: ERROR:  syntax error at or near "0"
LINE 1: INSERT INTO "closing_cashier_daily" (0) VALUES (Array)
                                             ^ - Invalid query: INSERT INTO "closing_cashier_daily" (0) VALUES (Array)
ERROR - 2019-11-26 16:51:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 16:51:02 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-11-26 16:51:29 --> Severity: Notice --> Array to string conversion /var/www/html/rental/system/database/DB_driver.php 1476
ERROR - 2019-11-26 16:51:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;0&quot;
LINE 1: INSERT INTO &quot;closing_cashier_daily&quot; (0) VALUES (Array)
                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 16:51:29 --> Query error: ERROR:  syntax error at or near "0"
LINE 1: INSERT INTO "closing_cashier_daily" (0) VALUES (Array)
                                             ^ - Invalid query: INSERT INTO "closing_cashier_daily" (0) VALUES (Array)
ERROR - 2019-11-26 16:51:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 16:51:29 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:30 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:51:34 --> Severity: Notice --> Array to string conversion /var/www/html/rental/system/database/DB_driver.php 1476
ERROR - 2019-11-26 16:51:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;0&quot;
LINE 1: INSERT INTO &quot;closing_cashier_daily&quot; (0) VALUES (Array)
                                             ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 16:51:34 --> Query error: ERROR:  syntax error at or near "0"
LINE 1: INSERT INTO "closing_cashier_daily" (0) VALUES (Array)
                                             ^ - Invalid query: INSERT INTO "closing_cashier_daily" (0) VALUES (Array)
ERROR - 2019-11-26 16:51:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  current transaction is aborted, commands ignored until end of transaction block /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 16:51:34 --> Query error: ERROR:  current transaction is aborted, commands ignored until end of transaction block - Invalid query: SELECT LASTVAL() AS ins_id
ERROR - 2019-11-26 16:54:41 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:41 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:41 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:41 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:41 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:41 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:41 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:41 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:41 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:41 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:41 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:41 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:42 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:42 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:42 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:42 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:42 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:42 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:42 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:42 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:42 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:42 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:42 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:42 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:54:48 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 16:54:48 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:55:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:57:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:57:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:57:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:57:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:57:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:57:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:57:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:57:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:57:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:57:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:57:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:57:59 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:00 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:15 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:20 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 16:58:25 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 17:01:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:10 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:10:14 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 17:11:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:15 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:19:26 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 17:22:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:04 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:24:09 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 17:25:34 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 17:25:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:24 --> Severity: Notice --> Undefined variable: id_pool /var/www/html/rental/application/views/closing/add_closing.php 42
ERROR - 2019-11-26 17:26:28 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 17:27:24 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 17:27:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:35:43 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:37:39 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:37:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:38:52 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 17:38:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:40:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:40:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:42:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:44:57 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:52:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:53:05 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:53:49 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:54:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column a.notes does not exist
LINE 5:    a.notes
           ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 17:54:39 --> Query error: ERROR:  column a.notes does not exist
LINE 5:    a.notes
           ^ - Invalid query: select 
			a.date_closing, a.value_jaminan, a.amount_jaminan, a.value_payment_cash, a.amount_payment_cash, a.value_payment_jaminan, 
			a.amount_payment_jaminan, a.value_payment_credit_ticket, a.amount_payment_credit_ticket, a.value_payment_edc, a.amount_payment_edc, 
			a.value_payment_charge_room, a.amount_payment_charge_room, a.created, a.pool_id, b.name as pool_name, a.value_kembalian, a.amount_kembalian,
			a.notes
			from closing_cashier_daily_d a
			left join master_pool b on (a.pool_id = b.id)
			order by a.date_closing desc;
ERROR - 2019-11-26 17:54:55 --> Severity: Notice --> Undefined index: notes /var/www/html/rental/application/views/closing/closing_detail_index.php 58
ERROR - 2019-11-26 17:54:55 --> Severity: Notice --> Undefined index: notes /var/www/html/rental/application/views/closing/closing_detail_index.php 58
ERROR - 2019-11-26 17:54:55 --> Severity: Notice --> Undefined index: notes /var/www/html/rental/application/views/closing/closing_detail_index.php 58
ERROR - 2019-11-26 17:54:55 --> Severity: Notice --> Undefined index: notes /var/www/html/rental/application/views/closing/closing_detail_index.php 58
ERROR - 2019-11-26 17:54:55 --> Severity: Notice --> Undefined index: notes /var/www/html/rental/application/views/closing/closing_detail_index.php 58
ERROR - 2019-11-26 17:54:55 --> Severity: Notice --> Undefined index: notes /var/www/html/rental/application/views/closing/closing_detail_index.php 58
ERROR - 2019-11-26 17:54:55 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 17:55:33 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 17:55:44 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 17:55:47 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:56:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 17:57:28 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/closing/closing_detail_index.php 46
ERROR - 2019-11-26 17:57:28 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/closing/closing_detail_index.php 46
ERROR - 2019-11-26 17:57:28 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/closing/closing_detail_index.php 46
ERROR - 2019-11-26 17:57:28 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/closing/closing_detail_index.php 46
ERROR - 2019-11-26 17:57:28 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/closing/closing_detail_index.php 46
ERROR - 2019-11-26 17:57:28 --> Severity: Notice --> Undefined index: doc_number /var/www/html/rental/application/views/closing/closing_detail_index.php 46
ERROR - 2019-11-26 17:57:28 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 17:57:48 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 17:59:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column c.name does not exist
LINE 5:    a.doc_number, c.name as pt_name
                         ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 17:59:22 --> Query error: ERROR:  column c.name does not exist
LINE 5:    a.doc_number, c.name as pt_name
                         ^ - Invalid query: select 
			a.date_closing, a.value_jaminan, a.amount_jaminan, a.value_payment_cash, a.amount_payment_cash, a.value_payment_jaminan, 
			a.amount_payment_jaminan, a.value_payment_credit_ticket, a.amount_payment_credit_ticket, a.value_payment_edc, a.amount_payment_edc, 
			a.value_payment_charge_room, a.amount_payment_charge_room, a.created, a.pool_id, b.name as pool_name, a.value_kembalian, a.amount_kembalian,
			a.doc_number, c.name as pt_name
			from closing_cashier_daily_d a
			left join master_pool b on (a.pool_id = b.id)
			left join master_pt c on (c.id = a.pt_id)
			order by a.date_closing desc;
ERROR - 2019-11-26 17:59:38 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 18:01:04 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 18:01:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 18:01:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 18:03:00 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 18:03:30 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 18:03:32 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-26 18:03:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 18:03:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-26 18:03:59 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-11-26 18:04:35 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 18:04:47 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 18:04:52 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-26 18:04:59 --> 404 Page Not Found: Uploads/photo
ERROR - 2019-11-26 18:04:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;build&quot; does not exist
LINE 9:    where a.id=build;
                      ^ /var/www/html/rental/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2019-11-26 18:04:59 --> Query error: ERROR:  column "build" does not exist
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
ERROR - 2019-11-26 18:09:57 --> 404 Page Not Found: Jaminan/build
ERROR - 2019-11-26 18:13:25 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 18:14:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 18:14:32 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 18:22:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 18:26:13 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 18:26:16 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 18:27:35 --> 404 Page Not Found: Driver/build
ERROR - 2019-11-26 18:28:29 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 18:30:01 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 18:30:14 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 18:30:17 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 18:36:51 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 18:37:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 18:38:55 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 18:40:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 18:43:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 18:45:17 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 18:45:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 18:46:00 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 18:53:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 18:58:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:00:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:06:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:07:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:09:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 19:09:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:13:00 --> Severity: Notice --> Undefined index: hengki_firmansyah /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-11-26 19:13:02 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-26 19:13:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:14:35 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 19:14:35 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 19:16:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:16:26 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 19:16:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:21:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:22:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:31:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:32:48 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 19:32:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:53:12 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:54:13 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-26 19:54:41 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:54:43 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 19:54:43 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 19:54:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:55:23 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 19:55:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:56:07 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 19:56:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:56:14 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:56:44 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 19:56:49 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 19:56:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:07:02 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:08:50 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:13:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:14:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:15:10 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 20:15:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:24:22 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:24:46 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:25:18 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 20:25:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:28:30 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:34:53 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:35:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:36:31 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:37:58 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:39:18 --> Severity: Notice --> Undefined index: faizal /var/www/html/rental/application/models/Cac_user_model.php 51
ERROR - 2019-11-26 20:39:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:40:42 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:43:09 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:43:48 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:44:11 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:45:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:45:24 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:45:54 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:49:26 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:49:47 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 20:49:52 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:50:22 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 20:50:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:51:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:52:56 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:53:16 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 20:53:20 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:54:05 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 20:54:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:56:19 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:56:21 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:56:32 --> 404 Page Not Found: Spj/spj_index_tiara
ERROR - 2019-11-26 20:56:37 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 20:59:34 --> 404 Page Not Found: Images/favicon.ico
ERROR - 2019-11-26 21:03:40 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 21:03:40 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 21:03:51 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 21:09:03 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 21:12:51 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 21:12:51 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 21:13:04 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 21:13:08 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 21:14:54 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-26 21:15:31 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-26 21:16:07 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 21:16:34 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 21:19:40 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 21:21:14 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-26 21:22:36 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 21:22:58 --> 404 Page Not Found: Closing/build
ERROR - 2019-11-26 21:34:14 --> 404 Page Not Found: Seragam/build
ERROR - 2019-11-26 21:41:06 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 21:41:06 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 21:41:10 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 21:41:15 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 21:53:30 --> Severity: Warning --> Missing argument 2 for Cac_user_model::del_cookie(), called in /var/www/html/rental/application/models/Cac_user_model.php on line 61 and defined /var/www/html/rental/application/models/Cac_user_model.php 77
ERROR - 2019-11-26 21:53:30 --> Severity: Notice --> Undefined variable: cookie /var/www/html/rental/application/models/Cac_user_model.php 78
ERROR - 2019-11-26 22:05:23 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 22:17:27 --> 404 Page Not Found: Spj/build
ERROR - 2019-11-26 22:54:07 --> 404 Page Not Found: Closing/build
