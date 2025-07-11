<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Booking;
use Illuminate\Support\Carbon;

class ReservationChart extends ChartWidget
{
    protected static ?string $heading = 'Rezervasyonlar Grafiği';

    protected function getData(): array
    {
        // Haftanın başından itibaren her gün için rezervasyon sayısı
        $startOfWeek = Carbon::now()->startOfWeek();
        $data = [];

        for ($i = 0; $i < 7; $i++) {
            $date = $startOfWeek->copy()->addDays($i)->toDateString();
            $count = Booking::whereDate('date', $date)->count();
            $data[] = $count;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Rezervasyonlar',
                    'data' => $data,
                    'backgroundColor' => 'rgba(255, 159, 64, 0.5)',
                    'borderColor' => 'rgba(255, 159, 64, 1)',
                    'borderWidth' => 2,
                ],
            ],
            'labels' => ['Pzt', 'Sal', 'Çar', 'Per', 'Cum', 'Cmt', 'Paz'],
        ];
    }

    protected function getType(): string
    {
        return 'line'; // Çizgi grafik için 'line' kullan
    }
}
