# qb_php_sdk

IDG PHP SDK for QuickBooks V3

Version: 2.4.1

Requirements:  PHP 5.3 or greater

Dependencies:  PECL OAuth (http://pecl.php.net/package/oauth)



PHP SDK for QuickBooks REST API v3.0


BEFORE YOU GET STARTED
----------------------

In order to successfully use the SDK, you'll need to have:

* An app (even if pre-production) on developer.intuit.com.  See https://developer.intuit.com/Application/Create
* A QuickBooks Online or QuickBooks Desktop company file, and know it's RealmId.  See https://developer.intuit.com/.


FOLDER STRUCTURE
----------------

Package structure:

* _PhpDocs: generated docs (via phpdocumentor)
* _Samples: A variety of isolated samples that demonstrate the use of the SDK for various operations including creating an entity, running a query, deleting entities, etc.
* Core: supporting classes required by SDK
* DataService: Data Services, Service Context, Platform Services, and related functionality.
* Data: POPO classes that mimic the XSD object model for IPP v3 entities.  Auto-generated via build script, based on XSDs.
* Diagnostics: classes that responsible for logging
* Exception: custom exception types which handles most aspect of interaction with API
* PlatformService: Intuit Platform services class
* QueryFilter: contains class which helps construct complex queries (check _Samples/QueryBuilder.php)
* Security: oAuth validation
* Utility: classes that performs technical tasks such us serialization and compression
* XSD2PHP: 3th party library

* Actions - auth and disconnect actions
* CRUD - create, read, update and delete entity


INITIALIZATION
----------------

1. Modify composer.json
{
    "require": {
        "qb_php_sdk": "master-dev"
    },
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/sanchezzzov/qb_php_sdk.git"
        }
    ]
}

Then use command: composer update "qb_php_sdk"

2. Set global constants (get OAUTH_CONSUMER_KEY and OAUTH_CONSUMER_SECRET  from app on developer.intuit.com)
* `define('OAUTH_REQUEST_URL', 'https://oauth.intuit.com/oauth/v1/get_request_token');`
* `define('OAUTH_ACCESS_URL', 'https://oauth.intuit.com/oauth/v1/get_access_token');`
* `define('OAUTH_AUTHORISE_URL', 'https://appcenter.intuit.com/Connect/Begin');`
* `define('OAUTH_CONSUMER_KEY', ''); //to get from app settings`
* `define('OAUTH_CONSUMER_SECRET', ''); //to get from app settings`
* `define('CALLBACK_URL', ''); // example 'http://' . $_SERVER['HTTP_HOST'] . '/quickbooks/quickbooks/oauth/'`

3. In Yii config file setting alias for SDK folder.
For example:
    `'aliases' => [
        '@qb_php_sdk' => '@vendor/qb_php_sdk',
    ],`


USAGE
----------------
1. Add the Connect to QuickBooks button
The user initiates the authorization flow to a QuickBooks Online company by clicking the Connect to QuickBooks button you provide in your app.
Include the JavaScript library
    `<script src="https://js.appcenter.intuit.com/Content/IA/intuit.ipp.anywhere-1.3.3.js" type="text/javascript"></script>
    <script type="text/javascript">
        intuit.ipp.anywhere.setup({
                grantUrl: 'http://www.mycompany.com/HelloWorld/RequestTokenServlet',
                datasources: {
                     quickbooks : true,
                     payments : false
               }
        });
    </script>`

Description:
1) Function	intuit.ipp.anywhere.setup(​)
2) Parameters
* grantUrl—The URL of the code on your site that begins the user authorization flow by getting an OAuth request token.
  The flow is initiated when the user clicks the Connect to QuickBooks button.  This URL points to the Request Token Code.  Make sure this matches the value of the Host Name Domain field in your app's setting page on its Development tab.  To see the app's settings, select the app from My Apps
* datasources—The datasources you are accessing from your app.
* quickbooks—Enable access to QuickBooks Online company. If not specified, default is true.
* payments—​Enable access to QuickBooks payment data. If not specified, default is false
​* paymentOptions—Payment options if datasources. Payments is set to true.
* intuitReferred—Indicates whether merchant being sent through the connect to QuickBooks flow is referred by Intuit or
 not. If not specified, default is true: referred by Intuit.


EXAMPLES
-----------------

See json format here qb_php_sdk/CRUD/json/

Example, how add purchase order from $json
    `$purchaseOrder = new PurchaseOrder();
    $purchaseOrder->create($json);`

Get vendor list:
    `$vendor = new Vendor();
    $vendorList = $vendor->findAll();`
