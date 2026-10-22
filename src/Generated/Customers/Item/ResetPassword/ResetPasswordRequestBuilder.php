<?php

namespace HypeLabs\Connect\Sdk\Generated\Customers\Item\ResetPassword;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Models\ApiResponse;
use HypeLabs\Connect\Sdk\Generated\Models\ResetPasswordResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /customers/{customerId}/reset-password
*/
class ResetPasswordRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ResetPasswordRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/customers/{customerId}/reset-password');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Generates a temporary password for the customer, emails it to them, and returns it.
     * @param ResetPasswordRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ResetPasswordResponse|null>
     * @throws Exception
    */
    public function post(?ResetPasswordRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                '404' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ResetPasswordResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Generates a temporary password for the customer, emails it to them, and returns it.
     * @param ResetPasswordRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?ResetPasswordRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ResetPasswordRequestBuilder
    */
    public function withUrl(string $rawUrl): ResetPasswordRequestBuilder {
        return new ResetPasswordRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
