# Yii2 AuthClient for The Shotbow Network

This project creates an OAuth 2 client for Yii2's AuthClient system.  It will be kept up to date with Shotbow's OAuth2
requirements.

## Requirements

* PHP 5.4 or greater
* Yii 2
* Composer

## How to use

* `composer require shotbow/yii2-oauth2-client`
* Add the following to your Yii2 `components` configuration:
```
    'authClientCollection' => [
        'class' => yii\authclient\Collection::class,
        'clients' => [
            'shotbow' => [
                'class' => Shotbow\Auth\Client::class,
                'clientId' => 'SHOTBOW CLIENT ID',
                'clientSecret' => 'SHOTBOW CLIENT SECRET',
                'scope' => 'SHOTBOW REQUESTED SCOPES',
            ],
        ],
    ],
```
* In the controller you wish to add this to, [add the AuthAction as described in the Yii2 Guide](http://www.yiiframework.com/doc-2.0/yii-authclient-authaction.html)

That's it!  The rest is up to you, the developer!
