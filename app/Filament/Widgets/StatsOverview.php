<?php

namespace App\Filament\Widgets;

use App\Models\Mahasiswa;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Belum Diterima', Mahasiswa::where('status', 'belum diterima')->count()),
            Stat::make('Diterima', Mahasiswa::where('status', 'diterima')->count()),
            Stat::make('Ditolak', Mahasiswa::where('status', 'ditolak')->count())
        ];
    }
}
