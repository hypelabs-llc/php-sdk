<?php

namespace HypeLabs\Connect\Sdk\Generated\Proxies\Item\IpRotation;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Models\ProxyIpRotationResponse;
use HypeLabs\Connect\Sdk\Generated\Models\UpdateProxyIpRotationRequest;
use HypeLabs\Connect\Sdk\Generated\Proxies\Item\IpRotation\Link\LinkRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Proxies\Item\IpRotation\Trigger\TriggerRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Builds and executes requests for operations under /proxies/{proxyId}/ip-rotation
*/
class IpRotationRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The link property
    */
    public function link(): LinkRequestBuilder {
        return new LinkRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The trigger property
    */
    public function trigger(): TriggerRequestBuilder {
        return new TriggerRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new IpRotationRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/proxies/{proxyId}/ip-rotation');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns the IP rotation configured on an owned proxy.
     * @param IpRotationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ProxyIpRotationResponse|null>
     * @throws Exception
    */
    public function get(?IpRotationRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [ProxyIpRotationResponse::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Configures how often the proxy rotates its IP. An interval of 0 disables rotation.
     * @param UpdateProxyIpRotationRequest $body Request to configure a proxy's IP rotation. An interval of 0 disables rotation.
     * @param IpRotationRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function put(UpdateProxyIpRotationRequest $body, ?IpRotationRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, null);
        return $result;
    }

    /**
     * Returns the IP rotation configured on an owned proxy.
     * @param IpRotationRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IpRotationRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json, text/plain;q=0.9");
        return $requestInfo;
    }

    /**
     * Configures how often the proxy rotates its IP. An interval of 0 disables rotation.
     * @param UpdateProxyIpRotationRequest $body Request to configure a proxy's IP rotation. An interval of 0 disables rotation.
     * @param IpRotationRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(UpdateProxyIpRotationRequest $body, ?IpRotationRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * @return IpRotationRequestBuilder
    */
    public function withUrl(string $rawUrl): IpRotationRequestBuilder {
        return new IpRotationRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
