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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'dotinstall_wordpress');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'dbuser');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'dbuser');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

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
// define('AUTH_KEY',         'put your unique phrase here');
// define('SECURE_AUTH_KEY',  'put your unique phrase here');
// define('LOGGED_IN_KEY',    'put your unique phrase here');
// define('NONCE_KEY',        'put your unique phrase here');
// define('AUTH_SALT',        'put your unique phrase here');
// define('SECURE_AUTH_SALT', 'put your unique phrase here');
// define('LOGGED_IN_SALT',   'put your unique phrase here');
// define('NONCE_SALT',       'put your unique phrase here');

define('AUTH_KEY', '+7SWg:)~EMcJT85}9NT%:bK;/+edn6F70/e$V]w4JT]L9L}wBg@$@UYNG/lx4R3 ');
define('SECURE_AUTH_KEY', '[3-$)AB27Hl?8c-b62)*@HWheQ|?(rmjE]J/2PD C93%aCpZE!2etDr/j64#s|AM');
define('LOGGED_IN_KEY', 'G11P5U`S87=D-L~yn-%YhYV+BZ_NJRq{9+109|Fq{=@kVWh-)}e7y|1[8/]4B4|t');
define('NONCE_KEY', 'kt:LE8,-MhCqgs7dxF;0+,c(zcr-Aew.~}4*uwpW,bb!#zj-.o45XK|%+0B>O+G$');
define('AUTH_SALT', 'l2Un`?J fJ&O!K:K9Bwti%4/B74(|<YF.npI)SA2OLo(eg.JlfsE={|lGR])*(St');
define('SECURE_AUTH_SALT', '$i%5}^AGw0W,hYA,@+X@K$6n^YAj/{@jD&vgw}|C;+^W,uy/Eg3I6N+-7m:wg?&5');
define('LOGGED_IN_SALT', '/rL{:6iIB-{Y$%.m+,N:q*F4~EbUv-j7,P+~O:--&T#k6OiIANk[z@0#{Ui@8+#F');
define('NONCE_SALT', '$nx0r=Tm}.C.@V=ckA(U|a6OIYu~!:sR+B?t[W: xcGQ% `@WFwM,4G?i=TX.3hJ');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

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
