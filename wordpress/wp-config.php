<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'ProgettoWP' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '#h7_YCm*qDI^gkd|Ey<{9`3*^IVfCI^K)yQ(9$*Kz[(;%%2-QjbCBO_jf++nl[.q' );
define( 'SECURE_AUTH_KEY',  'oQs)+*-/bek`HOn6hjzW!7h4N?Q0D$y,r*{R@mDp_.q{|8ymL{5;CQI<pKmi.7_~' );
define( 'LOGGED_IN_KEY',    'mw9)l1P?GWfS@6-rxR#YH4u!E3r+|: y/rl u!#AwFE@JN}o8?:_+@8KIR}5OGfq' );
define( 'NONCE_KEY',        'wNvLD#W)nIq=`ri*s<XeY/$]Ky-aL&ZrojlXlIG n@lX;%7{Kv.A9SoH;(^eE<N[' );
define( 'AUTH_SALT',        'Lf/!f-)}!Bw[`oB]Zy6ZD4(d46xap|^WL5t+rs,9kI{-oDE%T`<SKt1(q[U2 H6~' );
define( 'SECURE_AUTH_SALT', 'Qy6 *o/nzuLog^5d17b2yFv=j;!j2q .Zva|<oS7+)/JNJNrU`-:#=?>3(G!DP,9' );
define( 'LOGGED_IN_SALT',   'aO-)zp}_`Y^-s:0;F76EbY>9~OH]c16A}7k)G/e2g#li^*MHpy<vB^0zo$a| :s6' );
define( 'NONCE_SALT',       'A[&$%eBg]5>Mta23;[=SE<t3 8Y_imM95xFT_hh|.tB2[XZ^jZT.T(>[9L?[.B0J' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
