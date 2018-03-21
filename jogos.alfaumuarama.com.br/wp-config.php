<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define('DB_NAME', 'jogosalfa');

/** O nome do utilizador de MySQL */
define('DB_USER', 'root');

/** A password do utilizador de MySQL  */
define('DB_PASSWORD', '');

/** O nome do serviddor de  MySQL  */
define('DB_HOST', 'localhost');

/** O "Database Charset" a usar na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BqW7-=o+M`w@9i#OwN`sFe?nU+v,3ksOzNQ#<lpEuAQn?K%j1<2Yy#e].Y*At:.o');
define('SECURE_AUTH_KEY',  '&OC5EGb,MqZvwD7SRStc00yE)[BE:@?Q |>.Nh>C,6]iUinDEC(DB(:N+7=mu_49');
define('LOGGED_IN_KEY',    'om(Up8J!gXwJ{)EkA[agf6:]^{F)<QHW#9#0JZY&9m|gGfylFaj|./>sRzlH/6/}');
define('NONCE_KEY',        'v6SRSjw&?^9.@_E(U)ydb-}?5NOX^BA<f]_%%p%Z79@+^-&0|qyAJWr8Z$M5Ohd6');
define('AUTH_SALT',        '&,-=q#BCo8f*{4tq~2OOCE|)>x: #d~FprJ)i/4jC29,_{~DaC^}EImhvL03Rc/N');
define('SECURE_AUTH_SALT', 'J|.gHU>A!!p)p]v(h]+)]#_cTK41dk68.l[d${.~VlVm4WU.CNFX9cBSm  zQ?z6');
define('LOGGED_IN_SALT',   '8sdq|gtuwtBF*$IMmc~5 M6(Q__`dJB-nuWDnJe.x@xL)I?1q4:A7)x@hwehqZK9');
define('NONCE_SALT',       'kLEBvj9j)NDnsz~E149-CaB~W9te<^>?U8LBesb|={K{XM%p,Zfw;Zd^w LgaM;+');

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix  = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
