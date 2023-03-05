<?php

namespace SlackChannelMessage\Contracts;

interface SlackMessage {

	static function send($webhookUrl, $messageContent);
}