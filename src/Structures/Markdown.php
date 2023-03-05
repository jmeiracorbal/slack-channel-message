<?php

namespace SlackChannelMessage\Structures;

use SlackChannelMessage\Contracts\StructureSlackMessage;

class Markdown implements StructureSlackMessage {

	public static function getStructure($message)
	{
		return json_encode(
			[
				"blocks" => [
					[
						"type" => "section",
						"text" => [
							"type" => "mrkdwn",
							"text" => $message
						]
					]
				]
			]
		);
	}

}