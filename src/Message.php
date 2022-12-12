<?php

namespace SlackChannelMessage;

class Message {

    private $webhook;
    
    private function __construct($webhook) {
        $this->webhook = $webhook;
    }

    public static function send($webhook, $message) {
        return (new self($webhook))->sendMessageJson($message);
    }

    private function sendMessageJson($message) {
        return $this->curlRequest(
            $this->getPayloadMessage($message)
        );
    }

    private function getPayloadMessage($message) {
        return array(
            'payload' => json_encode(
                array(
                    'text' => $message
                )
            )
        );
    }

    private function curlRequest($parsedMessage) {

        // Use curl to send your message
        $c = curl_init($this->webhook);
        curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($c, CURLOPT_POST, true);
        curl_setopt($c, CURLOPT_POSTFIELDS, $parsedMessage);
        $response = \curl_exec($c);

        $error    = \curl_error($c);
        $errno    = \curl_errno($c);

        if (\is_resource($c)) {
            \curl_close($c);
        }

        if (0 !== $errno) {
            throw new \RuntimeException($error, $errno);
        }

        return $response;

    }

}