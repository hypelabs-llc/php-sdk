<?php

namespace HypeLabs\Connect\Sdk\Generated\Customers;

/**
 * Returns your organization's customers, most recent first. Filterable by active state, email-verified state, KYC approval, and a free-text search across all of a customer's fields.
*/
class CustomersRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $active Filter by active state.
    */
    public ?string $active = null;
    
    /**
     * @var string|null $country Filter by ISO 3166-1 alpha-2 country code.
    */
    public ?string $country = null;
    
    /**
     * @var string|null $emailVerified Filter by email-verified state.
    */
    public ?string $emailVerified = null;
    
    /**
     * Instantiates a new CustomersRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $active Filter by active state.
     * @param string|null $country Filter by ISO 3166-1 alpha-2 country code.
     * @param string|null $emailVerified Filter by email-verified state.
    */
    public function __construct(?string $active = null, ?string $country = null, ?string $emailVerified = null) {
        $this->active = $active;
        $this->country = $country;
        $this->emailVerified = $emailVerified;
    }

}
