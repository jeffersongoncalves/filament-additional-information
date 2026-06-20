<?php

namespace JeffersonGoncalves\Filament\AdditionalInformation;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;

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
