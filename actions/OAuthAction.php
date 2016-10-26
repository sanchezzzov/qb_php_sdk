<?php
/**
 * Created by PhpStorm.
 * User: alex1
 * Date: 26.10.16
 * Time: 16:39
 */

namespace qb_php_sdk\actions;


use yii\base\Action;

class OAuthAction extends Action
{
    public $oauthView = 'oauth';

    public function run()
    {
        try {
            $oauth   = new \OAuth(OAUTH_CONSUMER_KEY, OAUTH_CONSUMER_SECRET, OAUTH_SIG_METHOD_HMACSHA1,
                OAUTH_AUTH_TYPE_URI);
            $session = \Yii::$app->session;
            $request = \Yii::$app->request;
            $oauth->enableDebug();
            $oauth->disableSSLChecks(); //To avoid the error: (Peer certificate cannot be authenticated with given CA certificates)
            if (!$request->get('oauth_token') && !$session->get('token')) {
                // step 1: get request token from Intuit
                $requestToken = $oauth->getRequestToken(OAUTH_REQUEST_URL, CALLBACK_URL);
                $session->set('secret', $requestToken['oauth_token_secret']);

                // step 2: send user to intuit to authorize
                return $this->controller->redirect(OAUTH_AUTHORISE_URL . '?oauth_token=' .
                    $requestToken['oauth_token']);
            }

            if ($request->get('oauth_token') && $request->get('oauth_verifier')) {
                // step 3: request a access token from Intuit
                $oauth->setToken($request->get('oauth_token'), $session->get('secret'));
                $accessToken = $oauth->getAccessToken(OAUTH_ACCESS_URL);
                $session->set('token', serialize($accessToken));
                $session->set('realmId', $request->get('realmId'));
                $session->set('dataSource', $request->get('dataSource'));
            }

        } catch (\OAuthException $e) {
            \Yii::error($e->getMessage());
        }

        return $this->controller->render($this->oauthView);
    }
}