<?php

namespace SlackChannelMessage;

use SlackChannelMessage\Contracts\SlackRequest;

class CurlSlackRequest implements SlackRequest {

	public function request($url, $payload) {

		// Use curl to send your message
		$c = curl_init($url);
		curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($c, CURLOPT_POST, true);
		// prevent ok response slack api
		curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($c, CURLOPT_POSTFIELDS, $payload);

		$curlResponse = \curl_exec($c);

		$error    = \curl_error($c);
		$errno    = \curl_errno($c);

		if (\is_resource($c)) {
			\curl_close($c);
		}

		if (0 !== $errno) {
			throw new \RuntimeException($error, $errno);
		}

		return $curlResponse;

	}

}