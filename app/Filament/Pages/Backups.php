<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;
use ShuvroRoy\FilamentSpatieLaravelBackup\Pages\Backups as BackupsPage;
use UnitEnum;

class Backups extends BackupsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCpuChip;

    public function getHeading(): string|Htmlable
    {
        return __('Application And Database Backups');
    }

    public static function getNavigationGroup(): string|UnitEnum|null
    {
        return __('Core');
    }
}
