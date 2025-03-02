<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{

    private $keywords;

    public function __construct()
    {
        $this->keywords = [];
        $csvData = fopen(base_path('database/data/packages-seed-list.csv'), 'r');
        $transRow = false;
        while (($data = fgetcsv($csvData, 555, ',')) !== false) {
            if ($transRow) {

                $this->keywords[] = [
                    'title' => strtoupper(trim($data[0])) === "NULL" ? null : trim($data[0]),
                    'slug' => trim($data[1]),
                    'category_id' => isset($data[2]) ? (strtoupper(trim($data[2])) === "NULL" ? null : trim($data[2])) : null,
                    'image' => isset($data[3]) ? (strtoupper(trim($data[3])) === "NULL" ? null : trim($data[3])) : null,
                    'price' => isset($data[4]) ? (strtoupper(trim($data[4])) === "NULL" ? null : trim($data[4])) : 0,
                    'special_price' => isset($data[5]) ? (strtoupper(trim($data[5])) === "NULL" ? null : trim($data[5])) : 0,
                    'short_description' => isset($data[6]) ? (strtoupper(trim($data[6])) === "NULL" ? null : trim($data[6])) : '',
                    'description' => isset($data[7]) ? (strtoupper(trim($data[7])) === "NULL" ? null : trim($data[7])) : '',
                    'process' => isset($data[8]) ? (strtoupper(trim($data[8])) === "NULL" ? null : trim($data[8])) : '',
                    'faq' => isset($data[9]) ? (strtoupper(trim($data[9])) === "NULL" ? null : json_decode($data[9], true)) : [],
                    'widgets' => isset($data[10]) ? (strtoupper(trim($data[10])) === "NULL" ? null : json_decode($data[10], true)) : [],
                    'status' => 1,
                ];
            }
            $transRow = true;
        }
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        foreach ($this->keywords as $keyword) {
            try {
                Package::updateOrCreate(
                    ['slug' => $keyword['slug']],
                    $keyword
                );
            } catch (\Throwable $th) {
                print_r($keyword);
                throw $th;
            }
        }
    }
}
