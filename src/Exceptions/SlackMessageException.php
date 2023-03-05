<?php

namespace SlackChannelMessage\Exceptions;

class SlackMessageException extends \Exception {

	public static function createFromIncorrectContractStructure() {
		return new self(
			sprintf(
				"Object custom structure is not a valid structure. Not implements Contracts\StructureMessage."
			)
		);
	}

}