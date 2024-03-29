<?php

namespace OmniaDigital\CatalystReviewsPlugin\Http\Livewire;

use Livewire\Component;
use OmniaDigital\CatalystReviewsPlugin\Models\Review;

class ReviewCard extends Component
{
    public $review;

    protected $listeners = ['reviewUpdated' => '$refresh'];

    public function mount(Review $review)
    {
        $this->review = $review;
        $this->review->load('user');
    }

    public function render()
    {
        return view('reviews::livewire.review-card');
    }
}
