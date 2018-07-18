<?php
define( 'WP_POST_REVISIONS', false );
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
define('DB_NAME', 'ten_database');

/** Username của database */
define('DB_USER', 'username');

/** Mật khẩu của database */
define('DB_PASSWORD', 'mat_khau');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '6s6_pYwdSGShZ8uG8ar2[A:dqhqy,#4nB#Ezfp80a lnxHGIxi_n)*3(1gyN;2a?');
define('SECURE_AUTH_KEY',  ':H0WkeZ^q}Q|^i!&:H!mDcp$,87(yj!0MSy+hp5!r_4r*gDOw,<qKw7>l,`q,s!P');
define('LOGGED_IN_KEY',    ':@.guv.3{:.M]!=*DN=9BVG|]}=$!j9:QovVwym`A-q%tm;a(o)`H{pq-PEssOw0');
define('NONCE_KEY',        'p(Ph(CIEhN2UN5(mBMXSexy iA9(ECjnrb~&O%tE+j-IhL4&<e4 Qc4/qs&:GHZ4');
define('AUTH_SALT',        '8u5+2690jw*Vv@v=E0~iYXdsKk4&58yM:`M0/2$`v8KHcO On5sdi L3[^Vchc `');
define('SECURE_AUTH_SALT', 'PyVrmZA9l;-u2G;wiLxQwBH7%Qd,*c W~{mQ!Z4!~Fw=;>^,nkR9aGm=&0a]% /`');
define('LOGGED_IN_SALT',   '!0<T7QVS>n[I(FvdKv#raPR35O/1+VL.%U}xezL +&W<;mNCN-/(uzS!-&RW9!bv');
define('NONCE_SALT',       '=KS_)I&j<N81,`+-+g ^bJ&oz*YLFRVHKq9=Cb0~~ITIH:g4~14;7w(z&g+-!R8/');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'ha_';

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
