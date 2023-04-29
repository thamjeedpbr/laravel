<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateDocs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
    public function pending()
    {
        return view('Super.Candidate.pending');
    }
    public function approved()
    {
        return view('Super.Candidate.approved');
    }
    public function rejected()
    {
        return view('Super.Candidate.rejected');
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
                ->addColumn('fullname', function (Candidate $candidate) {
                    $data = '<a href="' . route('candidate.show', $candidate->id) . '">
               ' . $candidate->fullname . ' </a>';
                    return $data;
                })
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
                ->escapeColumns([])->addIndexColumn()->make(true)

            ;

        }
    }
    public function GetPendingCandidateAjax(Request $request)
    {
        if ($request->ajax()) {
            $candidate = Candidate::orderby('id', 'desc')->where('status', 0)->get();
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
                ->addColumn('fullname', function (Candidate $candidate) {
                    $data = '<a href="' . route('candidate.show', $candidate->id) . '">
               ' . $candidate->fullname . ' </a>';
                    return $data;
                })
                ->addColumn('action', function (Candidate $candidate) {
                    $data = '<a href="' . route('candidate.show', $candidate->id) . '">
                    <button class="btn btn-status btn-gray-medium" style="text-decoration:none; display: inline-block; width: 30px;">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </button>
                    </a>
                    <a href="' . route('candidate.status.approve', $candidate->id) . '">
                    <button class="btn btn-success btn-gray-medium" onclick="return confirm(`Are you sure?`)" style="text-decoration:none; display: inline-block; width: 30px;">
                        <i class="fa fa-check" aria-hidden="true"></i>
                    </button>
                    </a>
                    <a href="' . route('candidate.status.reject', $candidate->id) . '">
                    <button class="btn btn-danger btn-gray-medium" onclick="return confirm(`Are you sure?`)" style="text-decoration:none; display: inline-block; width: 30px;">
                        <i class="fa fa-close" aria-hidden="true"></i>
                    </button>
                    </a>
                    ';

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
                ->escapeColumns([])->addIndexColumn()->make(true)

            ;

        }
    }
    public function GetApprovedCandidateAjax(Request $request)
    {
        if ($request->ajax()) {
            $candidate = Candidate::orderby('id', 'desc')->where('status', 1)->get();
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
                ->addColumn('fullname', function (Candidate $candidate) {
                    $data = '<a href="' . route('candidate.show', $candidate->id) . '">
               ' . $candidate->fullname . ' </a>';
                    return $data;
                })
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
                ->escapeColumns([])->addIndexColumn()->make(true)

            ;

        }
    }
    public function GetRejectedCandidateAjax(Request $request)
    {
        if ($request->ajax()) {
            $candidate = Candidate::orderby('id', 'desc')->where('status', 2)->get();
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
                ->addColumn('fullname', function (Candidate $candidate) {
                    $data = '<a href="' . route('candidate.show', $candidate->id) . '">
               ' . $candidate->fullname . ' </a>';
                    return $data;
                })
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
                ->escapeColumns([])->addIndexColumn()->make(true)

            ;

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
        $CandidateDocs = CandidateDocs::where('candidate_id', $candidate->id)->get();
        return view('Super.Candidate.show')->with(compact('candidate', 'CandidateDocs'));
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
            if ($candidate->status = 1) {
                User::where('candidate_id', $id)->delete();
            }
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
    public function approve_candidate($id)
    {
        $candidate = Candidate::find($id);
        if ($candidate) {
            $user = User::where('candidate_id', $id)->exists();
            if ($user) {
                return redirect()->back()->with('error', 'Candidate Already  Approved');
            }
            $user1 = User::where('email', $candidate->email)->exists();
            if ($user1) {
                return redirect()->back()->with('error', 'Candidate Email is Already Used');
            }
            DB::beginTransaction();
            $password = "password";
            // $password = random_int(100000, 999999);
            $user = new User();
            $user->name = $candidate->fullname;
            $user->candidate_id = $id;
            $user->email = $candidate->email;
            $user->phone = $candidate->phone;
            $user->password = Hash::make($password);
            $user->type = "candidate";
            if (!$user->save()) {
                DB::rollback();
                return redirect()->back()->with('error', 'Try again');
            }
            $candidate->user_id = $user->id;
            $candidate->status = 1;
            if ($candidate->save()) {
                // $email = new WelcomeMail($user, $password);
                // $status = Mail::to($user->email)->send($email);
                DB::commit();
                return redirect()->back()->with('success', 'candidate successfully Approved');
            } else {
                DB::rollback();
                return redirect()->back()->with('error', 'Try again');
            }
        } else {
            return redirect()->back()->with('error', 'candidate not found');
        }

    }
    public function reject_candidate($id)
    {
        $candidate = Candidate::find($id);
        if ($candidate) {
            $candidate->status = 2;
            $candidate->save();
            return redirect()->back()->with('success', 'candidate successfully Rejected.');
        } else {
            return redirect()->back()->with('error', 'candidate not found');
        }
    }

    public function DocsDelete($id)
    {
        $CandidateDocs = CandidateDocs::find($id);
        if ($CandidateDocs) {
            @unlink('candidateDocs/' . $CandidateDocs->link);
            $CandidateDocs->delete();
            return redirect()->back()->with('success', 'Document successfully Removed.');
        } else {
            return redirect()->back()->with('error', 'Try again');
        }

    }
    public function DocsUpload(Request $request)
    {
        $request->validate([
            'docs.*' => 'nullable|mimes:pdf,jpg,jpeg,png|max:2048',
            'name.*' => 'required',
            'candidate_id' => 'required',
        ]);
        try {
            $candidate = Candidate::find($request->candidate_id);
            if ($candidate->docs_status == 1) {
                $candidate->immigration_advise = $request->immigration_advise;
                $candidate->airport_accommodation = $request->airport_accommodation;
                $candidate->feedback = $request->feedback;
                $candidate->save();
            }
            // dd($request->all());
            foreach ($request->name as $key => $name) {
                if (isset($request->docs[$key])) {
                    $docs = $request->docs[$key];
                    if ($docs->getType() == "file") {
                        $fileName = str_replace(' ', '-', $name) . '-' . $request->candidate_id . '.' . $docs->extension();
                        $path = asset('candidateDocs/' . $fileName);
                        $CandidateDocs = CandidateDocs::where('candidate_id', $request->candidate_id)->where('name', $name)->first();
                        if (!$CandidateDocs) {
                            $CandidateDocs = new CandidateDocs();
                        }
                        $CandidateDocs->name = $name;
                        // $CandidateDocs->comment = $request->comment[$key];
                        $CandidateDocs->link = $fileName;
                        $CandidateDocs->candidate_id = $request->candidate_id;
                        if ($CandidateDocs->save()) {
                            $docs->move('candidateDocs/', $fileName);
                        } else {
                            return redirect()->back()->with('error', 'Try again');
                        }
                    }
                }
            }
            return redirect()->back()->with('success', 'Document successfully Uploaded.');

        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }

    }
    public function CandidateDocsStatus(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'candidate_id' => 'required',
        ]);
        $Candidate = Candidate::where('id', $request->candidate_id)->first();
        if (isset($request->docs_status)) {
            $Candidate->docs_status = 1;
        } else {
            $Candidate->docs_status = 0;
        }

        $Candidate->docs_comments = $request->docs_comments;
        $Candidate->save();
        return redirect()->back()->with('success', 'Document Status successfully Updated.');

    }

}
