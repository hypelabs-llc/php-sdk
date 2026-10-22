<?php

namespace HypeLabs\Connect\Sdk\Generated\Incidents;

/**
 * Returns the incidents reported for your organization, most recent first.
*/
class IncidentsRequestBuilderGetQueryParameters 
{
    /**
     * @var string|null $reporter Filter by reporter email.
    */
    public ?string $reporter = null;
    
    /**
     * @var string|null $status Filter by incident status.
    */
    public ?string $status = null;
    
    /**
     * Instantiates a new IncidentsRequestBuilderGetQueryParameters and sets the default values.
     * @param string|null $reporter Filter by reporter email.
     * @param string|null $status Filter by incident status.
    */
    public function __construct(?string $reporter = null, ?string $status = null) {
        $this->reporter = $reporter;
        $this->status = $status;
    }

}
