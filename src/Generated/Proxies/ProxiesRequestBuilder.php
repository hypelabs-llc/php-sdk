<?php

namespace HypeLabs\Connect\Sdk\Generated\Proxies;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Models\Proxy;
use HypeLabs\Connect\Sdk\Generated\Proxies\Item\WithProxyItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /proxies
*/
class ProxiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the HypeLabs/Connect/Sdk/Generated.proxies.item collection
     * @param string $proxyId Unique identifier of the item
     * @return WithProxyItemRequestBuilder
    */
    public function byProxyId(string $proxyId): WithProxyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['proxyId'] = $proxyId;
        return new WithProxyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ProxiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/proxies');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns a snapshot of all your active proxies with their connection details.
     * @param ProxiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<Proxy>|null>
     * @throws Exception
    */
    public function get(?ProxiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [Proxy::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Returns a snapshot of all your active proxies with their connection details.
     * @param ProxiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ProxiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "text/plain;q=0.9");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return ProxiesRequestBuilder
    */
    public function withUrl(string $rawUrl): ProxiesRequestBuilder {
        return new ProxiesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
