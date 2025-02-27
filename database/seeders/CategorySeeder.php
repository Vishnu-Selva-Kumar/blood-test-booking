<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{

    protected $categories;

    public function __construct()
    {
        $this->categories = [
            ['id' => 1, 'name' => 'Full Body Checkup', 'status' => config('web.constants.status.active')],
            ['id' => 2, 'name' => 'Vitamin Profile Test', 'status' => config('web.constants.status.active')],
            ['id' => 3, 'name' => 'Diabetes Test Packages', 'status' => config('web.constants.status.active')],
            ['id' => 4, 'name' => 'Thyroid Test Packages', 'status' => config('web.constants.status.active')],
            ['id' => 5, 'name' => 'Fever Profile Test', 'status' => config('web.constants.status.active')],
            ['id' => 6, 'name' => 'Cardiac Profile Test', 'status' => config('web.constants.status.active')],
            ['id' => 7, 'name' => 'Arthritis Profile Test', 'status' => config('web.constants.status.active')],
            ['id' => 8, 'name' => 'Food Intolerance Test', 'status' => config('web.constants.status.active')],
            ['id' => 9, 'name' => 'Thyrocare Aarogyam Packages', 'status' => config('web.constants.status.active')],
            ['id' => 10, 'name' => 'Thyrocare Aarogyam Advanced Packages', 'status' => config('web.constants.status.active')],
            ['id' => 11, 'name' => 'Thyrocare Jaanch Packages', 'status' => config('web.constants.status.active')],
            ['id' => 12, 'name' => 'Men Health Checkup', 'status' => config('web.constants.status.active')],
            ['id' => 13, 'name' => 'Women Health Checkup', 'status' => config('web.constants.status.active')],
            ['id' => 14, 'name' => 'PCOD Profile Test', 'status' => config('web.constants.status.active')],
        ];
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->categories as $category) {
            Category::updateOrCreate(['id' => $category['id']], $category);
        }
    }
}
