<?php

namespace HypeLabs\Connect\Sdk\Generated\Orders;

/**
 * Lists your active orders. Filterable by status, billing cycle, payment method, trial flag, intent (wholesale/retail), customer id, and a free-text search across all of an order's fields.
*/
class OrdersRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $customerId Filter by the customer the order belongs to.
    */
    public ?string $customerId = null;
    
    /**
     * @var string|null $intent Filter by order intent (wholesale or retail).
    */
    public ?string $intent = null;
    
    /**
     * @var string|null $trial Filter by trial flag.
    */
    public ?string $trial = null;
    
    /**
     * Instantiates a new OrdersRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $customerId Filter by the customer the order belongs to.
     * @param string|null $intent Filter by order intent (wholesale or retail).
     * @param string|null $trial Filter by trial flag.
    */
    public function __construct(?string $customerId = null, ?string $intent = null, ?string $trial = null) {
        $this->customerId = $customerId;
        $this->intent = $intent;
        $this->trial = $trial;
    }

}
