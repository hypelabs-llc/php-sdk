<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Connection details for a proxy an organization owns (one of its allocations).
*/
class Proxy implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var array<CapabilityTypes>|null $capabilities The optional capabilities the proxy exposes (e.g. IPv6, IP scoring).
    */
    private ?array $capabilities = null;
    
    /**
     * @var ProxyDatacenter|null $datacenter The datacenter property
    */
    private ?ProxyDatacenter $datacenter = null;
    
    /**
     * @var ProxyFeatures|null $features The optional features configured on the proxy (IP rotation, ...).
    */
    private ?ProxyFeatures $features = null;
    
    /**
     * @var string|null $host Hostname to connect to, with the reseller-facing datacenter label (e.g. `fr3.acme.com`).
    */
    private ?string $host = null;
    
    /**
     * @var string|null $id Identifier of the proxy.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $ip Resolved IP address.
    */
    private ?string $ip = null;
    
    /**
     * @var ProxyIsp|null $isp The isp property
    */
    private ?ProxyIsp $isp = null;
    
    /**
     * @var ProxyLocation|null $location The location property
    */
    private ?ProxyLocation $location = null;
    
    /**
     * @var string|null $note The organization's free-form note for this proxy, when it has annotated it.
    */
    private ?string $note = null;
    
    /**
     * @var int|null $port Connection port.
    */
    private ?int $port = null;
    
    /**
     * @var ProxyProduct|null $product The product property
    */
    private ?ProxyProduct $product = null;
    
    /**
     * @var array<string>|null $tags The organization's tags for this proxy (empty when none).
    */
    private ?array $tags = null;
    
    /**
     * Instantiates a new Proxy and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Proxy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Proxy {
        return new Proxy();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the capabilities property value. The optional capabilities the proxy exposes (e.g. IPv6, IP scoring).
     * @return array<CapabilityTypes>|null
    */
    public function getCapabilities(): ?array {
        return $this->capabilities;
    }

    /**
     * Gets the datacenter property value. The datacenter property
     * @return ProxyDatacenter|null
    */
    public function getDatacenter(): ?ProxyDatacenter {
        return $this->datacenter;
    }

    /**
     * Gets the features property value. The optional features configured on the proxy (IP rotation, ...).
     * @return ProxyFeatures|null
    */
    public function getFeatures(): ?ProxyFeatures {
        return $this->features;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getCollectionOfEnumValues(CapabilityTypes::class)),
            'datacenter' => fn(ParseNode $n) => $o->setDatacenter($n->getObjectValue([ProxyDatacenter::class, 'createFromDiscriminatorValue'])),
            'features' => fn(ParseNode $n) => $o->setFeatures($n->getObjectValue([ProxyFeatures::class, 'createFromDiscriminatorValue'])),
            'host' => fn(ParseNode $n) => $o->setHost($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'ip' => fn(ParseNode $n) => $o->setIp($n->getStringValue()),
            'isp' => fn(ParseNode $n) => $o->setIsp($n->getObjectValue([ProxyIsp::class, 'createFromDiscriminatorValue'])),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([ProxyLocation::class, 'createFromDiscriminatorValue'])),
            'note' => fn(ParseNode $n) => $o->setNote($n->getStringValue()),
            'port' => fn(ParseNode $n) => $o->setPort($n->getIntegerValue()),
            'product' => fn(ParseNode $n) => $o->setProduct($n->getObjectValue([ProxyProduct::class, 'createFromDiscriminatorValue'])),
            'tags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTags($val);
            },
        ];
    }

    /**
     * Gets the host property value. Hostname to connect to, with the reseller-facing datacenter label (e.g. `fr3.acme.com`).
     * @return string|null
    */
    public function getHost(): ?string {
        return $this->host;
    }

    /**
     * Gets the id property value. Identifier of the proxy.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the ip property value. Resolved IP address.
     * @return string|null
    */
    public function getIp(): ?string {
        return $this->ip;
    }

    /**
     * Gets the isp property value. The isp property
     * @return ProxyIsp|null
    */
    public function getIsp(): ?ProxyIsp {
        return $this->isp;
    }

    /**
     * Gets the location property value. The location property
     * @return ProxyLocation|null
    */
    public function getLocation(): ?ProxyLocation {
        return $this->location;
    }

    /**
     * Gets the note property value. The organization's free-form note for this proxy, when it has annotated it.
     * @return string|null
    */
    public function getNote(): ?string {
        return $this->note;
    }

    /**
     * Gets the port property value. Connection port.
     * @return int|null
    */
    public function getPort(): ?int {
        return $this->port;
    }

    /**
     * Gets the product property value. The product property
     * @return ProxyProduct|null
    */
    public function getProduct(): ?ProxyProduct {
        return $this->product;
    }

    /**
     * Gets the tags property value. The organization's tags for this proxy (empty when none).
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->tags;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfEnumValues('capabilities', $this->getCapabilities());
        $writer->writeObjectValue('datacenter', $this->getDatacenter());
        $writer->writeObjectValue('features', $this->getFeatures());
        $writer->writeStringValue('host', $this->getHost());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('ip', $this->getIp());
        $writer->writeObjectValue('isp', $this->getIsp());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeStringValue('note', $this->getNote());
        $writer->writeIntegerValue('port', $this->getPort());
        $writer->writeObjectValue('product', $this->getProduct());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
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
     * Sets the capabilities property value. The optional capabilities the proxy exposes (e.g. IPv6, IP scoring).
     * @param array<CapabilityTypes>|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?array $value): void {
        $this->capabilities = $value;
    }

    /**
     * Sets the datacenter property value. The datacenter property
     * @param ProxyDatacenter|null $value Value to set for the datacenter property.
    */
    public function setDatacenter(?ProxyDatacenter $value): void {
        $this->datacenter = $value;
    }

    /**
     * Sets the features property value. The optional features configured on the proxy (IP rotation, ...).
     * @param ProxyFeatures|null $value Value to set for the features property.
    */
    public function setFeatures(?ProxyFeatures $value): void {
        $this->features = $value;
    }

    /**
     * Sets the host property value. Hostname to connect to, with the reseller-facing datacenter label (e.g. `fr3.acme.com`).
     * @param string|null $value Value to set for the host property.
    */
    public function setHost(?string $value): void {
        $this->host = $value;
    }

    /**
     * Sets the id property value. Identifier of the proxy.
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the ip property value. Resolved IP address.
     * @param string|null $value Value to set for the ip property.
    */
    public function setIp(?string $value): void {
        $this->ip = $value;
    }

    /**
     * Sets the isp property value. The isp property
     * @param ProxyIsp|null $value Value to set for the isp property.
    */
    public function setIsp(?ProxyIsp $value): void {
        $this->isp = $value;
    }

    /**
     * Sets the location property value. The location property
     * @param ProxyLocation|null $value Value to set for the location property.
    */
    public function setLocation(?ProxyLocation $value): void {
        $this->location = $value;
    }

    /**
     * Sets the note property value. The organization's free-form note for this proxy, when it has annotated it.
     * @param string|null $value Value to set for the note property.
    */
    public function setNote(?string $value): void {
        $this->note = $value;
    }

    /**
     * Sets the port property value. Connection port.
     * @param int|null $value Value to set for the port property.
    */
    public function setPort(?int $value): void {
        $this->port = $value;
    }

    /**
     * Sets the product property value. The product property
     * @param ProxyProduct|null $value Value to set for the product property.
    */
    public function setProduct(?ProxyProduct $value): void {
        $this->product = $value;
    }

    /**
     * Sets the tags property value. The organization's tags for this proxy (empty when none).
     * @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->tags = $value;
    }

}
