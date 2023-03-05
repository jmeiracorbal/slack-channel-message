<?php

namespace SlackChannelMessage\Structures;

use SlackChannelMessage\Contracts\StructureSlackMessage;

class PlainText implements StructureSlackMessage {

	public static function getStructure($message) {

		return json_encode(
			[
				"blocks" => [
					[
						"type" => "section",
						"text" => [
							"type" => "plain_text",
							"text" => "This is a plain text section block.",
							"emoji" => true
						]
					]
				]
			]
		);

	}

}