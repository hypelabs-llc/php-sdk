<?php

namespace HypeLabs\Connect\Sdk\Generated\Customers\Item\Billing;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Models\ApiResponse;
use HypeLabs\Connect\Sdk\Generated\Models\Customer;
use HypeLabs\Connect\Sdk\Generated\Models\PatchCustomerBillingRequest;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /customers/{customerId}/billing
*/
class BillingRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new BillingRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/customers/{customerId}/billing');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Merge-patches a customer's billing details (company, address, tax id): each provided field is saved and the rest are left unchanged.
     * @param PatchCustomerBillingRequest $body Partial update of a customer's billing details: only the provided fields are changed, the rest are    left as they are.
     * @param BillingRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Customer|null>
     * @throws Exception
    */
    public function patch(PatchCustomerBillingRequest $body, ?BillingRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '404' => [ApiResponse::class, 'createFromDiscriminatorValue'],
                '409' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Customer::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Merge-patches a customer's billing details (company, address, tax id): each provided field is saved and the rest are left unchanged.
     * @param PatchCustomerBillingRequest $body Partial update of a customer's billing details: only the provided fields are changed, the rest are    left as they are.
     * @param BillingRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(PatchCustomerBillingRequest $body, ?BillingRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return BillingRequestBuilder
    */
    public function withUrl(string $rawUrl): BillingRequestBuilder {
        return new BillingRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
