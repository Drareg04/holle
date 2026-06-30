<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Service extends Model
{
    /**
     * The model's default values for attributes.
     *
     * @var array<string, mixed>
     */
    protected $attributes = [
        'published' => 0,
        'featured' => 0,
    ];

    /**
     * Get the user that owns the service.
     */
    public function seller(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
