<?php
define( 'SSH_ABSPATH', dirname( __FILE__ ) );

//echo "<script> location.href='view/login.php'; </script>";
echo 'Aici suntem!';
var_dump( $_GET);

$query = isset( $_GET['query'] ) ? $_GET['query'] : '';

preg_match( '#person/?(?P<id>\d*)/?(?P<action>.*)#i', $query, $matches );
foreach ( $matches as $key => $match) {
	if ( is_numeric( $key ) ) {
		unset( $matches[ $key ]);
	}
}
var_dump( $matches );
exit;
