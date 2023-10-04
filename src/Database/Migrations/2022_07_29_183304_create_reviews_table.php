<?php

use App\Models\Language;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'user_id')->index();
            $table->nullableMorphs('reviewable');
            $table->text('body');
            $table->integer('visibility')->default(1);
            $table->foreignIdFor(Language::class, 'language_id')->index()->default(1);
            $table->boolean('received_product_free')->default(false);
            $table->boolean('recommend')->default(false);
            $table->boolean('commentable')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
