<?php

namespace App\Http\Controllers;

use App\Models\Baladia;
use App\Models\BloodGroup;
use App\Models\User;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index(Request $request)
    {
        $request->flush();

        $donors = User::with('baladia', 'bloodGroup')
            ->filter(request(['blood_group', 'baladia']))
            ->where('readyToGive', 1)
            ->inRandomOrder()
            ->paginate(10);

        return view('pages.donors', [
            'donors' => $donors,
            'searchedBloodGroup' => BloodGroup::find($request['blood_group'])?->bloodGroup,
            'searchedBaladia' => Baladia::find($request['baladia'])?->name,
            'otherDonors' => User::getOtherDonorsCanDonateTo($request['blood_group'], $request['baladia']),
        ]);
    }
}
