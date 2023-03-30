<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'ro_wpsite' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~.WwY@H>4t&.X~1L6}iby,n$q&9I)GdG_7N;.U $oVU!Gk1qoU|:Vf+:4q%]CD A' );
define( 'SECURE_AUTH_KEY',  'u)&_$QD`?hIw<B@?1^9)8*oVXfC;K)wyl6RWZ%e[%BG%6#Vwtx HvUT757x<x2HS' );
define( 'LOGGED_IN_KEY',    'XsC,vx=%7GF>mZ|f4|KoGRRC!o] (K?c&g<Q0L&9~:jGf lMf+sG3ocZ/xl4QXT.' );
define( 'NONCE_KEY',        'c@vXeN%CU:%U,8[G.&}Osh8UTZUC!)4<nfG9R#[SjJoPi`Qc2{I;9BB7a}ZvZs6#' );
define( 'AUTH_SALT',        'wc(s4|iKykvtCe*eu4}9Rv?4~jOlexhOs~@g2l{!`nKm{^a+30Rs&el!oQU4AmxD' );
define( 'SECURE_AUTH_SALT', '3 AYvGzh!{dA;tS.GaMsJpt:7`t}!v&bRr{^xMe|pMc?DVL535NqAZ1r@U!z|uyd' );
define( 'LOGGED_IN_SALT',   'wSbT),`[05m7tcX1qA2hgM{L(s2vW{n{]_Y#er,+nL9`)qj5guozLoVNZice?y9y' );
define( 'NONCE_SALT',       'F<B]3_D@OWT})_eO1fH_r>Ih{J`1lFQ10)2/k_`28~0-bieLqLd[/tGNtdM!5b}T' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
