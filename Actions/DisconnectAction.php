<?php
/**
 * Created by PhpStorm.
 * User: alex1
 * Date: 27.10.16
 * Time: 10:36
 */

namespace qb-php-sdk\Actions;


use qb-php-sdk\Core\IntuitServicesType;
use qb-php-sdk\Core\ServiceContext;
use qb-php-sdk\PlatformService\PlatformService;
use qb-php-sdk\Security\OAuthRequestValidator;
use yii\base\Action;
use yii\helpers\ArrayHelper;

class DisconnectAction extends Action
{
    public $redirectUrl = ['index'];

    public function run()
    {
        $serviceType = IntuitServicesType::QBO;
        $realmId = \Yii::$app->session->get('realmId');
        if (!$realmId) {
            throw new \Exception("RealmID is not set");
        }
        $token            = unserialize(\Yii::$app->session->get('token'));
        $requestValidator = new OAuthRequestValidator(ArrayHelper::getValue($token, 'oauth_token'),
            ArrayHelper::getValue($token, 'oauth_token_secret'), OAUTH_CONSUMER_KEY, OAUTH_CONSUMER_SECRET);
        $serviceContext   = new ServiceContext($realmId, $serviceType, $requestValidator);
        if (!$serviceContext) {
            throw new \Exception("Problem while initializing ServiceContext.\n");
        }
        $platformService = new PlatformService($serviceContext);
        $platformService->Disconnect();
        \Yii::$app->session->remove('token');
        \Yii::$app->session->remove('realmId');
        \Yii::$app->session->remove('secret');

        return $this->controller->redirect($this->redirectUrl);
    }
}