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
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'WordPress' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'WordPress' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'Z(Eg<4`O2}fFdQo:[XEOO;ZB)1W(,f{Yx+1s/hZ)djqP0]lUWg/FU-6]CVr}!rBt' );
define( 'SECURE_AUTH_KEY',  '9.epcI2U2:H24NY3m}|n!J6@7(kA5lpn[B6N**>{$End8qh)ty[57.yuoCm4wH/i' );
define( 'LOGGED_IN_KEY',    'L^c5#=]oQ7e2c)NtUW%h#pv)^jZ[<[h*2:rOBpA:*w~i>#~om?6E$/S2womwiWcu' );
define( 'NONCE_KEY',        'pHOdmx~~3T4EEgtjpwq6Yp3%+lUsOUl@x~PF7hUr@>7J7{L /!+?@0wbLPi*[4]F' );
define( 'AUTH_SALT',        'kDa>vxp+4X&UTlYQA;$b]C{G}K0YQ1J?E@CzET6a^G/gzZ~>#f2*x./{J_rqa,Zo' );
define( 'SECURE_AUTH_SALT', '!WXa:2e<Z!pd5*E-vE1cxIxx*Q<(kKhZc]urQd*VtICMNJ#;!Ddv+kZ5%L}1e1UX' );
define( 'LOGGED_IN_SALT',   'h)%J7}gY_ hb}h[pv!zu]{w<xPhymwLP#n.L6&t2pR>xg&2S}?}qxRMGL>HSI7N-' );
define( 'NONCE_SALT',       'E52B.qE %i>h!v*f(lde0mNRzjFTcRj285g1Lmz2a_UJiRfVGY:5]$EOHhG3Us0I' );

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
