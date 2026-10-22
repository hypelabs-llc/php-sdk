<?php

namespace HypeLabs\Connect\Sdk\Generated\Customers\Item;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Customers\Item\Billing\BillingRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Customers\Item\Defaults\DefaultsRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Customers\Item\Kyc\KycRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Customers\Item\Metadata\MetadataRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Customers\Item\Password\PasswordRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Customers\Item\ResetPassword\ResetPasswordRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Customers\Item\SendVerification\SendVerificationRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Models\ApiResponse;
use HypeLabs\Connect\Sdk\Generated\Models\Customer;
use HypeLabs\Connect\Sdk\Generated\Models\PatchCustomerRequest;
use HypeLabs\Connect\Sdk\Generated\Models\UpdateCustomerRequest;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /customers/{customerId}
*/
class WithCustomerItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The billing property
    */
    public function billing(): BillingRequestBuilder {
        return new BillingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The defaults property
    */
    public function defaults(): DefaultsRequestBuilder {
        return new DefaultsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The kyc property
    */
    public function kyc(): KycRequestBuilder {
        return new KycRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The metadata property
    */
    public function metadata(): MetadataRequestBuilder {
        return new MetadataRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The password property
    */
    public function password(): PasswordRequestBuilder {
        return new PasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The resetPassword property
    */
    public function resetPassword(): ResetPasswordRequestBuilder {
        return new ResetPasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The sendVerification property
    */
    public function sendVerification(): SendVerificationRequestBuilder {
        return new SendVerificationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithCustomerItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/customers/{customerId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Permanently deletes a customer from your organization.
     * @param WithCustomerItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?WithCustomerItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '404' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Returns a single customer belonging to your organization.
     * @param WithCustomerItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Customer|null>
     * @throws Exception
    */
    public function get(?WithCustomerItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '404' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Customer::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Partially updates a customer. Suspending a customer (isActive=false) blocks them from authenticating; reinstating (isActive=true) restores access.
     * @param PatchCustomerRequest $body Partial update of a customer: only the provided fields are changed.
     * @param WithCustomerItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function patch(PatchCustomerRequest $body, ?WithCustomerItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '404' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Updates a customer's details. Fields left null are unchanged.
     * @param UpdateCustomerRequest $body Payload to update a customer. Null fields are left unchanged.
     * @param WithCustomerItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Customer|null>
     * @throws Exception
    */
    public function put(UpdateCustomerRequest $body, ?WithCustomerItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '404' => [ApiResponse::class, 'createFromDiscriminatorValue'],
                '409' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Customer::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Permanently deletes a customer from your organization.
     * @param WithCustomerItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?WithCustomerItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a single customer belonging to your organization.
     * @param WithCustomerItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithCustomerItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Partially updates a customer. Suspending a customer (isActive=false) blocks them from authenticating; reinstating (isActive=true) restores access.
     * @param PatchCustomerRequest $body Partial update of a customer: only the provided fields are changed.
     * @param WithCustomerItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(PatchCustomerRequest $body, ?WithCustomerItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Updates a customer's details. Fields left null are unchanged.
     * @param UpdateCustomerRequest $body Payload to update a customer. Null fields are left unchanged.
     * @param WithCustomerItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(UpdateCustomerRequest $body, ?WithCustomerItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * @return WithCustomerItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithCustomerItemRequestBuilder {
        return new WithCustomerItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
