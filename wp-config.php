<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'treinaweb_radical');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '0iFRkj -.Hp6u_C3:Gu@Rrf4zv`pM2Z+6l5/AC`[*lx6}KWW4]v}>MLIO]$wnyb ');
define('SECURE_AUTH_KEY',  'I]<JG{o,Ufa+Rm(th6oa&.olKdb?Zpl3M/c*9MV#-_t5!O9IYKiGY0G[f-p]Y]Wv');
define('LOGGED_IN_KEY',    '8&a[/#m>7bQ<rb|sBi9<cD%46u,}?YwTj&{ns;^K(ZUT&:zW+sISb,vM/+pc)o%m');
define('NONCE_KEY',        'TdYrp8<i<Dt9au<| 1hjlBV(i.MzR+;4|3yMvRW;=wIzIm;1SjDZd_8bp]f[d%>1');
define('AUTH_SALT',        'i }FNb$!^S1Ia`LPv3pD{MeP:EnVsuwP15a{f/J;HcY/GpEPO=Y<U[}<B.6kL+BA');
define('SECURE_AUTH_SALT', 'Oc@gLhdc1+=5h:N#|i<j_Y,I1pdlRtD(qqvc?8rR9_CJI;sZ+txDrpR^Ip,Lv15y');
define('LOGGED_IN_SALT',   '04W{o:%S_8`V%*wOGd-lRNE@D+0Tf-9`7:@#Qj|XK5o_d/G%Q~D<;}AfCL>sJr)r');
define('NONCE_SALT',       'c gV;>ZJk6B|% c,h_;PP[uuGvOn|O>!vA <4S3KUaijlimMviI;T0Ql.Lh32^[.');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
