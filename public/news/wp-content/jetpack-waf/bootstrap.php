<?php
define( 'DISABLE_JETPACK_WAF', false );
if ( defined( 'DISABLE_JETPACK_WAF' ) && DISABLE_JETPACK_WAF ) return;
define( 'JETPACK_WAF_MODE', 'normal' );
define( 'JETPACK_WAF_SHARE_DATA', '1' );
define( 'JETPACK_WAF_DIR', '/home/u356820833/domains/cv-gen.com/public_html/news/wp-content/jetpack-waf' );
define( 'JETPACK_WAF_WPCONFIG', '/home/u356820833/domains/cv-gen.com/public_html/news/wp-content/../wp-config.php' );
require_once '/home/u356820833/domains/cv-gen.com/public_html/news/wp-content/plugins/jetpack/vendor/autoload.php';
Automattic\Jetpack\Waf\Waf_Runner::initialize();
