<?php

namespace HypeLabs\Connect\Sdk\Generated\Proxies\Item\Annotations;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Models\PatchProxyAnnotationRequest;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /proxies/{proxyId}/annotations
*/
class AnnotationsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AnnotationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/proxies/{proxyId}/annotations');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Sets your note and tags on an owned proxy. A null field is left unchanged; an empty value clears it.
     * @param PatchProxyAnnotationRequest $body Patch of an organization's annotation of a proxy: its free-form note and its tags. A null field is    left unchanged; an empty string clears the note and an empty array clears the tags.
     * @param AnnotationsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function patch(PatchProxyAnnotationRequest $body, ?AnnotationsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, null);
        return $result;
    }

    /**
     * Sets your note and tags on an owned proxy. A null field is left unchanged; an empty value clears it.
     * @param PatchProxyAnnotationRequest $body Patch of an organization's annotation of a proxy: its free-form note and its tags. A null field is    left unchanged; an empty string clears the note and an empty array clears the tags.
     * @param AnnotationsRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(PatchProxyAnnotationRequest $body, ?AnnotationsRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AnnotationsRequestBuilder
    */
    public function withUrl(string $rawUrl): AnnotationsRequestBuilder {
        return new AnnotationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
