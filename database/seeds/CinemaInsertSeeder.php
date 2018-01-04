<?php

use Illuminate\Database\Seeder;
use App\Cinemas;

class CinemaInsertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cinemas::create([
            'name' => 'TheyFunchal',
            'location' => 'Funchal',
            'country' => 'Portugal',
        ]);
    }
}
