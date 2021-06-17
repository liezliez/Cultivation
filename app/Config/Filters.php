<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;

class Filters extends BaseConfig
{
	/**
	 * Configures aliases for Filter classes to
	 * make reading things nicer and simpler.
	 *
	 * @var array
	 */
	public $aliases = [
		'csrf'     => CSRF::class,
		'toolbar'  => DebugToolbar::class,
		'honeypot' => Honeypot::class,
		'pengunjungAuth' => \App\Filters\PengunjungAuthFilter::class,
		'usersAuth' => \App\Filters\UsersAuthFilter::class,
		'adminsAuth' => \App\Filters\AdminsAuthFilter::class,
	];

	/**
	 * List of filter aliases that are always
	 * applied before and after every request.
	 *
	 * @var array
	 */
	public $globals = [
		'before' => [
			// 'csrf',
			'pengunjungAuth' =>
			[
				'except' =>
				[
					'login', 'login/*',
					'register', 'register/*',
					'/',
					'tentang-kami',
					'tempat-kuliner'
				]
			],
			// 'usersAuth' =>
			// [
			// 	'except' =>
			// 	[
			// 		'login', 'login/*',
			// 		'register', 'register/*',
			// 		'/',
			// 		'tentang-kami',
			// 		'tempat-kuliner'
			// 	]
			// ],
			// 'adminsAuth' =>
			// [
			// 	'except' =>
			// 	[
			// 		'login', 'login/*',
			// 		'register', 'register/*',
			// 		'tentang-kami',
			// 		'tempat-kuliner',
			// 	]
			// ],
		],
		'after'  => [
			'toolbar',

			//'honeypot'
		],
	];

	/**
	 * List of filter aliases that works on a
	 * particular HTTP method (GET, POST, etc.).
	 *
	 * Example:
	 * 'post' => ['csrf', 'throttle']
	 *
	 * @var array
	 */
	public $methods = [];

	/**
	 * List of filter aliases that should run on any
	 * before or after URI patterns.
	 *
	 * Example:
	 * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
	 *
	 * @var array
	 */
	public $filters = [];
}
