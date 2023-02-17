<?php

namespace DiscordLaravel\Commands;

use Illuminate\Console\Command;

class DiscordLaravelCommand extends Command
{
    public $signature = 'discord-laravel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
