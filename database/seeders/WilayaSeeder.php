<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayaSeeder extends Seeder
{
    private $wilayas = [
        [
            'code' => '1',
            'name' => 'Adrar',
            'arName' => 'أدرار',
        ],
        [
            'code' => '2',
            'name' => 'Chlef',
            'arName' => 'الشلف',
        ],
        [
            'code' => '3',
            'name' => 'Laghouat',
            'arName' => 'الأغواط',
        ],
        [
            'code' => '4',
            'name' => 'Oum El Bouaghi',
            'arName' => 'أم البواقي',
        ],
        [
            'code' => '5',
            'name' => 'Batna',
            'arName' => 'باتنة',
        ],
        [
            'code' => '6',
            'name' => 'Béjaïa',
            'arName' => 'بجاية',
        ],
        [
            'code' => '7',
            'name' => 'Biskra',
            'arName' => 'بسكرة',
        ],
        [
            'code' => '8',
            'name' => 'Bechar',
            'arName' => 'بشار',
        ],
        [
            'code' => '9',
            'name' => 'Blida',
            'arName' => 'البليدة',
        ],
        [
            'code' => '10',
            'name' => 'Bouira',
            'arName' => 'البويرة',
        ],
        [
            'code' => '11',
            'name' => 'Tamanrasset',
            'arName' => 'تمنراست',
        ],
        [
            'code' => '12',
            'name' => 'Tbessa',
            'arName' => 'تبسة',
        ],
        [
            'code' => '13',
            'name' => 'Tlemcen',
            'arName' => 'تلمسان',
        ],
        [
            'code' => '14',
            'name' => 'Tiaret',
            'arName' => 'تيارت',
        ],
        [
            'code' => '15',
            'name' => 'Tizi Ouzou',
            'arName' => 'تيزي وزو',
        ],
        [
            'code' => '16',
            'name' => 'Alger',
            'arName' => 'الجزائر',
        ],
        [
            'code' => '17',
            'name' => 'Djelfa',
            'arName' => 'الجلفة',
        ],
        [
            'code' => '18',
            'name' => 'Jijel',
            'arName' => 'جيجل',
        ],
        [
            'code' => '19',
            'name' => 'Se9tif',
            'arName' => 'سطيف',
        ],
        [
            'code' => '20',
            'name' => 'Saefda',
            'arName' => 'سعيدة',
        ],
        [
            'code' => '21',
            'name' => 'Skikda',
            'arName' => 'سكيكدة',
        ],
        [
            'code' => '22',
            'name' => 'Sidi Bel Abbes',
            'arName' => 'سيدي بلعباس',
        ],
        [
            'code' => '23',
            'name' => 'Annaba',
            'arName' => 'عنابة',
        ],
        [
            'code' => '24',
            'name' => 'Guelma',
            'arName' => 'قالمة',
        ],
        [
            'code' => '25',
            'name' => 'Constantine',
            'arName' => 'قسنطينة',
        ],
        [
            'code' => '26',
            'name' => 'Medea',
            'arName' => 'المدية',
        ],
        [
            'code' => '27',
            'name' => 'Mostaganem',
            'arName' => 'مستغانم',
        ],
        [
            'code' => '28',
            'name' => "M'Sila",
            'arName' => 'المسيلة',
        ],
        [
            'code' => '29',
            'name' => 'Mascara',
            'arName' => 'معسكر',
        ],
        [
            'code' => '30',
            'name' => 'Ouargla',
            'arName' => 'ورقلة',
        ],
        [
            'code' => '31',
            'name' => 'Oran',
            'arName' => 'وهران',
        ],
        [
            'code' => '32',
            'name' => 'El Bayadh',
            'arName' => 'البيض',
        ],
        [
            'code' => '33',
            'name' => 'Illizi',
            'arName' => 'إليزي',
        ],
        [
            'code' => '34',
            'name' => 'Bordj Bou Arreridj',
            'arName' => 'برج بوعريريج',
        ],
        [
            'code' => '35',
            'name' => 'Boumerdes',
            'arName' => 'بومرداس',
        ],
        [
            'code' => '36',
            'name' => 'El Tarf',
            'arName' => 'الطارف',
        ],
        [
            'code' => '37',
            'name' => 'Tindouf',
            'arName' => 'تندوف',
        ],
        [
            'code' => '38',
            'name' => 'Tissemsilt',
            'arName' => 'تيسمسيلت',
        ],
        [
            'code' => '39',
            'name' => 'El Oued',
            'arName' => 'الوادي',
        ],
        [
            'code' => '40',
            'name' => 'Khenchela',
            'arName' => 'خنشلة',
        ],
        [
            'code' => '41',
            'name' => 'Souk Ahras',
            'arName' => 'سوق أهراس',
        ],
        [
            'code' => '42',
            'name' => 'Tipaza',
            'arName' => 'تيبازة',
        ],
        [
            'code' => '43',
            'name' => 'Mila',
            'arName' => 'ميلة',
        ],
        [
            'code' => '44',
            'name' => 'Ain Defla',
            'arName' => 'عين الدفلى',
        ],
        [
            'code' => '45',
            'name' => 'Naama',
            'arName' => 'النعامة',
        ],
        [
            'code' => '46',
            'name' => 'Ain Temouchent',
            'arName' => 'عين تموشنت',
        ],
        [
            'code' => '47',
            'name' => 'Ghardaefa',
            'arName' => 'غرداية',
        ],
        [
            'code' => '48',
            'name' => 'Relizane',
            'arName' => 'غليزان',
        ],
        [
            'code' => '49',
            'name' => "El M'ghair",
            'arName' => 'المغير',
        ],
        [
            'code' => '50',
            'name' => 'El Menia',
            'arName' => 'المنيعة',
        ],
        [
            'code' => '51',
            'name' => 'Ouled Djellal',
            'arName' => 'أولاد جلال',
        ],
        [
            'code' => '52',
            'name' => 'Bordj Baji Mokhtar',
            'arName' => 'برج باجي مختار',
        ],
        [
            'code' => '53',
            'name' => 'Béni Abbès',
            'arName' => 'بني عباس',
        ],
        [
            'code' => '54',
            'name' => 'Timimoun',
            'arName' => 'تيميمون',
        ],
        [
            'code' => '55',
            'name' => 'Touggourt',
            'arName' => 'تقرت',
        ],
        [
            'code' => '56',
            'name' => 'Djanet',
            'arName' => 'جانت',
        ],
        [
            'code' => '57',
            'name' => 'In Salah',
            'arName' => 'عين صالح',
        ],
        [
            'code' => '58',
            'name' => 'In Guezzam',
            'arName' => 'عين قزام',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->wilayas as $wilaya) {
            DB::table('wilayas')->insert([
                'id' => $wilaya['code'],
                'name' => $wilaya['name'],
                'arName' => $wilaya['arName'],
            ]);
        }
    }
}
