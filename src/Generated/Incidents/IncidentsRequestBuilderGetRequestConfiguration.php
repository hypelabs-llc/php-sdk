<?php

namespace HypeLabs\Connect\Sdk\Generated\Incidents;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class IncidentsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var IncidentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?IncidentsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new IncidentsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param IncidentsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?IncidentsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new IncidentsRequestBuilderGetQueryParameters.
     * @param string|null $reporter Filter by reporter email.
     * @param string|null $status Filter by incident status.
     * @return IncidentsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $reporter = null, ?string $status = null): IncidentsRequestBuilderGetQueryParameters {
        return new IncidentsRequestBuilderGetQueryParameters($reporter, $status);
    }

}
