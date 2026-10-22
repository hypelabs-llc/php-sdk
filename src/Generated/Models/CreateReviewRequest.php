<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Payload to create a customer review.
*/
class CreateReviewRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $content Body text of the review.
    */
    private ?string $content = null;
    
    /**
     * @var string|null $customAuthorName Display name for the reviewer, overriding the customer name or standing in for an anonymous review.
    */
    private ?string $customAuthorName = null;
    
    /**
     * @var string|null $customerId Identifier of the customer who left the review. Null for anonymous reviews.
    */
    private ?string $customerId = null;
    
    /**
     * @var bool|null $isFeatured Whether the review is highlighted (for example pinned on a landing page). Defaults to false.
    */
    private ?bool $isFeatured = null;
    
    /**
     * @var int|null $rating The star rating, from 1 to 5.
    */
    private ?int $rating = null;
    
    /**
     * Instantiates a new CreateReviewRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateReviewRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateReviewRequest {
        return new CreateReviewRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the content property value. Body text of the review.
     * @return string|null
    */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * Gets the customAuthorName property value. Display name for the reviewer, overriding the customer name or standing in for an anonymous review.
     * @return string|null
    */
    public function getCustomAuthorName(): ?string {
        return $this->customAuthorName;
    }

    /**
     * Gets the customerId property value. Identifier of the customer who left the review. Null for anonymous reviews.
     * @return string|null
    */
    public function getCustomerId(): ?string {
        return $this->customerId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            'customAuthorName' => fn(ParseNode $n) => $o->setCustomAuthorName($n->getStringValue()),
            'customerId' => fn(ParseNode $n) => $o->setCustomerId($n->getStringValue()),
            'isFeatured' => fn(ParseNode $n) => $o->setIsFeatured($n->getBooleanValue()),
            'rating' => fn(ParseNode $n) => $o->setRating($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the isFeatured property value. Whether the review is highlighted (for example pinned on a landing page). Defaults to false.
     * @return bool|null
    */
    public function getIsFeatured(): ?bool {
        return $this->isFeatured;
    }

    /**
     * Gets the rating property value. The star rating, from 1 to 5.
     * @return int|null
    */
    public function getRating(): ?int {
        return $this->rating;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeStringValue('customAuthorName', $this->getCustomAuthorName());
        $writer->writeStringValue('customerId', $this->getCustomerId());
        $writer->writeBooleanValue('isFeatured', $this->getIsFeatured());
        $writer->writeIntegerValue('rating', $this->getRating());
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
     * Sets the content property value. Body text of the review.
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->content = $value;
    }

    /**
     * Sets the customAuthorName property value. Display name for the reviewer, overriding the customer name or standing in for an anonymous review.
     * @param string|null $value Value to set for the customAuthorName property.
    */
    public function setCustomAuthorName(?string $value): void {
        $this->customAuthorName = $value;
    }

    /**
     * Sets the customerId property value. Identifier of the customer who left the review. Null for anonymous reviews.
     * @param string|null $value Value to set for the customerId property.
    */
    public function setCustomerId(?string $value): void {
        $this->customerId = $value;
    }

    /**
     * Sets the isFeatured property value. Whether the review is highlighted (for example pinned on a landing page). Defaults to false.
     * @param bool|null $value Value to set for the isFeatured property.
    */
    public function setIsFeatured(?bool $value): void {
        $this->isFeatured = $value;
    }

    /**
     * Sets the rating property value. The star rating, from 1 to 5.
     * @param int|null $value Value to set for the rating property.
    */
    public function setRating(?int $value): void {
        $this->rating = $value;
    }

}
