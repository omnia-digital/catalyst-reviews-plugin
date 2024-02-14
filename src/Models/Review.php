<?php

namespace OmniaDigital\CatalystReviewsPlugin\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use OmniaDigital\CatalystReviewsPlugin\Database\factories\ReviewFactory;

class Review extends Model
{
    use HasFactory;
//    use Likable;
//    use Postable;

    protected $guarded = [];

    protected $casts = [
        'received_product_free' => 'boolean',
        'recommend' => 'boolean',
    ];

    protected static function newFactory()
    {
        return ReviewFactory::new();
    }

    public function user(): ?BelongsTo
    {
        if (! class_exists(App\Models\User::class)) {
            return null;
        }

        return $this->belongsTo(App\Models\User::class);
    }

    public function reviewable(): MorphTo
    {
        return $this->morphTo();
    }
}
