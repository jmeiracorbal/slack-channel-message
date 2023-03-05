# SlackChannelMessage

* create a [Slack app](https://api.slack.com/apps)
* if your app is created, click on your and go to *Add features and functionality*
* click on *Incoming Webhooks* and activate the webhook
* copy the webhook URL

# Send a Slack Message

```php
use SlackChannelMessage\Message;

require_once './vendor/autoload.php';

// change https://hooks.slack.com/services/any_token_slack/generated_token/my_token by yours webhook url
define('SLACK_WEBHOOK_CHANNEL_URL', 'https://hooks.slack.com/services/any_token_slack/generated_token/my_token');

Message::send(
    SLACK_WEBHOOK_CHANNEL_URL, 
    "Send Slack message to our channel"
);
```

# Create message with structures

Messages use structures. Included structures:

* PlainText
* Payload: default, like PlainText.
* Markdown: message content admits makrdown content.

## Custom structures

Custom structures must implement `StructureSlackMessage`. Into get structure you can include the structure.
The message returned must be a valid JSON.

## Examples

* [Block kit builder](https://app.slack.com/block-kit-builder/T8UEPLMUH#%7B%22blocks%22:%5B%7B%22type%22:%22section%22,%22text%22:%7B%22type%22:%22mrkdwn%22,%22text%22:%22New%20Paid%20Time%20Off%20request%20from%20%3Cexample.com%7CFred%20Enriquez%3E%5Cn%5Cn%3Chttps://example.com%7CView%20request%3E%22%7D%7D%5D%7D)
