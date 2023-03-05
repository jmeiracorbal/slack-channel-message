<?php

namespace SlackChannelMessage\Structures;

use SlackChannelMessage\Contracts\StructureSlackMessage;

/**
 * Default structure
 * Class Payload
 * @package SlackChannelMessage\Structures
 */
class Payload implements StructureSlackMessage {

	/**
	 * Devuelve la estructura básica con el payload
	 * @param $message
	 * @return array
	 */
	public static function getStructure($message)
	{
		return array(
			'payload' => json_encode(
				array(
					'text' => $message
				)
			)
		);
	}

}