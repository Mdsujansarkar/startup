<?php

declare(strict_types=1);

namespace Castr\Domains\Catalog\Jobs;

use Illuminate\Bus\Queueable;
use shweshi\OpenGraph\OpenGraph;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class FeatchMetaDataForProdcast implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(
        public int $podcastID,
        public string $externalURL,
    )
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(): void
    {
        $data = (new OpenGraph())->fetch(
            url:$this->externalURL,
            allMeta: true
        );
    }
}
