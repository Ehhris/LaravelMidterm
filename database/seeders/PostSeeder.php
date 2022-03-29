<?php

namespace Database\Seeders;

use Illuminate\Support\Facedes\DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('post')->insert([
            'id' => 1,
            'create_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
