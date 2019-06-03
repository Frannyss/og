<?php
if ( $key = md5( $_GET["key"] ) ){
	switch ( $_GET["type"]  ){
		case "activate":
			if ( file_exists("keys/" . $key) ){
				copy("keys/" . $key, "usedKeys/" . $key);
				unlink("keys/" . $key);
				echo "Sucess";
			} else {
				echo "InvalidKey";
			}
		break;
		case "check":
			if ( file_exists("usedKeys/" . $key) ){
				echo "Sucess";	
			} else {
				echo "InvalidKey";
			}
		break;
		default:
			echo "ParametrsNotFound";
		break;
	}
} else {
	echo "ParametrsNotFound";
}
?>