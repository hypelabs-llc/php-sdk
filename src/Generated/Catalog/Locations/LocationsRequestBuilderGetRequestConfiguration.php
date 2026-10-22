<?php

namespace HypeLabs\Connect\Sdk\Generated\Catalog\Locations;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class LocationsRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var LocationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?LocationsRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new LocationsRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param LocationsRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?LocationsRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new LocationsRequestBuilderGetQueryParameters.
     * @param bool|null $includeDisabled Include options the organization has disabled (hidden by default).
     * @param string|null $productId Identifier of the product whose locations to list.
     * @return LocationsRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?bool $includeDisabled = null, ?string $productId = null): LocationsRequestBuilderGetQueryParameters {
        return new LocationsRequestBuilderGetQueryParameters($includeDisabled, $productId);
    }

}
