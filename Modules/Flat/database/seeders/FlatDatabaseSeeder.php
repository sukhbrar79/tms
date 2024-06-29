<?php

namespace Modules\Flat\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Flat\Models\Flat;

class FlatDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Flats Seed
         * ------------------
         */

        // DB::table('flats')->truncate();
        // echo "Truncate: flats \n";

        Flat::factory()->count(20)->create();
        $rows = Flat::all();
        echo " Insert: flats \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
