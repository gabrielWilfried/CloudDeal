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
