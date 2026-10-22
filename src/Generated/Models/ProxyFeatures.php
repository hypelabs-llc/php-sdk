<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The optional features configured on a proxy. A feature is null when it isn't active.
*/
class ProxyFeatures implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var ProxyIpRotationFeature|null $ipRotation The ipRotation property
    */
    private ?ProxyIpRotationFeature $ipRotation = null;
    
    /**
     * Instantiates a new ProxyFeatures and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProxyFeatures
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProxyFeatures {
        return new ProxyFeatures();
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
            'ipRotation' => fn(ParseNode $n) => $o->setIpRotation($n->getObjectValue([ProxyIpRotationFeature::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the ipRotation property value. The ipRotation property
     * @return ProxyIpRotationFeature|null
    */
    public function getIpRotation(): ?ProxyIpRotationFeature {
        return $this->ipRotation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('ipRotation', $this->getIpRotation());
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
     * Sets the ipRotation property value. The ipRotation property
     * @param ProxyIpRotationFeature|null $value Value to set for the ipRotation property.
    */
    public function setIpRotation(?ProxyIpRotationFeature $value): void {
        $this->ipRotation = $value;
    }

}
