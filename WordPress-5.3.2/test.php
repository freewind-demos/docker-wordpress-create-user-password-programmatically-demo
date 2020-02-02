<?php
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

require( dirname( __FILE__ ) . '/wp-load.php' );

$hash = wp_hash_password('123456');
echo $hash;

echo '<br/>';

wp_create_user('test','123456');

$testUser = get_user_by( 'login', 'test' );
print_r($testUser);

echo '<br/>';

echo wp_check_password('123456', $testUser->user_pass);

?>