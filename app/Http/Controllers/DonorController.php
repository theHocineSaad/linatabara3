<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonorRequest;
use App\Models\BloodGroup;
use App\Models\Daira;
use App\Models\User;
use App\Models\Wilaya;

class DonorController extends Controller
{
    public function index()
    {
        return view('pages.donors');
    }

    public function search(DonorRequest $request)
    {
        $donors = User::getDonors('phone', [
            'blood_group' => $request['blood_group'],
            'wilaya' => $request['wilaya'],
            'daira' => $request['daira'],
        ]);

        return view('pages.donors', [
            'searchedBloodGroup' => BloodGroup::select('bloodGroup')->find($request['blood_group']),
            'searchedWilaya' => Wilaya::select('name')->find($request['wilaya']),
            'searchedDaira' => Daira::select('name')->find($request['daira']),
            'donors' => $donors,
        ]);
    }
}
