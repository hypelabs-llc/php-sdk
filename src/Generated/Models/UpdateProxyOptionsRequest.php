<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The feature options to set on a proxy. A non-default option is only accepted when the proxy exposes    the capability it depends on (see ProxyOptions).
*/
class UpdateProxyOptionsRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var ResolutionModes|null $resolutionMode How the proxy resolves addresses. Non-default modes require the proxy's IPv6 capability.
    */
    private ?ResolutionModes $resolutionMode = null;
    
    /**
     * Instantiates a new UpdateProxyOptionsRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateProxyOptionsRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateProxyOptionsRequest {
        return new UpdateProxyOptionsRequest();
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
            'resolutionMode' => fn(ParseNode $n) => $o->setResolutionMode($n->getEnumValue(ResolutionModes::class)),
        ];
    }

    /**
     * Gets the resolutionMode property value. How the proxy resolves addresses. Non-default modes require the proxy's IPv6 capability.
     * @return ResolutionModes|null
    */
    public function getResolutionMode(): ?ResolutionModes {
        return $this->resolutionMode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('resolutionMode', $this->getResolutionMode());
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
     * Sets the resolutionMode property value. How the proxy resolves addresses. Non-default modes require the proxy's IPv6 capability.
     * @param ResolutionModes|null $value Value to set for the resolutionMode property.
    */
    public function setResolutionMode(?ResolutionModes $value): void {
        $this->resolutionMode = $value;
    }

}
