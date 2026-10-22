<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * One line of an Order? OrderItem.Order: a product bought in a given quantity, with the resources delivered for it.
*/
class OrderItem implements AdditionalDataHolder, Parsable 
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
     * @var ProductKinds|null $kind Kind of resource this line's product delivers (proxy or host).
    */
    private ?ProductKinds $kind = null;
    
    /**
     * @var OrderItem_metadata|null $metadata The metadata property
    */
    private ?OrderItem_metadata $metadata = null;
    
    /**
     * @var string|null $productId Identifier of the product this line orders.
    */
    private ?string $productId = null;
    
    /**
     * @var array<string>|null $resourceIds Identifiers of the resources delivered for this line (proxy ids today), resolved against the cached stock. Null until the order is placed and its resources are provisioned.
    */
    private ?array $resourceIds = null;
    
    /**
     * Instantiates a new OrderItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrderItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrderItem {
        return new OrderItem();
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
            'kind' => fn(ParseNode $n) => $o->setKind($n->getEnumValue(ProductKinds::class)),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([OrderItem_metadata::class, 'createFromDiscriminatorValue'])),
            'productId' => fn(ParseNode $n) => $o->setProductId($n->getStringValue()),
            'resourceIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setResourceIds($val);
            },
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
     * Gets the kind property value. Kind of resource this line's product delivers (proxy or host).
     * @return ProductKinds|null
    */
    public function getKind(): ?ProductKinds {
        return $this->kind;
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return OrderItem_metadata|null
    */
    public function getMetadata(): ?OrderItem_metadata {
        return $this->metadata;
    }

    /**
     * Gets the productId property value. Identifier of the product this line orders.
     * @return string|null
    */
    public function getProductId(): ?string {
        return $this->productId;
    }

    /**
     * Gets the resourceIds property value. Identifiers of the resources delivered for this line (proxy ids today), resolved against the cached stock. Null until the order is placed and its resources are provisioned.
     * @return array<string>|null
    */
    public function getResourceIds(): ?array {
        return $this->resourceIds;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->getId());
        $writer->writeEnumValue('kind', $this->getKind());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeStringValue('productId', $this->getProductId());
        $writer->writeCollectionOfPrimitiveValues('resourceIds', $this->getResourceIds());
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
     * Sets the kind property value. Kind of resource this line's product delivers (proxy or host).
     * @param ProductKinds|null $value Value to set for the kind property.
    */
    public function setKind(?ProductKinds $value): void {
        $this->kind = $value;
    }

    /**
     * Sets the metadata property value. The metadata property
     * @param OrderItem_metadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?OrderItem_metadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the productId property value. Identifier of the product this line orders.
     * @param string|null $value Value to set for the productId property.
    */
    public function setProductId(?string $value): void {
        $this->productId = $value;
    }

    /**
     * Sets the resourceIds property value. Identifiers of the resources delivered for this line (proxy ids today), resolved against the cached stock. Null until the order is placed and its resources are provisioned.
     * @param array<string>|null $value Value to set for the resourceIds property.
    */
    public function setResourceIds(?array $value): void {
        $this->resourceIds = $value;
    }

}
