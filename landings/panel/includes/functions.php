<?php 

	function get_header() {
		return include 'header.php';
	}

	function get_footer() {
		return include 'footer.php';
	}

	function get_base() {
		// output: /myproject/index.php
		$currentPath = $_SERVER['PHP_SELF'];
		// output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index )
		$pathInfo = pathinfo($currentPath);
		// output: localhost
		$hostName = $_SERVER['HTTP_HOST'];
		// output: http://
		$protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
		// return: http://localhost/myproject/
		echo $protocol.$hostName.$pathInfo['dirname'];
	}

	function the_title() {
		echo "Panel de control";
	}

?>