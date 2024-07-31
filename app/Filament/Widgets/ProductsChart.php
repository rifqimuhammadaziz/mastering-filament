<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use Carbon\Carbon;
use Filament\Widgets\ChartWidget;

class ProductsChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $data = $this->getProductsPerMonth();

        return [
            'datasets' => [
                [
                    'label' => 'Products created',
                    'data' => $data['productsPerMonth']
                ]
            ],
            'labels' => $data['months']
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    private function getProductsPerMonth(): array
    {
        $now = Carbon::now();

        $productsPerMonth = [];
        $months = collect(range(1, 12))->map(function ($month) use ($now, &$productsPerMonth) {
            // Filter products by the current month in the iteration and the current year
            $count = Product::whereMonth('created_at', $month)->whereYear('created_at', $now->year)->count();

            // Store the count in the array
            $productsPerMonth[] = $count;

            // Return the short month name
            return $now->copy()->month($month)->format('M');
        })->toArray();

        return [
            'productsPerMonth' => $productsPerMonth,
            'months' => $months,
        ];
    }
}
