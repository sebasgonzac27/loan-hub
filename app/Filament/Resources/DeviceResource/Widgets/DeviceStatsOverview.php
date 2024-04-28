<?php

namespace App\Filament\Resources\DeviceResource\Widgets;

use App\Models\Device;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DeviceStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Devices', Device::count())
                ->description('The total number of devices in the system')
                ->icon('heroicon-o-computer-desktop')
                ->color('info'),
            Stat::make('Available Devices', Device::query()->where('status', 'available')->count())
                ->description('The total number of devices available for use')
                ->icon('heroicon-o-check-circle')
                ->color('success'),
            Stat::make('In Use Devices', Device::query()->where('status', 'in_use')->count())
                ->description('The total number of devices currently in use')
                ->icon('heroicon-o-pause-circle')
                ->color('warning'),
            Stat::make('Maintenance Devices', Device::query()->where('status', 'maintenance')->count())
                ->description('The total number of devices currently in maintenance')
                ->icon('heroicon-o-exclamation-circle')
                ->color('danger'),
        ];
    }
}
