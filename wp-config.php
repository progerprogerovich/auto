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
define( 'DB_NAME', 'auto_bd' );

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
define( 'AUTH_KEY',         '8emPt)jog&Zk5<!eH?o(g>uM;+^.lwi10%hoCl~LIj==i$b_K,KB%3z&?0Up*^MK' );
define( 'SECURE_AUTH_KEY',  'mh0r(z!/R>E 4HkOjwh<^zEFueXrUDYx5t36wmC9huC(b/Hi/(Bp>v*?/_2,(4z^' );
define( 'LOGGED_IN_KEY',    'n<t.bDB#ay7O0yfkwb%1pSwx.+yxAxI%Ip1+m.<1PCaaR6HR4el6<+PTjK]XH3EG' );
define( 'NONCE_KEY',        '[bvYsMTse9:/Il4!uE Q![R!@X4- +I!Lg~+LEt.~8v&c&e+SFVT~-T$0qG%+CGw' );
define( 'AUTH_SALT',        'BI,F::yHA 9,8*QDrX]%{@?w-Wx^G.#%fcW64c]>}-6>xN~H g.PA*}/-zZX@.HW' );
define( 'SECURE_AUTH_SALT', 'U&Q7#+PX8b0A^_f,]y*1?J6]*]VZf=E4v~{ek^)KD3-v(dDLu;w?|5je0K8IKEJQ' );
define( 'LOGGED_IN_SALT',   'B0)E)w4>DcHa@0}Ntt8`u@*>9Fwdqg@pjp=|-U@2O8]%vhdrngpRJ])Wy#Du7.RQ' );
define( 'NONCE_SALT',       '%Ak-z1U/`J:HjC55]/^~*eoBZ{}:znzHtqo/OM^gW5(a2$~1yfldPZ#F2?g*c+G0' );

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
