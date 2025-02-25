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
        $this->call([
            CategorySeeder::class,
            StaticPageSeeder::class,
        ]);
        // Create 10 categories
        // Package::factory(10)->create();
        Service::factory(10)->create();
        Booking::factory(10)->create();
    }
}
