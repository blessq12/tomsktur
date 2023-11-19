<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('companies')->insert([
            [
                'name' => 'Общество с ограниченной ответственностью «Томсктур»',
                'nameShort' => 'ООО «Томсктур»',
                'basis' => 'Устав',
                'addressUR' => '634021, г. Томск, ул. Сибирская, 104-310',
                'addressFC' => '634021, г. Томск, ул. Шевченко, 26',
                'tel' => '+79095390931',
                'owner' => 'Кускова Елена Юрьевна',
                'inn' => '7000010788',
                'kpp' => '700001001',
                'ogrn' => '1237000008222',
            ]
        ]);
    }
}
