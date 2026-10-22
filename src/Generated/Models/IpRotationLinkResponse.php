<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A self-contained IP rotation link for a proxy: the raw token plus the ready-to-use link.
*/
class IpRotationLinkResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $link The IP rotation link served on the organization's IP rotation domain (its own, or the default).
    */
    private ?string $link = null;
    
    /**
     * @var string|null $token The IP rotation token (a protected customer id). Use it to build your own link if needed.
    */
    private ?string $token = null;
    
    /**
     * Instantiates a new IpRotationLinkResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IpRotationLinkResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IpRotationLinkResponse {
        return new IpRotationLinkResponse();
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
            'link' => fn(ParseNode $n) => $o->setLink($n->getStringValue()),
            'token' => fn(ParseNode $n) => $o->setToken($n->getStringValue()),
        ];
    }

    /**
     * Gets the link property value. The IP rotation link served on the organization's IP rotation domain (its own, or the default).
     * @return string|null
    */
    public function getLink(): ?string {
        return $this->link;
    }

    /**
     * Gets the token property value. The IP rotation token (a protected customer id). Use it to build your own link if needed.
     * @return string|null
    */
    public function getToken(): ?string {
        return $this->token;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('link', $this->getLink());
        $writer->writeStringValue('token', $this->getToken());
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
     * Sets the link property value. The IP rotation link served on the organization's IP rotation domain (its own, or the default).
     * @param string|null $value Value to set for the link property.
    */
    public function setLink(?string $value): void {
        $this->link = $value;
    }

    /**
     * Sets the token property value. The IP rotation token (a protected customer id). Use it to build your own link if needed.
     * @param string|null $value Value to set for the token property.
    */
    public function setToken(?string $value): void {
        $this->token = $value;
    }

}
