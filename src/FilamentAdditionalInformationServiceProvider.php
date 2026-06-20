<?php

namespace JeffersonGoncalves\Filament\AdditionalInformation;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentAdditionalInformationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package->name('filament-additional-information');
    }
}
