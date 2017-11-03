<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'lineondesign');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't_GN&&&[qsv+D@c<F_-vdk vk;:OKTTE!3]w2^b^/}1p@_y}=ST)U42j(|xEXPJM');
define('SECURE_AUTH_KEY',  'F[loXJDf!%ll(<cO>t>v?l|8A;DoK^j$]InbS*fPut{^h,jI:7$>={A3EsGS!W-o');
define('LOGGED_IN_KEY',    '9K!7>Jc#&|i-|SOk(|Zg3$;9NwW%H{^(T-:5xXjZ|@9-/NI6d nN[+R9HL#kVoO?');
define('NONCE_KEY',        'r5t_]C)6r-x-BsKJc,55eYMZmP?s| =(V?s-Rsv-fRntw+$Ac:d=1^ -(>L0b.uM');
define('AUTH_SALT',        '#Gb=|r3Sl/0DSj/y+v x|FDS}w3&E8W<X#o6/8TvaP+;+PX)h#&rx24m-/7Z-9s^');
define('SECURE_AUTH_SALT', 'Quc#u{#;`+c2X7F1PYS~X~AeDQc$@c$=-a*;?1p>M{(+<A|JV-L0z8Q,;B$>lxO;');
define('LOGGED_IN_SALT',   'u6.H;6o<JS2:4iCd)-/I7sqAS+yfQ]}bvPQ{@L_oiKN lqqm2aPscY0bJ!o7L967');
define('NONCE_SALT',       ',cId*/;-1uhw^NY^T7FVZ{OLm|U80c#FIXV!>~*rPJJp3KS:6&)%ma%t*C)y7Si)');


/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
