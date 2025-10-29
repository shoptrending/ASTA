<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\NewsArticle;
use Illuminate\Database\Seeder;

final class NewsArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        NewsArticle::factory()->count(5)->create();
    }
}
