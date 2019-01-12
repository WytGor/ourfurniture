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
define('DB_NAME', 'altabaty_mebel');

/** Имя пользователя MySQL */
define('DB_USER', 'altabaty_mebel');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'CUjs5pA0');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'g?3&7-~5tEd]!b`tZ!H&VX#mkw,3|_9gJk^4xDOl88K!.ExW42]pO>M~^V1SPo->');
define('SECURE_AUTH_KEY',  'dFcUC<w`n001nqPVv[(=Qzw<<Q,K*O~Y)s+jG0|=q~N4js#[@1EKrIAL6U6/khs_');
define('LOGGED_IN_KEY',    'P4>U%~-f=f`})Hz}#uELA,z2Ox)13OVtq|wC;fF^cD4!J!6$k0%bvtf.{Ey~%zup');
define('NONCE_KEY',        'SAz!7bsZ<>+{>$78cM7-DPfZ4|s:^?g5+BI5vF{s<@yf0b`Ci/WIvUt-r39cVhPv');
define('AUTH_SALT',        'yC4TrW>~3$|eVqBNerj}9%/|3{H=,{7a_jK_<;^pt>Iig{D/v=?%U=t^b&E$N%c7');
define('SECURE_AUTH_SALT', 'fA6L~3~:|}9nnc1l%3is$qz/e|8_0-/*cSkZ#z#p9~~Px8=eHNAOb3n_u3Ht>3c-');
define('LOGGED_IN_SALT',   'LEwQt9#YsSO@Cv9/<eOxKK`n9Kb91ok]$1F3cxo*CkACIfl/@w^~Z=3}bj*2RU$)');
define('NONCE_SALT',       ']3_8$Byzr!=dj@cT(coftBVtMef||*91Mso$!VW-|9I>Oq9{_zEfEJUw zo_0JP3');

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

define('FS_METHOD', 'direct');
