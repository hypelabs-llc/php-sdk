<?php

namespace HypeLabs\Connect\Sdk\Generated\Orders\Item\Extend;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Models\ApiResponse;
use HypeLabs\Connect\Sdk\Generated\Models\ExtendOrderRequest;
use HypeLabs\Connect\Sdk\Generated\Models\ExtendOrderResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /orders/{id}/extend
*/
class ExtendRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new ExtendRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/orders/{id}/extend');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Renews an order for another billing cycle, optionally on different terms.
     * @param ExtendOrderRequest $body Renews an existing order for another billing cycle, optionally on different terms.
     * @param ExtendRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExtendOrderResponse|null>
     * @throws Exception
    */
    public function post(ExtendOrderRequest $body, ?ExtendRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ApiResponse::class, 'createFromDiscriminatorValue'],
                '404' => [ApiResponse::class, 'createFromDiscriminatorValue'],
                '500' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExtendOrderResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Renews an order for another billing cycle, optionally on different terms.
     * @param ExtendOrderRequest $body Renews an existing order for another billing cycle, optionally on different terms.
     * @param ExtendRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ExtendOrderRequest $body, ?ExtendRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ExtendRequestBuilder
    */
    public function withUrl(string $rawUrl): ExtendRequestBuilder {
        return new ExtendRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
