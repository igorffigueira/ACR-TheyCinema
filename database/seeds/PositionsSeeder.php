<?php

use Illuminate\Database\Seeder;
use App\Positions;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('sala')->truncate(); // truncate its for clean the column

        Positions::create([

            'salas_id' =>'1',    //Chairs from Room 1
            'a1' => '0','a2' => '0','a3' => '0',
            'b1' => '0','b2' => '0','b3' => '0',
            'c1' => '0','c2' => '0','c3' => '0',
        ]);
        Positions::create([

            'salas_id' =>'2',    //Chairs from Room 2
            'a1' => '0','a2' => '0','a3' => '0',
            'b1' => '0','b2' => '0','b3' => '0',
            'c1' => '0','c2' => '0','c3' => '0',
        ]);
        Positions::create([

            'salas_id' =>'3',    //Chairs from Room 3
            'a1' => '0','a2' => '0','a3' => '0',
            'b1' => '0','b2' => '0','b3' => '0',
            'c1' => '0','c2' => '0','c3' => '0',
        ]);
        Positions::create([

            'salas_id' =>'4',    //Chairs from Room 4
            'a1' => '0','a2' => '0','a3' => '0',
            'b1' => '0','b2' => '0','b3' => '0',
            'c1' => '0','c2' => '0','c3' => '0',
        ]);
    }
}
