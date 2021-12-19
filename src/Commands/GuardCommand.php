<?php

namespace visifo-namespace\Guard\Commands;

use Illuminate\Console\Command;

class GuardCommand extends Command
{
    public $signature = 'laravel-guard-clauses';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
