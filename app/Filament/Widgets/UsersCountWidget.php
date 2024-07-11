<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UsersCountWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Current Users', User::count())
                ->description('Currently registered users')
                ->descriptionIcon('heroicon-m-users', IconPosition::Before)
        ];
    }
}
