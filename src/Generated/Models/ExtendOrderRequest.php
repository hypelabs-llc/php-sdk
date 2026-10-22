<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Renews an existing order for another billing cycle, optionally on different terms.
*/
class ExtendOrderRequest implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var BillingCycles|null $billingCycle The billingCycle property
    */
    private ?BillingCycles $billingCycle = null;
    
    /**
     * @var PaymentMethods|null $paymentMethod The paymentMethod property
    */
    private ?PaymentMethods $paymentMethod = null;
    
    /**
     * Instantiates a new ExtendOrderRequest and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExtendOrderRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExtendOrderRequest {
        return new ExtendOrderRequest();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the billingCycle property value. The billingCycle property
     * @return BillingCycles|null
    */
    public function getBillingCycle(): ?BillingCycles {
        return $this->billingCycle;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingCycle' => fn(ParseNode $n) => $o->setBillingCycle($n->getEnumValue(BillingCycles::class)),
            'paymentMethod' => fn(ParseNode $n) => $o->setPaymentMethod($n->getEnumValue(PaymentMethods::class)),
        ];
    }

    /**
     * Gets the paymentMethod property value. The paymentMethod property
     * @return PaymentMethods|null
    */
    public function getPaymentMethod(): ?PaymentMethods {
        return $this->paymentMethod;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('billingCycle', $this->getBillingCycle());
        $writer->writeEnumValue('paymentMethod', $this->getPaymentMethod());
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
     * Sets the billingCycle property value. The billingCycle property
     * @param BillingCycles|null $value Value to set for the billingCycle property.
    */
    public function setBillingCycle(?BillingCycles $value): void {
        $this->billingCycle = $value;
    }

    /**
     * Sets the paymentMethod property value. The paymentMethod property
     * @param PaymentMethods|null $value Value to set for the paymentMethod property.
    */
    public function setPaymentMethod(?PaymentMethods $value): void {
        $this->paymentMethod = $value;
    }

}
