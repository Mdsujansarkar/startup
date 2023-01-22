<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class FatchFeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'podcast:fetch {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle():int
    {
        $feed = \Laminas\Feed\Reader\Reader::import(
            uri:$this->argument('url')
        );
        $data = (array) simplexml_load_string($feed->saveXml());
        dd($data);
        foreach($feed as $item){
            $data = (array) simplexml_load_string($item->saveXML());
            dd($data);
        }
        return 0;
    }
}
