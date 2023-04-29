<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateDocs;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            "fullname" => "required",
            "username" => "required",
            "qualification" => "required",
            "experience" => "required",
            "OET_or_IELTS_Score" => "required",
            "CGFNS_status" => "nullable",
            "New_Zealand_nursing_council" => "required|in:Yes,No",
            "preferred_Campus" => "required",
            "Preferred_intake" => "required",
            "refereal_method" => "required",
            "Friends_Family_NZ_status" => "required|in:Yes,No",
            "Friends_Family_NZ" => "nullable",
            "Cover_letter" => "required",
            "email" => "required|email",
            "phone" => "required",
            "street_address" => "required",
            "address_line" => "required",
            "address_city" => "required",
            "address_state" => "required",
            "address_country" => "required",
            "address_zip" => "required",
            "working" => "required|in:Yes,No",
            "working_address_india" => "nullable",
        ]);

        $candidate = new Candidate();
        $candidate->fullname = $request->fullname;
        $candidate->username = $request->username;
        $candidate->qualification = $request->qualification;
        $candidate->experience = $request->experience;
        $candidate->OET_or_IELTS_Score = $request->OET_or_IELTS_Score;
        $candidate->CGFNS_status = $request->CGFNS_status;
        $candidate->New_Zealand_nursing_council = $request->New_Zealand_nursing_council;
        $candidate->preferred_Campus = $request->preferred_Campus;
        $candidate->Preferred_intake = $request->Preferred_intake;
        $candidate->refereal_method = $request->refereal_method;
        $candidate->Friends_Family_NZ_status = $request->Friends_Family_NZ_status;
        $candidate->Friends_Family_NZ = $request->Friends_Family_NZ;
        $candidate->Cover_letter = $request->Cover_letter;
        $candidate->email = $request->email;
        $candidate->phone = $request->phone;
        $candidate->street_address = $request->street_address;
        $candidate->address_line = $request->address_line;
        $candidate->address_city = $request->address_city;
        $candidate->address_state = $request->address_state;
        $candidate->address_country = $request->address_country;
        $candidate->address_zip = $request->address_zip;
        $candidate->working_address_india = $request->working_address_india;
        $candidate->working = $request->working;
        $candidate->status = 0; //pending
        $candidate->save();
        return redirect()->back()->with('success', 'Candidate successfully Registered,Check Mail for Updates');
    }
    public function dashboard()
    {
        return view('Super.dashboard');
    }
    public function candidate_dashboard()
    {
        $candidate = Candidate::where('user_id', Auth::user()->id)->first();
        $CandidateDocs = CandidateDocs::where('candidate_id', $candidate->id)->get();
        $files = File::select('name', 'value');
        if ($candidate->docs_status == 1) {
            $files = $files->where('step', 3);
        }
        else{
            $files = $files->where('step', 2);
        }
        $files = $files->get();
        return view('Candidate.dashboard')->with(compact('candidate', 'CandidateDocs', 'files'));
    }
}
