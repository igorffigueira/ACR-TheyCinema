<?php

use Illuminate\Database\Seeder;
use App\keys;

class keySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        keys::create([
            'keys' => '1245124'
        ]);
        keys::create([
            'keys' => '5454684'
        ]);
        keys::create([
            'keys' => '4512486'
        ]);

    }
}
