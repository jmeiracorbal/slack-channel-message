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