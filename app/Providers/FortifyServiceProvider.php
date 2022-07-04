<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Actions\Fortify\UserLogin;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Laravel\Fortify\Contracts\LogoutResponse;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Fortify::ignoreRoutes();

        // Customize redirect after logout
        $this->app->instance(LogoutResponse::class, new class implements LogoutResponse {
            public function toResponse($request)
            {
                return redirect('/'.LaravelLocalization::getCurrentLocale());
            }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        // Custom authentication behaviour - The user can now auth using his email or his phone number.
        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->username)
                          ->orWhere('phone', $request->username)
                          ->first();

            if ($user &&
                Hash::check($request->password, $user->password)) {
                return $user;
            }
        });

        // Views
        Fortify::loginView(function () {
            return view('pages.auth.login');
        });

        Fortify::registerView(function () {

            $wilayas = [
                [
                    "id" => "1",
                    "name" => "Adrar",
                    "arName" => "أدرار"
                ],
                [
                    "id" => "2",
                    "name" => "Chlef",
                    "arName" => "الشلف"
                ],
                [
                    "id" => "3",
                    "name" => "Laghouat",
                    "arName" => "الأغواط"
                ],
                [
                    "id" => "4",
                    "name" => "Oum El Bouaghi",
                    "arName" => "أم البواقي"
                ],
                [
                    "id" => "5",
                    "name" => "Batna",
                    "arName" => "باتنة"
                ],
                [
                    "id" => "6",
                    "name" => "Béjaïa",
                    "arName" => "بجاية"
                ],
                [
                    "id" => "7",
                    "name" => "Biskra",
                    "arName" => "بسكرة"
                ],
                [
                    "id" => "8",
                    "name" => "Bechar",
                    "arName" => "بشار"
                ],
                [
                    "id" => "9",
                    "name" => "Blida",
                    "arName" => "البليدة"
                ],
                [
                    "id" => "10",
                    "name" => "Bouira",
                    "arName" => "البويرة"
                ],
                [
                    "id" => "11",
                    "name" => "Tamanrasset",
                    "arName" => "تمنراست"
                ],
                [
                    "id" => "12",
                    "name" => "Tbessa",
                    "arName" => "تبسة"
                ],
                [
                    "id" => "13",
                    "name" => "Tlemcen",
                    "arName" => "تلمسان"
                ],
                [
                    "id" => "14",
                    "name" => "Tiaret",
                    "arName" => "تيارت"
                ],
                [
                    "id" => "15",
                    "name" => "Tizi Ouzou",
                    "arName" => "تيزي وزو"
                ],
                [
                    "id" => "16",
                    "name" => "Alger",
                    "arName" => "الجزائر"
                ],
                [
                    "id" => "17",
                    "name" => "Djelfa",
                    "arName" => "الجلفة"
                ],
                [
                    "id" => "18",
                    "name" => "Jijel",
                    "arName" => "جيجل"
                ],
                [
                    "id" => "19",
                    "name" => "Se9tif",
                    "arName" => "سطيف"
                ],
                [
                    "id" => "20",
                    "name" => "Saefda",
                    "arName" => "سعيدة"
                ],
                [
                    "id" => "21",
                    "name" => "Skikda",
                    "arName" => "سكيكدة"
                ],
                [
                    "id" => "22",
                    "name" => "Sidi Bel Abbes",
                    "arName" => "سيدي بلعباس"
                ],
                [
                    "id" => "23",
                    "name" => "Annaba",
                    "arName" => "عنابة"
                ],
                [
                    "id" => "24",
                    "name" => "Guelma",
                    "arName" => "قالمة"
                ],
                [
                    "id" => "25",
                    "name" => "Constantine",
                    "arName" => "قسنطينة"
                ],
                [
                    "id" => "26",
                    "name" => "Medea",
                    "arName" => "المدية"
                ],
                [
                    "id" => "27",
                    "name" => "Mostaganem",
                    "arName" => "مستغانم"
                ],
                [
                    "id" => "28",
                    "name" => "M'Sila",
                    "arName" => "المسيلة"
                ],
                [
                    "id" => "29",
                    "name" => "Mascara",
                    "arName" => "معسكر"
                ],
                [
                    "id" => "30",
                    "name" => "Ouargla",
                    "arName" => "ورقلة"
                ],
                [
                    "id" => "31",
                    "name" => "Oran",
                    "arName" => "وهران"
                ],
                [
                    "id" => "32",
                    "name" => "El Bayadh",
                    "arName" => "البيض"
                ],
                [
                    "id" => "33",
                    "name" => "Illizi",
                    "arName" => "إليزي"
                ],
                [
                    "id" => "34",
                    "name" => "Bordj Bou Arreridj",
                    "arName" => "برج بوعريريج"
                ],
                [
                    "id" => "35",
                    "name" => "Boumerdes",
                    "arName" => "بومرداس"
                ],
                [
                    "id" => "36",
                    "name" => "El Tarf",
                    "arName" => "الطارف"
                ],
                [
                    "id" => "37",
                    "name" => "Tindouf",
                    "arName" => "تندوف"
                ],
                [
                    "id" => "38",
                    "name" => "Tissemsilt",
                    "arName" => "تيسمسيلت"
                ],
                [
                    "id" => "39",
                    "name" => "El Oued",
                    "arName" => "الوادي"
                ],
                [
                    "id" => "40",
                    "name" => "Khenchela",
                    "arName" => "خنشلة"
                ],
                [
                    "id" => "41",
                    "name" => "Souk Ahras",
                    "arName" => "سوق أهراس"
                ],
                [
                    "id" => "42",
                    "name" => "Tipaza",
                    "arName" => "تيبازة"
                ],
                [
                    "id" => "43",
                    "name" => "Mila",
                    "arName" => "ميلة"
                ],
                [
                    "id" => "44",
                    "name" => "Ain Defla",
                    "arName" => "عين الدفلى"
                ],
                [
                    "id" => "45",
                    "name" => "Naama",
                    "arName" => "النعامة"
                ],
                [
                    "id" => "46",
                    "name" => "Ain Temouchent",
                    "arName" => "عين تموشنت"
                ],
                [
                    "id" => "47",
                    "name" => "Ghardaefa",
                    "arName" => "غرداية"
                ],
                [
                    "id" => "48",
                    "name" => "Relizane",
                    "arName" => "غليزان"
                ],
                [
                    "id" => "49",
                    "name" => "El M'ghair",
                    "arName" => "المغير"
                ],
                [
                    "id" => "50",
                    "name" => "El Menia",
                    "arName" => "المنيعة"
                ],
                [
                    "id" => "51",
                    "name" => "Ouled Djellal",
                    "arName" => "أولاد جلال"
                ],
                [
                    "id" => "52",
                    "name" => "Bordj Baji Mokhtar",
                    "arName" => "برج باجي مختار"
                ],
                [
                    "id" => "53",
                    "name" => "Béni Abbès",
                    "arName" => "بني عباس"
                ],
                [
                    "id" => "54",
                    "name" => "Timimoun",
                    "arName" => "تيميمون"
                ],
                [
                    "id" => "55",
                    "name" => "Touggourt",
                    "arName" => "تقرت"
                ],
                [
                    "id" => "56",
                    "name" => "Djanet",
                    "arName" => "جانت"
                ],
                [
                    "id" => "57",
                    "name" => "In Salah",
                    "arName" => "عين صالح"
                ],
                [
                    "id" => "58",
                    "name" => "In Guezzam",
                    "arName" => "عين قزام"
                ]
            ];
            $wilayaNameInCorrectLanguage = LaravelLocalization::getCurrentLocale() === 'ar' ? 'arName' : 'name';

            return view('pages.auth.register', ["wilayas" => $wilayas, "wilayaName" => $wilayaNameInCorrectLanguage]);
        });

        Fortify::requestPasswordResetLinkView(function () {
            return view('pages.auth.forgot-password');
        });

        Fortify::resetPasswordView(function ($request) {
            return view('pages.auth.reset-password', ['request' => $request]);
        });


        // Rate limiters
        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(5)->by($email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}
