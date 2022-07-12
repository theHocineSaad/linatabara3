<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DairaSeeder extends Seeder
{
    private $dairas = [
        1 => [
            'arName' => 'أدرار',
            'name' => 'Adrar',
            'wilaya_id' => '01',
        ],
        2 => [
            'arName' => 'أولف',
            'name' => 'Aoulef',
            'wilaya_id' => '01',
        ],
        3 => [
            'arName' => 'أوقروت',
            'name' => 'Aougrout',
            'wilaya_id' => '49',
        ],
        5 => [
            'arName' => 'برج باجي مختار',
            'name' => 'Bordj Badji Mokhtar',
            'wilaya_id' => '50',
        ],
        7 => [
            'arName' => 'شروين',
            'name' => 'Charouine',
            'wilaya_id' => '49',
        ],
        9 => [
            'arName' => 'فنوغيل',
            'name' => 'Fenoughil',
            'wilaya_id' => '01',
        ],
        10 => [
            'arName' => 'زاوية كنتة',
            'name' => 'Zaouiat Kounta',
            'wilaya_id' => '01',
        ],
        11 => [
            'arName' => 'تنركوك',
            'name' => 'Tinerkouk',
            'wilaya_id' => '49',
        ],
        15 => [
            'arName' => 'تيميمون',
            'name' => 'Timimoun',
            'wilaya_id' => '49',
        ],
        16 => [
            'arName' => 'رقان',
            'name' => 'Reggane',
            'wilaya_id' => '01',
        ],
        18 => [
            'arName' => 'تسابيت',
            'name' => 'Tsabit',
            'wilaya_id' => '01',
        ],
        29 => [
            'arName' => 'أبو الحسن',
            'name' => 'Abou El Hassane',
            'wilaya_id' => '02',
        ],
        30 => [
            'arName' => 'عين مران',
            'name' => 'Ain Merane',
            'wilaya_id' => '02',
        ],
        31 => [
            'arName' => 'الزبوجة',
            'name' => 'Zeboudja',
            'wilaya_id' => '02',
        ],
        32 => [
            'arName' => 'الكريمية',
            'name' => 'El Karimia',
            'wilaya_id' => '02',
        ],
        33 => [
            'arName' => 'بني حواء',
            'name' => 'Beni Haoua',
            'wilaya_id' => '02',
        ],
        34 => [
            'arName' => 'وادي الفضة',
            'name' => 'Oued Fodda',
            'wilaya_id' => '02',
        ],
        35 => [
            'arName' => 'بوقادير',
            'name' => 'Boukadir',
            'wilaya_id' => '02',
        ],
        38 => [
            'arName' => 'أولاد فارس',
            'name' => 'Ouled Fares',
            'wilaya_id' => '02',
        ],
        39 => [
            'arName' => 'الشلف',
            'name' => 'Chlef',
            'wilaya_id' => '02',
        ],
        40 => [
            'arName' => 'تاوقريت',
            'name' => 'Taougrit',
            'wilaya_id' => '02',
        ],
        41 => [
            'arName' => 'أولاد بن عبد القادر',
            'name' => 'Ouled Ben Abdelkader',
            'wilaya_id' => '02',
        ],
        43 => [
            'arName' => 'المرسى',
            'name' => 'El Marsa',
            'wilaya_id' => '02',
        ],
        56 => [
            'arName' => 'تنس',
            'name' => 'Tenes',
            'wilaya_id' => '02',
        ],
        64 => [
            'arName' => 'أفلو',
            'name' => 'Aflou',
            'wilaya_id' => '03',
        ],
        65 => [
            'arName' => 'عين ماضي',
            'name' => 'Ain Madhi',
            'wilaya_id' => '03',
        ],
        66 => [
            'arName' => 'قتلة سيدي سعيد',
            'name' => 'Gueltat Sidi Saad',
            'wilaya_id' => '03',
        ],
        68 => [
            'arName' => 'قصر الحيران',
            'name' => 'Ksar El Hirane',
            'wilaya_id' => '03',
        ],
        69 => [
            'arName' => 'بريدة',
            'name' => 'Brida',
            'wilaya_id' => '03',
        ],
        70 => [
            'arName' => 'سيدي مخلوف',
            'name' => 'Sidi Makhlouf',
            'wilaya_id' => '03',
        ],
        71 => [
            'arName' => 'الغيشة',
            'name' => 'El Ghicha',
            'wilaya_id' => '03',
        ],
        75 => [
            'arName' => 'حاسي الرمل',
            'name' => 'Hassi R\'mel',
            'wilaya_id' => '03',
        ],
        79 => [
            'arName' => 'الأغواط',
            'name' => 'Laghouat',
            'wilaya_id' => '03',
        ],
        80 => [
            'arName' => 'وادي مرة',
            'name' => 'Oued Morra',
            'wilaya_id' => '03',
        ],
        88 => [
            'arName' => 'عين ببوش',
            'name' => 'Ain Babouche',
            'wilaya_id' => '04',
        ],
        89 => [
            'arName' => 'عين البيضاء',
            'name' => 'Ain Beida',
            'wilaya_id' => '04',
        ],
        91 => [
            'arName' => 'عين فكرون',
            'name' => 'Ain Fekroun',
            'wilaya_id' => '04',
        ],
        92 => [
            'arName' => 'عين كرشة',
            'name' => 'Ain Kercha',
            'wilaya_id' => '04',
        ],
        93 => [
            'arName' => 'عين مليلة',
            'name' => 'Ain M\'lila',
            'wilaya_id' => '04',
        ],
        94 => [
            'arName' => 'أم البواقي',
            'name' => 'Oum El Bouaghi',
            'wilaya_id' => '04',
        ],
        95 => [
            'arName' => 'مسكيانة',
            'name' => 'Meskiana',
            'wilaya_id' => '04',
        ],
        97 => [
            'arName' => 'سوق نعمان',
            'name' => 'Souk Naamane',
            'wilaya_id' => '04',
        ],
        98 => [
            'arName' => 'الضلعة',
            'name' => 'Dhalaa',
            'wilaya_id' => '04',
        ],
        99 => [
            'arName' => 'سيقوس',
            'name' => 'Sigus',
            'wilaya_id' => '04',
        ],
        104 => [
            'arName' => 'فكيرينة',
            'name' => 'F\'kirina',
            'wilaya_id' => '04',
        ],
        106 => [
            'arName' => 'قصر الصباحي',
            'name' => 'Ksar Sbahi',
            'wilaya_id' => '04',
        ],
        117 => [
            'arName' => 'عين جاسر',
            'name' => 'Ain Djasser',
            'wilaya_id' => '05',
        ],
        118 => [
            'arName' => 'عين التوتة',
            'name' => 'Ain Touta',
            'wilaya_id' => '05',
        ],
        119 => [
            'arName' => 'المعذر',
            'name' => 'El Madher',
            'wilaya_id' => '05',
        ],
        120 => [
            'arName' => 'أريس',
            'name' => 'Arris',
            'wilaya_id' => '05',
        ],
        121 => [
            'arName' => 'الجزار',
            'name' => 'Djezzar',
            'wilaya_id' => '05',
        ],
        122 => [
            'arName' => 'بريكة',
            'name' => 'Barika',
            'wilaya_id' => '05',
        ],
        123 => [
            'arName' => 'باتنة',
            'name' => 'Batna',
            'wilaya_id' => '05',
        ],
        126 => [
            'arName' => 'الشمرة',
            'name' => 'Chemora',
            'wilaya_id' => '05',
        ],
        127 => [
            'arName' => 'نقاوس',
            'name' => 'N\'gaous',
            'wilaya_id' => '05',
        ],
        129 => [
            'arName' => 'بوزينة',
            'name' => 'Bouzina',
            'wilaya_id' => '05',
        ],
        131 => [
            'arName' => 'ثنية العابد',
            'name' => 'Theniet El Abed',
            'wilaya_id' => '05',
        ],
        137 => [
            'arName' => 'إشمول',
            'name' => 'Ichemoul',
            'wilaya_id' => '05',
        ],
        138 => [
            'arName' => 'تكوت',
            'name' => 'Tkout',
            'wilaya_id' => '05',
        ],
        139 => [
            'arName' => 'رأس العيون',
            'name' => 'Ras El Aioun',
            'wilaya_id' => '05',
        ],
        141 => [
            'arName' => 'مروانة',
            'name' => 'Merouana',
            'wilaya_id' => '05',
        ],
        147 => [
            'arName' => 'سريانة',
            'name' => 'Seriana',
            'wilaya_id' => '05',
        ],
        148 => [
            'arName' => 'أولاد سي سليمان',
            'name' => 'Ouled Si Slimane',
            'wilaya_id' => '05',
        ],
        151 => [
            'arName' => 'منعة',
            'name' => 'Menaa',
            'wilaya_id' => '05',
        ],
        159 => [
            'arName' => 'تيمقاد',
            'name' => 'Timgad',
            'wilaya_id' => '05',
        ],
        162 => [
            'arName' => 'تازولت',
            'name' => 'Tazoult',
            'wilaya_id' => '05',
        ],
        166 => [
            'arName' => 'سقانة',
            'name' => 'Seggana',
            'wilaya_id' => '05',
        ],
        178 => [
            'arName' => 'أدكار',
            'name' => 'Adekar',
            'wilaya_id' => '06',
        ],
        179 => [
            'arName' => 'إغيل علي',
            'name' => 'Ighil Ali',
            'wilaya_id' => '06',
        ],
        180 => [
            'arName' => 'درقينة',
            'name' => 'Darguina',
            'wilaya_id' => '06',
        ],
        181 => [
            'arName' => 'أقبو',
            'name' => 'Akbou',
            'wilaya_id' => '06',
        ],
        182 => [
            'arName' => 'شميني',
            'name' => 'Chemini',
            'wilaya_id' => '06',
        ],
        183 => [
            'arName' => 'صدوق',
            'name' => 'Seddouk',
            'wilaya_id' => '06',
        ],
        184 => [
            'arName' => 'أميزور',
            'name' => 'Amizour',
            'wilaya_id' => '06',
        ],
        185 => [
            'arName' => 'أوقاس',
            'name' => 'Aokas',
            'wilaya_id' => '06',
        ],
        186 => [
            'arName' => 'برباشة',
            'name' => 'Barbacha',
            'wilaya_id' => '06',
        ],
        187 => [
            'arName' => 'بجاية',
            'name' => 'Bejaia',
            'wilaya_id' => '06',
        ],
        190 => [
            'arName' => 'تازملت',
            'name' => 'Tazmalt',
            'wilaya_id' => '06',
        ],
        191 => [
            'arName' => 'بني معوش',
            'name' => 'Beni Maouche',
            'wilaya_id' => '06',
        ],
        194 => [
            'arName' => 'تيشي',
            'name' => 'Tichy',
            'wilaya_id' => '06',
        ],
        198 => [
            'arName' => 'خراطة',
            'name' => 'Kherrata',
            'wilaya_id' => '06',
        ],
        199 => [
            'arName' => 'سيدي عيش',
            'name' => 'Sidi Aich',
            'wilaya_id' => '06',
        ],
        200 => [
            'arName' => 'القصر',
            'name' => 'El Kseur',
            'wilaya_id' => '06',
        ],
        203 => [
            'arName' => 'إفري أوزلاقن',
            'name' => 'Ifri Ouzellaguene',
            'wilaya_id' => '06',
        ],
        209 => [
            'arName' => 'سوق الإثنين',
            'name' => 'Souk El Tenine',
            'wilaya_id' => '06',
        ],
        226 => [
            'arName' => 'تيمزريت',
            'name' => 'Timezrit',
            'wilaya_id' => '06',
        ],
        230 => [
            'arName' => 'سيدي عقبة',
            'name' => 'Sidi Okba',
            'wilaya_id' => '07',
        ],
        231 => [
            'arName' => 'القنطرة',
            'name' => 'El Kantara',
            'wilaya_id' => '07',
        ],
        232 => [
            'arName' => 'سيدي  خالد',
            'name' => 'Sidi Khaled',
            'wilaya_id' => '51',
        ],
        233 => [
            'arName' => 'بسكرة',
            'name' => 'Biskra',
            'wilaya_id' => '07',
        ],
        234 => [
            'arName' => 'طولقة',
            'name' => 'Tolga',
            'wilaya_id' => '07',
        ],
        236 => [
            'arName' => 'جمورة',
            'name' => 'Djemorah',
            'wilaya_id' => '07',
        ],
        237 => [
            'arName' => 'أولاد جلال',
            'name' => 'Ouled Djellal',
            'wilaya_id' => '51',
        ],
        241 => [
            'arName' => 'زريبة الوادي',
            'name' => 'Zeribet El Oued',
            'wilaya_id' => '07',
        ],
        242 => [
            'arName' => 'فوغالة',
            'name' => 'Foughala',
            'wilaya_id' => '07',
        ],
        246 => [
            'arName' => 'الوطاية',
            'name' => 'El Outaya',
            'wilaya_id' => '07',
        ],
        250 => [
            'arName' => 'أورلال',
            'name' => 'Ourlal',
            'wilaya_id' => '07',
        ],
        251 => [
            'arName' => 'مشونش',
            'name' => 'Mechouneche',
            'wilaya_id' => '07',
        ],
        263 => [
            'arName' => 'العبادلة',
            'name' => 'Abadla',
            'wilaya_id' => '08',
        ],
        264 => [
            'arName' => 'بشار',
            'name' => 'Bechar',
            'wilaya_id' => '08',
        ],
        265 => [
            'arName' => 'بني عباس',
            'name' => 'Beni Abbes',
            'wilaya_id' => '52',
        ],
        266 => [
            'arName' => 'كرزاز',
            'name' => 'Kerzaz',
            'wilaya_id' => '52',
        ],
        267 => [
            'arName' => 'بني ونيف',
            'name' => 'Beni Ounif',
            'wilaya_id' => '08',
        ],
        268 => [
            'arName' => 'لحمر',
            'name' => 'Lahmar',
            'wilaya_id' => '08',
        ],
        269 => [
            'arName' => 'الواتة',
            'name' => 'El Ouata',
            'wilaya_id' => '52',
        ],
        271 => [
            'arName' => 'إقلي',
            'name' => 'Igli',
            'wilaya_id' => '52',
        ],
        272 => [
            'arName' => 'القنادسة',
            'name' => 'Kenadsa',
            'wilaya_id' => '08',
        ],
        274 => [
            'arName' => 'أولاد خضير',
            'name' => 'Ouled Khodeir',
            'wilaya_id' => '52',
        ],
        280 => [
            'arName' => 'تبلبالة',
            'name' => 'Tabelbala',
            'wilaya_id' => '08',
        ],
        281 => [
            'arName' => 'تاغيت',
            'name' => 'Taghit',
            'wilaya_id' => '08',
        ],
        284 => [
            'arName' => 'موزاية',
            'name' => 'Mouzaia',
            'wilaya_id' => '09',
        ],
        285 => [
            'arName' => 'أولاد يعيش',
            'name' => 'Ouled Yaich',
            'wilaya_id' => '09',
        ],
        286 => [
            'arName' => 'وادي العلايق',
            'name' => 'Oued El Alleug',
            'wilaya_id' => '09',
        ],
        288 => [
            'arName' => 'البليدة',
            'name' => 'Blida',
            'wilaya_id' => '09',
        ],
        290 => [
            'arName' => 'بوفاريك',
            'name' => 'Boufarik',
            'wilaya_id' => '09',
        ],
        291 => [
            'arName' => 'بوقرة',
            'name' => 'Bougara',
            'wilaya_id' => '09',
        ],
        292 => [
            'arName' => 'بوعينان',
            'name' => 'Bouinan',
            'wilaya_id' => '09',
        ],
        296 => [
            'arName' => 'مفتاح',
            'name' => 'Meftah',
            'wilaya_id' => '09',
        ],
        297 => [
            'arName' => 'العفرون',
            'name' => 'El Affroun',
            'wilaya_id' => '09',
        ],
        300 => [
            'arName' => 'الأربعاء',
            'name' => 'Larbaa',
            'wilaya_id' => '09',
        ],
        309 => [
            'arName' => 'مشد الله',
            'name' => 'M\'chedallah',
            'wilaya_id' => '10',
        ],
        310 => [
            'arName' => 'بشلول',
            'name' => 'Bechloul',
            'wilaya_id' => '10',
        ],
        311 => [
            'arName' => 'عين بسام',
            'name' => 'Ain Bessem',
            'wilaya_id' => '10',
        ],
        313 => [
            'arName' => 'البويرة',
            'name' => 'Bouira',
            'wilaya_id' => '10',
        ],
        316 => [
            'arName' => 'القادرية',
            'name' => 'Kadiria',
            'wilaya_id' => '10',
        ],
        318 => [
            'arName' => 'بئر غبالو',
            'name' => 'Bir Ghbalou',
            'wilaya_id' => '10',
        ],
        319 => [
            'arName' => 'برج أوخريص',
            'name' => 'Bordj Okhriss',
            'wilaya_id' => '10',
        ],
        320 => [
            'arName' => 'الأخضرية',
            'name' => 'Lakhdaria',
            'wilaya_id' => '10',
        ],
        324 => [
            'arName' => 'سور الغزلان',
            'name' => 'Sour El Ghozlane',
            'wilaya_id' => '10',
        ],
        329 => [
            'arName' => 'الهاشمية',
            'name' => 'El Hachimia',
            'wilaya_id' => '10',
        ],
        332 => [
            'arName' => 'سوق الخميس',
            'name' => 'Souk El Khemis',
            'wilaya_id' => '10',
        ],
        335 => [
            'arName' => 'الحيزر',
            'name' => 'Haizer',
            'wilaya_id' => '10',
        ],
        354 => [
            'arName' => 'سيلت',
            'name' => 'Silet',
            'wilaya_id' => '11',
        ],
        355 => [
            'arName' => 'تمنراست',
            'name' => 'Tamanrasset',
            'wilaya_id' => '11',
        ],
        356 => [
            'arName' => 'عين قزام',
            'name' => 'In Guezzam',
            'wilaya_id' => '54',
        ],
        357 => [
            'arName' => 'عين صالح',
            'name' => 'In Salah',
            'wilaya_id' => '53',
        ],
        359 => [
            'arName' => 'تاظروك',
            'name' => 'Tazrouk',
            'wilaya_id' => '11',
        ],
        360 => [
            'arName' => 'إينغر',
            'name' => 'In Ghar',
            'wilaya_id' => '53',
        ],
        363 => [
            'arName' => 'تين زواتين',
            'name' => 'Tin Zouatine',
            'wilaya_id' => '54',
        ],
        364 => [
            'arName' => 'الونزة',
            'name' => 'Ouenza',
            'wilaya_id' => '12',
        ],
        365 => [
            'arName' => 'العقلة',
            'name' => 'El Ogla',
            'wilaya_id' => '12',
        ],
        366 => [
            'arName' => 'الكويف',
            'name' => 'El Kouif',
            'wilaya_id' => '12',
        ],
        367 => [
            'arName' => 'مرسط',
            'name' => 'Morsott',
            'wilaya_id' => '12',
        ],
        368 => [
            'arName' => 'بئر مقدم',
            'name' => 'Bir Mokadem',
            'wilaya_id' => '12',
        ],
        369 => [
            'arName' => 'بئر العاتر',
            'name' => 'Bir El Ater',
            'wilaya_id' => '12',
        ],
        370 => [
            'arName' => 'العوينات',
            'name' => 'El Aouinet',
            'wilaya_id' => '12',
        ],
        372 => [
            'arName' => 'الشريعة',
            'name' => 'Cheria',
            'wilaya_id' => '12',
        ],
        374 => [
            'arName' => 'الماء الابيض',
            'name' => 'El Malabiod',
            'wilaya_id' => '12',
        ],
        381 => [
            'arName' => 'نقرين',
            'name' => 'Negrine',
            'wilaya_id' => '12',
        ],
        387 => [
            'arName' => 'أم علي',
            'name' => 'Oum Ali',
            'wilaya_id' => '12',
        ],
        390 => [
            'arName' => 'تبسة',
            'name' => 'Tebessa',
            'wilaya_id' => '12',
        ],
        392 => [
            'arName' => 'فلاوسن',
            'name' => 'Fellaoucene',
            'wilaya_id' => '13',
        ],
        393 => [
            'arName' => 'شتوان',
            'name' => 'Chetouane',
            'wilaya_id' => '13',
        ],
        394 => [
            'arName' => 'منصورة',
            'name' => 'Mansourah',
            'wilaya_id' => '13',
        ],
        396 => [
            'arName' => 'عين تالوت',
            'name' => 'Ain Tellout',
            'wilaya_id' => '13',
        ],
        398 => [
            'arName' => 'الرمشي',
            'name' => 'Remchi',
            'wilaya_id' => '13',
        ],
        400 => [
            'arName' => 'باب العسة',
            'name' => 'Bab El Assa',
            'wilaya_id' => '13',
        ],
        401 => [
            'arName' => 'بني سنوس',
            'name' => 'Beni Snous',
            'wilaya_id' => '13',
        ],
        402 => [
            'arName' => 'بني بوسعيد',
            'name' => 'Beni Boussaid',
            'wilaya_id' => '13',
        ],
        403 => [
            'arName' => 'هنين',
            'name' => 'Honnaine',
            'wilaya_id' => '13',
        ],
        406 => [
            'arName' => 'أولاد ميمون',
            'name' => 'Ouled Mimoun',
            'wilaya_id' => '13',
        ],
        408 => [
            'arName' => 'بن سكران',
            'name' => 'Bensekrane',
            'wilaya_id' => '13',
        ],
        409 => [
            'arName' => 'صبرة',
            'name' => 'Sabra',
            'wilaya_id' => '13',
        ],
        410 => [
            'arName' => 'سيدي الجيلالي',
            'name' => 'Sidi Djillali',
            'wilaya_id' => '13',
        ],
        412 => [
            'arName' => 'الغزوات',
            'name' => 'Ghazaouet',
            'wilaya_id' => '13',
        ],
        413 => [
            'arName' => 'ندرومة',
            'name' => 'Nedroma',
            'wilaya_id' => '13',
        ],
        414 => [
            'arName' => 'سبدو',
            'name' => 'Sebdou',
            'wilaya_id' => '13',
        ],
        420 => [
            'arName' => 'مغنية',
            'name' => 'Maghnia',
            'wilaya_id' => '13',
        ],
        421 => [
            'arName' => 'الحناية',
            'name' => 'Hennaya',
            'wilaya_id' => '13',
        ],
        425 => [
            'arName' => 'مرسى بن مهيدي',
            'name' => 'Marsa Ben Mehdi',
            'wilaya_id' => '13',
        ],
        443 => [
            'arName' => 'تلمسان',
            'name' => 'Tlemcen',
            'wilaya_id' => '13',
        ],
        445 => [
            'arName' => 'دحموني',
            'name' => 'Dahmouni',
            'wilaya_id' => '14',
        ],
        446 => [
            'arName' => 'عين الذهب',
            'name' => 'Ain Deheb',
            'wilaya_id' => '14',
        ],
        447 => [
            'arName' => 'مهدية',
            'name' => 'Mahdia',
            'wilaya_id' => '14',
        ],
        448 => [
            'arName' => 'فرندة',
            'name' => 'Frenda',
            'wilaya_id' => '14',
        ],
        449 => [
            'arName' => 'عين كرمس',
            'name' => 'Ain Kermes',
            'wilaya_id' => '14',
        ],
        450 => [
            'arName' => 'حمادية',
            'name' => 'Hamadia',
            'wilaya_id' => '14',
        ],
        454 => [
            'arName' => 'مشرع الصفا',
            'name' => 'Mechraa Sfa',
            'wilaya_id' => '14',
        ],
        455 => [
            'arName' => 'السوقر',
            'name' => 'Sougueur',
            'wilaya_id' => '14',
        ],
        457 => [
            'arName' => 'رحوية',
            'name' => 'Rahouia',
            'wilaya_id' => '14',
        ],
        459 => [
            'arName' => 'قصر الشلالة',
            'name' => 'Ksar Chellala',
            'wilaya_id' => '14',
        ],
        464 => [
            'arName' => 'مدروسة',
            'name' => 'Medroussa',
            'wilaya_id' => '14',
        ],
        465 => [
            'arName' => 'مغيلة',
            'name' => 'Meghila',
            'wilaya_id' => '14',
        ],
        469 => [
            'arName' => 'وادي ليلي',
            'name' => 'Oued Lili',
            'wilaya_id' => '14',
        ],
        483 => [
            'arName' => 'تيارت',
            'name' => 'Tiaret',
            'wilaya_id' => '14',
        ],
        487 => [
            'arName' => 'عين الحمام',
            'name' => 'Ain El Hammam',
            'wilaya_id' => '15',
        ],
        488 => [
            'arName' => 'أزفون',
            'name' => 'Azeffoun',
            'wilaya_id' => '15',
        ],
        489 => [
            'arName' => 'واضية',
            'name' => 'Ouadhias',
            'wilaya_id' => '15',
        ],
        491 => [
            'arName' => 'ذراع الميزان',
            'name' => 'Draa El Mizan',
            'wilaya_id' => '15',
        ],
        492 => [
            'arName' => 'الأربعاء ناث إيراثن',
            'name' => 'Larbaa Nath Iraten',
            'wilaya_id' => '15',
        ],
        494 => [
            'arName' => 'واسيف',
            'name' => 'Ouacif',
            'wilaya_id' => '15',
        ],
        495 => [
            'arName' => 'مقلع',
            'name' => 'Mekla',
            'wilaya_id' => '15',
        ],
        497 => [
            'arName' => 'واقنون',
            'name' => 'Ouaguenoun',
            'wilaya_id' => '15',
        ],
        499 => [
            'arName' => 'بني دوالة',
            'name' => 'Beni Douala',
            'wilaya_id' => '15',
        ],
        500 => [
            'arName' => 'تيزي راشد',
            'name' => 'Tizi Rached',
            'wilaya_id' => '15',
        ],
        505 => [
            'arName' => 'بوغني',
            'name' => 'Boghni',
            'wilaya_id' => '15',
        ],
        506 => [
            'arName' => 'عزازقة',
            'name' => 'Azazga',
            'wilaya_id' => '15',
        ],
        511 => [
            'arName' => 'بني يني',
            'name' => 'Benni Yenni',
            'wilaya_id' => '15',
        ],
        512 => [
            'arName' => 'بوزقن',
            'name' => 'Bouzeguene',
            'wilaya_id' => '15',
        ],
        514 => [
            'arName' => 'ماكودة',
            'name' => 'Makouda',
            'wilaya_id' => '15',
        ],
        517 => [
            'arName' => 'ذراع بن خدة',
            'name' => 'Draa Ben Khedda',
            'wilaya_id' => '15',
        ],
        523 => [
            'arName' => 'إفرحونان',
            'name' => 'Iferhounene',
            'wilaya_id' => '15',
        ],
        525 => [
            'arName' => 'تيقزيرت',
            'name' => 'Tigzirt',
            'wilaya_id' => '15',
        ],
        531 => [
            'arName' => 'معاتقة',
            'name' => 'Maatkas',
            'wilaya_id' => '15',
        ],
        536 => [
            'arName' => 'تيزي غنيف',
            'name' => 'Tizi-Ghenif',
            'wilaya_id' => '15',
        ],
        549 => [
            'arName' => 'تيزي وزو',
            'name' => 'Tizi Ouzou',
            'wilaya_id' => '15',
        ],
        554 => [
            'arName' => 'الشراقة',
            'name' => 'Cheraga',
            'wilaya_id' => '16',
        ],
        555 => [
            'arName' => 'الدار البيضاء',
            'name' => 'Dar El Beida',
            'wilaya_id' => '16',
        ],
        556 => [
            'arName' => 'سيدي امحمد',
            'name' => 'Sidi M\'hamed',
            'wilaya_id' => '16',
        ],
        557 => [
            'arName' => 'باب الوادي',
            'name' => 'Bab El Oued',
            'wilaya_id' => '16',
        ],
        559 => [
            'arName' => 'الدرارية',
            'name' => 'Draria',
            'wilaya_id' => '16',
        ],
        560 => [
            'arName' => 'الحراش',
            'name' => 'El Harrach',
            'wilaya_id' => '16',
        ],
        561 => [
            'arName' => 'براقي',
            'name' => 'Baraki',
            'wilaya_id' => '16',
        ],
        562 => [
            'arName' => 'بوزريعة',
            'name' => 'Bouzareah',
            'wilaya_id' => '16',
        ],
        564 => [
            'arName' => 'بئر مراد رايس',
            'name' => 'Bir Mourad Rais',
            'wilaya_id' => '16',
        ],
        566 => [
            'arName' => 'بئر توتة',
            'name' => 'Birtouta',
            'wilaya_id' => '16',
        ],
        583 => [
            'arName' => 'حسين داي',
            'name' => 'Hussein Dey',
            'wilaya_id' => '16',
        ],
        587 => [
            'arName' => 'الرويبة',
            'name' => 'Rouiba',
            'wilaya_id' => '16',
        ],
        593 => [
            'arName' => 'زرالدة',
            'name' => 'Zeralda',
            'wilaya_id' => '16',
        ],
        611 => [
            'arName' => 'الادريسية',
            'name' => 'El Idrissia',
            'wilaya_id' => '17',
        ],
        612 => [
            'arName' => 'عين الإبل',
            'name' => 'Ain El Ibel',
            'wilaya_id' => '17',
        ],
        613 => [
            'arName' => 'حد الصحاري',
            'name' => 'Had Sahary',
            'wilaya_id' => '17',
        ],
        614 => [
            'arName' => 'حاسي بحبح',
            'name' => 'Hassi Bahbah',
            'wilaya_id' => '17',
        ],
        615 => [
            'arName' => 'عين وسارة',
            'name' => 'Ain Oussera',
            'wilaya_id' => '17',
        ],
        616 => [
            'arName' => 'فيض البطمة',
            'name' => 'Faidh El Botma',
            'wilaya_id' => '17',
        ],
        617 => [
            'arName' => 'بيرين',
            'name' => 'Birine',
            'wilaya_id' => '17',
        ],
        618 => [
            'arName' => 'الشارف',
            'name' => 'Charef',
            'wilaya_id' => '17',
        ],
        622 => [
            'arName' => 'دار الشيوخ',
            'name' => 'Dar Chioukh',
            'wilaya_id' => '17',
        ],
        623 => [
            'arName' => 'مسعد',
            'name' => 'Messaad',
            'wilaya_id' => '17',
        ],
        624 => [
            'arName' => 'الجلفة',
            'name' => 'Djelfa',
            'wilaya_id' => '17',
        ],
        628 => [
            'arName' => 'سيدي لعجال',
            'name' => 'Sidi Laadjel',
            'wilaya_id' => '17',
        ],
        647 => [
            'arName' => 'الشقفة',
            'name' => 'Chekfa',
            'wilaya_id' => '18',
        ],
        648 => [
            'arName' => 'جيملة',
            'name' => 'Djimla',
            'wilaya_id' => '18',
        ],
        649 => [
            'arName' => 'العنصر',
            'name' => 'El Ancer',
            'wilaya_id' => '18',
        ],
        650 => [
            'arName' => 'الطاهير',
            'name' => 'Taher',
            'wilaya_id' => '18',
        ],
        656 => [
            'arName' => 'العوانة',
            'name' => 'El Aouana',
            'wilaya_id' => '18',
        ],
        658 => [
            'arName' => 'الميلية',
            'name' => 'El Milia',
            'wilaya_id' => '18',
        ],
        660 => [
            'arName' => 'زيامة منصورية',
            'name' => 'Ziamah Mansouriah',
            'wilaya_id' => '18',
        ],
        661 => [
            'arName' => 'السطارة',
            'name' => 'Settara',
            'wilaya_id' => '18',
        ],
        662 => [
            'arName' => 'جيجل',
            'name' => 'Jijel',
            'wilaya_id' => '18',
        ],
        663 => [
            'arName' => 'تاكسنة',
            'name' => 'Texenna',
            'wilaya_id' => '18',
        ],
        666 => [
            'arName' => 'سيدي معروف',
            'name' => 'Sidi Marouf',
            'wilaya_id' => '18',
        ],
        675 => [
            'arName' => 'عين أرنات',
            'name' => 'Ain Arnat',
            'wilaya_id' => '19',
        ],
        677 => [
            'arName' => 'عين أزال',
            'name' => 'Ain Azel',
            'wilaya_id' => '19',
        ],
        678 => [
            'arName' => 'عين الكبيرة',
            'name' => 'Ain El Kebira',
            'wilaya_id' => '19',
        ],
        680 => [
            'arName' => 'عين ولمان',
            'name' => 'Ain Oulmene',
            'wilaya_id' => '19',
        ],
        681 => [
            'arName' => 'بني ورتيلان',
            'name' => 'Beni Ourtilane',
            'wilaya_id' => '19',
        ],
        682 => [
            'arName' => 'بوقاعة',
            'name' => 'Bougaa',
            'wilaya_id' => '19',
        ],
        683 => [
            'arName' => 'بني عزيز',
            'name' => 'Beni Aziz',
            'wilaya_id' => '19',
        ],
        684 => [
            'arName' => 'بوعنداس',
            'name' => 'Bouandas',
            'wilaya_id' => '19',
        ],
        686 => [
            'arName' => 'عموشة',
            'name' => 'Amoucha',
            'wilaya_id' => '19',
        ],
        687 => [
            'arName' => 'بابور',
            'name' => 'Babor',
            'wilaya_id' => '19',
        ],
        688 => [
            'arName' => 'العلمة',
            'name' => 'El Eulma',
            'wilaya_id' => '19',
        ],
        690 => [
            'arName' => 'بئر العرش',
            'name' => 'Bir El Arch',
            'wilaya_id' => '19',
        ],
        692 => [
            'arName' => 'جميلة',
            'name' => 'Djemila',
            'wilaya_id' => '19',
        ],
        702 => [
            'arName' => 'صالح باي',
            'name' => 'Salah Bey',
            'wilaya_id' => '19',
        ],
        705 => [
            'arName' => 'حمام قرقور',
            'name' => 'Hammam Guergour',
            'wilaya_id' => '19',
        ],
        711 => [
            'arName' => 'قنزات',
            'name' => 'Guenzet',
            'wilaya_id' => '19',
        ],
        712 => [
            'arName' => 'قجال',
            'name' => 'Guidjel',
            'wilaya_id' => '19',
        ],
        713 => [
            'arName' => 'حمام السخنة',
            'name' => 'Hammam Sokhna',
            'wilaya_id' => '19',
        ],
        719 => [
            'arName' => 'ماوكلان',
            'name' => 'Maoklane',
            'wilaya_id' => '19',
        ],
        729 => [
            'arName' => 'سطيف',
            'name' => 'Setif',
            'wilaya_id' => '19',
        ],
        735 => [
            'arName' => 'عين الحجر',
            'name' => 'Ain El Hadjar',
            'wilaya_id' => '20',
        ],
        736 => [
            'arName' => 'الحساسنة',
            'name' => 'El Hassasna',
            'wilaya_id' => '20',
        ],
        737 => [
            'arName' => 'أولاد ابراهيم',
            'name' => 'Ouled Brahim',
            'wilaya_id' => '20',
        ],
        738 => [
            'arName' => 'يوب',
            'name' => 'Youb',
            'wilaya_id' => '20',
        ],
        740 => [
            'arName' => 'سيدي بوبكر',
            'name' => 'Sidi Boubekeur',
            'wilaya_id' => '20',
        ],
        745 => [
            'arName' => 'سعيدة',
            'name' => 'Saida',
            'wilaya_id' => '20',
        ],
        751 => [
            'arName' => 'سيدي مزغيش',
            'name' => 'Sidi Mezghiche',
            'wilaya_id' => '21',
        ],
        752 => [
            'arName' => 'عزابة',
            'name' => 'Azzaba',
            'wilaya_id' => '21',
        ],
        753 => [
            'arName' => 'عين قشرة',
            'name' => 'Ain Kechra',
            'wilaya_id' => '21',
        ],
        754 => [
            'arName' => 'الحدائق',
            'name' => 'El Hadaiek',
            'wilaya_id' => '21',
        ],
        756 => [
            'arName' => 'بن عزوز',
            'name' => 'Ben Azzouz',
            'wilaya_id' => '21',
        ],
        758 => [
            'arName' => 'رمضان جمال',
            'name' => 'Ramdane Djamel',
            'wilaya_id' => '21',
        ],
        760 => [
            'arName' => 'القل',
            'name' => 'Collo',
            'wilaya_id' => '21',
        ],
        761 => [
            'arName' => 'تمالوس',
            'name' => 'Tamalous',
            'wilaya_id' => '21',
        ],
        766 => [
            'arName' => 'الحروش',
            'name' => 'El Harrouch',
            'wilaya_id' => '21',
        ],
        772 => [
            'arName' => 'سكيكدة',
            'name' => 'Skikda',
            'wilaya_id' => '21',
        ],
        774 => [
            'arName' => 'الزيتونة',
            'name' => 'Zitouna',
            'wilaya_id' => '21',
        ],
        776 => [
            'arName' => 'أولاد عطية',
            'name' => 'Ouled Attia',
            'wilaya_id' => '21',
        ],
        781 => [
            'arName' => 'أم الطوب',
            'name' => 'Oum Toub',
            'wilaya_id' => '21',
        ],
        789 => [
            'arName' => 'عين البرد',
            'name' => 'Ain El Berd',
            'wilaya_id' => '22',
        ],
        790 => [
            'arName' => 'سيدي علي بوسيدي',
            'name' => 'Sidi Ali Boussidi',
            'wilaya_id' => '22',
        ],
        791 => [
            'arName' => 'تسالة',
            'name' => 'Tessala',
            'wilaya_id' => '22',
        ],
        792 => [
            'arName' => 'مولاي سليسن',
            'name' => 'Moulay Slissen',
            'wilaya_id' => '22',
        ],
        793 => [
            'arName' => 'سفيزف',
            'name' => 'Sfisef',
            'wilaya_id' => '22',
        ],
        794 => [
            'arName' => 'سيدي لحسن',
            'name' => 'Sidi Lahcene',
            'wilaya_id' => '22',
        ],
        795 => [
            'arName' => 'بن باديس',
            'name' => 'Ben Badis',
            'wilaya_id' => '22',
        ],
        796 => [
            'arName' => 'مصطفى بن ابراهيم',
            'name' => 'Mostefa  Ben Brahim',
            'wilaya_id' => '22',
        ],
        798 => [
            'arName' => 'تنيرة',
            'name' => 'Tenira',
            'wilaya_id' => '22',
        ],
        799 => [
            'arName' => 'مرحوم',
            'name' => 'Marhoum',
            'wilaya_id' => '22',
        ],
        801 => [
            'arName' => 'سيدي علي بن يوب',
            'name' => 'Sidi Ali Ben Youb',
            'wilaya_id' => '22',
        ],
        803 => [
            'arName' => 'تلاغ',
            'name' => 'Telagh',
            'wilaya_id' => '22',
        ],
        811 => [
            'arName' => 'مرين',
            'name' => 'Merine',
            'wilaya_id' => '22',
        ],
        815 => [
            'arName' => 'راس الماء',
            'name' => 'Ras El Ma',
            'wilaya_id' => '22',
        ],
        824 => [
            'arName' => 'سيدي بلعباس',
            'name' => 'Sidi Bel Abbes',
            'wilaya_id' => '22',
        ],
        841 => [
            'arName' => 'عين الباردة',
            'name' => 'Ain El Berda',
            'wilaya_id' => '23',
        ],
        842 => [
            'arName' => 'عنابة',
            'name' => 'Annaba',
            'wilaya_id' => '23',
        ],
        843 => [
            'arName' => 'برحال',
            'name' => 'Berrahal',
            'wilaya_id' => '23',
        ],
        844 => [
            'arName' => 'شطايبي',
            'name' => 'Chetaibi',
            'wilaya_id' => '23',
        ],
        846 => [
            'arName' => 'البوني',
            'name' => 'El Bouni',
            'wilaya_id' => '23',
        ],
        848 => [
            'arName' => 'الحجار',
            'name' => 'El Hadjar',
            'wilaya_id' => '23',
        ],
        853 => [
            'arName' => 'بوشقوف',
            'name' => 'Bouchegouf',
            'wilaya_id' => '24',
        ],
        854 => [
            'arName' => 'عين مخلوف',
            'name' => 'Ain Makhlouf',
            'wilaya_id' => '24',
        ],
        856 => [
            'arName' => 'وادي الزناتي',
            'name' => 'Oued Zenati',
            'wilaya_id' => '24',
        ],
        857 => [
            'arName' => 'خزارة',
            'name' => 'Khezaras',
            'wilaya_id' => '24',
        ],
        858 => [
            'arName' => 'قلعة بوصبع',
            'name' => 'Guelaat Bousbaa',
            'wilaya_id' => '24',
        ],
        859 => [
            'arName' => 'قالمة',
            'name' => 'Guelma',
            'wilaya_id' => '24',
        ],
        863 => [
            'arName' => 'حمام دباغ',
            'name' => 'Hammam Debagh',
            'wilaya_id' => '24',
        ],
        864 => [
            'arName' => 'هيليوبوليس',
            'name' => 'Heliopolis',
            'wilaya_id' => '24',
        ],
        867 => [
            'arName' => 'حمام النبايل',
            'name' => 'Hammam N\'bails',
            'wilaya_id' => '24',
        ],
        877 => [
            'arName' => 'عين حساينية',
            'name' => 'Ain Hessainia',
            'wilaya_id' => '24',
        ],
        887 => [
            'arName' => 'عين عبيد',
            'name' => 'Ain Abid',
            'wilaya_id' => '25',
        ],
        888 => [
            'arName' => 'الخروب',
            'name' => 'El Khroub',
            'wilaya_id' => '25',
        ],
        890 => [
            'arName' => 'زيغود يوسف',
            'name' => 'Zighoud Youcef',
            'wilaya_id' => '25',
        ],
        891 => [
            'arName' => 'قسنطينة',
            'name' => 'Constantine',
            'wilaya_id' => '25',
        ],
        892 => [
            'arName' => 'حامة بوزيان',
            'name' => 'Hamma Bouziane',
            'wilaya_id' => '25',
        ],
        895 => [
            'arName' => 'ابن زياد',
            'name' => 'Ibn Ziad',
            'wilaya_id' => '25',
        ],
        899 => [
            'arName' => 'عين بوسيف',
            'name' => 'Ain Boucif',
            'wilaya_id' => '26',
        ],
        900 => [
            'arName' => 'شلالة العذاورة',
            'name' => 'Chellalat El Adhaoura',
            'wilaya_id' => '26',
        ],
        901 => [
            'arName' => 'تابلاط',
            'name' => 'Tablat',
            'wilaya_id' => '26',
        ],
        902 => [
            'arName' => 'عزيز',
            'name' => 'Aziz',
            'wilaya_id' => '26',
        ],
        903 => [
            'arName' => 'العمارية',
            'name' => 'El Omaria',
            'wilaya_id' => '26',
        ],
        904 => [
            'arName' => 'وزرة',
            'name' => 'Ouzera',
            'wilaya_id' => '26',
        ],
        905 => [
            'arName' => 'بني سليمان',
            'name' => 'Beni Slimane',
            'wilaya_id' => '26',
        ],
        906 => [
            'arName' => 'البرواقية',
            'name' => 'Berrouaghia',
            'wilaya_id' => '26',
        ],
        907 => [
            'arName' => 'القلب الكبير',
            'name' => 'Guelb El Kebir',
            'wilaya_id' => '26',
        ],
        908 => [
            'arName' => 'أولاد عنتر',
            'name' => 'Ouled Antar',
            'wilaya_id' => '26',
        ],
        909 => [
            'arName' => 'الشهبونية',
            'name' => 'Chahbounia',
            'wilaya_id' => '26',
        ],
        910 => [
            'arName' => 'سي المحجوب',
            'name' => 'Si Mahdjoub',
            'wilaya_id' => '26',
        ],
        911 => [
            'arName' => 'سيدي نعمان',
            'name' => 'Sidi Naamane',
            'wilaya_id' => '26',
        ],
        918 => [
            'arName' => 'السواقي',
            'name' => 'Souaghi',
            'wilaya_id' => '26',
        ],
        919 => [
            'arName' => 'المدية',
            'name' => 'Medea',
            'wilaya_id' => '26',
        ],
        920 => [
            'arName' => 'العزيزية',
            'name' => 'El Azizia',
            'wilaya_id' => '26',
        ],
        926 => [
            'arName' => 'عوامري',
            'name' => 'Ouamri',
            'wilaya_id' => '26',
        ],
        929 => [
            'arName' => 'قصر البخاري',
            'name' => 'Ksar El Boukhari',
            'wilaya_id' => '26',
        ],
        932 => [
            'arName' => 'سغوان',
            'name' => 'Seghouane',
            'wilaya_id' => '26',
        ],
        963 => [
            'arName' => 'عشعاشة',
            'name' => 'Achaacha',
            'wilaya_id' => '27',
        ],
        964 => [
            'arName' => 'خير الدين',
            'name' => 'Kheir Eddine',
            'wilaya_id' => '27',
        ],
        965 => [
            'arName' => 'عين نويسي',
            'name' => 'Ain Nouicy',
            'wilaya_id' => '27',
        ],
        966 => [
            'arName' => 'ماسرة',
            'name' => 'Mesra',
            'wilaya_id' => '27',
        ],
        967 => [
            'arName' => 'عين تادلس',
            'name' => 'Ain Tedeles',
            'wilaya_id' => '27',
        ],
        968 => [
            'arName' => 'سيدي لخضر',
            'name' => 'Sidi Lakhdar',
            'wilaya_id' => '27',
        ],
        969 => [
            'arName' => 'بوقيراط',
            'name' => 'Bouguirat',
            'wilaya_id' => '27',
        ],
        972 => [
            'arName' => 'حاسي ماماش',
            'name' => 'Hassi Mameche',
            'wilaya_id' => '27',
        ],
        979 => [
            'arName' => 'مستغانم',
            'name' => 'Mostaganem',
            'wilaya_id' => '27',
        ],
        983 => [
            'arName' => 'سيدي علي',
            'name' => 'Sidi Ali',
            'wilaya_id' => '27',
        ],
        995 => [
            'arName' => 'عين الحجل',
            'name' => 'Ain El Hadjel',
            'wilaya_id' => '28',
        ],
        996 => [
            'arName' => 'عين الملح',
            'name' => 'Ain El Melh',
            'wilaya_id' => '28',
        ],
        998 => [
            'arName' => 'مقرة',
            'name' => 'Magra',
            'wilaya_id' => '28',
        ],
        1001 => [
            'arName' => 'بن سرور',
            'name' => 'Ben Srour',
            'wilaya_id' => '28',
        ],
        1002 => [
            'arName' => 'سيدي عيسى',
            'name' => 'Sidi Aissa',
            'wilaya_id' => '28',
        ],
        1003 => [
            'arName' => 'أولاد سيدي ابراهيم',
            'name' => 'Ouled Sidi Brahim',
            'wilaya_id' => '28',
        ],
        1006 => [
            'arName' => 'بوسعادة',
            'name' => 'Bousaada',
            'wilaya_id' => '28',
        ],
        1008 => [
            'arName' => 'شلال',
            'name' => 'Chellal',
            'wilaya_id' => '28',
        ],
        1010 => [
            'arName' => 'جبل مساعد',
            'name' => 'Djebel Messaad',
            'wilaya_id' => '28',
        ],
        1012 => [
            'arName' => 'خبانة',
            'name' => 'Khoubana',
            'wilaya_id' => '28',
        ],
        1013 => [
            'arName' => 'حمام الضلعة',
            'name' => 'Hammam Dalaa',
            'wilaya_id' => '28',
        ],
        1016 => [
            'arName' => 'أولاد دراج',
            'name' => 'Ouled Derradj',
            'wilaya_id' => '28',
        ],
        1020 => [
            'arName' => 'امجدل',
            'name' => 'Medjedel',
            'wilaya_id' => '28',
        ],
        1023 => [
            'arName' => 'المسيلة',
            'name' => 'M\'sila',
            'wilaya_id' => '28',
        ],
        1034 => [
            'arName' => 'سيدي عامر',
            'name' => 'Sidi Ameur',
            'wilaya_id' => '28',
        ],
        1042 => [
            'arName' => 'عين فارس',
            'name' => 'Ain Fares',
            'wilaya_id' => '29',
        ],
        1043 => [
            'arName' => 'عين فكان',
            'name' => 'Ain Fekan',
            'wilaya_id' => '29',
        ],
        1044 => [
            'arName' => 'وادي الأبطال',
            'name' => 'Oued El Abtal',
            'wilaya_id' => '29',
        ],
        1046 => [
            'arName' => 'عقاز',
            'name' => 'Oggaz',
            'wilaya_id' => '29',
        ],
        1047 => [
            'arName' => 'عوف',
            'name' => 'Aouf',
            'wilaya_id' => '29',
        ],
        1049 => [
            'arName' => 'سيق',
            'name' => 'Sig',
            'wilaya_id' => '29',
        ],
        1050 => [
            'arName' => 'بوحنيفية',
            'name' => 'Bouhanifia',
            'wilaya_id' => '29',
        ],
        1052 => [
            'arName' => 'البرج',
            'name' => 'El Bordj',
            'wilaya_id' => '29',
        ],
        1053 => [
            'arName' => 'زهانة',
            'name' => 'Zahana',
            'wilaya_id' => '29',
        ],
        1054 => [
            'arName' => 'المحمدية',
            'name' => 'Mohammadia',
            'wilaya_id' => '29',
        ],
        1056 => [
            'arName' => 'الحشم',
            'name' => 'Hachem',
            'wilaya_id' => '29',
        ],
        1057 => [
            'arName' => 'تيزي',
            'name' => 'Tizi',
            'wilaya_id' => '29',
        ],
        1063 => [
            'arName' => 'غريس',
            'name' => 'Ghriss',
            'wilaya_id' => '29',
        ],
        1064 => [
            'arName' => 'وادي التاغية',
            'name' => 'Oued Taria',
            'wilaya_id' => '29',
        ],
        1069 => [
            'arName' => 'معسكر',
            'name' => 'Mascara',
            'wilaya_id' => '29',
        ],
        1079 => [
            'arName' => 'تيغنيف',
            'name' => 'Tighennif',
            'wilaya_id' => '29',
        ],
        1089 => [
            'arName' => 'سيدي خويلد',
            'name' => 'Sidi Khouiled',
            'wilaya_id' => '30',
        ],
        1090 => [
            'arName' => 'الطيبات',
            'name' => 'Taibet',
            'wilaya_id' => '55',
        ],
        1091 => [
            'arName' => 'تماسين',
            'name' => 'Temacine',
            'wilaya_id' => '55',
        ],
        1092 => [
            'arName' => 'الحجيرة',
            'name' => 'El-Hadjira',
            'wilaya_id' => '55',
        ],
        1093 => [
            'arName' => 'البرمة',
            'name' => 'El Borma',
            'wilaya_id' => '30',
        ],
        1096 => [
            'arName' => 'حاسي مسعود',
            'name' => 'Hassi Messaoud',
            'wilaya_id' => '30',
        ],
        1097 => [
            'arName' => 'المقارين',
            'name' => 'Megarine',
            'wilaya_id' => '55',
        ],
        1099 => [
            'arName' => 'تقرت',
            'name' => 'Touggourt',
            'wilaya_id' => '55',
        ],
        1100 => [
            'arName' => 'انقوسة',
            'name' => 'N\'goussa',
            'wilaya_id' => '30',
        ],
        1101 => [
            'arName' => 'ورقلة',
            'name' => 'Ouargla',
            'wilaya_id' => '30',
        ],
        1110 => [
            'arName' => 'بطيوة',
            'name' => 'Bethioua',
            'wilaya_id' => '31',
        ],
        1111 => [
            'arName' => 'بوتليليس',
            'name' => 'Boutlelis',
            'wilaya_id' => '31',
        ],
        1112 => [
            'arName' => 'عين الترك',
            'name' => 'Ain Turk',
            'wilaya_id' => '31',
        ],
        1113 => [
            'arName' => 'أرزيو',
            'name' => 'Arzew',
            'wilaya_id' => '31',
        ],
        1114 => [
            'arName' => 'قديل',
            'name' => 'Gdyel',
            'wilaya_id' => '31',
        ],
        1116 => [
            'arName' => 'بئر الجير',
            'name' => 'Bir El Djir',
            'wilaya_id' => '31',
        ],
        1117 => [
            'arName' => 'وادي تليلات',
            'name' => 'Oued Tlelat',
            'wilaya_id' => '31',
        ],
        1122 => [
            'arName' => 'السانية',
            'name' => 'Es Senia',
            'wilaya_id' => '31',
        ],
        1131 => [
            'arName' => 'وهران',
            'name' => 'Oran',
            'wilaya_id' => '31',
        ],
        1136 => [
            'arName' => 'الأبيض سيدي الشيخ',
            'name' => 'Labiodh Sidi Cheikh',
            'wilaya_id' => '32',
        ],
        1138 => [
            'arName' => 'بوعلام',
            'name' => 'Boualem',
            'wilaya_id' => '32',
        ],
        1139 => [
            'arName' => 'بوقطب',
            'name' => 'Bougtoub',
            'wilaya_id' => '32',
        ],
        1140 => [
            'arName' => 'بوسمغون',
            'name' => 'Boussemghoun',
            'wilaya_id' => '32',
        ],
        1141 => [
            'arName' => 'بريزينة',
            'name' => 'Brezina',
            'wilaya_id' => '32',
        ],
        1142 => [
            'arName' => 'رقاصة',
            'name' => 'Rogassa',
            'wilaya_id' => '32',
        ],
        1143 => [
            'arName' => 'شلالة',
            'name' => 'Chellala',
            'wilaya_id' => '32',
        ],
        1144 => [
            'arName' => 'البيض',
            'name' => 'El Bayadh',
            'wilaya_id' => '32',
        ],
        1158 => [
            'arName' => 'جانت',
            'name' => 'Djanet',
            'wilaya_id' => '56',
        ],
        1159 => [
            'arName' => 'إن أمناس',
            'name' => 'In Amenas',
            'wilaya_id' => '33',
        ],
        1162 => [
            'arName' => 'إيليزي',
            'name' => 'Illizi',
            'wilaya_id' => '33',
        ],
        1164 => [
            'arName' => 'عين تاغروت',
            'name' => 'Ain Taghrout',
            'wilaya_id' => '34',
        ],
        1165 => [
            'arName' => 'رأس الوادي',
            'name' => 'Ras El Oued',
            'wilaya_id' => '34',
        ],
        1166 => [
            'arName' => 'برج بوعريريج',
            'name' => 'Bordj Bou Arreridj',
            'wilaya_id' => '34',
        ],
        1167 => [
            'arName' => 'برج الغدير',
            'name' => 'Bordj Ghedir',
            'wilaya_id' => '34',
        ],
        1168 => [
            'arName' => 'المنصورة',
            'name' => 'Mansourah',
            'wilaya_id' => '34',
        ],
        1169 => [
            'arName' => 'بئر قاصد علي',
            'name' => 'Bir Kasdali',
            'wilaya_id' => '34',
        ],
        1171 => [
            'arName' => 'برج زمورة',
            'name' => 'Bordj Zemmoura',
            'wilaya_id' => '34',
        ],
        1172 => [
            'arName' => 'جعافرة',
            'name' => 'Djaafra',
            'wilaya_id' => '34',
        ],
        1174 => [
            'arName' => 'الحمادية',
            'name' => 'El Hamadia',
            'wilaya_id' => '34',
        ],
        1175 => [
            'arName' => 'مجانة',
            'name' => 'Medjana',
            'wilaya_id' => '34',
        ],
        1198 => [
            'arName' => 'دلس',
            'name' => 'Dellys',
            'wilaya_id' => '35',
        ],
        1199 => [
            'arName' => 'الثنية',
            'name' => 'Thenia',
            'wilaya_id' => '35',
        ],
        1200 => [
            'arName' => 'بغلية',
            'name' => 'Baghlia',
            'wilaya_id' => '35',
        ],
        1203 => [
            'arName' => 'برج منايل',
            'name' => 'Bordj Menaiel',
            'wilaya_id' => '35',
        ],
        1204 => [
            'arName' => 'بودواو',
            'name' => 'Boudouaou',
            'wilaya_id' => '35',
        ],
        1206 => [
            'arName' => 'بومرداس',
            'name' => 'Boumerdes',
            'wilaya_id' => '35',
        ],
        1208 => [
            'arName' => 'يسر',
            'name' => 'Isser',
            'wilaya_id' => '35',
        ],
        1213 => [
            'arName' => 'خميس الخشنة',
            'name' => 'Khemis El Khechna',
            'wilaya_id' => '35',
        ],
        1218 => [
            'arName' => 'الناصرية',
            'name' => 'Naciria',
            'wilaya_id' => '35',
        ],
        1230 => [
            'arName' => 'الطارف',
            'name' => 'El Tarf',
            'wilaya_id' => '36',
        ],
        1231 => [
            'arName' => 'بوحجار',
            'name' => 'Bouhadjar',
            'wilaya_id' => '36',
        ],
        1232 => [
            'arName' => 'البسباس',
            'name' => 'Besbes',
            'wilaya_id' => '36',
        ],
        1233 => [
            'arName' => 'بن مهيدي',
            'name' => 'Ben M\'hidi',
            'wilaya_id' => '36',
        ],
        1238 => [
            'arName' => 'بوثلجة',
            'name' => 'Bouteldja',
            'wilaya_id' => '36',
        ],
        1239 => [
            'arName' => 'الذرعان',
            'name' => 'Drean',
            'wilaya_id' => '36',
        ],
        1244 => [
            'arName' => 'القالة',
            'name' => 'El Kala',
            'wilaya_id' => '36',
        ],
        1254 => [
            'arName' => 'تندوف',
            'name' => 'Tindouf',
            'wilaya_id' => '37',
        ],
        1256 => [
            'arName' => 'عماري',
            'name' => 'Ammari',
            'wilaya_id' => '38',
        ],
        1257 => [
            'arName' => 'برج بونعامة',
            'name' => 'Bordj Bounaama',
            'wilaya_id' => '38',
        ],
        1260 => [
            'arName' => 'برج الأمير عبد القادر',
            'name' => 'Bordj Emir Abdelkader',
            'wilaya_id' => '38',
        ],
        1261 => [
            'arName' => 'الأزهرية',
            'name' => 'Lazharia',
            'wilaya_id' => '38',
        ],
        1262 => [
            'arName' => 'خميستي',
            'name' => 'Khemisti',
            'wilaya_id' => '38',
        ],
        1264 => [
            'arName' => 'لرجام',
            'name' => 'Lardjem',
            'wilaya_id' => '38',
        ],
        1269 => [
            'arName' => 'تيسمسيلت',
            'name' => 'Tissemsilt',
            'wilaya_id' => '38',
        ],
        1271 => [
            'arName' => 'ثنية الاحد',
            'name' => 'Theniet El Had',
            'wilaya_id' => '38',
        ],
        1278 => [
            'arName' => 'البياضة',
            'name' => 'Bayadha',
            'wilaya_id' => '39',
        ],
        1279 => [
            'arName' => 'الطالب العربي',
            'name' => 'Taleb Larbi',
            'wilaya_id' => '39',
        ],
        1280 => [
            'arName' => 'الدبيلة',
            'name' => 'Debila',
            'wilaya_id' => '39',
        ],
        1281 => [
            'arName' => 'جامعة',
            'name' => 'Djamaa',
            'wilaya_id' => '57',
        ],
        1283 => [
            'arName' => 'الرباح',
            'name' => 'Robbah',
            'wilaya_id' => '39',
        ],
        1284 => [
            'arName' => 'المغير',
            'name' => 'El Meghaier',
            'wilaya_id' => '57',
        ],
        1285 => [
            'arName' => 'الوادي',
            'name' => 'El Oued',
            'wilaya_id' => '39',
        ],
        1286 => [
            'arName' => 'قمار',
            'name' => 'Guemar',
            'wilaya_id' => '39',
        ],
        1287 => [
            'arName' => 'الرقيبة',
            'name' => 'Reguiba',
            'wilaya_id' => '39',
        ],
        1289 => [
            'arName' => 'حاسي خليفة',
            'name' => 'Hassi Khalifa',
            'wilaya_id' => '39',
        ],
        1291 => [
            'arName' => 'المقرن',
            'name' => 'Magrane',
            'wilaya_id' => '39',
        ],
        1292 => [
            'arName' => 'اميه وانسة',
            'name' => 'Mih Ouensa',
            'wilaya_id' => '39',
        ],
        1308 => [
            'arName' => 'عين الطويلة',
            'name' => 'Ain Touila',
            'wilaya_id' => '40',
        ],
        1309 => [
            'arName' => 'بابار',
            'name' => 'Babar',
            'wilaya_id' => '40',
        ],
        1310 => [
            'arName' => 'الحامة',
            'name' => 'El Hamma',
            'wilaya_id' => '40',
        ],
        1311 => [
            'arName' => 'بوحمامة',
            'name' => 'Bouhmama',
            'wilaya_id' => '40',
        ],
        1312 => [
            'arName' => 'ششار',
            'name' => 'Chechar',
            'wilaya_id' => '40',
        ],
        1316 => [
            'arName' => 'أولاد رشاش',
            'name' => 'Ouled Rechache',
            'wilaya_id' => '40',
        ],
        1319 => [
            'arName' => 'قايس',
            'name' => 'Kais',
            'wilaya_id' => '40',
        ],
        1320 => [
            'arName' => 'خنشلة',
            'name' => 'Khenchela',
            'wilaya_id' => '40',
        ],
        1329 => [
            'arName' => 'سدراتة',
            'name' => 'Sedrata',
            'wilaya_id' => '41',
        ],
        1330 => [
            'arName' => 'أولاد إدريس',
            'name' => 'Ouled Driss',
            'wilaya_id' => '41',
        ],
        1331 => [
            'arName' => 'بئر بوحوش',
            'name' => 'Bir Bouhouche',
            'wilaya_id' => '41',
        ],
        1332 => [
            'arName' => 'تاورة',
            'name' => 'Taoura',
            'wilaya_id' => '41',
        ],
        1333 => [
            'arName' => 'الحدادة',
            'name' => 'Haddada',
            'wilaya_id' => '41',
        ],
        1334 => [
            'arName' => 'المشروحة',
            'name' => 'Mechroha',
            'wilaya_id' => '41',
        ],
        1338 => [
            'arName' => 'مداوروش',
            'name' => 'M\'daourouche',
            'wilaya_id' => '41',
        ],
        1339 => [
            'arName' => 'المراهنة',
            'name' => 'Merahna',
            'wilaya_id' => '41',
        ],
        1340 => [
            'arName' => 'أم العظايم',
            'name' => 'Oum El Adhaim',
            'wilaya_id' => '41',
        ],
        1349 => [
            'arName' => 'سوق أهراس',
            'name' => 'Souk Ahras',
            'wilaya_id' => '41',
        ],
        1355 => [
            'arName' => 'قوراية',
            'name' => 'Gouraya',
            'wilaya_id' => '42',
        ],
        1356 => [
            'arName' => 'أحمر العين',
            'name' => 'Ahmar El Ain',
            'wilaya_id' => '42',
        ],
        1357 => [
            'arName' => 'بواسماعيل',
            'name' => 'Bou Ismail',
            'wilaya_id' => '42',
        ],
        1358 => [
            'arName' => 'القليعة',
            'name' => 'Kolea',
            'wilaya_id' => '42',
        ],
        1359 => [
            'arName' => 'الداموس',
            'name' => 'Damous',
            'wilaya_id' => '42',
        ],
        1364 => [
            'arName' => 'شرشال',
            'name' => 'Cherchell',
            'wilaya_id' => '42',
        ],
        1366 => [
            'arName' => 'فوكة',
            'name' => 'Fouka',
            'wilaya_id' => '42',
        ],
        1369 => [
            'arName' => 'حجوط',
            'name' => 'Hadjout',
            'wilaya_id' => '42',
        ],
        1374 => [
            'arName' => 'سيدي أعمر',
            'name' => 'Sidi Amar',
            'wilaya_id' => '42',
        ],
        1382 => [
            'arName' => 'تيبازة',
            'name' => 'Tipaza',
            'wilaya_id' => '42',
        ],
        1383 => [
            'arName' => 'وادي النجاء',
            'name' => 'Oued Endja',
            'wilaya_id' => '43',
        ],
        1384 => [
            'arName' => 'عين البيضاء أحريش',
            'name' => 'Ain Beida Harriche',
            'wilaya_id' => '43',
        ],
        1385 => [
            'arName' => 'شلغوم العيد',
            'name' => 'Chelghoum Laid',
            'wilaya_id' => '43',
        ],
        1386 => [
            'arName' => 'ميلة',
            'name' => 'Mila',
            'wilaya_id' => '43',
        ],
        1387 => [
            'arName' => 'ترعي باينان',
            'name' => 'Terrai Bainen',
            'wilaya_id' => '43',
        ],
        1388 => [
            'arName' => 'تاجنانت',
            'name' => 'Tadjenanet',
            'wilaya_id' => '43',
        ],
        1389 => [
            'arName' => 'بوحاتم',
            'name' => 'Bouhatem',
            'wilaya_id' => '43',
        ],
        1391 => [
            'arName' => 'سيدي مروان',
            'name' => 'Sidi Merouane',
            'wilaya_id' => '43',
        ],
        1394 => [
            'arName' => 'التلاغمة',
            'name' => 'Teleghma',
            'wilaya_id' => '43',
        ],
        1395 => [
            'arName' => 'فرجيوة',
            'name' => 'Ferdjioua',
            'wilaya_id' => '43',
        ],
        1396 => [
            'arName' => 'القرارم قوقة',
            'name' => 'Grarem Gouga',
            'wilaya_id' => '43',
        ],
        1399 => [
            'arName' => 'تسدان حدادة',
            'name' => 'Tassadane Haddada',
            'wilaya_id' => '43',
        ],
        1404 => [
            'arName' => 'الرواشد',
            'name' => 'Rouached',
            'wilaya_id' => '43',
        ],
        1415 => [
            'arName' => 'حمام ريغة',
            'name' => 'Hammam Righa',
            'wilaya_id' => '44',
        ],
        1416 => [
            'arName' => 'العبادية',
            'name' => 'El Abadia',
            'wilaya_id' => '44',
        ],
        1417 => [
            'arName' => 'عين الدفلى',
            'name' => 'Ain Defla',
            'wilaya_id' => '44',
        ],
        1418 => [
            'arName' => 'عين الاشياخ',
            'name' => 'Ain Lechiakh',
            'wilaya_id' => '44',
        ],
        1421 => [
            'arName' => 'العامرة',
            'name' => 'El Amra',
            'wilaya_id' => '44',
        ],
        1422 => [
            'arName' => 'جندل',
            'name' => 'Djendel',
            'wilaya_id' => '44',
        ],
        1423 => [
            'arName' => 'بطحية',
            'name' => 'Bathia',
            'wilaya_id' => '44',
        ],
        1425 => [
            'arName' => 'مليانة',
            'name' => 'Miliana',
            'wilaya_id' => '44',
        ],
        1426 => [
            'arName' => 'برج الأمير خالد',
            'name' => 'Bordj El Emir Khaled',
            'wilaya_id' => '44',
        ],
        1428 => [
            'arName' => 'بومدفع',
            'name' => 'Boumedfaa',
            'wilaya_id' => '44',
        ],
        1429 => [
            'arName' => 'جليدة',
            'name' => 'Djelida',
            'wilaya_id' => '44',
        ],
        1435 => [
            'arName' => 'العطاف',
            'name' => 'El Attaf',
            'wilaya_id' => '44',
        ],
        1436 => [
            'arName' => 'الروينة',
            'name' => 'Rouina',
            'wilaya_id' => '44',
        ],
        1440 => [
            'arName' => 'خميس',
            'name' => 'Khemis',
            'wilaya_id' => '44',
        ],
        1451 => [
            'arName' => 'المشرية',
            'name' => 'Mecheria',
            'wilaya_id' => '45',
        ],
        1452 => [
            'arName' => 'عين الصفراء',
            'name' => 'Ain Sefra',
            'wilaya_id' => '45',
        ],
        1453 => [
            'arName' => 'عسلة',
            'name' => 'Asla',
            'wilaya_id' => '45',
        ],
        1454 => [
            'arName' => 'مغرار',
            'name' => 'Moghrar',
            'wilaya_id' => '45',
        ],
        1456 => [
            'arName' => 'مكمن بن عمار',
            'name' => 'Mekmen Ben Amar',
            'wilaya_id' => '45',
        ],
        1460 => [
            'arName' => 'النعامة',
            'name' => 'Naama',
            'wilaya_id' => '45',
        ],
        1461 => [
            'arName' => 'سفيسيفة',
            'name' => 'Sfissifa',
            'wilaya_id' => '45',
        ],
        1463 => [
            'arName' => 'عين الكيحل',
            'name' => 'Ain Kihel',
            'wilaya_id' => '46',
        ],
        1464 => [
            'arName' => 'عين الأربعاء',
            'name' => 'Ain Larbaa',
            'wilaya_id' => '46',
        ],
        1466 => [
            'arName' => 'عين تموشنت',
            'name' => 'Ain Temouchent',
            'wilaya_id' => '46',
        ],
        1469 => [
            'arName' => 'بني صاف',
            'name' => 'Beni Saf',
            'wilaya_id' => '46',
        ],
        1470 => [
            'arName' => 'العامرية',
            'name' => 'El Amria',
            'wilaya_id' => '46',
        ],
        1471 => [
            'arName' => 'المالح',
            'name' => 'El Maleh',
            'wilaya_id' => '46',
        ],
        1472 => [
            'arName' => 'حمام بوحجر',
            'name' => 'Hammam Bou Hadjar',
            'wilaya_id' => '46',
        ],
        1484 => [
            'arName' => 'ولهاصة الغرابة',
            'name' => 'Oulhassa Gheraba',
            'wilaya_id' => '46',
        ],
        1491 => [
            'arName' => 'بريان',
            'name' => 'Berriane',
            'wilaya_id' => '47',
        ],
        1492 => [
            'arName' => 'بونورة',
            'name' => 'Bounoura',
            'wilaya_id' => '47',
        ],
        1493 => [
            'arName' => 'ضاية بن ضحوة',
            'name' => 'Dhayet Ben Dhahoua',
            'wilaya_id' => '47',
        ],
        1495 => [
            'arName' => 'المنيعة',
            'name' => 'El Menia',
            'wilaya_id' => '58',
        ],
        1496 => [
            'arName' => 'غرداية',
            'name' => 'Ghardaia',
            'wilaya_id' => '47',
        ],
        1497 => [
            'arName' => 'القرارة',
            'name' => 'El Guerrara',
            'wilaya_id' => '47',
        ],
        1498 => [
            'arName' => 'المنصورة',
            'name' => 'Mansourah',
            'wilaya_id' => '58',
        ],
        1500 => [
            'arName' => 'المنصورة',
            'name' => 'Mansourah',
            'wilaya_id' => '47',
        ],
        1501 => [
            'arName' => 'متليلي',
            'name' => 'Metlili',
            'wilaya_id' => '47',
        ],
        1503 => [
            'arName' => 'زلفانة',
            'name' => 'Zelfana',
            'wilaya_id' => '47',
        ],
        1504 => [
            'arName' => 'يلل',
            'name' => 'Yellel',
            'wilaya_id' => '48',
        ],
        1505 => [
            'arName' => 'عين طارق',
            'name' => 'Ain Tarek',
            'wilaya_id' => '48',
        ],
        1506 => [
            'arName' => 'عمي موسى',
            'name' => 'Ammi Moussa',
            'wilaya_id' => '48',
        ],
        1507 => [
            'arName' => 'المطمر',
            'name' => 'El Matmar',
            'wilaya_id' => '48',
        ],
        1508 => [
            'arName' => 'غليزان',
            'name' => 'Relizane',
            'wilaya_id' => '48',
        ],
        1509 => [
            'arName' => 'زمورة',
            'name' => 'Zemmoura',
            'wilaya_id' => '48',
        ],
        1510 => [
            'arName' => 'سيدي أمحمد بن علي',
            'name' => 'Sidi M\'hamed Ben Ali',
            'wilaya_id' => '48',
        ],
        1512 => [
            'arName' => 'جديوية',
            'name' => 'Djidiouia',
            'wilaya_id' => '48',
        ],
        1514 => [
            'arName' => 'الحمادنة',
            'name' => 'El H\'madna',
            'wilaya_id' => '48',
        ],
        1516 => [
            'arName' => 'مازونة',
            'name' => 'Mazouna',
            'wilaya_id' => '48',
        ],
        1521 => [
            'arName' => 'وادي رهيو',
            'name' => 'Oued Rhiou',
            'wilaya_id' => '48',
        ],
        1524 => [
            'arName' => 'منداس',
            'name' => 'Mendes',
            'wilaya_id' => '48',
        ],
        1532 => [
            'arName' => 'الرمكة',
            'name' => 'Ramka',
            'wilaya_id' => '48',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->dairas as $key => $daira) {
            DB::table('dairas')->insert([
                'id' => $key,
                'name' => $daira['name'],
                'arName' => $daira['arName'],
                'wilaya_id' => $daira['wilaya_id'],
            ]);
        }
    }
}
