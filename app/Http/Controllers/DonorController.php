<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonorRequest;
use App\Models\BloodGroup;
use App\Models\Daira;
use App\Models\User;
use App\Models\Wilaya;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index(Request $request)
    {
        $request->flush();

        return view('pages.donors', ['allReadyToGiveDonors' => User::getAllReadyToGiveDonors()]);
    }


    public function search(DonorRequest $request)
    {
        $request->flash();

        $donors = User::with('wilaya', 'daira', 'bloodGroup')
            ->filter(request(['blood_group', 'wilaya', 'daira']))
            ->where('readyToGive', 1)
            ->inRandomOrder()
            ->paginate(10);

        return view('pages.donors', [
            'searchedBloodGroup' => BloodGroup::find($request['blood_group'])->bloodGroup,
            'searchedWilaya' => Wilaya::find($request['wilaya'])?->name,
            'searchedDaira' => Daira::find($request['daira'])?->name,
            'donors' => $donors,
            'otherDonors' => User::getOtherDonorsCanDonateTo($request['blood_group'], $request['wilaya'], $request['daira']),
        ]);

    }
}
