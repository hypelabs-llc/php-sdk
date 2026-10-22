<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The IP rotation configured on a proxy: how often its IP rotates, in seconds and whole minutes. Fetched livefrom the Manager; a 404 means no rotation is configured.
*/
class ProxyIpRotationResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $intervalMinutes Interval between IP rotations, in whole minutes.
    */
    private ?int $intervalMinutes = null;
    
    /**
     * @var int|null $intervalSeconds Interval between IP rotations, in seconds.
    */
    private ?int $intervalSeconds = null;
    
    /**
     * Instantiates a new ProxyIpRotationResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProxyIpRotationResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProxyIpRotationResponse {
        return new ProxyIpRotationResponse();
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
            'intervalMinutes' => fn(ParseNode $n) => $o->setIntervalMinutes($n->getIntegerValue()),
            'intervalSeconds' => fn(ParseNode $n) => $o->setIntervalSeconds($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the intervalMinutes property value. Interval between IP rotations, in whole minutes.
     * @return int|null
    */
    public function getIntervalMinutes(): ?int {
        return $this->intervalMinutes;
    }

    /**
     * Gets the intervalSeconds property value. Interval between IP rotations, in seconds.
     * @return int|null
    */
    public function getIntervalSeconds(): ?int {
        return $this->intervalSeconds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('intervalMinutes', $this->getIntervalMinutes());
        $writer->writeIntegerValue('intervalSeconds', $this->getIntervalSeconds());
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
     * Sets the intervalMinutes property value. Interval between IP rotations, in whole minutes.
     * @param int|null $value Value to set for the intervalMinutes property.
    */
    public function setIntervalMinutes(?int $value): void {
        $this->intervalMinutes = $value;
    }

    /**
     * Sets the intervalSeconds property value. Interval between IP rotations, in seconds.
     * @param int|null $value Value to set for the intervalSeconds property.
    */
    public function setIntervalSeconds(?int $value): void {
        $this->intervalSeconds = $value;
    }

}
