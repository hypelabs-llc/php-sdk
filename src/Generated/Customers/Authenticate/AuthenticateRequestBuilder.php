<?php

namespace HypeLabs\Connect\Sdk\Generated\Customers\Authenticate;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Customers\Authenticate\Oauth\OauthRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Customers\Authenticate\Telegram\TelegramRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Models\ApiResponse;
use HypeLabs\Connect\Sdk\Generated\Models\AuthenticateCustomerRequest;
use HypeLabs\Connect\Sdk\Generated\Models\CustomerAuthResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /customers/authenticate
*/
class AuthenticateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The oauth property
    */
    public function oauth(): OauthRequestBuilder {
        return new OauthRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The telegram property
    */
    public function telegram(): TelegramRequestBuilder {
        return new TelegramRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AuthenticateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/customers/authenticate');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Verifies one of your customers' email and password, returning the customer's identity on success. Use this to sign your own end users in.
     * @param AuthenticateCustomerRequest $body Credentials to authenticate one of the organization's customers.
     * @param AuthenticateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomerAuthResponse|null>
     * @throws Exception
    */
    public function post(AuthenticateCustomerRequest $body, ?AuthenticateRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '401' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomerAuthResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Verifies one of your customers' email and password, returning the customer's identity on success. Use this to sign your own end users in.
     * @param AuthenticateCustomerRequest $body Credentials to authenticate one of the organization's customers.
     * @param AuthenticateRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AuthenticateCustomerRequest $body, ?AuthenticateRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AuthenticateRequestBuilder
    */
    public function withUrl(string $rawUrl): AuthenticateRequestBuilder {
        return new AuthenticateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
