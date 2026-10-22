<?php

namespace HypeLabs\Connect\Sdk\Generated\Orders\Item;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Models\ApiResponse;
use HypeLabs\Connect\Sdk\Generated\Models\CancelOrderRequest;
use HypeLabs\Connect\Sdk\Generated\Models\Order;
use HypeLabs\Connect\Sdk\Generated\Orders\Item\Extend\ExtendRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Orders\Item\Proxies\ProxiesRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /orders/{id}
*/
class OrdersItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The extend property
    */
    public function extend(): ExtendRequestBuilder {
        return new ExtendRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The proxies property
    */
    public function proxies(): ProxiesRequestBuilder {
        return new ProxiesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new OrdersItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/orders/{id}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Stops the order renewing (cancelling its subscription when it has one). By default the paid period is kept until expiry; set immediateCancellation to end it now. Set askRefund to also refund the latest payment when still within the refund window.
     * @param CancelOrderRequest $body Cancels an order: how to end its billing and whether to refund.
     * @param OrdersItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(CancelOrderRequest $body, ?OrdersItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '404' => [ApiResponse::class, 'createFromDiscriminatorValue'],
                '409' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Returns one of your orders by id.
     * @param OrdersItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Order|null>
     * @throws Exception
    */
    public function get(?OrdersItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '404' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Order::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Stops the order renewing (cancelling its subscription when it has one). By default the paid period is kept until expiry; set immediateCancellation to end it now. Set askRefund to also refund the latest payment when still within the refund window.
     * @param CancelOrderRequest $body Cancels an order: how to end its billing and whether to refund.
     * @param OrdersItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(CancelOrderRequest $body, ?OrdersItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns one of your orders by id.
     * @param OrdersItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OrdersItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
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
     * @return OrdersItemRequestBuilder
    */
    public function withUrl(string $rawUrl): OrdersItemRequestBuilder {
        return new OrdersItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
