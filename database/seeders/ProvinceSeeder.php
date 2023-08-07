<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            'name' => 'Bas-Uele',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '477624',
            'siege_number' => 7,
        ]);

        DB::table('provinces')->insert([
            'name' => 'Equateur',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '966882',
            'siege_number' => 12,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Haut-Katanga',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '2461703',
            'siege_number' => 30,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Haut-Lomami',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '1312959',
            'siege_number' => 16,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Haut-Uele',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '929415',
            'siege_number' => 11,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Ituri',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '2238761',
            'siege_number' => 28,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Kasai',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '1495089',
            'siege_number' => 19,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Kasai Central',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '1552139',
            'siege_number' => 19,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Kasai Oriental',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '159773',
            'siege_number' => 14,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Kinshasa',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '4462245',
            'siege_number' => 55,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Kongo Central',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '1931006',
            'siege_number' => 24,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Kwango',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '985077',
            'siege_number' => 12,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Kwilu',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '2350798',
            'siege_number' => 29,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Lomami',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '1245651',
            'siege_number' => 15,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Lualaba',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '1023187',
            'siege_number' => 13,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Mai-Ndombe',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '978786',
            'siege_number' => 12,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Maniema',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '1028676',
            'siege_number' => 13,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Mongala',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '974249',
            'siege_number' => 12,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Nord-Kivu',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '3864600',
            'siege_number' => 48,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Nord-Ubangi',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '679996',
            'siege_number' => 8,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Sankuru',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '1171011',
            'siege_number' => 14,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Sud-Kivu',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '2565934',
            'siege_number' => 32,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Sud-Ubangi',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '1332220',
            'siege_number' => 16,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Tanganyika',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '1177448',
            'siege_number' => 15,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Tshopo',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '1295911',
            'siege_number' => 16,
        ]);
        DB::table('provinces')->insert([
            'name' => 'Tshuapa',
            'map' => 'http://127.0.0.1:8000/assets/img/team/cover-profile.jpg',
            'elector_number' => '775652',
            'siege_number' => 10,
        ]);
    }
}
