<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'wordpress_1' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ayBCjcyoo$yon]~^t+HcZ?u.Xj-]LB00e~LTF-IggC$AY61`@5;yl{@hk@^JeXuN' );
define( 'SECURE_AUTH_KEY',  'Xj&Qoj|HMu{PF>yEc)G#Z?HoB/x<ia&b-YOW-o;<RO)>iE1|C.`K&PZO;{824]3<' );
define( 'LOGGED_IN_KEY',    '*> /|}}hloc|F;E?jQ*S.6()@k}*pLwGufu#*Ic[mL5:%na>qxNU@ss}sehSU3;3' );
define( 'NONCE_KEY',        'm({C[4m-jSzfucmYorDkk$_W/8Qr}nV0eG[phcdQAS15U[<83b}9+ytzgj7P1N{;' );
define( 'AUTH_SALT',        '}4Bzj`2nX],|lgQSM@=q4hd7)&&3)y+6{4%_jBsV~o>/!F/D7CWvh3ZN%dUE__(-' );
define( 'SECURE_AUTH_SALT', 'BjuI}cA1fd,-qEuk&!|h_@jOYQ@,8F}OiJ%o#na!5eKQ2d6f_+$5~*F*$)EIyNt ' );
define( 'LOGGED_IN_SALT',   'HijR{K#@0W1O/AmUm(15_{7<jE;@(k4yh_g/QD*i(-Z>[KJe[,<x,S+FjU6zH& j' );
define( 'NONCE_SALT',       '1dIQ0nPZgx+Yt!!LXwEWViM+/WdxiGJH7`$$tR2]OzAZT^B-Hke<t+ghg/e9UTdZ' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
