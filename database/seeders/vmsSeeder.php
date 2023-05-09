<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageFeature;
use App\Models\PageImage;
use App\Models\PageSpec;
use Illuminate\Database\Seeder;

class vmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page1 = Page::create([
            'page_type_id' => 1,
            'title' => '',
            'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry`s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
            'meta_title' => 'enter your meta title',
            'meta_keyword' => 'enter your meta keyword',
            'schema' => 'enter your schema',
        ]);

        PageSpec::create([
            'page_id' => $page1->id,
            'spec' => 'test spec',
            'description' => 'test_desc',
        ]);

        PageFeature::create([
            'page_id' => $page1->id,
            'feature' => 'test spec',
            'description' => 'test_desc',
        ]);
    }
}
