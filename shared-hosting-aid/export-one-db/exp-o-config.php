<?php

// Initialization Vector, 128 bits
define( 'EXP_O_IV', '????????????????' );
//        16 bytes: '________________'

// Public key for encryption
define( 'EXP_O_PUBLIC_KEY_FILE', dirname( __FILE__ ) . '/exp-o-public.pem' );

// Secret-Key HTTP request header
define ( 'EXP_O_SECRET', '??????????????????????????????' );

// wp-config location relative to the parent directory
define ( 'EXP_O_ABSPATH', '/wp-config.php' );
