<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

// This file was the current value of auto_prepend_file during the Wordfence WAF installation (Sun, 30 Dec 2018 23:39:30 +0000)
if (file_exists('/nas/wp/www/common/production/auto_prepends.php')) {
	include_once '/nas/wp/www/common/production/auto_prepends.php';
}
if (file_exists('/nas/content/live/kandisflick/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/nas/content/live/kandisflick/wp-content/wflogs/');
	include_once '/nas/content/live/kandisflick/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>