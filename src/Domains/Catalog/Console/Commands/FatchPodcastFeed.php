<?php
declare(strict_types=1);
namespace Castr\Domains\Catalog\Console\Commands;

use Illuminate\Console\Command;

class FatchPodcastFeed extends Command
{
    protected $commands = [
        FatchPodcastFeed::class,
    ];
    protected $signature = 'podcast:fetch {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch the Feed prodcast';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        return Command::SUCCESS;
    }
}
