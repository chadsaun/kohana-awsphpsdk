<?php defined('SYSPATH') or die('No direct script access.');

return array(
	'credentials' => array(
		'@default' => array(
			'key' => 'my-key',
			'secret' => 'my-secret',
			'default_cache_config' => APPPATH . 'cache',
			'certificate_authority' => false
		)
	)
);