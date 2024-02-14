<?php

namespace OmniaDigital\CatalystReviewsPlugin\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Social\Models\Post;
use OmniaDigital\CatalystReviewsPlugin\Models\Review;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::truncate();

        // Reviews
        Review::factory(15)->create();

        // Review Comments
        Post::factory(15)->create([
            'postable_id' => Review::all()->random()->id,
            'postable_type' => Review::class,
        ]);
    }
}
