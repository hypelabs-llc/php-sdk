<?php

namespace HypeLabs\Connect\Sdk\Generated\Proxies\Item;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Models\Proxy;
use HypeLabs\Connect\Sdk\Generated\Proxies\Item\Annotations\AnnotationsRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Proxies\Item\Credentials\CredentialsRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Proxies\Item\IpInfo\IpInfoRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Proxies\Item\IpRotation\IpRotationRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Proxies\Item\Options\OptionsRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Proxies\Item\Ping\PingRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /proxies/{proxyId}
*/
class WithProxyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The annotations property
    */
    public function annotations(): AnnotationsRequestBuilder {
        return new AnnotationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The credentials property
    */
    public function credentials(): CredentialsRequestBuilder {
        return new CredentialsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The ipInfo property
    */
    public function ipInfo(): IpInfoRequestBuilder {
        return new IpInfoRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The ipRotation property
    */
    public function ipRotation(): IpRotationRequestBuilder {
        return new IpRotationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The optionsPath property
    */
    public function optionsPath(): OptionsRequestBuilder {
        return new OptionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The ping property
    */
    public function ping(): PingRequestBuilder {
        return new PingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new WithProxyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/proxies/{proxyId}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns one of your proxies with its connection details.
     * @param WithProxyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Proxy|null>
     * @throws Exception
    */
    public function get(?WithProxyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendAsync($requestInfo, [Proxy::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Returns one of your proxies with its connection details.
     * @param WithProxyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WithProxyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return WithProxyItemRequestBuilder
    */
    public function withUrl(string $rawUrl): WithProxyItemRequestBuilder {
        return new WithProxyItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
