<?php

namespace App\GraphQL\Scalars;

use Illuminate\Support\Carbon;
use Nuwave\Lighthouse\Schema\Types\Scalars\DateTimeUtc as BaseDateTimeUtc;

class DateTimeUtc extends BaseDateTimeUtc
{
    protected function parse($value): Carbon
    {
        return Carbon::createFromIsoFormat('YYYY-MM-DDTHH:mm:ss.SSSSSSZ', $value)->setTimezone(config('app.timezone'));
    }
}
