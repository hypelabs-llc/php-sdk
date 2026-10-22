<?php

namespace HypeLabs\Connect\Sdk\Generated\Incidents;

use Exception;
use Http\Promise\Promise;
use HypeLabs\Connect\Sdk\Generated\Incidents\Item\WithIncidentItemRequestBuilder;
use HypeLabs\Connect\Sdk\Generated\Models\ApiResponse;
use HypeLabs\Connect\Sdk\Generated\Models\CreateIncidentRequest;
use HypeLabs\Connect\Sdk\Generated\Models\Incident;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Builds and executes requests for operations under /incidents
*/
class IncidentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Gets an item from the HypeLabs/Connect/Sdk/Generated.incidents.item collection
     * @param string $incidentId Unique identifier of the item
     * @return WithIncidentItemRequestBuilder
    */
    public function byIncidentId(string $incidentId): WithIncidentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['incidentId'] = $incidentId;
        return new WithIncidentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new IncidentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/incidents{?reporter*,status*}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Returns the incidents reported for your organization, most recent first.
     * @param IncidentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<array<Incident>|null>
     * @throws Exception
    */
    public function get(?IncidentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        return $this->requestAdapter->sendCollectionAsync($requestInfo, [Incident::class, 'createFromDiscriminatorValue'], null);
    }

    /**
     * Reports a new incident for your organization. Rejected with 409 if an incident is already open for the same target.
     * @param CreateIncidentRequest $body Payload to open a new incident.
     * @param IncidentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Incident|null>
     * @throws Exception
    */
    public function post(CreateIncidentRequest $body, ?IncidentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '409' => [ApiResponse::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Incident::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Returns the incidents reported for your organization, most recent first.
     * @param IncidentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IncidentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Reports a new incident for your organization. Rejected with 409 if an incident is already open for the same target.
     * @param CreateIncidentRequest $body Payload to open a new incident.
     * @param IncidentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(CreateIncidentRequest $body, ?IncidentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return IncidentsRequestBuilder
    */
    public function withUrl(string $rawUrl): IncidentsRequestBuilder {
        return new IncidentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
