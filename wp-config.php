<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'eroom');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'nikoniko2525!');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V/}qY)iH8p}@#A?L1{z;doa(zEZ7aP/okTH*z}YM@H1ySp+Lxc!;&9jc1B+fE&W2');
define('SECURE_AUTH_KEY',  '=[%2MCTR pmd`GKv`*My/gUQ>o W5s1:m*wO{-N9!pwoyHg{P}aQDR:u:ezv;cj<');
define('LOGGED_IN_KEY',    'Has&CZ%0^9(C|L5guerkH Dsqy>b-~^|29wd2u&z8hn2KluZ-J9K+9)^<z?.>I*W');
define('NONCE_KEY',        '^@:ZWLaGl4=Va=@V&u;<=A>4q</bSd[x`Y$<FWX_Il1d%m}hE5}c>m_KRD(GySX~');
define('AUTH_SALT',        '&>-*1QS1G MS;><XRu85&~fVn}I4?8!lg]^-K_:!iZH8+=|Z=ON)(-/aqC^*w/*Y');
define('SECURE_AUTH_SALT', '#ANq}=9O.>xmfM/&DV5,[mMU~n=T/{0xFRkZkut_iB/;Y{Ya4,}2m`J2,|HE!Zep');
define('LOGGED_IN_SALT',   'g7dT@+CpC`*w;Rvu`!k-iRU Du4KU`kT8S1hkwNUb,v{XBkn(=nXE(+S(]xjfeXC');
define('NONCE_SALT',       'dk~|S_%b6YQ&Q:d=zD8R?&^$W~q}yfHxl%%{3Jf&}H^r:~*[}4eP*{~c_8>{prl;');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'eroom_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** FTPのアップ先 */
define('FTP_BASE', ABSPATH);
define('FTP_CONTENT_DIR', ABSPATH . 'wp-content/');
define('FTP_PLUGIN_DIR', ABSPATH . 'wp-content/plugins/');
define('FS_METHOD','direct');
