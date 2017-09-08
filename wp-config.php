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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'deluxco_dev-1');

/** MySQL database username */
define('DB_USER', 'deluxco_dev-1');

/** MySQL database password */
define('DB_PASSWORD', 'dev1.dlc');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
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
define('AUTH_KEY',         'YVl&{f4L+]{*Q>Brz2x8[hb~fO>^r)>7D6X&p_i#-7lES kfV_g}I<5MviZNLl1%');
define('SECURE_AUTH_KEY',  'H2*Hsm|%?(Jdz5/zAYu>t&+X/L/[<</+II8d;I./6}]?vh6./8w:5.7t;l_NqcB?');
define('LOGGED_IN_KEY',    'zBY%VctdRqQ#46Z,-:-N@@8VY~xiQ^vu,#C8#(|k+#P<i7+&HH`dBD;~Kn-)Xm i');
define('NONCE_KEY',        'hFV0/(csI&>}1u@WPlk[d,jber)8~z?46;g:FnQ7)^m!9:p4kM0XsaV_9S$P$,y1');
define('AUTH_SALT',        'Ln5Zwklh~4jbwSDC-U}E!wAWQ>hh]lk;#u}-f0H&7ea^!r|xDh,y]>Xnlv%3-{lb');
define('SECURE_AUTH_SALT', 'EQA+kYFP:_0Ya/4@t<O!FSyOfPt_K1fxP8Td0S2Qx[Z(%I|lxX+n*5I[|v1#y.=b');
define('LOGGED_IN_SALT',   '|8ZGfijI-;+MB1d<?Zc]7|4#!?@N5pKiB-==C/D@0E`e=|[Js9j,XxS8$E@:)-r3');
define('NONCE_SALT',       'T_H1~nW]ZKykYn^myYme[ATC[FZFvk}hJ>2Ys`N?~/_20De9%L$6&Z##NAjVWl-q');

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
