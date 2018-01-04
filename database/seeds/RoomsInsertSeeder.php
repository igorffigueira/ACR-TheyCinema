<?php

use Illuminate\Database\Seeder;
use App\Salas;

class RoomInsertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('sala')->truncate(); // truncate its for clean the column

        Salas::create([
            'sala_nome' => 'Norte'
        ]);
        Salas::create([
            'sala_nome' => 'Sul'
        ]);
        Salas::create([
            'sala_nome' => 'Este'
        ]);
        Salas::create([
            'sala_nome' => 'Oeste'
        ]);

    }
}
