<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A complaint reported about a proxy (or other resource), usually by a customer. string Incident.Target andstring Incident.ReporterEmail are free-form strings until they are linked to their own entities.
*/
class Incident implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $description Full text of the complaint, null when none was provided.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isOverdue True when the incident is still open and was created more than TimeSpan Incident.DefaultOverdueAfter ago.
    */
    private ?bool $isOverdue = null;
    
    /**
     * @var Incident_metadata|null $metadata The metadata property
    */
    private ?Incident_metadata $metadata = null;
    
    /**
     * @var string|null $reason Why the target went down, picked from the predefined reasons when the incident is resolved.
    */
    private ?string $reason = null;
    
    /**
     * @var string|null $reporterEmail Email of the customer who reported the incident.
    */
    private ?string $reporterEmail = null;
    
    /**
     * @var string|null $resolutionNote Message written for the customer at resolution, surfaced to them (e.g. by email) later.
    */
    private ?string $resolutionNote = null;
    
    /**
     * @var DateTime|null $resolvedAt When the incident was resolved, null while it is still open.
    */
    private ?DateTime $resolvedAt = null;
    
    /**
     * @var IncidentStatuses|null $status Lifecycle state of the incident (open, resolved, etc.).
    */
    private ?IncidentStatuses $status = null;
    
    /**
     * @var string|null $subject Short one-line title of the complaint.
    */
    private ?string $subject = null;
    
    /**
     * @var string|null $target Identifier of the affected proxy (hostname:port).
    */
    private ?string $target = null;
    
    /**
     * Instantiates a new Incident and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Incident
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Incident {
        return new Incident();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. Full text of the complaint, null when none was provided.
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
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isOverdue' => fn(ParseNode $n) => $o->setIsOverdue($n->getBooleanValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([Incident_metadata::class, 'createFromDiscriminatorValue'])),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'reporterEmail' => fn(ParseNode $n) => $o->setReporterEmail($n->getStringValue()),
            'resolutionNote' => fn(ParseNode $n) => $o->setResolutionNote($n->getStringValue()),
            'resolvedAt' => fn(ParseNode $n) => $o->setResolvedAt($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(IncidentStatuses::class)),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. The id property
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the isOverdue property value. True when the incident is still open and was created more than TimeSpan Incident.DefaultOverdueAfter ago.
     * @return bool|null
    */
    public function getIsOverdue(): ?bool {
        return $this->isOverdue;
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return Incident_metadata|null
    */
    public function getMetadata(): ?Incident_metadata {
        return $this->metadata;
    }

    /**
     * Gets the reason property value. Why the target went down, picked from the predefined reasons when the incident is resolved.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the reporterEmail property value. Email of the customer who reported the incident.
     * @return string|null
    */
    public function getReporterEmail(): ?string {
        return $this->reporterEmail;
    }

    /**
     * Gets the resolutionNote property value. Message written for the customer at resolution, surfaced to them (e.g. by email) later.
     * @return string|null
    */
    public function getResolutionNote(): ?string {
        return $this->resolutionNote;
    }

    /**
     * Gets the resolvedAt property value. When the incident was resolved, null while it is still open.
     * @return DateTime|null
    */
    public function getResolvedAt(): ?DateTime {
        return $this->resolvedAt;
    }

    /**
     * Gets the status property value. Lifecycle state of the incident (open, resolved, etc.).
     * @return IncidentStatuses|null
    */
    public function getStatus(): ?IncidentStatuses {
        return $this->status;
    }

    /**
     * Gets the subject property value. Short one-line title of the complaint.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the target property value. Identifier of the affected proxy (hostname:port).
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
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isOverdue', $this->getIsOverdue());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeStringValue('reporterEmail', $this->getReporterEmail());
        $writer->writeStringValue('resolutionNote', $this->getResolutionNote());
        $writer->writeDateTimeValue('resolvedAt', $this->getResolvedAt());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the description property value. Full text of the complaint, null when none was provided.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->description = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isOverdue property value. True when the incident is still open and was created more than TimeSpan Incident.DefaultOverdueAfter ago.
     * @param bool|null $value Value to set for the isOverdue property.
    */
    public function setIsOverdue(?bool $value): void {
        $this->isOverdue = $value;
    }

    /**
     * Sets the metadata property value. The metadata property
     * @param Incident_metadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?Incident_metadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the reason property value. Why the target went down, picked from the predefined reasons when the incident is resolved.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->reason = $value;
    }

    /**
     * Sets the reporterEmail property value. Email of the customer who reported the incident.
     * @param string|null $value Value to set for the reporterEmail property.
    */
    public function setReporterEmail(?string $value): void {
        $this->reporterEmail = $value;
    }

    /**
     * Sets the resolutionNote property value. Message written for the customer at resolution, surfaced to them (e.g. by email) later.
     * @param string|null $value Value to set for the resolutionNote property.
    */
    public function setResolutionNote(?string $value): void {
        $this->resolutionNote = $value;
    }

    /**
     * Sets the resolvedAt property value. When the incident was resolved, null while it is still open.
     * @param DateTime|null $value Value to set for the resolvedAt property.
    */
    public function setResolvedAt(?DateTime $value): void {
        $this->resolvedAt = $value;
    }

    /**
     * Sets the status property value. Lifecycle state of the incident (open, resolved, etc.).
     * @param IncidentStatuses|null $value Value to set for the status property.
    */
    public function setStatus(?IncidentStatuses $value): void {
        $this->status = $value;
    }

    /**
     * Sets the subject property value. Short one-line title of the complaint.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->subject = $value;
    }

    /**
     * Sets the target property value. Identifier of the affected proxy (hostname:port).
     * @param string|null $value Value to set for the target property.
    */
    public function setTarget(?string $value): void {
        $this->target = $value;
    }

}
