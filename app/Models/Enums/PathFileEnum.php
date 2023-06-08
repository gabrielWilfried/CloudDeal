<?php

namespace App\Models\Enums;

enum PathFileEnum: string
{
    case PROFILE_PATH = 'profile';
    case ANNONCE_PATH = 'annonce';
    case DISCUSSION_PATH = 'discussion';
    case DEFAULT_PATH = 'file';
}
