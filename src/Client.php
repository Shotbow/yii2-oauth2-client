<?php
namespace Shotbow\Auth;

use Yii;
use yii\authclient\OAuth2;

class Client extends OAuth2
{
    /** @inheritdoc */
    public $authUrl = 'https://shotbow.net/forum/oauth2';
    /** @inheritdoc */
    public $tokenUrl = 'https://shotbow.net/forum/oauth2/access_token';
    /** @inheritdoc */
    public $apiBaseUrl = 'https://shotbow.net/forum/oauth2';

    /**
     * @return User
     * @throws \yii\base\Exception
     */
    protected function initUserAttributes()
    {
        return new User($this->api('me'));
    }

    /**
     * @inheritdoc
     */
    public function buildAuthUrl(array $params = [])
    {
        return parent::buildAuthUrl(array_merge(['state' => 'ignored'], $params));
    }

    /**
     * @inheritdoc
     */
    public function getReturnUrl()
    {
        return Yii::$app->urlManager->createAbsoluteUrl(['site/auth', 'authclient' => 'shotbow']);
    }
}
