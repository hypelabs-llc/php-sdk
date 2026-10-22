<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A review left by one of an organization's customers: review text plus a star rating, owned by and scoped tothe Organization? Review.Organization. Tied to a known Customer? Review.Customer via Guid? Review.CustomerId when thereis one, otherwise left anonymous with a string? Review.CustomAuthorName.
*/
class Review implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $authorName The name to show for the reviewer: the explicit string? Review.CustomAuthorName if set, otherwise    the linked customer's display name or email, falling back to "Anonymous". Requires the customer to be    loaded (see the reads that `Include` it).
    */
    private ?string $authorName = null;
    
    /**
     * @var string|null $content The review text.
    */
    private ?string $content = null;
    
    /**
     * @var string|null $customAuthorName Display name for the reviewer when no customer is tied to the review, or an override of the linked    customer's name. Null falls back to the Customer? Review.Customer's name.
    */
    private ?string $customAuthorName = null;
    
    /**
     * @var string|null $customerId Id of the customer who left the review when it is tied to a known one, or null for anonymous reviews.
    */
    private ?string $customerId = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var bool|null $isFeatured Whether the review is highlighted (e.g. pinned on a landing page). Defaults to false.
    */
    private ?bool $isFeatured = null;
    
    /**
     * @var bool|null $isPending Whether the review awaits moderation: true until approved, and only non-pending reviews show    publicly (rejecting one deletes it).
    */
    private ?bool $isPending = null;
    
    /**
     * @var Review_metadata|null $metadata The metadata property
    */
    private ?Review_metadata $metadata = null;
    
    /**
     * @var int|null $rating The star rating, from 1 to 5.
    */
    private ?int $rating = null;
    
    /**
     * Instantiates a new Review and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Review
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Review {
        return new Review();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the authorName property value. The name to show for the reviewer: the explicit string? Review.CustomAuthorName if set, otherwise    the linked customer's display name or email, falling back to "Anonymous". Requires the customer to be    loaded (see the reads that `Include` it).
     * @return string|null
    */
    public function getAuthorName(): ?string {
        return $this->authorName;
    }

    /**
     * Gets the content property value. The review text.
     * @return string|null
    */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * Gets the customAuthorName property value. Display name for the reviewer when no customer is tied to the review, or an override of the linked    customer's name. Null falls back to the Customer? Review.Customer's name.
     * @return string|null
    */
    public function getCustomAuthorName(): ?string {
        return $this->customAuthorName;
    }

    /**
     * Gets the customerId property value. Id of the customer who left the review when it is tied to a known one, or null for anonymous reviews.
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
            'authorName' => fn(ParseNode $n) => $o->setAuthorName($n->getStringValue()),
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            'customAuthorName' => fn(ParseNode $n) => $o->setCustomAuthorName($n->getStringValue()),
            'customerId' => fn(ParseNode $n) => $o->setCustomerId($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'isFeatured' => fn(ParseNode $n) => $o->setIsFeatured($n->getBooleanValue()),
            'isPending' => fn(ParseNode $n) => $o->setIsPending($n->getBooleanValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([Review_metadata::class, 'createFromDiscriminatorValue'])),
            'rating' => fn(ParseNode $n) => $o->setRating($n->getIntegerValue()),
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
     * Gets the isFeatured property value. Whether the review is highlighted (e.g. pinned on a landing page). Defaults to false.
     * @return bool|null
    */
    public function getIsFeatured(): ?bool {
        return $this->isFeatured;
    }

    /**
     * Gets the isPending property value. Whether the review awaits moderation: true until approved, and only non-pending reviews show    publicly (rejecting one deletes it).
     * @return bool|null
    */
    public function getIsPending(): ?bool {
        return $this->isPending;
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return Review_metadata|null
    */
    public function getMetadata(): ?Review_metadata {
        return $this->metadata;
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
        $writer->writeStringValue('authorName', $this->getAuthorName());
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeStringValue('customAuthorName', $this->getCustomAuthorName());
        $writer->writeStringValue('customerId', $this->getCustomerId());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeBooleanValue('isFeatured', $this->getIsFeatured());
        $writer->writeBooleanValue('isPending', $this->getIsPending());
        $writer->writeObjectValue('metadata', $this->getMetadata());
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
     * Sets the authorName property value. The name to show for the reviewer: the explicit string? Review.CustomAuthorName if set, otherwise    the linked customer's display name or email, falling back to "Anonymous". Requires the customer to be    loaded (see the reads that `Include` it).
     * @param string|null $value Value to set for the authorName property.
    */
    public function setAuthorName(?string $value): void {
        $this->authorName = $value;
    }

    /**
     * Sets the content property value. The review text.
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->content = $value;
    }

    /**
     * Sets the customAuthorName property value. Display name for the reviewer when no customer is tied to the review, or an override of the linked    customer's name. Null falls back to the Customer? Review.Customer's name.
     * @param string|null $value Value to set for the customAuthorName property.
    */
    public function setCustomAuthorName(?string $value): void {
        $this->customAuthorName = $value;
    }

    /**
     * Sets the customerId property value. Id of the customer who left the review when it is tied to a known one, or null for anonymous reviews.
     * @param string|null $value Value to set for the customerId property.
    */
    public function setCustomerId(?string $value): void {
        $this->customerId = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the isFeatured property value. Whether the review is highlighted (e.g. pinned on a landing page). Defaults to false.
     * @param bool|null $value Value to set for the isFeatured property.
    */
    public function setIsFeatured(?bool $value): void {
        $this->isFeatured = $value;
    }

    /**
     * Sets the isPending property value. Whether the review awaits moderation: true until approved, and only non-pending reviews show    publicly (rejecting one deletes it).
     * @param bool|null $value Value to set for the isPending property.
    */
    public function setIsPending(?bool $value): void {
        $this->isPending = $value;
    }

    /**
     * Sets the metadata property value. The metadata property
     * @param Review_metadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?Review_metadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the rating property value. The star rating, from 1 to 5.
     * @param int|null $value Value to set for the rating property.
    */
    public function setRating(?int $value): void {
        $this->rating = $value;
    }

}
