<?php

if (!function_exists('enum_to_string_array')) {
    function enum_to_string_array($enums)
    {
        return array_map(
            fn ($enum) => $enum->value,
            $enums
        );
    }
}


if (!function_exists('toMoney')) {
    function toMoney($amount)
    {
        return number_format($amount, 0) . ' XAF';
    }
}
