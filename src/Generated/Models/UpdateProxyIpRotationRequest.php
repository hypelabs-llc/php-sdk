<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Request to configure a proxy's IP rotation. An interval of 0 disables rotation.
*/
class UpdateProxyIpRotationRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var int|null $intervalSeconds How often the proxy rotates its IP, in seconds. 0 disables rotation.
    */
    private ?int $intervalSeconds = null;
    
    /**
     * Instantiates a new UpdateProxyIpRotationRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateProxyIpRotationRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateProxyIpRotationRequest {
        return new UpdateProxyIpRotationRequest();
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
            'intervalSeconds' => fn(ParseNode $n) => $o->setIntervalSeconds($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the intervalSeconds property value. How often the proxy rotates its IP, in seconds. 0 disables rotation.
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
     * Sets the intervalSeconds property value. How often the proxy rotates its IP, in seconds. 0 disables rotation.
     * @param int|null $value Value to set for the intervalSeconds property.
    */
    public function setIntervalSeconds(?int $value): void {
        $this->intervalSeconds = $value;
    }

}
