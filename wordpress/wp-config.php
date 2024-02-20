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
define( 'DB_NAME', 'wp_nove' );

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
define( 'AUTH_KEY',         'T1pYXC%ogU385FRMY(/uY,*!=S4FT*{3dBQ.7LaV1AUq$t:-ciydmW0P{ZJ/eTBQ' );
define( 'SECURE_AUTH_KEY',  'waQMuu+Dl:%5+e/ho;&jJ{:Re{6b3HXsa~#.5[#WP)u8|Iy^V:?h?k$(~{ysCA|u' );
define( 'LOGGED_IN_KEY',    'aPDD3&3yjph@AuFo25mV~GQ`F(}Uo7=M,HbX[G=Ws@:XC$L]A8QyK^$%}()-3.h&' );
define( 'NONCE_KEY',        'W;~wS1_8M~u?3PIP(6D8l+]{3$LcIIh?c_H??];RV*y=<TNF[Sj<i%[WBBm6!wm@' );
define( 'AUTH_SALT',        '6zA~6R}ZRu~<w{<o;ZbJ&i$Q2x44u^V3q6z|ax3~d8zk|wm{j+m#b&9y1=*]p;}O' );
define( 'SECURE_AUTH_SALT', '!6`?(Ho85yu0d(j6.IIhB{U,1{C`%/XVih8g:EC0uGy^5Z|>z]}g%L<ndJO1iW~~' );
define( 'LOGGED_IN_SALT',   'UyUVCw:60y7Mh)e+DK;e ZkZ+x--kV!sK6XzjFUkRUS7RkM[N>MT3s[N^054<%yt' );
define( 'NONCE_SALT',       'AYQm:7n6GwV9^c{|Gv~z/G(G]I@n}MvF A8i`b>*_/(zA#bdSB`b6kT<Uz$0W{kq' );

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
