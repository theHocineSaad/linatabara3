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

        if ($request->filled(['wilaya', 'daira'])) { // blood group will also be filled because of the validation (DonorRequest $request)
            $donors = User::getDonors('phone', [
                'blood_group' => $request['blood_group'],
                'wilaya' => $request['wilaya'],
                'daira' => $request['daira'],
            ]);
            $otherDonors = User::getOtherDonorsCanDonateTo($request['blood_group'], $request['wilaya'], $request['daira']);

            return view('pages.donors', [
                'searchedBloodGroup' => BloodGroup::find($request['blood_group'])->bloodGroup,
                'searchedWilaya' => Wilaya::find($request['wilaya'])->name,
                'searchedDaira' => Daira::find($request['daira'])->name,
                'donors' => $donors,
                'otherDonors' => $otherDonors,
            ]);
        } elseif ($request->filled(['wilaya'])) { // blood group will also be filled because of the validation (DonorRequest $request)
            $donors = User::getDonorsInWilaya([
                'blood_group' => $request['blood_group'],
                'wilaya' => $request['wilaya'],
            ]);
            $otherDonors = User::getOtherDonorsCanDonateTo($request['blood_group'], $request['wilaya']);

            return view('pages.donors', [
                'searchedBloodGroup' => BloodGroup::find($request['blood_group'])->bloodGroup,
                'searchedWilaya' => Wilaya::find($request['wilaya'])->name,
                'donors' => $donors,
                'otherDonors' => $otherDonors,
            ]);
        } else {
            $donors = User::getDonorsHaveBloodGroup($request['blood_group']);
            $otherDonors = User::getOtherDonorsCanDonateTo($request['blood_group']);

            return view('pages.donors', [
                'searchedBloodGroup' => BloodGroup::find($request['blood_group'])->bloodGroup,
                'donors' => $donors,
                'otherDonors' => $otherDonors,
            ]);
        }
    }
}
