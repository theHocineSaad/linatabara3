<?php

namespace Database\Seeders;

use App\Models\Baladia;
use Illuminate\Database\Seeder;

class BaladiaSeeder extends Seeder
{
    private $baladiat =
    [
        [
            'id' => '1',
            'name' => 'غزة',
        ],
        [
            'id' => '2',
            'name' => 'جباليا',
        ],

        [
            'id' => '3',
            'name' => 'ديرالبلح',
        ],
        [
            'id' => '4',
            'name' => 'رفح',
        ],
        [
            'id' => '5',
            'name' => 'خان يونس',
        ],
        [
            'id' => '6',
            'name' => 'بيتحانون',
        ],
        [
            'id' => '7',
            'name' => 'بيتلاهيا',
        ],
        [
            'id' => '8',
            'name' => 'النصيرات',
        ],
        [
            'id' => '9',
            'name' => 'البريج',
        ],
        [
            'id' => '10',
            'name' => 'المغازي',
        ],
        [
            'id' => '11',
            'name' => 'الزوايدة',
        ],
        [
            'id' => '12',
            'name' => 'بنيسهيلا',
        ],
        [
            'id' => '13',
            'name' => 'عبسان الكبيرة',
        ],
        [
            'id' => '14',
            'name' => 'عبسان الجديدة',
        ],
        [
            'id' => '15',
            'name' => 'القرارة',
        ],
        [
            'id' => '16',
            'name' => 'المغراقة',
        ],
        [
            'id' => '17',
            'name' => 'خزاعة',
        ],
        [
            'id' => '18',
            'name' => 'الشوكة',
        ],
        [
            'id' => '19',
            'name' => 'الفخاري',
        ],
        [
            'id' => '20',
            'name' => 'النصر',
        ],
        [
            'id' => '21',
            'name' => 'المصدر',
        ],
        [
            'id' => '22',
            'name' => 'الزهراء',
        ],
        [
            'id' => '23',
            'name' => 'وادي غزة',
        ],
        [
            'id' => '24',
            'name' => 'أم النصر',
        ],
        [
            'id' => '25',
            'name' => 'وادي السلقا',
        ],
    ];

    public function run()
    {
        array_walk($this->baladiat, function ($baladia) {
            Baladia::create($baladia);
        });
    }
}
