<?php

namespace Database\Seeders;

use App\Models\Wilaya;
use Illuminate\Database\Seeder;

class WilayaSeeder extends Seeder
{
    private $wilayas = [
        [
            'id' => '1',
            'name' => 'Adrar',
            'arName' => 'أدرار',
        ],
        [
            'id' => '2',
            'name' => 'Chlef',
            'arName' => 'الشلف',
        ],
        [
            'id' => '3',
            'name' => 'Laghouat',
            'arName' => 'الأغواط',
        ],
        [
            'id' => '4',
            'name' => 'Oum El Bouaghi',
            'arName' => 'أم البواقي',
        ],
        [
            'id' => '5',
            'name' => 'Batna',
            'arName' => 'باتنة',
        ],
        [
            'id' => '6',
            'name' => 'Béjaïa',
            'arName' => 'بجاية',
        ],
        [
            'id' => '7',
            'name' => 'Biskra',
            'arName' => 'بسكرة',
        ],
        [
            'id' => '8',
            'name' => 'Bechar',
            'arName' => 'بشار',
        ],
        [
            'id' => '9',
            'name' => 'Blida',
            'arName' => 'البليدة',
        ],
        [
            'id' => '10',
            'name' => 'Bouira',
            'arName' => 'البويرة',
        ],
        [
            'id' => '11',
            'name' => 'Tamanrasset',
            'arName' => 'تمنراست',
        ],
        [
            'id' => '12',
            'name' => 'Tbessa',
            'arName' => 'تبسة',
        ],
        [
            'id' => '13',
            'name' => 'Tlemcen',
            'arName' => 'تلمسان',
        ],
        [
            'id' => '14',
            'name' => 'Tiaret',
            'arName' => 'تيارت',
        ],
        [
            'id' => '15',
            'name' => 'Tizi Ouzou',
            'arName' => 'تيزي وزو',
        ],
        [
            'id' => '16',
            'name' => 'Alger',
            'arName' => 'الجزائر',
        ],
        [
            'id' => '17',
            'name' => 'Djelfa',
            'arName' => 'الجلفة',
        ],
        [
            'id' => '18',
            'name' => 'Jijel',
            'arName' => 'جيجل',
        ],
        [
            'id' => '19',
            'name' => 'Se9tif',
            'arName' => 'سطيف',
        ],
        [
            'id' => '20',
            'name' => 'Saefda',
            'arName' => 'سعيدة',
        ],
        [
            'id' => '21',
            'name' => 'Skikda',
            'arName' => 'سكيكدة',
        ],
        [
            'id' => '22',
            'name' => 'Sidi Bel Abbes',
            'arName' => 'سيدي بلعباس',
        ],
        [
            'id' => '23',
            'name' => 'Annaba',
            'arName' => 'عنابة',
        ],
        [
            'id' => '24',
            'name' => 'Guelma',
            'arName' => 'قالمة',
        ],
        [
            'id' => '25',
            'name' => 'Constantine',
            'arName' => 'قسنطينة',
        ],
        [
            'id' => '26',
            'name' => 'Medea',
            'arName' => 'المدية',
        ],
        [
            'id' => '27',
            'name' => 'Mostaganem',
            'arName' => 'مستغانم',
        ],
        [
            'id' => '28',
            'name' => "M'Sila",
            'arName' => 'المسيلة',
        ],
        [
            'id' => '29',
            'name' => 'Mascara',
            'arName' => 'معسكر',
        ],
        [
            'id' => '30',
            'name' => 'Ouargla',
            'arName' => 'ورقلة',
        ],
        [
            'id' => '31',
            'name' => 'Oran',
            'arName' => 'وهران',
        ],
        [
            'id' => '32',
            'name' => 'El Bayadh',
            'arName' => 'البيض',
        ],
        [
            'id' => '33',
            'name' => 'Illizi',
            'arName' => 'إليزي',
        ],
        [
            'id' => '34',
            'name' => 'Bordj Bou Arreridj',
            'arName' => 'برج بوعريريج',
        ],
        [
            'id' => '35',
            'name' => 'Boumerdes',
            'arName' => 'بومرداس',
        ],
        [
            'id' => '36',
            'name' => 'El Tarf',
            'arName' => 'الطارف',
        ],
        [
            'id' => '37',
            'name' => 'Tindouf',
            'arName' => 'تندوف',
        ],
        [
            'id' => '38',
            'name' => 'Tissemsilt',
            'arName' => 'تيسمسيلت',
        ],
        [
            'id' => '39',
            'name' => 'El Oued',
            'arName' => 'الوادي',
        ],
        [
            'id' => '40',
            'name' => 'Khenchela',
            'arName' => 'خنشلة',
        ],
        [
            'id' => '41',
            'name' => 'Souk Ahras',
            'arName' => 'سوق أهراس',
        ],
        [
            'id' => '42',
            'name' => 'Tipaza',
            'arName' => 'تيبازة',
        ],
        [
            'id' => '43',
            'name' => 'Mila',
            'arName' => 'ميلة',
        ],
        [
            'id' => '44',
            'name' => 'Ain Defla',
            'arName' => 'عين الدفلى',
        ],
        [
            'id' => '45',
            'name' => 'Naama',
            'arName' => 'النعامة',
        ],
        [
            'id' => '46',
            'name' => 'Ain Temouchent',
            'arName' => 'عين تموشنت',
        ],
        [
            'id' => '47',
            'name' => 'Ghardaefa',
            'arName' => 'غرداية',
        ],
        [
            'id' => '48',
            'name' => 'Relizane',
            'arName' => 'غليزان',
        ],
        [
            'id' => '49',
            'name' => "El M'ghair",
            'arName' => 'المغير',
        ],
        [
            'id' => '50',
            'name' => 'El Menia',
            'arName' => 'المنيعة',
        ],
        [
            'id' => '51',
            'name' => 'Ouled Djellal',
            'arName' => 'أولاد جلال',
        ],
        [
            'id' => '52',
            'name' => 'Bordj Baji Mokhtar',
            'arName' => 'برج باجي مختار',
        ],
        [
            'id' => '53',
            'name' => 'Béni Abbès',
            'arName' => 'بني عباس',
        ],
        [
            'id' => '54',
            'name' => 'Timimoun',
            'arName' => 'تيميمون',
        ],
        [
            'id' => '55',
            'name' => 'Touggourt',
            'arName' => 'تقرت',
        ],
        [
            'id' => '56',
            'name' => 'Djanet',
            'arName' => 'جانت',
        ],
        [
            'id' => '57',
            'name' => 'In Salah',
            'arName' => 'عين صالح',
        ],
        [
            'id' => '58',
            'name' => 'In Guezzam',
            'arName' => 'عين قزام',
        ],
    ];

    public function run()
    {
        array_walk($this->wilayas, function ($wilaya) {
            Wilaya::create($wilaya);
        });
    }
}
