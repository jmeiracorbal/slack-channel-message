# SlackChannelMessage

* create a [Slack app](https://api.slack.com/apps)
* if you app is created, clic on your and go to *Add features and functionality*
* click on *Incoming Webhooks* and activate the webhook
* copy the webhook URL

# Send a Slack Message

```php
use SlackChannelMessage\Message;

require_once './vendor/autoload.php';

// change https://hooks.slack.com/services/any_token_slack/generated_token/my_token by yours webhook url
define('SLACK_WEBHOOK_URL', 'https://hooks.slack.com/services/any_token_slack/generated_token/my_token');

Message::send(
    SLACK_WEBHOOK_URL, "hola esto es una prueba de un mensaje de Slack"
);

```