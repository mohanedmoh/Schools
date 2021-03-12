<?php

namespace App\Http\Controllers\Setting\General;

use App\Http\Controllers\Controller;
use App\Setting\General\Study_year;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Study_years extends Controller
{
    public function index(Study_year $s)
    {

        $study_yesrs = $s->with('status')->get();
        return view('setting.study_years.home')->with('study_years', $study_yesrs);
    }

    public function newStudyYear(Request $request)
    {

        try {
            $this->validate($request, [

                'name' => 'required',
                'from_date' => 'required',
                'to_date' => 'required',
            ]);
        } catch (ValidationException $e) {
        }
        if ($request['status'] == null) $request['status'] = 2;
        $studyYear = new Study_year();
        $studyYear->name = $request['name'];
        $studyYear->from_date = $request['from_date'];
        $studyYear->to_date = $request['to_date'];
        $studyYear->status_id = $request['status'];


        $studyYear->save();

        return redirect()->route('studyYears');
    }
}
