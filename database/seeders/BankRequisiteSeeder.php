<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankRequisiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bank_requisites')->insert([
            [
                'company_id' => '1',
                'name' => 'Сибирский филиал ПАО РОСБАНК',
                'checkAccount' => '40702810074790001641',
                'corrAccount' => '30101810000000000388',
                'bik' => '040407388',
                'ogrn' => '1027739460737',
                'okpo' => '74876943',
                'okato' => '04401374000',
            ]
        ]);
    }
}
