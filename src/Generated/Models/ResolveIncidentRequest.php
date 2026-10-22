<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Payload to resolve an open incident on a target.
*/
class ResolveIncidentRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $reason Predefined reason the target went down.
    */
    private ?string $reason = null;
    
    /**
     * @var string|null $resolutionNote Note for the customer, stored on the incident and shown to them later. Null when no note is provided.
    */
    private ?string $resolutionNote = null;
    
    /**
     * Instantiates a new ResolveIncidentRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResolveIncidentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResolveIncidentRequest {
        return new ResolveIncidentRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'resolutionNote' => fn(ParseNode $n) => $o->setResolutionNote($n->getStringValue()),
        ];
    }

    /**
     * Gets the reason property value. Predefined reason the target went down.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the resolutionNote property value. Note for the customer, stored on the incident and shown to them later. Null when no note is provided.
     * @return string|null
    */
    public function getResolutionNote(): ?string {
        return $this->resolutionNote;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeStringValue('resolutionNote', $this->getResolutionNote());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the reason property value. Predefined reason the target went down.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the resolutionNote property value. Note for the customer, stored on the incident and shown to them later. Null when no note is provided.
     * @param string|null $value Value to set for the resolutionNote property.
    */
    public function setResolutionNote(?string $value): void {
        $this->resolutionNote = $value;
    }

}
