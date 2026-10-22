<?php

namespace HypeLabs\Connect\Sdk\Generated\Orders;

use Microsoft\Kiota\Abstractions\BaseRequestConfiguration;
use Microsoft\Kiota\Abstractions\RequestOption;

/**
 * Configuration for the request such as headers, query parameters, and middleware options.
*/
class OrdersRequestBuilderGetRequestConfiguration extends BaseRequestConfiguration 
{
    /**
     * @var OrdersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public ?OrdersRequestBuilderGetQueryParameters $queryParameters = null;
    
    /**
     * Instantiates a new OrdersRequestBuilderGetRequestConfiguration and sets the default values.
     * @param array<string, array<string>|string>|null $headers Request headers
     * @param array<RequestOption>|null $options Request options
     * @param OrdersRequestBuilderGetQueryParameters|null $queryParameters Request query parameters
    */
    public function __construct(?array $headers = null, ?array $options = null, ?OrdersRequestBuilderGetQueryParameters $queryParameters = null) {
        parent::__construct($headers ?? [], $options ?? []);
        $this->queryParameters = $queryParameters;
    }

    /**
     * Instantiates a new OrdersRequestBuilderGetQueryParameters.
     * @param string|null $customerId Filter by the customer the order belongs to.
     * @param string|null $intent Filter by order intent (wholesale or retail).
     * @param string|null $trial Filter by trial flag.
     * @return OrdersRequestBuilderGetQueryParameters
    */
    public static function createQueryParameters(?string $customerId = null, ?string $intent = null, ?string $trial = null): OrdersRequestBuilderGetQueryParameters {
        return new OrdersRequestBuilderGetQueryParameters($customerId, $intent, $trial);
    }

}
