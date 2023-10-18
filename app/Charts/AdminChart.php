<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class AdminChart extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        // parent::__construct();

        // Customize your chart here
        $this->options([
            'responsive' => true,
            'maintainAspectRatio' => false,
        ]);

        $this->labels(['January', 'February', 'March']);
        $this->dataset('Sales', 'line', [100, 200, 150]);
    }
}
