<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The result of testing a proxy through a real request: whether it answered, the round-trip latency,    the HTTP status the request came back with, and the exit IP the proxy routed through.
*/
class ProxyPingResponse implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed>|null $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private ?array $additionalData = null;
    
    /**
     * @var string|null $exitIp The public IP the proxy routed the request through, as reported by the reach target; null when    unreachable or the target didn't return one.
    */
    private ?string $exitIp = null;
    
    /**
     * @var int|null $latencyMilliseconds Round-trip latency in milliseconds when reachable; null otherwise.
    */
    private ?int $latencyMilliseconds = null;
    
    /**
     * @var bool|null $reachable Whether the proxy answered the request.
    */
    private ?bool $reachable = null;
    
    /**
     * @var int|null $statusCode The HTTP status code the request came back with; null when the proxy couldn't be reached.
    */
    private ?int $statusCode = null;
    
    /**
     * Instantiates a new ProxyPingResponse and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProxyPingResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProxyPingResponse {
        return new ProxyPingResponse();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->additionalData;
    }

    /**
     * Gets the exitIp property value. The public IP the proxy routed the request through, as reported by the reach target; null when    unreachable or the target didn't return one.
     * @return string|null
    */
    public function getExitIp(): ?string {
        return $this->exitIp;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'exitIp' => fn(ParseNode $n) => $o->setExitIp($n->getStringValue()),
            'latencyMilliseconds' => fn(ParseNode $n) => $o->setLatencyMilliseconds($n->getIntegerValue()),
            'reachable' => fn(ParseNode $n) => $o->setReachable($n->getBooleanValue()),
            'statusCode' => fn(ParseNode $n) => $o->setStatusCode($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the latencyMilliseconds property value. Round-trip latency in milliseconds when reachable; null otherwise.
     * @return int|null
    */
    public function getLatencyMilliseconds(): ?int {
        return $this->latencyMilliseconds;
    }

    /**
     * Gets the reachable property value. Whether the proxy answered the request.
     * @return bool|null
    */
    public function getReachable(): ?bool {
        return $this->reachable;
    }

    /**
     * Gets the statusCode property value. The HTTP status code the request came back with; null when the proxy couldn't be reached.
     * @return int|null
    */
    public function getStatusCode(): ?int {
        return $this->statusCode;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('exitIp', $this->getExitIp());
        $writer->writeIntegerValue('latencyMilliseconds', $this->getLatencyMilliseconds());
        $writer->writeBooleanValue('reachable', $this->getReachable());
        $writer->writeIntegerValue('statusCode', $this->getStatusCode());
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
     * Sets the exitIp property value. The public IP the proxy routed the request through, as reported by the reach target; null when    unreachable or the target didn't return one.
     * @param string|null $value Value to set for the exitIp property.
    */
    public function setExitIp(?string $value): void {
        $this->exitIp = $value;
    }

    /**
     * Sets the latencyMilliseconds property value. Round-trip latency in milliseconds when reachable; null otherwise.
     * @param int|null $value Value to set for the latencyMilliseconds property.
    */
    public function setLatencyMilliseconds(?int $value): void {
        $this->latencyMilliseconds = $value;
    }

    /**
     * Sets the reachable property value. Whether the proxy answered the request.
     * @param bool|null $value Value to set for the reachable property.
    */
    public function setReachable(?bool $value): void {
        $this->reachable = $value;
    }

    /**
     * Sets the statusCode property value. The HTTP status code the request came back with; null when the proxy couldn't be reached.
     * @param int|null $value Value to set for the statusCode property.
    */
    public function setStatusCode(?int $value): void {
        $this->statusCode = $value;
    }

}
