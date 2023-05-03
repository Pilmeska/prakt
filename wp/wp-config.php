<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'prakt' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[9(fw&3-9W4n`F{YH ]}(1!m.s.=/z7ESWJ)(m{h|6s[#OK-eVW<i;mn4!![V]Tp' );
define( 'SECURE_AUTH_KEY',  '2${<Y{2%^v2<6` aRjse$u|,d |<|p.bs.nvsL>/UC?-O6higNIX{aY}XeP&z0CB' );
define( 'LOGGED_IN_KEY',    '&|{Xfag{?B#vE3!@&uVTIh791V7Ho90aV%nFjW.6P-lB$j>kp{FG[2yOp3!f`wUm' );
define( 'NONCE_KEY',        'JyEeZ$=5V5WkH?kfLjZ 6hMGpYQsi[wp!A#w3i.5?eD;@*T]>CC<gt=H4mRV[:Vq' );
define( 'AUTH_SALT',        ';#ej#3{R!BE4+ 7EPvG=%VC_uTx,D%6u.;VCcw0UlCJ<B]t~g=z/v_^=(|bd*8N2' );
define( 'SECURE_AUTH_SALT', '8,{B~ns8|~+ic[BK8OlEV/X1SS>|acPS1VZX#FGPDM)9O2$}Z*w,v/3z#XKzUe;%' );
define( 'LOGGED_IN_SALT',   'Bs6tQ)R/RZP|58k/s!ICJU*>,|,lpz>F(1~vp)GK9_9$b=5)hqb &Rf2/277D>ov' );
define( 'NONCE_SALT',       '>;,./3,OQ$c~8rZmv&,o>]/4n+(x<3/mN]5?k08<kYzw*i)lWLb[fCnFh>}S<&6O' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
