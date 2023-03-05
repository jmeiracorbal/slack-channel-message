<?php

namespace SlackChannelMessage;

use SlackChannelMessage\Contracts\StructurePayloadMessage;

class StructurePayloadJson implements StructurePayloadMessage {

	public static function getPayloadStructure($message)
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