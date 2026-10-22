<?php

namespace HypeLabs\Connect\Sdk\Generated\Orders;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Models\ApiResponse;
use HypeLabs\Connect\Sdk\Generated\Models\CreateOrderRequest;
use HypeLabs\Connect\Sdk\Generated\Models\CreateOrderResponse;
use HypeLabs\Connect\Sdk\Generated\Models\Order;
use HypeLabs\Connect\Sdk\Generated\Orders\Item\OrdersItemRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Orders\Preview\PreviewRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Orders\Trial\TrialRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /orders
*/
class OrdersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The preview property
    */
    public function preview(): PreviewRequestBuilder {
        return new PreviewRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The trial property
    */
    public function trial(): TrialRequestBuilder {
        return new TrialRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the HypeLabs/Connect/Sdk/Generated.orders.item collection
     * @param string $id Unique identifier of the item
     * @return OrdersItemRequestBuilder
    */
    public function byId(string $id): OrdersItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['id'] = $id;
        return new OrdersItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OrdersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/orders{?customerId*,intent*,trial*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Lists your active orders. Filterable by status, billing cycle, payment method, trial flag, intent (wholesale/retail), customer id, and a free-text search across all of an order's fields.
     * @param OrdersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<Order>|null>
     * @throws Exception
    */
    public function get(?OrdersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [Order::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Prices the selection and records the order.
     * @param CreateOrderRequest $body Order request: the same selection as a price preview, plus whether it auto-renews.
     * @param OrdersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateOrderResponse|null>
     * @throws Exception
    */
    public function post(CreateOrderRequest $body, ?OrdersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ApiResponse::class, 'createFromDiscriminatorValue'],
                '404' => [ApiResponse::class, 'createFromDiscriminatorValue'],
                '500' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CreateOrderResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Lists your active orders. Filterable by status, billing cycle, payment method, trial flag, intent (wholesale/retail), customer id, and a free-text search across all of an order's fields.
     * @param OrdersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OrdersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "text/plain;q=0.9");
        return $requestInfo;
    }

    /**
     * Prices the selection and records the order.
     * @param CreateOrderRequest $body Order request: the same selection as a price preview, plus whether it auto-renews.
     * @param OrdersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateOrderRequest $body, ?OrdersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return OrdersRequestBuilder
    */
    public function withUrl(string $rawUrl): OrdersRequestBuilder {
        return new OrdersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
