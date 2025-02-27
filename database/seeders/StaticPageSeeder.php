<?php

namespace Database\Seeders;

use App\Models\StaticPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaticPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $content  = '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>';


        $pages = [
            [

                'title' => 'About us',
                'slug' => 'about-us',
                'long_description' => '',
                'status' => config('web.constants.status.active')
            ],
            [

                'title' => 'Terms Conditions',
                'slug' => 'terms-conditions',
                'long_description' => $content,
                'status' => config('web.constants.status.active')
            ],
            [

                'title' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'long_description' => $content,
                'status' => config('web.constants.status.active')
            ],
            [

                'title' => 'Refund Policy',
                'slug' => 'refund-policy',
                'long_description' => $content,
                'status' => config('web.constants.status.active')
            ],
            [

                'title' => 'Help Center',
                'slug' => 'help-center',
                'long_description' => $content,
                'status' => config('web.constants.status.active')
            ],
        ];
        try {

            DB::beginTransaction();
            foreach ($pages as $page) {
                StaticPage::updateOrCreate(
                    [
                        'slug' => $page['slug']
                    ],
                    $page
                );
            }
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
}
