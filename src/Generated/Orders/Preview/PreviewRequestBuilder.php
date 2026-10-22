<?php

namespace HypeLabs\Connect\Sdk\Generated\Orders\Preview;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Models\ApiResponse;
use HypeLabs\Connect\Sdk\Generated\Models\PreviewOrderRequest;
use HypeLabs\Connect\Sdk\Generated\Models\PreviewOrderResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /orders/preview
*/
class PreviewRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new PreviewRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/orders/preview');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Computes the price for a selection (product, location, ISP, quantity) without placing an order.
     * @param PreviewOrderRequest $body Payload to preview an order's price for a given selection, before placing it.
     * @param PreviewRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PreviewOrderResponse|null>
     * @throws Exception
    */
    public function post(PreviewOrderRequest $body, ?PreviewRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ApiResponse::class, 'createFromDiscriminatorValue'],
                '404' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PreviewOrderResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Computes the price for a selection (product, location, ISP, quantity) without placing an order.
     * @param PreviewOrderRequest $body Payload to preview an order's price for a given selection, before placing it.
     * @param PreviewRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PreviewOrderRequest $body, ?PreviewRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PreviewRequestBuilder
    */
    public function withUrl(string $rawUrl): PreviewRequestBuilder {
        return new PreviewRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
