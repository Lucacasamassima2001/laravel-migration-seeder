<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'Azienda'=> 'Trenitalia',
                'Stazione_di_partenza' => 'Milano bovisa',
                'Stazione_di_arrivo' => 'Milano Malpensa',
                'Orario_di_partenza' => '20:54',
                'Orario_di_arrivo' => '22:30',
                'Codice_Treno' => '531356',
                'Numero_Carrozze' => '20',
                'In_orario' => true,
                'Cancellato' => false,
            ],
            [
                'Azienda'=> 'Frecciarossa',
                'Stazione_di_partenza' => 'Milano Linate',
                'Stazione_di_arrivo' => 'Milano Porta Venezia',
                'Orario_di_partenza' => '15:24',
                'Orario_di_arrivo' => '18:23',
                'Codice_Treno' => '867396',
                'Numero_Carrozze' => '13',
                'In_orario' => false,
                'Cancellato' => false,
            ],
            [
                'Azienda'=> 'Frecciagialla',
                'Stazione_di_partenza' => 'Bari',
                'Stazione_di_arrivo' => 'Trani',
                'Orario_di_partenza' => '17:56',
                'Orario_di_arrivo' => '20:13',
                'Codice_Treno' => '362312',
                'Numero_Carrozze' => '24',
                'In_orario' => true,
                'Cancellato' => false,
            ],
            [
                'Azienda'=> 'Frecciaverde',
                'Stazione_di_partenza' => 'Catania',
                'Stazione_di_arrivo' => 'Napoli',
                'Orario_di_partenza' => '09:28',
                'Orario_di_arrivo' => '17:45',
                'Codice_Treno' => '792427',
                'Numero_Carrozze' => '8',
                'In_orario' => false,
                'Cancellato' => true,
            ],
            [
                'Azienda'=> 'Treniveloci',
                'Stazione_di_partenza' => 'Bolzano',
                'Stazione_di_arrivo' => 'Torino',
                'Orario_di_partenza' => '05:12',
                'Orario_di_arrivo' => '07:25',
                'Codice_Treno' => '128535',
                'Numero_Carrozze' => '23',
                'In_orario' => true,
                'Cancellato' => false,
            ],
        ];

        foreach($trains as $arrTrain){
            Train::create($arrTrain);
        }
    }
}
