<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        User::factory()->count(50)->create();

        $path = public_path('sql/fileSeeder.sql');
        $sql = file_get_contents($path);
        DB::unprepared($sql);
    }
}
