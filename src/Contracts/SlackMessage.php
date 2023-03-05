<?php

namespace SlackChannelMessage\Contracts;

interface SlackMessage {

	static function send($webhook, $message, $customStructure = null);
}