<?php

// This file needs to parse without error in PHP < 5.3

if ( 'cli' !== PHP_SAPI && 'phpdbg' !== PHP_SAPI) {
  echo "Only CLI access (currently " . PHP_SAPI . ")\n";
  die(-1);
}

if ( version_compare( PHP_VERSION, '5.3.0', '<' ) ) {
  printf( "Error: Terminus requires PHP %s or newer. You are running version %s.\n", '5.3.0', PHP_VERSION );
  die(-1);
}

define( 'TERMINUS_ROOT', dirname( __DIR__ ) );

include TERMINUS_ROOT . '/php/terminus.php';
