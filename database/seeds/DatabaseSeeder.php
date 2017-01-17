<?php

use App\Nomination;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $this->call(AwardTableSeeder::class);
        $this->call(NominationTableSeeder::class);
        $this->call(ProfTableSeeder::class);
        $this->call(CourseTableSeeder::class);
    }
}
