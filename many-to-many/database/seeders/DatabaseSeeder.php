<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Progress;
use App\Models\Chapter;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ProgressesSeeder::class,
            ChaptersSeeder::class,
        ]);

        Progress::factory(35)->create()->each(function ($progress) {
            $chapters = Chapter::inRandomOrder()
            ->take(rand(1, 3))
            ->pluck('id')
            ->toArray();

            $progress->chapters()->syncWithoutDetaching($chapters);
        });
    }
}

