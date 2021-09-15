<?php

namespace Database\Seeders;



use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\trener;



class TerminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for ($i = 0; $i < 10; $i++) {
            $trener_id = rand(1, 2);
            DB::table('termins')->insert([
                'dan' => Str::random(5),
                'vreme' => rand(8,17) . 'h',
                'broj' => rand(1,5),
                'trener_id' => $trener_id
            ]);
           
        }
    }
}
