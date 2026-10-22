<?php

namespace HypeLabs\Connect\Sdk\Generated\Customers\Item\Defaults;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Models\ApiResponse;
use HypeLabs\Connect\Sdk\Generated\Models\Customer;
use HypeLabs\Connect\Sdk\Generated\Models\PatchCustomerDefaultsRequest;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /customers/{customerId}/defaults
*/
class DefaultsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DefaultsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/customers/{customerId}/defaults');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Replaces a customer's default allowed IPs and domains (what its proxies authorize by default). Each list is set wholesale to what's provided.
     * @param PatchCustomerDefaultsRequest $body Sets a customer's default allowed IPs and domains for its proxies. Each list is replaced wholesale with    what's provided (an empty list clears it).
     * @param DefaultsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Customer|null>
     * @throws Exception
    */
    public function patch(PatchCustomerDefaultsRequest $body, ?DefaultsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '404' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Customer::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Replaces a customer's default allowed IPs and domains (what its proxies authorize by default). Each list is set wholesale to what's provided.
     * @param PatchCustomerDefaultsRequest $body Sets a customer's default allowed IPs and domains for its proxies. Each list is replaced wholesale with    what's provided (an empty list clears it).
     * @param DefaultsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(PatchCustomerDefaultsRequest $body, ?DefaultsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return DefaultsRequestBuilder
    */
    public function withUrl(string $rawUrl): DefaultsRequestBuilder {
        return new DefaultsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
