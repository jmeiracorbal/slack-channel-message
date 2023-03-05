<?php

namespace SlackChannelMessage\Contracts;

interface PayloadRequest {

	function request($url, $payload);

}