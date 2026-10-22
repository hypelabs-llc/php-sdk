<?php

namespace HypeLabs\Connect\Sdk\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class OrderStatuses extends Enum {
    public const PENDING = "Pending";
    public const PROVISIONING = "Provisioning";
    public const ACTIVE = "Active";
    public const GRACE_PERIOD = "GracePeriod";
    public const EXPIRED = "Expired";
    public const DELETED = "Deleted";
}
