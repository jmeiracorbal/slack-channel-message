<?php

namespace SlackChannelMessage\Contracts;

interface SlackRequest {

	function request($url, $payload);

}