<?php

namespace HypeLabs\Connect\Sdk\Generated\Catalog\Datacenters;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class DatacentersRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var DatacentersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?DatacentersRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new DatacentersRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param DatacentersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?DatacentersRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new DatacentersRequestBuilderGetQueryParameters.
     * @param string|null $ispId Identifier of the selected ISP.
     * @param string|null $locationId Identifier of the selected location.
     * @param string|null $productId Identifier of the product being priced.
     * @return DatacentersRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $ispId = null, ?string $locationId = null, ?string $productId = null): DatacentersRequestBuilderGetQueryParameters {
        return new DatacentersRequestBuilderGetQueryParameters($ispId, $locationId, $productId);
    }

}
