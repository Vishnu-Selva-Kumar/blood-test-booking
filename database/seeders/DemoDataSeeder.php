<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Category;
use App\Models\Package;
use App\Models\Service;
use App\Models\StaticPage;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DemoDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 categories
        Category::factory(10)->create();
        Package::factory(10)->create();
        Service::factory(10)->create();
        StaticPage::factory(10)->create();
        Booking::factory(10)->create();
    }
}
