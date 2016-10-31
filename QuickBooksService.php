<?php
/**
 * Created by PhpStorm.
 * User: alex1
 * Date: 26.10.16
 * Time: 16:21
 */

namespace qb-php-sdk;


use qb-php-sdk\Core\IntuitServicesType;
use qb-php-sdk\Core\ServiceContext;
use qb-php-sdk\DataService\DataService;
use qb-php-sdk\Security\OAuthRequestValidator;
use yii\helpers\ArrayHelper;

class QuickBooksService
{
    /**
     * @var \qb-php-sdk\DataService\DataService
     */
    protected $dataService;

    public function __construct()
    {
        $this->dataService = $this->resolveDataService();
    }

    private function resolveDataService()
    {
        $serviceType = IntuitServicesType::QBO;
        $realmId     = \Yii::$app->session->get('realmId');

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
        $dataService = new DataService($serviceContext);
        if (!$dataService) {
            throw new \Exception("Problem while initializing DataService.\n");

        }

        return $dataService;
    }

}