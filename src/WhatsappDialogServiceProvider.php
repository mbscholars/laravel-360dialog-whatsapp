<?php

namespace Mbscholars\WhatsappDialog;

use Mbscholars\WhatsappDialog\Commands\WhatsappDialogCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WhatsappDialogServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-whatsapp-with-360dialog')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-whatsapp-with-360dialog_table')
            ->hasCommand(WhatsappDialogCommand::class);
    }
}
