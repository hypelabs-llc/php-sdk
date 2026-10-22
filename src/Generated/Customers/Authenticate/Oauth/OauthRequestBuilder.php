<?php

namespace HypeLabs\Connect\Sdk\Generated\Customers\Authenticate\Oauth;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Models\ApiResponse;
use HypeLabs\Connect\Sdk\Generated\Models\AuthenticateCustomerOAuthRequest;
use HypeLabs\Connect\Sdk\Generated\Models\CustomerAuthResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /customers/authenticate/oauth
*/
class OauthRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new OauthRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/customers/authenticate/oauth');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Signs in one of your customers from an identity your front-end has already verified with an external provider (Google, Apple, ...). Links the provider to an existing customer with the same email, or creates one, and returns the customer's identity.
     * @param AuthenticateCustomerOAuthRequest $body Identity attested by an external provider (Google, GitHub, Apple, ...) after the organization's own front-end(or app) completed the OAuth sign-in. The Connect API trusts the attested identity — it never talks to theprovider itself — and finds or creates the matching customer, scoped to the calling organization.
     * @param OauthRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomerAuthResponse|null>
     * @throws Exception
    */
    public function post(AuthenticateCustomerOAuthRequest $body, ?OauthRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '403' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomerAuthResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Signs in one of your customers from an identity your front-end has already verified with an external provider (Google, Apple, ...). Links the provider to an existing customer with the same email, or creates one, and returns the customer's identity.
     * @param AuthenticateCustomerOAuthRequest $body Identity attested by an external provider (Google, GitHub, Apple, ...) after the organization's own front-end(or app) completed the OAuth sign-in. The Connect API trusts the attested identity — it never talks to theprovider itself — and finds or creates the matching customer, scoped to the calling organization.
     * @param OauthRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AuthenticateCustomerOAuthRequest $body, ?OauthRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OauthRequestBuilder
    */
    public function withUrl(string $rawUrl): OauthRequestBuilder {
        return new OauthRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
