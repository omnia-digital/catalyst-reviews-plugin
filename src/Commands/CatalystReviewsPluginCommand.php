<?php

namespace OmniaDigital\CatalystReviewsPlugin\Commands;

use Illuminate\Console\Command;

class CatalystReviewsPluginCommand extends Command
{
    public $signature = 'catalyst-reviews-plugin';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
