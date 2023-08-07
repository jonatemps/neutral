<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Party;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Party::factory(200)->create();
        // Candidate::factory(2000)->create();

        // insert mandats
        // DB::table('mandates')->insert([
        //     'name' => 'Députation provinciale',
        //     'slug' => 'depute-provincial',
        // ]);

        // DB::table('mandates')->insert([
        //     'name' => 'Députation nationale',
        //     'slug' => 'depute-national',
        // ]);

        // DB::table('mandates')->insert([
        //     'name' => 'Présidence',
        //     'slug' => 'présidence',
        // ]);
        // end insert mandats

        // $this->call(ProvinceSeeder::class);
    }
}
