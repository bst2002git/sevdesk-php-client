<?php
/**
 * ReportApi
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

namespace Itsmind\Sevdesk\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Itsmind\Sevdesk\ApiException;
use Itsmind\Sevdesk\Configuration;
use Itsmind\Sevdesk\HeaderSelector;
use Itsmind\Sevdesk\ObjectSerializer;

/**
 * ReportApi Class Doc Comment
 *
 * @category Class
 * @package  Itsmind\Sevdesk
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'reportContact' => [
            'application/json',
        ],
        'reportInvoice' => [
            'application/json',
        ],
        'reportOrder' => [
            'application/json',
        ],
        'reportVoucher' => [
            'application/json',
        ],
    ];

/**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation reportContact
     *
     * Export contact list
     *
     * @param  ReportContactSevQueryParameter $sev_query sev_query (required)
     * @param  bool $download download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportContact'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function reportContact($sev_query, $download = null, string $contentType = self::contentTypes['reportContact'][0])
    {
        list($response) = $this->reportContactWithHttpInfo($sev_query, $download, $contentType);
        return $response;
    }

    /**
     * Operation reportContactWithHttpInfo
     *
     * Export contact list
     *
     * @param  ReportContactSevQueryParameter $sev_query (required)
     * @param  bool $download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportContact'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportContactWithHttpInfo($sev_query, $download = null, string $contentType = self::contentTypes['reportContact'][0])
    {
        $request = $this->reportContactRequest($sev_query, $download, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('object' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation reportContactAsync
     *
     * Export contact list
     *
     * @param  ReportContactSevQueryParameter $sev_query (required)
     * @param  bool $download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportContact'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportContactAsync($sev_query, $download = null, string $contentType = self::contentTypes['reportContact'][0])
    {
        return $this->reportContactAsyncWithHttpInfo($sev_query, $download, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reportContactAsyncWithHttpInfo
     *
     * Export contact list
     *
     * @param  ReportContactSevQueryParameter $sev_query (required)
     * @param  bool $download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportContact'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportContactAsyncWithHttpInfo($sev_query, $download = null, string $contentType = self::contentTypes['reportContact'][0])
    {
        $returnType = 'object';
        $request = $this->reportContactRequest($sev_query, $download, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'reportContact'
     *
     * @param  ReportContactSevQueryParameter $sev_query (required)
     * @param  bool $download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportContact'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function reportContactRequest($sev_query, $download = null, string $contentType = self::contentTypes['reportContact'][0])
    {

        // verify the required parameter 'sev_query' is set
        if ($sev_query === null || (is_array($sev_query) && count($sev_query) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sev_query when calling reportContact'
            );
        }



        $resourcePath = '/Report/contactlist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $download,
            'download', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sev_query,
            'sevQuery', // param base name
            'object', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation reportInvoice
     *
     * Export invoice list
     *
     * @param  ReportInvoiceSevQueryParameter $sev_query sev_query (required)
     * @param  bool $download download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportInvoice'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function reportInvoice($sev_query, $download = null, string $contentType = self::contentTypes['reportInvoice'][0])
    {
        list($response) = $this->reportInvoiceWithHttpInfo($sev_query, $download, $contentType);
        return $response;
    }

    /**
     * Operation reportInvoiceWithHttpInfo
     *
     * Export invoice list
     *
     * @param  ReportInvoiceSevQueryParameter $sev_query (required)
     * @param  bool $download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportInvoice'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportInvoiceWithHttpInfo($sev_query, $download = null, string $contentType = self::contentTypes['reportInvoice'][0])
    {
        $request = $this->reportInvoiceRequest($sev_query, $download, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('object' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation reportInvoiceAsync
     *
     * Export invoice list
     *
     * @param  ReportInvoiceSevQueryParameter $sev_query (required)
     * @param  bool $download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportInvoiceAsync($sev_query, $download = null, string $contentType = self::contentTypes['reportInvoice'][0])
    {
        return $this->reportInvoiceAsyncWithHttpInfo($sev_query, $download, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reportInvoiceAsyncWithHttpInfo
     *
     * Export invoice list
     *
     * @param  ReportInvoiceSevQueryParameter $sev_query (required)
     * @param  bool $download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportInvoiceAsyncWithHttpInfo($sev_query, $download = null, string $contentType = self::contentTypes['reportInvoice'][0])
    {
        $returnType = 'object';
        $request = $this->reportInvoiceRequest($sev_query, $download, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'reportInvoice'
     *
     * @param  ReportInvoiceSevQueryParameter $sev_query (required)
     * @param  bool $download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportInvoice'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function reportInvoiceRequest($sev_query, $download = null, string $contentType = self::contentTypes['reportInvoice'][0])
    {

        // verify the required parameter 'sev_query' is set
        if ($sev_query === null || (is_array($sev_query) && count($sev_query) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sev_query when calling reportInvoice'
            );
        }



        $resourcePath = '/Report/invoicelist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $download,
            'download', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sev_query,
            'sevQuery', // param base name
            'object', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation reportOrder
     *
     * Export order list
     *
     * @param  ReportOrderSevQueryParameter $sev_query sev_query (required)
     * @param  bool $download download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportOrder'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function reportOrder($sev_query, $download = null, string $contentType = self::contentTypes['reportOrder'][0])
    {
        list($response) = $this->reportOrderWithHttpInfo($sev_query, $download, $contentType);
        return $response;
    }

    /**
     * Operation reportOrderWithHttpInfo
     *
     * Export order list
     *
     * @param  ReportOrderSevQueryParameter $sev_query (required)
     * @param  bool $download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportOrder'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportOrderWithHttpInfo($sev_query, $download = null, string $contentType = self::contentTypes['reportOrder'][0])
    {
        $request = $this->reportOrderRequest($sev_query, $download, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('object' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation reportOrderAsync
     *
     * Export order list
     *
     * @param  ReportOrderSevQueryParameter $sev_query (required)
     * @param  bool $download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportOrder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportOrderAsync($sev_query, $download = null, string $contentType = self::contentTypes['reportOrder'][0])
    {
        return $this->reportOrderAsyncWithHttpInfo($sev_query, $download, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reportOrderAsyncWithHttpInfo
     *
     * Export order list
     *
     * @param  ReportOrderSevQueryParameter $sev_query (required)
     * @param  bool $download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportOrder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportOrderAsyncWithHttpInfo($sev_query, $download = null, string $contentType = self::contentTypes['reportOrder'][0])
    {
        $returnType = 'object';
        $request = $this->reportOrderRequest($sev_query, $download, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'reportOrder'
     *
     * @param  ReportOrderSevQueryParameter $sev_query (required)
     * @param  bool $download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportOrder'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function reportOrderRequest($sev_query, $download = null, string $contentType = self::contentTypes['reportOrder'][0])
    {

        // verify the required parameter 'sev_query' is set
        if ($sev_query === null || (is_array($sev_query) && count($sev_query) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sev_query when calling reportOrder'
            );
        }



        $resourcePath = '/Report/orderlist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $download,
            'download', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sev_query,
            'sevQuery', // param base name
            'object', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation reportVoucher
     *
     * Export voucher list
     *
     * @param  ReportVoucherSevQueryParameter $sev_query sev_query (required)
     * @param  bool $download download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportVoucher'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return object
     */
    public function reportVoucher($sev_query, $download = null, string $contentType = self::contentTypes['reportVoucher'][0])
    {
        list($response) = $this->reportVoucherWithHttpInfo($sev_query, $download, $contentType);
        return $response;
    }

    /**
     * Operation reportVoucherWithHttpInfo
     *
     * Export voucher list
     *
     * @param  ReportVoucherSevQueryParameter $sev_query (required)
     * @param  bool $download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportVoucher'] to see the possible values for this operation
     *
     * @throws \Itsmind\Sevdesk\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of object, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportVoucherWithHttpInfo($sev_query, $download = null, string $contentType = self::contentTypes['reportVoucher'][0])
    {
        $request = $this->reportVoucherRequest($sev_query, $download, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('object' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('object' !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'object', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = 'object';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'object',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation reportVoucherAsync
     *
     * Export voucher list
     *
     * @param  ReportVoucherSevQueryParameter $sev_query (required)
     * @param  bool $download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportVoucher'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportVoucherAsync($sev_query, $download = null, string $contentType = self::contentTypes['reportVoucher'][0])
    {
        return $this->reportVoucherAsyncWithHttpInfo($sev_query, $download, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reportVoucherAsyncWithHttpInfo
     *
     * Export voucher list
     *
     * @param  ReportVoucherSevQueryParameter $sev_query (required)
     * @param  bool $download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportVoucher'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportVoucherAsyncWithHttpInfo($sev_query, $download = null, string $contentType = self::contentTypes['reportVoucher'][0])
    {
        $returnType = 'object';
        $request = $this->reportVoucherRequest($sev_query, $download, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'reportVoucher'
     *
     * @param  ReportVoucherSevQueryParameter $sev_query (required)
     * @param  bool $download (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['reportVoucher'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function reportVoucherRequest($sev_query, $download = null, string $contentType = self::contentTypes['reportVoucher'][0])
    {

        // verify the required parameter 'sev_query' is set
        if ($sev_query === null || (is_array($sev_query) && count($sev_query) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $sev_query when calling reportVoucher'
            );
        }



        $resourcePath = '/Report/voucherlist';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $download,
            'download', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sev_query,
            'sevQuery', // param base name
            'object', // openApiType
            'form', // style
            true, // explode
            true // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
