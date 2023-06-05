<?php

namespace App\Models\Enums;

enum PaymentStatusEnum: string
{
    case PENDING = 'PENDING';
    case APPROVED = 'APPROVED';
    case CANCELLED = 'CANCELLED';
}
