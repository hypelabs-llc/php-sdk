<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Feature options for an inventory proxy: settings toggled on the proxy, such as the resolution mode. There is noproxy table (proxies live in the Manager), so this references the proxy by id only; at most one options row perproxy. Options that need a capability are only valid on a proxy exposing it.
*/
class ProxyOptions implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var ProxyOptions_metadata|null $metadata The metadata property
    */
    private ?ProxyOptions_metadata $metadata = null;
    
    /**
     * @var string|null $proxyId The inventory proxy these options are about. No foreign key: proxies aren't stored locally.
    */
    private ?string $proxyId = null;
    
    /**
     * @var ResolutionModes|null $resolutionMode How the proxy resolves addresses. The non-default modes need the proxy's IPv6 capability.
    */
    private ?ResolutionModes $resolutionMode = null;
    
    /**
     * Instantiates a new ProxyOptions and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProxyOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProxyOptions {
        return new ProxyOptions();
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
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([ProxyOptions_metadata::class, 'createFromDiscriminatorValue'])),
            'proxyId' => fn(ParseNode $n) => $o->setProxyId($n->getStringValue()),
            'resolutionMode' => fn(ParseNode $n) => $o->setResolutionMode($n->getEnumValue(ResolutionModes::class)),
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
     * Gets the metadata property value. The metadata property
     * @return ProxyOptions_metadata|null
    */
    public function getMetadata(): ?ProxyOptions_metadata {
        return $this->metadata;
    }

    /**
     * Gets the proxyId property value. The inventory proxy these options are about. No foreign key: proxies aren't stored locally.
     * @return string|null
    */
    public function getProxyId(): ?string {
        return $this->proxyId;
    }

    /**
     * Gets the resolutionMode property value. How the proxy resolves addresses. The non-default modes need the proxy's IPv6 capability.
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
        $writer->writeStringValue('id', $this->getId());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('proxyId', $this->getProxyId());
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
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the metadata property value. The metadata property
     * @param ProxyOptions_metadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?ProxyOptions_metadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the proxyId property value. The inventory proxy these options are about. No foreign key: proxies aren't stored locally.
     * @param string|null $value Value to set for the proxyId property.
    */
    public function setProxyId(?string $value): void {
        $this->proxyId = $value;
    }

    /**
     * Sets the resolutionMode property value. How the proxy resolves addresses. The non-default modes need the proxy's IPv6 capability.
     * @param ResolutionModes|null $value Value to set for the resolutionMode property.
    */
    public function setResolutionMode(?ResolutionModes $value): void {
        $this->resolutionMode = $value;
    }

}
