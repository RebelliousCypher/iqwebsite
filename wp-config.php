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
define( 'DB_NAME', 'wpbaza' );

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
define( 'AUTH_KEY',         'x/_/oDUx2ea3L+}4M+q07}zFc)=0c|v}E^Bg3e>eXE?n O]X-]xx LKlK+*A<x2X' );
define( 'SECURE_AUTH_KEY',  'b66ZuwVe?b5($aiC9GA_tIM]K N*sA~#CRz|-&g)tRF>yUipD1|1*T#Q5DeY<`}J' );
define( 'LOGGED_IN_KEY',    'nAA:;dl2<)0Bu&jY?gfxX+^}5=CRnwHS1rW4&<?RM[F60L$dY-Z7cwjPu* Wg}$`' );
define( 'NONCE_KEY',        'g=%eo0.UX~}YpOLTsLC5snO/J.uNd{xO54 4AeL.,:4C0:~&#xA{zM )NRI#jhPY' );
define( 'AUTH_SALT',        'Way#zFH?p[q=Ov3@m^vgC|$Wtgb<Lg3zwYL/Ly[e7q]o#,UT&?KJbjMv<RkG.T}r' );
define( 'SECURE_AUTH_SALT', '-<1J4ovFbuUmSn.P@H)3x23E({=eZ!{vrEm%Hkav)-oR?T^a7$4xuR-t7WsMC-Y ' );
define( 'LOGGED_IN_SALT',   '[CiG.)^?tD,l)#>%cvBmqin{NcT9g=0Hv2/SzU/;>1yAZ2[~ %$5@phI5d jK#?M' );
define( 'NONCE_SALT',       'g<E j=]gbtsA3Tk|v;(m;+_Q,|`i7@.O~7%S*x1Teu|A]L~F6C+U>xeF=,zWXlZr' );

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
