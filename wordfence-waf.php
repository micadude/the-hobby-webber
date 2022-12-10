<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

// This file was the current value of auto_prepend_file during the Wordfence WAF installation (Mon, 28 Nov 2022 17:25:39 +0000)
if (file_exists('C:\\Users\\yello\\Local Sites\\elementor-website\\app\\public/wordfence-waf.php')) {
	include_once 'C:\\Users\\yello\\Local Sites\\elementor-website\\app\\public/wordfence-waf.php';
}
if (file_exists(__DIR__.'/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", __DIR__.'/wp-content/wflogs/');
	include_once __DIR__.'/wp-content/plugins/wordfence/waf/bootstrap.php';
}