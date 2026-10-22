<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * An order placed by an organization, owning its lifecycle: the products it holds (its ICollection&lt;OrderItem&gt; Order.Items),its expiry and its payment link. Live status (active, grace, expired) is computed from DateTimeOffset? Order.ExpiresAtand the organization's grace policy rather than stored.
*/
class Order implements AdditionalDataHolder, Parsable 
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
     * @var string|null $customerId Organization's own end user the order belongs to, if any.
    */
    private ?string $customerId = null;
    
    /**
     * @var DateTime|null $expiresAt When the order expires. Persisted so the status can be computed from it without a background worker.
    */
    private ?DateTime $expiresAt = null;
    
    /**
     * @var string|null $externalReference The caller's own reference for this order, unique within its organization when set. Makes creation    idempotent: a retry with the same reference returns this order instead of placing a duplicate.
    */
    private ?string $externalReference = null;
    
    /**
     * @var string|null $id The id property
    */
    private ?string $id = null;
    
    /**
     * @var OrderIntents|null $intent Why the order was placed: wholesale (the organization buying for itself, on our platform account) or    retail (reselling to its own customer, on its connected account). Persisted so later actions — cancellation,    refund — resolve the same Stripe account the order settled on, instead of re-deriving it from the request.
    */
    private ?OrderIntents $intent = null;
    
    /**
     * @var bool|null $isActive Whether the order is still live and holding its proxies: Active, or in its post-expiry grace window.    Every other state (pending, provisioning, expired, deleted) does not.
    */
    private ?bool $isActive = null;
    
    /**
     * @var bool|null $isAutoRenew Recurring subscription (true) or one-shot payment (false). Does not drive expiry: it sets what the    customer is told and lets reconciliation skip one-shot orders.
    */
    private ?bool $isAutoRenew = null;
    
    /**
     * @var bool|null $isExpiringSoon Whether the order needs attention soon: in its grace period, or expiring within a week. An    auto-renewing order is never flagged, as it renews itself rather than lapsing, and neither is a trial, which    is meant to expire.
    */
    private ?bool $isExpiringSoon = null;
    
    /**
     * @var bool|null $isInactive Whether the order no longer holds its proxies, having handed them back to the stock for a new order:    once it is Expired or Deleted. The counterpart of bool Order.IsActive for stock; a never-provisioned order    (Pending, Provisioning) sits between the two and frees nothing.
    */
    private ?bool $isInactive = null;
    
    /**
     * @var bool|null $isTrial Whether the order is a trial.
    */
    private ?bool $isTrial = null;
    
    /**
     * @var array<OrderItem>|null $items Line items the order is made of, one per product bought. Each item carries its product, quantity and    the resources delivered for it.
    */
    private ?array $items = null;
    
    /**
     * @var string|null $lastSettlementReference Reference of the last settlement already applied to this order, provider-prefixed (e.g.    `stripe:in_...`, `nowpayments:...`). Webhooks are delivered at least once, so a renewal that carries    this same reference has already been applied and is skipped, keeping a redelivered payment from adding a cycle    twice. Provider-agnostic so it covers every settlement source, current and future.
    */
    private ?string $lastSettlementReference = null;
    
    /**
     * @var string|null $lastTransactionId The `BalanceTransaction` that last paid this order from the organization's balance (its creation or    its most recent extension). Lets a refund credit back exactly that payment without re-deriving its amount. Null    for orders paid through a processor (Stripe, crypto) or for trials.
    */
    private ?string $lastTransactionId = null;
    
    /**
     * @var Order_metadata|null $metadata The metadata property
    */
    private ?Order_metadata $metadata = null;
    
    /**
     * @var PaymentMethods|null $paymentMethod The paymentMethod property
    */
    private ?PaymentMethods $paymentMethod = null;
    
    /**
     * @var PaymentProcessors|null $paymentProcessor The paymentProcessor property
    */
    private ?PaymentProcessors $paymentProcessor = null;
    
    /**
     * @var string|null $processorReference Opaque handle at the processor (a Stripe `sub_...` or `pi_...`, a Heleket reference).
    */
    private ?string $processorReference = null;
    
    /**
     * @var int|null $quantity Total units ordered, summed over the items' quantities and not stored. Requires ICollection&lt;OrderItem&gt; Order.Items    to be loaded.
    */
    private ?int $quantity = null;
    
    /**
     * @var OrderStatuses|null $status Commercial state of the order. Stored as the source of truth for states that aren't derivable from    the dates (`Provisioning`, `Expired` once a worker confirms it, and later cancellations or holds).    The transient `GracePeriod` is layered on at read time by `ResolveStatus` from DateTimeOffset? Order.ExpiresAt    and the organization's grace policy. Defaults to `Pending` (nothing paid or set up yet); each flow sets    the real state through the transition helpers.
    */
    private ?OrderStatuses $status = null;
    
    /**
     * Instantiates a new Order and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Order
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Order {
        return new Order();
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
     * Gets the customerId property value. Organization's own end user the order belongs to, if any.
     * @return string|null
    */
    public function getCustomerId(): ?string {
        return $this->customerId;
    }

    /**
     * Gets the expiresAt property value. When the order expires. Persisted so the status can be computed from it without a background worker.
     * @return DateTime|null
    */
    public function getExpiresAt(): ?DateTime {
        return $this->expiresAt;
    }

    /**
     * Gets the externalReference property value. The caller's own reference for this order, unique within its organization when set. Makes creation    idempotent: a retry with the same reference returns this order instead of placing a duplicate.
     * @return string|null
    */
    public function getExternalReference(): ?string {
        return $this->externalReference;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'billingCycle' => fn(ParseNode $n) => $o->setBillingCycle($n->getEnumValue(BillingCycles::class)),
            'customerId' => fn(ParseNode $n) => $o->setCustomerId($n->getStringValue()),
            'expiresAt' => fn(ParseNode $n) => $o->setExpiresAt($n->getDateTimeValue()),
            'externalReference' => fn(ParseNode $n) => $o->setExternalReference($n->getStringValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            'intent' => fn(ParseNode $n) => $o->setIntent($n->getEnumValue(OrderIntents::class)),
            'isActive' => fn(ParseNode $n) => $o->setIsActive($n->getBooleanValue()),
            'isAutoRenew' => fn(ParseNode $n) => $o->setIsAutoRenew($n->getBooleanValue()),
            'isExpiringSoon' => fn(ParseNode $n) => $o->setIsExpiringSoon($n->getBooleanValue()),
            'isInactive' => fn(ParseNode $n) => $o->setIsInactive($n->getBooleanValue()),
            'isTrial' => fn(ParseNode $n) => $o->setIsTrial($n->getBooleanValue()),
            'items' => fn(ParseNode $n) => $o->setItems($n->getCollectionOfObjectValues([OrderItem::class, 'createFromDiscriminatorValue'])),
            'lastSettlementReference' => fn(ParseNode $n) => $o->setLastSettlementReference($n->getStringValue()),
            'lastTransactionId' => fn(ParseNode $n) => $o->setLastTransactionId($n->getStringValue()),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getObjectValue([Order_metadata::class, 'createFromDiscriminatorValue'])),
            'paymentMethod' => fn(ParseNode $n) => $o->setPaymentMethod($n->getEnumValue(PaymentMethods::class)),
            'paymentProcessor' => fn(ParseNode $n) => $o->setPaymentProcessor($n->getEnumValue(PaymentProcessors::class)),
            'processorReference' => fn(ParseNode $n) => $o->setProcessorReference($n->getStringValue()),
            'quantity' => fn(ParseNode $n) => $o->setQuantity($n->getIntegerValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(OrderStatuses::class)),
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
     * Gets the intent property value. Why the order was placed: wholesale (the organization buying for itself, on our platform account) or    retail (reselling to its own customer, on its connected account). Persisted so later actions — cancellation,    refund — resolve the same Stripe account the order settled on, instead of re-deriving it from the request.
     * @return OrderIntents|null
    */
    public function getIntent(): ?OrderIntents {
        return $this->intent;
    }

    /**
     * Gets the isActive property value. Whether the order is still live and holding its proxies: Active, or in its post-expiry grace window.    Every other state (pending, provisioning, expired, deleted) does not.
     * @return bool|null
    */
    public function getIsActive(): ?bool {
        return $this->isActive;
    }

    /**
     * Gets the isAutoRenew property value. Recurring subscription (true) or one-shot payment (false). Does not drive expiry: it sets what the    customer is told and lets reconciliation skip one-shot orders.
     * @return bool|null
    */
    public function getIsAutoRenew(): ?bool {
        return $this->isAutoRenew;
    }

    /**
     * Gets the isExpiringSoon property value. Whether the order needs attention soon: in its grace period, or expiring within a week. An    auto-renewing order is never flagged, as it renews itself rather than lapsing, and neither is a trial, which    is meant to expire.
     * @return bool|null
    */
    public function getIsExpiringSoon(): ?bool {
        return $this->isExpiringSoon;
    }

    /**
     * Gets the isInactive property value. Whether the order no longer holds its proxies, having handed them back to the stock for a new order:    once it is Expired or Deleted. The counterpart of bool Order.IsActive for stock; a never-provisioned order    (Pending, Provisioning) sits between the two and frees nothing.
     * @return bool|null
    */
    public function getIsInactive(): ?bool {
        return $this->isInactive;
    }

    /**
     * Gets the isTrial property value. Whether the order is a trial.
     * @return bool|null
    */
    public function getIsTrial(): ?bool {
        return $this->isTrial;
    }

    /**
     * Gets the items property value. Line items the order is made of, one per product bought. Each item carries its product, quantity and    the resources delivered for it.
     * @return array<OrderItem>|null
    */
    public function getItems(): ?array {
        return $this->items;
    }

    /**
     * Gets the lastSettlementReference property value. Reference of the last settlement already applied to this order, provider-prefixed (e.g.    `stripe:in_...`, `nowpayments:...`). Webhooks are delivered at least once, so a renewal that carries    this same reference has already been applied and is skipped, keeping a redelivered payment from adding a cycle    twice. Provider-agnostic so it covers every settlement source, current and future.
     * @return string|null
    */
    public function getLastSettlementReference(): ?string {
        return $this->lastSettlementReference;
    }

    /**
     * Gets the lastTransactionId property value. The `BalanceTransaction` that last paid this order from the organization's balance (its creation or    its most recent extension). Lets a refund credit back exactly that payment without re-deriving its amount. Null    for orders paid through a processor (Stripe, crypto) or for trials.
     * @return string|null
    */
    public function getLastTransactionId(): ?string {
        return $this->lastTransactionId;
    }

    /**
     * Gets the metadata property value. The metadata property
     * @return Order_metadata|null
    */
    public function getMetadata(): ?Order_metadata {
        return $this->metadata;
    }

    /**
     * Gets the paymentMethod property value. The paymentMethod property
     * @return PaymentMethods|null
    */
    public function getPaymentMethod(): ?PaymentMethods {
        return $this->paymentMethod;
    }

    /**
     * Gets the paymentProcessor property value. The paymentProcessor property
     * @return PaymentProcessors|null
    */
    public function getPaymentProcessor(): ?PaymentProcessors {
        return $this->paymentProcessor;
    }

    /**
     * Gets the processorReference property value. Opaque handle at the processor (a Stripe `sub_...` or `pi_...`, a Heleket reference).
     * @return string|null
    */
    public function getProcessorReference(): ?string {
        return $this->processorReference;
    }

    /**
     * Gets the quantity property value. Total units ordered, summed over the items' quantities and not stored. Requires ICollection&lt;OrderItem&gt; Order.Items    to be loaded.
     * @return int|null
    */
    public function getQuantity(): ?int {
        return $this->quantity;
    }

    /**
     * Gets the status property value. Commercial state of the order. Stored as the source of truth for states that aren't derivable from    the dates (`Provisioning`, `Expired` once a worker confirms it, and later cancellations or holds).    The transient `GracePeriod` is layered on at read time by `ResolveStatus` from DateTimeOffset? Order.ExpiresAt    and the organization's grace policy. Defaults to `Pending` (nothing paid or set up yet); each flow sets    the real state through the transition helpers.
     * @return OrderStatuses|null
    */
    public function getStatus(): ?OrderStatuses {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('billingCycle', $this->getBillingCycle());
        $writer->writeStringValue('customerId', $this->getCustomerId());
        $writer->writeDateTimeValue('expiresAt', $this->getExpiresAt());
        $writer->writeStringValue('externalReference', $this->getExternalReference());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeEnumValue('intent', $this->getIntent());
        $writer->writeBooleanValue('isActive', $this->getIsActive());
        $writer->writeBooleanValue('isAutoRenew', $this->getIsAutoRenew());
        $writer->writeBooleanValue('isExpiringSoon', $this->getIsExpiringSoon());
        $writer->writeBooleanValue('isInactive', $this->getIsInactive());
        $writer->writeBooleanValue('isTrial', $this->getIsTrial());
        $writer->writeCollectionOfObjectValues('items', $this->getItems());
        $writer->writeStringValue('lastSettlementReference', $this->getLastSettlementReference());
        $writer->writeStringValue('lastTransactionId', $this->getLastTransactionId());
        $writer->writeObjectValue('metadata', $this->getMetadata());
        $writer->writeEnumValue('paymentMethod', $this->getPaymentMethod());
        $writer->writeEnumValue('paymentProcessor', $this->getPaymentProcessor());
        $writer->writeStringValue('processorReference', $this->getProcessorReference());
        $writer->writeIntegerValue('quantity', $this->getQuantity());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the customerId property value. Organization's own end user the order belongs to, if any.
     * @param string|null $value Value to set for the customerId property.
    */
    public function setCustomerId(?string $value): void {
        $this->customerId = $value;
    }

    /**
     * Sets the expiresAt property value. When the order expires. Persisted so the status can be computed from it without a background worker.
     * @param DateTime|null $value Value to set for the expiresAt property.
    */
    public function setExpiresAt(?DateTime $value): void {
        $this->expiresAt = $value;
    }

    /**
     * Sets the externalReference property value. The caller's own reference for this order, unique within its organization when set. Makes creation    idempotent: a retry with the same reference returns this order instead of placing a duplicate.
     * @param string|null $value Value to set for the externalReference property.
    */
    public function setExternalReference(?string $value): void {
        $this->externalReference = $value;
    }

    /**
     * Sets the id property value. The id property
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->id = $value;
    }

    /**
     * Sets the intent property value. Why the order was placed: wholesale (the organization buying for itself, on our platform account) or    retail (reselling to its own customer, on its connected account). Persisted so later actions — cancellation,    refund — resolve the same Stripe account the order settled on, instead of re-deriving it from the request.
     * @param OrderIntents|null $value Value to set for the intent property.
    */
    public function setIntent(?OrderIntents $value): void {
        $this->intent = $value;
    }

    /**
     * Sets the isActive property value. Whether the order is still live and holding its proxies: Active, or in its post-expiry grace window.    Every other state (pending, provisioning, expired, deleted) does not.
     * @param bool|null $value Value to set for the isActive property.
    */
    public function setIsActive(?bool $value): void {
        $this->isActive = $value;
    }

    /**
     * Sets the isAutoRenew property value. Recurring subscription (true) or one-shot payment (false). Does not drive expiry: it sets what the    customer is told and lets reconciliation skip one-shot orders.
     * @param bool|null $value Value to set for the isAutoRenew property.
    */
    public function setIsAutoRenew(?bool $value): void {
        $this->isAutoRenew = $value;
    }

    /**
     * Sets the isExpiringSoon property value. Whether the order needs attention soon: in its grace period, or expiring within a week. An    auto-renewing order is never flagged, as it renews itself rather than lapsing, and neither is a trial, which    is meant to expire.
     * @param bool|null $value Value to set for the isExpiringSoon property.
    */
    public function setIsExpiringSoon(?bool $value): void {
        $this->isExpiringSoon = $value;
    }

    /**
     * Sets the isInactive property value. Whether the order no longer holds its proxies, having handed them back to the stock for a new order:    once it is Expired or Deleted. The counterpart of bool Order.IsActive for stock; a never-provisioned order    (Pending, Provisioning) sits between the two and frees nothing.
     * @param bool|null $value Value to set for the isInactive property.
    */
    public function setIsInactive(?bool $value): void {
        $this->isInactive = $value;
    }

    /**
     * Sets the isTrial property value. Whether the order is a trial.
     * @param bool|null $value Value to set for the isTrial property.
    */
    public function setIsTrial(?bool $value): void {
        $this->isTrial = $value;
    }

    /**
     * Sets the items property value. Line items the order is made of, one per product bought. Each item carries its product, quantity and    the resources delivered for it.
     * @param array<OrderItem>|null $value Value to set for the items property.
    */
    public function setItems(?array $value): void {
        $this->items = $value;
    }

    /**
     * Sets the lastSettlementReference property value. Reference of the last settlement already applied to this order, provider-prefixed (e.g.    `stripe:in_...`, `nowpayments:...`). Webhooks are delivered at least once, so a renewal that carries    this same reference has already been applied and is skipped, keeping a redelivered payment from adding a cycle    twice. Provider-agnostic so it covers every settlement source, current and future.
     * @param string|null $value Value to set for the lastSettlementReference property.
    */
    public function setLastSettlementReference(?string $value): void {
        $this->lastSettlementReference = $value;
    }

    /**
     * Sets the lastTransactionId property value. The `BalanceTransaction` that last paid this order from the organization's balance (its creation or    its most recent extension). Lets a refund credit back exactly that payment without re-deriving its amount. Null    for orders paid through a processor (Stripe, crypto) or for trials.
     * @param string|null $value Value to set for the lastTransactionId property.
    */
    public function setLastTransactionId(?string $value): void {
        $this->lastTransactionId = $value;
    }

    /**
     * Sets the metadata property value. The metadata property
     * @param Order_metadata|null $value Value to set for the metadata property.
    */
    public function setMetadata(?Order_metadata $value): void {
        $this->metadata = $value;
    }

    /**
     * Sets the paymentMethod property value. The paymentMethod property
     * @param PaymentMethods|null $value Value to set for the paymentMethod property.
    */
    public function setPaymentMethod(?PaymentMethods $value): void {
        $this->paymentMethod = $value;
    }

    /**
     * Sets the paymentProcessor property value. The paymentProcessor property
     * @param PaymentProcessors|null $value Value to set for the paymentProcessor property.
    */
    public function setPaymentProcessor(?PaymentProcessors $value): void {
        $this->paymentProcessor = $value;
    }

    /**
     * Sets the processorReference property value. Opaque handle at the processor (a Stripe `sub_...` or `pi_...`, a Heleket reference).
     * @param string|null $value Value to set for the processorReference property.
    */
    public function setProcessorReference(?string $value): void {
        $this->processorReference = $value;
    }

    /**
     * Sets the quantity property value. Total units ordered, summed over the items' quantities and not stored. Requires ICollection&lt;OrderItem&gt; Order.Items    to be loaded.
     * @param int|null $value Value to set for the quantity property.
    */
    public function setQuantity(?int $value): void {
        $this->quantity = $value;
    }

    /**
     * Sets the status property value. Commercial state of the order. Stored as the source of truth for states that aren't derivable from    the dates (`Provisioning`, `Expired` once a worker confirms it, and later cancellations or holds).    The transient `GracePeriod` is layered on at read time by `ResolveStatus` from DateTimeOffset? Order.ExpiresAt    and the organization's grace policy. Defaults to `Pending` (nothing paid or set up yet); each flow sets    the real state through the transition helpers.
     * @param OrderStatuses|null $value Value to set for the status property.
    */
    public function setStatus(?OrderStatuses $value): void {
        $this->status = $value;
    }

}
