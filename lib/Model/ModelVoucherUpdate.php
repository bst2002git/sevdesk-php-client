<?php
/**
 * ModelVoucherUpdate
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Itsmind\Sevdesk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * sevDesk API
 *
 * <b>Contact:</b> To contact our support click <a href='https://landing.sevdesk.de/service-support-center-technik'>here</a><br><br>   # General information  Welcome to our API!<br>  sevDesk offers you the possibility of retrieving data using an interface, namely the sevDesk API, and making changes without having to use the web UI. The sevDesk interface is a REST-Full API. All sevDesk data and functions that are used in the web UI can also be controlled through the API.   # Cross-Origin Resource Sharing  This API features Cross-Origin Resource Sharing (CORS).<br>  It enables cross-domain communication from the browser.<br>  All responses have a wildcard same-origin which makes them completely public and accessible to everyone, including any code on any site.    # Embedding resources  When retrieving resources by using this API, you might encounter nested resources in the resources you requested.<br>  For example, an invoice always contains a contact, of which you can see the ID and the object name.<br>  This API gives you the possibility to embed these resources completely into the resources you originally requested.<br>  Taking our invoice example, this would mean, that you would not only see the ID and object name of a contact, but rather the complete contact resource.    To embed resources, all you need to do is to add the query parameter 'embed' to your GET request.<br>  As values, you can provide the name of the nested resource.<br>  Multiple nested resources are also possible by providing multiple names, separated by a comma.    # Authentication and Authorization  The sevDesk API uses a token authentication to authorize calls. For this purpose every sevDesk administrator has one API token, which is a <b>hexadecimal string</b> containing <b>32 characters</b>. The following clip shows where you can find the API token if this is your first time with our API.<br><br> <video src='OpenAPI/img/findingTheApiToken.mp4' controls width='640' height='360'> Ihr Browser kann dieses Video nicht wiedergeben.<br/> Dieses Video zeigt wie sie Ihr sevDesk API Token finden. </video> <br> The token will be needed in every request that you want to send and needs to be attached to the request url as a <b>Query Parameter</b><br> or provided as a value of an <b>Authorization Header</b>.<br> For security reasons, we suggest putting the API Token in the Authorization Header and not in the query string.<br> However, in the request examples in this documentation, we will keep it in the query string, as it is easier for you to copy them and try them yourself.<br> The following url is an example that shows where your token needs to be placed as a query parameter.<br> In this case, we used some random API token. <ul> <li><span>ht</span>tps://my.sevdesk.de/api/v1/Contact?token=<span style='color:red'>b7794de0085f5cd00560f160f290af38</span></li> </ul> The next example shows the token in the Authorization Header. <ul> <li>\"Authorization\" :<span style='color:red'>\"b7794de0085f5cd00560f160f290af38\"</span></li> </ul> The api tokens have an infinite lifetime and, in other words, exist as long as the sevDesk user exists.<br> For this reason, the user should <b>NEVER</b> be deleted.<br> If really necessary, it is advisable to save the api token as we will <b>NOT</b> be able to retrieve it afterwards!<br> It is also possible to generate a new API token, for example, if you want to prevent the usage of your sevDesk account by other people who got your current API token.<br> To achieve this, you just need to click on the \"generate new\" symbol to the right of your token and confirm it with your password.  # API News  To never miss API news and updates again, subscribe to our <b>free API newsletter</b> and get all relevant information to keep your sevDesk software running smoothly. To subscribe, simply click <a href = 'https://landing.sevdesk.de/api-newsletter'><b>here</b></a> and confirm the email address to which we may send all updates relevant to you.  # API Requests  In our case, REST API requests need to be build by combining the following components. <table> <tr> <th><b>Component</b></th> <th><b>Description</b></th> </tr> <tr> <td>HTTP-Methods</td> <td> <ul> <li>GET (retrieve a resource)</li> <li>POST (create a resource)</li> <li>PUT (update a resource)</li> <li>DELETE (delete a resource)</li> </ul> </td> </tr> <tr> <td>URL of the API</td> <td><span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span></td> </tr> <tr> <td>URI of the resource</td> <td>The resource to query.<br>For example contacts in sevDesk:<br><br> <span style='color:red'>/Contact</span><br><br> Which will result in the following complete URL:<br><br> <span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span><span style='color:red'>/Contact</span> </td> </tr> <tr> <td>Query parameters</td> <td>Are attached by using the connectives <b>?</b> and <b>&</b> in the URL.<br></td> </tr> <tr> <td>Request headers</td> <td>Typical request headers are for example:<br> <div> <br> <ul> <li>Content-type</li> <li>Authorization</li> <li>Accept-Encoding</li> <li>User-Agent</li> <li>...</li> </ul> </div> </td> </tr> <tr> <td>Request body</td> <td>Mostly required in POST and PUT requests.<br> Often the request body contains json, in our case, it also accepts url-encoded data. </td> </tr> </table><br> <span style='color:red'>Note</span>: please pass a meaningful entry at the header \"User-Agent\". If the \"User-Agent\" is set meaningfully, we can offer better support in case of queries from customers.<br> An example how such a \"User-Agent\" can look like: \"Integration-name by abc\". <br><br> This is a sample request for retrieving existing contacts in sevDesk using curl:<br><br> <img src='OpenAPI/img/GETRequest.PNG' alt='Get Request' height='150'><br><br> As you can see, the request contains all the components mentioned above.<br> It's HTTP method is GET, it has a correct endpoint (<span style='color: #2aa198'>ht</span><span style='color: #2aa198'>tps://my.sevdesk.de/api/v1</span><span style='color:red'>/Contact</span>), query parameters like <b>token</b> and additional <b>header</b> information!<br><br> <b>Query Parameters</b><br><br> As you might have seen in the sample request above, there are several other parameters besides \"token\", located in the url.<br> Those are mostly optional but prove to be very useful for a lot of requests as they can limit, extend, sort or filter the data you will get as a response.<br><br> These are the three most used query parameter for the sevDesk API. <table> <tr> <th><b>Parameter</b></th> <th><b>Description</b></th> </tr> <tr> <td>limit</td> <td>Limits the number of entries that are returned.<br> Most useful in GET requests which will most likely deliver big sets of data like country or currency lists.<br> In this case, you can bypass the default limitation on returned entries by providing a high number. </td> </tr> <tr> <td>offset</td> <td>Specifies a certain offset for the data that will be returned.<br> As an example, you can specify \"offset=2\" if you want all entries except for the first two.</td> </tr> <tr> <td>embed</td> <td>Will extend some of the returned data.<br> A brief example can be found below.</td> </tr> </table> This is an example for the usage of the embed parameter.<br> The following first request will return all company contact entries in sevDesk up to a limit of 100 without any additional information and no offset.<br><br> <img src='OpenAPI/img/ContactQueryWithoutEmbed.PNG' width='900' height='850'><br><br> Now have a look at the category attribute located in the response.<br> Naturally, it just contains the id and the object name of the object but no further information.<br> We will now use the parameter embed with the value \"category\".<br><br> <img src='OpenAPI/img/ContactQueryWithEmbed.PNG' width='900' height='850'><br><br> As you can see, the category object is now extended and shows all the attributes and their corresponding values.<br><br> There are lot of other query parameters that can be used to filter the returned data for objects that match a certain pattern, however, those will not be mentioned here and instead can be found at the detail documentation of the most used API endpoints like contact, invoice or voucher.<br><br> <b>Request Headers</b><br><br> The HTTP request (response) headers allow the client as well as the server to pass additional information with the request.<br> They transfer the parameters and arguments which are important for transmitting data over HTTP.<br> Three headers which are useful / necessary when using the sevDesk API are \"Authorization, \"Accept\" and \"Content-type\".<br> Underneath is a brief description of why and how they should be used.<br><br> <b>Authorization</b><br><br> Can be used if you want to provide your API token in the header instead of having it in the url. <ul> <li>Authorization:<span style='color:red'>yourApiToken</span></li> </ul> <b>Accept</b><br><br> Specifies the format of the response.<br> Required for operations with a response body. <ul> <li>Accept:application/<span style='color:red'>format</span> </li> </ul> In our case, <code><span style='color:red'>format</span></code> could be replaced with <code>json</code> or <code>xml</code><br><br> <b>Content-type</b><br><br> Specifies which format is used in the request.<br> Is required for operations with a request body. <ul> <li>Content-type:application/<span style='color:red'>format</span></li> </ul> In our case,<code><span style='color:red'>format</span></code>could be replaced with <code>json</code> or <code>x-www-form-urlencoded</code> <br><br><b>API Responses</b><br><br> HTTP status codes<br> When calling the sevDesk API it is very likely that you will get a HTTP status code in the response.<br> Some API calls will also return JSON response bodies which will contain information about the resource.<br> Each status code which is returned will either be a <b>success</b> code or an <b>error</b> code.<br><br> Success codes <table> <tr> <th><b>Status code</b></th> <th><b>Description</b></th> </tr> <tr> <td><code>200 OK</code></td> <td>The request was successful</td> </tr> <tr> <td><code>201 Created</code></td> <td>Most likely to be found in the response of a <b>POST</b> request.<br> This code indicates that the desired resource was successfully created.</td> </tr> </table> <br>Error codes <table> <tr> <th><b>Status code</b></th> <th><b>Description</b></th> </tr> <tr> <td><code>400 Bad request</code></td> <td>The request you sent is most likely syntactically incorrect.<br> You should check if the parameters in the request body or the url are correct.</td> </tr> <tr> <td><code>401 Unauthorized</code></td> <td>The authentication failed.<br> Most likely caused by a missing or wrong API token.</td> </tr> <tr> <td><code>403 Forbidden</code></td> <td>You do not have the permission the access the resource which is requested.</td> </tr> <tr> <td><code>404 Not found</code></td> <td>The resource you specified does not exist.</td> </tr> <tr> <td><code>500 Internal server error</code></td> <td>An internal server error has occurred.<br> Normally this means that something went wrong on our side.<br> However, sometimes this error will appear if we missed to catch an error which is normally a 400 status code! </td> </tr> </table>  # Your First Request  After reading the introduction to our API, you should now be able to make your first call.<br> For testing our API, we would always recommend to create a trial account for sevDesk to prevent unwanted changes to your main account.<br> A trial account will be in the highest tariff (materials management), so every sevDesk function can be tested! <br><br>To start testing we would recommend one of the following tools: <ul> <li><a href='https://www.getpostman.com/'>Postman</a></li> <li><a href='https://curl.haxx.se/download.html'>cURL</a></li> </ul> This example will illustrate your first request, which is creating a new Contact in sevDesk.<br> <ol> <li>Download <a href='https://www.getpostman.com/'><b>Postman</b></a> for your desired system and start the application</li> <li>Enter <span><b>ht</span>tps://my.sevdesk.de/api/v1/Contact</b> as the url</li> <li>Use the connective <b>?</b> to append <b>token=</b> to the end of the url, or create an authorization header. Insert your API token as the value</li> <li>For this test, select <b>POST</b> as the HTTP method</li> <li>Go to <b>Headers</b> and enter the key-value pair <b>Content-type</b> + <b>application/x-www-form-urlencoded</b><br> As an alternative, you can just go to <b>Body</b> and select <b>x-www-form-urlencoded</b></li> <li>Now go to <b>Body</b> (if you are not there yet) and enter the key-value pairs as shown in the following picture<br><br> <img src='OpenAPI/img/FirstRequestPostman.PNG' width='900'><br><br></li> <li>Click on <b>Send</b>. Your response should now look like this:<br><br> <img src='OpenAPI/img/FirstRequestResponse.PNG' width='900'></li> </ol> As you can see, a successful response in this case returns a JSON-formatted response body containing the contact you just created.<br> For keeping it simple, this was only a minimal example of creating a contact.<br> There are however numerous combinations of parameters that you can provide which add information to your contact.
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Itsmind\Sevdesk\Model;

use \ArrayAccess;
use \Itsmind\Sevdesk\ObjectSerializer;

/**
 * ModelVoucherUpdate Class Doc Comment
 *
 * @category Class
 * @description Voucher model
 * @package  Itsmind\Sevdesk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ModelVoucherUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Model_VoucherUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'voucher_date' => '\DateTime',
        'supplier' => '\Itsmind\Sevdesk\Model\ModelVoucherUpdateSupplier',
        'supplier_name' => 'string',
        'description' => 'string',
        'pay_date' => '\DateTime',
        'status' => 'float',
        'paid_amount' => 'float',
        'tax_type' => 'string',
        'credit_debit' => 'string',
        'voucher_type' => 'string',
        'currency' => 'string',
        'property_foreign_currency_deadline' => '\DateTime',
        'property_exchange_rate' => 'float',
        'tax_set' => '\Itsmind\Sevdesk\Model\ModelVoucherUpdateTaxSet',
        'payment_deadline' => '\DateTime',
        'delivery_date' => '\DateTime',
        'delivery_date_until' => '\DateTime',
        'document' => '\Itsmind\Sevdesk\Model\ModelVoucherUpdateDocument',
        'cost_centre' => '\Itsmind\Sevdesk\Model\ModelVoucherUpdateCostCentre'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'voucher_date' => 'date-time',
        'supplier' => null,
        'supplier_name' => null,
        'description' => null,
        'pay_date' => 'date-time',
        'status' => null,
        'paid_amount' => 'float',
        'tax_type' => null,
        'credit_debit' => null,
        'voucher_type' => null,
        'currency' => null,
        'property_foreign_currency_deadline' => 'date-time',
        'property_exchange_rate' => 'float',
        'tax_set' => null,
        'payment_deadline' => 'date-time',
        'delivery_date' => 'date-time',
        'delivery_date_until' => 'date-time',
        'document' => null,
        'cost_centre' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'voucher_date' => true,
		'supplier' => true,
		'supplier_name' => true,
		'description' => true,
		'pay_date' => true,
		'status' => false,
		'paid_amount' => true,
		'tax_type' => false,
		'credit_debit' => false,
		'voucher_type' => false,
		'currency' => true,
		'property_foreign_currency_deadline' => true,
		'property_exchange_rate' => true,
		'tax_set' => true,
		'payment_deadline' => true,
		'delivery_date' => false,
		'delivery_date_until' => true,
		'document' => true,
		'cost_centre' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'voucher_date' => 'voucherDate',
        'supplier' => 'supplier',
        'supplier_name' => 'supplierName',
        'description' => 'description',
        'pay_date' => 'payDate',
        'status' => 'status',
        'paid_amount' => 'paidAmount',
        'tax_type' => 'taxType',
        'credit_debit' => 'creditDebit',
        'voucher_type' => 'voucherType',
        'currency' => 'currency',
        'property_foreign_currency_deadline' => 'propertyForeignCurrencyDeadline',
        'property_exchange_rate' => 'propertyExchangeRate',
        'tax_set' => 'taxSet',
        'payment_deadline' => 'paymentDeadline',
        'delivery_date' => 'deliveryDate',
        'delivery_date_until' => 'deliveryDateUntil',
        'document' => 'document',
        'cost_centre' => 'costCentre'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'voucher_date' => 'setVoucherDate',
        'supplier' => 'setSupplier',
        'supplier_name' => 'setSupplierName',
        'description' => 'setDescription',
        'pay_date' => 'setPayDate',
        'status' => 'setStatus',
        'paid_amount' => 'setPaidAmount',
        'tax_type' => 'setTaxType',
        'credit_debit' => 'setCreditDebit',
        'voucher_type' => 'setVoucherType',
        'currency' => 'setCurrency',
        'property_foreign_currency_deadline' => 'setPropertyForeignCurrencyDeadline',
        'property_exchange_rate' => 'setPropertyExchangeRate',
        'tax_set' => 'setTaxSet',
        'payment_deadline' => 'setPaymentDeadline',
        'delivery_date' => 'setDeliveryDate',
        'delivery_date_until' => 'setDeliveryDateUntil',
        'document' => 'setDocument',
        'cost_centre' => 'setCostCentre'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'voucher_date' => 'getVoucherDate',
        'supplier' => 'getSupplier',
        'supplier_name' => 'getSupplierName',
        'description' => 'getDescription',
        'pay_date' => 'getPayDate',
        'status' => 'getStatus',
        'paid_amount' => 'getPaidAmount',
        'tax_type' => 'getTaxType',
        'credit_debit' => 'getCreditDebit',
        'voucher_type' => 'getVoucherType',
        'currency' => 'getCurrency',
        'property_foreign_currency_deadline' => 'getPropertyForeignCurrencyDeadline',
        'property_exchange_rate' => 'getPropertyExchangeRate',
        'tax_set' => 'getTaxSet',
        'payment_deadline' => 'getPaymentDeadline',
        'delivery_date' => 'getDeliveryDate',
        'delivery_date_until' => 'getDeliveryDateUntil',
        'document' => 'getDocument',
        'cost_centre' => 'getCostCentre'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const STATUS_50 = 50;
    public const STATUS_100 = 100;
    public const STATUS_1000 = 1000;
    public const CREDIT_DEBIT_C = 'C';
    public const CREDIT_DEBIT_D = 'D';
    public const VOUCHER_TYPE_VOU = 'VOU';
    public const VOUCHER_TYPE_RV = 'RV';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_50,
            self::STATUS_100,
            self::STATUS_1000,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCreditDebitAllowableValues()
    {
        return [
            self::CREDIT_DEBIT_C,
            self::CREDIT_DEBIT_D,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVoucherTypeAllowableValues()
    {
        return [
            self::VOUCHER_TYPE_VOU,
            self::VOUCHER_TYPE_RV,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('voucher_date', $data ?? [], null);
        $this->setIfExists('supplier', $data ?? [], null);
        $this->setIfExists('supplier_name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('pay_date', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('paid_amount', $data ?? [], null);
        $this->setIfExists('tax_type', $data ?? [], null);
        $this->setIfExists('credit_debit', $data ?? [], null);
        $this->setIfExists('voucher_type', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('property_foreign_currency_deadline', $data ?? [], null);
        $this->setIfExists('property_exchange_rate', $data ?? [], null);
        $this->setIfExists('tax_set', $data ?? [], null);
        $this->setIfExists('payment_deadline', $data ?? [], null);
        $this->setIfExists('delivery_date', $data ?? [], null);
        $this->setIfExists('delivery_date_until', $data ?? [], null);
        $this->setIfExists('document', $data ?? [], null);
        $this->setIfExists('cost_centre', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCreditDebitAllowableValues();
        if (!is_null($this->container['credit_debit']) && !in_array($this->container['credit_debit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'credit_debit', must be one of '%s'",
                $this->container['credit_debit'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getVoucherTypeAllowableValues();
        if (!is_null($this->container['voucher_type']) && !in_array($this->container['voucher_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'voucher_type', must be one of '%s'",
                $this->container['voucher_type'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets voucher_date
     *
     * @return \DateTime|null
     */
    public function getVoucherDate()
    {
        return $this->container['voucher_date'];
    }

    /**
     * Sets voucher_date
     *
     * @param \DateTime|null $voucher_date Needs to be provided as timestamp or dd.mm.yyyy
     *
     * @return self
     */
    public function setVoucherDate($voucher_date)
    {
        if (is_null($voucher_date)) {
            array_push($this->openAPINullablesSetToNull, 'voucher_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('voucher_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['voucher_date'] = $voucher_date;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return \Itsmind\Sevdesk\Model\ModelVoucherUpdateSupplier|null
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param \Itsmind\Sevdesk\Model\ModelVoucherUpdateSupplier|null $supplier supplier
     *
     * @return self
     */
    public function setSupplier($supplier)
    {
        if (is_null($supplier)) {
            array_push($this->openAPINullablesSetToNull, 'supplier');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('supplier', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets supplier_name
     *
     * @return string|null
     */
    public function getSupplierName()
    {
        return $this->container['supplier_name'];
    }

    /**
     * Sets supplier_name
     *
     * @param string|null $supplier_name The supplier name.<br>       The value you provide here will determine what supplier name is shown for the voucher in case you did not provide a supplier.
     *
     * @return self
     */
    public function setSupplierName($supplier_name)
    {
        if (is_null($supplier_name)) {
            array_push($this->openAPINullablesSetToNull, 'supplier_name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('supplier_name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['supplier_name'] = $supplier_name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description of the voucher. Essentially the voucher number.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets pay_date
     *
     * @return \DateTime|null
     */
    public function getPayDate()
    {
        return $this->container['pay_date'];
    }

    /**
     * Sets pay_date
     *
     * @param \DateTime|null $pay_date Needs to be timestamp or dd.mm.yyyy
     *
     * @return self
     */
    public function setPayDate($pay_date)
    {
        if (is_null($pay_date)) {
            array_push($this->openAPINullablesSetToNull, 'pay_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('pay_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['pay_date'] = $pay_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return float|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param float|null $status Please have a look in       <a href='https://api.sevdesk.de/#section/Types-and-status-of-vouchers'>status of vouchers</a>      to see what the different status codes mean
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets paid_amount
     *
     * @return float|null
     */
    public function getPaidAmount()
    {
        return $this->container['paid_amount'];
    }

    /**
     * Sets paid_amount
     *
     * @param float|null $paid_amount Amount which has already been paid for this voucher by the customer
     *
     * @return self
     */
    public function setPaidAmount($paid_amount)
    {
        if (is_null($paid_amount)) {
            array_push($this->openAPINullablesSetToNull, 'paid_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('paid_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['paid_amount'] = $paid_amount;

        return $this;
    }

    /**
     * Gets tax_type
     *
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type
     *
     * @param string|null $tax_type Tax type of the voucher. There are four tax types: 1. default - Umsatzsteuer ausweisen 2. eu - Steuerfreie innergemeinschaftliche Lieferung (Europäische Union) 3. noteu - Steuerschuldnerschaft des Leistungsempfängers (außerhalb EU, z. B. Schweiz) 4. custom - Using custom tax set 5. ss - Not subject to VAT according to §19 1 UStG Tax rates are heavily connected to the tax type used.
     *
     * @return self
     */
    public function setTaxType($tax_type)
    {
        if (is_null($tax_type)) {
            throw new \InvalidArgumentException('non-nullable tax_type cannot be null');
        }
        $this->container['tax_type'] = $tax_type;

        return $this;
    }

    /**
     * Gets credit_debit
     *
     * @return string|null
     */
    public function getCreditDebit()
    {
        return $this->container['credit_debit'];
    }

    /**
     * Sets credit_debit
     *
     * @param string|null $credit_debit Defines if your voucher is a credit (C) or debit (D)
     *
     * @return self
     */
    public function setCreditDebit($credit_debit)
    {
        if (is_null($credit_debit)) {
            throw new \InvalidArgumentException('non-nullable credit_debit cannot be null');
        }
        $allowedValues = $this->getCreditDebitAllowableValues();
        if (!in_array($credit_debit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'credit_debit', must be one of '%s'",
                    $credit_debit,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['credit_debit'] = $credit_debit;

        return $this;
    }

    /**
     * Gets voucher_type
     *
     * @return string|null
     */
    public function getVoucherType()
    {
        return $this->container['voucher_type'];
    }

    /**
     * Sets voucher_type
     *
     * @param string|null $voucher_type Type of the voucher. For more information on the different types, check       <a href='https://api.sevdesk.de/#section/Types-and-status-of-vouchers'>this</a>
     *
     * @return self
     */
    public function setVoucherType($voucher_type)
    {
        if (is_null($voucher_type)) {
            throw new \InvalidArgumentException('non-nullable voucher_type cannot be null');
        }
        $allowedValues = $this->getVoucherTypeAllowableValues();
        if (!in_array($voucher_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'voucher_type', must be one of '%s'",
                    $voucher_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['voucher_type'] = $voucher_type;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency specifies which currency the voucher should have. Attention: If the currency differs from the default currency stored in the account, then either the \"propertyForeignCurrencyDeadline\" or \"propertyExchangeRate\" parameter must be specified. If both parameters are specified, then the \"propertyForeignCurrencyDeadline\" parameter is preferred
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            array_push($this->openAPINullablesSetToNull, 'currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets property_foreign_currency_deadline
     *
     * @return \DateTime|null
     */
    public function getPropertyForeignCurrencyDeadline()
    {
        return $this->container['property_foreign_currency_deadline'];
    }

    /**
     * Sets property_foreign_currency_deadline
     *
     * @param \DateTime|null $property_foreign_currency_deadline Defines the exchange rate day and and then the exchange rate is set from sevDesk. Needs to be provided as timestamp or dd.mm.yyyy
     *
     * @return self
     */
    public function setPropertyForeignCurrencyDeadline($property_foreign_currency_deadline)
    {
        if (is_null($property_foreign_currency_deadline)) {
            array_push($this->openAPINullablesSetToNull, 'property_foreign_currency_deadline');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('property_foreign_currency_deadline', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['property_foreign_currency_deadline'] = $property_foreign_currency_deadline;

        return $this;
    }

    /**
     * Gets property_exchange_rate
     *
     * @return float|null
     */
    public function getPropertyExchangeRate()
    {
        return $this->container['property_exchange_rate'];
    }

    /**
     * Sets property_exchange_rate
     *
     * @param float|null $property_exchange_rate Defines the exchange rate
     *
     * @return self
     */
    public function setPropertyExchangeRate($property_exchange_rate)
    {
        if (is_null($property_exchange_rate)) {
            array_push($this->openAPINullablesSetToNull, 'property_exchange_rate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('property_exchange_rate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['property_exchange_rate'] = $property_exchange_rate;

        return $this;
    }

    /**
     * Gets tax_set
     *
     * @return \Itsmind\Sevdesk\Model\ModelVoucherUpdateTaxSet|null
     */
    public function getTaxSet()
    {
        return $this->container['tax_set'];
    }

    /**
     * Sets tax_set
     *
     * @param \Itsmind\Sevdesk\Model\ModelVoucherUpdateTaxSet|null $tax_set tax_set
     *
     * @return self
     */
    public function setTaxSet($tax_set)
    {
        if (is_null($tax_set)) {
            array_push($this->openAPINullablesSetToNull, 'tax_set');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tax_set', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tax_set'] = $tax_set;

        return $this;
    }

    /**
     * Gets payment_deadline
     *
     * @return \DateTime|null
     */
    public function getPaymentDeadline()
    {
        return $this->container['payment_deadline'];
    }

    /**
     * Sets payment_deadline
     *
     * @param \DateTime|null $payment_deadline Payment deadline of the voucher.
     *
     * @return self
     */
    public function setPaymentDeadline($payment_deadline)
    {
        if (is_null($payment_deadline)) {
            array_push($this->openAPINullablesSetToNull, 'payment_deadline');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_deadline', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_deadline'] = $payment_deadline;

        return $this;
    }

    /**
     * Gets delivery_date
     *
     * @return \DateTime|null
     */
    public function getDeliveryDate()
    {
        return $this->container['delivery_date'];
    }

    /**
     * Sets delivery_date
     *
     * @param \DateTime|null $delivery_date Needs to be provided as timestamp or dd.mm.yyyy
     *
     * @return self
     */
    public function setDeliveryDate($delivery_date)
    {
        if (is_null($delivery_date)) {
            throw new \InvalidArgumentException('non-nullable delivery_date cannot be null');
        }
        $this->container['delivery_date'] = $delivery_date;

        return $this;
    }

    /**
     * Gets delivery_date_until
     *
     * @return \DateTime|null
     */
    public function getDeliveryDateUntil()
    {
        return $this->container['delivery_date_until'];
    }

    /**
     * Sets delivery_date_until
     *
     * @param \DateTime|null $delivery_date_until Needs to be provided as timestamp or dd.mm.yyyy
     *
     * @return self
     */
    public function setDeliveryDateUntil($delivery_date_until)
    {
        if (is_null($delivery_date_until)) {
            array_push($this->openAPINullablesSetToNull, 'delivery_date_until');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('delivery_date_until', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['delivery_date_until'] = $delivery_date_until;

        return $this;
    }

    /**
     * Gets document
     *
     * @return \Itsmind\Sevdesk\Model\ModelVoucherUpdateDocument|null
     */
    public function getDocument()
    {
        return $this->container['document'];
    }

    /**
     * Sets document
     *
     * @param \Itsmind\Sevdesk\Model\ModelVoucherUpdateDocument|null $document document
     *
     * @return self
     */
    public function setDocument($document)
    {
        if (is_null($document)) {
            array_push($this->openAPINullablesSetToNull, 'document');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('document', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['document'] = $document;

        return $this;
    }

    /**
     * Gets cost_centre
     *
     * @return \Itsmind\Sevdesk\Model\ModelVoucherUpdateCostCentre|null
     */
    public function getCostCentre()
    {
        return $this->container['cost_centre'];
    }

    /**
     * Sets cost_centre
     *
     * @param \Itsmind\Sevdesk\Model\ModelVoucherUpdateCostCentre|null $cost_centre cost_centre
     *
     * @return self
     */
    public function setCostCentre($cost_centre)
    {
        if (is_null($cost_centre)) {
            throw new \InvalidArgumentException('non-nullable cost_centre cannot be null');
        }
        $this->container['cost_centre'] = $cost_centre;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


