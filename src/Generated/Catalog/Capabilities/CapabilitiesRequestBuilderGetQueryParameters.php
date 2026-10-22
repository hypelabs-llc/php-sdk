<?php

namespace HypeLabs\Connect\Sdk\Generated\Catalog\Capabilities;

/**
 * Returns the sellable proxy capabilities (title, description, icon) with their stock for the selection.
*/
class CapabilitiesRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $datacenterId Narrow the stock to this datacenter (optional).
    */
    public ?string $datacenterId = null;
    
    /**
     * @var string|null $ispId Narrow the stock to this ISP (optional).
    */
    public ?string $ispId = null;
    
    /**
     * @var string|null $locationId Narrow the stock to this location (optional).
    */
    public ?string $locationId = null;
    
    /**
     * Instantiates a new CapabilitiesRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $datacenterId Narrow the stock to this datacenter (optional).
     * @param string|null $ispId Narrow the stock to this ISP (optional).
     * @param string|null $locationId Narrow the stock to this location (optional).
    */
    public function __construct(?string $datacenterId = null, ?string $ispId = null, ?string $locationId = null) {
        $this->datacenterId = $datacenterId;
        $this->ispId = $ispId;
        $this->locationId = $locationId;
    }

}
