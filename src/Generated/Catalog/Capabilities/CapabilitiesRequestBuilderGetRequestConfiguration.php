<?php

namespace HypeLabs\Connect\Sdk\Generated\Catalog\Capabilities;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class CapabilitiesRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var CapabilitiesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?CapabilitiesRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new CapabilitiesRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param CapabilitiesRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?CapabilitiesRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new CapabilitiesRequestBuilderGetQueryParameters.
     * @param string|null $datacenterId Narrow the stock to this datacenter (optional).
     * @param string|null $ispId Narrow the stock to this ISP (optional).
     * @param string|null $locationId Narrow the stock to this location (optional).
     * @return CapabilitiesRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $datacenterId = null, ?string $ispId = null, ?string $locationId = null): CapabilitiesRequestBuilderGetQueryParameters {
        return new CapabilitiesRequestBuilderGetQueryParameters($datacenterId, $ispId, $locationId);
    }

}
