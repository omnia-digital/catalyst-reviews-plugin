<?php

namespace OmniaDigital\CatalystReviewsPlugin\Traits;

use App\Models\User;
use OmniaDigital\CatalystReviewsPlugin\Models\Review;

trait Reviewable
{
    public function reviewedBy(User $user)
    {
        return $this->reviews()->where('user_id', $user->id)->exists();
    }

    /**
     * Get the model's reviews
     */
    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function getCurrentUserReview()
    {
        return $this->reviews()->where('user_id', auth()->id())->first() ?? null;
    }

    public function recommendedCount()
    {
        return $this->reviews()->where('recommend', 1)->count();
    }
}
