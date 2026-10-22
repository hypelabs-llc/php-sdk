<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RequestDetails implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $clientIp The clientIp property
    */
    private ?string $clientIp = null;
    
    /**
     * @var string|null $correlationId The correlationId property
    */
    private ?string $correlationId = null;
    
    /**
     * @var DateTime|null $date The date property
    */
    private ?DateTime $date = null;
    
    /**
     * @var string|null $endpoint The endpoint property
    */
    private ?string $endpoint = null;
    
    /**
     * @var int|null $timestamp The timestamp property
    */
    private ?int $timestamp = null;
    
    /**
     * @var string|null $userAgent The userAgent property
    */
    private ?string $userAgent = null;
    
    /**
     * Instantiates a new RequestDetails and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RequestDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RequestDetails {
        return new RequestDetails();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the clientIp property value. The clientIp property
     * @return string|null
    */
    public function getClientIp(): ?string {
        return $this->clientIp;
    }

    /**
     * Gets the correlationId property value. The correlationId property
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->correlationId;
    }

    /**
     * Gets the date property value. The date property
     * @return DateTime|null
    */
    public function getDate(): ?DateTime {
        return $this->date;
    }

    /**
     * Gets the endpoint property value. The endpoint property
     * @return string|null
    */
    public function getEndpoint(): ?string {
        return $this->endpoint;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clientIp' => fn(ParseNode $n) => $o->setClientIp($n->getStringValue()),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'date' => fn(ParseNode $n) => $o->setDate($n->getDateTimeValue()),
            'endpoint' => fn(ParseNode $n) => $o->setEndpoint($n->getStringValue()),
            'timestamp' => fn(ParseNode $n) => $o->setTimestamp($n->getIntegerValue()),
            'userAgent' => fn(ParseNode $n) => $o->setUserAgent($n->getStringValue()),
        ];
    }

    /**
     * Gets the timestamp property value. The timestamp property
     * @return int|null
    */
    public function getTimestamp(): ?int {
        return $this->timestamp;
    }

    /**
     * Gets the userAgent property value. The userAgent property
     * @return string|null
    */
    public function getUserAgent(): ?string {
        return $this->userAgent;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('clientIp', $this->getClientIp());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeDateTimeValue('date', $this->getDate());
        $writer->writeStringValue('endpoint', $this->getEndpoint());
        $writer->writeIntegerValue('timestamp', $this->getTimestamp());
        $writer->writeStringValue('userAgent', $this->getUserAgent());
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
     * Sets the clientIp property value. The clientIp property
     * @param string|null $value Value to set for the clientIp property.
    */
    public function setClientIp(?string $value): void {
        $this->clientIp = $value;
    }

    /**
     * Sets the correlationId property value. The correlationId property
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->correlationId = $value;
    }

    /**
     * Sets the date property value. The date property
     * @param DateTime|null $value Value to set for the date property.
    */
    public function setDate(?DateTime $value): void {
        $this->date = $value;
    }

    /**
     * Sets the endpoint property value. The endpoint property
     * @param string|null $value Value to set for the endpoint property.
    */
    public function setEndpoint(?string $value): void {
        $this->endpoint = $value;
    }

    /**
     * Sets the timestamp property value. The timestamp property
     * @param int|null $value Value to set for the timestamp property.
    */
    public function setTimestamp(?int $value): void {
        $this->timestamp = $value;
    }

    /**
     * Sets the userAgent property value. The userAgent property
     * @param string|null $value Value to set for the userAgent property.
    */
    public function setUserAgent(?string $value): void {
        $this->userAgent = $value;
    }

}
