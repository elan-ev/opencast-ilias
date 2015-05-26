<?php

/**
 * Class xoctExeption
 *
 * @author  Fabian Schmid <fs@studer-raimann.ch>
 * @version 1.0.0
 */
class xoctExeption extends ilPluginException {

	const API_CALL_UNSUPPORTED = 10;
	const OBJECT_WRONG_PARENT = 20;
	const API_CALL_STATUS_500 = 500;
	/**
	 * @var array
	 */
	protected static $messages = array(
		self::API_CALL_UNSUPPORTED => 'This Api-Call is not supported',
		self::API_CALL_STATUS_500 => 'An error occurred during the request',
		self::OBJECT_WRONG_PARENT => 'OpenCast-Object have to be in courses',
	);


	/**
	 * @param string $code
	 * @param string $additional_message
	 */
	public function __construct($code, $additional_message = '') {
		$message = '';
		if (isset(self::$messages[$code])) {
			$message = self::$messages[$code];
		}
		if ($additional_message) {
			$message .= ': ' . $additional_message;
		}
		parent::__construct($message, $code); // TODO: Change the autogenerated stub
	}
}

?>