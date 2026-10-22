<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Merge-patch of an entity's metadata (RFC 7386 semantics): a present key sets or overwrites its value,    a null value removes the key, and any key not listed is left unchanged.
*/
class PatchMetadataRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var PatchMetadataRequest_metadata|null $metadata Metadata keys to merge: a non-null value is written (overwriting any existing one) and a null value removes the key.
    */
    private ?PatchMetadataRequest_metadata $metadata = null;
    
    /**
     * Instantiates a new PatchMetadataRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PatchMetadataRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PatchMetadataRequest {
        return new PatchMetadataRequest();
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
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([PatchMetadataRequest_metadata::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the metadata property value. Metadata keys to merge: a non-null value is written (overwriting any existing one) and a null value removes the key.
     * @return PatchMetadataRequest_metadata|null
    */
    public function getMetadata(): ?PatchMetadataRequest_metadata {
        return $this->metadata;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('metadata', $this->getMetadata());
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
     * Sets the metadata property value. Metadata keys to merge: a non-null value is written (overwriting any existing one) and a null value removes the key.
     * @param PatchMetadataRequest_metadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?PatchMetadataRequest_metadata $value): void {
        $this->metadata = $value;
    }

}
