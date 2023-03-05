<?php

namespace SlackChannelMessage;

use SlackChannelMessage\Contracts\SlackMessage;
use SlackChannelMessage\Structures\Payload;

/**
 * Send a message to Slack channel
 * Class Message
 * @package SlackChannelMessage
 */
class Message implements SlackMessage {

	/**
	 * Send the Slack message guided to webhook listener
	 * @param $webhook
	 * @param $message
	 * @param null $customStructure
	 * @return bool|string
	 */
    public static function send($webhook, $message, $customStructure = null) {

    	// permite configurar el formato
		// ej. blocks editor de slack
		$structureMessage = !is_null($customStructure) ?
			$customStructure::getStructure($message) :
			Payload::getStructure($message)
		;

		return (new CurlSlackRequest())->request(
			$webhook, $structureMessage
		);

    }

}