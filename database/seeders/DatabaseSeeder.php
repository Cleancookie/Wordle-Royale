<?php

namespace Database\Seeders;

use App\Actions\ImportWords;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Why fake words when we can just import them l0l
        ImportWords::make()->handle();
    }
}
