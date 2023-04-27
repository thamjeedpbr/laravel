<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Super.Candidate.index');
    }
    public function GetAllcandidateAjax(Request $request)
    {
        if ($request->ajax()) {

            $candidate = Candidate::orderby('id', 'desc')->get();
            return datatables()->of($candidate)
            // ->setRowClass(function (Candidate $candidate) {
            //     switch ($candidate->label_type) {
            //         case 'win':
            //             $color = "alert-success";
            //             break;
            //         case 'loss':
            //             $color = "alert-danger";
            //             break;
            //         case 'pending':
            //             $color = "alert-warning";
            //             break;
            //         default:
            //             $color = null;
            //             break;
            //     }
            //     return $color;
            // },
            // )
                ->addColumn('action', function (Candidate $candidate) {
                    $data = '<a href="' . route('candidate.show', $candidate->id) . '">
                    <button class="btn btn-status btn-gray-medium" style="text-decoration:none; display: inline-block; width: 30px;">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                    </a>
                    <a href="' . route('candidate.delete', $candidate->id) . '">
                    <button class="btn btn-danger btn-gray-medium" onclick="return confirm(`Are you sure?`)" style="text-decoration:none; display: inline-block; width: 30px;">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                    </a>';

                    return $data;
                })
            // ->addColumn('label_dropdown', function (candidate $candidate) use ($candidateLabel) {
            //     $data1 = (string) '<select class="form-control candidate-label" candidate_id='.$candidate->id.' id="label" name"label">';
            //     $data3 = "<option>Select One</option>";
            //     foreach ($candidateLabel as $label) {
            //         if ($candidate->label == $label->id) {
            //             $data2 = '<option  value=' . $label->id . ' selected >' . $label->name . '</option>`';
            //         } else {
            //             $data2 = '<option  value=' . $label->id . '>' . $label->name . '</option>`';
            //         }
            //         $data3 = $data3 . $data2;
            //     }
            //     $data4 = '</select> ';
            //     $data = (string) $data1 . (string) $data3 . (string) $data4;
            //     return $data;

            // })
                ->addColumn('created_at', function (Candidate $candidate) {
                    $data = date('Y-m-d H:i:A', strtotime($candidate->created_at));
                    return $data;
                })
                ->escapeColumns([])->addIndexColumn()->make(true);

        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $candidate = Candidate::find($id);
        return view('Super.Candidate.show')->with(compact('candidate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'label' => 'required',
        ]);
        $candidate = Candidate::find($id);
        $candidate->label = $request->label;
        $candidate->remark = $request->remark;
        $candidate->save();
        return redirect()->route('candidate.index')->with('success', 'candidate successfully Updated.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $candidate = Candidate::find($id);
        if ($candidate) {
            $candidate->delete();
            return redirect()->back()->with('success', 'candidate successfully Removed.');
        } else {
            return redirect()->back()->with('error', 'Try again');
        }

    }
    public function changeLabel(Request $request)
    {
        $candidate = Candidate::find($request->candidate_id);
        $candidate->label = $request->value;
        if ($candidate->save()) {
            return "true";
        }
        return "false";

    }

}
