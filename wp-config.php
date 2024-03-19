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
define( 'DB_NAME', '044-22_70374' );

/** Имя пользователя базы данных */
define( 'DB_USER', '044-22_70374' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '3a70243c41c40fb3f2df' );

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
define( 'AUTH_KEY',         '#lYT.V3?v5jW;grrGrHe#~9ly$JE&Y0|#<`Z3!a-u34mb$R{i0Lip+-2<Td:aZY3' );
define( 'SECURE_AUTH_KEY',  'OX A@ukTI,AP?;ME6jGDQ#@iW+:K~f`,zp{.,2rj@Gc&E2p5B@8k+UX;ER:gq|,/' );
define( 'LOGGED_IN_KEY',    '64T{2c_-^%Hbt/?Wt;M_!y%*{m}~[^SK^%pD<F&aC_DgDRB{W<NnNHZ<Hy-mO4k}' );
define( 'NONCE_KEY',        '.h88y#8viUM6RS?[Bu%q?wfPE[NERVm4b:xV0rmR$$u+5-/j+]F2(Y}$7j#t-55I' );
define( 'AUTH_SALT',        'IQ>*#F,@XrlRj2#T- txbEDz8PqE87H.i.[j=mLU1OCMC1s^L>/xUh+?@`Dl/Y/R' );
define( 'SECURE_AUTH_SALT', 'WC0+(uwQN!p8|)rHHkefu5xJuCGiT)ezEO ~;ms+e#|{mdwCe@9s-WXN}Q|R|N^>' );
define( 'LOGGED_IN_SALT',   'g1JkDTdLJ6h!$J}U7@J)&=3o=VDWb}xg/24rceVS;I% >BlzVH0R-X,N77t1RQR_' );
define( 'NONCE_SALT',       'M3jU-*`=PV4iAOa!p))sULAOfv9&t|lp `M#tKq@xA$!g(aVi2Ftmt/|iv#l@02R' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'Uv84d_';


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