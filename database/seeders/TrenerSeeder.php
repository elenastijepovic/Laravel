<?php

namespace Database\Seeders;
use App\Models\trener;
use Illuminate\Database\Seeder;
use DB;

class TrenerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('treners')->insert([
            ['ime'=>'David',
            'prezime'=>'Maric',
            'struka'=>'individualni',
            'email'=>'david@gmail.com'],
  		['ime'=>'Petar',
            'prezime'=>'Peric',
            'struka'=>'grupni',
            'email'=>'petar@gmail.com']

        ]);
    }
}
