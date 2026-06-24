<?php

namespace JeffersonGoncalves\Filament\AdditionalInformation;

use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;

class AdditionalInformation
{
    /**
     * @param  array<int, string>  $dates
     */
    public static function make(array $dates = ['created_at', 'updated_at']): Section
    {
        $entries = collect($dates)
            ->map(fn (string $date): TextEntry => TextEntry::make($date)->translateLabel()->dateTime())
            ->toArray();

        return Section::make(__('Additional Information'))
            ->description(__('Information on the date of registration and date of modification.'))
            ->columns()
            ->schema($entries);
    }
}
