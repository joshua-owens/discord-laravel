<?php

namespace DiscordLaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use DiscordLaravel\Commands\DiscordLaravelCommand;

class DiscordLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('discord-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_discord-laravel_table')
            ->hasCommand(DiscordLaravelCommand::class);
    }
}
