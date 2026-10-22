<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Identity attested by Telegram after a customer started the organization's bot. The Telegram user id is trustedas-is (Telegram authenticates it; it cannot be forged), and the Connect API resolves the customer alreadylinked to it. No customer is created here: the link is established elsewhere, by a signed-in customer addingtheir Telegram account, so an unlinked user is rejected rather than silently given a fresh account.
*/
class AuthenticateCustomerTelegramRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $telegramUserId The Telegram user id (the person's `from.id`) of the account talking to the bot, as the Bot API    reports it.
    */
    private ?string $telegramUserId = null;
    
    /**
     * Instantiates a new AuthenticateCustomerTelegramRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticateCustomerTelegramRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticateCustomerTelegramRequest {
        return new AuthenticateCustomerTelegramRequest();
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
            'telegramUserId' => fn(ParseNode $n) => $o->setTelegramUserId($n->getStringValue()),
        ];
    }

    /**
     * Gets the telegramUserId property value. The Telegram user id (the person's `from.id`) of the account talking to the bot, as the Bot API    reports it.
     * @return string|null
    */
    public function getTelegramUserId(): ?string {
        return $this->telegramUserId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('telegramUserId', $this->getTelegramUserId());
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
     * Sets the telegramUserId property value. The Telegram user id (the person's `from.id`) of the account talking to the bot, as the Bot API    reports it.
     * @param string|null $value Value to set for the telegramUserId property.
    */
    public function setTelegramUserId(?string $value): void {
        $this->telegramUserId = $value;
    }

}
