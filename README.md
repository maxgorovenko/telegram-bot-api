MGTelegramBotApiBundle
===================

A wrapper bundle for [Telegram Bot API](https://core.telegram.org/bots/api) compatible with Symfony framework.
Uses JMS\Serializer for serialization and deserialization objects.

## Install

Via Composer

``` bash
$ composer require maxgorovenko/telegram-bot-api-bundle @dev
```
#### For Symfony you have to upgrade your AppKernel and config:

```php
# app/AppKernel.php
class AppKernel extends Kernel
{

    public function registerBundles()
    {
        $bundles = array(
            // ...
            // register the bundle here
            new \MG\TelegramBotApiBundle\MGTelegramBotApiBundle()
        );
    }
}
```

```yaml
# app/config/config.yml

shaygan_telegram_bot_api:
    token: xxxxx:yyyyyyyyyyyyyyyyyyyy
```

## Usage

#### Simple

Look in JMS Serializer creating [manual](http://jmsyst.com/libs/serializer).

```php
$botToken = '11111:2222222';
$serializer = JMS\Serializer\SerializerBuilder::create()->build();
$api = new MG\TelegramBotApiBundle\Service\Api($botToken, $serializer);
$updates = $api->getUpdates();
```

#### With symfony

```php
$api = $container->get('mg.telegram_bot_api');
$updates = $api->getUpdates();
```