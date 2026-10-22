<?php

namespace HypeLabs\Connect\Sdk\Generated\Reviews\Item\Metadata;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Models\ApiResponse;
use HypeLabs\Connect\Sdk\Generated\Models\PatchMetadataRequest;
use HypeLabs\Connect\Sdk\Generated\Models\Review;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /reviews/{reviewId}/metadata
*/
class MetadataRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MetadataRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reviews/{reviewId}/metadata');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Merge-patches a review's metadata: each provided key is set (overwriting any existing value), a key mapped to null is removed, and keys you don't send are left unchanged.
     * @param PatchMetadataRequest $body Merge-patch of an entity's metadata (RFC 7386 semantics): a present key sets or overwrites its value,    a null value removes the key, and any key not listed is left unchanged.
     * @param MetadataRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Review|null>
     * @throws Exception
    */
    public function patch(PatchMetadataRequest $body, ?MetadataRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '404' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Review::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Merge-patches a review's metadata: each provided key is set (overwriting any existing value), a key mapped to null is removed, and keys you don't send are left unchanged.
     * @param PatchMetadataRequest $body Merge-patch of an entity's metadata (RFC 7386 semantics): a present key sets or overwrites its value,    a null value removes the key, and any key not listed is left unchanged.
     * @param MetadataRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(PatchMetadataRequest $body, ?MetadataRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MetadataRequestBuilder
    */
    public function withUrl(string $rawUrl): MetadataRequestBuilder {
        return new MetadataRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
