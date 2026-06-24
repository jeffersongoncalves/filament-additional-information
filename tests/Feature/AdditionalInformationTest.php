<?php

use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use JeffersonGoncalves\Filament\AdditionalInformation\AdditionalInformation;

it('returns a section', function () {
    expect(AdditionalInformation::make())->toBeInstanceOf(Section::class);
});

it('renders created_at and updated_at entries by default', function () {
    $section = AdditionalInformation::make();

    $entries = $section->getChildComponents();

    expect($entries)->toHaveCount(2)
        ->and($entries)->each->toBeInstanceOf(TextEntry::class);

    $names = array_map(fn (TextEntry $entry): string => $entry->getName(), $entries);

    expect($names)->toBe(['created_at', 'updated_at']);
});

it('renders a custom list of date entries', function () {
    $section = AdditionalInformation::make(['created_at', 'updated_at', 'deleted_at']);

    $names = array_map(
        fn (TextEntry $entry): string => $entry->getName(),
        $section->getChildComponents(),
    );

    expect($names)->toBe(['created_at', 'updated_at', 'deleted_at']);
});
