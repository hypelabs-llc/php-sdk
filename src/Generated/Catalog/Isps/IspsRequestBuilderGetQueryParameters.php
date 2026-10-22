<?php

namespace HypeLabs\Connect\Sdk\Generated\Catalog\Isps;

/**
 * Returns the available ISPs for a product and location. Options the organization has disabled are hidden unless includeDisabled is set.
*/
class IspsRequestBuilderGetQueryParameters 
{
    /**
     * @var bool|null $includeDisabled Include options the organization has disabled (hidden by default).
    */
    public ?bool $includeDisabled = null;
    
    /**
     * @var string|null $locationId Identifier of the selected location.
    */
    public ?string $locationId = null;
    
    /**
     * @var string|null $productId Identifier of the product being priced.
    */
    public ?string $productId = null;
    
    /**
     * Instantiates a new IspsRequestBuilderGetQueryParameters and sets the default values.
     * @param bool|null $includeDisabled Include options the organization has disabled (hidden by default).
     * @param string|null $locationId Identifier of the selected location.
     * @param string|null $productId Identifier of the product being priced.
    */
    public function __construct(?bool $includeDisabled = null, ?string $locationId = null, ?string $productId = null) {
        $this->includeDisabled = $includeDisabled;
        $this->locationId = $locationId;
        $this->productId = $productId;
    }

}
