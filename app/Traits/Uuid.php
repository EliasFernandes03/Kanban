<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Support\Str;

trait Uuid
{
    protected static function bootUuid(): void
    {
        static::creating(function ($model): void {
            $model->uuid = Str::uuid7()->toString();
        });
    }
}
