<?php
/**
 * Failed file operation exception.
 *
 * @package SatisPress
 * @license GPL-2.0-or-later
 * @since 0.3.0
 */

declare ( strict_types = 1 );

namespace SatisPress\Exception;

/**
 * Failed file operation exception class.
 *
 * @since 0.3.0
 */
class FileOperationFailed extends \RuntimeException implements ExceptionInterface {
	/**
	 * Unable to move release artifact to storage.
	 *
	 * @since 0.3.0.
	 *
	 * @param string     $filename    File name.
	 * @param string     $destination File path.
	 * @param int        $code        Optional. The Exception code.
	 * @param \Throwable $previous    Optional. The previous throwable used for the exception chaining.
	 * @return FileOperationFailed
	 */
	public static function unableToMoveReleaseArtifactToStorage(
		string $filename,
		string $destination,
		$code = null,
		\Throwable $previous = null
	): FileOperationFailed {
		$message = "Unable to move release artifact {$filename} to storage: {$destination}.";

		return new static( $message, $code, $previous );
	}

	/**
	 * Unable to create temporary directory.
	 *
	 * @since 0.3.0.
	 *
	 * @param string     $filename File name.
	 * @param int        $code     Optional. The Exception code.
	 * @param \Throwable $previous Optional. The previous throwable used for the exception chaining.
	 * @return FileOperationFailed
	 */
	public static function unableToCreateTemporaryDirectory(
		string $filename,
		$code = null,
		\Throwable $previous = null
	): FileOperationFailed {
		$directory = dirname( $filename );
		$message   = "Unable to create temporary directory: {$directory}.";

		return new static( $message, $code, $previous );
	}

	/**
	 * Unable to create zip file
	 *
	 * @since 0.3.0.
	 *
	 * @param string     $filename File name.
	 * @param int        $code     Optional. The Exception code.
	 * @param \Throwable $previous Optional. The previous throwable used for the exception chaining.
	 * @return FileOperationFailed
	 */
	public static function unableToCreateZipFile(
		string $filename,
		$code = null,
		\Throwable $previous = null
	): FileOperationFailed {
		$message = "Unable to create zip file for {$filename}.";

		return new static( $message, $code, $previous );
	}

	/**
	 * Unable to rename temporary artifact.
	 *
	 * @since 0.3.0.
	 *
	 * @param string     $filename File name.
	 * @param string     $tmpfname Temporary file name.
	 * @param int        $code     Optional. The Exception code.
	 * @param \Throwable $previous Optional. The previous throwable used for the exception chaining.
	 * @return FileOperationFailed
	 */
	public static function unableToRenameTemporaryArtifact(
		string $filename,
		string $tmpfname,
		$code = null,
		\Throwable $previous = null
	): FileOperationFailed {
		$message = "Unable to rename temporary artifact {$tmpfname} to {$filename}.";

		return new static( $message, $code, $previous );
	}
}
