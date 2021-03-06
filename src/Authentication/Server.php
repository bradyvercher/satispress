<?php
/**
 * Authentication server interface.
 *
 * @package SatisPress
 * @license GPL-2.0-or-later
 * @since 0.3.0
 */

declare ( strict_types = 1 );

namespace SatisPress\Authentication;

use SatisPress\Exception\AuthenticationException;
use Satispress\HTTP\Request;
use WP_Error;

/**
 * Authentication server interface.
 *
 * @since 0.3.0
 */
interface Server {
	/**
	 * Check if the server should handle the current request.
	 *
	 * @since 0.4.0
	 *
	 * @param Request $request Request instance.
	 * @return bool
	 */
	public function check_scheme( Request $request ): bool;

	/**
	 * Handle authentication.
	 *
	 * @since 0.3.0
	 *
	 * @param Request $request Request instance.
	 * @throws AuthenticationException If authentications fails.
	 * @return int A user ID.
	 */
	public function authenticate( Request $request ): int;
}
