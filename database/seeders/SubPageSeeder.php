<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\PageFeature;
use App\Models\PageImage;
use App\Models\PageSpec;
use Illuminate\Database\Seeder;

class SubPageSeeder extends Seeder
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
            'title' => 'title',
            'description' => 'description',
            'meta_title' => 'meta_title',
            'meta_keyword' => 'meta_keyword',
            'schema' => 'schema',
        ]);

        PageImage::create([
            'page_id' => $page1->id,
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
