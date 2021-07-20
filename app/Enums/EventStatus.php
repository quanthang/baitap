<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class EventStatus extends Enum
{
    const POST_PONE =   0;
    const IS_HAPPENING =   1;
    const UP_COMING = 2;
    const TAKE_PLACE = 3;
}
