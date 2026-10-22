<?php

namespace HypeLabs\Connect\Sdk\Generated\Customers;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Customers\Authenticate\AuthenticateRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Customers\Item\WithCustomerItemRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Models\ApiResponse;
use HypeLabs\Connect\Sdk\Generated\Models\CreateCustomerRequest;
use HypeLabs\Connect\Sdk\Generated\Models\Customer;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /customers
*/
class CustomersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The authenticate property
    */
    public function authenticate(): AuthenticateRequestBuilder {
        return new AuthenticateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the HypeLabs/Connect/Sdk/Generated.customers.item collection
     * @param string $customerId Unique identifier of the item
     * @return WithCustomerItemRequestBuilder
    */
    public function byCustomerId(string $customerId): WithCustomerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['customerId'] = $customerId;
        return new WithCustomerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new CustomersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/customers{?active*,country*,emailVerified*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns your organization's customers, most recent first. Filterable by active state, email-verified state, KYC approval, and a free-text search across all of a customer's fields.
     * @param CustomersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<Customer>|null>
     * @throws Exception
    */
    public function get(?CustomersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [Customer::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Creates a customer for your organization.
     * @param CreateCustomerRequest $body Payload to create a customer (your organization's own end user).
     * @param CustomersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Customer|null>
     * @throws Exception
    */
    public function post(CreateCustomerRequest $body, ?CustomersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '409' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Customer::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Returns your organization's customers, most recent first. Filterable by active state, email-verified state, KYC approval, and a free-text search across all of a customer's fields.
     * @param CustomersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Creates a customer for your organization.
     * @param CreateCustomerRequest $body Payload to create a customer (your organization's own end user).
     * @param CustomersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateCustomerRequest $body, ?CustomersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CustomersRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomersRequestBuilder {
        return new CustomersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
