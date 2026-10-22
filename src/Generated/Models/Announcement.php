<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A promotional card shown to organizations in the dashboard: a headline with an optional image, body and link.Only AnnouncementStatuses.Published ones are shown, most recent first.
*/
class Announcement implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $body Body text of the announcement, shown under the title.
    */
    private ?string $body = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var string|null $imageUrl URL of the image displayed on the card.
    */
    private ?string $imageUrl = null;
    
    /**
     * @var bool|null $isLive True when the announcement is published and currently visible.
    */
    private ?bool $isLive = null;
    
    /**
     * @var string|null $linkLabel Label of the link's call-to-action button (e.g. "Learn more").
    */
    private ?string $linkLabel = null;
    
    /**
     * @var string|null $linkUrl Destination URL opened when the card is clicked.
    */
    private ?string $linkUrl = null;
    
    /**
     * @var Announcement_metadata|null $metadata The metadata property
    */
    private ?Announcement_metadata $metadata = null;
    
    /**
     * @var AnnouncementStatuses|null $status Publication state of the announcement: only Published ones are shown.
    */
    private ?AnnouncementStatuses $status = null;
    
    /**
     * @var string|null $title Headline displayed at the top of the card.
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new Announcement and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Announcement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Announcement {
        return new Announcement();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the body property value. Body text of the announcement, shown under the title.
     * @return string|null
    */
    public function getBody(): ?string {
        return $this->body;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'body' => fn(ParseNode $n) => $o->setBody($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'imageUrl' => fn(ParseNode $n) => $o->setImageUrl($n->getStringValue()),
            'isLive' => fn(ParseNode $n) => $o->setIsLive($n->getBooleanValue()),
            'linkLabel' => fn(ParseNode $n) => $o->setLinkLabel($n->getStringValue()),
            'linkUrl' => fn(ParseNode $n) => $o->setLinkUrl($n->getStringValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([Announcement_metadata::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(AnnouncementStatuses::class)),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
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
     * Gets the imageUrl property value. URL of the image displayed on the card.
     * @return string|null
    */
    public function getImageUrl(): ?string {
        return $this->imageUrl;
    }

    /**
     * Gets the isLive property value. True when the announcement is published and currently visible.
     * @return bool|null
    */
    public function getIsLive(): ?bool {
        return $this->isLive;
    }

    /**
     * Gets the linkLabel property value. Label of the link's call-to-action button (e.g. "Learn more").
     * @return string|null
    */
    public function getLinkLabel(): ?string {
        return $this->linkLabel;
    }

    /**
     * Gets the linkUrl property value. Destination URL opened when the card is clicked.
     * @return string|null
    */
    public function getLinkUrl(): ?string {
        return $this->linkUrl;
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return Announcement_metadata|null
    */
    public function getMetadata(): ?Announcement_metadata {
        return $this->metadata;
    }

    /**
     * Gets the status property value. Publication state of the announcement: only Published ones are shown.
     * @return AnnouncementStatuses|null
    */
    public function getStatus(): ?AnnouncementStatuses {
        return $this->status;
    }

    /**
     * Gets the title property value. Headline displayed at the top of the card.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('body', $this->getBody());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('imageUrl', $this->getImageUrl());
        $writer->writeBooleanValue('isLive', $this->getIsLive());
        $writer->writeStringValue('linkLabel', $this->getLinkLabel());
        $writer->writeStringValue('linkUrl', $this->getLinkUrl());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('title', $this->getTitle());
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
     * Sets the body property value. Body text of the announcement, shown under the title.
     * @param string|null $value Value to set for the body property.
    */
    public function setBody(?string $value): void {
        $this->body = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the imageUrl property value. URL of the image displayed on the card.
     * @param string|null $value Value to set for the imageUrl property.
    */
    public function setImageUrl(?string $value): void {
        $this->imageUrl = $value;
    }

    /**
     * Sets the isLive property value. True when the announcement is published and currently visible.
     * @param bool|null $value Value to set for the isLive property.
    */
    public function setIsLive(?bool $value): void {
        $this->isLive = $value;
    }

    /**
     * Sets the linkLabel property value. Label of the link's call-to-action button (e.g. "Learn more").
     * @param string|null $value Value to set for the linkLabel property.
    */
    public function setLinkLabel(?string $value): void {
        $this->linkLabel = $value;
    }

    /**
     * Sets the linkUrl property value. Destination URL opened when the card is clicked.
     * @param string|null $value Value to set for the linkUrl property.
    */
    public function setLinkUrl(?string $value): void {
        $this->linkUrl = $value;
    }

    /**
     * Sets the metadata property value. The metadata property
     * @param Announcement_metadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?Announcement_metadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the status property value. Publication state of the announcement: only Published ones are shown.
     * @param AnnouncementStatuses|null $value Value to set for the status property.
    */
    public function setStatus(?AnnouncementStatuses $value): void {
        $this->status = $value;
    }

    /**
     * Sets the title property value. Headline displayed at the top of the card.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->title = $value;
    }

}
