<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Payload to open a new incident.
*/
class CreateIncidentRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $description Free-form details about the incident.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $reporterEmail Email address of the person reporting the incident.
    */
    private ?string $reporterEmail = null;
    
    /**
     * @var string|null $subject Short title summarizing the incident.
    */
    private ?string $subject = null;
    
    /**
     * @var string|null $target Identifier of the affected resource.
    */
    private ?string $target = null;
    
    /**
     * Instantiates a new CreateIncidentRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateIncidentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateIncidentRequest {
        return new CreateIncidentRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. Free-form details about the incident.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'reporterEmail' => fn(ParseNode $n) => $o->setReporterEmail($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getStringValue()),
        ];
    }

    /**
     * Gets the reporterEmail property value. Email address of the person reporting the incident.
     * @return string|null
    */
    public function getReporterEmail(): ?string {
        return $this->reporterEmail;
    }

    /**
     * Gets the subject property value. Short title summarizing the incident.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the target property value. Identifier of the affected resource.
     * @return string|null
    */
    public function getTarget(): ?string {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('reporterEmail', $this->getReporterEmail());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeStringValue('target', $this->getTarget());
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
     * Sets the description property value. Free-form details about the incident.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the reporterEmail property value. Email address of the person reporting the incident.
     * @param string|null $value Value to set for the reporterEmail property.
    */
    public function setReporterEmail(?string $value): void {
        $this->reporterEmail = $value;
    }

    /**
     * Sets the subject property value. Short title summarizing the incident.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->subject = $value;
    }

    /**
     * Sets the target property value. Identifier of the affected resource.
     * @param string|null $value Value to set for the target property.
    */
    public function setTarget(?string $value): void {
        $this->target = $value;
    }

}
