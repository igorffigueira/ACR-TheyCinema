<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('CinemaInsertSeeder');
        $this->call('RoomInsertSeeder');
        $this->call('PositionsSeeder');
        $this->call('AdminSeeder');
        $this->call('keySeeder');
        
    }
}
