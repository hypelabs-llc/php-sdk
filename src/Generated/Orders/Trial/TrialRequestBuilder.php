<?php

namespace HypeLabs\Connect\Sdk\Generated\Orders\Trial;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Models\ApiResponse;
use HypeLabs\Connect\Sdk\Generated\Models\CreateTrialResponse;
use HypeLabs\Connect\Sdk\Generated\Models\TrialOrderRequest;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /orders/trial
*/
class TrialRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new TrialRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/orders/trial');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Records a short-lived trial order for the selection.
     * @param TrialOrderRequest $body Trial order request: the same selection as a paid order, but free and time-boxed, so it carries no    billing cycle, payment method or auto-renewal.
     * @param TrialRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CreateTrialResponse|null>
     * @throws Exception
    */
    public function post(TrialOrderRequest $body, ?TrialRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '400' => [ApiResponse::class, 'createFromDiscriminatorValue'],
                '404' => [ApiResponse::class, 'createFromDiscriminatorValue'],
                '500' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CreateTrialResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Records a short-lived trial order for the selection.
     * @param TrialOrderRequest $body Trial order request: the same selection as a paid order, but free and time-boxed, so it carries no    billing cycle, payment method or auto-renewal.
     * @param TrialRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TrialOrderRequest $body, ?TrialRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TrialRequestBuilder
    */
    public function withUrl(string $rawUrl): TrialRequestBuilder {
        return new TrialRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
