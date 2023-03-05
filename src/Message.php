<?php

namespace SlackChannelMessage;

use SlackChannelMessage\Contracts\SlackMessage;

class Message implements SlackMessage {

    private $webhook_url;
    
    private function __construct($webhook_url) {
        $this->webhook_url = $webhook_url;
    }

    public static function send($webhook, $message) {
        return (new self($webhook))->request($message);
    }

    private function request($message) {
    	// por ahora sólo admite este formato
		$payload = StructurePayloadJson::getPayloadStructure($message);

        return (new CurlPayloadRequest())->request($this->webhook_url, $payload);
    }

}